<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Todo extends CI_Controller {
	function __construct(){
		parent::__construct();
		// Load Helper
		$this->load->helper('url');
		// Load Model
		$this->load->model('Todo_Model');
		// Load Library
        $this->load->library('form_validation');

		$this->load->model("EmployeeModel", 'EmpObj');
  
	//$this->load->library('Lib_user');
	$data= $this->session->userdata();
	
	
	$this->UserId = $data['auth']['id'];
	$this->name = $data['auth']['name'];
	$this->shortName = $data['auth']['shortName'];
	}
	// todo list
	 function index(){
		$data['page_title']="Link List";
		$data['totalResult']=$this->Todo_Model->count_list();
		$data['content']=$this->Todo_Model->get_all_list();
        $data['content']=$this->Todo_Model->get_all_section();
		$data['UserInfo'] = $this->EmpObj->getUser($this->UserId);
		$this->load->library('Lib_user');
		$this->load->view('hrzone/todo',$data);
	}
	
	     
	function linkadd(){
		$sss['task_title'] = $this->input->post('task_title');
		$sss['task_status'] = $this->input->post('task_status');
		$sss['section_id'] = $this->input->post('section_id');
		
        $insertQuery=$this->db->insert('linklist',$sss);
        redirect('hrzone/todo/', 'refresh');

	}

	function sectionadd(){
		$nme = $this->input->post('sec_name');
		//echo $nme;
       // $this->db->where('section_name', $nme);
        $this->db->query("INSERT INTO `sectionlist`(`section_name`) VALUES ('$nme')");
        redirect('hrone/todo/', 'refresh');

	}

	function update(){
		 $up1 = $this->input->post('name_edit');
		 $up2 = $this->input->post('url_edit');
		 $up3 = $this->input->post('edit_id');
        $this->db->query("UPDATE linklist SET task_title='$up1',task_status='$up2' WHERE id='$up3'");

        redirect('hrzone/todo/', 'refresh');

	}

	function deleteid(){
		
		$ddd = $this->input->post('delete_id');
		//echo $ddd;
		$this->db->where('id', $ddd);
        $this->db->delete('linklist');
        redirect('hrzone/todo/', 'refresh');
	}

	function deletesectionid(){
		
		$del = $this->input->post('del_id');
		//echo $ddd;
		$this->db->where('id', $del);
        $this->db->delete('sectionlist');
        redirect('hrzone/todo/', 'refresh');
	}

}