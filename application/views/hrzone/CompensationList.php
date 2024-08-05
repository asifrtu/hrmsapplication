<?php include('header.php'); ?>
<?php include('payAndTimeSidebar.php'); ?>
<style>


.ColorSecondary{
	background-color:#6f42c1;
	padding: .35rem 1.25rem!important;
	
}

input.bPayroll{
 color:#6f42c1;
}
.cmPayroll{
    background: #00d3c3!important;
	color: #fff!important;
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

.fa-download{
	color:black;

}
.fa-eye{
	color:blue;
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
 text-align:center;
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

.fC{
    font-size: 12px;
    color: #575757;
    text-align: center;
	vertical-align: middle!important;
}
.fC a {
  text-decoration: none;
  
}
.actionFontSize{
	font-size:15px!important;
	color: #1C304C!important;
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
	color:#fff;
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

th {
    background: #00d3c3;
    position: sticky;
    top: 0;
    color: #4c3f5e;
    font-size: 14px;
    font-weight: 500;
    text-align: center;
}


.bg-info {
    background-color: #ececec!important;
}
.p-2 {
    padding: .1rem!important;
}
.sasifb{
	margin-bottom: 3px;
    margin-top: 7px;
}
.qdxUpper{
    font-size: 16px;
    font-weight: 600;
    color: black;
    font-family: -webkit-pictograph;

    display: flex;
    justify-content: center;
    margin-bottom: 6px;
}
.qdxpLower{
	font-size: 14px;
    color: #000000;
    font-family: revert;
    font-weight: 500;
  
}
.qdxName{
	font-size: 13px;
    font-weight: 600;
    color: black;
    font-family: revert;
}
.nameQ{
	
	font-size: 13px;
    font-weight: 600;
    color: black;
    font-family: revert;
}

.modal-header {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    padding: 0px;
	color: white;
    background: #28254a;
    border-bottom: 1px solid #e3e6f0;
    border-top-left-radius: calc(.3rem - 1px);
    border-top-right-radius: calc(.3rem - 1px);
}
.modal-title{
	padding-left: 350px;
}
.qdxSlip {
    font-size: 12px;
    font-weight: 400;
    font-family: revert;
	color: #4c3f5e;
}

.TotalErn{
	font-size: 13px;
    font-weight: 600;
    color: black;
    font-family: revert;
    text-align: center;
}

.TotalDeduc{
	font-size: 14px;
}

.col-lg-1{
    max-width: 5.33333%;
	padding-right:0px!important;
}

.table thead th{
	font-weight:bold;
	padding: 0.75rem!important;
}

.form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + 0.5rem + 1px);
    padding: 0.2em 0.2em;
    font-size: 9px;
    font-weight: 400;
    line-height: 1.5;
    color: #6e707e;
    background-color: #fff;
    background-clip: padding-box;
}
.form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + 0.75rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #6e707e;
    background-color: #fff;
    background-clip: padding-box;
    border: none;
}


