<?php

/**
  Copyright (c) 2016 VASYLTECH.COM

  Permission is hereby granted, free of charge, to any person obtaining a copy
  of this software and associated documentation files (the "Software"), to deal
  in the Software without restriction, including without limitation the rights
  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
  copies of the Software, and to permit persons to whom the Software is
  furnished to do so, subject to the following conditions:

  The above copyright notice and this permission notice shall be included in
  all copies or substantial portions of the Software.

  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
  THE SOFTWARE.
 */

/**
 * ErrorFix cron job
 * 
 * @package AAM
 * @author Vasyl Martyniuk <vasyl@vasyltech.com>
 */
class ErrorFix_Routine {

    /**
     * Server reach status
     * 
     * @var boolean
     * 
     * @access protected 
     */
    protected $pinged = false;
    
    /**
     * Execute the routine
     * 
     * Typically this function is used to execute the cron job.
     * 
     * @return void
     * 
     * @access public
     */
    public function execute() {
        ErrorFix_Storage::getInstance()->normalize();
        
        //report errors
        $this->reportErrors();
        //check for available solutions
        $this->checkReports();
        
        if (ErrorFix_Core::get('autofix')) {
            $this->patch();
        }
        
        ErrorFix_Storage::getInstance()->save();
        
        //finally ping server if not yet
        if ($this->pinged === false) {
            $this->pingServer();
        }
    }

    /**
     * Report errors
     * 
     * Get all pending errors and try to report them to the external server.
     * 
     * @return void
     * 
     * @access protected
     */
    protected function reportErrors() {
        $server = new ErrorFix_Server;
        $errors = $this->preparePendingErrors();
        
        if (count($errors)) {
            $result = $server->report(ErrorFix_Core_Option::getId(), $errors);
            
            if ($result->status == 'success') {
                $this->updateReportedErrors($result->reports);
            }
            
            //update ping flag
            $this->pinged = true;
        }
    }
    
    /**
     * 
     * @param type $reports
     */
    protected function updateReportedErrors($reports) {
        $storage = ErrorFix_Storage::getInstance();
        
        //update reports 
        foreach($reports as $report) {
            if ($error = $storage->getErrorByHash($report->hash)) {
                if (!empty($report->report)) {
                    $error->status = 'reported';
                    $error->report = $report->report;
                } else {
                    $error->status = 'failed';
                }
            }
        }
    }
    
    /**
     * 
     * @return array
     */
    protected function preparePendingErrors() {
        $errors = array();
        
        $count = 1; //add only limited number of reports
        $limit = ErrorFix_Core::get('reportLimit');
        $allow = array('analyzed', 'failed');
        
        foreach (ErrorFix_Storage::getInstance()->getErrors() as $error) {
            if (($count++ <= $limit) && in_array($error->status, $allow)) {
                $filepath = str_replace('\\', '/', $error->filepath);
                $errors[] = array(
                    'module'   => base64_encode($error->module['name']),
                    'version'  => base64_encode($error->module['version']),
                    'file'     => str_replace($error->module['path'], '', $filepath),
                    'line'     => $error->line,
                    'type'     => $error->type,
                    'message'  => base64_encode($error->message),
                    'checksum' => $error->checksum,
                    'hash'     => $error->hash,
                    'encoded'  => 1 //TODO - Remove it in API v4
                );
            }
        }
        
        return $errors;
    }

    /**
     * 
     */
    protected function checkReports() {
        $storage  = ErrorFix_Storage::getInstance();
        $queue    = $this->prepareCheckQueue();
        
        if (count($queue)) {
            $server = new ErrorFix_Server;
            $result = $server->check(ErrorFix_Core_Option::getId(), $queue);

            if ($result->status == 'success') {
                foreach($result->reports as $report) {
                    if ($error = $storage->getErrorByHash($report->hash)) {
                        $this->updateError($error, $report);
                    }
                }
            }
            
            //update ping flag
            $this->pinged = true;
        }
    }
    
    /**
     * 
     * @return type
     */
    protected function prepareCheckQueue() {
        $reports = array();
        
        $classname = ErrorFix_Core::get('storage');
        if (class_exists($classname)) {
            $queue = call_user_func("$classname::load", 'queue'); //PHP 5.2
        } else { //fallback to default storage method
            $queue = ErrorFix_Storage_File::load('queue');
        }
        
        $storage = ErrorFix_Storage::getInstance();
        
        if (empty($queue)) {
            foreach ($storage->getErrors() as $error) {
                if ($error->status == 'reported') {
                    $queue[] = $error->hash;
                }
            }
        }
        
        $count = 0;
        
        while(count($queue) && ($count++ < ErrorFix_Core::get('checkLimit'))) {
            if ($error = $storage->getErrorByHash(array_shift($queue))) {
                $reports[] = array('id' => $error->report, 'hash' => $error->hash);
            }
        }
        
        $this->saveCheckQueue($queue);
        
        return $reports;
    }
    
    /**
     * 
     * @param type $queue
     */
    protected function saveCheckQueue($queue) {
        $classname = ErrorFix_Core::get('storage');
        if (class_exists($classname)) {
            $queue = call_user_func("$classname::save", $queue, 'queue'); //PHP 5.2
        } else { //fallback to default storage method
            $queue = ErrorFix_Storage_File::save($queue, 'queue');
        }
    }
    
    /**
     * 
     * @param type $error
     * @param type $res
     */
    protected function updateError($error, $res) {
        switch ($res->status) {
            case 'resolved':
                $error->status = 'resolved';
                $error->patch  = array(
                    'id'    => $res->patch, 
                    'price' => $res->price
                );
                break;

            case 'rejected':
                $error->status = 'rejected';
                //TODO - Remove when notes is added to server side implementation
                if (isset($res->message)) {
                    ErrorFix_Note::getInstance()->addNote((object) array(
                        'message' => $res->message, 'code' => $res->code
                    ));
                    ErrorFix_Note::getInstance()->save();
                }
                break;

            default:
                break;
        }
    }
    
    /**
     * 
     */
    protected function patch(){
        $storage = ErrorFix_Storage::getInstance();
        $patcher = new ErrorFix_Patcher;
        
        $fixed = $pings = 0;
        
        foreach ($storage->getPatchList() as $patch) {
            try {
                $patcher->patch($patch);
                $fixed += $patch['errors'];
            } catch (Exception $e) {
                //do nothing
            }
            $pings++;
        }
        
        //update ping status
        $this->pinged = ($pings > 0 ? true : false);
        
        return $fixed;
    }
    
    /**
     * 
     */
    protected function pingServer() {
        $server = new ErrorFix_Server;
        $server->ping(ErrorFix_Core_Option::getId());
    }

}