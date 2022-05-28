<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
  

	public function __construct()
	{
			parent::__construct();
			$this->load->model('Auth_Model');
			$this->load->helper('url_helper');
			$this->load->library('session');
			
			
	}
	public function index()
	{
	}
	public function signup() {
		
		$data['js_link'] = "auth/signup.js";
		$this->load->view('layout/Navbar.php');
		$this->load->view('auth/Signup.php');
		$this->load->view('layout/Footer.php', $data);
	}
	public function login() { 
		$data['js_link'] = "auth/login.js";
		$this->load->view('layout/Navbar.php');
		$this->load->view('auth/Login.php');
		$this->load->view('layout/Footer.php', $data);
	}

	public function register_user() {
		$data = $this->input->post();
		echo $this->Auth_Model->register_user($data);
		
	}

	public function login_user() {
		$data = $this->input->post();
	
		$res =  $this->Auth_Model->login_user($data);
		
		if($res != 'incorrect') {	
			$this->session->set_userdata('username',$res[0]->fullname);
			$this->session->set_userdata('email', $res[0]->email);
			$this->session->set_userdata('type', $res[0]->type);					
			echo json_encode($res[0]);
			
		} else {
			echo 'fail';
		}
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect('/Auth/login', 'refresh');
	}


}
?>