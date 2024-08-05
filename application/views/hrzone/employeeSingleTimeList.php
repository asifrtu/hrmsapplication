<?php include('header.php'); ?>
<?php include('payAndTimeSidebar.php'); ?>
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
	padding-left:10px;
    font-family: 'Font Awesome 5 Free';
}
.addGoalsBtn{
	float:left;
	margin-bottom:5px;
	color:#1C304C!important;
	background: white!important;
	font-weight: 400;
    border-radius: 2px;
    padding: .2em 2em 0.2em 2em;
    border: 2px solid #1C304C!important;
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
.tnNotify {
  float: left;
  text-align:center;
  padding:2px 0;
  margin:0 2px;		
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
	background-color:#504a94;
}
.tnDecline a {
	background-color:red;
}


.table td, .table th {
    
}

.empTL{
	padding:1rem .35rem!important;
}

.empTL1{
	padding: 0rem!important;
	text-align:center;
}

.empTL2{
	padding: 0rem!important;
	text-align:center;
}

.dropbtn {
  margin-bottom:5px;
	color:#1C304C!important;
	background: white!important;
	font-weight: 400;
    border-radius: 2px;
    padding: .2em 2em 0.2em 2em;
    border: 2px solid #1C304C!important;
  
}

.dropdown {
  position: relative;
  display: inline-block;
}
.actionFontSize{
	font-size:15px!important;
	color: #1C304C!important;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 122px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 5px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
.empCL{
	
}
.empWeekOff{
	background-color: lightgray;
}
.empLWP{
	background-color: #f9c3cd;
}

td{
    padding: .3rem 1rem!important;
}
.arrow-down {
  width: 0; 
  height: 0; 
  border-left: 20px solid transparent;
  border-right: 20px solid transparent;
  
  border-top: 20px solid red;
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
padding: .3rem .3rem .0rem .3rem!important;
}
.AttSort{
	height: calc(1em + .75rem + 2px);
   
    padding: .200rem .5rem;
    font-size: 14px;
}
.AttSortMonth{
	height: calc(1em + .7rem + 2px);
   
    padding: .200rem .2rem;
    font-size: 14px;
}
.sasifb{
	margin-bottom: 10px;
    margin-top: 10px;
}
.AttFontStatus{
	font-size:14px;
    text-align:center;
	
}
.cmPayroll{
	font-size:14px;
	font-weight:500;
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

.H{
	color: white !important;
	background-color:#0c55c8;
	font-size:12px;
	text-align:center;
}

.MD{
	color: white !important;
	background-color:#ff9926;
	font-size:12px;
	text-align:center;
}

.P{
	background-color:#6aa855;
	color: white !important;
	font-size:12px;
	text-align:center;
}


.A{
	background-color:#ff0812;
	color: white !important;
	font-size:12px;
	text-align:center;
}


.CL{
	color: white !important;
	background-color:#06adad;
	font-size:12px;
	text-align:center;
}
.EL{
	color: white !important;
	background-color:#cf87cd;
	font-size:12px;
	text-align:center;
}
.LWP{
	color: white !important;
	background-color:#c2695a;
	font-size:12px;
	text-align:center;
}

.ColorLate{
	color: red!important;
}


.TimelyPunched{
	color: #6aa855!important;
}


.col-lg-1{
    max-width: 4.33333%;
}
.employee_details{
    background-color: #1C304C;
    color: white;
    padding: 5px 20px;
    display: flex;
    justify-content: space-between;
    border-radius: 2px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
    border: 1px solid #1C304C;
    font-size: 14px;
}
.LeaveSymbol {
    position: relative;
    margin-right: 2px;
    text-align: center;
}
.Marking_color {
    text-align: center;
    color: white;
    padding: 5px 3px;
    width: 94px;
    font-size: 12px;
}
.form-check-label {
    color: #393535!important;
    font-size: 10px;
}

.table thead th{
    vertical-align: middle!important;
    text-align: center;
    padding: 10px 11px!important;
    font-size: 13px;
    color: #343434;
    font-weight: 600;
}
.table tbody td {
    border-right: 1px solid #ddd;
    color: #343434;
}
.close{
    float: right;
    font-size: 14px;
    line-height: 1;
    color: #f3f3f3;
    text-shadow: 0 1px 0 #fff;
    opacity: 1!important;
    margin-top: -20px;
    margin-right: 10px;
    /* margin-bottom: 6px; */
    border: 1px solid white !important;
    border-radius: 50%;
    padding: 1px 4px!important;
}

label{
    color: #343434;
    font-size: 15px;
    margin-bottom: 2px;
}
.empInput {
    /* border: 1px solid #9c50ff94!important; */
    border-radius: 3px;
    overflow: hidden!important;
    /* padding: 0.2rem 0.75rem!important; */
    font-size: 8px!important;
    color: #000!important;
}
.modal-content{
    border:none!important;
    background-color:transparent!important;
}


.modal-body{
    background-color:white!important;
    padding: 0.5rem 0.75rem;
}
.col-lg-1{
    max-width: 4.33333%;
padding-right:0px!important;
}
.card-header {
    padding: 0.5rem 1.25rem;
} 
</style>


 <div id="content-wrapper bg-gradient-primary" class="container-fluid col-lg-10" style=" margin-bottom:50px; padding-left:10px;">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="">

                    <!-- Page Heading -->
                    
					<div class="card shadow">


					<div class="card-header ColorSecondaryPre">
                        <div class="d-flex">
                        <div><a href="<?=site_url('hrzone/dashboard/wall');?>" style="color: #fff;font-size: 15px;"><i class="fa fa-home" aria-hidden="true"></i></a></div>
                        <div class="mr-auto"> &nbsp;&nbsp;<i style="font-size: 10px;color: white;" class="fas fa-chevron-right"></i><span class="breadcrumb_text " style="font-size: 15px;color: #00d3c3;font-weight: 600;">&nbsp; Timesheet  &nbsp;</span>&nbsp;<i style="font-size: 10px;color: #00d3c3;" class="fas fa-chevron-right"></i>&nbsp;&nbsp;&nbsp;<span class="breadcrumb_text"  style="font-size: 15px;color: #00d3c3;font-weight: 600;margin-left: -4px;">View</span></div>
			
							<div class="p-2 select-info" style="margin-left:5px;">

<select class="AttSortMonth breadcrumbMobile empInput form-control" name="month_Id" id="month_Id" style="border: 1px solid #858796;">
		<option value="">Select Month</option>

			<?php
			$curMonth = date("m");
			// echo "<pre>";
			// print_r($teamDesignation);die;


		foreach ($GoalMonth as $Month)
		{
		$selected_text='';
		if($Month->month_Id == $curMonth)
		$selected_text='selected';
		echo "<option month='".$Month->month."' value='".$Month->month_Id."'  $selected_text > ".$Month->month."</option>";

		}
		  
			 ?>

		</select>
</div>

<div class="p-2 select-info">

<select class="AttSort breadcrumbMobile empInput form-control" name="Year_Id" id="Year_Id" style="border: 1px solid #858796;" id="sel1">
				<option value="">Select Year</option>
				
				<?php 
				$curnYear = date("Y");
				// echo "<pre>";
				// print_r($teamDesignation);die;
				
				
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

						</div>
						
                        </div>




                  
                    <!-- Content Row -->
					<!-- Area Chart -->
						
						<div class="" style="background-color: #fff;">	
						
							
								
								<div class="">
								
								<div class="row" style="margin-left:1px; ">
								
								
								
								<div class="LeaveSymbol">
									<div class="Marking_color" style=" background:#06adad; border: 1px solid #049595;">CL</div>
								<label class="form-check-label " style="color:black;">
								Casual Leave
								</label>
								</div>
								<div class="LeaveSymbol">
								<div class="Marking_color" style="background:#cf87cd;border: 1px solid #b56fb3;">EL</div>
								<label class="form-check-label " style="color:black;">
								Earned Leave
								</label>
								</div>
								<div class="LeaveSymbol">
								<div class="Marking_color" style="background:#ff9926;border: 1px solid #e3861e;">MD</div>
								<label class="form-check-label " style="color:black;">
								Mid Day
								</label>
								</div>
								
								<div class="LeaveSymbol">
								<div class="Marking_color" style="background:#0c55c8;border: 1px solid #0648b0;">H</div>
								<label class="form-check-label " style="color:black;">
								Holiday
								</label>
								</div>
								<div class="LeaveSymbol">
								<div class="Marking_color" style="background:#5d8383;border: 1px solid #4a6f6f;">C-OFF</div>
								<label class="form-check-label " style="color:black;">
								Compensatory Off
								</label>
								</div>
								<div class="LeaveSymbol">
								<div class="Marking_color" style="background:#6aa855;border: 1px solid #5c9549;">P</div>
								<label class="form-check-label " style="color:black;">
								Present
								</label>
								</div>

								<div class="LeaveSymbol">
								<div class="Marking_color" style="background:#ff0812;border: 1px solid #d0030b;">A</div>
								<label class="form-check-label " style="color:black;">
								Absent
								</label>
								</div>
							
								<div class="LeaveSymbol">
								<div class="Marking_color" style="background:#bbb8b8;border: 1px solid #aaa8a8;">N/A</div>
								<label class="form-check-label " style="color:black;">
								Non-Applicable
								</label>
								</div>
								
								<div class="LeaveSymbol">
								<div class="Marking_color" style="background:#f1c244;border: 1px solid #e1b640;">W-OFF</div>
								<label class="form-check-label " style="color:black;">
								Week Off
								</label>
								</div>
								
							
								<div class="LeaveSymbol">
								<div class="Marking_color" style="background:#c2695a;border: 1px solid #b35f51;">LWP</div>
								<label class="form-check-label " style="color:black;">
								Leave Without Pay
								</label>
								</div>
								

							</div>
									<div class="d-flex sasifb flex-row-reverse ">
									
									
									<h5 style="text-align:center;margin:auto;color: #343434;font-weight: 600;font-size: 25px;padding-top: 10px;padding-bottom: 10px;"><?php echo $EmpInfo->name; ?> Timing List</h5>
									</div>
									
								<div class="table-responsive">
									<table class="table table-bordered" id="TimelistdataTable" width="100%">
										<thead style="background: #00d3c3!important; color: #fff!important;">
											<tr>
												
												<th class="FontA cmPayroll empTL">S.No.</th>
												<th class="FontA cmPayroll empTL">Date</th>
												<th class="FontA cmPayroll empTL">Day</th>
												<th colspan="2" class="FontA cmPayroll empTL1">Planned Time<div style="margin-bottom: 0rem!important;"></div>
												<div class="row">
												<div class="col-lg-6">
												<h6 style="color:green; text-align: center; margin-bottom:0px; padding-top:5px; font-size:13px;">IN</h6>
												</div>
												<div class="col-lg-6">
												<h6 style="color:red; text-align: center; margin-bottom:0px; padding-top:5px; font-size:13px;">OUT</h6>
												</div>
												</div>
												</th>
												<th colspan="2" class="FontA cmPayroll empTL2">Actual Time
												<div style="margin-bottom: 0rem!important;"></div>
												<div class="row">
												<div class="col-lg-6">
												<h6 style="color:green; text-align: center; margin-bottom:0px; padding-top:5px; font-size:13px;">IN</h6>
												</div>
												<div class="col-lg-6">
												<h6 style="color:red; text-align: center; margin-bottom:0px; padding-top:5px; font-size:13px;">OUT</h6>
												</div>
												</div>
												</th>
												<th class=" cmPayroll empTL">Status</th>
												<th class=" cmPayroll empTL">Late In</th>
												<th class=" cmPayroll empTL">Remarks</th>
												<th class=" cmPayroll empTL">Action</th>
												
												
												
											</tr>
										
										</thead>
										<tfoot style="display: none;">
											<tr>
												
												<td class="empCL AttFontStatus" colspan="3" >Staff Summary</td>
												<td class="empCL AttFontStatus">180:30</td>
												<td class="empCL AttFontStatus">180:30</td>
												<td class="empCL AttFontStatus">180:30</td>
												<td class="empCL AttFontStatus">180:30</td>
												<td class="empCL AttFontStatus"></td>
												<td class="empCL AttFontStatus">3:35</td>
												<td class="empCL AttFontStatus"></td>
												<td class="empCL AttFontStatus"></td>
												
												
												
												
												
											</tr>
										
										</tfoot>
										
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

<div class="modal " id="updateModal" role="dialog">
<div class="modal-dialog modal-lg">
<!-- Modal content-->
	<div class="modal-content" style="margin: 196px 9px 0 44px;width: 89%!important;">
    <div class="card-header" style="padding:7px!important; background-color: #1C304C;">
			<div class="">
			<h6 class="ColorPrimary" style="text-align: center;margin-bottom: 0px;">Edit Attandance</h6>
			<button style="/* margin-left:197px; */" type="button" class="close" data-bs-dismiss="modal">×</button>
			</div>
			</div>

	<div class="modal-body">

	<form class="form-horizontal" action="#">
	<div class="row" >
	<div class="col-lg-3">
	<div class="form-group">
	<label>Check IN</label>
	<input type="text" name="checkInTime" id="Edit_checkInTime" class="empInput form-control" style="border: 1px solid #858796;">
	</div>
	</div>

	<div class="col-lg-3">
	<div class="form-group">
	<label>Check OUT</label>
	<input type="text" name="checkOutTime" id="Edit_checkOutTime" class="empInput form-control" style="border: 1px solid #858796;">
	</div>
	</div>

	<div class="col-lg-3">
	<div class="form-group">
	<label>On leave</label>
	<input type="text" name="Status" id="Edit_Status" class="empInput form-control" style="border: 1px solid #858796;">
	</div>
	</div>




	<div class="col-lg-3">
	<div class="form-group">
	<label>Remarks</label>
	<input type="text" name="Remarks" id="Edit_Remarks" class="empInput form-control" style="border: 1px solid #858796;">
	</div>
	</div>
	</div>

	<button type="button" class="empBtn LeaveSubmit" id="btnUploadPage" style="text-align:center;margin:25px 300px;color: white;background: #1C304C;border: none;border-radius: 3px;padding: 5px 15px;">Submit</button>
	<input type="hidden" name="" id="EmpId" >

	</form>
	</div>
	</div>
<!-- Content Row -->

</div>

</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
	$(document).ready(function(){
		
		$("body").on('click', '.Attn_Edit', function(){
	var id = $(this).attr('data-EmpId');
	var ajaxurl = "<?=site_url('hrzone/Attendance/UserAttendanceView');?>";
        $.ajax({
            type: "get",
            url: ajaxurl,
            data: {id:id},
			dataType: "JSON",
			success:function(data){
				
				
				$('#EmpId').val(data.AttnId);
				$('#Edit_Status').val(data.Status);
				$('#Edit_checkInTime').val(data.checkInTime);
				$('#Edit_checkOutTime').val(data.checkOutTime);
				$('#Edit_Remarks').val(data.Remarks);
				$("#updateModal").modal('show');
			
			}
				
        });
	
  });
  
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		var d = new Date();
		var curYear =  d.getFullYear();
		var currMonth = d.getMonth() + 1;
		var User_ID = "<?php echo $User_Id; ?>";
		MonthlyUserTimeList(User_ID, curYear, currMonth);
		
    $("#month_Id").change(function(){
		// alert("BHAIiiiiiiii");
        var MonthID = $("#month_Id option:selected").val();
		var YearID  = $("#Year_Id").val();
		var User_ID = "<?php echo $User_Id; ?>";
		MonthlyUserTimeList(User_ID, YearID, MonthID);
    });
	
	
	
	
	$("body").on('click', '.LeaveSubmit', function(){
  // function updateUserRecord(){
	var employee_Status = $('#Edit_Status').val();
	var employee_CheckIn = $('#Edit_checkInTime').val();
	var employee_CheckOut = $('#Edit_checkOutTime').val();
	var employee_Remarks = $('#Edit_Remarks').val();
	var User_Id = $('#EmpId').val();
	
	// var Yid = $(this).attr('data-yearID');
	var ajaxurl = "<?=site_url('hrzone/Attendance/SingleAttendanceEdit');?>";
        $.ajax({
            type: "post",
            url: ajaxurl,
            data: {employee_Status : employee_Status, employee_CheckIn : employee_CheckIn, employee_CheckOut:employee_CheckOut, employee_Remarks:employee_Remarks, User_Id : User_Id },
			dataType: "JSON",
			success:function(data){
			$('#updateModal').modal("hide");
			MonthlyUserTimeList(User_ID, curYear, currMonth);
			alert("Data updated Successfully");
			}
			
		});
  
}); 
	
	
	
	
});



function MonthlyUserTimeList(User_ID, YearID, MonthID){
	var ajaxurl = "<?=site_url('hrzone/Attendance/UserTimeList');?>";
        $.ajax({
            type: "get",
            url: ajaxurl,
            data: {User_ID:User_ID, YearID:YearID, MonthID : MonthID},
			dataType: "JSON"
        }).done(function(response){
			if(response){
				$("#TimelistdataTable tbody").html(`${response.data.map(function(data, index){
										return(`

										<tr class="">
										<td style="text-align:center;">${++index}</td>
										<td class="empCL AttFontStatus" style="min-width: 101px!important; ">${data.AttendenceDate}</td>
										<td class="empCL AttFontStatus" style="min-width: 75px!important; ">${data.CalDay}</td>
										<td class="empCL AttFontStatus" style="min-width: 75px!important; background:#638984; color:white;  ">${(data.CalDay == 'Sat' || data.CalDay == 'Sun') ? 'Nill' : '10:30'}</td>
										<td class="empCL AttFontStatus" style="min-width: 75px!important; background:#638984; color:white;  ">${(data.CalDay == 'Sat' || data.CalDay == 'Sun') ? 'Nill' : '06:30'}</td>
										<td class="empCL AttFontStatus" style="min-width: 75px!important; background:#058c91; color:white;  ">${(data.checkInTime != "")?data.checkInTime: "Nil"}</td>
										<td class="empCL AttFontStatus" style="min-width: 75px!important; background:#058c91; color:white;  ">${(data.checkOutTime != "")?data.checkOutTime: "Nil"}</td>
										<td class="empCL AttFontStatus ${data.Status} " style="min-width: 75px!important; ">${data.Status}</td>
										<td class="empCL AttFontStatus" style="min-width: 75px!important; ">${data.LateTime}</td>
										<td class="empCL AttFontStatus ${(data.LateTime != "Nil")? 'ColorLate' : (data.LateTime == 'Nil' && data.checkInTime != "")? 'TimelyPunched':''}" style="min-width: 75px!important; ">${(data.LateTime != "Nil")? data.LateTime + ' Late' : (data.LateTime == 'Nil' && data.checkInTime != "")? 'Timely Punched':''}</td>
										<td class="empCL AttFontStatus">
										<div class=" " style="display:flex; justify-content:center;">
										<ul class="tnUemp">
										<li class="tnemp"><a href="javascript:void(0)" data-EmpId="${data.emp_id}" class="Attn_Edit"><i class="actionFontSize fas fa-edit"></i></a></li>
										</ul>

										</div>
										</td>

										</tr>

										`)
										}).join('')}
										
										
										`);

			} else {
				$("#AttendencedataTable tbody").html("<div>No data Found.....</div>");
			}
				
        });
}
							
</script>

<?php include('footer.php'); ?>