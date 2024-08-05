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
                    
					<div class="card shadow mb-4" style="margin-bottom:100px;">
                        <div class="card-header ColorSecondaryPre">
                            <h6 class="m-0 font-weight-bold ColorPrimary">My Time</h6>
                        </div>
						<div class="row">
						<div class="col-lg-12" style="margin-top:-1px;">
						<div class="ColorSecondaryMyGoals" >
						<p style="color:black;" >Apply for leave or time off Register your attendence by clicking on the Check In or Check Out button here. if<br>you need to change or add an entry, you'll need to send a message to your HR and they'll do it for you work.<br> View your application status and know your current leave balance when you apply for new leave. </p>
						</div>
						</div>
						</div>
                        
                    <!-- Content Row -->
					  <!-- Area Chart -->
								<div class="shadow mb-4">
							
							<div class="card-body">
								
						
								<div class="row" style="margin:20px;">
                                    
									
									<h6 id="dateDashboard" style="color:BLACK!important; margin-left: 30px;" ><?php date_default_timezone_set("Asia/Calcutta");
									echo date("d F Y h:i A") . "\n"; ?></h6>
									<div style="margin-left:50px;">
									<button class="btn btn-sm checkOutC">CHECK OUT</button>
									</div>
											
								</div>
							
						
							<div class="row">
							
							<div class="col-lg-6">
								<div class="table-responsive">
									<table class="table table-bordered" id="dataTable" width="100%">
										<thead>
											<tr>
												
												<th colspan="2" class=" cmPayroll" style="text-align:center;">Recent Entry</th>
												
												
											</tr>
											
										</thead>
										
										<tbody>
											<tr>
												<th ><?php echo date("d F Y h:i A"); ?></th>
												<th ><button class="btn btn-sm btn-success" style="padding: 2px 20px;">IN</button></th>
											</tr>
											<tr>
												<th ><?php echo date("d F Y h:i A"); ?></th>
												<th ></th>
											</tr>
											
											
										</tbody>
									</table>
								</div>
								
								</div>
								<div class="col-lg-6">
								
							
								</div>
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

<?php include('footer.php'); ?>