<?php include('header.php'); ?>
<?php include('payAndTimeSidebar.php'); ?>
<style>
.addEmpSubmitBtn{
	margin: 20px 445px;
	color:white!important;
    
	float:center;
    background: #1C304C;
    
    font-weight: 400;
    border-radius: 2px;
    padding: .2em 2em 0.2em 2em;
    border: none !important;
}
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
.fC a {
  text-decoration: none;
  color: #706e80;
}
.actionFontSize {
    font-size: 9px!important;
    color: #6421b4;
}

.btnQdUpload {
  border: 2px solid #504a94;
  color: white;
  background-color: #504a94;
  padding: 0px 7px;
  border-radius: 0px;
  font-size: 16px;
  font-weight: bold;
}
.actionFile a{
	
	text-decoration:none;
	color:#504a94;
}
.compUemp{
	list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
}
.compemp a{
	text-decoration:none;
	text-align: center;
	color:#706e80;
}
.table-sm td, .table-sm th {
    padding: .3rem;
    
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
	font-size:12px;
}



.BC {
  background: #ffeded;
}

.BC2 {
  background: #eafffb;
}

.table thead th{
    vertical-align: bottom;
    border-bottom: 1px solid #9d9ea1;
    COLOR: #4c3f5e;
    text-align:center;
}
.table thead th:nth-child(1){
    text-align:left;
}
.table-bordered th{
	border:none;
	border-right:1px solid #9d9ea1!important;
	font-size:12px;
}

.table-responsive{
	border:none;
}
.table-bordered td{
	border: 1px solid #9d9ea1!important;
	font-size:12px;
}
tbody{
    text-align:center;
}
tbody tr td:nth-child(1){
    text-align:left;
}
tbody td{
    color:#343434;
}
.col-lg-1{
    max-width: 4.33333%;
	padding-right:0px!important;
}
.card-header {
    padding: 0.25rem 1.25rem!important;
}

 </style>
        
	
        <!-- Content Wrapper -->
        <div id="content-wrapper bg-gradient-primary" class="container-fluid col-lg-10" style=" margin-bottom:50px;padding-left:10px;">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="">

                    <!-- Page Heading -->
                    
					<div class="card shadow mb-4" style="margin-bottom:100px;">
                    <div class=" card-header 	ColorSecondaryPre">
					<div class="row d-flex pl-1 ">

