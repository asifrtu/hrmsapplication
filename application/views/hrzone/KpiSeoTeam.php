<?php 

include('header.php');

 ?>
 
 
<?php include('KpiTeamSidebar.php'); ?>
        <!-- Content Wrapper -->
 

<style>

.addEmpSubmitBtn{
	color:white!important;
    margin-bottom:30px;
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
.tnemp a {
  
  color: #706e80;
  text-align: center;
  padding: 8px 11px;
  text-decoration: none;
  
}
.table-sm td, .table-sm th {
    padding: .4rem;
}
.tableHeadAR{
	background-color: #504a94;
    padding: .35rem 1.25rem!important;
}
thead{
	background: #00d3c3!important; color: #fff!important;
}
.mar{
	margin:10px 0;
}

.form-control {
    
    height: calc(1.5em + .4rem + 1px);
    padding: .275rem .5rem;
	font-size: 12px;
	
}

.form-group {
        margin: 0.1rem 0 0.7rem 0rem!important;
}
.bg-info {
    background-color: #ececec!important;
}
.p-2 {
    padding: .1rem!important;
}

.empInput{
	border: 1px solid #858796;
    border-radius: 3px;
	overflow:hidden!important;
	
	padding: .2rem .75rem!important;
}




.APUemp {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
 
}
.APemp {
  float: left;
	
}
.APemp a {
  display: block;
  color: grey;
  text-align: center;
  
  text-decoration: none;
}


.APemp a:hover{
  
}


.ColorSecondaryNotes{
	background-color:#ececec;
	padding: .35rem 1.25rem!important;
}

.headerAsif{
	padding: 15px 31px 6px 31px;
}
.AttFontStatus{
	font-size:14px;
	
}
.cmPayroll{
	font-size: 13px;
    font-weight: 600;
    color: #4c3f5e!important;
    padding: 10px 11px!important;
}
td:first-child { width:10px; };


.InProgress{
	color:white;
	background-color:#f1c232;
	
	text-align:center;
}



.Completed{
	color:white;
	background-color:#6aa84f;
	
	text-align:center;
}


.Pending{
	color:white;
	background-color:#c16958;
	
	text-align:center;
}
.table td {
     padding: 0.2rem; 
    vertical-align: top;
    border-top: 1px solid #e3e6f0;
}
.table th{
	padding:10px 11px !important;
}

.sasifb{
	margin-right: -30px;
    padding-top: 1px;

}
.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 0 1.25rem;
}
.ColorSecondaryPre{
	padding:5px 15px;
}
.form-control:focus {
    color: #6e707e;
    background-color: #fff;
    border-color: #bac8f3;
    outline: 0;
    box-shadow: 0 0 0 0.1rem rgb(180 171 185 / 32%)!important;
	border-radius:1px!important;
}
.card-header:first-child{
    border-radius: calc(0.3rem - 1px) calc(0.3rem - 1px) 0 0!important;
}
.empInput{
	border-radius: 2px!important;
}
tbody tr{
	font-size: 13px;
    color: #343434;
}
tbody tr td{
	vertical-align: middle;
}
.close {
    float: right;
    font-size: 14px;
    line-height: 1;
    color: #f3f3f3;
    text-shadow: 0 1px 0 #fff;
    opacity: 1!important;
    margin-top: -20px;
    margin-right: 10px;
    /* margin-bottom: 6px; */
    border: 1px solid white !important;
    border-radius: 50%;
    padding: 1px 4px!important;
}
.actionFontSize, .cmPayroll{
	background: #00d3c3!important; color: #fff!important;
};
</style>

 <div id="content-wrapper bg-gradient-primary" class="col-lg-10" style="margin-top:30px; margin-bottom:50px; padding-left:20px;">

            <!-- Main Content -->
            <div id="content">
				
		
                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="">

                    <!-- Page Heading -->
                    
					<div class="card shadow mb-4" style=" margin-bottom:100px;">
                        
							
							
					<div class="card-header ColorSecondaryPre">
					<div class="row d-flex pl-1 ">

