<?php include('header.php'); ?>
<?php include('commonSidebar.php'); ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper bg-gradient-primary" class="d-flex flex-column" style="margin-top:50px; margin-bottom:50px;">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    
					<div class="card shadow mb-4" style="margin-bottom:100px; width: 1020px;">
                        <div class="card-header ColorSecondaryPre">
                            <h6 class="m-0 font-weight-bold ColorPrimary">My Forms</h6>
                        </div>
						<div class="row">
						<div class="col-lg-12" style="margin-top:-1px;">
						<div class="ColorSecondaryMyGoals" >
						<h6 style="color:black; padding-left:20px;">Download Form 16, Form-18 and other Company forms.</h6>
						</div>
						</div>
						</div>
                        
                    <!-- Content Row -->
					  <!-- Area Chart -->
						<div class="shadow mb-4">
							
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-bordered table-sm" id="dataTable" width="100%">
										<thead>
											<tr>
												
												<th colspan="1">
												<span class="custom-checkbox">
												<input type="checkbox" id="selectAll">
												<label for="selectAll"></label>
												</span>
												</th>
												<th colspan="11" class="cmPayroll"><span><i class="fa fa-folder" aria-hidden="true"></i></span> All Forms</th>
												
												
												
												
											</tr>
										</thead>
										
										<tbody>
											<tr>
												<td colspan="1">
													<span class="custom-checkbox">
													<input type="checkbox" id="checkbox1" name="options[]" value="1">
													<label for="checkbox1"></label>
													</span></td>
												<td colspan="9"><span><i class="fas fa-file-pdf"></i></i></span>&nbsp; Form-16.pdf</td>
												<td colspan="1"><a title="view this user" class="btn btn-default btn-sm "> <i class="fa fa-eye" aria-hidden="true"></i> </a></td>
												<td colspan="1"><a title="edit this user" class="btn btn-default btn-sm "> <i class="fa fa-download" aria-hidden="true"></i> </a></td>
												
											</tr>
											
											<tr>
												<td colspan="1">
													<span class="custom-checkbox">
													<input type="checkbox" id="checkbox1" name="options[]" value="1">
													<label for="checkbox1"></label>
													</span></td>
												<td colspan="9"><span><i class="fas fa-file-pdf"></i></i></span>&nbsp; Form-16.pdf</td>
												<td colspan="1"><a title="view this user" class="btn btn-default btn-sm "> <i class="fa fa-eye" aria-hidden="true"></i> </a></td>
												<td colspan="1"><a title="edit this user" class="btn btn-default btn-sm "> <i class="fa fa-download" aria-hidden="true"></i> </a></td>
												
											</tr>
											
											<tr>
												<td colspan="1">
													<span class="custom-checkbox">
													<input type="checkbox" id="checkbox1" name="options[]" value="1">
													<label for="checkbox1"></label>
													</span></td>
												<td colspan="9"><span><i class="fas fa-file-pdf"></i></i></span>&nbsp; Form-16.pdf</td>
												<td colspan="1"><a title="view this user" class="btn btn-default btn-sm "> <i class="fa fa-eye" aria-hidden="true"></i> </a></td>
												<td colspan="1"><a title="edit this user" class="btn btn-default btn-sm "> <i class="fa fa-download" aria-hidden="true"></i> </a></td>
												
											</tr>
											
											<tr>
												<td colspan="1">
													<span class="custom-checkbox">
													<input type="checkbox" id="checkbox1" name="options[]" value="1">
													<label for="checkbox1"></label>
													</span></td>
												<td colspan="9"><span><i class="fas fa-file-pdf"></i></i></span>&nbsp; Form-16.pdf</td>
												<td colspan="1"><a title="view this user" class="btn btn-default btn-sm "> <i class="fa fa-eye" aria-hidden="true"></i> </a></td>
												<td colspan="1"><a title="edit this user" class="btn btn-default btn-sm "> <i class="fa fa-download" aria-hidden="true"></i> </a></td>
												
											</tr>
											
											<tr>
												<td colspan="1">
													<span class="custom-checkbox">
													<input type="checkbox" id="checkbox1" name="options[]" value="1">
													<label for="checkbox1"></label>
													</span></td>
												<td colspan="9"><span><i class="fas fa-file-pdf"></i></i></span>&nbsp; Form-16.pdf</td>
												<td colspan="1"><a title="view this user" class="btn btn-default btn-sm "> <i class="fa fa-eye" aria-hidden="true"></i> </a></td>
												<td colspan="1"><a title="edit this user" class="btn btn-default btn-sm "> <i class="fa fa-download" aria-hidden="true"></i> </a></td>
												
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
<script>
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>
<?php include('footer.php'); ?>