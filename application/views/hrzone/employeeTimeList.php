<?php include('header.php'); ?>
<?php include('payAndTimeSidebar.php'); ?>
        <!-- Content Wrapper -->
 

<style>
.cmPayroll{
	background: #00d3c3!important; color: #fff!important;
}
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
.actionFontSize .cmPayroll{
	background: #00d3c3!important; color: #fff!important;
};
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

.empTime a {
  
  color: #706e80;
 
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
</style>


 <div id="content-wrapper bg-gradient-primary" class="d-flex flex-column" style="margin-top:50px; margin-bottom:50px;">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    
					<div class="card shadow mb-4" style="margin-bottom:100px;">
                        <div class="ColorSecondaryPre" style="padding: 12px 5px 5px 12px;">
                            <h5 class=" md-4 ColorPrimary" style="font-size:17px;">Employee Time List</h5>
                        </div>
                    <!-- Content Row -->
					  <!-- Area Chart -->
						
						<div class="shadow mb-4">	
						<div class="card-body">
                    <!-- Content Row -->
					  <!-- Area Chart -->
								
								<div class="col-lg-12" >
								<div class="row" >
								<div class="col-lg-4" >

								</div>
								<div class="col-lg-4" >
								<div class="row">
								<a href="#" style="color:#8c8988!important; margin-left:40px; " ><i class="fa fa-chevron-circle-left" aria-hidden="true"></i></a><h5 style="text-align:center; margin:auto; color:#6f42c1; font-weight:700;">Feb, 2021</h5><a href="#" style=" color:#8c8988!important; margin-right:40px;"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
								</div>
								</div>
								<div class="col-lg-4" >
								</div>
								</div>
								</div>
						</div>
					
							
								
								<div class="card-body">
								
								
									
									<div class="table-responsive">
									<table class="table table-bordered" id="dataTable" width="100%">
										<thead style="background-color:#f6f6ff;">
											<tr>
												
												<th class=" cmPayroll empTL">S.No.</th>
												<th class="cmPayroll empTL">Name</th>
												<th class="cmPayroll empTL">Date</th>
												<th class="cmPayroll empTL">Day</th>
												<th colspan="2" class="cmPayroll empTL1">Planned Time<div style="margin-bottom: 0rem!important; border-top: 1px solid #e3e6f0;"></div>
												<div class="row">
												<div class="col-lg-6">
												<h6 style="color:green; text-align: center;">IN</h6>
												</div>
												<div class="col-lg-6">
												<h6 style="color:red; text-align: center;">OUT</h6>
												</div>
												</div>
												</th>
												<th colspan="2" class="cmPayroll empTL2">Actual Time
												<div style="margin-bottom: 0rem!important; border-top: 1px solid #e3e6f0;"></div>
												<div class="row">
												<div class="col-lg-6">
												<h6 style="color:green; text-align: center;">IN</h6>
												</div>
												<div class="col-lg-6">
												<h6 style="color:red; text-align: center;">OUT</h6>
												</div>
												</div>
												</th>
												<th class="cmPayroll empTL">On leave</th>
												<th class="cmPayroll empTL">Late out</th>
												<th class="cmPayroll empTL">Remarks</th>
												
												
												
											</tr>
										</thead>
										
										<tbody>
											<tr>
												<td>1.</td>
												<td class="empTime"><a href="<?=base_url('index.php/hrzone/dashboard/employeeSingleTimeList');?>">James Hopper</a>
												<div><span>(QGS07)</span></div>
												</td>
												<td>27-Jan-2021</td>
												<td>sat</td>
												<td>10:00 AM</td>
												<td>6:30 PM</td>
												<td>10:00 AM</td>
												<td>6:30 PM</td>
												<td>CL</td>
												<td>00:00</td>
												<td>CL</td>
												
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

<?php include('footer.php'); ?>