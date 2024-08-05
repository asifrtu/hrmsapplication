<?php include('header.php'); ?>
<?php include('calenderSidebar.php'); ?>
        <!-- Content Wrapper -->
 

<style>

.addGoalsBtn{
	float:right;
	margin-bottom:5px;
	color:white!important;
    
	float:center;
    background: #1C304C;
    
    font-weight: 400;
    border-radius: 2px;
    padding: .2em 2em 0.2em 2em;
    border: none !important;
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
.actionFontSize{
	font-size:15px!important;
    color: #1C304C!important;
}
.tnNotify a {
  
  color: white;
  text-align: center;
  padding: 8px 11px;
  text-decoration: none;
  
}
.tnAccept a {
	background-color:#1C304C;
}
.tnDecline a {
	background-color:red;
}

th:last-child {
  width:168px;
}
.table td {
    padding: .35rem!important;
	font-size: 12px;
    color: #343434;
    text-align: center;
}

.table th{
	padding:0.5rem!important;
}
.table td:nth-child(2){
	text-align: left;
}

.leaveViewH{
	text-align: center;
    background: #1C304C;
    color: white;
    
}
.col-lg-1{
    max-width: 4.33333%;
	padding-right:0px!important;
}
.card-header {
    padding: 0.3rem 1.25rem!important ;}
.card-body{
    padding-top: 15px!important;
}
.table-bordered tbody tr:nth-of-type(odd){
  background-color:white;
 
}
.table-bordered tbody tr:nth-of-type(even){
 
  background-color: rgb(239 239 239);
}
th {
    position: sticky;
    top: 0;
    background: #00d3c3!important; color: #fff!important;
    font-size: 14px;
    font-weight: 500;
    text-align: center;
}
.table td{
	font-size:12px;
}
.modal-content{
	background-color: transparent!important;
}
.close {
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
.modal-body{
	background-color: white;
}
.namepb h6{
	font-weight:600;
}
.logoPrint{
	width: 95px;
    border-radius: 50%;
    height: 95px;
    outline: 2px solid WHITE;
}
</style>


 <div id="content-wrapper bg-gradient-primary" class="container-fluid col-lg-10" style="margin-bottom:50px; padding-left:10px;margin-top:30px;">
 

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="">

                    <!-- Page Heading -->
                    
					<div class="card shadow mb-4" style="margin-bottom:100px;">
					<div class="card-header ColorSecondaryPre">
                        <div class="d-flex">
                        <div><a href="<?=site_url('hrzone/dashboard/wall');?>" style="color: #fff;font-size: 15px;"><i class="fa fa-home" aria-hidden="true"></i></a></div>
                        <div> &nbsp;&nbsp;<i style="font-size: 10px;color: white;" class="fas fa-chevron-right"></i><span class="breadcrumb_text" style="font-size: 15px;color: #00d3c3;font-weight: 600;">&nbsp; Leave Request</span></div>
                        </div>
                    </div>
	<!-- Content Row -->
					  <!-- Area Chart -->
						
						<div class="shadow ">	
					
							
								
								<div class="">
								
								
									
									<div class="table-responsive">
									<table class="table table-bordered" id="dataTable" width="100%">
										<thead>
											<tr>
												
												<th class="cmPayroll">S.No.</th>
												<th class="cmPayroll">Name</th>
												<th class="cmPayroll displayNoneContent">Employee ID</th>
												<th class="cmPayroll displayNoneContent">Start Date</th>
												<th class="cmPayroll displayNoneContent">End Date</th>
												<th class="cmPayroll displayNoneContent">Days</th>
												<th class="cmPayroll">View</th>
												<th class="cmPayroll">Action</th>
												
												
												
											</tr>
										</thead>
										
										<tbody>
											<?php if(!empty($leaveEmpData)):  ?>
									
											<?php	
											$SNo = 1;
											
											foreach($leaveEmpData as $emp): ?>
											<tr>
											
												<td><?php  echo $SNo; ?></td>
												<td><?php  echo $emp->name; ?></td>
												<td class="displayNoneContent"><?php  echo $emp->employee_id; ?></td>
												
												<td class="displayNoneContent"><?php  echo $emp->StartDate; ?></td>
												<td class="displayNoneContent"><?php  echo $emp->EndDate; ?></td>
												<td class="displayNoneContent"><?php  
														$startDate  = new DateTime($emp->StartDate);
														$endDate = new DateTime($emp->EndDate);
														$diff = $startDate->diff($endDate);
				
												
												echo $diff->d + 1; ?></td>
												
												<td>
													<div class=" " style="display: flex;justify-content: center;">
													<ul class="tnUemp">
													<li class="tnemp"><a href="#" data-StartDate="<?php echo $emp->StartDate; ?>" data-EndDate="<?php echo $emp->EndDate; ?>" data-LID="<?php echo $emp->leaveApply_Id; ?>" data-LeaveId="<?php echo $emp->id; ?>" class="Leave_View"><i style="color:blue;"class="actionFontSize fa fa-eye" aria-hidden="true"></i></a></li>
													</ul>

													</div>
												</td>
												<td>
													<div class=" ">
													<ul class="tnUemp">
													<li class="tnNotify tnAccept"><a href="#" data-leaveAccept="<?php echo $emp->leaveApply_Id; ?>" class="LeaveAccept">Accept</a></li>
													<li class="tnNotify tnDecline"><a href="#" data-leaveDecline="<?php echo $emp->leaveApply_Id; ?>" class="LeaveDecline">Decline</a></li>
													</ul>

													</div>
												</td>
												
											</tr>
											
											<?php  $SNo++; endforeach;  ?>
										<?php else: ?>
										<tr>
										<td colspan="3">Data is Not Available</td>
										<?php endif; ?>

										</tr>
											
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
	<div class="modal-content" style="margin: 196px 0px 0px 44px;width: 89%!important;	 ">
		<div class="card-header" style="padding:7px!important; background-color: #1C304C;">
			<div class="">
			<h6 class="ColorPrimary" style="text-align: center;margin-bottom: 0px;">Create Post</h6>
			<button style="/* margin-left:197px; */" type="button" class="close" data-bs-dismiss="modal">×</button>
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




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
       
		
$(document).ready(function(){
	

 $(".LeaveAccept").click(function(){
     if(confirm("Are you sure You have to Accept this request?"))
                {
	var conf = 'The request process is success!';
	var id = $(this).attr('data-leaveAccept');
	// var Yid = $(this).attr('data-yearID');
	// alert(conf);
	var ajaxurl = "<?=site_url('hrzone/Attendance/UserLeaveAccept');?>";
        $.ajax({
            type: "post",
            url: ajaxurl,
            data: { id : id, Accept:true},
					
	}).done(function(response){
			alert(conf);
			window.location = "<?=site_url('hrzone/Attendance/employeeLeaveView');?>";
			
	
	});
	
	}
	
  });
  
  $(".LeaveDecline").click(function(){
    if(confirm("Are you sure You have to Decline this request?"))
    {
	var conf = 'The request process is success!';
	// var conf = 'Are you sure You have to Decline this file';
	var id = $(this).attr('data-leaveDecline');
	// var Yid = $(this).attr('data-yearID');
	
	var ajaxurl = "<?=site_url('hrzone/Attendance/UserLeaveDecline');?>";
        $.ajax({
            type: "post",
            url: ajaxurl,
            data: { id : id, Decline:true},
			success: response => {

			alert(conf);
			window.location = "<?=site_url('hrzone/Attendance/employeeLeaveView');?>";
	
			},
			error: error => {
			console.log("Error", error);
			}
			
			
	});
	
	}
	
  });
  
  
  
  $(".leaveUserDetails").click(function(){
    // var conf = 'Are you sure You have to delete this file';
	var id = $(this).attr('data-User');
	// var Yid = $(this).attr('data-yearID');
	alert(conf);
	var ajaxurl = "<?=site_url('hrzone/Attendance/UserDataLeaveView');?>";
        $.ajax({
            type: "post",
            url: ajaxurl,
            data: { id : id},
			success: response => {

			if(response.status === 1){
			
			}
			},
			error: error => {
			console.log("Error", error);
			}
			
			
	});
	
  });
  
  
  $("body").on('click', '.Leave_View', function(){
	var id = $(this).attr('data-LeaveId');
	var LeaveId = $(this).attr('data-LID');
	var startDate = $(this).attr('data-StartDate');
	var endDate = $(this).attr('data-EndDate');
	var ajaxurl = "<?=site_url('hrzone/Attendance/UserLeaveDetails');?>";
        $.ajax({
            type: "post",
            url: ajaxurl,
            data: {id:id, LeaveId:LeaveId, startDate:startDate, endDate:endDate},
			dataType: "JSON",
			}).done(function(response){
			$("#updateModal").modal('show');
			if(response){
				
				
				console.log(response.data);
				$("#renderHtmlLeave").html(`
					<table class="table table-bordered  " id="dataTable" width="100%">
										
										<thead>
										
										${response.data.map(function(data){
										return`<tr>
												<th colspan="5" class="fc qdxPrintCF" style="padding-bottom:0px!important;">
												
												
												<div class="row ">
												<div class="col-lg-6 col-md-6 col-sm-6 namepb qdxCenter">
													<h6 style="padding: 8px 8px 0px 0px;">Employee Name</h6>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-6 qdxCenter">
													<h6 style="padding: 8px 8px 0px 0px;">${data.userName}</h6>
												</div>
												</div>
												
												<div class="row ">
												<div class="col-lg-6 col-md-6 col-sm-6 namepb qdxCenter">
													<h6 style="padding: 8px 8px 0px 0px;">Employee ID</h6>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-6 qdxCenter">
													<h6 style="padding: 8px 8px 0px 0px;">${data.employee_id}</h6>
												</div>
												</div>
												
												<div class="row ">
												<div class="col-lg-6 col-md-6 col-sm-6 namepb qdxCenter">
													<h6 style="padding: 8px 8px 0px 0px;">Designation</h6>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-6 qdxCenter">
													<h6 style="padding: 8px 8px 0px 0px;">${data.position}</h6>
												</div>
												</div>
												
												
												</th>
												<th class="fc qdxPrintCF"><img class="logoPrint" src="<?php echo base_url();?>upload/UserProfileImage/${data.EmpProfileImage}"  alt="Cinque Terre"></th>
													
											</tr>`
										}).join('')}
											
										</thead>
										
										<tbody>
											<tr>
												<td colspan="6" class="fc leaveViewH" style=" color:white!important; padding: 1px!important; text-align:center;">Leave Apply Details</td>
												
											</tr>
											${response.data.map(function(data){
										return`
										${data.LeaveUser.map(function(LeaveUserData){
										return`<tr>
												
												<td colspan="2" class="fc text-left qdxPrintCF">Reason of Leave :</td>
												<td class="fc qdxPrintCF">${LeaveUserData.ReasonOfLeave}</td>
												<td colspan="2" class="fc text-left qdxPrintCF">To:</td>
												<td class="fc text-left qdxPrintCF">${LeaveUserData.org_Email}</td>
													
											</tr>
												
											`
										}).join('')}
											<tr>
												${data.Rdate.map(function(RdateData){
										return`
												<td colspan="2" class="fc text-left qdxPrintCF">Requested Days :</td>
												
												<td class="fc  qdxPrintCF">${RdateData}</td>
											`
										}).join('')}
												
												${data.LeaveUser.map(function(LeaveUserData){
										return`
												<td colspan="2" class="fc text-left qdxPrintCF">Leave Type:</td>
												<td class="fc text-left qdxPrintCF">${LeaveUserData.LeaveType}</td>
													
											</tr>
												
											<tr>
												
												<td colspan="2" class="fc text-left qdxPrintCF">Start Date :</td>
												<td class="fc qdxPrintCF">${LeaveUserData.StartDate}</td>
												<td colspan="2" class="fc  text-left qdxPrintCF">End Date :</td>
												<td class="fc text-left qdxPrintCF">${LeaveUserData.EndDate}</td>
													
											</tr>
												
											<tr>
												
												<td colspan="6" class="fc text-center qdxPrintCF">${LeaveUserData.Description}</td>
												
													
											</tr>`})}
											
											`
										}).join('')}
										
										
										${response.data.map(function(data){
										return`
										<tr>
												<td colspan="6" class="fc leaveViewH" style=" color:white!important; padding: 1px!important; text-align:center;">CL and EL Details</td>
												
											</tr>
											
										${data.LeaveUserELCL.map(function(LeaveUserELCLData){
										return`
											<tr>
												
												<td colspan="2" class="fc qdxPrintCF">CL:</td>
												<td class="fc qdxPrintCF">${LeaveUserELCLData.CL}</td>
												<td colspan="2" class="fc qdxPrintCF">EL:</td>
												<td class="fc text-left qdxPrintCF">${LeaveUserELCLData.EL}</td>
													
											</tr>
											
											`})}
											
											`
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
	var ajaxurl = "<?=site_url('hrzone/Attendance/AllUserAttendance');?>";
        $.ajax({
            type: "get",
            url: ajaxurl,
            data: {YearID:YearID, MonthID : MonthID},
			dataType: "JSON"
        }).done(function(response){
			if(response){
				
				console.log(response.data);
				
				
				$("#HolidayTable tbody").html(`${response.CalHoliday.map(function(HCal, index){
					return(`<tr>
						<td class="HolidayCal" style="min-width:100px;">${HCal.HName}</td>
						<td class="HolidayCal">${HCal.holiday_list}</td>
						<td class="HolidayCal">
						<div class=" ">
						<ul class="tnUemp">
						<li class="tnemp"><a href="javascript:void(0)" data-HCAl="${HCal.h_id}" class="Hcal_Edit"><i class="actionFontSize fas fa-edit"></i></a></li>
						</ul>

						</div>
						</td>
					</tr>`)
				})}`);
				
				
				
				
				
				
				
			} else {
				$("#AttendencedataTable tbody").html("<div>No data Found.....</div>");
			}
				
        });
}


    </script>
<?php include('footer.php'); ?>