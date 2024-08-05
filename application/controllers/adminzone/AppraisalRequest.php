<?php include('header.php'); ?>
<?php include('commonSidebar.php'); ?>

        <!-- Content Wrapper -->
 

<style>

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

th:last-child {
  width:168px;
}
.table td, .table th {
    padding: .35rem!important;
}

.leaveViewH{
	text-align: center;
    background: #2e2869;
    color: white;
    
}
.table {
    border-collapse: collapse !important;
}

tbody tr{
	border-right: 1px solid #ddd!important;
}
.appraisal-columns{
	border: 1px solid silver;
    padding: 8px 10px;
	color:black;
}
.tab-pane ul{
	margin-top:25px!important;
}
.content{
	padding-right: 50px;
    text-align: justify;
}
.id_policy li{
	margin-bottom: 15px;
}

.pagination {
  display: block;
  width: 75%;
  margin: 1em auto;
  text-align: center;
  
  &:after {
    content: '';
    clear: both;
  }
}

.pagination-button {
  display: inline-block;
  padding: 5px 10px;
  border: 5px solid #e0e0e0;  
  background-color: #eee;
  color: #333;
  cursor: pointer;
  transition: background 0.1s, color 0.1s;
  
  &:hover {
    background-color: #ddd;
    color: #3366cc;
  }
  
  &.active {
    background-color: #bbb;
    border-color: #bbb;
    color: #3366cc;
  }
  
  $border-radius: 18px;  
  
  &:first-of-type {
    border-radius: $border-radius 0 0 $border-radius;
  }

  &:last-of-type {
    border-radius: 0 $border-radius $border-radius 0;
  }
}

/* arbitrary styles */
.heading { text-align: center; max-width: 500px; margin: 20px auto; }

.article-loop {
    display: block;
    width: 90%;
    margin: 1em auto;
	border: 2px solid #1C304C;
    background-color: #ffffff;
	padding: 16px;
}
.content ul{
	padding: 25px 50px;
    color: #000;
	font-size: 14px;
	margin-bottom: 0px!important;
}
.content ul li{
	margin-bottom:10px;
	line-height: 26px;
}
.form-top{
	margin-bottom: 2px;
    font-size: 17px;
    margin-top: 17px;
    font-weight: 600;
    color: #000;
    padding-left: 10px;
}
.form-bottom{
	font-size: 14px;
    color: #000;
    padding-left: 10px;
}
.fa-star{
	font-size: 20px;
}
</style>


 <div id="content-wrapper bg-gradient-primary" class="my_information col-lg-10" style="background: none;" >

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="">

                    <!-- Page Heading -->
                    <?php if(!empty($this->session->flashdata('message'))) { ?>
			
			
			<?=$this->session->flashdata('message');?>
			
		<?php } ?>
							
					<div class=" shadow " >
					<div class="employee_details">
            <span>Appraisal Request</span>
        </div>
                    <!-- Content Row -->
					  <!-- Area Chart -->
								
							
								<div class="card-body" style="background: white;">
								
								<div>
            <a href="javascript:void(0)" class="addEmpSubmitBtn" data-toggle="modal" data-target="#myModal">
               <button class="apply_leave_button">Appraisal Request</button>
               </a>
           </div>
									
									<div class="table-responsive">
									<table class="table table-bordered" id="dataTable" width="100%">
										<thead class="information_heading courses">
											<tr>
												
												<th class="cmPayroll">S.No.</th>
												<th class="cmPayroll">Name</th>
												<th class="cmPayroll">Employee ID</th>
												<th class="cmPayroll">Date</th>
												
												<th class="cmPayroll">Action</th>
												
												
												
											</tr>
										</thead>
										
										<tbody>
											<?php 
											
											
											// print_r($Exitrecord); die;
											if(!empty($UserExitrecord)):  ?>
									
											<?php	
											$SNo = 1;
											
											foreach($UserExitrecord as $emp): ?>
											<tr>
											
												<td><?php  echo $SNo; ?></td>
												<td><?php  echo $emp->name; ?></td>
												<td><?php  echo $emp->employee_id; ?></td>
												
												<td><?php  echo $emp->applydate; ?></td>
												
												<td>
													<div class=" ">
													<ul class="tnUemp">
													<li class="tnNotify tnAccept"><a href="#" data-leaveAccept="<?php echo $emp->appraisal_request_id; ?>" class="LeaveAccept">Accept</a></li>
													</ul>

													</div>
												</td>
												
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
							

							

