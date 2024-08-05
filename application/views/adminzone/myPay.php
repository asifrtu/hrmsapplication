<?php include('header.php'); ?>
<?php include('commonSidebar.php'); ?>


<style>
	.modal-body {
		position: relative;
		flex: 1 1 auto;
		padding: 0.21rem;
	}

	.modal-dialog {
		max-width: 711px !important;
		margin-top: 115px !important;
	}

	.ColorSecondary {
		background-color: #6f42c1;
		padding: .35rem 1.25rem !important;

	}

	input.bPayroll {
		color: #6f42c1;
	}

	.cmPayroll {
		color: #4c3f5e !important;
	}

	.Qdxupload-btn-wrapper {
		position: relative;

		display: inline-block;
	}

	.btnQd {
		border: 2px solid #504a94;
		color: white;
		background-color: #504a94;
		padding: 4px 10px;
		border-radius: 0px;
		font-size: 20px;
		font-weight: bold;
	}

	.btnQdUpload {
		border: 2px solid white;
		color: gray;
		background-color: white;
		padding: 4px 10px;
		border-radius: 0px;
		font-size: 20px;
		font-weight: bold;
	}

	.Qdxupload-btn-wrapper input[type=file] {
		font-size: 100px;
		position: absolute;
		left: 0;
		top: 0;
		opacity: 0;
	}


	.empFile {
		border-bottom: 2px solid white;
		padding: 10px;
		background-color: white;
		color: grey;

	}

	.fa-download {
		color: black;

	}

	.fa-eye {
		color: blue;
	}

	.empFile a {

		color: grey;

		text-decoration: none;
	}

	.tnUemp {
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;
		text-align: center;
	}

	.tnemp {
		float: right;
		text-align: center;
		padding: 2px 0;

	}

	.tnemp a {

		color: #706e80;
		text-align: center;
		padding: 8px 11px;
		text-decoration: none;

	}

	.fC {
		font-size: 12px;
		color: #575757;
		text-align: center;
		vertical-align: middle !important;
	}

	.fC a {
		text-decoration: none;

	}

	.actionFontSize {
		font-size: 15px !important;
		color: #00d3c3 !important;
	}

	.btnQdUpload {
		border: 2px solid #504a94;
		color: white;
		background-color: #504a94;
		padding: 0px 7px;
		border-radius: 0px;
		font-size: 16px;
		font-weight: bold;
	}

	.actionFile a {

		text-decoration: none;
		color: #504a94;
	}

	.compUemp {
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;
	}

	.compemp a {
		text-decoration: none;
		text-align: center;
		color: #706e80;
	}

	.table-sm td,
	.table-sm th {
		padding: .3rem;

	}
	thead tr th:last-child{
		border-right: 1px solid #e3e6f0;
	}
	tbody tr td:last-child{
		border-right: 1px solid #e3e6f0;
	}
	th {
		background: #00d3c3;
		position: sticky;
		top: 0;
		font-size: 14px;
		font-weight: 500;
		border-left: 1px solid #e3e6f0;
		text-align: center;
	}
	td {
		border-left: 1px solid #e3e6f0;
	}

	.bg-info {
		background-color: #ececec !important;
	}

	.p-2 {
		padding: .1rem !important;
	}

	.sasifb {
		margin-bottom: 3px;
		margin-top: 7px;
	}

	.qdxUpper {

		font-size: 20px;
		color: black;
		font-family: Times New Roman;
	}

	.qdxpLower {
		font-size: 15px;
		font-weight: 500;
		color: black;

		font-family: Courier New;
	}

	.qdxName {
		padding: 0px 40px 0px 60px;
		font-size: 14px;
		font-weight: 600;
		color: black;
		font-family: Courier New;
	}

	.nameQ {

		padding: 0px 0px 0px 63px;
		font-size: 14px;
		font-weight: 600;
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

	.modal-title {
		padding-left: 350px;
	}

	.qdxSlip {
		font-size: 14px;
		font-weight: 400;
		color: black;
		font-family: Courier New;
	}

	.TotalErn {
		font-size: 14px;
		font-weight: 400;
		color: black;
		padding: 5px;
		font-family: Courier New;
	}

	.TotalDeduc {
		font-size: 14px;
	}

	.col-lg-1 {
		max-width: 4.33333%;
	}

	.table thead th {
		font-weight: bold;
		padding: 0.75rem !important;
	}

	.form-control {
		display: block;
		width: 100%;
		height: calc(1em + 1rem + 0.1px) !important;
		font-size: 12px;
		text-align: center;
		font-weight: 400;
		line-height: 1.5;
		color: #6e707e;
		background-color: #fff;
		background-clip: padding-box;
	}


	.card-body {
		padding-top: 15px !important;
	}

	.table-bordered tbody tr:nth-of-type(odd) {
		background-color: white;

	}

	.table-bordered tbody tr:nth-of-type(even) {

		background-color: rgb(239 239 239);
	}

	.AttSort {
		height: calc(1em + 0.75rem + 2px);
		padding: 0.2rem 0.5rem;
		font-size: 12px;
	}


	.swal2-popup {
		max-height: 250px !important;
		max-width: 450px !important;
	}

	.swal2-icon {
		font-size: 7px !important;
	}

	.swal2-text {
		max-height: 20px;
	}

	.swal2-styled {
		margin: 0.3125em;
		padding: 0.25em 1.1em;
		transition: box-shadow .1s;
		box-shadow: 0 0 0 3px transparent;
		font-weight: 500;
	}

	.swal2-title {
		position: relative;
		max-width: 100%;
		margin: 0;
		padding: 0.2em 0.2em 0;
		color: inherit;
		font-size: 1.875em;
		font-weight: 600;
		text-align: center;
		text-transform: none;
		word-wrap: break-word;
	}

	.close {
		float: right;
		font-size: 14px;
		line-height: 1;
		color: #f3f3f3;
		text-shadow: 0 1px 0 #fff;
		opacity: 1 !important;
		margin-top: -20px;
		margin-right: 10px;
		/* margin-bottom: 6px; */
		border: 1px solid white !important;
		border-radius: 50%;
		padding: 1px 4px !important;
	}

	.p-2 {
		padding: 0.5rem !important;
	}
	@media screen and (max-width: 792px) {
		.table thead th {
		font-weight: bold;
		padding: 4px 0 !important;
	}
	#brand-discount-slider ul {
        position: relative;
        margin: 0 !important;
        padding: 0px !important;
        height: 100% !important;
        list-style: none;
        display: flex;
        width: 100% !important;
    }
	.col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
		padding-right: 0rem!important;
	}
    }
