<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

	private $table = 'tbl_user';

	
	public function login()
	{
        // print_r($_POST);die;
		$this->db->where('email',$this->input->post('email'));
        $this->db->where('employee_id',$this->input->post('employee_id'));
		$this->db->where(['type'=>'User']);
		$this->db->where(['employeeStatus'=>'Active']);
        $result= $this->db->get($this->table);

        if($result->num_rows()){
            return $result->row();
            
        }
        return false;
	}
	
	public function loginMSG()
	{
        // print_r($_POST);die;
		$this->db->where('email',$this->input->post('email'));
        // $this->db->where('employee_id',$this->input->post('employee_id'));
		// $this->db->where(['type'=>'User']);
        $result= $this->db->get($this->table);
		return $result->row();
        
	}
	
	public function loginHr()
	{
        $this->db->where('email',$this->input->post('email'));
        $this->db->where(['type'=>'Admin']);
		$this->db->or_where(['type'=>'Manager']);
		$this->db->or_where(['type'=>'HR']);
		$this->db->or_where(['type'=>'Team Leader']);
        $result= $this->db->get($this->table);

        if($result->num_rows()){
            return $result->row();
            
        }
        return false;
	}
	
	public function add_user($temp_password)
	{
		
		$inputPost = [
			'temp_password'	=> $temp_password
		];
		
		$this->db->where('email', $this->input->post('email'));
		$this->db->where('employee_id', $this->input->post('employee_id'));
		$this->db->insert($this->table, $inputPost);
		// print_r($this->db->affected_rows());die;
		return $this->db->affected_rows();
		
	}
	public function add_hr($temp_password)
	{
		
		$inputPost = [
			
			'temp_password'	=> $temp_password,
			'email'=> $this->input->post('email')
			
		];
			$this->db->insert($this->table, $inputPost);
			return $this->db->affected_rows();
		
	}
	
	 public function isvalidateEmailandtemp_password($email,$temp_password)
  {
		$this->db->select('email, temp_password');
        $this->db->from('tbl_user'); 
        $this->db->where('email', $email); 
        $this->db->where('temp_password', $temp_password); 
        $query=$this->db->get();
		//print_r($query->result());die;
		//return $query->result();
        return $query->row_array();
        
  }
  
   public function changePassword($email,$password)
	{
		return $this->db->where('email', $email)
						->update('tbl_user', ['password'=>$password]);
		
	}
	
	public function temp_passwordUpdate($temp_password, $email)
	{
		
		$inputPost = [
			'temp_password'	=> $temp_password,
			'email'=> $this->input->post('email')
			];
			return $this->db->where('email', $email)
						->update('tbl_user', ['temp_password'=>$temp_password]);
			
	}
	
	public function ValidateTempPassword($email,$temp_password)
  {
		$this->db->select('email, temp_password');
        $this->db->from('tbl_user'); 
        $this->db->where('email', $email); 
        $this->db->where('temp_password', $temp_password); 
        $query=$this->db->get();
		//print_r($query->result());die;
		//return $query->result();
        return $query->row_array();
        
  }
  
	public function resetPassword($email,$password)
	{
		return $this->db->where('email', $email)
						->update('tbl_user', ['password'=>$password]);
		
	}
	
}

?>