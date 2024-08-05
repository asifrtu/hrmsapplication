<?php include('header.php'); ?>
<?php include('aboutUserSidebar.php'); ?>
<style>
 .addempbtn a {
  display: block;
  color: white;
  
  text-decoration: none;
}
.aboutFont{
	color:#6f42c1;
	font-weight: 700;
}
.aboutFontName{
	color:#6f42c1;
	font-weight: 800;
    font-size: 20px;
}

.ColorSecondary{
	background-color:#6f42c1;
	padding: .35rem 1.25rem!important;
	
}

.leaveSubmitBtn{
	margin-left: 355px;
	color:white;
    background-color: #6f42c1;
    
}

.card{
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid #c8ade9;
    border-radius: 2px 2px 0px 0px;
}

.card-header:first-child {
    border-radius: 2px 2px 0px 0px;
}
.employeeForm{
	border: 1px solid #858796;
    border-radius: 5px;
}
.empBtn{
    float:center;
    background: #1C304C;
    color: white;
    font-weight: 400;
    border-radius: 2px;
    padding: .2em 3em 0.2em 3em;
    border: none !important;
    
    margin-bottom: 62px;
    margin-left: 284px;
    margin-top: 20px;
   
}
.addEmpBtn{
    float:center;
    background: #7db135;
    color: white;
    font-weight: 400;
    border-radius: 2px;
    padding: .2em 0.5em 0.2em 0.5em;
    border: none !important; 
	margin-top: 10px;
    margin-left: 15px;
}
.tnUemp {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
 
}
.tnemp {
  float: left;
	
}
.tnemp a {
  display: block;
  color: ColorSecondaryPre;
  text-align: center;
  padding: 8px 10px;
  text-decoration: none;
}
.tnemp a:hover{
  
}

.allEmpAttendence{
	color: white;
    background-color: #6f42c1;
    text-align: center;
}
.form-group{margin: 0rem 0!important;}
.qdxChip{
	margin-top: 10px;
    display: inline-block;
    margin-right: 10px;
    font-size: 13px;
    font-weight: 400;
    color: #333;
    border: 1px solid #ccc;
    border-radius: 14px;
    padding: 4px 10px;
}
.qdxJOV{
    color: #4c3f5e;
    font-size: 18px;
}
.qdxfontJOV{
	background-color: white;
}
.JOVp{
	
	color: #343434;
    font-size: 14px;
    margin-bottom: 5px;
	line-height:24px;	

}

.logoQdx{
	width: 60px;
    margin-left: 57px;
}


#style-7::-webkit-scrollbar-track
{
	-webkit-box-shadow: inset 0 0 6px #504a94;
	background-color: #F5F5F5;
	border-radius: 10px;
}

#style-7::-webkit-scrollbar
{
	width: 10px;
	background-color: #F5F5F5;
}

#style-7::-webkit-scrollbar-thumb
{
	border-radius: 10px;
    background-color: #1C304C;
}
.scrollbar
{
	
	height: 500px;
	width: auto;
	background: #F5F5F5;
	overflow-y: scroll;
	
}

.qdxfontawesome{
	padding: 4px;
    border: 1px solid #1C304C;
    color: #1C304C;
    margin-right: 12px;
}
.qdxJOV1{
    font-size: 15px;
	font-weight:bold;
    color: #252525;
}
.col-lg-1{
    max-width: 4.33333%;
}
.card-header {
    padding: 0.25rem 1.25rem!important;
}
 </style>
       
        <!-- Content Wrapper -->
        <div id="content-wrapper bg-gradient-primary" class="container-fluid col-lg-10" style=" margin-bottom:50px; padding-left:10px;">
		
            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="">

                    <!-- Page Heading -->
                    

                    <!-- Content Row -->
					  <!-- Area Chart -->
							
                    
					<div class=" shadow mb-4" style="margin-bottom:100px;background: white;">
                        <div class="card-header ColorSecondaryPre">
						<div class="row d-flex pl-1 ">

