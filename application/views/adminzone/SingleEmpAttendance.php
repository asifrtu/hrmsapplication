<?php include('header.php'); ?>
<?php include('commonSidebar.php'); ?>
<style>
	.dayNmDay {
		text-align: left !important;
		color: white !important;
		background-color: #1C304C;
	}

	.dayNmDate {
		text-align: left !important;

	}



	.calMemo {
		text-align: left !important;
		color: #524a95;


	}

	.shadow {

		box-shadow: 0px 0px 5px 2px rgba(114, 116, 138, 0.39) !important;
		border-radius: none !important;
	}

	.scrollbar {

		height: 160px;
		width: auto;
		background: #F5F5F5;

		overflow-x: scroll;

	}

	.bg-info {
		background-color: #ececec !important;
	}

	.p-2 {
		padding: .1rem !important;
	}

	.sasifb {
		margin-bottom: 10px;
	}

	.AttFontStatus {

		color: white !important;
	}

	.form-check-label {
		color: #393535 !important;
		font-size: 10px;
	}

	.calTH {
		text-align: center;
	}

	.table td,
	.table th {
		padding: .3rem !important;
	}

	.CalStatus {}

	.table {
		border-collapse: collapse !important;
	}

	.calenderDay {
		color: white !important;
		background-color: #1C304C !important;
	}

	.ColorSecondaryPre {
		background-color: #1C304C;
	}

	.allEmpAnnualLeaves {
		color: #4c3f5e !important;
		background-color: # !important;
		font-size: 14px;
		border: 1px solid #dbdbdb !important;
	}

	.allEmpAttendence {
		color: #4c3f5e !important;
		background-color: # !important;
		text-align: center;
		font-size: 14px;
		border: 1px solid #dbdbdb !important;
	}

	.calenderwkDate {
		color: #524a95;

	}

	.LeaveSymbol {
		position: relative;
		margin-right: 2px;
		text-align: center;
		padding-left: 0rem;
	}

	.Marking_color {
		text-align: center;
		color: white;
		padding: 5px 3px;
		width: 94px;
		font-size: 12px;
	}

	.W-OFF {
		color: white;
		background-color: #f1c232 !important;
		font-size: 12px;
		text-align: center;
	}

	.C-OFF {
		color: white;
		background-color: #5d8383 !important;
		font-size: 12px;
		text-align: center;
	}

	.H {
		color: white;
		background-color: #1155cc !important;
		font-size: 12px;
		text-align: center;
	}

	.MD {
		color: white;
		background-color: #ff9900 !important;
		font-size: 12px;
		text-align: center;
	}

	.P {
		color: white;
		background-color: #6aa84f !important;
		font-size: 12px;
		text-align: center;
	}

	.CL {
		color: white;
		background-color: #10adad !important;
		font-size: 12px;
		text-align: center;
	}

	.EL {
		color: white;
		background-color: #cf87cf !important;
		font-size: 12px;
		text-align: center;
	}

	.LWP {
		color: white;
		background-color: #c16958 !important;
		font-size: 12px;
		text-align: center;
	}

	.HolidayCal {

		text-align: center;

	}

	.AttFontStatus {
		font-size: 12px;
	}

	.AttFont {
		font-size: 12px;
	}

	.allEmpAttendence {
		color: white;
		background-color: #47418b;
		text-align: center;
		font-size: 14px;
	}

	.allEmpNotes {
		color: white;
		background-color: #b6b5bb;
		text-align: center;
		font-size: 14px;
		font-weight: 400;
	}


	.allEmpAnnualLeaves {
		color: white;
		background-color: #47418b;

		font-size: 14px;
	}

	.EmpDetail {
		color: #524a95;
		background-color: #f9f5f5;
		text-align: center;
	}

	.EmpName {
		color: #524a95;
		background-color: #f9f5f5;

	}

	.zui-wrapper {
		position: relative;
	}

	.zui-scroller {
		overflow-x: scroll;
		overflow-y: visible;

		width: auto;
	}

	.trpadding {
		margin: 15px !important;
	}

	@media screen and (min-width: 792px) {}

	.zui-table .zui-sticky-col {

		left: 0;
		position: absolute;

		width: 119px;
	}

	.zui-table .zui-sticky-col2 {

		left: 120px;
		position: absolute;


	}


	.asifscroll::-webkit-scrollbar-track {
		-webkit-box-shadow: inset 0 0 1px #504a94;
		background-color: #F5F5F5;
		border-radius: 10px;
	}

	.asifscroll::-webkit-scrollbar {
		width: 10px;
		height: 10px;
		background-color: #F5F5F5;
	}

	.asifscroll::-webkit-scrollbar-thumb {
		border-radius: 10px;
		background-image: -webkit-gradient(linear,
				left bottom,
				left top,
				color-stop(0.44, #504a94),
				color-stop(0.72, #504a94),
				color-stop(0.86, #504a94));
	}


	.AttDateC {
		color: #524a95;
		background-color: #ececec;
	}

	.table-bordered thead td,
	.table-bordered thead th {
		border: 1px solid #bab3c4 !important;
	}

	.table-bordered tbody td {
		border: 1px solid #bab3c4 !important;
	}

	.AttSort {
		height: calc(1em + .75rem + 2px);

		padding: .200rem .5rem;
		font-size: 12px;
	}

	.card-body {
		flex: 1 1 auto;
		min-height: 1px;
		padding: .25rem 1.25rem .25rem 1.25rem;
	}


	.APUemp {
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;

	}

	.APemp {
		float: left;

	}

	.APemp a {
		display: block;
		color: grey;
		text-align: center;

		text-decoration: none;
	}

	.ColorSecondaryNotes {
		background-color: #ececec;
		padding: .35rem 1.25rem !important;
	}


	.N-A {
		color: white;
		background-color: #bbb8b8;
		font-size: 12px;
		text-align: center;
	}


	.attandance_color_codes {
		outline: 1px solid #e3e6f0;
	}

	.card-header {
		padding: 0.3rem 1.25rem !important;
	}


	@media (min-width: 992px) {
		.col-lg-4 {
			flex: 4 0 33.33333%;
			max-width: 36.33333%;
		}
	}

	@media (max-width: 792px) {

		.colorMarkingMobile {
			text-align: center;
			color: white;
			padding: 2px 2px;
			font-size: 8px;
			width: 47px !important;
		}

		.form-check-label {
			display: none;
		}
	}
</style>
<!-- Content Wrapper -->
<div id="content-wrapper bg-gradient-primary" class=" col-lg-10 my_information">

	<!-- Main Content -->
	<!-- <div  class="container-fluid" style="Padding-left:10px!important; Padding-right:0px!important;"  > -->

	<!-- Topbar -->

	<!-- End of Topbar -->

	<!-- Begin Page Content -->
	<div id="content">

		<!-- Page Heading -->

		<div class="shadow ">
			<div class="card-header ColorSecondaryPre">
				<div class="d-flex">
					<div><a href="<?= site_url('hrzone/dashboard/wall'); ?>" style="color: #fff;font-size: 15px;"><i class="fa fa-home" aria-hidden="true"></i></a></div>
					<div class="mr-auto"> &nbsp;&nbsp;<i style="font-size: 10px;color: white;" class="fas fa-chevron-right"></i><span class="breadcrumb_text " style="font-size: 15px;color: #00d3c3;font-weight: 600;">&nbsp; Attendance</span></div>


					<div class="p-2 select-info" style="margin-left:5px;">
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
			<div class="" style="padding-bottom: 10px;">
				<!-- Content Row -->
				<!-- Area Chart -->
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

					<div class="LeaveSymbol">
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

					<div class="LeaveSymbol">
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
				<div class="card-body">
					<div class="table-responsive" id="SingleAttendanceData">

					</div>
				</div>
			</div>

			<!-- Content Row -->
			<div class="row">
				<div class="col-lg-12" style="margin-bottom: 15px;    margin-top: -10px;">
					<div class="ColorSecondaryPre" style="margin-top:40px; padding-left:20px">
						<h6 class="m-0 ColorPrimary" style="padding:10px 0;">Gazetted Holidays List</h6>
					</div>
				</div>
			</div>



			<div class="card-body" style=" margin-top: 8px;">
				<div class="col-lg-12">
					<div class="row">
						<div class="col-lg-7" style="padding-right: 0rem; padding-left: 0rem;">
							<div class="table-responsive">
								<table class="table table-bordered" id="clELempdataTable" width="100%" cellspacing="0">
									<thead style="border: 1px solid #dbdbdb!important;">
										<tr>
											<th class="allEmpAnnualLeaves">Annual Leaves</th>
											<th colspan="2" class="allEmpAttendence" style="min-width: 154px;">Leave Balance</th>


										</tr>
										<tr>
											<th class="EmpName" style="min-width: 152px!important;">Employee Name</th>
											<th class="EmpDetail">CL</th>
											<th class="EmpDetail">EL</th>




										</tr>
									</thead>
									<tbody>



									</tbody>
								</table>
							</div>



						</div>
						<div class="col-lg-1">

						</div>
						<div class="col-lg-4" style="padding-right: 0rem; padding-left: 0rem;">
							<div class="table-responsive">
								<table class="table table-bordered" id="HolidayTable" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th colspan="2" class="allEmpAttendence">
												<ul class="APUemp ">
													<li class="APemp"><a href="#" style="color:white; padding: 0 56px; color: #4c3f5e !important;">Gazetted Holidays List</a></li>
													<li class="APemp"><a href="javascript:void(0)" class="HolidayCalender" style="padding: 0 11px; color: #4c3f5e !important;"> | +</a></li>
												</ul>
											</th>
										</tr>
										<tr>
											<th colspan="2" id="empNote" class="allEmpNotes" style="background:#f9f5f5;">
												Click on the "+" sign for calender Holiday.
											</th>



										</tr>

									</thead>
									<tbody>



									</tbody>
								</table>
							</div>
						</div>
					</div>

				</div>
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
		if ($('.AttFont').is(':empty')) {
			$('.AttFont').remove()
		}


		$('#HolidayTable tbody').hide();
		$('#empNote').show();


		$("body").on('click', '.HolidayCalender', function() {

			$('#empNote').toggle();
			$('#HolidayTable tbody').toggle();

		});
		var d = new Date();
		var curYear = d.getFullYear();
		var currMonth = d.getMonth() + 1;
		// MonthlyUserAttendance(curYear, currMonth);
		MonthlyUserAttendance(curYear, currMonth);

		$("#month_Id").change(function() {

			var MonthID = $("#month_Id option:selected").val();
			var YearID = $("#Year_Id").val();
			MonthlyUserAttendance(YearID, MonthID);
		});



	});



	function MonthlyUserAttendance(YearID, MonthID) {
		var ajaxurl = "<?= site_url('adminzone/EmployeeAttendance/UserAttendance'); ?>";
		$.ajax({
			type: "get",
			url: ajaxurl,
			data: {
				YearID: YearID,
				MonthID: MonthID
			},
			dataType: "JSON"
		}).done(function(response) {
			console.log(window.innerWidth);
			console.log(response);
			var dayCount = 0;
			(window.innerWidth > 768) ? dayCount = 11: dayCount = 7;
			const dayNames = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
			$("#SingleAttendanceData").html(`
			
			<table class="table table-bordered" id="AttendencedataTable">
											<thead>
	
  
  ${response.data.map(function(data, index){
										return(`
										${chunkArray(data.attendance, dayCount).map( (chunkItem) => {return `
											<tr class="trpadding">
    ${chunkItem.map(function (attendanceData) {
      return `<td class="AttFont calenderDay calTH " style="min-width: 38px!important; ">${dayNames[new Date(attendanceData.AttendenceDate).getDay()]}</td>`
    }).join('')}
  </tr>
											<tr class="trpadding">
    ${chunkItem.map(function (attendanceData) {
      return `<td class="AttDateC AttFont calenderwkDate calTH " style="min-width: 38px!important; ">${new Date(attendanceData.AttendenceDate).getDate()}</td>`
    }).join('')}
  </tr>
											<tr class="trpadding">

										

										${chunkItem.map(function(attendanceData){
										return`<td class="AttFontStatus edit_Attn ${(attendanceData.Status == "" && (new Date(attendanceData.AttendenceDate) - new Date(data.employeeExitDate)) > 0)? 'N-A': (attendanceData.Status == "" && (new Date(attendanceData.AttendenceDate) - new Date(data.EmployeejoiningDate)) < 0)? 'N-A': attendanceData.Status.replace(/\//g, '-')}" data-Attn="${attendanceData.id}" style="min-width: 38px!important; ">${(attendanceData.Status == "" && (new Date(attendanceData.AttendenceDate) - new Date(data.employeeExitDate)) > 0)? 'N/A': (attendanceData.Status == "" && (new Date(attendanceData.AttendenceDate) - new Date(data.EmployeejoiningDate)) < 0)? 'N/A' : attendanceData.Status}</td>`
										}).join('')}

										</tr>

											`
											}).join('')}
										

										`)
										}).join('')}
  

										</thead>
										
										</table>
										`);





			$("#clELempdataTable tbody").html(`${response.data.map(function(data, index){
					return(`<tr>
					
					<td class="HolidayUser">${data.userName}</td>
					${data.UserCLEL.map(function(UserCLELData){
						return`<td class="HolidayCal CalStatus  ${UserCLELData.CL}" style="min-width: 75px!important; ">${UserCLELData.CL}</td>`
					})}
					${data.UserCLEL.map(function(UserCLELData){
						return`<td class="HolidayCal CalStatus  ${UserCLELData.EL}" style="min-width: 75px!important; ">${UserCLELData.EL}</td>`
					})}
					
					
					
					
					</tr>`)
				})}`);





			$("#HolidayTable tbody").html(`
				
				<tr>
					<th class="HolidayCal GazettedH" style="min-width: 106px!important;">Day</th>
					<th class="HolidayCal GazettedH">Holiday</th>

					</tr>
				${response.CalHoliday.map(function(HCal, index){
					return(`
					
					
					<tr>
						<td class="HolidayCal" style="min-width:100px;">${HCal.HName}</td>
						<td class="HolidayCal">${HCal.holiday_list}</td>
						
					</tr>
					
					
					`)
				})}`);




		});
	}



	const chunkArray = (array, chunkSize) =>
		Array.from({
				length: Math.ceil(array.length / chunkSize)
			}, (_, i) =>
			array.slice(i * chunkSize, (i + 1) * chunkSize)
		);
</script>
<?php include('footer.php'); ?>