<div class="col-lg-1"><a href="<?php echo base_url() ?>index.php/hrzone/dashboard/wall" style="color: white;font-size: 15px;"><i class="fa fa-home" aria-hidden="true"></i></a></div>
<div class="col-lg-6"> <i style="font-size: 10px;color: white;" class="fas fa-chevron-right"></i><span class="breadcrumb_text" style="font-size: 15px;color: #fff;font-weight: 600;"> &nbsp;Add SEO Monthly Kpi Goals</span></div>
  <div class="col-lg-5"> 
                       
	
  <div class="d-flex sasifb flex-row-reverse ">
								<div class="" style="margin-left:5px;">
									
									<select class="empInput form-control" name="month_Id" id="month_Id" style="border: 1px solid #858796;" id="sel1">
									<option value="">Select Month</option>

									<?php 
									// echo "<pre>";
									// print_r($teamDesignation);die;
									$curMonth = date("n");


									 foreach ( $GoalMonth as $Month )
									{
									$selected_text='';
									if($Month->month_Id == $curMonth)
									$selected_text='selected';
									echo "<option year='".$Month->month."' value='".$Month->month_Id."'  $selected_text > ".$Month->month."</option>";

									}
									 
									 
									 ?>

									</select>
									</div>
									<div class="" style="margin-left:5px;" >
									
									<select class="empInput form-control" name="Year_Id" id="Year_Id" style="border: 1px solid #858796;" id="sel1">
											<option value="">Select Year</option>
											
											<?php 
											// echo "<pre>";
											// print_r($teamDesignation);die;
											$curnYear = date("Y");
											
											 foreach ( $GoalYear as $year )
											{
											$selected_text='';
											if($year->year == $curnYear)
											$selected_text='selected';
											echo "<option year='".$year->year."' value='".$year->year."'  $selected_text > ".$year->year."</option>";

											}
											 
											 
											 ?>
											
											</select> 
									</div>
									
									<div class="">
									
									<select class="form-control" placeholder="position" name="Designation" id="position_Id" style="border: 1px solid #858796;" id="sel1">
										
											<option>select</option>
											<?php 
											$curnYear = 'SEO Analyst';
											
											 foreach ( $teamDeisn as $year )
											{
											$selected_text='';
											if($year->Designation == $curnYear)
											$selected_text='selected';
											echo "<option year='".$year->Designation."' value='".$year->Designation."'  $selected_text > ".$year->Designation."</option>";

											}
											 
											 ?>
											</select>
									</div>
									
									</div>


</div>

</div> 
</div>
						
                    <!-- Content Row -->
					  <!-- Area Chart -->
							
						
							<div class="card-body pt-4">
                   		
								
									<div class="table-responsive" id="KPITeamRenderHtml">
										<table class="table table-bordered table-sm"  width="100%" cellspacing="0">
											<thead>
											<tr>
												<th class="cmPayroll">S.No.</th>
												<th class="cmPayroll">Employee Name</th>
												<th class="cmPayroll">Marks</th>
												<th class="cmPayroll">Comment</th>
												<th class="cmPayroll" style="min-width: 175px!important;">Action</th>
											
											</tr>
											</thead>
											
										
										<tbody>
											
											
										</tbody>
										</table>
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
	
	
	
	
	
<div class="modal " id="AddAfterKPI" role="dialog">
<div class="modal-dialog modal-lg">
<!-- Modal content-->
	<div class="modal-content" style="margin: 199px 9px 0 80px;  width: 89%!important; ">
		<div class="card-header" style="padding:0!important; background-color: #2e2869;">
		<div class="row">
		<h6 class="ColorPrimary" style="padding-left: 302px; padding-top: 10px;">Company's Yearly Goals Edit</h6>
		<button style="margin-left:197px;" type="button" class="close" data-bs-dismiss="modal">&times;</button>
		</div>
		</div>

	<div class="modal-body">

	<form class="form-horizontal" action="#">
			<div class="row" >
			<div class="col-lg-8">
			<div class="form-group">
			<label>Marks</label>
			<input type="text" name="AfterKpiMarks" id="AfterKpiMarks_Add" class="empInput form-control" style="border: 1px solid #858796;">
			</div>
			</div>
			<div class="col-lg-4">
			<div class="form-group">
			<label>Comment</label>
			<input type="text" name="AfterKPIComments" id="AfterKPIComments_Add" class="empInput form-control" style="border: 1px solid #858796;">
			</div>
			</div>
			</div>
		</form>
	</div>
        <button type="button" class="AfterKPI_AddSubmit" id="empSeoBtn" style="text-align:center; margin:25px 300px;">Update</button>
		<input type="hidden" name="" id="Emp_ID"/>
		<input type="hidden" name="" id="KPI_YearIdHidden"/>
		<input type="hidden" name="" id="KPI_MonthIdHidden"/>
		
	
	</div>
<!-- Content Row -->

</div>

</div>
  


	
<div class="modal " id="EditAfterKPI" role="dialog">
<div class="modal-dialog modal-lg">
<!-- Modal content-->
	<div class="modal-content" style="margin: 199px 9px 0 80px;  width: 89%!important; ">
		<div class="card-header" style="padding:0!important; background-color: #2e2869;">
		<div class="row">
		<h6 class="ColorPrimary" style="padding-left: 302px; padding-top: 10px;">Team Goals Edit</h6>
		<button style="margin-left:197px;" type="button" class="close" data-bs-dismiss="modal">&times;</button>
		</div>
		</div>

	<div class="modal-body">

	<form class="form-horizontal" action="#">
			<div class="row" >
			<div class="col-lg-8">
			<div class="form-group">
			<label>Marks</label>
			<input type="text" name="AfterKpiMarks" id="AfterKpiMarks_Edit" class="empInput form-control" style="border: 1px solid #858796;">
			</div>
			</div>
			<div class="col-lg-4">
			<div class="form-group">
			<label>Comment</label>
			<input type="text" name="AfterKPIComments" id="AfterKPIComments_Edit" class="empInput form-control" style="border: 1px solid #858796;">
			</div>
			</div>
			</div>
		</form>
	</div>
        <button type="button" class="AfterKPI_EditSubmit" id="empSeoBtn" style="text-align:center; margin:25px 300px;">Update</button>
		<input type="hidden" name="" id="AfterKPI_ID"/>
	
	</div>
