=== CodePinch - WP Error Fix ===
Contributors: vasyltech, myjive
Tags: error, warning, notice, bug, fix, hotfix, plugin, error fix, security, log, development tool
Requires at least: 3.8
Tested up to: 4.6.1
Stable tag: 3.8.7
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Our patent-pending technology provides solutions to PHP errors within hours, 
preventing costly maintenance time and keeping your WordPress site error-free.

== Description ==

> Our patent-pending technology keeps your website error-free. The easy to use 
> plugin provides solutions to errors within hours, preventing costly 
> maintenance time

= Benefits: =
* Keep your website error-free
* Easy to use
* Provides solutions to errors within hours
* Prevents costly maintenance time

= What you get: =
* Monitors your site and notifies you when there are errors
* Our dedicated team sees the error and provides a solution within hours
* Errors that cannot be programmatically fixed, CodePinch provides technical consultation on how to resolve the issue

= Who is it for: =
* Front-end Developers (small business, hiring freelancer)
* Designers (Time/knowledge deficient)
* Website Administrators (companies, individuals)
* All Developers

= How it Works: =
* First, it constantly monitors your website for any type of PHP errors and provides the complete report in well organized format;
* Once CodePinch is activated, your errors are reported to our server and we analyze them and provide fixes;
* Your website gets notified that there are available solutions for your errors and simply with the click of a button, you apply fixes to your website.
* Consultation

= Most important: =
* No upfront fees
* Your first fix is on us
* There are NO monthly or hidden fees. 
* You DO NOT share any private information with us (like FTP or Backend credentials). 
* You pay only small amount for fixes that you select.
* We have best-in-class developers standing-by to assist you.
* We provide consultation is a proactive manner, often altering you a solution before you even know there is an issue.

== Installation ==

1. Upload `wp-error-fix` folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. And you are ready to go.

== Frequently Asked Questions ==

= How much does Error Fix cost? =

CodePinch plugin is a free of any charges. You pay nothing for monitoring 
and reporting errors. However majority of available fixes are not free. You would
have to pay a small amount (usually around 50 cents) to apply a fix.

= Who does provide the solutions? =

