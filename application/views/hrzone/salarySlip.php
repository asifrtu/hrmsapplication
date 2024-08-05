<?php include('header.php'); ?>
<?php include('payAndTimeSidebar.php'); ?>
<style>

.ColorSecondary{
	background-color:#6f42c1;
	padding: .35rem 1.25rem!important;
	
}

input.bPayroll{
 color:#6f42c1;
}
.cmPayroll{
 color:#504a94;
}
.Qdxupload-btn-wrapper {
  position: relative;
  
  display: inline-block;
}

.btnQd {
  border: 2px solid #504a94;
  color: white;
  background-color: #504a94;
  padding: 4px 10px;
  border-radius: 0px;
  font-size: 20px;
  font-weight: bold;
}
.btnQdUpload {
  border: 2px solid white;
  color: gray;
  background-color: white;
  padding: 4px 10px;
  border-radius: 0px;
  font-size: 20px;
  font-weight: bold;
}

.Qdxupload-btn-wrapper input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}


.empFile{
	border-bottom: 2px solid white;
    padding: 10px;
    background-color: white;
	color:grey;

}

 .empFile a {
 
  color: grey;
  
  text-decoration: none;
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
td:last-child { width:161px;}
td:first-child { width:250px;}
.tnemp a {
  
  color: #706e80;
  text-align: center;
  padding: 8px 11px;
  text-decoration: none;
  
}
.fc qdxPrintCF a {
  text-decoration: none;
  color: #706e80;
}
.actionFontSize{
	font-size:15px!important;
}


.table-responsive{
	margin:100px 0;
	border: 2px solid #e3e6f0;
}
.table {
    width: 100%;
    margin-bottom: 0rem;
    color: #858796;
}
.card-body {
   
    padding: 1.25rem 1.25rem 0rem 1.25rem;
}
.noteSalary{
	font-size:14px;
}

img{
	height: 126px;
    width: 195px;

}
.qdxheading{
	padding: 15px 0px 15px 185px;
    font-weight: 700;
    color: black;
}
.qdxp{
	padding: 10px 0px 0px 215px;
    font-size: 13px;
	color:black;
	
}
.qdxbl{
	border-bottom: 2px solid #e3e6f0;
	
}
.namepb{
	border-right: 2px solid #e3e6f0;
	
}
.qdxCenter{
	text-align:center;
}
.qdxPrintCF{
	color:black;
	
}
 </style>
        
	
        <!-- Content Wrapper -->
        <div id="content-wrapper bg-gradient-primary" class="d-flex flex-column" style="margin-top:50px; margin-bottom:50px; width:1050px!important;">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    
					<div class="card shadow mb-4" style="margin-bottom:100px; width: 1020px;">
                        
						
                        
                    <!-- Content Row -->
					  <!-- Area Chart -->
						<div class="shadow ">
							
							
							
							<div class="card-body">
							
							
							<br style=" margin-bottom:10px; margin-top:13px;">
							
								
								<div class="table-responsive">
									<table class="table table-bordered  " id="dataTable" width="100%">
										
										<thead>
											<tr>
												<th colspan="5" class="fc qdxPrintCF" style="padding-bottom:0px!important;">
												<div class="row qdxbl">
												<div class="qdxCenter"><h3 class="qdxheading"><?php echo COMPANY_NAME; ?></h3>
												
												
												</div>
												</div>
												<div class="row qdxbl">
													<h6 class="qdxp">Salary Statement for the Month of March, 2021</h6>
												</div>
												<div class="row ">
												<div class="col-lg-6 col-md-6 col-sm-6 namepb qdxCenter">
													<h4 style="padding: 8px 8px 0px 0px;">Employee Name</h4>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-6 qdxCenter">
													<h4 style="padding: 8px 8px 0px 0px;">Ghufran Ahmad</h4>
												</div>
												</div>
												
												</th>
												<th class="fc qdxPrintCF"><img class="logoPrint" src="<?= base_url("Assets/img/qdxPrintLogo.png") ?>"  alt="Cinque Terre"></th>
													
											</tr>
										</thead>
										
										<tbody>
											<tr>
												
												<td colspan="2" class="fc qdxPrintCF"><div class=""><h5>Employee Number</h5></div></td>
												<td class="fc qdxPrintCF"><div class=""><h5>QGS12</h5></div></td>
												<td colspan="2" class="fc qdxPrintCF">Joining Date</td>
												<td class="fc qdxPrintCF">4-Jul-2017</td>
													
											</tr>
											<tr>
												
												<td colspan="2" class="fc qdxPrintCF">Employee Name</td>
												<td class="fc qdxPrintCF">Employee Name</td>
												<td colspan="2" class="fc qdxPrintCF">Designation</td>
												<td class="fc qdxPrintCF">Graphic Designer</td>
												
											</tr>
											
											<tr>
												
												<td colspan="2" class="fc qdxPrintCF">Days Presents</td>
												<td class="fc qdxPrintCF">22</td>
												<td colspan="2" class="fc qdxPrintCF">Paid Leaves</td>
												<td class="fc qdxPrintCF">3CL</td>
												
											</tr>
											<tr>
												
												<td colspan="2" class="fc qdxPrintCF">Accounts Details</td>
												<td class="fc qdxPrintCF">56498732156</td>
												<td colspan="2" class="fc qdxPrintCF">Account Bank</td>
												<td class="fc qdxPrintCF">IndusInd Bank</td>
												
											</tr>
											<tr>
												
												<td colspan="2" class="fc qdxPrintCF">Salary for the Month</td>
												<td class="fc qdxPrintCF">March 2020</td>
												<td colspan="2" class="fc qdxPrintCF">Leave Without Pay</td>
												<td class="fc qdxPrintCF">N/A</td>
												
											</tr>
											<tr>
												
												<td colspan="3" class="fc qdxPrintCF"><div class="qdxCenter"><h5>Earnings</h5></div></td>
												<td colspan="3" class="fc qdxPrintCF"><div class="qdxCenter"><h5>Deductions</h5></div></td>
												
												
											</tr>
											
											<tr>
												
												<td colspan="2" class="fc qdxPrintCF"></td>
												<td class="fc qdxPrintCF">Amount</td>
												<td colspan="2" class="fc qdxPrintCF"></td>
												<td class="fc qdxPrintCF">Amount</td>
												
											</tr>
											
											<tr>
												
												<td colspan="2" class="fc qdxPrintCF">Basic Salary</td>
												<td class="fc qdxPrintCF"></td>
												<td colspan="2" class="fc qdxPrintCF">E. Provident Fund</td>
												<td class="fc qdxPrintCF">0</td>
												
											</tr>
											<tr>
												
												<td colspan="2" class="fc qdxPrintCF">Dearness Allowance</td>
												<td class="fc qdxPrintCF">1000</td>
												<td colspan="2" class="fc qdxPrintCF">ESI</td>
												<td class="fc qdxPrintCF">0</td>
												
											</tr>
											<tr>
												
												<td colspan="2" class="fc qdxPrintCF">HRA</td>
												<td class="fc qdxPrintCF">2000</td>
												<td colspan="2" class="fc qdxPrintCF">Professional Tax</td>
												<td class="fc qdxPrintCF">0</td>
												
											</tr>
											
											<tr>
												
												<td colspan="2" class="fc qdxPrintCF">Conveyance</td>
												<td class="fc qdxPrintCF">1000</td>
												<td colspan="2" class="fc qdxPrintCF">I. Tax</td>
												<td class="fc qdxPrintCF">0</td>
												
											</tr>
											
											<tr>
												
												<td colspan="2" class="fc qdxPrintCF">Medical Allowance</td>
												<td class="fc qdxPrintCF">1000</td>
												<td colspan="2" class="fc qdxPrintCF">Loan</td>
												<td class="fc qdxPrintCF">0</td>
												
											</tr>
											
											<tr>
												
												<td colspan="2" class="fc qdxPrintCF">Mobile Expenses</td>
												<td class="fc qdxPrintCF">1000</td>
												<td colspan="2" class="fc qdxPrintCF">Advance</td>
												<td class="fc qdxPrintCF">0</td>
												
											</tr>
											
											<tr>
												
												<td colspan="2" class="fc qdxPrintCF">Special Allowance</td>
												<td class="fc qdxPrintCF">1000</td>
												<td colspan="2" class="fc qdxPrintCF">Misc.Deduction</td>
												<td class="fc qdxPrintCF"></td>
												
											</tr>
											
											<tr>
												
												<td colspan="2" class="fc qdxPrintCF">Performance Incentives</td>
												<td class="fc qdxPrintCF"></td>
												<td colspan="2" class="fc qdxPrintCF"></td>
												<td class="fc qdxPrintCF"></td>
												
											</tr>
											
											<tr>
												
												<td colspan="2" class="fc qdxPrintCF">Arrears/Other Ern.</td>
												<td class="fc qdxPrintCF">0</td>
												<td colspan="2" class="fc qdxPrintCF"></td>
												<td class="fc qdxPrintCF">0</td>
												
											</tr>
											
											<tr>
												
												<td colspan="2" class="fc qdxPrintCF"><div class="qdxCenter"><h5>Total Earnings</h5></div></td>
												<td class="fc qdxPrintCF">2000</td>
												<td colspan="2" class="fc qdxPrintCF">Total Deduction</td>
												<td class="fc qdxPrintCF"></td>
												
											</tr>
											
											<tr>
												
												<td colspan="2" class="fc qdxPrintCF"><div class="qdxCenter"><h5>Net Salary Rs.</h5></div></td>
												<td colspan="4" class="fc qdxPrintCF"><div class="qdxCenter"><h5>Net Salary Rs.</h5></div></td>
												
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