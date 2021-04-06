<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterFormModel extends MX_Model
{
	function insert($data)  
    {  
        //insert data into database table 'reg_details'  
        $this->db->insert('reg_details',$data);
        return $this->db->insert_id();
    }
    function DynamicInsert()
    {
    	//this is used to fetch multiple data of course details from the index1 page.  
        $Course = $this->input->post('Course');
        $Institute = $this->input->post('Institute');
        $YearOfPassing = $this->input->post('YearOfPassing');
        $Percentage = $this->input->post('Percentage');

        foreach ($Course as $key => $value) 
        {
        	$MultipleData = [];
        	$MultipleData['EmployeUId'] = $EmployeUId;
        	$MultipleData['Course'] = $Course[$key];
        	$MultipleData['InstituteName'] = $Institute[$key];
        	$MultipleData['YearOfPassing'] = $YearOfPassing[$key];
        	$MultipleData['Percentage'] = $Percentage[$key];

        	//insert data into database table 'reg_details' 
        	$this->db->insert('educationdetails',$MultipleData);  
        }

        $data = array('Msg' => ' Successful');
        echo json_encode($data);
        // redirect('RegisterForm/link');
    }
    function link()
    {
        $data['content'] = 'db';

    	$this->db->select('*');
    	$this->db->from('reg_details');
    	$retriev = $this->db->get();

		$data['Data']=$retriev->result();

    	$this->load->view('page', $data);
    }
    function delete($Id)
    {
    	// $Id = $this->input->post('Id');
        $this->db->where('EmployeUId',$Id);
        $this->db->delete('reg_details');

        $this->db->where('EmployeUId',$Id);
        $this->db->delete('educationdetails');
        return 1;
    }
}