<!-- Content Row -->

</div>

</div>
 


 
 <!-- The Modal -->
<div class="modal" id="myModal">

  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
	  <div class="card-header" style="padding:7px!important; background-color: #1C304C;">
			<div class="">
			<h6 class="ColorPrimary" style="text-align: center;margin-bottom: 0px;">Model Heading</h6>
			<button style="/* margin-left:197px; */" type="button" class="close" data-bs-dismiss="modal">×</button>
			</div>
			</div>
		
      <!-- Modal body -->
      <div class="modal-body">
	  
		
<!--<form  id="kpiform" method="POST" name="kpiform" action="<?php echo base_url() ?>index.php/hrzone/CompanyGoals/Kpisubmit">			
	<input name="employeename" id="employeename" type="text">	
  <input name="employeeemail" id="employeeemail" type="text">	
   <input name="employeemarks" id="employeemarks" type="text">	


	<table class="table table-bordered table-sm">
  <thead>
											
											<tr>
                                                    
													<th
                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056; border-right: 1px solid #ededed;">
                                                        Marks</th>
														<th
                                                        style="border-right: 1px solid #ededed; padding: 10px; border-bottom: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
                                                        <span id="marksUser" name="kpimarks"></span></th>
														
														
														
													<th
                                                        style="border-right: 1px solid #ededed; padding: 10px; border-bottom: 1px solid #ededed; width: 35%; font-weight:700; color:rgba(0,0,0,.64)">
                                                        Attended by:</th><th
                                                        style="padding: 10px; border-bottom: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
                                                        <span id="nameUser" ></span></th>
                                                    
                                                </tr>
												
												<tr>
                                                   
														<th colspan="1"
                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056; border-right: 1px solid #ededed;">
                                                        Apologies:</th>
														
														
													<th colspan="3"
                                                        style="padding: 10px; border-bottom: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
                                                        
										<input type="text" name="apologies" id="titleOne" class="empInput form-control" style="border: 1px solid white;">
										</th>
                                                    
                                                </tr>
												
												
											</thead>
											
											</table>
	  
	  
	   <div class="d-flex flex-row-reverse " style="margin-bottom:10px;background:#9e94ab;">
		<div class="p-2 mr-auto">
		<h4 style="padding-top:5px; color: white!important; font-weight:500; font-size: 16px; ">Marks deducted</h4>

		</div>
		<div class="p-2 mr-auto">

		<h5 style="padding-top:5px; padding-left:15px; color: white!important; font-weight:500; font-size: 16px; ">Click on <span style="white!important;">"+"</span>icon to <span style="white!important;"><strong>Add New Row.</strong></span><a href="#" id="row_Education" style="padding-left: 13px;"><span style="color:red;">"+"</span></a></h5>
		
		</div>
		</div>
										

							<div class="">
										<div class="table-responsive">
										<table class="table table-bordered table-sm" id="TimelistdataTable" width="100%">
										<thead>
										<tr style="color: #4c3f5e!important; background: ;">
										<td style="min-width: 200px;">
										
										
										<label>Item/Issues</label>
										
										
										
										</td>
										<td colspan="2">
										
										<label>Outcome/action</label>
										
										</td>
										
										
										
										
										
										</tr>
										</thead>
										<tbody class="marks-item">
										<tr>
										
										
										<td>
										
										<input type="text" name="marksdeducteditem[]" id="titleOne" class="empInput form-control" style="border: 1px solid white;">
										
										</td>
										<td>
										<input type="text" name="marksdeductedoutcome[]"  id="titleOne" class="empInput form-control" style="border: 1px solid white;">
										
										</td>
										
										
										</tr>
										
										
										
										
										
										
										
										</tbody>
										</table>
										</div>
										
										
									</div>
							
	   
	   <div class="d-flex flex-row-reverse " style="margin-bottom:10px;background:#9e94ab;">
		<div class="p-2 mr-auto">
		<h4 style="padding-top:5px; color: white!important; font-weight:500; font-size: 16px; ">This month work</h4>

		</div>
		<div class="p-2 mr-auto">

		<h5 style="padding-top:5px; padding-left:15px; color: white!important; font-weight:500; font-size: 16px; ">Click on <span style="white!important;">"+"</span>icon to <span style="white!important;"><strong>Add New Row.</strong></span><a href="#" id="add-rowMailOne"style="padding-left: 13px;"><span style="color:red;">"+"</span></a></h5>

		</div>
		</div>
										
							<div class="">
										<div class="table-responsive">
										<table class="table table-bordered table-sm" id="TimelistdataTable" width="100%">
										<thead>
										<tr style="color: #4c3f5e!important; background: ;">
										<td style="min-width: 200px;">
										
										
										<label>Item/Issue</label>
										
										
										
										</td>
										<td colspan="2">
										
										<label>Outcome/action</label>
										
										</td>
										
										
										
										
										
										</tr>
										</thead>
										<tbody id="rowMailOne">
										<tr>
										
										<td>
										
										<input type="text" name="thismonthitem[]" id="titleOne" class="empInput form-control" style="border: 1px solid white;">
										
										</td>
										<td>
										<input type="text" name="thismonthoutcome[]" id="titleOne" class="empInput form-control" style="border: 1px solid white;">
										
										</td>
										
										
										</tr>
										
										
										
										
										
										
										
										</tbody>
										</table>
										</div>
										
										
									</div>
									
								<div class="d-flex flex-row-reverse " style="margin-bottom:10px; background:#9e94ab;">
		<div class="p-2 mr-auto">
		<h4 style="padding-top:5px; color: white!important; font-weight:500; font-size: 16px; ">Upcoming month work</h4>

		</div>
		<div class="p-2 mr-auto">

		<h5 style="padding-top:5px; padding-left:15px; color: white!important; font-weight:500; font-size: 16px; ">Click on <span style="color: white!important;">"+"</span>icon to <span style="color: white!important;"><strong>Add New Row.</strong></span><a href="#" id="add-rowMailTwo"style="padding-left: 13px;"><span style="color:red;">"+"</span></a></h5>

		</div>
		</div>		
							<div class="">
	   
	   
										
										
										<div class="table-responsive">
										<table class="table table-bordered table-sm" id="TimelistdataTable" width="100%">
										<thead>
										<tr style="color: #4c3f5e!important; background: ;">
										<td style="min-width: 200px;">
										
										
										<label>Item/Issue</label>
										
										
										
										</td>
										<td colspan="2">
										
										<label>Outcome/action</label>
										
										</td>
										
										
										
										
										
										</tr>
										</thead>
										<tbody id="rowMailTwo">
										<tr>
										
										<td>
										
										<input type="text" name="upcomingmonthitem[]" id="titleOne" class="empInput form-control" style="border: 1px solid white;">
										
										</td>
										<td>
										<input type="text" name="upcomingmonthoutcome[]" id="titleOne" class="empInput form-control" style="border: 1px solid white;">
										
										</td>
										
										
										</tr>
										
										
										
										
										
										
										
										</tbody>
										</table>
										</div>
										
										
									</div>
											
							<div class="text-center">
									
							<button class="btn btn-default addEmpSubmitBtn" id="KPISubmit" type="submit" name="submit">Send</button>
							</div>
							</div>
						</form> -->

