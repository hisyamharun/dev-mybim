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
 * Error Fix REST API
 * 
 * @package ErrorFix
 * @author Vasyl Martyniuk <vasyl@vasyltech.com>
 */
class ErrorFix_Server {
    
    /**
     * 
     * @param type $environment
     * 
     * @return type
     */
    public function register($environment) {
        return $this->send(
            '/register', array('environment' => $environment)
        );
    }
    
    /**
     * 
     * @param type $instance
     * @param type $license
     * 
     * @return type
     */
    public function activate($instance, $license) {
        return $this->send(
            '/activate', array('instance' => $instance, 'license' => $license)
        );
    }
    
    /**
     * 
     * @param type $instance
     * @param type $patch
     * 
     * @return type
     */
    public function apply($instance, $patch) {
        return $this->send(
            '/apply', array('instance' => $instance, 'patch' => $patch)
        );
    }

    /**
     * 
     * @param string $instance
     * @param array  $errors
     * 
     * @return array
     */
    public function report($instance, array $errors) {
        return $this->send('/report', array(
            'instance' => $instance,
            'errors'   => json_encode($errors)
        ));
    }
    
    /**
     * 
     * @param type $instance
     * @return type
     */
    public function status($instance) {
        return $this->send('/status', array('instance' => $instance));
    }
    
    /**
     * 
     * @param string $instance
     * @param array  $reports
     * @return type
     */
    public function check($instance, array $reports) {
        return $this->send('/check', array(
            'instance' => $instance, 
            'reports'  => json_encode($reports))
        );
    }
    
    /**
     * 
     * @param type $instance
     * @param type $fullname
     * @param type $email
     * @param type $message
     * @return type
     */
    public function message($instance, $fullname, $email, $message) {
        return $this->send(
            '/message', 
            array(
                'instance' => $instance, 
                'fullname' => $fullname,
                'email'    => $email,
                'message'  => $message,
            )
        );
    }
    
    /**
     * 
     * @param type $instance
     * @param type $version
     * 
     * @return type
     */
    public function ping($instance) {
        return $this->send(
            '/ping', array('instance' => $instance)
        );
    }
    
    /**
     * 
     * @param type $uri
     * @param array $params
     */
    protected function send($uri, array $params) {
        if (function_exists('curl_init')) {
            //initialiaze the curl and send the request
            $ch = curl_init();
            
            //add site url and API version
            $params['site']    = ErrorFix_Core::get('siteurl');
            $params['version'] = ErrorFix_Core::get('version');
            
            // set URL and other appropriate options
            curl_setopt($ch, CURLOPT_URL, ErrorFix_Core::get('endpoint') . $uri);
            curl_setopt($ch, CURLOPT_HEADER, false);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_TIMEOUT, 28);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
            $response = json_decode(curl_exec($ch));
            curl_close($ch);
        }
        
        if (empty($response)) {
            $response = (object) array(
                'status' => 'failure',
                'reason' => __('Failed to sent request to the server.', ERRORFIX_KEY)
            );
        }
        
        return $response;
    }

}