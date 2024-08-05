<?php include('header.php'); ?>
<?php include('commonSidebar.php'); ?>
<!-- Content Wrapper -->


<style>
	.btncrat::after {
		width: 1rem;
		text-align: center;
		float: right;
		vertical-align: 0;
		border: 0;
		font-weight: 900;
		content: '\25BC';
		padding-left: 10px;
		font-family: 'Font Awesome 5 Free';
	}

	.addGoalsBtn {
		float: left;
		margin-bottom: 5px;
		color: #1C304C !important;
		background: white !important;
		font-weight: 400;
		border-radius: 2px;
		padding: .2em 2em 0.2em 2em;
		border: 2px solid #1C304C !important;
	}

	.tnUemp {
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;

	}

	.tnemp {
		float: right;
		text-align: center;
		padding: 2px 0;

	}

	.tnNotify {
		float: left;
		text-align: center;
		padding: 2px 0;
		margin: 0 2px;
	}

	.tnemp a {

		color: #706e80;
		text-align: center;
		padding: 8px 11px;
		text-decoration: none;

	}

	.tnNotify a {

		color: white;
		text-align: center;
		padding: 8px 11px;
		text-decoration: none;

	}

	.tnAccept a {
		background-color: #504a94;
	}

	.tnDecline a {
		background-color: red;
	}


	.table {
		border-collapse: collapse !important;
	}

	.table td,
	.table th {}

	.empTL {
		padding: 1rem .35rem !important;
	}

	.empTL1 {
		padding: 0rem !important;
		text-align: center;
	}

	.empTL2 {
		padding: 0rem !important;
		text-align: center;
	}





	.dropdown {
		position: relative;
		display: inline-block;
	}

	.dropdown-content {
		display: none;
		position: absolute;
		background-color: #f9f9f9;
		min-width: 122px;
		box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
		z-index: 1;
	}

	.dropdown-content a {
		color: black;
		padding: 5px 16px;
		text-decoration: none;
		display: block;
	}

	.dropdown-content a:hover {
		background-color: #f1f1f1
	}

	.dropdown:hover .dropdown-content {
		display: block;
	}



	.empWeekOff {
		background-color: lightgray;
	}

	.empLWP {
		background-color: #f9c3cd;
	}

	td {
		padding: .3rem 1rem !important;
	}

	.arrow-down {
		width: 0;
		height: 0;
		border-left: 20px solid transparent;
		border-right: 20px solid transparent;

		border-top: 20px solid red;
	}

	.select_info {
		background-color: none !important;
	}

	.p-2 {
		padding: .1rem !important;
	}

	.sasifb {
		margin-bottom: 25px;
	}


	.form-check-label {
		color: black;
	}

	.calTH {
		text-align: center;
	}

	.empCL {
		text-align: center;
	}


	.table td,
	.table th {
		padding: .3rem .3rem .0rem .3rem !important;
	}

	.AttSort {
		height: calc(1em + .75rem + 2px);

		padding: .200rem .5rem;
		font-size: 12px;
	}

	.AttSortMonth {
		height: calc(1em + .75rem + 2px);

		padding: .200rem .2rem;
		font-size: 14px;
	}

	.table tbody td {}

	.sasifb {
		margin-bottom: 10px;
		margin-top: 10px;
	}

	.AttFontStatus {
		font-size: 14px;

	}

	.cmPayroll {
		font-size: 14px;
		font-weight: 600;
		border: 1px solid #dbdbdb;
	}


	.card-body {
		flex: 1 1 auto;
		min-height: 1px;
		padding: 0 1.25rem;
	}

	.W-OFF {
		color: white !important;
		background-color: #f1c244;
		font-size: 12px;
		text-align: center;
	}

	.table thead th {
		vertical-align: middle !important;
		text-align: center;
	}

	.H {
		color: white !important;
		background-color: #0c55c8;
		font-size: 12px;
		text-align: center;
	}

	.MD {
		color: white !important;
		background-color: #ff9926;
		font-size: 12px;
		text-align: center;
	}

	.P {
		background-color: #6aa855;
		color: white !important;
		font-size: 12px;
		text-align: center;
	}


	.A {
		background-color: #ff0812;
		color: white !important;
		font-size: 12px;
		text-align: center;
	}


	.CL {
		color: white !important;
		background-color: #06adad;
		font-size: 12px;
		text-align: center;
	}

	.EL {
		color: white !important;
		background-color: #cf87cd;
		font-size: 12px;
		text-align: center;
	}

	.LWP {
		color: white !important;
		background-color: #c2695a;
		font-size: 12px;
		text-align: center;
	}


	.LeaveSymbol {
		position: relative;
		margin-right: 2px;
		text-align: center;
	}

	.form-check-label {
		color: #393535 !important;
		font-size: 10px;
	}

	.ColorLate {
		color: red !important;
	}

	.TimelyPunched {
		color: #6aa855 !important;
	}
