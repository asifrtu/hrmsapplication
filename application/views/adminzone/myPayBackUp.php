<?php include('header.php'); ?>
<?php include('commonSidebar.php'); ?>
<style>
.actionFile a{
	text-decoration:none;
}
.bgCasual{
 background-color:#00aeeb;
}

.bgEarned{
 background-color:#ed028d;
}
.bgMIDDAY{
 background-color:#f69c21;
}
.bgWITHOUTPAY{
 background-color:#fa807f;
}

.tnUemp {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
 
}
.tnemp {
  float: right;
  text-align:center;
  padding:2px 0;
	
}
.tnemp a {
  
  color: #706e80;
  text-align: center;
  padding: 8px 11px;
  text-decoration: none;
  
}


.bg-info {
    background-color: #ececec!important;
}
.p-2 {
    padding: .1rem!important;
}
.sasifb{
	margin-bottom: 10px;
    margin-top: 10px;
}
.qdxUpper{
	padding: 0px 37px 0px 182px;
    font-size: 20px;
    color: black;
    font-family: Times New Roman;
}
.qdxpLower{
	font-size: 15px;
    font-weight: 500;
    color: black;
    padding: 2px 0px 5px 130px;
    font-family: Courier New;
}
.qdxName{
    padding: 0px 40px 0px 84px;
    font-size: 14px;
    font-weight: 400;
    color: black;
    font-family: Courier New;
}
.nameQ{
	
    padding: 0px 0px 0px 63px;
    font-size: 14px;
    font-weight: 400;
    color: black;
    font-family: Courier New;
}

.modal-header {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    padding: 0px;
	color: white;
    background: #28254a;
    border-bottom: 1px solid #e3e6f0;
    border-top-left-radius: calc(.3rem - 1px);
    border-top-right-radius: calc(.3rem - 1px);
}


.modal-title{
	padding-left: 350px;
}
.qdxSlip{
	font-size: 14px;
    font-weight: 400;
    color: black;
    font-family: Courier New;
}

.TotalErn{
	font-size: 14px;
    font-weight: 400;
    color: black;
	padding: 5px;
    font-family: Courier New;	
}


.form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + 0.4rem + 2px);
	font-size: 0.9rem;
}

.AttFontStatus{
	font-size:14px;
	
}
.cmPayroll{
	font-size:14px;
	font-weight:500;
}
.leaveSta{
	font-size:16px;
	font-weight:500;
	color:#504a94;
}
 </style>
        
        <!-- Content Wrapper -->
        <div id="content-wrapper bg-gradient-primary" class="d-flex flex-column" style="width:950px; margin-top:50px; margin-bottom:50px;">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
					 <?php if(!empty($this->session->flashdata('message'))) { ?>
			
			
			<?=$this->session->flashdata('message');?>
			
		<?php } ?>
                    <!-- Page Heading -->
                    
					<div class="card shadow mb-4" style="margin-bottom:100px;">
                       <div class="ColorSecondaryPre" style="padding: 12px 5px 5px 12px;">
                            <h5 class=" md-4 ColorPrimary" style="font-size:17px;">My Pay</h5>
                        </div>
                        <div class="card-body">
                    <!-- Content Row -->
					  <!-- Area Chart -->
								<div class="row" id="renderLeaveSinglePay">
								
								</div>
						
							
							<div class="d-flex sasifb flex-row-reverse ">
									<div class="p-2 bg-info" style="margin-left:5px;">

									<select class="empInput form-control" name="month_Id" id="month_Id" style="border: 1px solid #858796;">
									<option value="">Select Month</option>

										<?php 
										
										
										$curMonth = date("n");
										 // echo $curMonth = date("m", strtotime($cur));
										// echo "<pre>";
										// print_r($teamDesignation);die;


										  foreach ( $GoalMonth as $Month )
									{
									$selected_text='';
									if($Month->month_Id == $curMonth)
									$selected_text='selected';
									echo "<option month='".$Month->month."' value='".$Month->month_Id."'  $selected_text > ".$Month->month."</option>";

									}
									 
										 
										 
										 ?>

									</select>
									</div>
									<div class="p-2 bg-info">
									
									<select class="empInput form-control" name="Year_Id" id="Year_Id" style="border: 1px solid #858796;" id="sel1">
											<option value="">Select Year</option>
											
											<?php 
											// echo "<pre>";
											// print_r($teamDesignation);die;
											$curnYear = date("Y");
											
											 foreach ( $GoalYear as $year )
											{
											$selected_text='';
											if($year->year == $curnYear)
											$selected_text='selected';
											echo "<option year='".$year->year."' value='".$year->year."'  $selected_text > ".$year->year."</option>";

											}
											 
											 
											 ?>
											
											</select>
									</div>
									
									
									
									</div>
							<div class="">
							
							<div class="">
									<div class="table-responsive" id="renderHtmlSinglePay">
									
									</div>
								</div>
							</div>
					
							
					
							
						
						
                    </div>

                    <!-- Content Row -->
                    </div>

							

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

 
<div class="modal " id="updateModal" role="dialog">
<div class="modal-dialog modal-dialog-centered  modal-lg">
<!-- Modal content-->
	<div class="modal-content">
	<div class="modal-header">
        <h4 class="modal-title">Salary Slip</h4>
        <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
      </div>	

	<div class="modal-body">
	<div class="table-responsive" id="renderHtmlLeave">
									
								</div>
	
	</div>
	</div>
