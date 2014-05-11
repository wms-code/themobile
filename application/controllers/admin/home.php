<?php
/**
 * Codeigniter Bootstrap
 * -------------------------------------------------------------------
 * Developed and maintained by Stijn Geselle <stijn.geselle@gmail.com>
 * -------------------------------------------------------------------
 */

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends MY_Controller {

    public function index() {
        $this->template->set('title', 'Admin dashboard');
        $this->template->load('layouts/admin', 'admin/home');
    }
    
    public function addcust()
    {
        $this->template->set('title','Add Customer ');
        $this->template->load('layouts/admin','admin/addcust');
    }

    public function addcustver()
    {
        $c_name     = $this->input->post('cutomer_name');
        $c_phone    = $this->input->post('customer_phone');
        $c_address  = $this->input->post('cutomer_address');
        echo $c_name . $c_phone . $c_address;
    }
}

/* End of file home.php */
/* Location: ./application/controllers/admin/home.php */
