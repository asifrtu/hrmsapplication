<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Separation extends CI_Controller
{
	private $UserId;



	public function __construct()
	{
		parent::__construct();
		$this->load->model("EmployeeModel", 'EmpObj');
		$this->load->model("HrModel", "HrObj");
		$this->load->model("PayModel", "PayObj");
		$this->load->model("AttendanceModel");
		$this->load->model("HierarchyModel");
		$this->load->model("SeparationModel");
		$this->load->model("CommentModel");
		$this->load->model("SeparationModel");
		$this->load->library('HrLib_user');
		$data = $this->session->userdata();


		$this->UserId = $data['auth']['id'];
	}


	public function EmpExitRequest()
	{

		$data['Exitrecord'] = $this->SeparationModel->getAllExitRequest();
		$this->load->view("hrzone/ExitRequest", $data);
	}






	public function UserExitAccept()
	{
		// print_r($_POST);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		if (!empty($this->input->post())) {
			$pre = $this->input->post('Accept');
			if ($pre !== false) {

				$userUpdateData = $this->SeparationModel->InsertExitAccept($this->input->post('id'));
			}

			echo json_encode(['data' => 'Accept', 'message' => 'Data updated Successfully']);
		} else {
			echo json_encode(['data' => 0, 'message' => 'data not found']);
		}
	}

	public function UserExitDecline()
	{
		// print_r($_POST);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		if (!empty($this->input->post())) {
			$pre = $this->input->post('Decline');
			if ($pre !== false) {
				$userData = $this->SeparationModel->InsertExitDecline($this->input->post('id'));
			}

			echo json_encode(['data' => 'Decline', 'message' => 'Data updated Successfully']);
		} else {
			echo json_encode(['data' => 0, 'message' => 'data not found']);
		}
	}


	public function UserExitDetails()
	{
		// print_r($_POST);die;
		// print_r($_GET);die;
		if (!empty($this->input->post())) {

			$id = $this->input->post('id');
			$userData = $this->SeparationModel->getUserExitDetails($id);
			// print_r($userData);die;
			$result = [];

			foreach ($userData as $v) {
				// print_r($calenderResult);die;

				$LeaveUserData = $this->SeparationModel->getSingleExitData($v->id, $this->input->post('LeaveId'));
				$result[] = [
					'userId' => $v->id,
					'userName' => $v->name,
					'employee_id' => $v->employee_id,
					'maritalStatus' => $v->maritalStatus,
					'joiningDate' => $v->joiningDate,
					'position' => $v->position,
					'LeaveUser' => $LeaveUserData

				];
			}




			echo json_encode(['data' => $result]);
		} else {
			echo json_encode(['data' => 0, 'message' => 'data not found']);
		}
	}




	public function ExitFormEdit($Id)
	{
		// echo $Id; die;
		$this->UserId = $Id;
		$data['UserInfo'] = $this->EmpObj->getUser($this->UserId);
		$data['UserRecord'] = $this->SeparationModel->EmployeeInfoList($this->UserId);
		$data['Exitrecord'] = $this->SeparationModel->getExitRequest($this->UserId);
		$data['HandoverList'] = $this->SeparationModel->getListofHandover($this->UserId);
		$data['ProvidentFund'] = $this->SeparationModel->getProvidentFund($this->UserId);
		$data['User_Id'] = $this->UserId;
		// $data['UserExitrecord'] = $this->SeparationModel->getUserRequest($this->UserId);
		$this->load->view("hrzone/SeparationFormEdit", $data);
	}


	public function ExitSecondEdit($Id)
	{

		$this->UserId = $Id;
		$data['UserInfo'] = $this->EmpObj->getUser($this->UserId);
		$data['Exitrecord'] = $this->SeparationModel->getExitRequest($this->UserId);
		$data['SecondFormData'] = $this->SeparationModel->getExitFormSecond($this->UserId);
		$data['User_Id'] = $this->UserId;
		$this->load->view("hrzone/ExitSecondEdit", $data);
	}







	public function SecondEdit($Id)
	{
		// print_r($_POST); die;
		$this->UserId = $Id;
		$this->form_validation->set_rules('NoticePeriodServed', 'NoticePeriodServed', 'trim|required');
		$this->form_validation->set_rules('ReleasingFullAndFinalSettlement', 'ReleasingFullAndFinalSettlement', 'trim|required');
		$this->form_validation->set_rules('IssuingRelevingLetter', 'IssuingRelevingLetter', 'trim|required');
		$this->form_validation->set_rules('payrollNoticePeriodServed', 'payrollNoticePeriodServed', 'trim|required');
		$this->form_validation->set_rules('payrollExitMark', 'payrollExitMark', 'trim|required');
		$this->form_validation->set_rules('payrollHandoverOfJobResponsibilities', 'payrollHandoverOfJobResponsibilities', 'trim|required');
		if ($this->form_validation->run() != FALSE) {

			$data1 = array(
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
			redirect('hrzone/Separation/EmployeeExitForm', 'refresh');
		} else {
			$this->session->set_flashdata('message', '<script>alert("Fill all required field!");</script>');
			redirect('hrzone/Separation/EmployeeExitForm', 'refresh');
		}
	}

	public function EmployeeExitForm()
	{

		$data['ExitEmp'] = $this->SeparationModel->getAllExitEmp();
		$this->load->view("hrzone/EmployeeExitForm", $data);
	}

	public function FormOneEdit($Id)
	{
		// print_r($_POST); die;
		$this->UserId = $Id;
		if (!empty($this->input->post())) {

			$data1 = array(
				'pf_status'        	=> $this->input->post('pf_status'),
				// 'pf_inputtwo'       	=> $this->input->post('pf_inputtwo'),
				'UserId'  	=> $this->UserId

			);


			$last_user_id = $this->SeparationModel->Update_data1($this->UserId, $data1);




			$user_id = $this->UserId;

			$data5 = array(
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
			redirect('hrzone/Separation/EmployeeExitForm', 'refresh');
		} else {
			$this->session->set_flashdata('message', '<script>alert("Your Email or EmployeeId already Exist!");</script>');
			redirect('hrzone/Separation/EmployeeExitForm', 'refresh');
		}
	}




	public function ExitThirdEdit($Id)
	{

		$this->UserId = $Id;
		$data['UserInfo'] = $this->EmpObj->getUser($this->UserId);
		$data['Exitrecord'] = $this->SeparationModel->getExitRequest($this->UserId);
		$data['formData'] = $this->SeparationModel->getExitFormThird($this->UserId);
		$data['User_Id'] = $this->UserId;
		$this->load->view("hrzone/ExitThirdEdit", $data);
	}




	public function ExitThird($Id)
	{
		$this->UserId = $Id;
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
			$data1 = array(
				'UserId'	=> $this->UserId,
				'Name'      => $this->input->post('Name'),
				'EmpCode'	=> $this->input->post('EmpCode'),
				'DateOfLeaving'	=> $this->input->post('DateOfLeaving'),
				'ExitInterviewDate'	=> $this->input->post('ExitInterviewDate'),
				'Absconding'	=> (!empty($this->input->post('Absconding'))) ? 1 : 0,
				'Absentism'	=> (!empty($this->input->post('Absentism'))) ? 1 : 0,
				'FraudulentActivity'	=> (!empty($this->input->post('FraudulentActivity'))) ? 1 : 0,
				'Indiscipline'	=> (!empty($this->input->post('Indiscipline'))) ? 1 : 0,
				'NonPreformation'	=> (!empty($this->input->post('NonPreformation'))) ? 1 : 0,
				'GrowthOpportunities'	=> (!empty($this->input->post('GrowthOpportunities'))) ? 1 : 0,
				'HealthOfFamilyMember'	=> (!empty($this->input->post('HealthOfFamilyMember'))) ? 1 : 0,
				'HigherStudy'	=> (!empty($this->input->post('HigherStudy'))) ? 1 : 0,
				'JobEnvironment'	=> (!empty($this->input->post('JobEnvironment'))) ? 1 : 0,
				'JobProfile'	=> (!empty($this->input->post('JobProfile'))) ? 1 : 0,
				'Marriage'	=> (!empty($this->input->post('Marriage'))) ? 1 : 0,
				'Medicine'	=> (!empty($this->input->post('Medicine'))) ? 1 : 0,
				'OwnBusiness'	=> (!empty($this->input->post('OwnBusiness'))) ? 1 : 0,
				'Relocation'	=> (!empty($this->input->post('Relocation'))) ? 1 : 0,
				'Salary'	=> (!empty($this->input->post('Salary'))) ? 1 : 0,
				'AnyOther'	=> (!empty($this->input->post('AnyOther'))) ? 1 : 0,


				'MySkillsWereUsedEffectively'	=> (!empty($this->input->post('MySkillsWereUsedEffectively'))) ? $a : 'No',
				'IWasGivenDueRecognitionForTheWork'	=> (!empty($this->input->post('IWasGivenDueRecognitionForTheWork'))) ? $b : 'No',
				'IWasAbleToManageTheWorkGivenToMe'	=> (!empty($this->input->post('IWasAbleToManageTheWorkGivenToMe'))) ? $c : 'No',
				'MyKnowledgeForTheJobWasSufficient'	=> (!empty($this->input->post('MyKnowledgeForTheJobWasSufficient'))) ? $d : 'No',
				'ProvidesEffectiveCoaching'	=> (!empty($this->input->post('ProvidesEffectiveCoaching'))) ? $e : 'No',
				'RoleAndResponsibilitiesWereClearlyDefined'	=> (!empty($this->input->post('RoleAndResponsibilitiesWereClearlyDefined'))) ? $f : 'No',
				'ProvidedFairAndEqualTreatment'	=> (!empty($this->input->post('ProvidedFairAndEqualTreatment'))) ? $g : 'No',
				'RegularPerformanceFeedbackWasProvided'	=> (!empty($this->input->post('RegularPerformanceFeedbackWasProvided'))) ? $h : 'No',
				'DiscussedCareerAdvancementOpportunities'	=> (!empty($this->input->post('DiscussedCareerAdvancementOpportunities'))) ? $i : 'No',
				'ThereWasKnowledgeSharingAndTransfer'	=> (!empty($this->input->post('ThereWasKnowledgeSharingAndTransfer'))) ? $j : 'No',
				'ThereWasTeamWorkAndSynergy'	=> (!empty($this->input->post('ThereWasTeamWorkAndSynergy'))) ? $k : 'No',
				'ResponsibilitiesWereAndShared'	=> (!empty($this->input->post('ResponsibilitiesWereAndShared'))) ? $l : 'No',
				'UnbiasedCounsellingAndSupportWasProvided'	=> (!empty($this->input->post('UnbiasedCounsellingAndSupportWasProvided'))) ? $m : 'No',
				'SharedRecognitionForGoodWork'	=> (!empty($this->input->post('SharedRecognitionForGoodWork'))) ? $n : 'No',
				'GeneralCommentsOne'	=> $this->input->post('GeneralCommentsOne'),
				'GeneralCommentsTwo'	=> $this->input->post('GeneralCommentsTwo'),
				'GeneralCommentsThree'	=> $this->input->post('GeneralCommentsThree'),
				'InterviewerComments'	=> $this->input->post('InterviewerComments')

			);

			$last_user_id = $this->SeparationModel->UpdateSepThird($this->UserId, $data1);




			$this->session->set_flashdata('message', '<script>alert("Your data inserted successfully");</script>');
			redirect('hrzone/Separation/EmployeeExitForm', 'refresh');
		} else {
			$this->session->set_flashdata('message', '<script>alert("Fill all required field!");</script>');
			redirect('hrzone/Separation/EmployeeExitForm', 'refresh');
		}
	}


	public function SingleUserDocView()
	{
		// print_r($_POST);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		if (!empty($this->input->get())) {
			$getUserAttend = $this->AttendanceModel->getSingleUserDoc($this->input->get('id'));
			// print_r($getUserAttend);die;

			$result = [];

			foreach ($getUserAttend as $v) {
				$result = [

					'Edu_Id' => $v->Id,
					'UserId' => $v->UserId,
					'examPassed' => $v->fileName,


				];
			}


			echo json_encode($result);
		} else {
			echo json_encode(['data' => 0, 'message' => 'data not found']);
		}
	}


	public function SingleUserDocEdit()
	{
		// print_r($_POST);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		if (!empty($this->input->post())) {
			$id = $this->input->post('User_Id');
			$emp_Id = $this->input->post('emp_Id');
			$LeaveData = [
				'fileName' => $this->input->post('employee_examPassed'),

				'Id' => $this->input->post('User_Id')

			];

			$userData = $this->AttendanceModel->updateSingleUserDoc($id, $LeaveData);
			// redirect('hrzone/Employee/employeeProfile', $emp_Id);
			// print_r($userData);die;

			echo json_encode(['data' => 1, 'message' => 'Data updated Successfully']);
		} else {
			echo json_encode(['data' => 0, 'message' => 'data not found']);
		}
	}

	public function ResignationLetter($Id)
	{
		$this->UserId = $Id;
		$data['UserInfo'] = $this->EmpObj->getUser($this->UserId);
		$data['EmployeeDetails'] = $this->EmpObj->getEmpDetails($this->UserId);
		$data['letter'] = $this->SeparationModel->getresignation_letter($this->UserId);
		$data['Exitrecord'] = $this->SeparationModel->getExitRequest($this->UserId);
		$this->load->view("hrzone/Resignation", $data);
	}


	public function DeclarationForm($Id)
	{
		$this->UserId = $Id;
		$data['UserInfo'] = $this->EmpObj->getUser($this->UserId);
		$data['Exitrecord'] = $this->SeparationModel->getExitRequest($this->UserId);
		$this->load->view("hrzone/Declaration", $data);
	}
}