<div class="col-lg-1"><a href="<?php echo base_url() ?>index.php/hrzone/dashboard/wall" style="color: white;font-size: 15px;"><i class="fa fa-home" aria-hidden="true"></i></a></div>
<div class="col-lg-10"> <i style="font-size: 10px;color: white;" class="fas fa-chevron-right"></i><span class="breadcrumb_text" style="font-size: 15px;color: #fff;font-weight: 600;"> &nbsp;Company Info</span></div>
</div>
                        </div>
                        <div class="card-body">
						
							
						<div class="row">

                        <!-- Area Chart -->
							
								
							
							
							<div class="col-lg-12 ">
							<div class="card-body scrollbar" id="style-7" style="background-color:white;border: 1px solid #dbdbdb;">
								<div class="row">
								<div class="col-lg-10 d-flex " >
								
								<p class="JOVp"><i class="qdxfontawesome fa fa-eye" aria-hidden="true"></i></p>
								<span class="qdxJOV">Our Vision &amp; Mission</span>
								</div>
								<div class="col-lg-2">
								<p><img class="logoQdx" src="<?= base_url("Assets/img/qdxPrintLogo.png") ?>"  alt="Cinque Terre"></p>
								</div>
								</div>
								<p class="JOVp" style="padding-left: px;padding-right: 101px;margin-top: -44px!important;">To revolutionize the online world with the addition of supreme quality websites and end the digital mediocrity. We are on a mission to become the most trustworthy provider of web and app design solutions in the market. We are on a road to achieve it with our adept team and focus on quality.</p>
							
								
							<div class="d-flex" style="    margin-top: 30px;">
								<p class="JOVp"><i class="qdxfontawesome fas fa-hand-holding-usd"></i></p>
								<span class="qdxJOV">Values</span>
                                </div>
								<ul style="color: #343434;font-size: 14px; color: #343434;font-size: 14px;padding-left: 58px;">
								<li>Digital Excellence.</li>
								<li>Trusted Partners. [We’re the guide the customers need on their growth journey.]</li>
								<li>We’ve got each other’s back. [We help each other out; we’re all in it together.]</li>
								<li>We see things end to end. [We take ownership and get things done.]</li>
								<li>Think Big. Be Bold.</li>
								<li>Customer growth. [We add the multiplier effect to the customers’ business.]</li>
								<li>Abundant Positivity. [Yes, we can!]</li>
								</ul>
							
								<span class="qdxJOV1 mb-3" style="padding-left: 8px;">Significance of <?php echo COMPANY_NAME; ?></span>
								<p class="JOVp mt-2 mb-2" style="padding-left: 8px;text-align:justify; "><?php echo COMPANY_NAME; ?> is a leading IT Solutions and Services Company offering its expertise in custom application development, application management outsourcing, consulting, and system integration. Our focus has always been on delivering proven business solutions that provide measurable results to our clients. <?php echo COMPANY_NAME; ?> today is the realization of a vision shared by young entrepreneurs. After starting out in a single room, company now includes a team of 100+ programmers, designers and analyst working full time under one roof.</p>
						
								<span class="qdxJOV1 mb-3"  style="padding-left: 8px;">Our company beliefs can be summarized in these statements:</span>
								<ul class="mt-2" style="color: #343434;font-size: 14px; padding-left: 58px;">
								<li>To strive for excellence and deliver the best results possible to our clients.</li>
								<li>To maintain uncompromising ethics and integrity.</li>
								<li>To continuously grow, share and learn, as the web evolves.</li>
								<li>To communicate effectively and use client feedback for self- improvement and growth.</li>
								</ul>
								

                                <div class="d-flex" style="    margin-top: 30px;">
								<p class="JOVp"><i class="qdxfontawesome fas fa-rocket"></i></p>
								<span class="qdxJOV">Our Team</span>
                                </div>
								<p class="JOVp" style="padding-left:8px; text-align:justify;">We believe that a team where each member strives to deliver his/her best is the most valuable asset of a company. Therefore, we hire the web and designers only through a stringent process. Our strong-knit of web designers, web developers, graphic designers, content developers, and graphics designers deliver something extraordinary each time they work on a project</p>
							
								
							</div>
							
							
							
							</div>

                        <!-- Pie Chart -->
                        
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
    <!-- Model Start -->
	
	
	
	<div class="modal fade" id="educationModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
   
    
      <!-- Modal content-->
      <div class="modal-content" style="margin: 196px 9px 0 259px;  width: 89%!important; background-color: #1f1c40;">
	  
		
                        <div class="card-header" style="padding:0!important; background-color: #1f1c40;">
							
							<div class="row">
                            <h6 class="ColorPrimary" style="padding-left: 302px; padding-top: 10px;">Educational Qualification</h6>
							<button style="margin-left:220px;" type="button" class="close" data-bs-dismiss="modal">&times;</button>
							</div>
                        </div>
									
					<div class="modal-body">
					
					<form  action="/action_page.php" style="background-color: #fff; border-radius:5px;">
							
									<div >
										
									<div class="table-responsive">
									<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
										<thead>
											<tr>
												<th>Exam Passed</th>
												<th>Year</th>
												<th>Board/University</th>
												<th>%Marks</th>
												
											</tr>
										</thead>
										
										<tbody>
											<tr>
												<td>B.Com</td>
												<td>2014</td>
												<td>Delhi University</td>
												<td>60%</td>
												
											</tr>
											<tr>
												<td>B.Com</td>
												<td>2014</td>
												<td>Delhi University</td>
												<td>60%</td>
												
											</tr>
											<tr>
												<td>B.Com</td>
												<td>2014</td>
												<td>Delhi University</td>
												<td>60%</td>
												
											</tr>
											<tr>
												<td>B.Com</td>
												<td>2014</td>
												<td>Delhi University</td>
												<td>60%</td>
												
											</tr>
											
										</tbody>
									</table>
								</div>
							
									
							
										
								
									
							<button type="submit" class="empBtn" style="margin-bottom:50px;">Save</button>
							
							</div>
							</form>
							</div>
										</div>
						
						
                   

                    <!-- Content Row -->
                    
        
								
        
      </div>
      
    </div>
  								
  	               
    <!-- Model End -->
