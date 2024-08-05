<?php include('header.php'); ?>

<?php
$window_width = "<script type='text/javascript'>document.write(window.innerWidth);</script>";

    include('commonSidebar.php'); 

?>
<style>
 

.table thead th{
    border-bottom: none!important;
    padding: 10px 11px!important;
    font-size: 13px;
    color: #343434;
}
.table tbody td{
    padding: 8px 14px!important;
    border-bottom: 1px solid #ddd;
    border-right: 1px solid #ddd;
    color: #343434;
    font-size: 12px;
}

.ColorSecondary{
	background-color:#1c304c;
	padding: .35rem 1.25rem!important;
	
}

.leaveSubmitBtn{
	margin-left: 355px;
	color:white;
    background-color: #504a94;
    
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
	margin-top: 20px;
	margin-left: 55px;
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
    margin-bottom: 0px;
    font-size: 14px;
    color: #fff!important;
    font-weight: 600;
  text-decoration: none;
}


.card-header{
   
    padding: 7px 10px;
    margin-bottom: 5px;
    border-radius: 2px;
    border: 1px solid #c4b4cc;
}
.card-header:first-child {
    border-radius: calc(.2rem - 1px) calc(.2rem - 1px) 0 0!important;
}
.tnemp a:hover{
  
}

.allEmpAttendence{
	color: white;
    background-color: #504a94;
    text-align: center;
}


.netASR{
	background: #0dd0c3;
    color: white;
}
.netASR td{
color:white!important;
font-weight	:600;
}

.tnUEdit {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
 
}
.tnEdit {
  
  text-align:center;
  padding:2px 0;
	
}

.tnEdit a {
  
  color: #706e80;
  text-align: center;
  padding: 8px 11px;
  text-decoration: none;
  
}
.col-lg-1{
    max-width: 4.33333%;
}

.card-body{
    padding-left: 0px;
    padding-right: 0px;
    padding-top: 10px;
    padding-bottom:0px;
}
.mb-4{
    padding-right:30px!important;
    margin-bottom:0px!important;
    padding-left: 23px!important;
}
.form-group{
    margin:0rem!important;
    padding-left:25px;
}
@media screen and (min-width: 992px){
	.img-thumbnail{
    max-width: 100%;
    width: 80%;
    height: auto;
    border:none!important;
    border-radius:0px!important;
    padding:0rem!important;
}
.hrBreakProfile{
	border-top: 1px solid #8c8b8b; 
	margin-bottom:20px;
}
	.col-lg-3{
    max-width:23%!important;
    background: #0dd0c3;
    margin-left: 12px;
    
    padding-top: 13px;
	}
	.profilDetails{
		padding: 13px;
	}
	.mobileBack{
		color: #1C304C;
		padding-top:20px;
		
	}
	.aboutFontcol9{
	color: #1C304C;
    /* font-size: 15px; */
    font-size: 1em;
    font-weight: 500;
    font-family: 'proxima_novaregular'; 
	}
	.aboutFontHeadcol9{
		color: #1C304C;
		/* font-size: 15px; */
		font-size: 1em;
		font-weight: 400;
		font-family: 'proxima_novaregular'; 
	}
		.aboutFont{
		color: #fff;
		/* font-size: 15px; */
		font-size: 1em;
		font-weight: 500;
		font-family: 'proxima_novaregular'; 
	}
	.aboutFontHead{
		color: #fff;
		/* font-size: 15px; */
		font-size: 1em;
		font-weight: 400;
		font-family: 'proxima_novaregular'; 
	}

	.aboutFontName{
		color: #fff;
		font-weight: 500;
		padding: 14px 0;
		font-family: 'proxima_novaregular'; 
		font-size: 18px;
	}
}
.imagealign{
		text-align: center;
	}
@media screen and (max-width: 792px){
	.img-thumbnail{
    max-width: 100%;
    width: 50%;
    height: auto;
    border:none!important;
    border-radius:0px!important;
    padding:0rem!important;
}
	.col-lg-3{
    
    background: #0dd0c3;
    margin-left: 12px;
	margin-right: 12px;
   
    padding-top: 13px;
	}
	.hrBreakProfile{
	border-top: none; 
	margin-bottom:0px;
}
	.mobileBack{
		background: #0dd0c3;
		padding-left: 10px!important;
    	padding-right: 10px;
		padding-bottom: 20px;
	}
	div.hr{
		display: none;
	}
	.form-group br{
		display: none;
	}
	.aboutFontcol9{
	color: #fff;
    /* font-size: 15px; */
    font-size: 1em;
    font-weight: 500;
    font-family: 'proxima_novaregular'; 
}
.aboutFontHeadcol9{
	color: #fff;
    /* font-size: 15px; */
    font-size: 1em;
    font-weight: 400;
    font-family: 'proxima_novaregular'; 
}
	.aboutFont{
	color: #fff;
    /* font-size: 15px; */
    font-size: 1em;
    font-weight: 500;
    font-family: 'proxima_novaregular'; 
}
.aboutFontHead{
	color: #fff;
    /* font-size: 15px; */
    font-size: 1em;
    font-weight: 400;
    font-family: 'proxima_novaregular'; 
}

.aboutFontName{
    color: #fff;
    font-weight: 500;
	padding: 14px 0;
	font-family: 'proxima_novaregular'; 
    font-size: 18px;
}
}

label{
    color: #fff;
    font-size: 14px;
    margin-bottom: 10px;    
}
.actionFontSize{
	font-size:15px!important;
    color: #00d3c3!important;
}

