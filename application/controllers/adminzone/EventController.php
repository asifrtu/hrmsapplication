<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EventController extends CI_Controller {
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
	$this->load->library('Lib_user');
	$data= $this->session->userdata();
	
	
	$this->UserId = $data['auth']['id'];
	$this->name = $data['auth']['name'];
	$this->email = $data['auth']['email'];
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
	
	$this->load->view("adminzone/monthlyEvent", $data);
}	

public function Day()
{	
	
	$this->load->view("adminzone/dayEvent", 'refresh');
}	

public function DayList()
{	
	
	$this->load->view("adminzone/dayEventList", 'refresh');
}	


public function WeekInfo()
{	
	
	$this->load->view("adminzone/weekEvent", 'refresh');
}	




public function YearlyEvents()
{	
	
	$this->load->view("adminzone/YearlyEvent", 'refresh');
}	




	public function Event()
{	
	
	$this->load->view("adminzone/EventYearlyCalender", 'refresh');
}


public function EventCalender(){
		// print_r($_POST);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		// echo $Doctr =$this->uri->segment(3);die;
		// echo $start =$this->input->get('start', TRUE);
		// echo $end =$this->input->get('end', TRUE);die;
		$getUserAttend = $this->CalenderModel->getEmpEvent($this->UserId);
			// echo "<pre>";
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
			 'eventUrl' => explode(',', $v['eventUrl']),
			 'backgroundColor' => $v['eventBackground'],
			 // 'meridiem'=> false,
			 'textColor' => $v['textColor']
			
			 
			 );
			 
		
		 }
         echo json_encode($data);
		
		
}


public function ViewCalender(){
		if(!empty($this->input->get())) {
			
			
			
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
			 'eventUrl' => $v->eventUrl,
			 'eventBackground' => $v->eventBackground,
			 'textColor' => $v->textColor
			 
			 ];
			 
		 }
			
			$userDatas = $this->CalenderModel->getActiveUser();
		// echo "<pre>";
		// print_r($userDatas);die;
		   $resultdata = [];
			 
			 foreach($userDatas as $v){
			 $resultdata = [
			 
			 'Id' => $v['id'],
			 'name' => $v['name'],
			 // 'email' => $v['email']
			 
			 ];
			 
		 }
																
		 
         echo json_encode(['data'=>$result, 'Userdata'=>$userDatas]);
		 
		 
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
	
	date_default_timezone_set("Asia/Kolkata");
		$Notifydate = date('Y-m-d');
		$NotifyTime = date("h:i:s a");
	// print_r($_POST);die;
	$sart = $this->input->post('startDate');
	$end = $this->input->post('endTime');
	if(strtotime($sart) < strtotime($end)){
		
	$UserInfo = $this->EmpObj->getUser($this->UserId);
			
			$UserName = $UserInfo->name;
			// die;
	// die;
	if(!empty($this->input->post('Eventeframework'))) {
			$dataDate = $this->input->post('Eventeframework');
			$varDate = implode(',', $dataDate);
			$AddEvent = [
			'title' => $this->input->post('Eventtitle'),
			'eventUrl' => $varDate,
			'textColor' => $this->input->post('EventeColor'),
			'eventBackground' => $this->input->post('EventeBackground'),
			'createdBy' => $UserName,
			'discription' => $this->input->post('Eventedesc'),
			'startEventTime' => $this->input->post('startDate'),
			'endEventTime' => $this->input->post('endTime'),
			'startEvent' => $this->input->post('endDate'),
			'endEvent' => $this->input->post('endDate')
			
			];
			
			$userData = $this->CalenderModel->AddCalenderEvent($AddEvent);
			
			$Url = 'CalenderHR';
	
	$NotifyData = [
			'UserId' => $this->UserId,
			'Title' => "$this->name added a calender event",
			'description' => $this->input->post('Eventtitle'),
			'NotifyTime' => $NotifyTime,
			'NotifyDate' =>$Notifydate,
			'TitleUrl' => $Url
			
			];
			
	$data = $this->CommentModel->InsertNotify($NotifyData);
			
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
         echo json_encode(['data'=> 1, 'message'=>'Event created Successfully']);
		}
		else{
			
			
			// $dataDate = $this->input->post('Eventeframework');
			// $varDate = implode(',', $dataDate);
			$AddEvent = [
			'title' => $this->input->post('Eventtitle'),
			// 'eventUrl' => $varDate,
			'textColor' => $this->input->post('EventeColor'),
			'eventBackground' => $this->input->post('EventeBackground'),
			'createdBy' => $UserName,
			'discription' => $this->input->post('Eventedesc'),
			'startEventTime' => $this->input->post('startDate'),
			'endEventTime' => $this->input->post('endTime'),
			'startEvent' => $this->input->post('endDate'),
			'endEvent' => $this->input->post('endDate')
			
			];
			
			$userData = $this->CalenderModel->AddCalenderEvent($AddEvent);
			
			$Url = 'CalenderHR';
	
	$NotifyData = [
			'UserId' => $this->UserId,
			'Title' => "$this->name added a calender event",
			'description' => $this->input->post('Eventtitle'),
			'NotifyTime' => $NotifyTime,
			'NotifyDate' =>$Notifydate,
			'designation' =>'Admin',
			'TitleUrl' => $Url
			
			];
			
	$data = $this->CommentModel->InsertNotify($NotifyData);
			
			
			echo json_encode(['data'=> 1, 'message'=>'Event created Successfully']);

		}
		}else{
			echo json_encode(['data'=> 1, 'message'=>'Note: End time always greater than from the start time.']);
		}
}
	
	
	
	
	
