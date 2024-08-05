<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comment extends CI_Controller {
	private $UserId;
	
	
	
	public function __construct(){
    parent::__construct();
    $this->load->model("EmployeeModel", 'EmpObj');
    $this->load->model("HrModel", "HrObj");
	$this->load->model("PayModel", "PayObj");
	$this->load->model("AttendanceModel");
	$this->load->model("HierarchyModel");
	$this->load->model("CommentModel");
	$this->load->library('HrLib_user');
	$data= $this->session->userdata();
	
	
	$this->UserId = $data['auth']['id'];
  } 
 
	
	public function KPIComment(){
		// print_r($_POST);die;
		// print_r($_GET);die;
		if(!empty($this->input->get())) {
		
			 
		 $userData = $this->CommentModel->getCommentSingleUser($this->input->get('UserId'), $this->input->get('YearID'), $this->input->get('MonthID'));
		 // print_r($userData);die;
					$result = [];  

					foreach($userData as $v) {
					
					
					$userAdminData = $this->CommentModel->getCommentAdmin($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					
					// print_r($userAdminData);die;
					$result[]= [
					'userId'=>$v->id,
					'userName' => $v->name,
					'ProfileImage' => $v->EmpProfileImage,
					'CommentUser' => $v->comment_Id,
					'CommentUser' => $v->Comment,
					'myAdminData' => $userAdminData
					

					];
					}	
					
					
					$userAdminData = $this->CommentModel->getCommentAdmin($this->input->get('UserId'), $this->input->get('YearID'), $this->input->get('MonthID'));
		 // print_r($userAdminData);die;
					$resultAdmin = [];  

					foreach($userAdminData as $v) {
					
					$resultAdmin[]= [
					'userId'=>$v->id,
					'userName' => $v->name,
					'comment_Id' => $v->comment_Id,
					'CommentUser' => $v->Comment
					

					];
					}	
					
					
					
					
		 
         echo json_encode(['data'=> $result, 'dataAdmin'=> $resultAdmin]);
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
	}
	
	public function AdminComment(){
		// print_r($_POST);die;
		// print_r($_GET);die;
		if(!empty($this->input->get())) {
		
			 
		 $userAdminData = $this->CommentModel->getCommentWallAdmin();
		 // print_r($userData);die;
					$result = [];  

					foreach($userAdminData as $v) {
					
					
					
					
					// print_r($userAdminData);die;
					$result[]= [
					'userId'=>$v->UserId,
					'CommentUser' => $v->comment_Id,
					'CommentUser' => $v->Comment
					

					];
					}	
					
					
					
					
					
					
		 
         echo json_encode(['data'=> $result]);
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
	}
	
	
	public function CommentAdd(){
		print_r($_POST);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		if(!empty($this->input->post())) {
			
			$CommentData = [
			'UserId' => $this->UserId,
			'Comment' => $this->input->post('Comment_Add'),
			'Year_Id' => $this->input->post('YearID'),
			'month_Id' => $this->input->post('MonthID'),
			'parent_id' => $this->input->post('UserId')
			
			];
			
			$this->CommentModel->InsertComment($CommentData);
		 
		 
         echo json_encode(['data'=> 1, 'message'=>'Data updated Successfully']);
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
	}
	
	public function WallCommentAdd(){
		// print_r($_POST);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		if(!empty($this->input->post())) {
			$currentDate = 2021;
			$CommentData = [
			'UserId' => $this->UserId,
			'Comment' => $this->input->post('Comment_Add'),
			'Year_Id' => $currentDate
			
			];
			
			$this->CommentModel->InsertComment($CommentData);
		 
		 
         echo json_encode(['data'=> 1, 'message'=>'Data updated Successfully']);
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
	}
	
	
	public function UpdateComment(){
		// print_r($_POST);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		if(!empty($this->input->post())) {
			
			
			$id = $this->input->post('AdComment_Id');
			
			$CommentData = [
			'Comment' => $this->input->post('AdComment')
			
			];
			
			$this->CommentModel->EditComment($id, $CommentData);
		 
		 
         echo json_encode(['data'=> 1, 'message'=>'Data updated Successfully']);
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
	}
	
	
	public function DeleteComment(){
		// print_r($_POST);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		if(!empty($this->input->post())) {
			
			
			$id = $this->input->post('id');
			
			
			$this->CommentModel->DelComment($id);
		 
		 
         echo json_encode(['data'=> 1, 'message'=>'Data updated Successfully']);
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
	}
	
	
	
	

	

}
