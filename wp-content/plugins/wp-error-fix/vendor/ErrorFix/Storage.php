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
 * Error Fix storage
 * 
 * @package ErrorFix
 * @author Vasyl Martyniuk <vasyl@vasyltech.com>
 */
class ErrorFix_Storage {

    /**
     * Single instance of itself
     * 
     * @var ErrorFix_Storage 
     * 
     * @access protected
     */
    protected static $instance = null;

    /**
     * Error list
     * 
     * @var array 
     * 
     * @access protected
     */
    protected static $errors = array();

    /**
     * Cache
     * 
     * @var array 
     * 
     * @access protected
     */
    protected $cache = array();

    /**
     * Initialize the storage
     * 
     * @return void
     * 
     * @access protected
     */
    protected function __construct() {
        $classname = ErrorFix_Core::get('storage');
        if (class_exists($classname)) {
            self::$errors = call_user_func("$classname::load"); //PHP 5.2
        } else { //fallback to default storage method
            self::$errors = ErrorFix_Storage_File::load();
        }
    }

    /**
     * 
     */
    public function save() {
        $classname = ErrorFix_Core::get('storage');
        if (class_exists($classname)) {
            call_user_func("$classname::save", self::$errors); //PHP 5.2
        } else { //fallback to default storage method
            ErrorFix_Storage_File::save(self::$errors);
        }
    }

    /**
     * 
     * @param array $error
     */
    public function addError(array $error) {
        $line  = $error['type'] . $error['filepath'];
        $line .= $error['line'] . $error['message'];

        $hash = md5($line);

        if (isset(self::$errors[$hash])) {
            self::$errors[$hash]->hits++;
            self::$errors[$hash]->time = $error['time'];
        } else {
            if (count(self::$errors) >= ErrorFix_Core::get('storageLimit')) {
                array_shift(self::$errors);
            }
            self::$errors[$hash] = (object) $error;
            self::$errors[$hash]->status = 'new';
            self::$errors[$hash]->hash = $hash;
            self::$errors[$hash]->hits = 1;
        }
    }

    /**
     * 
     * @param type $hash
     */
    public function removeError($hash) {
        if (isset(self::$errors[$hash])) {
            unset(self::$errors[$hash]);
        }
    }

    /**
     * 
     */
    public function normalize() {
        //prepare decorator in case on any new errors
        $classname = ErrorFix_Core::get('decorator', 'ErrorFix_Decorator_None');
        $decorator = new $classname;

        foreach (self::$errors as $hash => $error) {
            $path = $error->filepath;
            if (!is_readable($path)) {
                $this->cache[$path] = null;
            } elseif (!isset($this->cache[$path]) && is_readable($path)) {
                $this->cache[$path] = md5(@file_get_contents($path));
            }

            if ($this->cache[$path] != $error->checksum) {
                $this->removeError($hash);
            }

            //decorate any new error
            if ($error->status == 'new') {
                $decorator->decorate($error);
                if (empty($error->module)) { //error does not belong to the env
                    $this->removeError($error->hash);
                }
            }
            
            //check if error is not within the excluded list of directories
            if ($this->withinExcluded($error->relpath)) {
                $this->removeError($error->hash);
            }
        }
    }
    
    /**
     * 
     * @param type $path
     * @return boolean
     */
    protected function withinExcluded($path) {
        $within = false;
        
        $exclude = ErrorFix_Core::get('exclude', array());
        if (is_array($exclude)) {
            foreach($exclude as $line) {
                if (strpos($path, $line) === 0) {
                    $within = true;
                    break;
                }
            }
        }
        
        return $within;
    }

    /**
     * 
     * @return type
     */
    public function getErrors() {
        $errors = array();

        foreach (self::$errors as $error) {
            if (!in_array($error->status, array('new', 'ignored', 'rejected'))) {
                $errors[] = $error;
            }
        }

        return $errors;
    }

    /**
     * 
     * @return type
     */
    public function getPatchList() {
        $patches = array();
        foreach (self::$errors as $error) {
            if ($error->status == 'resolved') {
                if (isset($patches[$error->patch['id']])) {
                    $patches[$error->patch['id']]['errors']++;
                } else {
                    $patches[$error->patch['id']] = array_merge(
                            $error->patch, 
                            array(
                                'filepath' => $error->filepath,
                                'relpath'  => $error->relpath,
                                'checksum' => $error->checksum,
                                'errors'   => 1
                            )
                    );
                }
            }
        }

        return $patches;
    }

    /**
     * 
     * @param type $hash
     * @return type
     */
    public function getErrorByHash($hash) {
        $error = null;

        if (isset(self::$errors[$hash])) {
            $status = self::$errors[$hash]->status;
            if (!in_array($status, array('new', 'ignored', 'rejected'))) {
                $error = self::$errors[$hash];
            }
        }

        return $error;
    }

    /**
     * Get instance of itself
     * 
     * @return ErrorFix_Storage
     * 
     * @access public
     * @static
     */
    public static function getInstance() {
        if (is_null(self::$instance)) {
            self::$instance = new self;
        }

        return self::$instance;
    }

}