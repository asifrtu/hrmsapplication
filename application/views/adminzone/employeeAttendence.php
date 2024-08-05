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
	
	height: 250px;
	width: auto;
	background: #F5F5F5;
	overflow-y: scroll;
	overflow-x: scroll;
	
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
                        <div class="card-header ColorSecondaryPre">
                            <h6 class="m-0 font-weight-bold ColorPrimary">My Calendar</h6>
                        </div>
                        <div class="card-body">
                    <!-- Content Row -->
					  <!-- Area Chart -->
							
							<div class="row">
								
								
								
								<div class="form-check">
								<label class="form-check-label calCheck calBtnCasual">
								Casual
								</label>
								</div>
								<div class="form-check">
								<label class="form-check-label calBtnEarned calCheck">
								Earned
								</label>
								</div>
								<div class="form-check">
								<label class="form-check-label calBtnMidDay calCheck">
								Mid Day
								</label>
								</div>
								<div class="form-check">
								<label class="form-check-label calBtnLeaveWithoutPay calCheck">
								Leave Without Pay
								</label>
								</div>
								<div class="form-check">
								<label class="form-check-label calBtnGazettedHoliday calCheck">
								Gazetted Holiday
								</label>
								</div>
								
								<div class="form-check">
								<label class="form-check-label calBtnPresent calCheck">
								Present
								</label>
								</div>
							
								
								<div class="form-check">
								<label class="form-check-label calBtnWeekOffs calCheck">
								Week-offs
								</label>
								</div>
								
							</div>
							
								<hr style="	border-bottom: 1px solid #8c8988; margin-bottom:20px; margin-top:23px;">
								
									<div class="col-lg-12" >
									<div class="row" >
										<div class="col-lg-4" >
										
										</div>
										<div class="col-lg-4" >
										<div class="row">
										<a href="#" style="color:#8c8988!important; margin-left:70px; " ><i class="fa fa-chevron-circle-left" aria-hidden="true"></i></a><h5 style="text-align:center; margin:auto;">February, 2019</h5><a href="#" style=" color:#8c8988!important; margin-right:70px;"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
										</div>
										</div>
										<div class="col-lg-4" >
										</div>
									</div>
									</div>
									<div class="d-flex flex-row-reverse ">
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
									</div>
									<div class="table scrollbar" id="style-7">
										<table class="table table-bordered" id="AttendencedataTable">
											<thead>
											<tr>
												<th class="calenderWeek">M</th>
												<th class="calenderWeek">T</th>
												<th class="calenderWeek">W</th>
												<th class="calenderWeek">T</th>
												<th class="calenderWeek">F</th>
												<th class="calenderWeek">S</th>
												<th class="calenderWeek">S</th>
												<th class="calenderWeek">M</th>
												<th class="calenderWeek">T</th>
												<th class="calenderWeek">W</th>
												<th class="calenderWeek">T</th>
												<th class="calenderWeek">F</th>
												<th class="calenderWeek">S</th>
												<th class="calenderWeek">S</th>
												<th class="calenderWeek">M</th>
												<th class="calenderWeek">T</th>
												<th class="calenderWeek">W</th>
												<th class="calenderWeek">T</th>
												<th class="calenderWeek">F</th>
												<th class="calenderWeek">S</th>
												<th class="calenderWeek">S</th>
												<th class="calenderWeek">M</th>
												<th class="calenderWeek">T</th>
												<th class="calenderWeek">W</th>
												<th class="calenderWeek">T</th>
												<th class="calenderWeek">F</th>
												<th class="calenderWeek">S</th>
												<th class="calenderWeek">S</th>
												<th class="calenderWeek">M</th>
												
											</tr>
											<tr>
												<th class="calenderDate">1</th>
												<th class="calenderDate">2</th>
												<th class="calenderDate">3</th>
												<th class="calenderDate">4</th>
												<th class="calenderDate">5</th>
												<th class="calenderDate">6</th>
												<th class="calenderDate">8</th>
												<th class="calenderDate">9</th>
												<th class="calenderDate">10</th>
												<th class="calenderDate">11</th>
												<th class="calenderDate">12</th>
												<th class="calenderDate">13</th>
												<th class="calenderDate">14</th>
												<th class="calenderDate">15</th>
												<th class="calenderDate">16</th>
												<th class="calenderDate">17</th>
												<th class="calenderDate">18</th>
												<th class="calenderDate">19</th>
												<th class="calenderDate">20</th>
												<th class="calenderDate">21</th>
												<th class="calenderDate">22</th>
												<th class="calenderDate">24</th>
												<th class="calenderDate">25</th>
												<th class="calenderDate">26</th>
												<th class="calenderDate">27</th>
												<th class="calenderDate">28</th>
												<th class="calenderDate">29</th>
												<th class="calenderDate">30</th>
												<th class="calenderDate">31</th>
												
												
											</tr>
										</thead>
										
										<tbody>
										<tr id="Attenddate">	
										</tr>	
											
											
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
		
		MonthlyUserAttendance(4);
		
    $("#month_Id").change(function(){
		
        var MonthID = $("#month_Id option:selected").val();
		
		MonthlyUserAttendance(MonthID);
    });
	
	
	
});



function MonthlyUserAttendance(MonthID){
	var ajaxurl = "<?=site_url('adminzone/SingleEmpAttendance/UserAttendance');?>";
        $.ajax({
            type: "get",
            url: ajaxurl,
            data: {MonthID : MonthID},
			dataType: "JSON"
        }).done(function(response){
			if(response)
				$("#AttendencedataTable tbody tr").html(`${response.data.map(function(data, index){
					return(`
					
					
					
					
					<td class="calAttnColor1">${data.userStatus}</td>
					
					
					
					`)
				})}`);
            else 
				$("#AttendencedataTable tbody").html("<div>No data Found.....</div>");
        });
}
							
</script>
<?php include('footer.php'); ?>