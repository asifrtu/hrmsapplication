<?php include('header.php'); ?>
<?php include('AppraisalSidebar.php'); ?>
   

<style>

.ColorSecondaryModel1{
	background-color:#1C304C;
	padding: .35rem 1.25rem!important;
	
}
.ColorSecondaryModel2{
	background-color:#1C304C;
	padding: .35rem 1.25rem!important;
	
}
.ColorSecondary {
    background-color: #1C304C;
    padding: .35rem 1.25rem!important;
}

.leaveApplySubmitBtn{
	margin: 0px 170px;
	color:white!important;
    
	float:center;
    background: #1C304C;
    
    font-weight: 400;
    border-radius: 2px;
    padding: .2em 2em 0.2em 2em;
    border: none !important;
    
}
.leaveCancelBtn{
	
    
    border: 1px solid #5a5c69;
}

.empInput{
	border: 1px solid #858796;
    border-radius: 3px;
	overflow:hidden!important;
	
	padding: .2rem .75rem!important;
}
.form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + 0.4rem + 2px);
	font-size: 0.9rem;
}

input:focus::placeholder {
  color: transparent;
}
.form-group {
    margin: 0.4rem;
}

button.close {
    padding: 0;
    background-color: transparent;
    border: 0;
    color: white;
}

