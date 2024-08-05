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
	$this->load->model("AppraisalModel");
	$this->load->model("SeparationModel");
	$this->load->library('Lib_user');
	$data= $this->session->userdata();
	$this->UserId = $data['auth']['id'];
  } 



	  
	public function AppraisalForm()
	{	
		
		
		$data['UserInfo'] = $this->EmpObj->getUser($this->UserId);
		$data['Title'] = $this->AppraisalModel->getTitle();
		$data['Process'] = $this->AppraisalModel->getProcess();
		$data['GoalsAndObjective'] = $this->AppraisalModel->getGoalsAndObjective();
		$data['EmployeeDetails'] = $this->EmpObj->getEmpDetails($this->UserId);
		$data['Exitrecord'] = $this->AppraisalModel->getExitRequest($this->UserId);
		$this->load->view("adminzone/AppraisalForm", $data);
	}
	
	public function AppraisalFormTwo()
	{	
		$data['UserInfo'] = $this->EmpObj->getUser($this->UserId);
		$data['Title'] = $this->AppraisalModel->getTitle();
		$data['ratingscale'] = $this->AppraisalModel->getappraisaltworatingscale();
		$data['Exitrecord'] = $this->AppraisalModel->getExitRequest($this->UserId);
		$this->load->view("adminzone/AppraisalFormTwo", $data);
	}
	
	public function AppraisalFormThree()
	{	
		$data['UserInfo'] = $this->EmpObj->getUser($this->UserId);
		$data['Title'] = $this->AppraisalModel->getTitle();
		$data['AppraisalThree'] = $this->AppraisalModel->getAppraisalThree($this->UserId);
		$data['Exitrecord'] = $this->AppraisalModel->getExitRequest($this->UserId);
		$this->load->view("adminzone/AppraisalFormThree", $data);
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
	
	public function AppraisalRanking()
	{		
		// echo "<pre>";
		// print_r($_POST); die;
		// print_r($_FILES); 
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
    	redirect('adminzone/Appraisal/AppraisalFormFour', 'refresh');
		
		
	}else
	{
		$this->session->set_flashdata('message', '<script>alert("Fill all required field!");</script>');
		redirect('adminzone/Appraisal/AppraisalFormThird', 'refresh');
	}
		
}	
			

	
public function AppraisalFormFour()
{	
	$data['UserInfo'] = $this->EmpObj->getUser($this->UserId);
	$data['Title'] = $this->AppraisalModel->getTitle();
	$data['Exitrecord'] = $this->AppraisalModel->getExitRequest($this->UserId);
	$data['ExiTFour'] = $this->AppraisalModel->getExiTFour($this->UserId);
	$this->load->view("adminzone/AppraisalFormFour", $data);
}
	
	
	
public function AppraisalFour()
{	
		
		// echo "<pre>";
		// print_r($_POST);
		// echo $this->UserId;
		// die;
		
		
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
    	redirect('adminzone/Appraisal/AppraisalFormFour', 'refresh');
		
		
	}else
	{
		$this->session->set_flashdata('message', '<script>alert("Fill all required field!");</script>');
		redirect('adminzone/Appraisal/AppraisalFormFour', 'refresh');
	}
		
}


public function AppraisalFormFive()
	{	
		$data['UserInfo'] = $this->EmpObj->getUser($this->UserId);
		$data['Title'] = $this->AppraisalModel->getTitle();
		$data['ExiTFive'] = $this->AppraisalModel->getExiTFive($this->UserId);
		$data['Exitrecord'] = $this->AppraisalModel->getExitRequest($this->UserId);
		$this->load->view("adminzone/AppraisalFormFive", $data);
	}	
	
public function AppraisalFive()
{	
		
		// echo "<pre>";
		// print_r($_POST);
		
		// die;
		
		
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
    	redirect('adminzone/Appraisal/AppraisalFormFive', 'refresh');
		
		
	}else
	{
		$this->session->set_flashdata('message', '<script>alert("Fill all required field!");</script>');
		redirect('adminzone/Appraisal/AppraisalFormFive', 'refresh');
	}
		
}
	
	
public function AppraisalFormSix()
	{	
		$query = $this->db->get_where('goalsforupcomingyear', ['UserId'=> (int) $this->UserId]);
		// print_r($query->num_rows());die;
		if($query->num_rows() > 0)
		{
			$data['ExiTSix'] = $this->AppraisalModel->getExiTSix($this->UserId);
			$data['Title'] = $this->AppraisalModel->getTitle();
			$data['ExiTSixComment'] = $this->AppraisalModel->getExiTSixComment($this->UserId);
			$data['UserInfo'] = $this->EmpObj->getUser($this->UserId);
			$data['Exitrecord'] = $this->AppraisalModel->getExitRequest($this->UserId);
			$this->load->view("adminzone/AppraisalSixEdit", $data);
		}else
		{
			$data['UserInfo'] = $this->EmpObj->getUser($this->UserId);
			$data['Title'] = $this->AppraisalModel->getTitle();
			$data['Exitrecord'] = $this->AppraisalModel->getExitRequest($this->UserId);
			$this->load->view("adminzone/AppraisalFormSix", $data);
		}
		
		
	}	
	
public function AppraisalSix()
{	
		
		// echo "<pre>";
		// print_r($_POST);
		
		// die;
		
		
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
    	redirect('adminzone/Appraisal/AppraisalFormSix', 'refresh');
		
		
	}else
	{
		$this->session->set_flashdata('message', '<script>alert("Fill all required field!");</script>');
		redirect('adminzone/Appraisal/AppraisalFormSix', 'refresh');
	}
		
}
	
	
public function AppraisalRequest()
	{	
		
		$data['UserExitrecord'] = $this->AppraisalModel->getApprRequest($this->UserId);
		$data['Exitrecord'] = $this->AppraisalModel->getExitRequest($this->UserId);
		$data['UserExddditrecord'] = $this->AppraisalModel->getUserRequest($this->UserId);
		$this->load->view("adminzone/AppraisalRequest", $data);
	}
	


	
	public function UserExitAccept(){
		// print_r($_POST);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		if(!empty($this->input->post())) {
			$pre = $this->input->post('Accept');
			if($pre !== false){
				
				$userUpdateData = $this->AppraisalModel->InsertExitAccept($this->input->post('id'));
				
			}
			
			echo json_encode(['data'=> 'Accept', 'message'=>'Data updated Successfully']);
			
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
	}
	
	public function UserExitDecline(){
		// print_r($_POST);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		if(!empty($this->input->post())) {
			$pre = $this->input->post('Decline');
			if($pre !== false){
				$userData = $this->AppraisalModel->InsertExitDecline($this->input->post('id'));
			}
		 
         echo json_encode(['data'=> 'Decline', 'message'=>'Data updated Successfully']);
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
	}




	
	public function OtherPage()
	{	
		// $data['Exitrecord'] = $this->AppraisalModel->getExitRequest($this->UserId);
		// $data['Exitrecord'] = $this->AppraisalModel->getAllExitRequest();
		$this->load->view("adminzone/OtherPage");
	}
	

}
