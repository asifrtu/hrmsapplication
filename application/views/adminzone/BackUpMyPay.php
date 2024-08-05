
<?php include('header.php');?>
<?php  include('commonSidebar.php'); ?>

    <div class="col-lg-10 right_apply_ticket mb-3 " >

    <div class="employee_details">
            <span>My Pay</span>
        </div>

    

    <div class="container  ">
        <div>
        <div class="mt-3 mb-2" style="color:#504a94; padding-left: 45px;">Remaining Leaves</div>
        <div class="row data_row_mypay_page" id="renderLeaveSinglePay">

                    

        </div>
        <hr style="margin-bottom: 20px; margin-top: 31px; background-color: #d3b6f8;"> 
    </div>


        <div class="">
		
		
		
		<div class="d-flex color_scheme_div" >
		<div class="p-2">
		<i class="fas fa-circle" style="font-size: 12px; color: #e5ae4d;"></i>
		</div>
		<div class="p-2">
		<span>Pending</span>
		
		</div>
		<div class="p-2">
		<i class="fas fa-circle" style="font-size: 12px; color: #7cb133;"></i>
		</div>
		<div class="p-2">
		<span>Completed</span>
		
		</div>
		<div class="p-2">
		<i class="fas fa-circle" style="font-size: 12px; color: #3e83bf;"></i>
		</div>
		<div class="p-2">
		<span>Current</span>
		
		</div>
		<div class="ml-auto">
		
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
		
		<div class="brands-slider-col">
		<div id="brand-discount-slider">
		<div class="brand-arrow-next">
		&#10095;
		</div>
		<div class="brand-arrow-prev">
		&#10094;
		</div>
			<ul name="month_Id" id="month_Id">
				<?php 
				$curMonth = date("n");
				
				foreach($GoalMonth as $Month): ?>
				<?php 
				
				
				
				$selected_text='';
									if($Month->month_Id == $curMonth)
									$selected_text='selected';
				
				?>
				<li value="<?php echo $Month->month_Id; ?>" <?php echo $selected_text; ?>>
				<button class="brand-logo-container Current getPay" data-month="<?php echo $Month->month_Id; ?>">
				<div>          
				<p><?php echo $Month->month; ?></p>
				<span >2022</span>  </div>    

				<div class="current_status">current</div>

				</button>

				</li>
		 <?php  endforeach;  ?>

			</ul>
		</div>
		</div>
</div>

    <div class="Apply_ticket_main  " id="renderHtmlSinglePay" style=" margin-bottom: 40px;">
       
    </div>
	
	
	
    </div>
<div class="previous_month_sallary_slip">
<span>Previous Months</span>
</div>

<div class="Apply_ticket_main  " style="margin-top: 20px;">
   
    <div class="d-flex flex-row-reverse">
        <button class="year_select" style="border: 1px solid #ddd;" data-month="pre" alt="previous Year"><i class="fas fa-chevron-right"></i></button>
        <button class="year_select" style="border: 1px solid #ddd;" data-month="next" alt="next Year"><i class="fas fa-chevron-left"></i></button>
    </div>

    <table class="table">
    <thead class="courses">
        <tr>
        <th>Month</th>
        <th>CL</th>
        <th>EL</th>
        <th>MD</th>
        <th>LWP</th>
        <th>Working Days</th>
        <th>Pay Roll</th>
        <th>Gross Per Month</th>
        <th colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>sssss</td>
            <td>sssss</td>
            <td>sssss</td>
            <td>sssss</td>
            <td>sssss</td>
            <td>sssss</td>
            <td>sssss</td>
            <td>sssss</td>
            <td class="text-center"><i class="far fa-eye"></i></td>
            <td class="text-center"><i class="fas fa-download"></i></td>
        </tr>
      
            
    </tbody>
    </table>
</div>

 
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



