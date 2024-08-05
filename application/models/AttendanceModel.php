<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AttendanceModel extends CI_Model {
	
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
	
	
	
	public function getAllUser(){
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
		return $query->result();
    }
	
	
	public function getAllAttendanceUser(){
		$YID = $this->input->get('YearID');
         $MID = $this->input->get('MonthID');
         $MIDS = $MID;
         $DID = 1;
         $DIDS = 31;
		
		$startDate = $YID.'-'.$MID.'-0'.$DID;
		$startJoiningDate = $YID.'-'.$MIDS.'-'.$DIDS;
		$EtartDate = "0000-00-00";
		 // $dataLeaveDate= $this->getUserLeaveDate($id);
		 // $dl = $dataLeaveDate->EmployeejoiningDate;
		
		// echo $this->dateDifference($dl , $startDate);
		// die;
		
			$this->db->select('*');
			$this->db->from('tbl_user');
			
			// echo "ASIF";die;
			
			
			$this->db->where('DATE(EmployeejoiningDate) <', date('Y-m-d',strtotime($startJoiningDate)));
			// $this->db->where("DATE_FORMAT(employeeExitDate, '%d-%m-%Y') BETWEEN '$startDate' AND '$EtartDate'");
			$this->db->group_start();
			
			$this->db->where('DATE(employeeExitDate)  >=', date('Y-m-d',strtotime($startDate)));
			$this->db->or_group_start();
			$this->db->or_where("tbl_user.employeeExitDate = '0000-00-00'");
			
			$this->db->where("tbl_user.name != ''");
			$this->db->where("tbl_user.employee_id != ''");
			$this->db->where(['type'=>'User']);
			$this->db->group_end();
			$this->db->group_end();
			$this->db->where("tbl_user.Status > 0");
			$query = $this->db->get();
			// print_r($query->result());die;
			return $query->result();
			
    }
	
	
	
	
	
	
	public function getAttendanceList($id, $YearID, $MonthID){
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
		$this->db->from($this->table14);
		// $this->db->where(['currentLeaveStatus'=> 'Active']);
		$this->db->where("DATE_FORMAT(AttendenceDate,'%Y')", (int) $YID);
		$this->db->where("DATE_FORMAT(AttendenceDate,'%m')", (int) $MID);
		$this->db->where("UserId", (int) $id);
		//$this->db->join('employee_documents', 'employee_documents.UserId = tbl_user.id');
		
		$query = $this->db->get();
		// echo "<pre>";
		// print_r($query->result());die("ASIF");
		
		return $query->result();
		
	}
	
	
	
	
	
	
	public function getMonthlyCalender($YearID, $MonthID){
		$YID = $this->input->get('YearID');
        $MID = $this->input->get('MonthID');
        $this->db->distinct();
		$this->db->select('AttendenceDate');
		$this->db->from($this->table14);
		$this->db->where("DATE_FORMAT(AttendenceDate,'%Y')", (int) $YID);
		$this->db->where("DATE_FORMAT(AttendenceDate,'%m')", (int) $MID);
		$query = $this->db->get();
		return $query->result();
		
	}
	
	
	// The test table for Calender 
	public function getCalenderMerge($id, $YearID, $MonthID){
		$YID = $this->input->get('YearID');
		$MID = $this->input->get('MonthID');
		
		$this->db->select('*');
		$this->db->from($this->table14);
		$this->db->where("DATE_FORMAT(AttendenceDate,'%Y')", (int) $YID);
		$this->db->where("DATE_FORMAT(AttendenceDate,'%m')", (int) $MID);
		$this->db->where("employeeattendence.Status != 'H'");
		$this->db->where("UserId", (int) $id);
		$query1 = $this->db->get()->result();
		
		
		// $this->db->where("employeeattendence.Status != 'W-OFF'");
		// $this->db->where("holiday_calender.sort_holidayname != ''");
		// $this->db->where("holiday_calender.sort_holidayname != 'W-OFF'");
		
		$this->db->select('calender_date');
		$this->db->from($this->table13);
		$this->db->where("DATE_FORMAT(calender_date,'%Y')", (int) $YID);
		$this->db->where("DATE_FORMAT(calender_date,'%m')", (int) $MID);
		$this->db->where("holiday_calender.sort_holidayname != ''");
		$query2 = $this->db->get()->result();
		$query = array_merge($query1, $query2);
		
    return $query;
    
    }
	
	
	
	
	public function getHolidayCalender($YearID){
		$YID = $this->input->get('YearID');
// 		$this->db->distinct();
		$this->db->select('*');
		$this->db->from($this->table13);
// 		$this->db->where("DATE_FORMAT(AttendenceDate,'%Y')", (int) $YID);
		$this->db->where("holiday_list != '' ");
		$query = $this->db->get();
		return $query->result();
		
	}
	
	public function getCLEL($id){
		 $YID = $this->input->get('YearID');
         $MID = $this->input->get('MonthID');
		 // $q = SELECT DAYNAME( calender_date ) AS DAY FROM $this->table13; 
		// SELECT DAYNAME( s_date ) AS DAY FROM `Table_name` 
		$this->db->select('*');
		$this->db->from($this->table15);
		
		$this->db->where("UserId", (int) $id);
		// $this->db->where("DATE_FORMAT(calender_date,'%m')", (int) $MID);
		$this->db->where("DATE_FORMAT(LeaveDate,'%Y')", (int) $YID);
		$this->db->where("DATE_FORMAT(LeaveDate,'%m')", (int) $MID);
		$query = $this->db->get();
		// echo "<pre>";
		// print_r($query->result());die("ASIF");
		
		return $query->result();
		
	}
	
	public function getEmployeeLeave($id, $YID, $MID){
		 // $YID = $this->input->get('YearID');
         // $MID = $this->input->get('MonthID');
		 // $q = SELECT DAYNAME( calender_date ) AS DAY FROM $this->table13; 
		// SELECT DAYNAME( s_date ) AS DAY FROM `Table_name` 
		$this->db->select('*');
		$this->db->from($this->table15);
		
		$this->db->where("UserId", (int) $id);
		// $this->db->where("DATE_FORMAT(calender_date,'%m')", (int) $MID);
		$this->db->where("DATE_FORMAT(LeaveDate,'%Y')", (int) $YID);
		$this->db->where("DATE_FORMAT(LeaveDate,'%m')", (int) $MID);
		$query = $this->db->get();
		// echo "<pre>";
		// print_r($query->result());die("ASIF");
		
		return $query->row();
		
	}
	
	public function getEmployeeCustomLeave($id, $YID, $MID){
		 // $YID = $this->input->get('YearID');
         // $MID = $this->input->get('MonthID');
		 // $q = SELECT DAYNAME( calender_date ) AS DAY FROM $this->table13; 
		// SELECT DAYNAME( s_date ) AS DAY FROM `Table_name` 
		$this->db->select('*');
		$this->db->from($this->table15);
		
		$this->db->where("UserId", (int) $id);
		// $this->db->where("DATE_FORMAT(calender_date,'%m')", (int) $MID);
		$this->db->where("DATE_FORMAT(LeaveDate,'%Y')", (int) $YID);
		$this->db->where("DATE_FORMAT(LeaveDate,'%m')", (int) $MID);
		$query = $this->db->get();
		// echo "<pre>";
		// print_r($query->result());die("ASIF");
		
		return $query->result();
		
	}
	
	
	
	
	public function getSingleEmpCLEL($id, $YD){
		 // echo $id;
		 // echo $YD;
		 $date = explode('-', $YD);
		 // echo print_r($date);
		  $year = $date[0];
		  $month = $date[1];
		 // echo $month = $date[2];
		 // die;
		 // $q = SELECT DAYNAME( calender_date ) AS DAY FROM $this->table13; 
		// SELECT DAYNAME( s_date ) AS DAY FROM `Table_name` 
		$this->db->select('*');
		$this->db->from($this->table15);
		
		$this->db->where("UserId", (int) $id);
		// $this->db->where("DATE_FORMAT(calender_date,'%m')", (int) $MID);
		$this->db->where("DATE_FORMAT(LeaveDate,'%Y')", (int) $year);
		$this->db->where("DATE_FORMAT(LeaveDate,'%m')", (int) $month);
		$query = $this->db->get();
		// echo "<pre>";
		// print_r($query->result());die("ASIF");
		
		return $query->row();
		
	}
	
	public function getEmployeeCLEL($id){
		  // print_r($_GET);die;
		  
		$this->db->select('*');
		$this->db->from($this->table15);
		
		$this->db->where("UserId", (int) $id);
		
		$query = $this->db->get();
		// echo "<pre>";
		// print_r($query->row());die("ASIF");
		
		return $query->result();
		
	}
	
	public function getEmpCLEL($id){
		  // echo $empID = $this->input->get('id');
		  // print_r($_GET);die;
		  // echo $id; die;
		$this->db->select('*');
		$this->db->from($this->table15);
		
		$this->db->where("leave_Id", (int) $id);
		
		$query = $this->db->get();
		// echo "<pre>";
		// print_r($query->row());die("ASIF");
		
		return $query->result();
		
	}
	
	public function getCalender(){

		$query = $this->db->get($this->table13)->result();
		
		
	}
	
	
	public function insertUserAttendence($data3){
		$Id=$this->input->post('User_Id');
		// print_r($_POST);die;
    
	$params = $this->db->get($this->table13)->result_array();
	// echo "<pre>";
	// print_r($params);die;
	// $result = json_decode($params, true);
    // $save_sect = array();
	
    foreach($params as $data){
     
	$save_sect = [  

	'UserId' => $Id,
	'AttendenceDate' => $data['calender_date'],
	'Status' => $data['sort_holidayname']

	];

    $this->db->insert('employeeattendence', $save_sect);
    
    }
    return true;
  
	
    }

	public function storeSingleUserAttendence($dataAtt){

		$this->db->where('calender_date >=', $dataAtt['current_date']);
		$params = $this->db->get($this->table13)->result_array();
		foreach($params as $data){
		
		$save_sect = [  
		'UserId' => $dataAtt['User_Id'],
		'AttendenceDate' => $data['calender_date'],
		'Status' => $data['sort_holidayname']
		];
		$this->db->insert('employeeattendence', $save_sect);
		
		}
		return true;
    }

	public function insert_dates($dates) {
		$this->db->empty_table('holiday_calender');
        $this->db->insert_batch('holiday_calender', $dates);
		return true;
    }
	public function getSingleRowDate($dates) {
		$params = $this->db->where('calender_date', $dates)->get($this->table13)->row();
		return $params;
    }
	
	public function insertEmployeeLeave($data3){

		$this->db->insert($this->table15, $data3);
		return $this->db->affected_rows();	
	}
	
	
	
	
	public function getEmp($id){
		$query = $this->db->get_where($this->table1, ['id'=> (int) $id]);
		return $query->result();
	} 
	
	
	public function getEmpAttSingle($id){
		$YID = $this->input->get('YearID');
         $MID = $this->input->get('MonthID');
         $MIDS = $MID + 1;
         $DID = 31;
		
		$startDate = $YID.'-'.$MID.'-0'.$DID;
		$startJoiningDate = $YID.'-'.$MID.'-'.$DID;
		$EtartDate = "0000-00-00";
		
		$this->db->select('*');
		$this->db->from('tbl_user');
			
			// echo "ASIF";die;
			
			
		$this->db->where('DATE(EmployeejoiningDate) <=', date('Y-m-d',strtotime($startJoiningDate)));
		$this->db->where(['id'=> (int) $id]);	
		$query = $this->db->get();
		return $query->result();
	} 
	
	public function getSingleUserAttendance($id){
		$query = $this->db->get_where($this->table14, ['id'=> (int) $id]);
		return $query->result();
	} 
	
	public function getSingleEEAttendance($id){
		$query = $this->db->get_where($this->table14, ['UserId'=> (int) $id]);
		return $query->num_rows();
	} 
	
	public function getSingleUserEdu($id){
		$query = $this->db->get_where($this->table3, ['Id'=> (int) $id]);
		return $query->result();
	} 
	public function getSingleUserDoc($id){
		$query = $this->db->get_where($this->table8, ['Id'=> (int) $id]);
		return $query->result();
	} 
	
	public function getSingleUserCourses($id){
		$query = $this->db->get_where($this->table4, ['Id'=> (int) $id]);
		return $query->result();
	} 
	
	public function getSingleUserBankAcc($id){
		$query = $this->db->get_where($this->table5, ['Id'=> (int) $id]);
		return $query->result();
	} 
	
	
	public function getSingleUserWorkExp($id){
		$query = $this->db->get_where($this->table6, ['Id'=> (int) $id]);
		return $query->result();
	} 
	
	
	
	
	public function getUserAttendance($id, $currDate){
		$this->db->select('*');
		$this->db->from($this->table14);
		
		$this->db->where("DATE_FORMAT(AttendenceDate,'%Y/%m/%d')", $currDate);
		$this->db->where(["UserId" => (int)$id]);
		// $this->db->where("DATE_FORMAT(calender_date,'%m')", (int) $MID);
		
		$query = $this->db->get();
		// echo $query->Status;
		// echo "<pre>";
		// print_r($query->row());die("ASIF");
		
		return $query->row();
	} 
	
	
	 
	
	
	public function UpdatePAttendence($user_id, $id){
		$date = date_default_timezone_set('Asia/Kolkata');
			//If you want Day,Date with time AM/PM
			$today = date("h:i:s"); 
		$this->db->where('UserId', (int) $user_id);
		$this->db->where('id', (int) $id);
		$this->db->update($this->table14, ["Status"=>"P", "checkInTime"=> $today]);
		return $this->db->affected_rows();
	
	}
	
	public function getweekOff($id, $start_deadline, $end_deadline){
		$this->db->select('STATUS, COUNT(STATUS) AS wcount');
		$this->db->from($this->table14);
		$this->db->where(["UserId" => (int)$id]);
		$this->db->where('AttendenceDate >=', $start_deadline);
		$this->db->where('AttendenceDate <=', $end_deadline);
		
		
		$this->db->where("employeeattendence.Status = 'W-OFF'");
		// $this->db->where("DATE_FORMAT(calender_date,'%m')", (int) $MID);
		
		$query = $this->db->get();
		// echo $query->Status;
		// echo "<pre>";
		// print_r($query->row());die("ASIF");
		
		return $query->row();
	} 
	public function getLeaveApplyCLEL($id, $start_deadline, $end_deadline){
		$date = explode('-', $start_deadline);
		 // echo print_r($date);
		 $year = $date[0];
		 $month = $date[1];
		// echo $start_deadline; die;
		$this->db->select('*');
		$this->db->from($this->table15);
		$this->db->where(["UserId" => (int)$id]);
		$this->db->where("DATE_FORMAT(LeaveDate,'%Y')", (int) $year);
		$this->db->where("DATE_FORMAT(LeaveDate,'%m')", (int) $month);
		$query = $this->db->get();
		
		return $query->result();
	} 
	
	
	
	
	public function updateLeaveOnAttendance(){
		$date = date_default_timezone_set('Asia/Kolkata');
		$singleUserData = $this->AttendanceModel->getSingleApplyLeaveData($this->input->post('id'));
		
				// print_r($singleUserData);DIE;
				$date=date_create($singleUserData->StartDate);
			$date2=date_create($singleUserData->EndDate);
		// $date = $this->input->post('insertStartDate_val');
		// $month = date_format($date,"m");
		// $Year = date_format($date,"Y");
		$startData = date_format($date,"Y-m-d");
		$endDataq = date_format($date2,"Y-m-d");
				// $startData = $singleUserData->StartDate;
				$st = explode("-", $startData);
					$ClYear = $st[0];
					$ClMonth = $st[1];
					$ClDay = $st[2];
					
				 // $startdate_CL = $ClYear."-".$ClMonth."-".$ClDay;
				// print_r($startdate_CL);die;
				 
				 // die;
				$endData = $singleUserData->EndDate;
				// $interval = $singleUserData->RequestedDays;
				
				
				$userLeaveType = explode(',', $singleUserData->LeaveType);
				$CLLeave = $userLeaveType[0];
				// if(!empty($userLeaveType[1])){
					
				// $ELLeave = $userLeaveType[1];
				// }
				// if(!empty($userLeaveType[2])){
					
				// $LWPLeave = $userLeaveType[2];
				
				// }
				
				
				$User_ID = $singleUserData->UserId;
				// die;
				$weekOffCount = $this->AttendanceModel->getweekOff($User_ID, $startData, $endDataq);
				$wkOff = $weekOffCount->wcount;
				// print_r($weekOffCount);
				// die;
				$singleUserELCL = $this->AttendanceModel->getSingleEmpCLEL($User_ID, $startData);
				// print_r($singleUserELCL);die;
				$leave_Id = $singleUserELCL->leave_Id;
				$calCL = $singleUserELCL->CL;
				$calEL = $singleUserELCL->EL;
				
				
				$startDate  = new DateTime($startData);
				
				
				$startdate_CL = $ClYear."-".$ClMonth."-".$ClDay;
				$maininterval   = new DateInterval('P1D'); // One day
				$endDate = new DateTime($endData);
				
				
				$diff = $startDate->diff($endDate);
				$calDay = $diff->d;
				$TLeave = $calDay - $wkOff;
				$TotalLeave = $TLeave + 1;
				
				// die;
				$endDate->modify('+1 day');
				
				
				// print_r($period);
				// die;
				
				
				
				// echo $RCL = $calCL - $calDay;
				// die;
				// $REL = $calEL - $calDay;
				if($CLLeave == "CL"){
					$LeaveCalculation = $calCL - $TotalLeave;
					if($LeaveCalculation < 0){
					$CLNull = 0;
					$data = ["CL"=> $CLNull];
					$this->AttendanceModel->UpdateSingleEmpCLEL($leave_Id, $data);
						
						$AddCl = $calCL + $ClDay;
				
						$start_CL = $ClYear."-".$ClMonth."-".$AddCl;
						$EndDate_CL  = new DateTime($start_CL);
						$period_Leave = new DatePeriod($startDate, $maininterval, $EndDate_CL);
						foreach ($period_Leave as $dt) 
						{

						$str = $dt->format('Y/m/d');
						// echo $str;
						// echo "<br>";
						$this->db->where("DATE_FORMAT(AttendenceDate,'%Y/%m/%d')", $str);
						$this->db->where(["UserId" => (int)$User_ID]);
						if($this->db->where("employeeattendence.Status != 'W-OFF'")){
						$insertData = [
						'Status' => $CLLeave

						];

						$this->db->update($this->table14, $insertData);
						}

						}
					// $ELLeave = $userLeaveType[1];
					if(!empty($userLeaveType[1]) && $userLeaveType[1] == "EL"){
						$ELLeave = $userLeaveType[1];
						
						$ElCalculation = $calEL - abs($LeaveCalculation);
						if($ElCalculation <= 0){
							
							$ELNull = 0;
							$data = ["EL"=> $ELNull];
							$this->AttendanceModel->UpdateSingleEmpCLEL($leave_Id, $data);
							
				//Strat data to insert in calender
							
							$AddEl = $calEL + $calCL + $ClDay;
				
						$start_EL = $ClYear."-".$ClMonth."-".$AddEl;
						$EndDate_EL  = new DateTime($start_EL);
						$period_ElM = new DatePeriod($EndDate_CL, $maininterval, $EndDate_EL);
						foreach ($period_ElM as $dt) 
						{

						$str = $dt->format('Y/m/d');
						// echo $str;
						// echo "<br>";
						$this->db->where("DATE_FORMAT(AttendenceDate,'%Y/%m/%d')", $str);
						$this->db->where(["UserId" => (int)$User_ID]);
						if($this->db->where("employeeattendence.Status != 'W-OFF'")){
						$insertData = [
						'Status' => $ELLeave

						];

						$this->db->update($this->table14, $insertData);
						}

						}
							
							//End data to insert in calender
						// $start_CL = $ClYear."-".$ClMonth."-".$AddCl;
						// $EndDate_CL  = new DateTime($start_CL);
							
							if(!empty($userLeaveType[2]) && $userLeaveType[2] == "LWP"){
								$LWPLeave = $userLeaveType[2];
								$period = new DatePeriod($EndDate_EL, $maininterval, $endDate);
								
								foreach ($period as $dt) 
								{

								$str = $dt->format('Y/m/d');
								// echo $str;
								// echo "<br>";
								$this->db->where("DATE_FORMAT(AttendenceDate,'%Y/%m/%d')", $str);
								$this->db->where(["UserId" => (int)$User_ID]);
								if($this->db->where("employeeattendence.Status != 'W-OFF'")){
								$insertData = [
								'Status' => $LWPLeave

								];

								$this->db->update($this->table14, $insertData);
								}



								}
								
							
							}
						}else{
							
							// $ElCalculation = 0;
							$data = ["EL"=> $ElCalculation];
							$this->AttendanceModel->UpdateSingleEmpCLEL($leave_Id, $data);
							$period_ElS = new DatePeriod($EndDate_CL, $maininterval, $endDate);
							foreach ($period_ElS as $dt) 
							{

							$str = $dt->format('Y/m/d');
							// echo $str;
							// echo "<br>";
							$this->db->where("DATE_FORMAT(AttendenceDate,'%Y/%m/%d')", $str);
							$this->db->where(["UserId" => (int)$User_ID]);
							if($this->db->where("employeeattendence.Status != 'W-OFF'")){
							$insertData = [
							'Status' => $ELLeave

							];

							$this->db->update($this->table14, $insertData);
							}

							}
							
						}
					}
					
				}else{
					$data = ["CL"=> $LeaveCalculation];
					$this->AttendanceModel->UpdateSingleEmpCLEL($leave_Id, $data);
						$period = new DatePeriod($startDate, $maininterval, $endDate);
							foreach ($period as $dt) 
							{

							$str = $dt->format('Y/m/d');
							// echo $str;
							// echo "<br>";
							$this->db->where("DATE_FORMAT(AttendenceDate,'%Y/%m/%d')", $str);
							$this->db->where(["UserId" => (int)$User_ID]);
							if($this->db->where("employeeattendence.Status != 'W-OFF'")){
							$insertData = [
							'Status' => $CLLeave

							];

							$this->db->update($this->table14, $insertData);
							}

							}
					
				}
				
				}else if($CLLeave == "EL"){
					$REL = $calEL - $TotalLeave;
					$data = ["EL"=> $REL];
					$this->AttendanceModel->UpdateSingleEmpCLEL($leave_Id, $data);
				
					$period_singleLwp = new DatePeriod($startDate, $maininterval, $endDate);
					foreach ($period_singleLwp as $dt) 
				{
  
				$str = $dt->format('Y/m/d');
				// echo $str;
				// echo "<br>";
				$this->db->where("DATE_FORMAT(AttendenceDate,'%Y/%m/%d')", $str);
				$this->db->where(["UserId" => (int)$User_ID]);
				if($this->db->where("employeeattendence.Status != 'W-OFF'")){
					$insertData = [
				'Status' => $CLLeave

				];
				
				$this->db->update($this->table14, $insertData);
				}
				
				
				
				}
				
				
				}else if($CLLeave == "MD"){
					$TotalHalf = 0.5;
					if($calCL > 0){
						
						$RCL = $calCL - $TotalHalf;
						$data = ["CL"=> $RCL];
						$this->AttendanceModel->UpdateSingleEmpCLEL($leave_Id, $data);


						$period_singleLwp = new DatePeriod($startDate, $maininterval, $endDate);
						foreach ($period_singleLwp as $dt) 
						{

						$str = $dt->format('Y/m/d');
						// echo $str;
						// echo "<br>";
						$this->db->where("DATE_FORMAT(AttendenceDate,'%Y/%m/%d')", $str);
						$this->db->where(["UserId" => (int)$User_ID]);
						if($this->db->where("employeeattendence.Status != 'W-OFF'")){
						$insertData = [
						'Status' => $CLLeave

						];

						$this->db->update($this->table14, $insertData);
						}



						}
					}else if($calEL > 0){
						
						$REL = $calEL - $TotalHalf;
						$data = ["EL"=> $REL];
						$this->AttendanceModel->UpdateSingleEmpCLEL($leave_Id, $data);


						$period_singleLwp = new DatePeriod($startDate, $maininterval, $endDate);
						foreach ($period_singleLwp as $dt) 
						{

						$str = $dt->format('Y/m/d');
						// echo $str;
						// echo "<br>";
						$this->db->where("DATE_FORMAT(AttendenceDate,'%Y/%m/%d')", $str);
						$this->db->where(["UserId" => (int)$User_ID]);
						if($this->db->where("employeeattendence.Status != 'W-OFF'")){
						$insertData = [
						'Status' => $CLLeave

						];

						$this->db->update($this->table14, $insertData);
						}



						}

						
					}else{
						
						
						$period_singleLwp = new DatePeriod($startDate, $maininterval, $endDate);
						foreach ($period_singleLwp as $dt) 
						{

						$str = $dt->format('Y/m/d');
						// echo $str;
						// echo "<br>";
						$this->db->where("DATE_FORMAT(AttendenceDate,'%Y/%m/%d')", $str);
						$this->db->where(["UserId" => (int)$User_ID]);
						if($this->db->where("employeeattendence.Status != 'W-OFF'")){
						$insertData = [
						'Status' => $CLLeave

						];

						$this->db->update($this->table14, $insertData);
						}



						}

						
					}
					
					
				
				
				
				
				}else if($CLLeave == "LWP"){
					// $REL = $calEL - $TotalLeave;
					// $data = ["EL"=> $REL];
					// $this->AttendanceModel->UpdateSingleEmpCLEL($leave_Id, $data);
					$period_singleLwp = new DatePeriod($startDate, $maininterval, $endDate);
					foreach ($period_singleLwp as $dt) 
				{
  
				$str = $dt->format('Y/m/d');
				// echo $str;
				// echo "<br>";
				$this->db->where("DATE_FORMAT(AttendenceDate,'%Y/%m/%d')", $str);
				$this->db->where(["UserId" => (int)$User_ID]);
				if($this->db->where("employeeattendence.Status != 'W-OFF'")){
					$insertData = [
				'Status' => $CLLeave

				];
				
				$this->db->update($this->table14, $insertData);
				}
				
				
				
				}
				
				
				
				}
				
				
				
				
				// die;
			
		return $this->db->affected_rows();
	
	}
	
	
	
	
	
	
	
	
	public function updateLeaveeeeeeeeeeeOnAttendance(){
		$date = date_default_timezone_set('Asia/Kolkata');
		$singleUserData = $this->AttendanceModel->getSingleApplyLeaveData($this->input->post('id'));
		
				// print_r($singleUserData);
				$startData = $singleUserData->StartDate;
				$endData = $singleUserData->EndDate;
				// $interval = $singleUserData->RequestedDays;
				$userLeaveType = $singleUserData->LeaveType;
				$User_ID = $singleUserData->UserId;
				// die;
				$weekOffCount = $this->AttendanceModel->getweekOff($User_ID, $startData, $endData);
				$wkOff = $weekOffCount->wcount;
				// print_r($weekOffCount);
				// die;
				$singleUserELCL = $this->AttendanceModel->getSingleEmpCLEL($User_ID, $startData);
				// print_r($singleUserELCL);die;
				$leave_Id = $singleUserELCL->leave_Id;
				$calCL = $singleUserELCL->CL;
				$calEL = $singleUserELCL->EL;
				
				
				$startDate  = new DateTime($startData);
				
				$maininterval   = new DateInterval('P1D'); // One day
				$endDate = new DateTime($endData);
				
				
				$diff = $startDate->diff($endDate);
				$calDay = $diff->d;
				$TLeave = $calDay - $wkOff;
				$TotalLeave = $TLeave + 1;
				
				// die;
				$endDate->modify('+1 day');
				
				$period = new DatePeriod($startDate, $maininterval, $endDate);
				
				
				
				
				
				// echo $RCL = $calCL - $calDay;
				// die;
				// $REL = $calEL - $calDay;
				if($userLeaveType == "CL"){
					$RCL = $calCL - $TotalLeave;
					$data = ["CL"=> $RCL];
				$this->AttendanceModel->UpdateSingleEmpCLEL($leave_Id, $data);
				}else if($userLeaveType == "EL"){
					$REL = $calEL - $TotalLeave;
					$data = ["EL"=> $REL];
				$this->AttendanceModel->UpdateSingleEmpCLEL($leave_Id, $data);
				}
				
				
				foreach ($period as $dt) 
				{
  
				$str = $dt->format('Y/m/d');
				// echo $str;
				// echo "<br>";
				$this->db->where("DATE_FORMAT(AttendenceDate,'%Y/%m/%d')", $str);
				$this->db->where(["UserId" => (int)$User_ID]);
				if($this->db->where("employeeattendence.Status != 'W-OFF'")){
					$insertData = [
				'Status' => $userLeaveType

				];
				
				$this->db->update($this->table14, $insertData);
				}
				
				
				
				}
				
				// die;
			
		return $this->db->affected_rows();
	
	}
	
	public function InsertLeaveAccept($id){
		$id; 
		
		$this->db->where('leaveApply_Id', (int) $id);
		$data = [
		"leaveStatus"=>"Accept"
		];
		$this->db->update($this->table17, $data);
		return $this->db->affected_rows();
	
	}
	
	public function InsertLeaveDecline($id){
		// $date = date_default_timezone_set('Asia/Kolkata');
			//If you want Day,Date with time AM/PM
			// $today = date("h:i:s"); 
		// $this->db->where('UserId', (int) $user_id);
		$this->db->where('leaveApply_Id', (int) $id);
		$this->db->update($this->table17, ["leaveStatus"=>"Decline"]);
		return $this->db->affected_rows();
	
	}
	
	
	
	public function UpdateMDAttendence($user_id, $id){
		$date = date_default_timezone_set('Asia/Kolkata');
			//If you want Day,Date with time AM/PM
			$today = date("h:i:s");
			$data = [
			"Status"=>"MD",
			"checkInTime"=> $today
			
			
			];
			
		$this->db->where('UserId', (int) $user_id);
		$this->db->where('id', (int) $id);
		$this->db->update($this->table14, $data);
		return $this->db->affected_rows();
	
	}
	
	public function updateEmpCLEL($id, $data){
		$this->db->where('leave_Id', (int) $id);
		// $this->db->where('id', (int) $id);
		$this->db->update($this->table15, $data);
		return $this->db->affected_rows();
	
	}
	
	public function UpdateSingleEmpCLEL($id, $data){
		$this->db->where('leave_Id', (int) $id);
		// $this->db->where('id', (int) $id);
		$this->db->update($this->table15, $data);
		return $this->db->affected_rows();
	
	}
	
	public function updateSingleUserAttendance($id, $data){
		$this->db->where('id', (int) $id);
		// $this->db->where('id', (int) $id);
		$this->db->update($this->table14, $data);
		return $this->db->affected_rows();
	
	}
	
	public function updateHolidayAttnByDate($DateH, $data){
		// echo $DateH;die;
		$this->db->where("DATE_FORMAT(AttendenceDate,'%Y-%m-%d')", $DateH);
		$this->db->update($this->table14, $data);
		return $this->db->affected_rows();
	
	}
	
	public function updateSingleUserEdu($id, $data){
		$this->db->where('Id', (int) $id);
		// $this->db->where('id', (int) $id);
		$this->db->update($this->table3, $data);
		return $this->db->affected_rows();
	
	}
	
	
	public function updateSingleUserDoc($id, $data){
		$this->db->where('Id', (int) $id);
		// $this->db->where('id', (int) $id);
		$this->db->update($this->table8, $data);
		return $this->db->affected_rows();
	
	}
	
	public function updateSingleUserCourses($id, $data){
		$this->db->where('Id', (int) $id);
		// $this->db->where('id', (int) $id);
		$this->db->update($this->table4, $data);
		return $this->db->affected_rows();
	
	}
	
	public function updateSingleUserBank($id, $data){
		$this->db->where('Id', (int) $id);
		// $this->db->where('id', (int) $id);
		$this->db->update($this->table5, $data);
		return $this->db->affected_rows();
	
	}
	
	public function updateSingleUserWorkExp($id, $data){
		$this->db->where('Id', (int) $id);
		// $this->db->where('id', (int) $id);
		$this->db->update($this->table6, $data);
		return $this->db->affected_rows();
	
	}
	
	public function getEmpUser($id){
		$query = $this->db->get_where($this->table1, ['id'=> (int) $id]);
		return $query->row();
	}
	
	public function insertLeaveData($data3){
		// die;
		// print_r($data3);die;
		$this->db->insert($this->table17, $data3);
		$user_id=$this->db->insert_id();
		
		return $user_id;	
	}
	
	public function insertLeaveApplyDoc($lastInsertId, $data8){
		// die;
		// print_r($data3);die;
		$this->db->insert($this->table16, $data8);
		return $this->db->affected_rows();
	}
	
	public function getApplyLeaveData($id){
		$this->db->select('*');
		$this->db->from($this->table17);
		
		// $this->db->where("DATE_FORMAT(AttendenceDate,'%Y/%m/%d')", $currDate);
		$this->db->where(["UserId" => (int)$id]);
		// $this->db->where("DATE_FORMAT(calender_date,'%m')", (int) $MID);
		$this->db->limit('5');
		$this->db->order_by('leaveapply.leaveApply_Id DESC');
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
	
	
	public function getEmployeeLeaveData(){
		$this->db->select('*');
		// $this->db->from($this->table17);
		$this->db->from('tbl_user');
		$this->db->join('leaveapply', 'leaveapply.UserId = tbl_user.id');
		
		// $this->db->where("DATE_FORMAT(AttendenceDate,'%Y/%m/%d')", $currDate);
		// $this->db->where(["UserId" => (int)$id]);
		// $this->db->where("DATE_FORMAT(calender_date,'%m')", (int) $MID);
		$this->db->where("leaveapply.leaveStatus = 'Pending'");
		// $this->db->limit('5');
		$this->db->order_by('leaveapply.leaveApply_Id', "desc");
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
	
	
	public function getSingleLeaveDocData($id, $LeaveId){
		$this->db->select('*');
		// $this->db->from($this->table17);
		$this->db->from('leaveapply_documents');
		
		// $this->db->where("DATE_FORMAT(AttendenceDate,'%Y/%m/%d')", $currDate);
		$this->db->where(["UserId" => (int)$id]);
		$this->db->where(["leaveId" => (int)$LeaveId]);
		// $this->db->where("DATE_FORMAT(calender_date,'%m')", (int) $MID);
		
		$query = $this->db->get();
		// echo $query->Status;
		// echo "<pre>";
		// print_r($query->row());die("ASIF");
		
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
	
	public function getsingleEmployeeCLEL($id, $start, $end){
		// echo $start; die;
		$date = explode('-', $start);
		 // print_r($date);die;
		 $year = $date[0];
		 $month = $date[1];
		// echo $start_deadline; die;
		$this->db->select('*');
		$this->db->from($this->table15);
		$this->db->where(["UserId" => (int)$id]);
		$this->db->where("DATE_FORMAT(LeaveDate,'%Y')", (int) $year);
		$this->db->where("DATE_FORMAT(LeaveDate,'%m')", (int) $month);
		$query = $this->db->get();
		
		return $query->row();
	} 
	
	public function getsingleUserDetails($id){
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
	
	
	public function getMonthlyHolidayCalender($YearID, $MonthID){
		 $YID = $this->input->get('YearID');
         $MID = $this->input->get('MonthID');
		$this->db->select('*');
		$this->db->from($this->table13);
		
		$this->db->where("DATE_FORMAT(calender_date,'%Y')", (int) $YID);
		$this->db->where("DATE_FORMAT(calender_date,'%m')", (int) $MID);
		// $this->db->where("holiday_calender.holiday_list != ''");
		// $this->db->order_by($datestring);
		$query = $this->db->get();
		// echo "<pre>";
		// print_r($query->result());die("ASIF");
		
		return $query->result();
		
	}
	
	
	public function ViewHolidayCalender($id){
		
		$this->db->select('*');
		$this->db->from($this->table13);
		$this->db->where(['h_id'=>$id]);
		
		$query = $this->db->get();
		
		return $query->result();
		
	}
	
	public function ViewHolidayRow($id){
		
		$this->db->select('*');
		$this->db->from($this->table13);
		$this->db->where(['h_id'=>$id]);
		
		$query = $this->db->get();
		
		return $query->row();
		
	}
	
	public function updateHolidayCalender($id, $data){
		$this->db->where('h_id', (int) $id);
		// $this->db->where('id', (int) $id);
		$this->db->update($this->table13, $data);
		return $this->db->affected_rows();
	
	}
	
	
	public function updateHolidayByDate($DateH, $data){
		$this->db->where("DATE_FORMAT(calender_date,'%Y-%m-%d')", $DateH);
		$this->db->update($this->table13, $data);
		return $this->db->affected_rows();
	
	}
	
	
	
	
	
	
}
