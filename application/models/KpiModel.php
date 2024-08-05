<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KpiModel extends CI_Model {
	
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
	public $table13 = 'seogoalpoints';
	public $table14 = 'employee_kpigoals';
	public $table15 = 'employeeattendence';
	
	
	
	public function getMarks($id, $YearID, $MonthID){
		$YID = $YearID;
         $MID = $MonthID;
		$this->db->select('kpi_marks, SUM(kpi_marks) AS marks');
		$this->db->from($this->table14);
		$this->db->where("UserId", (int) $id);
		$this->db->where("Year_Id", (int) $YID);
		$this->db->where("month_Id", (int) $MID);
		
		
		$this->db->where("employee_kpigoals.kpi_marks > 0");
		// $this->db->where("DATE_FORMAT(calender_date,'%m')", (int) $MID);
		
		$query = $this->db->get();
		// echo $query->Status;
		// echo "<pre>";
		// print_r($query->row());die("ASIF");
		
		return $query->result();
	} 
	
	public function getYearlyMarks($id, $YearID){
		$YID = $YearID;
        
		$this->db->select('kpi_marks, SUM(kpi_marks) AS marks');
		$this->db->from($this->table14);
		$this->db->where("UserId", (int) $id);
		$this->db->where("Year_Id", (int) $YID);
		
		$this->db->where("employee_kpigoals.kpi_marks > 0");
		// $this->db->where("DATE_FORMAT(calender_date,'%m')", (int) $MID);
		
		$query = $this->db->get();
		// echo $query->Status;
		// echo "<pre>";
		// print_r($query->row());die("ASIF");
		
		return $query->result();
	} 
	
	
	
	public function getRowMarks($id, $YearID, $MonthID){
		$YID = $YearID;
         $MID = $MonthID;
		$this->db->select('kpi_marks, SUM(kpi_marks) AS marks');
		$this->db->from($this->table14);
		$this->db->where("UserId", (int) $id);
		$this->db->where("Year_Id", (int) $YID);
		$this->db->where("month_Id", (int) $MID);
		
		
		$this->db->where("employee_kpigoals.kpi_marks > 0");
		// $this->db->where("DATE_FORMAT(calender_date,'%m')", (int) $MID);
		
		$query = $this->db->get();
		// echo $query->Status;
		// echo "<pre>";
		// print_r($query->row());die("ASIF");
		
		return $query->row();
	} 
	public function getMarksObtained($id, $YearID, $MonthID){
		$YID = $YearID;
         $MID = $MonthID;
		$this->db->select('afterKpi_marks, ROUND(SUM(afterKpi_marks), 1)  AS marksObt');
		$this->db->from($this->table14);
		$this->db->where("UserId", (int) $id);
		$this->db->where("Year_Id", (int) $YID);
		$this->db->where("month_Id", (int) $MID);
		
		
		$this->db->where("employee_kpigoals.afterKpi_marks > 0");
		// $this->db->where("DATE_FORMAT(calender_date,'%m')", (int) $MID);
		
		$query = $this->db->get();
		// echo $query->Status;
		// echo "<pre>";
		// print_r($query->row());die("ASIF");
		$array = $query->result();
		//$array['test'] = 'monika';
		return $array;
		//return number_format((float)$query->row()->marksObt, 1, '.', '');
	//	return round($query->row()->marksObt);
	} 


	
	public function getMarksObtained2($id, $YearID, $MonthID){
		$YID = $YearID;
         $MID = $MonthID;
		$this->db->select('afterKpi_marks, SUM(afterKpi_marks) AS marksObt');
		$this->db->from($this->table14);
		$this->db->where("UserId", (int) $id);
		$this->db->where("Year_Id", (int) $YID);
		$this->db->where("month_Id", (int) $MID);
		
		
		$this->db->where("employee_kpigoals.afterKpi_marks > 0");
		// $this->db->where("DATE_FORMAT(calender_date,'%m')", (int) $MID);
		
		$query = $this->db->get();
		// echo $query->Status;
		// echo "<pre>";
		// print_r($query->row());die("ASIF");
		return number_format((float)$query->row()->marksObt, 1, '.', '');
	return round($query->row()->marksObt);
	} 
	
	
	
	
	
	
	public function getYearlyMarksObtained($id, $YearID){
		$YID = $YearID;
         
		$this->db->select('afterKpi_marks, SUM(afterKpi_marks) AS marksObt');
		$this->db->from($this->table14);
		$this->db->where("UserId", (int) $id);
		$this->db->where("Year_Id", (int) $YID);
		
		
		$this->db->where("employee_kpigoals.afterKpi_marks > 0");
		// $this->db->where("DATE_FORMAT(calender_date,'%m')", (int) $MID);
		
		$query = $this->db->get();
		// echo $query->Status;
		// echo "<pre>";
		// print_r($query->row());die("ASIF");
		
		return $query->result();
	} 
	
	
	
	
	public function getRowMarksObtained($id, $YearID, $MonthID){
		$YID = $YearID;
         $MID = $MonthID;
		$this->db->select('afterKpi_marks, SUM(afterKpi_marks) AS marksObt');
		$this->db->from($this->table14);
		$this->db->where("UserId", (int) $id);
		$this->db->where("Year_Id", (int) $YID);
		$this->db->where("month_Id", (int) $MID);
		
		
		$this->db->where("employee_kpigoals.afterKpi_marks > 0");
		// $this->db->where("DATE_FORMAT(calender_date,'%m')", (int) $MID);
		
		$query = $this->db->get();
		// echo $query->Status;
		// echo "<pre>";
		// print_r($query->row());die("ASIF");
		
		return $query->row();
	} 
	
	public function getMonth($id, $YearID, $MonthID){
		$month = $MonthID;
		if($month == 1)
		{
			return "January";
		}else if($month == 2)
		{
			return "Febraury";
		}else if($month == 3)
		{
			return "March";
		}else if($month == 4)
		{
			return "April";
		}else if($month == 5)
		{
			return "May";
		}else if($month == 6)
		{
			return "June";
		}else if($month == 7)
		{
			return "July";
		}else if($month == 8)
		{
			return "August";
		}else if($month == 9)
		{
			return "September";
		}else if($month == 10)
		{
			return "October";
		}else if($month == 11)
		{
			return "November";
		}else if($month == 12)
		{
			return $da = "December";
			 
		}
		
	}
	
	
	public function getMarksObtainedPercentage($id, $YearID, $MonthID){
		$YID = $YearID;
        $MID = $MonthID; $na = "N/A";
		$KPIMarksObtained = $this->KpiModel->getRowMarksObtained($id, $YID, $MID);
		$MarksObtained = $KPIMarksObtained->marksObt;
		$KPIMarks = $this->KpiModel->getRowMarks($id, $YID, $MID);
		   $mark = $KPIMarks->marks;
		if($mark > 0){
		$percent = $MarksObtained/$mark;
		$getPecent = round($percent*100);
		$PercentMarks = (array)$getPecent;
		return $PercentMarks;
		
		}else{
			$PeM = "N/A";
			$PeMarks = (array)$PeM;
			return $PeMarks;
		}
	}
	
	public function getInMonthDays($id, $YearID, $MonthID){
		
         $MID = $MonthID;
        $mmd = "2021/".$MID."/05";
		$date = date_create($mmd);
		$mDate = date_format($date,"F");
		$rar = (array)$mDate;
		return $rar;
		
	} 
	
	public function getInYearlyMonthDays($id, $YearID, $MonthID){
		
         $MID = $MonthID;
        $mmd = "2021/".$MID."/05";
		$date = date_create($mmd);
		$mDate = date_format($date,"F");
		$rar = (array)$MID;
		return $rar;
		
	} 
	
	
	
	
}
?>