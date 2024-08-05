<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AppraisalModel extends CI_Model {
	
	public $table1 = 'tbl_user';
	public $table2 = 'employeedetails';
	public $table3 = 'employee_education';
	public $table4 = 'employee_course';
	public $table5 = 'employee_bankaccount';
	public $table6 = 'employee_workexperience';
	public $table7 = 'employee_salary';
	public $table8 = 'employee_documents';
	public $table9 = 'employee_profileimage';
	public $table10 = 'left_employeedetails';
	public $table11 = 'listofhandover';
	public $table12 = 'provident_fund';
	public $table13 = 'exitformsecond';
	public $table14 = 'separation_three';
	public $table15 = 'exitrequest';
	
	public function InsertRating($id, $data1){
		
		$query = $this->db->get_where('appraisal_ratings', ['UserId'=> (int) $id]);
		// print_r($query->num_rows());die;
		if($query->num_rows() > 0){
			$this->db->update('appraisal_ratings',  $data1);
		}else{
			$this->db->insert('appraisal_ratings',  $data1);
		}
		
		return $this->db->affected_rows();  
	} 
	
	public function getAppraisalThree($id){
		$this->db->select('*');
		$this->db->from('appraisal_ratings');
		$this->db->where(["UserId" => (int)$id]);
		$query = $this->db->get();
		
		return $query->row();  
	} 
	
	public function getExiTFour($id){
		$this->db->select('*');
		$this->db->from('employeefeedback');
		$this->db->where(["UserId" => (int)$id]);
		$query = $this->db->get();
		
		return $query->row();  
	} 
	
	public function getExiTFive($id){
		$this->db->select('*');
		$this->db->from('overallevaluation');
		$this->db->where(["UserId" => (int)$id]);
		$query = $this->db->get();
		
		return $query->row();  
	} 
	
	public function getExiTSix($id){
		$this->db->select('*');
		$this->db->from('goalsforupcomingyear');
		$this->db->where(["UserId" => (int)$id]);
		$query = $this->db->get();
		
		return $query->result();  
	} 
	
	public function getExiTSixComment($id){
		$this->db->select('*');
		$this->db->from('appraisalsixoverallcomments');
		$this->db->where(["UserId" => (int)$id]);
		$query = $this->db->get();
		
		return $query->row();  
	} 
	
	public function getTitle(){
		$this->db->select('*');
		$this->db->from('appraisalthree_title');
		$query = $this->db->get();
		
		return $query->row();  
	} 
	
	public function getAPPraisalTitle(){
		$this->db->select('*');
		$this->db->from('appraisalthree_title');
		$query = $this->db->get();
		
		return $query->result();  
	} 
	
	
	
	public function getGoalsAndObjective(){
		$this->db->select('*');
		$this->db->from('goalsandobjective');
		$query = $this->db->get();
		
		return $query->result();  
	} 
	
	public function getAppGoalsAndObjective($id){
		$query = $this->db->get_where('goalsandobjective', ['GoalsAndObjective_Id'=> (int) $id]);
		return $query->result();  
	} 
	
	public function getAppProcess($id){
		$query = $this->db->get_where('appraisal_one_process', ['process_Id'=> (int) $id]);
		return $query->result();  
	} 
	public function getAppratingscale($id){
		$query = $this->db->get_where('appraisal_two_ratingscale', ['ratingscale_Id'=> (int) $id]);
		return $query->result();  
	} 
	
	
	
	
	public function getProcess(){
		$this->db->select('*');
		$this->db->from('appraisal_one_process');
		$query = $this->db->get();
		
		return $query->result(); 
	} 
	
	public function getappraisaltworatingscale(){
		$this->db->select('*');
		$this->db->from('appraisal_two_ratingscale');
		$query = $this->db->get();
		
		return $query->result();  
	} 
	
	
	
	public function InsertAppraisalFour($id, $data1){
		
		$query = $this->db->get_where('employeefeedback', ['UserId'=> (int) $id]);
		// print_r($query->num_rows());die;
		if($query->num_rows() > 0){
			$this->db->update('employeefeedback',  $data1);
		}else{
			$this->db->insert('employeefeedback',  $data1);
		}
		
		return $this->db->affected_rows();
		
	} 
	
	
	 
	
	public function UpdateAPPraisalTitle($IdObj, $LeaveData){
		
		$this->db->where('Id', (int) $IdObj);
		// $this->db->where('id', (int) $id);
		$this->db->update("appraisalthree_title", $LeaveData);
		return $this->db->affected_rows();
	
	}
	
	
	public function UpdateAPPraisalFourTitle($IdObj, $LeaveData){
		
		$this->db->where('Id', (int) $IdObj);
		// $this->db->where('id', (int) $id);
		$this->db->update("appraisalthree_title", $LeaveData);
		return $this->db->affected_rows();
	
	}
	
	public function getMonSalary($id){
		$query = $this->db->get_where($this->table7, ['UserId'=> (int) $id]);
		return $query->result();
	}
	
	public function getafter_appraisal($id){
		$query = $this->db->get_where('after_appraisal', ['UserId'=> (int) $id]);
		return $query->result();
	}
	
	public function getAppraisalList($id, $YearID, $MonthID){
		 $YID = $this->input->get('YearID');
         $MID = $this->input->get('MonthID');
		// print_r($data5);
		// die;
		// echo $MonthID; die;
		// $Att endId = $MonthID;
		// $this->db->select('*');
		// $this->db->from('tbl_user');
		// $this->db->join('employee_education', 'employee_education.UserId = tbl_user.id', 'left');
		// $this->db->join('employee_documents', 'employee_documents.UserId = tbl_user.id', 'left');
		// $this->db->join('employeeattendence', 'employeeattendence.UserId = tbl_user.id', 'left');
		
		$this->db->select('*');
		$this->db->from('after_appraisal');
		// $this->db->where(['currentLeaveStatus'=> 'Active']);
		$this->db->where("DATE_FORMAT(Appraisal_date,'%Y')", (int) $YID);
		$this->db->where("DATE_FORMAT(Appraisal_date,'%m')", (int) $MID);
		$this->db->where("UserId", (int) $id);
		//$this->db->join('employee_documents', 'employee_documents.UserId = tbl_user.id');
		
		$query = $this->db->get();
		// echo "<pre>";
		// print_r($query->result());die("ASIF");
		
		return $query->result();
		
	}
	
	public function UpdateAPPraisalGoal($IdObj, $LeaveData){
		$id = 1;
		$this->db->where('GoalsAndObjective_Id', (int) $IdObj);
		// $this->db->where('id', (int) $id);
		$this->db->update("goalsandobjective", $LeaveData);
		return $this->db->affected_rows();
	
	}
	
	
	
	
	public function InsertAppraisalFive($id, $data1){
		$query = $this->db->get_where('overallevaluation', ['UserId'=> (int) $id]);
		// print_r($query->num_rows());die;
		if($query->num_rows() > 0){
			$this->db->update('overallevaluation',  $data1);
		}else{
			$this->db->insert('overallevaluation',  $data1);
		}
		
		return $this->db->affected_rows();
		
		
	} 
	
	public function InsertAppraisalSixComment($id, $data1){
		$query = $this->db->get_where('appraisalsixoverallcomments', ['UserId'=> (int) $id]);
		// print_r($query->num_rows());die;
		if($query->num_rows() > 0){
			$this->db->update('appraisalsixoverallcomments',  $data1);
		}else{
			$this->db->insert('appraisalsixoverallcomments',  $data1);
		}
		
		return $this->db->affected_rows();  
	}

	
	
public function insert_data5($user_id, $data5){
    
	$query = $this->db->get_where('overallevaluation', ['UserId'=> (int) $user_id]);
		// print_r($query->num_rows());die;
		if($query->num_rows() > 0){
			$this->removeGoalsforupcomingyear($user_id);
			foreach($this->input->post('Goal') as $key=>$val){

			$insertData = [
			'UserId' => $user_id,
			'Goal' => $val,
			'ExpectedOutcomeMeasurableCriteria' => $this->input->post('ExpectedOutcomeMeasurableCriteria')[$key],
			'TimeTable' => $this->input->post('TimeTable')[$key],
			'IssueOrComments' => $this->input->post('IssueOrComments')[$key],

			];

			$this->db->insert('goalsforupcomingyear',  $insertData);
			}
		}
		else
		{
			foreach($this->input->post('Goal') as $key=>$val){

			$insertData = [
			'UserId' => $user_id,
			'Goal' => $val,
			'ExpectedOutcomeMeasurableCriteria' => $this->input->post('ExpectedOutcomeMeasurableCriteria')[$key],
			'TimeTable' => $this->input->post('TimeTable')[$key],
			'IssueOrComments' => $this->input->post('IssueOrComments')[$key],

			];

			$this->db->insert('goalsforupcomingyear',  $insertData);
			}
		}
	
    
   
    return $this->db->affected_rows();
} 

	
	
	// Fetch records
	public function getAllPosts($userid) {

		// Posts
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->where("id", $userid);
		$postsquery = $this->db->get();
       	
       	$postResult = $postsquery->result_array();

       	$posts_arr = array();
       	foreach($postResult as $post){
       		$id = $post['id'];
       		$name = $post['name'];
       		
       		// User rating
       		$this->db->select('rating');
			$this->db->from('evaluation_rating');
			// $this->db->where("userid", $userid);
			// $this->db->where("rating_id", $id);
			$userRatingquery = $this->db->get();
	       	
	       	$userpostResult = $userRatingquery->result_array();

	       	$userRating = 0;
	       	if(count($userpostResult)>0){
	       		$userRating = $userpostResult[0]['rating'];
	       	}
	     
       		// Average rating
       		$this->db->select('ROUND(AVG(rating),1) as averageRating');
			$this->db->from('evaluation_rating');
			// $this->db->where("postid", $id);
			$ratingquery = $this->db->get();
	       	
	       	$postResult = $ratingquery->result_array();

	       	$rating = $postResult[0]['averageRating'];
	       	
	       	if($rating == ''){
	       		$rating = 0;
	       	}

       		$posts_arr[] = array("id"=>$id, "rating"=>$userRating,"averagerating"=>$rating);
       	}
     
		return $posts_arr;
	}

	// Save user rating
	public function userRating($userid,$postid,$rating){
		$this->db->select('*');
		$this->db->from('posts_rating');
		$this->db->where("postid", $postid);
		$this->db->where("userid", $userid);
		$userRatingquery = $this->db->get();
       	
       	$userRatingResult = $userRatingquery->result_array();
       	if(count($userRatingResult) > 0){

       		$postRating_id = $userRatingResult[0]['id'];
       		// Update
            $value=array('rating'=>$rating);
            $this->db->where('id',$postRating_id);
            $this->db->update('posts_rating',$value);
       	}else{
       		$userRating = array(
               "postid" => $postid,
               "userid" => $userid,
               "rating" => $rating
            );

            $this->db->insert('posts_rating', $userRating);
       	}

       	// Average rating
       	$this->db->select('ROUND(AVG(rating),1) as averageRating');
		$this->db->from('posts_rating');
		$this->db->where("postid", $postid);
		$ratingquery = $this->db->get();
	       	
	    $postResult = $ratingquery->result_array();

	    $rating = $postResult[0]['averageRating'];
	       	
	    if($rating == ''){
	       	$rating = 0;
	    }

       	return $rating;
	}

	
	public function InsertExitAccept($id){
		
		$this->db->where('appraisal_request_id', (int) $id);
		$this->db->update('appraisal_request', ["AppraisalStatus"=>"Accept"]);
		return $this->db->affected_rows();
	
	}
	
	public function getUserAppraisalDetails(){
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->join('employeedetails', 'employeedetails.UserId = tbl_user.id');
		$this->db->join('appraisal_request', 'appraisal_request.UserId = tbl_user.id');
		$this->db->where("appraisal_request.AppraisalStatus = 'Accept'");
		
		// $this->db->order_by('employee_id');
		$query = $this->db->get();
		// echo "<pre>";
		// print_r($query->result_array());die("ASIF");
		return $query->result();
    } 
	
	public function getAllAppraisalRequest(){
		$this->db->select('*');
		// $this->db->from($this->table17);
		$this->db->from('tbl_user');
		$this->db->join('appraisal_request', 'appraisal_request.UserId = tbl_user.id');
		// $this->db->join('listofhandover', 'listofhandover.UserId = tbl_user.id');
		
		// $this->db->where("DATE_FORMAT(AttendenceDate,'%Y/%m/%d')", $currDate);
		// $this->db->where(["UserId" => (int)$id]);
		// $this->db->where("DATE_FORMAT(calender_date,'%m')", (int) $MID);
		// $this->db->where("listofhandover.exitstatus = 1");
		$this->db->where("appraisal_request.AppraisalStatus = 'Accept'");
		$query = $this->db->get();
		// echo $query->Status;
		// echo "<pre>";
		// print_r($query->row());die("ASIF");
		
		return $query->result();
	}
	
	
	public function getUserExitDetails($id){
		// echo $id; die;
		
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->join('employeedetails', 'employeedetails.UserId = tbl_user.id');
		$this->db->where(['tbl_user.id'=>$id]);
		
		// $this->db->order_by('employee_id');
		$query = $this->db->get();
		// echo "<pre>";
		// print_r($query->result());die("ASIF");
		return $query->result();
    } 
	
	public function InsertExitDecline($id){
		
		$this->db->where('appraisal_request_id', (int) $id);
		$this->db->update('appraisal_request', ["AppraisalStatus"=>"Decline"]);
		return $this->db->affected_rows();
	
	}
	
	public function getSingleExitData($id, $LeaveId){
		$this->db->select('*');
		// $this->db->from($this->table17);
		$this->db->from('appraisal_request');
		
		// $this->db->where("DATE_FORMAT(AttendenceDate,'%Y/%m/%d')", $currDate);
		$this->db->where(["UserId" => (int)$id]);
		$this->db->where(["appraisal_request_id" => (int)$LeaveId]);
		// $this->db->where("DATE_FORMAT(calender_date,'%m')", (int) $MID);
		
		$query = $this->db->get();
		// echo $query->Status;
		// echo "<pre>";
		// print_r($query->row());die("ASIF");
		
		return $query->result();
	}
	
	
	public function insertExitRequest($LeaveData){
		$this->db->insert('appraisal_request',  $LeaveData);
		return $this->db->affected_rows(); 
	} 
	
	
	public function insertUserAppraisal($LeaveData){
		$this->db->insert('after_appraisal',  $LeaveData);
		return $this->db->affected_rows(); 
	} 
	
	
	
	
	
	public function getExitRequest($id){
		$this->db->select('*');
		
		$this->db->from('appraisal_request');
		$this->db->where(["UserId" => (int)$id]);
		$query = $this->db->get();
		
		return $query->row();
	}
	
	public function getApprRequest($id){
		$this->db->select('*');
		// $this->db->from($this->table17);
		$this->db->from('tbl_user');
		$this->db->join('appraisal_request', 'appraisal_request.UserId = tbl_user.id');
		
		// $this->db->where("DATE_FORMAT(AttendenceDate,'%Y/%m/%d')", $currDate);
		$this->db->where(["UserId" => (int)$id]);
		// $this->db->where("DATE_FORMAT(calender_date,'%m')", (int) $MID);
		$this->db->where("appraisal_request.AppraisalStatus = 'InProgress'");
		$query = $this->db->get();
		// echo $query->Status;
		// echo "<pre>";
		// print_r($query->row());die("ASIF");
		
		return $query->result();
	}
	public function getAllExitRequest(){
		$this->db->select('*');
		// $this->db->from($this->table17);
		$this->db->from('tbl_user');
		$this->db->join('appraisal_request', 'appraisal_request.UserId = tbl_user.id');
		
		// $this->db->where("DATE_FORMAT(AttendenceDate,'%Y/%m/%d')", $currDate);
		// $this->db->where(["UserId" => (int)$id]);
		// $this->db->where("DATE_FORMAT(calender_date,'%m')", (int) $MID);
		// $this->db->where("appraisal_request.AppraisalStatus = 'InProgress'");
		$query = $this->db->get();
		// echo $query->Status;
		// echo "<pre>";
		// print_r($query->row());die("ASIF");
		
		return $query->result();
	}
	
	
	public function getUserRequest($id){
		$this->db->select('*');
		
		$this->db->from('appraisal_request');
		$this->db->where(["UserId" => (int)$id]);
		$query = $this->db->get();
		
		return $query->result();
	}
	
	
	public function removeGoalsforupcomingyear($id){
		
		$this->db->where_in('UserId', $id);
		$this->db->delete('goalsforupcomingyear');
		return $this->db->affected_rows();
	}
	
	
}