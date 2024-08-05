<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Attendance extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model("EmployeeModel", "EmpObj");
		$this->load->model("HrModel", "HrObj");
		$this->load->model("CommentModel");
		$this->load->model("AttendanceModel");
		$this->load->library('HrLib_user');
		$data = $this->session->userdata();


		$this->UserId = $data['auth']['id'];
	}

	public function addUserAttendance()
	{
		$data['UserInfo'] = $this->AttendanceModel->getAllUser();
		$data['page'] = 'addUserAttendance';
		$this->load->view("hrzone/addUserAttendance", $data);
	}

	public function addUserAttendanceQdx()
	{

		$Id = $this->input->post('User_Id');
		$post = $this->input->post();
		// $currMonth = date('Y');
		$att = $this->AttendanceModel->getSingleEEAttendance($Id);


		// if($att == 0)
		// {
		$this->AttendanceModel->insertUserAttendence($post);
		// $data['message'] = $this->session->set_flashdata('message', '<script>alert("Your data updated successfully");</script>');
		// redirect('Attendance/HrAttendance', $data);

		redirect('hrzone/Attendance/addUserAttendance');

		// }else{
		// $this->session->set_flashdata('message', '<script>alert("Selected User already in attendance list!");</script>');
		// redirect('hrzone/Attendance/addUserAttendance', 'refresh');
		// }

		// print_r($_POST);
		// $data = $this->AttendanceModel->getCalender();
		// echo "<pre.  >";
		//print_r($data); die;
	}


	public function addLeave()
	{
		$data['UserInfo'] = $this->AttendanceModel->getAllUser();
		$data['page'] = 'addLeave';
		$this->load->view("hrzone/addLeave", $data);
	}


	public function addLeaveQdx()
	{
		// print_r($_POST);die;
		$data3 = array(
			//$last_user_id is the value of the foreign key to link the tables
			'UserId'       => $this->input->post('user_Id'),
			'LeaveDate' => $this->input->post('LeaveDate'),
			'CL' => $this->input->post('CL'),
			'EL'   => $this->input->post('EL')

		);

		if ($this->AttendanceModel->insertEmployeeLeave($data3)) {
			$this->session->set_flashdata('message', '<script>alert("Your data inserted successfully");</script>');
			redirect('hrzone/Attendance/HrAttendance', 'refresh');
		} else {
			$this->session->set_flashdata('message', '<script>alert("Your Email or EmployeeId already Exist!");</script>');
			redirect('hrzone/Attendance/HrAttendance', 'refresh');
		}
	}



	public function HrAttendance()
	{
		$data['GoalYear'] = $this->HrObj->YearGoal();
		$data['GoalMonth'] = $this->HrObj->KPIMonth();
		$data['page'] = 'HrAttendance';
		// $data['UserAttend'] = $this->AttendanceModel->getAttendanceList();
		$this->load->view("hrzone/employeeAttendence", $data);
	}




	public function AllUserAttendance()
	{
		// print_r($_POST);die;
		// print_r($_GET);die;
		if (!empty($this->input->get())) {


			$userData = $this->AttendanceModel->getAllAttendanceUser();
			// print_r($userData);die;
			$result = [];

			foreach ($userData as $v) {

				$getUserCLEL = $this->AttendanceModel->getCLEL($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
				$getUserAttend = $this->AttendanceModel->getAttendanceList($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
				$calenderResult = $this->AttendanceModel->getMonthlyCalender($this->input->get('YearID'), $this->input->get('MonthID'));
				// print_r($calenderResult);die;
				$result[] = [
					'userId' => $v->id,
					'userName' => $v->name,
					'employee_id' => $v->employee_id,
					'employeeStatus' => $v->employeeStatus,
					'EmployeejoiningDate' => $v->EmployeejoiningDate,
					'employeeExitDate' => $v->employeeExitDate,
					'attendance' => $getUserAttend,
					'UserCLEL' => $getUserCLEL,
					'Usercalender' => $calenderResult

				];
			}


			$calenderResult = $this->AttendanceModel->getMonthlyCalender($this->input->get('YearID'), $this->input->get('MonthID'));
// 			echo "<pre>";
// 			print_r($calenderResult);die;
			$calResult = [];
			foreach ($calenderResult as $value) {
				$date = date_create($value->AttendenceDate);
				// echo die;
				$calResult[] = [

					'UsercalenderDay' => date_format($date, "D"),
					'Usercalender' => date_format($date, "j")
				];
			}

			$calenderHoliday = $this->AttendanceModel->getHolidayCalender($this->input->get('YearID'));
			// echo "<pre>";
			// print_r($calenderHoliday);die;
			$HResult = [];
			foreach ($calenderHoliday as $value) {
				$date = date_create($value->calender_date);
				// echo die;
				$HResult[] = [

					'h_id' => $value->h_id,
					'holiday_list' => $value->holiday_list,
					'HDay' => date_format($date, "D"),
					'HName' => date_format($date, "j F")
				];
			}
			//$HResult = [];


			echo json_encode(['data' => $result, 'calenderDay' => $calResult, 'CalHoliday' => $HResult]);
		} else {
			echo json_encode(['data' => 0, 'message' => 'data not found']);
		}
	}



	public function AllEmployeeTimeList()
	{

		$data['userData'] = $this->AttendanceModel->getAllUser();
		$data['page'] = 'AllEmployeeTimeList';
		// $data['UserAttend'] = $this->AttendanceModel->getAttendanceList();
		$this->load->view("hrzone/AllEmployeeTimeList", $data);
	}

	public function employeeSingleTimeList($id)
	{
		// echo $id;die;
		$this->userId = $id;
		// die;
		$data['EmpInfo'] = $this->AttendanceModel->getEmpUser($this->userId);
		// echo $EmpInfo->name;die;
		$data['User_Id'] = $id;
		$data['GoalYear'] = $this->HrObj->YearGoal();
		$data['GoalMonth'] = $this->HrObj->KPIMonth();
		// $data['userData'] = $this->AttendanceModel->getAllUser();
		// $data['UserAttend'] = $this->AttendanceModel->getAttendanceList();
		$this->load->view("hrzone/employeeSingleTimeList", $data);
	}



	public function UserTimeList()
	{
		// print_r($_POST);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		if (!empty($this->input->get())) {

			$result = [];

			$userData = $this->AttendanceModel->getEmp($this->UserId);
			// print_r($userData);die;
			$result = [];


			$getUserAttend = $this->AttendanceModel->getAttendanceList($this->input->get('User_ID'), $this->input->get('YearID'), $this->input->get('MonthID'));
			// print_r($getUserAttend);die;
			foreach ($getUserAttend as $v) {
				$result[] = [
					'emp_id' => $v->id,
					'AttendenceDate' => $v->AttendenceDate,
					'Status' => $v->Status,
					'checkInTime' => $v->checkInTime,
					'checkOutTime' => $v->checkOutTime,
					'LateTime' => (strtotime($v->checkInTime) > strtotime("10:15:00")) ? floor(round(abs(strtotime($v->checkInTime) - strtotime("10:15:00")) / 60, 2)) . " min" :  "Nil",
					'CalDay' => date("D", strtotime($v->AttendenceDate))


				];
			}
			$calResult = [];
			$calenderResult = $this->AttendanceModel->getMonthlyCalender($this->input->get('YearID'), $this->input->get('MonthID'));
			// echo "<pre>";
			// print_r($calenderResult);die;
			foreach ($calenderResult as $value) {
				$calResult[] = [
					'CalDay' => date("D", strtotime($value->AttendenceDate))
				];
			}




			echo json_encode(['data' => $result, 'calenderDay' => $calResult]);
		} else {
			echo json_encode(['data' => 0, 'message' => 'data not found']);
		}
	}



	public function UserCLELView()
	{
		// print_r($_POST);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		if (!empty($this->input->get())) {
			$userData = $this->AttendanceModel->getEmpCLEL($this->input->get('id'));
			// print_r($userData);die;

			$result = [];

			foreach ($userData as $v) {
				$result = [

					'UserCl' => $v->CL,
					'User_ID' => $v->leave_Id,
					'CL_Status' => $v->CL_Status,
					'EL_Status' => $v->EL_Status,
					'LeaveDate' => $v->LeaveDate,
					'Emp_Id' => $v->UserId,
					'UserEl' => $v->EL

				];
			}


			echo json_encode($result);
		} else {
			echo json_encode(['data' => 0, 'message' => 'data not found']);
		}
	}

	public function UserAttendanceView()
	{
		// print_r($_POST);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		if (!empty($this->input->get())) {
			$getUserAttend = $this->AttendanceModel->getSingleUserAttendance($this->input->get('id'));
			// print_r($getUserAttend);die;

			$result = [];

			foreach ($getUserAttend as $v) {

				$userData = $this->AttendanceModel->getEmp($v->UserId);

				$result = [

					'AttnId' => $v->id,
					'User_ID' => $v->UserId,
					'employee_id' => $v->employee_id,
					'Status' => $v->Status,
					'AttendenceDate' => $v->AttendenceDate,
					'checkInTime' => $v->checkInTime,
					'checkOutTime' => $v->checkOutTime,
					'Remarks' => $v->Remarks,
					'EmpD' => $userData

				];
			}




			echo json_encode($result);
		} else {
			echo json_encode(['data' => 0, 'message' => 'data not found']);
		}
	}



	public function UserCLELEdit()
	{
		// print_r($_POST);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		if (!empty($this->input->post())) {
			$id = $this->input->post('User_Id');
			$LeaveData = [
				'CL' => $this->input->post('employee_cl'),
				'EL' => $this->input->post('employee_el'),
				'leave_Id' => $this->input->post('User_Id')

			];

			$userData = $this->AttendanceModel->updateEmpCLEL($id, $LeaveData);


			echo json_encode(['data' => 1, 'message' => 'Data updated Successfully']);
		} else {
			echo json_encode(['data' => 0, 'message' => 'data not found']);
		}
	}

	public function UserCLELAdd()
	{
		// print_r($_POST);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		if (!empty($this->input->post())) {
			// $id = $this->input->post('User_Id');
			$datDate = $this->input->post('ClDate');

			$time = strtotime($datDate);
			$final = date("Y-m-d", strtotime("+1 month", $time));
			$LeaveData = [
				'CL' => $this->input->post('employee_cl'),
				'EL' => $this->input->post('employee_el'),
				'UserId' => $this->input->post('CLEmpId'),
				'LeaveDate' => $final

			];

			$userData = $this->AttendanceModel->insertEmployeeLeave($LeaveData);


			echo json_encode(['data' => 1, 'message' => 'Data updated Successfully']);
		} else {
			echo json_encode(['data' => 0, 'message' => 'data not found']);
		}
	}



	public function SingleAttendanceEdit()
	{
		if (!empty($this->input->post())) {
			$id = $this->input->post('User_Id');
			$LeaveData = [
				'Status' => $this->input->post('employee_Status'),
				// 'checkInTime' => $this->input->post('employee_CheckIn'),
				// 'checkOutTime' => $this->input->post('employee_CheckOut'),
				// 'Remarks' => $this->input->post('employee_Remarks'),
				'id' => $this->input->post('User_Id')

			];

			$userData = $this->AttendanceModel->updateSingleUserAttendance($id, $LeaveData);


			echo json_encode(['data' => 1, 'message' => 'Data updated Successfully']);
		} else {
			echo json_encode(['data' => 0, 'message' => 'data not found']);
		}
	}



	public function SingleUserEduView()
	{
		// print_r($_POST);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		if (!empty($this->input->get())) {
			$getUserAttend = $this->AttendanceModel->getSingleUserEdu($this->input->get('id'));
			// print_r($getUserAttend);die;

			$result = [];

			foreach ($getUserAttend as $v) {
				$result = [

					'Edu_Id' => $v->Id,
					'UserId' => $v->UserId,
					'examPassed' => $v->examPassed,
					'examYear' => $v->examYear,
					'examBoard' => $v->examBoard,
					'marks' => $v->marks

				];
			}


			echo json_encode($result);
		} else {
			echo json_encode(['data' => 0, 'message' => 'data not found']);
		}
	}


	public function SingleUserEduEdit()
	{
		// print_r($_POST);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		if (!empty($this->input->post())) {
			$id = $this->input->post('User_Id');
			$emp_Id = $this->input->post('emp_Id');
			$LeaveData = [
				'examPassed' => $this->input->post('employee_examPassed'),
				'examYear' => $this->input->post('employee_examYear'),
				'examBoard' => $this->input->post('employee_examBoard'),
				'marks' => $this->input->post('employee_marks'),
				'Id' => $this->input->post('User_Id')

			];

			$userData = $this->AttendanceModel->updateSingleUserEdu($id, $LeaveData);
			// redirect('hrzone/Employee/employeeProfile', $emp_Id);
			// print_r($userData);die;

			echo json_encode(['data' => 1, 'message' => 'Data updated Successfully']);
		} else {
			echo json_encode(['data' => 0, 'message' => 'data not found']);
		}
	}


	public function SingleUserCoursesView()
	{
		// print_r($_POST);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		if (!empty($this->input->get())) {
			$getUserAttend = $this->AttendanceModel->getSingleUserCourses($this->input->get('id'));
			// print_r($getUserAttend);die;

			$result = [];

			foreach ($getUserAttend as $v) {
				$result = [

					'Id' => $v->Id,
					'UserId' => $v->UserId,
					'coursePassed' => $v->coursePassed,
					'courseYear' => $v->courseYear,
					'courseBoard' => $v->courseBoard,
					'courseMarks' => $v->courseMarks

				];
			}


			echo json_encode($result);
		} else {
			echo json_encode(['data' => 0, 'message' => 'data not found']);
		}
	}


	public function SingleUserCoursesEdit()
	{
		// print_r($_POST);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		if (!empty($this->input->post())) {
			$id = $this->input->post('User_Id');
			$emp_Id = $this->input->post('emp_Id');
			$LeaveData = [
				'coursePassed' => $this->input->post('employee_coursePassed'),
				'courseYear' => $this->input->post('employee_courseYear'),
				'courseBoard' => $this->input->post('employee_courseBoard'),
				'courseMarks' => $this->input->post('employee_courseMarks'),
				'Id' => $this->input->post('User_Id')

			];

			$userData = $this->AttendanceModel->updateSingleUserCourses($id, $LeaveData);
			// redirect('hrzone/Employee/employeeProfile', $emp_Id);
			// print_r($userData);die;

			echo json_encode(['data' => 1, 'message' => 'Data updated Successfully']);
		} else {
			echo json_encode(['data' => 0, 'message' => 'data not found']);
		}
	}

	public function SingleUserBankView()
	{
		// print_r($_POST);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		if (!empty($this->input->get())) {
			$getUserAttend = $this->AttendanceModel->getSingleUserBankAcc($this->input->get('id'));
			// print_r($getUserAttend);die;

			$result = [];

			foreach ($getUserAttend as $v) {
				$result = [

					'Id' => $v->Id,
					'UserId' => $v->UserId,
					'bankName' => $v->bankName,
					'bankAccount' => $v->bankAccount,
					'bankBranch' => $v->bankBranch,
					'bankIFSCCode' => $v->bankIFSCCode

				];
			}


			echo json_encode($result);
		} else {
			echo json_encode(['data' => 0, 'message' => 'data not found']);
		}
	}


	public function SingleUserBankEdit()
	{
		// print_r($_POST);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		if (!empty($this->input->post())) {
			$id = $this->input->post('User_Id');
			$emp_Id = $this->input->post('emp_Id');
			$LeaveData = [
				'bankName' => $this->input->post('employee_bankName'),
				'bankAccount' => $this->input->post('employee_bankAccount'),
				'bankBranch' => $this->input->post('employee_bankBranch'),
				'bankIFSCCode' => $this->input->post('employee_bankIFSCCode'),
				'Id' => $this->input->post('User_Id')

			];

			$userData = $this->AttendanceModel->updateSingleUserBank($id, $LeaveData);
			// redirect('hrzone/Employee/employeeProfile', $emp_Id);
			// print_r($userData);die;

			echo json_encode(['data' => 1, 'message' => 'Data updated Successfully']);
		} else {
			echo json_encode(['data' => 0, 'message' => 'data not found']);
		}
	}

	public function SingleUserWorkExpView()
	{
		// print_r($_POST);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		if (!empty($this->input->get())) {
			$getUserAttend = $this->AttendanceModel->getSingleUserWorkExp($this->input->get('id'));
			// print_r($getUserAttend);die;

			$result = [];

			foreach ($getUserAttend as $v) {
				$result = [

					'Id' => $v->Id,
					'UserId' => $v->UserId,
					'experienceDesignation' => $v->experienceDesignation,
					'experienceOrganisation' => $v->experienceOrganisation,
					'experienceDuration' => $v->experienceDuration,
					'experienceTotal' => $v->experienceTotal,
					'previousSalary' => $v->previousSalary

				];
			}


			echo json_encode($result);
		} else {
			echo json_encode(['data' => 0, 'message' => 'data not found']);
		}
	}


	public function SingleUserWorkExpEdit()
	{
		// print_r($_POST);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		if (!empty($this->input->post())) {
			$id = $this->input->post('User_Id');
			$emp_Id = $this->input->post('emp_Id');
			$LeaveData = [
				'experienceDesignation' => $this->input->post('experienceDesignation'),
				'experienceOrganisation' => $this->input->post('experienceOrganisation'),
				'experienceDuration' => $this->input->post('experienceDuration'),
				'experienceTotal' => $this->input->post('experienceTotal'),
				'previousSalary' => $this->input->post('previousSalary'),
				'Id' => $this->input->post('User_Id')

			];

			$userData = $this->AttendanceModel->updateSingleUserWorkExp($id, $LeaveData);
			// redirect('hrzone/Employee/employeeProfile', $emp_Id);
			// print_r($userData);die;

			echo json_encode(['data' => 1, 'message' => 'Data updated Successfully']);
		} else {
			echo json_encode(['data' => 0, 'message' => 'data not found']);
		}
	}



	public function employeeLeaveView()
	{
		$data["leaveEmpData"] = $this->AttendanceModel->getEmployeeLeaveData();
		$data['page'] = 'employeeLeaveView';
		$this->load->view("hrzone/employeeLeaveView", $data);
	}

	public function UserLeaveAccept()
	{
		// print_r($_POST);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		date_default_timezone_set("Asia/Kolkata");
		$Notifydate = date('Y-m-d');
		$NotifyTime = date("h:i:s a");
		if (!empty($this->input->post())) {
			$pre = $this->input->post('Accept');
			if ($pre !== false) {
				// echo "Md Asif";
				$userUpdateData = $this->AttendanceModel->updateLeaveOnAttendance();

				// print_r($userUpdateData); die;
				if ($userUpdateData) {
					// echo "Asif";
					$userData = $this->AttendanceModel->InsertLeaveAccept($this->input->post('id'));

					$singleUserData = $this->AttendanceModel->getSingleApplyLeaveData($this->input->post('id'));
					// print_r($singleUserData);die;
					$Url = 'EmployeeAttendance/EmployeeApplyLeave';
					// $dataofUser = [
					// 'Count_UserId'=> $this->UserId,
					// 'Notification_Id'=> $this->UserId,
					// ];
					// $datass = $this->CommentModel->InsertUserNotify($dataofUser);
					$NotifyData = [
						'UserId' => $this->UserId,
						'Title' => "Leave approved by Admin",
						'description' => 'accepted',
						'designation' => 'User',
						'NotifyTime' => $NotifyTime,
						'NotifyDate' => $Notifydate,
						'TitleUrl' => $Url

					];

					$data = $this->CommentModel->InsertAdminNotify($NotifyData);

					// $data;
					// print_r($data);die;
					if ($data > 0) {

						$CommentData = [
							'Count_UserId' => $singleUserData->UserId,
							'Notification_Id' => $data,
						];
						$datass = $this->CommentModel->InsertUserNotify($CommentData);
					}


					echo json_encode(['data' => 'Accept', 'message' => 'Data updated Successfully']);
				}

				// 
			}

			// $userData = $this->AttendanceModel->updateSingleUserWorkExp($id, $LeaveData);
			// redirect('hrzone/Employee/employeeProfile', $emp_Id);
			// print_r($userData);die;


		} else {
			echo json_encode(['data' => 0, 'message' => 'data not found']);
		}
	}

	public function UserLeaveDecline()
	{
		// print_r($_POST);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		date_default_timezone_set("Asia/Kolkata");
		$Notifydate = date('Y-m-d');
		$NotifyTime = date("h:i:s a");
		if (!empty($this->input->post())) {
			$pre = $this->input->post('Decline');
			if ($pre !== false) {
				$userData = $this->AttendanceModel->InsertLeaveDecline($this->input->post('id'));
				$singleUserData = $this->AttendanceModel->getSingleApplyLeaveData($this->input->post('id'));

				$Url = 'EmployeeAttendance/EmployeeApplyLeave';

				$NotifyData = [
					'UserId' => $this->UserId,
					'Title' => "Leave declined by Admin",
					'description' => 'accepted',
					'NotifyTime' => $NotifyTime,
					'NotifyDate' => $Notifydate,
					'TitleUrl' => $Url

				];

				$data = $this->CommentModel->InsertAdminNotify($NotifyData);

				// $data;
				// print_r($data);die;
				if ($data > 0) {

					$CommentData = [
						'Count_UserId' => $singleUserData->UserId,
						'Notification_Id' => $data,
					];
					$datass = $this->CommentModel->InsertUserNotify($CommentData);
				}
			}

			echo json_encode(['data' => 'Decline', 'message' => 'Data updated Successfully']);
		} else {
			echo json_encode(['data' => 0, 'message' => 'data not found']);
		}
	}


	public function UserLeaveDetails()
	{
		// print_r($_POST);die;
		// print_r($_GET);die;
		if (!empty($this->input->post())) {
			$date = date_create($this->input->post('startDate'));
			$dateEnd = date_create($this->input->post('endDate'));
			// $date = $this->input->post('insertStartDate_val');
			$day = date_format($date, "d");
			$dayend = date_format($dateEnd, "d");
			$diffd = $dayend - $day + 1;
			$diffdate = (array)$diffd;
			// die;
			$month = date_format($date, "m");
			$Year = date_format($date, "Y");
			$id = $this->input->post('id');
			$userData = $this->AttendanceModel->getUserLeaveDetails($id);
			// print_r($userData);die;
			$result = [];

			foreach ($userData as $v) {
				// print_r($calenderResult);die;

				$LeaveUserData = $this->AttendanceModel->getSingleLeaveApplyData($v->id, $this->input->post('LeaveId'));
				$LeaveDocData = $this->AttendanceModel->getSingleLeaveDocData($v->id, $this->input->post('LeaveId'));
				$LeaveELCL = $this->AttendanceModel->getEmployeeCustomLeave($v->id, $Year, $month);
				$result[] = [
					'userId' => $v->id,
					'userName' => $v->name,
					'employee_id' => $v->employee_id,
					'maritalStatus' => $v->maritalStatus,
					'joiningDate' => $v->joiningDate,
					'position' => $v->position,
					'Rdate' => $diffdate,
					'EmpProfileImage' => $v->EmpProfileImage,
					'LeaveUser' => $LeaveUserData,
					'LeaveUserDoc' => $LeaveDocData,
					'LeaveUserELCL' => $LeaveELCL,

				];
			}

			// $LeaveUserData = $this->AttendanceModel->getSingleLeaveApplyData($id = $this->input->post('id'), $id = $this->input->post('LeaveId'));
			// print_r($LeaveUserData);die;
			// $LeaveApply = [];  

			// foreach($LeaveUserData as $v) {
			// print_r($calenderResult);die;
			// $result[]= [
			// 'ReasonOfLeave'=>$v->ReasonOfLeave,
			// 'org_Email' => $v->org_Email,
			// 'LeaveType' => $v->LeaveType,
			// 'StartDate' => $v->StartDate,
			// 'EndDate' => $v->EndDate,
			// 'RequestedDays' => $v->RequestedDays,
			// 'Description' => $v->Description,

			// ];
			// }	




			echo json_encode(['data' => $result]);
		} else {
			echo json_encode(['data' => 0, 'message' => 'data not found']);
		}
	}


	public function HCalendar()
	{
		$data['GoalYear'] = $this->HrObj->YearGoal();
		$data['GoalMonth'] = $this->HrObj->KPIMonth();
		$data['page'] = 'HCalendar';
		$this->load->view("hrzone/holidaycalendar", $data);
	}



	public function HCalendarByMonth()
	{
		// print_r($_POST);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		if (!empty($this->input->get())) {


			$calResult = [];
			$calenderResult = $this->AttendanceModel->getMonthlyHolidayCalender($this->input->get('YearID'), $this->input->get('MonthID'));
			// echo "<pre>";
			// print_r($calenderResult);die;
			foreach ($calenderResult as $value) {
				$calResult[] = [
					'h_id' => $value->h_id,
					'calender_date' => $value->calender_date,
					'holiday_list' => $value->holiday_list,
					'sort_holidayname' => $value->sort_holidayname,
					'CalDay' => date("l", strtotime($value->calender_date))
				];
			}




			echo json_encode(['calenderDay' => $calResult]);
		} else {
			echo json_encode(['data' => 0, 'message' => 'data not found']);
		}
	}

	public function ViewHcal()
	{
		// print_r($_POST);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		if (!empty($this->input->post())) {
			$getUserAttend = $this->AttendanceModel->ViewHolidayCalender($this->input->post('id'));
			// print_r($getUserAttend);die;

			$result = [];

			foreach ($getUserAttend as $value) {


				$result = [

					'h_id' => $value->h_id,
					'calender_date' => $value->calender_date,
					'holiday_list' => $value->holiday_list,
					'sort_holidayname' => $value->sort_holidayname

				];
			}




			echo json_encode($result);
		} else {
			echo json_encode(['data' => 0, 'message' => 'data not found']);
		}
	}

	public function EditHCal()
	{
		// print_r($_POST);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		if (!empty($this->input->post())) {
			$id = $this->input->post('holidayId');
			$LeaveData = [
				'holiday_list' => $this->input->post('holiday_list'),
				'sort_holidayname' => $this->input->post('holidayname'),
				'h_id' => $this->input->post('holidayId')

			];

			$userData = $this->AttendanceModel->updateHolidayCalender($id, $LeaveData);


			echo json_encode(['data' => 1, 'message' => 'Data updated Successfully']);
		} else {
			echo json_encode(['data' => 0, 'message' => 'data not found']);
		}
	}



	public function EditHolidayCal()
	{
		// print_r($_POST);die;
		// print_r($_GET);die;
		// $this->UserId = $id;
		if (!empty($this->input->post())) {
			$id = $this->input->post('holidayId');
			$DateH = $this->input->post('holidayDate');

			$getUserDAte = $this->AttendanceModel->ViewHolidayRow($this->input->post('holidayId'));
			// print_r($getUserDAte);die;
			$HDateFetch = $getUserDAte->calender_date;

			$LeaveAttnUpdateData = [

				'Status' => ''
			];

			$userData = $this->AttendanceModel->updateHolidayAttnByDate($HDateFetch, $LeaveAttnUpdateData);









			$LeaveAttnUpdateData = [
				'Status' => 'H'
			];

			$userData = $this->AttendanceModel->updateHolidayAttnByDate($DateH, $LeaveAttnUpdateData);

			// print_r($userData);die;


			$LeaveData = [

				'holiday_list' => $this->input->post(''),
				'sort_holidayname' => $this->input->post(''),
				'h_id' => $this->input->post('holidayId')

			];

			$userData = $this->AttendanceModel->updateHolidayCalender($id, $LeaveData);


			$LeaveHolidayData = [

				'holiday_list' => $this->input->post('holiday_list'),
				'sort_holidayname' => 'H',
			];


			$userData = $this->AttendanceModel->updateHolidayByDate($DateH, $LeaveHolidayData);

			echo json_encode(['data' => 1, 'message' => 'Data updated Successfully']);
		} else {
			echo json_encode(['data' => 0, 'message' => 'data not found']);
		}
	}
}
