<?php include('header.php'); ?>
<?php include('ExitSidebar.php'); ?>
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

.bg-info {
    background-color: #ececec!important;
}
.p-2 {
    padding: .1rem!important;
}
.sasifb{
	margin-bottom:25px;
}


.form-check-label {
    color: black;
}
.calTH{
	text-align:center;
}

.empCL{
	text-align:center;
}


.table td, .table th {
padding: .3rem .3rem .0rem .3rem!important;
}
.AttSort{
	height: calc(1em + .75rem + 2px);
   
    padding: .200rem .5rem;
    font-size: 14px;
}
.AttSortMonth{
	height: calc(1em + .75rem + 2px);
   
    padding: .200rem .2rem;
    font-size: 14px;
}


.sasifb{
	margin-bottom: 10px;
    margin-top: 10px;
}
.AttFontStatus{
	font-size:14px;
	
}
.cmPayroll{
	font-size:14px;
	font-weight:500;
}



.W-OFF{
	color:#929396;
	background-color:#f9f9fd;
	font-size:12px;
	text-align:center;
}

.H{
	color:#929396;
	background-color:#f9f9fd;
	font-size:12px;
	text-align:center;
}

.MD{
	color:white;
	background-color:#f9f9fd;
	font-size:12px;
	text-align:center;
}

.P{
	
	font-size:12px;
	text-align:center;
}

.CL{
	color:#929396;
	background-color:#f9f9fd;
	font-size:12px;
	text-align:center;
}
.EL{
	color:#929396;
	background-color:#f9f9fd;
	font-size:12px;
	text-align:center;
}
.LWP{
	color:#929396;
	background-color:#f9f9fd;
	font-size:12px;
	text-align:center;
}


.form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + 0.4rem + 2px);
	font-size: 0.9rem;
}