<div class="col-lg-1"><a href="<?php echo base_url() ?>index.php/hrzone/dashboard/wall" style="color: white;font-size: 15px;"><i class="fa fa-home" aria-hidden="true"></i></a></div>
<div class="col-lg-10"> <i style="font-size: 10px;color: white;" class="fas fa-chevron-right"></i><span class="breadcrumb_text" style="font-size: 15px;color: #fff;font-weight: 600;"> &nbsp;Salary Breakup</span></div>
</div>
                        </div>
						
                        
                    <!-- Content Row -->
					  <!-- Area Chart -->
						<div class="shadow ">
							
							<div class="card-body">
							
							
							
							<h5 style="color: #4c3f5e;text-align:center;font-weight:bold;margin:auto;font-size: 14px;">Yearly & Monthly Break Up of Gross Salary</h5>
							
							<div class="table-responsive" style="margin-top: 15px;">
									<table class="table table-bordered table-sm table-striped" id="dataTable" width="100%">
										
										<thead></thead>
										
										<tbody>
												<tr>
												<td class="fC" style="color: #4c3f5e;font-weight: 600;">Basic</td>
												<td class="fC text-center" >&nbsp;<?php echo $SalarybreakUp->basic_salary;?>%&nbsp;<a href="#" data-SalaryBr="<?php echo $SalarybreakUp->sc_id;?>" class="salaryBreakupEdit"><i class="actionFontSize fas fa-edit"></i></a></td>
												<td class="fC text-center" style="color: #4c3f5e;font-weight: 600;">
												<select>
										
										
											<option><?php echo $data['userId'] = $id; ?></option>		
											
											</select>
													
											</td>
												<td class="fC text-center" style="color: #4c3f5e;font-weight: 600;" >Dept</td>
												<td class="fC text-center" style="color: #4c3f5e;font-weight: 600;">Approved By</td>
												<td class="fC text-center" style="color: #4c3f5e;font-weight: 600;">Date&nbsp;<a href="#" data-brUserId="<?php echo $UserD->sb_Id; ?>" class="BreakupUserEdit"><i class="actionFontSize fas fa-edit"></i></a></td>
												
												
												
												
												
												
											</tr>
										
											<tr>
												
												<td class="fC">City Compensation Allw</td>
												<td class="fC text-center "><?php echo $SalarybreakUp->city_compensation_allowance;?>%</td>
												<td class="fC text-center"><?php echo $UserD->name; ?></td>
												<td class="fC text-center"><?php echo $UserD->dept; ?></td>
												<td class="fC text-center"><?php echo $UserD->approved_by; ?></td>
												<td class="fC text-center"><?php echo $UserD->sb_date; ?></td>
												
												
												
											</tr>
											<tr>
												
												<td class="fC">Conveyance</td>
												<td class="fC text-center"><?php echo $SalarybreakUp->conveyance;?>%</td>
											</tr>
											
											<tr>
												
												<td class="fC">Conveyance</td>
												<td class="fC text-center"><?php echo $SalarybreakUp->conveyance;?>%</td>
											</tr>
											
											<tr>
												
												<td class="fC">Conveyance</td>
												<td class="fC text-center"><?php echo $SalarybreakUp->conveyance;?>%</td>
											</tr>
											<tfoot>
											
											</tfoot>
											
											
										</tbody>
									</table>
								</div>
							</div>
							
							<div class="card-body" style="margin-bottom: 50px;">
								
								<div class="table-responsive" id="salaryBreakUpRender" style="border-top: 1px solid grey;">
									
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
	
	<div class="modal " id="updateUserModal" role="dialog">
<div class="modal-dialog modal-lg">
<!-- Modal content-->
	<div class="modal-content" style="margin: 196px 9px 0 259px;  width: 89%!important; ">
		<div class="card-header" style="padding:0!important; background-color: #2e2869;">
		<div class="row">
		<h6 class="ColorPrimary" style="padding-left: 302px; padding-top: 10px;">Salary BreakUp</h6>
		<button style="margin-left:220px;" type="button" class="close" data-bs-dismiss="modal">&times;</button>
		</div>
		</div>

	<div class="modal-body">

	<form class="form-horizontal" action="#">
			<div class="row" >
			<div class="col-lg-3">
			<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" id="emp_name" class="empInput form-control" style="border: 1px solid #858796;">
			</div>
			</div>
			
			<div class="col-lg-3">
			<div class="form-group">
			<label>Dept</label>
			<input type="text" name="dept" id="emp_dept" class="empInput form-control" style="border: 1px solid #858796;">
			</div>
			</div>
			
			
			
			<div class="col-lg-3">
			<div class="form-group">
			<label>approved_by</label>
			<input type="text" name="approved_by" id="emp_approved_by" class="empInput form-control" style="border: 1px solid #858796;">
			</div>
			</div>
			
			<div class="col-lg-3">
			<div class="form-group">
			<label>Date</label>
			<input type="date" name="sb_date" id="emp_sb_date" class="empInput form-control" style="border: 1px solid #858796;">
			</div>
			</div>
			
		
			
			
			</div>
		

	<button type="button" class="addEmpSubmitBtn BreakUpUserSubmit" id="btnUploadPage" style="text-align:center; margin:25px 300px;">Submit</button>
	<input type="hidden" name="" id="emp_BId" >

	</form>
	</div>
	</div>
<!-- Content Row -->

</div>

</div>


	
	<div class="modal " id="updateSalaryModal" role="dialog">
