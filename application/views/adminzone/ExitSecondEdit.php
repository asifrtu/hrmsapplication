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
                
                <!-- End of Topbar -->
				 <?php if(!empty($this->session->flashdata('message'))) { ?>
			
			
			<?=$this->session->flashdata('message');?>
			
		<?php } ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    
					<div class="card shadow mb-4">
                        <div class="ColorSecondaryPre" style="padding: 12px 5px 5px 12px;">
                            <h5 class=" md-4 ColorPrimary" style="font-size:17px;">Separation Form 2nd</h5>
                        </div>
                       
                    <!-- Content Row -->
					<!-- Area Chart -->
						
						<div class="">	
						
							
								<?php echo form_open_multipart('adminzone/Separation/SecondEdit'); ?>
								
								
								
								<div class="card-body" style="width:1000px;">
								
								
									
									
								<div class="table-responsive">
									<table class="table table-bordered" id="TimelistdataTable" width="100%">
										<thead style="background-color:#f3f3f7;">
											<tr>
												
												<th colspan="6" class="cmPayroll empTL">For Office Use Only</th>
												
												
												
												
											</tr>
										
										</thead>
										<tbody>
											<tr>
												
												<td style="min-width: 120px!important;">IRA Name</td>
												<td style="min-width: 120px!important;"><input type="text" name="IRAName" value="<?php if(isset($SecondFormData->IRAName)) echo $SecondFormData->IRAName;?>" class="form-control"></td>
												<td style="min-width: 120px!important;">IRA Emp. Code</td>
												<td style="min-width: 120px!important;"><input type="text" name="IRAEmpCode" value="<?php if(isset($SecondFormData->IRAEmpCode)) echo $SecondFormData->IRAEmpCode;?>" class="form-control"></td>
												
												
												
											</tr>
											<tr>
												
												<td style="min-width: 120px!important;">IRA Designation</td>
												<td style="min-width: 120px!important;"><input type="text" name="IRADesignation" value="<?php if(isset($SecondFormData->IRADesignation)) echo $SecondFormData->IRADesignation;?>" class="form-control"></td>
												
												
												
												
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
												
												<th colspan="6" class="cmPayroll empTL">Dept Head Comment (Should be minimum VP & Above)</th>
												
												
												
												
											</tr>
										
										</thead>
										<tbody>
											<tr>
												
												<td style="min-width: 120px!important;">HOD Name</td>
												<td style="min-width: 120px!important;"><input type="text" name="HODName" value="<?php if(isset($SecondFormData->HODName)) echo $SecondFormData->HODName;?>" class="form-control"></td>
												<td style="min-width: 120px!important;">HOD Emp. Code</td>
												<td style="min-width: 120px!important;"><input type="text" name="HODEmpCode" value="<?php if(isset($SecondFormData->HODEmpCode)) echo $SecondFormData->HODEmpCode;?>" class="form-control"></td>
												
												
												
											</tr>
											<tr>
												
												<td style="min-width: 120px!important;">HOD Designation</td>
												<td style="min-width: 120px!important;"><input type="text" name="HODDesignation" value="<?php if(isset($SecondFormData->HODDesignation)) echo $SecondFormData->HODDesignation;?>" class="form-control"></td>
												
												
												
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
												
												<th colspan="6" class="cmPayroll empTL">IRA (Immidiate reporting authority) Comments.</th>
												
												
												
												
											</tr>
										
										</thead>
										<tbody>
											<tr>
												
												<td style="min-width: 15px!important;">S.No</td>
												<td style="min-width: 120px!important;">Particulars</td>
												<td style="min-width: 120px!important;">Comments</td>
												
												
											</tr>
												<tr>
												
												
												<td style="min-width: 15px!important;">1</td>
												<td style="min-width: 120px!important;">Notice Period Served</td>
												
												<td style="min-width: 120px!important;">
													
													<div class="row" style="margin:0px!important;">
													<div class="col-lg-6">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="radio" class="form-check-input" name="NoticePeriodServed" value="1" <?php if($SecondFormData->NoticePeriodServed == 1) echo "checked";?>>Yes
													</label>
													</div>
													</div>
													<div class="col-lg-6">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="radio" class="form-check-input" name="NoticePeriodServed" value="0" <?php if($SecondFormData->NoticePeriodServed == 0) echo "checked";?>>No
													</label>
													</div>
													</div>
													</div>
													
												</td>
												
												</tr>
												
												<tr>
												
												
												<td style="min-width: 15px!important;">2</td>
												<td style="min-width: 120px!important;">Notice Period Deduct days</td>
												
												<td style="min-width: 120px!important;">
													
													<input type="text" name="NoticePeriodDeductdays" value="<?php if(isset($SecondFormData->NoticePeriodDeductdays)) echo $SecondFormData->NoticePeriodDeductdays;?>" class="form-control">
													
												</td>
												
												</tr>
												
												<tr>
												
												
												<td style="min-width: 15px!important;">3</td>
												<td style="min-width: 120px!important;">Leaves in exit Month</td>
												
												<td style="min-width: 120px!important;">
													
													<input type="text" name="LeavesinexitMonth" value="<?php if(isset($SecondFormData->LeavesinexitMonth)) echo $SecondFormData->LeavesinexitMonth;?>" class="form-control">
													
												</td>
												
												</tr>
												
												
												
												
												
												
												<tr>
												
												
												<td colspan="6" style="text-align:center; min-width: 15px!important;">Approval for</td>
												
												
												</tr>
												
												<tr>
												
												
												<td style="min-width: 15px!important;">4</td>
												<td style="min-width: 120px!important;">Releasing Full & Final Settlement</td>
												<td style="min-width: 120px!important;">
													<div class="row" style="margin:0px!important;">
													<div class="col-lg-6">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="radio" class="form-check-input" name="ReleasingFullAndFinalSettlement" value="1" <?php if($SecondFormData->ReleasingFullAndFinalSettlement == 1) echo "checked";?>>Yes
													</label>
													</div>
													</div>
													<div class="col-lg-6">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="radio" class="form-check-input" name="ReleasingFullAndFinalSettlement" value="0" <?php if($SecondFormData->ReleasingFullAndFinalSettlement == 0) echo "checked";?>>No
													</label>
													</div>
													</div>
													</div>
												</td>
												
												
												
												</tr>
												
												<tr>
												
												
												<td style="min-width: 15px!important;">5</td>
												<td style="min-width: 120px!important;">Issuing Releving Letter</td>
												<td style="min-width: 120px!important;">
													<div class="row" style="margin:0px!important;">
													<div class="col-lg-6">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="radio" class="form-check-input" name="IssuingRelevingLetter" value="1" <?php if($SecondFormData->IssuingRelevingLetter == 1) echo "checked";?>>Yes
													</label>
													</div>
													</div>
													<div class="col-lg-6">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="radio" class="form-check-input" name="IssuingRelevingLetter" value="0" <?php if($SecondFormData->IssuingRelevingLetter == 0) echo "checked";?>>No
													</label>
													</div>
													</div>
													</div>
												</td>
												
												
												</tr>
												
												
											
										</tbody>
										
									</table>
								</div>
								</div>
								
								
								<div class="card-body" style="width:1000px;">
								<div class="row">
								<div class="col-lg-12">
								<label for="usr">Note: Hr will process F&F relieving letter based on receipt of this exit from duly signed by all, HOD can Intimated to HR on mail in case there is requirement to stop F&F or relieving letter before credit date as per HR process of full settlement payment cycle.</label>
								</div>
								</div>
								<div class="row">
								<div class="col-lg-12">
								<label for="usr">C. Regional HR Comment.</label>
								</div>
								</div>
								
								<div class="row">
								<div class="col-lg-3">
									
									<label for="usr">From received on:</label>
									
								</div>
								
								<div class="col-lg-3">
									
									<input type="text" name="FromReceivedOn" value="<?php if(isset($SecondFormData->FromReceivedOn)) echo $SecondFormData->FromReceivedOn;?>" class="form-control">
									

								</div>
								<div class="col-lg-3">
									
									<label for="usr">DOL:</label>
									
								</div>
								
								<div class="col-lg-3">
									
									<input type="text" name="DOL" value="<?php if(isset($SecondFormData->DOL)) echo $SecondFormData->DOL;?>" class="form-control">
									

								</div>
								
								
								
								</div>
								
								<div class="row">
								<div class="col-lg-3">
									
									<label for="usr">Reason for leaving:</label>
								
								</div>
								
								<div class="col-lg-6">
									
									<input type="text" name="ReasonForLeaving" value="<?php if(isset($SecondFormData->ReasonForLeaving)) echo $SecondFormData->ReasonForLeaving;?>" class="form-control">
									
								</div>
								
								
								</div>
								</div>
								
								
								
								<div class="card-body" style="width:1000px;">
								
								
									
									
								<div class="table-responsive">
									<table class="table table-bordered" id="TimelistdataTable" width="100%">
										
										<tbody>
											<tr>
												
												<td style="min-width: 15px!important;">S.No</td>
												<td style="min-width: 120px!important;">Particulars for final payroll purpose</td>
												<td style="min-width: 120px!important;">Comments</td>
												
												
											</tr>
												<tr>
												
												
												<td style="min-width: 15px!important;">1</td>
												<td style="min-width: 120px!important;">Notice Period Served</td>
												
												<td style="min-width: 120px!important;">
													
													<div class="row" style="margin:0px!important;">
													<div class="col-lg-6">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="radio" class="form-check-input" name="payrollNoticePeriodServed" value="1" <?php if($SecondFormData->payrollNoticePeriodServed == 1) echo "checked";?>>Yes
													</label>
													</div>
													</div>
													<div class="col-lg-6">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="radio" class="form-check-input" name="payrollNoticePeriodServed" value="0" <?php if($SecondFormData->payrollNoticePeriodServed == 0) echo "checked";?>>No
													</label>
													</div>
													</div>
													</div>
													
												</td>
												
												</tr>
												
												<tr>
												
												
												<td style="min-width: 15px!important;">2</td>
												<td style="min-width: 120px!important;">Notice Period Deduct days</td>
												
												<td style="min-width: 120px!important;">
													
													<input type="text" name="payrollNoticePeriodDeductdays" value="<?php if(isset($SecondFormData->payrollNoticePeriodDeductdays)) echo $SecondFormData->payrollNoticePeriodDeductdays;?>" class="form-control">
													
												</td>
												
												</tr>
												
												<tr>
												
												
												<td style="min-width: 15px!important;">3</td>
												<td style="min-width: 120px!important;">Leaves in exit Month</td>
												
												<td style="min-width: 120px!important;">
													
													<input type="text" name="payrollLeavesinexitMonth" value="<?php if(isset($SecondFormData->payrollLeavesinexitMonth)) echo $SecondFormData->payrollLeavesinexitMonth;?>" class="form-control">
													
												</td>
												
												</tr>
												
												<tr>
												
												
												<td style="min-width: 15px!important;">4</td>
												<td style="min-width: 120px!important;">Exit Mark</td>
												
												<td style="min-width: 120px!important;">
													
													<div class="row" style="margin:0px!important;">
													<div class="col-lg-6">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="radio" class="form-check-input" name="payrollExitMark" value="1" <?php if($SecondFormData->payrollExitMark == 1) echo "checked";?>>Yes
													</label>
													</div>
													</div>
													<div class="col-lg-6">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="radio" class="form-check-input" name="payrollExitMark" value="0" <?php if($SecondFormData->payrollExitMark == 0) echo "checked";?>>Yes
													</label>
													</div>
													</div>
													</div>
													
												</td>
												
												</tr>
												
												
												
												
												
												
												
												<tr>
												
												
												<td colspan="6" style="text-align:center; min-width: 15px!important;">Approval for</td>
												
												
												</tr>
												
												<tr>
												
												
												<td style="min-width: 15px!important;">1</td>
												<td style="min-width: 120px!important;">Handover of job responsibilities</td>
												<td style="min-width: 80px!important;">
													<div class="row" style="margin:0px!important;">
													<div class="col-lg-6">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="radio" class="form-check-input" name="payrollHandoverOfJobResponsibilities" value="1" <?php if($SecondFormData->payrollHandoverOfJobResponsibilities == 1) echo "checked";?>>Yes
													</label>
													</div>
													</div>
													<div class="col-lg-6">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="radio" class="form-check-input" name="payrollHandoverOfJobResponsibilities" value="0" <?php if($SecondFormData->payrollHandoverOfJobResponsibilities == 0) echo "checked";?>>Yes
													</label>
													</div>
													</div>
													</div>
												</td>
												
												
												
												</tr>
												
												
												
												
											
										</tbody>
										
									</table>
								</div>
								</div>
								
								
								<div class="card-body" style="width:1000px;">
								
								
								
								<div class="row">
								<div class="col-lg-3">
									
									<label for="usr">HR Name:</label>
									
								</div>
								
								<div class="col-lg-3">
									
									<input type="text" name="HRName" value="<?php if(isset($SecondFormData->HRName)) echo $SecondFormData->HRName;?>" class="form-control">
									

								</div>
								<div class="col-lg-3">
									
									<label for="usr">HR Emp. Code:</label>
									
								</div>
								
								<div class="col-lg-3">
									
									<input type="text" name="HREmpCode" value="<?php if(isset($SecondFormData->HREmpCode)) echo $SecondFormData->HREmpCode;?>" class="form-control">
									

								</div>
								
								
								
								
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