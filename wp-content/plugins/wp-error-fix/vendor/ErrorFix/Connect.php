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
 * Error Fix connector
 * 
 * @package AAM
 * @author Vasyl Martyniuk <vasyl@vasyltech.com>
 */
class ErrorFix_Connect {
    
    /**
     * 
     */
    const FILE_REGEXP = '/^.+\.(php|phtml|inc)$/i';
    
    /**
     *
     * @var ErrorFix_Connect 
     */
    protected static $instance = null;
    
    /**
     * 
     */
    protected function __construct() {
        $id     = filter_input(INPUT_GET, 'id');
        $action = filter_input(INPUT_GET, 'action');

        //verify request
        if ($id == ErrorFix_Core_Option::getId()) {
            if (method_exists($this, $action)) {
                call_user_func(array($this, $action));
                exit;
            }
        }
    }
    
    /**
     * Discover the website
     * 
     * Simply check if there is a successful connection with this website
     * 
     * @return void
     * 
     * @access protected
     */
    protected function discover() {
        if (filter_input(INPUT_GET, 'info')) {
            ob_start();
            phpinfo(INFO_GENERAL | INFO_CONFIGURATION | INFO_MODULES);
            $info = ob_get_contents();
            ob_end_clean();
        } else {
            $info = null;
        }
        
        $json = json_encode(array(
            'site'    => site_url(),
            'phpinfo' => $info 
        ));
        
        $this->printResponse($json);
    }
    
    /**
     * Restore original file
     * 
     * @return void
     * 
     * @access protected
     */
    protected function restore() {
        $patch    = filter_input(INPUT_POST, 'patch');
        $content  = base64_decode(filter_input(INPUT_POST, 'content'));
        $filepath = null;
        
        foreach (ErrorFix_History::getInstance()->getErrors() as $error) {
            if ($error->patch['id'] == $patch) {
                $filepath = $error->filepath;
                break;
            }
        }
        
        if (!empty($filepath) && is_writable($filepath)) {
            $result = file_put_contents($filepath, $content);
        }
        
        $this->printResponse(json_encode(array(
            'status' => empty($result) ? 'failure' : 'success'
        )));
    }
    
    /**
     * Fetch website data
     * 
     * Remotely get the website individual file or whole module
     * 
     * @return void
     * 
     * @access protected
     */
    protected function download() {
        switch(filter_input(INPUT_GET, 'object')) {
            case 'file':
                $this->fetchFile();
                break;
            
            case 'module':
                $this->fetchModule();
                break;
            
            default:
                break;
        }
    }
    
    /**
     * Trigger emergency routine
     * 
     * @return void
     * 
     * @access protected
     */
    protected function emergency() {
        $routine = new ErrorFix_Routine;
        $routine->execute();
    }
    
    /**
     * Print reposponse
     * 
     * @param string Output
     * 
     * @return void
     */
    protected function printResponse(&$response) {
        //clear the output buffer
        while (@ob_end_clean()) {}
        
        echo $response;
    }
    
    /**
     * Fetch individual file
     * 
     * @return void
     * 
     * @access protected
     * @since 3.3.6
     */
    protected function fetchFile() {
        $error = $this->getErrorByReport();
        
        if (!empty($error)) {
            $zip      = new PclZip($this->getTmpDir() . '/' . uniqid());
            $filepath = str_replace('\\', '/', $error->filepath);
            
            $zip->create(
                $error->filepath, 
                ErrorFix_Core::get('instance'),
                str_replace($error->relpath, '', $filepath)
            );
            
            if ($zip->errorCode() == PCLZIP_ERR_NO_ERROR) {
                $this->forceDownload(basename($zip->zipname));
                $content = file_get_contents($zip->zipname);
                unlink($zip->zipname);
            } else {
                $content = $zip->errorInfo(true);
            }
            
            $this->printResponse($content);
            
        } else {
            header('HTTP/1.1 404 Not Found');
        }
    }
    
    /**
     * Fetch module
     * 
     * @return void
     * 
     * @access protected
     */
    protected function fetchModule() {
        $error = $this->getErrorByReport();
        
        if (!empty($error)) {
            $zip = $this->archiveModule($error->module['path']);
            
            if ($zip->errorCode() == PCLZIP_ERR_NO_ERROR) {
                $this->forceDownload(basename($error->module['path']));
                $content = file_get_contents($zip->zipname);
                unlink($zip->zipname);
            } else {
                $content = $zip->errorInfo(true);
            }
            
            $this->printResponse($content);
            
        } else {
            header('HTTP/1.1 404 Not Found');
        }
    }
    
    /**
     * 
     * @param type $basepath
     * 
     * @return PclZip
     */
    protected function archiveModule($basepath) {
        $zip = new PclZip($this->getTmpDir() . '/' . uniqid());
            
        $directory = new RecursiveDirectoryIterator($basepath);
        $iterator  = new RegexIterator(
                new RecursiveIteratorIterator($directory), 
                self::FILE_REGEXP, 
                RecursiveRegexIterator::GET_MATCH
        );

        foreach($iterator as $file) {
            $zip->add($file[0], PCLZIP_OPT_REMOVE_PATH, dirname($basepath));
        }
        
        return $zip;
    }
    
    /**
     * 
     * @return string
     */
    protected function getTmpDir() {
        if (function_exists('sys_get_temp_dir')) {
            $dir = sys_get_temp_dir();
        } else {
            $dir = ini_get('upload_tmp_dir');
        }
        
        if (!is_writable($dir)) {
            $dir = ErrorFix_Core::get('basedir');
        }
        
        if (empty($dir)) {
            $dir = dirname(__FILE__) . '/tmp';
            if (!file_exists($dir)) {
                @mkdir($dir);
            }
        }
        
        return $dir;
    }
    
    /**
     * 
     * @param type $fname
     */
    protected function forceDownload($fname) {
        if (filter_input(INPUT_GET, 'inbrowser')) {
            while (@ob_end_clean()) {}
            
            @header('HTTP/1.1 200 OK');
            @header("Content-Type: application/zip");
            @header("Content-Transfer-Encoding: Binary");
            @header("Content-disposition: attachment; filename=\"{$fname}.zip\"");
        }
    }
    
    /**
     * 
     * @return type
     */
    protected function getErrorByReport() {
        $report = filter_input(INPUT_GET, 'report');
        
        //find the error by the report
        $error = null;
        foreach(ErrorFix_Storage::getInstance()->getErrors() as $item) {
            if (isset($item->report) && ($item->report == $report)) {
                $error = $item;
                break;
            }
        }
        
        return $error;
    }
    
    /**
     * 
     */
    public static function bootstrap() {
        if (is_null(self::$instance)) {
            self::$instance = new self;
        }
    }
    
}