.addEmpSubmitBtn{
	
	color:white!important;
    
	float:center;
    background: #36b9cc;
    text-decoration:none;
    font-weight: 400;
    border-radius: 2px;
    padding: .1em 0.4em 0.1em 0.4em;
    border: none !important;
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

a.addEmpSubmitBtn:hover {background-color: #ccbf24;}

.ColorSecondaryNotes{
	background-color:#E0E0E0;
	padding: .35rem 1.25rem!important;
}

.asa a{
	text-decoration:none;
}



.Accept{
	color: #00610f!important;
    background-color: #c6efcf;
	border-bottom: 1px solid #fff!important;
	text-align:center;
	vertical-align: middle!important;
	font-size: 12px;
	
	
}


.Decline{
	color: #9d030c!important;
    background-color: #ffc7ce;
	border-bottom: 1px solid #fff!important;
	text-align:center;
	vertical-align: middle!important;
	font-size: 12px;
	
	
}



.InProgress{
	color: #9c6515!important;
    background-color: #ffeba1;
	border-bottom: 1px solid #fff!important;
	text-align:center;
	vertical-align: middle!important;
	font-size: 12px;
	
	
}







.ColorSecondaryPre{
	padding:5px 15px;
}
.card{
	border:none;
}
.cmPayroll{
	margin-bottom: 0rem!important;
	font-weight: 600;
	font-size:14px;
	color:#fff;
	background-color: #00d3c3;
}
 .table th{
	 padding:10px 11px;
 }
 .table td{
	 vertical-align:middle;
	 font-size:13px;
	 color:#343434;

 }

 </style>
                <!-- Content Wrapper -->
        <div id="content-wrapper bg-gradient-primary" class="col-lg-10" style="padding-left:20px; margin-bottom:50px; ">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="">

                    <!-- Page Heading -->
                    
					<div class="card" >
                        			
					<div class="card-header ColorSecondaryPre">
                        <div class="d-flex">
                        <div><a href="<?=site_url('hrzone/dashboard/wall');?>" style="color: #fff;font-size: 15px;"><i class="fa fa-home" aria-hidden="true"></i></a></div>
                        <div> &nbsp;&nbsp;<i style="font-size: 10px;color: white;" class="fas fa-chevron-right"></i><span class="breadcrumb_text" style="font-size: 15px;color: #00d3c3;font-weight: 600;">&nbsp; Appraisal Request</span></div>
                        </div>
                    </div>
                        
					
						
                        
                    <!-- Content Row -->
					  <!-- Area Chart -->
								
								
							
							
			<div class="row" style="margin-top:10px;">
			<div class="col-lg-6">
							
								
			<div class="row">
			<div class="col-lg-6 asa"style="margin-left:20px;">
			<a href="javascript:void(0)" class="u-shadow-v18 btn btn-default addEmpSubmitBtn" data-toggle="modal" data-target="#myModal">

			<span class="text">Appraisal Request</span>
			</a>
			</div>
			
			</div>
			</div>
			</div>
							
						
							
								
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
											<thead>
											<tr>
												<th class="cmPayroll">S.No.</th>
												<th class="cmPayroll">Name</th>
												<th class="cmPayroll displayNoneContent">Employee ID</th>
												<th class="cmPayroll">Date</th>
												<th class="cmPayroll">Status</th>
											</tr>
											</thead>
											
										
										<tbody>
											<?php if(!empty($UserExitrecord)):  ?>
									
											<?php	
											$SNo = 1;
											
											foreach($UserExitrecord as $emp): ?>
											<tr>
											
												<td><?php  echo $SNo; ?></td>
												<td><?php  echo $emp->name; ?></td>
												<td class="displayNoneContent"><?php  echo $emp->employee_id; ?></td>
												
												<td><?php  echo $emp->applydate; ?></td>
												<td style="min-width: 100px;" class="<?php  echo $emp->AppraisalStatus; ?>"><?php  echo $emp->AppraisalStatus; ?></td>
												
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
	
	
	<div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">

			
			<div class="card-header ColorSecondaryPre" style="padding: .5rem 1.25rem .25rem 1.25rem; border-radius: calc(.1rem - 1px) calc(.1rem - 1px) 0 0;">
			<div class="row">
			<h6 class="m-0 font-weight-bold ColorPrimary" style="padding-left: 137px;">Appraisal Request</h6>
			<button style="margin-left: 120px;" type="button" class="close" data-bs-dismiss="modal">&times;</button>
			</div>
			</div>

			<div class="modal-body" style="border: 1px solid #ffffff;">
				<?php echo form_open_multipart('hrzone/Appraisal/ExitRequestAdd'); ?>
			
			
			<div class="row">
			
			
			
			<div class="col-lg-6">

			<div class="form-group">
			<label for="email">Select Employee</label>
			<select class="empInput form-control" name="User_Id" style="border: 1px solid #858796;" id="sel1">
			<option>Select Employee</option>
			<?php 
			// echo "<pre>";
			// print_r($teamDesignation);die;

			foreach($UserInfo as $data){
			echo '<option value="'.$data->id.'">'.$data->name.'</option>';
			}?>
			</select>
			</div>


			</div>
			
			<div class="col-lg-6">
			<div class="form-group">
			<label for="email">Select Date</label>
			<input type="date" name="applydate" class="empInput form-control" style="border: 1px solid #858796;">
			</div>
			</div>
			</div>
			
			
			<div class="row">
			<div class="col-lg-12">

			<div class="form-group">
			<label for="email">Description</label>
			<textarea class="empInput form-control" name="Description" id="insertDescription" rows="5" style="border: 1px solid #858796;"></textarea>
			</div>


			</div>
			</div>
			
			
			
			





			</div>

			
			

			<div class="card-body">
			

			<button type="submit" id="#" id="btnUploadPage" class="btn btn-default leaveApplySubmitBtn">Submit</button>
			</div>
			
			</form>





			<!-- Content Row -->
			



			</div>

			</div>
			</div>

<div class="modal " id="updateModal" role="dialog">
<div class="modal-dialog modal-lg">
<!-- Modal content-->
	<div class="modal-content" style="margin: 196px 9px 0 259px;  width: 89%!important; ">
		<div class="card-header" style="padding:0!important; background-color: #2e2869;">
		<div class="row">
		<h6 class="ColorPrimary" style="padding-left: 302px; padding-top: 10px;">Appraisal Request Details</h6>
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
	var ajaxurl = "<?=site_url('hrzone/Appraisal/UserExitAccept');?>";
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
	var ajaxurl = "<?=site_url('hrzone/Appraisal/UserExitDecline');?>";
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
	
	var ajaxurl = "<?=site_url('hrzone/Appraisal/UserExitDetails');?>";
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