.userDetailsPadding{
	padding-bottom: 5px;
}
.userDetailsAdd{
	padding-bottom: 5px;
	font-weight: 500;
}
.profileDetailsFont{
	font-weight: 500;
    font-size: 1.2rem;
    letter-spacing: .15px;
    color: #fff;
}
.hrProfileDevider{
	margin-top: 0;
    margin-bottom: 0;
	border: 0;
    border-top: 1px solid #e8eaef;
}
 </style>
       
        <!-- Content Wrapper -->
        <div id="content-wrapper bg-gradient-primary" class="container-fluid col-lg-10" style=" padding-left:10px; margin-bottom:50px; ">
        
            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="">

                    <!-- Page Heading -->
                    

                    <!-- Content Row -->
					  <!-- Area Chart -->
							
                    
					<div class="card shadow" style="margin-bottom:10px;">
                        <div class="ColorSecondaryPre" style="padding: 5px 5px 5px 10px;">
						<div class="d-flex">
                        <div><a href="<?=site_url('hrzone/dashboard/wall');?>" style="color: #fff;font-size: 15px;"><i class="fa fa-home" aria-hidden="true"></i></a></div>
                        <div> &nbsp;&nbsp;<i style="font-size: 10px;color: #00d3c3;" class="fas fa-chevron-right"></i><span class="breadcrumb_text" style="font-size: 15px;color: #00d3c3;font-weight: 600;">&nbsp; Profile&nbsp;&nbsp;<i style="font-size: 10px;color: #00d3c3;" class="fas fa-chevron-right"></i>&nbsp;&nbsp;<?php echo strtoupper($UserInfo->name); ?></span></div>
                        </div>
                            
                        </div>
						
                        <div class="card-body" style="padding-top: 0px!important;">
						
							
						<div class="row">

                        <!-- Area Chart -->
							<div class="col-lg-3">
							<div class="profilDetails">
							<div class="imagealign">
								<?php if(!empty($EmployeeProfileImage->EmpProfileImage)){ ?>
								<img width="200px" src="<?php echo base_url();?>upload/UserProfileImage/<?php  echo $EmployeeProfileImage->EmpProfileImage; ?>" class="img-thumbnail" alt="Cinque Terre">
								<?php } else{ ?>
								<img width="200px" src="<?php echo base_url();?>upload/UserProfileImage/WhatsApp_Image_2021-12-01_at_2_37_45_PM.jpeg" class="img-thumbnail" alt="Cinque Terre">
								<?php }
								?>
								<div class="p-image">
								<a href="#" data-toggle="modal" data-target="#myModal" style="text-decoration:none;"><i style="color: #fff;margin-left: 29px;font-size: 14px;" class="fa fa-camera upload-button"><span style="color:#fff;font-size: 11px;margin-left: 5px;font-family: -webkit-pictograph;">Update Profile Picture </span></i>
								<span> </span>
								</a>

								</div>
							</div>
							<label class="aboutFontName"><?php echo strtoupper($UserInfo->name); ?></label><br>							
							<div class="userDetailsPadding d-flex">
								<div class="mr-auto">
									<span class="aboutFontHead">Father' Name:</span>
								</div>
								<div class="aboutFont">
									<?php if(!empty($EmployeeDetails->fatherName)):  ?>
									<?php echo $EmployeeDetails->fatherName; ?>
									<?php else: ?>
										N/A
									<?php endif; ?>
								</div>
							</div>
							
							<div class="d-flex userDetailsPadding">
								<div class="mr-auto">
								<span class="aboutFontHead">DOB:</span>
									
								</div>
								<div class="aboutFont">
									<?php if($EmployeeDetails->dob != 0000-00-00):  ?>
									<?php echo $EmployeeDetails->dob; ?>
									<?php else: ?>
										N/A
									<?php endif; ?>
								</div>
							</div>
							<div class="d-flex userDetailsPadding">
								<div class="aboutFontHead mr-auto">
								Marital status:
								</div>
								<div class="aboutFont">
									<?php if(!empty($EmployeeDetails->maritalStatus)):  ?>
									<?php echo $EmployeeDetails->maritalStatus; ?>
									<?php else: ?>
										N/A
									<?php endif; ?>
								</div>
							</div>

							<div class="d-flex userDetailsPadding">
								<div class="mr-auto aboutFontHead">
								Spouse Name:
								</div>
								<div class="aboutFont">
									<?php if(!empty($EmployeeDetails->spouseName)):  ?>
									<?php echo $EmployeeDetails->spouseName; ?>
									<?php else: ?>
										N/A
									<?php endif; ?>
								</div>
							</div>

							
							
							
							
							<label class="aboutFontHead userDetailsPadding">Permanent Address:</label><br> 
						
							<?php if(!empty($EmployeeDetails->permanentAddress)):  ?>
								<label class="userDetailsAdd"><?php echo $EmployeeDetails->permanentAddress; ?></label><br>
								<?php else: ?>
								<label class="userDetailsAdd">N/A</label><br>
								<?php endif; ?>
							
							<label class="aboutFontHead userDetailsPadding">Local Address:</label><br> 
							
							<?php if(!empty($EmployeeDetails->localAddress)):  ?>
								<label class="userDetailsAdd"><?php echo $EmployeeDetails->localAddress; ?></label><br>
								<?php else: ?>
								<label class="userDetailsAdd">N/A</label><br>
								<?php endif; ?>
							</div>
							</div>
							<div class="col-lg-9">
							
							
							
								<div class="mobileBack">
								
								<div class="row">
								<div class="col-lg-6">
								<div class="d-flex userDetailsPadding">
									<div class="mr-auto">
									<span class="aboutFontHeadcol9">Employee ID:</span>
										
									</div>
									<div class="aboutFontcol9">
										<span><?php echo $UserInfo->employee_id; ?></span>
									</div>
								</div>
								</div>
								
								<div class="col-lg-6">
								<div class="d-flex userDetailsPadding">
									<div class="mr-auto">
									<span class="aboutFontHeadcol9">Email:</span>
										
									</div>
									<div class="aboutFontcol9">
									<?php if(!empty($UserInfo->email)):  ?>
										<span><?php echo $UserInfo->email; ?></span>
										<?php else: ?>
								<label class="aboutFontcol9">N/A</label>
								<?php endif; ?>
									</div>
								</div>
								
								
								</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="d-flex userDetailsPadding">
											<div class="mr-auto">
												<span class="aboutFontHeadcol9">Position:</span>	
											</div>
											<div class="aboutFontcol9">
												<?php if(!empty($EmployeeDetails->position)):  ?>
												<span class="aboutFontcol9"><?php echo $EmployeeDetails->position; ?></span>
												<?php else: ?>
												<span class="aboutFontcol9">N/A</span>
												<?php endif; ?>
											</div>
										</div>
									
									
									</div>
									
									<div class="col-lg-6">
										<div class="d-flex userDetailsPadding">
											<div class="mr-auto">
												<span class="aboutFontHeadcol9">Personal Email:</span>	
											</div>
											<div class="aboutFontcol9">
												<?php if(!empty($UserInfo->personalEmail)):  ?>
												<span class="aboutFontcol9"><?php echo $UserInfo->personalEmail; ?></span>
												<?php else: ?>
												<span class="aboutFontcol9">N/A</span>
												<?php endif; ?>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="d-flex userDetailsPadding">
											<div class="mr-auto">
												<span class="aboutFontHeadcol9">Joining:</span>	
											</div>
											<div class="aboutFontcol9">
												<?php if($UserInfo->EmployeejoiningDate != 0000-00-00):  ?>
												<span class="aboutFontcol9"><?php echo $UserInfo->EmployeejoiningDate; ?></span>
												<?php else: ?>
												<span class="aboutFontcol9">N/A</span>
												<?php endif; ?>
											</div>
										</div>
									
									
									</div>
									
									<div class="col-lg-6">
										<div class="d-flex userDetailsPadding">
											<div class="mr-auto">
												<span class="aboutFontHeadcol9">Phone:</span>	
											</div>
											<div class="aboutFontcol9">
												<?php if(!empty($EmployeeDetails->phone)):  ?>
												<span class="aboutFontcol9"><?php echo $EmployeeDetails->phone; ?></span>
												<?php else: ?>
												<span class="aboutFontcol9">N/A</span>
												<?php endif; ?>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="d-flex userDetailsPadding">
											<div class="mr-auto">
												<span class="aboutFontHeadcol9">Exit:</span>	
											</div>
											<div class="aboutFontcol9">
												<?php if($UserInfo->employeeExitDate != 0000-00-00):  ?>
												<span class="aboutFontcol9"><?php echo $UserInfo->employeeExitDate; ?></span>
												<?php else: ?>
												<span class="aboutFontcol9">N/A</span>
												<?php endif; ?>
											</div>
										</div>
									
									
									</div>
									
									<div class="col-lg-6">
										<div class="d-flex userDetailsPadding">
											<div class="mr-auto">
												<span class="aboutFontHeadcol9">Alternate:</span>	
											</div>
											<div class="aboutFontcol9">
												<?php if(!empty($EmployeeDetails->alternatePhone)):  ?>
												<span class="aboutFontcol9"><?php echo $EmployeeDetails->alternatePhone; ?></span>
												<?php else: ?>
												<span class="aboutFontcol9">N/A</span>
												<?php endif; ?>
											</div>
										</div>
									</div>
								</div>
								
								
								</div>
								
								<hr class="hrBreakProfile">
								
							
							<div class="card-header ColorSecondary">
								<span class="profileDetailsFont">Educational Qualification</span>
								</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
										<thead>
											<tr>
												<th>Exam Passed</th>
												<th>Year</th>
												<th>Board/University</th>
												<th>%Marks</th>
												<!-- <th>Action</th> -->
												
												
											</tr>
										</thead>
										
										<tbody>
											<?php if(!empty($EmployeeEducationDetails)):  ?>
									
											<?php	
											
											foreach($EmployeeEducationDetails as $emp): ?>
											<tr id="examPassed_Id">
												<td><?php  echo $emp->examPassed; ?></td>
												<td><?php  echo $emp->examYear; ?></td>
												<td><?php  echo $emp->examBoard; ?></td>
												<td><?php  echo $emp->marks; ?></td>
												<!-- <td>
												<div class=" ">
												<ul class="tnUEdit">
												<li class="tnEdit"><a href="javascript:void(0)" data-EmpEdu="/*<?php  echo $emp->Id; ?>*/" class="Edu_Edit"><i class="actionFontSize fas fa-edit"></i></a></li>
												</ul>

												</div>
												</td> -->
											</tr>
											
											<?php endforeach;  ?>
										<?php else: ?>
										<tr>
										<td colspan="3">Data is Not Available</td>
										<?php endif; ?>

										</tr>
											
										</tbody>
									</table>
								</div>
							</div>
							
							
							<div class="card-header ColorSecondary">
								<span class="profileDetailsFont">Courses</span>
								</div>
							
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
										<thead>
											<tr>
												<th>Exam Passed</th>
												<th>Year</th>
												<th>Board/University</th>
												<th>Marks</th>
												<!-- <th>Action</th> -->
											</tr>
										</thead>
										
										<tbody>
											<?php if(!empty($EmployeeCourseDetails)):  ?>
									
											<?php	
											
											
											foreach($EmployeeCourseDetails as $emp): ?>
											<tr>
												<td><?php  echo $emp->coursePassed; ?></td>
												<td><?php  echo $emp->courseYear; ?></td>
												<td><?php  echo $emp->courseBoard; ?></td>
												<td><?php  echo $emp->courseMarks; ?></td>
												<!-- <td>
												<div class=" ">
												<ul class="tnUEdit">
												<li class="tnEdit"><a href="javascript:void(0)" data-CoursesId="<?php  echo $emp->Id; ?>" class="Courses_Edit"><i class="actionFontSize fas fa-edit"></i></a></li>
												</ul>

												</div>
												</td> -->

											</tr>
											
											<?php endforeach;  ?>
										<?php else: ?>
										<tr>
										<td colspan="3">Data is Not Available</td>
										<?php endif; ?>

										</tr>
											
											
										</tbody>
									</table>
								</div>
							</div>
						
							<div class="card-header ColorSecondary">
								<span class="profileDetailsFont">Bank Account</span>
								</div>				
							
							<div class="card-body">
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
												<!-- <th>Action</th> -->
											</tr>
										</thead>
										
										<tbody>
										
											<?php if(!empty($EmployeeBankInfo)):  ?>
									
											<?php	
											
											
											foreach($EmployeeBankInfo as $emp): ?>
											<tr>
												<td><?php  echo $emp->bankName; ?></td>
												<td><?php  echo $emp->bankAccount; ?></td>
												<td><?php  echo $emp->bankBranch; ?></td>
												<td><?php  echo $emp->bankIFSCCode; ?></td>
												<td>
													<?php if(!empty($EmployeeSalaryInfo->pancard)){  ?>
													<?php echo $EmployeeSalaryInfo->pancard; ?>
													<?php } ?>
													
												</td>

												<td>
													<?php if(!empty($EmployeeSalaryInfo->aadharcard)){  ?>
													<?php echo $EmployeeSalaryInfo->aadharcard; ?>
													<?php } ?>
													
												</td>
												
																								<!-- <td>
												<div class=" ">
												<ul class="tnUEdit">
												<li class="tnEdit"><a href="javascript:void(0)" data-BankId="<?php  echo $emp->Id; ?>" class="Bank_Edit"><i class="actionFontSize fas fa-edit"></i></a></li>
												</ul>

												</div>
												</td> -->
											</tr>
											
											<?php endforeach;  ?>
										<?php else: ?>
										<tr>
										<td colspan="3">Data is Not Available</td>
										<?php endif; ?>

										</tr>
											
											
											
										</tbody>
									</table>
								</div>
							</div>
							<div class="card-header ColorSecondary">
								<span class="profileDetailsFont">Details</span>
								</div>			
								
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
											<thead>
												<tr>
													<th>Post/Designation</th>
													<th>Organisation</th>
													<th>Duration(From To)</th>
													<th>Experience</th>
													<th>Salary</th>
													<!-- <th>Action</th> -->
												</tr>
											</thead>
											
											<tbody>
											
												<?php if(!empty($EmployeePreExp)):  ?>
									
											<?php	
											
											
											foreach($EmployeePreExp as $emp): ?>
											<tr>
												<td><?php  echo $emp->experienceDesignation; ?></td>
												<td><?php  echo $emp->experienceOrganisation; ?></td>
												<td><?php  echo $emp->experienceDuration; ?></td>
												<td><?php  echo $emp->experienceTotal; ?></td>
												<td><?php  echo $emp->previousSalary; ?></td>
												<!-- <td>
												<div class=" ">
												<ul class="tnUEdit">
												<li class="tnEdit"><a href="javascript:void(0)" data-WEId="<?php  echo $emp->Id; ?>" class="WorkExp_Edit"><i class="actionFontSize fas fa-edit"></i></a></li>
												</ul>

												</div>
												</td>  -->
											</tr>
											
											<?php endforeach;  ?>
										<?php else: ?>
										<tr>
										<td colspan="3">Data is Not Available</td>
										<?php endif; ?>

										</tr>
											
												
												
											</tbody>
										</table>
									</div>
								</div>
								<div class="card-header ColorSecondary">
								<span class="profileDetailsFont">Salary</span>
								</div>				
								
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
											<thead>
												<tr>
													<th>Earning Details</th>
													<th>Amount</th>
													<th>Deduction Details</th>
													<th>Amount</th>
												</tr>
											</thead>
											
											<tbody>
												
												<tr>
													<td>Basic</td>
													<td>
													<?php if(!empty($EmployeeSalaryInfo->basicSalary)){  ?>
													<?php echo $EmployeeSalaryInfo->basicSalary; ?>
													<?php }else{?>
													
													<label>Nil</label>
													
													<?php } ?>
													
													</td>
													<td>E. Provident Fund</td>
													<td>
													<?php if(!empty($EmployeeSalaryInfo->eProvidentFund)){  ?>
													<?php echo $EmployeeSalaryInfo->eProvidentFund; ?>
													<?php }else{?>
													
													<label>Nil</label>
													
													<?php } ?>
													
													</td>
													
												</tr>
												<tr>
													<td>HRA</td>
													<td>
													<?php if(!empty($EmployeeSalaryInfo->HRA)){  ?>
													<?php echo $EmployeeSalaryInfo->HRA; ?>
													<?php }else{?>
													
													<label>Nil</label>
													
													<?php } ?>
													
													</td>
													
													<td>Professional Tax</td>
													<td>
													<?php if(!empty($EmployeeSalaryInfo->professionalTax)){  ?>
													<?php echo $EmployeeSalaryInfo->professionalTax; ?>
													<?php }else{?>
													
													<label>Nil</label>
													
													<?php } ?>
													
													</td>
													
												</tr>
												
												<tr>
													<td>Dearness Allowance</td>
													<td>
													
													<?php if(!empty($EmployeeSalaryInfo->dearnessAllowance)){  ?>
													<?php echo $EmployeeSalaryInfo->dearnessAllowance; ?>
													<?php }else{?>
													
													<label>Nil</label>
													
													<?php } ?>
													</td>
													
													<td>ESI</td>
													<td>
													
													<?php if(!empty($EmployeeSalaryInfo->ESI)){  ?>
													<?php echo $EmployeeSalaryInfo->ESI; ?>
													<?php }else{?>
													
													<label>Nil</label>
													
													<?php } ?>
													</td>
													
												</tr>
												
												
												<tr>
													<td>Conveyance</td>
													<td>
													<?php if(!empty($EmployeeSalaryInfo->Conveyance)){  ?>
													<?php echo $EmployeeSalaryInfo->Conveyance; ?>
													<?php }else{?>
													
													<label>Nil</label>
													
													<?php } ?>
													
													</td>
													
													<td>I. Tax</td>
													<td>
													
													<?php if(!empty($EmployeeSalaryInfo->ITax)){  ?>
													<?php echo $EmployeeSalaryInfo->ITax; ?>
													<?php }else{?>
													
													<label>Nil</label>
													
													<?php } ?>
													</td>
													
												</tr>
												<tr>
													<td>Medical Allowance</td>
													<td>
													<?php if(!empty($EmployeeSalaryInfo->Medical)){  ?>
													<?php echo $EmployeeSalaryInfo->Medical; ?>
													<?php }else{?>
													
													<label>Nil</label>
													
													<?php } ?>
													
													</td>
													
													<td>Loan</td>
													<td>
													<?php if(!empty($EmployeeSalaryInfo->Loan)){  ?>
													<?php echo $EmployeeSalaryInfo->Loan; ?>
													<?php }else{?>
													
													<label>Nil</label>
													
													<?php } ?>
													
													</td>
													
												</tr>
												
												<tr>
													<td>Special Allowance</td>
													<td>
													
													<?php if(!empty($EmployeeSalaryInfo->specialAllowance)){  ?>
													<?php echo $EmployeeSalaryInfo->specialAllowance; ?>
													<?php }else{?>
													
													<label>Nil</label>
													
													<?php } ?>
													</td>

													<td>Advance</td>
													<td>
													
													<?php if(!empty($EmployeeSalaryInfo->Advance)){  ?>
													<?php echo $EmployeeSalaryInfo->Advance; ?>
													<?php }else{?>
													
													<label>Nil</label>
													
													<?php } ?>
													</td>
													
												</tr>
												<tr>
													<td>Performance Incentives</td>
													<td>
													<?php if(!empty($EmployeeSalaryInfo->performanceIncentives)){  ?>
													<?php echo $EmployeeSalaryInfo->performanceIncentives; ?>
													<?php }else{?>
													
													<label>Nil</label>
													
													<?php } ?>
													
													</td>
													
													<td>Misc. Deduction</td>
													<td>
													<?php if(!empty($EmployeeSalaryInfo->miscDeduction)){  ?>
													<?php echo $EmployeeSalaryInfo->miscDeduction; ?>
													<?php }else{?>
													
													<label>Nil</label>
													
													<?php } ?>
													
													</td>
												</tr>
												
												<tr>
													<td>Mobile Expenses</td>
													<td>
													
													<?php if(!empty($EmployeeSalaryInfo->mobileExpenses)){  ?>
													<?php echo $EmployeeSalaryInfo->mobileExpenses; ?>
													<?php }else{?>
													
													<label>Nil</label>
													
													<?php } ?>
													</td>
													
													<td></td>
													<td></td>
												</tr>
												<tr>
													<td>Arrears/Other Ern</td>
													<td>
													
													<?php if(!empty($EmployeeSalaryInfo->otherOrArrears)){  ?>
													<?php echo $EmployeeSalaryInfo->otherOrArrears; ?>
													<?php }else{?>
													
													<label>Nil</label>
													
													<?php } ?>
													</td>
													
													<td></td>
													<td></td>
												</tr>
												
												<tr>
													
													<td>Bonus(If Applicable)</td>
													<td>
													<?php if(!empty($EmployeeSalaryInfo->Bonus)){  ?>
													<?php echo $EmployeeSalaryInfo->Bonus; ?>
													<?php }else{?>
													
													<label>Nil</label>
													
													<?php } ?>
													
													</td>
													<td></td>
													<td></td>
													
												</tr>
												
												<tr>
													
													<td style="font-weight:bold;">Total Earning</td>
													<td>
													<?php if(!empty($EmployeeSalaryInfo->grossSalary)){  ?>
													<?php echo $EmployeeSalaryInfo->grossSalary; ?>
													<?php }else{?>
													
													<label>Nil</label>
													
													<?php } ?>
													
													</td>
													<td style="font-weight:bold;">Total Deduction</td>
													<td><label>Nil</label></td>
													
												</tr>
												
												<tr class="netASR">
													
													<td colspan="1">Net Salary in Rupees</td>
													<td colspan="3">
													
													<?php if(!empty($EmployeeSalaryInfo->monthlySalary)){  ?>
													<?php echo displaywords(str_replace( ',', '', $EmployeeSalaryInfo->monthlySalary)); ?>
													<?php } ?>
													</td>
													
													
												</tr>
												
												
											</tbody>
										</table>
									</div>
								</div>
								<div class="card-header ColorSecondary">
								<span class="profileDetailsFont">Attachments</span>
								</div>						
								
								<div class="card-body">
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
											<?php $Sno = 1;?>
											<tbody>
												<?php if(!empty($EmployeeDocuments)):  ?>
												
											<?php	foreach($EmployeeDocuments as $emp): ?>
											<tr>
												
												<td><?php  echo $Sno; ?></td>
												<td><?php  
												$filetmpPath = $emp->filePath;
												$fileCheck = explode(".", $filetmpPath);
												
												// echo print_r($fileCheck);die;
												if($emp->fileName != ""){
													
												echo $emp->fileName; 
												}else{
													echo $fileCheck[0]; 
												}
												
												
												
												
												?></td>
												<td style="text-align:center;"><a href="<?=base_url('index.php/hrzone/Employee/singleEmpView/'.$emp->Id);?>" target="_blank"><span><i class="fas fa-eye" style="color:#00d3c3"></i></span></a></td>
												<td style="text-align:center;"><a href="<?=base_url('index.php/hrzone/Employee/singleEmpDownload/'.$emp->Id);?>"><span ><i class="fas fa-download" style="color:#00d3c3"></i></span></a></td>
												
												
											</tr>
											
											<?php 
											$Sno++;
											
											
											endforeach;  ?>
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
	<?php
	
	function displaywords($number){
		$number = trim($number);
   $no = (int)floor($number);
   $point = (int)round(($number - $no) * 100);
   $hundred = null;
   $digits_1 = strlen($no);
   $i = 0;
   $str = array();
   $words = array('0' => '', '1' => 'one', '2' => 'two',
    '3' => 'three', '4' => 'four', '5' => 'five', '6' => 'six',
    '7' => 'seven', '8' => 'eight', '9' => 'nine',
    '10' => 'ten', '11' => 'eleven', '12' => 'twelve',
    '13' => 'thirteen', '14' => 'fourteen',
    '15' => 'fifteen', '16' => 'sixteen', '17' => 'seventeen',
    '18' => 'eighteen', '19' =>'nineteen', '20' => 'twenty',
    '30' => 'thirty', '40' => 'forty', '50' => 'fifty',
    '60' => 'sixty', '70' => 'seventy',
    '80' => 'eighty', '90' => 'ninety');
   $digits = array('', 'hundred', 'thousand', 'lakh', 'crore');
   while ($i < $digits_1) {
     $divider = ($i == 2) ? 10 : 100;
     $number = floor($no % $divider);
     $no = floor($no / $divider);
     $i += ($divider == 10) ? 1 : 2;


     if ($number) {
        $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
        $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
        $str [] = ($number < 21) ? $words[$number] .
            " " . $digits[$counter] . $plural . " " . $hundred
            :
            $words[floor($number / 10) * 10]
            . " " . $words[$number % 10] . " "
            . $digits[$counter] . $plural . " " . $hundred;
     } else $str[] = null;
  }
  $str = array_reverse($str);
  $result = implode('', $str);


  if ($point > 20) {
    $points = ($point) ?
      "" . $words[floor($point / 10) * 10] . " " . 
          $words[$point = $point % 10] : ''; 
  } else {
      $points = $words[$point];
  }
  if($points != ''){        
      echo strtoupper($result . "Rupees  " . $points . " Paise Only");
  } else {

      echo strtoupper($result . "Rupees Only");
  }

}

	
	
	?>
	
	<div class="modal " id="myModal" role="dialog">
    <div class="modal-dialog modal-lg" style="margin-right: 526px; margin-top: 100px;">
    
   
    
      <!-- Modal content-->
      <div class="modal-content" style=" width: 73%!important; ">
	  
		
                        <div class="card-header" style="padding:0!important; background-color: #2e2869;">
							
							<div class="row">
                            <h6 class="ColorPrimary" style="padding-left: 232px; padding-top: 10px;">Profile Image Upload</h6>
							<button style="margin-left:140px;" type="button" class="close" data-bs-dismiss="modal">&times;</button>
							</div>
                        </div>
									
					<div class="modal-body">
					
					<form id="Image-form" >
							
										<div class="col-lg-12">
										<div class="row" >
										<div class="col-lg-5">
										<div class="form-group">
										<label>Profile Image Upload</label>
										</div>
										</div>
										<div class="col-lg-7">
										<div class="form-group">
										<input type="file" class="empInput form-control" name="EmpProfileImage[]" style="border: 1px solid #858796;" >
										</div>
										</div>
										
										
										
										
										</div>
										</div>
							<button type="button" class="empBtn" id="btnUploadPage" style="text-align:center; margin:15px 244px;">Submit</button>
							<input type="hidden" name="frmUserId" value="<?php echo $UserInfo->id; ?>">
							
							</form>
							</div>
										</div>
						
						
                   

                    <!-- Content Row -->
                    
        
								
        
      </div>
      
    </div>
	
	
	
