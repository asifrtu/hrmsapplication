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
	background:#ececec;
}
.actionFontSize{
	font-size:15px!important;
	color:#00d3c3!important;
}
.mar{
	margin:10px 0;
}
.form-control {
    
    height: calc(1.5em + .4rem + 1px);
    padding: .275rem .5rem;
	font-size: 0.9rem;
	
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
.sasifb{
	margin-bottom: 10px;
    margin-top: 10px;
}

.empInput{
	border: 1px solid #858796;
    border-radius: 3px;
	overflow:hidden!important;
	
	padding: .2rem .75rem!important;
}

td:last-child{
	width:60px;
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
  font-size:14px;
  text-decoration: none;
}
.ColorSecondaryNotes{
	background-color:#ececec;
	padding: .35rem 1.25rem!important;
}

td:first-child { width:10px; };


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



.InProgress{
	color:white;
	background-color:#f1c232;
	
	text-align:center;
}

</style>

 <div id="content-wrapper bg-gradient-primary" class="d-flex flex-column" style="margin-top:50px; margin-bottom:50px;">

            <!-- Main Content -->
            <div id="content">
				
		
                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    
					<div class="card shadow mb-4" style="width: 1000px!important; margin-bottom:100px;">
                        <div class="card-header ColorSecondaryPre">
							<h6 class="m-0 font-weight-bold ColorPrimary">My Goals</h6>
                        </div>
						<div class="row">
						<div class="col-lg-12" style="margin-top:-1px;">
						<div class="card-header " >
						<h6 class="m-0 font-weight-bold" style="font-style:italic;">Here are your yearly Company Goals list and Monthly Goals list</h6>
						</div>
						</div>
						</div>
							
                    <!-- Content Row -->
					  <!-- Area Chart -->
								
							
							<div class="card-body">
							
					




							

								<!--div class="col-lg-12" style="margin:10px 0;">
								<div class="row" >
								<div class="col-lg-4" >

								</div>
								<div class="col-lg-4" >
								<div class="row">
								
								
								<h5 style="text-align:center; margin:auto; color:#6f42c1; font-weight:700;">Company's Yearly Goals</h5>
								</div>
								</div>
								<div class="col-lg-4" >
								</div>
								</div>
								</div-->
						
							
								<div class="d-flex sasifb flex-row-reverse " >
									
								<div class="p-2 bg-info">
									
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
											echo "<option year='".$year->year."' value='".$year->Year_Id."'  $selected_text > ".$year->year."</option>";

											}
											 
											 
											 ?>
											
											</select>
									</div>
									<h5 style="text-align:center; margin:auto; color:#6f42c1; font-weight:700;">Company's Yearly Goals</h5>
									</div>
								<div class="table-responsive" style="">
									<table class="table table-bordered table-sm" id="CompanydataTable" width="100%">
										<thead >
											<tr>
												<th class="cmPayroll">S.No.</th>
												<th class="cmPayroll">2021 Goals List of the Entire Year</th>
												<th class="cmPayroll">Comment</th>
												
											</tr>
										</thead>
										
										<tbody>
											
											
											
										</tbody>
									</table>
								</div>
							</div>
							
							<div class="row">
							<div class="col-lg-12">
								<div class="tableHeadAR">
									<h6 class="m-0 font-weight-bold ColorPrimary" style="margin:15px 0;">Yearly Goals for SEO Team</h6>
								</div>
							</div>
							</div>
					
							
								
								<div class="card-body">
								
								<!--div class="col-lg-12 mar" >
								<div class="row" >
								<div class="col-lg-4" >

								</div>
								<div class="col-lg-4" >
								<div class="row">
								<h5 style="text-align:center; margin:auto; color:#6f42c1; font-weight:700;">Team Goals</h5>
								</div>
								</div>
								<div class="col-lg-4" >
								</div>
								</div>
								</div-->
								
								
								
								
								
									<div class="d-flex sasifb flex-row-reverse ">
								<div class="p-2 bg-info">
									
									<select class="empInput form-control" name="Year_Id" id="SeoYear_Id" style="border: 1px solid #858796;" id="sel1">
											<option value="">Select Year</option>
											
											<?php 
											// echo "<pre>";
											// print_r($teamDesignation);die;
											
											
											 foreach ( $GoalYear as $year )
											{
											$selected_text='';
											if($year->year == $curnYear)
											$selected_text='selected';
											echo "<option year='".$year->year."' value='".$year->Year_Id."'  $selected_text > ".$year->year."</option>";

											}
											 
											 
											 ?>
											
											</select> 
									</div>
									<h5 style="text-align:center; margin:auto; color:#6f42c1; font-weight:700;">Team Goals</h5>
									</div>
									<div class="table-responsive">
										<table class="table table-bordered table-sm" id="SeodataTable" width="100%" cellspacing="0">
											<thead>
											<tr>
												<th class="cmPayroll">S.No.</th>
												<th class="cmPayroll">2021 Goals List for SEO Team</th>
												<th class="cmPayroll">Status</th>
												<th class="cmPayroll">Comment</th>
												<th class="cmPayroll">Action</th>
												
												
											</tr>
										</thead>
										
										<tbody>
											
											
											
										</tbody>
										</table>
									</div>
								
							</div>
					
							
						<div class="row">
							<div class="col-lg-12">
								<div class="tableHeadAR">
									<h6 class="m-0 font-weight-bold ColorPrimary" style="margin:15px 0;">Monthly Goals for SEO Team</h6>
								</div>
							</div>
							</div>
							
							<div class="card-body">
                    <!-- Content Row -->
					  <!-- Area Chart -->
								
										
									
									<div class="d-flex sasifb flex-row-reverse ">
								<div class="p-2 bg-info" style="margin-left:5px;">
									
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
									<div class="p-2 bg-info" >
									
									<select class="empInput form-control" name="KPIYear_Id" id="KPIYear_Id" style="border: 1px solid #858796;" id="sel1">
											<option value="">Select Year</option>
											
											<?php 
											// echo "<pre>";
											// print_r($teamDesignation);die;
											
											
											 foreach ( $GoalYear as $year )
											{
											$selected_text='';
											if($year->year == $curnYear)
											$selected_text='selected';
											echo "<option year='".$year->year."' value='".$year->Year_Id."'  $selected_text > ".$year->year."</option>";

											}
											 
											 
											 ?>
											
											</select>
									</div>
									
									<h5 style="text-align:center; margin:auto; color:#6f42c1; font-weight:700;">	<?php echo strtoupper($User->name)." "; ?>KPI GOALS</h5>
									
									</div>
									<div class="table-responsive">
									<table class="table table-bordered table-sm" id="dataTable" width="100%">
										<thead>
											<tr>
												
												<th class=" cmPayroll">S.No.</th>
												<th class="cmPayroll">2021 Goals List of the Entire Year</th>
												<th class="cmPayroll">Mark</th>
												<th class="cmPayroll">Comment</th>
												<th class="cmPayroll">Points</th>
											
												
												
												
											</tr>
										</thead>
										
										<tbody>
											
											
										</tbody>
									</table>
								</div>
								</div>
							
							
							
							<div class="row">
							<div class="col-lg-12">
								<div class="tableHeadAR">
									<h6 class="m-0 font-weight-bold ColorPrimary" style="margin:15px 0;">Monthly Comment(if any)</h6>
								</div>
							</div>
							</div>
					
							
								
								<div class="card-body">
									<div style="height:100px;">
									
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
	
	
	
