<?php include('header.php'); ?>





<?php include('KpiTeamSidebar.php'); ?>
<style>

.table {
    width: 100%;
    margin-bottom: 0rem;
    color: #858796;
}
.table-bordered td, .table-bordered th {
    border: 1px ridge #6a6594;
}
.ColorSecondary{
	background-color:#6f42c1;
	padding: .35rem 1.25rem!important;
	
}

input.bPayroll{
 color:#6f42c1;
}
.cmPayroll{
 color:white;
 font-size:14px;
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
.actionFontSize .cmPayroll{
	background: #00d3c3!important; color: #fff!important;
};
.fC a {
  text-decoration: none;
  color: #706e80;
  font-size:14px!important;
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



.bg-info {
    background-color: #ececec!important;
}
.p-2 {
    padding: .1rem!important;
}
.sasifb{
	margin-right: -30px;
	padding-top:1px;
}
.qdxUpper{
	padding: 0px 37px 0px 182px;
    font-size: 20px;
    color: black;
    font-family: Times New Roman;
}
.qdxpLower{
	font-size: 15px;
    font-weight: 500;
    color: black;
    padding: 2px 0px 5px 130px;
    font-family: Courier New;
}
.qdxName{
    padding: 0px 40px 0px 84px;
    font-size: 14px;
    font-weight: 400;
    color: black;
    font-family: Courier New;
}
.nameQ{
	
    padding: 0px 0px 0px 63px;
    font-size: 14px;
    font-weight: 400;
    color: black;
    font-family: Courier New;
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
.qdxSlip{
	font-size: 14px;
    font-weight: 400;
    color: black;
    font-family: Courier New;
}

.TotalErn{
	font-size: 14px;
    font-weight: 400;
    color: black;
	padding: 5px;
    font-family: Courier New;	
}

.TotalDeduc{
	font-size: 14px;
}

.AttSort{
	height: calc(1em + .4rem + 2px);
   
    padding: .200rem .5rem;
    font-size: 12px;
}
.AttSortMonth{
	height: calc(1em + .4rem + 2px);
   
    padding: .200rem .2rem;
    font-size: 12px;
}


.style-7::-webkit-scrollbar-thumb
{
	border-radius: 10px;
	background-image: -webkit-gradient(linear,
									   left bottom,
									   left top,
									   color-stop(0.44, #504a94),
									   color-stop(0.72, #504a94),
									   color-stop(0.86, #504a94));
}
.scrollbar
{
	
	height: 467px;
	width: auto;
	
	overflow-y: scroll;
	overflow-x: scroll;
	
}


.AppraisalBtn{
	float:right;
	margin-bottom:5px;
	color:white!important;
    margin-right: 176px;
	float:center;
    background: #1C304C;
    
    font-weight: 400;
    border-radius: 2px;
    padding: .2em 2em 0.2em 2em;
    border: none !important;
}




.fa, .fas {
    font-weight: 400!important;
}

.Masif {
    font-weight: 600!important;
}
.card{
	
	border-radius:0rem;
}

.cmPayroll{
	font-size: 13px;
    font-weight: 600;
    color: #4c3f5e!important;
    padding: 10px 11px!important;
}
.ColorSecondaryPre{
	padding:5px 15px;
}
.table-bordered td, .table-bordered th {
    border: 1px solid #e3e6f0!important;
}
tbody tr .fC{
	text-align: center;
    font-size: 13px;
    color: #343434;
    vertical-align: middle;
}
 </style>
        <?php if(!empty($this->session->flashdata('message'))) { ?>
			
			
			<?=$this->session->flashdata('message');?>
			
		<?php } ?>
	
        <!-- Content Wrapper -->
        <div id="content-wrapper bg-gradient-primary" class="col-lg-10" style="margin-top:30px; margin-bottom:50px;">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="">

				<div class="card-header ColorSecondaryPre">
						<div class="row d-flex pl-1 ">

<div class="col-lg-1"><a href="<?php echo base_url() ?>index.php/hrzone/dashboard/wall" style=" vertical-align:middle; color: white;font-size: 15px;"><i class="fa fa-home" aria-hidden="true"></i></a></div>
<div class="col-lg-6"> <i style="font-size: 10px;color: white;" class="fas fa-chevron-right"></i><span class="breadcrumb_text" style=" vertical-align:middle; font-weight:bold; font-size: 15px;color: #fff;"> &nbsp;Yearly KPI LIst</span></div>

<div class="col-lg-5">


<div class="d-flex sasifb flex-row-reverse ">
									<div class="" style="margin-left:5px;">

									<select class="AttSortMonth empInput form-control" name="month_Id" id="month_Id" >
									<option value="">Select Month</option>

										<?php
										$curMonth = date("m");
										// echo "<pre>";
										// print_r($teamDesignation);die;


									foreach ($GoalMonth as $Month)
									{
									$selected_text='';
									if($Month->month_Id == $curMonth)
									$selected_text='selected';
									echo "<option month='".$Month->month."' value='".$Month->month_Id."'  $selected_text > ".$Month->month."</option>";

									}
									  
										 ?>

									</select>
									</div>
									
									<div class="" >
									
									<select class="AttSort empInput form-control" name="Year_Id" id="Year_Id"  id="sel1">
											<option value="">Select Year</option>
											
											<?php 
											$curnYear = date("Y");
											// echo "<pre>";
											// print_r($teamDesignation);die;
											
											// $year =1;
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
									
									<h5 style="text-align:center; margin:auto; color:#6f42c1; font-weight:500; font-size: 16px;"></h5>
									
									</div>

</div>
		</div>
		</div>



                    <!-- Page Heading -->
                    
					<div class="card mb-4" style="margin-bottom:100px;padding:20px; ">
                       
                        
						
						
						
                    <!-- Content Row -->
					  <!-- Area Chart -->
							
							
									
								<div class="table-responsive " id="renderHtmlPay" >
									
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
	
	
	
	
	<div class="modal fade" id="AppraisalViewModel" role="dialog">
			<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">

			
			<div class="card-header ColorSecondaryPre" style="padding: .5rem 1.25rem .25rem 1.25rem; border-radius: calc(.1rem - 1px) calc(.1rem - 1px) 0 0;">
			<div class="row">
			<h6 class="m-0 font-weight-bold ColorPrimary" style="padding-left: 200px;">Appraisal</h6>
			<button style="margin-left: 170px;" type="button" class="close" data-bs-dismiss="modal">&times;</button>
			</div>
			</div>

			<div class="modal-body" style="border: 1px solid #ffffff;">
				<form id="Image-form" >
			
			
			<div class="row">
			
			
			<div class="col-lg-6">
			<div class="form-group">
			<label for="email">Appraisal Rate</label>
			<input type="text" name="Appraisal_Rate" id="input_Appraisal_Rate" class="empInput form-control" style="border: 1px solid #858796;">
			</div>
			</div>
			
			<div class="col-lg-6">
			<div class="form-group">
			<label for="email">Appraisal Date</label>
			<input type="date" name="Appraisal_date" id="input_Appraisal_date" class="empInput form-control" style="border: 1px solid #858796;">
			</div>
			</div>
			
			
			
			
			
			</div>
			
			<div class="row">
			<div class="col-lg-6">
			<div class="form-group">
			<label for="email">Total Incriment</label>
			<input type="text" name="Total_Inc" id="input_Total_Inc" class="empInput form-control" style="border: 1px solid #858796;">
			</div>
			</div>
			
			
			
			<div class="col-lg-6">
			<div class="form-group">
			<label for="email">Updated Salary</label>
			<input type="text" name="UpdatedSalary" id="input_UpdatedSalary" class="empInput form-control" style="border: 1px solid #858796;">
			</div>
			</div>
			
			
			
			
			</div>
			
			
			<div class="row">
			<div class="col-lg-6">
			<div class="form-group">
			<label for="email">Dates Of Meeting</label>
			<input type="date" name="DatesOfMeeting" id="input_DatesOfMeeting" class="empInput form-control" style="border: 1px solid #858796;">
			</div>
			</div>
			
			
			<div class="col-lg-6">
			<div class="form-group">
			<label for="email">Management Decision</label>
			<input type="text" name="Management_Decision" id="input_Management_Decision" class="empInput form-control" style="border: 1px solid #858796;">
			</div>
			</div>
			
			
			</div>
			
			
			
			





			</div>

			
			

			<div class="card-body">
			

			<button type="button" class="btn btn-default AppraisalBtn">Submit</button>
			<input type="hidden" name="" id="emp_App" >
			
			</div>
			
			</form>





			<!-- Content Row -->
			



			</div>

			</div>
			</div>
	
	
	
	
	
	
	
	
	
	
	
	
   
<div class="modal " id="updateModal" role="dialog">
<div class="modal-dialog modal-dialog-centered  modal-lg">
<!-- Modal content-->
	
	<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title">Salary Slip</h4>
			<button type="button" class="close" data-bs-dismiss="modal">&times;</button>
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
		
		
	$("body").on('click', '.AppraisalView', function(){
		
		var id = $(this).attr('data-UserIdApp');
		$("#AppraisalViewModel").modal('show');
		$('#emp_App').val(id);
		
		

  
}); 



	
$("body").on('click', '.AppraisalBtn', function(){
 
		var Appraisal_Rate = $('#input_Appraisal_Rate').val();
		var Total_Inc = $('#input_Total_Inc').val();
		var Appraisal_date = $('#input_Appraisal_date').val();
		var Management_Decision = $('#input_Management_Decision').val();
		var UpdatedSalary = $('#input_UpdatedSalary').val();
		var DatesOfMeeting = $('#input_DatesOfMeeting').val();
		
		var id = $('#emp_App').val();
		var ajaxurl = "<?=site_url('hrzone/Appraisal/UserAppraisal');?>";
        $.ajax({
            type: "post",
            url: ajaxurl,
            data: {id:id, Appraisal_date:Appraisal_date, Appraisal_Rate:Appraisal_Rate, Total_Inc : Total_Inc, Management_Decision:Management_Decision, UpdatedSalary:UpdatedSalary, DatesOfMeeting:DatesOfMeeting},
			dataType: "JSON",
			success:function(data){
			alert("Data updated Successfully");
			$("#AppraisalViewModel").modal('hide');
			}
			
		});

  
}); 
	

		var d = new Date();
		var curYear =  d.getFullYear();
		var currMonth = d.getMonth() + 1;
		MonthlyUserAttendance(curYear, currMonth);
		
	$("#month_Id, #Year_Id").change(function(){
		
        var MonthID = $("#month_Id option:selected").val();
		var YearID  = $("#Year_Id").val();
		MonthlyUserAttendance(YearID, MonthID);
    });
	
	
	
	
	
	
	 
	
	
  
  
  
  
  
  
  
	
  
  
	
});



function MonthlyUserAttendance(YearID, MonthID){
	var ajaxurl = "<?=site_url('hrzone/Kpi/YearlyKpiList');?>";
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
											<tr style="background-color:#dec9f7!important;">
												<td class="cmPayroll monthlyListHead" style="padding-top: 18px; text-align:center; min-width: 105px!important; text-align: center;">Employee ID</td>
												<td class="cmPayroll monthlyListHead text-center" style="padding-left: 10px!important; padding-top: 18px; min-width: 175px!important;">Employee Name</td>
												<td class="cmPayroll monthlyListHead" style="padding-top: 18px; text-align:center; min-width: 100px!important; text-align: center;">KPI Month</td>
												<td class="cmPayroll monthlyListHead" style="padding-top: 18px; text-align:center; min-width: 100px!important; text-align: center;">Total Marks </td>
												<td class="cmPayroll mlist" style="text-align:center; min-width: 92px!important; text-align: center;">Total Marks Allocated</td>
												<td class="cmPayroll monthlyListHead" style=" min-width: 130px!important; text-align:center;">Action</td>
												
												
												
												
												
												
											</tr>
										</thead>
										
										<tbody>
										
											${response.data.map(function(data, index){
										return(`
											<tr>
												
												<td class="fC" style="text-align:center;">${data.employee_id}</a></td>
												<td class="fC text-left" style="padding-left: 10px!important;">${data.userName}</a></td>
												
												
												
												${data.Usercalender.map(function(UsercalenderData){
												return`
												<td class="fC" style="text-align:center;">${UsercalenderData} Months</td>
												
												`
												}).join('')}
												
												
												
												${data.KpiMarks.map(function(KpiMarksData){
												return`
												<td class="fC" style="text-align:center;">${(KpiMarksData.marks > 0)?KpiMarksData.marks: "N/A"}</td>
												
												`
												}).join('')}
												
												
												
												${data.MarksObtained.map(function(MarksObtainedData){
												return`
												<td class="fC" style="text-align:center;">${(MarksObtainedData.marksObt > 0)?MarksObtainedData.marksObt: "N/A"}</td>
												
												`
												}).join('')}
												
												
												
												
												
												
												<td class="fC">
													<div class=" ">
													<ul class="tnUemp">
													<li class="tnemp"><a href="#"><i class="Masif fas fa-download"></i></a></li>
													<li class="tnemp"><a href="#"><i style="color:green;" class="actionFontSize fas fa-edit"></i></a></li>
												
													<li class="tnemp"><a href="javascript:void(0)" data-UserIdApp="${data.userId}" class="EmpKPIView"><i style="color:blue;" class="actionFontSize fa fa-eye" aria-hidden="true"></i></a></li>
													</ul>

													</div>
												
												</td>
												
												
											
											`)
										}).join('')}
										
										
											
											</tr>
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