<!-- Model Start CoursesModel -->
	
	
	<div class="modal fade" id="CoursesModel" role="dialog">
    <div class="modal-dialog modal-lg">
    
   
    
      <!-- Modal content-->
      <div class="modal-content" style="margin: 196px 9px 0 259px;  width: 89%!important; background-color: #1f1c40;">
	  
		
                        <div class="card-header" style="padding:0!important; background-color: #1f1c40;">
							
							<div class="row">
                            <h6 class="ColorPrimary" style="padding-left: 302px; padding-top: 10px;">Courses</h6>
							<button style="margin-left:235px;" type="button" class="close" data-bs-dismiss="modal">&times;</button>
							</div>
                        </div>
									
					<div class="modal-body">
					
					<form  action="/action_page.php" style="background-color: #fff; border-radius:5px;">
							
									<div >
										
									<div class="table-responsive">
									<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
										<thead>
											<tr>
												<th>Exam Passed</th>
												<th>Year</th>
												<th>Board/University</th>
												<th>Marks</th>
												
											</tr>
										</thead>
										
										<tbody>
											<tr>
												<td>Google Adword</td>
												<td>2014</td>
												<td>Online</td>
												<td>60%</td>
												
											</tr>
											
										</tbody>
									</table>
								</div>
							
									
							
										
								
									
							<button type="submit" class="empBtn" style="margin-bottom:50px;">Save</button>
							
							</div>
							</form>
							</div>
										</div>
						
						
                   

                    <!-- Content Row -->
                    
        
								
        
      </div>
      
    </div>
  								
  	               
    <!-- CoursesModel End -->
