<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HrModel extends CI_Model {
	
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
	public $table15 = 'employee_kpigoals';
	
	
	
	public function updateUser($id, $data1){
		$this->db->where('id', (int) $id);
		$this->db->update($this->table1, $data1);
		return $this->db->affected_rows();
    }
	

public function getKPImarksbyId($id){
		
		$query = $this->db->get_where($this->table14, ['employeeKPI_Id'=> (int) $id]);
		return $query->result();
	}



	
	public function updateUserDetails($id, $data2){
		$this->db->where('UserId', (int) $id);
		$this->db->update($this->table2, $data2);
		return $this->db->affected_rows(); 
    } 
	
	
	public function updateEducation($id, $data3){
		
		if(!empty($this->input->post('examPassed'))){
			$this->removeEducation($id);
		
		
			foreach($this->input->post('examPassed') as $key=>$val){
			
			$insertData = [
				'UserId'=> $id,
			'examPassed' => $val,
			'examYear' => $this->input->post('examYear')[$key],
			'examBoard' => $this->input->post('examBoard')[$key],
			'marks' => $this->input->post('marks')[$key],
			
			];
			
			
			
			$this->db->insert($this->table3, $insertData);
			
			}
		}
		return $this->db->affected_rows();
    
    }

	public function updateCourse($id, $data4){
			//print_r($_POST);die;
		//$this->db->insert('tickets',  $data2);
		if(!empty($this->input->post('coursePassed'))){
			$this->removeCourse($id);
			foreach($this->input->post('coursePassed') as $key=>$val){
			
			$insertData = [
			'UserId'=> $id,
			'coursePassed' => $val,
			'courseYear' => $this->input->post('courseYear')[$key],
			'courseBoard' => $this->input->post('courseBoard')[$key],
			'courseMarks' => $this->input->post('courseMarks')[$key],
			
			];
			
			// echo "<pre>";
			// print_r($insertData);die;
				
				$this->db->insert($this->table4, $insertData);
			
			}
		}
		return $this->db->affected_rows();
    
    }


	
	
	public function updateBankInfo($id, $data5){
   
		if(!empty($this->input->post('bankName'))){
			$this->removeBank($id);
			foreach($this->input->post('bankName') as $key=>$val){
		
			$insertData = [
				'UserId'=> $id,
			'bankName' => $val,
			'bankAccount' => $this->input->post('bankAccount')[$key],
			'bankBranch' => $this->input->post('bankBranch')[$key],
			'bankIFSCCode' => $this->input->post('bankIFSCCode')[$key],
			
			];
			
			$this->db->insert($this->table5, $insertData);
		// $this->db->insert('employee_bankaccount',  $insertData);
			}
		}
		return $this->db->affected_rows(); 
    } 

	public function updateExperienceInfo($id, $data6){
		
		if(!empty($this->input->post('experienceDesignation'))){
			$this->removeExperience($id);
			foreach($this->input->post('experienceDesignation') as $key=>$val){
			
			$insertData = [
				'UserId'=> $id,
			'experienceDesignation' => $val,
			'experienceOrganisation' => $this->input->post('experienceOrganisation')[$key],
			'experienceDuration' => $this->input->post('experienceDuration')[$key],
			'experienceTotal' => $this->input->post('experienceTotal')[$key],
			'previousSalary' => $this->input->post('previousSalary')[$key]
			
			];
			
			$this->db->insert($this->table6, $insertData);
			
			}
		}
		
		return $this->db->affected_rows(); 
    } 



public function updateKPIPointsInfo($data6){
		
	if(!empty($this->input->post('kpiGoal_Points'))){
		
		$User_Id = $this->input->post('UserId');
		$YearId = $this->input->post('Year_Id');
		$monthId = $this->input->post('month_Id');
		$this->removePointsKPI($User_Id, $YearId, $monthId);
		foreach($this->input->post('kpiGoal_Points') as $key=>$val){
		
		$insertData = [
			'UserId'=> $User_Id,
			'Year_Id'=> $YearId,
			'month_Id'=> $monthId,
		'kpiGoal_Points' => $val,
		'kpi_marks' => $this->input->post('kpi_marks')[$key],
		'afterKpi_marks' => $this->input->post('afterKpi_marks')[$key],
		
		];
		
		$this->db->insert($this->table14, $insertData);
		
		}
	}
	
	return $this->db->affected_rows(); 
} 





public function updateCompanyGoalsInfo($data6){
		
	if(!empty($this->input->post('goal_points'))){
		
		$YearId = $this->input->post('Year_Id');
		
		$this->removeCompanyGoal($YearId);
		foreach($this->input->post('goal_points') as $key=>$val){
		
		$insertData = [
			'Year_Id'=> $YearId,
		'goal_points' => $val,
		'assignee' => $this->input->post('assignee')[$key],
		'goal_comments' => $this->input->post('goal_comments')[$key],
		'work_status' => $this->input->post('work_status')[$key],
		
		];
		
		$this->db->insert($this->table12, $insertData);
		
		}
	}
	
	return $this->db->affected_rows(); 
} 









	public function updateSalary($id, $data7){
			if(!empty($id)){
				$this->removeSalary($id);
				$this->db->insert('employee_salary',  $data7);
				return $this->db->affected_rows();; 
			} 
    } 
	
	
	public function insertkpi($data7){
			echo "kkk";
				$this->db->insert('kpi_submission',  $data7);
				return $this->db->affected_rows();; 
			
    } 
	
	
	
	
	
	public function updateDocuments($id, $data8){
		$this->db->where('UserId', (int) $id);
		$this->db->update($this->table8, $data8);
		return $this->db->affected_rows();
	
	} 
	
	
	public function updateProfileImage($id, $data9){
		if(!empty($id)){
			$this->removeIamge($id);
			$this->db->insert($this->table9, $data9);
			return $this->db->affected_rows();
		
		}
		
	 
    } 

	public function updateLeftEmployeeDetails($data10){
		// print_r($_POST);
		// echo $id; die;
	 if(!empty($id)){
			$this->db->where('UserId', (int) $id);
			$this->db->update($this->table2, $data10);
			return $this->db->affected_rows();
		}
		else {

			$this->db->insert($this->table10, $data10);
			return $this->db->affected_rows();
		}
    } 

	public function removeEducation($id){
		
		$this->db->where_in('UserId', $id);
		$this->db->delete($this->table3);
		return $this->db->affected_rows();
	}
	
	public function removeCourse($id){
		
		$this->db->where_in('UserId', $id);
		$this->db->delete($this->table4);
		return $this->db->affected_rows();
	}
	
	public function removeIamge($id){
		
		$this->db->where_in('UserId', $id);
		$this->db->delete($this->table9);
		return $this->db->affected_rows();
	}
	
	
	public function removePointsKPI($User_Id, $YearId, $monthId){
		
		$this->db->where('UserId', $User_Id);
		$this->db->where('Year_Id', $YearId);
		$this->db->where('month_Id', $monthId);
		$this->db->delete($this->table14);
		return $this->db->affected_rows();
	}
	
	public function removeCompanyGoal($YearId){
		
		$this->db->where('Year_Id', $YearId);
		$this->db->delete($this->table12);
		return $this->db->affected_rows();
	}
	
	public function removeTeamGoal($designId, $YearId){
		
		$this->db->where('designation_Id', $designId);
		$this->db->where('Year_Id', $YearId);
		$this->db->delete($this->table13);
		return $this->db->affected_rows();
	}
	
	
	
	
	
	
	
	public function removeSalary($id){
		
		$this->db->where_in('UserId', $id);
		$this->db->delete('employee_salary');
		return $this->db->affected_rows();
	}
	
	public function removeBank($id){
		
		$this->db->where_in('UserId', $id);
		$this->db->delete($this->table5);
		return $this->db->affected_rows();
	}
	
	public function removeExperience($id){
		
		$this->db->where_in('UserId', $id);
		$this->db->delete($this->table6);
		return $this->db->affected_rows();
	}
	
	public function insert_data1($data1){
    $this->db->trans_start();
    //$this->db->query("INSERT INTO customers($data1) VALUES ()");
    $this->db->insert('goals_year', $data1);
    $user_id=$this->db->insert_id();
    $this->db->trans_complete();
    return $user_id; 
    }
	
	
	public function insert_Title($last_user_id, $data7){
    $this->db->trans_start();
    $this->db->insert('company_goals', $data7);
   
    $this->db->trans_complete();
    return true; 
    }
	
	public function insertYearGoals($data6){
    $this->db->trans_start();
	
	foreach($this->input->post('goal_points') as $key=>$val){
	
	$insertData = [
	'Year_Id'=> $this->input->post('Year_Id'),
	'goal_points' => $val,
	
	'assignee' => $this->input->post('assignee')[$key]
	
	];
    //$this->db->insert('tickets',  $data2);
    $this->db->insert('companygoals_points',  $insertData);
    }
    $this->db->trans_complete();
    return true; 
    }

	
	public function TeamGoalsTitle($data1){
    $this->db->trans_start();
    //$this->db->query("INSERT INTO customers($data1) VALUES ()");
    $this->db->insert('company_goals', $data1);
    $user_id=$this->db->insert_id();
    $this->db->trans_complete();
    return $user_id; 
    }
	
	public function TeamGoalsPoints($designationId, $data6){
    
	$designId = $designationId;
	// print_r($_POST);die;
	foreach($this->input->post('seogoal_points') as $key=>$val){
	
	$insertData = [
	
	'designation_Id' => $designId,
	'Year_Id' => $this->input->post('Year_Id'),
	'seogoal_points' => $val,
	'work_status' => $this->input->post('work_status')[$key]
	
	];
	
    $this->db->insert('seogoalpoints',  $insertData);
    }
    
    return true; 
    }
	
	
	
	
public function updateSeoGoalsInfo($designationId, $data6){
		
	if(!empty($this->input->post('seogoal_points'))){
		$designId = $designationId;
		$YearId = $this->input->post('Year_Id');
		
		$this->removeTeamGoal($designId, $YearId);
		foreach($this->input->post('seogoal_points') as $key=>$val){
		
		$insertData = [
			'Year_Id'=> $YearId,
			'designation_Id' => $designId,
		'seogoal_points' => $val,
		'seogoal_comments' => $this->input->post('seogoal_comments')[$key],
		'work_status' => $this->input->post('work_status')[$key],
		
		];
		
		$this->db->insert($this->table13, $insertData);
		
		}
	}
	
	return $this->db->affected_rows(); 
} 



	
	
	public function companyGoalPoint(){
		$query = $this->db->get_where('companygoals_points');
		return $query->result();
	}
	
	
	public function CompanyYearlyGoals(){
		$query = $this->db->get_where('companygoals_points');
		return $query->result();
	}
	
	public function YearGoal(){
		$query = $this->db->get('goals_year');
		return $query->result();
	}
	
	public function KPIMonth(){
		$query = $this->db->select()->get_where('goals_month');
		return $query->result();
	}
	
	public function goalTeamDesignation(){
		$query = $this->db->get('teamdesignation');
		// print_r($query->result());
		
		return $query->result();
	}
	
	public function goalPintsYearWise($YearID){
		
		$query = $this->db->get_where('companygoals_points', ['Year_Id'=> (int) $YearID]);
		return $query->result();
	}
	
	public function goalPintsIdWise($id){
		
		$query = $this->db->get_where('companygoals_points', ['goalpoints_Id'=> (int) $id]);
		return $query->result();
	}
	
	public function SeoGoalPintsYearWise($YearID){
		
		$this->db->select();
		$this->db->from('seogoalpoints');
		$query = $this->db->where(['Year_Id'=> (int) $YearID]);
		$query = $this->db->where(['designation_Id'=> 1]);
		$query = $this->db->get();
		return $query->result();
	}
	
	public function ContentWriterGoalPintsYearWise($YearID){
		
		$this->db->select();
		$this->db->from('seogoalpoints');
		$query = $this->db->where(['Year_Id'=> (int) $YearID]);
		$query = $this->db->where(['designation_Id'=> 2]);
		$query = $this->db->get();
		return $query->result();
	}
	
	
	public function TeamGoalByYearAndPosition($PositionID, $YearID){
		// echo $PositionID; die;
		$this->db->select();
		$this->db->from('seogoalpoints');
		$query = $this->db->where(['designation_Id'=> (int) $PositionID]);
		$query = $this->db->where(['Year_Id'=> (int) $YearID]);
		$query = $this->db->get();
		return $query->result();
	}
	
	public function TeamGoalsByYearAndUserId($Id, $YearID){
		// echo $PositionID; die;
		
		
		$this->db->select();
		$this->db->from('seogoalpoints');
		$query = $this->db->where(['designation_Id'=> (int) $PositionID]);
		$query = $this->db->where(['Year_Id'=> (int) $YearID]);
		$query = $this->db->get();
		return $query->result();
	}
	
	
	
	public function DeveloperGoalPintsYearWise($YearID){
		
		$this->db->select();
		$this->db->from('seogoalpoints');
		$query = $this->db->where(['Year_Id'=> (int) $YearID]);
		$query = $this->db->where(['designation_Id'=> 3]);
		$query = $this->db->get();
		return $query->result();
	}
	
	
	public function DesignerGoalPintsYearWise($YearID){
		
		$this->db->select();
		$this->db->from('seogoalpoints');
		$query = $this->db->where(['Year_Id'=> (int) $YearID]);
		$query = $this->db->where(['designation_Id'=> 4]);
		$query = $this->db->get();
		return $query->result();
	}
	
	public function getEmpUser(){
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->where(['employeeStatus'=>'Active']);
		$this->db->where(['tbl_user.type'=>'User']);
		$query = $this->db->get();
		// $this->db->order_by('sort_order ASC');
		// echo "<pre>";
		// print_r($query->result());die("ASIF");
		return $query->result();
	} 
	
	
	public function KPIGoalsPoints($dataKPI){
    // print_r($_POST);die;
	foreach($this->input->post('kpiGoal_Points') as $key=>$val){
	
	$insertData = [
	
	'UserId' => $this->input->post('User_Id'),
	'Year_Id' => $this->input->post('Year_Id'),
	'month_Id' => $this->input->post('month_Id'),
	'kpiGoal_Points' => $val,
	'kpi_marks' => $this->input->post('kpi_marks')[$key],
	// 'kpiGoal_Comments' => $this->input->post('kpiGoal_Comments')[$key]
	
	];
    //$this->db->insert('tickets',  $data2);
    $this->db->insert('employee_kpigoals',  $insertData);
    }
    
    return true; 
    }
	public function getempKPIUser($UserId){
		// echo $UserId; die;
		$query = $this->db->get_where($this->table1, ['id'=> (int) $UserId]);
		return $query->result();
	} 
	
	public function KPIPintsMonthWise($UserId, $Year_Id, $month_Id){
		// print_r($_GET);die;
		
		$Year_Id= $this->input->get('YearID');
		$month_Id= $this->input->get('MonthID');
		$UserId;
		
		
		// $Id= $this->input->get('month_Id');
		// echo $Id;
		// die;
		
		$this->db->select();
		$query = $this->db->where(['Year_Id'=> (int) $Year_Id, 'month_Id'=> (int) $month_Id, 'UserId'=> (int) $UserId]);
		$this->db->from('employee_kpigoals');
		// $query = $this->db->where([]);
		$query = $this->db->get();
		// print_r($query->result());die;
		return $query->result();
	}
	
	
	public function KPIPintsAchieMonthWise($UserId, $Year_Id, $month_Id){
		
		$this->db->select();
		$query = $this->db->where(['UserId'=> (int) $UserId, 'Year_Id'=> (int) $Year_Id, 'month_Id'=> (int) $month_Id]);
		$this->db->from('employee_kpigoals');
		// $query = $this->db->where([]);
		$query = $this->db->get();
		// print_r($query->result());die;
		return $query->result();
	}
	
	
	
	
	
	public function getKPIMarksAndComments($UserId, $Year_Id, $month_Id){
		// print_r($_GET);die;
		// echo $month_Id; die;
		// $Year_Id= $this->input->get('YearID');
		// $month_Id= $this->input->get('MonthID');
		// $UserId= $this->input->get('UserId');
		
		
		// $Id= $this->input->get('month_Id');
		// echo $Id;
		// die;
		
		$this->db->select();
		$query = $this->db->where(['UserId'=> (int) $UserId, 'Year_Id'=> (int) $Year_Id, 'month_Id'=> (int) $month_Id]);
		$this->db->from('employee_afterkpi');
		// $query = $this->db->where([]);
		$query = $this->db->get();
		// print_r($query->result());die;
		return $query->result();
	}
	
	
	public function AddKPIMarks($data6){
		$this->db->insert('employee_afterkpi',  $data6);
		return $this->db->affected_rows();; 
			
    } 
	
	
	public function getActiveKPIUser(){
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->join('employeedetails', 'employeedetails.UserId = tbl_user.id');
		
		$this->db->where(['employeeStatus'=>'Active']);
		// $this->db->where(['position'=>'SEO Analyst']);
		// $this->db->where(['employeedetails.Status'=>0]);
		// $this->db->or_where(['position'=>'Team Leader']);
		$query = $this->db->get();
		// $this->db->order_by('sort_order ASC');
		// echo "<pre>";
		// print_r($query->result());die("ASIF");
		return $query->result();
    }
	
	public function getSeoUser(){
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->join('employeedetails', 'employeedetails.UserId = tbl_user.id');
		
		$this->db->where(['employeeStatus'=>'Active']);
		$this->db->where(['position'=>'SEO Analyst']);
		
		$query = $this->db->get();
		// $this->db->order_by('sort_order ASC');
		// echo "<pre>";
		// print_r($query->result());die("ASIF");
		return $query->result();
    }
	
	
	
	
	public function getDesignerUser(){
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->join('employeedetails', 'employeedetails.UserId = tbl_user.id');
		
		$this->db->where(['position'=>'Graphic Designer']);
		$this->db->where(['employeeStatus'=>'Active']);
		$query = $this->db->get();
		// $this->db->order_by('sort_order ASC');
		// echo "<pre>";
		// print_r($query->result());die("ASIF");
		return $query->result();
    }
	
	public function getDeveloperUser(){
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->join('employeedetails', 'employeedetails.UserId = tbl_user.id');
		$this->db->where(['position'=>'Web Developer']);
		$this->db->where(['employeeStatus'=>'Active']);
		
		$query = $this->db->get();
		// $this->db->order_by('sort_order ASC');
		// echo "<pre>";
		// print_r($query->result());die("ASIF");
		return $query->result();
    }
	
	public function getContentWriterUser(){
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->join('employeedetails', 'employeedetails.UserId = tbl_user.id');
		$this->db->where(['employeeStatus'=>'Active']);
		$this->db->where(['position'=>'Content Writer']);
		
		$query = $this->db->get();
		// $this->db->order_by('sort_order ASC');
		// echo "<pre>";
		// print_r($query->result());die("ASIF");
		return $query->result();
    }
	
	
	public function getAllUserByposition($PositionID){
		$PID =  $PositionID;
		
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->join('employeedetails', 'employeedetails.UserId = tbl_user.id');
		$this->db->where(['employeeStatus'=>'Active']);
		$this->db->where(['position'=> $PID ]);
		
		$query = $this->db->get();
		// $this->db->order_by('sort_order ASC');
		// echo "<pre>";
		// print_r($query->result());die("ASIF");
		return $query->result();
    }
	
	public function getAllUserBypositionAndJoin($PositionID){
		$PID =  $PositionID;
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
			$this->db->join('employeedetails', 'employeedetails.UserId = tbl_user.id');
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
			$this->db->where(['position'=> $PID ]);
			$query = $this->db->get();
			// print_r($query->result());die;
			return $query->result();
		
    }
	
	
	
	
	public function getAllUserBypositionAndJoiningDate($PositionID, $YearIDUser,$MonthIDUser){
		$PID =  $PositionID;
		$YID = $YearIDUser;
         $MID = $MonthIDUser;
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
			$this->db->join('employeedetails', 'employeedetails.UserId = tbl_user.id');
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
			$this->db->where(['position'=> $PID ]);
			$query = $this->db->get();
			// print_r($query->result());die;
			return $query->result();
		
    }
	
	
	
	
	
	public function adminListRecord(){
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->join('employeedetails', 'employeedetails.UserId = tbl_user.id');
		$this->db->join('employee_profileimage', 'employee_profileimage.UserId = tbl_user.id', 'left');
		$this->db->where(['type'=>'Admin']);
		$this->db->or_where(['type'=>'Manager']);
		$this->db->or_where(['type'=>'HR']);
		$this->db->or_where(['type'=>'Team Leader']);
		
		$query = $this->db->get();
		$this->db->order_by('sort_order ASC');
		// echo "<pre>";
		// print_r($query->result_array());die("ASIF");
		return $query->result();
    }

	public function deleteUser($id){
		
		$this->db->where_in('id', $id);
		$this->db->delete($this->table1);
		return $this->db->affected_rows();
	}
	
	public function deleteUserDetails($id){
		
		$this->db->where_in('UserId', $id);
		$this->db->delete($this->table2);
		return $this->db->affected_rows();
	}
	
	public function CompanyGoalPintsDelete($id){
		
		$this->db->where_in('goalpoints_Id', $id);
		$this->db->delete($this->table12);
		return $this->db->affected_rows();
	}
	
	public function EmployeeDetailsDelete($id){
		
		$this->db->delete($this->table1, ['id'=> (int) $id]);
		$this->db->delete($this->table2, ['UserId'=> (int) $id]);
		$this->db->delete($this->table3, ['UserId'=> (int) $id]);
		$this->db->delete($this->table4, ['UserId'=> (int) $id]);
		$this->db->delete($this->table5, ['UserId'=> (int) $id]);
		$this->db->delete($this->table6, ['UserId'=> (int) $id]);
		$this->db->delete($this->table7, ['UserId'=> (int) $id]);
		$this->db->delete($this->table8, ['UserId'=> (int) $id]);
		$this->db->delete($this->table9, ['UserId'=> (int) $id]);
		return $this->db->affected_rows();
	}
	
	
	public function getAllUser(){

		$query = $this->db->get($this->table1);
		return $query->result();
		
	}
	
	
	public function UserManageData($data1){
		$this->db->where('email',$this->input->post('email'));
		$this->db->update($this->table1, $data1);
		return $this->db->affected_rows();
		
	}
	
	public function CompanyGoalPintsUpdate($data6){
		$id = $this->input->post('goalpoints_Id');
		// echo $id; die;
		
		// print_r($data6);die;
		$this->db->where('goalpoints_Id', $id);
		$this->db->update($this->table12, $data6);
		return $this->db->affected_rows();
	}
	
	public function TeamGoalsUpdate($data6){
		$id = $this->input->post('teamId');
		// echo $id; die;
		$this->db->where('Seo_Id', $id);
		$this->db->update($this->table13, $data6);
		return $this->db->affected_rows();
	}
	
	public function KPIMonthlyUpdate($id, $data6){
		// $id = $this->input->post('KPI_hiddenId');
		// echo $id; die;
		$this->db->where('employeeKPI_Id', $id);
		$this->db->update($this->table14, $data6);
		return $this->db->affected_rows();
	}
	
	
	public function TeamGoalsDelete($id){
		
		$this->db->where_in('Seo_Id', $id);
		$this->db->delete($this->table13);
		return $this->db->affected_rows();
	}
	
	
	public function KPIGoalsDelete($id){
		
		$this->db->where_in('employeeKPI_Id', $id);
		$this->db->delete($this->table14);
		return $this->db->affected_rows();
	}
	
	
	
	
	

}