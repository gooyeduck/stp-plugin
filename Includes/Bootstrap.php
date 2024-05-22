<?php
/**
 * Bootstrap class.
 *
 * @package SBFW
 */

namespace STP;

use STP\Traits\Singleton;
 
 class Bootstrap {
     use Singleton;
 
     private function __construct() {
         error_log('Bootstrap is working perfectly');
         $this->load_ajax_classes();
         $this->load_admin_classes();
     }
 
     private function load_ajax_classes() {
         error_log('Loader for ajax');
     }
 
     private function load_admin_classes() {
         error_log('Loader for admin class');
     }
 }