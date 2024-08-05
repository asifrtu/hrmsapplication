<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Separation extends CI_Controller {
	private $UserId;
	
	
	
	public function __construct(){
    parent::__construct();
    $this->load->model("EmployeeModel", 'EmpObj');
    $this->load->model("HrModel", "HrObj");
	$this->load->model("PayModel", "PayObj");
	$this->load->model("AttendanceModel");
	$this->load->model("SeparationModel");
	$this->load->library('Lib_user');
	$data= $this->session->userdata();
	$this->UserId = $data['auth']['id'];
  } 



	  
	public function ResignationLetter()
	{	
		$data['UserInfo'] = $this->EmpObj->getUser($this->UserId);
		$data['EmployeeDetails'] = $this->EmpObj->getEmpDetails($this->UserId);
		$data['Exitrecord'] = $this->SeparationModel->getExitRequest($this->UserId);
		$this->load->view("adminzone/Resignation", $data);
	}
	
	
	
	
public function ResignLetter()
{	
		
	if (!empty($this->input->post())) {
					
		$data1 = array
				(
					'name'        	=> $this->input->post('name'),
					'apply_date'        	=> $this->input->post('apply_date'),
					'Subject'        	=> $this->input->post('Subject'),
					'guardian_so'        	=> $this->input->post('guardian_so'),
					'guardian_ro'        	=> $this->input->post('guardian_ro'),
					'Employee_Code'        	=> $this->input->post('Employee_Code'),
					'position'        	=> $this->input->post('position'),
					'date_from'        	=> $this->input->post('date_from'),
					'date_to'        	=> $this->input->post('date_to'),
					'title_in'        	=> $this->input->post('title_in'),
					'Due_to'        	=> $this->input->post('Due_to'),
					'Yours_Sincerely'        	=> $this->input->post('Yours_Sincerely'),
					// 'pf_inputtwo'       	=> $this->input->post('pf_inputtwo'),
					'UserId'  	=> $this->UserId
						
				);

		$this->SeparationModel->insertresignation_letter($data1);
		$this->session->set_flashdata('message', '<script>alert("Your data inserted successfully");</script>');
    	redirect('adminzone/Separation/Resignation', 'refresh');
		
		
	}else
	{
		$this->session->set_flashdata('message', '<script>alert("Your Email or EmployeeId already Exist!");</script>');
		redirect('adminzone/Separation/Resignation', 'refresh');
	}
	
}
	
	
	
	
	
	
	
	public function DeclarationForm()
	{	
		$data['UserInfo'] = $this->EmpObj->getUser($this->UserId);
		$data['Exitrecord'] = $this->SeparationModel->getExitRequest($this->UserId);
		$this->load->view("adminzone/Declaration", $data);
	}
	
	public function SeparationOne()
	{	
		$data['UserInfo'] = $this->EmpObj->getUser($this->UserId);
		$data['Exitrecord'] = $this->SeparationModel->getExitRequest($this->UserId);
		$this->load->view("adminzone/separationForm", $data);
	}
	
	
	
	public function AddSepOne()
	{		
		// echo "<pre>";
		// print_r($_POST); die;
		// print_r($_FILES); 
		
		
		// die;
		
			$this->form_validation->set_rules('UserId', $this->UserId, 'trim|required|is_unique[provident_fund.UserId]');
			// $this->form_validation->set_rules('employee_id', 'employee_id', 'trim|required|is_unique[tbl_user.employee_id]');
			if (!empty($this->input->post())) {
					
			 $data1 = array
				(
					'pf_status'        	=> $this->input->post('pf_status'),
					// 'pf_inputtwo'       	=> $this->input->post('pf_inputtwo'),
					'UserId'  	=> $this->UserId
						
				);

				
				$last_user_id = $this->SeparationModel->insert_data1($data1);
			
				
		if($last_user_id){
		
		$user_id = $this->UserId;
       
        $data5 = array
        (
                //$last_user_id is the value of the foreign key to link the tables
                'pf_Id'       => $last_user_id,
                'UserId'       => $user_id, 
                'Particulars'       => $this->input->post('Particulars'),
                'Applicable'          => $this->input->post('Applicable'),
                'Responsibilities'       => $this->input->post('Responsibilities'),
                'Remarks'         => $this->input->post('Remarks')
                
                
        );

        $this->SeparationModel->insert_data5($last_user_id, $user_id, $data5);
        //$data['insert'] = $last_ticket_id;
		
        
					
					
		}  
	
	
		$this->session->set_flashdata('message', '<script>alert("Your data inserted successfully");</script>');
    	redirect('adminzone/Separation/SeparationOne', 'refresh');
		
		
	}else
	{
		$this->session->set_flashdata('message', '<script>alert("Your Email or EmployeeId already Exist!");</script>');
		redirect('adminzone/Separation/SeparationOne', 'refresh');
	}
}	
			

	
	
	
	
public function SeparationSecond()
	{	
		$data['Exitrecord'] = $this->SeparationModel->getExitRequest($this->UserId);
		$this->load->view("adminzone/separationFormSecond", $data);
	}	
	
	
	
	
	
	
public function AddSepSecond()
{	
		
		// echo "<pre>";
		// print_r($_POST);
		// echo $this->UserId;
		// die;
		
		
	// $this->form_validation->set_rules('UserId', $this->UserId, 'trim|required|is_unique[exitformsecond.UserId]');
			$this->form_validation->set_rules('NoticePeriodServed', 'NoticePeriodServed', 'trim|required');
			$this->form_validation->set_rules('ReleasingFullAndFinalSettlement', 'ReleasingFullAndFinalSettlement', 'trim|required');
			$this->form_validation->set_rules('IssuingRelevingLetter', 'IssuingRelevingLetter', 'trim|required');
			$this->form_validation->set_rules('payrollNoticePeriodServed', 'payrollNoticePeriodServed', 'trim|required');
			$this->form_validation->set_rules('payrollExitMark', 'payrollExitMark', 'trim|required');
			$this->form_validation->set_rules('payrollHandoverOfJobResponsibilities', 'payrollHandoverOfJobResponsibilities', 'trim|required');
	if ($this->form_validation->run() != FALSE) {
		
		$data1 = array
        (
                'UserId'        	=> $this->UserId,
                'IRAName'        	=> $this->input->post('IRAName'),
                'IRAEmpCode'       	=> $this->input->post('IRAEmpCode'),
                'IRADesignation'  	=> $this->input->post('IRADesignation'),
                'HODName'  	=> $this->input->post('HODName'),
                'HODEmpCode'  	=> $this->input->post('HODEmpCode'),
                'HODDesignation'  	=> $this->input->post('HODDesignation'),
                'NoticePeriodServed'  	=> $this->input->post('NoticePeriodServed'),
                'NoticePeriodDeductdays'  	=> $this->input->post('NoticePeriodDeductdays'),
                'LeavesinexitMonth'  	=> $this->input->post('LeavesinexitMonth'),
                'ReleasingFullAndFinalSettlement'  	=> $this->input->post('ReleasingFullAndFinalSettlement'),
                'IssuingRelevingLetter'  	=> $this->input->post('IssuingRelevingLetter'),
                'FromReceivedOn'  	=> $this->input->post('FromReceivedOn'),
                'DOL'  	=> $this->input->post('DOL'),
                'ReasonForLeaving'  	=> $this->input->post('ReasonForLeaving'),
                'payrollNoticePeriodServed'  	=> $this->input->post('payrollNoticePeriodServed'),
                'payrollNoticePeriodDeductdays'  	=> $this->input->post('payrollNoticePeriodDeductdays'),
                'payrollLeavesinexitMonth'  	=> $this->input->post('payrollLeavesinexitMonth'),
                'payrollExitMark'  	=> $this->input->post('payrollExitMark'),
                'payrollHandoverOfJobResponsibilities'  	=> $this->input->post('payrollHandoverOfJobResponsibilities'),
                'HRName'  	=> $this->input->post('HRName'),
                'HREmpCode'  	=> $this->input->post('HREmpCode')
                
        );

        $this->SeparationModel->InsertSepSnd($data1);
	
		$this->session->set_flashdata('message', '<script>alert("Your data inserted successfully");</script>');
    	redirect('adminzone/Separation/SeparationSecond', 'refresh');
		
		
	}else
	{
		$this->session->set_flashdata('message', '<script>alert("Fill all required field!");</script>');
		redirect('adminzone/Separation/SeparationSecond', 'refresh');
	}
		
}
	
	

public function SeparationThird()
{	
	$data['Exitrecord'] = $this->SeparationModel->getExitRequest($this->UserId);
	$this->load->view("adminzone/separationFormThird", $data);
}
	

	
		
public function AddSepThird()
{	
		
		// echo "<pre>";
		// print_r($_POST); die;					
		
		
	// $this->form_validation->set_rules('UserId', $this->UserId, 'trim|required|is_unique[provident_fund.UserId]');
			$this->form_validation->set_rules('Name', 'Name', 'trim');
	if ($this->form_validation->run() != FALSE) {
		$a = $this->input->post('MySkillsWereUsedEffectively');
		$b = $this->input->post('IWasGivenDueRecognitionForTheWork');
		$c = $this->input->post('IWasAbleToManageTheWorkGivenToMe');
		$d = $this->input->post('MyKnowledgeForTheJobWasSufficient');
		$e = $this->input->post('ProvidesEffectiveCoaching');
		$f = $this->input->post('RoleAndResponsibilitiesWereClearlyDefined');
		$g = $this->input->post('ProvidedFairAndEqualTreatment');
		$h = $this->input->post('RegularPerformanceFeedbackWasProvided');
		$i = $this->input->post('DiscussedCareerAdvancementOpportunities');
		$j = $this->input->post('ThereWasKnowledgeSharingAndTransfer');
		$k = $this->input->post('ThereWasTeamWorkAndSynergy');
		$l = $this->input->post('ResponsibilitiesWereAndShared');
		$m = $this->input->post('UnbiasedCounsellingAndSupportWasProvided');
		$n = $this->input->post('SharedRecognitionForGoodWork');
		$data1 = array
        (
                'UserId'	=> $this->UserId,
                'Name'      => $this->input->post('Name'),
                'EmpCode'	=> $this->input->post('EmpCode'),
                'DateOfLeaving'	=> $this->input->post('DateOfLeaving'),
                'ExitInterviewDate'	=> $this->input->post('ExitInterviewDate'),
                'Absconding'	=> (!empty($this->input->post('Absconding')))? 1:0,
                'Absentism'	=> (!empty($this->input->post('Absentism')))? 1:0,
                'FraudulentActivity'	=> (!empty($this->input->post('FraudulentActivity')))? 1:0,
                'Indiscipline'	=> (!empty($this->input->post('Indiscipline')))? 1:0,
                'NonPreformation'	=> (!empty($this->input->post('NonPreformation')))? 1:0,
                'GrowthOpportunities'	=> (!empty($this->input->post('GrowthOpportunities')))? 1:0,
                'HealthOfFamilyMember'	=> (!empty($this->input->post('HealthOfFamilyMember')))? 1:0,
                'HigherStudy'	=> (!empty($this->input->post('HigherStudy')))? 1:0,
                'JobEnvironment'	=> (!empty($this->input->post('JobEnvironment')))? 1:0,
                'JobProfile'	=> (!empty($this->input->post('JobProfile')))? 1:0,
                'Marriage'	=> (!empty($this->input->post('Marriage')))? 1:0,
                'Medicine'	=> (!empty($this->input->post('Medicine')))? 1:0,
                'OwnBusiness'	=> (!empty($this->input->post('OwnBusiness')))? 1:0,
                'Relocation'	=> (!empty($this->input->post('Relocation')))? 1:0,
                'Salary'	=> (!empty($this->input->post('Salary')))? 1:0,
                'AnyOther'	=> (!empty($this->input->post('AnyOther')))? 1:0,
                
                
                'MySkillsWereUsedEffectively'	=> (!empty($this->input->post('MySkillsWereUsedEffectively')))? $a :'No',
                'IWasGivenDueRecognitionForTheWork'	=> (!empty($this->input->post('IWasGivenDueRecognitionForTheWork')))? $b :'No',
                'IWasAbleToManageTheWorkGivenToMe'	=> (!empty($this->input->post('IWasAbleToManageTheWorkGivenToMe')))? $c :'No',
                'MyKnowledgeForTheJobWasSufficient'	=> (!empty($this->input->post('MyKnowledgeForTheJobWasSufficient')))? $d :'No',
                'ProvidesEffectiveCoaching'	=> (!empty($this->input->post('ProvidesEffectiveCoaching')))? $e :'No',
                'RoleAndResponsibilitiesWereClearlyDefined'	=> (!empty($this->input->post('RoleAndResponsibilitiesWereClearlyDefined')))? $f :'No',
                'ProvidedFairAndEqualTreatment'	=> (!empty($this->input->post('ProvidedFairAndEqualTreatment')))? $g :'No',
                'RegularPerformanceFeedbackWasProvided'	=> (!empty($this->input->post('RegularPerformanceFeedbackWasProvided')))? $h :'No',
                'DiscussedCareerAdvancementOpportunities'	=> (!empty($this->input->post('DiscussedCareerAdvancementOpportunities')))? $i :'No',
                'ThereWasKnowledgeSharingAndTransfer'	=> (!empty($this->input->post('ThereWasKnowledgeSharingAndTransfer')))? $j :'No',
                'ThereWasTeamWorkAndSynergy'	=> (!empty($this->input->post('ThereWasTeamWorkAndSynergy')))? $k :'No',
                'ResponsibilitiesWereAndShared'	=> (!empty($this->input->post('ResponsibilitiesWereAndShared')))? $l :'No',
                'UnbiasedCounsellingAndSupportWasProvided'	=> (!empty($this->input->post('UnbiasedCounsellingAndSupportWasProvided')))? $m :'No',
                'SharedRecognitionForGoodWork'	=> (!empty($this->input->post('SharedRecognitionForGoodWork')))? $n :'No',
                 'GeneralCommentsOne'	=> $this->input->post('GeneralCommentsOne'),
                'GeneralCommentsTwo'	=> $this->input->post('GeneralCommentsTwo'),
                'GeneralCommentsThree'	=> $this->input->post('GeneralCommentsThree'),
                'InterviewerComments'	=> $this->input->post('InterviewerComments')
                
        );

        $last_user_id = $this->SeparationModel->InsertSepThird($data1);
		
	
		
	
		$this->session->set_flashdata('message', '<script>alert("Your data inserted successfully");</script>');
    	redirect('adminzone/Separation/SeparationThird', 'refresh');
		
		
	}else
	{
		$this->session->set_flashdata('message', '<script>alert("Fill all required field!");</script>');
		redirect('adminzone/Separation/SeparationThird', 'refresh');
	}
		
}
	
	
	
public function AddExitRequest()
{	
	$data['Exitrecord'] = $this->SeparationModel->getExitRequest($this->UserId);
	$data['UserExitrecord'] = $this->SeparationModel->getUserRequest($this->UserId);	
	$this->load->view("adminzone/ExitRequest", $data);
}





public function ExitRequestAdd(){
		// print_r($_POST);
		// print_r($_FILES);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		$this->form_validation->set_rules('ReasonOfLeave', 'ReasonOfLeave', 'required');
		$this->form_validation->set_rules('applydate', 'applydate', 'required');
		$this->form_validation->set_rules('organisationEmail', 'organisationEmail', 'required');
		$this->form_validation->set_rules('Description', 'Description', 'required');
		if($this->form_validation->run())
		{	// $id = $this->UserId;
			$LeaveData = [
			'ReasonOfLeave' => $this->input->post('ReasonOfLeave'),
			'applydate' => $this->input->post('applydate'),
			'organisationEmail' => $this->input->post('organisationEmail'),
			'Description' => $this->input->post('Description'),
			'UserId' => $this->UserId
			
			];
			
			$this->SeparationModel->insertExitRequest($LeaveData);
			// redirect('hrzone/Employee/employeeProfile', $emp_Id);
			// print_r($lastInsertId);die;
		 
         $this->session->set_flashdata('message', '<script>alert("Your data inserted successfully");</script>');
			redirect('adminzone/Separation/AddExitRequest', 'refresh');
			
		}
		else{
			$this->session->set_flashdata('message', '<script>alert("Fill the all required fields!");</script>');
			redirect('adminzone/Separation/AddExitRequest', 'refresh');
		}
		
	}	
	
	
public function ExitFormEdit()
{	
	$data['Exitrecord'] = $this->SeparationModel->getExitRequest($this->UserId);
	$data['HandoverList'] = $this->SeparationModel->getListofHandover($this->UserId);
	$data['ProvidentFund'] = $this->SeparationModel->getProvidentFund($this->UserId);
	// $data['UserExitrecord'] = $this->SeparationModel->getUserRequest($this->UserId);
	$this->load->view("adminzone/SeparationFormEdit", $data);
}

	
public function ExitSecondEdit()
{	
	$data['Exitrecord'] = $this->SeparationModel->getExitRequest($this->UserId);
	$data['SecondFormData'] = $this->SeparationModel->getExitFormSecond($this->UserId);
	
	$this->load->view("adminzone/ExitSecondEdit", $data);
}






	
public function SecondEdit()
{	
	// print_r($_POST); die;
	
		$this->form_validation->set_rules('NoticePeriodServed', 'NoticePeriodServed', 'trim|required');
			$this->form_validation->set_rules('ReleasingFullAndFinalSettlement', 'ReleasingFullAndFinalSettlement', 'trim|required');
			$this->form_validation->set_rules('IssuingRelevingLetter', 'IssuingRelevingLetter', 'trim|required');
			$this->form_validation->set_rules('payrollNoticePeriodServed', 'payrollNoticePeriodServed', 'trim|required');
			$this->form_validation->set_rules('payrollExitMark', 'payrollExitMark', 'trim|required');
			$this->form_validation->set_rules('payrollHandoverOfJobResponsibilities', 'payrollHandoverOfJobResponsibilities', 'trim|required');
	if ($this->form_validation->run() != FALSE) {
		
		$data1 = array
        (
                'UserId'        	=> $this->UserId,
                'IRAName'        	=> $this->input->post('IRAName'),
                'IRAEmpCode'       	=> $this->input->post('IRAEmpCode'),
                'IRADesignation'  	=> $this->input->post('IRADesignation'),
                'HODName'  	=> $this->input->post('HODName'),
                'HODEmpCode'  	=> $this->input->post('HODEmpCode'),
                'HODDesignation'  	=> $this->input->post('HODDesignation'),
                'NoticePeriodServed'  	=> $this->input->post('NoticePeriodServed'),
                'NoticePeriodDeductdays'  	=> $this->input->post('NoticePeriodDeductdays'),
                'LeavesinexitMonth'  	=> $this->input->post('LeavesinexitMonth'),
                'ReleasingFullAndFinalSettlement'  	=> $this->input->post('ReleasingFullAndFinalSettlement'),
                'IssuingRelevingLetter'  	=> $this->input->post('IssuingRelevingLetter'),
                'FromReceivedOn'  	=> $this->input->post('FromReceivedOn'),
                'DOL'  	=> $this->input->post('DOL'),
                'ReasonForLeaving'  	=> $this->input->post('ReasonForLeaving'),
                'payrollNoticePeriodServed'  	=> $this->input->post('payrollNoticePeriodServed'),
                'payrollNoticePeriodDeductdays'  	=> $this->input->post('payrollNoticePeriodDeductdays'),
                'payrollLeavesinexitMonth'  	=> $this->input->post('payrollLeavesinexitMonth'),
                'payrollExitMark'  	=> $this->input->post('payrollExitMark'),
                'payrollHandoverOfJobResponsibilities'  	=> $this->input->post('payrollHandoverOfJobResponsibilities'),
                'HRName'  	=> $this->input->post('HRName'),
                'HREmpCode'  	=> $this->input->post('HREmpCode')
                
        );

        $this->SeparationModel->UpdateSepSnd($this->UserId, $data1);
	
		$this->session->set_flashdata('message', '<script>alert("Your data inserted successfully");</script>');
    	redirect('adminzone/Separation/ExitSecondEdit', 'refresh');
		
		
	}else
	{
		$this->session->set_flashdata('message', '<script>alert("Fill all required field!");</script>');
		redirect('adminzone/Separation/ExitSecondEdit', 'refresh');
	}
	
}	



public function FormOneEdit()
{	
	// print_r($_POST); die;
	
	if (!empty($this->input->post())) {
					
			 $data1 = array
				(
					'pf_status'        	=> $this->input->post('pf_status'),
					// 'pf_inputtwo'       	=> $this->input->post('pf_inputtwo'),
					'UserId'  	=> $this->UserId
						
				);

				
				$last_user_id = $this->SeparationModel->Update_data1($this->UserId, $data1);
			
				
		
		
		$user_id = $this->UserId;
       
        $data5 = array
        (
                //$last_user_id is the value of the foreign key to link the tables
               
                'UserId'       => $user_id, 
                'Particulars'       => $this->input->post('Particulars'),
                'Applicable'          => $this->input->post('Applicable'),
                'Responsibilities'       => $this->input->post('Responsibilities'),
                'Remarks'         => $this->input->post('Remarks')
                
                
        );

        $this->SeparationModel->Update_data5($user_id, $data5);
        //$data['insert'] = $last_ticket_id;
		
     
	
		$this->session->set_flashdata('message', '<script>alert("Your data inserted successfully");</script>');
    	redirect('adminzone/Separation/ExitFormEdit', 'refresh');
		
		
	}else
	{
		$this->session->set_flashdata('message', '<script>alert("Your Email or EmployeeId already Exist!");</script>');
		redirect('adminzone/Separation/ExitFormEdit', 'refresh');
	}
}

	
	
	
public function ExitThirdEdit()
{	
	$data['Exitrecord'] = $this->SeparationModel->getExitRequest($this->UserId);
	$data['formData'] = $this->SeparationModel->getExitFormThird($this->UserId);
	
	$this->load->view("adminzone/ExitThirdEdit", $data);
}

	

		
public function ExitThird()
{	
		
		// echo "<pre>";
		// print_r($_POST); die;					
		
	$this->form_validation->set_rules('Name', 'Name', 'trim');
	if ($this->form_validation->run() != FALSE) {
		$a = $this->input->post('MySkillsWereUsedEffectively');
		$b = $this->input->post('IWasGivenDueRecognitionForTheWork');
		$c = $this->input->post('IWasAbleToManageTheWorkGivenToMe');
		$d = $this->input->post('MyKnowledgeForTheJobWasSufficient');
		$e = $this->input->post('ProvidesEffectiveCoaching');
		$f = $this->input->post('RoleAndResponsibilitiesWereClearlyDefined');
		$g = $this->input->post('ProvidedFairAndEqualTreatment');
		$h = $this->input->post('RegularPerformanceFeedbackWasProvided');
		$i = $this->input->post('DiscussedCareerAdvancementOpportunities');
		$j = $this->input->post('ThereWasKnowledgeSharingAndTransfer');
		$k = $this->input->post('ThereWasTeamWorkAndSynergy');
		$l = $this->input->post('ResponsibilitiesWereAndShared');
		$m = $this->input->post('UnbiasedCounsellingAndSupportWasProvided');
		$n = $this->input->post('SharedRecognitionForGoodWork');
		$data1 = array
        (
                'UserId'	=> $this->UserId,
                'Name'      => $this->input->post('Name'),
                'EmpCode'	=> $this->input->post('EmpCode'),
                'DateOfLeaving'	=> $this->input->post('DateOfLeaving'),
                'ExitInterviewDate'	=> $this->input->post('ExitInterviewDate'),
                'Absconding'	=> (!empty($this->input->post('Absconding')))? 1:0,
                'Absentism'	=> (!empty($this->input->post('Absentism')))? 1:0,
                'FraudulentActivity'	=> (!empty($this->input->post('FraudulentActivity')))? 1:0,
                'Indiscipline'	=> (!empty($this->input->post('Indiscipline')))? 1:0,
                'NonPreformation'	=> (!empty($this->input->post('NonPreformation')))? 1:0,
                'GrowthOpportunities'	=> (!empty($this->input->post('GrowthOpportunities')))? 1:0,
                'HealthOfFamilyMember'	=> (!empty($this->input->post('HealthOfFamilyMember')))? 1:0,
                'HigherStudy'	=> (!empty($this->input->post('HigherStudy')))? 1:0,
                'JobEnvironment'	=> (!empty($this->input->post('JobEnvironment')))? 1:0,
                'JobProfile'	=> (!empty($this->input->post('JobProfile')))? 1:0,
                'Marriage'	=> (!empty($this->input->post('Marriage')))? 1:0,
                'Medicine'	=> (!empty($this->input->post('Medicine')))? 1:0,
                'OwnBusiness'	=> (!empty($this->input->post('OwnBusiness')))? 1:0,
                'Relocation'	=> (!empty($this->input->post('Relocation')))? 1:0,
                'Salary'	=> (!empty($this->input->post('Salary')))? 1:0,
                'AnyOther'	=> (!empty($this->input->post('AnyOther')))? 1:0,
                
                
                'MySkillsWereUsedEffectively'	=> (!empty($this->input->post('MySkillsWereUsedEffectively')))? $a :'No',
                'IWasGivenDueRecognitionForTheWork'	=> (!empty($this->input->post('IWasGivenDueRecognitionForTheWork')))? $b :'No',
                'IWasAbleToManageTheWorkGivenToMe'	=> (!empty($this->input->post('IWasAbleToManageTheWorkGivenToMe')))? $c :'No',
                'MyKnowledgeForTheJobWasSufficient'	=> (!empty($this->input->post('MyKnowledgeForTheJobWasSufficient')))? $d :'No',
                'ProvidesEffectiveCoaching'	=> (!empty($this->input->post('ProvidesEffectiveCoaching')))? $e :'No',
                'RoleAndResponsibilitiesWereClearlyDefined'	=> (!empty($this->input->post('RoleAndResponsibilitiesWereClearlyDefined')))? $f :'No',
                'ProvidedFairAndEqualTreatment'	=> (!empty($this->input->post('ProvidedFairAndEqualTreatment')))? $g :'No',
                'RegularPerformanceFeedbackWasProvided'	=> (!empty($this->input->post('RegularPerformanceFeedbackWasProvided')))? $h :'No',
                'DiscussedCareerAdvancementOpportunities'	=> (!empty($this->input->post('DiscussedCareerAdvancementOpportunities')))? $i :'No',
                'ThereWasKnowledgeSharingAndTransfer'	=> (!empty($this->input->post('ThereWasKnowledgeSharingAndTransfer')))? $j :'No',
                'ThereWasTeamWorkAndSynergy'	=> (!empty($this->input->post('ThereWasTeamWorkAndSynergy')))? $k :'No',
                'ResponsibilitiesWereAndShared'	=> (!empty($this->input->post('ResponsibilitiesWereAndShared')))? $l :'No',
                'UnbiasedCounsellingAndSupportWasProvided'	=> (!empty($this->input->post('UnbiasedCounsellingAndSupportWasProvided')))? $m :'No',
                'SharedRecognitionForGoodWork'	=> (!empty($this->input->post('SharedRecognitionForGoodWork')))? $n :'No',
                 'GeneralCommentsOne'	=> $this->input->post('GeneralCommentsOne'),
                'GeneralCommentsTwo'	=> $this->input->post('GeneralCommentsTwo'),
                'GeneralCommentsThree'	=> $this->input->post('GeneralCommentsThree'),
                'InterviewerComments'	=> $this->input->post('InterviewerComments')
                
        );

        $last_user_id = $this->SeparationModel->InsertSepThird($data1);
		
	
		
	
		$this->session->set_flashdata('message', '<script>alert("Your data inserted successfully");</script>');
    	redirect('adminzone/Separation/SeparationThird', 'refresh');
		
		
	}else
	{
		$this->session->set_flashdata('message', '<script>alert("Fill all required field!");</script>');
		redirect('adminzone/Separation/SeparationThird', 'refresh');
	}
		
}


	

}
