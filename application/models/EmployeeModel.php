<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeModel extends CI_Model {
	
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
	public $table10 = 'left_employeedetails';
	
	
	
	public function insert_data1($data1){
    $this->db->trans_start();
    //$this->db->query("INSERT INTO customers($data1) VALUES ()");
    $this->db->insert('tbl_user', $data1);
    $user_id=$this->db->insert_id();
    $this->db->trans_complete();
    return $user_id; 
    }
		
	public function insert_data2($data2){
    $this->db->trans_start();
    //$this->db->insert('tickets',  $data2);
    $this->db->insert('employeedetails',  $data2);
    
    $this->db->trans_complete();
    return true; 
    } 

	public function insert_data5($last_user_id, $data5){
    $this->db->trans_start();
	
	foreach($this->input->post('bankName') as $key=>$val){
	
	$insertData = [
		'UserId'=> $last_user_id,
	'bankName' => $val,
	'bankAccount' => $this->input->post('bankAccount')[$key],
	'bankBranch' => $this->input->post('bankBranch')[$key],
	'bankIFSCCode' => $this->input->post('bankIFSCCode')[$key],
	
	];
    //$this->db->insert('tickets',  $data2);
    $this->db->insert('employee_bankaccount',  $insertData);
    }
    $this->db->trans_complete();
    return true; 
    } 

	public function insert_data6($last_user_id, $data6){
    $this->db->trans_start();
	
	foreach($this->input->post('experienceDesignation') as $key=>$val){
	
	$insertData = [
		'UserId'=> $last_user_id,
	'experienceDesignation' => $val,
	'experienceOrganisation' => $this->input->post('experienceOrganisation')[$key],
	'experienceDuration' => $this->input->post('experienceDuration')[$key],
	'experienceTotal' => $this->input->post('experienceTotal')[$key],
	'previousSalary' => $this->input->post('previousSalary')[$key]
	
	];
    //$this->db->insert('tickets',  $data2);
    $this->db->insert('employee_workexperience',  $insertData);
    }
    $this->db->trans_complete();
    return true; 
    } 

	public function insert_data7($data7){
    $this->db->trans_start();
    //$this->db->insert('tickets',  $data2);
    $this->db->insert('employee_salary',  $data7);
    
    $this->db->trans_complete();
    return true; 
    } 
	
	
	public function insert_data3($last_user_id, $data3){
		//print_r($_POST);die;
    //$this->db->insert('tickets',  $data2);
	foreach($this->input->post('examPassed') as $key=>$val){
	
	$insertData = [
	'UserId'=> $last_user_id,
	'examPassed' => $val,
	'examYear' => $this->input->post('examYear')[$key],
	'examBoard' => $this->input->post('examBoard')[$key],
	'marks' => $this->input->post('marks')[$key],
	
	];
	
	
	// echo "<pre>";
	// print_r($insertData);die;
	
    $this->db->insert('employee_education',  $insertData);
	}
    
    $this->db->trans_complete();
    return true; 
    }

	public function insert_data4($last_user_id, $data4){
		//print_r($_POST);die;
    //$this->db->insert('tickets',  $data2);
	foreach($this->input->post('coursePassed') as $key=>$val){
	
	$insertData = [
	'UserId'=> $last_user_id,
	'coursePassed' => $val,
	'courseYear' => $this->input->post('courseYear')[$key],
	'courseBoard' => $this->input->post('courseBoard')[$key],
	'courseMarks' => $this->input->post('courseMarks')[$key],
	
	];
	
	
	// echo "<pre>";
	// print_r($insertData);die;
	
    $this->db->insert('employee_course',  $insertData);
	}
    
    $this->db->trans_complete();
    return true; 
    }


	
	public function insert_data8($last_user_id, $data8){
	
	//$this->db->insert('tickets',  $data2);
	$q = $this->db->insert('employee_documents',  $data8);
	
	return $this->db->affected_rows(); 
	} 
	public function insert_data9($last_user_id, $data9){
    $this->db->trans_start();
    //$this->db->insert('tickets',  $data2);
    $this->db->insert('employee_profileimage',  $data9);
    
    $this->db->trans_complete();
    return true; 
    }


	public function insertAdminProfileImage($last_user_id, $data9){
		
		// echo $last_user_id; die;
		// print_r($data9);die;
		
		$result = $this->getProfileAdminImage($last_user_id);
		if($result > 0){
			$this->removeIamge($last_user_id);
			$this->db->insert('employee_profileimage',  $data9);
			return $this->db->affected_rows(); 
		}else{
			$this->db->insert('employee_profileimage',  $data9);
			return $this->db->affected_rows(); 
		}
		// die;
		
    }


	public function removeIamge($id){
		
		$this->db->where_in('UserId', $id);
		$this->db->delete($this->table9);
		return $this->db->affected_rows();
	}
	

	public function empListRecord(){
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->join('employeedetails', 'employeedetails.UserId = tbl_user.id');
		$this->db->join('employee_bankaccount', 'employee_bankaccount.UserId = tbl_user.id', 'left');
		$this->db->join('employee_salary', 'employee_salary.UserId = tbl_user.id', 'left');
		$this->db->join('employee_profileimage', 'employee_profileimage.UserId = tbl_user.id', 'left');
		$this->db->where(['type'=>'User']);
		
		$this->db->order_by('tbl_user.id', 'ASC');
		$query = $this->db->get();
		// echo "<pre>";
		// print_r($query->result_array());die("ASIF");
		return $query->result();
    } 
	
	public function getUser($id){
		$query = $this->db->get_where($this->table1, ['id'=> (int) $id]);
		return $query->row();
	}            
	
	public function getEmpDetails($id){
		$query = $this->db->get_where($this->table2, ['UserId'=> (int) $id]);
		return $query->row();
	}            
	public function getSingleEmpDetails($id){
		$query = $this->db->get_where($this->table2, ['UserId'=> (int) $id]);
		return $query->result();
	}            
	
	         
	
	public function getBankDetails($id){
		$query = $this->db->get_where($this->table5, ['UserId'=> (int) $id]);
		return $query->result();
	}            
	
	
	public function getBankASIFDetails($id){
		$query = $this->db->get_where($this->table5, ['UserId'=> (int) $id]);
		return $query->row();
	}            
	
	public function getWorkExperience($id){
		$query = $this->db->get_where($this->table6, ['UserId'=> (int) $id]);
		return $query->result();
	}            
	
	public function getSalary($id){
		$query = $this->db->get_where($this->table7, ['UserId'=> (int) $id]);
		return $query->row();
	} 
	public function getSalary21($id){
		$query = $this->db->get_where($this->table77, ['UserId'=> (int) $id]);
		return $query->row();
	}            
	public function getSingleSalary($id){
		$query = $this->db->get_where($this->table7, ['UserId'=> (int) $id]);
		return $query->result();
	} 
	public function getSingleSalary21($id){
		$query = $this->db->get_where($this->table77, ['UserId'=> (int) $id]);
		return $query->result();
	}            
	
	public function getProfileImage($id){
		$query = $this->db->get_where($this->table9, ['UserId'=> (int) $id]);
		return $query->row();
	}            
	public function getProfileAdminImage($id){
		$query = $this->db->get_where($this->table9, ['UserId'=> (int) $id]);
		return $query->num_rows();
	}            
	
	public function getLeftEmpDetails($id){
		$query = $this->db->get_where($this->table10, ['UserId'=> (int) $id]);
		return $query->row();
	} 
	
	
	
	
	
	// Get all Parent category by language id
	public function getEducationDetails($id){

		$query = $this->db->get_where($this->table3, ['UserId'=> (int) $id]);
		return $query->result();
	}
	public function getCourseDetails($id){

		$query = $this->db->get_where($this->table4, ['UserId'=> (int) $id]);
		return $query->result();
	}
	public function getDocuments($id){

		$query = $this->db->get_where($this->table8, ['UserId'=> (int) $id]);
		return $query->result();
	}
	
	
	
	public function empInfoList($emptdId){
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->join('employeedetails', 'employeedetails.UserId = tbl_user.id');
		$this->db->join('employee_bankaccount', 'employee_bankaccount.UserId = tbl_user.id', 'left');
		$this->db->join('employee_workexperience', 'employee_workexperience.UserId = tbl_user.id', 'left');
		$this->db->join('employee_salary', 'employee_salary.UserId = tbl_user.id', 'left');
		$this->db->join('employee_profileimage', 'employee_profileimage.UserId = tbl_user.id', 'left');
		$this->db->where('UserId', $emptdId);
		
		$query = $this->db->get();
		$this->db->order_by('sort_order ASC');
		// echo "<pre>";
		// print_r($query->result());die("ASIF");
		return $query->result();
    }

	public function empFileList(){
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->join('employee_education', 'employee_education.UserId = tbl_user.id', 'left');
		$this->db->join('employee_course', 'employee_course.UserId = tbl_user.id', 'left');
		$this->db->join('employee_documents', 'employee_documents.UserId = tbl_user.id', 'left');
		//$this->db->where('UserId', $empId);
		
		$query = $this->db->get();
		// $this->db->order_by('sort_order ASC');
		// echo "<pre>";
		// print_r($query->row());die("ASIF");
		return $query->result();
    }

	
	
	
	
	public function empDocList($empId){
		$this->db->select('*');
		$this->db->from('employee_documents');
		//$this->db->join('employee_documents', 'employee_documents.UserId = tbl_user.id');
		$this->db->where('UserId', $empId);
		
		$this->db->order_by('Id DESC');
		$query = $this->db->get();
		// echo "<pre>";
		// print_r($query->result_array());die("ASIF");
		return $query->result();
    }

	public function download($Id){
		$this->db->select('*');
		$this->db->from('employee_documents');
		//$this->db->where('fileName', $DocName);
		$this->db->where('Id', $Id);
		$query = $this->db->get();
		//$query = $this->db->get('employee_documents',array('fileName'=>$DocName, 'UserId'=>$U_id));
		return $query->row();
	}
	
	public function deleteDocuments($id){

		$this->db->delete($this->table8, ['Id'=> (int) $id]);
		
		return $this->db->affected_rows();
		
	}
	
	public function UserdetailDocuments($id){

		$query = $this->db->get_where($this->table8, ['Id'=> (int) $id]);
		
		return $query->row();
		
	}
	public function UserDeletedBy($dataEmp){

		$query = $this->db->insert('document_delete_log', $dataEmp);
		
		return $this->db->affected_rows();
		
	}
	
	public function getUserId($id){

		$query = $this->db->get_where($this->table1, ['id'=> (int) $id]);
		return $query->row();
		
	}
	
	
	


}