<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	
	public function __construct(){
    parent::__construct();
    $this->load->model("EmployeeModel", "EmpObj");
    $this->load->model("HrModel", "HrObj");
	$this->load->library('HrLib_user');
	$data= $this->session->userdata();
	
	
	$this->UserId = $data['auth']['id'];

  } 
  
	public function AddUser(){
		
		$data['AllUserInfo'] = $this->HrObj->getAllUser();
		
		$this->load->view('hrzone/addUser', $data);
	}
	
	public function User(){
		
		
		// print_r($_POST); die;
		$this->form_validation->set_rules('email', 'email', 'trim|required');
		if ($this->form_validation->run()) {
	
				$data1 = array
					(
						'name'        	=> $this->input->post('name'),
						'email'       	=> $this->input->post('email'),
						
						'type'  	=> $this->input->post('type')
							
					);

					// $this->load->model("EmpObj");
					$this->HrObj->UserManageData($data1);
				
				
		
		
		$this->session->set_flashdata('message', '<script>alert("Your data inserted successfully");</script>');
		redirect('hrzone/Users/AddUser', 'refresh');
	}else
	{
		$this->session->set_flashdata('message', '<script>alert("Your Email or EmployeeId already Exist!");</script>');
		
		$this->load->view('hrzone/addUser', 'refresh');
	}
		
		
	}
	
	
	public function CompanyMissionAndGoals(){

		$data['page'] = 'CompanyMissionAndGoals';
		$this->load->view('hrzone/companyMission', $data);
	}
	
	public function adminInfo(){
		$data['page'] = 'adminInfo';
		$data['adminInfo'] = $this->HrObj->adminListRecord();
		$this->load->view('hrzone/userView', $data);
	}
	
	
	public function AdminDelete($Id){
       
		
		if($this->HrObj->deleteUser($Id) && $this->HrObj->deleteUserDetails($Id))
		{
			$this->session->set_flashdata('message', 'Data deleted successfully.');
			redirect('hrzone/Users/adminInfo', 'refresh');
		}else{
			$this->session->set_flashdata('message', 'Some error occur.');
		}
		
		
	   
	}
	
	
	
	
	
	
	
	
	
	
	
  
  }



?>