<div class="modal " id="updateEdu" role="dialog">
<div class="modal-dialog modal-lg">
<!-- Modal content-->
	<div class="modal-content" style="margin: 196px 9px 0 259px;  width: 89%!important; ">
		<div class="card-header" style="padding:0!important; background-color: #2e2869;">
		<div class="row">
		<h6 class="ColorPrimary" style="padding-left: 302px; padding-top: 10px;">Educational Qualification Edit</h6>
		<button style="margin-left:220px;" type="button" class="close" data-bs-dismiss="modal">&times;</button>
		</div>
		</div>

	<div class="modal-body">

	<form class="form-horizontal" action="#">
	<div class="row" >
	<div class="col-lg-3">
	<div class="form-group">
	<label>Exam Passed</label>
	<input type="text" name="examPassed" id="Edit_examPassed" class="empInput form-control" style="border: 1px solid #858796;">
	</div>
	</div>

	<div class="col-lg-3">
	<div class="form-group">
	<label>Year</label>
	<input type="text" name="examYear" id="Edit_examYear" class="empInput form-control" style="border: 1px solid #858796;">
	</div>
	</div>

	<div class="col-lg-3">
	<div class="form-group">
	<label>Board/University</label>
	<input type="text" name="examBoard" id="Edit_examBoard" class="empInput form-control" style="border: 1px solid #858796;">
	</div>
	</div>




	<div class="col-lg-3">
	<div class="form-group">
	<label>%Marks</label>
	<input type="text" name="marks" id="Edit_marks" class="empInput form-control" style="border: 1px solid #858796;">
	</div>
	</div>
	</div>

	<button type="button" class="empBtn EduSubmit" id="btnUploadPage" style="text-align:center; margin:25px 300px;">Submit</button>
	<input type="hidden" name="" id="Edu_Id" >
	<input type="hidden" name="" id="UserId" >

	</form>
	</div>
	</div>