<div class="article-loop">
	<div class="" >

		<div class="" style="margin-bottom: 40px;">
			<div class="head" style="width: 100%;background: #1C304C;padding: 7px 10px;color: white;FONT-WEIGHT: 600;">
				Employee Information
			</div>
			<div class="">
				<div class="row" style="margin-right: 0px;margin-left: 0px;">
					<div class="col-lg-3 appraisal-columns">Employee Name : </div>
					<div class="col-lg-3 appraisal-columns" style="font-weight: bold;"> Abhishek </div>
					<div class="col-lg-3 appraisal-columns" >Department :</div>
					<div class="col-lg-3 appraisal-columns" style="font-weight: bold;">Developer</div>

				</div>
				<div class="row" style="margin-right: 0px;margin-left: 0px;">
					<div class="col-lg-2 appraisal-columns">Position Title: </div>
					<div class="col-lg-4 appraisal-columns" style="font-weight: bold;">  </div>
					<div class="col-lg-2 appraisal-columns">Employee Id :</div>
					<div class="col-lg-4 appraisal-columns"style="font-weight: bold;">QGS052</div>

				</div>
				<div class="row" style="margin-right: 0px;margin-left: 0px;">
					<div class="col-lg-6 appraisal-columns">Performance Evaluation Period : 2020-2021 </div>
					<div class="col-lg-3 appraisal-columns">Type of Review:</div>
					<div class="col-lg-3 appraisal-columns"style="font-weight: bold;"> Performance Evaluation</div>

				</div>
				<div class="row" style="margin-right: 0px;margin-left: 0px;">
					<div class="col-lg-2 appraisal-columns">To : Manager  </div>
					<div class="col-lg-4 appraisal-columns"> From : 1st April-31st March </div>
					<div class="col-lg-2 appraisal-columns">Mid- year: No</div>
					<div class="col-lg-4 appraisal-columns">Year End: Yes</div>

				</div>


			</div>
		</div>
		<div class="" style="margin-bottom: 40px;  border: 1px solid #c6c6c6;border-top: none;">
			<div class="head" style="width: 100%;background: #1C304C;padding: 7px 10px;color: white; FONT-WEIGHT: 600;">
				Goals & Objectives
			</div>
			<div class="content">
				<ul>
			<li>Strengthen two-way communication regarding job performance and periodically assess goals and opportunities for the unit and the individual. </li>
			<li>Establish a mutually-understood set of performance expectations</li>
			<li>Recognize contributions of employee.</li>
			<li>Discuss opportunities for growth and development.</li>
			<li>Provide necessary feedback when performance does not meet expectation as situation warrants in addition to annual evaluation.</li>
			<li>Align employee performance with the emission and goals of the company and unit.</li>
				</ul>


			</div>
		</div>
		<div class="" style="margin-bottom: 40px;  border: 1px solid #c6c6c6;border-top: none;">
			<div class="head" style="width: 100%;background: #1C304C;padding: 7px 10px;color: white; FONT-WEIGHT: 600;">
				Process
			</div>
			<div class="content">
				<ul style="list-style:auto;">
			<li>Supervisor requests prior year’s goals/ objectives, general performance, associated outcomes as well as other information relevant to the performance review process and review them with the employee prior to discussing this year’s evaluation.   </li>
			<li>Employee submits prior year’s goals and their associated outcomes as well as their information relevant to the performance review process at least one week before their scheduled meeting.</li>
			<li>Supervisor reviews and compares the full range of this year’s performance to the past year and completes all the sections of the Performance Evaluation, following the instructions provided.	</li>
			<li>Supervisor provides a working draft of the Performance Evaluation to the employee. Supervisor and employee determine future meeting data and time.</li>
			<li>Supervisor and employee meet to discuss the performance evaluation competency ratings.</li>
			<li>Supervisor and employee create shared goals and objectives to enhance employee performance and successful completion of departmental and company goals and objectives.</li>
			<li>The overall evaluation rating is calculated according to the most frequently assigned Competency Rating and supervisor/employee discussion.</li>
			<li>Upon completion of the performance evaluation discussion, the employee and supervisor sign the evaluation. The employee and supervisor should utilize the comment section to provide additional explanations as needed.</li>
			<li>Supervisor sends the signed copy to the second level supervisor for review and signature.</li>	
			<li>Once signed, the original document is sent to the Office of Human Resource/Director. An electronic copy may be provided to the employee upon request.</li>	
			<li>Supervisor and Employee should then review employee’s Job Analysis Questionnaire (JAQ) to ensure that actual duties match job description and submit changes as needed.</li>
			</ul>


			</div>
		</div>

	</div>
  </div>



  <div class="article-loop">
	<div class="" >

		
		<div class="" style="margin-bottom: 40px;border: 1px solid #c6c6c6;border-top: none;">
			<div class="head" style="width: 100%;background: #1C304C;padding: 7px 10px;color: white; FONT-WEIGHT: 600;">
				Performance Evaluation - To be completed by supervisor/Manager
			</div>
			<div class="content">
				<p class="form-top">Instructions</p>
				<p class="form-bottom">For each competency, mark the rating that best describes the employee’s performance. Select N/A if the competency is not applicable. In the NARRATIVE ASSESSMENT section, provide specific examples and illustration. Explanations are required when selecting a rating of “Approaches Expectations” of “Does not Meet Expectations”.</p>

			</div>
		</div>
		<div class="" style="margin-bottom: 40px;">
			<div class="row head" style="width: 100%;background: #1C304C;color: white;FONT-WEIGHT: 600;margin-left: 0px;height: 37px;">
				<div class="col-lg-3" style="border-right: 1px solid white;font-size:16px;color: #fff;padding: 7px 15px;">Rating Scale</div>
				<div class="col-lg-9" style="font-size:16px;color: #fff;padding: 7px 15px;">Defination</div>
			</div>
			<div class="row" style="border: 1px solid #c6c6c6;margin-right: 0px;margin-left: 0px;border-bottom: none;">
				<div class="col-lg-3" style="border-right: 1px solid #c6c6c6;font-weight: bold;color: #000;padding-top: 35px;">O = Outstanding</div>
				<div class="col-lg-9" style="font-size:14px; color:#000; padding: 15px;">Objectives ad standards are clearly and substantially surpassed. Consistently and significantly exceeds all performance expectation and standards. Highest performance level. Demonstrates a personal commitment to a high level of performance and result, even under challenging work goals.</div>
			</div>
			<div class="row" style="border: 1px solid #c6c6c6;margin-right: 0px;margin-left: 0px;border-bottom: none;">
				<div class="col-lg-3" style="border-right: 1px solid #c6c6c6;font-weight: bold;color: #000;padding-top: 35px;">E = Exceeds Expectations </div>
				<div class="col-lg-9" style="font-size:14px; color:#000; padding: 15px;">Frequently exceeds job requirements. Makes contributions well beyond job demand. Seizes initiative in development and implementation of challenging work goals. Each project or job is done thoroughly and on time. Thinks beyond details of the job, working toward the overall goals of the component.</div>
			</div>
			<div class="row" style="border: 1px solid #c6c6c6;margin-right: 0px;margin-left: 0px;border-bottom: none;">
				<div class="col-lg-3" style="border-right: 1px solid #c6c6c6;font-weight: bold;color: #000;padding-top: 44px;">M = Meet Expectations </div>
				<div class="col-lg-9" style="font-size:14px; color:#000; padding: 15px;">Performance is what is expected of a fully qualified and experienced person in this position. All objectives and standards are met. Consistently meets all performance expectations and standards. Job well done. Errors are minimal and seldom repeated. Prioritizes problems and projects well. Requires normal supervision and follow- up. Almost always completes work or projects on schedule.</div>
			</div>
			<div class="row" style="border: 1px solid #c6c6c6;margin-right: 0px;margin-left: 0px;border-bottom: none;">
				<div class="col-lg-3" style="border-right: 1px solid #c6c6c6;font-weight: bold;color: #000;padding-top: 35px;">A = Approaches Expectations  </div>
				<div class="col-lg-9" style="font-size:14px; color:#000; padding: 15px;">Objectives and standards are generally met but full result are not totally achieved. Occasionally falls short of consistently meeting performance expectations and standards. Some performance aspects were nit met- needs slight improvements. Could result from being newly appointed to the position- continuing to learn all aspects of the position.</div>
			</div>
			<div class="row" style="border: 1px solid #c6c6c6;margin-right: 0px;margin-left: 0px;border-bottom: none;">
				<div class="col-lg-3" style="border-right: 1px solid #c6c6c6;font-weight: bold;color: #000;padding-top: 35px;">N = Does Not Meet	Expectations </div>
				<div class="col-lg-9" style="font-size:14px; color:#000; padding: 15px;">Objectives and standards are consistently not met. Consistently fails to meet performance expectations. Needs significant improvement. Has been on the job long enough ti have shown better performance. Excessive attention by supervisor is required. Does not grasp situation when explained. Corrective action is required.</div>
			</div>
			<div class="row" style="border: 1px solid #c6c6c6;margin-right: 0px;margin-left: 0px;">
				<div class="col-lg-3" style="border-right: 1px solid #c6c6c6;font-weight: bold;color: #000;padding-top: 15px;">NA = Not Applicable </div>
				<div class="col-lg-9" style="font-size:14px; color:#000; padding: 15px;">Done not apply to job performance expectations.</div>
			</div>
		</div>

	</div>
  </div>
 
			
  
  <div class="article-loop">
	<div class="" >

		
		
		<div class="" style="margin-bottom: 40px;">
			<div class="row head" style="width: 100%;background: #1C304C;color: white;FONT-WEIGHT: 600;margin-left: 0px;height: 37px;">
				<div class="col-lg-4" style="border-right: 1px solid white;font-size:16px;color: #fff;padding: 7px 15px;">Evalution Time</div>
				<div class="col-lg-8" style="font-size:16px;color: #fff;padding: 7px 15px;">Rating</div>
			</div>
			<div class="row" style="border: 1px solid #c6c6c6;margin-right: 0px;margin-left: 0px;border-bottom: none;">
				<div class="col-lg-4" style="border-right: 1px solid #c6c6c6;font-weight: bold;color: #000;padding-top: 15px;">General Quality of Work</div>
				<div class="col-lg-8" style="font-size:14px; color:#000; padding: 15px;"> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
			</div>
			<div class="row" style="border: 1px solid #c6c6c6;margin-right: 0px;margin-left: 0px;border-bottom: none;">
				<div class="col-lg-4" style="border-right: 1px solid #c6c6c6;font-weight: bold;color: #000;padding-top: 15px;">Dependability </div>
				<div class="col-lg-8" style="font-size:14px; color:#000; padding: 15px;"><i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
			</div>
			<div class="row" style="border: 1px solid #c6c6c6;margin-right: 0px;margin-left: 0px;border-bottom: none;">
				<div class="col-lg-4" style="border-right: 1px solid #c6c6c6;font-weight: bold;color: #000;padding-top: 15px;">Job Knowledge</div>
				<div class="col-lg-8" style="font-size:14px; color:#000; padding: 15px;"><i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
			</div>
			<div class="row" style="border: 1px solid #c6c6c6;margin-right: 0px;margin-left: 0px;border-bottom: none;">
				<div class="col-lg-4" style="border-right: 1px solid #c6c6c6;font-weight: bold;color: #000;padding-top: 15px;">Communication Skills</div>
				<div class="col-lg-8" style="font-size:14px; color:#000; padding: 15px;"><i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
			</div>
			<div class="row" style="border: 1px solid #c6c6c6;margin-right: 0px;margin-left: 0px;border-bottom: none;">
				<div class="col-lg-4" style="border-right: 1px solid #c6c6c6;font-weight: bold;color: #000;padding-top: 15px;">Personality</div>
				<div class="col-lg-8" style="font-size:14px; color:#000; padding: 15px;"><i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
			</div>
			<div class="row" style="border: 1px solid #c6c6c6;margin-right: 0px;margin-left: 0px;">
				<div class="col-lg-4" style="border-right: 1px solid #c6c6c6;font-weight: bold;color: #000;padding-top: 15px;">Management Ability</div>
				<div class="col-lg-8" style="font-size:14px; color:#000; padding: 15px;"><i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
			</div>
			<div class="row" style="border: 1px solid #c6c6c6;margin-right: 0px;margin-left: 0px;">
				<div class="col-lg-4" style="border-right: 1px solid #c6c6c6;font-weight: bold;color: #000;padding-top: 15px;">Contribution To Group</div>
				<div class="col-lg-8" style="font-size:14px; color:#000; padding: 15px;"><i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
			</div>
			<div class="row" style="border: 1px solid #c6c6c6;margin-right: 0px;margin-left: 0px;">
				<div class="col-lg-4" style="border-right: 1px solid #c6c6c6;font-weight: bold;color: #000;padding-top: 15px;">Productivity</div>
				<div class="col-lg-8" style="font-size:14px; color:#000; padding: 15px;"><i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
			</div>
			<div class="row" style="border: 1px solid #c6c6c6;margin-right: 0px;margin-left: 0px;">
				<div class="col-lg-4" style="border-right: 1px solid #c6c6c6;font-weight: bold;color: #000;padding-top: 15px;">Achievement of Goal</div>
				<div class="col-lg-8" style="font-size:14px; color:#000; padding: 15px;"><i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
			</div>
			<div class="row" style="border: 1px solid #c6c6c6;margin-right: 0px;margin-left: 0px;">
				<div class="col-lg-4" style="border-right: 1px solid #c6c6c6;font-weight: bold;color: #000;padding-top: 15px;">Behaviour on Floor</div>
				<div class="col-lg-8" style="font-size:14px; color:#000; padding: 15px;"><i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
			</div>
			<div class="row" style="border: 1px solid #c6c6c6;margin-right: 0px;margin-left: 0px;">
				<div class="col-lg-4" style="border-right: 1px solid #c6c6c6;font-weight: bold;color: #000;padding-top: 15px;">Presentation Feedback</div>
				<div class="col-lg-8" style="font-size:14px; color:#000; padding: 15px;"><i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
			</div>
		</div>


			<div>

				<div class="row head" style="width: 100%;background: #1C304C;color: white;FONT-WEIGHT: 600;margin-left: 0px;height: 37px;">
					<div class="col-lg-4" style="border-right: 1px solid white;font-size:16px;color: #fff;padding: 7px 15px;">Core Competencies</div>
					<div class="col-lg-8" style="font-size:16px;color: #fff;padding: 7px 15px;">Narrative assessment of competencies</div>
				</div>
				<div style="background: #e9e9e9;color: #000;padding: 10px 4px;font-size: 16px;font-weight: bold;">1.  Job Knowledge</div>
				<div class="row" style="border: 1px solid #c6c6c6;margin-right: 0px;margin-left: 0px;">
					<div class="col-lg-4" style="border-right: 1px solid #c6c6c6;color: #000;padding-top: 15px;font-size: 14px;text-align: justify;padding-left: 20px;">
					<ul>
						<li style="margin-bottom: 10px;">Understands how position supports the institution’s strategic plan.</li>
						<li style="margin-bottom: 10px;">Demonstrates knowledge and skills necessary to perform the job effectively and applies to critical work issues in a timely manner.</li>
						<li style="margin-bottom: 10px;">Demonstrates willingness to learn new skills, methods, processes to enhance job performance.</li>
						<li style="margin-bottom: 10px;">Performs the full range of duties and responsibilities associated with the job.</li>
					</ul>
					</div>
					<div class="col-lg-8" style="font-size:14px; color:#000; padding: 15px;"></div>
				</div>

				<div class="row" style="border: 1px solid #c6c6c6;margin-right: 0px;margin-left: 0px;">
					<div class="col-lg-4" style="border-right: 1px solid #c6c6c6;font-weight: bold;color: #000;padding-top: 15px;"> </div>
					<div class="col-lg-8" style="font-size:14px; color:#000; padding: 15px;">Rating : <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
				</div>

				<div style="background: #e9e9e9;color: #000;padding: 10px 4px;font-size: 16px;font-weight: bold;">2.  Interpersonal skills, cooperation, collaboration</div>
				<div class="row" style="border: 1px solid #c6c6c6;margin-right: 0px;margin-left: 0px;">
					<div class="col-lg-4" style="border-right: 1px solid #c6c6c6;color: #000;padding-top: 15px;font-size: 14px;text-align: justify;padding-left: 20px;">
					<ul>
						<li style="margin-bottom: 10px;">Demonstrates effective positive customer/ student service.</li>
						<li style="margin-bottom: 10px;">Develops and maintains professional working relationships with internal and/ or external constituencies.</li>
						<li style="margin-bottom: 10px;">Encourages collaboration and sharing of information.</li>
					</ul>
					</div>
					<div class="col-lg-8" style="font-size:14px; color:#000; padding: 15px;"></div>
				</div>

				<div class="row" style="border: 1px solid #c6c6c6;margin-right: 0px;margin-left: 0px;">
					<div class="col-lg-4" style="border-right: 1px solid #c6c6c6;font-weight: bold;color: #000;padding-top: 15px;"> </div>
					<div class="col-lg-8" style="font-size:14px; color:#000; padding: 15px;">Rating : <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
				</div>


			</div>


	</div>

  </div>

  <div class="article-loop">


	<div style="background: #e9e9e9;color: #000;padding: 10px 4px;font-size: 16px;font-weight: bold;">3.  Communication Skills</div>
	<div class="row" style="border: 1px solid #c6c6c6;margin-right: 0px;margin-left: 0px;">
		<div class="col-lg-4" style="border-right: 1px solid #c6c6c6;color: #000;padding-top: 15px;font-size: 14px;text-align: justify;padding-left: 20px;">
		<ul>
			<li style="margin-bottom: 10px;">Writers and communicates clearly and accurately.</li>
			<li style="margin-bottom: 10px;">Listens well; is responsive to inquiries, directions, and suggestions.</li>
			<li style="margin-bottom: 10px;">Uses appropriate communication based on the needs at hand.</li>
		</ul>
		</div>
		<div class="col-lg-8" style="font-size:14px; color:#000; padding: 15px;"></div>
	</div>
	<div class="row" style="border: 1px solid #c6c6c6;margin-right: 0px;margin-left: 0px;">
		<div class="col-lg-4" style="border-right: 1px solid #c6c6c6;font-weight: bold;color: #000;padding-top: 15px;"> </div>
		<div class="col-lg-8" style="font-size:14px; color:#000; padding: 15px;">Rating : <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
	</div>

	<div style="background: #e9e9e9;color: #000;padding: 10px 4px;font-size: 16px;font-weight: bold;">4.  Planning, Organizing, and Achieving Results</div>
	<div class="row" style="border: 1px solid #c6c6c6;margin-right: 0px;margin-left: 0px;">
		<div class="col-lg-4" style="border-right: 1px solid #c6c6c6;color: #000;padding-top: 15px;font-size: 14px;text-align: justify;padding-left: 20px;">
		<ul>
			<li style="margin-bottom: 10px;">Develops goals, plans, and priorities to achieve objectives; evaluates goals and accomplishments.</li>
			<li style="margin-bottom: 10px;">Meet deadlines in a timely and efficient manner.</li>
			<li style="margin-bottom: 10px;">Find and uses resources well.</li>
		</ul>
		</div>
		<div class="col-lg-8" style="font-size:14px; color:#000; padding: 15px;"></div>
	</div>
	<div class="row" style="border: 1px solid #c6c6c6;margin-right: 0px;margin-left: 0px;">
		<div class="col-lg-4" style="border-right: 1px solid #c6c6c6;font-weight: bold;color: #000;padding-top: 15px;"> </div>
		<div class="col-lg-8" style="font-size:14px; color:#000; padding: 15px;">Rating : <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
	</div>


	<div style="background: #e9e9e9;color: #000;padding: 10px 4px;font-size: 16px;font-weight: bold;">5.  Problem Analysis and Decision Making</div>
	<div class="row" style="border: 1px solid #c6c6c6;margin-right: 0px;margin-left: 0px;">
		<div class="col-lg-4" style="border-right: 1px solid #c6c6c6;color: #000;padding-top: 15px;font-size: 14px;text-align: justify;padding-left: 20px;">
		<ul>
			<li style="margin-bottom: 10px;">Gathers and analyzes appropriate information before making decisions.</li>
			<li style="margin-bottom: 10px;">Seeks information and input from other stakeholders as appropriate.</li>
			<li style="margin-bottom: 10px;">Develops and implements effective solutions.</li>
		</ul>
		</div>
		<div class="col-lg-8" style="font-size:14px; color:#000; padding: 15px;"></div>
	</div>
	<div class="row" style="border: 1px solid #c6c6c6;margin-right: 0px;margin-left: 0px;">
		<div class="col-lg-4" style="border-right: 1px solid #c6c6c6;font-weight: bold;color: #000;padding-top: 15px;"> </div>
		<div class="col-lg-8" style="font-size:14px; color:#000; padding: 15px;">Rating : <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
	</div>

	<div style="background: #e9e9e9;color: #000;padding: 10px 4px;font-size: 16px;font-weight: bold;">6.  Commitment to Diversity/Inclusion</div>
	<div class="row" style="border: 1px solid #c6c6c6;margin-right: 0px;margin-left: 0px;">
		<div class="col-lg-4" style="border-right: 1px solid #c6c6c6;color: #000;padding-top: 15px;font-size: 14px;text-align: justify;padding-left: 20px;">
		<ul>
			<li style="margin-bottom: 10px;">Demonstrate due concerns for others.</li>
			<li style="margin-bottom: 10px;">Participated in programs/processes that promotes diversity/equal opportunity.</li>
		</ul>
		</div>
		<div class="col-lg-8" style="font-size:14px; color:#000; padding: 15px;"></div>
	</div>
	<div class="row" style="border: 1px solid #c6c6c6;margin-right: 0px;margin-left: 0px;">
		<div class="col-lg-4" style="border-right: 1px solid #c6c6c6;font-weight: bold;color: #000;padding-top: 15px;"> </div>
		<div class="col-lg-8" style="font-size:14px; color:#000; padding: 15px;">Rating : <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
	</div>


	<div style="background: #e9e9e9;color: #000;padding: 10px 4px;font-size: 16px;font-weight: bold;">7.  Leadership</div>
	<div class="row" style="border: 1px solid #c6c6c6;margin-right: 0px;margin-left: 0px;">
		<div class="col-lg-4" style="border-right: 1px solid #c6c6c6;color: #000;padding-top: 15px;font-size: 14px;text-align: justify;padding-left: 20px;">
		<ul>
			<li style="margin-bottom: 10px;">Demonstrate commitment and provides leadership through personal example and professional expertise.</li>
			<li style="margin-bottom: 10px;">Demonstrate the ability to motivate coworkers.</li>
			<li style="margin-bottom: 10px;">Display openness to new ideas and supports an environment of continuous improvements.</li>
		</ul>
		</div>
		<div class="col-lg-8" style="font-size:14px; color:#000; padding: 15px;"></div>
	</div>
	<div class="row" style="border: 1px solid #c6c6c6;margin-right: 0px;margin-left: 0px;">
		<div class="col-lg-4" style="border-right: 1px solid #c6c6c6;font-weight: bold;color: #000;padding-top: 15px;"> </div>
		<div class="col-lg-8" style="font-size:14px; color:#000; padding: 15px;">Rating : <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
	</div>

	</div>


	<div class="article-loop">


		<div style="background: #e9e9e9;color: #000;padding: 10px 4px;font-size: 16px;font-weight: bold;">8.  Supervision *applies to those in supervision/management positions</div>
		<div class="row" style="border: 1px solid #c6c6c6;margin-right: 0px;margin-left: 0px;">
			<div class="col-lg-4" style="border-right: 1px solid #c6c6c6;color: #000;padding-top: 15px;font-size: 14px;text-align: justify;padding-left: 20px;">
			<ul>
				<li style="margin-bottom: 10px;">Set clear goals and expectations for employees.</li>
				<li style="margin-bottom: 10px;">Provides adequate support for employees to complete tasks.</li>
				<li style="margin-bottom: 10px;">Creates a positive work climate that encourages employee commitment to teamwork, organizational goals, and strategic plan</li>
				<li style="margin-bottom: 10px;">Provides informal, ongoing feedback to employees as formal as performance evaluation.</li>	
				<li style="margin-bottom: 10px;">Supports the professional development of employees.</li>	
				<li style="margin-bottom: 10px;">Demonstrates fiscal responsibility plans and controls expenditure and materials.</li>	
				<li style="margin-bottom: 10px;">Make effective staffing decisions.</li>	
				<li style="margin-bottom: 10px;">Manages unit effectively during change.</li>	
				<li style="margin-bottom: 10px;">Delegate’s authority and responsibility appropriately.</li>	
			</ul>
			</div>
			<div class="col-lg-8" style="font-size:14px; color:#000; padding: 15px;"></div>
		</div>
		<div class="row" style="border: 1px solid #c6c6c6;margin-right: 0px;margin-left: 0px;">
			<div class="col-lg-4" style="border-right: 1px solid #c6c6c6;font-weight: bold;color: #000;padding-top: 15px;"> </div>
			<div class="col-lg-8" style="font-size:14px; color:#000; padding: 15px;">Rating : <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
		</div>

		<div style="background: #1C304C;color: #fff;padding: 10px 4px;font-size: 16px;font-weight: bold; text-align:center;">Overall Rating</div>
		<div>
			<div class="row text-center" style="margin-left: 0px;margin-right: 0px;">
				<div class="col-lg-4 p-4 " style="border: 1px solid #cdcdcd;"> <i class="fas fa-check-circle"></i> Outstanding</div>
				<div class="col-lg-4 p-4 " style="border: 1px solid #cdcdcd;"> <i class="far fa-check-circle"></i> Exceeds Expectations</div>
				<div class="col-lg-4 p-4 " style="border: 1px solid #cdcdcd;"> <i class="far fa-check-circle"></i> Meets Expectations</div>
			</div>
			<div class="row text-center" style="margin-left: 0px;margin-right: 0px;">
				<div class="col-lg-4 p-4" style="border: 1px solid #cdcdcd;"> <i class="far fa-check-circle"></i> Approaches Expectations</div>
				<div class="col-lg-4 p-4" style="border: 1px solid #cdcdcd;"> <i class="far fa-check-circle"></i> Does Not Meet Expectations</div>
				<div class="col-lg-4 p-4" style="border: 1px solid #cdcdcd;"> <i class="far fa-check-circle"></i> N/A</div>
			</div>

		</div>

	</div>




	<div class="article-loop">

		<div style="background: #1C304C;color: #fff;padding: 10px 4px;font-size: 16px;font-weight: bold; text-align:center;">Employee Feedback</div>
		<div style="background: #e9e9e9;color: #000;padding: 10px 4px;font-size: 16px;font-weight: bold;">What are your most important accomplishment over the past year ?</div>
		<div style="height: 160px;border: 1px solid #cdcdcd;border-top: none;margin-bottom: 20px;"></div>

		<div style="background: #e9e9e9;color: #000;padding: 10px 4px;font-size: 16px;font-weight: bold;">What are the weakest areas and how could you improve?</div>
		<div style="height: 160px;border: 1px solid #cdcdcd;border-top: none;margin-bottom: 20px;"></div>

		<div style="background: #e9e9e9;color: #000;padding: 10px 4px;font-size: 16px;font-weight: bold;">What are your strength and weakness?</div>
		<div style="height: 160px;border: 1px solid #cdcdcd;border-top: none;margin-bottom: 20px;"></div>

		<div style="background: #e9e9e9;color: #000;padding: 10px 4px;font-size: 16px;font-weight: bold;">Other concern you would like to discuss. </div>
		<div style="height: 160px;border: 1px solid #cdcdcd;border-top: none;margin-bottom: 20px;"></div>

	</div>


	<div class="article-loop">

		<div style="background: #1C304C;color: #fff;padding: 10px 4px;font-size: 16px;font-weight: bold; text-align:center;">TO BE FILLED BY MANAGER</div>
		
		<div style="background: #9555e94d;padding: 10px 3px;">
			<p style="margin-bottom: 10px;color: #884bff;font-weight: bold;">Overall Evaluation</p> <br>
			<p style="margin-top: -27px;margin-bottom: 0px;color: #000;">Consistent with the rates above, evaluate the overall performance of the staff member</p>
		</div>
		<div style="background: #e9e9e9;color: #000;padding: 10px 4px;font-size: 16px;font-weight: bold;">Narrative Assesment</div>
		<div style="height: 160px;border: 1px solid #cdcdcd;border-top: none;margin-bottom: 20px;"></div>

		<div style="background: #e9e9e9;color: #000;padding: 10px 4px;font-size: 16px;font-weight: bold;">Comment on Employee's Strengths </div>
		<div style="height: 160px;border: 1px solid #cdcdcd;border-top: none;margin-bottom: 20px;"></div>

		<div style="background: #e9e9e9;color: #000;padding: 10px 4px;font-size: 16px;font-weight: bold;">Comment on Areas for Growth and Change</div>
		<div style="height: 160px;border: 1px solid #cdcdcd;border-top: none;margin-bottom: 20px;"></div>

	

	</div>


	<div class="article-loop">

		<div style="background: #1C304C;color: #fff;padding: 10px 4px;font-size: 16px;font-weight: bold; text-align:center;">GOALS & COMMENTS</div>	
		<div style="background: #e9e9e9;color: #000;padding: 10px 4px;font-size: 16px;font-weight: bold;">Prior Year Goal (s)</div>
		<div style="height: 200px;border: 1px solid #cdcdcd;border-top: none;margin-bottom: 20px;"></div>
		<div style="background: #1C304C;color: #fff;padding: 10px 4px;font-size: 16px;font-weight: bold; ">Goals for Upcoming Year</div>
		<div style="height: 200px;border: 1px solid #cdcdcd;border-top: none;margin-bottom: 20px;">
		<div class="table">
			<table>
			<thead>
				<td>
					<th>Goals</th>
					<th>Expected Outcomes Measurable Criteria</th>
					<th>Time Table </th>
					<th>Isuue/Comment</th>
				</td>
			</thead>
			<tbody>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</tbody>
		</table>

		</div>
		</div>	
	</div>

