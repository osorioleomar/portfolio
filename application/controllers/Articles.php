<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articles extends CI_Controller{

	function index(){
		$this->load->view('includes/header');
		$this->load->view('article');
		$this->load->view('includes/footer');
	}
}