<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {
   private $UserId;
	
	
	
	public function __construct(){
    parent::__construct();
    $this->load->model("EmployeeModel", 'EmpObj');
    $this->load->model("HrModel", "HrObj");
	$this->load->model("AttendanceModel");
	$this->load->model("CommentModel");
	$this->load->library('Lib_user');
	$data= $this->session->userdata();
	
	
	$this->UserId = $data['auth']['id'];
	$this->name = $data['auth']['name'];
	$this->shortName = $data['auth']['shortName'];
  } 
 public function index()
{		
	$data['UserInfo'] = $this->EmpObj->getUser($this->UserId);
	$data['EmployeeDetails'] = $this->EmpObj->getEmpDetails($this->UserId);
	$data['EmployeeProfileImage'] = $this->EmpObj->getProfileImage($this->UserId);
	$this->load->view("adminzone/dashboard", $data);
}
 
 
 public function AutoAttendance(){
	 // print_r($_POST);
	 date_default_timezone_set("Asia/Kolkata");
		
	 $pre = $this->input->post('present');
	 // die;
	 if($pre !== false){
		 $date = date_default_timezone_set('Asia/Kolkata');
		$currDate = date("Y/m/d");
	 $userData = $this->AttendanceModel->getUserAttendance($this->UserId, $currDate);
		
			
		if($userData->Status === ""){
			
			$date = date_default_timezone_set('Asia/Kolkata');
			$MorningStartTime = new DateTime('10:00');
			$MorningEndTime = new DateTime('10:15');
			$FinalDateTime = new DateTime('18:30');
			$CurrentDateTime = new DateTime();
			// echo "Asif"; die;
			// $FinalDateTime = new DateTime();
			// $interval = $datetime1->diff($datetime2);
			// echo $check = $interval->format('%h:%I');
			if($MorningStartTime <= $CurrentDateTime && $MorningEndTime >= $CurrentDateTime){
			
				$this->AttendanceModel->UpdatePAttendence($this->UserId, $userData->id);
				
				$Url = 'Attendance/HrAttendance';
				$Notifydate = date('Y-m-d');
				$NotifyTime = date("h:i:s a");
				$typeUser = "Admin";
				$NotifyData = [
				'UserId' => $this->UserId,
				'Title' => "$this->shortName mark attendance!",
				// 'description'=> $this->input->post('ReasonOfLeave'),
				'NotifyTime' => $NotifyTime,
				'NotifyDate' =>$Notifydate,
				'designation'=> $typeUser,
				'TitleUrl' => $Url

				];

				$data = $this->CommentModel->InsertNotify($NotifyData);
				
				echo json_encode(['status'=>'P', 'message'=> 'Your Attendance is successfully done.!']);
				
			}else if($FinalDateTime > $CurrentDateTime && $MorningEndTime< $CurrentDateTime){
				$userInfo = $this->AttendanceModel->UpdateMDAttendence($this->UserId, $userData->id);
				
				$Url = 'Attendance/HrAttendance';
				$Notifydate = date('Y-m-d');
				$NotifyTime = date("h:i:s a");
				$typeUser = "Admin";
				$NotifyData = [
				'UserId' => $this->UserId,
				'Title' => "$this->shortName mark attendance As a MD!",
				// 'description'=> $this->input->post('ReasonOfLeave'),
				'NotifyTime' => $NotifyTime,
				'NotifyDate' =>$Notifydate,
				'designation'=> $typeUser,
				'TitleUrl' => $Url

				];

				$data = $this->CommentModel->InsertNotify($NotifyData);
				
				echo json_encode(['status'=>'MD', 'message'=> 'Your Attendance is successfully done.!!']);
				
			}else{
				echo json_encode(['status'=>'A', 'message'=> 'Attendance Time Up!']);
			}
			// echo json_encode(['status'=>1, 'message'=> 'Your Attendence is Successfully']);
		}
		else{
			echo json_encode(['status'=>0, 'message'=> 'Your attendance already taken!']);

		}
		
		
	 }
	 
 }
 
 
 
 
 
 
 
 
 
 public function myPay()
{		
	$this->load->view("adminzone/myPay", 'refresh');
}
 public function calender()
{		
	$this->load->view("adminzone/calender", 'refresh');
}
 
public function myGoals()
{		
	$this->load->view("adminzone/myGoals", 'refresh');
}
 public function myTime()
{		
	$this->load->view("adminzone/myTime", 'refresh');
}
 public function applyLeave()
{		
	$this->load->view("adminzone/applyLeave", 'refresh');
}
 
public function HRPolicy()
{		
	$this->load->view("adminzone/HRPolicy", 'refresh');
}
 public function myForm()
{		
	$this->load->view("adminzone/myForm", 'refresh');
}
 
public function files()
{		
	$this->load->view("adminzone/companyfile", 'refresh');
}

public function sheet()
{	
 //echo $this->session->userData('auth')['id'];
 
 $sections = $this->db->query("select * from linkaccess where name = '".$this->session->userData('auth')['id']."' ")->result_array();
		$count = count($sections);
		//echo $count;
if($count < 1 ){
  echo "Oops you dont have access to this resource";
	exit();
}
		
	$this->load->view("adminzone/sheet", 'refresh');
}
	
 
public function Appraisal()
{		
	$this->load->view("adminzone/Appraisal", 'refresh');
}
 
public function Feedback()
{		
	$this->load->view("adminzone/Feedback", 'refresh');
}
 
public function myTicket()
{		
	
}
 
public function myTeam()
{		
	$this->load->view("adminzone/myTeam", 'refresh');
}
 public function internalOpening()
{		
	$this->load->view("adminzone/internalOpening", 'refresh');
}
 public function employeeNotification()
{		
	$this->load->view("adminzone/employeeNotification", 'refresh');
}
 public function employeeSalarySlip()
{		
	$this->load->view("adminzone/employeeSalarySlip", 'refresh');
}
 
public function employeeAttendence()
{		
	$this->load->view("adminzone/employeeAttendence", 'refresh');
}
 
public function EmployeeTimeList()
{		
	$this->load->view("adminzone/EmployeeTimeList", 'refresh');
}
 


}
