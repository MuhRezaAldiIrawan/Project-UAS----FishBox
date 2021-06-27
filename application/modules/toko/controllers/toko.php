<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class toko extends MY_Controller {
	public function index(){
		$this->load->view('header_toko');
		$this->load->view('content_toko');
		$this->load->view('footer_toko');
	}
}
