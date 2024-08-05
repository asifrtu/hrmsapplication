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
.actionFontSize, .cmPayroll{
	background: #00d3c3!important; color: #fff!important;
};
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
padding-top:1px;
	margin-right: -30px;
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
	height: calc(1em + .75rem + 2px);
   
    padding: .200rem .5rem;
    font-size: 12px;
}
.AttSortMonth{
	height: calc(1em + .75rem + 2px);
   
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

.ColorSecondaryPre{
	padding:5px 10px;
}
.table-responsive{
	padding:20px;
}
.table-bordered thead td{
	border-bottom:none;
}
.table-bordered td{
	border: 1px solid #dddd!important;
}
.table td{
	vertical-align: middle;
    font-size: 13px;
    color: #343434;

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
    border: 1px solid white !important;
    border-radius: 50%;
    padding: 1px 4px!important;
}

label{
	display: inline-block;
    margin-bottom: 0rem;
    color: #343434;
}
.AttSort {
	font-size:12px!important;
}
.cmPayroll{
	font-size: 13px;
    font-weight: 600;
    color: #4c3f5e!important;
    padding: 10px 11px!important;
}
.addEmpSubmitBtn{
	margin-bottom:30px;
	color:white!important;   
	float:center;
    background: #1C304C;
    font-weight: 400;
    border-radius: 2px;
    padding: .2em 2em 0.2em 2em;
    border: none !important;
}
 </style>
        <?php if(!empty($this->session->flashdata('message'))) { ?>
			
			
			<?=$this->session->flashdata('message');?>
			
		<?php } ?>
	
        <!-- Content Wrapper -->
        <div id="content-wrapper bg-gradient-primary" class="col-lg-10" style="margin-top:30px; margin-bottom:50px; padding-left:20px;">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="">

				<div class="card-header ColorSecondaryPre">
					<div class="row d-flex pl-1 ">
				
<div class="col-lg-1"><a href="<?php echo base_url() ?>index.php/hrzone/dashboard/wall" style=" vertical-align: middle; color: white;font-size: 15px;"><i class="fa fa-home" aria-hidden="true"></i></a></div>
<div class="col-lg-6" style="padding-left: 0px;"> <i style="font-size: 10px;color: white;" class="fas fa-chevron-right"></i><span class="breadcrumb_text" style=" vertical-align: middle; font-size: 15px;color: #fff;font-weight: 600;"> &nbsp;Employee View KPI</span></div>
<div class="col-lg-5"> 

<div class="d-flex sasifb flex-row-reverse ">
									<div class="" style="margin-left:5px;">

									<select class="AttSortMonth empInput form-control" name="month_Id" id="month_Id" >
									<option value="">Select Month</option>

										<?php
										$curMonth = (!empty($Month_Id))?$Month_Id:date("m");
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
									
									<div class="" style="margin-left:5px;">
									
									<select class="AttSort empInput form-control" name="Year_Id" id="Year_Id"  id="sel1">
											<option value="">Select Year</option>
											
											<?php 
											$curnYear = (!empty($Year_Id))?$Year_Id:date("Y");
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
									<div class="" style="">
									
									<select class="AttSort empInput form-control" name="User_Id" id="User_Id">
											<option value="">Select Employee</option>
											
											<?php 
											$curnUserId = (!empty($user_Id))?$user_Id:$User->id;
											// echo "<pre>";
											// print_r($teamDesignation);die;
											
											// $year =1;
											 foreach ( $UserDE as $year )
											{
											$selected_text='';
											if($year->id == $curnUserId)
											$selected_text='selected';
											echo "<option year='".$year->name."' value='".$year->id."'  $selected_text > ".$year->name."</option>";

											}
											 
											 
											 ?>
											
											</select>
									</div>
									<div class="" style="margin-left:5px;">
									<button id="EditKPI" style="border: none;font-size: 15px;border-bottom: 1px solid #efefef;border-right: 2px solid grey;"></button>
									</div>
									
									</div>


		</div>

		</div>
		</div>




				
                    <!-- Page Heading -->
                    
					<div class="card mb-4" style="margin-bottom:100px; ">
                       
                        
						
						
						
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
	
	
	
<div class="modal " id="updateModal" role="dialog">
<div class="modal-dialog modal-lg">
<!-- Modal content-->
	<div class="modal-content" style=" ">
	<div class="card-header" style="padding:7px!important; background-color: #1C304C;">
			<div class="">
			<h6 class="ColorPrimary" style="text-align: center;margin-bottom: 0px;">KPI Edit</h6>
			<button  type="button" class="close" data-bs-dismiss="modal">×</button>
			</div>
			</div>
	<div class="modal-body">

	<form class="form-horizontal" action="#">
	<div class="row" >
	<div class="col-lg-12">
	<div class="form-group">
	<label>Goals</label>
	<input type="text" name="kpiGoal_Points" id="Edit_kpiGoal_Points" class="empInput form-control" style="border: 1px solid #858796;">
	</div>
	</div>

	<div class="col-lg-3">
	<div class="form-group">
	<label>Marks</label>
	<input type="text" name="kpi_marks" id="Edit_kpi_marks" class="empInput form-control" style="border: 1px solid #858796;">
	</div>
	</div>

	<div class="col-lg-3">
	<div class="form-group">
	<label>Achieved</label>
	<input type="text" name="afterKpi_marks" id="Edit_afterKpi_marks" class="empInput form-control" style="border: 1px solid #858796;">
	</div>
	</div>




	
	</div>
    <div class="text-center" style="margin-top:25px; margin-bottom:25px;">
	<button type="button" class="empBtn LeaveSubmit" id="btnUploadPage" style="">Submit</button>
	<input type="hidden" name="" id="EmpId" >
	</div>
	</form>
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
	
	
	
	
	
	
	
  $("body").on('click', '.KPIEdit', function(){
	var id = $(this).attr('data-KPI');
	var ajaxurl = "<?=site_url('hrzone/CompanyGoals/EmployeekpiGoalsById');?>";
        $.ajax({
            type: "get",
            url: ajaxurl,
            data: {id:id},
			dataType: "JSON",
			success:function(data){
				console.log(data[0].employeeKPI_Id);
				
				$('#EmpId').val(data[0].employeeKPI_Id);
				$('#Edit_kpiGoal_Points').val(data[0].kpiGoal_Points);
				$('#Edit_kpi_marks').val(data[0].kpi_marks);
				$('#Edit_afterKpi_marks').val(data[0].afterKpi_marks);
				$("#updateModal").modal('show');
			
			}
				
        });
	
  });
  
  
  
	
	$("body").on('click', '.LeaveSubmit', function(){
  // function updateUserRecord(){
	var kpiGoal_Points = $('#Edit_kpiGoal_Points').val();
	var afterKpi_marks = $('#Edit_afterKpi_marks').val();
	var kpi_marks = $('#Edit_kpi_marks').val();
	var kpi_Id = $('#EmpId').val();
	
	// var Yid = $(this).attr('data-yearID');
	var ajaxurl = "<?=site_url('hrzone/CompanyGoals/MonthlyKPIUpdateById');?>";
        $.ajax({
            type: "post",
            url: ajaxurl,
            data: {kpiGoal_Points : kpiGoal_Points, afterKpi_marks : afterKpi_marks, kpi_marks:kpi_marks, kpi_Id : kpi_Id },
			dataType: "JSON",
			success:function(data){
			$('#updateModal').modal("hide");
			MonthlyUserAttendance(User_Id, YearID, MonthID);
			alert("Data updated Successfully");
			}
			
		});
  
}); 
	

 
  $("body").on('click', '.KPIGoalsdelete', function(){
    var conf = 'Are you sure You have to delete this file';
	var id = $(this).attr('data-kpidel');
	// var Yid = $("#Year_Id").val();
	// var Yid = $('#goal_YearIdHidden').val();
	var ajaxurl = "<?=site_url('hrzone/CompanyGoals/KPIGoalDeleteById');?>";
        $.ajax({
            type: "get",
            url: ajaxurl,
            data: { id : id},
			success:function(){
			MonthlyUserAttendance(User_Id, YearID, MonthID);
			alert(conf);
		}
			
	}
	
	);
	
  });
  
   
  
	
});