<!-- Model Start BankAccountModal -->
	
	
	<div class="modal fade" id="BankAccountModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
   
    
      <!-- Modal content-->
      <div class="modal-content" style="margin: 196px 9px 0 259px;  width: 89%!important; background-color: #1f1c40;">
	  
		
                        <div class="card-header" style="padding:0!important; background-color: #1f1c40;">
							
							<div class="row">
                            <h6 class="ColorPrimary" style="padding-left: 302px; padding-top: 10px;">Bank Account</h6>
							<button style="margin-left:235px;" type="button" class="close" data-bs-dismiss="modal">&times;</button>
							</div>
                        </div>
									
					<div class="modal-body">
					
					<form  action="/action_page.php" style="background-color: #fff; border-radius:5px;">
							
									<div >
										
									<div class="table-responsive">
									<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
										<thead>
											<tr>
												<th>Bank</th>
												<th>Account No.</th>
												<th>Branch</th>
												<th>IFSC Code</th>
												<th>PAN</th>
												<th>Aadhar</th>
											</tr>
										</thead>
										
										<tbody>
											<tr>
												<td>PNB</td>
												<td>01234567891011</td>
												<td>Mehrauli Road</td>
												<td>PUNB0309300</td>
												<td>ABCD12345</td>
												<td>4578956422258</td>
											</tr>
											
										</tbody>
									</table>
								</div>
							</div>
							
									
							
										
								
									
							<button type="submit" class="empBtn" style="margin-bottom:50px;">Save</button>
							
							</div>
							</form>
							</div>
										</div>
						
						
                   

                    <!-- Content Row -->
                    
        
								
        
      </div>
      
    </div>
            
    <!-- BankAccountModal End -->
<!-- Model Start DetailsModal -->
	
	
	<div class="modal fade" id="DetailsModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
   
    
      <!-- Modal content-->
      <div class="modal-content" style="margin: 196px 9px 0 259px;  width: 89%!important; background-color: #1f1c40;">
	  
		
                        <div class="card-header" style="padding:0!important; background-color: #1f1c40;">
							
							<div class="row">
                            <h6 class="ColorPrimary" style="padding-left: 302px; padding-top: 10px;">Details</h6>
							<button style="margin-left:235px;" type="button" class="close" data-bs-dismiss="modal">&times;</button>
							</div>
                        </div>
									
					<div class="modal-body">
					
					<form  action="/action_page.php" style="background-color: #fff; border-radius:5px;">
							
									<div >
										
									<div class="table-responsive">
										<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
											<thead>
												<tr>
													<th>Post/Designation</th>
													<th>Organisation</th>
													<th>Duration(From To)</th>
													<th>Experience</th>
													<th>Salary</th>
												</tr>
											</thead>
											
											<tbody>
												<tr>
													<td>Graphic Designer</td>
													<td>ABC PVT. LTD.</td>
													<td>April 2018 - January 2019</td>
													<td>6 months</td>
													<td>10,000/-</td>
												</tr>
												
											</tbody>
										</table>
									</div>
							
									
							
										
								
									
							<button type="submit" class="empBtn" style="margin-bottom:50px;">Save</button>
							
							</div>
							</form>
							</div>
										</div>
						
						
                   

                    <!-- Content Row -->
                    
        
								
        
      </div>
      
    </div>
  								
  	               
    <!-- DetailsModal End -->
