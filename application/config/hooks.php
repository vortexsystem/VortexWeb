<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	https://codeigniter.com/user_guide/general/hooks.html
|
*/

$hook['post_controller_constructor'] = function()
{
	 // load the instance
      $this->CI =& get_instance();
     
       if($this->CI->uri->segment(1) !== "user"){
	              if($this->CI->uri->segment(1) !== "offline"){
	if(empty($_SESSION['logged_in']))
		{
			redirect('user/login');
		}
       }
       }
};
