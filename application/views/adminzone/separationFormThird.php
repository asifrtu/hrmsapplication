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
						
							
								<?php echo form_open_multipart('adminzone/Separation/AddSepThird'); ?>
								
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
												<td style="min-width: 120px!important;"><input type="text" name="Name" class="form-control"></td>
												<td style="min-width: 120px!important;">Emp. Code</td>
												<td style="min-width: 120px!important;"><input type="text" name="EmpCode" class="form-control"></td>
												
												
												
											</tr>
											<tr>
												
												<td style="min-width: 120px!important;">Date of Leaving</td>
												<td style="min-width: 120px!important;"><input type="text" name="DateOfLeaving" class="form-control"></td>
												<td style="min-width: 120px!important;">Exit Interview Date</td>
												<td style="min-width: 120px!important;"><input type="text" name="ExitInterviewDate" class="form-control"></td>
												
												
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
													<input type="checkbox" class="form-check-input" name="Absconding" >&nbsp;
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
													<input type="checkbox" class="form-check-input" name="Absentism">&nbsp;
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
													<input type="checkbox" class="form-check-input" name="FraudulentActivity" >&nbsp;
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
													<input type="checkbox" class="form-check-input" name="Indiscipline" >&nbsp;
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
													<input type="checkbox" class="form-check-input" name="NonPreformation" >&nbsp;
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
													<input type="checkbox" class="form-check-input" name="GrowthOpportunities" >&nbsp;
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
													<input type="checkbox" class="form-check-input" name="HealthOfFamilyMember" >&nbsp;
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
													<input type="checkbox" class="form-check-input" name="HigherStudy" >&nbsp;
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
													<input type="checkbox" class="form-check-input" name="JobEnvironment" >&nbsp;
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
													<input type="checkbox" class="form-check-input" name="JobProfile" >&nbsp;
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
													<input type="checkbox" class="form-check-input" name="Marriage" >&nbsp;
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
													<input type="checkbox" class="form-check-input" name="Medicine" >&nbsp;
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
													<input type="checkbox" class="form-check-input" name="OwnBusiness" >&nbsp;
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
													<input type="checkbox" class="form-check-input" name="Relocation" >&nbsp;
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
													<input type="checkbox" class="form-check-input" name="Salary" >&nbsp;
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
													<input type="checkbox" class="form-check-input" name="AnyOther" >&nbsp;
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
													<input type="radio" class="form-check-input" name="MySkillsWereUsedEffectively" value="Always">&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="MySkillsWereUsedEffectively" value="Sometime">&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="MySkillsWereUsedEffectively" value="Rarely">&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="MySkillsWereUsedEffectively" value="Never">&nbsp;
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
													<input type="radio" class="form-check-input" name="IWasGivenDueRecognitionForTheWork" value="Always">&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="IWasGivenDueRecognitionForTheWork" value="Sometime">&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="IWasGivenDueRecognitionForTheWork" value="Rarely">&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="IWasGivenDueRecognitionForTheWork" value="Never">&nbsp;
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
													<input type="radio" class="form-check-input" name="IWasAbleToManageTheWorkGivenToMe" value="Always">&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="IWasAbleToManageTheWorkGivenToMe" value="Sometime">&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="IWasAbleToManageTheWorkGivenToMe" value="Rarely">&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="IWasAbleToManageTheWorkGivenToMe" value="Never">&nbsp;
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
													<input type="radio" class="form-check-input" name="MyKnowledgeForTheJobWasSufficient" value="Always">&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="MyKnowledgeForTheJobWasSufficient" value="Sometime">&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="MyKnowledgeForTheJobWasSufficient" value="Rarely">&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="MyKnowledgeForTheJobWasSufficient" value="Never">&nbsp;
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
													<input type="radio" class="form-check-input" name="ProvidesEffectiveCoaching" value="Always">&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="ProvidesEffectiveCoaching" value="Sometime">&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="ProvidesEffectiveCoaching" value="Rarely">&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="ProvidesEffectiveCoaching" value="Never">&nbsp;
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
													<input type="radio" class="form-check-input" name="RoleAndResponsibilitiesWereClearlyDefined" value="Always">&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="RoleAndResponsibilitiesWereClearlyDefined" value="Sometime">&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="RoleAndResponsibilitiesWereClearlyDefined" value="Rarely">&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="RoleAndResponsibilitiesWereClearlyDefined" value="Never">&nbsp;
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
													<input type="radio" class="form-check-input" name="ProvidedFairAndEqualTreatment" value="Always">&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="ProvidedFairAndEqualTreatment" value="Sometime">&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="ProvidedFairAndEqualTreatment" value="Rarely">&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="ProvidedFairAndEqualTreatment" value="Never">&nbsp;
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
													<input type="radio" class="form-check-input" name="RegularPerformanceFeedbackWasProvided" value="Always">&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="RegularPerformanceFeedbackWasProvided" value="Sometime">&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="RegularPerformanceFeedbackWasProvided" value="Rarely">&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="RegularPerformanceFeedbackWasProvided" value="Never">&nbsp;
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
													<input type="radio" class="form-check-input" name="DiscussedCareerAdvancementOpportunities" value="Always">&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="DiscussedCareerAdvancementOpportunities" value="Sometime">&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="DiscussedCareerAdvancementOpportunities" value="Rarely">&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="DiscussedCareerAdvancementOpportunities" value="Never">&nbsp;
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
													<input type="radio" class="form-check-input" name="ThereWasKnowledgeSharingAndTransfer" value="Always">&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="ThereWasKnowledgeSharingAndTransfer" value="Sometime">&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="ThereWasKnowledgeSharingAndTransfer" value="Rarely">&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="ThereWasKnowledgeSharingAndTransfer" value="Never">&nbsp;
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
													<input type="radio" class="form-check-input" name="ThereWasTeamWorkAndSynergy" value="Always">&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="ThereWasTeamWorkAndSynergy" value="Sometime">&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="ThereWasTeamWorkAndSynergy" value="Rarely">&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="ThereWasTeamWorkAndSynergy" value="Never">&nbsp;
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
													<input type="radio" class="form-check-input" name="ResponsibilitiesWereAndShared" value="Always">&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="ResponsibilitiesWereAndShared" value="Sometime">&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="ResponsibilitiesWereAndShared" value="Rarely">&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="ResponsibilitiesWereAndShared" value="Never">&nbsp;
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
													<input type="radio" class="form-check-input" name="UnbiasedCounsellingAndSupportWasProvided" value="Always">&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="UnbiasedCounsellingAndSupportWasProvided" value="Sometime">&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="UnbiasedCounsellingAndSupportWasProvided" value="Rarely">&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="UnbiasedCounsellingAndSupportWasProvided" value="Never">&nbsp;
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
													<input type="radio" class="form-check-input" name="SharedRecognitionForGoodWork" value="Always">&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="SharedRecognitionForGoodWork" value="Sometime">&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="SharedRecognitionForGoodWork" value="Rarely">&nbsp;
													</label>
													</div>
												</td>
												
												<td style="min-width: 120px!important;">
													<div class="form-check">
													<label class="form-check-label" style="padding-left: 20px;">
													<input type="radio" class="form-check-input" name="SharedRecognitionForGoodWork" value="Never">&nbsp;
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
												
												<td style="min-width: 120px!important;"> <textarea class="form-control" name="GeneralCommentsOne" rows="2"></textarea></td>
												
												
												</tr>
												
												
												<tr>
												
												
												<td style="min-width: 15px!important;">2. Would you recommend <?php echo COMPANY_NAME; ?> to your friends outside, if yes, pls, given reason.</td>
												
												
												</tr>
												
												<tr>
												
												<td style="min-width: 120px!important;"> <textarea class="form-control" name="GeneralCommentsTwo" rows="2"></textarea></td>
												
												
												</tr>
												
												
												<tr>
												
												
												<td style="min-width: 15px!important;">3. What have been your most frustrating moments with <?php echo COMPANY_NAME; ?>?</td>
												
												
												</tr>
												
												<tr>
												
												<td style="min-width: 120px!important;"><textarea class="form-control" name="GeneralCommentsThree" rows="2"></textarea></td>
												
												
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
												
												<td style="min-width: 120px!important;"><textarea class="form-control" name="InterviewerComments" rows="2"></textarea></td>
												
												
												</tr>
												
												
												
												
											
										</tbody>
										
									</table>
								</div>
								</div>
								
								
								
								
								
										
							<button type="submit" class="btn btn-default addEmpSubmitBtn">Submit</button>
							
								
								
								
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
	$(document).ready(function(){
		var d = new Date();
		var curYear =  d.getFullYear();
		var currMonth = d.getMonth() + 1;
		MonthlyUserTimeList(curYear, currMonth);
		
    $("#month_Id").change(function(){
		// alert("BHAIiiiiiiii");
        var MonthID = $("#month_Id option:selected").val();
		var YearID  = $("#Year_Id").val();
		
		MonthlyUserTimeList(YearID, MonthID);
    });
	
	
	
});



