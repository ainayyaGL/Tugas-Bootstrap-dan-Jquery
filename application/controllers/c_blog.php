<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_blog extends CI_Controller {

	
	
	public function index()
	{
		
		$this->load->view('blog');
	}

}