<div class="modal-dialog modal-lg">
<!-- Modal content-->
	<div class="modal-content" style="margin: 196px 9px 0 259px;  width: 89%!important; ">
		<div class="card-header" style="padding:0!important; background-color: #2e2869;">
		<div class="row">
		<h6 class="ColorPrimary" style="padding-left: 302px; padding-top: 10px;">Salary BreakUp</h6>
		<button style="margin-left:220px;" type="button" class="close" data-bs-dismiss="modal">&times;</button>
		</div>
		</div>

	<div class="modal-body">

	<form class="form-horizontal" action="#">
			<div class="row" >
			<div class="col-lg-4">
			<div class="form-group">
			<label>Basic Salary</label>
			<input type="text" name="basic_salary" id="emp_basic" class="empInput form-control" style="border: 1px solid #858796;">
			</div>
			</div>
			
			<div class="col-lg-4">
			<div class="form-group">
			<label>City Compensation</label>
			<input type="text" name="city_compensation_allowance" id="emp_city" class="empInput form-control" style="border: 1px solid #858796;">
			</div>
			</div>
			
			
			
			<div class="col-lg-4">
			<div class="form-group">
			<label>Conveyance</label>
			<input type="text" name="conveyance" id="emp_conveyance" class="empInput form-control" style="border: 1px solid #858796;">
			</div>
			</div>
			
		
			
			
			</div>
		

	<button type="button" class="addEmpSubmitBtn SalaryBreakSubmit" id="btnUploadPage" style="text-align:center; margin:25px 300px;">Submit</button>
	<input type="hidden" name="" id="emp_CID" >

	</form>
	</div>
	</div>
<!-- Content Row -->

</div>

</div>





<div class="modal " id="updateBrModal" role="dialog">
<div class="modal-dialog">
<!-- Modal content-->
	<div class="modal-content" style="margin: 196px 9px 0 259px;  width: 89%!important; ">
		<div class="card-header" style="padding:0!important; background-color: #2e2869;">
		<div class="row">
		<h6 class="ColorPrimary" style="padding-left: 200px; padding-top: 10px;">Salary BreakUp</h6>
		<button style="margin-left:90px;" type="button" class="close" data-bs-dismiss="modal">&times;</button>
		</div>
		</div>

	<div class="modal-body">

	<form class="form-horizontal" action="#">
			<div class="row" >
			
			<div class="col-lg-6">
			<div class="form-group">
			<label>Select</label>
			<select class="empInput form-control" name="calDate" id="calDate" style="border: 1px solid #858796;">
			<option >select</option>
			<option value="1">Yearly</option>
			<option value="12">Monthly</option>
			
			</select>
			</div>
			<span id="user_MaritalStatus_error"></span>
			</div>
			<div class="col-lg-6">
			<div class="form-group">
			<label>Enter Gross Salary</label>
			<input type="text" name="Salary" id="BreakUpSalary" class="empInput form-control" style="border: 1px solid #858796;">
			</div>
			</div>
			
			
			</div>
		

	<button type="button" class="addEmpSubmitBtn SalaryBreakSubmit" id="btnUploadPage" style="text-align:center; margin:25px 160px;">Submit</button>
	<input type="hidden" name="" id="emp_CID" >

	</form>
	</div>
	</div>
<!-- Content Row -->

</div>

</div>




