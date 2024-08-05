<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PayModel extends CI_Model {
	
	public $table1 = 'tbl_user';
	public $table2 = 'employeedetails';
	public $table3 = 'employee_education';
	public $table4 = 'employee_course';
	public $table5 = 'employee_bankaccount';
	public $table6 = 'employee_workexperience';
	public $table7 = 'employee_salary';
	public $table77 = 'employee_salary';
	public $table8 = 'employee_documents';
	public $table9 = 'employee_profileimage';
	public $table10 ='left_employeedetails';
	public $table12 = 'companygoals_points';
	public $table13 = 'holiday_calender';
	public $table14 = 'employeeattendence';
	public $table15 = 'employeeleavedetails';
	public $table16 = 'leaveapply_documents';
	public $table17 = 'leaveapply';
	
	
	
	public function getweekOff($id, $YearID, $MonthID){
		
		
		$date=date_create("$YearID-$MonthID-01");
		$start_deadline = date_format($date,"Y/m/d");
		 $end_deadline = date("Y-m-d");
		$this->db->select('STATUS, COUNT(STATUS) AS wcount');
		$this->db->from($this->table14);
		$this->db->where(["UserId" => (int)$id]);
		$this->db->where('AttendenceDate >=', $start_deadline);
		$this->db->where('AttendenceDate <=', $end_deadline);
		
		
		$this->db->where("employeeattendence.Status = 'W-OFF'");
		// $this->db->where("DATE_FORMAT(calender_date,'%m')", (int) $MID);
		
		$query = $this->db->get();
		// echo $query->Status;
		echo "<pre>";
		print_r($query->result());die("ASIF");
		
		return $query->row();
	} 
	
	public function getMonthlyWeekOff($id, $YearID, $MonthID){
		$YID = $YearID;
         $MID = $MonthID;
		$this->db->select('STATUS, COUNT(STATUS) AS wcount');
		$this->db->from($this->table14);
		$this->db->where("UserId", (int) $id);
		$this->db->where("DATE_FORMAT(AttendenceDate,'%Y')", (int) $YID);
		$this->db->where("DATE_FORMAT(AttendenceDate,'%m')", (int) $MID);
		
		
		$this->db->where("employeeattendence.Status = 'W-OFF'");
		// $this->db->where("DATE_FORMAT(calender_date,'%m')", (int) $MID);
		
		$query = $this->db->get();
		// echo $query->Status;
		// echo "<pre>";
		// print_r($query->row());die("ASIF");
		
		return $query->row();
	} 
	
	public function getCL($id, $YearID, $MonthID){
		$YID = $YearID;
         $MID = $MonthID;
		$this->db->select('STATUS, COUNT(STATUS) AS wcount');
		$this->db->from($this->table14);
		$this->db->where("UserId", (int) $id);
		$this->db->where("DATE_FORMAT(AttendenceDate,'%Y')", (int) $YID);
		$this->db->where("DATE_FORMAT(AttendenceDate,'%m')", (int) $MID);
		
		
		$this->db->where("employeeattendence.Status = 'CL'");
		// $this->db->where("DATE_FORMAT(calender_date,'%m')", (int) $MID);
		
		$query = $this->db->get();
		// echo $query->Status;
		// echo "<pre>";
		// print_r($query->row());die("ASIF");
		
		return $query->row();
	} 
	public function getInputCL($id, $YearID, $MonthID){
		$YID = $YearID;
         $MID = $MonthID;
		$this->db->select('STATUS, COUNT(STATUS) AS wcount');
		$this->db->from($this->table14);
		$this->db->where("UserId", (int) $id);
		$this->db->where("DATE_FORMAT(AttendenceDate,'%Y')", (int) $YID);
		$this->db->where("DATE_FORMAT(AttendenceDate,'%m')", (int) $MID);
		
		
		$this->db->where("employeeattendence.Status = 'CL'");
		// $this->db->where("DATE_FORMAT(calender_date,'%m')", (int) $MID);
		
		$query = $this->db->get();
		// echo $query->Status;
		// echo "<pre>";
		// print_r($query->row());die("ASIF");
		
		return $query->result();
	} 
	
	public function getEL($id, $YearID, $MonthID){
		$YID = $YearID;
         $MID = $MonthID;
		$this->db->select('STATUS, COUNT(STATUS) AS wcount');
		$this->db->from($this->table14);
		$this->db->where("UserId", (int) $id);
		$this->db->where("DATE_FORMAT(AttendenceDate,'%Y')", (int) $YID);
		$this->db->where("DATE_FORMAT(AttendenceDate,'%m')", (int) $MID);
		
		
		$this->db->where("employeeattendence.Status = 'EL'");
		// $this->db->where("DATE_FORMAT(calender_date,'%m')", (int) $MID);
		
		$query = $this->db->get();
		// echo $query->Status;
		// echo "<pre>";
		// print_r($query->row());die("ASIF");
		
		return $query->row();
	} 
	public function getInputEL($id, $YearID, $MonthID){
		$YID = $YearID;
         $MID = $MonthID;
		$this->db->select('STATUS, COUNT(STATUS) AS wcount');
		$this->db->from($this->table14);
		$this->db->where("UserId", (int) $id);
		$this->db->where("DATE_FORMAT(AttendenceDate,'%Y')", (int) $YID);
		$this->db->where("DATE_FORMAT(AttendenceDate,'%m')", (int) $MID);
		
		
		$this->db->where("employeeattendence.Status = 'EL'");
		// $this->db->where("DATE_FORMAT(calender_date,'%m')", (int) $MID);
		
		$query = $this->db->get();
		// echo $query->Status;
		// echo "<pre>";
		// print_r($query->row());die("ASIF");
		
		return $query->result();
	} 
	
	public function getMD($id, $YearID, $MonthID){
		$YID = $YearID;
         $MID = $MonthID;
		$this->db->select('STATUS, COUNT(STATUS) AS wcount');
		$this->db->from($this->table14);
		$this->db->where("UserId", (int) $id);
		$this->db->where("DATE_FORMAT(AttendenceDate,'%Y')", (int) $YID);
		$this->db->where("DATE_FORMAT(AttendenceDate,'%m')", (int) $MID);
		
		
		$this->db->where("employeeattendence.Status = 'MD'");
		// $this->db->where("DATE_FORMAT(calender_date,'%m')", (int) $MID);
		
		$query = $this->db->get();
		// echo $query->Status;
		// echo "<pre>";
		// print_r($query->row());die("ASIF");
		
		return $query->row();
	} 
	public function getInputMD($id, $YearID, $MonthID){
		$YID = $YearID;
         $MID = $MonthID;
		$this->db->select('STATUS, COUNT(STATUS) AS wcount');
		$this->db->from($this->table14);
		$this->db->where("UserId", (int) $id);
		$this->db->where("DATE_FORMAT(AttendenceDate,'%Y')", (int) $YID);
		$this->db->where("DATE_FORMAT(AttendenceDate,'%m')", (int) $MID);
		
		
		$this->db->where("employeeattendence.Status = 'MD'");
		// $this->db->where("DATE_FORMAT(calender_date,'%m')", (int) $MID);
		
		$query = $this->db->get();
		// echo $query->Status;
		// echo "<pre>";
		// print_r($query->row());die("ASIF");
		
		return $query->result();
	} 
	
	public function getLWP($id, $YearID, $MonthID){
		$YID = $YearID;
         $MID = $MonthID;
		$this->db->select('STATUS, COUNT(STATUS) AS wcount');
		$this->db->from($this->table14);
		$this->db->where("UserId", (int) $id);
		$this->db->where("DATE_FORMAT(AttendenceDate,'%Y')", (int) $YID);
		$this->db->where("DATE_FORMAT(AttendenceDate,'%m')", (int) $MID);
		
		
		$this->db->where("employeeattendence.Status = 'LWP'");
		// $this->db->where("DATE_FORMAT(calender_date,'%m')", (int) $MID);
		
		$query = $this->db->get();
		// echo $query->Status;
		// echo "<pre>";
		// print_r($query->row());die("ASIF");
		
		return $query->row();
	} 
	public function getInputLWP($id, $YearID, $MonthID){
		$YID = $YearID;
         $MID = $MonthID;
		$this->db->select('STATUS, COUNT(STATUS) AS wcount');
		$this->db->from($this->table14);
		$this->db->where("UserId", (int) $id);
		$this->db->where("DATE_FORMAT(AttendenceDate,'%Y')", (int) $YID);
		$this->db->where("DATE_FORMAT(AttendenceDate,'%m')", (int) $MID);
		
		
		$this->db->where("employeeattendence.Status = 'LWP'");
		// $this->db->where("DATE_FORMAT(calender_date,'%m')", (int) $MID);
		
		$query = $this->db->get();
		// echo $query->Status;
		// echo "<pre>";
		// print_r($query->row());die("ASIF");
		
		return $query->result();
	} 
	
	public function getP($id, $YearID, $MonthID){
		$YID = $YearID;
         $MID = $MonthID;
		$this->db->select('STATUS, COUNT(STATUS) AS wcount');
		$this->db->from($this->table14);
		$this->db->where("UserId", (int) $id);
		$this->db->where("DATE_FORMAT(AttendenceDate,'%Y')", (int) $YID);
		$this->db->where("DATE_FORMAT(AttendenceDate,'%m')", (int) $MID);
		
		
		$this->db->where("employeeattendence.Status = 'P'");
		// $this->db->where("DATE_FORMAT(calender_date,'%m')", (int) $MID);
		
		$query = $this->db->get();
		// echo $query->Status;
		// echo "<pre>";
		// print_r($query->row());die("ASIF");
		
		return $query->row();
	} 
	public function getInputP($id, $YearID, $MonthID){
		$YID = $YearID;
         $MID = $MonthID;
		$this->db->select('STATUS, COUNT(STATUS) AS wcount');
		$this->db->from($this->table14);
		$this->db->where("UserId", (int) $id);
		$this->db->where("DATE_FORMAT(AttendenceDate,'%Y')", (int) $YID);
		$this->db->where("DATE_FORMAT(AttendenceDate,'%m')", (int) $MID);
		
		
		$this->db->where("employeeattendence.Status = 'P'");
		// $this->db->where("DATE_FORMAT(calender_date,'%m')", (int) $MID);
		
		$query = $this->db->get();
		// echo $query->Status;
		// echo "<pre>";
		// print_r($query->row());die("ASIF");
		
		return $query->result();
	} 
	
	public function getMonthDays($id, $YearID, $MonthID){
		$YID = $YearID;
         $MID = $MonthID;
		$this->db->select('AttendenceDate, COUNT(AttendenceDate) AS wcount');
		$this->db->from($this->table14);
		$this->db->where("UserId", (int) $id);
		$this->db->where("DATE_FORMAT(AttendenceDate,'%Y')", (int) $YID);
		$this->db->where("DATE_FORMAT(AttendenceDate,'%m')", (int) $MID);
		
		
		// $this->db->where("employeeattendence.Status = 'P'");
		// $this->db->where("DATE_FORMAT(calender_date,'%m')", (int) $MID);
		
		$query = $this->db->get();
		// echo $query->Status;
		// echo "<pre>";
		// print_r($query->row());die("ASIF");
		
		return $query->row();
	} 
	public function getInputMonthDays($id, $YearID, $MonthID){
		$YID = $YearID;
         $MID = $MonthID;
		$this->db->select('AttendenceDate, COUNT(AttendenceDate) AS wcount');
		$this->db->from($this->table14);
		$this->db->where("UserId", (int) $id);
		$this->db->where("DATE_FORMAT(AttendenceDate,'%Y')", (int) $YID);
		$this->db->where("DATE_FORMAT(AttendenceDate,'%m')", (int) $MID);
		
		
		// $this->db->where("employeeattendence.Status = 'P'");
		// $this->db->where("DATE_FORMAT(calender_date,'%m')", (int) $MID);
		
		$query = $this->db->get();
		// echo $query->Status;
		// echo "<pre>";
		// print_r($query->row());die("ASIF");
		
		return $query->result();
	} 
	
	public function getWorkingDays($id, $YearID, $MonthID){
		$YID = $YearID;
         $MID = $MonthID;
		$weekOffCount = $this->PayObj->getP($id, $YID, $MID);
		$inputMD = $this->PayObj->getMD($id, $YID, $MID);
		 $wkOff = $weekOffCount->wcount;
		 $countMD = $inputMD->wcount;
		 $Wd = $wkOff + $countMD/2;
		 $Wdays = (array) $Wd;
		 return $Wdays;
	}

	public function getWorkingASIFDays($id, $YearID, $MonthID){
		$YID = $YearID;
         $MID = $MonthID;
		$weekOffCount = $this->PayObj->getP($id, $YID, $MID);
		$inputMD = $this->PayObj->getMD($id, $YID, $MID);
		 $wkOff = $weekOffCount->wcount;
		 $countMD = $inputMD->wcount;
		 $Wd = $wkOff + $countMD/2;
		 // $Wdays = (array) $Wd;
		 return $Wd;
	}


	
	public function getPayRoll($id, $YearID, $MonthID){
		$YID = $YearID;
        $MID = $MonthID;
		$inputMonthlyWeekOff = $this->PayObj->getMonthlyWeekOff($id, $YID, $MID);
		$inputMonthDays = $this->PayObj->getMonthDays($id, $YID, $MID);
		$inputCL = $this->PayObj->getCL($id, $YID, $MID);
		$inputEL = $this->PayObj->getEL($id, $YID, $MID);
		$inputLWP = $this->PayObj->getLWP($id, $YID, $MID);
		$inputP = $this->PayObj->getP($id, $YID, $MID);
		$inputMD = $this->PayObj->getMD($id, $YID, $MID);
		 $MonthlyWeekOff = $inputMonthlyWeekOff->wcount;
		 $MonthDays = $inputMonthDays->wcount;
		 $CLCount = $inputCL->wcount;
		 $ELCount = $inputEL->wcount;
		 $LWPCount = $inputLWP->wcount;
		 $PCount = $inputP->wcount;
		 $countMD = $inputMD->wcount;
		 // $GPayRoll = $PCount + $CLCount + $ELCount + $MonthlyWeekOff + $countMD/2 - $LWPCount;
		 $GPayRoll = $MonthDays - $countMD/2 - $LWPCount;
			$GenaratePayRoll = (array) $GPayRoll;
		
		return $GenaratePayRoll;
	} 
	
	public function getPayASIFRoll($id, $YearID, $MonthID){
		$YID = $YearID;
        $MID = $MonthID;
		$inputMonthlyWeekOff = $this->PayObj->getMonthlyWeekOff($id, $YID, $MID);
		$inputMonthDays = $this->PayObj->getMonthDays($id, $YID, $MID);
		$inputCL = $this->PayObj->getCL($id, $YID, $MID);
		$inputEL = $this->PayObj->getEL($id, $YID, $MID);
		$inputLWP = $this->PayObj->getLWP($id, $YID, $MID);
		$inputP = $this->PayObj->getP($id, $YID, $MID);
		$inputMD = $this->PayObj->getMD($id, $YID, $MID);
		 $MonthlyWeekOff = $inputMonthlyWeekOff->wcount;
		 $MonthDays = $inputMonthDays->wcount;
		 $CLCount = $inputCL->wcount;
		 $ELCount = $inputEL->wcount;
		 $LWPCount = $inputLWP->wcount;
		 $PCount = $inputP->wcount;
		 $countMD = $inputMD->wcount;
		 // $GPayRoll = $PCount + $CLCount + $ELCount + $MonthlyWeekOff + $countMD/2 - $LWPCount;
		 $GPayRoll = $MonthDays - $countMD/2 - $LWPCount;
			// $GenaratePayRoll = (array) $GPayRoll;
		
		return $GPayRoll;
	} 
	
		public function getMonthlySalary22($id, $YearID, $MonthID, $salstatus){
		$YID = $YearID;
         $MID = $MonthID;
		 
		 if($MID > 3 and $YID > 2021 and $salstatus > 1 ){
		$inputSalary = $this->PayObj->getSalary($id);
		 }else{
			$inputSalary = $this->PayObj->getSalary21($id);
		 }
		$inputLWP = $this->PayObj->getLWP($id, $YID, $MID);
		$inputMD = $this->PayObj->getMD($id, $YID, $MID);
		
		  $SCount = $inputSalary->monthlySalary;
		 // $yi = $inputSalary->yearly_increment_22;
if($MID > 3 and $YID > 2021  ){
		$SalaryCount = str_replace(',', '', $SCount) + str_replace(',', '', $yi);
}else{

$SalaryCount = str_replace(',', '', $SCount);	
}		 
		 $salaryMonth = 30;
		 $PerDaySalary = (int)$SalaryCount/30;
		 // die;
		 $LWPCount = $inputLWP->wcount;
		 $countMD = $inputMD->wcount;
		 $Wdays = 30 - $countMD/2 - $LWPCount;
		 $salaryGPerMonth = round($Wdays * $PerDaySalary);
		$salaryGeneratePerMonth = (array) $salaryGPerMonth;
		return $salaryGeneratePerMonth;
	}
	
	
	
	
	
	public function getMonthlySalary($id, $YearID, $MonthID){
		$YID = $YearID;
         $MID = $MonthID;
		 
		 if($MID > 3 and $YID > 2021 ){
		$inputSalary = $this->PayObj->getSalary($id);
		 }else{
			$inputSalary = $this->PayObj->getSalary21($id);
		 }
		$inputLWP = $this->PayObj->getLWP($id, $YID, $MID);
		$inputMD = $this->PayObj->getMD($id, $YID, $MID);
		
		  $SCount = $inputSalary->monthlySalary;
		 // $yi = $inputSalary->yearly_increment_22;
if($MID > 3 and $YID > 2021 ){
		$SalaryCount = str_replace(',', '', $SCount) + str_replace(',', '', $yi);
}else{

$SalaryCount = str_replace(',', '', $SCount);	
}		 
		 $salaryMonth = 30;
		 $PerDaySalary = (int)$SalaryCount/30;
		 // die;
		 $LWPCount = $inputLWP->wcount;
		 $countMD = $inputMD->wcount;
		 $Wdays = 30 - $countMD/2 - $LWPCount;
		 $salaryGPerMonth = round($Wdays * $PerDaySalary);
		$salaryGeneratePerMonth = (array) $salaryGPerMonth;
		return $salaryGeneratePerMonth;
	}
	
	public function getPerDaySalary($id, $YearID, $MonthID){
		$YID = $YearID;
         $MID = $MonthID;
		$inputSalary = $this->PayObj->getSalary($id);
		$inputLWP = $this->PayObj->getLWP($id, $YID, $MID);
		$inputMD = $this->PayObj->getMD($id, $YID, $MID);
		 $WeekOff = $this->PayObj->getweekOff($id, $YID, $MID);
		print_r($WeekOff);die;
		  $SCount = $inputSalary->monthlySalary;
		$SalaryCount = str_replace(',', '', $SCount);
		 
		 $salaryMonth = 30;
		 $PerDaySalary = (int)$SalaryCount/30;
		 // die;
		 $LWPCount = $inputLWP->wcount;
		 $countMD = $inputMD->wcount;
		 $Wdays = 30 - $countMD/2 - $LWPCount;
		 $salaryGPerMonth = round($Wdays * $PerDaySalary);
		$salaryGeneratePerMonth = (array) $salaryGPerMonth;
		return $salaryGeneratePerMonth;
	}
	
	
	
	
	public function getMonthlyASIFSalary($id, $YearID, $MonthID){
		$YID = $YearID;
         $MID = $MonthID;

		if($MID > 3 and $YID > 2021 ){
		$inputSalary = $this->PayObj->getSalary($id);
		 }else{
			$inputSalary = $this->PayObj->getSalary21($id);
		 }
		



		$inputLWP = $this->PayObj->getLWP($id, $YID, $MID);
		$inputMD = $this->PayObj->getMD($id, $YID, $MID);
		
		  $SCount = $inputSalary->monthlySalary;
		$SalaryCount = str_replace(',', '', $SCount);
		 
		 $salaryMonth = 30;
		 $PerDaySalary = (int)$SalaryCount/30;
		 // die;
		 $LWPCount = $inputLWP->wcount;
		 $countMD = $inputMD->wcount;
		 $Wdays = 30 - $countMD/2 - $LWPCount;
		 $salaryGPerMonth = round($Wdays * $PerDaySalary);
		// $salaryGeneratePerMonth = (array) $salaryGPerMonth;
		return $salaryGPerMonth;
	}
	
	
	
	
	public function getMonthlyDeduction($id, $YearID, $MonthID){
		$YID = $YearID;
         $MID = $MonthID;
		$inputSalary = $this->PayObj->getSalary($id);
		$inputLWP = $this->PayObj->getLWP($id, $YID, $MID);
		$inputMD = $this->PayObj->getMD($id, $YID, $MID);
		
		  $SCount = $inputSalary->monthlySalary;
		$SalaryCount = str_replace(',', '', $SCount);
		 
		 $salaryMonth = 30;
		 $PerDaySalary = (int)$SalaryCount/30;
		 // die;
		 $LWPCount = $inputLWP->wcount;
		 $countMD = $inputMD->wcount;
		 $Wdays = $countMD/2 + $LWPCount;
		 $salaryDPerMonth = ceil($Wdays * $PerDaySalary);
		$salaryDeductPerMonth = (array) $salaryDPerMonth;
		return $salaryDeductPerMonth;
	}
	
	public function getMonthlyASIFDeduction($id, $YearID, $MonthID){
		$YID = $YearID;
         $MID = $MonthID;
		$inputSalary = $this->PayObj->getSalary($id);
		$inputLWP = $this->PayObj->getLWP($id, $YID, $MID);
		$inputMD = $this->PayObj->getMD($id, $YID, $MID);
		
		  $SCount = $inputSalary->monthlySalary;
		$SalaryCount = str_replace(',', '', $SCount);
		 
		 $salaryMonth = 30;
		 $PerDaySalary = (int)$SalaryCount/30;
		 // die;
		 $LWPCount = $inputLWP->wcount;
		 $countMD = $inputMD->wcount;
		 $Wdays = $countMD/2 + $LWPCount;
		 $salaryDPerMonth = ceil($Wdays * $PerDaySalary);
		// $salaryDeductPerMonth = (array) $salaryDPerMonth;
		return $salaryDPerMonth;
	}
	
	public function getSalary21($id){
		$query = $this->db->get_where($this->table77, ['UserId'=> (int) $id]);
		return $query->row();
	}
	
	
	
	public function getSalary($id){
		$query = $this->db->get_where($this->table7, ['UserId'=> (int) $id]);
		return $query->row();
	}
	
	
	
	
	
	public function getMonthlySalaryInWord($id, $YearID, $MonthID){
		$YID = $YearID;
         $MID = $MonthID;
		
		 if($MID > 3 and $YID > 2021 ){
		$inputSalary = $this->PayObj->getSalary($id);
		 }else{
			$inputSalary = $this->PayObj->getSalary21($id);
		 }
		$inputLWP = $this->PayObj->getLWP($id, $YID, $MID);
		$inputMD = $this->PayObj->getMD($id, $YID, $MID);
		
		  $SCount = $inputSalary->monthlySalary;
		$SalaryCount = str_replace(',', '', $SCount);
		 
		 $salaryMonth = 30;
		 $PerDaySalary = (int)$SalaryCount/30;
		 // die;
		 $LWPCount = $inputLWP->wcount;
		 $countMD = $inputMD->wcount;
		 $Wdays = 30 - $countMD/2 - $LWPCount;
		 $salaryGPerMonth = ceil($Wdays * $PerDaySalary);
		$salaryGeneratePerMonth = (array) $salaryGPerMonth;
		// $salaryInword =  displaywords($salaryGeneratePerMonth);
		return $salaryGeneratePerMonth;
	}
	
 
			 
	public function getMonthlySalaryInWord22($id, $YearID, $MonthID, $salstatus){
		$YID = $YearID;
         $MID = $MonthID;
		
		 if($MID > 3 and $YID > 2021  and $salstatus > 1){
		$inputSalary = $this->PayObj->getSalary($id);
		 }else{
			$inputSalary = $this->PayObj->getSalary21($id);
		 }
		$inputLWP = $this->PayObj->getLWP($id, $YID, $MID);
		$inputMD = $this->PayObj->getMD($id, $YID, $MID);
		
		  $SCount = $inputSalary->monthlySalary;
		$SalaryCount = str_replace(',', '', $SCount);
		 
		 $salaryMonth = 30;
		 $PerDaySalary = (int)$SalaryCount/30;
		 // die;
		 $LWPCount = $inputLWP->wcount;
		 $countMD = $inputMD->wcount;
		 $Wdays = 30 - $countMD/2 - $LWPCount;
		 $salaryGPerMonth = ceil($Wdays * $PerDaySalary);
		$salaryGeneratePerMonth = (array) $salaryGPerMonth;
		// $salaryInword =  displaywords($salaryGeneratePerMonth);
		return $salaryGeneratePerMonth;
	}
	
	
	public function getMonthlyASIFSalaryInWord($id, $YearID, $MonthID){
		$YID = $YearID;
         $MID = $MonthID;
        
		if($MID > 3 and $YID > 2021 ){
		$inputSalary = $this->PayObj->getSalary($id);
		 }else{
			$inputSalary = $this->PayObj->getSalary21($id);
		 }
		
		$inputLWP = $this->PayObj->getLWP($id, $YID, $MID);
		$inputMD = $this->PayObj->getMD($id, $YID, $MID);
		
		  $SCount = $inputSalary->monthlySalary;
		$SalaryCount = str_replace(',', '', $SCount);
		 
        
        

		 
		 $salaryMonth = 30;
		 $PerDaySalary = (int)$SalaryCount/30;
		 // die;
		 $LWPCount = $inputLWP->wcount;
		 $countMD = $inputMD->wcount;
		 $Wdays = 30 - $countMD/2 - $LWPCount;
		// $salaryGPerMonth = ceil($Wdays * $PerDaySalary);
		// $salaryGeneratePerMonth = (array) $salaryGPerMonth;
		// $salaryInword =  displaywords($salaryGPerMonth);
 $salaryGPerMonth = ceil($Wdays * $PerDaySalary);
		// $salaryGeneratePerMonth = (array) $salaryGPerMonth;
		// $salaryInword =  displaywords($salaryGPerMonth);
		return $this->PayObj->displaywords($salaryGPerMonth);
//displaywords




		//return $salaryGPerMonth;
	}
	
	

	
public function displaywords($number){
		$number = trim($number);
   $no = (int)floor($number);
   $point = (int)round(($number - $no) * 100);
   $hundred = null;
   $digits_1 = strlen($no);
   $i = 0;
   $str = array();
   $words = array('0' => '', '1' => 'one', '2' => 'two',
    '3' => 'three', '4' => 'four', '5' => 'five', '6' => 'six',
    '7' => 'seven', '8' => 'eight', '9' => 'nine',
    '10' => 'ten', '11' => 'eleven', '12' => 'twelve',
    '13' => 'thirteen', '14' => 'fourteen',
    '15' => 'fifteen', '16' => 'sixteen', '17' => 'seventeen',
    '18' => 'eighteen', '19' =>'nineteen', '20' => 'twenty',
    '30' => 'thirty', '40' => 'forty', '50' => 'fifty',
    '60' => 'sixty', '70' => 'seventy',
    '80' => 'eighty', '90' => 'ninety');
   $digits = array('', 'hundred', 'thousand', 'lakh', 'crore');
   while ($i < $digits_1) {
     $divider = ($i == 2) ? 10 : 100;
     $number = floor($no % $divider);
     $no = floor($no / $divider);
     $i += ($divider == 10) ? 1 : 2;


     if ($number) {
        $plural = (($counter = count($str)) && $number > 9) ? ' ' : null;
        $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
        $str [] = ($number < 21) ? $words[$number] .
            " " . $digits[$counter] . $plural . " " . $hundred
            :
            $words[floor($number / 10) * 10]
            . " " . $words[$number % 10] . " "
            . $digits[$counter] . $plural . " " . $hundred;
     } else $str[] = null;
  }
  $str = array_reverse($str);
  $result = implode('', $str);


  if ($point > 20) {
    $points = ($point) ?
      "" . $words[floor($point / 10) * 10] . " " . 
          $words[$point = $point % 10] : ''; 
  } else {
      $points = $words[$point];
  }
  if($points != ''){        
      return strtoupper($result . "Rupees  " . $points . " Paise Only");
  } else {

      return strtoupper($result . "Rupees Only");
  }

}

	public function getEmp($id){
		$query = $this->db->get_where($this->table1, ['id'=> (int) $id]);
		return $query->row();
	} 
	

	
	
}



?>