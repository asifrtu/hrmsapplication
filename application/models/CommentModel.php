<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CommentModel extends CI_Model {
	
	public $table1 = 'tbl_user';
	public $table2 = 'employeedetails';
	public $table3 = 'employee_education';
	public $table4 = 'employee_course';
	public $table5 = 'employee_bankaccount';
	public $table6 = 'employee_workexperience';
	public $table7 = 'employee_salary';
	public $table8 = 'employee_documents';
	public $table9 = 'employee_profileimage';
	public $table10 ='left_employeedetails';
	public $table12 = 'companygoals_points';
	public $table13 = 'holiday_calender';
	public $table14 = 'employeeattendence';
	public $table15 = 'employeeleavedetails';
	public $table16 = 'leaveapply_documents';
	public $table17 = 'leaveapply';
	public $table18 = 'commentsystem';
	public $table19 = 'admin_comment';
	public $table20 = 'notification_count';
	
	
	
	public function InsertComment($CommentData){
		// die;
		$this->db->insert($this->table19, $CommentData);
		return $this->db->affected_rows();	
	}
	
	public function InsertUserNotify($dataofUser){
		// die;
		$this->db->insert($this->table20, $dataofUser);
		return $this->db->affected_rows();	
	}
	
	
	
	
	public function InsertNotify($NotifyData){
		// die;
		$this->db->insert('hr_notification', $NotifyData);
		return $this->db->affected_rows();	
	}
	
	public function InsertAdminNotify($NotifyData){
		// die;
		$this->db->insert('hr_notification', $NotifyData);
		$user_id=$this->db->insert_id();
   
		return $user_id; 	
	}
	
	public function InsertAdminTrackNotify($CommentData){
		// die;
		// print_r($NotifyData);die;
		$this->db->insert('notification_count', $CommentData);
		return $this->db->affected_rows();	
	}
	
	
	
	public function insrt_notify_tracking($UserId, $id, $NotifyData){
		// echo $id;die;
		$this->db->select('*');
		$this->db->from('notification_track');
		$this->db->where('Notify_UserId', (int) $UserId);
		$this->db->where('Notification_Id', (int) $id);
		$query = $this->db->get();
		// print_r($query->num_rows());die;
		if($query->num_rows() > 0){
			return false;
		}else{
			$this->db->insert('notification_track', $NotifyData);
			$data = $this->db->affected_rows();
		}
		return $data;
	}
	
	
	
	public function getCategories()
	{
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->join('employee_profileimage', 'employee_profileimage.UserId = tbl_user.id', 'left');
		
		$this->db->where("tbl_user.name != ''");
		// $this->db->where("tbl_user.employee_id != ''");
		// $this->db->where(['type'=>'User']);
		$this->db->where(['employeeStatus'=>'Active']);
		
		
		// $this->db->order_by('id ASC');
		$query = $this->db->get();
		
		
		// $query = $this->db->get($this->table1);
				 
		return $query->result_array();
	}
	
	
	
	public function getEventSingleUser($id)
	{
		 // print_r($id);
	
		// echo $Userid = implode($id); die;
		
		// $YID = $this->input->get('YearID');
        // $MID = $this->input->get('MonthID');
		
		$this->db->select('*');
		$this->db->from('tbl_user');
		// $this->db->join('employee_profileimage', 'employee_profileimage.UserId = tbl_user.id', 'left');
		// $this->db->join('commentsystem', 'commentsystem.UserId = tbl_user.id', 'left');
		$this->db->where("id in ($id)");
		// $this->db->where("commentsystem.Year_Id", (int) $YearID);
		// $this->db->where("commentsystem.month_Id", (int) $MonthID);
		// $this->db->where("tbl_user.name != ''");
		// $this->db->where("tbl_user.employee_id != ''");
		// $this->db->where(['type'=>'User']);
		// $this->db->where(['employeeStatus'=>'Active']);
		
		
		// $this->db->order_by('commentsystem.comment_Id DESC');
		$query = $this->db->get();
		
		
		// $query = $this->db->get($this->table1);
				 
		return $query->result();
	}
	
	public function getCommentSingleUser($id, $YearID, $MonthID)
	{
		// echo $id; die;
		
		// $YID = $this->input->get('YearID');
        // $MID = $this->input->get('MonthID');
		
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->join('employee_profileimage', 'employee_profileimage.UserId = tbl_user.id', 'left');
		$this->db->join('commentsystem', 'commentsystem.UserId = tbl_user.id', 'left');
		$this->db->where("commentsystem.UserId", (int) $id);
		$this->db->where("commentsystem.Year_Id", (int) $YearID);
		$this->db->where("commentsystem.month_Id", (int) $MonthID);
		// $this->db->where("tbl_user.name != ''");
		// $this->db->where("tbl_user.employee_id != ''");
		// $this->db->where(['type'=>'User']);
		$this->db->where(['employeeStatus'=>'Active']);
		
		
		// $this->db->order_by('commentsystem.comment_Id DESC');
		$query = $this->db->get();
		
		
		// $query = $this->db->get($this->table1);
				 
		return $query->result();
	}
	
	
	
	public function getCommentAdmin($id, $YearID, $MonthID)
	{
		// echo $YearID;die;
		
		// $YID = $this->input->get('YearID');
        // $MID = $this->input->get('MonthID');
		
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->join('commentsystem', 'commentsystem.UserId = tbl_user.id', 'left');
		$this->db->where("tbl_user.type != 'User'");
		$this->db->where("commentsystem.parent_id", (int) $id);
		$this->db->where("commentsystem.Year_Id", (int) $YearID);
		$this->db->where("commentsystem.month_Id", (int) $MonthID);
		
		// $this->db->where("tbl_user.employee_id != ''");
		// $this->db->where(['type'=>'User']);
		
		
		
		$this->db->order_by('commentsystem.comment_Id DESC');
		$query = $this->db->get();
		
		
		// $query = $this->db->get($this->table1);
				 
		return $query->result();
	}
	
	
	
	
	public function getCommentWallAdmin()
	{
		$this->db->select('*');
		$this->db->from('admin_comment');
		$this->db->order_by('admin_comment.comment_Id DESC');
		$query = $this->db->get();
		
		
		// $query = $this->db->get($this->table1);
				 
		return $query->result();
	}
	
	
	public function getNotify($id)
	{
		// echo $id;die;
		$this->db->select('*');
		$this->db->from('hr_notification');
		// $this->db->join('notification_count', 'notification_count.Notification_Id = hr_notification.Id', 'left');
	//	$this->db->where("hr_notification.designation = 'Admin'");
		// $this->db->or_where("notification_count.Count_UserId = $id");
	//	 $this->db->where("notification_track.Notify_UserId != $id");
			$this->db->where("hr_notification.UserId != $id");
		// $this->db->limit('15');
		$this->db->order_by('hr_notification.Id DESC');
		$query = $this->db->get();
		
		
		// $query = $this->db->get($this->table1);
				 
		return $query->result();
	}
	
	public function getProfileImage($id){
		$query = $this->db->get_where($this->table9, ['UserId'=> (int) $id]);
		return $query->result();
	}  
	
	public function getEmployeeNotify($id)
	{
		$this->db->select('*');
		$this->db->from('hr_notification');
		$this->db->join('notification_count', 'notification_count.Notification_Id = hr_notification.Id', 'left');
		// $this->db->group_start();
		// $this->db->or_group_start();
		
		$this->db->where("notification_count.Count_UserId = $id");
		$this->db->or_where("hr_notification.designation = 'User'");
		// $this->db->group_end();
		// $this->db->group_end();
		// $this->db->limit('7');
		$this->db->order_by('hr_notification.Id DESC');
		$query = $this->db->get();
		
		
		// $query = $this->db->get($this->table1);
				 
		return $query->result();
	}
	
	public function getReadNotify($id, $UserId)
	{
		$this->db->select('*');
		$this->db->from('notification_track');
		$this->db->where('Notification_Id', (int) $id);
		$this->db->where('Notify_UserId', (int) $UserId);
		// $this->db->where("type = 'seen'");
		$query = $this->db->get();
		
		// print_r($query->result());die;
		// $query = $this->db->get($this->table1);
				 
		return $query->result();
	}
	
	
	public function getCountN($UserId)
	{
		$this->db->select('Id');
		$this->db->from('hr_notification');
		$this->db->where("hr_notification.UserId != $UserId");
		$this->db->where("hr_notification.designation != 'Admin'");
		$query = $this->db->get();
		$arr1 = $query->num_rows();
				 
		return (array)$arr1;
	}
	
	
	
	
	public function getCountNotify($UserId)
	{
		$this->db->select('*');
		$this->db->from('notification_track');
		$this->db->where('Notify_UserId', (int) $UserId);
		$this->db->where("type = 'seen'");
		$queryCount = $this->db->get();
		$arr2 = $queryCount->num_rows();
		
		
		$this->db->select('*');
		$this->db->from('hr_notification');
		$this->db->join('notification_count', 'notification_count.Notification_Id = hr_notification.Id', 'left');
		$this->db->where("hr_notification.designation = 'user'");
		$this->db->or_where("notification_count.Count_UserId = $UserId");
		$query = $this->db->get();
		$arr1 = $query->num_rows();
		// $result=array_diff($arr1,$arr2);
		$arr3 = $arr1 - $arr2;
			// echo "<pre>";
			// print_r($arr1);	 
			// print_r($arr2);	 
			// print_r($arr3);die;	 
		return (array)$arr3;
	}
	
	public function getCountAdminNotify($UserId)
	{
		
		$this->db->select('*');
		$this->db->from('notification_track');
		$this->db->where('Notify_UserId', (int) $UserId);
		$this->db->where('Notification_Id <'," 50000");
		// $this->db->where('status_type', (int) 1);
		$queryCount = $this->db->get();
	 	$arr2 = $queryCount->num_rows();
	
		
		
		$this->db->select('Id');
		$this->db->from('hr_notification');
		$this->db->where("hr_notification.UserId != $UserId");
		// $this->db->where("hr_notification.designation != 'Admin'");
		$query = $this->db->get();
		$arr1 = $query->num_rows();
		// $result=array_diff($arr1,$arr2);
	 	$arr3 = $arr1 - $arr2;
			// echo "<pre>";
			// print_r($arr1);	 
			// print_r($arr2);	 
			// print_r($arr3);die;	 
		return (array)$arr3;
	}
	
	
	public function insertCountNotification($User_Id){
		// $Id=$this->input->post('User_Id');
		// print_r($_POST);die;
		$this->db->select('Id');
		$this->db->from('hr_notification');
		$this->db->where("hr_notification.UserId != $User_Id");
		$this->db->where("hr_notification.designation != 'Admin'");
		$query = $this->db->get();
	$params = $query->result_array();
	// echo "<pre>";
	// print_r($params);die;
	// $result = json_decode($params, true);
    // $save_sect = array();
	$this->DelCountNotification($User_Id);
    foreach($params as $data){
     
	$save_sect = [  

	'Count_UserId' => $User_Id,
	'Notification_Id' => $data['Id']

	];

    $this->db->insert('notification_count', $save_sect);
    
    }
    return true;
  
	
    }
	
	
	public function insertCountAdminNotification($User_Id){
		// $Id=$this->input->post('User_Id');
		// print_r($_POST);die;
		$this->db->select('Id');
		$this->db->from('hr_notification');
		$this->db->where("hr_notification.UserId != $User_Id");
		// $this->db->where("hr_notification.designation != 'User'");
		$query = $this->db->get();
	$params = $query->result_array();
	// echo "<pre>";
	// print_r($params);die;
	// $result = json_decode($params, true);
    // $save_sect = array();
	$this->DelCountNotification($User_Id);
    foreach($params as $data){
     
	$save_sect = [  

	'Count_UserId' => $User_Id,
	'Notification_Id' => $data['Id']

	];

    $this->db->insert('notification_count', $save_sect);
    
    }
    return true;
  
	
    }
	
	
	
	
	
	


	public function buildtree($src_arr, $parent_id = 0, $tree = array())
	{
		    foreach($src_arr as $idx => $row)
		    {
		        if($row['parent_id'] == $parent_id)
		        {
		            foreach($row as $k => $v)
		                $tree[$row['id']][$k] = $v;
		            unset($src_arr[$idx]);

		            $tree[$row['id']]['children'] = $this->buildtree($src_arr, $row['id']);
		        }
		    }
	    ksort($tree);
	    return $tree;
	}
	
	
	public function EditComment($id, $CommentData){
		
		$this->db->where('comment_Id', (int) $id);
		
		$this->db->update($this->table18, $CommentData);
		return $this->db->affected_rows();
	
	}
	
	public function EditWallComment($id, $CommentData){
		
		$this->db->where('comment_Id', (int) $id);
		
		$this->db->update($this->table19, $CommentData);
		return $this->db->affected_rows();
	
	}
	
	
	
	
	public function DelComment($id){
		$this->db->delete($this->table18, ['comment_Id'=> (int) $id]);
		return $this->db->affected_rows();
	}
	
	public function DelWallComment($id){
		$this->db->delete($this->table19, ['comment_Id'=> (int) $id]);
		return $this->db->affected_rows();
	}
	
	public function DelCountNotification($id){
		$this->db->delete('notification_count', ['Count_UserId'=> (int) $id]);
		return $this->db->affected_rows();
	}
	
		
function update_event($id, $data)
{
	$this->db->where('id', $id);
	$this->db->update('eventcalender', $data);
}

	
}



?>