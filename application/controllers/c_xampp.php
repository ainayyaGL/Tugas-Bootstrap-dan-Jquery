<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_xampp extends CI_Controller {

	
	
	public function index()
	{
		
		$this->load->view('xampp');
	}
	public function tampilXampp(){
		$this->load->view('xampp');
	}

	public function tampilCode(){
		$this->load->view('code');
	}
}