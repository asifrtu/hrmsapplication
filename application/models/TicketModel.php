<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TicketModel extends CI_Model {
	
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
	public $table18 = 'employee_ticket';
	public $table19 = 'employee_ticketdoc';
	
	
	
	public function insertTicket($data3){
		// die;
		// print_r($data3);die;
		$this->db->insert($this->table18, $data3);
		$user_id=$this->db->insert_id();
		
		return $user_id;	
	}
	
	
	public function InsertTicketAccept($id){
		
		$this->db->where('ticketId', (int) $id);
		$this->db->update($this->table18, ["ticketStatus"=>"Accept"]);
		return $this->db->affected_rows();
	
	}
	
	public function getUserTicketDetails($id){
		// echo $id; die;
		
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->join('employeedetails', 'employeedetails.UserId = tbl_user.id');
		$this->db->join('employee_profileimage', 'employee_profileimage.UserId = tbl_user.id', 'left');
		$this->db->where(['tbl_user.id'=>$id]);
		
		// $this->db->order_by('employee_id');
		$query = $this->db->get();
		// echo "<pre>";
		// print_r($query->result_array());die("ASIF");
		return $query->result();
    } 
	
	
	
	public function getSingleTicketData($id, $LeaveId){
		$this->db->select('*');
		// $this->db->from($this->table17);
		$this->db->from('employee_ticket');
		
		// $this->db->where("DATE_FORMAT(AttendenceDate,'%Y/%m/%d')", $currDate);
		$this->db->where(["UserId" => (int)$id]);
		$this->db->where(["ticketId" => (int)$LeaveId]);
		// $this->db->where("DATE_FORMAT(calender_date,'%m')", (int) $MID);
		
		$query = $this->db->get();
		// echo $query->Status;
		// echo "<pre>";
		// print_r($query->row());die("ASIF");
		
		return $query->result();
	}
	
	
	public function InsertTicketDecline($id){
		
		$this->db->where('ticketId', (int) $id);
		$this->db->update($this->table18, ["ticketStatus"=>"Decline"]);
		return $this->db->affected_rows();
	
	}
	
	
	
	public function insertTicketDoc($lastInsertId, $data8){
		// die;
		// print_r($data3);die;
		$this->db->insert($this->table19, $data8);
		return $this->db->affected_rows();
	}
	
	public function getTicket($id){
		$this->db->select('*');
		$this->db->from($this->table17);
		
		// $this->db->where("DATE_FORMAT(AttendenceDate,'%Y/%m/%d')", $currDate);
		$this->db->where(["UserId" => (int)$id]);
		// $this->db->where("DATE_FORMAT(calender_date,'%m')", (int) $MID);
		
		$query = $this->db->get();
		// echo $query->Status;
		// echo "<pre>";
		// print_r($query->row());die("ASIF");
		
		return $query->result();
	}
	
	public function getSingleApplyLeaveData($id){
		$this->db->select('*');
		$this->db->from($this->table17);
		
		// $this->db->where("DATE_FORMAT(AttendenceDate,'%Y/%m/%d')", $currDate);
		$this->db->where(["leaveApply_Id" => (int)$id]);
		// $this->db->where("DATE_FORMAT(calender_date,'%m')", (int) $MID);
		
		$query = $this->db->get();
		// echo $query->Status;
		// echo "<pre>";
		// print_r($query->row());die("ASIF");
		
		return $query->row();
	}
	
	
	public function getEmployeeTicketData(){
		$this->db->select('*');
		// $this->db->from($this->table17);
		$this->db->from('tbl_user');
		$this->db->join('employee_ticket', 'employee_ticket.UserId = tbl_user.id');
		
		// $this->db->where("DATE_FORMAT(AttendenceDate,'%Y/%m/%d')", $currDate);
		// $this->db->where(["UserId" => (int)$id]);
		// $this->db->where("DATE_FORMAT(calender_date,'%m')", (int) $MID);
		$this->db->where("employee_ticket.ticketStatus = 'InProgress'");
		$query = $this->db->get();
		// echo $query->Status;
		// echo "<pre>";
		// print_r($query->row());die("ASIF");
		
		return $query->result();
	}
	
	public function getSingleLeaveApplyData($id, $LeaveId){
		$this->db->select('*');
		// $this->db->from($this->table17);
		$this->db->from('leaveapply');
		
		// $this->db->where("DATE_FORMAT(AttendenceDate,'%Y/%m/%d')", $currDate);
		$this->db->where(["UserId" => (int)$id]);
		$this->db->where(["leaveApply_Id" => (int)$LeaveId]);
		// $this->db->where("DATE_FORMAT(calender_date,'%m')", (int) $MID);
		
		$query = $this->db->get();
		// echo $query->Status;
		// echo "<pre>";
		// print_r($query->row());die("ASIF");
		
		return $query->result();
	}
	
	
	public function getTicketRecord($id){
		$this->db->select('*');
		
		$this->db->from('employee_ticket');
		$this->db->where(["UserId" => (int)$id]);
		$query = $this->db->get();
		
		return $query->result();
	}
	
	public function getUserLeaveDetails($id){
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->join('employeedetails', 'employeedetails.UserId = tbl_user.id');
		$this->db->join('employee_profileimage', 'employee_profileimage.UserId = tbl_user.id', 'left');
		$this->db->where(['tbl_user.id'=>$id]);
		
		$this->db->order_by('employee_id');
		$query = $this->db->get();
		// echo "<pre>";
		// print_r($query->result_array());die("ASIF");
		return $query->result();
    } 
	
	
	
	
	
	
	
}



?>