<div class="modal " id="updateCLRModal" role="dialog">
<div class="modal-dialog">
<!-- Modal content-->
	<div class="modal-content" style="margin: 196px 9px 0 259px;  width: 89%!important; ">
		<div class="card-header" style="padding:0!important; background-color: #2e2869;">
		<div class="row">
		<h6 class="ColorPrimary" style="padding-left: 200px; padding-top: 10px;">Salary BreakUp</h6>
		<button style="margin-left:90px;" type="button" class="close" data-bs-dismiss="modal">&times;</button>
		</div>
		</div>

	<div class="modal-body">

	<form class="form-horizontal" action="#">
			<div class="row" >
			<div class="col-lg-12">
			<div class="form-group">
			<label>Enter Gross Salary</label>
			<input type="text" name="Salary" id="BreakUpSalaryMonthly" class="empInput form-control" style="border: 1px solid #858796;">
			</div>
			</div>
			
			
			
			
			</div>
		

	<button type="button" class="addEmpSubmitBtn SalaryBreakMonthlySubmit" id="btnUploadPage" style="text-align:center; margin:25px 160px;">Submit</button>
	<input type="hidden" name="" id="emp_CID" >

	</form>
	</div>
	</div>
<!-- Content Row -->

</div>

</div>








<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
	$(document).ready(function(){
	SalaryBreakUpCalculator(240000, 1);
	
	$("body").on('click', '.salaryBreakupEdit', function(){
	var id = $(this).attr('data-SalaryBr');
	var ajaxurl = "<?=site_url('hrzone/SalaryBreakUp/salaryClrView');?>";
        $.ajax({
            type: "get",
            url: ajaxurl,
            data: {id:id},
			dataType: "JSON",
			success:function(data){
				console.log(data.basic_salary);
				$('#emp_basic').val(data.basic);
				$('#emp_city').val(data.city);
				$('#emp_conveyance').val(data.conveyanceAllw);
				$('#emp_CID').val(data.BreakUpid);
				$("#updateSalaryModal").modal('show');
				
			
			}
				
        });
	
  });
  
	
	
	$("body").on('click', '.BreakupUserEdit', function(){
	var id = $(this).attr('data-brUserId');
	var ajaxurl = "<?=site_url('hrzone/SalaryBreakUp/breakUpEdit');?>";
        $.ajax({
            type: "get",
            url: ajaxurl,
            data: {id:id},
			dataType: "JSON",
			success:function(data){
				console.log(data.basic_salary);
				$('#emp_name').val(data.name);
				$('#emp_dept').val(data.dept);
				$('#emp_approved_by').val(data.approved_by);
				$('#emp_sb_date').val(data.sb_date);
				$('#emp_BId').val(data.sb_Id);
				$("#updateUserModal").modal('show');
				
			
			}
				
        });
	
  });
  
  
  
	
	$("body").on('click', '.BreakUpUserSubmit', function(){
  // function updateUserRecord(){
	var breakup_name = $('#emp_name').val();
	var breakup_dept = $('#emp_dept').val();
	var breakup_approved_by = $('#emp_approved_by').val();
	var breakup_sb_date = $('#emp_sb_date').val();
	var breakup_BId = $('#emp_BId').val();
	
	// var Yid = $(this).attr('data-yearID');
	var ajaxurl = "<?=site_url('hrzone/SalaryBreakUp/UserBreakUpUpdate');?>";
        $.ajax({
            type: "post",
            url: ajaxurl,
            data: {breakup_name : breakup_name, breakup_dept : breakup_dept, breakup_approved_by:breakup_approved_by, breakup_sb_date:breakup_sb_date, breakup_BId:breakup_BId},
			dataType: "JSON",
			success:function(data){
			$('#updateUserModal').modal("hide");
			alert("Data updated Successfully");
			}
			
		});
  
}); 
  
  
  
		
	$("body").on('click', '.salaryBreakupMonthly', function(){
	
				$("#updateCLRModal").modal('show');
				
				
        });
	
 
	$("body").on('click', '.salaryBreakup', function(){
	
				$("#updateBrModal").modal('show');
				
				
        });
	
 
		
	
	
	
	$("body").on('click', '.SalaryBreakSubmit', function(){
  // function updateUserRecord(){
	var breakup_basic = $('#emp_basic').val();
	var breakup_city = $('#emp_city').val();
	var breakup_conveyance = $('#emp_conveyance').val();
	var breakup_CID = $('#emp_CID').val();
	
	// var Yid = $(this).attr('data-yearID');
	var ajaxurl = "<?=site_url('hrzone/SalaryBreakUp/salaryClrEdit');?>";
        $.ajax({
            type: "post",
            url: ajaxurl,
            data: {breakup_basic : breakup_basic, breakup_city : breakup_city, breakup_conveyance:breakup_conveyance, breakup_CID:breakup_CID },
			dataType: "JSON",
			success:function(data){
			$('#updateSalaryModal').modal("hide");
			alert("Data updated Successfully");
			}
			
		});
  
}); 
	
	
	
	SalaryBreakUpCalculator();
	
	$("body").on('click', '.SalaryBreakSubmit', function(){
	var GrossSalaryM = $('#calDate').val();
	var GrossSalary = $('#BreakUpSalary').val();
	$('.gross').val(GrossSalary);
	SalaryBreakUpCalculator(GrossSalary, GrossSalaryM);
	$('#updateBrModal').modal("hide");
	$('#updateCLRModal').modal("hide");
	var GrossSalaryM = $('#calDate').val('');
	var GrossSalary = $('#BreakUpSalary').val('');
  });
  
  
  
  
  
  
	
});



