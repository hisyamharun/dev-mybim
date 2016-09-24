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

if (defined('ABSPATH') && !defined('ERRORFIX_LOADED')) {
    require dirname(__FILE__) . '/Core.php';
    
    $settings = ErrorFix_Core_Option::getSettings();

    ErrorFix_Core::bootstrap(array(
        'decorator'    => 'ErrorFix_Decorator_WordPress',
        'instance'     => ErrorFix_Core_Option::getId(),
        'siteurl'      => site_url(),    
        'basedir'      => ERRORFIX_BASEDIR, //TODO - Legacy. Remove in May 2017
        'storage'      => 'ErrorFix_Storage_Wpdb',
        'storageLimit' => 1000,
        'reportLimit'  => (ErrorFix_Core_Option::getVip() ? 40 : 20),
        'checkLimit'   => 40,
        'autofix'      => (ErrorFix_Core_Option::getVip() || !empty($settings['autofix']) ? true : false),
        'endpoint'     => 'http://errorfix.vasyltech.com/v3',
        'exclude'      => (!empty($settings['exclude']) ? array_map('trim', explode("\n", $settings['exclude'])) : array()),
        'version'      => '3.8.7'
    ));
    
    //error fix can be loaded only once
    define('ERRORFIX_LOADED', true);
}