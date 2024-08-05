<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kpi extends CI_Controller {
	
	public function __construct(){
    parent::__construct();
   
    $this->load->model("EmployeeModel", "EmpObj");
    $this->load->model("HrModel", "HrObj");
	 $this->load->model("AttendanceModel");
    $this->load->model("PayModel", "PayObj");
    $this->load->model("KpiModel");
	$this->load->model("HierarchyModel");
	$this->load->model("SeparationModel");
	$this->load->model("CommentModel");
	$this->load->model("SeparationModel");
	$this->load->model("AppraisalModel");
	$this->load->library('HrLib_user');
	$data= $this->session->userdata();
	
	
	$this->UserId = $data['auth']['id'];

  } 
  
  
  

public function MonthlyKpi()
{	
	$data['GoalYear'] = $this->HrObj->YearGoal();
	$data['GoalMonth'] = $this->HrObj->KPIMonth();
	$this->load->view("hrzone/monthlyKpiList", $data);
}

public function MonthlyKpiList(){
		// print_r($_POST);die;
		// print_r($_GET);die;
		if(!empty($this->input->get())) {
		
			 $aa = $this->input->get('YearID');
			 $ab = $this->input->get('MonthID');
			 $GrossB = (array)$ab; 
			 $Grossa = (array)$aa; 
		 $userData = $this->AttendanceModel->getAllUser();
		 // print_r($userData);die;
					$result = [];  

					foreach($userData as $v) {
					
					$getKpiMarks = $this->KpiModel->getMarks($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					$getKpiMarksObtained = $this->KpiModel->getMarksObtained($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					$getKpiMarksPercentage = $this->KpiModel->getMarksObtainedPercentage($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					$getMarksMonth = $this->KpiModel->getMonth($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					// print_r($getKpiMarksPercentage);die;
					$getUserMonthlyWeekOff = $this->PayObj->getMonthlyWeekOff($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					$getmarksMonthDays = $this->KpiModel->getInMonthDays($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					// print_r($getUserMonthDays);die;
					$result[]= [
					'userId'=>$v->id,
					'userName' => $v->name,
					'employee_id' => $v->employee_id,
					'email' => $v->email,
					
					'KpiMarks'=> $getKpiMarks,
					'MarksObtained'=> $getKpiMarksObtained,
					'MarksPercentage'=> $getKpiMarksPercentage,
					'MarksMonth'=> $getMarksMonth,
					// 'MonthlySalaryData'=> $getUserMonthlySalary,
					'Usercalender'=>$getmarksMonthDays

					];
					}	
					
					
					
					
		 
         echo json_encode(['data'=> $result]);
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
}


public function YearlyMarksKpi()
{	
	$data['GoalYear'] = $this->HrObj->YearGoal();
	$data['GoalMonth'] = $this->HrObj->KPIMonth();
	$this->load->view("hrzone/yearlyKpiList", $data);
}

public function YearlyKpiList(){
		// print_r($_POST);die;
		// print_r($_GET);die;
		if(!empty($this->input->get())) {
		
			 $aa = $this->input->get('YearID');
			 $ab = $this->input->get('MonthID');
			 $GrossB = (array)$ab; 
			 $Grossa = (array)$aa; 
		 $userData = $this->AttendanceModel->getAllUser();
		 // print_r($userData);die;
					$result = [];  

					foreach($userData as $v) {
					
					$getKpiMarks = $this->KpiModel->getYearlyMarks($v->id, $this->input->get('YearID'));
					$getKpiMarksObtained = $this->KpiModel->getYearlyMarksObtained($v->id, $this->input->get('YearID'));
					$getKpiMarksPercentage = $this->KpiModel->getMarksObtainedPercentage($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					$getMarksMonth = $this->KpiModel->getMonth($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					// print_r($getKpiMarksPercentage);die;
					$getUserMonthlyWeekOff = $this->PayObj->getMonthlyWeekOff($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					$getmarksMonthDays = $this->KpiModel->getInYearlyMonthDays($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					// print_r($getUserMonthDays);die;
					$result[]= [
					'userId'=>$v->id,
					'userName' => $v->name,
					'employee_id' => $v->employee_id,
					'email' => $v->email,
					
					'KpiMarks'=> $getKpiMarks,
					'MarksObtained'=> $getKpiMarksObtained,
					'MarksPercentage'=> $getKpiMarksPercentage,
					'MarksMonth'=> $getMarksMonth,
					// 'MonthlySalaryData'=> $getUserMonthlySalary,
					'Usercalender'=>$getmarksMonthDays

					];
					}	
					
					
					
					
		 
         echo json_encode(['data'=> $result]);
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
}


public function kpimail(){
	// print_r($_POST);die;
	$data['Apologies'] = $this->input->post('Apologies');
	$data['kpimarks'] = $this->input->post('kpimarks');
	$data['kpiUserName'] = $this->input->post('kpiUserName');
	// $data['KpiMonth'] = [];
	$data['KpiMonth'] = array
        (
                
                'deducted_points'       => $this->input->post('deducted_points'),
                'deducted_reason'       => $this->input->post('deducted_reason'),
                
        );
		// foreach($this->input->post('deducted_points') as $key=>$val){
			// $data['KpiMonth'] = [
			// 'points' => $val,
			// 'reason' => $this->input->post('deducted_reason')[$key],
			
			// ];
		// }
		// $data['KpiMonth']
		$data['CurrentMonth'] = array
        (
                'month_points'          => $this->input->post('month_points'),
                'month_reason'          => $this->input->post('month_reason'),
                
        );
		
		$data['NextMonth'] = array
        (
               
                'Upcoming_points'       => $this->input->post('Upcoming_points'),
                'Upcoming_reason'       => $this->input->post('Upcoming_reason')
        );
		
		
		
		
	$this->load->view('hrzone/testmail', $data);
}


public function EmployedddeKpiMail(){
	// print_r($_POST);die;
	
	// print_r($_GET);die;
		
		// $this->load->library('form_validation');
		$data = array();
		
					$email = $this->input->post('email');
					
						
					$data['Apologies'] = $this->input->post('Apologies');
					$data['kpimarks'] = $this->input->post('kpimarks');
					$data['kpiUserName'] = $this->input->post('kpiUserName');
					// $data['KpiMonth'] = [];
					$data['KpiMonth'] = array
					(

					'deducted_points'       => $this->input->post('deducted_points'),
					'deducted_reason'       => $this->input->post('deducted_reason'),

					);
					// foreach($this->input->post('deducted_points') as $key=>$val){
					// $data['KpiMonth'] = [
					// 'points' => $val,
					// 'reason' => $this->input->post('deducted_reason')[$key],

					// ];
					// }
					// $data['KpiMonth']
					$data['CurrentMonth'] = array
					(
					'month_points'          => $this->input->post('month_points'),
					'month_reason'          => $this->input->post('month_reason'),

					);

					$data['NextMonth'] = array
					(

					'Upcoming_points'       => $this->input->post('Upcoming_points'),
					'Upcoming_reason'       => $this->input->post('Upcoming_reason')
					);

						
						$this->load->library('email'); 

						$this->email->to($email);
						$this->email->from(EMAIL_COMPANY, COMPANY_DOMAIN);
						$this->email->set_mailtype("html");
						$this->email->subject("Meeting Minutes for KPI.");
						$this->email->message($this->load->view('email/employee_kpi_mail', ['data' => $data], TRUE));
						if($this->email->send()){
							$data['message']= "We just sent a New Password to the email you provided with a link to reset your password. \nPlease check your inbox and follow the instructions in the email.";
						}else{
							$data['message']= "Error Occur";
						}
					
				
				
			
}


public function EmployeeKpiMail(){
	// print_r($_POST);die;
	
	// print_r($_GET);die;
		 if(!empty($this->input->post())) {

		
		// $data = array();
		
					$email = $this->input->post('email');
					// echo $email;die;
						
					$data['Apologies'] = $this->input->post('Apologies');
					$data['kpimarks'] = $this->input->post('kpimarks');
					$data['kpiUserName'] = $this->input->post('kpiUserName');
				
					$data['KpiMonth'] = array
					(

					'deducted_points'       => $this->input->post('deducted_points'),
					'deducted_reason'       => $this->input->post('deducted_reason'),

					);
					
					$data['CurrentMonth'] = array
					(
					'month_points'          => $this->input->post('month_points'),
					'month_reason'          => $this->input->post('month_reason'),

					);

					$data['NextMonth'] = array
					(

					'Upcoming_points'       => $this->input->post('Upcoming_points'),
					'Upcoming_reason'       => $this->input->post('Upcoming_reason')
					);

						
						$this->load->library('email'); 

						$this->email->to($email);
						$this->email->from(EMAIL_COMPANY, COMPANY_DOMAIN);
						$this->email->set_mailtype("html");
						$this->email->subject("Meeting Minutes for KPI.");
						// $this->email->message("Meeting Minutes for KPI");
						$this->email->message($this->load->view('email/employee_kpi_mail', $data, TRUE));
						// $this->email->send()
						if($this->email->send()){
							echo json_encode(['data'=> 1, 'message'=>'Mail sent']);
						}else{
							echo json_encode(['data'=> 0, 'message'=>'Error Occur']);
							
						}
					
				echo json_encode(['data'=> 1, 'message'=>'success']);
		}
		else{
			
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
				
			
}




}