.addEmpSubmitBtn{
	margin: 0px 445px;
	margin-bottom:50px;
	color:white!important;
    
	float:center;
    background: #1C304C;
    
    font-weight: 400;
    border-radius: 2px;
    padding: .2em 2em 0.2em 2em;
    border: none !important;
}
</style>


 <div id="content-wrapper bg-gradient-primary" class="d-flex flex-column" style="margin-top:50px; margin-bottom:50px;">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                 <?php if(!empty($this->session->flashdata('message'))) { ?>
			
			
			<?=$this->session->flashdata('message');?>
			
		<?php } ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    
					<div class="card shadow mb-4">
                        <div class="ColorSecondaryPre" style="padding: 12px 5px 5px 12px;">
                            <h5 class=" md-4 ColorPrimary" style="font-size:17px;">Separation Form 3rd</h5>
                        </div>
                        
                    <!-- Content Row -->
					<!-- Area Chart -->
						
						<div class="">	
						
							
								<?php echo form_open_multipart('hrzone/Separation/ExitThird/'.$User_Id); ?>
								
								<div class="card-body" style="width:1000px;">
								
								
									
									
								<div class="table-responsive">
									<table class="table table-bordered" id="TimelistdataTable" width="100%">
										<thead style="background-color:#f3f3f7;">
											<tr>
												
												<th colspan="6" class="cmPayroll empTL">Employee Exit Interview Form</th>
												
												
												
												
											</tr>
										
										</thead>
										<tbody>
											<tr>
												
												<td style="min-width: 120px!important;">Name</td>
												<td style="min-width: 120px!important;"><input type="text" name="Name" value="<?php if(isset($formData->Name)) echo $formData->Name;?>" class="form-control"></td>
												<td style="min-width: 120px!important;">Emp. Code</td>
												<td style="min-width: 120px!important;"><input type="text" name="EmpCode" value="<?php if(isset($formData->EmpCode)) echo $formData->EmpCode;?>" class="form-control"></td>
												
												
												
											</tr>
											<tr>
												
												<td style="min-width: 120px!important;">Date of Leaving</td>
												<td style="min-width: 120px!important;"><input type="text" name="DateOfLeaving" value="<?php if(isset($formData->DateOfLeaving)) echo $formData->DateOfLeaving;?>" class="form-control"></td>
												<td style="min-width: 120px!important;">Exit Interview Date</td>
												<td style="min-width: 120px!important;"><input type="text" name="ExitInterviewDate" value="<?php if(isset($formData->ExitInterviewDate)) echo $formData->ExitInterviewDate;?>" class="form-control"></td>
												
												
											</tr>
											
										</tbody>
										
									</table>
								</div>
								</div>
								
								
								
								
								<div class="card-body" style="width:1000px;">
								
								
									
									
								<div class="table-responsive">
									<table class="table table-bordered" id="TimelistdataTable" width="100%">
										<thead style="background-color:#f3f3f7;">
											<tr>
												
												<th colspan="6" class="cmPayroll empTL">Reason for Leaving(Please tick min 3 reason)</th>
												
												
												
												
											</tr>
										
										</thead>
										<tbody>
											
											<tr>
												
												<td style="min-width: 15px!important;">S.No</td>
												<td style="min-width: 120px!important;">Reason of Leaving</td>
												<td style="min-width: 120px!important;">Tick</td>
												
												
											</tr>
												<tr>
												
												
												<td style="min-width: 15px!important;">1</td>
												<td style="min-width: 120px!important;">Absconding</td>
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="checkbox" class="form-check-input" name="Absconding" <?php if($formData->Absconding == 1) echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												</tr>
												
												<tr>
												
												
												<td style="min-width: 15px!important;">2</td>
												<td style="min-width: 120px!important;"> value="Absentism">Absentism</td>
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="checkbox" class="form-check-input" name="Absentism" <?php if($formData->Absentism == 1) echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												</tr>
												
												<tr>
												
												
												<td style="min-width: 15px!important;">3</td>
												<td style="min-width: 120px!important;">Fraudulent Activity</td>
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="checkbox" class="form-check-input" name="FraudulentActivity" <?php if($formData->FraudulentActivity == 1) echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												</tr>
												
												<tr>
												
												
												<td style="min-width: 15px!important;">4</td>
												<td style="min-width: 120px!important;">Indiscipline</td>
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="checkbox" class="form-check-input" name="Indiscipline" <?php if($formData->Indiscipline == 1) echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												</tr>
												
												<tr>
												
												
												<td style="min-width: 15px!important;">5</td>
												<td style="min-width: 120px!important;">Non-Preformation</td>
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="checkbox" class="form-check-input" name="NonPreformation" <?php if($formData->NonPreformation == 1) echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												</tr>
												
												<tr>
												
												
												<td style="min-width: 15px!important;">6</td>
												<td style="min-width: 120px!important;">Growth Opportunities</td>
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="checkbox" class="form-check-input" name="GrowthOpportunities" <?php if($formData->GrowthOpportunities == 1) echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												</tr>
												
												<tr>
												
												
												<td style="min-width: 15px!important;">7</td>
												<td style="min-width: 120px!important;">Health of Family member</td>
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="checkbox" class="form-check-input" name="HealthOfFamilyMember" <?php if($formData->HealthOfFamilyMember == 1) echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												</tr>
												
												<tr>
												
												
												<td style="min-width: 15px!important;">8</td>
												<td style="min-width: 120px!important;">Higher Study</td>
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="checkbox" class="form-check-input" name="HigherStudy" <?php if($formData->HigherStudy == 1) echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												</tr>
												
												<tr>
												
												
												<td style="min-width: 15px!important;">9</td>
												<td style="min-width: 120px!important;">Job Environment</td>
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="checkbox" class="form-check-input" name="JobEnvironment" <?php if($formData->JobEnvironment == 1) echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												</tr>
												
												
												<tr>
												
												
												<td style="min-width: 15px!important;">10</td>
												<td style="min-width: 120px!important;">Job Profile</td>
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="checkbox" class="form-check-input" name="JobProfile" <?php if($formData->JobProfile == 1) echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												</tr>
												
												
												<tr>
												
												
												<td style="min-width: 15px!important;">11</td>
												<td style="min-width: 120px!important;">Marriage</td>
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="checkbox" class="form-check-input" name="Marriage" <?php if($formData->Marriage == 1) echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												</tr>
												
												
												<tr>
												
												
												<td style="min-width: 15px!important;">12</td>
												<td style="min-width: 120px!important;">Medicine</td>
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="checkbox" class="form-check-input" name="Medicine" <?php if($formData->Medicine == 1) echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												</tr>
												
												
												<tr>
												
												
												<td style="min-width: 15px!important;">13</td>
												<td style="min-width: 120px!important;">Own Business</td>
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="checkbox" class="form-check-input" name="OwnBusiness" <?php if($formData->OwnBusiness == 1) echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												</tr>
												
												
												<tr>
												
												
												<td style="min-width: 15px!important;">14</td>
												<td style="min-width: 120px!important;">Relocation</td>
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="checkbox" class="form-check-input" name="Relocation" <?php if($formData->Relocation == 1) echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												</tr>
												
												
												<tr>
												
												
												<td style="min-width: 15px!important;">15</td>
												<td style="min-width: 120px!important;">Salary</td>
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="checkbox" class="form-check-input" name="Salary" <?php if($formData->Salary == 1) echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												</tr>
												
												
												<tr>
												
												
												<td style="min-width: 15px!important;">16</td>
												<td style="min-width: 120px!important;">Any Other</td>
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="checkbox" class="form-check-input" name="AnyOther" <?php if($formData->AnyOther == 1) echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												</tr>
												
												
											
										</tbody>
										
									</table>
								</div>
								</div>
								
								
								<div class="card-body" style="width:1000px;">
								
								
									
									
								<div class="table-responsive">
									<table class="table table-bordered" id="TimelistdataTable" width="100%">
										<thead style="background-color:#f3f3f7;">
											<tr>
												
												<th colspan="6" class="cmPayroll empTL">Reason for Leaving(Please tick min 3 reason)</th>
												
												
												
												
											</tr>
										
										</thead>
										<tbody>
											
											<tr>
												
												<td style="min-width: 15px!important;">S.No</td>
												<td style="min-width: 120px!important;">Parameters</td>
												<td style="min-width: 120px!important;">Always</td>
												<td style="min-width: 120px!important;">Sometime</td>
												<td style="min-width: 120px!important;">Rarely</td>
												<td style="min-width: 120px!important;">Never</td>
												
												
											</tr>
												<tr>
												
												
												<td style="min-width: 15px!important;">1</td>
												<td style="min-width: 120px!important;">My Skills were used effectively</td>
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="MySkillsWereUsedEffectively" value="Always" <?php if($formData->MySkillsWereUsedEffectively == "Always") echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="MySkillsWereUsedEffectively" value="Sometime" <?php if($formData->MySkillsWereUsedEffectively == "Sometime") echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="MySkillsWereUsedEffectively" value="Rarely" <?php if($formData->MySkillsWereUsedEffectively == "Rarely") echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="MySkillsWereUsedEffectively" value="Never" <?php if($formData->MySkillsWereUsedEffectively == "Never") echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												
												
												</tr>
												
												
												<tr>
												
												
												<td style="min-width: 15px!important;">2</td>
												<td style="min-width: 120px!important;">I was given due recognition for the work.</td>
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="IWasGivenDueRecognitionForTheWork" value="Always" <?php if($formData->IWasGivenDueRecognitionForTheWork == "Always") echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="IWasGivenDueRecognitionForTheWork" value="Sometime" <?php if($formData->IWasGivenDueRecognitionForTheWork == "Sometime") echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="IWasGivenDueRecognitionForTheWork" value="Rarely" <?php if($formData->IWasGivenDueRecognitionForTheWork == "Rarely") echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="IWasGivenDueRecognitionForTheWork" value="Never" <?php if($formData->IWasGivenDueRecognitionForTheWork == "Never") echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												</tr>
												
												
												<tr>
												
												
												<td style="min-width: 15px!important;">3</td>
												<td style="min-width: 120px!important;">I was able to manage the work given to me</td>
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="IWasAbleToManageTheWorkGivenToMe" value="Always" <?php if($formData->IWasAbleToManageTheWorkGivenToMe == "Always") echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="IWasAbleToManageTheWorkGivenToMe" value="Sometime" <?php if($formData->IWasAbleToManageTheWorkGivenToMe == "Sometime") echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="IWasAbleToManageTheWorkGivenToMe" value="Rarely" <?php if($formData->IWasAbleToManageTheWorkGivenToMe == "Rarely") echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="IWasAbleToManageTheWorkGivenToMe" value="Never" <?php if($formData->IWasAbleToManageTheWorkGivenToMe == "Never") echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												
												</tr>
												
												
												<tr>
												
												
												<td style="min-width: 15px!important;">4</td>
												<td style="min-width: 120px!important;">My Knowledge for the job was sufficient</td>
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="MyKnowledgeForTheJobWasSufficient" value="Always" <?php if($formData->MyKnowledgeForTheJobWasSufficient == "Always") echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="MyKnowledgeForTheJobWasSufficient" value="Sometime" <?php if($formData->MyKnowledgeForTheJobWasSufficient == "Sometime") echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="MyKnowledgeForTheJobWasSufficient" value="Rarely" <?php if($formData->MyKnowledgeForTheJobWasSufficient == "Rarely") echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="MyKnowledgeForTheJobWasSufficient" value="Never" <?php if($formData->MyKnowledgeForTheJobWasSufficient == "Never") echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												</tr>
												
												
												
												
												
												
											
										</tbody>
										
									</table>
								</div>
								</div>
								
								
								<div class="card-body" style="width:1000px;">
								
								
									
									
								<div class="table-responsive">
									<table class="table table-bordered" id="TimelistdataTable" width="100%">
										<thead style="background-color:#f3f3f7;">
											<tr>
												
												<th colspan="6" class="cmPayroll empTL">Please rate of the working with your superiors</th>
												
												
												
												
											</tr>
										
										</thead>
										<tbody>
											
											<tr>
												
												<td style="min-width: 15px!important;">S.No</td>
												<td style="min-width: 120px!important;">Parameters</td>
												<td style="min-width: 120px!important;">Always</td>
												<td style="min-width: 120px!important;">Sometime</td>
												<td style="min-width: 120px!important;">Rarely</td>
												<td style="min-width: 120px!important;">Never</td>
												
												
											</tr>
												<tr>
												
												
												<td style="min-width: 15px!important;">1</td>
												<td style="min-width: 120px!important;">Provides effective coaching</td>
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="ProvidesEffectiveCoaching" value="Always" <?php if($formData->ProvidesEffectiveCoaching == "Always") echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="ProvidesEffectiveCoaching" value="Sometime" <?php if($formData->ProvidesEffectiveCoaching == "Sometime") echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="ProvidesEffectiveCoaching" value="Rarely" <?php if($formData->ProvidesEffectiveCoaching == "Rarely") echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="ProvidesEffectiveCoaching" value="Never" <?php if($formData->ProvidesEffectiveCoaching == "Never") echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												</tr>
												
												<tr>
												
												
												<td style="min-width: 15px!important;">2</td>
												<td style="min-width: 120px!important;">Role and responsibilities were clearly defined</td>
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="RoleAndResponsibilitiesWereClearlyDefined" value="Always" <?php if($formData->RoleAndResponsibilitiesWereClearlyDefined == "Always") echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="RoleAndResponsibilitiesWereClearlyDefined" value="Sometime" <?php if($formData->RoleAndResponsibilitiesWereClearlyDefined == "Sometime") echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="RoleAndResponsibilitiesWereClearlyDefined" value="Rarely" <?php if($formData->RoleAndResponsibilitiesWereClearlyDefined == "Rarely") echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="RoleAndResponsibilitiesWereClearlyDefined" value="Never" <?php if($formData->RoleAndResponsibilitiesWereClearlyDefined == "Never") echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												</tr>
												
												<tr>
												
												
												<td style="min-width: 15px!important;">3</td>
												<td style="min-width: 120px!important;">Provided fair and equal treatment</td>
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="ProvidedFairAndEqualTreatment" value="Always" <?php if($formData->ProvidedFairAndEqualTreatment == "Always") echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="ProvidedFairAndEqualTreatment" value="Sometime" <?php if($formData->ProvidedFairAndEqualTreatment == "Sometime") echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="ProvidedFairAndEqualTreatment" value="Rarely" <?php if($formData->ProvidedFairAndEqualTreatment == "Rarely") echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="ProvidedFairAndEqualTreatment" value="Never" <?php if($formData->ProvidedFairAndEqualTreatment == "Never") echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												
												</tr>
												
												<tr>
												
												
												<td style="min-width: 15px!important;">4</td>
												<td style="min-width: 120px!important;">Regular performance feedback was provided</td>
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="RegularPerformanceFeedbackWasProvided" value="Always" <?php if($formData->RegularPerformanceFeedbackWasProvided == "Always") echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="RegularPerformanceFeedbackWasProvided" value="Sometime" <?php if($formData->RegularPerformanceFeedbackWasProvided == "Sometime") echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="RegularPerformanceFeedbackWasProvided" value="Rarely" <?php if($formData->RegularPerformanceFeedbackWasProvided == "Rarely") echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="RegularPerformanceFeedbackWasProvided" value="Never" <?php if($formData->RegularPerformanceFeedbackWasProvided == "Never") echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												</tr>
												
												<tr>
												
												
												<td style="min-width: 15px!important;">5</td>
												<td style="min-width: 120px!important;">Discussed career advancement opportunities</td>
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="DiscussedCareerAdvancementOpportunities" value="Always" <?php if($formData->DiscussedCareerAdvancementOpportunities == "Always") echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="DiscussedCareerAdvancementOpportunities" value="Sometime" <?php if($formData->DiscussedCareerAdvancementOpportunities == "Sometime") echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="DiscussedCareerAdvancementOpportunities" value="Rarely" <?php if($formData->DiscussedCareerAdvancementOpportunities == "Rarely") echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="DiscussedCareerAdvancementOpportunities" value="Never" <?php if($formData->DiscussedCareerAdvancementOpportunities == "Never") echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												</tr>
												
												
												
												
												
												
											
										</tbody>
										
									</table>
								</div>
								</div>
								
								
								<div class="card-body" style="width:1000px;">
								
								
									
									
								<div class="table-responsive">
									<table class="table table-bordered" id="TimelistdataTable" width="100%">
										<thead style="background-color:#f3f3f7;">
											<tr>
												
												<th colspan="6" class="cmPayroll empTL">Please rate of the working with your subordinates</th>
												
												
												
												
											</tr>
										
										</thead>
										<tbody>
											
											<tr>
												
												<td style="min-width: 15px!important;">S.No</td>
												<td style="min-width: 120px!important;">Parameters</td>
												<td style="min-width: 120px!important;">Always</td>
												<td style="min-width: 120px!important;">Sometime</td>
												<td style="min-width: 120px!important;">Rarely</td>
												<td style="min-width: 120px!important;">Never</td>
												
												
											</tr>
												<tr>
												
												
												<td style="min-width: 15px!important;">1</td>
												<td style="min-width: 120px!important;">There was knowledge sharing and transfer</td>
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="ThereWasKnowledgeSharingAndTransfer" value="Always" <?php if($formData->ThereWasKnowledgeSharingAndTransfer == "Always") echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="ThereWasKnowledgeSharingAndTransfer" value="Sometime" <?php if($formData->ThereWasKnowledgeSharingAndTransfer == "Sometime") echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="ThereWasKnowledgeSharingAndTransfer" value="Rarely" <?php if($formData->ThereWasKnowledgeSharingAndTransfer == "Rarely") echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="ThereWasKnowledgeSharingAndTransfer" value="Never" <?php if($formData->ThereWasKnowledgeSharingAndTransfer == "Never") echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												</tr>
												
												
												<tr>
												
												
												<td style="min-width: 15px!important;">2</td>
												<td style="min-width: 120px!important;">There was team work and synergy</td>
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="ThereWasTeamWorkAndSynergy" value="Always" <?php if($formData->ThereWasTeamWorkAndSynergy == "Always") echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="ThereWasTeamWorkAndSynergy" value="Sometime" <?php if($formData->ThereWasTeamWorkAndSynergy == "Sometime") echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="ThereWasTeamWorkAndSynergy" value="Rarely" <?php if($formData->ThereWasTeamWorkAndSynergy == "Rarely") echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="ThereWasTeamWorkAndSynergy" value="Never" <?php if($formData->ThereWasTeamWorkAndSynergy == "Never") echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												</tr>
												
												
												<tr>
												
												
												<td style="min-width: 15px!important;">3</td>
												<td style="min-width: 120px!important;">Responsibilities were and shared</td>
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="ResponsibilitiesWereAndShared" value="Always" <?php if($formData->ResponsibilitiesWereAndShared == "Always") echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="ResponsibilitiesWereAndShared" value="Sometime" <?php if($formData->ResponsibilitiesWereAndShared == "Sometime") echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="ResponsibilitiesWereAndShared" value="Rarely" <?php if($formData->ResponsibilitiesWereAndShared == "Rarely") echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="ResponsibilitiesWereAndShared" value="Never" <?php if($formData->ResponsibilitiesWereAndShared == "Never") echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												</tr>
												
												
												<tr>
												
												
												<td style="min-width: 15px!important;">4</td>
												<td style="min-width: 120px!important;">Unbiased counselling and support was provided</td>
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="UnbiasedCounsellingAndSupportWasProvided" value="Always" <?php if($formData->UnbiasedCounsellingAndSupportWasProvided == "Always") echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="UnbiasedCounsellingAndSupportWasProvided" value="Sometime" <?php if($formData->UnbiasedCounsellingAndSupportWasProvided == "Sometime") echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="UnbiasedCounsellingAndSupportWasProvided" value="Rarely" <?php if($formData->UnbiasedCounsellingAndSupportWasProvided == "Rarely") echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="UnbiasedCounsellingAndSupportWasProvided" value="Never" <?php if($formData->UnbiasedCounsellingAndSupportWasProvided == "Never") echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												</tr>
												
												
												<tr>
												
												
												<td style="min-width: 15px!important;">5</td>
												<td style="min-width: 120px!important;">Shared recognition for good work</td>
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="SharedRecognitionForGoodWork" value="Always" <?php if($formData->SharedRecognitionForGoodWork == "Always") echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="SharedRecognitionForGoodWork" value="Sometime" <?php if($formData->SharedRecognitionForGoodWork == "Sometime") echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="SharedRecognitionForGoodWork" value="Rarely" <?php if($formData->SharedRecognitionForGoodWork == "Rarely") echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="SharedRecognitionForGoodWork" value="Never" <?php if($formData->SharedRecognitionForGoodWork == "Never") echo "checked";?>>&nbsp;
													</label>
													</div>
												</td>
												
												</tr>
												
												
												
												
											
										</tbody>
										
									</table>
								</div>
								</div>
								
								
								<div class="card-body" style="width:1000px;">
								
								
									
									
								<div class="table-responsive">
									<table class="table table-bordered" id="TimelistdataTable" width="100%">
										<thead style="background-color:#f3f3f7;">
											<tr>
												
												<th colspan="6" class="cmPayroll empTL">General Comments</th>
												
												
												
												
											</tr>
										
										</thead>
										<tbody>
											
											
												<tr>
												
												
												<td style="min-width: 15px!important;">1. What are the good practices regarding work/ environment you want us to strengthen?</td>
												
												
												</tr>
												
												<tr>
												
												<td style="min-width: 120px!important;"> <input class="form-control" name="GeneralCommentsOne" value="<?php if(isset($formData->GeneralCommentsOne)) echo $formData->GeneralCommentsOne;?>" rows="2"></td>
												
												
												</tr>
												
												
												<tr>
												
												
												<td style="min-width: 15px!important;">2. Would you recommend <?php echo COMPANY_NAME; ?> to your friends outside, if yes, pls, given reason.</td>
												
												
												</tr>
												
												<tr>
												
												<td style="min-width: 120px!important;"> <input class="form-control" name="GeneralCommentsTwo" value="<?php if(isset($formData->GeneralCommentsTwo)) echo $formData->GeneralCommentsTwo;?>" rows="2"></td>
												
												
												</tr>
												
												
												<tr>
												
												
												<td style="min-width: 15px!important;">3. What have been your most frustrating moments with <?php echo COMPANY_NAME; ?>?</td>
												
												
												</tr>
												
												<tr>
												
												<td style="min-width: 120px!important;"><input class="form-control" name="GeneralCommentsThree" value="<?php if(isset($formData->GeneralCommentsThree)) echo $formData->GeneralCommentsThree;?>" rows="2"></td>
												
												
												</tr>
												
												
												
												
											
										</tbody>
										
									</table>
								</div>
								</div>
								
								
								<div class="card-body" style="width:1000px;">
								
								
									
									
								<div class="table-responsive">
									<table class="table table-bordered" id="TimelistdataTable" width="100%">
										<thead style="background-color:#f3f3f7;">
											<tr>
												
												<th colspan="6" class="cmPayroll empTL">Office Use Only</th>
												
												
												
												
											</tr>
										
										</thead>
										<tbody>
											
											
												<tr>
												
												
												<td style="min-width: 15px!important;">Interviewer's Comments:</td>
												
												
												</tr>
												
												<tr>
												
												<td style="min-width: 120px!important;"><input class="form-control" name="InterviewerComments" value="<?php if(isset($formData->InterviewerComments)) echo $formData->InterviewerComments;?>" rows="2"></td>
												
												
												</tr>
												
												
												
												
											
										</tbody>
										
									</table>
								</div>
								</div>
								
								
								
								
								
										
							<button type="submit" class="btn btn-default addEmpSubmitBtn">Submit</button>
							
								
								<ul class="pagination justify-content-center" style="margin:20px 0">
								<li class="page-item"><a class="page-link" href="<?=base_url('index.php/hrzone/Separation/ExitSecondEdit/'.$UserInfo->id);?>">Previous</a></li>
							<li class="page-item " ><a class="page-link" href="<?=base_url('index.php/hrzone/Separation/ExitFormEdit/'.$UserInfo->id);?>">1</a></li>
							<li class="page-item"><a class="page-link" href="<?=base_url('index.php/hrzone/Separation/ExitSecondEdit/'.$UserInfo->id);?>">2</a></li>
							<li class="page-item active"><a class="page-link" href="<?=base_url('index.php/hrzone/Separation/ExitThirdEdit/'.$UserInfo->id);?>">3</a></li>
							</ul>
								
								
								</form>
								
								
								
								
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