<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HierarchyModel extends CI_Model {
	
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
	
	
	public function getCategories()
	{
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->join('employeedetails', 'employeedetails.UserId = tbl_user.id');
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

		
		
		public function fetchCeehildren($parent, $level){
		$this->handler = $this->db->query("SELECT * FROM tbl_user WHERE parent_id='".$parent."' ");
		foreach($this->handler->result() as  $row ) {
		$row->level = $level;
		$this->data[] = $row; 
		$this->fetchChildren($row->title, $level+1);
		}
		return $this->data;
		}
	
	public function fetchChildren(){
		$this->db->select('*');
		$this->db->from('tbl_user');
		// $this->db->where("tbl_user.name != ''");
		// $this->db->where("tbl_user.employee_id != ''");
		// $this->db->where(['type'=>'User']);
		// $this->db->where(['employeeStatus'=>'Active']);
		
		
		// $this->db->order_by('employee_id');
		$query = $this->db->get();
		// echo "<pre>";
		// print_r($query->result_array());die("ASIF");
		return $query->result();
    }
	
	
	
}



?>