<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kategori extends MY_Controller {
	public function index(){
		$this->load->view('header_kategori');
		$this->load->view('content_kategori');
		$this->load->view('footer_kategori');
	}
}
