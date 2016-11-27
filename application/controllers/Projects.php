<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends CI_Controller{

	function index(){
		$this->load->view('includes/header');
		$this->load->view('project');
		$this->load->view('includes/footer');		
	}
}