function MonthlyUserAttendance(User_Id, YearID, MonthID){
	var ajaxurl = "<?=site_url('hrzone/CompanyGoals/KPIPointsByMonth');?>";
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
					<table class="table table-bordered table-sm" id="dataTable" width="100%">
										<thead>
											<tr style="background-color:# !important">
												<td class="cmPayroll" style="min-width: 500px!important; text-align: center;">Monthly KPI Points</td>
												<td class="cmPayroll" style="text-align: center;">Marks</td>
												<td class="cmPayroll" style="text-align: center;">Achieved</td>
												<td class="cmPayroll" style="text-align: center; min-width: 90px!important;">Action</td>
												
											</tr>
										</thead>
										
										<tfoot>
											<tr style="background-color:# !important">
												<td class="cmPayroll" style="min-width: 500px!important;">Total Marks Given</td>
												${data.KpiMarks.map(function(KpiMarksData){
												return`
											
												
												<td class="cmPayroll" style="text-align: center;">${KpiMarksData.marks}</td>
												
												`
												}).join('')}
												${data.MarksObtained.map(function(MarksObtainedData){
												return`
												<td class="cmPayroll" style="text-align: center;">${MarksObtainedData.marksObt}</td>
												
												`
												}).join('')}
												<td class="cmPayroll" style="min-width: 90px!important;"></td>
											</tr>
										</tfoot>
										
										
										
										
										<tbody>
										${data.PointsAndMarks.map(function(PointsAndMarksData){
												return`
												<tr>
												
												<td class="fC">${PointsAndMarksData.kpiGoal_Points}</td>
												<td class="fC text-center">${PointsAndMarksData.kpi_marks}</td>
												<td class="fC text-center ">${PointsAndMarksData.afterKpi_marks}</td>
												<td class="fC"><div class=" ">
													<ul class="tnUemp">
													<li class="tnemp"><a href="javascript:void(0)" data-kpidel="${PointsAndMarksData.employeeKPI_Id}" class="KPIGoalsdelete"><i style="color:red;" class="actionFontSize fas fa-trash-alt"></i></a></li>
													<li class="tnemp"><a href="javascript:void(0)" data-KPI="${PointsAndMarksData.employeeKPI_Id}" class="KPIEdit"><i style="color:green;"  class="actionFontSize fas fa-edit"></i></a></li>
													</ul>

													</div></td>
												
												</tr>
												`
												}).join('')}
												
											
										</tbody>
										</table>
					
											`)
										}).join('')}
										
										
				
				`);
				
				
				$("#EditKPI").html(`
			${response.data.map(function(data, index){
			return(`	
				
			<a href="<?=site_url('hrzone/CompanyGoals/KPIEditByMonth');?>/${data.UserempID.map(function(UserempIDData){
												return`
												${UserempIDData}
												`
												}).join('')}/${data.YearempID.map(function(YearempIDData){
												return`${YearempIDData}`
												}).join('')}/${data.MonthempID.map(function(MonthempIDData){
												return`${MonthempIDData}`
												}).join('')}"   style="color: #7481a5; text-decoration: none;">Edit</a>
			
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



