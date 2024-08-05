<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SalaryBreakUpModel extends CI_Model {
	
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
	public $table18 = 'salary_breakup';
	public $table19 = 'salary_breakupinput';
	
	
	public function getSalaryBreakUpdata(){
		$query = $this->db->get($this->table18);
		return $query->row();
	} 
	
	public function getUserBreakUpdata(){
		$query = $this->db->get($this->table19);
		return $query->row();
	} 
	
	public function getUserBreakUp(){
		$query = $this->db->get($this->table19);
		return $query->result();
	} 
	
	
	
	public function getSalaryBreakUpView(){
		$query = $this->db->get($this->table18);
		return $query->result();
	} 
	
	public function SalarybreakUpUpdate($id, $BreakUpData){
		$this->db->where('sc_id', (int) $id);
		$this->db->update($this->table18, $BreakUpData);
		return $this->db->affected_rows();
	} 
	
	public function UpadteUserbreakUp($id, $BreakUpData){
		$this->db->where('sb_Id', (int) $id);
		$this->db->update($this->table19, $BreakUpData);
		return $this->db->affected_rows();
	} 
	
	
	
	
	public function getBasicYearly($basic, $GrossSalaryM, $GrossSalary){
		// $brSalary = $this->getSalaryBreakUpdata();
        
		 if($GrossSalaryM != 1){
			$basic;
			$basicPercent = $basic/100;
			$GrossSalary;
			$YearLyCal = $GrossSalary * 12;
			$CalSal = $YearLyCal * $basicPercent;
			$NetSalary = (array) $CalSal;
			return $NetSalary;
		 }else{
			
			$basic;
			$basicPercent = $basic/100;
			$GrossSalary;
			$CalSal = $GrossSalary * $basicPercent;
			// $YearLyCal = $CalSal / 12; die;
			$NetSalary = (array) $CalSal;
			return $NetSalary;
		 }
		 
		
	} 
	
	public function getBasicMonthly($basic, $GrossSalaryM, $GrossSalary){
		 if($GrossSalaryM != 1){
			$basic;
			$basicPercent = $basic/100;
			$GrossSalary ;
			$CalSal = $GrossSalary * $basicPercent;
			// $MonthlyCal = round($CalSal / 12); 
			$NetSalary = (array) $CalSal;
			return $NetSalary;
 
		 }else{
			$basic;
			$basicPercent = $basic/100;
			$GrossSalary ;
			$CalSal = $GrossSalary * $basicPercent;
			$MonthlyCal = round($CalSal / 12); 
			$NetSalary = (array) $MonthlyCal;
			return $NetSalary;
 
		 }
	} 
	
	
	public function getHRAYearly($basic, $GrossSalaryM, $GrossSalary){
		
		if($GrossSalaryM != 1){
			$basic;//die; // = $this->input->get('basic');die;
		 $basicPercent = $basic/100;
		$GrossSalary;
		$YearLyCal = $GrossSalary * 12;
		$CalSal = $YearLyCal * $basicPercent;
		 $NetSalary = (array) $CalSal;
		 return $NetSalary;
		 
		}else{
			$basic;//die; // = $this->input->get('basic');die;
		 $basicPercent = $basic/100;
		$GrossSalary;
		$CalSal = $GrossSalary * $basicPercent;
		// $YearLyCal = $CalSal / 12; die;
		 $NetSalary = (array) $CalSal;
		 return $NetSalary;
		}
		
        
	} 
	
	public function getHRAMonthly($basic, $GrossSalaryM, $GrossSalary){
		 if($GrossSalaryM != 1){
			$basic;
			$basicPercent = $basic/100;
			$GrossSalary ;
			$CalSal = $GrossSalary * $basicPercent;
			// $MonthlyCal = round($CalSal / 12); 
			$NetSalary = (array) $CalSal;
			return $NetSalary;
 
		 }else{
			$basic;
			$basicPercent = $basic/100;
			$GrossSalary ;
			$CalSal = $GrossSalary * $basicPercent;
			$MonthlyCal = round($CalSal / 12); 
			$NetSalary = (array) $MonthlyCal;
			return $NetSalary;
 
		 }
	} 
	
	
	
	public function getDAYearly($basic, $GrossSalaryM, $GrossSalary){
		if($GrossSalaryM != 1){
			$basic;//die; // = $this->input->get('basic');die;
		 $basicPercent = $basic/100;
		$GrossSalary;
		$YearLyCal = $GrossSalary * 12;
		$CalSal = $YearLyCal * $basicPercent;
		 $NetSalary = (array) $CalSal;
		 return $NetSalary;
		 
		}else{
			$basic;//die; // = $this->input->get('basic');die;
		 $basicPercent = $basic/100;
		$GrossSalary;
		$CalSal = $GrossSalary * $basicPercent;
		// $YearLyCal = $CalSal / 12; die;
		 $NetSalary = (array) $CalSal;
		 return $NetSalary;
		}
	} 
	
	public function getDAMonthly($basic, $GrossSalaryM, $GrossSalary){
		 if($GrossSalaryM != 1){
			$basic;
			$basicPercent = $basic/100;
			$GrossSalary ;
			$CalSal = $GrossSalary * $basicPercent;
			// $MonthlyCal = round($CalSal / 12); 
			$NetSalary = (array) $CalSal;
			return $NetSalary;
 
		 }else{
			$basic;
			$basicPercent = $basic/100;
			$GrossSalary ;
			$CalSal = $GrossSalary * $basicPercent;
			$MonthlyCal = round($CalSal / 12); 
			$NetSalary = (array) $MonthlyCal;
			return $NetSalary;
 
		 }
	} 
	
	
	public function getConveyanceYearly($basic, $GrossSalaryM, $GrossSalary){
		if($GrossSalaryM != 1){
			$basic;//die; // = $this->input->get('basic');die;
		 $basicPercent = $basic/100;
		$GrossSalary;
		$YearLyCal = $GrossSalary * 12;
		$CalSal = $YearLyCal * $basicPercent;
		 $NetSalary = (array) $CalSal;
		 return $NetSalary;
		 
		}else{
			$basic;//die; // = $this->input->get('basic');die;
		 $basicPercent = $basic/100;
		$GrossSalary;
		$CalSal = $GrossSalary * $basicPercent;
		// $YearLyCal = $CalSal / 12; die;
		 $NetSalary = (array) $CalSal;
		 return $NetSalary;
		}
	} 
	
	public function getConveyanceMonthly($basic, $GrossSalaryM, $GrossSalary){
		 if($GrossSalaryM != 1){
			$basic;
			$basicPercent = $basic/100;
			$GrossSalary ;
			$CalSal = $GrossSalary * $basicPercent;
			// $MonthlyCal = round($CalSal / 12); 
			$NetSalary = (array) $CalSal;
			return $NetSalary;
 
		 }else{
			$basic;
			$basicPercent = $basic/100;
			$GrossSalary ;
			$CalSal = $GrossSalary * $basicPercent;
			$MonthlyCal = round($CalSal / 12); 
			$NetSalary = (array) $MonthlyCal;
			return $NetSalary;
 
		 }
	} 
	
	public function getGrossY($GrossSalaryM, $GrossSalary){
		if($GrossSalaryM != 1){
			$GrossSalary ;
		
		// $MonthlyCal = round($GrossSalary * 12); 
		 $NetSalary = (array) $GrossSalary;
		 return $NetSalary;
		}else{
			$GrossSalary ;
		
		$MonthlyCal = round($GrossSalary / 12); 
		 $NetSalary = (array) $MonthlyCal;
		 return $NetSalary;
		}
		
	} 
	
	public function getGrossM($GrossSalaryM, $GrossSalary){
		if($GrossSalaryM != 1){
			$GrossSalary ;
			$MonthlyCal = round($GrossSalary * 12);
		 $NetSalary = (array) $MonthlyCal;
		 return $NetSalary;
		}else{
			$GrossSalary ;
		 $NetSalary = (array) $GrossSalary;
		 return $NetSalary;
		}
		
	} 
	
	
	
	

	
	
}



?>