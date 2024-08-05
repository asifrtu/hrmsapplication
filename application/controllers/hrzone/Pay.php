<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pay extends CI_Controller {
	
	
	
	public function __construct(){
    parent::__construct();
   
    $this->load->model("EmployeeModel", "EmpObj");
    $this->load->model("HrModel", "HrObj");
    $this->load->model("AttendanceModel");
    $this->load->model("PayModel", "PayObj");
	$this->load->library('HrLib_user');
	$data= $this->session->userdata();
	$this->load->library('m_pdf');
	
	$this->UserId = $data['auth']['id'];

  } 
  
	public function phpInfor()
	{		
		echo phpinfo();
	}
	
	public function CompensationList()
	{		
		$data['GoalYear'] = $this->HrObj->YearGoal();
		$data['GoalMonth'] = $this->HrObj->KPIMonth();	
		$data['page'] = 'CompensationList';
		$this->load->view("hrzone/CompensationList", $data);
	}
	
	public function EmployeePay(){
		// print_r($_POST);die;
		// print_r($_GET);die;
		if(!empty($this->input->get())) {
		
			 $aa = $this->input->get('YearID');
			 $ab = $this->input->get('MonthID');
			 $GrossB = (array)$ab; 
			 $Grossa = (array)$aa; 
		 $userData = $this->AttendanceModel->getAllAttendanceUser();
		 // print_r($userData);die;
					$result = [];  

					foreach($userData as $v) {
					
					$getUserMonthlyWeekOff = $this->PayObj->getMonthlyWeekOff($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					$getUserCL = $this->PayObj->getInputCL($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					$getUserEL = $this->PayObj->getInputEL($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					$getUserMD = $this->PayObj->getInputMD($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					$getUserLWP = $this->PayObj->getInputLWP($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					$getUserP = $this->PayObj->getInputP($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					$getUserMonthDays = $this->PayObj->getInputMonthDays($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					$getUserWorkingDays = $this->PayObj->getWorkingDays($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					$getUserPayRoll = $this->PayObj->getPayRoll($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					$getUserMonthlySalary = $this->PayObj->getMonthlySalary($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					// $getUserPerDaySalary = $this->PayObj->getPerDaySalary($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					$getUserMonthlyDeduction = $this->PayObj->getMonthlyDeduction($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					$calenderResult = $this->AttendanceModel->getMonthlyCalender($this->input->get('YearID'), $this->input->get('MonthID'));
					// print_r($calenderResult);die;
					$result[]= [
					'userId'=>$v->id,
					'userName' => $v->name,
					'employee_id' => $v->employee_id,
					'UserCL'=> $getUserCL,
					'MID'=> $GrossB,
					'YID'=> $Grossa,
					'UserEL'=> $getUserEL,
					'UserMD'=> $getUserMD,
					'UserLWP'=> $getUserLWP,
					'UserP'=> $getUserP,
					'WorkingDays'=> $getUserWorkingDays,
					'MonthDays'=> $getUserMonthDays,
					'PayRoll'=> $getUserPayRoll,
					'MonthlySalary'=> $getUserMonthlySalary,
					// 'PerDaySalary'=> $getUserPerDaySalary,
					'MonthlyDeduction'=> $getUserMonthlyDeduction,
					'MonthlyWeekOff'=> $getUserMonthlyWeekOff,
					'Usercalender'=>$calenderResult

					];
					}	
					
					
						$getUserMonthDays = $this->PayObj->getInputMonthDays($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					// echo "<pre>";
					// print_r($calenderResult);die;
					$calResult = [];
					foreach($getUserMonthDays as $value){
						$date = date_create($value->AttendenceDate);
						// echo die;
						$calResult[] = [
						
						'UsercalenderDay'=> date_format($date,"F"),
						'Usercalender'=> date_format($date,"j")
						];
					}
					
						$calenderHoliday = $this->AttendanceModel->getHolidayCalender($this->input->get('YearID'));
					// echo "<pre>";
					// print_r($calenderResult);die;
					$HResult = [];
					foreach($calenderHoliday as $value){
						$date=date_create($value->calender_date);
						// echo die;
						$HResult[] = [
						
						'holiday_list'=> $value->holiday_list,
						'HDay'=> date_format($date,"D"),
						'HName'=> date_format($date,"j F")
						];
					}
					
					
		 
         echo json_encode(['data'=> $result, 'calenderDay'=>$calResult, 'CalHoliday'=>$HResult ]);
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
		
	}
		
		
		
public function SalarySlip($data){
	$this->load->view("hrzone/salarySlip", $data);
}
		
		
public function EmployeeSalarySlip(){
		// print_r($_POST);die;
		// print_r($_GET);die;
		$currMonth = date('n');
	$curnYear = date("Y");
	$YearID = $this->input->get('YearID');
		// echo $currMonth;die;
		$MonthCheck = $this->input->get('MonthID');
	if($YearID == $curnYear && $MonthCheck < $currMonth || $YearID < $curnYear){
	
		if(!empty($this->input->get())) {
			$YearID = $this->input->get('YearID');
			$MonthID = $this->input->get('MonthID');
		$userData = $this->AttendanceModel->getEmp($this->input->get('id'));
		// print_r($userData);die;
			$result = [];  

					foreach($userData as $v) {
					
					$getUserMonthlyWeekOff = $this->PayObj->getMonthlyWeekOff($v->id, $YearID, $MonthID);
					$getUserCL = $this->PayObj->getInputCL($v->id, $YearID, $MonthID);
					$getUserEL = $this->PayObj->getInputEL($v->id, $YearID, $MonthID);
					$getUserMD = $this->PayObj->getInputMD($v->id, $YearID, $MonthID);
					$getUserLWP = $this->PayObj->getInputLWP($v->id, $YearID, $MonthID);
					$getUserP = $this->PayObj->getInputP($v->id, $YearID, $MonthID);
					$getUserMonthDays = $this->PayObj->getInputMonthDays($v->id, $YearID, $MonthID);
					$getUserWorkingDays = $this->PayObj->getWorkingDays($v->id, $YearID, $MonthID);
					$getUserPayRoll = $this->PayObj->getPayRoll($v->id, $YearID, $MonthID);
					$getUserMonthlySalary = $this->PayObj->getMonthlySalary($v->id, $YearID, $MonthID);
					$getUserMonthlyDeduction = $this->PayObj->getMonthlyDeduction($v->id, $YearID, $MonthID);
					$getUserMonthlySalaryInWord = $this->PayObj->getMonthlySalaryInWord($v->id, $YearID, $MonthID);
					
					$calenderResult = $this->AttendanceModel->getMonthlyCalender($YearID, $MonthID);
					$EmpDetails = $this->EmpObj->getSingleEmpDetails($v->id);
					$BankDetails = $this->EmpObj->getBankDetails($v->id);
					
 if($MonthID > 3 and $YearID > 2021 ){
				$Salary = $this->EmpObj->getSingleSalary($v->id);
					}else{
                $Salary = $this->EmpObj->getSingleSalary21($v->id);
					}

					

					// print_r($calenderResult);die;
					$result[]= [
					'userId'=>$v->id,
					'userName' => $v->name,
					'employee_id' => $v->employee_id,
					'UserCL'=> $getUserCL,
					'UserEL'=> $getUserEL,
					'UserMD'=> $getUserMD,
					'UserLWP'=> $getUserLWP,
					'UserP'=> $getUserP,
					'WorkingDays'=> $getUserWorkingDays,
					'MonthDays'=> $getUserMonthDays,
					'PayRoll'=> $getUserPayRoll,
					'MonthlySalary'=> $getUserMonthlySalary,
					'MonthlyDeduction'=> $getUserMonthlyDeduction,
					'SalaryInWord'=> $getUserMonthlySalaryInWord,
					'MonthlyWeekOff'=> $getUserMonthlyWeekOff,
					'Usercalender'=>$calenderResult,
					'UserDetails'=>$EmpDetails,
					'UserBankDetails'=>$BankDetails,
					'UserSalary'=>$Salary

					];
					}	
					
					
						$getUserMonthDays = $this->PayObj->getInputMonthDays($v->id, $this->input->get('YearID'), $this->input->get('MonthID'));
					// echo "<pre>";
					// print_r($calenderResult);die;
					$calResult = [];
					foreach($getUserMonthDays as $value){
						$date = date_create($value->AttendenceDate);
						// echo die;
						$calResult[] = [
						
						'UsercalenderDay'=> date_format($date,"F_Y"),
						'Usercalender'=> date_format($date,"Y")
						];
					}
					
						$calenderHoliday = $this->AttendanceModel->getHolidayCalender($this->input->get('YearID'));
					// echo "<pre>";
					// print_r($calenderResult);die;
					$HResult = [];
					foreach($calenderHoliday as $value){
						$date=date_create($value->calender_date);
						// echo die;
						$HResult[] = [
						
						'holiday_list'=> $value->holiday_list,
						'HDay'=> date_format($date,"D"),
						'HName'=> date_format($date,"j F")
						];
					}
					
					
		 
         echo json_encode(['data'=> $result, 'calenderDay'=>$calResult, 'CalHoliday'=>$HResult ]);
		}
		else{
			echo json_encode(['data'=>0, 'message'=> 'data not found']);

		}
	}else{
	$this->session->set_flashdata('message', '<script>alert("this is the only view of previous month only!");</script>');
		redirect('hrzone/Pay/CompensationList', 'refresh');
	}
		
		
}
	
	
	
public function GeneratePDF($Id=null){
	
	$this->uri->segment('4');
	
	$YearID = $this->uri->segment('5');
	$MonthID = $this->uri->segment('6');
	
	
	
	$currMonth = date('n');
	$curnYear = date("Y");
		// echo $currMonth;die;
		$MonthCheck = $this->uri->segment('6');

	
	if($YearID == $curnYear && $MonthCheck < $currMonth || $YearID < $curnYear){

	$Id = $this->uri->segment('4');
	      
	$userData = $this->PayObj->getEmp($Id);
	// ech$this->uri->segment('6');o $userData->id;
	// print_r($userData);die;
		
					$getUserMonthlyWeekOff = $this->PayObj->getMonthlyWeekOff($userData->id, $YearID, $MonthID);
					// print_r($getUserMonthlyWeekOff);die;
					$getUserCL = $this->PayObj->getCL($userData->id, $YearID, $MonthID);
					$getUserEL = $this->PayObj->getEL($userData->id, $YearID, $MonthID);
					$getUserMD = $this->PayObj->getMD($userData->id, $YearID, $MonthID);
					$getUserLWP = $this->PayObj->getLWP($userData->id, $YearID, $MonthID);
					$getUserP = $this->PayObj->getP($userData->id, $YearID, $MonthID);
					$getUserMonthDays = $this->PayObj->getMonthDays($userData->id, $YearID, $MonthID);
					$getUserWorkingDays = $this->PayObj->getWorkingASIFDays($userData->id, $YearID, $MonthID);
					$getUserPayRoll = $this->PayObj->getPayASIFRoll($userData->id, $YearID, $MonthID);
					$getUserMonthlySalary = $this->PayObj->getMonthlyASIFSalary($userData->id, $YearID, $MonthID);
					$getUserMonthlyDeduction = $this->PayObj->getMonthlyASIFDeduction($userData->id, $YearID, $MonthID);
					$getUserMonthlySalaryInWord = $this->PayObj->getMonthlyASIFSalaryInWord($userData->id, $YearID, $MonthID);
					
					$calenderResult = $this->AttendanceModel->getMonthlyCalender($YearID, $MonthID);
					$EmpDetails = $this->EmpObj->getEmpDetails($userData->id);
					$BankDetails = $this->EmpObj->getBankASIFDetails($userData->id);
					
					 if($MonthID > 3 and $YearID > 2021 ){
					$Salary = $this->EmpObj->getSalary($userData->id);
					}else{
                    $Salary = $this->EmpObj->getSalary21($userData->id);
					}
					$getUserMonthDays = $this->PayObj->getMonthDays($userData->id, $YearID, $MonthID);
					// echo "<pre>";
					// print_r($calenderResult);die;
					
						$date = date_create($getUserMonthDays->AttendenceDate);
						// echo die;
					
						$UsercalenderDay = date_format($date,"F_Y");
						$Usercalender = date_format($date,"Y");
	
	
	$NAme = "Ghufran Ahmad";
	$this->load->library('m_pdf');
	
	$styleSalary = file_get_contents('Assets/css/Salary-admin.css');
	$stylesheet = file_get_contents('Assets/css/SalarySlip.css');
	$this->m_pdf->pdf->WriteHTML($styleSalary,1);	// The parameter 1 tells that this is css/style only and no body/html/text
	$this->m_pdf->pdf->WriteHTML($stylesheet, 1);	// The parameter 1 tells that this is css/style only and no body/html/text
	$inputPath = '<?= base_url("Assets/img/qdxPrintLogo.png") ?>';
	$html='<div class=" mb-4" >
                     	
							
							<div class="">
							
								<div class="table-responsive">
									<table class="table table-bordered table-sm" id="dataTable" width="100%">
								
										<thead>
										
												
											<tr>
											
												<td colspan="5" class="fc qdxPrintCF" style="background:#1c304c; padding:0px!important;">
												<span class="qdxUpper" style=" color:white; margin-top:10px!important; font-weight:bold;" >'.COMPANY_NAME.'</span> 
												<br><br>
												
												<hr class="hr1">
												<span class="qdxSlip qdxpLower" style=" color:white;">Salary Statement for the Month of '.$UsercalenderDay.'</span>
												
												
												<hr style="border-bottom: 1px solid #e3e6f0; margin-bottom:5px;">
												
												
												
												<span class="qdxName" style=" color:white;">Employee Name : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$userData->name.'</span>
												
												
												</td>
												<th class="fc qdxPrintCF" style="padding:0!important; width:20px;">
												<img class="logoPrint" style="height: 85px; width: 100px; " src="'.base_url('Assets/img/HRPrintLogo.png').'"  alt="Cinque Terre"></th>
													
											</tr>
										</thead>
										
										<tbody>
											<tr>
												
												<td colspan="2" class="qdxSlip">Employee Id</td>
												<td class="qdxSlip">'.$userData->employee_id.'</td>
												<td colspan="2" class="qdxSlip">Designation</td>
												<td class="qdxSlip">'.$EmpDetails->position.'</td>
												
												
													
											</tr>
											
											
											<tr>
												
												<td colspan="2" class="qdxSlip">Days Presents</td>
												<td class="qdxSlip">'.$getUserPayRoll.'</td>
												
												
												<td colspan="2" class="qdxSlip">Paid Leaves</td>
												<td class="qdxSlip">'.$getUserCL->wcount.'</td>
												
												
											</tr>
											<tr>
												
												<td colspan="2" class="qdxSlip">Accounts Details</td>
												<td class="qdxSlip">'.$BankDetails->bankAccount.'</td>
												
												
												<td colspan="2" class="qdxSlip">Account Bank</td>
												<td class="qdxSlip">'.$BankDetails->bankName.'</td>
												
												
												
											</tr>
											
											<tr>
												
												<td colspan="2" class="qdxSlip">Salary for the Month</td>
												
												<td class="qdxSlip">'.$UsercalenderDay.'</td>
												
												
												<td colspan="2" class="qdxSlip">Leave Without Pay</td>
												<td class="qdxSlip">'.$getUserLWP->wcount.'</td>
												                     
												                     
												                    
											</tr>
											<tr>
												
												<td colspan="3" class="qdxSlip"><div class="qdxCenter  TotalErn">Earnings</div></td>
												<td colspan="3" class="qdxSlip"><div class="qdxCenter  TotalErn">Deductions</div></td>
												
												
											</tr>
											
											<tr>
												
												<td colspan="2" class="qdxSlip"></td>
												<td class="qdxSlip">Amount</td>
												<td colspan="2" class="fc qdxPrintCF"></td>
												<td class="qdxSlip">Amount</td>
												
											</tr>
											
											<tr>
												
												<td colspan="2" class="qdxSlip">Basiccs Salary</td>
												<td class="qdxSlip">'.$Salary->basicSalary.'</td>
												<td colspan="2" class="qdxSlip">E. Provident Fund</td>
												<td class="qdxSlip">'.$Salary->eProvidentFund.'</td>
												
											</tr>
											<tr>
												
												<td colspan="2" class="qdxSlip">Dearness Allowance</td>
												<td class="qdxSlip">'.$Salary->dearnessAllowance.'</td>
												<td colspan="2" class="qdxSlip">ESI</td>
												<td class="qdxSlip">'.$Salary->ESI.'</td>
												
											</tr>
											<tr>
												
												<td colspan="2" class="qdxSlip">HRA</td>
												<td class="qdxSlip">'.$Salary->HRA.'</td>
												<td colspan="2" class="qdxSlip">Professional Tax</td>
												<td class="qdxSlip">'.$Salary->professionalTax.'</td>
												
											</tr>
											
											<tr>
												
												<td colspan="2" class="qdxSlip">Conveyance</td>
												<td class="qdxSlip">'.$Salary->Conveyance.'</td>
												<td colspan="2" class="qdxSlip">I. Tax</td>
												<td class="qdxSlip">'.$Salary->ITax.'</td>
												
											</tr>
											
											<tr>
												
												<td colspan="2" class="qdxSlip">Medical Allowance</td>
												<td class="qdxSlip">'.$Salary->Medical.'</td>
												<td colspan="2" class="qdxSlip">Loan</td>
												<td class="qdxSlip">'.$Salary->Loan.'</td>
												
											</tr>
											
											<tr>
												
												<td colspan="2" class="qdxSlip">Mobile Expenses</td>
												<td class="qdxSlip">'.$Salary->mobileExpenses.'</td>
												<td colspan="2" class="qdxSlip">Advance</td>
												<td class="qdxSlip">'.$Salary->Advance.'</td>
												
											</tr>
											
											<tr>
												
												<td colspan="2" class="qdxSlip">Special Allowance</td>
												<td class="qdxSlip">'.$Salary->specialAllowance.'</td>
												
												
												<td colspan="2" class="qdxSlip">Misc.Deduction</td>
												<td class="qdxSlip">'.$getUserMonthlyDeduction.'</td>
												
											</tr>
											
											<tr>
												
												<td colspan="2" class="qdxSlip">Performance Incentives</td>
												<td class="qdxSlip">'.$Salary->performanceIncentives.'</td>
												<td colspan="2" class="qdxSlip"></td>
												<td class="qdxSlip"></td>
												
											</tr>
											
											<tr>
												
												<td colspan="2" class="qdxSlip">Arrears/Other Ern.</td>
												<td class="qdxSlip">'.$Salary->otherOrArrears.'</td>
												<td colspan="2" class="qdxSlip"></td>
												<td class="qdxSlip"></td>
												
											</tr>
											
											<tr>
												
												<td colspan="2" class="qdxSlip"><div class="qdxCenter">Total Earnings</div></td>
												<td class="qdxSlip">'.$getUserMonthlySalary.'</td>
												
												<td colspan="2" class="qdxSlip">Total Deduction</td>
												<td class="qdxSlip">'.$getUserMonthlyDeduction.'</td>
												
											</tr>
											
											<tr>
												
												<td colspan="2" class="qdxSlip"><div class="qdxCenter  TotalErn">Net Salary Rs.</div></td>
												<td colspan="4" class="qdxSlip"><div class="qdxCenter  TotalErn">'.$getUserMonthlySalaryInWord.'</div></td>
												
											</tr>
											
										
										
										
										
										
										</tbody>
									</table>
								</div>
								
								
							
							</div>
							
                    <!-- Content Row -->
                    </div>';
	$pdfFilePath ="SalarySlip/$UsercalenderDay-$Id.pdf";
	
	
	$this->m_pdf->pdf->SetHTMLFooter($footer);
	$this->load->library('m_pdf');
	 // $mpdf=new mPDF();
	$this->m_pdf->pdf->WriteHTML($html,2);
	$this->m_pdf->pdf->Output($pdfFilePath, "D");
	// $filename = "mpdf.pdf";
	// if (file_exists($pdfFilePath)) {
	// header('Content-type: application/force-download');
	// header('Content-Disposition: attachment; filename='.$filename);
	// readfile($filename);
	// }
	  // $this->load->helper('download');
		
      // $file = base_url().'Document/SalarySlip/'.$Id;
      // force_download($file, NULL);
		 
    // redirect('hrzone/Pay/DownloadPDF/'.$Id, 'refresh');  
	}else{
	$this->session->set_flashdata('message', '<script>alert("Generating a current month salary is not allowed!");</script>');
		redirect('hrzone/Pay/CompensationList', 'refresh');
	}	
		
} 

	public function DownloadPDF($Id=null){
		// print_r($_POST);die;
		
			
		
			$Id = $this->uri->segment('4');
			$this->load->helper('download');
	
			$file = 'Document/SalarySlip/'.$UsercalenderDay.$Id.'.pdf';
			force_download($file, NULL);
		 
	
		
		
		
	}




}