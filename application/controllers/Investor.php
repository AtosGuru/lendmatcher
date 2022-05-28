<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Investor extends CI_Controller {
  

	public function __construct()
	{
			parent::__construct();
			$this->load->helper('url_helper');
	}
	public function index()
	{
	}
	public function investor_home() {
		$this->load->view('layout/Navbar');
		$this->load->view('investor/InvestorHome');
		$this->load->view('layout/Footer');
	}
	public function create_info() {
		$this->load->view('layout/Navbar');
		$this->load->view('investor/CreateInfo');
		$this->load->view('layout/Footer');
	}
	public function explore() {
		$this->load->view('layout/Navbar');
		$this->load->view('investor/Explore');
		$this->load->view('layout/Footer');
	}
	public function search_entre() {
		$this->load->view('layout/Navbar');
		$this->load->view('investor/SearchEntre');
		$this->load->view('layout/Footer');
	}




}
?>