public function updateEvent()
 {
	// print_r($_POST);die; 
	 
if(!empty($this->input->post('Eventeloc')))
  {
	 $dataDssate = $this->input->post('Eventeloc');
		$varxzDate = implode(',', $dataDssate);
   $data = array(
			'title' => $this->input->post('Eventtitle'),
			'eventUrl' => $varxzDate,
			'textColor' => $this->input->post('EventeColor'),
			'eventBackground' => $this->input->post('EventeBackground'),
			'discription' => $this->input->post('Eventedesc'),
			'startEventTime' => $this->input->post('startTime'),
			'startEvent' => $this->input->post('startDate'),
			'endEventTime' => $this->input->post('endTime'),
			'endEvent' => $this->input->post('endDate')
   );

   $this->CalenderModel->update_event($this->input->post('eventId'), $data);
  echo json_encode(['data'=> 1, 'message'=>'Data updated Successfully']);
		}
		else{
			
			$varDate = "";
			$data = array(
			'title' => $this->input->post('Eventtitle'),
			'eventUrl' => $varDate,
			'textColor' => $this->input->post('EventeColor'),
			'eventBackground' => $this->input->post('EventeBackground'),
			'discription' => $this->input->post('Eventedesc'),
			'startEventTime' => $this->input->post('startTime'),
			'startEvent' => $this->input->post('startDate'),
			'endEventTime' => $this->input->post('endTime'),
			'endEvent' => $this->input->post('endDate')
   );

   $this->CalenderModel->update_event($this->input->post('eventId'), $data);
  echo json_encode(['data'=> 1, 'message'=>'Data updated Successfully']);

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


public function AdminComment(){
		// print_r($_POST);die;
		// print_r($_GET);die;
		if(!empty($this->input->get())) {
		
			 
		 $userAdminData = $this->CommentModel->getCommentWallAdmin();
		 // print_r($userAdminData);die;
					$result = [];  

					foreach($userAdminData as $v) {
					
					
					
					
					// print_r($userAdminData);die;
					$result[]= [
					'userId'=>$v->UserId,
					'comment_Id' => $v->comment_Id,
					'CommentUser' => $v->Comment
					

					];
					}	
					
					
					$usAdminData = $this->CalenderModel->getSingleEmpEvent();
					// $usAdminData = $this->CalenderModel->getWallEvent();
					// echo "<pre>";
					// print_r($usAdminData);die;
					
					
					$resultEv = [];  

					foreach($usAdminData as $v) {
					
					// $data = explode(',', $v->eventUrl);
					
					// $id = $this->input->get($data);
					// die;
					// foreach($data as $d){
						
						// echo $data[i];
						// if(!empty($v->eventUrl)){
							
						// $tagUser = $this->CommentModel->getEventSingleUser($v->eventUrl);
						// }else{
							// $tagUser = [];
						// }
					// echo "<pre>";
					// print_r($tagUser);
					// die;
					// }
					
					$date=date_create($v->startEvent);
					
					$resultEv[]= [
					'Id'=>$v->Id,
					'title' => $v->title,
					// 'eventUrl' => $tagUser,
					'startTime' => $v->startEventTime,
					'createdBy' => $v->createdBy,
					'endTime' => $v->endEventTime,
					'dateEvent' => $v->startEvent,
					'currdate' => date('Y-m-d'),
					'startEvent' => date_format($date,"D,d M,Y"),
					'discription' => $v->discription
					

					];
					}
					
					$usAdminAnniData = $this->CalenderModel->getEmployeeDobAndAnni();
					// print_r($usAdminData);die;
					
					
					$resultEvdob = [];  

					foreach($usAdminAnniData as $v) {
					
					$dataDate = $v->dob; 
					// $dataDasste = is_array($dataDate); 
					$varDate = explode('-', $dataDate);
					$YID = 2021;
					$MI = $varDate[0];
					$MIDS = $varDate[1];
					$DID = $varDate[2];

					$startDate = $YID.'-'.$MIDS.'-'.$DID;
					
					
					// print_r($userAdminData);die;
					$resultEvdob[]= [
					'Id'=>$v->id,
					'title' => "Birthday ".$v->name,
					

					];
					}
					
					$usrAnniData = $this->CalenderModel->getEmployeeAnni();
					date_default_timezone_set("Asia/Kolkata");
		
		// strtotime($startddde);
		// die;
			
				
				$resultEvAnni = [];  

					foreach($usrAnniData as $v) {
					$dataDate = $v->EmployeejoiningDate; 
		
		// $dataDasste = is_array($dataDate); 
		if($dataDate != 0000-00-00){
			$varDate = explode('-', $dataDate);
		}
		
		// $YID = 2021;
		$MI = $varDate[0];
		
		
		$MIDS = $varDate[1];
		$DID = $varDate[2];
		$stassrtDate = $MI.'-'.$MIDS;
		// $birth_date = new DateTime($stassrtDate);
		$Leave_date = date("Y-m");
		// $date1 = "2007-03";
		// $date2 = "2009-06";

		$diff = abs(strtotime($Leave_date) - strtotime($stassrtDate));

		$years = floor($diff / (365*60*60*24));
		// die;
		$yeafffrs = floor($diff / (365*60*60*24));
		
		if($years != 0){
			
			$MddI = $varDate[0] + $years;
		}else{
			$MddI = $varDate[0] + $years +1;
		}
		
		
		$stassrtDate = $MddI.'-'.$MIDS.'-'.$DID;
		
		$startddde = date("Y-m-d");
					if(strtotime($startddde) == strtotime($stassrtDate)){
					
					
					// print_r($userAdminData);die;
					$resultEvAnni[]= [
					'Id'=>$v->id,
					'title' => "Bussiness Anniversary ".$v->name,
					

					];
					}
					
				
			}
					
					
					



					
					
		 
         echo json_encode(['data'=> $result, 'dataEvent'=> $resultEv, 'datadob'=> $resultEvdob, 'dataAnni'=> $resultEvAnni]);
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
	}
	

	

}