<!----------------------kpiform2 stsrt---------------------------->
 <form  id="kpiform" method="POST" name="kpiform" action="">			
	<input name="employeename" id="employeename" type="hidden">	
	<input name="employeeuserId" id="employeeuserId" type="hidden">	
   <input name="employeeemail" id="employeeemail" type="hidden">	
   <input name="employeemarks" id="employeemarks" type="hidden">
   <input name="month" id="month" type="hidden">
   <!--<input name="outof" id="outof" type="text">-->


	<table class="table table-bordered table-sm">
  <thead>
  
											
											<tr>
                                                    
													<th
                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056; border-right: 1px solid #ededed;">
                                                        Marks</th>
														<th
                                                        style="border-right: 1px solid #ededed; padding: 10px; border-bottom: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
                                                        <span id="marksUser" name="kpimarks"></span></th>
														
														
														
													<th
                                                        style="border-right: 1px solid #ededed; padding: 10px; border-bottom: 1px solid #ededed; width: 35%; font-weight:700; color:rgba(0,0,0,.64)">
                                                        Attended by:</th><th
                                                        style="padding: 10px; border-bottom: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
                                                        <span id="nameUser" ></span></th>
                                                    
                                                </tr>
												
												<tr>
                                                   
														<th colspan="1"
                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056; border-right: 1px solid #ededed;">
                                                        Date:</th>
														
														
													<th colspan="3"
                                                        style="padding: 10px; border-bottom: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
                                                        
										<input type="text" name="date" id="datee" class="empInput form-control" style="border: 1px solid white;">
										</th>
                                                    
                                                </tr>
												
												<tr>
                                                   
														<th colspan="1"
                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056; border-right: 1px solid #ededed;">
                                                        Apologies:</th>
														
														
													<th colspan="3"
                                                        style="padding: 10px; border-bottom: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
                                                        
										<input type="text" name="apologies" id="apologiess" class="empInput form-control" style="border: 1px solid white;">
										</th>
                                                    
                                                </tr>
												
												
											</thead>
											
											</table>
	  
	  
	   <div class="d-flex flex-row-reverse " style="margin-bottom:10px;background:#9e94ab;">
		<div class="p-2 mr-auto">
		<h4 style="padding-top:5px; color: white!important; font-weight:500; font-size: 16px; ">Marks deducted</h4>

		</div>
		<div class="p-2 mr-auto">

		<h5 style="padding-top:5px; padding-left:15px; color: white!important; font-weight:500; font-size: 16px; ">Click on <span style="color:white!important;">"+"</span>icon to <span style="color:white!important;"><strong>Add New Row.</strong></span><a href="#" id="add-Education" style="padding-left: 13px;"><span style="color:red;">"+"</span></a></h5>
		
		</div>
		</div>
										

							<div class="">
										<div class="table-responsive">
										<table class="table table-bordered table-sm" id="TimelistdataTable" width="100%">
										<thead>
										<tr style="background: #00d3c3!important; color: #fff!important;">
										<td style="min-width: 200px;">
										
										
										<label>Item/Issues</label>
										
										
										
										</td>
										<td colspan="2">
										
										<label>Outcome/action</label>
										
										</td>
										
										
										
										
										
										</tr>
										</thead>
										<tbody id="Education">
										<tr  >
										
										
										<td>
										
										<textarea name="marksdeducteditem[]" id="titleOne" class="empInput form-control" style="border: 1px solid white;"></textarea>
										
										</td>
										<td>
										<textarea  name="marksdeductedoutcome[]"  id="titleOne" class="empInput form-control" style="border: 1px solid white;"></textarea>
										
										</td>
										
										
										</tr>
										
										
										
										
										
										
										
										</tbody>
										</table>
										</div>
										
										
									</div>
							
	   
	   <div class="d-flex flex-row-reverse " style="margin-bottom:10px;background:#9e94ab;">
		<div class="p-2 mr-auto">
		<h4 style="padding-top:5px; color: white!important; font-weight:500; font-size: 16px; ">This month work</h4>

		</div>
		<div class="p-2 mr-auto">

		<h5 style="padding-top:5px; padding-left:15px; color: white!important; font-weight:500; font-size: 16px; ">Click on <span style="color:white!important;">"+"</span>icon to <span style="color:white!important;"><strong>Add New Row.</strong></span><a href="#" id="add-rowMailOne"style="padding-left: 13px;"><span style="color:red;">"+"</span></a></h5>

		</div>
		</div>
										
							<div class="">
										<div class="table-responsive">
										<table class="table table-bordered table-sm" id="TimelistdataTable" width="100%">
										<thead>
										<tr style="background: #00d3c3!important; color: #fff!important;">
										<td style="min-width: 200px;">
										
										
										<label>Item/Issue</label>
										
										
										
										</td>
										<td colspan="2">
										
										<label>Outcome/action</label>
										
										</td>
										
										
										
										
										
										</tr>
										</thead>
										<tbody id="rowMailOne">
										<tr>
										
										<td>
										
										<input type="text" name="thismonthitem[]" id="titleOne" class="empInput form-control" style="border: 1px solid white;">
										
										</td>
										<td>
										<input type="text" name="thismonthoutcome[]" id="titleOne" class="empInput form-control" style="border: 1px solid white;">
										
										</td>
										
										
										</tr>
										
										
										
										
										
										
										
										</tbody>
										</table>
										</div>
										
										
									</div>
									
								<div class="d-flex flex-row-reverse " style="margin-bottom:10px; background:#9e94ab;">
		<div class="p-2 mr-auto">
		<h4 style="padding-top:5px; color: white!important; font-weight:500; font-size: 16px; ">Upcoming month work</h4>

		</div>
		<div class="p-2 mr-auto">

		<h5 style="padding-top:5px; padding-left:15px; color: white!important; font-weight:500; font-size: 16px; ">Click on <span style="color: white!important;">"+"</span>icon to <span style="color: white!important;"><strong>Add New Row.</strong></span><a href="#" id="add-rowMailTwo"style="padding-left: 13px;"><span style="color:red;">"+"</span></a></h5>

		</div>
		</div>		
							<div class="">
	   
	   
										
										
										<div class="table-responsive">
										<table class="table table-bordered table-sm" id="TimelistdataTable" width="100%">
										<thead>
										<tr style="background: #00d3c3!important; color: #fff!important;">
										<td style="min-width: 200px;">
										
										
										<label>Item/Issue</label>
										
										
										
										</td>
										<td colspan="2">
										
										<label>Outcome/action</label>
										
										</td>
										
										
										
										
										
										</tr>
										</thead>
										<tbody id="rowMailTwo">
										<tr>
										
										<td>
										
										<input type="text" name="upcomingmonthitem[]" id="titleOne" class="empInput form-control" style="border: 1px solid white;">
										
										</td>
										<td>
										<input type="text" name="upcomingmonthoutcome[]" id="titleOne" class="empInput form-control" style="border: 1px solid white;">
										
										</td>
										
										
										</tr>
										
										
										
										
										
										
										
										</tbody>
										</table>
										</div>
										
										
									</div>
											
							<div class="text-center" id="buttonss">
									<a onclick="submitForm('<?php echo base_url() ?>index.php/hrzone/CompanyGoals/Kpisubmit2')" class="btn btn-default addEmpSubmitBtn"  name="submit">Save to Draft</a>
							<a  onclick="submitForm('<?php echo base_url() ?>index.php/hrzone/CompanyGoals/Kpisubmit')" class="btn btn-default addEmpSubmitBtn"   name="submit">Send Mail</a>
							</div>
							</div>
						</form>	
						









      </div>

      <!-- Modal footer -->
     

    </div>
  </div>
  
  <script>  
