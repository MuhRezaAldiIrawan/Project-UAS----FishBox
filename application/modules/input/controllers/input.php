<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class input extends MY_Controller {
	public function index(){
		$this->load->view('header_input');
		$this->load->view('content_input');
	}
}
