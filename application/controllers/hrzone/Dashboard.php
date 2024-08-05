<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {
    public function __construct(){
    parent::__construct();
    $this->load->model("EmployeeModel", "EmpObj");
    $this->load->model("HrModel", "HrObj");
	$this->load->library('HrLib_user');
	$data= $this->session->userdata();
	
	
	$this->UserId = $data['auth']['id'];

  } 
 public function wall()
{		
	$data['page'] = 'wall';
	$data['UserInfo'] = $this->EmpObj->getUser($this->UserId);
	$data['EmployeeProfileImage'] = $this->EmpObj->getProfileImage($this->UserId);
	
	$this->load->view("hrzone/myWall", $data);
}


public function sharedrive()
{		
	echo "Done";
	// $this->load->view("hrzone/sharedrive", 'refresh');
}

 
 public function employeeAttendence()
{		
	
	$this->load->view("hrzone/employeeAttendence", 'refresh');
}

public function notepad()
{		
	
	$this->load->view("hrzone/notepad", 'refresh');
}
 
public function employeeList()
{		
	$this->load->view("hrzone/employeeList", 'refresh');
}
 
public function addEmployee()
{		
	$this->load->view("hrzone/addEmployee", 'refresh');
}
 
public function files()
{		
	$data['page'] = 'files';
	$this->load->view("hrzone/files",  $data);
	
}
 
public function fileResumeAndApplication()
{		
	$this->load->view("hrzone/fileResumeAndApplication", 'refresh');
}
 
public function table()
{		
	$this->load->view("hrzone/table", 'refresh');
}
 
public function jobOpening()
{		
	$this->load->view("hrzone/jobOpening", 'refresh');
}
 
public function jobOpeningView()
{		
	$this->load->view("hrzone/jobOpeningView", 'refresh');
}
 

 
public function CompensationList()
{		
	$this->load->view("hrzone/CompensationList", 'refresh');
}
 

 public function salaryClr()
{		
	$this->load->view("hrzone/salaryClr", 'refresh');
}
 
public function salarySlip()
{		
	$this->load->view("hrzone/salarySlip", 'refresh');
}
 
public function seoGoals()
{		
	$this->load->view("hrzone/seoGoals", 'refresh');
}
 
 
public function contentWriterGoals()
{		
	$this->load->view("hrzone/contentWriterGoals", 'refresh');
}
 
public function developerGoals()
{		
	$this->load->view("hrzone/developerGoals", 'refresh');
}
 
public function designerGoals()
{		
	$this->load->view("hrzone/designerGoals", 'refresh');
}
 public function addYearGoal()
{		
	$this->load->view("hrzone/addYearGoal", 'refresh');
}
 
public function yearlyTeamGoal()
{		
	$this->load->view("hrzone/yearlyTeamGoal", 'refresh');
}
 
public function monthlyEmpGoal()
{		
	$this->load->view("hrzone/monthlyEmpGoal", 'refresh');
}
 
public function empKPIGoalsView()
{		
	$this->load->view("hrzone/empKPIGoalsView", 'refresh');
}
 public function empKPIGoalsEdit()
{		
	$this->load->view("hrzone/empKPIGoalsEdit", 'refresh');
}
 
public function employeeLeaveView()
{		
	$this->load->view("hrzone/employeeLeaveView", 'refresh');
}
 public function employeeToken()
{		
	$this->load->view("hrzone/employeeToken", 'refresh');
}
 public function employeeTimeList()
{		
	$this->load->view("hrzone/employeeTimeList", 'refresh');
}
 public function employeeSingleTimeList()
{		
	$this->load->view("hrzone/employeeSingleTimeList", 'refresh');
}
 public function hrNotification()
{		
	$this->load->view("hrzone/hrNotification", 'refresh');
}
 
 public function addUser()
{		
	$this->load->view("hrzone/addUser", 'refresh');
}
 
 public function userView()
{		
	$this->load->view("hrzone/userView", 'refresh');
}
 
public function addElCl()
{		
	$this->load->view("hrzone/addElCl", 'refresh');
}
 


}
