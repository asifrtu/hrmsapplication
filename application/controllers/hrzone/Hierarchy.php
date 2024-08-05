<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hierarchy extends CI_Controller {
	private $UserId;
	
	
	
	public function __construct(){
    parent::__construct();
    $this->load->model("EmployeeModel", 'EmpObj');
    $this->load->model("HrModel", "HrObj");
	$this->load->model("PayModel", "PayObj");
	$this->load->model("AttendanceModel");
	$this->load->model("HierarchyModel");
	$this->load->library('HrLib_user');
	$data= $this->session->userdata();
	$this->UserId = $data['auth']['id'];
  } 
 
	public function index()
  {

  		// $elements = $this->HierarchyModel->getCategories();
  		// echo "<pre>";
		// print_r($elements);die;
		$data['page'] = 'hierarchy';
		$data['elements'] = $this->HierarchyModel->getCategories();
        
		// $data['getMenuData']    = $this->HierarchyModel->buildtree($data['record']);
		// $getMenuData   = $this->HierarchyModel->buildtree($data['record']);
		// echo "<pre>";
		// print_r($getMenuData);die;
       // $output = array();
       // if(!empty($getMenuData)){
        // foreach($getMenuData as $k => $val){

            // $temp           = [];
            // $temp['id']     = $val['id'];
            // $temp['name']   = $val['name'];
            // $temp['status'] = $val['employeeStatus'];
            // $temp['date']    = $val['added_at'];

            // $output[]     = $temp;

            // if($val['children']){
                // foreach($val['children'] as $v)
                // {
                    // $t            = [];
                    // $t['id']      = $v['id'];
                    // $t['name']    = $val['name']. ' -> '.$v['name'];
                    // $t['status']  = $v['employeeStatus'];
                    // $t['date']    = $v['added_at'];
                    // $output[]     = $t;
                // }
            // }
        // }
      // }
        //print_r($output); die;
         // $data['record'] = $output;
      	$this->load->view('hrzone/HierarchyPage', $data);
  }

	
	public function hierarchyUserDetails(){
		// print_r($_POST);die;
		// print_r($_GET);die;
		if(!empty($this->input->post())) {
		$id = $this->input->post('id');
	
		 $userData = $this->AttendanceModel->getsingleUserDetails($id);
		 // print_r($userData);
					$result = [];  

					foreach($userData as $v) {
					// print_r($calenderResult);die;
					
					$result[]= [
					'userId'=>$v->id,
					'userName' => $v->name,
					'employee_id' => $v->employee_id,
					'maritalStatus' => $v->maritalStatus,
					'joiningDate' => $v->EmployeejoiningDate,
					'position' => $v->position,
					'EmpProfileImage' => $v->EmpProfileImage,
					
					
					];
					}	
					
		 
         
	
	
		echo json_encode(['data'=> $result]);	
		 
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
	}
	
	
	

	

}
