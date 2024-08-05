<?php include('header.php'); ?>


	


									
<?php include('commonSidebar.php'); ?>
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
.fC a {
  text-decoration: none;
  color: #706e80;
}
.actionFontSize{
	font-size:15px!important;
	color:#00d3c3!important;
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
.sasifb {
    margin-bottom: 5px;
    margin-top: 10px;
    margin-right: 0px;
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

.AttSort {
    height: calc(1em + 0.75rem + 2px);
    padding: 0.2rem 0.5rem;
    font-size: 12px;
}
.AttSortMonth{
	height: calc(1em + .75rem + 2px);
   
    padding: .200rem .2rem;
    font-size: 14px;
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
.actionFontSize{
	font-size:15px!important;
	color:#00d3c3!important;
}
tfoot{
	background: #00d3c3;
    color:#fff!important;
    font-size: 14px;
    font-weight: 600;
}
.table td{
	padding:10px;
}
.information_heading{

	border-radius:none!important;
	color:#4c3f5e!important;
}
.table tbody td:last-child{
	border-right:none!important;
}

.employee_details{

	padding: 5px 6px !important;
} 

 </style>
        <?php if(!empty($this->session->flashdata('message'))) { ?>
			
			
			<?=$this->session->flashdata('message');?>
			
		<?php } ?>
	
        <!-- Content Wrapper -->
        <div id="content-wrapper bg-gradient-primary" class="col-lg-10 my_information" >

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="">
				<div class="employee_details ">

<div><h5 class="" style="font-size: 15px;margin-top: 11px;/* margin-bottom:8px; */ margin-left: 16px;">Monthly Key Performance Indicator</h5></div>
		<div class="d-flex sasifb flex-row-reverse " style="
margin-top: 2px;
">
				<div class="p-2 select-info" style="margin-left:5px;">
				<select class="AttSort form-control" name="month_Id" id="month_Id">
				<option value="">Select Month</option>

					<option month="January" value="1" selected=""> January</option><option month="February" value="2"> February</option><option month="March" value="3"> March</option><option month="April" value="4"> April</option><option month="May" value="5"> May</option><option month="June" value="6"> June</option><option month="July" value="7"> July</option><option month="August" value="8"> August</option><option month="September" value="9"> September</option><option month="October" value="10"> October</option><option month="November" value="11"> November</option><option month="December" value="12"> December</option>
				</select>
				</div>
				
				<div class="p-2 select-info" style="margin-left:5px;">
				
				<select class="AttSort  form-control" name="Year_Id" id="Year_Id">
						<option value="">Select Year</option>
						
						<option year="2018" value="2018"> 2018</option><option year="2019" value="2019"> 2019</option><option year="2020" value="2020"> 2020</option><option year="2021" value="2021"> 2021</option><option year="2022" value="2022" selected=""> 2022</option><option year="2023" value="2023"> 2023</option><option year="2024" value="2024"> 2024</option><option year="2025" value="2025"> 2025</option><option year="2026" value="2026"> 2026</option><option year="2027" value="2027"> 2027</option><option year="2028" value="2028"> 2028</option><option year="2029" value="2029"> 2029</option><option year="2030" value="2030"> 2030</option>											
						</select>

				</div>
				</div>	
				
				</div>
                    <!-- Page Heading -->
                    
					<div class="container-fluid " >
                       
                        
						
						
						
                    <!-- Content Row -->
					  <!-- Area Chart -->
							
							
									
								<div class="table-responsive " id="renderHtmlKPI" >
										
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
		
	
		var User_Id = $("#User_Id option:selected").val();
        var MonthID = $("#month_Id option:selected").val();
		var YearID  = $("#Year_Id").val();
		MonthlyUserAttendance(User_Id, YearID, MonthID);
		
	$("#User_Id, #month_Id, #Year_Id").change(function(){
		
        var User_Id = $("#User_Id option:selected").val();
        var MonthID = $("#month_Id option:selected").val();
		var YearID  = $("#Year_Id").val();
		MonthlyUserAttendance(User_Id, YearID, MonthID);
    });
	
	
	
  
	
});



function MonthlyUserAttendance(User_Id, YearID, MonthID){
	var ajaxurl = "<?=site_url('adminzone/EmployeeInfo/KPIPointsByMonth');?>";
        $.ajax({
            type: "get",
            url: ajaxurl,
            data: {User_Id:User_Id, YearID:YearID, MonthID : MonthID},
			dataType: "JSON"
        }).done(function(response){
			if(response){
				
				$("#renderHtmlKPI").html(`
					${response.data.map(function(data, index){
										return(`
					<table class="table mt-4 mb-4" id="dataTable" width="100%">
							<thead class="information_heading courses" >
											<tr >
											
												<th class="cmPayroll" style=" text-align: center;">Monthly KPI Points</th>
												<th class="cmPayroll" style="text-align: center;">Marks</th>
												<th class="cmPayroll" style="text-align: center;">Achieved</th>
												
											</tr>
										</thead>
										
										<tfoot>
											<tr >
												<td class="" >Total Marks Given</td>
												${data.KpiMarks.map(function(KpiMarksData){
												return`
											
												
												<td  style="text-align: center;    ">${KpiMarksData.marks}</td>
												
												`
												}).join('')}
												${data.MarksObtained.map(function(MarksObtainedData){
												return`
												<td  style="text-align: center;    ">${MarksObtainedData.marksObt}</td>
												
												`
												}).join('')}
												
											</tr>
										</tfoot>
										
										
										
										
										<tbody>
										${data.PointsAndMarks.map(function(PointsAndMarksData){
												return`
												<tr>
												
												<td class="fC" >${PointsAndMarksData.kpiGoal_Points}</td>
												<td class="fC" style="text-align: center;  font-weight:600; ">${PointsAndMarksData.kpi_marks}</td>
												<td class="fC" style="text-align: center;  font-weight:600;">${PointsAndMarksData.afterKpi_marks}</td>
												</tr>
												`
												}).join('')}
												
											
										</tbody>
										</table>
					
											`)
										}).join('')}
										
										
				
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