Our main priority is quality. That is why only experienced senior software 
developers analyze error reports and provide solutions. We do not outsource our
work and keep everything in-house. For more information about us check our website 
[vasyltech.com](http://vasyltech.com)

= How long it takes to fix an error? =

Depending on the number of error reports, it might take us up to a few days to prepare
fixes for your errors. But you can request High Priority support and we will be 
able to assist you within 24 business hours.


= Does Error Fix keep backups? =

YES. When you apply fixes to your website, original files are archived to 
wp-content/errorfix directory and grouped by the day so you can revert back any
changes if necessary.

== Screenshots ==

1. List of errors in table format
2. Pie graph of grouped errors by plugins, themes and core
3. Dashboard Widget
4. Error Fix Settings

== Changelog ==

= 3.8.7 =
* Bug fixing

= 3.8.6 =
* Optimized error reporting feature

= 3.8.5 =
* Bug fixing

= 3.8.4 =
* Optimized ajax requests
* Covered the scenario when instance id is deployed to different domain

= 3.8.3 =
* Fixed bug with connection

= 3.8.2 =
* Deprecated Rejected tab in favor of future Notes tab
* Improved UI functionality
* Added localization file
* Added Notes functionality (currently inactive)

= 3.8.1 =
* Fixed bug in storage functionality
* Improved fixes apply UI functionality
* Wrapped majority UI labels in WP localization

= 3.8 =
* Improved UI
* Refactored the storage functionality toward DB storage
* Moved backup functionality on the CodePinch server side for end user simplicity
* Added Exclude Directories settings

= 3.7 =
* Re-branding
* Minor bug fixing

= 3.6.8 =
* Fixed a minor issue with UI Activation button

= 3.6.7 =
* Fixed reported bugs
* Improved and simplified UI
* Increased report limit

= 3.6.6 =
* Bug fixing reported by itself
* Added Developer button to UI
* Linked homepage to www.phperrorfix.com

= 3.6.5 =
* Improved UI
* Simplified core options implementation
* Bug fixing

= 3.6.4 =
* Fixed bugs reported on itself
* Added ability to trigger emergency routine in case patch has to be installed
* Improved error reporting mechanism

= 3.6.3 =
* Fixed two minor bugs reported on itself
* Optimized the reporting and checking process
* Moved to Error Fix API v3
* Added global message support to notify user about upcoming maintenance days
* Deprecated initial Activate pop-up

= 3.6 =
* Optimized connection mechanism
* Added Auto-Fix setting
* Fixed UI bug with FIXED ERRORS tab

= 3.5.5 =
* Added Fixed Errors history tab
* Improved UI

= 3.5.2 =
* Improved Zip archive support
* Fixed reported bug in Error Handling mechanism for PHP 7

= 3.5.1 =
* Added counter of fixed errors to the dashboard widget
* Removed ability to retrieve error log
* Fixed the reported bug about E_DEPRECATED constant for PHP lower 5.3.0

= 3.5 =
* Extended API to support bulk support purchase
* Added ability to push message from the server to client

= 3.4.3 =
* Fixed bug with curl_init
* Fixed bug with backup mechanism when the same file backed-up twice
* Added global dashboard message when new fix is available for download
* Extended Connect API

= 3.4.2 =
* Fixed bug with reporting error from a windows server
* Added ability to obtain the server configurations through the discovery process

= 3.4.1 =
* Increased server request timeout to 20 seconds

= 3.4 =
* Added ability to send direct message to us
* Added a full year service support

= 3.3.6 =
* Extended core connector with ability to fetch a single file
* Simplified the core implementation - removed WordPress Custom category
* Added extra file verification step before patching

= 3.3.5 =
* Fixed bug #163 when storage is not read properly from the file system
* Fixed bug #184 when ZipArchive is not installed
* Show notification when Error Check is not activated 

= 3.3.4 =
* Added ability to trigger the fix check manually
* Fixed small HTML issue
* Improved UI feedback during activation
* Optimized performance for non-activated instance

= 3.3.3 =
* Fixed the bug with multisite network.

= 3.3.1 =
* Fixed the reported bug #19 when file does not exist after error triggered
* Fixed the reported bug #37 when WordPress core triggers an error

= 3.3 =
* Added Settings Tab
* Added ability to receive email notifications on errors
* Added ability to receive email notifications when fixes are available
* Simplified UI for newly installed WP Error Fix 

= 3.2 =
* Changed the error handling mechanism to core PHP error_handler
* Simplified the implementation
* Removed PHP error log parser from the Error Fix framework

= 3.1.2 =
* Moved Connect to the Error Fix framework
* Moved Cron to the Error Fix framework
* Added ability to download error log
* Fixed the bug with recognizing correct module in some specific cases

= 3.1.1 =
* Fixed the bug with Plugin Name recognition

= 3.1 =
* Refactored the core. Moved the Error Fix functionality to the mini-framework
* Added Rejected tab to explain the reason for report rejection
* Updated screenshots

= 3.0.2 =
* Fixed patcher to be compatible with PHP 5.2 version

= 3.0.1 =
* Fixed the bug with activation message
* Added Dashboard Widget with stats
* Improved backend manager implementation

= 3.0 =
* Completely from scratch implementation
* Faster and simplified core functionality
* Responsive and more intuitive UI

= 2.0 =
* Moved plugin to technical support concept

= 1.7 = 
* Fixed issue with dashboard over SSL
* Fixed PHPSnapshot bug with failed storage retrieve
* Updated Rate Us URL
* Added Preferences page
* Added Email notification functionality
* Fixed issue with PHP Core bug related to _destruct call on fatal error

= 1.6 =
* Moved logs to wp_errorlog dir. Based on Anderton feedback
* Renamed the main class
* Fixed the issue with SSL Dashboard (thank you moxojo)
* Added payment functionality
* Improved Patching mechanism
* Added custom dialog feature

= 1.5 =
* Fixed issue with Ajax failed calls. Show an error message
* Fixed CSS issue with minor actions for Chrome
* Fixed issue with not writable log and cache directories
* Added Error Status tooltip with explanation

= 1.4 =
* Removed deprecated functionality
* Fixed issue with hardcoded bootstrap path
* Added Rate Me button
* Fixed patching mechanism
* Improved (optimized) reporting mechanism
* Added internal caching mechanism for storage & queue objects
* Added additional check if content folder is writable

= 1.3 =
* Fixed Bug Report #81447
* Removed the Send Message screen
* Changed Control Panel UI
* Simplified the About section

= 1.0 =
* Initial version