<!-- Content Row -->

</div>

</div>
            
 	
<div class="modal " id="updateBank" role="dialog">
<div class="modal-dialog modal-lg">
<!-- Modal content-->
	<div class="modal-content" style="margin: 196px 9px 0 259px;  width: 89%!important; ">
		<div class="card-header" style="padding:0!important; background-color: #2e2869;">
		<div class="row">
		<h6 class="ColorPrimary" style="padding-left: 302px; padding-top: 10px;">Bank Details Edit</h6>
		<button style="margin-left:220px;" type="button" class="close" data-bs-dismiss="modal">&times;</button>
		</div>
		</div>

	<div class="modal-body">

	<form class="form-horizontal" action="#">
	<div class="row" >
	
	<div class="col-lg-3">
	<div class="form-group">
	<label>Bank</label>
	<input type="text" name="bankName" id="Edit_bankName" class="empInput form-control" style="border: 1px solid #858796;">
	</div>
	</div>

	<div class="col-lg-3">
	<div class="form-group">
	<label>Account No.</label>
	<input type="text" name="bankAccount" id="Edit_bankAccount" class="empInput form-control" style="border: 1px solid #858796;">
	</div>
	</div>

	<div class="col-lg-3">
	<div class="form-group">
	<label>Branch</label>
	<input type="text" name="bankBranch" id="Edit_bankBranch" class="empInput form-control" style="border: 1px solid #858796;">
	</div>
	</div>
	



	
	<div class="col-lg-3">
	<div class="form-group">
	<label>IFSC Code</label>
	<input type="text" name="bankIFSCCode" id="Edit_bankIFSCCode" class="empInput form-control" style="border: 1px solid #858796;">
	</div>
	</div>
	
	
	
	
	</div>

	<button type="button" class="empBtn BankSubmit" id="btnUploadPage" style="text-align:center; margin:25px 300px;">Submit</button>
	<input type="hidden" name="" id="Edu_Id" >
	<input type="hidden" name="" id="User_Id" >

	</form>
	</div>
	</div>
