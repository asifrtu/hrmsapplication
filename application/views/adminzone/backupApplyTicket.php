<?php include('header.php'); ?>
<?php include('commonSidebar.php'); ?>

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
.ColorSecondaryPre{
	background: #1C304C;
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
cmPayroll:hover {
  
}
.ColorSecondaryNotes{
	background-color:#E0E0E0;
	padding: .35rem 1.25rem!important;
}

.asa a{
	text-decoration:none;
}


.Accept{
	color:white;
	background-color:#6aa84f;
	
	
}


.Decline{
	color:white;
	background-color:#c16958;
	
	text-align:center;
}



.InProgress{
	color:white;
	background-color:#f1c232;
	
	text-align:center;
}

 </style>
                <!-- Content Wrapper -->
        <div id="content-wrapper bg-gradient-primary" class="d-flex flex-column" style="margin-top:50px; margin-bottom:50px; width:950px;">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    
					<div class="card" >
                        <div class="ColorSecondaryPre" style="padding: 12px 5px 5px 12px;">
                            <h5 class=" md-4 ColorPrimary" style="font-size: 17px;" > Apply Ticket</h5>
                        </div>
                        
						<div class=" ">
											<ul class="APUemp ColorSecondaryNotes">
											<li class="APemp"><a href="#"><span><small>Note: Click on apply ticket button for ticket apply.</small></span></a></li>
											</ul>

											
										</div>
						
						
                        
                    <!-- Content Row -->
					  <!-- Area Chart -->
								<?php if(!empty($this->session->flashdata('message'))) { ?>
			
			
			<?=$this->session->flashdata('message');?>
			
		<?php } ?>
							
								
							
							
			<div class="row" style="margin-top:10px;">
			<div class="col-lg-6">
							
								
			<div class="row">
			<div class="col-lg-4 asa"style="margin-left:20px;">
			<a href="javascript:void(0)" class="u-shadow-v18 btn btn-default addEmpSubmitBtn" data-toggle="modal" data-target="#myModal">

			<span class="text">Generate Ticket</span>
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
												<th class="cmPayroll">S.No</th>
												<th class="cmPayroll">Request date</th>
												<th class="cmPayroll">Reason</th>
												
												<th class="cmPayroll">To</th>
												<th class="cmPayroll">Status</th>	
											</tr>
											</thead>
											
										
										<tbody>
											<?php if(!empty($Ticketrecord)):  ?>
									
											<?php	
											$SNo = 1;
											
											foreach($Ticketrecord as $emp): ?>
											<tr>
											
												<td><?php  echo $SNo; ?></td>
												
												<td style="min-width: 100px;"><?php  echo $emp->TokenDate; ?></td>
												<td style="min-width: 250px;"><?php  echo $emp->ReasonOfToken; ?></td>
												<td style="min-width: 120px;"><?php  echo $emp->organisationEmail; ?></td>
												
												<td style="min-width: 100px;" class="<?php  echo $emp->ticketStatus; ?>"><?php  echo $emp->ticketStatus; ?></td>
												
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
			<h6 class="m-0 font-weight-bold ColorPrimary" style="padding-left: 137px;">Generate Token Request</h6>
			<button style="margin-left: 120px;" type="button" class="close" data-bs-dismiss="modal">&times;</button>
			</div>
			</div>

			<div class="modal-body" style="border: 1px solid #ffffff;">
				<?php echo form_open_multipart('adminzone/Ticket/TicketAdd'); ?>
			
			<div class="row">
			<div class="col-lg-12">

			<div class="form-group">
			<label>Reason of generate token</label>
			<input type="text" name="ReasonOfToken" id="insertReasonOfToken" class="empInput form-control" style="border: 1px solid #858796;">
			</div>


			</div>
			</div>
			
			<div class="row">
			<div class="col-lg-6">
			<div class="form-group">
			<label for="email">Date</label>
			<input type="date" name="TokenDate" id="insertTokenDate" class="empInput form-control" name="startDay" style="border: 1px solid #858796;">
			</div>
			</div>
			<div class="col-lg-6">
			<div class="form-group">
			<label>To</label>
				<select class="empInput form-control" name="organisationEmail" id="insertorganisationEmail" style="border: 1px solid #858796;">
				<option>Select</option>
				<option>Admin</option>
				<option>HR</option>
				<option>Manager</option>
				<option>Team Leader</option>
				</select>
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

			<div class="row">
			<div class="col-lg-12">
			<div class="ColorSecondary">
			<h6 class="m-0 font-weight-bold ColorPrimary" style="margin:15px 0;">Upload Documents</h6>
			</div>
			</div>
			</div>

			

			<div class="card-body">
			<div class="row">
			<div class="col-lg-12">

			<div class="form-group">

			<input type="file" name="filePath[]" id="insertuserFile" class="empInput form-control" style="border: 1px solid #858796;">
			</div>


			</div>
			</div>

			<button type="submit" id="#" id="btnUploadPage" class="btn btn-default leaveApplySubmitBtn">Submit</button>
			</div>
			
			</form>





			<!-- Content Row -->
			



			</div>

			</div>
			</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script type="text/javascript">
       
		
$(document).ready(function(){
	

$("#btnUploadPage").click(function(){

let frm = $("#Image-form")[0];
let frmDt = new FormData(frm);


$.ajax({
type: "post",
url: "<?=site_url('adminzone/Ticket/TicketAdd');?>",
data: frmDt,
dataType: "json",
cache: false,
contentType: false,
processData: false,

success: response => {

if(response.status === 1){
$("#myModal").hide('modal');
location.reload();
}
}
});
});	
});	
	
  </script>
<?php include('footer.php'); ?>