<!-- Content Row -->

</div>

</div>



   	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
	$(document).ready(function(){
	
		var d = new Date();
		var curYear =  d.getFullYear();
		var currMonth = d.getMonth() + 1;
		MonthlyUserAttendance(curYear, currMonth);
		
	$("#month_Id, #Year_Id").change(function(){
		
        var MonthID = $("#month_Id option:selected").val();
		var YearID  = $("#Year_Id").val();
		MonthlyUserAttendance(YearID, MonthID);
    });
	
	
	$("body").on('click', '.slipPrint', function(){
 
		var id = $(this).attr('data-UserId');
		var MonthID = $("#month_Id option:selected").val();
		var YearID = $("#Year_Id option:selected").val();
		var ajaxurl = "<?=site_url('adminzone/EmployeeAttendance/GeneratePDF');?>";
        $.ajax({
            type: "get",
            url: ajaxurl,
            data: {id:id, YearID:YearID, MonthID : MonthID},
			dataType: "JSON",
			success:function(data){
			alert("Data updated Successfully");
			}
			
		});

  
}); 
	



	 $("body").on('click', '.SalaryView', function(){
		var id = $(this).attr('data-UserId');
		var MonthID = $("#month_Id option:selected").val();
		var YearID  = $("#Year_Id").val();
		var ajaxurl = "<?=site_url('adminzone/EmployeeAttendance/SingleUserPay');?>";
        $.ajax({
            type: "get",
            url: ajaxurl,
            data: {id:id, YearID:YearID, MonthID : MonthID},
			dataType: "JSON",
			}).done(function(response){
			$("#updateModal").modal('show');
			if(response){
				
				
				console.log(response.data);
				$("#renderHtmlLeave").html(`
					<table class="table table-bordered  " id="dataTable" width="100%">
										
										<thead>
										${response.calenderDay.map(function(calenderDaydata){
										return(`
												
												
											<tr>
												<th colspan="5" class="fc qdxPrintCF" style="padding:0px!important;">
												
												<span class="qdxUpper">Aidernet Global Solution LLP</span>
												<hr style="border-bottom: 1px solid #e3e6f0; margin-top: 22px; margin-bottom: 0px;">
												<span class="qdxpLower">Salary Statement for the Month of ${calenderDaydata.UsercalenderDay}</span>
												
												`)
										}).join('')}
												
												<hr style="border-bottom: 1px solid #e3e6f0; margin-top: 2px 0px 6px 0px;">
												
												${response.data.map(function(data, index){
										return(`
												<div class="row ">
												<div class="col-lg-6 col-md-6 col-sm-6 namepb qdxCenter" style="max-width: 42.76667%; padding: 5px; border-right: 1px solid #e3e6f0;">
													<span class="qdxName">Employee Name</span>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-6 qdxCenter" style="padding: 2px 0px 6px 0px;">
													<span class="nameQ">${data.userName}</span>
												</div>
												</div>
												
												</th>
												<th class="fc qdxPrintCF">
												<img class="logoPrint" style="height: 131px; width: 165px; padding-left: 20px;" src="<?= base_url("Assets/img/qdxPrintLogo.png") ?>"  alt="Cinque Terre"></th>
													
											</tr>
										</thead>
										
										<tbody>
											<tr>
												
												<td colspan="2" class="qdxSlip">Employee Id</td>
												<td class="qdxSlip">${data.employee_id}</td>
												<td colspan="2" class="qdxSlip">Designation</td>
												${data.UserDetails.map(function(UserDetailsData){
												return`<td class="qdxSlip">${UserDetailsData.position}</td>`
												}).join('')}
												
													
											</tr>
											
											
											<tr>
												
												<td colspan="2" class="qdxSlip">Days Presents</td>
												${data.PayRoll.map(function(PayRollData){
												return`<td class="qdxSlip">${PayRollData}</td>`
												}).join('')}
												
												<td colspan="2" class="qdxSlip">Paid Leaves</td>
												${data.UserCL.map(function(UserCLData){
												return`<td class="qdxSlip">CL(${(UserCLData.wcount != "")?(UserCLData.wcount): "Nil"})
												`
												}).join('')}
												${data.UserEL.map(function(UserELData){
												return`
												
												&nbsp;&amp;&nbsp;EL(${(UserELData.wcount != "")?(UserELData.wcount): "Nil"})
												
												
												
												
												</td>`
												}).join('')}
												
												
											</tr>
											<tr>
												
												<td colspan="2" class="qdxSlip">Accounts Details</td>
												${data.UserBankDetails.map(function(UserBankDetailsData){
												return`<td class="qdxSlip">${(UserBankDetailsData.bankAccount != "")?UserBankDetailsData.bankAccount: "Nil"}</td>`
												}).join('')}
												
												<td colspan="2" class="qdxSlip">Account Bank</td>
												${data.UserBankDetails.map(function(UserBankDetailsData){
												return`<td class="qdxSlip">${(UserBankDetailsData.bankName != "")?UserBankDetailsData.bankName: "Nil"}</td>`
												}).join('')}
												
												
											</tr>
											`)
										}).join('')}
											<tr>
												${response.calenderDay.map(function(calenderDaydata){
										return(`
												<td colspan="2" class="qdxSlip">Salary for the Month</td>
												
												<td class="qdxSlip">${calenderDaydata.UsercalenderDay}</td>
												
												`)
										}).join('')}
												${response.data.map(function(data, index){
										return(`
												<td colspan="2" class="qdxSlip">Leave Without Pay</td>
												${data.UserLWP.map(function(UserLWPData){
												return`<td class="qdxSlip">LWP(${(UserLWPData.wcount != "")?(UserLWPData.wcount): "Nil"})</td>`
												}).join('')}
												
												
											</tr>
											<tr>
												
												<td colspan="3" class="qdxSlip"><div class="qdxCenter  TotalErn">Earnings</div></td>
												<td colspan="3" class="qdxSlip"><div class="qdxCenter  TotalErn">Deductions</div></td>
												
												
											</tr>
											${data.UserSalary.map(function(UserSalaryData){
												return`
											<tr>
												
												<td colspan="2" class="qdxSlip"></td>
												<td class="qdxSlip">Amount</td>
												<td colspan="2" class="fc qdxPrintCF"></td>
												<td class="qdxSlip">Amount</td>
												
											</tr>
											
											<tr>
												
												<td colspan="2" class="qdxSlip">Basic Salary</td>
												<td class="qdxSlip">${(UserSalaryData.basicSalary != "")?UserSalaryData.basicSalary: "Nil"}</td>
												<td colspan="2" class="qdxSlip">E. Provident Fund</td>
												<td class="qdxSlip">${(UserSalaryData.eProvidentFund != "")?UserSalaryData.eProvidentFund: "Nil"}</td>
												
											</tr>
											<tr>
												
												<td colspan="2" class="qdxSlip">Dearness Allowance</td>
												<td class="qdxSlip">${(UserSalaryData.dearnessAllowance != "")?UserSalaryData.dearnessAllowance: "Nil"}</td>
												<td colspan="2" class="qdxSlip">ESI</td>
												<td class="qdxSlip">${(UserSalaryData.ESI != "")?UserSalaryData.ESI: "Nil"}</td>
												
											</tr>
											<tr>
												
												<td colspan="2" class="qdxSlip">HRA</td>
												<td class="qdxSlip">${(UserSalaryData.HRA != "")?UserSalaryData.HRA: "Nil"}</td>
												<td colspan="2" class="qdxSlip">Professional Tax</td>
												<td class="qdxSlip">${(UserSalaryData.professionalTax != "")?UserSalaryData.professionalTax: "Nil"}</td>
												
											</tr>
											
											<tr>
												
												<td colspan="2" class="qdxSlip">Conveyance</td>
												<td class="qdxSlip">${(UserSalaryData.Conveyance != "")?UserSalaryData.Conveyance: "Nil"}</td>
												<td colspan="2" class="qdxSlip">I. Tax</td>
												<td class="qdxSlip">${(UserSalaryData.ITax != "")?UserSalaryData.ITax: "Nil"}</td>
												
											</tr>
											
											<tr>
												
												<td colspan="2" class="qdxSlip">Medical Allowance</td>
												<td class="qdxSlip">${(UserSalaryData.Medical != "")?UserSalaryData.Medical: "Nil"}</td>
												<td colspan="2" class="qdxSlip">Loan</td>
												<td class="qdxSlip">${(UserSalaryData.Loan != "")?UserSalaryData.Loan: "Nil"}</td>
												
											</tr>
											
											<tr>
												
												<td colspan="2" class="qdxSlip">Mobile Expenses</td>
												<td class="qdxSlip">${(UserSalaryData.mobileExpenses != "")?UserSalaryData.mobileExpenses: "Nil"}</td>
												<td colspan="2" class="qdxSlip">Advance</td>
												<td class="qdxSlip">${(UserSalaryData.Advance != "")?UserSalaryData.Advance: "Nil"}</td>
												
											</tr>
											
											<tr>
												
												<td colspan="2" class="qdxSlip">Special Allowance</td>
												<td class="qdxSlip">${(UserSalaryData.specialAllowance != "")?UserSalaryData.specialAllowance: "Nil"}</td>
												
												`
												}).join('')}
												
												${data.MonthlyDeduction.map(function(MonthlyDeductionData){
												return`
												<td colspan="2" class="qdxSlip">Misc.Deduction</td>
												<td class="qdxSlip">${(MonthlyDeductionData != "")?MonthlyDeductionData: "Nil"}</td>
												`
												}).join('')}
											</tr>
											${data.UserSalary.map(function(UserSalaryData){
												return`
											<tr>
												
												<td colspan="2" class="qdxSlip">Performance Incentives</td>
												<td class="qdxSlip">${(UserSalaryData.performanceIncentives != "")?UserSalaryData.performanceIncentives: "Nil"}</td>
												<td colspan="2" class="qdxSlip"></td>
												<td class="qdxSlip"></td>
												
											</tr>
											
											<tr>
												
												<td colspan="2" class="qdxSlip">Arrears/Other Ern.</td>
												<td class="qdxSlip">${(UserSalaryData.otherOrArrears != "")?UserSalaryData.otherOrArrears: "Nil"}</td>
												<td colspan="2" class="qdxSlip"></td>
												<td class="qdxSlip"></td>
												
											</tr>
											`
												}).join('')}
											
											
											${data.MonthlySalary.map(function(MonthlySalaryData){
												return`
											
											<tr>
												
												<td colspan="2" class="qdxSlip"><div class="qdxCenter">Total Earnings</div></td>
												<td class="qdxSlip">${(MonthlySalaryData != "")?MonthlySalaryData: "Nil"}</td>
												`
												}).join('')}
												
												${data.MonthlyDeduction.map(function(MonthlyDeductionData){
												return`
												
												<td colspan="2" class="qdxSlip">Total Deduction</td>
												<td class="qdxSlip">${(MonthlyDeductionData != "")?MonthlyDeductionData: "Nil"}</td>
												
											</tr>
											`
												}).join('')}
												
												${data.SalaryInWord.map(function(SalaryInWordData){
												return`
											<tr>
												
												<td colspan="2" class="qdxSlip"><div class="qdxCenter  TotalErn">Net Salary Rs.</div></td>
												<td colspan="4" class="qdxSlip"><div class="qdxCenter  TotalErn">${price_in_words(SalaryInWordData)}&nbsp;Only</div></td>
												
											</tr>
											`
												}).join('')}
											`)
										}).join('')}
										
										
										
										
										
										</tbody>
									</table>
										`);

				
				} else {
				$("#AttendencedataTable tbody").html("<div>No data Found.....</div>");
			}
				
        });
	
  });
  
		
	
});