function SalaryBreakUpCalculator(GrossSalary, GrossSalaryM){
	var ajaxurl = "<?=site_url('hrzone/SalaryBreakUp/SalaryCalculator');?>";
        $.ajax({
            type: "get",
            url: ajaxurl,
            data: {GrossSalary:GrossSalary, GrossSalaryM:GrossSalaryM},
			dataType: "JSON"
        }).done(function(response){
			if(response){
				
				
				$("#salaryBreakUpRender").html(`
					<table class="table table-bordered table-sm table-striped" id="dataTable" width="100%" style="border-left: 1px solid grey;">
										
										<thead>
											<tr>
												<th  style="width:500px;"class="fC">Details</th>
												<th style="width:90px;" class="BC fC">Yearly	</th>
												<th  style="width:100px;" class="BC fC">Grand Totals	</th>
												<th  style="width:140px;" class="BC2 fC">Accounts Monthly</th>
												<th style="width:85px;" class="BC2 fC">Final Amount</th>
												<th style="width:60px;" class="fC">Net PM</th>
													
											</tr>
										</thead>
										
										<tbody>
												${response.data.map(function(data){
												return`
											<tr>
												${data.GrossMonthly.map(function(GrossMonthlyData){
												return`
												<td class="fC" style="font-weight:600;">Gross Salary</td>
												<td class="BC fC" style="color:#1C304C;">${GrossMonthlyData}&nbsp;&nbsp;&nbsp;<a href="#" class="salaryBreakup"><i style="color:#1C304C;" class="actionFontSize fas fa-edit"></i></a></td>
												<td class="BC fC"></td>
												
												
												${data.GrossYearly.map(function(GrossYearlyData){
												return`<td class="BC2 fC"  style="color:#1C304C;">${GrossYearlyData}&nbsp;&nbsp;&nbsp;<a href="#" class="salaryBreakup"><i  style="color:#1C304C;" class="actionFontSize fas fa-edit"></i></a></td>`
												}).join('')}
												<td class="BC2 fC"></td>
												<td class=" fC"></td>	
												
												`
												}).join('')}
												
											</tr>
											
											
										
											<tr>
												
												<td class="fC">Basic</td>
												${data.YearlyBasic.map(function(YearlyBasicData){
												return`<td class="BC fC">${YearlyBasicData}</td></td>`
												}).join('')}
												
												
												<td class="BC fC"></td>
												${data.MonthlyBasic.map(function(MonthlyBasicData){
												return`<td class="BC2 fC">${MonthlyBasicData}</td></td>`
												}).join('')}
												<td class="BC2 fC"></td>
												<td class="fC"></td>	
											</tr>
											
											
											
											<tr>
												
												<td class="fC">HRA</td>
												${data.HRAYearly.map(function(HRAYearlyData){
												return`<td class="BC fC">${HRAYearlyData}</td></td>`
												}).join('')}
												<td class="BC fC"></td>
												${data.HRAMonthly.map(function(HRAMonthlyData){
												return`<td class="BC2 fC">${HRAMonthlyData}</td></td>`
												}).join('')}
												<td class="BC2 fC"></td>
												<td class="fC"></td>	
											</tr>
											<tr>
												
												<td class="fC">Dearness Allowance</td>
											${data.DAYearly.map(function(DAYearlyData){
												return`<td class="BC fC">${DAYearlyData}</td></td>`
												}).join('')}
												<td class="BC fC"></td>
												${data.DAMonthly.map(function(DAMonthlyData){
												return`<td class="BC2 fC">${DAMonthlyData}</td></td>`
												}).join('')}
												<td class="BC2 fC"></td>
												<td class="fC"></td>	
											</tr>
											<tr>
												
												<td class="fC">Conveyance</td>
												${data.ConveyanceYearly.map(function(ConveyanceYearlyData){
												return`<td class="BC fC">${ConveyanceYearlyData}</td></td>`
												}).join('')}
												<td class="BC fC"></td>
											${data.ConveyanceMonthly.map(function(ConveyanceMonthlyData){
												return`<td class="BC2 fC">${ConveyanceMonthlyData}</td></td>`
												}).join('')}
												<td class="BC2 fC"></td>
												<td class="fC"></td>	
											</tr>
											
											
											<tr>
												
												<td class="fC">Medical</td>
												${data.DAYearly.map(function(DAYearlyData){
												return`<td class="BC fC">${DAYearlyData}</td></td>`
												}).join('')}
												<td class="BC fC"></td>
												${data.DAMonthly.map(function(DAMonthlyData){
												return`<td class="BC2 fC">${DAMonthlyData}</td></td>`
												}).join('')}
												<td class="BC2 fC"></td>
												<td class="fC"></td>	
											</tr>
											<tr>
												
												<td class="fC">Educational</td>
												${data.DAYearly.map(function(DAYearlyData){
												return`<td class="BC fC">${DAYearlyData}</td></td>`
												}).join('')}
												<td class="BC fC"></td>
												${data.DAMonthly.map(function(DAMonthlyData){
												return`<td class="BC2 fC">${DAMonthlyData}</td></td>`
												}).join('')}
												<td class="BC2 fC"></td>
												<td class="fC"></td>	
											</tr>
											<tr>
												
												<td class="fC">Special Allowance</td>
												${data.DAYearly.map(function(DAYearlyData){
												return`<td class="BC fC">${DAYearlyData}</td></td>`
												}).join('')}
												<td class="BC fC"></td>
												${data.DAMonthly.map(function(DAMonthlyData){
												return`<td class="BC2 fC">${DAMonthlyData}</td></td>`
												}).join('')}
												<td class="BC2 fC"></td>
												<td class="fC"></td>	
											</tr>
											<tr>
												
												<td class="fC">Special Allowance</td>
												<td class="BC fC">Nil</td>
												<td class="BC fC"></td>
												<td class="BC2 fC">Nil</td>
												<td class="BC2 fC"></td>
												<td class="fC"></td>	
											</tr>
											<tr>
												
												<td class="fC">P.F. <span class="noteSalary">(Employers Contribution 12% of Basic of Rs 780/-whichever is less.)</span></td>
												<td class="BC fC">Nil</td>
												<td class="BC fC"></td>
												<td class="BC2 fC"></td>
												<td class="BC2 fC"></td>
												<td class="fC"></td>	
											</tr>
											<tr>
												
												<td class="fC">24 Leaves</td>
												<td class="BC fC">Nil</td>
												<td class="BC fC"></td>
												<td class="BC2 fC"></td>
												<td class="BC2 fC"></td>
												<td class="fC"></td>	
											</tr>
											<tr>
												
												<td class="fC">Bonus(If Applicable)</td>
												<td class="BC fC">Nil</td>
												<td class="BC fC"></td>
												<td class="BC2 fC"></td>
												<td class="BC2 fC"></td>
												<td class="fC"></td>	
											</tr>
											<tr>
												
												<td class="fC">Other Costs</td>
												<td class="BC fC"></td>
												<td class="BC fC"></td>
												<td class="BC2 fC"></td>
												<td class="BC2 fC"></td>
												<td class="fC"></td>	
											</tr>
											<tr>
												
												<td class="fC"></td>
												<td class="BC fC">CTC</td>
												${data.GrossMonthly.map(function(GrossMonthlyData){
												return`<td class="BC fC">${GrossMonthlyData}</td></td>`
												}).join('')}
												<td class="BC2 fC">Gross PM</td>
												${data.GrossYearly.map(function(GrossYearlyData){
												return`<td class="BC2 fC">${GrossYearlyData}</td></td>`
												}).join('')}
												<td class="fC"></td>	
											</tr>
											<tr>
												
												<td class="fC"></td>
												<td class="BC fC">CTC(PM)</td>
												${data.GrossYearly.map(function(GrossYearlyData){
												return`<td class="BC fC">${GrossYearlyData}</td></td>`
												}).join('')}
												<td class="BC2 fC"></td>
												<td class="BC2 fC"></td>
												<td class="fC"></td>	
											</tr>
											
											<tr>
												
												<td class="fC">Less: Deduction</td>
												<td class="BC fC"></td>
												<td class="BC fC"></td>
												<td class="BC2 fC"></td>
												<td class="BC2 fC"></td>
												<td class="fC"></td>	
											</tr>
											<tr>
												
												<td class="fC">P.F. <span class="noteSalary">(Employers Contribution 12% of Basic of Rs 780/-whichever is less.)</span></td>
												<td class="BC fC"></td>
												<td class="BC fC"></td>
												<td class="BC2 fC"></td>
												<td class="BC2 fC"></td>
												<td class="fC"></td>	
											</tr>
											<tr>
												
												<td class="fC">P.F. <span class="noteSalary">(Employers Contribution 12% of Basic of Rs 780/-whichever is less.)</span></td>
												<td class="BC fC">-</td>
												<td class="BC fC"></td>
												<td class="BC2 fC">-</td>
												<td class="BC2 fC"></td>
												<td class="fC"></td>	
											</tr>
											<tr>
												
												<td class="fC">Professional Tax-Standard</td>
												<td class="BC fC"></td>
												<td class="BC fC"></td>
												<td class="BC2 fC"></td>
												<td class="BC2 fC"></td>
												<td class="fC"></td>	
											</tr>
											<tr>
												
												<td class="fC">Net Salary Payable</td>
												<td class="BC fC"></td>
												<td class="BC fC"></td>
												<td class="BC2 fC"></td>
												<td class="BC2 fC"></td>
												<td class="fC">Net PM</td>	
											</tr>
											<tr>
												
												<td class="fC">Add Performance Bonus</td>
												<td class="BC fC"></td>
												<td class="BC fC"></td>
												<td class="BC2 fC"></td>
												<td class="BC2 fC"></td>
												<td class="fC"></td>	
											</tr>
											<tr>
												
												<td class="fC"></td>
												<td class="BC fC">Net PA</td>
												${data.GrossMonthly.map(function(GrossMonthlyData){
												return`<td class="BC fC">${GrossMonthlyData}</td></td>`
												}).join('')}
												<td class="BC2 fC"></td>
												<td class="BC2 fC"></td>
												<td class="fC"></td>	
											</tr>
											`}).join('')}
										</tbody>
									</table>
										`);

										
				
				
				
				
				
			} else {
				$("#AttendencedataTable tbody").html("<div>No data Found.....</div>");
			}
				
        });
}


							
</script>





	

<?php include('footer.php'); ?>