<!-- Content Row -->

</div>

</div>
            
<div class="modal " id="updateCourses" role="dialog">
<div class="modal-dialog modal-lg">
<!-- Modal content-->
	<div class="modal-content" style="margin: 196px 9px 0 259px;  width: 89%!important; ">
		<div class="card-header" style="padding:0!important; background-color: #2e2869;">
		<div class="row">
		<h6 class="ColorPrimary" style="padding-left: 302px; padding-top: 10px;">Courses Edit</h6>
		<button style="margin-left:220px;" type="button" class="close" data-bs-dismiss="modal">&times;</button>
		</div>
		</div>

	<div class="modal-body">

	<form class="form-horizontal" action="#">
	<div class="row" >
	<div class="col-lg-3">
	<div class="form-group">
	<label>Exam Passed</label>
	<input type="text" name="coursePassed" id="Edit_coursePassed" class="empInput form-control" style="border: 1px solid #858796;">
	</div>
	</div>

	<div class="col-lg-3">
	<div class="form-group">
	<label>Year</label>
	<input type="text" name="courseYear" id="Edit_courseYear" class="empInput form-control" style="border: 1px solid #858796;">
	</div>
	</div>

	<div class="col-lg-3">
	<div class="form-group">
	<label>Board/University</label>
	<input type="text" name="courseBoard" id="Edit_courseBoard" class="empInput form-control" style="border: 1px solid #858796;">
	</div>
	</div>




	<div class="col-lg-3">
	<div class="form-group">
	<label>%Marks</label>
	<input type="text" name="courseMarks" id="Edit_courseMarks" class="empInput form-control" style="border: 1px solid #858796;">
	</div>
	</div>
	</div>

	<button type="button" class="empBtn CoursesSubmit" id="btnUploadPage" style="text-align:center; margin:25px 300px;">Submit</button>
	<input type="hidden" name="" id="Edu_Id" >
	<input type="hidden" name="" id="User_Id" >

	</form>
	</div>
	</div>
