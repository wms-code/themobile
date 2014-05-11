<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {


	public function __construct()
    {
        parent::__construct();

    }
    
	public function index()
	{
		$this->load->view('admin/login');
	}

	function login_ver()
	{
		$user_name = $this->input->post("uname");
		$user_pass = $this->input->post("upass");
		if($user_name && $user_pass)
		{
			$this->db->where('admin_user',$user_name);
			$res = $this->db->get('admins');
			if ($res->num_rows() > 0)
			{
			   foreach ($res->result() as $row)
			   {
			      if($row->admin_user==$user_name && $row->admin_pass == $user_pass)
			      {
			      	$newdata = array(
                   'userid'  => $row->admin_id,
                   'username'     => $row->admin_user,
                   'userloggedin' => TRUE
	               );
					$this->session->set_userdata($newdata);
			
					$target = base_url()."admin";
					header("Location: ".$target);
			      }
			   }
			}
			else
			{
				echo "invaild username or password !  <b> Back</b>";
			}
		}
		else
		{
			$target = base_url(). "admin/login";
			header("Location: ".$target);
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		$target = base_url(). "admin/login";
		header("Location: ".$target);
	}

}

/* End of file login.php */
/* Location: ./application/controllers/admin/login.php */