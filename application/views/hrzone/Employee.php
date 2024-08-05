<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {
	
	public function __construct(){
    parent::__construct();
    $this->load->model("EmployeeModel", "EmpObj");
    $this->load->model("HrModel", "HrObj");
	$this->load->model("HierarchyModel");
	$this->load->library('HrLib_user');
	$data= $this->session->userdata();
	
	
	$this->UserId = $data['auth']['id'];
	// $this->name = $data['auth']['name'];
	$this->email = $data['auth']['email'];

  } 
  
	public function employeeList(){
		
		$empList = $this->EmpObj->empListRecord();
		// echo "<pre>";
		// print_r($empList);die;
		$data['page'] = 'employeeList';
		$data['empList'] = $empList;
		$this->load->view('hrzone/employeeList',['empList'=>$empList]);
	}
    
	public function EmployeeDoc(){
		
		$data['empDoc'] = $this->EmpObj->empListRecord();
		// echo "<pre>";
		// print_r($empDoc);
		// die;
		$this->load->view('hrzone/allEmployeeDoc', $data);
	}
    public function singleEmployeeDoc($id){
		
		$data['empSingleDoc'] = $this->EmpObj->empDocList($id);
		
		$data['userId'] = $id;
		$this->load->view('hrzone/singleEmployeeDoc', $data);
	}
    
	
    
	public function singleEmpDownload($Id){
		 // $Doctr =$this->uri->segment(4);
		// $DocName =trim($Doctr, '%20');
		// echo "<br>";
		// $U_id =$this->uri->segment(5);           
		 // echo $data;
		// echo "<pre>";
		// print_r($data); 
		//print_r($array); 
		
		
		 // die;
        $this->load->helper('download');
		//print_r($_GET);die;
		
		
        $fileinfo = $this->EmpObj->download($Id);
		
		// echo "<pre>";
		// print_r($fileinfo);die;
        $file = 'upload/UserDocument/'.$fileinfo->filePath;
        force_download($file, NULL);
	}
	
	public function singleEmpDelete(){
		$Userdetail = $this->EmpObj->UserdetailDocuments($this->input->get('id'));
         $result = $this->EmpObj->deleteDocuments($this->input->get('id'));
		if($result != 0) {
			
			
			$dataEmp =[
			
				'UserId_deleted_by' => $this->UserId,
				// 'name_deleted_by' => $this->name,
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
	
	
	public function singleEmpView($id){
			
			$file = $this->EmpObj->download($id);
			// print_r($file);
			$filetmpPath = $file->filePath;
			$fileCheck = explode(".", $filetmpPath);
			 // echo $fileCheck[1];die;
			if($fileCheck[1] === 'jpg'){
				$tofile = 'upload/UserDocument/'.$file->filePath;
				// print_r($tofile);die;
				
				header('Content-Type: image/jpg');
				readfile($tofile);
			}else if($fileCheck[1] === 'png'){
				$tofile = site_url('upload/UserDocument/'.$file->filePath);
				header('Content-Type: image/png');
				readfile($tofile);
			}else{
			
			$tofile = 'upload/UserDocument/'.$file->filePath;
			// print_r($tofile); die;
			header('Content-Type: application/pdf');
			readfile($tofile);
			}
        
	}
	
	
	
	 public function AddEmployee()
	{	
		$data['teamDeisn'] = $this->HrObj->goalTeamDesignation();
		$data['elements'] = $this->HierarchyModel->getCategories();
		// print_r($teamDeisn);die;
		$this->load->view("hrzone/addEmployee", $data);
	}


	public function AddEmployeeQDX()
	{		
		// echo "<pre>";
		// print_r($_POST); 
		// print_r($_FILES); 
		
		
		// die;
		
			$this->form_validation->set_rules('email', 'email', 'trim|required|is_unique[tbl_user.email]');
			$this->form_validation->set_rules('employee_id', 'employee_id', 'trim|required|is_unique[tbl_user.employee_id]');
			if ($this->form_validation->run() != FALSE) {
	
			 $data1 = array
				(
					'name' => $this->input->post('name'),
					'parent_id' => $this->input->post('parentLevel'),
					'personalEmail' => $this->input->post('personalEmail'),
					'email' => $this->input->post('email'),
					'employee_id' => $this->input->post('employee_id'),
					'EmployeejoiningDate' => $this->input->post('joiningDate')
						
				);

				$this->load->model("EmpObj");
				$last_user_id = $this->EmpObj->insert_data1($data1);
			
				
	if($last_user_id){
		$data2 = array
        (
                //$last_user_id is the value of the foreign key to link the tables
                'UserId'       => $last_user_id, 
                'dob'       => $this->input->post('dob'),
                'phone'          => $this->input->post('phone'),
                'alternatePhone'       => $this->input->post('alternatePhone'),
                // 'joiningDate'         => $this->input->post('joiningDate'),
                'position'        => $this->input->post('position'),
                'maritalStatus'      => $this->input->post('maritalStatus'),
                'fatherName'       => $this->input->post('fatherName'),
                'spouseName'       => $this->input->post('spouseName'),
                'localAddress'     => $this->input->post('localAddress'),
                'permanentAddress' => $this->input->post('permanentAddress')
                
        );

        $this->EmpObj->insert_data2($data2);
        //$data['insert'] = $last_ticket_id;
       
        $data5 = array
        (
                //$last_user_id is the value of the foreign key to link the tables
                'UserId'       => $last_user_id, 
                'bankName'       => $this->input->post('bankName'),
                'bankAccount'          => $this->input->post('bankAccount'),
                'bankBranch'       => $this->input->post('bankBranch'),
                'bankIFSCCode'         => $this->input->post('bankIFSCCode')
                
                
        );

        $this->EmpObj->insert_data5($last_user_id, $data5);
        //$data['insert'] = $last_ticket_id;
		
        $data6 = array
        (
                //$last_user_id is the value of the foreign key to link the tables
                'UserId'       => $last_user_id, 
                'experienceDesignation'       => $this->input->post('experienceDesignation'),
                'experienceOrganisation'          => $this->input->post('experienceOrganisation'),
                'experienceDuration'       => $this->input->post('experienceDuration'),
                'experienceTotal'         => $this->input->post('experienceTotal'),
                'previousSalary'        => $this->input->post('previousSalary')
        );

        $this->EmpObj->insert_data6($last_user_id, $data6);
        //$data['insert'] = $last_ticket_id;
       $data7 = array
        (
                //$last_user_id is the value of the foreign key to link the tables
                'UserId'       => $last_user_id, 
                'monthlySalary'       => $this->input->post('monthlySalary'),
                // 'currentMonthSalary'          => $this->input->post('currentMonthSalary'),
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

        $this->EmpObj->insert_data7($data7);
        //$data['insert'] = $last_ticket_id;
		
		
		$data3 = array
        (
                //$last_user_id is the value of the foreign key to link the tables
                'UserId'       => $last_user_id,
                'examPassed' => $this->input->post('examPassed'),
                'examYear'   => $this->input->post('examYear'),
                'examBoard'  => $this->input->post('examBoard'),
                'marks'      => $this->input->post('marks')
                
        );

        $this->EmpObj->insert_data3($last_user_id, $data3);
		
		
		$data4 = array
        (
                //$last_user_id is the value of the foreign key to link the tables
                'UserId'       => $last_user_id,
                'coursePassed' => $this->input->post('coursePassed'),
                'courseYear'   => $this->input->post('courseYear'),
                'courseBoard'  => $this->input->post('courseBoard'),
                'courseMarks'  => $this->input->post('courseMarks')
                
        );

        $this->EmpObj->insert_data4($last_user_id, $data4);
		
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
						
						'UserId'       => $last_user_id,	
						
						'filePath' => $fileData['file_name']
						);
						
						//$this->db->insert('employee_documents', $data8);
						$this->EmpObj->insert_data8($last_user_id, $data8);
						
                    }
                } 
				

				
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
						
						'UserId'       => $last_user_id,
						'EmpProfileImage' => $fileData['file_name']
						);
						
						//$this->db->insert('employee_documents', $data8);
						$this->EmpObj->insert_data9($last_user_id, $data9);
						
                    }
                } 

				
        
		
		
	//View
    
	
					
					
	}  
	
	
		$this->session->set_flashdata('message', '<script>alert("Your data inserted successfully");</script>');
    	redirect('hrzone/Employee/AddEmployee', 'refresh');
		
		
	}else
	{
		$this->session->set_flashdata('message', '<script>alert("Your Email or EmployeeId already Exist!");</script>');
		redirect('hrzone/Employee/AddEmployee', 'refresh');
	}
}	
			

	
	public function singleFileUpload($id=null){
		
		
		// $last_user_id = $frmUserId;
		$U_id =$this->uri->segment(4);
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
						
						'UserId'       => $this->input->post('frmUserId'),	
						'fileName' => $this->input->post('fileName')[$i],
						'filePath' => $fileData['file_name']
						);
						
						
						$result= $this->EmpObj->insert_data8($U_id, $data8);
						if($result){
							echo json_encode(array('status'=>1, 'message'=>'The success'));
						}else{
							echo json_encode(array('status'=>0, 'message'=>'Something went wrong'));
						}
                    }
                } 
			
				
	}
	
	public function singleFileAdminUpload(){
		
		// print_r($_FILES); 
		
		
		// die;
		$last_user_id = $this->UserId;
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
						
						'UserId'       => $last_user_id,
						'EmpProfileImage' => $fileData['file_name']
						);
						
						//$this->db->insert('employee_documents', $data8);
						$result = $this->EmpObj->insertAdminProfileImage($last_user_id, $data9);
						if($result){
							echo json_encode(array('status'=>1, 'message'=>'The success'));
						}else{
							echo json_encode(array('status'=>0, 'message'=>'Something went wrong'));
						}
                    }
                } 

				
        
				
	}
	
	
	
	
	public function employeeProfile($id = null){
	
	$this->UserId =$id;
	$data['UserInfo'] = $this->EmpObj->getUser($this->UserId);
	$data['EmployeeDetails'] = $this->EmpObj->getEmpDetails($this->UserId);
	$data['EmployeeBankInfo'] = $this->EmpObj->getBankDetails($this->UserId);
	$data['EmployeePreExp'] = $this->EmpObj->getWorkExperience($this->UserId);
	$data['EmployeeSalaryInfo'] = $this->EmpObj->getSalary($this->UserId);
	$data['EmployeeProfileImage'] = $this->EmpObj->getProfileImage($this->UserId);
	$data['EmployeeEducationDetails'] = $this->EmpObj->getEducationDetails($this->UserId);
	$data['EmployeeCourseDetails'] = $this->EmpObj->getCourseDetails($this->UserId);
	$data['EmployeeDocuments'] = $this->EmpObj->getDocuments($this->UserId);
	
	
	$this->load->view("hrzone/employeeProfile", $data);
}
 

	public function EditEmployee($id = null){
		
		$this->UserId =$id;
		
		$daerInfo = $this->EmpObj->getUser($this->UserId);
		$parentdetails = $daerInfo->parent_id;
		// print_r($daerInfo);die;
		
		$data['parentInfo'] = $this->EmpObj->getUser($parentdetails);
		$data['UserInfo'] = $this->EmpObj->getUser($this->UserId);
		$data['EmployeeDetails'] = $this->EmpObj->getEmpDetails($this->UserId);
		$data['Parentdesign'] = $this->EmpObj->getEmpDetails($parentdetails);
		$data['teamDeisn'] = $this->HrObj->goalTeamDesignation();
		$data['EmployeeBankInfo'] = $this->EmpObj->getBankDetails($this->UserId);
		$data['EmployeePreExp'] = $this->EmpObj->getWorkExperience($this->UserId);
		$data['EmployeeSalaryInfo'] = $this->EmpObj->getSalary($this->UserId);
		$data['EmployeeProfileImage'] = $this->EmpObj->getProfileImage($this->UserId);
		$data['EmployeeEducationDetails'] = $this->EmpObj->getEducationDetails($this->UserId);
		$data['EmployeeCourseDetails'] = $this->EmpObj->getCourseDetails($this->UserId);
		$data['EmployeeDocuments'] = $this->EmpObj->getDocuments($this->UserId);
		$data['LeftEmpDetails'] = $this->EmpObj->getLeftEmpDetails($this->UserId);
		$data['elements'] = $this->HierarchyModel->getCategories();
		$this->load->view("hrzone/EditEmployee", $data);
	}
	
	public function EditEmployeeQdx($id = null){
		
		
		// echo "<pre>";
		// print_r($_POST); 
		// print_r($_FILES); 
		
		
		// echo $id;
		// die;
	
	if($id){ 
	 $data1 = array
        (
                'name'        	=> $this->input->post('name'),
                'email'       	=> $this->input->post('email'),
				'parent_id' => $this->input->post('parentLevel'),
				'personalEmail' => $this->input->post('personalEmail'),
                'employee_id'  	=> $this->input->post('employee_id'),
                'employeeStatus'  	=> $this->input->post('employeeStatus'),
				'EmployeejoiningDate'  	=> $this->input->post('DateOfJoining'),
                'employeeExitDate'  	=> $this->input->post('employeeleaveDate')
                
        );

        $this->HrObj->updateUser($id, $data1);
		
	
		$data2 = array
        (
                //$last_user_id is the value of the foreign key to link the tables
                'UserId'       => $id, 
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
				// 'employeeleaveDate'       => $this->input->post('employeeleaveDate'),
                'employeeLeaveYear'          => $this->input->post('employeeLeaveYear'),
                'employeeLeaveMonth'       => $this->input->post('employeeLeaveMonth'),
                // 'currentLeaveStatus'         => $this->input->post('currentLeaveStatus'),
                'gotRelievingLetter'        => $this->input->post('gotRelievingLetter'),
                'noticeServedStatus'        => $this->input->post('noticeServedStatus')
                
        );

        $this->HrObj->updateUserDetails($id, $data2);
        //$data['insert'] = $last_ticket_id;
       
        $data5 = array
        (
                //$last_user_id is the value of the foreign key to link the tables
                'UserId'       => $id, 
                'bankName'       => $this->input->post('bankName'),
                'bankAccount'          => $this->input->post('bankAccount'),
                'bankBranch'       => $this->input->post('bankBranch'),
                'bankIFSCCode'         => $this->input->post('bankIFSCCode')
                
                
        );

        $this->HrObj->updateBankInfo($id, $data5);
        //$data['insert'] = $last_ticket_id;
		
        $data6 = array
        (
                //$last_user_id is the value of the foreign key to link the tables
                'UserId'       => $id, 
                'experienceDesignation'       => $this->input->post('experienceDesignation'),
                'experienceOrganisation'          => $this->input->post('experienceOrganisation'),
                'experienceDuration'       => $this->input->post('experienceDuration'),
                'experienceTotal'         => $this->input->post('experienceTotal'),
                'previousSalary'        => $this->input->post('previousSalary')
        );

        $this->HrObj->updateExperienceInfo($id, $data6);
        //$data['insert'] = $last_ticket_id;
       $data7 = array
        (
                //$last_user_id is the value of the foreign key to link the tables
                'UserId'       => $id, 
                 'monthlySalary'       => $this->input->post('monthlySalary'),
                // 'currentMonthSalary'          => $this->input->post('currentMonthSalary'),
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

        $this->HrObj->updateSalary($id, $data7);
        //$data['insert'] = $last_ticket_id;
		
		
		$data3 = array
        (
                //$last_user_id is the value of the foreign key to link the tables
                'UserId'       => $id,
                'examPassed' => $this->input->post('examPassed'),
                'examYear'   => $this->input->post('examYear'),
                'examBoard'  => $this->input->post('examBoard'),
                'marks'      => $this->input->post('marks')
                
        );

        $this->HrObj->updateEducation($id, $data3);
		
		
		$data4 = array
        (
                //$last_user_id is the value of the foreign key to link the tables
                'UserId'       => $id,
                'coursePassed' => $this->input->post('coursePassed'),
                'courseYear'   => $this->input->post('courseYear'),
                'courseBoard'  => $this->input->post('courseBoard'),
                'courseMarks'  => $this->input->post('courseMarks')
                
        );

        $this->HrObj->updateCourse($id, $data4);
		
		

				
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
						
						'UserId'       => $id,
						'EmpProfileImage' => $fileData['file_name']
						);
						
						//$this->db->insert('employee_documents', $data8);
						$this->HrObj->updateProfileImage($id, $data9);
						
                    }
                } 

				
				
				
				
		
	//View
    
	
					
					
	}  
		
		
		// $data10 = array
        // (
                // $last_user_id is the value of the foreign key to link the tables
               
                // 'employeeleaveDate'       => $this->input->post('employeeleaveDate'),
                // 'currentLeaveStatus'         => $this->input->post('currentLeaveStatus'),
                // 'gotRelievingLetter'        => $this->input->post('gotRelievingLetter'),
                // 'noticeServedStatus'        => $this->input->post('noticeServedStatus')
                
                
        // );

        // $this->HrObj->updateLeftEmployeeDetails($data10);
        
		

		$data['message'] = $this->session->set_flashdata('message', '<script>alert("Your data updated successfully");</script>');
    	redirect('hrzone/Employee/EmployeeDoc', $data);
		
		
	}
	
	
	
	
	public function EmployeeProfileDeleteById($id){
		// print_r($_GET);die;
		if(!empty($id)) {
         $result = $this->HrObj->EmployeeDetailsDelete($id);
			// print_r($result);die;
			
			$data['message'] = $this->session->set_flashdata('message', '<script>alert("Your data deleted successfully");</script>');
    	redirect('hrzone/Employee/EmployeeDoc', $data);
		
         // echo json_encode(['data'=> $result]);
		}
		else{
			return false;
			// echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
		
	}









}