<!-- Content Row -->

</div>

</div>
            
    <!-- AttachmentsModal End -->
<div class="modal " id="updateWorkExp" role="dialog">
<div class="modal-dialog modal-lg">
<!-- Modal content-->
	<div class="modal-content" style="margin: 196px 9px 0 259px;  width: 89%!important; ">
		<div class="card-header" style="padding:0!important; background-color: #2e2869;">
		<div class="row">
		<h6 class="ColorPrimary" style="padding-left: 302px; padding-top: 10px;">Work Experience Edit</h6>
		<button style="margin-left:220px;" type="button" class="close" data-bs-dismiss="modal">&times;</button>
		</div>
		</div>

	<div class="modal-body">

	<form class="form-horizontal" action="#">
	<div class="row" >
	<div class="col-lg-4">
	<div class="form-group">
	<label>Post/Designation</label>
	<input type="text" name="experienceDesignation" id="Edit_experienceDesignation" class="empInput form-control" style="border: 1px solid #858796;">
	</div>
	</div>

	<div class="col-lg-4">
	<div class="form-group">
	<label>Organisation</label>
	<input type="text" name="experienceOrganisation" id="Edit_experienceOrganisation" class="empInput form-control" style="border: 1px solid #858796;">
	</div>
	</div>

	<div class="col-lg-4">
	<div class="form-group">
	<label>Duration(From To)</label>
	<input type="text" name="experienceDuration" id="Edit_experienceDuration" class="empInput form-control" style="border: 1px solid #858796;">
	</div>
	</div>
	</div>



	<div class="row" >
	<div class="col-lg-4">
	<div class="form-group">
	<label>Experience</label>
	<input type="text" name="experienceTotal" id="Edit_experienceTotal" class="empInput form-control" style="border: 1px solid #858796;">
	</div>
	</div>
	
	<div class="col-lg-4">
	<div class="form-group">
	<label>Salary</label>
	<input type="text" name="previousSalary" id="Edit_previousSalary" class="empInput form-control" style="border: 1px solid #858796;">
	</div>
	</div>
	
	
	</div>

	<button type="button" class="empBtn WorkExpSubmit" style="text-align:center; margin:25px 300px;">Submit</button>
	<input type="hidden" name="" id="Edu_Id" >
	<input type="hidden" name="" id="User_Id" >

	</form>
	</div>
	</div>