var row =0;
 function addMore() {
   //alert('ss');
	$(".marks-item:last").clone().insertAfter(".marks-item:last");	
}
</script>
</div> 
  
  
    <!-- End of Page Wrapper -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
		
var KPIdata = [];

$(document).ready(function(){
	
  
		var PositionID = $("#position_Id option:selected").val();
		var YearID = $("#Year_Id option:selected").val();
		var MonthID = $("#month_Id option:selected").val();
		
		EmployeeKPITeam(PositionID, YearID, MonthID);
  
  
  $("body").on('click', '.createMail', function(){
			
			var name = $(this).attr('data-name');
			
			var userId = $(this).attr('data-userId');
			var email = $(this).attr('data-email');
var marks = $(this).attr('data-marks');
			$("#nameUser").text(name);
				$('#employeename').val(name);
				//$('#outof').val(outof);
				$('#employeeuserId').val(userId);
				$('#month').val(document.getElementById("month_Id").value);
				
				//month_Id
				$("#employeeemail").val(email);
			$("#employeemarks").val(marks);
		//rowMailTwo
	$.ajax({

    url : '<?php echo base_url() ?>index.php/hrzone/CompanyGoals/fetchkpidata',
    type : 'POST',
    data : {
        'userid' : userId,
		'month' : document.getElementById("month_Id").value,
		
    },
    dataType:'json',
    success : function(data) {              
       $("#rowMailTwo").html(data);
    },
  error: function(xhr, status, error) {
	//  alert(xhr.responseText);
  $("#rowMailTwo").html(xhr.responseText);
}
});

$.ajax({

    url : '<?php echo base_url() ?>index.php/hrzone/CompanyGoals/fetchkpidata2',
    type : 'POST',
    data : {
        'userid' : userId,
		'month' : document.getElementById("month_Id").value,
		
    },
    dataType:'json',
    success : function(data) {              
       $("#Education").html(data);
    },
  error: function(xhr, status, error) {
	  //alert(xhr.responseText);
  $("#Education").html(xhr.responseText);
}
});

$.ajax({
    url : '<?php echo base_url() ?>index.php/hrzone/CompanyGoals/fetchkpidata3',
    type : 'POST',
    data : {
        'userid' : userId,
		'month' : document.getElementById("month_Id").value,
    },
    dataType:'json',
    success : function(data) {              
       $("#rowMailOne").html(data);
    },
  error: function(xhr, status, error) {
	//  alert(xhr.responseText);
  $("#rowMailOne").html(xhr.responseText);
}
});

$.ajax({
    url : '<?php echo base_url() ?>index.php/hrzone/CompanyGoals/fetchkpimail',
    type : 'POST',
    data : {
        'userid' : userId,
		'month' : document.getElementById("month_Id").value,
    },
    dataType:'json',
    success : function(data) {  

       if(data == '1'){
		   document.getElementById("buttonss").style.display='none';
		   
	   }else{
		    document.getElementById("buttonss").style.display='block';
	   }
    },
  error: function(xhr, status, error) {
	  
	   if(xhr.responseText == '1'){
		   document.getElementById("buttonss").style.display='none';
		   
	   }else{
		    document.getElementById("buttonss").style.display='block';
	   }
	//alert('resp '+xhr.responseText);
 // $("#rowMailOne").html(xhr.responseText);
}
});
//apologiess

$.ajax({
    url : '<?php echo base_url() ?>index.php/hrzone/CompanyGoals/fetchkpiapo',
    type : 'POST',
    data : {
        'userid' : userId,
		'month' : document.getElementById("month_Id").value,
    },
    dataType:'json',
    success : function(data) {  
		   document.getElementById("apologiess").value=data;
    },
  error: function(xhr, status, error) {
	   document.getElementById("apologiess").value=xhr.responseText;
}
});	


$.ajax({
    url : '<?php echo base_url() ?>index.php/hrzone/CompanyGoals/fetchkpidate',
    type : 'POST',
    data : {
        'userid' : userId,
		'month' : document.getElementById("month_Id").value,
    },
    dataType:'json',
    success : function(data) {  
		   document.getElementById("datee").value=data;
    },
  error: function(xhr, status, error) {
	   document.getElementById("datee").value=xhr.responseText;
}
});			

			
			$("#marksUser").text(marks);
		
		$("#myModal").modal('show');
	});
  
  
  $("body").on('click', '.KPI_UserAdd', function(){

	var id = $(this).attr('data-KPIID');
	var YearID = $("#Year_Id option:selected").val();
	var MonthID = $("#month_Id option:selected").val();
	
	$('#Emp_ID').val(id);
	$('#KPI_YearIdHidden').val(YearID);
	$('#KPI_MonthIdHidden').val(MonthID);
	$("#AddAfterKPI").modal('show');
  });
  
  $("body").on('click', '.KPI_UserEdit', function(){

	var id = $(this).attr('data-KPIID');

	console.log(KPIdata);
	//i => i.goalpoints_Id == id;
	var foundData = KPIdata.find(i => i.AKPI_Id == id);
	console.log(foundData);
	// var goalpoint = $(this).data(goal_comments);
	// var user = ${response.data.map(function(data))};
	// var user = JSON.stringify(data);
	$('#team_seogoal_points').val(foundData.seogoal_points);
	$('#team_seogoal_comments').val(foundData.seogoal_comments);
	$('#team_work_status').val(foundData.work_status);
	$('#team_IdHidden').val(foundData.Seo_Id);
	$('#goal_YearIdHidden').val(foundData.Year_Id);
	$("#updateTeamModal").modal('show');
  });
  
  
  
  
  
  $("body").on('click', '.CompanyData', function(){
    var conf = 'Are you sure You have to delete this file';
	var id = $(this).attr('data-yearD');
	var Yid = $("#Year_Id").val();
	// var Yid = $('#goal_YearIdHidden').val();
	var ajaxurl = "<?=site_url('hrzone/CompanyGoals/companygoalPointsDeleteById');?>";
        $.ajax({
            type: "get",
            url: ajaxurl,
            data: { id : id},
			success:function(){
			CompanyYearlyGoal(Yid);
			alert(conf);
		}
			
	}
	
	);
	
  });
  
  
  
	$("body").on('click', '.seoTeamData', function(){
  // function updateUserRecord(){
	var team_points = $('#team_seogoal_points').val();
	var team_comments = $('#team_seogoal_comments').val();
	var team_work = $('#team_work_status').val();
	var teamId = $('#team_IdHidden').val();
	var teamId = $('#team_IdHidden').val();
	var yearID = $('#goal_YearIdHidden').val();
	
	// var Yid = $(this).attr('data-yearID');
	var ajaxurl = "<?=site_url('hrzone/CompanyGoals/TeamgoalUpdateById');?>";
        $.ajax({
            type: "post",
            url: ajaxurl,
            data: {team_points : team_points, team_comments : team_comments, team_work:team_work, teamId:teamId, yearID:yearID},
			dataType: "JSON",
			success:function(data){
			$('#updateTeamModal').modal("hide");
			SeoYearlyGoal(YearID);
			alert("Data updated Successfully");
			}
			
		});
  
}); 
  
  


$("body").on('click', '.TeamGoalsdelete', function(){
    var conf = 'Are you sure You have to delete this file';
	var id = $(this).attr('data-teamId');
	var Yid = $("#Year_Id").val();
	// var Yid = $('#goal_YearIdHidden').val();
	var ajaxurl = "<?=site_url('hrzone/CompanyGoals/TeamGoalDeleteById');?>";
        $.ajax({
            type: "get",
            url: ajaxurl,
            data: { id : id},
			success:function(){
			CompanyYearlyGoal(Yid);
			alert(conf);
		}
			
	}
	
	);
	
  });

$("body").on('click', '.AfterKPI_AddSubmit', function(){
	
	var KpiMarks = $('#AfterKpiMarks_Add').val();
	var KPIComments = $('#AfterKPIComments_Add').val();
	var Emp_UserID = $('#Emp_ID').val();
	var KPI_YearId = $('#KPI_YearIdHidden').val();
	var KPI_MonthId = $('#KPI_MonthIdHidden').val();
	//var KPI_MonthId = $('#KPI_MonthIdHidden').val();
	
	// var Yid = $(this).attr('data-yearID');
	
	$.post("<?=site_url('hrzone/CompanyGoals/AddafterKpiMarks');?>", {
		KpiMarks : KpiMarks, 
		KPIComments : KPIComments,   
		Emp_UserID : Emp_UserID,   
		KPI_YearId : KPI_YearId,   
        KPI_MonthId : KPI_MonthId  
		}, function(data, status){
			$('#AddAfterKPI').modal("hide");
			EmployeeKPITeam(YearID);
			alert("User details updated successfully!");
			
		});
  
});


	
		
		 
		
    $("#position_Id, #Year_Id, #month_Id").change(function(){
		
		$('#CityPostContainer').html("<div>Loading Post.....</div>");
		
        var PositionID = $("#position_Id option:selected").val();
		var MonthID = $("#month_Id option:selected").val();
		var YearID = $("#Year_Id option:selected").val();
		
		EmployeeKPITeam(PositionID, YearID, MonthID);
    });
	
	
	
});



