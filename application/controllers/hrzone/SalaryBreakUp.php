<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SalaryBreakUp extends CI_Controller {
	
	public function __construct(){
    parent::__construct();
   
    $this->load->model("EmployeeModel", "EmpObj");
    $this->load->model("HrModel", "HrObj");
    $this->load->model("AttendanceModel");
    $this->load->model("SalaryBreakUpModel");
    $this->load->model("PayModel", "PayObj");
	$this->load->library('HrLib_user');
	$data= $this->session->userdata();
	
	
	$this->UserId = $data['auth']['id'];

  } 
  
	public function index()
	{		
		
		$data['SalarybreakUp'] = $this->SalaryBreakUpModel->getSalaryBreakUpdata();	
		$data['UserD'] = $this->SalaryBreakUpModel->getUserBreakUpdata();
		$data['page'] = 'SalarybreakUp';	
		$this->load->view("hrzone/salaryClr", $data);
	}
	
	
	public function salaryClrView()
	{		
		// print_r($_POST);die;
			// print_r($_GET);die;
			// $this->UserId = $id;
			if(!empty($this->input->get())) {
				$userData = $this->SalaryBreakUpModel->getSalaryBreakUpView($this->input->get('id'));
			 // print_r($userData);die;
			 
			 $result = [];
			 
			 foreach($userData as $v){
			 $result = [
			 
			 'BreakUpid' => $v->sc_id,
			 'basic' => $v->basic_salary,
			 'city' => $v->city_compensation_allowance,
			 'conveyanceAllw' => $v->conveyance
			 
			 ];
			 
		 }
			
         echo json_encode($result);
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
	}
	
	public function breakUpEdit()
	{		
		// print_r($_POST);die;
			// print_r($_GET);die;
			// $this->UserId = $id;
			if(!empty($this->input->get())) {
				$userData = $this->SalaryBreakUpModel->getUserBreakUp($this->input->get('id'));
			 // print_r($userData);die;
			 
			 $result = [];
			 
			 foreach($userData as $v){
			 $result = [
			 
			 'sb_Id' => $v->sb_Id,
			 'name' => $v->name,
			 'dept' => $v->dept,
			 'approved_by' => $v->approved_by,
			 'sb_date' => $v->sb_date
			 
			 ];
			 
		 }
			
         echo json_encode($result);
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
	}
	
	
	
	
	public function salaryClrEdit()
	{		
		// print_r($_POST);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		if(!empty($this->input->post())) {
			$id = $this->input->post('breakup_CID');
			$BreakUpData = [
			'basic_salary' => $this->input->post('breakup_basic'),
			'city_compensation_allowance' => $this->input->post('breakup_city'),
			'conveyance' => $this->input->post('breakup_conveyance'),
			'sc_id' => $this->input->post('breakup_CID')
			
			];
			
			$userData = $this->SalaryBreakUpModel->SalarybreakUpUpdate($id, $BreakUpData);
		 
		 
         echo json_encode(['data'=> 1, 'message'=>'Data updated Successfully']);
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
	}
	
	public function UserBreakUpUpdate()
	{		
		// print_r($_POST);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		if(!empty($this->input->post())) {
			$id = $this->input->post('breakup_BId');
			$BreakUpData = [
			'name' => $this->input->post('breakup_name'),
			'dept' => $this->input->post('breakup_dept'),
			'approved_by' => $this->input->post('breakup_approved_by'),
			'sb_date' => $this->input->post('breakup_sb_date'),
			'sb_Id' => $this->input->post('breakup_BId')
			
			];
			
			$userData = $this->SalaryBreakUpModel->UpadteUserbreakUp($id, $BreakUpData);
		 
		 
         echo json_encode(['data'=> 1, 'message'=>'Data updated Successfully']);
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
	}
	
	
	
	public function SalaryCalculator(){
		// print_r($_POST);die;
		// print_r($_GET);die;
		if(!empty($this->input->get())) {
		
			 $GrossSB = $this->input->get('GrossSalary');
			 $GrossB = (array)$GrossSB; 
		 $userData = $this->SalaryBreakUpModel->getSalaryBreakUpView();
		 // print_r($userData);die;
					$result = [];  

					foreach($userData as $v) {
					
					$getYearlyBasic = $this->SalaryBreakUpModel->getBasicYearly($v->basic_salary, $this->input->get('GrossSalaryM'), $this->input->get('GrossSalary'));
					$getMonthlyBasic = $this->SalaryBreakUpModel->getBasicMonthly($v->basic_salary, $this->input->get('GrossSalaryM'), $this->input->get('GrossSalary'));
					$dataHRAYearly = $this->SalaryBreakUpModel->getHRAYearly($v->city_compensation_allowance, $this->input->get('GrossSalaryM'), $this->input->get('GrossSalary'));
					$getHRAMonthly = $this->SalaryBreakUpModel->getHRAMonthly($v->city_compensation_allowance, $this->input->get('GrossSalaryM'), $this->input->get('GrossSalary'));
					$getDAYearly = $this->SalaryBreakUpModel->getDAYearly($v->conveyance, $this->input->get('GrossSalaryM'), $this->input->get('GrossSalary'));
					$getDAMonthly = $this->SalaryBreakUpModel->getDAMonthly($v->conveyance, $this->input->get('GrossSalaryM'), $this->input->get('GrossSalary'));
					$getConveyanceYearly = $this->SalaryBreakUpModel->getConveyanceYearly($v->conveyance, $this->input->get('GrossSalaryM'), $this->input->get('GrossSalary'));
					$getConveyanceMonthly = $this->SalaryBreakUpModel->getConveyanceMonthly($v->conveyance, $this->input->get('GrossSalaryM'), $this->input->get('GrossSalary'));
					$GrossY = $this->SalaryBreakUpModel->getGrossY($this->input->get('GrossSalaryM'), $this->input->get('GrossSalary'));
					$GrossM = $this->SalaryBreakUpModel->getGrossM($this->input->get('GrossSalaryM'), $this->input->get('GrossSalary'));
					// print_r($calenderResult);die;
					$result[]= [
					
					'YearlyBasic'=> $getYearlyBasic,
					'MonthlyBasic'=> $getMonthlyBasic,
					'GrossSlr'=> $GrossB,
					'HRAYearly'=> $dataHRAYearly,
					'HRAMonthly'=> $getHRAMonthly,
					'DAYearly'=> $getDAYearly,
					'DAMonthly'=> $getDAMonthly,
					'ConveyanceYearly'=> $getConveyanceYearly,
					'ConveyanceMonthly'=> $getConveyanceMonthly,
					'GrossYearly'=> $GrossY,
					'GrossMonthly'=> $GrossM
					

					];
					}	
					
					// $getMonthlyBasic = $this->SalaryBreakUpModel->getBasicMonthly($this->input->get('GrossSalary'));
					
					
		 
         echo json_encode(['data'=> $result]);
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
	}
		
		
		
		public function SalarySlip($data){
			$this->load->view("hrzone/salarySlip", $data);
		}
		public function EmployeeSalarySlip(){
		// print_r($_POST);die;
		// print_r($_GET);die;
		$currMonth = date('n');
				// echo $currMonth;die;
			 $MonthCheck = $this->input->get('MonthID');
	if($MonthCheck <= $currMonth){
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
					$getUserMonthlyDeduction = $this->PayObj->getMonthlyDeduction($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					$getUserMonthlySalaryInWord = $this->PayObj->getMonthlySalaryInWord($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					
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
					'MonthlyDeduction'=> $getUserMonthlyDeduction,
					'SalaryInWord'=> $getUserMonthlySalaryInWord,
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
		if(!empty($this->input->get())) {
				
		$userData = $this->AttendanceModel->getEmp($this->input->get('id'));
		// print_r($userData);die;
			$result = [];  

					foreach($userData as $v) {
					
					// print_r($calenderResult);die;
					$result[]= [
					'userId'=>$v->id,
					'userName' => $v->name,
					'employee_id' => $v->employee_id,
					

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
	}
		
		
	}



}