<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CalenderModel extends CI_Model {
	
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
	public $table18 = 'eventcalender';
	
	
	public function getActiveUser(){
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->where("tbl_user.name != ''");
		$this->db->where("tbl_user.employee_id != ''");
		$this->db->where(['type'=>'User']);
		$this->db->where(['employeeStatus'=>'Active']);
		
		
		$this->db->order_by('employee_id');
		$query = $this->db->get();
		// echo "<pre>";
		// print_r($query->result_array());die("ASIF");
		return $query->result_array();
    }
	
	
	
	
	

	public function getEvent(){
		 return $this->db->get('eventcalender');
		
		// $this->db->select('*');
		// $this->db->from('eventcalender');
		// $this->db->where('startEvent >=', $start_deadline);
		// $this->db->where('endEvent <=', $end_deadline);
		
		// $query = $this->db->get();
		// echo "<pre>";
		// print_r($query->result_array());die("ASIF");
		// return $query->result_array();
    }
	
	
	public function getEmpEvent($ids){
		 // return $this->db->get('eventcalender');
		// echo $ids; die;
		
		
		$this->db->select('*');
		$this->db->from('eventcalender');
		// $this->db->group_start();
		// $this->db->where([implode(',', 'eventUrl')=>$ids]);
		// WHERE center_id IN('".implode("','",$centerid)."')
		// $this->db->where("($ids) IN '".implode("','",$centerid)."'eventcalender.eventUrl LIKE ");
		// $this->db->where("eventcalender.eventUrl LIKE ($ids)");
		// $this->db->where_in(['eventUrl' => $ids]);
		$this->db->where('find_in_set("'.$ids.'", eventUrl) <> 0');
		// $this->db->where('FIND_IN_SET(eventUrl, $ids)');
		// $this->db->where('eventUrl', $ids);
		// $this->db->or_group_start();
		$this->db->or_where("eventcalender.eventUrl = '' ");
		// $this->db->group_end();
		// $this->db->group_end();
		// $query = $this->db->get();
		return $this->db->get();
		// echo "<pre>";
		// print_r($query->result());die("ASIF");
		// return $query->result();
    }
	
	public function getEmpTagEvent($ids){
		 // return $this->db->get('eventcalender');
		// echo $ids; die;
		$this->db->select('*');
		$this->db->from('eventcalender');
		// $this->db->where_in('eventUrl',$ids);
		$this->db->where('Id', $ids);
		// $this->db->or_where("eventcalender.eventUrl = '' ");
		$query = $this->db->get();
		// return $this->db->get();
		// echo "<pre>";
		// print_r($query->result());die("ASIF");
		return $query->result();
    }
	
	
	public function getSingleEmpEvent(){
		 // return $this->db->get('eventcalender');
		// echo $ids; die;
		date_default_timezone_set("Asia/Kolkata");
		$start_deadline = date("Y-m-d");
		$varDate = explode('-', $start_deadline);
					// $YID = 2021;
					$MI = $varDate[0];
					$MIDS = $varDate[1];
					$DID = $varDate[2];
					$startday = 01;
					$endday = 31;
					$startDate = $MI.'-'.$MIDS.'-'.$DID;
					$EndDate = $MI.'-'.$MIDS.'-'.$endday;
		$this->db->select('*');
		$this->db->from('eventcalender');
		// $this->db->where_in('eventUrl',$ids);
		// $this->db->where('eventcalender.startEvent =', $start_deadline);
		$this->db->where('startEvent >=', $startDate);
		$this->db->where('startEvent <=', $EndDate);
		$this->db->order_by('startEvent');
		// $this->db->group_start();
		// $this->db->where("eventUrl in ($ids)");
		// $this->db->or_group_start();
		// $this->db->or_where("eventcalender.eventUrl = '' ");
		// $this->db->group_end();
			// $this->db->group_end();
		$query = $this->db->get();
		// return $this->db->get();
		// echo "<pre>";
		// print_r($query->result());die("ASIF");
		return $query->result();
    }
	
	
	
	
	
	
	public function getWallEvent(){
		 // return $this->db->get('eventcalender');
		date_default_timezone_set("Asia/Kolkata");
		$start_deadline = date("Y-m-d");
		$varDate = explode('-', $start_deadline);
					// $YID = 2021;
					$MI = $varDate[0];
					$MIDS = $varDate[1];
					$DID = $varDate[2];
					$startday = 01;
					$endday = 31;
					$startDate = $MI.'-'.$MIDS.'-'.$DID;
					$EndDate = $MI.'-'.$MIDS.'-'.$endday;
		$this->db->select('*');
		$this->db->from('eventcalender');
		// $this->db->where('startEvent =', $start_deadline);
		// $this->db->where('startEvent <=', $end_deadline);
		$this->db->where('startEvent >=', $startDate);
		$this->db->where('startEvent <=', $EndDate);
		$this->db->order_by('startEvent');
		$query = $this->db->get();
		// echo "<pre>";
		// print_r($query->result());die("ASIF");
		return $query->result();
    }
	
	public function getHolidayEventCalender(){
		 $YID = 2022;
         // $MID = $this->input->get('MonthID');
		 // $q = SELECT DAYNAME( calender_date ) AS DAY FROM $this->table13; 
		// SELECT DAYNAME( s_date ) AS DAY FROM `Table_name` 
		// $curMonth = date("m", strtotime($cur));
		// $datestring = "DATE_FORMAT(calender_date,'%d')";
		$this->db->select('*');
		$this->db->from($this->table13);
		
		// $this->db->where("DATE_FORMAT(calender_date,'%Y')", (int) $YID);
		$this->db->where("holiday_calender.holiday_list != '' ");
		// $this->db->order_by($datestring);
		return  $this->db->get();
		// echo "<pre>";
		// print_r($query->result());die("ASIF");
		
		// return $query->result();
		
	}
	
	
	public function getEmployeeDobAndAnni(){
		date_default_timezone_set("Asia/Kolkata");
		$start_deadline = date("Y-m-d");
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->join('employeedetails', 'employeedetails.UserId = tbl_user.id');
		$this->db->where('dob =', $start_deadline);
		$this->db->where(['type'=>'User']);
		$this->db->where(['employeeStatus'=>'Active']);
		// $this->db->order_by('employee_id');
		// return $this->db->get();
		$query = $this->db->get();
		// echo "<pre>";
		// print_r($query->result_array());die("ASIF");
		return $query->result();
	}
	
	
	public function getEmployeeAnni(){
		date_default_timezone_set("Asia/Kolkata");
		$start_deadline = date("Y-m-d");
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->join('employeedetails', 'employeedetails.UserId = tbl_user.id');
		// $this->db->where('EmployeejoiningDate =', $start_deadline);
		$this->db->where(['type'=>'User']);
		$this->db->where(['employeeStatus'=>'Active']);
		// $this->db->order_by('employee_id');
		// return $this->db->get();
		$query = $this->db->get();
		// echo "<pre>";
		// print_r($query->result_array());die("ASIF");
		return $query->result();
	}
	
	
	
	
	
	public function getEmployeeDob(){
		
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->join('employeedetails', 'employeedetails.UserId = tbl_user.id');
		
		$this->db->where(['type'=>'User']);
		$this->db->where(['employeeStatus'=>'Active']);
		// $this->db->order_by('employee_id');
		return $this->db->get();
		// $query = $this->db->get();
		// echo "<pre>";
		// print_r($query->result_array());die("ASIF");
		// return $query->result();
	}
	
	public function selectedEventUser($eventId){
		 // echo $eventId;die;
		$this->db->select('eventUrl');
		$this->db->from('eventcalender');
		$this->db->where('Id', $eventId);
		
		$query = $this->db->get();
		// echo "<pre>";
		// print_r($query->result_array());die;
		return $query->row();
    }
	
	public function ViewEvent($id){
		 
		$this->db->select('*');
		$this->db->from('eventcalender');
		$this->db->where('id', $id);
		
		$query = $this->db->get();
		
		return $query->result();
    }
	
	
	
	
public function AddCalenderEvent($AddEvent){
	$this->db->insert($this->table18, $AddEvent);
	$user_id=$this->db->insert_id();
	return $user_id;	
}
	
public function AddSlectedUser($last_user_id, $data5){
	foreach($this->input->post('Eventeframework') as $key=>$val){
	
	$insertData = [
		'Event_Id'=> $last_user_id,
		// 'UserId' => $val,
		'UserId' => $this->input->post('Eventeframework')[$key],
	
	];
    //$this->db->insert('tickets',  $data2);
    $this->db->insert('userevent',  $insertData);
    }
	return $this->db->affected_rows();	
}
	
	
function update_event($id, $data)
{
	$this->db->where('id', $id);
	$this->db->update('eventcalender', $data);
}

function delete_event($id)
{
	$this->db->where('id', $id);
	$this->db->delete('eventcalender');
}
	
	
}



?>