</style>


<div id="content-wrapper bg-gradient-primary" class="d-flex flex-column col-lg-10 my_information" style="">

	<!-- Main Content -->
	<div id="content">

		<!-- Topbar -->

		<!-- End of Topbar -->

		<!-- Begin Page Content -->
		<div class="">

			<!-- Page Heading -->

			<div class=" shadow mb-4" style="margin-bottom:100px;">
			<div class="card-header ColorSecondaryPre">
				<div class="d-flex">
					<div><a href="<?= site_url('hrzone/dashboard/wall'); ?>" style="color: #fff;font-size: 15px;"><i class="fa fa-home" aria-hidden="true"></i></a></div>
					<div class="mr-auto"> &nbsp;&nbsp;<i style="font-size: 10px;color: white;" class="fas fa-chevron-right"></i><span class="breadcrumb_text " style="font-size: 15px;color: #00d3c3;font-weight: 600;">&nbsp; Timing</span></div>
					<div><a href="<?= site_url('hrzone/dashboard/wall'); ?>" style="color: #fff;font-size: 15px;"><i class="fas fa-print"></i></a></div>

					<div class="p-2 select-info" style="margin-left:15px;">
						<select class=" AttSort form-control" name="month_Id" id="month_Id" style="border: 1px solid #858796;">
							<option value="">Select Month</option>

							<?php
							$curMonth = date("m");
							// echo "<pre>";
							// print_r($teamDesignation);die;


							foreach ($GoalMonth as $Month) {
								$selected_text = '';
								if ($Month->month_Id == $curMonth)
									$selected_text = 'selected';
								echo "<option month='" . $Month->month . "' value='" . $Month->month_Id . "'  $selected_text > " . $Month->month . "</option>";
							}

							?>

						</select>
					</div>
					<div class="p-2 select-info">
						<select class=" AttSort form-control" name="Year_Id" id="Year_Id" style="border: 1px solid #858796;" id="sel1">
							<option value="">Select Year</option>

							<?php
							$curnYear = date("Y");
							// echo "<pre>";
							// print_r($teamDesignation);die;


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
			

				<!-- Content Row -->
				<!-- Area Chart -->

				<div class="" style="padding-bottom: 10px;">
					<div class="d-flex" style=" margin-top:10px; margin-bottom:10px; margin-left:1px; ">
						<div class="LeaveSymbol">
							<div class="Marking_color colorMarkingMobile" style=" background:#06adad;border: 1px solid #049595;">CL</div>
							<label class="form-check-label " style="color:black;">
								Casual Leave
							</label>
						</div>
						<div class="LeaveSymbol">
							<div class="Marking_color colorMarkingMobile" style="background:#cf87cd;border: 1px solid #b56fb3;">EL</div>
							<label class="form-check-label " style="color:black;">
								Earned Leave
							</label>
						</div>
						<div class="LeaveSymbol">
							<div class="Marking_color colorMarkingMobile" style="background:#ff9926;border: 1px solid #e3861e;">MD</div>
							<label class="form-check-label " style="color:black;">
								Mid Day
							</label>
						</div>

						<div class="LeaveSymbol displayNoneContent">
							<div class="Marking_color colorMarkingMobile" style="background:#0c55c8;border: 1px solid #0648b0;">H</div>
							<label class="form-check-label " style="color:black;">
								Holiday
							</label>
						</div>
						<div class="LeaveSymbol displayNoneContent">
							<div class="Marking_color colorMarkingMobile" style="background:#5d8383;border: 1px solid #4a6f6f;">C-OFF</div>
							<label class="form-check-label " style="color:black;">
								Compensatory Off
							</label>
						</div>
						<div class="LeaveSymbol">
							<div class="Marking_color colorMarkingMobile" style="background:#7ecf93;border: 1px solid #7ecf93;">P</div>
							<label class="form-check-label " style="color:black;">
								Present
							</label>
						</div>

						<div class="LeaveSymbol displayNoneContent">
							<div class="Marking_color colorMarkingMobile" style="background:#ff0812;border: 1px solid #d0030b;">A</div>
							<label class="form-check-label " style="color:black;">
								Absent
							</label>
						</div>

						<div class="LeaveSymbol displayNoneContent">
							<div class="Marking_color colorMarkingMobile" style="background:#bbb8b8;border: 1px solid #aaa8a8;">N/A</div>
							<label class="form-check-label " style="color:black;">
								Non-Applicable
							</label>
						</div>

						<div class="LeaveSymbol displayNoneContent">
							<div class="Marking_color colorMarkingMobile" style="background:#ff4f4f;border: 1px solid #ff4f4f;">W-OFF</div>
							<label class="form-check-label " style="color:black;">
								Week Off
							</label>
						</div>


						<div class="LeaveSymbol">
							<div class="Marking_color colorMarkingMobile" style="background:#c2695a;border: 1px solid #b35f51;">LWP</div>
							<label class="form-check-label " style="color:black;">
								Leave Without Pay
							</label>
						</div>
					</div>
						<div class="table-responsive">
							<table class="table table-bordered" id="TimelistdataTable" width="100%">
								<thead >
									<tr>

										<th class=" cmPayroll empTL">S.No.</th>
										<th class="cmPayroll empTL">Date</th>
										<th class="displayNoneContent cmPayroll empTL">Day</th>
										<th colspan="2" class="displayNoneContent cmPayroll empTL1">Planned Time
											<div class="row">
												<div class="col-lg-6">
													<h6 style="color:green; text-align: center; margin-bottom:0px; padding-top:5px; font-size:13px;">IN</h6>
												</div>
												<div class="col-lg-6">
													<h6 style="color:red; text-align: center; margin-bottom:0px; padding-top:5px; font-size:13px;">OUT</h6>
												</div>
											</div>
										</th>
										<th class="cmPayroll empTL2">
										IN
										</th>
										<th class="cmPayroll empTL2">
										OUT
										</th>
											
										<th class="cmPayroll empTL">Status</th>
										<th class="displayNoneContent cmPayroll empTL">Late In</th>
										<th class="displayNoneContent cmPayroll empTL">Remarks</th>



									</tr>

								</thead>


								<tbody>



								</tbody>
							</table>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
	$(document).ready(function() {
		var d = new Date();
		var curYear = d.getFullYear();
		var currMonth = d.getMonth() + 1;
		MonthlyUserTimeList(curYear, currMonth);

		$("#month_Id").change(function() {
			// alert("BHAIiiiiiiii");
			var MonthID = $("#month_Id option:selected").val();
			var YearID = $("#Year_Id").val();

			MonthlyUserTimeList(YearID, MonthID);
		});



	});



	function MonthlyUserTimeList(YearID, MonthID) {
		var ajaxurl = "<?= site_url('adminzone/EmployeeAttendance/UserTimeList'); ?>";
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
				$("#TimelistdataTable tbody").html(`${response.data.map(function(data, index){
										return(`

										<tr >
										<td style="text-align:center;">${++index}</td>
										<td class="empCL AttFontStatus">${data.AttendenceDate}</td>
										<td class="displayNoneContent empCL AttFontStatus">${data.CalDay}</td>
										<td class="displayNoneContent empCL AttFontStatus" style="background:#638984; color:white; ">10:30</td>
										<td class="displayNoneContent empCL AttFontStatus" style="background:#638984; color:white; ">06:30</td>
										<td class="empCL AttFontStatus" style="background:#058c91; color:white; ">${(data.checkInTime != "")?data.checkInTime: "Nil"}</td>
										<td class="empCL AttFontStatus" style="background:#058c91; color:white; ">${(data.checkOutTime != "")?data.checkOutTime: "Nil"}</td>
										<td class="empCL AttFontStatus ${data.Status}" >${data.Status}</td>
										<td class="displayNoneContent empCL AttFontStatus" >${data.LateTime}</td>
										<td class="displayNoneContent empCL AttFontStatus ${(data.LateTime != "Nil")? 'ColorLate' : (data.LateTime == 'Nil' && data.checkInTime != "")? 'TimelyPunched':''}" >${(data.LateTime != "Nil")? data.LateTime + ' Late' : (data.LateTime == 'Nil' && data.checkInTime != "")? 'Timely Punched':''}</td>
										
										</tr>

										`)
										}).join('')}
										
										
										`);

			} else {
				$("#TimelistdataTable tbody").html("<div>No data Found.....</div>");
			}

		});
	}
</script>

<?php include('footer.php'); ?>