function MonthlyUserAttendance(YearID, MonthID){
	var ajaxurl = "<?=site_url('adminzone/EmployeeAttendance/EmployeeSinglePay');?>";
        $.ajax({
            type: "get",
            url: ajaxurl,
            data: {YearID:YearID, MonthID : MonthID},
			dataType: "JSON"
        }).done(function(response){
			if(response){
				
				$("#renderHtmlSinglePay").html(`
				
					<table class="table table-bordered table-sm" id="dataTable" width="100%">
										<thead>
											<tr>
												<th class="cmPayroll">Employee Name</th>
												<th class="cmPayroll">Employee Id</th>
												<th class="cmPayroll">CL</th>
												<th class="cmPayroll">EL</th>
												<th class="cmPayroll">MD</th>
												<th class="cmPayroll">LWP</th>
												<th class="cmPayroll">Working Days</th>
												<th class="cmPayroll">Pay Roll</th>
												<th class="cmPayroll">Gross Salary</th>
												
												<th colspan="1" class="cmPayroll">
													<span class="actionFile">Salary Slip</span>
												
												</th>
												
												
												
												
											</tr>
										</thead>
										
										<tbody>
										
											${response.data.map(function(data, index){
										return(`
											<tr>
												
												<td class="AttFontStatus">${data.userName}</a></td>
												<td class="AttFontStatus">${data.employee_id}</a></td>
												${data.UserCL.map(function(UserCLData){
												return`<td class="AttFontStatus">${UserCLData.wcount}</td>`
												}).join('')}
												${data.UserEL.map(function(UserELData){
												return`<td class="AttFontStatus">${UserELData.wcount}</td>`
												}).join('')}
												${data.UserMD.map(function(UserMDData){
												return`<td class="AttFontStatus">${UserMDData.wcount}</td>`
												}).join('')}
												
												${data.UserLWP.map(function(UserLWPData){
												return`<td class="AttFontStatus">${UserLWPData.wcount}</td>`
												}).join('')}
												
												${data.WorkingDays.map(function(WorkingDaysData){
												return`<td class="AttFontStatus">${WorkingDaysData}</td>`
												}).join('')}
												
												
												
												${data.PayRoll.map(function(PayRollData){
												return`<td class="AttFontStatus">${PayRollData}</td>`
												}).join('')}
												
												${data.MonthlySalary.map(function(MonthlySalaryData){
												return`<td class="AttFontStatus">${MonthlySalaryData}</td>`
												}).join('')}
												<td class="AttFontStatus">
													<div class=" ">
													<ul class="tnUemp">
													<li class="tnemp"><a href="<?=site_url('adminzone/EmployeeAttendance/GeneratePDF/');?>${data.userId}/
													${data.YID.map(function(YIDData){
												return`${YIDData}`
												}).join('')}
													/${data.MID.map(function(MIDData){
												return`${MIDData}`
												}).join('')}" target="_blank" data-UserId="${data.userId}" class="slipDownLoad" ><i class="actionFontSize fa fa-download" aria-hidden="true"></i></a></li>
													<li class="tnemp"><a href="javascript:void(0)" data-UserId="${data.userId}" class="SalaryView"><i class="actionFontSize fa fa-eye" aria-hidden="true"></i></a></li>
													</ul>

													</div>
												
												</td>
												
												
												
											</tr>
											
											`)
										}).join('')}
											
										</tbody>
									</table>
				
				`);
				
				
				
				
				$("#renderLeaveSinglePay").html(`
				
				${response.data.map(function(data, index){
										return(`
											
											
											<div class="col-lg-3 col-6 leavesM">
								<!-- small card -->
								<div class="small-box bgCasual">
								  <div class="inner">
									${data.UserCL.map(function(UserCLData){
									return`<h5 style="text-align:center;">${UserCLData.wcount}</h5>`
									}).join('')}
									
									<p style="margin-bottom: 0rem; text-align:center;">Leaves</p>

									
								  </div>
								  
								  <a href="#" class="small-box-footer">
									CASUAL
								  </a>
								</div>
								</div>
								<!-- ./col -->
								
								<!-- ./col -->
								
								<div class="col-lg-3 col-6 leavesM">
								<!-- small card -->
								<div class="small-box bgEarned">
								  <div class="inner">
								  ${data.UserEL.map(function(UserELData){
												return`<h5 style="text-align:center;">${UserELData.wcount}</h5>`
												}).join('')}
									
									<p style="margin-bottom: 0rem; text-align:center;">Leaves</p>

									
								  </div>
								  
								  <a href="#" class="small-box-footer">
									EARNED
								  </a>
								</div>
								</div>
								<div class="col-lg-3 col-6 leavesM">
								<!-- small card -->
								<div class="small-box bgMIDDAY">
								  <div class="inner">
								  ${data.UserMD.map(function(UserMDData){
												return`<h5 style="text-align:center;">${UserMDData.wcount}</h5>`
												}).join('')}
									
									<p style="margin-bottom: 0rem; text-align:center;">Leaves</p>

							
								  </div>
								  
								  <a href="#" class="small-box-footer">
									MID DAY
								  </a>
								</div>
								</div>
								<div class="col-lg-3 col-6 leavesM">
								<!-- small card -->
								<div class="small-box bgWITHOUTPAY">
								  <div class="inner">
								  ${data.UserLWP.map(function(UserLWPData){
												return`<h5 style="text-align:center;">${UserLWPData.wcount}</h5>`
												}).join('')}
									
									<p style="margin-bottom: 0rem; text-align:center;">Leaves</p>

									
								  </div>
								  
								  <a href="#" class="small-box-footer">
									WITHOUT PAY
								  </a>
								</div>
								</div>
				
											
											`)
										}).join('')}
										
										
				
				`);
				
								
				
				
					
			} else {
				$("#AttendencedataTable tbody").html("<div>No data Found.....</div>");
			}
				
        });
}


							
</script>
   