function EmployeeKPITeam(PositionID, YearID, MonthID){
	var ajaxurl = "<?=site_url('hrzone/CompanyGoals/KPITeamByPosition');?>";
        $.ajax({
            type: "get",
            url: ajaxurl,
            data: {PositionID:PositionID, YearID : YearID, MonthID:MonthID},
			dataType: "JSON"
        }).done(function(response){
			KPIdata = response.data;
			
			//alert(response.data);
			if(response)
				$("#KPITeamRenderHtml tbody").html(`${response.data.map(function(data, index){
					return(`<tr>
												<td style="text-align:center;" >${++index}</td>
												<td style="min-width: 105px!important; padding: 0.25rem!important;">${data.userName}</td>
												${data.KPIMonthlyMarks.length > 0 ? `${data.KPIMonthlyMarks.map(function(KPIMonthlyMarksData){
										return`
										
										<td style="min-width: 15px!important; text-align:center; padding: 0.25rem!important;" class="AttFontStatus edit_Attn ${KPIMonthlyMarksData.marksObt}">${(data.KPIMonthlyMarks2 != "")?data.KPIMonthlyMarks2: "Nil"}</td>
										<td style="min-width: 265px!important; text-align:center; padding: 0.25rem!important;" class="AttFontStatus edit_Attn "></td>
										
										
										
										`
										}).join('')}` :`<td style="min-width: 15px!important; text-align:center; padding: 0.25rem!important;" class="AttFontStatus"></td>
										<td style="min-width: 265px!important; text-align:center; padding: 0.25rem!important;" class="AttFontStatus"></td>`}
												
												
										
										
												<td style="min-width: 175px!important;">
												
													<div class=" ">
													<ul class="tnUemp">
													<li class="tnemp"><a href="#"><i style="color:red;" class="actionFontSize fas fa-trash-alt"></i></a></li>
													<li class="tnemp"><a href="#" class="createMail" data-name="${data.userName}" data-email="${data.email}"  data-userId="${data.userId}"  data-marks="${data.KPIMonthlyMarks.map(function(KPIMonthlyMarksData){
										return`${(KPIMonthlyMarksData.marksObt != "")?KPIMonthlyMarksData.marksObt: "Nil"}`
										}).join('')}"><i style="color:green;" class="actionFontSize fas fa-edit"></i></a></li>
													
													<li class="tnemp"><a href="<?=base_url('index.php/hrzone/CompanyGoals/KPISeoView/');?>${data.userId}/${data.YearempID.map(function(YearempIDData){
												return`${YearempIDData}`
												}).join('')}/${data.MonthempID.map(function(MonthempIDData){
												return`${MonthempIDData}`
												}).join('')}/${data.Position.map(function(PositionData){
												return`${PositionData}`
												}).join('')}"><i style="color:blue;" class="actionFontSize fa fa-eye" aria-hidden="true"></i></a></li>
													
													</ul>

													</div>
												
												</td>
												
											</tr>`)
				})}`);
            else 
				$("#CompanydataTable tbody").html("<div>No data Found.....</div>");
        });
}
							
