<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DocdddddddFile extends CI_Controller {
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
  } 



	  
 public function AboutMe($id = null)
{	
	// echo $this->UserId;
	
	
	$data['UserInfo'] = $this->EmpObj->getUser($this->UserId);
	$data['EmployeeDetails'] = $this->EmpObj->getEmpDetails($this->UserId);
	$data['EmployeeBankInfo'] = $this->EmpObj->getBankDetails($this->UserId);
	$data['EmployeePreExp'] = $this->EmpObj->getWorkExperience($this->UserId);
	$data['EmployeeSalaryInfo'] = $this->EmpObj->getSalary($this->UserId);
	$data['EmployeeProfileImage'] = $this->EmpObj->getProfileImage($this->UserId);
	$data['EmployeeEducationDetails'] = $this->EmpObj->getEducationDetails($this->UserId);
	$data['EmployeeCourseDetails'] = $this->EmpObj->getCourseDetails($this->UserId);
	$data['EmployeeDocuments'] = $this->EmpObj->getDocuments($this->UserId);
	
	
	$this->load->view("adminzone/AboutMe", $data);
}




	public function employeeData(){
		
		// $this->UserId =$id;
		
		$data['UserInfo'] = $this->EmpObj->getUser($this->UserId);
		$data['EmployeeDetails'] = $this->EmpObj->getEmpDetails($this->UserId);
		$data['teamDeisn'] = $this->HrObj->goalTeamDesignation();
		$data['EmployeeBankInfo'] = $this->EmpObj->getBankDetails($this->UserId);
		$data['EmployeePreExp'] = $this->EmpObj->getWorkExperience($this->UserId);
		$data['EmployeeSalaryInfo'] = $this->EmpObj->getSalary($this->UserId);
		$data['EmployeeProfileImage'] = $this->EmpObj->getProfileImage($this->UserId);
		$data['EmployeeEducationDetails'] = $this->EmpObj->getEducationDetails($this->UserId);
		$data['EmployeeCourseDetails'] = $this->EmpObj->getCourseDetails($this->UserId);
		$data['EmployeeDocuments'] = $this->EmpObj->getDocuments($this->UserId);
		$data['LeftEmpDetails'] = $this->EmpObj->getLeftEmpDetails($this->UserId);
		$this->load->view("adminzone/UpdateEmployee", $data);
	}
	
	public function UpdateEmployeeQdx(){
		
		
		// echo "<pre>";
		// print_r($_POST); 
		// print_r($_FILES); 
		
		
		// echo $id;
		// die;
	
	if($this->UserId){ 
	 $data1 = array
        (
                'name'        	=> $this->input->post('name'),
                'email'       	=> $this->input->post('email'),
                'employee_id'  	=> $this->input->post('employee_id'),
				'employeeStatus'  	=> $this->input->post('employeeStatus')
                
        );

        $this->HrObj->updateUser($this->UserId, $data1);
		
	
		$data2 = array
        (
                //$last_user_id is the value of the foreign key to link the tables
                'UserId'       => $this->UserId, 
                'dob'       => $this->input->post('dob'),
                'phone'          => $this->input->post('phone'),
                'alternatePhone'       => $this->input->post('alternatePhone'),
                'joiningDate'         => $this->input->post('joiningDate'),
                'position'        => $this->input->post('position'),
                'maritalStatus'      => $this->input->post('maritalStatus'),
                'fatherName'       => $this->input->post('fatherName'),
                'spouseName'       => $this->input->post('spouseName'),
                'localAddress'     => $this->input->post('localAddress'),
                'permanentAddress' => $this->input->post('permanentAddress'),
				'employeeleaveDate'       => $this->input->post('employeeleaveDate'),
                'employeeLeaveYear'          => $this->input->post('employeeLeaveYear'),
                'employeeLeaveMonth'       => $this->input->post('employeeLeaveMonth'),
                // 'currentLeaveStatus'         => $this->input->post('currentLeaveStatus'),
                'gotRelievingLetter'        => $this->input->post('gotRelievingLetter'),
                'noticeServedStatus'        => $this->input->post('noticeServedStatus')
                
        );

        $this->HrObj->updateUserDetails($this->UserId, $data2);
        //$data['insert'] = $last_ticket_id;
       
        $data5 = array
        (
                //$last_user_id is the value of the foreign key to link the tables
                'UserId'       => $this->UserId, 
                'bankName'       => $this->input->post('bankName'),
                'bankAccount'          => $this->input->post('bankAccount'),
                'bankBranch'       => $this->input->post('bankBranch'),
                'bankIFSCCode'         => $this->input->post('bankIFSCCode')
                
                
        );

        $this->HrObj->updateBankInfo($this->UserId, $data5);
        //$data['insert'] = $last_ticket_id;
		
        $data6 = array
        (
                //$last_user_id is the value of the foreign key to link the tables
                'UserId'       => $this->UserId, 
                'experienceDesignation'       => $this->input->post('experienceDesignation'),
                'experienceOrganisation'          => $this->input->post('experienceOrganisation'),
                'experienceDuration'       => $this->input->post('experienceDuration'),
                'experienceTotal'         => $this->input->post('experienceTotal'),
                'previousSalary'        => $this->input->post('previousSalary')
        );

        $this->HrObj->updateExperienceInfo($this->UserId, $data6);
        //$data['insert'] = $last_ticket_id;
       $data7 = array
        (
                //$last_user_id is the value of the foreign key to link the tables
                'UserId'       => $this->UserId, 
                 'monthlySalary'       => $this->input->post('monthlySalary'),
                // 'currentMonthSalary' => $this->input->post('currentMonthSalary'),
                // 'currentCTC'       => $this->input->post('currentCTC'),
                'grossSalary'         => $this->input->post('grossSalary'),
                'basicSalary'        => $this->input->post('basicSalary'),
                'mobileExpenses'        => $this->input->post('mobileExpenses'),
                'HRA'        => $this->input->post('HRA'),
                'dearnessAllowance'        => $this->input->post('dearnessAllowance'),
                'Conveyance'        => $this->input->post('Conveyance'),
                'Medical'        => $this->input->post('Medical'),
                // 'Educational'        => $this->input->post('Educational'),
                'specialAllowance'        => $this->input->post('specialAllowance'),
                'performanceIncentives'        => $this->input->post('performanceIncentives'),
                'otherOrArrears'        => $this->input->post('otherOrArrears'),
                'Bonus'        => $this->input->post('Bonus'),
                'pancard'        => $this->input->post('pancard'),
                'aadharcard'        => $this->input->post('aadharcard'),
                'eProvidentFund'        => $this->input->post('eProvidentFund'),
                'ESI'        => $this->input->post('ESI'),
                'professionalTax'        => $this->input->post('professionalTax'),
                'ITax'        => $this->input->post('ITax'),
                'Loan'        => $this->input->post('Loan'),
                'Advance'        => $this->input->post('Advance'),
                'miscDeduction'        => $this->input->post('miscDeduction')
        );

        $this->HrObj->updateSalary($this->UserId, $data7);
        //$data['insert'] = $last_ticket_id;
		
		
		$data3 = array
        (
                //$last_user_id is the value of the foreign key to link the tables
                'UserId'       => $this->UserId,
                'examPassed' => $this->input->post('examPassed'),
                'examYear'   => $this->input->post('examYear'),
                'examBoard'  => $this->input->post('examBoard'),
                'marks'      => $this->input->post('marks')
                
        );

        $this->HrObj->updateEducation($this->UserId, $data3);
		
		
		$data4 = array
        (
                //$last_user_id is the value of the foreign key to link the tables
                'UserId'       => $this->UserId,
                'coursePassed' => $this->input->post('coursePassed'),
                'courseYear'   => $this->input->post('courseYear'),
                'courseBoard'  => $this->input->post('courseBoard'),
                'courseMarks'  => $this->input->post('courseMarks')
                
        );

        $this->HrObj->updateCourse($this->UserId, $data4);
		
		

				
        $filesCount = count($_FILES['EmpProfileImage']['name']);
                for($i = 0; $i < $filesCount; $i++){
                    $_FILES['file']['name']     = $_FILES['EmpProfileImage']['name'][$i];
                    $_FILES['file']['type']     = $_FILES['EmpProfileImage']['type'][$i];
                    $_FILES['file']['tmp_name'] = $_FILES['EmpProfileImage']['tmp_name'][$i];
                    $_FILES['file']['error']     = $_FILES['EmpProfileImage']['error'][$i];
                    $_FILES['file']['size']     = $_FILES['EmpProfileImage']['size'][$i];
                    
                    // File upload configuration
                    $uploadPath = 'upload/UserProfileImage/';
                    $config['upload_path'] = $uploadPath;
                    $config['allowed_types'] = 'jpg|jpeg|png|gif';
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
                        $data9= array(
						
						'UserId'       => $this->UserId,
						'EmpProfileImage' => $fileData['file_name']
						);
						
						//$this->db->insert('employee_documents', $data8);
						$this->HrObj->updateProfileImage ($this->UserId, $data9);
						
                    }
                } 

				
				
				
				
		
	//View
    
	
					
					
	}  
		
		
		$data10 = array
        (
                //$last_user_id is the value of the foreign key to link the tables
               
                'employeeleaveDate'       => $this->input->post('employeeleaveDate'),
                'currentLeaveStatus'         => $this->input->post('currentLeaveStatus'),
                'gotRelievingLetter'        => $this->input->post('gotRelievingLetter'),
                'noticeServedStatus'        => $this->input->post('noticeServedStatus')
                
                
        );

        $this->HrObj->updateLeftEmployeeDetails($data10);
        
		

		$data['message'] = $this->session->set_flashdata('message', '<script>alert("Your data updated successfully");</script>');
    	redirect('adminzone/EmployeeInfo/AboutMe', $data);
		
		
	}
 
 public function CompanyGoals(){
		
		$data['GoalYear'] = $this->HrObj->YearGoal();
		
		$this->load->view("adminzone/companyGoal", $data);
 }
 
 
 
 public function TeamYearlyGoals(){
		// $data['User'] = $this->HrObj->getSeoUser();
		
		// $this->UserId = $id;
		// $dataEmp = $this->EmpObj->getEmpDetails($this->UserId);
		// print_r($dataEmp); die;
		$data['User'] = $this->EmpObj->getUser($this->UserId);
		$data['GoalsPoint'] = $this->HrObj->CompanyYearlyGoals();
		$data['GoalYear'] = $this->HrObj->YearGoal();
		// $data['GoalYear'] = $this->HrObj->YearGoal();
		$data['GoalMonth'] = $this->HrObj->KPIMonth();
		$this->load->view("adminzone/TeamGoal", $data);
 }
 
 
 public function KPI(){
		// $data['User'] = $this->HrObj->getSeoUser();
		
		// $this->UserId = $id;
		// $dataEmp = $this->EmpObj->getEmpDetails($this->UserId);
		// print_r($dataEmp); die;
		$data['elements'] = $this->CommentModel->getCategories();
		$data['EmployeeProfileImage'] = $this->EmpObj->getProfileImage($this->UserId);
		$data['User'] = $this->EmpObj->getUser($this->UserId);
		$data['GoalsPoint'] = $this->HrObj->CompanyYearlyGoals();
		$data['GoalYear'] = $this->HrObj->YearGoal();
		// $data['GoalYear'] = $this->HrObj->YearGoal();
		$data['GoalMonth'] = $this->HrObj->KPIMonth();
		$this->load->view("adminzone/myKPI", $data);
 }
 
  public function Goals(){
		// $data['User'] = $this->HrObj->getSeoUser();
		
		// $this->UserId = $id;
		// $dataEmp = $this->EmpObj->getEmpDetails($this->UserId);
		// print_r($dataEmp); die;
		$data['User'] = $this->EmpObj->getUser($this->UserId);
		$data['GoalsPoint'] = $this->HrObj->CompanyYearlyGoals();
		$data['GoalYear'] = $this->HrObj->YearGoal();
		// $data['GoalYear'] = $this->HrObj->YearGoal();
		$data['GoalMonth'] = $this->HrObj->KPIMonth();
		$this->load->view("adminzone/myGoals", $data);
 }
 
 
 
 
	public function TeamGoals(){
		
		// $this->UserId =$id;
		$dataEmp = $this->EmpObj->getEmpDetails($this->UserId);
		
		if($dataEmp->position == "SEO Analyst"){
			
			if(!empty($this->input->get())) {
			$result = $this->HrObj->SeoGoalPintsYearWise($this->input->get('YearID'));
			// print_r($result);die;
			echo json_encode(['data'=> $result]);
			}
			else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

			}
			
		}else if($dataEmp->position == "Content Writer")
		{
			if(!empty($this->input->get())) {
			$result = $this->HrObj->ContentWriterGoalPintsYearWise($this->input->get('YearID'));
			// print_r($result);die;
			echo json_encode(['data'=> $result]);
			}
			else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

			}
			
			
		}else if($dataEmp->position == "Web Developer")
		{
			if(!empty($this->input->get())) {
			$result = $this->HrObj->DeveloperGoalPintsYearWise($this->input->get('YearID'));
			// print_r($result);die;
			echo json_encode(['data'=> $result]);
			}
			else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

			}
			
			
		}else if($dataEmp->position == "Graphic Designer")
		{
			if(!empty($this->input->get())) {
			$result = $this->HrObj->DesignerGoalPintsYearWise($this->input->get('YearID'));
			// print_r($result);die;
			echo json_encode(['data'=> $result]);
			}
			else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

			}
		}
		
		
		
		
		// print_r($dataEmp);
			
		
	}
	
	
	
	public function TeamgoalworkStausUpdateById(){
		// print_r($_POST);die;
		if(!empty($this->input->post())) {
         
		 $data6 = array
        (
                //$last_user_id is the value of the foreign key to link the tables
               
                
                'work_status'       => $this->input->post('team_work'),
                'Seo_Id'          => $this->input->post('teamId')
        ); 
		 $result = $this->HrObj->TeamGoalsUpdate($data6);
			// print_r($result);die;
			// return true;
         echo json_encode(['data'=> $result]);
		}
		else{
			return false;
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
		
	}
	
	
	


}
