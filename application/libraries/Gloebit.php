<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gloebit {

        protected $CI;
        // We'll use a constructor, as you can't directly call a function
        // from a property definition.
        public function __construct()
        {
                // Assign the CodeIgniter super-object
                $this->CI =& get_instance();
           
        }
}