</style>

<div class="col-lg-10">
	<div class="card" >
	<div class="ColorSecondaryPre" style="margin: -1px;">
		<div class="d-flex">
			<div class="pd-5"><a href="<?= site_url('adminzone/dashboard'); ?>" style="color: #fff;font-size: 15px;"><i class="fa fa-home" aria-hidden="true"></i></a></div>
			<div class="mr-auto pd-5"> &nbsp;&nbsp;<i style="font-size: 10px;color: white;" class="fas fa-chevron-right"></i><span class="breadcrumb_text " style="font-size: 15px;color: #00d3c3;font-weight: 600;">&nbsp; My Pay</span></div>


			<div class="select-info" style="padding: 2px;">
				<select class="empInput form-control" name="Year_Id" id="Year_Id" style="padding: 0 10px;" id="sel1">
					<option value="">Select Year</option>

					<?php
					// echo "<pre>";
					// print_r($teamDesignation);die;
					$curnYear = date("Y");

					foreach ($GoalYear as $year) {
						$selected_text = '';
						if ($year->year == $curnYear)
							$selected_text = 'selected';
						echo "<option year='" . $year->year . "' value='" . $year->year . "'  $selected_text > " . $year->year . "</option>";
					}


					?>

				</select>
			</div>



		</div>
	</div>



	<div class="container  ">

		<div class="">



			<div class="d-flex color_scheme_div">
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
					<ul id="renderHtmlMonthlyUserCrousel">


					</ul>
				</div>
			</div>
		</div>

		<div class="  " id="renderHtmlSinglePay" style=" margin-bottom: 40px;">

		</div>



	</div>
	<div class="previous_month_sallary_slip">
		<span>Previous Month </span>
	</div>

	<div class="pmonthlyPay" style="margin-top: 20px;">


		<div id="renderHtmlThreeMonthPay"></div>
	</div>


	<div class="modal " id="updateModal" role="dialog" style="padding-right: 17px;">
		<div class="modal-dialog modal-dialog-centered  modal-lg">

			<!-- Modal content-->

			<div class="modal-content">
				<div class="card-header" style="padding:7px!important; background-color: #1C304C;">
					<div class="">
						<h6 class="ColorPrimary" style="text-align: center;margin-bottom: 0px;">Salary Slip</h6>
						<button style="/* margin-left:197px; */" type="button" class="btn-close close" data-bs-dismiss="modal">×</button>
					</div>
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
		$(document).ready(function() {

			var d = new Date();
			var curYear = d.getFullYear();
			var currMonth = d.getMonth() + 1;
			MonthlyUserAttendance(curYear, currMonth);
			var YearID = $("#Year_Id option:selected").val();
			MonthlyUserCrousel(YearID);
			MonthlyUserAttendance(YearID, currMonth);
			EmployeeThreeMonthDetails(YearID, currMonth);
			// $("body").on('click', '.getPay', function(){


			$("#Year_Id").change(function() {
				// var MonthID = $(this).attr('data-month');
				// var MonthID = $("#month_Id").val();
				// alert(MonthID);
				var YearID = $("#Year_Id option:selected").val();
				MonthlyUserCrousel(YearID);
			});

			$("body").on('click', '.getPay', function() {


				// $("#month_Id, #Year_Id").click(function(){
				var MonthID = $(this).attr('data-month');
				// var MonthID = $("#month_Id").val();
				// alert(MonthID);
				var YearID = $("#Year_Id").val();
				MonthlyUserAttendance(YearID, MonthID);
				EmployeeThreeMonthDetails(YearID, MonthID);
			});



			$("body").on('click', '.year_select', function() {


				// $("#month_Id, #Year_Id").click(function(){
				var MonthID = $(this).attr('data-month');
				// var MonthID = $("#month_Id").val();
				// alert(MonthID);
				var YearID = $("#Year_Id").val();
				// EmployeeThreeMonthDetails(YearID, MonthID);
			});






			$("body").on('click', '.slipPrint', function() {

				var id = $(this).attr('data-UserId');
				var MonthID = $("#month_Id option:selected").val();
				var YearID = $("#Year_Id option:selected").val();
				var ajaxurl = "<?= site_url('adminzone/EmployeeAttendance/GeneratePDF'); ?>";
				$.ajax({
					type: "get",
					url: ajaxurl,
					data: {
						id: id,
						YearID: YearID,
						MonthID: MonthID
					},
					dataType: "JSON",
					success: function(data) {
						alert("Data updated Successfully");
					}

				});


			});




			$("body").on('click', '.SalaryView', function() {
				// var id = $(this).attr('data-UserId');
				// data-yeardata-month
				var MonthID = $(this).attr('data-month');
				var YearID = $("#Year_Id").val();
				MonthlySalaryView(YearID, MonthID);

			});

			$("body").on('click', '.SalaryPreView', function() {
				// var id = $(this).attr('data-UserId');
				// data-yeardata-month
				var MonthID = $(this).attr('data-MonthID');
				var YearID = $(this).attr('data-YearID');
				// var YearID  = $("#Year_Id").val();
				MonthlySalaryView(YearID, MonthID);

			});




			function MonthlySalaryView(YearID, MonthID) {
				var ajaxurl = "<?= site_url('adminzone/EmployeeAttendance/SingleUserPay'); ?>";
				$.ajax({
					type: "get",
					url: ajaxurl,
					data: {
						YearID: YearID,
						MonthID: MonthID
					},
					dataType: "JSON",
				}).done(function(response) {
					$("#updateModal").modal('show');
					if (response) {


						console.log(response.data);
						$("#renderHtmlLeave").html(`
					<table class="table table-bordered table-sm" id="dataTable" width="100%">
										
										<thead>
										${response.calenderDay.map(function(calenderDaydata){
										return(`
												
												
											<tr>
												<th colspan="5" class="fc qdxPrintCF" style="padding:0px!important;">
												
												<span class="qdxUpper"><?php echo COMPANY_NAME; ?></span>
												<hr style="border-bottom: 1px solid #e3e6f0; margin-top: 10px; margin-bottom: 0px;">
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
												<th class="fc qdxPrintCF" style="padding: 0!important; width: 20px;">
												<img class="logoPrint" style="height: 100px;width: 100px;" src="<?= base_url("Assets/img/HRPrintLogo.png") ?>"  alt="Cinque Terre"></th>
													
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

			}
		});







		function MonthlyUserAttendance(YearID, MonthID) {
			var ajaxurl = "<?= site_url('adminzone/EmployeeAttendance/EmployeeSinglePay'); ?>";
			$.ajax({
				type: "get",
				url: ajaxurl,
				data: {
					YearID: YearID,
					MonthID: MonthID
				},
				dataType: "JSON"
			}).done(function(response) {
				if (response) {

					$("#renderHtmlSinglePay").html(`
				
					<table class="table table-sm" id="dataTable" width="100%">
										<thead>
											<tr>
												
												<th class="cmPayroll ">CL</th>
												<th class="cmPayroll ">EL</th>
												<th class="cmPayroll displayNoneContent">MD</th>
												<th class="cmPayroll displayNoneContent">LWP</th>
												<th class="cmPayroll displayNoneContent">Working Days</th>
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
												
												
												${data.UserCL.map(function(UserCLData){
												return`<td class="AttFontStatus ">${UserCLData.wcount}</td>`
												}).join('')}
												${data.UserEL.map(function(UserELData){
												return`<td class="AttFontStatus ">${UserELData.wcount}</td>`
												}).join('')}
												${data.UserMD.map(function(UserMDData){
												return`<td class="AttFontStatus displayNoneContent">${UserMDData.wcount}</td>`
												}).join('')}
												
												${data.UserLWP.map(function(UserLWPData){
												return`<td class="AttFontStatus displayNoneContent">${UserLWPData.wcount}</td>`
												}).join('')}
												
												${data.WorkingDays.map(function(WorkingDaysData){
												return`<td class="AttFontStatus">${WorkingDaysData}</td>`
												}).join('')}
												
												
												
												${data.PayRoll.map(function(PayRollData){
												return`<td class="AttFontStatus displayNoneContent">${PayRollData}</td>`
												}).join('')}
												
												${data.MonthlySalary.map(function(MonthlySalaryData){
												return`<td class="AttFontStatus">${MonthlySalaryData}</td>`
												}).join('')}
												<td class="text-center">
													<a href="<?= site_url('adminzone/EmployeeAttendance/GeneratePDF/'); ?>${data.userId}/
													${data.YID.map(function(YIDData){
												return`${YIDData}`
												}).join('')}
													/${data.MID.map(function(MIDData){
												return`${MIDData}`
												}).join('')}" target="_blank" data-UserId="${data.userId}" class="slipDownLoad" ><i class="actionFontSize fa fa-download" aria-hidden="true"></i></a>
													
												</td>
												<td class="text-center">
													<a href="javascript:void(0)" data-UserId="${data.userId}" data-month="${data.MID.map(function(MIDData){
												return`${MIDData}`
												}).join('')}" class="SalaryView"><i class="actionFontSize fa fa-eye" aria-hidden="true"></i></a>
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










		function EmployeeThreeMonthDetails(YearID, MonthID) {
			var ajaxurl = "<?= site_url('adminzone/EmployeeAttendance/EmployeeThreeMonthPay'); ?>";
			$.ajax({
				type: "get",
				url: ajaxurl,
				data: {
					YearID: YearID,
					MonthID: MonthID
				},
				dataType: "JSON"
			}).done(function(response) {
				if (response) {

					$("#renderHtmlThreeMonthPay").html(`
				
					<table class="table  table-sm" id="dataTable" width="100%">
										<thead>
											<tr>
												
												<th class="cmPayroll">Month</th>
												<th class="cmPayroll displayNoneContent">CL</th>
												<th class="cmPayroll displayNoneContent">EL</th>
												<th class="cmPayroll displayNoneContent">MD</th>
												<th class="cmPayroll displayNoneContent">LWP</th>
												<th class="cmPayroll">Working Days</th>
												<th class="cmPayroll displayNoneContent">Pay Roll</th>
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
												
												
												<td class="AttFontStatus">${data.month}</a></td>
												${data.UserCL.map(function(UserCLData){
												return`<td class="AttFontStatus displayNoneContent">${UserCLData.wcount}</td>`
												}).join('')}
												${data.UserEL.map(function(UserELData){
												return`<td class="AttFontStatus displayNoneContent">${UserELData.wcount}</td>`
												}).join('')}
												${data.UserMD.map(function(UserMDData){
												return`<td class="AttFontStatus displayNoneContent">${UserMDData.wcount}</td>`
												}).join('')}
												
												${data.UserLWP.map(function(UserLWPData){
												return`<td class="AttFontStatus displayNoneContent">${UserLWPData.wcount}</td>`
												}).join('')}
												
												${data.WorkingDays.map(function(WorkingDaysData){
												return`<td class="AttFontStatus">${WorkingDaysData}</td>`
												}).join('')}
												
												
												
												${data.PayRoll.map(function(PayRollData){
												return`<td class="AttFontStatus displayNoneContent">${PayRollData}</td>`
												}).join('')}
												
												${data.MonthlySalary.map(function(MonthlySalaryData){
												return`<td class="AttFontStatus">${MonthlySalaryData}</td>`
												}).join('')}
												<td class="text-center">
													<a href="<?= site_url('adminzone/EmployeeAttendance/GeneratePrePDF/'); ?>${data.year}/${data.datemonth}" target="_blank" data-UserId="${data.userId}" class="slipDownLoad" ><i class="actionFontSize fa fa-download" aria-hidden="true"></i></a>
													
												</td>
												<td class="text-center">
													<a href="javascript:void(0)" data-YearID="${data.year}" data-MonthID="${data.datemonth}" class="SalaryPreView"><i class="actionFontSize fa fa-eye" aria-hidden="true"></i></a>
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






		function MonthlyUserCrousel(YearID) {
			var ajaxurl = "<?= site_url('adminzone/EmployeeAttendance/EmployeeMonthlyUserCrousel'); ?>";
			$.ajax({
				type: "post",
				url: ajaxurl,
				data: {
					YearID: YearID
				},
				dataType: "JSON"
			}).done(function(response) {
				if (response) {

					$("#renderHtmlMonthlyUserCrousel").html(`
				
					${response.data.map(function(data, index){
										return(`
										
										
											<li>
											<button class="brand-logo-container ${data.card.map(function(cardData){
												return`${cardData}`
												}).join('')} getPay" data-month="${data.month_Id}">
											<div>          
											<p>${data.month}</p>
											${data.Year.map(function(YearData){
												return`<span >${YearData}</span>`
												}).join('')}
											
											  
											
											</div>    

											<div class="${data.statusCode.map(function(statusCodeData){
												return`${statusCodeData}`
												}).join('')}">${data.card.map(function(cardData){
												return`${cardData}`
												}).join('')}</div>

											</button>

											</li>
										
										
										`)}).join('')}
				
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
		$(document).ready(function(brandSlider) {

			var slideCount = $('#brand-discount-slider ul li').length;
			var slideWidth = $('#brand-discount-slider ul li').width();
			var slideHeight = $('#brand-discount-slider ul li').height();
			var sliderUlWidth = slideCount * slideWidth;

			$('#brand-discount-slider').css({
				width: slideWidth,
				height: slideHeight
			});

			$('#brand-discount-slider ul').css({
				width: sliderUlWidth,
				marginLeft: -slideWidth
			});

			$('#brand-discount-slider ul li:last-child').prependTo('#brand-discount-slider ul');


			function moveLeft() {
				$('#brand-discount-slider ul').animate({
					left: +slideWidth
				}, 200, function() {
					$('#brand-discount-slider ul li:last-child').prependTo('#brand-discount-slider ul');
					$('#brand-discount-slider ul').css('left', '');
				});
			};

			function moveRight() {
				$('#brand-discount-slider ul').animate({
					left: -slideWidth
				}, 200, function() {
					$('#brand-discount-slider ul li:first-child').appendTo('#brand-discount-slider ul');
					$('#brand-discount-slider ul').css('left', '');
				});
			};


			$('.brand-arrow-prev').click(function() {
				moveLeft();
			});

			$('.brand-arrow-next').click(function() {
				moveRight();
			});


			setTimeout(moveLeft(), 1000); /* works only on load for the first slider...research later*/
		});
	</script>
	<footer class="fixed-bottom py-1 ">
		<p style="margin-bottom: 0px;">HR HELP 24x7</p>
	</footer>
</div>
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