<script>
  (function($){
    
    var paginate = {
        startPos: function(pageNumber, perPage) {
            // determine what array position to start from
            // based on current page and # per page
            return pageNumber * perPage;
        },

        getPage: function(items, startPos, perPage) {
            // declare an empty array to hold our page items
            var page = [];

            // only get items after the starting position
            items = items.slice(startPos, items.length);

            // loop remaining items until max per page
            for (var i=0; i < perPage; i++) {
                page.push(items[i]); }

            return page;
        },

        totalPages: function(items, perPage) {
            // determine total number of pages
            return Math.ceil(items.length / perPage);
        },

        createBtns: function(totalPages, currentPage) {
            // create buttons to manipulate current page
            var pagination = $('<div class="pagination" />');

            // add a "first" button
            pagination.append('<span class="pagination-button">&laquo;</span>');

            // add pages inbetween
            for (var i=1; i <= totalPages; i++) {
                // truncate list when too large
                if (totalPages > 5 && currentPage !== i) {
                    // if on first two pages
                    if (currentPage === 1 || currentPage === 2) {
                        // show first 5 pages
                        if (i > 8) continue;
                    // if on last two pages
                    } else if (currentPage === totalPages || currentPage === totalPages - 1) {
                        // show last 5 pages
                        if (i < totalPages - 4) continue;
                    // otherwise show 5 pages w/ current in middle
                    } else {
                        if (i < currentPage - 2 || i > currentPage + 2) {
                            continue; }
                    }
                }

                // markup for page button
                var pageBtn = $('<span class="pagination-button page-num" />');

                // add active class for current page
                if (i == currentPage) {
                    pageBtn.addClass('active'); }

                // set text to the page number
                pageBtn.text(i);

                // add button to the container
                pagination.append(pageBtn);
            }

            // add a "last" button
            pagination.append($('<span class="pagination-button">&raquo;</span>'));

            return pagination;
        },

        createPage: function(items, currentPage, perPage) {
            // remove pagination from the page
            $('.pagination').remove();

            // set context for the items
            var container = items.parent(),
                // detach items from the page and cast as array
                items = items.detach().toArray(),
                // get start position and select items for page
                startPos = this.startPos(currentPage - 1, perPage),
                page = this.getPage(items, startPos, perPage);

            // loop items and readd to page
            $.each(page, function(){
                // prevent empty items that return as Window
                if (this.window === undefined) {
                    container.append($(this)); }
            });

            // prep pagination buttons and add to page
            var totalPages = this.totalPages(items, perPage),
                pageButtons = this.createBtns(totalPages, currentPage);

            container.after(pageButtons);
        }
    };

    // stuff it all into a jQuery method!
    $.fn.paginate = function(perPage) {
        var items = $(this);

        // default perPage to 5
        if (isNaN(perPage) || perPage === undefined) {
            perPage = 5; }

        // don't fire if fewer items than perPage
        if (items.length <= perPage) {
            return true; }

        // ensure items stay in the same DOM position
        if (items.length !== items.parent()[0].children.length) {
            items.wrapAll('<div class="pagination-items" />');
        }

        // paginate the items starting at page 1
        paginate.createPage(items, 1, perPage);

        // handle click events on the buttons
        $(document).on('click', '.pagination-button', function(e) {
            // get current page from active button
            var currentPage = parseInt($('.pagination-button.active').text(), 10),
                newPage = currentPage,
                totalPages = paginate.totalPages(items, perPage),
                target = $(e.target);

            // get numbered page
            newPage = parseInt(target.text(), 10);
            if (target.text() == '«') newPage = 1;
            if (target.text() == '»') newPage = totalPages;

            // ensure newPage is in available range
            if (newPage > 0 && newPage <= totalPages) {
                paginate.createPage(items, newPage, perPage); }
        });
    };

})(jQuery);

