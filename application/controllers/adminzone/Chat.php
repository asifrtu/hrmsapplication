<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class chat extends CI_Controller {
   private $UserId;
	
	
	
		public function __construct(){
    parent::__construct();
    $this->load->model("EmployeeModel", 'EmpObj');
    //$this->load->model("HrModel", "HrObj");
	//$this->load->model("AttendanceModel");
	$this->load->library('Lib_user');
	//$data= $this->session->userdata();
    
	  
    $this->UserId = $data['auth']['id'];
	$this->name = $data['auth']['name'];
	$this->shortName = $data['auth']['shortName'];
	
	
  } 
 public function index()
{		
	$data['UserInfo'] = $this->EmpObj->getUser($this->UserId);
	$data['EmployeeDetails'] = $this->EmpObj->getEmpDetails($this->UserId);
	$data['EmployeeProfileImage'] = $this->EmpObj->getProfileImage($this->UserId);
	$this->load->view("adminzone/chat");
}



}