<script>


function price_in_words(price) {
  var sglDigit = ["Zero", "One", "Two", "Three", "Four", "Five", "Six", "Seven", "Eight", "Nine"],
    dblDigit = ["Ten", "Eleven", "Twelve", "Thirteen", "Fourteen", "Fifteen", "Sixteen", "Seventeen", "Eighteen", "Nineteen"],
    tensPlace = ["", "Ten", "Twenty", "Thirty", "Forty", "Fifty", "Sixty", "Seventy", "Eighty", "Ninety"],
    handle_tens = function(dgt, prevDgt) {
      return 0 == dgt ? "" : " " + (1 == dgt ? dblDigit[prevDgt] : tensPlace[dgt])
    },
    handle_utlc = function(dgt, nxtDgt, denom) {
      return (0 != dgt && 1 != nxtDgt ? " " + sglDigit[dgt] : "") + (0 != nxtDgt || dgt > 0 ? " " + denom : "")
    };

  var str = "",
    digitIdx = 0,
    digit = 0,
    nxtDigit = 0,
    words = [];
  if (price += "", isNaN(parseInt(price))) str = "";
  else if (parseInt(price) > 0 && price.length <= 10) {
    for (digitIdx = price.length - 1; digitIdx >= 0; digitIdx--) switch (digit = price[digitIdx] - 0, nxtDigit = digitIdx > 0 ? price[digitIdx - 1] - 0 : 0, price.length - digitIdx - 1) {
      case 0:
        words.push(handle_utlc(digit, nxtDigit, ""));
        break;
      case 1:
        words.push(handle_tens(digit, price[digitIdx + 1]));
        break;
      case 2:
        words.push(0 != digit ? " " + sglDigit[digit] + " Hundred" + (0 != price[digitIdx + 1] && 0 != price[digitIdx + 2] ? " and" : "") : "");
        break;
      case 3:
        words.push(handle_utlc(digit, nxtDigit, "Thousand"));
        break;
      case 4:
        words.push(handle_tens(digit, price[digitIdx + 1]));
        break;
      case 5:
        words.push(handle_utlc(digit, nxtDigit, "Lakh"));
        break;
      case 6:
        words.push(handle_tens(digit, price[digitIdx + 1]));
        break;
      case 7:
        words.push(handle_utlc(digit, nxtDigit, "Crore"));
        break;
      case 8:
        words.push(handle_tens(digit, price[digitIdx + 1]));
        break;
      case 9:
        words.push(0 != digit ? " " + sglDigit[digit] + " Hundred" + (0 != price[digitIdx + 1] || 0 != price[digitIdx + 2] ? " and" : " Crore") : "")
    }
    str = words.reverse().join("")
  } else str = "";
  return str

}
</script>
 

<?php include('footer.php'); ?>