.card-body{
    padding-top: 15px!important;
}
.table-bordered tbody tr:nth-of-type(odd){
  background-color:white;
 
}
.table-bordered tbody tr:nth-of-type(even){
 
  background-color: rgb(239 239 239);
}
.AttSort {
    height: calc(1em + 0.7rem + 2px);
    padding: 0.2rem 0.5rem;
    font-size: 12px;
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
.modal-content{
	background-color:transparent!important;
	border:none!important;
}
.modal-body {
    background: white;
    padding-top: 0.3rem;
}
@media (min-width: 992px){
.modal-lg, .modal-xl {
    max-width: 632px;
}
}


.card-header {
    padding: 0.3rem 1.25rem!important ;}


	.empInput {
    overflow: hidden!important;
    font-size: 10px!important;
    color: #000!important;
}
.AttSortMonth {
    height: calc(1em + 0.75rem + 2px);
    padding: 0.2rem 0.2rem;
    font-size: 14px;
}
.qdxPrintCF{
	background:white!important;
}
@media (min-width: 992px){
.col-lg-4 {
    flex: 2 0 33.33333%!important;
	max-width: 36.33333%!important;
}
}
 </style>
        <?php if(!empty($this->session->flashdata('message'))) { ?>
			
			
			<?=$this->session->flashdata('message');?>
			
		<?php } ?>
	
        <!-- Content Wrapper -->
        <div id="content-wrapper bg-gradient-primary" class="container-fluid col-lg-10" style="padding-left:10px; ">
    
            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="">

                    <!-- Page Heading -->
                    
					<div class="card shadow mb-4">
                       
                        
					<div class="card-header ColorSecondaryPre">
                        <div class="d-flex">
                        <div><a href="<?=site_url('hrzone/dashboard/wall');?>" style="color: #fff;font-size: 15px;"><i class="fa fa-home" aria-hidden="true"></i></a></div>
                        <div class="mr-auto"> &nbsp;&nbsp;<i style="font-size: 10px;color: white;" class="fas fa-chevron-right"></i><span class="breadcrumb_text " style="font-size: 15px;color: #00d3c3;font-weight: 600;">&nbsp; Compensation</span></div>
			

	<div class="p-2 select-info" style="margin-left:5px;">

  
		<select class="empInput AttSort breadcrumbMobile form-control" name="month_Id" id="month_Id" >
			<option value="">Select Month</option>

				<?php 
				
				
				$curMonth = date("n");
				 // echo $curMonth = date("m", strtotime($cur));
				// echo "<pre>";
				// print_r($teamDesignation);die;


				  foreach ( $GoalMonth as $Month )
			{
			$selected_text='';
			if($Month->month_Id == $curMonth)
			$selected_text='selected';
			echo "<option month='".$Month->month."' value='".$Month->month_Id."'  $selected_text > ".$Month->month."</option>";

			}
			 
				 
				 
				 ?>

			</select>
</div>

<div class="p-2 select-info">

<select class="empInput AttSort breadcrumbMobile form-control" name="Year_Id" id="Year_Id"  id="sel1">
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

</div>
                        </div>
					
						
                    <!-- Content Row -->
					  <!-- Area Chart -->
						<div class="shadow ">
							
							<div class="">
							
							
							
									
								<div class="table-responsive scrollbarIMBD scrollbarIMBDWebkit" id="renderHtmlPay">
									
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
   
<div class="modal " id="updateModal" role="dialog">
<div class="modal-dialog modal-dialog-centered  modal-lg">
<!-- Modal content-->
	

	<div class="modal-content">
	<div class="card-header" style="padding:7px!important; background-color: #1C304C;">
			<div class="">
			<h6 class="ColorPrimary" style="text-align: center;margin-bottom: 0px;">Salary Slip</h6>
			<button style="/* margin-left:197px; */" type="button" class="close" data-bs-dismiss="modal">×</button>
			</div>
			</div>	
	
		
		<div class="modal-body">
		
		<div class="table-responsive " id="renderHtmlLeave">

		</div>
		
		
		<div id="elementH">

		</div>
		
		
		
		
		</div>
		
	</div>
<!-- Content Row -->

</div>

</div>


   	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

	$(document).ready(function(){
	

		var d = new Date();
		var curYear =  d.getFullYear();
		var currMonth = d.getMonth() + 1;
		MonthlyUserAttendance(curYear, currMonth);
		
	$("#month_Id, #Year_Id").change(function(){
		
        var MonthID = $("#month_Id option:selected").val();
		var YearID  = $("#Year_Id").val();
		MonthlyUserAttendance(YearID, MonthID);
    });
	
	
	$("body").on('click', '.slipPrint', function(){
 
		var id = $(this).attr('data-UserId');
		var MonthID = $("#month_Id option:selected").val();
		var YearID = $("#Year_Id option:selected").val();
		var ajaxurl = "<?=site_url('hrzone/Pay/GeneratePDF');?>";
        $.ajax({
            type: "get",
            url: ajaxurl,
            data: {id:id, YearID:YearID, MonthID : MonthID},
			dataType: "JSON",
			success:function(data){
			alert("Data updated Successfully");
			}
			
		});

  
}); 
	
	
$("body").on('click', '.slipDownLoad', function(){
 
		var id = $(this).attr('data-UserId');
		
		var ajaxurl = "<?=site_url('hrzone/Pay/DownloadPDF');?>";
        $.ajax({
            type: "get",
            url: ajaxurl,
            data: {id:id},
			dataType: "JSON",
			success:function(data){
			alert("Data updated Successfully");
			}
			
		});

  
}); 
	
	 
	
	
	 $("body").on('click', '.SalaryView', function(){
		var id = $(this).attr('data-UserId');
		var MonthID = $("#month_Id option:selected").val();
		var YearID  = $("#Year_Id").val();
		var ajaxurl = "<?=site_url('hrzone/Pay/EmployeeSalarySlip');?>";
        $.ajax({
            type: "get",
            url: ajaxurl,
            data: {id:id, YearID:YearID, MonthID : MonthID},
			dataType: "JSON",
			}).done(function(response){
			$("#updateModal").modal('show');
			if(response){
				
				
				console.log(response.data);
				$("#renderHtmlLeave").html(`
					<table class="table table-bordered table-sm" id="dataTable" width="100%">
						<span class="qdxUpper"><?php echo COMPANY_NAME; ?></span>
										<thead style="background-color:transparent;">
										${response.calenderDay.map(function(calenderDaydata){
										return(`
												
												
											<tr>
												<th colspan="5" class="fc qdxPrintCF" style="padding:0px!important;">
												
												
												<span class="qdxpLower">Salary Statement for the Month of ${calenderDaydata.UsercalenderDay}</span>
												
												`)
										}).join('')}
												
												<hr style="border-bottom: 1px solid #e3e6f0;margin-top: 5px;">
												
												${response.data.map(function(data, index){
										return(`
												<div class="row ">
												<div class="col-lg-6 col-md-6 col-sm-6 namepb qdxCenter" style="max-width: 42.76667%; padding: 5px; border-right: 1px solid #e3e6f0;">
													<span class="qdxName">Employee Name</span>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-6 qdxCenter" style="padding: 5px 0px 2px 0px;">
													<span class="nameQ">${data.userName}</span>
												</div>
												</div>
												
												</th>
												<th class="fc qdxPrintCF" style="padding: 0.2rem!important;width: 20px;">
												<img class="logoPrint" style="height: 75px;width: 83px;" src="<?= base_url("Assets/img/HRPrintLogo.png") ?>"  alt="Cinque Terre"></th>
													
											</tr>
										</thead>
										
										<tbody>
											<tr>
												
												<td colspan="2" class="qdxSlip">Employee Id</td>
												<td class="qdxSlip">${data.employee_id}</td>
												<td colspan="2" class="qdxSlip">Designation</td>
												${data.UserDetails.map(function(UserDetailsData){
												return`<td class="qdxSlip">${UserDetailsData.position}</td>`
												}).join('')}
												
													
											</tr>
											
											
											<tr>
												
												<td colspan="2" class="qdxSlip">Days Presents</td>
												${data.PayRoll.map(function(PayRollData){
												return`<td class="qdxSlip">${PayRollData}</td>`
												}).join('')}
												
												<td colspan="2" class="qdxSlip">Paid Leaves</td>
												${data.UserCL.map(function(UserCLData){
												return`<td class="qdxSlip">CL(${(UserCLData.wcount != "")?(UserCLData.wcount): "Nil"})
												`
												}).join('')}
												${data.UserEL.map(function(UserELData){
												return`
												
												&nbsp;&amp;&nbsp;EL(${(UserELData.wcount != "")?(UserELData.wcount): "Nil"})
												
												
												
												
												</td>`
												}).join('')}
												
												
											</tr>
											<tr>
												
												<td colspan="2" class="qdxSlip">Accounts Details</td>
												${data.UserBankDetails.map(function(UserBankDetailsData){
												return`<td class="qdxSlip">${(UserBankDetailsData.bankAccount != "")?UserBankDetailsData.bankAccount: "Nil"}</td>`
												}).join('')}
												
												<td colspan="2" class="qdxSlip">Account Bank</td>
												${data.UserBankDetails.map(function(UserBankDetailsData){
												return`<td class="qdxSlip">${(UserBankDetailsData.bankName != "")?UserBankDetailsData.bankName: "Nil"}</td>`
												}).join('')}
												
												
											</tr>
											`)
										}).join('')}
											<tr>
												${response.calenderDay.map(function(calenderDaydata){
										return(`
												<td colspan="2" class="qdxSlip">Salary for the Month</td>
												
												<td class="qdxSlip">${calenderDaydata.UsercalenderDay}</td>
												
												`)
										}).join('')}
												${response.data.map(function(data, index){
										return(`
												<td colspan="2" class="qdxSlip">Leave Without Pay</td>
												${data.UserLWP.map(function(UserLWPData){
												return`<td class="qdxSlip">LWP(${(UserLWPData.wcount != "")?(UserLWPData.wcount): "Nil"})</td>`
												}).join('')}
												
												
											</tr>
											<tr>
												
												<td colspan="3" class="qdxSlip"><div class="qdxCenter  TotalErn">Earnings</div></td>
												<td colspan="3" class="qdxSlip"><div class="qdxCenter  TotalErn">Deductions</div></td>
												
												
											</tr>
											${data.UserSalary.map(function(UserSalaryData){
												return`
											<tr>
												
												<td colspan="2" class="qdxSlip"></td>
												<td class="qdxSlip"><b>Amount</b></td>
												<td colspan="2" class="fc qdxPrintCF"></td>
												<td class="qdxSlip"><b>Amount</b></td>
												
											</tr>
											
											<tr>
												
												<td colspan="2" class="qdxSlip">Basic Salaryyy</td>
												<td class="qdxSlip">${(UserSalaryData.basicSalary != "")?UserSalaryData.basicSalary: "Nil"}</td>
												<td colspan="2" class="qdxSlip">E. Provident Fund</td>
												<td class="qdxSlip">${(UserSalaryData.eProvidentFund != "")?UserSalaryData.eProvidentFund: "Nil"}</td>
												
											</tr>
											<tr>
												
												<td colspan="2" class="qdxSlip">Dearness Allowance</td>
												<td class="qdxSlip">${(UserSalaryData.dearnessAllowance != "")?UserSalaryData.dearnessAllowance: "Nil"}</td>
												<td colspan="2" class="qdxSlip">ESI</td>
												<td class="qdxSlip">${(UserSalaryData.ESI != "")?UserSalaryData.ESI: "Nil"}</td>
												
											</tr>
											<tr>
												
												<td colspan="2" class="qdxSlip">HRA</td>
												<td class="qdxSlip">${(UserSalaryData.HRA != "")?UserSalaryData.HRA: "Nil"}</td>
												<td colspan="2" class="qdxSlip">Professional Tax</td>
												<td class="qdxSlip">${(UserSalaryData.professionalTax != "")?UserSalaryData.professionalTax: "Nil"}</td>
												
											</tr>
											
											<tr>
												
												<td colspan="2" class="qdxSlip">Conveyance</td>
												<td class="qdxSlip">${(UserSalaryData.Conveyance != "")?UserSalaryData.Conveyance: "Nil"}</td>
												<td colspan="2" class="qdxSlip">I. Tax</td>
												<td class="qdxSlip">${(UserSalaryData.ITax != "")?UserSalaryData.ITax: "Nil"}</td>
												
											</tr>
											
											<tr>
												
												<td colspan="2" class="qdxSlip">Medical Allowance</td>
												<td class="qdxSlip">${(UserSalaryData.Medical != "")?UserSalaryData.Medical: "Nil"}</td>
												<td colspan="2" class="qdxSlip">Loan</td>
												<td class="qdxSlip">${(UserSalaryData.Loan != "")?UserSalaryData.Loan: "Nil"}</td>
												
											</tr>
											
											<tr>
												
												<td colspan="2" class="qdxSlip">Mobile Expenses</td>
												<td class="qdxSlip">${(UserSalaryData.mobileExpenses != "")?UserSalaryData.mobileExpenses: "Nil"}</td>
												<td colspan="2" class="qdxSlip">Advance</td>
												<td class="qdxSlip">${(UserSalaryData.Advance != "")?UserSalaryData.Advance: "Nil"}</td>
												
											</tr>
											
											<tr>
												
												<td colspan="2" class="qdxSlip">Special Allowance</td>
												<td class="qdxSlip">${(UserSalaryData.specialAllowance != "")?UserSalaryData.specialAllowance: "Nil"}</td>
												
												`
												}).join('')}
												
												${data.MonthlyDeduction.map(function(MonthlyDeductionData){
												return`
												<td colspan="2" class="qdxSlip">Misc.Deduction</td>
												<td class="qdxSlip">${(MonthlyDeductionData != "")?MonthlyDeductionData: "Nil"}</td>
												`
												}).join('')}
											</tr>
											${data.UserSalary.map(function(UserSalaryData){
												return`
											<tr>
												
												<td colspan="2" class="qdxSlip">Performance Incentives</td>
												<td class="qdxSlip">${(UserSalaryData.performanceIncentives != "")?UserSalaryData.performanceIncentives: "Nil"}</td>
												<td colspan="2" class="qdxSlip"></td>
												<td class="qdxSlip"></td>
												
											</tr>
											
											<tr>
												
												<td colspan="2" class="qdxSlip">Arrears/Other Ern.</td>
												<td class="qdxSlip">${(UserSalaryData.otherOrArrears != "")?UserSalaryData.otherOrArrears: "Nil"}</td>
												<td colspan="2" class="qdxSlip"></td>
												<td class="qdxSlip"></td>
												
											</tr>
											`
												}).join('')}
											
											
											${data.MonthlySalary.map(function(MonthlySalaryData){
												return`
											
											<tr>
												
												<td colspan="2" class="qdxSlip"><div class="qdxCenter">Total Earnings</div></td>
												<td class="qdxSlip">${(MonthlySalaryData != "")?MonthlySalaryData: "Nil"}</td>
												`
												}).join('')}
												
												${data.MonthlyDeduction.map(function(MonthlyDeductionData){
												return`
												
												<td colspan="2" class="qdxSlip">Total Deduction</td>
												<td class="qdxSlip">${(MonthlyDeductionData != "")?MonthlyDeductionData: "Nil"}</td>
												
											</tr>
											`
												}).join('')}
												
												${data.SalaryInWord.map(function(SalaryInWordData){
												return`
											<tr>
												
												<td colspan="2" class="qdxSlip"><div class="qdxCenter  TotalErn">Net Salary Rs.</div></td>
												<td colspan="4" class="qdxSlip"><div class="qdxCenter  TotalErn text-left">${price_in_words(SalaryInWordData)}&nbsp;Only</div></td>
												
											</tr>
											`
												}).join('')}
											`)
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



function MonthlyUserAttendance(YearID, MonthID){
	var ajaxurl = "<?=site_url('hrzone/Pay/EmployeePay');?>";
        $.ajax({
            type: "get",
            url: ajaxurl,
            data: {YearID:YearID, MonthID : MonthID},
			dataType: "JSON"
        }).done(function(response){
			if(response){
				
				$("#renderHtmlPay").html(`
				
					<table class="table table-bordered table-sm" id="dataTable" width="100%">
										<thead>
											<tr>
												<th class="cmPayroll text-left" style="padding-left:20px!important;">Employee Nameee</th>
												<th class="cmPayroll">Employee Id</th>
												<th class="cmPayroll">CL</th>
												<th class="cmPayroll">EL</th>
												<th class="cmPayroll">MD</th>
												<th class="cmPayroll">LWP</th>
												<th class="cmPayroll">Working Daysddd</th>
												<th class="cmPayroll">Pay Roll</th>
												<th class="cmPayroll">Gross Salary</th>
												
												<th colspan="1" class="cmPayroll">
													<span class="actionFile"><a href="#">Salary Slip</a></span>
												
												</th>
												
												
												
												
											</tr>
										</thead>
										
										<tbody>
										
											${response.data.map(function(data, index){
										return(`
											<tr>
												
												<td class="fC text-left" style="padding-left:20px;">${data.userName}</a></td>
												<td class="fC">${data.employee_id}</a></td>
												${data.UserCL.map(function(UserCLData){
												return`<td class="fC">${UserCLData.wcount}</td>`
												}).join('')}
												${data.UserEL.map(function(UserELData){
												return`<td class="fC">${UserELData.wcount}</td>`
												}).join('')}
												${data.UserMD.map(function(UserMDData){
												return`<td class="fC">${UserMDData.wcount}</td>`
												}).join('')}
												
												${data.UserLWP.map(function(UserLWPData){
												return`<td class="fC">${UserLWPData.wcount}</td>`
												}).join('')}
												
												${data.WorkingDays.map(function(WorkingDaysData){
												return`<td class="fC">${WorkingDaysData}</td>`
												}).join('')}
												
												
												
												${data.PayRoll.map(function(PayRollData){
												return`<td class="fC">${PayRollData}</td>`
												}).join('')}
												
												${data.MonthlySalary.map(function(MonthlySalaryData){
												return`<td class="fC">${MonthlySalaryData}</td>`
												}).join('')}
												
												
												
												
												
												
												
												<td >
													<div class=" " style="display: flex;justify-content: center;">
													<ul class="tnUemp">
													<li class="tnemp"><a href="<?=site_url('hrzone/Pay/GeneratePDF/');?>${data.userId}/
													${data.YID.map(function(YIDData){
												return`${YIDData}`
												}).join('')}
													/${data.MID.map(function(MIDData){
												return`${MIDData}`
												}).join('')}" target="_blank" data-UserId="${data.userId}" class="slipDownLoad" ><i  class="actionFontSize fa fa-download" aria-hidden="true"></i></a></li>
													
													<li class="tnemp"><a href="javascript:void(0)" data-UserId="${data.userId}" class="SalaryView"><i  class="actionFontSize fa fa-eye" aria-hidden="true"></i></a></li>
													</ul>

													</div>
												
												</td>
												
												
											</tr>
											
											`)
										}).join('')}
											
										</tbody>
									</table>
				
				`);

			} else {
				$("#AttendencedataTable tbody").html("<div>No data Found.....</div>");
			}
				
        });
}

						
</script>
<script>


function price_in_words(price) {
  var sglDigit = ["Zero", "One", "Two", "Three", "Four", "Five", "Six", "Seven", "Eight", "Nine"],
    dblDigit = ["Ten", "Eleven", "Twelve", "Thirteen", "Fourteen", "Fifteen", "Sixteen", "Seventeen", "Eighteen", "Nineteen"],
    tensPlace = ["", "Ten", "Twenty", "Thirty", "Forty", "Fifty", "Sixty", "Seventy", "Eighty", "Ninety"],
    handle_tens = function(dgt, prevDgt) {
      return 0 == dgt ? "" : " " + (1 == dgt ? dblDigit[prevDgt] : tensPlace[dgt])
    },
    handle_utlc = function(dgt, nxtDgt, denom) {
      return (0 != dgt && 1 != nxtDgt ? " " + sglDigit[dgt] : "") + (0 != nxtDgt || dgt > 0 ? " " + denom : "")
    };

  var str = "",
    digitIdx = 0,
    digit = 0,
    nxtDigit = 0,
    words = [];
  if (price += "", isNaN(parseInt(price))) str = "";
  else if (parseInt(price) > 0 && price.length <= 10) {
    for (digitIdx = price.length - 1; digitIdx >= 0; digitIdx--) switch (digit = price[digitIdx] - 0, nxtDigit = digitIdx > 0 ? price[digitIdx - 1] - 0 : 0, price.length - digitIdx - 1) {
      case 0:
        words.push(handle_utlc(digit, nxtDigit, ""));
        break;
      case 1:
        words.push(handle_tens(digit, price[digitIdx + 1]));
        break;
      case 2:
        words.push(0 != digit ? " " + sglDigit[digit] + " Hundred" + (0 != price[digitIdx + 1] && 0 != price[digitIdx + 2] ? " and" : "") : "");
        break;
      case 3:
        words.push(handle_utlc(digit, nxtDigit, "Thousand"));
        break;
      case 4:
        words.push(handle_tens(digit, price[digitIdx + 1]));
        break;
      case 5:
        words.push(handle_utlc(digit, nxtDigit, "Lakh"));
        break;
      case 6:
        words.push(handle_tens(digit, price[digitIdx + 1]));
        break;
      case 7:
        words.push(handle_utlc(digit, nxtDigit, "Crore"));
        break;
      case 8:
        words.push(handle_tens(digit, price[digitIdx + 1]));
        break;
      case 9:
        words.push(0 != digit ? " " + sglDigit[digit] + " Hundred" + (0 != price[digitIdx + 1] || 0 != price[digitIdx + 2] ? " and" : " Crore") : "")
    }
    str = words.reverse().join("")
  } else str = "";
  return str

}
</script>
 
	
<?php include('footer.php'); ?>