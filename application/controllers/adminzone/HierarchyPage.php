<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeAttendance extends CI_Controller {
	private $UserId;
	
	
	
	public function __construct(){
    parent::__construct();
    $this->load->model("EmployeeModel", 'EmpObj');
    $this->load->model("HrModel", "HrObj");
	$this->load->model("PayModel", "PayObj");
	$this->load->model("AttendanceModel");
	$this->load->library('Lib_user');
	$data= $this->session->userdata();
	$this->UserId = $data['auth']['id'];
  } 



	  
	public function myAttendance()
	{	
		$data['GoalMonth'] = $this->HrObj->KPIMonth();
		$data['GoalYear'] = $this->HrObj->YearGoal();
		$this->load->view("adminzone/SingleEmpAttendance", $data);
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
	
	public function EmployeeTimeList()
	{	
		$data['UserInfo'] = $this->EmpObj->getUser($this->UserId);
		$data['GoalYear'] = $this->HrObj->YearGoal();
		$data['GoalMonth'] = $this->HrObj->KPIMonth();
		// $data['userData'] = $this->AttendanceModel->getAllUser();
		// $data['UserAttend'] = $this->AttendanceModel->getAttendanceList();
		$this->load->view("adminzone/EmployeeTimeList", $data);
	}
	
	
	
	public function UserTimeList(){
		// print_r($_POST);die;
		// print_r($_GET);die;
		// echo $this->UserId = $id;
		if(!empty($this->input->get())) {
		
					$result = [];  

					$userData = $this->AttendanceModel->getEmp($this->UserId);
		 // print_r($userData);die;
					$result = [];  

					
					$getUserAttend = $this->AttendanceModel->getAttendanceList($this->UserId, $this->input->get('YearID'), $this->input->get('MonthID'));
					foreach($getUserAttend as $v) {
					// print_r($getUserAttend);die;
					$result[]= [
					'AttendenceDate'=>$v->AttendenceDate,
					'Status' => $v->Status,
					'checkInTime' => $v->checkInTime,
					'checkOutTime' => $v->checkOutTime,
					'CalDay' => date("D", strtotime($v->AttendenceDate))
					

					];
					}	
					$calResult = [];
					$calenderResult = $this->AttendanceModel->getMonthlyCalender($this->input->get('YearID'), $this->input->get('MonthID'));
					// echo "<pre>";
					// print_r($calenderResult);die;
					foreach($calenderResult as $value){
						$calResult[] = [
						'CalDay' => date("D", strtotime($value->calender_date))
						];
					}
		 
         echo json_encode(['data'=> $result, 'calenderDay'=>$calResult ]);
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
	}

	
	public function EmployeeApplyLeave()
	{	
		$start = date("Y-m-d");
		$end = date("Y");
		// $date = explode('-', $start_deadline);
		 // echo print_r($date);
		 // $YearID = $date[0];
		 // $MonthID = $date[1];
		$data['getUserCLEL'] = $this->AttendanceModel->getsingleEmployeeCLEL($this->UserId, $start, $end);
			// print_r($getUserCLEL);die;		
		$data["leaveEmpData"] = $this->AttendanceModel->getApplyLeaveData($this->UserId);
		$this->load->view("adminzone/applyLeave", $data);
	}
	
	
	

	public function userLeaveApply(){
		// print_r($_POST);
		// print_r($_FILES);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		if(!empty($this->input->post())) {
			$id = $this->UserId;
			$LeaveData = [
			'ReasonOfLeave' => $this->input->post('ReasonOfLeave'),
			'org_Email' => $this->input->post('org_Email'),
			'LeaveType' => $this->input->post('LeaveType'),
			'StartDate' => $this->input->post('StartDate'),
			'EndDate' => $this->input->post('EndDate'),
			'Description' => $this->input->post('Description'),
			'UserId' => $this->UserId
			
			];
			
			$lastInsertId = $this->AttendanceModel->insertLeaveData($LeaveData);
			// redirect('hrzone/Employee/employeeProfile', $emp_Id);
			// print_r($lastInsertId);die;
		 
		 
		 if($lastInsertId){
			 
		 
			$filesCount = count($_FILES['filePath']['name']);
                for($i = 0; $i < $filesCount; $i++){
                    $_FILES['file']['name']     = $_FILES['filePath']['name'][$i];
                    $_FILES['file']['type']     = $_FILES['filePath']['type'][$i];
                    $_FILES['file']['tmp_name'] = $_FILES['filePath']['tmp_name'][$i];
                    $_FILES['file']['error']     = $_FILES['filePath']['error'][$i];
                    $_FILES['file']['size']     = $_FILES['filePath']['size'][$i];
                    
                    // File upload configuration
                    $uploadPath = 'upload/UserDocument/';
                    $config['upload_path'] = $uploadPath;
                    $config['allowed_types'] = 'jpg|jpeg|png|gif|txt|text|doc|pdf';
                    //$config['max_size']    = '100';
                    //$config['max_width'] = '1024';
                    //$config['max_height'] = '768';
                    
                    // Load and initialize upload library
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    
                    // Upload file to server
                    if($this->upload->do_upload('file')){
                        // Uploaded file data
                        $fileData = $this->upload->data();
						
                        //$uploadData[$i]['filePath'] = $fileData['file_name'];
                        $data8= array(
						
						'leaveId'       => $lastInsertId,	
						'UserId'       => $this->UserId,
						'filePath' => $fileData['file_name']
						);
						
						//$this->db->insert('employee_documents', $data8);
						$this->AttendanceModel->insertLeaveApplyDoc($lastInsertId, $data8);
						
                    }
                } 
                } 
			
         $this->session->set_flashdata('message', '<script>alert("Your data inserted successfully");</script>');
			redirect('adminzone/EmployeeAttendance/EmployeeApplyLeave', 'refresh');
			
		}
		else{
			$this->session->set_flashdata('message', '<script>alert("Some error is occur!");</script>');
			redirect('adminzone/EmployeeAttendance/EmployeeApplyLeave', 'refresh');
		}
		
	}
	
	public function UserSingleDetails(){
		// print_r($_POST);die;
		// print_r($_GET);die;
		if(!empty($this->input->post())) {
		$id = $this->input->post('id');
	
		 $userData = $this->AttendanceModel->getsingleUserDetails($id);
		 // print_r($userData);die;
					$result = [];  

					foreach($userData as $v) {
					// print_r($calenderResult);die;
					
					$result[]= [
					'userId'=>$v->id,
					'userName' => $v->name,
					'employee_id' => $v->employee_id,
					'maritalStatus' => $v->maritalStatus,
					'joiningDate' => $v->joiningDate,
					'position' => $v->position,
					'EmpProfileImage' => $v->EmpProfileImage,
					
					
					];
					}	
					
		 
         
	
	
		echo json_encode(['data'=> $result]);	
		 
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
	}
	
	
	public function EmployeePay()
	{		
		$data['GoalYear'] = $this->HrObj->YearGoal();
		$data['GoalMonth'] = $this->HrObj->KPIMonth();	
		$this->load->view("adminzone/myPay", $data);
	}
	
	
	public function EmployeeSinglePay(){
		// print_r($_POST);die;
		// print_r($_GET);die;
		if(!empty($this->input->get())) {
		
			 
		 $userData = $this->AttendanceModel->getEmp($this->UserId);
		 // print_r($userData);die;
					$result = [];  

					foreach($userData as $v) {
					
					$getUserMonthlyWeekOff = $this->PayObj->getMonthlyWeekOff($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					$getUserCL = $this->PayObj->getInputCL($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					$getUserEL = $this->PayObj->getInputEL($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					$getUserMD = $this->PayObj->getInputMD($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					$getUserLWP = $this->PayObj->getInputLWP($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					$getUserP = $this->PayObj->getInputP($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					$getUserMonthDays = $this->PayObj->getInputMonthDays($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					$getUserWorkingDays = $this->PayObj->getWorkingDays($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					$getUserPayRoll = $this->PayObj->getPayRoll($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					$getUserMonthlySalary = $this->PayObj->getMonthlySalary($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					$calenderResult = $this->AttendanceModel->getMonthlyCalender($this->input->get('YearID'), $this->input->get('MonthID'));
					// print_r($calenderResult);die;
					$result[]= [
					'userId'=>$v->id,
					'userName' => $v->name,
					'employee_id' => $v->employee_id,
					'UserCL'=> $getUserCL,
					'UserEL'=> $getUserEL,
					'UserMD'=> $getUserMD,
					'UserLWP'=> $getUserLWP,
					'UserP'=> $getUserP,
					'WorkingDays'=> $getUserWorkingDays,
					'MonthDays'=> $getUserMonthDays,
					'PayRoll'=> $getUserPayRoll,
					'MonthlySalary'=> $getUserMonthlySalary,
					'MonthlyWeekOff'=> $getUserMonthlyWeekOff,
					'Usercalender'=>$calenderResult

					];
					}	
					
					
						$getUserMonthDays = $this->PayObj->getInputMonthDays($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					// echo "<pre>";
					// print_r($calenderResult);die;
					$calResult = [];
					foreach($getUserMonthDays as $value){
						$date = date_create($value->AttendenceDate);
						// echo die;
						$calResult[] = [
						
						'UsercalenderDay'=> date_format($date,"F"),
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
	
	
	public function SingleUserPay(){
		// print_r($_POST);die;
		// print_r($_GET);die;
		if(!empty($this->input->get())) {
		
			 
		$userData = $this->AttendanceModel->getEmp($this->input->get('id'));
		// print_r($userData);die;
			$result = [];  

					foreach($userData as $v) {
					
					$getUserMonthlyWeekOff = $this->PayObj->getMonthlyWeekOff($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					$getUserCL = $this->PayObj->getInputCL($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					$getUserEL = $this->PayObj->getInputEL($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					$getUserMD = $this->PayObj->getInputMD($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					$getUserLWP = $this->PayObj->getInputLWP($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					$getUserP = $this->PayObj->getInputP($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					$getUserMonthDays = $this->PayObj->getInputMonthDays($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					$getUserWorkingDays = $this->PayObj->getWorkingDays($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					$getUserPayRoll = $this->PayObj->getPayRoll($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					$getUserMonthlySalary = $this->PayObj->getMonthlySalary($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					$calenderResult = $this->AttendanceModel->getMonthlyCalender($this->input->get('YearID'), $this->input->get('MonthID'));
					$EmpDetails = $this->EmpObj->getSingleEmpDetails($v->id);
					$BankDetails = $this->EmpObj->getBankDetails($v->id);
					$Salary = $this->EmpObj->getSingleSalary($v->id);
					// print_r($calenderResult);die;
					$result[]= [
					'userId'=>$v->id,
					'userName' => $v->name,
					'employee_id' => $v->employee_id,
					'UserCL'=> $getUserCL,
					'UserEL'=> $getUserEL,
					'UserMD'=> $getUserMD,
					'UserLWP'=> $getUserLWP,
					'UserP'=> $getUserP,
					'WorkingDays'=> $getUserWorkingDays,
					'MonthDays'=> $getUserMonthDays,
					'PayRoll'=> $getUserPayRoll,
					'MonthlySalary'=> $getUserMonthlySalary,
					'MonthlyWeekOff'=> $getUserMonthlyWeekOff,
					'Usercalender'=>$calenderResult,
					'UserDetails'=>$EmpDetails,
					'UserBankDetails'=>$BankDetails,
					'UserSalary'=>$Salary

					];
					}	
					
					
						$getUserMonthDays = $this->PayObj->getInputMonthDays($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					// echo "<pre>";
					// print_r($calenderResult);die;
					$calResult = [];
					foreach($getUserMonthDays as $value){
						$date = date_create($value->AttendenceDate);
						// echo die;
						$calResult[] = [
						
						'UsercalenderDay'=> date_format($date,"F,Y"),
						'Usercalender'=> date_format($date,"Y")
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
