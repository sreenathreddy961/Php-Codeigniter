<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterForm extends MX_Controller 
{
    function __construct()
    {
    	parent :: __construct();
        /*$this->load->model('RegisterFormModel');
    	$this->load->helper('url');*/
    }

    /*index function to initiate project*/
	public function index()
	{
		$data['content'] = 'index1';
        /*Retrieve data from reg_details table to display them in index1 form*/
        $this->db->select('*');
        $this->db->from('reg_details');
        $RetrievEmployeeDetails = $this->db->get();
         /*Retrieve data from educationdetails table to display them in index1 form*/
        $this->db->select('*');
        $this->db->from('educationdetails');
        $RetrievCourseDetails = $this->db->get();
        /*Storeing result of retreived data from database*/
        $data['Data']=$RetrievEmployeeDetails->result();
        $data['EduData']=$RetrievCourseDetails->result();
        /*Loading page by passing data array as value*/
        $this->load->view('page', $data);
	}
	
    /*@Desc : Function to insert user registered details and server side validation. @Author : M Sreenath Reddy*/
    function InsertDetails()
    {
        /*Set rules for server side validation for register form */
        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('lname', 'Last Name', 'required');
        $this->form_validation->set_rules('dob', 'DOB', 'required');
        $this->form_validation->set_rules('mobileNo', 'Mobile No.', 'required|max_length[10]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('Edu[]', 'Education', 'required');
        $this->form_validation->set_rules('skils', 'Key Skills', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        /*validation rules for course table*/
        $this->form_validation->set_rules('Course[]','Course','required');
        $this->form_validation->set_rules('Institute[]','Institute','required');
        $this->form_validation->set_rules('YearOfPassing[]','YearOfPassing','required');
        $this->form_validation->set_rules('Percentage[]','Percentage','required');
 
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_message('required', 'Please Enter %s');
 
        if ($this->form_validation->run() === FALSE)
        {
            $output = array(
                                'fname' => form_error('fname'),
                                'lname' => form_error('lname'),
                                'dob' => form_error('dob'),
                                'mobileNo' => form_error('mobileNo'),
                                'email' => form_error('email'),
                                'address' => form_error('address'),
                                'Edu' => form_error('Edu[]'),
                                'skils' => form_error('skils'),
                                'gender' => form_error('gender'),
                                'Course' => form_error('Course[]'),
                                'Institute' => form_error('Institute[]'),
                                'YearOfPassing' => form_error('YearOfPassing[]'),
                                'Percentage' => form_error('Percentage[]'),
                                'status' => 'failed',
                            );
            echo json_encode($output);
        }  
        else
        {
            /*this array is used to get fetch data from the index1 page. */
            $data = array(  
                            'Fname'  => $this->input->post('fname'),  
                            'Lname'  => $this->input->post('lname'),  
                            'DOB'    => $this->input->post('dob'),  
                            'Mobile' => $this->input->post('mobileNo'), 
                            'Email'  => $this->input->post('email'), 
                            'Address'=> $this->input->post('address'), 
                            'Education'    => implode(',', $this->input->post('Edu')), 
                            'KeySkills' => $this->input->post('skils'), 
                            'Gender' => $this->input->post('gender'),  
                        );  
            /*Sending default mail for registered candidates*/
            $Reciever = $this->input->post('email');
            $Sender = 'sreenathreddy94413@gmail.com';
            $this->email->from($Sender, 'Sreenath');
            $this->email->to($Reciever);
            
            $this->email->subject('Congracts');
            $this->email->message('Welcome to Sreenath Tech Labs. You are deployeed into Project');
            
            $this->email->send();
            // $output = $this->RegisterFormModel->insert($data);

            /*insert data into database table 'reg_details'*/  
            $this->db->insert('reg_details',$data);

            $EmployeUId = $this->db->insert_id();

            /*this is used to fetch multiple data of course details from the index1 page.  */
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

            	/*insert data into database table 'educationdetails' */
            	$this->db->insert('educationdetails',$MultipleData);  
            }
            $data = array('EmployeUId' => $EmployeUId,
                        'Fname'  => $this->input->post('fname'),  
                        'Lname'  => $this->input->post('lname'),  
                        'Email'  => $this->input->post('email'), 
                        'Address'=> $this->input->post('address'), 
                        'Education' => implode(',', $this->input->post('Edu')), 
                        'KeySkills' => $this->input->post('skils'), 
                        'Gender' => $this->input->post('gender'), 
                        );
            //$data = array('Msg' => ' Successful','status' => 'success');
            echo json_encode($data);
        }
    }

    /*@Desc : Function to delete details of user. @Author : M Sreenath Reddy*/
    function DeleteDetails()
    {
    	$Id = $this->input->post('Id');

        /*$this->RegisterFormModel->delete($Id);*/

        $this->db->where('EmployeUId',$Id);
        $this->db->delete('reg_details');

        $this->db->where('EmployeUId',$Id);
        $this->db->delete('educationdetails');
        
    }

    /*@Desc : function to show details in update form. @Author : M Sreenath Reddy*/
    function DisplayDetails($id)
    {
        /*$id = $this->input->post('id');*/
        
        $data['content'] = 'UpdateDetails';

        /*Retrieve data from reg_details table to display them in update form*/
        $this->db->select('*');
        $this->db->from('reg_details');
        $this->db->where('EmployeUId',$id);
        $RetrievEmployeeDetails = $this->db->get();

        /*Retrieve data from educationdetails table to display them in update form*/
        $this->db->select('*');
        $this->db->from('educationdetails');
        $this->db->where('EmployeUId',$id);
        $RetrievCourseDetails = $this->db->get();

        /*Storing result of retreived data from database*/
        $data['Data']=$RetrievEmployeeDetails->row();
        $data['EduData']=$RetrievCourseDetails->result();

        /*Loading page by passing data array as value*/
        echo $this->load->view('page', $data);

        /*echo json_encode($id);*/

    }

    /*@Desc : function to update user details. @Author : M Sreenath Reddy*/
    function UpdateDetail()
    {
        /*Geting the updated form data to update new values in database*/
        $id = $this->input->post('uid');
        $data = array(  
                        'Fname'  => $this->input->post('fname'),  
                        'Lname'  => $this->input->post('lname'),  
                        'DOB'    => $this->input->post('dob'),  
                        'Mobile' => $this->input->post('mobileNo'), 
                        'Email'  => $this->input->post('email'), 
                        'Address'=> $this->input->post('address'), 
                        'Education'    => implode(',', $this->input->post('Edu')), 
                        'KeySkills' => $this->input->post('skils'), 
                        'Gender' => $this->input->post('gender'),  
                    );

        /*Performing update query to update new values in db*/
        $this->db->set($data);
        $this->db->where('EmployeUId',$id);
        $this->db->update('reg_details');

        /*this is used to fetch multiple data of course details from the index1 page. */
        $Course = $this->input->post('Course');
        $Institute = $this->input->post('Institute');
        $YearOfPassing = $this->input->post('YearOfPassing');
        $Percentage = $this->input->post('Percentage');

        /*First perform delete operation to re-enter course details to update dynamic values*/
        $this->db->where('EmployeUId',$id);
        $this->db->delete('educationdetails');

        foreach ($Course as $key => $value) 
        {
            $MultipleData = [];
            $MultipleData['EmployeUId'] = $id;
            $MultipleData['Course'] = $Course[$key];
            $MultipleData['InstituteName'] = $Institute[$key];
            $MultipleData['YearOfPassing'] = $YearOfPassing[$key];
            $MultipleData['Percentage'] = $Percentage[$key];

            /*insert data into database table 'reg_details'*/
            $this->db->insert('educationdetails',$MultipleData);
        }
        echo json_encode("Updated");
    }

    function DisplayDetailsInModal()
    {
        $id = $this->input->post('userid');

       /* Retrieve data from reg_details table to display them in update form*/
        $this->db->select('*');
        $this->db->from('reg_details');
        $this->db->where('EmployeUId',$id);
        $RetrievEmployeeDetails = $this->db->get();

        /*Retrieve data from educationdetails table to display them in update form*/
        $this->db->select('*');
        $this->db->from('educationdetails');
        $this->db->where('EmployeUId',$id);
        $RetrievCourseDetails = $this->db->get();

        /*Storing result of retreived data from database*/
        $data['Data']=$RetrievEmployeeDetails->row();
        $data['EduData']=$RetrievCourseDetails->result();
        $response = $this->load->view('DisplayModal',$data);
        echo json_encode($response);
    }
}
