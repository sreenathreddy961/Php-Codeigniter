<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sample extends MX_Controller 
{
  
    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('form_validation'));
        $this->load->helper(array('url','html','form'));
        $this->load->database();
    }
  
    public function index()
    {
      $this->load->view('form_validation');
    }
    public function post_validate()
    {
 
        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('contact_no', 'Contact No', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
 
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_message('required', 'Enter %s');
 
        if ($this->form_validation->run() === FALSE)
        {  
            $this->load->view('form_validation');
        }
        else
        {   
          $data = array(
             'first_name' => $this->input->post('first_name'),
             'last_name' => $this->input->post('last_name'),
             'contact_no' => $this->input->post('contact_no'),
             'email' => $this->input->post('email'),
 
           );
   			$this->load->view('sample1');
            /*$insert = $this->db->insert('users', $data);
            if ($insert) {
               $this->load->view('success');
            } else {
               redirect( base_url('users') ); 
            }*/
   
            }
 
    }
 
}