/* This part is just for the demo,
not actually part of the plugin */
$('.article-loop').paginate(1);

</script>

								
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

	<div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">

			
			<div class="card-header ColorSecondaryPre" style="padding: .5rem 1.25rem .25rem 1.25rem; border-radius: calc(.1rem - 1px) calc(.1rem - 1px) 0 0;">
			<div class="row">
			<h6 class="m-0 font-weight-bold ColorPrimary" style="padding-left: 137px;">Appraisal Request</h6>
			<button style="margin-left: 120px;" type="button" class="close" data-bs-dismiss="modal">&times;</button>
			</div>
			</div>

			<div class="modal-body" style="border: 1px solid #ffffff;">
				<?php echo form_open_multipart('adminzone/Appraisal/ExitRequestAdd'); ?>
			
			
			
			<div class="row">
			<div class="col-lg-6">
			<div class="form-group">
			<label for="email">Apply Date</label>
			<input type="date" name="applydate" class="empInput form-control" style="border: 1px solid #858796;">
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

			
			

			<div class="card-body">
			

			<button type="submit" id="#" id="btnUploadPage" class="btn btn-default leaveApplySubmitBtn">Submit</button>
			</div>
			
			</form>





			<!-- Content Row -->
			



			</div>

			</div>
			</div>

