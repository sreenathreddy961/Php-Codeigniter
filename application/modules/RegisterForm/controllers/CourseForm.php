<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CourseForm extends MX_Controller {

function __construct()
{
	parent :: __construct();
	// $this->load->helper('url');
}
	public function index()
	{
		
		// $this->load->view('index1');
		$this->load->view('db');
		/*$data['content']='index1';
		$this->load->view("page",$data);*/
		// $this->load->view('db');
	}