<div class="modal " id="updateTeamModal" role="dialog">
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
			
			<div class="col-lg-4">
			<div class="form-group">
			<label>Work Status</label>
			<select class="empInput form-control" name="work_status" id="team_work_status"style="border: 1px solid #858796;" id="sel1">
			<option>Work Status</option>
			<option>Pending</option>
			<option>InProgress</option>
			<option>Completed</option>
			</select>
			
			</div>
			</div>
			
			
			</div>
		</form>
	</div>
        <button type="button" class="seoTeamData" id="empSeoBtn" style="text-align:center; margin:25px 300px;">Update</button>
		<input type="hidden" name="" id="team_IdHidden"/>
		<input type="hidden" name="" id="goal_YearIdHidden"/>
	
	</div>
<!-- Content Row -->

</div>

</div>
  

	
	
    <!-- End of Page Wrapper -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>

var seodata = [];
	$(document).ready(function(){
		
		var YearID = $("#Year_Id option:selected").val();
		CompanyYearlyGoal(YearID);
		
    $("#Year_Id").change(function(){
		
		$('#CityPostContainer').html("<div>Loading Post.....</div>");
		
        var YearID = $("#Year_Id option:selected").val();
		CompanyYearlyGoal(YearID);
    });
	
	
	
});



function CompanyYearlyGoal(YearID){
	var ajaxurl = "<?=site_url('hrzone/CompanyGoals/goalPointsByYear');?>";
        $.ajax({
            type: "get",
            url: ajaxurl,
            data: { YearID : YearID},
			dataType: "JSON"
        }).done(function(response){
			if(response)
				$("#CompanydataTable tbody").html(`${response.data.map(function(data, index){
					return(`<tr>
					
					<td style="text-align:center;">${++index}</td>
					<td>${data.goal_points}</td>
					<td>${data.goal_comments}</td>
					
					
					
					</tr>`)
				})}`);
            else 
				$("#CompanydataTable tbody").html("<div>No data Found.....</div>");
        });
}
							
