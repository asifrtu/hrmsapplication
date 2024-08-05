<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Appraisal extends CI_Controller {
	private $UserId;
	
	
	
	public function __construct(){
    parent::__construct();
    $this->load->model("EmployeeModel", 'EmpObj');
    $this->load->model("HrModel", "HrObj");
	$this->load->model("PayModel", "PayObj");
	$this->load->model("AttendanceModel");
	$this->load->model("HierarchyModel");
	$this->load->model("SeparationModel");
	$this->load->model("CommentModel");
	$this->load->model("SeparationModel");
	$this->load->model("AppraisalModel");
	$this->load->library('HrLib_user');
	$data= $this->session->userdata();
	
	
	$this->UserId = $data['auth']['id'];
  } 
 
	
	public function AppraisalRequest()
{	
	$data['UserExitrecord'] = $this->AppraisalModel->getAllExitRequest();
	$data['UserInfo'] = $this->AttendanceModel->getAllUser();
	$this->load->view("hrzone/AppraisalRequest", $data);
}
	
	
	
public function UserAppraisal(){
		// print_r($_POST);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		if(!empty($this->input->post())) {
			
			$LeaveData = [
			'UserId' => $this->input->post('id'),
			'Appraisal_Rate' => $this->input->post('Appraisal_Rate'),
			'Total_Inc' => $this->input->post('Total_Inc'),
			'Appraisal_date' => $this->input->post('Appraisal_date'),
			'Management_Decision' => $this->input->post('Management_Decision'),
			'UpdatedSalary' => $this->input->post('UpdatedSalary'),
			'DatesOfMeeting' => $this->input->post('DatesOfMeeting')
			
			];
			
			$userData = $this->AppraisalModel->insertUserAppraisal($LeaveData);
		 
		 
         echo json_encode(['data'=> 1, 'message'=>'Data updated Successfully']);
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
}


public function ExitRequestAdd(){
		// print_r($_POST);die;
		// print_r($_FILES);die;
		// print_r($_GET);die;
		$this->UserId = $this->input->post('User_Id');
		$this->form_validation->set_rules('applydate', 'applydate', 'required');
		// $this->form_validation->set_rules('organisationEmail', 'organisationEmail', 'required');
		$this->form_validation->set_rules('Description', 'Description', 'required');
		if($this->form_validation->run())
		{	// $id = $this->UserId;
			$LeaveData = [
			'applydate' => $this->input->post('applydate'),
			// 'organisationEmail' => $this->input->post('organisationEmail'),
			'Description' => $this->input->post('Description'),
			'UserId' => $this->UserId
			
			];
			
			$this->AppraisalModel->insertExitRequest($LeaveData);
			// redirect('hrzone/Employee/employeeProfile', $emp_Id);
			// print_r($lastInsertId);die;
		 
         $this->session->set_flashdata('message', '<script>alert("Your data inserted successfully");</script>');
			redirect('hrzone/Appraisal/AppraisalRequest', 'refresh');
			
		}
		else{
			$this->session->set_flashdata('message', '<script>alert("Fill the all required fields!");</script>');
			redirect('hrzone/Appraisal/AppraisalRequest', 'refresh');
		}
		
	}	
	
	
	public function OtherPage()
	{	
		// $data['Exitrecord'] = $this->AppraisalModel->getExitRequest($this->UserId);
		// $data['Exitrecord'] = $this->AppraisalModel->getAllExitRequest();
		$this->load->view("hrzone/OtherPage");
	}
	
	
	public function FormStatus()
	{	
		$data['GoalYear'] = $this->HrObj->YearGoal();
		$data['GoalMonth'] = $this->HrObj->KPIMonth();	
		$data['Exitrecord'] = $this->AppraisalModel->getAllAppraisalRequest();
		$data['Exitrecord'] = $this->AppraisalModel->getAllExitRequest();
		$this->load->view("hrzone/EmployeeApproved", $data);
	}
	
	
	
	
	
	
	
	public function UserExitDetails(){
		// print_r($_POST);die;
		// print_r($_GET);die;
		if(!empty($this->input->post())) {
		
			$id = $this->input->post('id');
		 $userData = $this->AppraisalModel->getUserExitDetails($id);
		 // print_r($userData);die;
					$result = [];  

					foreach($userData as $v) {
					// print_r($calenderResult);die;
					
					$LeaveUserData = $this->AppraisalModel->getSingleExitData($v->id, $this->input->post('LeaveId'));
					$result[]= [
					'userId'=>$v->id,
					'userName' => $v->name,
					'employee_id' => $v->employee_id,
					'maritalStatus' => $v->maritalStatus,
					'joiningDate' => $v->joiningDate,
					'position' => $v->position,
					'LeaveUser' => $LeaveUserData
					
					];
					}	
				
					
					
		 
         echo json_encode(['data'=> $result]);
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
	}
	
	

	
	  
	public function AppraisalForm($Id=Null)
	{	
		
		$query = $this->db->get_where('goalsforupcomingyear', ['UserId'=> (int) $Id]);
		// print_r($query->num_rows());die;
		if($query->num_rows() > 0)
		{
			$Id = $this->UserId; 
			$data['UserInfo'] = $this->EmpObj->getUser($this->UserId);
			$data['Title'] = $this->AppraisalModel->getTitle();
			$data['Process'] = $this->AppraisalModel->getProcess();
			$data['GoalsAndObjective'] = $this->AppraisalModel->getGoalsAndObjective();
			$data['EmployeeDetails'] = $this->EmpObj->getEmpDetails($this->UserId);
			$data['Exitrecord'] = $this->AppraisalModel->getExitRequest($this->UserId);
			$this->load->view("hrzone/AppraisalForm", $data);
			
		}else{
			
			$data['Title'] = $this->AppraisalModel->getTitle();
			$data['Process'] = $this->AppraisalModel->getProcess();
			$data['GoalsAndObjective'] = $this->AppraisalModel->getGoalsAndObjective();
			$this->load->view("hrzone/Appraisaldummy_One", $data);
			
		}
		
	}
	
	
	
	
	
	
	
	
	
	public function AppraisalFormTwo($Id = null)
	{	
		
		
		$query = $this->db->get_where('goalsforupcomingyear', ['UserId'=> (int) $Id]);
		// print_r($query->num_rows());die;
		if($query->num_rows() > 0)
		{
			$Id = $this->UserId; 
		$data['UserInfo'] = $this->EmpObj->getUser($this->UserId);
		$data['Title'] = $this->AppraisalModel->getTitle();
		$data['ratingscale'] = $this->AppraisalModel->getappraisaltworatingscale();
		$data['Exitrecord'] = $this->AppraisalModel->getExitRequest($this->UserId);
		$this->load->view("hrzone/AppraisalFormTwo", $data);
			
		}else{
			
			
		$data['Title'] = $this->AppraisalModel->getTitle();
		$data['ratingscale'] = $this->AppraisalModel->getappraisaltworatingscale();
		$this->load->view("hrzone/Appraisaldummy_Two", $data);
			
		}
		
		
	}
	
	public function AppraisalFormThree($Id = null)
	{	
		$query = $this->db->get_where('goalsforupcomingyear', ['UserId'=> (int) $Id]);
		// print_r($query->num_rows());die;
		if($query->num_rows() > 0)
		{
			$Id = $this->UserId; 
		
		$data['UserInfo'] = $this->EmpObj->getUser($this->UserId);
		$data['Title'] = $this->AppraisalModel->getTitle();
		$data['AppraisalThree'] = $this->AppraisalModel->getAppraisalThree($this->UserId);
		$data['Exitrecord'] = $this->AppraisalModel->getExitRequest($this->UserId);
		$this->load->view("hrzone/AppraisalFormThree", $data);
			
		}else{
			
		
		$data['Title'] = $this->AppraisalModel->getTitle();
		$this->load->view("hrzone/Appraisaldummy_Three", $data);
			
		}
		
		
	}
	
	
	
	
	
	public function updateRating(){
   
        // userid
        $userid = $this->UserId;

        // POST values
        $postid = $this->input->post('postid');
        $rating = $this->input->post('rating');

        // Update user rating and get Average rating of a post
        $averageRating = $this->Main_model->userRating($userid, $postid, $rating);

        echo $averageRating;
        exit;
    }
	
	public function AppraisalRanking($Id)
	{		
		// echo "<pre>";
		// print_r($_POST); die;
		// print_r($_FILES); 
		
		
		$Id = $this->UserId; 
			$Overall = $this->input->post('OverallRating');
			 $OverallRatings = (!empty($this->input->post('OverallRating')))? implode(",", $Overall): "";
		// die;
		
	$this->form_validation->set_rules('GeneralQualityofwork', 'GeneralQualityofwork', 'trim');
	if ($this->form_validation->run() != FALSE) {
		$a = $this->input->post('GeneralQualityofwork');
		$b = $this->input->post('Dependability');
		$c = $this->input->post('JobKnowledge');
		$d = $this->input->post('CommunicationSkills');
		$e = $this->input->post('Personality');
		$f = $this->input->post('ManagementAbility');
		$g = $this->input->post('ContributionToGroup');
		$h = $this->input->post('Productivity');
		$i = $this->input->post('AchievementOfGoal');
		$j = $this->input->post('BehaviorOfFloor');
		$k = $this->input->post('PresentationFeedback');
		$l = $this->input->post('CoreJobKnowledge');
		$m = $this->input->post('CoreInterpersonalSkills');
		$n = $this->input->post('CoreCommunicationSkills');
		$o = $this->input->post('CorePlanning');
		$p = $this->input->post('CoreProblemAnalysis');
		$q = $this->input->post('CoreCommitmenttoDiversity');
		$r = $this->input->post('CoreLeadership');
		$s = $this->input->post('CoreSupervision');
		$t = $this->input->post('OverallRating');
		$data1 = array
        (
                'UserId'	=> $this->UserId,
                'GeneralQualityofwork'	=> (!empty($this->input->post('GeneralQualityofwork')))? $a : '',
                'Dependability'	=> (!empty($this->input->post('Dependability')))? $b :'No',
                'JobKnowledge'	=> (!empty($this->input->post('JobKnowledge')))? $c :'No',
                'CommunicationSkills'	=> (!empty($this->input->post('CommunicationSkills')))? $d :'No',
                'Personality'	=> (!empty($this->input->post('Personality')))? $e :'No',
                'ManagementAbility'	=> (!empty($this->input->post('ManagementAbility')))? $f :'No',
                'ContributionToGroup'	=> (!empty($this->input->post('ContributionToGroup')))? $g :'No',
                'Productivity'	=> (!empty($this->input->post('Productivity')))? $h :'No',
                'AchievementOfGoal'	=> (!empty($this->input->post('AchievementOfGoal')))? $i :'No',
                'BehaviorOfFloor'	=> (!empty($this->input->post('BehaviorOfFloor')))? $j :'No',
                'PresentationFeedback'	=> (!empty($this->input->post('PresentationFeedback')))? $k :'No',
                'CoreJobKnowledge'	=> (!empty($this->input->post('CoreJobKnowledge')))? $l :'No',
                'CoreInterpersonalSkills'	=> (!empty($this->input->post('CoreInterpersonalSkills')))? $m :'No',
                'CoreCommunicationSkills'	=> (!empty($this->input->post('CoreCommunicationSkills')))? $n :'No',
                'CorePlanning'	=> (!empty($this->input->post('CorePlanning')))? $o :'No',
                'CoreProblemAnalysis'	=> (!empty($this->input->post('CoreProblemAnalysis')))? $p :'No',
                'CoreCommitmenttoDiversity'	=> (!empty($this->input->post('CoreCommitmenttoDiversity')))? $q :'No',
                'CoreLeadership'	=> (!empty($this->input->post('CoreLeadership')))? $r :'No',
                'CoreSupervision'	=> (!empty($this->input->post('CoreSupervision')))? $s :'No',
                'OverallRating'	=> (!empty($OverallRatings))? $OverallRatings :'No',
        );

		$this->AppraisalModel->InsertRating($this->UserId, $data1);
		
	
		
	
		$this->session->set_flashdata('message', '<script>alert("Your data inserted successfully");</script>');
    	redirect('hrzone/Appraisal/AppraisalFormFour', 'refresh');
		
		
	}else
	{
		$this->session->set_flashdata('message', '<script>alert("Fill all required field!");</script>');
		redirect('hrzone/Appraisal/AppraisalFormThird', 'refresh');
	}
		
}	
			

	
public function AppraisalFormFour($Id = Null)
{	
	$query = $this->db->get_where('goalsforupcomingyear', ['UserId'=> (int) $Id]);
		// print_r($query->num_rows());die;
		if($query->num_rows() > 0)
		{
			$Id = $this->UserId; 
	$data['UserInfo'] = $this->EmpObj->getUser($this->UserId);
	$data['Title'] = $this->AppraisalModel->getTitle();
	$data['Exitrecord'] = $this->AppraisalModel->getExitRequest($this->UserId);
	$data['ExiTFour'] = $this->AppraisalModel->getExiTFour($this->UserId);
	$this->load->view("hrzone/AppraisalFormFour", $data);
			
		}else{
	$data['Title'] = $this->AppraisalModel->getTitle();
	$this->load->view("hrzone/Appraisaldummy_Four", $data);
			
		}
	
}
	
	
	
public function AppraisalFour($Id)
{	
		
		// echo "<pre>";
		// print_r($_POST);
		// echo $this->UserId;
		// die;
		
		$Id = $this->UserId; 
	// $this->form_validation->set_rules('UserId', $this->UserId, 'trim|required|is_unique[exitformsecond.UserId]');
			$this->form_validation->set_rules('important_accomplishment', 'important_accomplishment', 'trim|required');
	if ($this->form_validation->run() != FALSE) {
		
		$data1 = array
        (
                'UserId'	=> $this->UserId,
                'important_accomplishment'	=> $this->input->post('important_accomplishment'),
                'weakest_areas'	=> $this->input->post('weakest_areas'),
                'strength_and_weaknesse'	=> $this->input->post('strength_and_weaknesse'),
                'Other_concern'		=> $this->input->post('Other_concern')
                
                
        );

        $this->AppraisalModel->InsertAppraisalFour($this->UserId, $data1);
	
		$this->session->set_flashdata('message', '<script>alert("Your data inserted successfully");</script>');
    	redirect('hrzone/Appraisal/AppraisalFormFour', 'refresh');
		
		
	}else
	{
		$this->session->set_flashdata('message', '<script>alert("Fill all required field!");</script>');
		redirect('hrzone/Appraisal/AppraisalFormFour', 'refresh');
	}
		
}


public function AppraisalFormFive($Id = Null)
	{	
		
		$query = $this->db->get_where('goalsforupcomingyear', ['UserId'=> (int) $Id]);
		// print_r($query->num_rows());die;
		if($query->num_rows() > 0)
		{
			$Id = $this->UserId; 
		
		$data['UserInfo'] = $this->EmpObj->getUser($this->UserId);
		$data['Title'] = $this->AppraisalModel->getTitle();
		$data['ExiTFive'] = $this->AppraisalModel->getExiTFive($this->UserId);
		$data['Exitrecord'] = $this->AppraisalModel->getExitRequest($this->UserId);
		$this->load->view("hrzone/AppraisalFormFive", $data);
			
		}else{
	
		$data['Title'] = $this->AppraisalModel->getTitle();
		$this->load->view("hrzone/Appraisaldummy_Five", $data);
			
		}
		
		
		
	}	
	
public function AppraisalFive($Id)
{	
		
		// echo "<pre>";
		// print_r($_POST);
		
		// die;
		$Id = $this->UserId; 
		
	// $this->form_validation->set_rules('UserId', $this->UserId, 'trim|required|is_unique[exitformsecond.UserId]');
			$this->form_validation->set_rules('NarrativeAssessment', 'NarrativeAssessment', 'trim');
	if ($this->form_validation->run() != FALSE) {
		
		$data1 = array
        (
                'UserId'	=> $this->UserId,
                'NarrativeAssessment'	=> $this->input->post('NarrativeAssessment'),
                'CommentonEmployeeStrenghths'	=> $this->input->post('CommentonEmployeeStrenghths'),
                'CommentonAreasforgrowthorChange'	=> $this->input->post('CommentonAreasforgrowthorChange')
                
        );

        $this->AppraisalModel->InsertAppraisalFive($this->UserId, $data1);
	
		$this->session->set_flashdata('message', '<script>alert("Your data inserted successfully");</script>');
    	redirect('hrzone/Appraisal/AppraisalFormFive', 'refresh');
		
		
	}else
	{
		$this->session->set_flashdata('message', '<script>alert("Fill all required field!");</script>');
		redirect('hrzone/Appraisal/AppraisalFormFive', 'refresh');
	}
		
}
	
	
public function AppraisalFormSix($Id=null)
	{	
		
		
		
		$query = $this->db->get_where('goalsforupcomingyear', ['UserId'=> (int) $this->UserId]);
		// print_r($query->num_rows());die;
		if($query->num_rows() > 0)
		{
			$Id = $this->UserId; 
			$data['ExiTSix'] = $this->AppraisalModel->getExiTSix($this->UserId);
			$data['Title'] = $this->AppraisalModel->getTitle();
			$data['ExiTSixComment'] = $this->AppraisalModel->getExiTSixComment($this->UserId);
			$data['UserInfo'] = $this->EmpObj->getUser($this->UserId);
			$data['Exitrecord'] = $this->AppraisalModel->getExitRequest($this->UserId);
			$this->load->view("hrzone/AppraisalSixEdit", $data);
		}else
		{
			if($Id != Null)
			{
			// $Id = $this->UserId; 
			$data['UserInfo'] = $this->EmpObj->getUser($this->UserId);
			$data['Title'] = $this->AppraisalModel->getTitle();
			$data['Exitrecord'] = $this->AppraisalModel->getExitRequest($this->UserId);
			$this->load->view("hrzone/AppraisalFormSix", $data);
			
			}else{
				$data['Title'] = $this->AppraisalModel->getTitle();
				$this->load->view("hrzone/Appraisaldummy_Six", $data);
			}
		}
		
		
	}	
	
public function AppraisalSix($Id)
{	
		
		// echo "<pre>";
		// print_r($_POST);
		
		// die;
		$Id = $this->UserId; 
		
	// $this->form_validation->set_rules('UserId', $this->UserId, 'trim|required|is_unique[exitformsecond.UserId]');
	$this->form_validation->set_rules('NarrativeAssessment', 'NarrativeAssessment', 'trim');
	if ($this->form_validation->run() != FALSE) {
		
		$user_id = $this->UserId;
        $data5 = array
        (
                //$last_user_id is the value of the foreign key to link the tables
                
                'UserId'       => $user_id, 
                'Goal'       => $this->input->post('Goal'),
                'ExpectedOutcomeMeasurableCriteria'          => $this->input->post('ExpectedOutcomeMeasurableCriteria'),
                'TimeTable'       => $this->input->post('TimeTable'),
                'IssueOrComments'         => $this->input->post('IssueOrComments')
                
                
        );

        $this->AppraisalModel->insert_data5($user_id, $data5);
		
		$data1 = array
        (
                //$last_user_id is the value of the foreign key to link the tables
                
                'UserId'       => $user_id, 
                'OverallComments'       => $this->input->post('OverallComments')
                
                
                
        );

        $this->AppraisalModel->InsertAppraisalSixComment($this->UserId, $data1);
		
		
		
		
	
		$this->session->set_flashdata('message', '<script>alert("Your data inserted successfully");</script>');
    	redirect('hrzone/Appraisal/AppraisalFormSix', 'refresh');
		
		
	}else
	{
		$this->session->set_flashdata('message', '<script>alert("Fill all required field!");</script>');
		redirect('hrzone/Appraisal/AppraisalFormSix', 'refresh');
	}
		
}
	
	
	
	public function AppraisalDetails(){
		// print_r($_POST);die;
		// print_r($_GET);die;
		if(!empty($this->input->get())) {
		
			 $aa = $this->input->get('YearID');
			 $ab = $this->input->get('MonthID');
			 $GrossB = (array)$ab; 
			 $Grossa = (array)$aa; 
		 $userData = $this->AppraisalModel->getUserAppraisalDetails();
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
					$getUserMonthlySalary = $this->AppraisalModel->getMonSalary($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					$getUserAppraisal = $this->AppraisalModel->getAppraisalList($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					// print_r($getUserAppraisal);die;
					
					// $getUserPerDaySalary = $this->PayObj->getPerDaySalary($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					$getUserMonthlyDeduction = $this->PayObj->getMonthlyDeduction($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					$calenderResult = $this->AttendanceModel->getMonthlyCalender($this->input->get('YearID'), $this->input->get('MonthID'));
					// print_r($calenderResult);die;
					$result[]= [
					'userId'=>$v->id,
					'userName' => $v->name,
					'employee_id' => $v->employee_id,
					'email' => $v->email,
					'joiningDate' => $v->joiningDate,
					'position' => $v->position,
					'UserAppraisal'=> $getUserAppraisal,
					'MonthlySalaryData'=> $getUserMonthlySalary,
					'Usercalender'=>$calenderResult

					];
					}	
					
					
						
					
		 
         echo json_encode(['data'=> $result ]);
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
	}
		
	
	public function AppraisalView(){
			// print_r($_POST);die;
			// print_r($_GET);die;
			// $this->UserId = $id;
			if(!empty($this->input->get())) {
				$userData = $this->AppraisalModel->getAPPraisalTitle($this->input->get('id'));
			 // print_r($userData);die;
			 
			 $result = [];
			 
			 foreach($userData as $v){
			 $result = [
			 
			 'Goals_Id' => $v->Id,
			 'title_1' => $v->title_1,
			 'title_2' => $v->title_2,
			 'title_3' => $v->title_3,
			 'title_4' => $v->title_4,
			 'title_5' => $v->title_5,
			 'title_6' => $v->title_6,
			 'title_7' => $v->title_7,
			 'title_8' => $v->title_8,
			 'title_9' => $v->title_9,
			 'title_10' => $v->title_10,
			 'title_11' => $v->title_11,
			 'title_12' => $v->title_12,
			 'title_13' => $v->title_13,
			 'title_14' => $v->title_14,
			 'title_15' => $v->title_15,
			 'title_16' => $v->title_16,
			 'title_17' => $v->title_17,
			 'title_18' => $v->title_18,
			 'title_19' => $v->title_19,
			 'title_20' => $v->title_20,
			 'title_21' => $v->title_21,
			 'title_22' => $v->title_22,
			 'title_23' => $v->title_23,
			 'title_24' => $v->title_24,
			 'title_25' => $v->title_25,
			 'title_26' => $v->title_26,
			 'title_27' => $v->title_27,
			 'title_28' => $v->title_28,
			 'title_29' => $v->title_29,
			 'title_30' => $v->title_30,
			 'title_31' => $v->title_31,
			 'title_32' => $v->title_32,
			 'title_33' => $v->title_33,
			 'title_34' => $v->title_34,
			 'title_35' => $v->title_35,
			 'title_36' => $v->title_36,
			 'title_37' => $v->title_37,
			 'title_38' => $v->title_38,
			 'title_39' => $v->title_39,
			 'title_40' => $v->title_40,
			 'title_41' => $v->title_41,
			 'title_42' => $v->title_42,
			 'title_43' => $v->title_43,
			 'title_44' => $v->title_44,
			 'title_45' => $v->title_45,
			 'title_46' => $v->title_46,
			 'title_47' => $v->title_47,
			 'title_48' => $v->title_48,
			 'title_49' => $v->title_49,
			 'title_50' => $v->title_50,
			 'title_51' => $v->title_51,
			 'title_52' => $v->title_52,
			 'title_53' => $v->title_53,
			 'title_54' => $v->title_54,
			 'title_55' => $v->title_55,
			 'title_56' => $v->title_56,
			 'title_57' => $v->title_57,
			 'title_58' => $v->title_58,
			 'title_59' => $v->title_59,
			 'title_60' => $v->title_60,
			 'title_61' => $v->title_61,
			 'title_62' => $v->title_62,
			 'title_63' => $v->title_63,
			 'title_64' => $v->title_64,
			 'title_65' => $v->title_65,
			 'title_66' => $v->title_66,
			 'title_67' => $v->title_67,
			 'title_68' => $v->title_68,
			 'title_69' => $v->title_69,
			 'title_70' => $v->title_70,
			 'title_71' => $v->title_71,
			 'title_72' => $v->title_72,
			 'title_73' => $v->title_73,
			 'title_74' => $v->title_74,
			 'title_75' => $v->title_75,
			 'title_76' => $v->title_76,
			 'title_77' => $v->title_77,
			 'title_78' => $v->title_78,
			 'title_79' => $v->title_79,
			 'title_80' => $v->title_80,
			 'title_81' => $v->title_81,
			 'title_82' => $v->title_82,
			 'title_83' => $v->title_83,
			 'title_84' => $v->title_84,
			 'title_85' => $v->title_85,
			 
			 
			 ];
			 
		 }
																
		 
         echo json_encode($result);
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
	}
	
	public function AppraisalGoalsView(){
			// print_r($_POST);die;
			// print_r($_GET);die;
			// $this->UserId = $id;
			if(!empty($this->input->get())) {
				$userData = $this->AppraisalModel->getAppGoalsAndObjective($this->input->get('id'));
			 // print_r($userData);die;
			 
			 $result = [];
			 
			 foreach($userData as $v){
			 $result = [
			 
			 'Goals_Id' => $v->GoalsAndObjective_Id,
			 'title' => $v->title,
			 
			 ];
			 
		 }
																
		 
         echo json_encode($result);
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
	}
	
	public function UpadteAppraisalGoal(){
		// print_r($_POST);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		
		$IdObj = $this->input->post('GoalID');
		if(!empty($this->input->post())) {
			
			$LeaveData = [
			'title' => $this->input->post('Title')
			
			];
			
			$userData = $this->AppraisalModel->UpdateAPPraisalGoal($IdObj, $LeaveData);
		 
		 
         echo json_encode(['data'=> 1, 'message'=>'Data updated Successfully']);
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
	}
	public function AppraisalProcessView(){
			// print_r($_GET);die;
			// print_r($_POST);die;
			// print_r($_GET);die;
			// $this->UserId = $id;
			if(!empty($this->input->get())) {
				$userData = $this->AppraisalModel->getAppProcess($this->input->get('id'));
			 // print_r($userData);die;
			 
			 $result = [];
			 
			 foreach($userData as $v){
			 $result = [
			 
			 'Goals_Id' => $v->process_Id,
			 'title' => $v->title,
			 
			 ];
			 
		 }
																
		 
         echo json_encode($result);
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
	}
	
	public function UpadteAppraisalProcess(){
		// print_r($_POST);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		
		$IdObj = $this->input->post('process_Id');
		if(!empty($this->input->post())) {
			
			$LeaveData = [
			'title' => $this->input->post('Title')
			
			];
			
			$userData = $this->AppraisalModel->UpdateAPPraisalProcess($IdObj, $LeaveData);
		 
		 
         echo json_encode(['data'=> 1, 'message'=>'Data updated Successfully']);
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
	}
	public function AppraisalRatingscaleView(){
			// print_r($_POST);die;
			// print_r($_GET);die;
			// $this->UserId = $id;
			if(!empty($this->input->get())) {
				$userData = $this->AppraisalModel->getAppratingscale($this->input->get('id'));
			 // print_r($userData);die;
			 
			 $result = [];
			 
			 foreach($userData as $v){
			 $result = [
			 
			 'Goals_Id' => $v->ratingscale_Id,
			 'ratingscale' => $v->ratingscale,
			 'Definition' => $v->Definition
			 
			 ];
			 
		 }
																
		 
         echo json_encode($result);
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
	}
	
	public function UpadteAppraisalRatingscale(){
		// print_r($_POST);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		
		$IdObj = $this->input->post('GoalID');
		if(!empty($this->input->post())) {
			
			$LeaveData = [
			'ratingscale' => $this->input->post('Title'),
			'Definition' => $this->input->post('ddd')
			
			];
			
			$userData = $this->AppraisalModel->UpdateAPPraisalProcess($IdObj, $LeaveData);
		 
		 
         echo json_encode(['data'=> 1, 'message'=>'Data updated Successfully']);
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
	}
	
	public function UpadteTitle(){
		// print_r($_POST);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		if(!empty($this->input->post())) {
			
			$LeaveData = [
			'title_76' => $this->input->post('Title')
			
			];
			
			$userData = $this->AppraisalModel->UpdateAPPraisalTitle($LeaveData);
		 
		 
         echo json_encode(['data'=> 1, 'message'=>'Data updated Successfully']);
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
	}
	
	
	public function UpadteAppraisalThreeTitle(){
		// print_r($_POST);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		$IdObj = $this->input->post('GoalID');
		if(!empty($this->input->post())) {
			
			$LeaveData = [
			'title_3' => $this->input->post('Title_1'),
			'title_4' => $this->input->post('Title_2'),
			'title_5' => $this->input->post('Title_3'),
			'title_6' => $this->input->post('Title_4'),
			'title_7' => $this->input->post('Title_5'),
			'title_8' => $this->input->post('Title_6'),
			'title_9' => $this->input->post('Title_7'),
			'title_10' => $this->input->post('Title_8'),
			'title_11' => $this->input->post('Title_9'),
			'title_12' => $this->input->post('Title_10'),
			'title_13' => $this->input->post('Title_11'),
			'title_17' => $this->input->post('Title_12'),
			'title_18' => $this->input->post('Title_13'),
			'title_19' => $this->input->post('Title_14'),
			'title_20' => $this->input->post('Title_15'),
			'title_85' => $this->input->post('Title_16'),
			'title_86' => $this->input->post('Title_17'),
			'title_87' => $this->input->post('Title_18'),
			'title_23' => $this->input->post('Title_23'),
			'title_24' => $this->input->post('Title_24'),
			'title_25' => $this->input->post('Title_25'),
			'title_27' => $this->input->post('Title_27'),
			'title_28' => $this->input->post('Title_28'),
			'title_29' => $this->input->post('Title_29'),
			'title_31' => $this->input->post('Title_31'),
			'title_32' => $this->input->post('Title_32'),
			'title_33' => $this->input->post('Title_33'),
			'title_35' => $this->input->post('Title_35'),
			'title_36' => $this->input->post('Title_36'),
			'title_37' => $this->input->post('Title_37'),
			'title_38' => $this->input->post('Title_38'),
			'title_39' => $this->input->post('Title_39'),
			'title_41' => $this->input->post('Title_41'),
			'title_42' => $this->input->post('Title_42'),
			'title_43' => $this->input->post('Title_43'),
			'title_44' => $this->input->post('Title_44'),
			'title_45' => $this->input->post('Title_45'),
			'title_46' => $this->input->post('Title_46'),
			'title_47' => $this->input->post('Title_47'),
			'title_48' => $this->input->post('Title_48'),
			'title_49' => $this->input->post('Title_49')
			];
			
			$userData = $this->AppraisalModel->UpdateAPPraisalTitle($IdObj, $LeaveData);
		 
		 
         echo json_encode(['data'=> 1, 'message'=>'Data updated Successfully']);
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
	}
	
	
	public function UpadteAppraisalFourTitle(){
		// print_r($_POST);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		$IdObj = $this->input->post('GoalID');
		if(!empty($this->input->post())) {
			
			$LeaveData = [
			'title_58' => $this->input->post('Title_58'),
			'title_59' => $this->input->post('Title_59'),
			'title_60' => $this->input->post('Title_60'),
			'title_61' => $this->input->post('Title_61'),
			
			];
			
			$userData = $this->AppraisalModel->UpdateAPPraisalFourTitle($IdObj, $LeaveData);
		 
		 
         echo json_encode(['data'=> 1, 'message'=>'Data updated Successfully']);
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
	}
	
	public function UpadteAppraisalFiveTitle(){
		// print_r($_POST);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		$IdObj = $this->input->post('GoalID');
		if(!empty($this->input->post())) {
			
			$LeaveData = [
			'title_65' => $this->input->post('Title_65'),
			'title_66' => $this->input->post('Title_66'),
			'title_67' => $this->input->post('Title_67')
			
			];
			
			$userData = $this->AppraisalModel->UpdateAPPraisalFourTitle($IdObj, $LeaveData);
		 
		 
         echo json_encode(['data'=> 1, 'message'=>'Data updated Successfully']);
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
	}
	
	
	
	

	

}
