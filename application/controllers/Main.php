<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
  

	public function __construct()
	{
			parent::__construct();
			$this->load->helper('url_helper');
			$this->load->library('session');
	}
	public function index()
	{
		$this->load->view('layout/Navbar');
  	$this->load->view('Homepage');
		$this->load->view('layout/Footer');
	}

	public function log_success() {	
		// var_dump($this->session->userdata('username'));	
		if(!$this->session->userdata('username')) {
			redirect('/Auth/login','refresh');
		}

		if($this->session->userdata('type') == 'investor') {
			$this->load->view('layout/Navbar');
			$this->load->view('investor/InvestorHome');
			$this->load->view('layout/Footer');
		} else if($this->session->userdata('type') == 'entrepreneur') {
			$this->load->view('layout/Navbar');
			$this->load->view('entre/EntrepreneurHome');
			$this->load->view('layout/Footer');
		}
	}


}
?>