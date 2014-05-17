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
        $c_name     = $this->input->post('customer_name');
        $c_phone    = $this->input->post('customer_phone');
        $c_address  = $this->input->post('customer_address');
        if($c_name && $c_phone && $c_address)
        {
            $this->inscust($c_name,$c_phone,$c_address);
        }

        $target = base_url() . 'admin/home/addcust';
        header("Location:".$target);

    }

    public function addservice()
    {
        $this->template->set('title','Add Service ');
        $this->template->load('layouts/admin','admin/addservice');
    }

    public function addservicever()
    {
        $arr[] = $this->input->post('sno');
        $arr[] = $this->input->post('brand');
        $arr[] = $this->input->post('model');
        $arr[] = $this->input->post('imei');
        $arr[] = $this->input->post('complaint');
        $arr[] = $this->input->post('amount');

        print_r($arr);

    }


    function inscust($c_name,$c_phone,$c_address)
    {
        $data['customer_name'] = $c_name;
        $data['customer_phone'] = $c_phone;
        $data['customer_address'] = $c_address;

        $this->db->insert('customers',$data);
        return TRUE;
    }


}



/* End of file home.php */
/* Location: ./application/controllers/admin/home.php */
