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
        $data['cust'] = $this->db->query('select customer_id,customer_name from customers');

        $this->template->set('title','Add Service ');
        $this->template->load('layouts/admin','admin/addservice',$data);
    }

    public function addservicever()
    {
        $arr[] = $this->input->post('sno');
        $arr[] = $this->input->post('brand');
        $arr[] = $this->input->post('model');
        $arr[] = $this->input->post('imei');
        $arr[] = $this->input->post('complaint');
        $arr[] = $this->input->post('amount');
        $customer_id = $this->input->post('customer_name');

        $this->db->set('customer_id',$customer_id);
        $this->db->insert('customer_invoice');
        $invoice_no = $this->db->insert_id();

        for($i=0; $i<count($arr[0]); $i++)
        {
            $newarr[$i][0] = $invoice_no;
            for($j=0; $j<count($arr); $j++)
            {
                $newarr[$i][$j+1] = $arr[$j][$i];
            }
        }


        $keys = array("invoice_id","sno","brand","model","imei","complaint","amount");
        for($i=0; $i<count($arr[0]); $i++)
        {
            $ins_arr = array_combine($keys, $newarr[$i]);
            $this->db->insert('invoice',$ins_arr);
        }

        echo "record inserted successfully";
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