</script>

<script>




	$(document).ready(function(){
		
		
		
		
$("body").on('click', '.SeoTeamEdit', function(){

	var id = $(this).attr('data-seo');

	
	//i => i.goalpoints_Id == id;
	var foundData = seodata.find(i => i.Seo_Id == id);
	console.log(foundData);
	// var goalpoint = $(this).data(goal_comments);
	// var user = ${response.data.map(function(data))};
	// var user = JSON.stringify(data);
	$('#team_work_status').val(foundData.work_status);
	$('#team_IdHidden').val(foundData.Seo_Id);
	$('#goal_YearIdHidden').val(foundData.Year_Id);
	$("#updateTeamModal").modal('show');
  });
  
  
  

	
	$("body").on('click', '.seoTeamData', function(){
	var team_work = $('#team_work_status').val();
	var teamId = $('#team_IdHidden').val();
	var yearID = $('#goal_YearIdHidden').val();
	
	// var Yid = $(this).attr('data-yearID');
	var ajaxurl = "<?=site_url('adminzone/EmployeeInfo/TeamgoalworkStausUpdateById');?>";
        $.ajax({
            type: "post",
            url: ajaxurl,
            data: {team_work:team_work, teamId:teamId, yearID:yearID},
			dataType: "JSON",
			success:function(data){
			$('#updateTeamModal').modal("hide");
			SeoYearlyGoal(YearID);
			alert("Data updated Successfully");
			}
			
		});
  
}); 
  
		
		
		
		
		
		
		var YearID = $("#SeoYear_Id option:selected").val();
		SeoYearlyGoal(YearID);
		
    $("#SeoYear_Id").change(function(){
		
		$('#CityPostContainer').html("<div>Loading Post.....</div>");
		
        var YearID = $("#SeoYear_Id option:selected").val();
		SeoYearlyGoal(YearID);
    });
	
	
	
});



function SeoYearlyGoal(YearID){
	var ajaxurl = "<?=site_url('adminzone/EmployeeInfo/TeamGoals');?>";
        $.ajax({
            type: "get",
            url: ajaxurl,
            data: { YearID : YearID},
			dataType: "JSON"
        }).done(function(response){
			seodata = response.data;
			if(response)
				$("#SeodataTable tbody").html(`${response.data.map(function(data, index){
					return(`<tr>
					
					<td style="text-align:center;">${++index}</td>
					<td>${data.seogoal_points}</td>
					<td class="${data.work_status}">${data.work_status}</td>
					<td>${data.seogoal_comments}</td>
					<td><div class=" ">
													<ul class="tnUemp">
													<li class="tnemp"><a href="javascript:void(0)" data-seo="${data.Seo_Id}" class="SeoTeamEdit"><i class="actionFontSize fas fa-edit"></i></a></li>
													</ul>

													</div></td>
					
					
					</tr>`)
				})}`);
            else 
				$("#CompanydataTable tbody").html("<div>No data Found.....</div>");
        });
}
							
</script>
<script>
	$(document).ready(function(){
	var MonthID = $("#month_Id option:selected").val();
	var YearID = $("#KPIYear_Id option:selected").val();
		var UserId = <?php echo $User->id;?>;
		KPIMonthlyGoal(YearID, MonthID, UserId);
		
    $("#month_Id").change(function(){
		
		$('#CityPostContainer').html("<div>Loading Post.....</div>");
		
        var MonthID = $("#month_Id option:selected").val();
		var UserId = <?php echo $User->id;?>;
		var YearID  = $("#KPIYear_Id").val();
		
		console.log(YearID);
		KPIMonthlyGoal(YearID, MonthID, UserId);
    });
	
	
	
});



function KPIMonthlyGoal(YearID, MonthID, UserId){
	var ajaxurl = "<?=site_url('hrzone/CompanyGoals/KPIgoalPointsByMonth');?>";
        $.ajax({
            type: "get",
            url: ajaxurl,
            data: {YearID:YearID, MonthID : MonthID, UserId: UserId},
			dataType: "JSON"
        }).done(function(response){
			if(response)
				$("#dataTable tbody").html(`${response.data.map(function(data, index){
					return(`<tr>
					
					<td style="text-align:center;">${++index}</td>
					<td>${data.kpiGoal_Points}</td>
					<td>${data.kpi_marks}</td>
					<td>${data.kpiGoal_Comments}</td>
					<td>${data.afterKpi_marks}</td>
					
					
					
					</tr>`)
				})}`);
            else 
				$("#CompanydataTable tbody").html("<div>No data Found.....</div>");
        });
}
							
</script>


    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

<?php include('footer.php'); ?>