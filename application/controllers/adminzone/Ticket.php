<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ticket extends CI_Controller {
	private $UserId;
	
	
	
	public function __construct(){
    parent::__construct();
    $this->load->model("EmployeeModel", 'EmpObj');
    $this->load->model("HrModel", "HrObj");
	$this->load->model("PayModel", "PayObj");
	$this->load->model("AttendanceModel");
	$this->load->model("HierarchyModel");
	$this->load->model("TicketModel");
	$this->load->model("CommentModel");
	$this->load->library('Lib_user');
	$data= $this->session->userdata();
	$this->UserId = $data['auth']['id'];
	$this->name = $data['auth']['name'];
	$this->shortName = $data['auth']['shortName'];
  } 
 
	
	public function EmployeeTicket()
	{	
		
		$data['Ticketrecord'] = $this->TicketModel->getTicketRecord($this->UserId);
		$this->load->view("adminzone/myTicket", $data);
	}
	
	public function AllTicket(){
		// print_r($_POST);die;
		// print_r($_GET);die;
		if(!empty($this->input->get())) {
		
			 
		 $userData = $this->CommentModel->getCommentSingleUser($this->UserId, $this->input->get('YearID'), $this->input->get('MonthID'));
		 // print_r($userData);die;
					$result = [];  

					foreach($userData as $v) {
					
					
					// print_r($calenderResult);die;
					$result[]= [
					'userId'=>$v->id,
					'userName' => $v->name,
					'ProfileImage' => $v->EmpProfileImage,
					'CommentUser' => $v->Comment
					

					];
					}	
					
					
					$userAdminData = $this->CommentModel->getCommentAdmin($this->UserId, $this->input->get('YearID'), $this->input->get('MonthID'));
		 // print_r($userAdminData);die;
					$resultAdmin = [];  

					foreach($userAdminData as $v) {
					
					$resultAdmin[]= [
					'userId'=>$v->id,
					'userName' => $v->name,
					'parentId' => $v->parent_id,
					'CommentUser' => $v->Comment
					

					];
					}	
					
					
					
					
		 
         echo json_encode(['data'=> $result, 'dataAdmin'=> $resultAdmin]);
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
	}
	
	
	
	public function TicketAdd(){
		date_default_timezone_set("Asia/Kolkata");
		$Notifydate = date('Y-m-d');
		$NotifyTime = date("h:i:s a");
		// die;
		//print_r($_POST);die('abhishek');
		// print_r($_FILES);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		$this->form_validation->set_rules('ReasonOfToken', 'ReasonOfToken', 'required');
		$this->form_validation->set_rules('TokenDate', 'TokenDate', 'required');
		$this->form_validation->set_rules('organisationEmail', 'organisationEmail', 'required');
		$this->form_validation->set_rules('Description', 'Description', 'required');
		if($this->form_validation->run())
		{	// $id = $this->UserId;
			$LeaveData = [
			'ReasonOfToken' => $this->input->post('ReasonOfToken'),
			'TokenDate' => $this->input->post('TokenDate'),
			'organisationEmail' => $this->input->post('organisationEmail'),
			'Description' => $this->input->post('Description'),
			'UserId' => $this->UserId
			
			];
			
			$lastInsertId = $this->TicketModel->insertTicket($LeaveData);
			
			$Url = 'Ticket/EmpTicket';
	
	$NotifyData = [
			'UserId' => $this->UserId,
			'Title' => "$this->shortName raised ticket",
			'description' => $this->input->post('ReasonOfToken'),
			'NotifyTime' => $NotifyTime,
			'NotifyDate' =>$Notifydate,
			'designation' =>'Admin',
			'TitleUrl' => $Url
			
			];
			
	$data = $this->CommentModel->InsertNotify($NotifyData);
			
			
			
			
			// redirect('hrzone/Employee/employeeProfile', $emp_Id);
			// print_r($lastInsertId);die;
		 
		 
		// if($lastInsertId){
			 
		 
		//	$filesCount = count($_FILES['filePath']['name']);
           //     for($i = 0; $i < $filesCount; $i++){
              //      $_FILES['file']['name']     = $_FILES['filePath']['name'][$i];
               //     $_FILES['file']['type']     = $_FILES['filePath']['type'][$i];
                 //   $_FILES['file']['tmp_name'] = $_FILES['filePath']['tmp_name'][$i];
                //    $_FILES['file']['error']     = $_FILES['filePath']['error'][$i];
                  //  $_FILES['file']['size']     = $_FILES['filePath']['size'][$i];
                    
                    // File upload configuration
                //    $uploadPath = 'upload/UserDocument/';
                 //   $config['upload_path'] = $uploadPath;
                 //   $config['allowed_types'] = 'jpg|jpeg|png|gif|txt|text|doc|pdf';
                    //$config['max_size']    = '100';
                    //$config['max_width'] = '1024';
                    //$config['max_height'] = '768';
                    
                    // Load and initialize upload library
                 //   $this->load->library('upload', $config);
                  //  $this->upload->initialize($config);
                    
                    // Upload file to server
                  //  if($this->upload->do_upload('file')){
                        // Uploaded file data
                       // $fileData = $this->upload->data();
						
                        //$uploadData[$i]['filePath'] = $fileData['file_name'];
                     //   $data8= array(
						
					//	'ticketId'       => $lastInsertId,	
					//	'UserId'       => $this->UserId,
					//	'filePath' => $fileData['file_name']
					//	);
						
						//$this->db->insert('employee_documents', $data8);
					//	$this->TicketModel->insertTicketDoc($lastInsertId, $data8);
						
                  //  }
            //    } 
            //    } 
			
         $this->session->set_flashdata('message', '<script>alert("Your data inserted successfully");</script>');
			redirect('adminzone/Ticket/EmployeeTicket', 'refresh');
			
		}
		else{
			$this->session->set_flashdata('message', '<script>alert("Fill the all required fields!");</script>');
			redirect('adminzone/Ticket/EmployeeTicket', 'refresh');
		}
		
	}
	
	
	
	

	

}
