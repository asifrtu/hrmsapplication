<?php include('header.php'); ?>
<?php include('commonSidebar.php'); ?>
<style>
.bg-info {
    background-color: #504a94!important;
}
.p-2 {
    padding: .2rem!important;
}


#style-7::-webkit-scrollbar-track
{
	-webkit-box-shadow: inset 0 0 6px #504a94;
	background-color: #F5F5F5;
	border-radius: 10px;
}

#style-7::-webkit-scrollbar
{
	width: 10px;
	background-color: #F5F5F5;
}

#style-7::-webkit-scrollbar-thumb
{
	border-radius: 10px;
	background-image: -webkit-gradient(linear,
									   left bottom,
									   left top,
									   color-stop(0.44, #504a94),
									   color-stop(0.72, #504a94),
									   color-stop(0.86, #504a94));
}
.scrollbar
{
	
	height: 160px;
	width: auto;
	background: #F5F5F5;
	
	overflow-x: scroll;
	
}
.bg-info {
    background-color: #ececec!important;
}
.p-2 {
    padding: .1rem!important;
}
.sasifb{
	margin-bottom:25px;
}


.form-check-label {
    color: black;
}
.calTH{
	text-align:center;
}

.table td, .table th {
padding: .5rem!important;
}
.LeaveSymbol {
    position: relative;
    display: block;
    padding-left: .6rem;
}
</style>
        <!-- Content Wrapper -->
        <div id="content-wrapper bg-gradient-primary" class="d-flex flex-column" style="margin-top:50px; margin-bottom:50px;">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    
					<div class="card shadow mb-4" style="width:950px; margin-bottom:100px;">
                        <div class="ColorSecondaryPre" style="padding: 12px 5px 5px 12px;">
                            <h6 class="md-4 ColorPrimary">My Calendar</h6>
                        </div>
							
                        <div class="card-body">
                    <!-- Content Row -->
					  <!-- Area Chart -->
							
							<div class="row">
								
								
								
								<div class="LeaveSymbol">
								<label class="form-check-label calBtnCasual" style="color:black;">
								Casual
								</label>
								</div>
								<div class="LeaveSymbol">
								<label class="form-check-label calBtnEarned" style="color:black;">
								Earned
								</label>
								</div>
								<div class="LeaveSymbol">
								<label class="form-check-label calBtnMidDay" style="color:black;">
								Mid Day
								</label>
								</div>
								<div class="LeaveSymbol">
								<label class="form-check-label calBtnLeaveWithoutPay" style="color:black;">
								Leave Without Pay
								</label>
								</div>
								<div class="LeaveSymbol">
								<label class="form-check-label calBtnGazettedHoliday" style="color:black;">
								Gazetted Holiday
								</label>
								</div>
								
								<div class="LeaveSymbol">
								<label class="form-check-label calBtnPresent" style="color:black;">
								Present
								</label>
								</div>
							
								
								<div class="LeaveSymbol">
								<label class="form-check-label calBtnWeekOffs" style="color:black;">
								Week-offs
								</label>
								</div>
								
							</div>
							
								<hr style="	border-bottom: 1px solid #8c8988; margin-bottom:20px; margin-top:23px;">
								
									
									<div class="d-flex sasifb flex-row-reverse ">
									<div class="p-2 bg-info" style="margin-left:5px;">

									<select class="empInput form-control" name="month_Id" id="month_Id" style="border: 1px solid #858796;">
									<option value="">Select Month</option>

										<?php 
										// echo "<pre>";
										// print_r($teamDesignation);die;


										  foreach ( $GoalMonth as $Month )
									{
									$selected_text='';
									if($Month->month == $year)
									$selected_text='selected';
									echo "<option year='".$Month->month."' value='".$Month->month_Id."'  $selected_text > ".$Month->month."</option>";

									}
									 
										 
										 
										 ?>

									</select>
									</div>
									
									<div class="p-2 bg-info" >
									
									<select class="empInput form-control" name="Year_Id" id="Year_Id" style="border: 1px solid #858796;" id="sel1">
											<option value="">Select Year</option>
											
											<?php 
											// echo "<pre>";
											// print_r($teamDesignation);die;
											
											
											 foreach ( $GoalYear as $year )
											{
											$selected_text='';
											if($year->year == $year)
											$selected_text='selected';
											echo "<option year='".$year->year."' value='".$year->year."'  $selected_text > ".$year->year."</option>";

											}
											 
											 
											 ?>
											
											</select>
									</div>
									</div>
									<div class="table scrollbar" id="style-7">
										<table class="table table-bordered" id="MyAttendence">
											<thead>
											<tr>
												<th class="dayNmDay" style="min-width: 165px!important; ">Employee Id</th>
												<th class="dayNmDay" style="min-width: 165px!important; ">Day Of Month</th>
												<th class="calenderWeek" style="min-width: 100px!important; ">M</th>
												<th class="calenderWeek" style="min-width: 100px!important; ">T</th>
												<th class="calenderWeek" style="min-width: 100px!important; ">W</th>
												<th class="calenderWeek" style="min-width: 100px!important; ">T</th>
												<th class="calenderWeek" style="min-width: 100px!important; ">F</th>
												<th class="calenderWeek" style="min-width: 100px!important; ">S</th>
												<th class="calenderWeek" style="min-width: 100px!important; ">S</th>
												<th class="calenderWeek" style="min-width: 100px!important; ">M</th>
												<th class="calenderWeek" style="min-width: 100px!important; ">T</th>
												<th class="calenderWeek" style="min-width: 100px!important; ">W</th>
												<th class="calenderWeek" style="min-width: 100px!important; ">T</th>
												<th class="calenderWeek" style="min-width: 100px!important; ">F</th>
												<th class="calenderWeek" style="min-width: 100px!important; ">S</th>
												<th class="calenderWeek" style="min-width: 100px!important; ">S</th>
												<th class="calenderWeek" style="min-width: 100px!important; ">M</th>
												<th class="calenderWeek" style="min-width: 100px!important; ">T</th>
												<th class="calenderWeek" style="min-width: 100px!important; ">W</th>
												<th class="calenderWeek" style="min-width: 100px!important; ">T</th>
												<th class="calenderWeek" style="min-width: 100px!important; ">F</th>
												<th class="calenderWeek" style="min-width: 100px!important; ">S</th>
												<th class="calenderWeek" style="min-width: 100px!important; ">S</th>
												<th class="calenderWeek" style="min-width: 100px!important; ">M</th>
												<th class="calenderWeek" style="min-width: 100px!important; ">T</th>
												<th class="calenderWeek" style="min-width: 100px!important; ">W</th>
												<th class="calenderWeek" style="min-width: 100px!important; ">T</th>
												<th class="calenderWeek" style="min-width: 100px!important; ">F</th>
												<th class="calenderWeek" style="min-width: 100px!important; ">S</th>
												<th class="calenderWeek" style="min-width: 100px!important; ">S</th>
												<th class="calenderWeek" style="min-width: 100px!important; ">M</th>
												
											</tr>
											<tr>
												<th class=" dayNmDate">Employee Id</th>
												<th class=" dayNmDate">Date of Month</th>
												<th class="calenderDate" style="min-width: 100px!important; ">1</th>
												<th class="calenderDate" style="min-width: 100px!important; ">2</th>
												<th class="calenderDate" style="min-width: 100px!important; ">3</th>
												<th class="calenderDate" style="min-width: 100px!important; ">4</th>
												<th class="calenderDate" style="min-width: 100px!important; ">5</th>
												<th class="calenderDate" style="min-width: 100px!important; ">6</th>
												<th class="calenderDate" style="min-width: 100px!important; ">8</th>
												<th class="calenderDate" style="min-width: 100px!important; ">9</th>
												<th class="calenderDate" style="min-width: 100px!important; ">10</th>
												<th class="calenderDate" style="min-width: 100px!important; ">11</th>
												<th class="calenderDate" style="min-width: 100px!important; ">12</th>
												<th class="calenderDate" style="min-width: 100px!important; ">13</th>
												<th class="calenderDate" style="min-width: 100px!important; ">14</th>
												<th class="calenderDate" style="min-width: 100px!important; ">15</th>
												<th class="calenderDate" style="min-width: 100px!important; ">16</th>
												<th class="calenderDate" style="min-width: 100px!important; ">17</th>
												<th class="calenderDate" style="min-width: 100px!important; ">18</th>
												<th class="calenderDate" style="min-width: 100px!important; ">19</th>
												<th class="calenderDate" style="min-width: 100px!important; ">20</th>
												<th class="calenderDate" style="min-width: 100px!important; ">21</th>
												<th class="calenderDate" style="min-width: 100px!important; ">22</th>
												<th class="calenderDate" style="min-width: 100px!important; ">24</th>
												<th class="calenderDate" style="min-width: 100px!important; ">25</th>
												<th class="calenderDate" style="min-width: 100px!important; ">26</th>
												<th class="calenderDate" style="min-width: 100px!important; ">27</th>
												<th class="calenderDate" style="min-width: 100px!important; ">28</th>
												<th class="calenderDate" style="min-width: 100px!important; ">29</th>
												<th class="calenderDate" style="min-width: 100px!important; ">30</th>
												<th class="calenderDate" style="min-width: 100px!important; ">31</th>
												
												
											</tr>
										</thead>
										
										<tbody>
											
											
											
										</tbody>
										</table>
									</div>
								
								
							<br style=" margin-bottom:10px; margin-top:13px;">
								<hr style="	border-bottom: 1px solid #8c8988; margin-bottom:20px; margin-top:23px;">
							
						
							
							</div>
							
                    <!-- Content Row -->
						<div class="row">
						<div class="col-lg-12">
						<div class="ColorSecondary">
						<h6 class="m-0 font-weight-bold ColorPrimary" style="margin:15px 0; padding:10px;">Gazetted Holidays List</h6>
						</div>
						</div>
						</div>	
                    <br style=" margin-bottom:20px; margin-top:23px;">
					
                        
                        <div class="card-body">
							<div class="col-lg-12">	
					<div class="row">
							<div class="col-lg-4">	
								
									<div class="table-responsive">
										<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
											<thead>
											<tr>
												<th class="GazettedH">Holiday, 2019</th>
												<th class="GazettedH">Day</th>
												
											</tr>
											</thead>
											<tbody>
											<tr>
												<th>26 January</th>
												<th>Sunday</th>
												
											</tr>
											<tr>
												<th>21 March</th>
												<th>Sunday</th>
												
											</tr>
											<tr>
												<th>19 April</th>
												<th>Sunday</th>
												
											</tr>
											<tr>
												<th>12 August</th>
												<th>Sunday</th>
												
											</tr>
											<tr>
												<th>15 August</th>
												<th>Sunday</th>
												
											</tr>
											<tr>
												<th>24 August</th>
												<th>Sunday</th>
												
											</tr>
											<tr>
												<th>2 October</th>
												<th>Sunday</th>
												
											</tr>
											<tr>
												<th>8 October</th>
												<th>Sunday</th>
												
											</tr>
											<tr>
												<th>27 October</th>
												<th>Sunday</th>
												
											</tr>
											
											
											</tbody>
										</table>
									</div>
								
							</div>
							<div class="col-lg-4">	
								<div class="table-responsive">
										<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
											<thead>
											<tr>
												<th class="clrCL">CL</th>
												<th class="clrEL">EL</th>
												
											</tr>
											</thead>
											<tbody>
											<tr>
												<th class="clrCL">Active</th>
												<th class="clrEL">Active</th>
												
											</tr>
											
											
											
											</tbody>
										</table>
									</div>
							</div>
							<div class="col-lg-4">
								<div class="table-responsive">
										<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
											<thead>
											<tr>
												<th class="clrCL">CL</th>
												<th class="clrEL">EL</th>
												
											</tr>
											</thead>
											<tbody>
											<tr>
												<th class="clrCL">17</th>
												<th class="clrEL">4</th>
												
											</tr>
											
											
											
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
	$(document).ready(function(){
		
		MonthlyUserAttendance();
		
    $("#month_Id").change(function(){
		
        var MonthID = $("#month_Id option:selected").val();
		var YearID  = $("#Year_Id").val();
		MonthlyUserAttendance(YearID, MonthID);
    });
	
	
	
});



function MonthlyUserAttendance(YearID, MonthID){
	var ajaxurl = "<?=site_url('adminzone/EmployeeAttendance/UserAttendance');?>";
        $.ajax({
            type: "get",
            url: ajaxurl,
            data: {YearID:YearID, MonthID : MonthID},
			dataType: "JSON"
        }).done(function(res){
			if(res)
				$("#MyAttendence tbody").html(`${res.userdata.map(function(userdata){
					return(`<tr>
					
					<td class=" calMemo" style="min-width: 165px!important; text-align:center;">${userdata.employee_id}</td>
					<td class=" calMemo" style="min-width: 165px!important; text-align:center;">${userdata.userName}</td>
					
					${userdata.attendance.map(function(attendanceData){
						return`<td class="CalStatus calTH" style="min-width: 75px!important; ">${attendanceData.Status}</td>`
					})}
					
					</tr>`)
				})}`);
            else 
				$("#AttendencedataTable tbody").html("<div>No data Found.....</div>");
        });
}
							
</script>
<?php include('footer.php'); ?>