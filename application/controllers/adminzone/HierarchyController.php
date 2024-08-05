<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hierarchy extends CI_Controller {
	private $UserId;
	
	
	
	public function __construct(){
    parent::__construct();
    $this->load->model("EmployeeModel", 'EmpObj');
    $this->load->model("HrModel", "HrObj");
	$this->load->model("PayModel", "PayObj");
	$this->load->model("AttendanceModel");
	$this->load->model("HierarchyModel");
	$this->load->library('Lib_user');
	$data= $this->session->userdata();
	$this->UserId = $data['auth']['id'];
  } 
 
	public function HierarchyPage()
	{	
		$datanode = $this->HierarchyModel->fetchChildren();
		echo "<pre>";
		print_r($datanode);die;
		
		$this->load->view("adminzone/HierarchyPage");
	}

	public function UserAttendance(){
		// print_r($_POST);die;
		// print_r($_GET);die;
		if(!empty($this->input->get())) {
		
					$result = [];  

					$userData = $this->AttendanceModel->getEmp($this->UserId);
		 // print_r($userData);die;
					$result = [];  

					
					$getUserCLEL = $this->AttendanceModel->getCLEL($this->UserId, $this->input->get('YearID'), $this->input->get('MonthID'));
					// print_r($getUserCLEL);die;
					foreach($userData as $v) {
					$getUserAttend = $this->AttendanceModel->getAttendanceList($this->UserId, $this->input->get('YearID'), $this->input->get('MonthID'));
					
					$result[]= [
					'userId'=>$v->id,
					'userName' => $v->name,
					'employee_id' => $v->employee_id,
					'UserCLEL'=> $getUserCLEL,
					'attendance'=> $getUserAttend

					];
					}	
					
					$calenderResult = $this->AttendanceModel->getMonthlyCalender($this->input->get('YearID'), $this->input->get('MonthID'));
					// echo "<pre>";
					// print_r($calenderResult);die;
					$calResult = [];
					foreach($calenderResult as $value){
						$date=date_create($value->calender_date);
						// echo die;
						$calResult[] = [
						
						'UsercalenderDay'=> date_format($date,"D"),
						'Usercalender'=> date_format($date,"j")
						];
					}
					
					
					$calenderHoliday = $this->AttendanceModel->getHolidayCalender($this->input->get('YearID'));
					// echo "<pre>";
					// print_r($calenderResult);die;
					$HResult = [];
					foreach($calenderHoliday as $value){
						$date=date_create($value->calender_date);
						// echo die;
						$HResult[] = [
						
						'holiday_list'=> $value->holiday_list,
						'HDay'=> date_format($date,"D"),
						'HName'=> date_format($date,"j F")
						];
					}
					
					
         echo json_encode(['data'=> $result, 'calenderDay'=>$calResult, 'CalHoliday'=>$HResult ]);
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
	}
	
	

	

}
