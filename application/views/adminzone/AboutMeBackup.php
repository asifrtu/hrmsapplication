<?php
include('header.php');
?>
 <?php
include('commonSidebar.php');
?>
    

    <div class="col-lg-10  my_information" >

        <div class="employee_details">
            <span>Employee Details</span>
            <a href="<?=base_url('index.php/adminzone/EmployeeInfo/employeeData')?>"> <i class="fas fa-user-edit"></i></a>
        </div>

        <div class="row">

            <div class="col-lg-3 col-md-6 left_col " >
                <div class="left_information">
                    <?php if(!empty($EmployeeProfileImage->EmpProfileImage)){ ?>
                    <img src="<?php echo base_url();?>upload/UserProfileImage/<?php  echo $EmployeeProfileImage->EmpProfileImage; ?>" class="img-responsive" alt="Your Image">
                    <?php } else{ ?>
                        <img width="200px" src="https://placehold.it/200x150?text=hrhelp24x7" class="img-thumbnail" alt="Cinque Terre">
											
											<?php }
											
											?>


                    <div class="downToImage">
                        <h6>D.O.B:</h6>
                        <p><?php if(!empty($EmployeeDetails->dob)){ echo $EmployeeDetails->dob;} ?></p>

                        <h6>Father's Name:</h6>
                        <p><?php if(!empty($EmployeeDetails->fatherName)){ echo $EmployeeDetails->fatherName;} ?></p>
                        
                        <h6>Marital Status:</h6>
                        <p><?php if(!empty($EmployeeDetails->maritalStatus)){ echo $EmployeeDetails->maritalStatus;} ?></p>
                        
                        <h6>Spouse Name:</h6>
                        <p><?php if(!empty($EmployeeDetails->spouseName)){ echo $EmployeeDetails->spouseName;} ?></p>

                        <h6>Permanent Address:</h6>
                        <p><?php if(!empty($EmployeeDetails->permanentAddress)){ echo $EmployeeDetails->permanentAddress;} ?></p>

                        <h6>Local Address:</h6>
                        <p><?php if(!empty($EmployeeDetails->localAddress)){ echo $EmployeeDetails->localAddress;} ?></p>
                        

                    </div>

                </div>

            </div>

            <div class="col-lg-9 col-md-6 right_information" >
            <h4><?php echo strtoupper($UserInfo->name); ?></h4  >
                <div class="basic_details">
                
                    <div class="col-lg-4">
                    
                    <div class="top_right">
                        <h6>Employee ID:&nbsp;</h6>
                        <p><?php echo $UserInfo->employee_id; ?></p>
                    </div>
                    <div class="top_right">
                        <h6>Designation: &nbsp;</h6>
                        <?php if(!empty($EmployeeDetails->position)):  ?>
                        <p><?php echo $EmployeeDetails->position; ?></p>
								<?php else: ?>
								<p>N/A</p>
								<?php endif; ?>
                        
                    </div>
                    <div class="top_right">
                        <h6>Joining Date:&nbsp;</h6>
                        <?php if($UserInfo->EmployeejoiningDate != 0000-00-00):  ?>
                        <p><?php echo $UserInfo->EmployeejoiningDate; ?></p>
								<?php else: ?>
								<p>N/A</p>
								<?php endif; ?>
                        
                    </div>
                    <div class="top_right">
                        <h6>Exit Date:&nbsp;</h6>
                        <p></p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="top_right">
                        <h6>Official Email:&nbsp;</h6>
                        <?php if(!empty($UserInfo->email)):  ?>
                        <p> <?php echo $UserInfo->email; ?></p>
                            <?php else: ?>
                            <p>N/A</p>
                            <?php endif; ?>
                        
                    </div>

                    <div class="top_right">
                        <h6>Personal Email:&nbsp;</h6>
                        <?php if(!empty($UserInfo->personalEmail)):  ?>
                        <p><?php echo $UserInfo->personalEmail; ?></p>
								<?php else: ?>
								<p>N/A</p>
								<?php endif; ?>
                        
                    </div>
                    <div class="top_right">
                        <h6>Phone Number:&nbsp;</h6>
                        <?php if(!empty($EmployeeDetails->phone)):  ?>
                        <p><?php echo $EmployeeDetails->phone; ?></p>
                        <?php else: ?>
								<p>N/A</p>
								<?php endif; ?>
                    </div>
                    <div class="top_right">
                        <h6>Alternate Number:&nbsp;</h6>
                        <?php if(!empty($EmployeeDetails->alternatePhone)):  ?>
                        <p><?php echo $EmployeeDetails->alternatePhone; ?></p>
                        <?php else: ?>
                             <p>N/A</p>
								<?php endif; ?>

                                <td><?php if(!empty($EmployeeSalaryInfo->pancard)){  ?>
													<?php echo $EmployeeSalaryInfo->pancard; ?>
													<?php } ?></td>
                            <td><?php if(!empty($EmployeeSalaryInfo->aadharcard)){  ?>
													<?php echo $EmployeeSalaryInfo->aadharcard; ?>
													<?php } ?></td>
                    </div>
                </div>
                </div>


                <div class="information_heading">
                    <h6>Educational Qualification</h6>
                </div>
                
                <div class="data_table col-lg-12">
                    <table class="table">
                        <thead class="courses">
                            <th>Exam Passed</th>
                            <th>Year</th>
                            <th>Boards/University</th>
                            <th>%Marks & Division</th>

                        </thead>
                        <tbody>
                        <?php if(!empty($EmployeeEducationDetails)):  ?>

                            <?php	
                                	foreach($EmployeeEducationDetails as $emp): ?>
                        <tr>
                            <td><?php  echo $emp->examPassed; ?></td>
                            <td><?php  echo $emp->examYear; ?></td>
                            <td><?php  echo $emp->examBoard; ?></td>
                            <td><?php  echo $emp->marks; ?></td>
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

                <div class="information_heading">
                    <h6>Courses</h6>
                </div>
                
                <div class="data_table col-lg-12">
                    <table class="table">
                        <thead class="courses">
                            <th>Exam Passed</th>
                            <th>Year</th>
                            <th>Boards/University</th>
                            <th>Marks</th>

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
        


        <div class="container-fluid">
          <div class="col-lg-12">

                <div class="information_heading">
                    <h6>Bank Account</h6>
                </div>
                
                <div class="data_table col-lg-12">
                    <table class="table">
                        <thead class="bank_account">
                            <th>Bank</th>
                            <th>Account No.</th>
                            <th>Branch</th>
                            <th>IFSC Code</th>
                            <th>PAN</th>
                            <th>Aadhar</th>

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
                <div class="information_heading">
                    <h6>Work Experience</h6>
                </div>
                
                <div class="data_table col-lg-12">
                    <table class="table">
                        <thead class="work_experience">
                            <th>Post/Designation</th>
                            <th>Organisation</th>
                            <th>Duration(From To)</th>
                            <th>Experience</th>
                            <th>Salary</th>

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

                <div class="information_heading">
                    <h6>Salary</h6>
                </div>
                <div class="salary_table col-lg-12">
                <div class="salary col-lg-8" style="margin-right: 2px;">
                    <table class="table">
                    <thead class="sallary">
                        <th> Earning Details</th>
                        <th>Amount</th>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="earning_details">Basic</td>
                        <td>
                                <?php if(!empty($EmployeeSalaryInfo->basicSalary)){  ?>
                                <?php echo $EmployeeSalaryInfo->basicSalary; ?>
                                <?php }else{?>
                                
                                <label>Nil</label>
                                
                                <?php } ?>
                                    
                        </td>
                    </tr>

                    <tr>
                        <td class="earning_details">Dearness Allowance</td>
                        <td>
													
                            <?php if(!empty($EmployeeSalaryInfo->dearnessAllowance)){  ?>
                            <?php echo $EmployeeSalaryInfo->dearnessAllowance; ?>
                            <?php }else{?>
                            
                            <label>Nil</label>
                            
                            <?php } ?>
                            </td>
                    </tr>

                    <tr>
                        <td class="earning_details">HRA</td>
                        <td>
                            <?php if(!empty($EmployeeSalaryInfo->HRA)){  ?>
                            <?php echo $EmployeeSalaryInfo->HRA; ?>
                            <?php }else{?>
                            
                            <label>Nil</label>
                            
                            <?php } ?>
                            
                            </td>
                    </tr>
                    <tr>
                        <td class="earning_details">Conveyance</td>
                        <td>
                            <?php if(!empty($EmployeeSalaryInfo->Conveyance)){  ?>
                            <?php echo $EmployeeSalaryInfo->Conveyance; ?>
                            <?php }else{?>
                            
                            <label>Nil</label>
                            
                            <?php } ?>
                            
                         </td>
                    </tr>
                    <tr>
                        <td class="earning_details">Medical Allowance</td>
                        <td>
                            <?php if(!empty($EmployeeSalaryInfo->Medical)){  ?>
                            <?php echo $EmployeeSalaryInfo->Medical; ?>
                            <?php }else{?>
                            
                            <label>Nil</label>
                            
                            <?php } ?>
                            
                        </td>
                    </tr>
                    <tr>
                        <td class="earning_details">Special Allowance</td>
                        <td>
													
													<?php if(!empty($EmployeeSalaryInfo->specialAllowance)){  ?>
													<?php echo $EmployeeSalaryInfo->specialAllowance; ?>
													<?php }else{?>
													
													<label>Nil</label>
													
													<?php } ?>
													</td>
                    </tr>
                    <tr>
                        <td class="earning_details">Performance Incentives</td>
                        <td>
                                <?php if(!empty($EmployeeSalaryInfo->performanceIncentives)){  ?>
                                <?php echo $EmployeeSalaryInfo->performanceIncentives; ?>
                                <?php }else{?>
                                
                                <label>Nil</label>
                                
                                <?php } ?>
													
                        </td>
                    </tr>
                    <tr>
                        <td class="earning_details">Mobile Expenses</td>
                        <td>
                            <?php if(!empty($EmployeeSalaryInfo->mobileExpenses)){  ?>
                            <?php echo $EmployeeSalaryInfo->mobileExpenses; ?>
                            <?php }else{?>
                            
                            <label>Nil</label>
                            
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="earning_details">Arrears/Other Ern</td> 
                        <td>							
                            <?php if(!empty($EmployeeSalaryInfo->otherOrArrears)){  ?>
                            <?php echo $EmployeeSalaryInfo->otherOrArrears; ?>
                            <?php }else{?>
                            
                            <label>Nil</label>
                            
                            <?php } ?>
                        </td>  
                    </tr>

                    <tr>
                        <td class="earning_details">Bonus(If Applicable)</td>
                        <td>
                                <?php if(!empty($EmployeeSalaryInfo->Bonus)){  ?>
                                <?php echo $EmployeeSalaryInfo->Bonus; ?>
                                <?php }else{?>
                                
                                <label>Nil</label>
                                
                                <?php } ?>
													
                        </td>
                    </tr>

                    <tr>
                        <td class="earning_details"> <b>Total Earning</b></td>
                       <td>
													<?php if(!empty($EmployeeSalaryInfo->grossSalary)){  ?>
													
													<?php 
													$ts = 1;
													$gs = $EmployeeSalaryInfo->grossSalary;
													$gs2 = filter_var($gs, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
													//echo $gs2."<br>";
													$yi = $EmployeeSalaryInfo->yearly_increment_22;
                                                    $yi2 = filter_var($yi, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
													//echo $yi2."<br>";
													$ts = $yi2 + $gs2;
													echo $ts;

													}else{?>
													
													<label>Nil</label>
													
													<?php } ?>
													
													</td>
                    </tr>
                    <tr class="netASR">
													
													<td colspan="1"><b>Net Salary in Rupees</b></td>
													<td colspan="3">
													
													<?php if(!empty($EmployeeSalaryInfo->monthlySalary)){  ?>
													<?php echo displaywords(str_replace( ',', '', $EmployeeSalaryInfo->monthlySalary)); ?>
													<?php } ?>
													</td>
													
													
												</tr>
                </tbody>
                    </table>
                </div>
                <div class="salary col-lg-4">
                    <table class="table">
                        <thead class="sallary">
                            <th>Deduction Details </th>
                            <th>Amount</th>
    
                        </thead>
                        <tbody>
                            <tr>
                                <td class="earning_details">E.Provident Fund</td>
                                <td>
                                    <?php if(!empty($EmployeeSalaryInfo->eProvidentFund)){  ?>
                                    <?php echo $EmployeeSalaryInfo->eProvidentFund; ?>
                                    <?php }else{?>
                                    
                                    <label>Nil</label>
                                    
                                    <?php } ?>
                                 </td>

                            </tr>
                            <tr>
                                <td class="earning_details">ESI</td>
                                <td>
													
                                    <?php if(!empty($EmployeeSalaryInfo->ESI)){  ?>
                                    <?php echo $EmployeeSalaryInfo->ESI; ?>
                                    <?php }else{?>
                                    
                                    <label>Nil</label>
                                    
                                    <?php } ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="earning_details">Professional Tax</td>
                                <td>
                                    <?php if(!empty($EmployeeSalaryInfo->professionalTax)){  ?>
                                    <?php echo $EmployeeSalaryInfo->professionalTax; ?>
                                    <?php }else{?>
                                    
                                    <label>Nil</label>
                                    
                                    <?php } ?>					
                                </td>

                            </tr>
                            <tr>
                                <td class="earning_details">I. Taxe</td>
                                <td>
                                    <?php if(!empty($EmployeeSalaryInfo->ITax)){  ?>
                                    <?php echo $EmployeeSalaryInfo->ITax; ?>
                                    <?php }else{?>  
                                    <label>Nil</label>
                                    <?php } ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="earning_details">Loan</td>
                                <td>
                                    <?php if(!empty($EmployeeSalaryInfo->Loan)){  ?>
                                    <?php echo $EmployeeSalaryInfo->Loan; ?>
                                    <?php }else{?>
                                    
                                    <label>Nil</label>
                                    
                                    <?php } ?>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td class="earning_details" >Advance</td>
                                <td>
													
                                    <?php if(!empty($EmployeeSalaryInfo->Advance)){  ?>
                                    <?php echo $EmployeeSalaryInfo->Advance; ?>
                                    <?php }else{?>
                                    
                                    <label>Nil</label>
                                    
                                    <?php } ?>
                                </td>
                            </tr>
        
                            <tr>
                                <td class="earning_details"> <b>Total Deduction</b></td>
                                <td><label>Nil</label></td>
                            </tr>
                        </tbody>

                        </table>
                    </div>
                </div>


                <div class="information_heading">
                    <h6>Attachments</h6>
                </div>
                <div class="data_table col-lg-12">
                    <table class="table">
                        <thead class="courses">
                            <th>S.No</th>
                            <th>Files</th>
                            <th>View</th>
                            <th>Download</th>

                        </thead>
                        <tbody>
                        <?php $Sno = 1;?>
                        <?php if(!empty($EmployeeDocuments)):  ?>
                        <?php	foreach($EmployeeDocuments as $emp): ?>
                        <tr>
                            <td><?php  echo $Sno; ?></td>
                            <td><b><?php  echo $emp->fileName; ?> </b> </td>
                            <td class="text-center"><a href="<?=base_url('index.php/hrzone/Employee/singleEmpView/'.$emp->Id);?>" target="_blank"><i class="far fa-eye"></i></a></td>
                            <td class="text-center"><a href="<?=base_url('index.php/hrzone/Employee/singleEmpDownload/'.$emp->Id);?>"><i class="fas fa-download"></i></a></td>
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



        </div>

    </div>


    </div>

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


<footer class="fixed-bottom py-1 ">
<p style="margin-bottom: 0px;">HR HELP 24x7</p>
</footer>
</div>
<script>
    function myFunction() {
      var x = document.getElementById("myLink");
      if (x.style.display === "block") {
        x.style.display = "none";
      } else {
        x.style.display = "block";
      }
    }
    </script>
</body>
</html>