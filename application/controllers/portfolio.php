<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller{

	function index(){
		$this->load->view('includes/header');
		$this->load->view('index');
		$this->load->view('includes/footer');
	} 

}