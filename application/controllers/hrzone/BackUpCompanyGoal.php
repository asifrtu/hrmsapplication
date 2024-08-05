<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CompanyGoals extends CI_Controller {
	
	public function __construct(){
    parent::__construct();
   
    $this->load->model("EmployeeModel", "EmpObj");
    $this->load->model("HrModel", "HrObj");
	$this->load->model("AttendanceModel");
	$this->load->model("KpiModel");
	$this->load->library('HrLib_user');
	$data= $this->session->userdata();
	
	
	$this->UserId = $data['auth']['id'];

  } 
  
	 public function AddCompanyGoals()
	{		
		$data['GoalYear'] = $this->HrObj->YearGoal();
		$this->load->view("hrzone/addCompanyGoals", $data);
	}

	

	public function AddYearlyGoals()
	{		
		// echo "<pre>";
		// print_r($_POST); die;
		// print_r($_FILES); 
		
		
		// die;
		
	
	
	 
		$data6 = array
        (
                //$last_user_id is the value of the foreign key to link the tables
                'Year_Id'       => $this->input->post('Year_Id'),
                'goal_points'       => $this->input->post('goal_points'),
                'assignee'          => $this->input->post('assignee')
        );

        $this->HrObj->insertYearGoals($data6);
        //$data['insert'] = $last_ticket_id;
       
		$this->session->set_flashdata('message', '<script>alert("Your data inserted successfully");</script>');
    	redirect('hrzone/CompanyGoals/AddCompanyGoals', 'refresh');
}	
			

public function ContentWriter()
{	
	$data['GoalYear'] = $this->HrObj->YearGoal();	
	$this->load->view("hrzone/addContentWriter", $data);
}




public function Seo()
{	
	
	$data['GoalYear'] = $this->HrObj->YearGoal();	
	$this->load->view("hrzone/addSeo", $data);
}

public function Designer()
{	
	$data['GoalYear'] = $this->HrObj->YearGoal();	
	$this->load->view("hrzone/addDesigner", $data);
}

public function Developer()
{	
	$data['GoalYear'] = $this->HrObj->YearGoal();	
	$this->load->view("hrzone/addDeveloper", $data);
}





public function SeoGoal()
{		
	// echo "<pre>";
	// print_r($_POST); 
	// print_r($_FILES); 
	// die;
	$Id = $this->input->post('Year_Id');
	$designationId = 1;
	$data6 = array
	(
			'Year_Id'       => $this->input->post('Year_Id'),
			'seogoal_points'       => $this->input->post('goal_points'),
			'seogoal_comments'          => $this->input->post('goal_comments')
	);

	$this->HrObj->TeamGoalsPoints($designationId, $data6);
	$this->session->set_flashdata('message', '<script>alert("Your data inserted successfully");</script>');
	redirect('hrzone/CompanyGoals/SeoGoalView/'.$Id, 'refresh');
}	

public function ContentWriterGoal()
{		
	// echo "<pre>";
	// print_r($_POST); 
	// print_r($_FILES); 
	// die;
	$Id = $this->input->post('Year_Id');
	$designationId = 2;
	$data6 = array
	(
			'Year_Id'       => $this->input->post('Year_Id'),
			'seogoal_points'       => $this->input->post('goal_points'),
			'seogoal_comments'          => $this->input->post('goal_comments')
	);

	$this->HrObj->TeamGoalsPoints($designationId, $data6);
	$this->session->set_flashdata('message', '<script>alert("Your data inserted successfully");</script>');
	redirect('hrzone/CompanyGoals/contentWriterGoalView/'.$Id, 'refresh');
}	



public function DeveloperGoal()
{		
	// echo "<pre>";
	// print_r($_POST); 
	// print_r($_FILES); 
	// die;
	$Id = $this->input->post('Year_Id');
	$designationId = 3;
	$data6 = array
	(
			'Year_Id'       => $this->input->post('Year_Id'),
			'seogoal_points'       => $this->input->post('goal_points'),
			'seogoal_comments'          => $this->input->post('goal_comments')
	);

	$this->HrObj->TeamGoalsPoints($designationId, $data6);
	$this->session->set_flashdata('message', '<script>alert("Your data inserted successfully");</script>');
	redirect('hrzone/CompanyGoals/developerGoalView/'.$Id, 'refresh');
}	



public function DesignerGoal()
{		
	// echo "<pre>";
	// print_r($_POST); 
	// print_r($_FILES); 
	// die;
	$Id = $this->input->post('Year_Id');
	$designationId = 4;
	$data6 = array
	(
			'Year_Id'       => $this->input->post('Year_Id'),
			'seogoal_points'       => $this->input->post('goal_points'),
			'seogoal_comments'          => $this->input->post('goal_comments')
	);

	$this->HrObj->TeamGoalsPoints($designationId, $data6);
	$this->session->set_flashdata('message', '<script>alert("Your data inserted successfully");</script>');
	redirect('hrzone/CompanyGoals/designerGoalView/'.$Id, 'refresh');
}	





public function AddTeamxxxYearlyGoals()
{		
	// echo "<pre>";
	// print_r($_POST); 
	// print_r($_FILES); 
	// die;
	
	$data6 = array
	(
			//$last_user_id is the value of the foreign key to link the tables
		   
			'designation_Id'       => $this->input->post('designation_Id'),
			'Year_Id'       => $this->input->post('Year_Id'),
			'seogoal_points'       => $this->input->post('goal_points'),
			'seogoal_comments'          => $this->input->post('goal_comments')
	);

	$this->HrObj->TeamGoalsPoints($data6);
	$this->session->set_flashdata('message', '<script>alert("Your data inserted successfully");</script>');
	redirect('hrzone/CompanyGoals/AddTeamGoals', 'refresh');
}	






	 public function AddTeamGoals()
	{	
	
		$data['teamDeisn'] = $this->HrObj->goalTeamDesignation();                      
		// print_r(teamDeisn);
		$data['GoalYear'] = $this->HrObj->YearGoal();	
		$this->load->view("hrzone/yearlyTeamGoal", $data);
	}


	public function AddTeamYearlyGoals()
	{		
		
		
		// echo "<pre>";
		// print_r($_POST); 
		// print_r($_FILES); 
		
		
		// die;
		
	
		$data6 = array
        (
                //$last_user_id is the value of the foreign key to link the tables
               
                'designation_Id'       => $this->input->post('designation_Id'),
                'Year_Id'       => $this->input->post('Year_Id'),
                'seogoal_points'       => $this->input->post('goal_points'),
                'seogoal_comments'          => $this->input->post('goal_comments')
        );

        $this->HrObj->TeamGoalsPoints($data6);
        //$data['insert'] = $last_ticket_id;
       
		$this->session->set_flashdata('message', '<script>alert("Your data inserted successfully");</script>');
    	redirect('hrzone/CompanyGoals/AddTeamGoals', 'refresh');
}	


	
			
	public function CompanyGoalInfo(){
		$Year_Id = $this->uri->segment(4);
		$data['Year_Id'] = $this->uri->segment(4);
		$data['User'] = $this->HrObj->getSeoUser();
		$data['GoalsPoint'] = $this->HrObj->CompanyYearlyGoals();
		$data['GoalYear'] = $this->HrObj->YearGoal();
		$data['GoalMonth'] = $this->HrObj->KPIMonth();
		$this->load->view("hrzone/companyGoal", $data);
	}
	
	
	public function SeoGoalView(){
		
		$Year_Id = $this->uri->segment(4);
		$data['Year_Id'] = $this->uri->segment(4);
		$data['GoalYear'] = $this->HrObj->YearGoal();
		$this->load->view("hrzone/SeoView", $data);
	}
	
	public function contentWriterGoalView(){
		$Year_Id = $this->uri->segment(4);
		$data['Year_Id'] = $this->uri->segment(4);
		$data['GoalYear'] = $this->HrObj->YearGoal();
		$this->load->view("hrzone/contentWriterView", $data);
	}
	public function designerGoalView(){
		$Year_Id = $this->uri->segment(4);
		$data['Year_Id'] = $this->uri->segment(4);
		$data['GoalYear'] = $this->HrObj->YearGoal();
		$this->load->view("hrzone/designerView", $data);
	}
	public function developerGoalView(){
		$Year_Id = $this->uri->segment(4);
		$data['Year_Id'] = $this->uri->segment(4);
		$data['GoalYear'] = $this->HrObj->YearGoal();
		$this->load->view("hrzone/developerView", $data);
	}
	
	public function TeamGoalView(){
		$data['teamDeisn'] = $this->HrObj->goalTeamDesignation();
		$data['GoalYear'] = $this->HrObj->YearGoal();
		$this->load->view("hrzone/TeamGoal", $data);
	}
	
	public function goalPointsByYear(){
		// print_r($_POST);die;
		if(!empty($this->input->get())) {
			
			 $YB = $this->input->get('YearID');
			 $YearIDB = (array)$YB;
			 
			 
		 $userData = $this->HrObj->goalPintsYearWise($this->input->get('YearID'));
		 // print_r($userData);die;
					$result = [];  

					foreach($userData as $v) {
					
					
					$result[]= [
					'goalpoints_Id'=>$v->goalpoints_Id,
					'goals_title'=>$v->goals_title,
					'goal_points'=>$v->goal_points,
					'Year_Id'=>$v->Year_Id,
					'assignee'=>$v->assignee,
					'goal_comments'=>$v->goal_comments,
					'work_status'=>$v->work_status

					];
					}	
					
					
			// print_r($result);die;
         echo json_encode(['data'=> $result, 'YearempID'=>$YearIDB]);
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
		
	}
	
	public function goalPointsById(){
		// print_r($_GET);die;
		if(!empty($this->input->get())) {
         $result = $this->HrObj->goalPintsIdWise($this->input->get('id'));
			// print_r($result);die;
         echo json_encode(['data'=> $result]);
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
		
	}
	
	public function SeoGoalPointsByYear(){
		// print_r($_POST);die;
		if(!empty($this->input->get())) {
          $YB = $this->input->get('YearID');
			 $YearIDB = (array)$YB;
			 
		 $result = $this->HrObj->SeoGoalPintsYearWise($this->input->get('YearID'));
			// print_r($result);die;
         echo json_encode(['data'=> $result, 'YearempID'=>$YearIDB]);
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
		
	}
	
	public function ContentWriterGoalPointsByYear(){
		// print_r($_POST);die;
		if(!empty($this->input->get())) {
         $result = $this->HrObj->ContentWriterGoalPintsYearWise($this->input->get('YearID'));
			// print_r($result);die;
         echo json_encode(['data'=> $result]);
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
		
	}
	
	
	public function DeveloperGoalPointsByYear(){
		// print_r($_POST);die;
		if(!empty($this->input->get())) {
         $result = $this->HrObj->DeveloperGoalPintsYearWise($this->input->get('YearID'));
			// print_r($result);die;
         echo json_encode(['data'=> $result]);
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
		
	}
	
	public function TeamGoalsByYear(){
		// print_r($_POST);die;
		if(!empty($this->input->post())) {
         $result = $this->HrObj->TeamGoalByYearAndPosition($this->input->post('PositionID'), $this->input->post('YearID'));
			// print_r($result);die;
         echo json_encode(['data'=> $result]);
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
		
	}
	
	
	public function TeamGoalsByYearAndUserId(){
		// print_r($_POST);die;
		if(!empty($this->input->post())) {
         $result = $this->HrObj->TeamGoalByYearAndPosition($this->input->post('PositionID'), $this->input->post('YearID'));
			// print_r($result);die;
         echo json_encode(['data'=> $result]);
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
		
	}
	
	
	
	
	
	public function DesignerGoalPointsByYear(){
		// print_r($_POST);die;
		if(!empty($this->input->get())) {
         $result = $this->HrObj->DesignerGoalPintsYearWise($this->input->get('YearID'));
			// print_r($result);die;
         echo json_encode(['data'=> $result]);
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
		
	}
	
	
	public function companygoalPointsDeleteById(){
		// print_r($_GET);die;
		if(!empty($this->input->get())) {
         $result = $this->HrObj->CompanyGoalPintsDelete($this->input->get('id'));
			// print_r($result);die;
			//return true;
         echo json_encode(['data'=> $result, 'message'=>'success']);
		}
		else{
			return false;
			// echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
		
	}
	
	
	public function TeamGoalDeleteById(){
		// print_r($_GET);die;
		if(!empty($this->input->get())) {
         $result = $this->HrObj->TeamGoalsDelete($this->input->get('id'));
			// print_r($result);die;
			//return true;
         echo json_encode(['data'=> $result, 'message'=>'success']);
		}
		else{
			return false;
			// echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
		
	}
	
	public function companygoalPointsUpdateById(){
		// print_r($_POST);die;
		if(!empty($this->input->post())) {
         
		 $data6 = array
        (
                //$last_user_id is the value of the foreign key to link the tables
               
                
                'goalpoints_Id'       => $this->input->post('goalpoints_Id'),
                'goal_points'       => $this->input->post('goal_points'),
                'work_status'       => $this->input->post('goal_status'),
                'assignee'       => $this->input->post('goal_assignee'),
                'goal_comments'          => $this->input->post('goal_comments')
        ); 
		 $result = $this->HrObj->CompanyGoalPintsUpdate($data6);
			// print_r($result);die;
			// return true;
         echo json_encode(['data'=> $result]);
		}
		else{
			return false;
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
		
	}
	public function companygoalAsiigneUpdateById(){
		// print_r($_POST);die;
		if(!empty($this->input->post())) {
         
		 $data6 = array
        (
                //$last_user_id is the value of the foreign key to link the tables
               
                
                'goalpoints_Id'       => $this->input->post('goalpoints_Id'),
                'assignee'       => $this->input->post('goal_assignee')
        ); 
		 $result = $this->HrObj->CompanyGoalPintsUpdate($data6);
			// print_r($result);die;
			// return true;
         echo json_encode(['data'=> $result]);
		}
		else{
			return false;
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
		
	}
	public function companygoalCommentsUpdateById(){
		// print_r($_POST);die;
		if(!empty($this->input->post())) {
         
		 $data6 = array
        (
                //$last_user_id is the value of the foreign key to link the tables
               
                
                'goalpoints_Id'       => $this->input->post('goalpoints_Id'),
                'goal_comments'          => $this->input->post('goal_comments')
        ); 
		 $result = $this->HrObj->CompanyGoalPintsUpdate($data6);
			// print_r($result);die;
			// return true;
         echo json_encode(['data'=> $result]);
		}
		else{
			return false;
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
		
	}
	
	public function companygoalStausUpdateById(){
		// print_r($_POST);die;
		if(!empty($this->input->post())) {
         
		 $data6 = array
        (
                //$last_user_id is the value of the foreign key to link the tables
               
                
                'goalpoints_Id'       => $this->input->post('goalpoints_Id'),
                'work_status'       => $this->input->post('goal_status')
                
	   ); 
		 $result = $this->HrObj->CompanyGoalPintsUpdate($data6);
			// print_r($result);die;
			// return true;
         echo json_encode(['data'=> $result]);
		}
		else{
			return false;
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
		
	}
	
	
	public function TeamgoalUpdateById(){
		// print_r($_POST);die;
		if(!empty($this->input->post())) {
         
		 $data6 = array
        (
                //$last_user_id is the value of the foreign key to link the tables
               
                
                'seogoal_points'       => $this->input->post('team_points'),
                'seogoal_comments'       => $this->input->post('team_comments'),
                'work_status'       => $this->input->post('team_work'),
                'Seo_Id'          => $this->input->post('teamId')
        ); 
		 $result = $this->HrObj->TeamGoalsUpdate($data6);
			// print_r($result);die;
			// return true;
         echo json_encode(['data'=> $result]);
		}
		else{
			return false;
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
		
	}
	
	
	
	
	
public function AddKPIGoals()
{	

$data['User'] = $this->HrObj->getEmpUser();
// print_r(teamDeisn);
$data['GoalYear'] = $this->HrObj->YearGoal();
$data['GoalMonth'] = $this->HrObj->KPIMonth();	
$this->load->view("hrzone/monthlyEmpGoal", $data);
}



public function EditEmployeeKpi()
{	

$PositionID = "SEO Analyst";
$data['User'] = $this->HrObj->getSeoUser($PositionID);
// print_r(teamDeisn);
$data['GoalYear'] = $this->HrObj->YearGoal();
$data['GoalMonth'] = $this->HrObj->KPIMonth();	
$this->load->view("hrzone/EditEmpKpi", $data);
}


public function AddSeoAnalystKPI()
{
	
if($_SERVER['REQUEST_METHOD'] == 'POST')
{		
		$id = $this->input->post('User_Id');
		$Year_Id= $this->input->post('Year_Id');
		$month_Id= $this->input->post('month_Id');
		// die;
		$this->form_validation->set_rules('User_Id[]', 'UserId', 'required');
		$this->form_validation->set_rules('Year_Id[]', 'Year_Id', 'required');
		$this->form_validation->set_rules('month_Id[]', 'month_Id', 'required');
		$this->form_validation->set_rules('kpiGoal_Points[]', 'kpiGoal_Points', 'required');
		$this->form_validation->set_rules('kpi_marks[]', 'kpi_marks', 'required|less_than[2]');
	if($this->form_validation->run() != FALSE)
	{	
		
		$dataKPI = array
        (
                //$last_user_id is the value of the foreign key to link the tables
               
                'UserId'       => $this->input->post('User_Id'),
                'Year_Id'       => $this->input->post('Year_Id'),
                'month_Id'       => $this->input->post('month_Id'),
                'kpiGoal_Points'       => $this->input->post('kpiGoal_Points'),
                'kpi_marks'       => $this->input->post('kpi_marks'),
                // 'kpiGoal_Comments'          => $this->input->post('kpiGoal_Comments')
        );

        $this->HrObj->KPIGoalsPoints($dataKPI);
        $this->session->set_flashdata('message', '<script>alert("Your data updated successfully");</script>');
		redirect('hrzone/CompanyGoals/KPISeoView/'.$id.'/'.$Year_Id.'/'.$month_Id, 'refresh');
		
		
	}
	
	
}



$PositionID = "SEO Analyst";
$data['User'] = $this->HrObj->getSeoUser($PositionID);
// print_r(teamDeisn);
$data['GoalYear'] = $this->HrObj->YearGoal();
$data['GoalMonth'] = $this->HrObj->KPIMonth();	
$this->load->view("hrzone/addSeoKPI", $data);
}

public function AddKPIContentWriterTeam()
{	


	
if($_SERVER['REQUEST_METHOD'] == 'POST')
{		
		$id = $this->input->post('User_Id');
		$Year_Id= $this->input->post('Year_Id');
		$month_Id= $this->input->post('month_Id');
		// die;
		$this->form_validation->set_rules('User_Id[]', 'UserId', 'required');
		$this->form_validation->set_rules('Year_Id[]', 'Year_Id', 'required');
		$this->form_validation->set_rules('month_Id[]', 'month_Id', 'required');
		$this->form_validation->set_rules('kpiGoal_Points[]', 'kpiGoal_Points', 'required');
		$this->form_validation->set_rules('kpi_marks[]', 'kpi_marks', 'required|less_than[2]');
	if($this->form_validation->run() != FALSE)
	{	
		
		$dataKPI = array
        (
                //$last_user_id is the value of the foreign key to link the tables
               
                'UserId'       => $this->input->post('User_Id'),
                'Year_Id'       => $this->input->post('Year_Id'),
                'month_Id'       => $this->input->post('month_Id'),
                'kpiGoal_Points'       => $this->input->post('kpiGoal_Points'),
                'kpi_marks'       => $this->input->post('kpi_marks'),
                // 'kpiGoal_Comments'          => $this->input->post('kpiGoal_Comments')
        );

        $this->HrObj->KPIGoalsPoints($dataKPI);
        $this->session->set_flashdata('message', '<script>alert("Your data updated successfully");</script>');
		redirect('hrzone/CompanyGoals/KpiContentWriter/'.$id.'/'.$Year_Id.'/'.$month_Id, 'refresh');
		
		
	}
	
	
}







$PositionID = "Content Writer";
$data['User'] = $this->HrObj->getAllUserByposition($PositionID);
// print_r(teamDeisn);
$data['GoalYear'] = $this->HrObj->YearGoal();
$data['GoalMonth'] = $this->HrObj->KPIMonth();	
$this->load->view("hrzone/addContentWriterKPI", $data);
}


public function AddWebDeveloperKPI()
{	

	
if($_SERVER['REQUEST_METHOD'] == 'POST')
{		
		$id = $this->input->post('User_Id');
		$Year_Id= $this->input->post('Year_Id');
		$month_Id= $this->input->post('month_Id');
		// die;
		$this->form_validation->set_rules('User_Id[]', 'UserId', 'required');
		$this->form_validation->set_rules('Year_Id[]', 'Year_Id', 'required');
		$this->form_validation->set_rules('month_Id[]', 'month_Id', 'required');
		$this->form_validation->set_rules('kpiGoal_Points[]', 'kpiGoal_Points', 'required');
		$this->form_validation->set_rules('kpi_marks[]', 'kpi_marks', 'required|less_than[2]');
	if($this->form_validation->run() != FALSE)
	{	
		
		$dataKPI = array
        (
                //$last_user_id is the value of the foreign key to link the tables
               
                'UserId'       => $this->input->post('User_Id'),
                'Year_Id'       => $this->input->post('Year_Id'),
                'month_Id'       => $this->input->post('month_Id'),
                'kpiGoal_Points'       => $this->input->post('kpiGoal_Points'),
                'kpi_marks'       => $this->input->post('kpi_marks'),
                // 'kpiGoal_Comments'          => $this->input->post('kpiGoal_Comments')
        );

        $this->HrObj->KPIGoalsPoints($dataKPI);
       	$this->session->set_flashdata('message', '<script>alert("Your data updated successfully");</script>');
		redirect('hrzone/CompanyGoals/KpiDeveloperView/'.$id.'/'.$Year_Id.'/'.$month_Id, 'refresh');
		
		
	}
	
	
}





$PositionID = "Web Developer";
$data['User'] = $this->HrObj->getAllUserByposition($PositionID);
// print_r(teamDeisn);
$data['GoalYear'] = $this->HrObj->YearGoal();
$data['GoalMonth'] = $this->HrObj->KPIMonth();	
$this->load->view("hrzone/addDeveloperKPI", $data);
}


public function AddGraphicDesignerKPI()
{	

	
if($_SERVER['REQUEST_METHOD'] == 'POST')
{		
		$id = $this->input->post('User_Id');
		$Year_Id= $this->input->post('Year_Id');
		$month_Id= $this->input->post('month_Id');
		// die;
		$this->form_validation->set_rules('User_Id[]', 'UserId', 'required');
		$this->form_validation->set_rules('Year_Id[]', 'Year_Id', 'required');
		$this->form_validation->set_rules('month_Id[]', 'month_Id', 'required');
		$this->form_validation->set_rules('kpiGoal_Points[]', 'kpiGoal_Points', 'required');
		$this->form_validation->set_rules('kpi_marks[]', 'kpi_marks', 'required|less_than[2]');
	if($this->form_validation->run() != FALSE)
	{	
		
		$dataKPI = array
        (
                //$last_user_id is the value of the foreign key to link the tables
               
                'UserId'       => $this->input->post('User_Id'),
                'Year_Id'       => $this->input->post('Year_Id'),
                'month_Id'       => $this->input->post('month_Id'),
                'kpiGoal_Points'       => $this->input->post('kpiGoal_Points'),
                'kpi_marks'       => $this->input->post('kpi_marks'),
                // 'kpiGoal_Comments'          => $this->input->post('kpiGoal_Comments')
        );

		$this->HrObj->KPIGoalsPoints($dataKPI);
		$this->session->set_flashdata('message', '<script>alert("Your data updated successfully");</script>');
		redirect('hrzone/CompanyGoals/KpiDesignerView/'.$id.'/'.$Year_Id.'/'.$month_Id, 'refresh');

	}
	
	
}




$PositionID = "Graphic Designer";
$data['User'] = $this->HrObj->getAllUserByposition($PositionID);
// print_r(teamDeisn);
$data['GoalYear'] = $this->HrObj->YearGoal();
$data['GoalMonth'] = $this->HrObj->KPIMonth();	
$this->load->view("hrzone/addDesignerKPI", $data);
}






	public function AddKPIMonthlyGoals()
	{		
		
		
		// echo "<pre>";
		// print_r($_POST); 
		// print_r($_FILES); 
if($this->input->post('User_Id') != "Select Employee") {		
		$id = $this->input->post('User_Id');
		$Year_Id= $this->input->post('Year_Id');
			$month_Id= $this->input->post('month_Id');
		// die;
		$this->form_validation->set_rules('User_Id[]', 'UserId', 'required');
		$this->form_validation->set_rules('Year_Id[]', 'Year_Id', 'required');
		$this->form_validation->set_rules('month_Id[]', 'month_Id', 'required');
		$this->form_validation->set_rules('kpiGoal_Points[]', 'kpiGoal_Points', 'required');
		$this->form_validation->set_rules('kpi_marks[]', 'kpi_marks', 'required|less_than[2]');
	if($this->form_validation->run() != FALSE)
	{	
		
		$dataKPI = array
        (
                //$last_user_id is the value of the foreign key to link the tables
               
                'UserId'       => $this->input->post('User_Id'),
                'Year_Id'       => $this->input->post('Year_Id'),
                'month_Id'       => $this->input->post('month_Id'),
                'kpiGoal_Points'       => $this->input->post('kpiGoal_Points'),
                'kpi_marks'       => $this->input->post('kpi_marks'),
                // 'kpiGoal_Comments'          => $this->input->post('kpiGoal_Comments')
        );

        $this->HrObj->KPIGoalsPoints($dataKPI);
        $EmployeeDetails = $this->EmpObj->getEmpDetails($id);
		
		if($EmployeeDetails->position == "SEO Analyst"){
			$this->session->set_flashdata('message', '<script>alert("Your data updated successfully");</script>');
			redirect('hrzone/CompanyGoals/KPISeoView/'.$id.'/'.$Year_Id.'/'.$month_Id, 'refresh');
		}else if($EmployeeDetails->position == "Web Developer"){
			$this->session->set_flashdata('message', '<script>alert("Your data updated successfully");</script>');
			redirect('hrzone/CompanyGoals/KpiDeveloperView/'.$id.'/'.$Year_Id.'/'.$month_Id, 'refresh');
		}else if($EmployeeDetails->position == "Graphic Designer"){
			$this->session->set_flashdata('message', '<script>alert("Your data updated successfully");</script>');
			redirect('hrzone/CompanyGoals/KpiDesignerView/'.$id.'/'.$Year_Id.'/'.$month_Id, 'refresh');
		}else{
			$this->session->set_flashdata('message', '<script>alert("Your data updated successfully");</script>');
			redirect('hrzone/CompanyGoals/KpiContentWriter/'.$id.'/'.$Year_Id.'/'.$month_Id, 'refresh');
		}
		
	}else{
		
		
		$EmployeeDetails = $this->EmpObj->getEmpDetails($id);
		
		if($EmployeeDetails->position == "SEO Analyst"){
			$this->session->set_flashdata('message', '<script>alert("Fill the all required fields!");</script>');
			redirect('hrzone/CompanyGoals/AddSeoAnalystKPI/', 'refresh');
		}else if($EmployeeDetails->position == "Web Developer"){
			$this->session->set_flashdata('message', '<script>alert("Fill the all required fields!");</script>');
			redirect('hrzone/CompanyGoals/AddWebDeveloperKPI/', 'refresh');
		}else if($EmployeeDetails->position == "Graphic Designer"){
			$this->session->set_flashdata('message', '<script>alert("Fill the all required fields!");</script>');
			redirect('hrzone/CompanyGoals/AddGraphicDesignerKPI/', 'refresh');
		}else{
			$this->session->set_flashdata('message', '<script>alert("Fill the all required fields!");</script>');
			redirect('hrzone/CompanyGoals/AddKPIContentWriterTeam/', 'refresh');
		}
	}
}else{
	
	$this->session->set_flashdata('message', '<script>alert("Select the employee first");</script>');
			redirect('hrzone/CompanyGoals/AddSeoAnalystKPI/', 'refresh');
}
}	

	
public function TeamKPIView(){
	$data['teamDeisn'] = $this->HrObj->goalTeamDesignation();
	$data['GoalYear'] = $this->HrObj->YearGoal();
	$data['GoalMonth'] = $this->HrObj->KPIMonth();
	$this->load->view("hrzone/TeamKPI", $data);
}

public function SeoTeam(){
	$data['teamDeisn'] = $this->HrObj->goalTeamDesignation();
	$data['GoalYear'] = $this->HrObj->YearGoal();
	$data['GoalMonth'] = $this->HrObj->KPIMonth();
	$this->load->view("hrzone/KpiSeoTeam", $data);
}

public function ContentWriterTeam(){
	$data['teamDeisn'] = $this->HrObj->goalTeamDesignation();
	$data['GoalYear'] = $this->HrObj->YearGoal();
	$data['GoalMonth'] = $this->HrObj->KPIMonth();
	$this->load->view("hrzone/KpiContentWriterTeam", $data);
}

public function DeveloperTeam(){
	$data['teamDeisn'] = $this->HrObj->goalTeamDesignation();
	$data['GoalYear'] = $this->HrObj->YearGoal();
	$data['GoalMonth'] = $this->HrObj->KPIMonth();
	$this->load->view("hrzone/KpiDeveloperTeam", $data);
}

public function DesignerTeam(){
	$data['teamDeisn'] = $this->HrObj->goalTeamDesignation();
	$data['GoalYear'] = $this->HrObj->YearGoal();
	$data['GoalMonth'] = $this->HrObj->KPIMonth();
	$this->load->view("hrzone/KpiDesignerTeam", $data);
}



	
	
public function KPIGoalView($id){
	
	$userId = $id;
	// $monthId = $this->input->get('month_Id');
	$data['UserDE'] = $this->HrObj->getSeoUser();
	$data['User'] = $this->EmpObj->getUser($userId);
	// $data['UserKpi'] = $this->HrObj->KPIPintsMonthWise($userId);
	// print_r($User);die;
	$data['GoalYear'] = $this->HrObj->YearGoal();
	$data['GoalMonth'] = $this->HrObj->KPIMonth();
	$this->load->view("hrzone/empKPIGoalsView", $data);
}
	


	
public function KPISeoView($id = null){
	$user_Id = $this->uri->segment(4);
		$Year_Id = $this->uri->segment(5);
		$Month_Id = $this->uri->segment(6);
		$data['user_Id'] = $this->uri->segment(4);
		$data['Year_Id'] = $this->uri->segment(5);
		$data['Month_Id'] = $this->uri->segment(6);
	
	$userId = $id;
	// $monthId = $this->input->get('month_Id');
	$data['UserDE'] = $this->HrObj->getSeoUser();
	$data['User'] = $this->EmpObj->getUser($userId);
	// $data['UserKpi'] = $this->HrObj->KPIPintsMonthWise($userId);
	// print_r($User);die;
	$data['GoalYear'] = $this->HrObj->YearGoal();
	$data['GoalMonth'] = $this->HrObj->KPIMonth();
	$this->load->view("hrzone/empKPIGoalsView", $data);
}
	


public function KPIContentWriterView($id){
	
	
	$user_Id = $this->uri->segment(4);
		$Year_Id = $this->uri->segment(5);
		$Month_Id = $this->uri->segment(6);
		$data['user_Id'] = $this->uri->segment(4);
		$data['Year_Id'] = $this->uri->segment(5);
		$data['Month_Id'] = $this->uri->segment(6);
	$userId = $id;
	// $monthId = $this->input->get('month_Id');
	$data['UserDE'] = $this->HrObj->getContentWriterUser();
	$data['User'] = $this->EmpObj->getUser($userId);
	// $data['UserKpi'] = $this->HrObj->KPIPintsMonthWise($userId);
	// print_r($User);die;
	$data['GoalYear'] = $this->HrObj->YearGoal();
	$data['GoalMonth'] = $this->HrObj->KPIMonth();
	$this->load->view("hrzone/KpiContentWriter", $data);
}
	


public function KPIDeveloperView($id){
	$user_Id = $this->uri->segment(4);
		$Year_Id = $this->uri->segment(5);
		$Month_Id = $this->uri->segment(6);
		$data['user_Id'] = $this->uri->segment(4);
		$data['Year_Id'] = $this->uri->segment(5);
		$data['Month_Id'] = $this->uri->segment(6);
	$userId = $id;
	// $monthId = $this->input->get('month_Id');
	$data['UserDE'] = $this->HrObj->getDeveloperUser();
	$data['User'] = $this->EmpObj->getUser($userId);
	// $data['UserKpi'] = $this->HrObj->KPIPintsMonthWise($userId);
	// print_r($User);die;
	$data['GoalYear'] = $this->HrObj->YearGoal();
	$data['GoalMonth'] = $this->HrObj->KPIMonth();
	$this->load->view("hrzone/KpiDeveloperView", $data);
}
	


public function KPIDesignerView($id){
	$user_Id = $this->uri->segment(4);
		$Year_Id = $this->uri->segment(5);
		$Month_Id = $this->uri->segment(6);
		$data['user_Id'] = $this->uri->segment(4);
		$data['Year_Id'] = $this->uri->segment(5);
		$data['Month_Id'] = $this->uri->segment(6);
	
	$userId = $id;
	// $monthId = $this->input->get('month_Id');
	$data['UserDE'] = $this->HrObj->getDesignerUser();
	$data['User'] = $this->EmpObj->getUser($userId);
	// $data['UserKpi'] = $this->HrObj->KPIPintsMonthWise($userId);
	// print_r($User);die;
	$data['GoalYear'] = $this->HrObj->YearGoal();
	$data['GoalMonth'] = $this->HrObj->KPIMonth();
	$this->load->view("hrzone/KpiDesignerView", $data);
}
	








public function KPIEditByMonth(){
	
		$user_Id = $this->uri->segment(4);
		$Year_Id = $this->uri->segment(5);
		$Month_Id = $this->uri->segment(6);
		$data['user_Id'] = $this->uri->segment(4);
		$data['Year_Id'] = $this->uri->segment(5);
		$data['Month_Id'] = $this->uri->segment(6);
		// print_r($_GET);die;
	// $datadd = $this->HrObj->KPIPintsAchieMonthWise($user_Id, $Year_Id, $Month_Id);
		 // print_r($datadd);die;
	$data['EmployeeKPIInfo'] = $this->HrObj->KPIPintsAchieMonthWise($user_Id, $Year_Id, $Month_Id);
		
	$this->load->view("hrzone/EditKPIPoints", $data);	
}		
  

public function EmployeeKPIEdit(){
	// echo "<pre>";
	// print_r($_POST);die;
			$this->load->library('form_validation');
			$id= $this->input->post('UserId');
			$Year_Id= $this->input->post('Year_Id');
			$month_Id= $this->input->post('month_Id');
		// $this->form_validation->set_rules('UserId', 'User_Id', 'required');
		// $this->form_validation->set_rules('Year_Id', 'Year_Id', 'required');
		// $this->form_validation->set_rules('month_Id', 'month_Id', 'required');
		
		$this->form_validation->set_rules('kpiGoal_Points[]', 'kpiGoal_Points', 'required');
		$this->form_validation->set_rules('kpi_marks[]', 'kpi_marks', 'required');
		$this->form_validation->set_rules('afterKpi_marks[]', 'afterKpi_marks', 'required|less_than[2]');
	
	// echo "ASIF";die;
	if($this->form_validation->run() != FALSE)
	{		
		$id= $this->input->post('UserId');
		// echo "ASIF";die;
		$data6 = array
        (
                
                'UserId'       => $this->input->post('UserId'),
                'Year_Id'       => $this->input->post('Year_Id'),
                'month_Id'       => $this->input->post('month_Id'),
                'kpiGoal_Points'       => $this->input->post('kpiGoal_Points'),
                'kpi_marks'          => $this->input->post('kpi_marks'),
                'afterKpi_marks'          => $this->input->post('afterKpi_marks')
        ); 
		$result = $this->HrObj->updateKPIPointsInfo($data6);
		$EmployeeDetails = $this->EmpObj->getEmpDetails($id);
		
		if($EmployeeDetails->position == "SEO Analyst"){
			$this->session->set_flashdata('message', '<script>alert("Your data updated successfully");</script>');
			redirect('hrzone/CompanyGoals/KPISeoView/'.$id.'/'.$Year_Id.'/'.$month_Id, 'refresh');
		}else if($EmployeeDetails->position == "Web Developer"){
			$this->session->set_flashdata('message', '<script>alert("Your data updated successfully");</script>');
			redirect('hrzone/CompanyGoals/KpiDeveloperView/'.$id.'/'.$Year_Id.'/'.$month_Id, 'refresh');
		}else if($EmployeeDetails->position == "Graphic Designer"){
			$this->session->set_flashdata('message', '<script>alert("Your data updated successfully");</script>');
			redirect('hrzone/CompanyGoals/KpiDesignerView/'.$id.'/'.$Year_Id.'/'.$month_Id, 'refresh');
		}else{
			$this->session->set_flashdata('message', '<script>alert("Your data updated successfully");</script>');
			redirect('hrzone/CompanyGoals/KpiContentWriter/'.$id.'/'.$Year_Id.'/'.$month_Id, 'refresh');
		}
		// die;
			
		}
		else{
			// echo "Kashif";die;
			$EmployeeDetails = $this->EmpObj->getEmpDetails($id);
		
		if($EmployeeDetails->position == "SEO Analyst"){
			$this->session->set_flashdata('message', '<script>alert("Fill the all required fields!");</script>');
			redirect('hrzone/CompanyGoals/KPIEditByMonth/'.$id.'/'.$Year_Id.'/'.$month_Id, 'refresh');
		}else if($EmployeeDetails->position == "Web Developer"){
			$this->session->set_flashdata('message', '<script>alert("Fill the all required fields!");</script>');
			redirect('hrzone/CompanyGoals/KPIEditByMonth/'.$id.'/'.$Year_Id.'/'.$month_Id, 'refresh');
		}else if($EmployeeDetails->position == "Graphic Designer"){
			$this->session->set_flashdata('message', '<script>alert("Fill the all required fields!");</script>');
			redirect('hrzone/CompanyGoals/KPIEditByMonth/'.$id.'/'.$Year_Id.'/'.$month_Id, 'refresh');
		}else{
			$this->session->set_flashdata('message', '<script>alert("Fill the all required fields!");</script>');
			redirect('hrzone/CompanyGoals/KPIEditByMonth/'.$id.'/'.$Year_Id.'/'.$month_Id, 'refresh');
		}
			
		}
}		
  
public function CompanyGoalsEdit()
{		


	$Year_Id = $this->uri->segment(4);
	$data['Year_Id'] = $this->uri->segment(4);
	// $CompanyGoalInfo = $this->HrObj->goalPintsYearWise($this->uri->segment(4));
	$data['CompanyGoalInfo'] = $this->HrObj->goalPintsYearWise($this->uri->segment(4));
		 // print_r($CompanyGoalInfo);die;
	$this->load->view("hrzone/EditCompanyGoals", $data);
}



public function SeoGoalsEdit()
{		


	$Year_Id = $this->uri->segment(4);
	$data['Year_Id'] = $this->uri->segment(4);
	// $CompanyGoalInfo = $this->HrObj->goalPintsYearWise($this->uri->segment(4));
	// $SeoGoalInfo = $this->HrObj->SeoGoalPintsYearWise($this->uri->segment(4));
	$data['SeoGoalInfo'] = $this->HrObj->SeoGoalPintsYearWise($this->uri->segment(4));
		 // print_r($SeoGoalInfo);die;
	$this->load->view("hrzone/seoEdit", $data);
}

public function DeveloperGoalsEdit()
{		


	$Year_Id = $this->uri->segment(4);
	$data['Year_Id'] = $this->uri->segment(4);
	// $CompanyGoalInfo = $this->HrObj->goalPintsYearWise($this->uri->segment(4));
	// $SeoGoalInfo = $this->HrObj->SeoGoalPintsYearWise($this->uri->segment(4));
	$data['SeoGoalInfo'] = $this->HrObj->SeoGoalPintsYearWise($this->uri->segment(4));
		 // print_r($SeoGoalInfo);die;
	$this->load->view("hrzone/developerEdit", $data);
}

public function DesignerGoalsEdit()
{		


	$Year_Id = $this->uri->segment(4);
	$data['Year_Id'] = $this->uri->segment(4);
	// $CompanyGoalInfo = $this->HrObj->goalPintsYearWise($this->uri->segment(4));
	// $SeoGoalInfo = $this->HrObj->SeoGoalPintsYearWise($this->uri->segment(4));
	$data['SeoGoalInfo'] = $this->HrObj->SeoGoalPintsYearWise($this->uri->segment(4));
		 // print_r($SeoGoalInfo);die;
	$this->load->view("hrzone/designerEdit", $data);
}

public function ContentWriterGoalsEdit()
{		


	$Year_Id = $this->uri->segment(4);
	$data['Year_Id'] = $this->uri->segment(4);
	// $CompanyGoalInfo = $this->HrObj->goalPintsYearWise($this->uri->segment(4));
	// $SeoGoalInfo = $this->HrObj->SeoGoalPintsYearWise($this->uri->segment(4));
	$data['SeoGoalInfo'] = $this->HrObj->SeoGoalPintsYearWise($this->uri->segment(4));
		 // print_r($SeoGoalInfo);die;
	$this->load->view("hrzone/contentWriterEdit", $data);
}



public function CompanyGoalsUpdate(){
	// echo "<pre>";
	// print_r($_POST);die;
			$Year_Id= $this->input->post('Year_Id');
			
	if(!empty($this->input->post()))
	{
		// echo "ASIF";die;
		$data6 = array
        (
                
                'Year_Id'       => $this->input->post('Year_Id'),
                'goal_points'       => $this->input->post('goal_points'),
                'assignee'          => $this->input->post('assignee'),
                'goal_comments'          => $this->input->post('goal_comments'),
                'work_status'          => $this->input->post('work_status')
		); 
			$result = $this->HrObj->updateCompanyGoalsInfo($data6);
		
			$this->session->set_flashdata('message', '<script>alert("Your data updated successfully");</script>');
			redirect('hrzone/CompanyGoals/CompanyGoalInfo/'.$Year_Id, 'refresh');
		
	}
	else
	{
			// echo "Kashif";die;
			
			$this->session->set_flashdata('message', '<script>alert("Fill the all required fields!");</script>');
			redirect('hrzone/CompanyGoals/CompanyGoalsEdit/'.$Year_Id, 'refresh');
		
		
	}
	
}		
  

public function SeoGoalsUpdate(){
	// echo "<pre>";
	// print_r($_POST);die;
			$Year_Id= $this->input->post('Year_Id');
			
	if(!empty($this->input->post()))
	{
		// echo "ASIF";die;
		$designationId = 1;
		$data6 = array
        (
                
                'Year_Id'       => $this->input->post('Year_Id'),
                'seogoal_points'       => $this->input->post('seogoal_points'),
               'seogoal_comments'          => $this->input->post('seogoal_comments'),
                'work_status'          => $this->input->post('work_status')
		); 
			$result = $this->HrObj->updateSeoGoalsInfo($data6);
		
			$this->session->set_flashdata('message', '<script>alert("Your data updated successfully");</script>');
			redirect('hrzone/CompanyGoals/SeoGoalView/'.$Year_Id, 'refresh');
		
	}
	else
	{
			// echo "Kashif";die;
			
			$this->session->set_flashdata('message', '<script>alert("Fill the all required fields!");</script>');
			redirect('hrzone/CompanyGoals/SeoGoalsEdit/'.$Year_Id, 'refresh');
		
		
	}
	
}		
  
public function DeveloperGoalsUpdate(){
	// echo "<pre>";
	// print_r($_POST);die;
			$Year_Id= $this->input->post('Year_Id');
			
	if(!empty($this->input->post()))
	{
		// echo "ASIF";die;
		$designationId = 3;
		$data6 = array
        (
                
                'Year_Id'       => $this->input->post('Year_Id'),
                'seogoal_points'       => $this->input->post('seogoal_points'),
               'seogoal_comments'          => $this->input->post('seogoal_comments'),
                'work_status'          => $this->input->post('work_status')
		); 
			$result = $this->HrObj->updateSeoGoalsInfo($data6);
		
			$this->session->set_flashdata('message', '<script>alert("Your data updated successfully");</script>');
			redirect('hrzone/CompanyGoals/developerGoalView/'.$Year_Id, 'refresh');
		
	}
	else
	{
			// echo "Kashif";die;
			
			$this->session->set_flashdata('message', '<script>alert("Fill the all required fields!");</script>');
			redirect('hrzone/CompanyGoals/DeveloperGoalsEdit/'.$Year_Id, 'refresh');
		
		
	}
	
}		
  
public function DesignerGoalsUpdate(){
	// echo "<pre>";
	// print_r($_POST);die;
			$Year_Id= $this->input->post('Year_Id');
			
	if(!empty($this->input->post()))
	{
		// echo "ASIF";die;
		$designationId = 4;
		$data6 = array
        (
                
                'Year_Id'       => $this->input->post('Year_Id'),
                'seogoal_points'       => $this->input->post('seogoal_points'),
               'seogoal_comments'          => $this->input->post('seogoal_comments'),
                'work_status'          => $this->input->post('work_status')
		); 
			$result = $this->HrObj->updateSeoGoalsInfo($data6);
		
			$this->session->set_flashdata('message', '<script>alert("Your data updated successfully");</script>');
			redirect('hrzone/CompanyGoals/designerGoalView/'.$Year_Id, 'refresh');
		
	}
	else
	{
			// echo "Kashif";die;
			
			$this->session->set_flashdata('message', '<script>alert("Fill the all required fields!");</script>');
			redirect('hrzone/CompanyGoals/DesignerGoalsEdit/'.$Year_Id, 'refresh');
		
		
	}
	
}		
  
public function ContentWriterGoalsUpdate(){
	// echo "<pre>";
	// print_r($_POST);die;
			$Year_Id= $this->input->post('Year_Id');
			
	if(!empty($this->input->post()))
	{
		// echo "ASIF";die;
		$designationId = 2;
		$data6 = array
        (
                
                'Year_Id'       => $this->input->post('Year_Id'),
                'seogoal_points'       => $this->input->post('seogoal_points'),
               'seogoal_comments'          => $this->input->post('seogoal_comments'),
                'work_status'          => $this->input->post('work_status')
		); 
			$result = $this->HrObj->updateSeoGoalsInfo($data6);
		
			$this->session->set_flashdata('message', '<script>alert("Your data updated successfully");</script>');
			redirect('hrzone/CompanyGoals/contentWriterGoalView/'.$Year_Id, 'refresh');
		
	}
	else
	{
			// echo "Kashif";die;
			
			$this->session->set_flashdata('message', '<script>alert("Fill the all required fields!");</script>');
			redirect('hrzone/CompanyGoals/ContentWriterGoalsEdit/'.$Year_Id, 'refresh');
		
		
	}
	
}		
  



public function KPIPointsByMonth(){
		// print_r($_POST);die;
		// print_r($_GET);die;
		
		if(!empty($this->input->get())) {
			$UB = $this->input->get('User_Id');
			 $UserIDB = (array)$UB;
			 
			 $YB = $this->input->get('YearID');
			 $YearIDB = (array)$YB;
			 
			 $MB = $this->input->get('MonthID');
			 $MonthIDB = (array)$MB;
			 
			 
			 
		 $userData = $this->HrObj->getempKPIUser($this->input->get('User_Id'));
		 // print_r($userData);die;
					$result = [];  

					foreach($userData as $v) {
					
					$getKpiPointsAndMarks = $this->HrObj->KPIPintsMonthWise($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					// print_r($getKpiPointsAndMarks);die;
					$getKpiMarks = $this->KpiModel->getMarks($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					$getKpiMarksObtained = $this->KpiModel->getMarksObtained($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					// print_r($getUserMonthDays);die;
					$result[]= [
					'userId'=>$v->id,
					'NameEmp'=>$v->name,
					'UserempID'=>$UserIDB,
					'YearempID'=>$YearIDB,
					'MonthempID'=>$MonthIDB,
					'PointsAndMarks'=> $getKpiPointsAndMarks,
					'KpiMarks'=> $getKpiMarks,
					'MarksObtained'=> $getKpiMarksObtained

					];
					}	
					
					
					
					
					
					
		 
         echo json_encode(['data'=> $result]);
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
		
		
	}


	
	public function MonthlyKPIUpdateById(){
		// print_r($_POST);die;
		if(!empty($this->input->post())) {
         $id = $this->input->post('kpi_Id');
		 $data6 = array
        (
                //$last_user_id is the value of the foreign key to link the tables
               
                
                'kpiGoal_Points'       => $this->input->post('kpiGoal_Points'),
                'kpi_marks'       => $this->input->post('kpi_marks'),
                'afterKpi_marks'       => $this->input->post('afterKpi_marks'),
                'employeeKPI_Id'          => $this->input->post('kpi_Id')
        ); 
		 $result = $this->HrObj->KPIMonthlyUpdate($id, $data6);
			// print_r($result);die;
			// return true;
         echo json_encode(['data'=> 'Success', 'message'=>'Your data successfully Updated']);
		}
		else{
			return false;
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
		
	}
	
	
	public function EmployeekpiGoalsById(){
		// print_r($_POST);die;
		// print_r($_GET);die;
		if(!empty($this->input->get())) {
		
			 
		 $userData = $this->HrObj->getKPImarksbyId($this->input->get('id'));
		 // print_r($userData);die;
					$result = [];  

					foreach($userData as $v) {
					
					// $getKPIMarks = $this->HrObj->getKPIMarksAndComments($v->id, $this->input->get('MonthID'), $this->input->get('YearID'));
					// print_r($getKPIMarks);die;
					$result[]= [
					'employeeKPI_Id'=>$v->employeeKPI_Id,
					'kpiGoal_Points' => $v->kpiGoal_Points,
					'afterKpi_marks' => $v->afterKpi_marks,
					'kpi_marks' => $v->kpi_marks
					

					];
					}	
					
					
					
					
					
		 
         echo json_encode($result);
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
	}
	
	
	
	
	
	
	
	public function AddafterKpiMarks(){
		// print_r($_POST);die;
		if(!empty($this->input->post())) {
        
		 $data6 = array
        (
                //$last_user_id is the value of the foreign key to link the tables
               
                
                'AfterKpiMarks'       => $this->input->post('KpiMarks'),
                'AfterKPIComments'       => $this->input->post('KPIComments'),
                'UserId'       => $this->input->post('Emp_UserID'),
                'Year_Id'       => $this->input->post('KPI_YearId'),
                'month_Id'          => $this->input->post('KPI_MonthId')
        ); 
		 $result = $this->HrObj->AddKPIMarks($data6);
			// print_r($result);die;
			// return true;
         echo json_encode(['data'=> 'Success', 'message'=>'Your data successfully Updated']);
		}
		else{
			return false;
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
		
	}
	
	
	
	
	
	
	public function KPITeamByPosition(){
		// print_r($_POST);die;
		// print_r($_GET);die;
		if(!empty($this->input->get())) {
		
			 
		 $userData = $this->HrObj->getAllUserByposition($this->input->get('PositionID'), $this->input->get('MonthID'), $this->input->get('YearID'));
		 // print_r($userData);die;
					$result = [];  

					foreach($userData as $v) {
					
					$getKPIMarks = $this->HrObj->getKPIMarksAndComments($v->id, $this->input->get('MonthID'), $this->input->get('YearID'));
					// print_r($getKPIMarks);die;
					$result[]= [
					'userId'=>$v->id,
					'userName' => $v->name,
					'employee_id' => $v->employee_id,
					'KPIMarks'=> $getKPIMarks
					

					];
					}	
					
					
					
					
					
		 
         echo json_encode(['data'=> $result ]);
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
	}
	
	
	
	
	
	
	public function KPISEOTeam(){
		// print_r($_POST);die;
		// print_r($_GET);die;
		if(!empty($this->input->get())) {
		
			 $PositionID = "SEO Analyst";
		 $userData = $this->HrObj->getAllUserByposition($PositionID);
		 // print_r($userData);die;
					$result = [];  

					foreach($userData as $v) {
					
					$getKPIMarks = $this->HrObj->getKPIMarksAndComments($v->id, $this->input->get('MonthID'), $this->input->get('YearID'));
					// print_r($getKPIMarks);die;
					$result[]= [
					'userId'=>$v->id,
					'userName' => $v->name,
					'employee_id' => $v->employee_id,
					'KPIMarks'=> $getKPIMarks,
					

					];
					}	
					
					
					
		 
         echo json_encode(['data'=> $result ]);
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
	}
	
	
	
	
	
	
	public function KPIContentWriterTeam(){
		// print_r($_POST);die;
		// print_r($_GET);die;
		if(!empty($this->input->get())) {
		
			 
		$PositionID = "Content Writer";
		 $userData = $this->HrObj->getAllUserByposition($PositionID);
		 // print_r($userData);die;
					$result = [];  

					foreach($userData as $v) {
					
					$getKPIMarks = $this->HrObj->getKPIMarksAndComments($v->id, $this->input->get('MonthID'), $this->input->get('YearID'));
					// print_r($getKPIMarks);die;
					$result[]= [
					'userId'=>$v->id,
					'userName' => $v->name,
					'employee_id' => $v->employee_id,
					'KPIMarks'=> $getKPIMarks,
					

					];
					}	
					
					
					
		 
         echo json_encode(['data'=> $result ]);
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
	}
	
	
	
	
	
	
	public function KPIDeveloperTeam(){
		// print_r($_POST);die;
		// print_r($_GET);die;
		if(!empty($this->input->get())) {
		
			 
		$PositionID = "Web Developer";
		 $userData = $this->HrObj->getAllUserByposition($PositionID);
		 // print_r($userData);die;
					$result = [];  

					foreach($userData as $v) {
					
					$getKPIMarks = $this->HrObj->getKPIMarksAndComments($v->id, $this->input->get('MonthID'), $this->input->get('YearID'));
					// print_r($getKPIMarks);die;
					$result[]= [
					'userId'=>$v->id,
					'userName' => $v->name,
					'employee_id' => $v->employee_id,
					'KPIMarks'=> $getKPIMarks,
					

					];
					}	
					
					
					
		 
         echo json_encode(['data'=> $result ]);
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
	}
	
	
	
	
	
	public function KPIDesignerTeam(){
		// print_r($_POST);die;
		// print_r($_GET);die;
		if(!empty($this->input->get())) {
		
			 
		 $PositionID = "Graphic Designer";
		 $userData = $this->HrObj->getAllUserByposition($PositionID);
		 // print_r($userData);die;
					$result = [];  

					foreach($userData as $v) {
					
					$getKPIMarks = $this->HrObj->getKPIMarksAndComments($v->id, $this->input->get('MonthID'), $this->input->get('YearID'));
					// print_r($getKPIMarks);die;
					$result[]= [
					'userId'=>$v->id,
					'userName' => $v->name,
					'employee_id' => $v->employee_id,
					'KPIMarks'=> $getKPIMarks,
					

					];
					}	
					
					
					
		 
         echo json_encode(['data'=> $result ]);
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	public function KPIGoalDeleteById(){
		// print_r($_GET);die;
		if(!empty($this->input->get())) {
         $result = $this->HrObj->KPIGoalsDelete($this->input->get('id'));
			// print_r($result);die;
			//return true;
         echo json_encode(['data'=> $result, 'message'=>'success']);
		}
		else{
			return false;
			// echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
		
	}



}