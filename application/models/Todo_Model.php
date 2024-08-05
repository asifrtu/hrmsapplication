<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Todo_Model extends CI_Model{
	function __construct(){
		parent::__construct();
		// Load Database
		$this->load->database();
	}
	// Count Total List
	function count_list(){
		return $this->db->count_all('linklist');
	}

    function get_all_section(){
		$response=array();
		$query=$this->db->get('sectionlist');
		if($query->num_rows()>0){
			$response['bool']=true;
			$response['d']=$query->result_array();
		}else{
			$response['bool']=false;
		}
		return $response;
	}
		// Get all list
	function get_all_list(){
		$response=array();
		$query=$this->db->get('linklist');
		if($query->num_rows()>0){
			$response['bool']=true;
			$response['d']=$query->result_array();
		}else{
			$response['bool']=false;
		}
		return $response;
	}
	function add(){
		$insertData=array(
			'task_title'=>$this->input->post('task_title'),
			'task_status'=>$this->input->post('task_status')
		);
		$insertQuery=$this->db->insert('linklist',$insertData);
		if($this->db->affected_rows()>0){
			return 'Link has been added';
		}else{
			return 'Link has not been added';
		}
	}
	function section(){
		$insertSection=array(
			'section_name'=>$this->input->post('section_name')
		);
		$insertQuery1=$this->db->insert('sectionlist',$insertSection);
		if($this->db->affected_rows()>0){
			//return 'Section has been added';
			redirect('adminzone/todo/', 'refresh');
		}else{
			return 'Section has not been added';
		}
	}
}
?>