<script>
	$(document).ready(function(){
	
		var d = new Date();
		var curYear =  d.getFullYear();
		var currMonth = d.getMonth() + 1;
		MonthlyUserAttendance(curYear, currMonth);
		
	$("body").on('click', '.getPay', function(){
	
	
	// $("#month_Id, #Year_Id").click(function(){
		var MonthID = $(this).attr('data-month');
        // var MonthID = $("#month_Id").val();
		// alert(MonthID);
		var YearID  = $("#Year_Id").val();
		MonthlyUserAttendance(YearID, MonthID);
    });
	
	
	
	$("body").on('click', '.year_select', function(){
	
	
	// $("#month_Id, #Year_Id").click(function(){
		var MonthID = $(this).attr('data-month');
        // var MonthID = $("#month_Id").val();
		// alert(MonthID);
		var YearID  = $("#Year_Id").val();
		EmployeeThreeMonthDetails(YearID, MonthID);
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
												
												<span class="qdxUpper"><?php echo COMPANY_NAME; ?></span>
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
												
												<th colspan="2" class="cmPayroll">
													<span class="actionFile">Action</span>
												
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
												<td class="text-center">
													<a href="<?=site_url('adminzone/EmployeeAttendance/GeneratePDF/');?>${data.userId}/
													${data.YID.map(function(YIDData){
												return`${YIDData}`
												}).join('')}
													/${data.MID.map(function(MIDData){
												return`${MIDData}`
												}).join('')}" target="_blank" data-UserId="${data.userId}" class="slipDownLoad" ><i class="actionFontSize fa fa-download" aria-hidden="true"></i></a>
													
												</td>
												<td class="text-center">
													<a href="javascript:void(0)" data-UserId="${data.userId}" class="SalaryView"><i class="actionFontSize fa fa-eye" aria-hidden="true"></i></a>
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
											
											
									<div class="col-lg-2 mypay_boxes text-center" style="background-color: #00aeef;">
									
									${data.UserCL.map(function(UserCLData){
									return`<h6>${UserCLData.wcount}</h6>`
									}).join('')}
									<span>Leaves</span>
									<div style="background: #05a2dc;">
									<h4>CASUAL</h4>
									</div>

									</div>

									<div class="col-lg-2 mypay_boxes text-center"  style="background-color: #ec008c;">
									${data.UserEL.map(function(UserELData){
												return`<h6>${UserELData.wcount}</h6>`
												}).join('')}
									
									<span>Leaves</span>
									<div style="background: #d10f82;">
									<h4>EARNED</h4>
									</div>
									</div>
									<div class="col-lg-2 mypay_boxes text-center"  style="background-color: #f89b22;">
									${data.UserMD.map(function(UserMDData){
												return`<h6>${UserMDData.wcount}</h6>`
												}).join('')}
									<span>Leaves</span>
									<div style="background: #e18a19;">
									<h4>MID DAY</h4>
									</div>
									</div>
									<div class="col-lg-2 mypay_boxes text-center"  style="background-color: #fa7f7f;">
									${data.UserLWP.map(function(UserLWPData){
												return`<h6>${UserLWPData.wcount}</h6>`
												}).join('')}
									<span>Leaves</span>
									<div style="background: #f76565;">
									<h4>WITHOUT PAY</h4>
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










function EmployeeThreeMonthDetails(YearID, MonthID){
	var ajaxurl = "<?=site_url('adminzone/EmployeeAttendance/EmployeeThreeMonthPay');?>";
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
												
												<th colspan="2" class="cmPayroll">
													<span class="actionFile">Action</span>
												
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
												<td class="text-center">
													<a href="<?=site_url('adminzone/EmployeeAttendance/GeneratePDF/');?>${data.userId}/
													${data.YID.map(function(YIDData){
												return`${YIDData}`
												}).join('')}
													/${data.MID.map(function(MIDData){
												return`${MIDData}`
												}).join('')}" target="_blank" data-UserId="${data.userId}" class="slipDownLoad" ><i class="actionFontSize fa fa-download" aria-hidden="true"></i></a>
													
												</td>
												<td class="text-center">
													<a href="javascript:void(0)" data-UserId="${data.userId}" class="SalaryView"><i class="actionFontSize fa fa-eye" aria-hidden="true"></i></a>
												</td>
												
												
												
											</tr>
											
											`)
										}).join('')}
											
										</tbody>
									</table>
				
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
 


<script>
$(document).ready(function (brandSlider) {

var slideCount = $('#brand-discount-slider ul li').length;
var slideWidth = $('#brand-discount-slider ul li').width();
var slideHeight = $('#brand-discount-slider ul li').height();
var sliderUlWidth = slideCount * slideWidth;

$('#brand-discount-slider').css({ width: slideWidth, height: slideHeight });

$('#brand-discount-slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });

$('#brand-discount-slider ul li:last-child').prependTo('#brand-discount-slider ul');


function moveLeft() {
    $('#brand-discount-slider ul').animate({
        left: + slideWidth
    }, 200, function () {
        $('#brand-discount-slider ul li:last-child').prependTo('#brand-discount-slider ul');
        $('#brand-discount-slider ul').css('left', '');
    });
};

function moveRight() {
    $('#brand-discount-slider ul').animate({
        left: - slideWidth
    }, 200, function () {
        $('#brand-discount-slider ul li:first-child').appendTo('#brand-discount-slider ul');
        $('#brand-discount-slider ul').css('left', '');
    });
};


$('.brand-arrow-prev').click(function () {
    moveLeft();
});

$('.brand-arrow-next').click(function () {
    moveRight();
});


 setTimeout(moveLeft(), 1000); /* works only on load for the first slider...research later*/
});

</script>
<footer class="fixed-bottom py-1 ">
    <p style="margin-bottom: 0px;">HR HELP 24x7</p>
    </footer>
    </div>
    <script>
        function myFunction() {
          var x = document.getElementById("myLink");
          if (x.style.display === "block") {
            x.style.display = "none";
          } else {
            x.style.display = "block";
          }
        }
        </script>
    </body>
    </html>