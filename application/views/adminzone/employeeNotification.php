<?php include('header.php'); ?>
<?php include('commonSidebar.php'); ?>
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
.actionFontSize{
	font-size:15px!important;
	color:#00d3c3!important;
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
	background-color: #cef9ea;
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
                        <div class="card-header ColorSecondaryPre">
                            <h6 class="m-0 font-weight-bold ColorPrimary">Notification List</h6>
                        </div>
						
                        
                    <!-- Content Row -->
					<!-- Area Chart -->
						
						<div class="shadow mb-4">	
							
								<div class="card-body">
								
								
									
									<div class="dropdown">
                                        <button class="btn btn-primary dropbtn dropdown-toggle" type="button"
                                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Filter
                                        </button>
                                        <div class="dropdown-content animated--fade-in"
                                            aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">2nd Week</a>
                                            <a class="dropdown-item" href="#">3rd Week</a>
                                            <a class="dropdown-item" href="#">4th Week</a>
                                            <a class="dropdown-item" href="#">5th Week</a>
                                        </div>
                                    </div>
									<div class="table-responsive">
									<table class="table table-striped" id="dataTable" width="100%">
										<thead style="background-color:#f3f3f7;">
											<tr>
												<th class=" cmPayroll">S.No.</th>
												<th class="cmPayroll">Date</th>
												<th class="cmPayroll">Name</th>
												<th class="cmPayroll" style="width:400px;">Description</th>
												<th class="cmPayroll">Status</th>
												<th class="cmPayroll">Action</th>	
											</tr>
										
										</thead>
										
										
										<tbody>
											<tr>
												<td>1.</td>
												<td>27-Jan-2021</td>
												<td>Ghufran Ahmad</td>
												<td>Your scheduled report is complete.</td>
												<td>Active</td>
												<td>
													<div class=" ">
													<ul class="tnUemp">
													<li class="tnemp"><a href="#"><i class="actionFontSize fas fa-trash-alt"></i></a></li>
													<li class="tnemp"><a href="#"><i class="actionFontSize fas fa-edit"></i></a></li>
													</ul>

													</div>
												
												</td>
												
												
											</tr>
											<tr>
												<td>2.</td>
												<td>27-Jan-2021</td>
												<td>Ghufran Ahmad</td>
												<td>Your scheduled report is complete.</td>
												<td>Active</td>
												<td>
													<div class=" ">
													<ul class="tnUemp">
													<li class="tnemp"><a href="#"><i class="actionFontSize fas fa-trash-alt"></i></a></li>
													<li class="tnemp"><a href="#"><i class="actionFontSize fas fa-edit"></i></a></li>
													</ul>

													</div>
												
												</td>
												
												
											</tr>
											<tr>
												<td>3.</td>
												<td>27-Jan-2021</td>
												<td>Ghufran Ahmad</td>
												<td>Your scheduled report is complete.</td>
												<td>Active</td>
												<td>
													<div class=" ">
													<ul class="tnUemp">
													<li class="tnemp"><a href="#"><i class="actionFontSize fas fa-trash-alt"></i></a></li>
													<li class="tnemp"><a href="#"><i class="actionFontSize fas fa-edit"></i></a></li>
													</ul>

													</div>
												
												</td>
												
												
											</tr>
											<tr>
												<td>4.</td>
												<td>27-Jan-2021</td>
												<td>Ghufran Ahmad</td>
												<td>Your scheduled report is complete.</td>
												<td>Active</td>
												<td>
													<div class=" ">
													<ul class="tnUemp">
													<li class="tnemp"><a href="#"><i class="actionFontSize fas fa-trash-alt"></i></a></li>
													<li class="tnemp"><a href="#"><i class="actionFontSize fas fa-edit"></i></a></li>
													</ul>

													</div>
												
												</td>
												
												
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