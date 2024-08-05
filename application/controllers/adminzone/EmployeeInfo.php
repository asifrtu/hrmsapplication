<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeInfo extends CI_Controller {
	private $UserId;
	
	
	
	public function __construct(){
    parent::__construct();
    $this->load->model("EmployeeModel", 'EmpObj');
    $this->load->model("HrModel", "HrObj");
	$this->load->model("AttendanceModel");
	$this->load->model("CommentModel");
	$this->load->model("KpiModel");
	$this->load->library('Lib_user');
	$data= $this->session->userdata();
	
	
	$this->UserId = $data['auth']['id'];
	$this->name = $data['auth']['name'];
	$this->email = $data['auth']['email'];
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
				// 'parent_id' => $this->input->post('parentLevel'),
				// 'personalEmail' => $this->input->post('personalEmail'),
                'employee_id'  	=> $this->input->post('employee_id'),
                // 'employeeStatus'  	=> $this->input->post('employeeStatus'),
				'EmployeejoiningDate'  	=> $this->input->post('DateOfJoining'),
                // 'employeeExitDate'  	=> $this->input->post('employeeleaveDate')
                
        );

        $this->HrObj->updateUser($this->UserId, $data1);
		
	
		$data2 = array
        (
                //$last_user_id is the value of the foreign key to link the tables
                'UserId'       => $this->UserId, 
                'dob'       => $this->input->post('dob'),
                'phone'          => $this->input->post('phone'),
                'alternatePhone'       => $this->input->post('alternatePhone'),
                // 'joiningDate'         => $this->input->post('joiningDate'),
                'position'        => $this->input->post('position'),
                'maritalStatus'      => $this->input->post('maritalStatus'),
                'fatherName'       => $this->input->post('fatherName'),
                'spouseName'       => $this->input->post('spouseName'),
                'localAddress'     => $this->input->post('localAddress'),
                'permanentAddress' => $this->input->post('permanentAddress'),
				
                
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



public function KPIPointsByMonth(){
		// print_r($_POST);die;
		// print_r($_GET);die;
		
		if(!empty($this->input->get())) {
			$UB = $this->UserId;
			 $UserIDB = (array)$UB;
			 
			 $YB = $this->input->get('YearID');
			 $YearIDB = (array)$YB;
			 
			 $MB = $this->input->get('MonthID');
			 $MonthIDB = (array)$MB;
			 
			 
			 
		 $userData = $this->HrObj->getempKPIUser($this->UserId);
		 // print_r($userData);die;
					$result = [];  

					foreach($userData as $v) {
					
					$getKpiPointsAndMarks = $this->HrObj->KPIPintsMonthWise($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					// print_r($getKpiPointsAndMarks);die;
					$getKpiMarks = $this->KpiModel->getMarks($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					$getKpiMarksObtained = $this->KpiModel->getMarksObtained($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					// print_r($getUserMonthDays);die;
					$result[]= [
					'userId'=>$v->id,
					'NameEmp'=>$v->name,
					'UserempID'=>$UserIDB,
					'YearempID'=>$YearIDB,
					'MonthempID'=>$MonthIDB,
					'PointsAndMarks'=> $getKpiPointsAndMarks,
					'KpiMarks'=> $getKpiMarks,
					'MarksObtained'=> $getKpiMarksObtained

					];
					}	
					
					
					
					
					
					
		 
         echo json_encode(['data'=> $result]);
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
		
		
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
	
	
	public function singleEmpDelete(){
		$Userdetail = $this->EmpObj->UserdetailDocuments($this->input->get('id'));
         $result = $this->EmpObj->deleteDocuments($this->input->get('id'));
		// print_r($result); die;
		if($result != 0) {
			
			$dataEmp =[
			
				'UserId_deleted_by' => $this->UserId,
				'name_deleted_by' => $this->name,
				'email_deleted_by' => $this->email,
				'emp_UserId' => $Userdetail->UserId,
				'emp_fileName' => $Userdetail->fileName,
				'emp_filePath' => $Userdetail->filePath
			
			];
			$this->EmpObj->UserDeletedBy($dataEmp);
			
			// print_r($result);die;
         echo json_encode(array('status'=>1, 'message'=>'The success'));
		}else{
			echo json_encode(array('status'=>0, 'message'=>'Something went wrong'));
		}
		
	}
	


}
