<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Comment extends CI_Controller
{
	private $UserId;



	public function __construct()
	{
		parent::__construct();
		$this->load->model("EmployeeModel", 'EmpObj');
		$this->load->model("HrModel", "HrObj");
		$this->load->model("PayModel", "PayObj");
		$this->load->model("CalenderModel");
		$this->load->model("AttendanceModel");
		$this->load->model("HierarchyModel");
		$this->load->model("CommentModel");
		$this->load->library('HrLib_user');
		$data = $this->session->userdata();
		$this->UserId = $data['auth']['id'];
	}

	//KPI comments !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
	public function KPIComment()
	{
		// print_r($_POST);die;
		// print_r($_GET);die;
		if (!empty($this->input->get())) {


			$userData = $this->CommentModel->getCommentSingleUser($this->input->get('UserId'), $this->input->get('YearID'), $this->input->get('MonthID'));
			// print_r($userData);die;
			$result = [];

			foreach ($userData as $v) {


				$userAdminData = $this->CommentModel->getCommentAdmin($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));

				// print_r($userAdminData);die;
				$result[] = [
					'userId' => $v->id,
					'userName' => $v->name,
					'ProfileImage' => $v->EmpProfileImage,
					'CommentUser' => $v->comment_Id,
					'CommentUser' => $v->Comment,
					'myAdminData' => $userAdminData


				];
			}


			$userAdminData = $this->CommentModel->getCommentAdmin($this->input->get('UserId'), $this->input->get('YearID'), $this->input->get('MonthID'));
			// print_r($userAdminData);die;
			$resultAdmin = [];

			foreach ($userAdminData as $v) {

				$resultAdmin[] = [
					'userId' => $v->id,
					'userName' => $v->name,
					'comment_Id' => $v->comment_Id,
					'CommentUser' => $v->Comment


				];
			}





			echo json_encode(['data' => $result, 'dataAdmin' => $resultAdmin]);
		} else {
			echo json_encode(['data' => 0, 'message' => 'data not found']);
		}
	}


	//Admin Wall Comments  !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
	public function AdminComment()
	{

		// print_r($_POST);die;
		// print_r($_GET);die;
		if (!empty($this->input->get())) {


			$userAdminData = $this->CommentModel->getCommentWallAdmin();
			// print_r($userData);die;
			$result = [];

			foreach ($userAdminData as $v) {




				// print_r($userAdminData);die;
				$result[] = [
					'userId' => $v->UserId,
					'comment_Id' => $v->comment_Id,
					'CommentUser' => $v->Comment


				];
			}

			$usAdminData = $this->CalenderModel->getWallEvent();
			// print_r($usAdminData);die;


			$resultEv = [];

			foreach ($usAdminData as $v) {

				// $data = explode(',', $v->eventUrl);

				// $id = $this->input->get($data);
				// die;
				// foreach($data as $d){

				// echo $data[i];
				if (!empty($v->eventUrl)) {

					$tagUser = $this->CommentModel->getEventSingleUser($v->eventUrl);
				} else {
					$tagUser = [];
				}
				// echo "<pre>";
				// print_r($tagUser);
				// die;
				// }

				$date = date_create($v->startEvent);

				$resultEv[] = [
					'Id' => $v->Id,
					'title' => $v->title,
					'eventUrl' => $tagUser,
					'startTime' => $v->startEventTime,
					'endTime' => $v->endEventTime,
					'startEvent' =>  date_format($date, "D,d M,Y"),
					'discription' => $v->discription,
					'createdBy' => $v->createdBy


				];
			}

			$usAdminAnniData = $this->CalenderModel->getEmployeeDobAndAnni();
			// print_r($usAdminData);die;


			$resultEvdob = [];

			foreach ($usAdminAnniData as $v) {

				$dataDate = $v->dob;
				// $dataDasste = is_array($dataDate); 
				$varDate = explode('-', $dataDate);
				$YID = 2021;
				$MI = $varDate[0];
				$MIDS = $varDate[1];
				$DID = $varDate[2];

				$startDate = $YID . '-' . $MIDS . '-' . $DID;


				// print_r($userAdminData);die;
				$resultEvdob[] = [
					'Id' => $v->id,
					'title' => "Birthday " . $v->name,


				];
			}

			$usrAnniData = $this->CalenderModel->getEmployeeAnni();
			date_default_timezone_set("Asia/Kolkata");

			// strtotime($startddde);
			// die;


			$resultEvAnni = [];

			foreach ($usrAnniData as $v) {
				$dataDate = $v->EmployeejoiningDate;

				// $dataDasste = is_array($dataDate); 
				if ($dataDate != 0000 - 00 - 00) {
					$varDate = explode('-', $dataDate);
				}

				// $YID = 2021;
				$MI = $varDate[0];


				$MIDS = $varDate[1];
				$DID = $varDate[2];
				$stassrtDate = $MI . '-' . $MIDS;
				// $birth_date = new DateTime($stassrtDate);
				$Leave_date = date("Y-m");
				// $date1 = "2007-03";
				// $date2 = "2009-06";

				$diff = abs(strtotime($Leave_date) - strtotime($stassrtDate));

				$years = floor($diff / (365 * 60 * 60 * 24));
				// die;
				$yeafffrs = floor($diff / (365 * 60 * 60 * 24));

				if ($years != 0) {

					$MddI = $varDate[0] + $years;
				} else {
					$MddI = $varDate[0] + $years + 1;
				}


				$stassrtDate = $MddI . '-' . $MIDS . '-' . $DID;

				$startddde = date("Y-m-d");
				if (strtotime($startddde) == strtotime($stassrtDate)) {


					// print_r($userAdminData);die;
					$resultEvAnni[] = [
						'Id' => $v->id,
						'title' => "Bussiness Anniversary " . $v->name,


					];
				}
			}









			echo json_encode(['data' => $result, 'dataEvent' => $resultEv, 'datadob' => $resultEvdob, 'dataAnni' => $resultEvAnni]);
		} else {
			echo json_encode(['data' => 0, 'message' => 'data not found']);
		}
	}




	public function HrNotification()
	{
		// print_r($_POST);die;
		// print_r($_GET);die;
		if (!empty($this->input->get())) {

			// echo $id = $this->UserId;die;
			$userAdminData = $this->CommentModel->getNotify($this->UserId);
			//  print_r($userData);die;
			$result = [];

			foreach ($userAdminData as $v) {
				$ReadNotify = $this->CommentModel->getReadNotify($v->Id, $this->UserId);
				$EmployeeProfileImage = $this->CommentModel->getProfileImage($v->UserId);



				// print_r($v->TitleUrl);die;
				$result[] = [
					'Id' => $v->Id,
					'UserId' => $v->UserId,
					'Title' => $v->Title,
					'description' => $v->description,
					'TitleUrl' => site_url('hrzone/' . $v->TitleUrl),
					'NotifyTime' => $v->NotifyTime,
					'type' => $v->type,
					// 'CountData' => $CountData,
					'NotifyDate' => $v->NotifyDate,
					'Read' => $ReadNotify,
					'ProfileImage' => $EmployeeProfileImage

				];
			}

			$usAdminData = $this->CalenderModel->getWallEvent();

			$userCountData = $this->CommentModel->getCountAdminNotify($this->UserId);
			foreach ($userCountData as $v) {



				// print_r($CountData);die;
				$CountData[] = [

					'CountNotfy' => $v,



				];
			}


			// print_r($CountData);die;


			echo json_encode(['dataAnni' => $result, 'CountData' => $CountData]);
		} else {
			echo json_encode(['data' => 0, 'message' => 'data not found']);
		}
	}









	public function TagUser()
	{
		// print_r($_POST);die;
		// print_r($_GET);die;
		if (!empty($this->input->get())) {


			$this->UserId = $this->input->get('id');
			// die;
			$getUserAttend = $this->CalenderModel->getEmpTagEvent($this->UserId);
			// print_r($getUserAttend);die;


			$resultEv = [];

			foreach ($getUserAttend as $v) {

				// $data = explode(',', $v->eventUrl);

				// $id = $this->input->get($data);
				// die;
				// foreach($data as $d){

				// echo $data[i];
				if (!empty($v->eventUrl)) {

					$tagUser = $this->CommentModel->getEventSingleUser($v->eventUrl);
				} else {
					$tagUser = [];
				}
				// echo "<pre>";
				// print_r($tagUser);
				// die;
				// }

				$resultEv[] = [
					'Id' => $v->Id,
					'title' => $v->title,
					'eventUrl' => $tagUser,
					'startTime' => $v->startEventTime,
					'endTime' => $v->endEventTime,
					'discription' => $v->discription


				];
			}







			echo json_encode(['dataEvent' => $resultEv]);
		} else {
			echo json_encode(['data' => 0, 'message' => 'data not found']);
		}
	}




	public function CommentAdd()
	{
		print_r($_POST);
		die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		if (!empty($this->input->post())) {

			$CommentData = [
				'UserId' => $this->UserId,
				'Comment' => $this->input->post('Comment_Add'),
				'Year_Id' => $this->input->post('YearID'),
				'month_Id' => $this->input->post('MonthID'),
				'parent_id' => $this->input->post('UserId')

			];

			$this->CommentModel->InsertComment($CommentData);


			echo json_encode(['data' => 1, 'message' => 'Data updated Successfully']);
		} else {
			echo json_encode(['data' => 0, 'message' => 'data not found']);
		}
	}

	public function WallCommentAdd()
	{
		header('Content-Type: text/html; charset=utf-8');
		// print_r($_POST);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		// echo site_url('hrzone/dashboard/wall'); die;
		// echo current_url(); die;
		date_default_timezone_set("Asia/Kolkata");
		$start_date = date("Y-m-d");
		$start_time = date("H:i:s");
		$Url = 'dashboard';
		if (!empty($this->input->post())) {
			$currentDate = 2021;
			$CommentData = [
				'UserId' => $this->UserId,
				'Comment' => $this->input->post('Comment_Add'),
				'Year_Id' => $start_date

			];

			$data = $this->CommentModel->InsertComment($CommentData);
			// print_r($data);die;
			if ($data == 1) {
				$NotifyData = [
					'UserId' => $this->UserId,
					'Title' => 'Event created by Admin',
					'designation' => 'User',
					'description' => $this->input->post('Comment_Add'),
					'NotifyTime' => $start_time,
					'NotifyDate' => $start_date,
					'TitleUrl' => $Url

				];

				$data = $this->CommentModel->InsertNotify($NotifyData);
			}

			echo json_encode(['data' => 1, 'message' => $this->input->post('Comment_Add') . 'Data updated Successfully']);
		} else {
			echo json_encode(['data' => 0, 'message' => 'data not found']);
		}
	}


	public function UpdateComment()
	{
		// print_r($_POST);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		if (!empty($this->input->post())) {


			$id = $this->input->post('AdComment_Id');

			$CommentData = [
				'Comment' => $this->input->post('AdComment')

			];

			$this->CommentModel->EditComment($id, $CommentData);


			echo json_encode(['data' => 1, 'message' => 'Data updated Successfully']);
		} else {
			echo json_encode(['data' => 0, 'message' => 'data not found']);
		}
	}


	public function CountNotification()
	{
		// print_r($_POST);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		// echo date('y-m-d');die;
		if (!empty($this->input->post())) {

			$this->CommentModel->insertCountAdminNotification($this->UserId);


			echo json_encode(['data' => 1, 'message' => 'Data updated Successfully']);
		} else {
			echo json_encode(['data' => 0, 'message' => 'data not found']);
		}
	}


	public function updateNotification()
	{
		// print_r($_POST);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		if (!empty($this->input->post())) {


			$UserId = $this->UserId;
			$id = $this->input->post('id');

			$CommentData = [

				'Notification_Id' => $this->input->post('id'),
				'Notify_UserId' => $this->UserId,
				'type' => 'seen'

			];

			$this->CommentModel->insrt_notify_tracking($UserId, $id, $CommentData);


			echo json_encode(['data' => 1, 'message' => 'Data updated Successfully']);
		} else {
			echo json_encode(['data' => 0, 'message' => 'data not found']);
		}
	}




	public function DeleteComment()
	{
		// print_r($_POST);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		if (!empty($this->input->post())) {


			$id = $this->input->post('id');


			$this->CommentModel->DelComment($id);


			echo json_encode(['data' => 1, 'message' => 'Data updated Successfully']);
		} else {
			echo json_encode(['data' => 0, 'message' => 'data not found']);
		}
	}



	//Update and delete Wall Comments !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!


	public function UpdateWallComment()
	{
		// print_r($_POST);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		if (!empty($this->input->post())) {


			$id = $this->input->post('AdComment_Id');

			$CommentData = [
				'Comment' => $this->input->post('AdComment')

			];

			$this->CommentModel->EditWallComment($id, $CommentData);


			echo json_encode(['data' => 1, 'message' => 'Data updated Successfully']);
		} else {
			echo json_encode(['data' => 0, 'message' => 'data not found']);
		}
	}


	public function DeleteWallComment()
	{
		// print_r($_POST);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		if (!empty($this->input->post())) {


			$id = $this->input->post('id');


			$this->CommentModel->DelWallComment($id);


			echo json_encode(['data' => 1, 'message' => 'Data updated Successfully']);
		} else {
			echo json_encode(['data' => 0, 'message' => 'data not found']);
		}
	}

	// There is the Calender related event update and del data

	public function UpdateWallEvent()
	{
		// print_r($_POST);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		if (!empty($this->input->post())) {


			$id = $this->input->post('AdComment_Id');

			$CommentData = [
				'title' => $this->input->post('AdComment')

			];

			$this->CommentModel->update_event($id, $CommentData);


			echo json_encode(['data' => 1, 'message' => 'Data updated Successfully']);
		} else {
			echo json_encode(['data' => 0, 'message' => 'data not found']);
		}
	}


	public function DeleteWallEvent()
	{
		// print_r($_POST);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		if (!empty($this->input->post())) {


			$id = $this->input->post('id');


			$this->CalenderModel->delete_event($id);


			echo json_encode(['data' => 1, 'message' => 'Data updated Successfully']);
		} else {
			echo json_encode(['data' => 0, 'message' => 'data not found']);
		}
	}



	public function Notification()
	{


		$data['userAdminData'] = $this->CommentModel->getNotify($this->UserId);
		$data['GoalYear'] = $this->HrObj->YearGoal();
		$data['GoalMonth'] = $this->HrObj->KPIMonth();
		$data['uid'] =  $this->UserId;

		$this->load->view("hrzone/hrNotification", $data);
	}
}
