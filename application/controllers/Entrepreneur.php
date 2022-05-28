<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Entrepreneur extends CI_Controller {
  

	public function __construct()
	{
			parent::__construct();
			$this->load->helper('url_helper');
	}
	public function index()
	{
	}
	public function entre_home() {
		$this->load->view('layout/Navbar');
		$this->load->view('entre/EntrepreneurHome');
		$this->load->view('layout/Footer');
	}
	public function investor_search() {
		$this->load->view('layout/Navbar');
		$this->load->view('entre/InvestorSearch');
		$this->load->view('layout/Footer');
	}
	public function needs_feed() {
		$this->load->view('layout/Navbar');
		$this->load->view('entre/NeedFeeds');
		$this->load->view('layout/Footer');
	}
	public function my_investors() {
		$this->load->view('layout/Navbar');
		$this->load->view('entre/MyInvestors');
		$this->load->view('layout/Footer');
	}



}
?>