</script>

<script type="text/javascript">
  function submitForm(action) {
	 // alert(action);
    var form = document.getElementById('kpiform');
    form.action = action;
    form.submit();
  }
</script>

<script type="text/javascript">


    $(document).ready(function(){
	

$( "#kpiformm" ).submit(function() {
  //alert( "Email Has Been Sent" );
  
});


  
		 $("#add-Education").click(function(){
            row++
             var markup = `<tr id="row_Education_${row}" >
										
										
										<td>
										
										<textarea  name="marksdeducteditem[]" class="empInput form-control" style="border: 1px solid white;"></textarea>
										
										</td>
										<td>
										<textarea  name="marksdeductedoutcome[]" class="empInput form-control" style="border: 1px solid white;"></textarea>
										
										</td>
										<td style="min-width: 10px!important;">
										
										
										<a data-row="${row}" class="EducationDeleteRow"><i class="fas fa-times-circle"></i></a>
										</td>
										</tr>
										`;
            $("#Education").append(markup);

        });		
		
		
		$("#add-rowMailOne").click(function(){
            row++
            var markup = `<tr id="row_rowMailOne_${row}">
										
										
										<td>
										
										<textarea  name="thismonthitem[]" class="empInput form-control" style="border: 1px solid white;"></textarea>
										
										</td>
										<td>
										<textarea  name="thismonthoutcome[]" class="empInput form-control" style="border: 1px solid white;"></textarea>
										
										</td>
										<td style="min-width: 10px!important;">
										
										
										<a data-row="${row}" class="rowMailOneDeleteRow"><i class="fas fa-times-circle"></i></a>
										</td>
										</tr>
										`;
            $("#rowMailOne").append(markup);

        });		
		
		
		$("#add-rowMailTwo").click(function(){
            row++
            var markup = `<tr id="row_rowMailTwo_${row}">
										
										
										<td>
										
										<textarea type="text" name="upcomingmonthitem[]" class="empInput form-control" style="border: 1px solid white;"></textarea>
										
										</td>
										<td>
										<textarea type="text" name="upcomingmonthoutcome[]" class="empInput form-control" style="border: 1px solid white;"></textarea>
										
										</td>
										<td style="min-width: 10px!important;">
										
										
										<a data-row="${row}" class="rowMailTwoDeleteRow"><i class="fas fa-times-circle"></i></a>
										</td>
										</tr>
										`;
            $("#rowMailTwo").append(markup);

        });		
		
		
		
		
		$("body").on('click', '.EducationDeleteRow', function(){
		var id = $(this).attr('data-row');
		$("#row_Education_"+ id).remove();
		console.log(this);
		});
		
		$("body").on('click', '.rowMailOneDeleteRow', function(){
		var id = $(this).attr('data-row');
		$("#row_rowMailOne_"+ id).remove();
		console.log(this);
		});
		
		$("body").on('click', '.rowMailTwoDeleteRow', function(){
		var id = $(this).attr('data-row');
		$("#row_rowMailTwo_"+ id).remove();
		console.log(this);
		});
		
		

	
	});						

    

    </script>  

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

<?php include('footer.php'); ?>