<div class="modal " id="updateModal" role="dialog">
<div class="modal-dialog modal-lg">
<!-- Modal content-->
	<div class="modal-content" style="margin: 196px 9px 0 259px;  width: 89%!important; ">
		<div class="card-header" style="padding:0!important; background-color: #2e2869;">
		<div class="row">
		<h6 class="ColorPrimary" style="padding-left: 302px; padding-top: 10px;">Appraisal Request Details</h6>
		<button style="margin-left:220px;" type="button" class="close" data-bs-dismiss="modal">&times;</button>
		</div>
		</div>

	<div class="modal-body">
	<div class="table-responsive" id="renderHtmlLeave">
									
								</div>
	
	</div>
	</div>
<!-- Content Row -->

</div>

</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
       
		
$(document).ready(function(){
	

 $(".LeaveAccept").click(function(){
    var conf = 'Are you sure You have to Accept this file';
	var id = $(this).attr('data-leaveAccept');
	// var Yid = $(this).attr('data-yearID');
	alert(conf);
	var ajaxurl = "<?=site_url('adminzone/Appraisal/UserExitAccept');?>";
        $.ajax({
            type: "post",
            url: ajaxurl,
            data: { id : id, Accept:true},
			success: response => {

			if(response.status === 1){
			
			}
			},
			error: error => {
			console.log("Error", error);
			}
			
			
	});
	
  });
  
  $(".LeaveDecline").click(function(){
    var conf = 'Are you sure You have to Decline this file';
	var id = $(this).attr('data-leaveDecline');
	// var Yid = $(this).attr('data-yearID');
	alert(conf);
	var ajaxurl = "<?=site_url('adminzone/Appraisal/UserExitDecline');?>";
        $.ajax({
            type: "post",
            url: ajaxurl,
            data: { id : id, Decline:true},
			success: response => {

			if(response.status === 1){
			
			}
			},
			error: error => {
			console.log("Error", error);
			}
			
			
	});
	
  });
  
  
  
  $(".leaveUserDetails").click(function(){
    var conf = 'Are you sure You have to delete this file';
	var id = $(this).attr('data-User');
	// var Yid = $(this).attr('data-yearID');
	alert(conf);
	var ajaxurl = "<?=site_url('adminzone/Ticket/UserDataTicketView');?>";
        $.ajax({
            type: "post",
            url: ajaxurl,
            data: { id : id},
			success: response => {

			if(response.status === 1){
			
			}
			},
			error: error => {
			console.log("Error", error);
			}
			
			
	});
	
  });
  
  
  $("body").on('click', '.Leave_View', function(){
	var id = $(this).attr('data-LeaveId');
	var LeaveId = $(this).attr('data-LID');
	
	var ajaxurl = "<?=site_url('adminzone/Appraisal/UserExitDetails');?>";
        $.ajax({
            type: "post",
            url: ajaxurl,
            data: {id:id, LeaveId:LeaveId},
			dataType: "JSON",
			}).done(function(response){
			$("#updateModal").modal('show');
			if(response){
				
				
				console.log(response.data);
				$("#renderHtmlLeave").html(`
					<table class="table table-bordered  " id="dataTable" width="100%">
										
										
										<tbody>
											
											${response.data.map(function(data){
										return`
										${data.LeaveUser.map(function(LeaveUserData){
										return`
												
											
											<tr>
												
												<td colspan="6" class="fc qdxPrintCF">${LeaveUserData.Description}</td>
												
													
											</tr>`})}
											
											`
										}).join('')}
										
										
										
										</tbody>
									</table>
										`);

				
				} else {
				$("#AttendencedataTable tbody").html("<div>No data Found.....</div>");
			}
				
        });
	
  });
  
		
  
  
});	
	
    </script>
<?php include('footer.php'); ?>