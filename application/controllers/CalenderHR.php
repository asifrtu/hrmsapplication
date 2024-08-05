<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CalenderHR extends CI_Controller {
	private $UserId;
	
	
	
	public function __construct(){
    parent::__construct();
    $this->load->model("EmployeeModel", 'EmpObj');
    $this->load->model("HrModel", "HrObj");
	$this->load->model("PayModel", "PayObj");
	$this->load->model("AttendanceModel");
	$this->load->model("CalenderModel");
	$this->load->model("HierarchyModel");
	$this->load->model("SeparationModel");
	$this->load->model("CommentModel");
	$this->load->model("SeparationModel");
	$this->load->model("AppraisalModel");
	$this->load->library('HrLib_user');
	$data= $this->session->userdata();
	
	
	$this->UserId = $data['auth']['id'];
  } 
 
public function index()
{	
	// $UserInfo = $this->AttendanceModel->getAllUser();
	
	// $selectedUser = $this->CalenderModel->selectedEventUser();
	// $selected = explode(',', $selectedUser->eventUrl);
	// echo "<pre>";
	// print_r($selected);
	// if (in_array("66", $selected, TRUE))
	// {
	// echo "Match found<br>";
	// }
	// else
	// {
	// echo "Match not found<br>";
	// }
	
	
	
	// die;
	// echo $selectedUser->;die;
	// $data['selectedUser'] = $this->CalenderModel->selectedEventUser();
	$data['UserInfo'] = $this->AttendanceModel->getAllUser();
	
	$this->load->view("hrzone/allEvent", $data);
}	

public function Day()
{	
	
	$this->load->view("hrzone/dayEvent", 'refresh');
}	

public function DayList()
{	
	
	$this->load->view("hrzone/dayEventList", 'refresh');
}	


public function WeekInfo()
{	
	
	$this->load->view("hrzone/weakEvent", 'refresh');
}	




public function Events()
{	
	
	$this->load->view("hrzone/EventDev", 'refresh');
}	




	public function Event()
{	
	
	$this->load->view("hrzone/EventYearlyCalender", 'refresh');
}


public function EventCalender(){
		// print_r($_POST);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		// echo $Doctr =$this->uri->segment(3);die;
		// echo $start =$this->input->get('start', TRUE);
		// echo $end =$this->input->get('end', TRUE);die;
		$getUserAttend = $this->CalenderModel->getEvent();
			// print_r($getUserAttend);die;
		 
		 $result = [];
		 
		 foreach($getUserAttend->result_array() as $v){
			 
			$dataDasste = $v['startEvent'].' '.$v['startEventTime']; 
			$dataDste = $v['endEvent'].' '.$v['endEventTime']; 
		$varDate = date("Y-m-d H:i:s", strtotime($dataDasste));// = is_array($dataDate); 
		$varte = date("Y-m-d H:i:s", strtotime($dataDste));// = is_array($dataDate); 
		// echo $varDate = explode('-', date_parse($dataDate));
		// echo $varDate[0];die;
		// $startDate = $YID.'-'.$MIDS.'-0'.$DID;
				// strtotime	date("Y/m/d H:i:s")
			 $data[] = array(
			 
			 'id' => $v['Id'],
			 'title' => $v['title'],
			 'description' => $v['discription'],
			 'start' => $varDate, //date("Y-m-d H:i", strtotime($v['startEvent'])),
			 'end' => $varte, //date("Y-m-d H:i", strtotime($v['endEvent'])),
			 'backgroundColor' => $v['eventBackground'],
			 // 'meridiem'=> false,
			 'textColor' => $v['textColor']
			
			 
			 );
			 
		
		 }
         echo json_encode($data);
		
		
}


public function ViewCalender(){
		if(!empty($this->input->get('id'))) {
			
			
			
		$userData = $this->CalenderModel->ViewEvent($this->input->get('id'));
		
		
		   $result = [];
			 
			 foreach($userData as $v){
			 $result = [
			 
			 'Id' => $v->Id,
			 'title' => $v->title,
			 'discription' => $v->discription,
			 'startEventTime' => $v->startEventTime,
			 'endEventTime' => $v->endEventTime,
			 'startEvent' => $v->startEvent,
			 'endEvent' => $v->endEvent,
			 'eventBackground' => $v->eventBackground,
			 'textColor' => $v->textColor
			 
			 ];
			 
		 }
																
		 
         echo json_encode($result);
		 
		 
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
		
}


public function EventYCalender(){
		// print_r($_POST);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		// echo $Doctr =$this->uri->segment(3);die;
		// echo $start =$this->input->get('start', TRUE);
		// echo $end =$this->input->get('end', TRUE);die;
		$getUserAttend = $this->CalenderModel->getEvent();
			// print_r($getUserAttend);die;
		 
		 $result = [];
		 
		 foreach($getUserAttend->result_array() as $v){
			 
			// echo $dataDate = $v['startEvent']; 
		// echo $dataDasste = is_array($dataDate); 
		// echo $varDate = explode('-', date_parse($dataDate));
		// echo $varDate[0];die;
		// $startDate = $YID.'-'.$MIDS.'-0'.$DID;
					
			 $data[] = array(
			 
			 'id' => $v['Id'],
			 'title' => $v['title'], //str_replace($aa[0], "aa", $aa[0]);,
			 'description' => $v['discription'],
			 'start' => $v['startEvent'], //date("Y-m-d H:i", strtotime($v['startEvent'])),
			 'end' => $v['endEvent'], //date("Y-m-d H:i", strtotime($v['endEvent'])),
			 'backgroundColor' => '#2e2868!important',
			 // 'meridiem'=> false,
			 'textColor' => $v['textColor']
			
			 
			 );
			 
		
		 }
         echo json_encode($data);
		
		
}



public function EventHolidayCalender(){
		// print_r($_POST);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		// echo $Doctr =$this->uri->segment(3);die;
		// echo $start =$this->input->get('start', TRUE);
		// echo $end =$this->input->get('end', TRUE);die;
		$getUserAttend = $this->AttendanceModel->getHolidayEventCalender();
			// print_r($getUserAttend);die;
		 
		 $result = [];
		 
		 foreach($getUserAttend->result_array() as $v){
			 
			// $YID = $this->input->get('YearID');
         // $MID = $this->input->get('MonthID');
         // $MIDS = $MID + 1;
         // $DID = 1;
		echo $dataDate = $v['calender_date']; 
		echo $dataDasste = is_array($dataDate); 
		echo $varDate = explode('-', date_parse($dataDate));
		echo $varDate[0];die;
		$startDate = $YID.'-'.$MIDS.'-0'.$DID;
					
			 $data[] = array(
			 
			 'id' => $v['h_id'],
			 'title' => $v['holiday_list'],
			 // 'description' => $v['discription'],
			 'start' => $v['calender_date'],
			 'end' => $v['calender_date'],
			 'backgroundColor' => '#FC0B4D',
			 'allDay'=> true,
			 // 'textColor' => $v['textColor']
			
			 
			 );
			 
		
		 }
         echo json_encode($data);
		
		
}




	
	
public function addEvent()
{	
	
	// print_r($_POST);die;
	if(!empty($this->input->post('Eventeframework'))) {
			$dataDate = $this->input->post('Eventeframework');
			$varDate = implode(',', $dataDate);
			$AddEvent = [
			'title' => $this->input->post('Eventtitle'),
			'eventUrl' => $varDate,
			'textColor' => $this->input->post('EventeColor'),
			'eventBackground' => $this->input->post('EventeBackground'),
			'discription' => $this->input->post('Eventedesc'),
			'startEventTime' => $this->input->post('startDate'),
			'endEventTime' => $this->input->post('endTime'),
			'startEvent' => $this->input->post('endDate'),
			'endEvent' => $this->input->post('endDate')
			
			];
			
			$userData = $this->CalenderModel->AddCalenderEvent($AddEvent);
			// if($userData){
			// if(!empty($this->input->post('Eventeframework'))) {	
			// $data5 = array
			// (
			// $last_user_id is the value of the foreign key to link the tables
			// 'Event_Id'       => $userData, 
			// 'UserId'       => $this->input->post('Eventeframework')


			// );
				// $userData = $this->CalenderModel->AddSlectedUser($userData, $data5);
			// }
			// }
         echo json_encode(['data'=> 1, 'message'=>'Data updated Successfully']);
		}
		else{
			
			
			// $dataDate = $this->input->post('Eventeframework');
			// $varDate = implode(',', $dataDate);
			$AddEvent = [
			'title' => $this->input->post('Eventtitle'),
			// 'eventUrl' => $varDate,
			'textColor' => $this->input->post('EventeColor'),
			'eventBackground' => $this->input->post('EventeBackground'),
			'discription' => $this->input->post('Eventedesc'),
			'startEventTime' => $this->input->post('startDate'),
			'endEventTime' => $this->input->post('endTime'),
			'startEvent' => $this->input->post('endDate'),
			'endEvent' => $this->input->post('endDate')
			
			];
			
			$userData = $this->CalenderModel->AddCalenderEvent($AddEvent);
			echo json_encode(['data'=> 1, 'message'=>'Data updated Successfully']);

		}
}
	
	

	
	
	
public function updateEvent()
 {
	// print_r($_POST);die; 
	 
if(!empty($this->input->post('eventId')))
  {
	 
   $data = array(
			'title' => $this->input->post('Eventtitle'),
			'eventUrl' => $this->input->post('Eventeloc'),
			'textColor' => $this->input->post('EventeColor'),
			'eventBackground' => $this->input->post('EventeBackground'),
			'discription' => $this->input->post('Eventedesc'),
			'startEventTime' => $this->input->post('startTime'),
			'startEvent' => $this->input->post('startDate'),
			'endEventTime' => $this->input->post('endTime'),
			'endEvent' => $this->input->post('endDate')
   );

   $this->CalenderModel->update_event($data, $this->input->post('eventId'));
  echo json_encode(['data'=> 1, 'message'=>'Data updated Successfully']);
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
 
 
 }


public function deleteEvent()
 {
	// print_r($_POST);die; 
	 
if(!empty($this->input->post('eventId')))
  {
   
   $this->CalenderModel->delete_event($this->input->post('eventId'));
  echo json_encode(['data'=> 1, 'message'=>'Data deleted Successfully']);
	}
	else{
		echo json_encode(['data'=>0, 'message'=> 'data not found']);

	}
 
 
 }



	

}