<!-- Model Start SalaryModal -->
	
	
	<div class="modal fade" id="SalaryModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
   
    
      <!-- Modal content-->
      <div class="modal-content" style="margin: 196px 9px 0 259px;  width: 89%!important; background-color: #1f1c40;">
	  
		
                        <div class="card-header" style="padding:0!important; background-color: #1f1c40;">
							
							<div class="row">
                            <h6 class="ColorPrimary" style="padding-left: 302px; padding-top: 10px;">Salary</h6>
							<button style="margin-left:235px;" type="button" class="close" data-bs-dismiss="modal">&times;</button>
							</div>
                        </div>
									
					<div class="modal-body">
					
					<form  action="/action_page.php" style="background-color: #fff; border-radius:5px;">
							
									<div >
										
									<div class="table-responsive">
										<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
											<thead>
												<tr>
													<th>Details</th>
													<th>Yearly</th>
													<th>Grand Total</th>
													<th></th>
													<th>Accounts</th>
													<th>Salary</th>
												</tr>
											</thead>
											
											<tbody>
												<tr>
													<td>Gross Salary</td>
													<td>1,80,000</td>
													<td></td>
													<td></td>
													<td>Monthly</td>
													<td>Gross PM</td>
												</tr>
												<tr>
													<td>Basic</td>
													<td>1,70,000</td>
													<td></td>
													<td></td>
													<td>15,000</td>
													<td></td>
												</tr>
												<tr>
													<td>HRA</td>
													<td>1,80,000</td>
													<td></td>
													<td></td>
													<td>9,750</td>
													<td></td>
												</tr>
												<tr>
													<td>Dearness Allowance</td>
													<td>9,000</td>
													<td></td>
													<td></td>
													<td>1,500</td>
													<td></td>
												</tr>
												<tr>
													<td>Conveyance</td>
													<td>9,000</td>
													<td></td>
													<td></td>
													<td>1,500</td>
													<td></td>
												</tr>
												<tr>
													<td>Medical</td>
													<td>9,000</td>
													<td></td>
													<td></td>
													<td>1,500</td>
													<td></td>
												</tr>
												<tr>
													<td>Educational</td>
													<td>9,000</td>
													<td></td>
													<td></td>
													<td>1,500</td>
													<td></td>
												</tr>
												<tr>
													<td>Special Allowance</td>
													<td>9,000</td>
													<td></td>
													<td></td>
													<td>1,500</td>
													<td></td>
												</tr>
												<tr>
													<td>P.F Bonus(if applicable)</td>
													<td>9,000</td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
												</tr>
												<tr>
													<td>Other Costs</td>
													<td>12,000</td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
												</tr>
												<tr>
													<td>Other Costs</td>
													<td>12,000</td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
												</tr>
												<tr>
													<td></td>
													<td>CTC</td>
													<td>2,16,360</td>
													<td></td>
													<td></td>
													<td>15,000/</td>
												</tr>
												
											</tbody>
										</table>
									</div>
								</div>
							
									
							
										
								
									
							<button type="submit" class="empBtn" style="margin-bottom:50px;">Save</button>
							
							</div>
							</form>
							</div>
										</div>
						
						
                   

                    <!-- Content Row -->
                    
        
								
        
      </div>
      
    </div>
  								
  	               
    <!-- SalaryModal End -->
<!-- Model Start AttachmentsModal -->
	
	
	<div class="modal fade" id="AttachmentsModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
   
    
      <!-- Modal content-->
      <div class="modal-content" style="margin: 196px 9px 0 259px;  width: 89%!important; background-color: #1f1c40;">
	  
		
                        <div class="card-header" style="padding:0!important; background-color: #1f1c40;">
							
							<div class="row">
                            <h6 class="ColorPrimary" style="padding-left: 302px; padding-top: 10px;">Attachments</h6>
							<button style="margin-left:230px;" type="button" class="close" data-bs-dismiss="modal">&times;</button>
							</div>
                        </div>
									
					<div class="modal-body">
					
					<form  action="/action_page.php" style="background-color: #fff; border-radius:5px;">
							
									<div >
										
									<div class="table-responsive">
										<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
											<thead>
												<tr>
													<th>S.No</th>
													<th>Files</th>
													<th>View</th>
													<th>Download</th>
													
												</tr>
											</thead>
											
											<tbody>
												<tr>
													<td>1.</td>
													<td>Abc.doc</td>
													<td style="text-align:center;"><span><i class="fas fa-eye"></i></span></td>
													<td style="text-align:center;"><span ><i class="fas fa-download"></i></span></td>
													
												</tr>
												
											</tbody>
										</table>
									</div>
							
									
							
										
								
									
							<button type="submit" class="empBtn" style="margin-bottom:50px;">Save</button>
							
							</div>
							</form>
							</div>
										</div>
						
						
                   

                    <!-- Content Row -->
                    
        
								
        
      </div>
      
    </div>
 								
  	               
    <!-- AttachmentsModal End -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

<?php include('footer.php'); ?>