<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SeparationModel extends CI_Model {
	
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
	
	
	
	public function insert_data1($data1){
    
    $this->db->insert('provident_fund', $data1);
    $user_id=$this->db->insert_id();
   
    return $user_id; 
    }
	
	public function Update_data1($user_id, $data1){
	$this->db->where("UserId", (int) $user_id);
    $this->db->update('provident_fund', $data1);
   
     return $this->db->affected_rows();
    }
	


	
	public function insert_data2($data2){
    $this->db->trans_start();
    //$this->db->insert('tickets',  $data2);
    $this->db->insert('employeedetails',  $data2);
    
    $this->db->trans_complete();
    return true; 
    } 
	
	
	
public function insertresignation_letter($data){
    $this->db->insert('resignation_letter',  $data);
    return $this->db->affected_rows();
    } 
	
	
	

public function Update_data5($user_id, $data5){
    // echo $user_id; die;
	if(!empty($this->input->post('Particulars'))){
	$this->removeHandOver($user_id);
	foreach($this->input->post('Particulars') as $key=>$val){
	
	$insertData = [
	
	'UserId' => $user_id,
	'Particulars' => $val,
	'Applicable' => $this->input->post('Applicable')[$key],
	'Responsibilities' => $this->input->post('Responsibilities')[$key],
	'Remarks' => $this->input->post('Remarks')[$key],
	
	];
  
    $this->db->insert('listofhandover',  $insertData);
    }
    }
   
    return $this->db->affected_rows();
} 




public function insert_data5($last_user_id, $user_id, $data5){
    
	
	foreach($this->input->post('Particulars') as $key=>$val){
	
	$insertData = [
	'pf_Id' => $last_user_id,
	'UserId' => $user_id,
	'Particulars' => $val,
	'Applicable' => $this->input->post('Applicable')[$key],
	'Responsibilities' => $this->input->post('Responsibilities')[$key],
	'Remarks' => $this->input->post('Remarks')[$key],
	
	];
  
    $this->db->insert('listofhandover',  $insertData);
    }
    
   
    return $this->db->affected_rows();
} 









public function insertReasonOfLeaving($last_user_id, $data5){
    
	
	foreach($this->input->post('reason') as $key=>$val){
	
	$insertData = [
	'S_Id' => $last_user_id,
	// 'UserId' => $id,
	'reason' => $val,
	'title' => $this->input->post('title')[$key]
	
	];
    //$this->db->insert('tickets',  $data2);
    $this->db->insert('ReasonOfLeaving',  $insertData);
    }
   
    return $this->db->affected_rows(); 
} 





	
	public function InsertSepSnd($data1){
		$this->db->insert('exitformsecond',  $data1);
		return $this->db->affected_rows(); 
	} 
	
	
	public function UpdateSepSnd($id, $data1){
		$this->db->where(["UserId" => (int)$id]);
		$this->db->update('exitformsecond',  $data1);
		return $this->db->affected_rows(); 
	} 
	
	
	public function UpdateSepThird($id, $data1){
		$this->db->where(["UserId" => (int)$id]);
		$this->db->update('separation_three',  $data1);
		return $this->db->affected_rows(); 
	} 
	
	
	
	
	public function insertExitRequest($LeaveData){
		$this->db->insert('exitrequest',  $LeaveData);
		return $this->db->affected_rows(); 
	} 
	
	public function getExitRequest($id){
		$this->db->select('*');
		
		$this->db->from('exitrequest');
		$this->db->where(["UserId" => (int)$id]);
		$query = $this->db->get();
		
		return $query->row();
	}
	
	public function getresignation_letter($id){
		$this->db->select('*');
		
		$this->db->from('resignation_letter');
		$this->db->where(["UserId" => (int)$id]);
		$query = $this->db->get();
		
		return $query->row();
	}
	
	
	
	
	public function getUserRequest($id){
		$this->db->select('*');
		
		$this->db->from('exitrequest');
		$this->db->where(["UserId" => (int)$id]);
		$query = $this->db->get();
		
		return $query->result();
	}
	
	public function getListofHandover($id){
		$this->db->select('*');
		
		$this->db->from('listofhandover');
		$this->db->where(["UserId" => (int)$id]);
		$query = $this->db->get();
		
		return $query->result();
	}
	
	
	
	public function getAllExitRequest(){
		$this->db->select('*');
		// $this->db->from($this->table17);
		$this->db->from('tbl_user');
		$this->db->join('exitrequest', 'exitrequest.UserId = tbl_user.id');
		
		// $this->db->where("DATE_FORMAT(AttendenceDate,'%Y/%m/%d')", $currDate);
		// $this->db->where(["UserId" => (int)$id]);
		// $this->db->where("DATE_FORMAT(calender_date,'%m')", (int) $MID);
		$this->db->where("exitrequest.exitstatus = 'InProgress'");
		$query = $this->db->get();
		// echo $query->Status;
		// echo "<pre>";
		// print_r($query->row());die("ASIF");
		
		return $query->result();
	}
	
	public function getAllExitEmp(){
		$this->db->select('*');
		// $this->db->from($this->table17);
		$this->db->from('tbl_user');
		$this->db->join('exitrequest', 'exitrequest.UserId = tbl_user.id');
		// $this->db->join('listofhandover', 'listofhandover.UserId = tbl_user.id');
		
		// $this->db->where("DATE_FORMAT(AttendenceDate,'%Y/%m/%d')", $currDate);
		// $this->db->where(["UserId" => (int)$id]);
		// $this->db->where("DATE_FORMAT(calender_date,'%m')", (int) $MID);
		// $this->db->where("listofhandover.exitstatus = 1");
		$this->db->where("exitrequest.exitstatus = 'Accept'");
		$query = $this->db->get();
		// echo $query->Status;
		// echo "<pre>";
		// print_r($query->row());die("ASIF");
		
		return $query->result();
	}
	
	
	
	public function InsertSepThird($data1){
		$this->db->insert('separation_three',  $data1);
		
		return $this->db->affected_rows();  
	} 
	
	
	
	public function InsertExitAccept($id){
		
		$this->db->where('exit_Id', (int) $id);
		$this->db->update($this->table15, ["ExitStatus"=>"Accept"]);
		return $this->db->affected_rows();
	
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
		// print_r($query->result_array());die("ASIF");
		return $query->result();
    } 
	
	public function InsertExitDecline($id){
		
		$this->db->where('exit_Id', (int) $id);
		$this->db->update($this->table15, ["ExitStatus"=>"Decline"]);
		return $this->db->affected_rows();
	
	}
	
	public function getSingleExitData($id, $LeaveId){
		$this->db->select('*');
		// $this->db->from($this->table17);
		$this->db->from('exitrequest');
		
		// $this->db->where("DATE_FORMAT(AttendenceDate,'%Y/%m/%d')", $currDate);
		$this->db->where(["UserId" => (int)$id]);
		$this->db->where(["exit_Id" => (int)$LeaveId]);
		// $this->db->where("DATE_FORMAT(calender_date,'%m')", (int) $MID);
		
		$query = $this->db->get();
		// echo $query->Status;
		// echo "<pre>";
		// print_r($query->row());die("ASIF");
		
		return $query->result();
	}
	
	public function getExitForm($id){
		
		$query = $this->db->get_where('listofhandover', ['UserId'=> (int) $id]);
		return $query->row();
	}
	
	public function getExitFormSecond($id){
		
		$query = $this->db->get_where('exitformsecond', ['UserId'=> (int) $id]);
		return $query->row();
	}
	
	public function getExitFormThird($id){
		
		$query = $this->db->get_where('separation_three', ['UserId'=> (int) $id]);
		return $query->row();
	}
	
	public function getProvidentFund($id){
		
		$query = $this->db->get_where('provident_fund', ['UserId'=> (int) $id]);
		return $query->row();
	}
	public function getSecondFormData($id){
		
		$query = $this->db->get_where('provident_fund', ['UserId'=> (int) $id]);
		return $query->row();
	}
	
	
	
	public function removeHandOver($user_id){
		
		$this->db->where('UserId', $user_id);
		$this->db->delete($this->table11);
		return $this->db->affected_rows();
	}
	
	
	public function EmployeeInfoList($emptdId){
		$this->db->select('*');
		$this->db->from('tbl_user');
		// $this->db->join('employeedetails', 'employeedetails.UserId = tbl_user.id');
		$this->db->where('id', $emptdId);
		
		$query = $this->db->get();
		
		// echo "<pre>";
		// print_r($query->result());die("ASIF");
		return $query->row();
    }


}