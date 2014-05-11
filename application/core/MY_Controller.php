<?php

abstract class MY_Controller extends CI_Controller {


    
    public function __construct() {
	 // check if admin, else redirect to login
        parent::__construct();
		$this->load->library('session');		
			if (!$this->session->userdata('userloggedin'))
			{	
			 $target= base_url().'admin/login';
			 header("Location: " . $target);				
			 exit();
			}

        }

    	

}