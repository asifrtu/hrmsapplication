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
	$this->load->library('Lib_user');
	$data= $this->session->userdata();
	$this->UserId = $data['auth']['id'];
  } 
 
	
	public function AllComment(){
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
					'comment_Id' => $v->comment_Id,
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
	
	
	public function CommentAdd(){
		// print_r($_POST);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		echo date('y-m-d');die;
		if(!empty($this->input->post())) {
			
			$CommentData = [
			'UserId' => $this->UserId,
			'Comment' => $this->input->post('Comment_Add'),
			'Year_Id' => $this->input->post('YearID'),
			'month_Id' => $this->input->post('MonthID'),
			'parent_id' => 0
			
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
	
	
	public function HrNotification(){
		// print_r($_POST);die;
		// print_r($_GET);die;
		if(!empty($this->input->get())) {
		
			 
		 $userAdminData = $this->CommentModel->getNotify();
		 // print_r($userData);die;
					$result = [];  

					foreach($userAdminData as $v) {
					
					
					
					// print_r($CountData);die;
					$result[]= [
					'Id'=>$v->Id,
					'UserId'=>$v->UserId,
					'Title' => $v->Title,
					'description' => $v->description,
					'TitleUrl' => $v->TitleUrl,
					'NotifyTime' => $v->NotifyTime,
					// 'CountData' => $CountData,
					'NotifyDate' => $v->NotifyDate
					

					];
					}	
					
					$usAdminData = $this->CalenderModel->getWallEvent();
					
					$userCountData = $this->CommentModel->getCountNotify();
					foreach($userCountData as $v) {
					
					
					
					// print_r($CountData);die;
					$CountData[]= [
					
					'CountNotfy' => $v,
					
					

					];
					}	
					
					
					// print_r($CountData);die;
					
		 
         echo json_encode(['dataAnni'=> $result, 'CountData'=> $CountData]);
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
	}
	
	
	
	
	public function Notification()
{		
	$data['userAdminData'] = $this->CommentModel->getNotify();
	$data['GoalYear'] = $this->HrObj->YearGoal();
	$data['GoalMonth'] = $this->HrObj->KPIMonth();
	
	$this->load->view("adminzone/adminNotification", $data);
}

	

	

}