function MonthlyUserTimeList(YearID, MonthID){
	var ajaxurl = "<?=site_url('adminzone/EmployeeAttendance/UserTimeList');?>";
        $.ajax({
            type: "get",
            url: ajaxurl,
            data: {YearID:YearID, MonthID : MonthID},
			dataType: "JSON"
        }).done(function(response){
			if(response){
				$("# tbody").html(`${response.data.map(function(data, index){
										return(`

										<tr class="${data.Status}">
										<td style="text-align:center;">${++index}</td>
										<td class="empCL AttFontStatus" style="min-width: 101px!important; ">${data.AttendenceDate}</td>
										<td class="empCL AttFontStatus" style="min-width: 75px!important; ">${data.CalDay}</td>
										<td class="empCL AttFontStatus" style="min-width: 75px!important; ">10:30</td>
										<td class="empCL AttFontStatus" style="min-width: 75px!important; ">06:30</td>
										<td class="empCL AttFontStatus" style="min-width: 75px!important; ">${(data.checkInTime != "")?data.checkInTime: "Nil"}</td>
										<td class="empCL AttFontStatus" style="min-width: 75px!important; ">${(data.checkOutTime != "")?data.checkOutTime: "Nil"}</td>
										<td class="empCL AttFontStatus" style="min-width: 75px!important; ">${data.Status}</td>
										<td class="empCL AttFontStatus" style="min-width: 75px!important; "></td>
										<td class="empCL AttFontStatus" style="min-width: 75px!important; "></td>
										
										</tr>

										`)
										}).join('')}
										
										
										`);

			} else {
				$("#TimelistdataTable tbody").html("<div>No data Found.....</div>");
			}
				
        });
}
							
</script>

<?php include('footer.php'); ?>