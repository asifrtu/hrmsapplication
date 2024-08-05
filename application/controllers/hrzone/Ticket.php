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
	$this->load->library('HrLib_user');
	$data= $this->session->userdata();
	
	
	$this->UserId = $data['auth']['id'];
  } 
 
	
	public function EmpTicket()
	{	
		
		$data['Ticketrecord'] = $this->TicketModel->getEmployeeTicketData();
		$data['page'] = 'EmpTicket';
		$this->load->view("hrzone/employeeToken", $data);
	}
	
	public function UserTicketAccept(){
		// print_r($_POST);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		date_default_timezone_set("Asia/Kolkata");
		$Notifydate = date('Y-m-d');
		$NotifyTime = date("h:i:s a");
		if(!empty($this->input->post())) {
			$pre = $this->input->post('Accept');
			if($pre !== false){
				
				$userUpdateData = $this->TicketModel->InsertTicketAccept($this->input->post('id'));
				
				$Url = 'Ticket/EmployeeTicket';
	
				$NotifyData = [
				'UserId' => $this->UserId,
				'empUserId' => $this->input->post('id'),
				'Title' => "Ticket approved/declined by Admin",
				'description' => 'User',
				'NotifyTime' => $NotifyTime,
				'NotifyDate' =>$Notifydate,
				'TitleUrl' => $Url

				];

				$data = $this->CommentModel->InsertAdminNotify($NotifyData);
				if($data > 0){

						$CommentData = [
						'Count_UserId'=> $singleUserData->UserId,
						'Notification_Id'=> $data,
						];
						$datass = $this->CommentModel->InsertUserNotify($CommentData);
						
						
						}
				
				
			}
			
			echo json_encode(['data'=> 'Accept', 'message'=>'Data updated Successfully']);
			
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
	}
	
	public function UserTicketDecline(){
		// print_r($_POST);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		date_default_timezone_set("Asia/Kolkata");
		$Notifydate = date('Y-m-d');
		$NotifyTime = date("h:i:s a");
		if(!empty($this->input->post())) {
			$pre = $this->input->post('Decline');
			if($pre !== false){
				
				
				$userData = $this->TicketModel->InsertTicketDecline($this->input->post('id'));
				$Url = 'Ticket/EmployeeTicket';
				$NotifyData = [
			'UserId' => $this->UserId,
			'Title' => "Your Ticket request has been Declined",
			'description' => "Declined",
			'NotifyTime' => $NotifyTime,
			'NotifyDate' =>$Notifydate,
			'TitleUrl' => $Url
			
			];
			
	$data = $this->CommentModel->InsertNotify($NotifyData);
			
			
			}
		 
         echo json_encode(['data'=> 'Decline', 'message'=>'Data updated Successfully']);
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
	}
	
	
	public function UserTicketDetails(){
		// print_r($_POST);die;
		// print_r($_GET);die;
		if(!empty($this->input->post())) {
		
			$id = $this->input->post('id');
		 $userData = $this->TicketModel->getUserTicketDetails($id);
		 // print_r($userData);die;
					$result = [];  

					foreach($userData as $v) {
					// print_r($calenderResult);die;
					
					$LeaveUserData = $this->TicketModel->getSingleTicketData($v->id, $this->input->post('LeaveId'));
					$result[]= [
					'userId'=>$v->id,
					'userName' => $v->name,
					'employee_id' => $v->employee_id,
					'maritalStatus' => $v->maritalStatus,
					'joiningDate' => $v->joiningDate,
					'position' => $v->position,
					'EmpProfileImage' => $v->EmpProfileImage,
					'LeaveUser' => $LeaveUserData
					
					];
					}	
				
					
					
		 
         echo json_encode(['data'=> $result]);
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
	}
	
	
	
	public function TicketAdd(){
		// print_r($_POST);
		// print_r($_FILES);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		if(!empty($this->input->post())) {
			// $id = $this->UserId;
			$LeaveData = [
			'ReasonOfToken' => $this->input->post('ReasonOfToken'),
			'TokenDate' => $this->input->post('TokenDate'),
			'organisationEmail' => $this->input->post('organisationEmail'),
			'Description' => $this->input->post('Description'),
			'UserId' => $this->UserId
			
			];
			
			$lastInsertId = $this->TicketModel->insertTicket($LeaveData);
			// redirect('hrzone/Employee/employeeProfile', $emp_Id);
			// print_r($lastInsertId);die;
		 
		 
		 if($lastInsertId){
			 
		 
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
						
						'ticketId'       => $lastInsertId,	
						'UserId'       => $this->UserId,
						'filePath' => $fileData['file_name']
						);
						
						//$this->db->insert('employee_documents', $data8);
						$this->TicketModel->insertTicketDoc($lastInsertId, $data8);
						
                    }
                } 
                } 
			
         $this->session->set_flashdata('message', '<script>alert("Your data inserted successfully");</script>');
			redirect('adminzone/Ticket/EmpTicket', 'refresh');
			
		}
		else{
			$this->session->set_flashdata('message', '<script>alert("Some error is occur!");</script>');
			redirect('adminzone/Ticket/EmpTicket', 'refresh');
		}
		
	}
	
	
	
	

	

}