<!-- Content Row -->

</div>

</div>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
	$(document).ready(function(){
		
		
		$("#btnUploadPage").click(function(){

	let frm = $("#Image-form")[0];
	let frmDt = new FormData(frm);


	$.ajax({
	type: "post",
	url: "<?=site_url('hrzone/Employee/UserProfileImageUpload');?>",
	data: frmDt,
	dataType: "json",
	cache: false,
	contentType: false,
	processData: false,
	beforeSend: () => {
	$("#btnUploadPage").text("Uploading....");
	$("btnUploadPage").attr("disabled", true);
	},

	complete: () => {
	$("#btnUploadPage").text("Upload");
	$("#btnUploadPage").attr("disabled", false);
	},

	success: response => {

	if(response.status === 1){
	$("#myModal").hide('modal');
	location.reload();
	}
	},
	error: error => {
	console.log("Error", error);
	}
	});
	});	
		
		
		
		
		
		
		
		
		
		$("body").on('click', '.Edu_Edit', function(){
	var id = $(this).attr('data-EmpEdu');
	var ajaxurl = "<?=site_url('hrzone/Attendance/SingleUserEduView');?>";
        $.ajax({
            type: "get",
            url: ajaxurl,
            data: {id:id},
			dataType: "JSON",
			success:function(data){
				
				
				$('#Edu_Id').val(data.Edu_Id);
				$('#UserId').val(data.UserId);
				$('#Edit_examPassed').val(data.examPassed);
				$('#Edit_examYear').val(data.examYear);
				$('#Edit_examBoard').val(data.examBoard);
				$('#Edit_marks').val(data.marks);
				$("#updateEdu").modal('show');
			
			}
				
        });
	
  });
	
	$("body").on('click', '.EduSubmit', function(){
  // function updateUserRecord(){
	var employee_examPassed = $('#Edit_examPassed').val();
	var employee_examYear = $('#Edit_examYear').val();
	var employee_examBoard = $('#Edit_examBoard').val();
	var employee_marks = $('#Edit_marks').val();
	var User_Id = $('#Edu_Id').val();
	var emp_Id = $('#UserId').val();
	
	// var Yid = $(this).attr('data-yearID');
	var ajaxurl = "<?=site_url('hrzone/Attendance/SingleUserEduEdit');?>";
        $.ajax({
            type: "post",
            url: ajaxurl,
            data: {employee_examPassed:employee_examPassed, employee_examYear:employee_examYear, employee_examBoard:employee_examBoard, employee_marks:employee_marks, User_Id:User_Id, emp_Id:emp_Id},
			dataType: "JSON",
			success:function(data){
			$('#updateEdu').modal("hide");
			MonthlyUserTimeList(User_ID, curYear, currMonth);
			alert("Data updated Successfully");
			}
			
		});
  
}); 
	
	
	$("body").on('click', '.Courses_Edit', function(){
	var id = $(this).attr('data-CoursesId');
	var ajaxurl = "<?=site_url('hrzone/Attendance/SingleUserCoursesView');?>";
        $.ajax({
            type: "get",
            url: ajaxurl,
            data: {id:id},
			dataType: "JSON",
			success:function(data){
				
				
				$('#Edu_Id').val(data.Id);
				$('#User_Id').val(data.UserId);
				$('#Edit_coursePassed').val(data.coursePassed);
				$('#Edit_courseYear').val(data.courseYear);
				$('#Edit_courseBoard').val(data.courseBoard);
				$('#Edit_courseMarks').val(data.courseMarks);
				$("#updateCourses").modal('show');
			
			}
				
        });
	
  });
	
	$("body").on('click', '.CoursesSubmit', function(){
  // function updateUserRecord(){
	var employee_coursePassed = $('#Edit_coursePassed').val();
	var employee_courseYear = $('#Edit_courseYear').val();
	var employee_courseBoard = $('#Edit_courseBoard').val();
	var employee_courseMarks = $('#Edit_courseMarks').val();
	var User_Id = $('#Edu_Id').val();
	var emp_Id = $('#User_Id').val();
	
	// var Yid = $(this).attr('data-yearID');
	var ajaxurl = "<?=site_url('hrzone/Attendance/SingleUserCoursesEdit');?>";
        $.ajax({
            type: "post",
            url: ajaxurl,
            data: {employee_coursePassed:employee_coursePassed, employee_courseYear:employee_courseYear, employee_courseBoard:employee_courseBoard, employee_courseMarks:employee_courseMarks, User_Id:User_Id, emp_Id:emp_Id},
			dataType: "JSON",
			success:function(data){
			$('#updateCourses').modal("hide");
			
			alert("Data updated Successfully");
			}
			
		});
  
}); 
	
	
$("body").on('click', '.Bank_Edit', function(){
	var id = $(this).attr('data-BankId');
	var ajaxurl = "<?=site_url('hrzone/Attendance/SingleUserBankView');?>";
        $.ajax({
            type: "get",
            url: ajaxurl,
            data: {id:id},
			dataType: "JSON",
			success:function(data){
				
				
				$('#Edu_Id').val(data.Id);
				$('#User_Id').val(data.UserId);
				$('#Edit_bankName').val(data.bankName);
				$('#Edit_bankAccount').val(data.bankAccount);
				$('#Edit_bankBranch').val(data.bankBranch);
				$('#Edit_bankIFSCCode').val(data.bankIFSCCode);
				$("#updateBank").modal('show');
			
			}
				
        });
	
  });
	
	$("body").on('click', '.BankSubmit', function(){
  // function updateUserRecord(){
	var employee_bankName = $('#Edit_bankName').val();
	var employee_bankAccount = $('#Edit_bankAccount').val();
	var employee_bankBranch = $('#Edit_bankBranch').val();
	var employee_bankIFSCCode = $('#Edit_bankIFSCCode').val();
	var User_Id = $('#Edu_Id').val();
	var emp_Id = $('#User_Id').val();
	
	// var Yid = $(this).attr('data-yearID');
	var ajaxurl = "<?=site_url('hrzone/Attendance/SingleUserBankEdit');?>";
        $.ajax({
            type: "post",
            url: ajaxurl,
            data: {employee_bankName:employee_bankName, employee_bankAccount:employee_bankAccount, employee_bankBranch:employee_bankBranch, employee_bankIFSCCode:employee_bankIFSCCode, User_Id:User_Id, emp_Id:emp_Id},
			dataType: "JSON",
			success:function(data){
			$('#updateBank').modal("hide");
			
			alert("Data updated Successfully");
			}
			
		});
  
}); 
	
	
$("body").on('click', '.WorkExp_Edit', function(){
	var id = $(this).attr('data-WEId');
	var ajaxurl = "<?=site_url('hrzone/Attendance/SingleUserWorkExpView');?>";
        $.ajax({
            type: "get",
            url: ajaxurl,
            data: {id:id},
			dataType: "JSON",
			success:function(data){
				
				
				$('#Edu_Id').val(data.Id);
				$('#User_Id').val(data.UserId);
				$('#Edit_experienceDesignation').val(data.experienceDesignation);
				$('#Edit_experienceOrganisation').val(data.experienceOrganisation);
				$('#Edit_experienceDuration').val(data.experienceDuration);
				$('#Edit_experienceTotal').val(data.experienceTotal);
				$('#Edit_previousSalary').val(data.previousSalary);
				$("#updateWorkExp").modal('show');
			
			}
				
        });
	
  });
	
	$("body").on('click', '.WorkExpSubmit', function(){
  // function updateUserRecord(){
	var experienceDesignation = $('#Edit_experienceDesignation').val();
	var experienceOrganisation = $('#Edit_experienceOrganisation').val();
	var experienceDuration = $('#Edit_experienceDuration').val();
	var experienceTotal = $('#Edit_experienceTotal').val();
	var previousSalary = $('#Edit_previousSalary').val();
	var User_Id = $('#Edu_Id').val();
	var emp_Id = $('#User_Id').val();
	
	// var Yid = $(this).attr('data-yearID');
	var ajaxurl = "<?=site_url('hrzone/Attendance/SingleUserWorkExpEdit');?>";
        $.ajax({
            type: "post",
            url: ajaxurl,
            data: {experienceDesignation:experienceDesignation, experienceOrganisation:experienceOrganisation, experienceDuration:experienceDuration, experienceTotal:experienceTotal, previousSalary:previousSalary, User_Id:User_Id, emp_Id:emp_Id},
			dataType: "JSON",
			success:function(data){
			$('#updateWorkExp').modal("hide");
			
			alert("Data updated Successfully");
			}
			
		});
  
}); 
	
	
	
	
});
 								
  	 </script>
<?php include('footer.php'); ?>