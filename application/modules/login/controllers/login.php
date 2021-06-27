<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends MY_Controller {
	public function index(){
		$this->load->view('login_header');
		$this->load->view('login_body');
		$this->load->view('login_footer');
	}
}
