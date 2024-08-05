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
	
	
	
	public function InsertComment($CommentData){

		$this->db->insert($this->table19, $CommentData);
		return $this->db->affected_rows();	
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
	
	
	
}



?>