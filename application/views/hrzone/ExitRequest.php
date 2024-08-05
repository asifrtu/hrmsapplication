<?php include('header.php'); ?>
<?php include('ExitSidebar.php'); ?>
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

th:last-child {
  width:168px;
}

.leaveViewH{
	text-align: center;
    background: #2e2869;
    color: white;
    
}

.empInput{
    border: 1px solid #858796;
    border-radius: 3px;
    overflow: hidden!important;
    padding: 0.2rem 0.75rem!important;
    color: #343434;
    font-size: 13px!important;
}

.table td, .table th {
     padding: 0.2rem; 
    vertical-align: top;
    border-top: 1px solid #e3e6f0;
}

.sasifb{
	
	margin: 5px 13px;
}
.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem 1.25rem;
}
.ColorSecondaryPre{
	padding:5px 15px;
}

.cmPayroll{
	font-size: 13px;
    font-weight: 600;
    color: #fff!important;
    padding: 10px 11px!important;
}
thead{
	background: #00d3c3!important; color: #fff!important;
}
</style>


 <div id="content-wrapper bg-gradient-primary" class="col-lg-10" style="padding-left:20px; margin-bottom:50px;">

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
                        <div> &nbsp;&nbsp;<i style="font-size: 10px;color: white;" class="fas fa-chevron-right"></i><span class="breadcrumb_text" style="font-size: 15px;color: #00d3c3;font-weight: 600;">&nbsp; Exit Request</span></div>
                        </div>
                    </div>
						
                    <!-- Content Row -->
					  <!-- Area Chart -->
						
							
								<div class="card-body">
								
								
									
									<div class="table-responsive">
									<table class="table table-bordered" id="dataTable" width="100%">
										<thead>
											<tr>
												
												<th class="cmPayroll">S.No.</th>
												<th class="cmPayroll">Name</th>
												<th class="cmPayroll">Employee ID</th>
												<th class="cmPayroll">Date</th>
												<th class="cmPayroll" style="min-width: 200px;">Reason</th>
												<th class="cmPayroll">To</th>
												<th class="cmPayroll">View</th>
												<th class="cmPayroll">Action</th>
												
												
												
											</tr>
										</thead>
										
										<tbody>
											<?php if(!empty($Exitrecord)):  ?>
									
											<?php	
											$SNo = 1;
											
											foreach($Exitrecord as $emp): ?>
											<tr>
											
												<td><?php  echo $SNo; ?></td>
												<td><?php  echo $emp->name; ?></td>
												<td><?php  echo $emp->employee_id; ?></td>
												
												<td><?php  echo $emp->applydate; ?></td>
												<td><?php  echo $emp->ReasonOfLeave; ?></td>
												<td><?php  echo $emp->organisationEmail; ?></td>
												<td>
													<div class=" ">
													<ul class="tnUemp">
													<li class="tnemp"><a href="#" data-LID="<?php echo $emp->exit_Id; ?>" data-LeaveId="<?php echo $emp->id; ?>" class="Leave_View"><i class="actionFontSize fa fa-eye" aria-hidden="true"></i></a></li>
													</ul>

													</div>
												</td>
												<td>
													<div class=" ">
													<ul class="tnUemp">
													<li class="tnNotify tnAccept"><a href="#" data-leaveAccept="<?php echo $emp->exit_Id; ?>" class="LeaveAccept">Accept</a></li>
													<li class="tnNotify tnDecline"><a href="#" data-leaveDecline="<?php echo $emp->exit_Id; ?>" class="LeaveDecline">Decline</a></li>
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
	<div class="modal-content" style="margin: 196px 9px 0 259px;  width: 89%!important; ">
		<div class="card-header" style="padding:0!important; background-color: #2e2869;">
		<div class="row">
		<h6 class="ColorPrimary" style="padding-left: 302px; padding-top: 10px;">Exit Request Details</h6>
		<button style="margin-left:220px;" type="button" class="close" data-bs-dismiss="modal">&times;</button>
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
    var conf = 'Are you sure You have to Accept this file';
	var id = $(this).attr('data-leaveAccept');
	// var Yid = $(this).attr('data-yearID');
	alert(conf);
	var ajaxurl = "<?=site_url('hrzone/Separation/UserExitAccept');?>";
        $.ajax({
            type: "post",
            url: ajaxurl,
            data: { id : id, Accept:true},
			success: response => {

			if(response.status === 1){
			
			}
			},
			error: error => {
			console.log("Error", error);
			}
			
			
	});
	
  });
  
  $(".LeaveDecline").click(function(){
    var conf = 'Are you sure You have to Decline this file';
	var id = $(this).attr('data-leaveDecline');
	// var Yid = $(this).attr('data-yearID');
	alert(conf);
	var ajaxurl = "<?=site_url('hrzone/Separation/UserExitDecline');?>";
        $.ajax({
            type: "post",
            url: ajaxurl,
            data: { id : id, Decline:true},
			success: response => {

			if(response.status === 1){
			
			}
			},
			error: error => {
			console.log("Error", error);
			}
			
			
	});
	
  });
  
  
  
  $(".leaveUserDetails").click(function(){
    var conf = 'Are you sure You have to delete this file';
	var id = $(this).attr('data-User');
	// var Yid = $(this).attr('data-yearID');
	alert(conf);
	var ajaxurl = "<?=site_url('hrzone/Ticket/UserDataTicketView');?>";
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
	
	var ajaxurl = "<?=site_url('hrzone/Separation/UserExitDetails');?>";
        $.ajax({
            type: "post",
            url: ajaxurl,
            data: {id:id, LeaveId:LeaveId},
			dataType: "JSON",
			}).done(function(response){
			$("#updateModal").modal('show');
			if(response){
				
				
				console.log(response.data);
				$("#renderHtmlLeave").html(`
					<table class="table table-bordered  " id="dataTable" width="100%">
										
										
										<tbody>
											
											${response.data.map(function(data){
										return`
										${data.LeaveUser.map(function(LeaveUserData){
										return`
												
											
											<tr>
												
												<td colspan="6" class="fc qdxPrintCF">${LeaveUserData.Description}</td>
												
													
											</tr>`})}
											
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
	
    </script>
<?php include('footer.php'); ?>