<?php include('header.php'); ?>

<?php include('commonSidebar.php'); ?>
<style>
 
.aboutFont{
	color:#504a94;
	font-weight: 700;
}
.aboutFontName{
	color:#504a94;
	font-weight: 800;
    font-size: 20px;
}

.ColorSecondary{
	background-color:#504a94;
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
  display: block;
  color: white;
  text-align: center;
  
  text-decoration: none;
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
	background: #5a5757;
    color: white;
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
 </style>
       
        <!-- Content Wrapper -->
        <div id="content-wrapper bg-gradient-primary" class="d-flex flex-column" style="margin-top:16px; margin-bottom:50px; width:1050px!important;">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    

                    <!-- Content Row -->
					  <!-- Area Chart -->
							
                    
					<div class="card shadow mb-4" style="margin-bottom:100px;">
                        <div class="ColorSecondaryPre" style="padding: 12px 5px 5px 12px;">
                            <h5 class=" md-4 ColorPrimary" style="font-size:17px;">Employee Details</h5>
                        </div>
                        <div class="card-body">
						
							
						<div class="row">

                        <!-- Area Chart -->
							<div class="col-lg-3">
							<div class="form-group">
							<div style="margin-bottom:20px;">
							<?php if(!empty($EmployeeProfileImage->EmpProfileImage)){ ?>
							
										<img width="200px" src="<?php echo base_url();?>upload/UserProfileImage/<?php  echo $EmployeeProfileImage->EmpProfileImage; ?>" class="img-thumbnail" alt="Cinque Terre">
											<?php } else{ ?>
												
										<img width="200px" src="https://placehold.it/200x150?text=hrhelp24x7" class="img-thumbnail" alt="Cinque Terre">
											
											<?php }
											
											?>
							</div>
							
							<label class="aboutFont">Father's Name:</label><br> 
							<label><?php echo $EmployeeDetails->fatherName; ?></label><br>
							
							<label class="aboutFont">DOB:</label><br> 
							<?php if($EmployeeDetails->dob != 0000-00-00):  ?>
								<label><?php echo $EmployeeDetails->dob; ?></label>
								<?php else: ?>
								<label>N/A</label>
								<?php endif; ?><br>
							<label class="aboutFont">Marital status:</label><br> 
							
							<?php if(!empty($EmployeeDetails->maritalStatus)):  ?>
								<label><?php echo $EmployeeDetails->maritalStatus; ?></label><br>
								<?php else: ?>
								<label>N/A</label><br>
								<?php endif; ?>
							<label class="aboutFont">Spouse Name:</label><br> 
							
							<?php if(!empty($EmployeeDetails->spouseName)):  ?>
								<label><?php echo $EmployeeDetails->spouseName; ?></label><br>
								<?php else: ?>
								<label>N/A</label><br>
								<?php endif; ?>
							<label class="aboutFont">Permanent Address:</label><br> 
						
							<?php if(!empty($EmployeeDetails->permanentAddress)):  ?>
								<label><?php echo $EmployeeDetails->permanentAddress; ?></label><br>
								<?php else: ?>
								<label>N/A</label><br>
								<?php endif; ?>
							
							<label class="aboutFont">Local Address:</label><br> 
							
							<?php if(!empty($EmployeeDetails->localAddress)):  ?>
								<label><?php echo $EmployeeDetails->localAddress; ?></label><br>
								<?php else: ?>
								<label>N/A</label><br>
								<?php endif; ?>
							</div>
							</div>
							<div class="col-lg-9">
							<div class="">
       
  <table class="table table-borderless table-sm">
    
    <tbody>
		<tr>
			<td class="aboutFontName">
			<?php if(!empty($UserInfo->name)):  ?>
			<?php echo strtoupper($UserInfo->name); ?>
			<?php else: ?>
			N/A
			<?php endif; ?>
			
			</td>
			
		</tr>
		<tr>
			<th class="aboutFont">Employee ID:</th>
			<td class="aboutFont"><?php echo $UserInfo->employee_id; ?></td>
			<th class="aboutFont">Email:</th>
			<td class="aboutFont">
			<?php if(!empty($UserInfo->email)):  ?>
			<?php echo $UserInfo->email; ?>
			<?php else: ?>
			N/A
			<?php endif; ?>
			
			</td>
		</tr>
		
		
      <tr>
			<th class="aboutFont">Position:</th>
			<td class="aboutFont">
			<?php if(!empty($EmployeeDetails->position)):  ?>
			<?php echo $EmployeeDetails->position; ?>
			<?php else: ?>
			N/A
			<?php endif; ?>
			
			</td>
			<th class="aboutFont">Personal Email:</th>
			<td class="aboutFont">
			
			<?php if(!empty($UserInfo->personalEmail)):  ?>
			<?php echo $UserInfo->personalEmail; ?>
			<?php else: ?>
			N/A
			<?php endif; ?>
			</td>
		</tr>
		<tr>
			<th class="aboutFont">Joining:</th>
			<td class="aboutFont">
			<?php if($UserInfo->EmployeejoiningDate != 0000-00-00):  ?>
			<?php echo $UserInfo->EmployeejoiningDate; ?>
			<?php else: ?>
			N/A
			<?php endif; ?>
			
			</td>
			<th class="aboutFont">Phone:</th>
			<td class="aboutFont">
			
			<?php if(!empty($EmployeeDetails->phone)):  ?>
			<?php echo $EmployeeDetails->phone; ?>
			<?php else: ?>
			N/A
			<?php endif; ?>
			</td>
		</tr>
		
		
		<tr>
			<th class="aboutFont">Exit:</th>
			<td class="aboutFont">
			<?php if($UserInfo->employeeExitDate != 0000-00-00):  ?>
			<?php echo $UserInfo->employeeExitDate; ?>
			<?php else: ?>
			N/A
			<?php endif; ?>
			
			</td>
			<th class="aboutFont">Alternate:</th>
			<td class="aboutFont">
			
			<?php if(!empty($EmployeeDetails->alternatePhone)):  ?>
			<?php echo $EmployeeDetails->alternatePhone; ?>
			<?php else: ?>
			N/A
			<?php endif; ?>
			</td>
		</tr>
		
		
		
		
      
    </tbody>
  </table>
</div>
							
							
								<div class="form-group">
								<label class="aboutFontName"><?php echo strtoupper($UserInfo->name); ?></label><br>							
								<la6bel class="aboutFont">Employee ID:</label> 
								<label><?php echo $UserInfo->employee_id; ?></label><br>
															
								<div class="row">
								<div class="col-lg-6">
								<label class="aboutFont">Position:</label> 
								
								
							<?php if(!empty($EmployeeDetails->position)):  ?>
								<label><?php echo $EmployeeDetails->position; ?></label>
								<?php else: ?>
								<label>N/A</label>
								<?php endif; ?>
								</div>
								
								<div class="col-lg-6">
								<label class="aboutFont">Email:</label>
								
								<?php if(!empty($UserInfo->email)):  ?>
								<label><?php echo $UserInfo->email; ?></label>
								<?php else: ?>
								<label>N/A</label>
								<?php endif; ?>
								
								</div>
								</div>
								
								<div class="row">
								<div class="col-lg-6">
								<label class="aboutFont">Joining:</label> 
								
								<?php if($UserInfo->EmployeejoiningDate != 0000-00-00):  ?>
								<label><?php echo $UserInfo->EmployeejoiningDate; ?></label>
								<?php else: ?>
								<label>N/A</label>
								<?php endif; ?>
								</div>
								
								<div class="col-lg-6">
								<label class="aboutFont">Phone:</label>
								
								<?php if(!empty($EmployeeDetails->phone)):  ?>
								<label><?php echo $EmployeeDetails->phone; ?></label>
								<?php else: ?>
								<label>N/A</label>
								<?php endif; ?>
								
								</div>
								</div>
								
								
								<div class="row">
								<div class="col-lg-6">
								<label class="aboutFont">Exit:</label>
								<?php if($UserInfo->employeeExitDate != 0000-00-00):  ?>
								<label><?php echo $UserInfo->employeeExitDate; ?></label>
								<?php else: ?>
								<label>N/A</label>
								<?php endif; ?>
								
								</div>
								<div class="col-lg-6">
								<label class="aboutFont">Alternate:</label>
								
								<?php if(!empty($EmployeeDetails->alternatePhone)):  ?>
								<label><?php echo $EmployeeDetails->alternatePhone; ?></label>
								<?php else: ?>
								<label>N/A</label>
								<?php endif; ?>
								</div>
								</div>
								
								</div>
								
								<hr style="	border-top: 1px solid #8c8b8b; margin-bottom:20px;">
								
								<div class="shadow mb-4">
							<div class="card-header ColorSecondary">
								<ul class="tnUemp">
								<li class="tnemp"><a href="#">Educational Qualification</a></li>
								</ul>
								
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
												<th>Action</th>
												
												
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
												<td>
												<div class=" ">
												<ul class="tnUEdit">
												<li class="tnEdit"><a href="javascript:void(0)" data-EmpEdu="<?php  echo $emp->Id; ?>" class="Edu_Edit"><i class="actionFontSize fas fa-edit"></i></a></li>
												</ul>

												</div>
												</td>
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
							</div>
							
							<div class="shadow mb-4">
							<div class="card-header ColorSecondary">
							<ul class="tnUemp">
								<li class="tnemp"><a href="#">Courses</a></li>
								</ul>
								
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
												<th>Action</th>
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
												<td>
												<div class=" ">
												<ul class="tnUEdit">
												<li class="tnEdit"><a href="javascript:void(0)" data-CoursesId="<?php  echo $emp->Id; ?>" class="Courses_Edit"><i class="actionFontSize fas fa-edit"></i></a></li>
												</ul>

												</div>
												</td>

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
							</div>
							
						
						
							<div class="shadow mb-4">
							<div class="card-header ColorSecondary">
							<ul class="tnUemp">
								<li class="tnemp"><a href="#">Bank Account</a></li>
								</ul>
								
								
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
												<th>Action</th>
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
												
																								<td>
												<div class=" ">
												<ul class="tnUEdit">
												<li class="tnEdit"><a href="javascript:void(0)" data-BankId="<?php  echo $emp->Id; ?>" class="Bank_Edit"><i class="actionFontSize fas fa-edit"></i></a></li>
												</ul>

												</div>
												</td>
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
							</div>
					
							<div class="shadow mb-4">
								<div class="card-header ColorSecondary">
									
									<ul class="tnUemp">
								<li class="tnemp"><a href="#">Details</a></li>
								</ul>
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
													<th>Action</th>
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
												<td>
												<div class=" ">
												<ul class="tnUEdit">
												<li class="tnEdit"><a href="javascript:void(0)" data-WEId="<?php  echo $emp->Id; ?>" class="WorkExp_Edit"><i class="actionFontSize fas fa-edit"></i></a></li>
												</ul>

												</div>
												</td> 
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
							</div>
					
							<div class="shadow mb-4">
								<div class="card-header ColorSecondary">
									
									
									<ul class="tnUemp">
								<li class="tnemp"><a href="#">Salary</a></li>
								</ul>
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
							</div>
					
							<div class="shadow mb-4">
								<div class="card-header ColorSecondary">
								<ul class="tnUemp">
								<li class="tnemp"><a href="#">Attachments</a></li>
								</ul>
									  
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
												<td style="text-align:center;"><a href="<?=base_url('index.php/hrzone/Employee/singleEmpView/'.$emp->Id);?>" target="_blank"><span><i class="fas fa-eye"></i></span></a></td>
												<td style="text-align:center;"><a href="<?=base_url('index.php/hrzone/Employee/singleEmpDownload/'.$emp->Id);?>"><span ><i class="fas fa-download"></i></span></a></td>
												
												
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
								<button type="submit" class="btn btn-default leaveSubmitBtn">Submit</button>
						
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