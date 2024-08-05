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
	$this->load->model("CommentModel");
	$this->load->library('Lib_user');
	$data= $this->session->userdata();
	$this->UserId = $data['auth']['id'];
	$this->name = $data['auth']['name'];
	$this->shortName = $data['auth']['shortName'];
	
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

					$userData = $this->AttendanceModel->getEmpAttSingle($this->UserId, $this->input->get('YearID'), $this->input->get('MonthID'));
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
					'employeeStatus' => $v->employeeStatus,
					'EmployeejoiningDate' => $v->EmployeejoiningDate,
					'employeeExitDate' => $v->employeeExitDate,
					'UserCLEL'=> $getUserCLEL,
					'attendance'=> $getUserAttend

					];
					}	
					
					$calenderResult = $this->AttendanceModel->getMonthlyCalender($this->input->get('YearID'), $this->input->get('MonthID'));
					// echo "<pre>";
					// print_r($calenderResult);die;
					$calResult = [];
					foreach($calenderResult as $value){
						$date=date_create($value->AttendenceDate);
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
	
	public function getEmployeeLeave(){
		// print_r($_POST);
		
		$date=date_create($this->input->post('insertStartDate_val'));
		// $date = $this->input->post('insertStartDate_val');
		$month = date_format($date,"m");
		$Year = date_format($date,"Y");
		
		// die;
		
		
		if(!empty($this->input->post())) {
         // $result = $this->HrObj->goalPintsYearWise($this->input->get('YearID'));
		
		
		$result = $this->AttendanceModel->getEmployeeLeave($this->UserId, $Year, $month);
			// $HResult = [];
					// foreach($result as $value){
						// $date=date_create($value->calender_date);
						// echo die;
						// $HResult[] = [
						
						// 'holiday_list'=> $value->holiday_list,
						// 'HDay'=> date_format($date,"D"),
						// 'HName'=> date_format($date,"j F")
						// ];
					// }
								
			
			// print_r($result);die;
         echo json_encode($result);
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
		
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
					'LateTime' => (strtotime($v->checkInTime) > strtotime("10:15:59"))? floor(round(abs(strtotime($v->checkInTime) - strtotime("10:15:00")) / 60,2)). " min":  "Nil",
					
					'CalDay' => date("D", strtotime($v->AttendenceDate))
					

					];
					}	
					$calResult = [];
					$calenderResult = $this->AttendanceModel->getMonthlyCalender($this->input->get('YearID'), $this->input->get('MonthID'));
					// echo "<pre>";
					// print_r($calenderResult);die;
					foreach($calenderResult as $value){
						$calResult[] = [
						'CalDay' => date("D", strtotime($value->AttendenceDate))
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
	
	
	public function EmployeeLeaveApply(){
		
				date_default_timezone_set("Asia/Kolkata");
		$Notifydate = date('Y-m-d');
		$NotifyTime = date("h:i:s a");
		// print_r($_POST);die;
		if(!empty($this->input->post())) {
		
				$LeaveData = [
				'ReasonOfLeave' => ($this->input->post('ReasonOfLeave') != "otherOption")? $this->input->post('ReasonOfLeave') : $this->input->post('ReasonOfOther'),
				'org_Email' => $this->input->post('org_Email'),
				'LeaveType' => implode(',', $this->input->post('LeaveType')),
				'StartDate' => $this->input->post('StartDate'),
				'EndDate' => $this->input->post('EndDate'),
				'Description' => $this->input->post('Description'),
				'UserId' => $this->UserId

				];

				$lastInsertId = $this->AttendanceModel->insertLeaveData($LeaveData);
				// redirect('hrzone/Employee/employeeProfile', $emp_Id);
				// print_r($lastInsertId);die;
				$Url = 'Attendance/employeeLeaveView';

				$NotifyData = [
				'UserId' => $this->UserId,
				'Title' => "$this->shortName sent CL/EL approval",
				'description' => $this->input->post('ReasonOfLeave'),
				'NotifyTime' => $NotifyTime,
				'NotifyDate' =>$Notifydate,
				'designation'=>'Admin',
				'TitleUrl' => $Url

				];

				$data = $this->CommentModel->InsertNotify($NotifyData);



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

			// $this->session->set_flashdata('message', '<script>alert("Your data inserted successfully");</script>');
			// redirect('adminzone/EmployeeAttendance/EmployeeApplyLeave', 'refresh');
			
			echo json_encode(['data'=> 'Success', 'message'=>'Your data inserted successfully!' ]);
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}	
		
	}

	public function userLeaveApply(){
		// $LeaveType = $this->input->post('LeaveType');
		// print_r($LeaveType);die;
		date_default_timezone_set("Asia/Kolkata");
		$Notifydate = date('Y-m-d');
		$NotifyTime = date("h:i:s a");
		// print_r($_POST);die;
		// print_r($_FILES);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		$sart = $this->input->post('StartDate');
	$end = $this->input->post('EndDate');
	if(strtotime($sart) <= strtotime($end)){
		
		
		$this->form_validation->set_rules('ReasonOfLeave', 'ReasonOfLeave', 'required');
		$this->form_validation->set_rules('StartDate', 'StartDate', 'required');
		$this->form_validation->set_rules('EndDate', 'EndDate', 'required');
		$this->form_validation->set_rules('org_Email', 'org_Email', 'required');
		// $this->form_validation->set_rules('LeaveType', 'LeaveType', 'required');
		$this->form_validation->set_rules('Description', 'Description', 'required');
		if($this->form_validation->run())
		{	
		
			 $start_deadline = $this->input->post('StartDate');
			 $end_deadline = $this->input->post('EndDate');
			 // $id = $this->UserId;
			$date = explode('-', $start_deadline);
			$dateE = explode('-', $end_deadline);
		 // echo print_r($date);die;
			$year = $date[0];
			 $month = $date[1];
			 $dayE = $dateE[2];
			 $day = $date[2];
			 $DiffDate = $dayE - $day;
			 $valiateDateDiff = $DiffDate + 1;
			 // die;
			$singleUserELCL = $this->AttendanceModel->getSingleEmpCLEL($this->UserId, $this->input->post('StartDate'));
			// print_r($singleUserELCL);die;
			
			$LeaveType = $this->input->post('LeaveType');
			if($LeaveType[0] == 'CL'){
				
				if($singleUserELCL->CL >= $valiateDateDiff)
			{
				
			$LeaveData = [
			'ReasonOfLeave' => (!empty($this->input->post('ReasonOfLeave')))? $this->input->post('ReasonOfLeave') : $this->input->post('ReasonOfOther'),
			'org_Email' => $this->input->post('org_Email'),
			'LeaveType' => implode(',', $this->input->post('LeaveType')),
			'StartDate' => $this->input->post('StartDate'),
			'EndDate' => $this->input->post('EndDate'),
			'Description' => $this->input->post('Description'),
			'UserId' => $this->UserId
			
			];
			
			$lastInsertId = $this->AttendanceModel->insertLeaveData($LeaveData);
			// redirect('hrzone/Employee/employeeProfile', $emp_Id);
			// print_r($lastInsertId);die;
			
			$Url = 'Attendance/employeeLeaveView';
	
	$NotifyData = [
			'UserId' => $this->UserId,
			'Title' => "$this->name generate a Leave request",
			'description' => $this->input->post('ReasonOfLeave'),
			'NotifyTime' => $NotifyTime,
			'NotifyDate' =>$Notifydate,
			'designation' =>'Admin',
			'TitleUrl' => $Url
			
			];
			
	$data = $this->CommentModel->InsertNotify($NotifyData);
			
			
		 
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
				
				
                }else{
			$this->session->set_flashdata('message', '<script>alert("You dont have as much CL as you applied for leave!");</script>');
			redirect('adminzone/EmployeeAttendance/EmployeeApplyLeave', 'refresh');
		} 
				
			}else if($LeaveType[0] == 'EL'){
				
				if($singleUserELCL->EL >= $valiateDateDiff)
			{
				
			$LeaveData = [
			'ReasonOfLeave' => $this->input->post('ReasonOfLeave'),
			'org_Email' => $this->input->post('org_Email'),
			'LeaveType' => implode(',', $this->input->post('LeaveType')),
			'StartDate' => $this->input->post('StartDate'),
			'EndDate' => $this->input->post('EndDate'),
			'Description' => $this->input->post('Description'),
			'UserId' => $this->UserId
			
			];
			
			$lastInsertId = $this->AttendanceModel->insertLeaveData($LeaveData);
			// redirect('hrzone/Employee/employeeProfile', $emp_Id);
			// print_r($lastInsertId);die;
			$Url = 'Attendance/employeeLeaveView';
	
	$NotifyData = [
			'UserId' => $this->UserId,
			'Title' => "$this->name generate a Leave request",
			'description' => $this->input->post('ReasonOfLeave'),
			'NotifyTime' => $NotifyTime,
			'NotifyDate' =>$Notifydate,
			'TitleUrl' => $Url
			
			];
			
	$data = $this->CommentModel->InsertNotify($NotifyData);
		 
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
				
				
                }else{
			$this->session->set_flashdata('message', '<script>alert("You dont have as much EL as you applied for leave!");</script>');
			redirect('adminzone/EmployeeAttendance/EmployeeApplyLeave', 'refresh');
		} 
				
			}else{
				
				
			$LeaveData = [
			'ReasonOfLeave' => $this->input->post('ReasonOfLeave'),
			'org_Email' => $this->input->post('org_Email'),
			'LeaveType' => implode(',', $this->input->post('LeaveType')),
			'StartDate' => $this->input->post('StartDate'),
			'EndDate' => $this->input->post('EndDate'),
			'Description' => $this->input->post('Description'),
			'UserId' => $this->UserId
			
			];
			
			$lastInsertId = $this->AttendanceModel->insertLeaveData($LeaveData);
			// redirect('hrzone/Employee/employeeProfile', $emp_Id);
			// print_r($lastInsertId);die;
			$Url = 'Attendance/employeeLeaveView';
	
	$NotifyData = [
			'UserId' => $this->UserId,
			'Title' => "$this->name generate a Leave request",
			'description' => $this->input->post('ReasonOfLeave'),
			'NotifyTime' => $NotifyTime,
			'NotifyDate' =>$Notifydate,
			'TitleUrl' => $Url
			
			];
			
	$data = $this->CommentModel->InsertNotify($NotifyData);
			
			
		 
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
				
				
			}
			
         $this->session->set_flashdata('message', '<script>alert("Your data inserted successfully");</script>');
			redirect('adminzone/EmployeeAttendance/EmployeeApplyLeave', 'refresh');
			
		}
		else{
			$this->session->set_flashdata('message', '<script>alert("Fill the all required fields!");</script>');
			redirect('adminzone/EmployeeAttendance/EmployeeApplyLeave', 'refresh');
		}
	}else{
		$this->session->set_flashdata('message', '<script>alert("Note: End DATE always greater than from the start DATE.");</script>');
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
					'joiningDate' => $v->EmployeejoiningDate,
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
		// $GoalMonth = $this->HrObj->KPIMonth();	
		// print_r($GoalMonth);die;
		$data['GoalMonth'] = $this->HrObj->KPIMonth();	
		$this->load->view("adminzone/myPay", $data);
	}
	
	
	public function EmployeeMonthlyUserCrousel()
	{		
		
		// print_r($_POST);die;
		if(!empty($this->input->post())) {
		$YearV = $this->input->post('YearID');
		
		$YearCurr = (array)$YearV;
	
		 $GoalMonth = $this->HrObj->KPIMonth();
					$curMonth = date("n");
					$curnYear = date("Y");
		 // print_r($GoalMonth);die;
					$result = [];  

					foreach($GoalMonth as $v) {
					// print_r($calenderResult);die;
					$statusCode = (array)"";
					$card = "";
					if($YearV == $curnYear && $v->month_Id == $curMonth){
						$statusCode = (array)"current_status";
						$card = (array)"Current";
					}else if($YearV == $curnYear && $v->month_Id < $curMonth){
						$statusCode = (array)"completed_status";
						$card = (array)"completed";
					}else if($YearV < $curnYear){
						$statusCode = (array)"completed_status";
						$card = (array)"completed";
					}else if($YearV == $curnYear && $v->month_Id > $curMonth){
						$statusCode = (array)"upcoming_status";
						$card = (array)"Upcoming";
					}else if($YearV > $curnYear){
						$statusCode = (array)"upcoming_status";
						$card = (array)"Upcoming";
					}
					
					$result[]= [
					'month_Id'=>$v->month_Id,
					'month' => $v->month,
					'Year' => $YearCurr,
					'statusCode' => $statusCode,
					'card' => $card,
					
					
					];
					}	
					
		 
         
	
	
		echo json_encode(['data'=> $result]);	
		 
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}

		
		
	}
	
	
	
	
	
public function EmployeeSinglePay(){
		// print_r($_POST);die;
		// print_r($_GET);die;
		$ab = $this->input->get('MonthID');
		$currMonth = date('n');
	
		if(!empty($this->input->get())) {
		
			 $aa = $this->input->get('YearID');
			 $ab = $this->input->get('MonthID');
			 $GrossB = (array)$ab; 
			 $Grossa = (array)$aa; 
		 $userData = $this->AttendanceModel->getEmp($this->UserId);
		 // print_r($userData);die;
					$result = [];  

					foreach($userData as $v) {
					$joiningdate = date("m",strtotime($v->EmployeejoiningDate))*1;
					if($this->input->get('MonthID') < $joiningdate){
						$salstatus = 1;
					}else{
						$salstatus = 2;
						
					}
					
					
					
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
					'join' => $salstatus,
					'employee_id' => $v->employee_id,
					'UserCL'=> $getUserCL,
					'MID'=> $GrossB,
					'YID'=> $Grossa,
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
	
	
	
	
	
	
	public function EmployeeThreeMonthPay(){
		// print_r($_POST);die;
		// print_r($_GET);die;
		if(!empty($this->input->get())) {
				$aay = $this->input->get('YearID');
				$aam = $this->input->get('MonthID');
				// $curMonth = date("n");
				// if($aab = "next"){
					// $dataM = $curMonth - 3;
				// } 
					$crDate = $aay.'/'.$aam.'/01';
					$date = date_create($crDate);
					date_sub($date, date_interval_create_from_date_string('1 month'));
					$dy1 = date_format($date, 'Y');
					$dm1 = date_format($date, 'm');
					$date1 = date_create($crDate);
					date_sub($date1, date_interval_create_from_date_string('2 month'));
					$dy2 = date_format($date1, 'Y');
					$dm2 = date_format($date1, 'm');
					$date2 = date_create($crDate);
					date_sub($date2, date_interval_create_from_date_string('3 month'));
					$dy3 = date_format($date2, 'Y');
					$dm3 = date_format($date2, 'm');

					$arraydate = array(

					array(
					"id" => 1,
					"year" => $dy1,
					"month" => $dm1
					),

					array(
					"id" => 2,
					"year" => $dy2,
					"month" => $dm2
					),

					array(
					"id" => 3,
					"year" => $dy3,
					"month" => $dm3
					)

					);

		 // $userData = $this->AttendanceModel->getEmp($this->UserId);
		 // print_r($arraydate);die;
					$result = [];  

					foreach($arraydate as $v) {
					
					$getUserMonthlyWeekOff = $this->PayObj->getMonthlyWeekOff($this->UserId, $v['year'], $v['month']);
					$getUserCL = $this->PayObj->getInputCL($this->UserId, $v['year'], $v['month']);
					$getUserEL = $this->PayObj->getInputEL($this->UserId, $v['year'], $v['month']);
					$getUserMD = $this->PayObj->getInputMD($this->UserId, $v['year'], $v['month']);
					$getUserLWP = $this->PayObj->getInputLWP($this->UserId, $v['year'], $v['month']);
					$getUserP = $this->PayObj->getInputP($this->UserId, $v['year'], $v['month']);
					$getUserMonthDays = $this->PayObj->getInputMonthDays($this->UserId, $v['year'], $v['month']);
					$getUserWorkingDays = $this->PayObj->getWorkingDays($this->UserId, $v['year'], $v['month']);
					$getUserPayRoll = $this->PayObj->getPayRoll($this->UserId, $v['year'], $v['month']);
					$getUserMonthlySalary = $this->PayObj->getMonthlySalary($this->UserId, $v['year'], $v['month']);
					$calenderResult = $this->AttendanceModel->getMonthlyCalender($this->UserId, $v['year'], $v['month']);
					// print_r($calenderResult);die;
					
					$datecr = $v['year'].'/'.$v['month'].'/01';
					$date = date_create($datecr);
						// 'UsercalenderDay'=> date_format($date,"F"),
					
					$result[]= [
					'userId'=>$v['id'],
					'year' => $v['year'],
					'datemonth' => $v['month'],
					'month' => date_format($date,"F"),
					'UserCL'=> $getUserCL,
					// 'MID'=> $GrossB,
					// 'YID'=> $Grossa,
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
					
					
						
					
		 
         echo json_encode(['data'=> $result]);
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
public function SingleUserPay(){
		// print_r($_POST);die;
		// print_r($_GET);die;
		
		// echo $currMonth;die;
		$MonthCheck = $this->input->get('MonthID');
	$YearID = $this->input->get('YearID');
	$currMonth = date('n');
	$curnYear = date("Y");
		// echo $currMonth;die;

	if($YearID == $curnYear && $MonthCheck < $currMonth || $YearID < $curnYear){
		
		if(!empty($this->input->get())) {
		
			 
		$userData = $this->AttendanceModel->getEmp($this->UserId);
		// print_r($userData);die;
			$result = [];  

					foreach($userData as $v) {
					
					$joiningdate = date("m",strtotime($v->EmployeejoiningDate))*1;
					if($this->input->get('MonthID') < $joiningdate){
						$salstatus = 1;
					}else{
						$salstatus = 2;
						
					}
					
					
					$getUserMonthlyWeekOff = $this->PayObj->getMonthlyWeekOff($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					$getUserCL = $this->PayObj->getInputCL($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					$getUserEL = $this->PayObj->getInputEL($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					$getUserMD = $this->PayObj->getInputMD($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					$getUserLWP = $this->PayObj->getInputLWP($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					$getUserP = $this->PayObj->getInputP($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					$getUserMonthDays = $this->PayObj->getInputMonthDays($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					$getUserWorkingDays = $this->PayObj->getWorkingDays($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					$getUserPayRoll = $this->PayObj->getPayRoll($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					$getUserMonthlySalary = $this->PayObj->getMonthlySalary22($v->id, $this->input->get('YearID'), $this->input->get('MonthID'),$salstatus );
					$getUserMonthlyDeduction = $this->PayObj->getMonthlyDeduction($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					$getUserMonthlySalaryInWord = $this->PayObj->getMonthlySalaryInWord22($v->id, $this->input->get('YearID'), $this->input->get('MonthID'),$salstatus);
					
					
					$calenderResult = $this->AttendanceModel->getMonthlyCalender($this->input->get('YearID'), $this->input->get('MonthID'));
					$EmpDetails = $this->EmpObj->getSingleEmpDetails($v->id);
					$BankDetails = $this->EmpObj->getBankDetails($v->id);
					
					//$Salary = $this->EmpObj->getSingleSalary($v->id);
					 if($MonthID > 3 and $YearID > 2021 ){
					$Salary = $this->EmpObj->getSingleSalary($v->id);
					}else{
                    $Salary = $this->EmpObj->getSingleSalary21($v->id);
					}
					
						$data = 0;
					$pp = (array) $data; 

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
					'MonthlyDeduction'=> $getUserMonthlyDeduction,
					'SalaryInWord'=> $getUserMonthlySalaryInWord,
					'MonthlyWeekOff'=> $getUserMonthlyWeekOff,
					'Usercalender'=>$calenderResult,
					'UserDetails'=>$EmpDetails,
					'UserBankDetails'=>$BankDetails,
					'UserSalary'=>$Salary

					];
					}	
					
					
						$getUserMonthDays = $this->PayObj->getInputMonthDays($this->UserId, $this->input->get('YearID'), $this->input->get('MonthID'));
					// echo "<pre>";
					// print_r($calenderResult);die;
					$calResult = [];
					foreach($getUserMonthDays as $value){
						$date = date_create($value->AttendenceDate);
						// echo die;
						$calResult[] = [
						
						'UsercalenderDay'=> date_format($date,"F_Y"),
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
		
	}else{
	$this->session->set_flashdata('message', '<script>alert("this is the only view of previous month only!");</script>');
		redirect('adminzone/EmployeeAttendance/EmployeePay', 'refresh');
	}
		
		
		
}




	
public function GeneratePDF($Id=null){
	
	
	
	$YearID = $this->uri->segment('5');
	$MonthID = $this->uri->segment('6');
	
	
	
	$currMonth = date('n');
	$curnYear = date("Y");
		// echo $currMonth;die;
	$MonthCheck = $this->uri->segment('6');
	if($YearID == $curnYear && $MonthCheck < $currMonth || $YearID < $curnYear){
	
	// echo "ASIF";die;

	$Id = $this->UserId;
	      
	$userData = $this->PayObj->getEmp($Id);
	// ech$this->uri->segment('6');o $userData->id;
	// print_r($userData);die;
		
					$getUserMonthlyWeekOff = $this->PayObj->getMonthlyWeekOff($userData->id, $YearID, $MonthID);
					// print_r($getUserMonthlyWeekOff);die;
					$getUserCL = $this->PayObj->getCL($userData->id, $YearID, $MonthID);
					$getUserEL = $this->PayObj->getEL($userData->id, $YearID, $MonthID);
					$getUserMD = $this->PayObj->getMD($userData->id, $YearID, $MonthID);
					$getUserLWP = $this->PayObj->getLWP($userData->id, $YearID, $MonthID);
					$getUserP = $this->PayObj->getP($userData->id, $YearID, $MonthID);
					$getUserMonthDays = $this->PayObj->getMonthDays($userData->id, $YearID, $MonthID);
					$getUserWorkingDays = $this->PayObj->getWorkingASIFDays($userData->id, $YearID, $MonthID);
					$getUserPayRoll = $this->PayObj->getPayASIFRoll($userData->id, $YearID, $MonthID);
					$getUserMonthlySalary = $this->PayObj->getMonthlyASIFSalary($userData->id, $YearID, $MonthID);
					$getUserMonthlyDeduction = $this->PayObj->getMonthlyASIFDeduction($userData->id, $YearID, $MonthID);
					$getUserMonthlySalaryInWord = $this->PayObj->getMonthlyASIFSalaryInWord($userData->id, $YearID, $MonthID);
					
					$calenderResult = $this->AttendanceModel->getMonthlyCalender($YearID, $MonthID);
					$EmpDetails = $this->EmpObj->getEmpDetails($userData->id);
					$BankDetails = $this->EmpObj->getBankASIFDetails($userData->id);
					
					 if($MonthID > 3 and $YearID > 2021 ){
					$Salary = $this->EmpObj->getSalary($userData->id);
					}else{
                    $Salary = $this->EmpObj->getSalary21($userData->id);
					}
					$getUserMonthDays = $this->PayObj->getMonthDays($userData->id, $YearID, $MonthID);
					// echo "<pre>";
					// print_r($calenderResult);die;
					
						$date = date_create($getUserMonthDays->AttendenceDate);
						// echo die;
					
						$UsercalenderDay = date_format($date,"F_Y");
						$Usercalender = date_format($date,"Y");
	
	
	$NAme = "Ghufran Ahmad";
	$this->load->library('m_pdf');
	
	$styleSalary = file_get_contents('Assets/css/Salary-admin.css');
	$stylesheet = file_get_contents('Assets/css/SalarySlip.css');
	$this->m_pdf->pdf->WriteHTML($styleSalary,1);	// The parameter 1 tells that this is css/style only and no body/html/text
	$this->m_pdf->pdf->WriteHTML($stylesheet, 1);	// The parameter 1 tells that this is css/style only and no body/html/text
	$inputPath = '<?= base_url("Assets/img/qdxPrintLogo.png") ?>';
	$html='<div class=" mb-4" >
                     	
							
							<div class="">
							
								<div class="table-responsive">
									<table class="table table-bordered table-sm" id="dataTable" width="100%">
										
										<thead>
										
												
											<tr>
												<td colspan="5" class="fc qdxPrintCF" style="padding:0px!important;">
												<br><br>
												<span class="qdxUpper" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.COMPANY_NAME.</span>
												<hr class="hr1">
												<span class="qdxSlip qdxpLower">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Salary Statement for the Month of '.$UsercalenderDay.'</span>
												
												
												<hr style="border-bottom: 1px solid #e3e6f0; margin-bottom:7px;">
												
												
												
												<span class="qdxName">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Employee Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$userData->name.'</span>
												
												
												</td>
												<th class="fc qdxPrintCF">
												<img class="logoPrint" style="height: 131px; width: 165px; padding-left: 20px;" src="'.base_url('Assets/img/HRPrintLogo.png').'"  alt="Cinque Terre"></th>
													
											</tr>
										</thead>
										
										<tbody>
											<tr>
												
												<td colspan="2" class="qdxSlip">Employee Id</td>
												<td class="qdxSlip">'.$userData->employee_id.'</td>
												<td colspan="2" class="qdxSlip">Designation</td>
												<td class="qdxSlip">'.$EmpDetails->position.'</td>
												
												
													
											</tr>
											
											
											<tr>
												
												<td colspan="2" class="qdxSlip">Days Presents</td>
												<td class="qdxSlip">'.$getUserPayRoll.'</td>
												
												
												<td colspan="2" class="qdxSlip">Paid Leaves</td>
												<td class="qdxSlip">'.$getUserCL->wcount.'</td>
												
												
											</tr>
											<tr>
												
												<td colspan="2" class="qdxSlip">Accounts Details</td>
												<td class="qdxSlip">'.$BankDetails->bankAccount.'</td>
												
												
												<td colspan="2" class="qdxSlip">Account Bank</td>
												<td class="qdxSlip">'.$BankDetails->bankName.'</td>
												
												
												
											</tr>
											
											<tr>
												
												<td colspan="2" class="qdxSlip">Salary for the Month</td>
												
												<td class="qdxSlip">'.$UsercalenderDay.'</td>
												
												
												<td colspan="2" class="qdxSlip">Leave Without Pay</td>
												<td class="qdxSlip">'.$getUserLWP->wcount.'</td>
												                     
												                     
												                    
											</tr>
											<tr>
												
												<td colspan="3" class="qdxSlip"><div class="qdxCenter  TotalErn">Earnings</div></td>
												<td colspan="3" class="qdxSlip"><div class="qdxCenter  TotalErn">Deductions</div></td>
												
												
											</tr>
											
											<tr>
												
												<td colspan="2" class="qdxSlip"></td>
												<td class="qdxSlip">Amount</td>
												<td colspan="2" class="fc qdxPrintCF"></td>
												<td class="qdxSlip">Amount</td>
												
											</tr>
											
											<tr>
												
												<td colspan="2" class="qdxSlip">Basic Salary</td>
												<td class="qdxSlip">'.$Salary->basicSalary.'</td>
												<td colspan="2" class="qdxSlip">E. Provident Fund</td>
												<td class="qdxSlip">'.$Salary->eProvidentFund.'</td>
												
											</tr>
											<tr>
												
												<td colspan="2" class="qdxSlip">Dearness Allowance</td>
												<td class="qdxSlip">'.$Salary->dearnessAllowance.'</td>
												<td colspan="2" class="qdxSlip">ESI</td>
												<td class="qdxSlip">'.$Salary->ESI.'</td>
												
											</tr>
											<tr>
												
												<td colspan="2" class="qdxSlip">HRA</td>
												<td class="qdxSlip">'.$Salary->HRA.'</td>
												<td colspan="2" class="qdxSlip">Professional Tax</td>
												<td class="qdxSlip">'.$Salary->professionalTax.'</td>
												
											</tr>
											
											<tr>
												
												<td colspan="2" class="qdxSlip">Conveyance</td>
												<td class="qdxSlip">'.$Salary->Conveyance.'</td>
												<td colspan="2" class="qdxSlip">I. Tax</td>
												<td class="qdxSlip">'.$Salary->ITax.'</td>
												
											</tr>
											
											<tr>
												
												<td colspan="2" class="qdxSlip">Medical Allowance</td>
												<td class="qdxSlip">'.$Salary->Medical.'</td>
												<td colspan="2" class="qdxSlip">Loan</td>
												<td class="qdxSlip">'.$Salary->Loan.'</td>
												
											</tr>
											
											<tr>
												
												<td colspan="2" class="qdxSlip">Mobile Expenses</td>
												<td class="qdxSlip">'.$Salary->mobileExpenses.'</td>
												<td colspan="2" class="qdxSlip">Advance</td>
												<td class="qdxSlip">'.$Salary->Advance.'</td>
												
											</tr>
											
											<tr>
												
												<td colspan="2" class="qdxSlip">Special Allowance</td>
												<td class="qdxSlip">'.$Salary->specialAllowance.'</td>
												
												
												<td colspan="2" class="qdxSlip">Misc.Deduction</td>
												<td class="qdxSlip">'.$getUserMonthlyDeduction.'</td>
												
											</tr>
											
											<tr>
												
												<td colspan="2" class="qdxSlip">Performance Incentives</td>
												<td class="qdxSlip">'.$Salary->performanceIncentives.'</td>
												<td colspan="2" class="qdxSlip"></td>
												<td class="qdxSlip"></td>
												
											</tr>
											
											<tr>
												
												<td colspan="2" class="qdxSlip">Arrears/Other Ern.</td>
												<td class="qdxSlip">'.$Salary->otherOrArrears.'</td>
												<td colspan="2" class="qdxSlip"></td>
												<td class="qdxSlip"></td>
												
											</tr>
											
											<tr>
												
												<td colspan="2" class="qdxSlip"><div class="qdxCenter">Total Earnings</div></td>
												<td class="qdxSlip">'.$getUserMonthlySalary.'</td>
												
												<td colspan="2" class="qdxSlip">Total Deduction</td>
												<td class="qdxSlip">'.$getUserMonthlyDeduction.'</td>
												
											</tr>
											
											<tr>
												
												<td colspan="2" class="qdxSlip"><div class="qdxCenter  TotalErn">Net Salary Rs.</div></td>
												<td colspan="4" class="qdxSlip"><div class="qdxCenter  TotalErn">'.$getUserMonthlySalaryInWord.'</div></td>
												
											</tr>
											
										
										
										
										
										
										</tbody>
									</table>
								</div>
								
								
							
							</div>
							
                    <!-- Content Row -->
                    </div>';
	$pdfFilePath ="SalarySlip/$UsercalenderDay-$Id.pdf";
	
	
	$this->m_pdf->pdf->SetHTMLFooter($footer);
	$this->load->library('m_pdf');
	 // $mpdf=new mPDF();
	$this->m_pdf->pdf->WriteHTML($html,2);
	$this->m_pdf->pdf->Output($pdfFilePath, "D");
	// $filename = "mpdf.pdf";
	// if (file_exists($pdfFilePath)) {
	// header('Content-type: application/force-download');
	// header('Content-Disposition: attachment; filename='.$filename);
	// readfile($filename);
	// }
	  // $this->load->helper('download');
		
      // $file = base_url().'Document/SalarySlip/'.$Id;
      // force_download($file, NULL);
		 
    // redirect('hrzone/Pay/DownloadPDF/'.$Id, 'refresh');  
	}else{
	$this->session->set_flashdata('message', '<script>alert("Generating a current month salary is not allowed!");</script>');
		redirect('adminzone/EmployeeAttendance/EmployeePay', 'refresh');
	}	
		
} 





public function GeneratePrePDF($Id=null){
	
	
	
	$YearID = $this->uri->segment('4');
	$MonthID = $this->uri->segment('5');
	
	
	
	$currMonth = date('n');
	$curnYear = date("Y");
		// echo $currMonth;die;
	$MonthCheck = $this->uri->segment('5');
	if($YearID == $curnYear && $MonthCheck < $currMonth || $YearID < $curnYear){
	
	// echo "ASIF";die;

	$Id = $this->UserId;
	      
	$userData = $this->PayObj->getEmp($Id);
	// ech$this->uri->segment('6');o $userData->id;
	// print_r($userData);die;
		
					$getUserMonthlyWeekOff = $this->PayObj->getMonthlyWeekOff($userData->id, $YearID, $MonthID);
					// print_r($getUserMonthlyWeekOff);die;
					$getUserCL = $this->PayObj->getCL($userData->id, $YearID, $MonthID);
					$getUserEL = $this->PayObj->getEL($userData->id, $YearID, $MonthID);
					$getUserMD = $this->PayObj->getMD($userData->id, $YearID, $MonthID);
					$getUserLWP = $this->PayObj->getLWP($userData->id, $YearID, $MonthID);
					$getUserP = $this->PayObj->getP($userData->id, $YearID, $MonthID);
					$getUserMonthDays = $this->PayObj->getMonthDays($userData->id, $YearID, $MonthID);
					$getUserWorkingDays = $this->PayObj->getWorkingASIFDays($userData->id, $YearID, $MonthID);
					$getUserPayRoll = $this->PayObj->getPayASIFRoll($userData->id, $YearID, $MonthID);
					$getUserMonthlySalary = $this->PayObj->getMonthlyASIFSalary($userData->id, $YearID, $MonthID);
					$getUserMonthlyDeduction = $this->PayObj->getMonthlyASIFDeduction($userData->id, $YearID, $MonthID);
					$getUserMonthlySalaryInWord = $this->PayObj->getMonthlyASIFSalaryInWord($userData->id, $YearID, $MonthID);
					
					$calenderResult = $this->AttendanceModel->getMonthlyCalender($YearID, $MonthID);
					$EmpDetails = $this->EmpObj->getEmpDetails($userData->id);
					$BankDetails = $this->EmpObj->getBankASIFDetails($userData->id);
					
					 if($MonthID > 3 and $YearID > 2021 ){
					$Salary = $this->EmpObj->getSalary($userData->id);
					}else{
                    $Salary = $this->EmpObj->getSalary21($userData->id);
					};
					
					$getUserMonthDays = $this->PayObj->getMonthDays($userData->id, $YearID, $MonthID);
					// echo "<pre>";
					// print_r($calenderResult);die;
					
						$date = date_create($getUserMonthDays->AttendenceDate);
						// echo die;
					
						$UsercalenderDay = date_format($date,"F_Y");
						$Usercalender = date_format($date,"Y");
	
	
	$NAme = "Ghufran Ahmad";
	$this->load->library('m_pdf');
	
	$styleSalary = file_get_contents('Assets/css/Salary-admin.css');
	$stylesheet = file_get_contents('Assets/css/SalarySlip.css');
	$this->m_pdf->pdf->WriteHTML($styleSalary,1);	// The parameter 1 tells that this is css/style only and no body/html/text
	$this->m_pdf->pdf->WriteHTML($stylesheet, 1);	// The parameter 1 tells that this is css/style only and no body/html/text
	$inputPath = '<?= base_url("Assets/img/qdxPrintLogo.png") ?>';
	$html='<div class=" mb-4" >
                     	
							
							<div class="">
							
								<div class="table-responsive">
									<table class="table table-bordered table-sm" id="dataTable" width="100%">
										
										<thead>
										
												
											<tr>
												<td colspan="5" class="fc qdxPrintCF" style="padding:0px!important;">
												<br><br>
												<span class="qdxUpper" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.COMPANY_NAME.'</span>
												<hr class="hr1">
												<span class="qdxSlip qdxpLower">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Salary Statement for the Month of '.$UsercalenderDay.'</span>
												
												
												<hr style="border-bottom: 1px solid #e3e6f0; margin-bottom:7px;">
												
												
												
												<span class="qdxName">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Employee Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$userData->name.'</span>
												
												
												</td>
												<th class="fc qdxPrintCF">
												<img class="logoPrint" style="height: 131px; width: 165px; padding-left: 20px;" src="'.base_url('Assets/img/qdxPrintLogo.png').'"  alt="Cinque Terre"></th>
													
											</tr>
										</thead>
										
										<tbody>
											<tr>
												
												<td colspan="2" class="qdxSlip">Employee Id</td>
												<td class="qdxSlip">'.$userData->employee_id.'</td>
												<td colspan="2" class="qdxSlip">Designation</td>
												<td class="qdxSlip">'.$EmpDetails->position.'</td>
												
												
													
											</tr>
											
											
											<tr>
												
												<td colspan="2" class="qdxSlip">Days Presents</td>
												<td class="qdxSlip">'.$getUserPayRoll.'</td>
												
												
												<td colspan="2" class="qdxSlip">Paid Leaves</td>
												<td class="qdxSlip">'.$getUserCL->wcount.'</td>
												
												
											</tr>
											<tr>
												
												<td colspan="2" class="qdxSlip">Accounts Details</td>
												<td class="qdxSlip">'.$BankDetails->bankAccount.'</td>
												
												
												<td colspan="2" class="qdxSlip">Account Bank</td>
												<td class="qdxSlip">'.$BankDetails->bankName.'</td>
												
												
												
											</tr>
											
											<tr>
												
												<td colspan="2" class="qdxSlip">Salary for the Month</td>
												
												<td class="qdxSlip">'.$UsercalenderDay.'</td>
												
												
												<td colspan="2" class="qdxSlip">Leave Without Pay</td>
												<td class="qdxSlip">'.$getUserLWP->wcount.'</td>
												                     
												                     
												                    
											</tr>
											<tr>
												
												<td colspan="3" class="qdxSlip"><div class="qdxCenter  TotalErn">Earnings</div></td>
												<td colspan="3" class="qdxSlip"><div class="qdxCenter  TotalErn">Deductions</div></td>
												
												
											</tr>
											
											<tr>
												
												<td colspan="2" class="qdxSlip"></td>
												<td class="qdxSlip">Amount</td>
												<td colspan="2" class="fc qdxPrintCF"></td>
												<td class="qdxSlip">Amount</td>
												
											</tr>
											
											<tr>
												
												<td colspan="2" class="qdxSlip">Basic Salary</td>
												<td class="qdxSlip">'.$Salary->basicSalary.'</td>
												<td colspan="2" class="qdxSlip">E. Provident Fund</td>
												<td class="qdxSlip">'.$Salary->eProvidentFund.'</td>
												
											</tr>
											<tr>
												
												<td colspan="2" class="qdxSlip">Dearness Allowance</td>
												<td class="qdxSlip">'.$Salary->dearnessAllowance.'</td>
												<td colspan="2" class="qdxSlip">ESI</td>
												<td class="qdxSlip">'.$Salary->ESI.'</td>
												
											</tr>
											<tr>
												
												<td colspan="2" class="qdxSlip">HRA</td>
												<td class="qdxSlip">'.$Salary->HRA.'</td>
												<td colspan="2" class="qdxSlip">Professional Tax</td>
												<td class="qdxSlip">'.$Salary->professionalTax.'</td>
												
											</tr>
											
											<tr>
												
												<td colspan="2" class="qdxSlip">Conveyance</td>
												<td class="qdxSlip">'.$Salary->Conveyance.'</td>
												<td colspan="2" class="qdxSlip">I. Tax</td>
												<td class="qdxSlip">'.$Salary->ITax.'</td>
												
											</tr>
											
											<tr>
												
												<td colspan="2" class="qdxSlip">Medical Allowance</td>
												<td class="qdxSlip">'.$Salary->Medical.'</td>
												<td colspan="2" class="qdxSlip">Loan</td>
												<td class="qdxSlip">'.$Salary->Loan.'</td>
												
											</tr>
											
											<tr>
												
												<td colspan="2" class="qdxSlip">Mobile Expenses</td>
												<td class="qdxSlip">'.$Salary->mobileExpenses.'</td>
												<td colspan="2" class="qdxSlip">Advance</td>
												<td class="qdxSlip">'.$Salary->Advance.'</td>
												
											</tr>
											
											<tr>
												
												<td colspan="2" class="qdxSlip">Special Allowance</td>
												<td class="qdxSlip">'.$Salary->specialAllowance.'</td>
												
												
												<td colspan="2" class="qdxSlip">Misc.Deduction</td>
												<td class="qdxSlip">'.$getUserMonthlyDeduction.'</td>
												
											</tr>
											
											<tr>
												
												<td colspan="2" class="qdxSlip">Performance Incentives</td>
												<td class="qdxSlip">'.$Salary->performanceIncentives.'</td>
												<td colspan="2" class="qdxSlip"></td>
												<td class="qdxSlip"></td>
												
											</tr>
											
											<tr>
												
												<td colspan="2" class="qdxSlip">Arrears/Other Ern.</td>
												<td class="qdxSlip">'.$Salary->otherOrArrears.'</td>
												<td colspan="2" class="qdxSlip"></td>
												<td class="qdxSlip"></td>
												
											</tr>
											
											<tr>
												
												<td colspan="2" class="qdxSlip"><div class="qdxCenter">Total Earnings</div></td>
												<td class="qdxSlip">'.$getUserMonthlySalary.'</td>
												
												<td colspan="2" class="qdxSlip">Total Deduction</td>
												<td class="qdxSlip">'.$getUserMonthlyDeduction.'</td>
												
											</tr>
											
											<tr>
												
												<td colspan="2" class="qdxSlip"><div class="qdxCenter  TotalErn">Net Salary Rs.</div></td>
												<td colspan="4" class="qdxSlip"><div class="qdxCenter  TotalErn">'.$getUserMonthlySalaryInWord.'</div></td>
												
											</tr>
											
										
										
										
										
										
										</tbody>
									</table>
								</div>
								
								
							
							</div>
							
                    <!-- Content Row -->
                    </div>';
	$pdfFilePath ="SalarySlip/$UsercalenderDay-$Id.pdf";
	
	
	$this->m_pdf->pdf->SetHTMLFooter($footer);
	$this->load->library('m_pdf');
	 // $mpdf=new mPDF();
	$this->m_pdf->pdf->WriteHTML($html,2);
	$this->m_pdf->pdf->Output($pdfFilePath, "D");
	// $filename = "mpdf.pdf";
	// if (file_exists($pdfFilePath)) {
	// header('Content-type: application/force-download');
	// header('Content-Disposition: attachment; filename='.$filename);
	// readfile($filename);
	// }
	  // $this->load->helper('download');
		
      // $file = base_url().'Document/SalarySlip/'.$Id;
      // force_download($file, NULL);
		 
    // redirect('hrzone/Pay/DownloadPDF/'.$Id, 'refresh');  
	}else{
	$this->session->set_flashdata('message', '<script>alert("Generating a current month salary is not allowed!");</script>');
		redirect('adminzone/EmployeeAttendance/EmployeePay', 'refresh');
	}	
		
} 






	

}
