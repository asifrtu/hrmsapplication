<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Todo extends CI_Controller {
	function __construct(){
		parent::__construct();
		// Load Helper
		$this->load->helper('url');
		// Load Model
		$this->load->model('Todo_Model');
	}
	// todo list
	function index(){
		$data['page_title']="To-Do List";
		$data['totalResult']=$this->Todo_model->count_list();
		$data['content']=$this->Todo_model->get_all_list();
		$this->load->view('adminzone/todo/todo.php',$data);
	}
}