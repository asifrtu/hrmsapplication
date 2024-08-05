<?php 

// echo "<>";
// print_r($companyGoals);die;

include('header.php');



 ?>
<?php include('teamGoalsSidebar.php'); ?>
        <!-- Content Wrapper -->
 

<style>
.cmPayroll{
    background: #00d3c3!important;
	color: #fff!important;
}
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
	width:110px;
}

.actionFontSize{
	font-size:15px!important;
    color: #00d3c3!important;
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
</style>

 <div id="content-wrapper bg-gradient-primary" class="d-flex flex-column" style="margin-top:50px; margin-bottom:50px;">

            <!-- Main Content -->
            <div id="content">
				
		
                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    
					<div class="card shadow mb-4" style="width:900px; margin-bottom:100px;">
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
						
							
								<div class="d-flex sasifb flex-row-reverse ">
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
								<div class="table-responsive">
									<table class="table table-bordered table-sm" id="CompanydataTable" width="100%">
										<thead >
											<tr style="background: #00d3c3!important; color: #fff!important;">
												<th class="cmPayroll">S.No.</th>
												<th class="cmPayroll">2021 Goals List of the Entire Year</th>
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
									<h6 class="m-0 font-weight-bold ColorPrimary" style="margin:15px 0;">Yearly Goals for Content Writer Team</h6>
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
								<h5 style="text-align:center; margin:auto; color:#6f42c1; font-weight:700;">Content Writer Goals</h5>
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
											echo "<option year='".$year->year."' value='".$year->Year_Id."'  $selected_text >".$year->year."</option>";

											}
											 
											 
											 ?>
											
											</select> 
									</div>
									<h5 style="text-align:center; margin:auto; color:#6f42c1; font-weight:700;">Content Writer Goals</h5>
									</div>
									<div class="table-responsive">
										<table class="table table-bordered table-sm" id="SeodataTable" width="100%" cellspacing="0">
											<thead>
											<tr style="background: #00d3c3!important; color: #fff!important;">
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
									<h6 class="m-0 font-weight-bold ColorPrimary" style="margin:15px 0;">Monthly Goals for Content Writer Team</h6>
								</div>
							</div>
							</div>
							
							<div class="card-body">
                    <!-- Content Row -->
					  <!-- Area Chart -->
								
								
									<div class="d-flex sasifb flex-row-reverse ">
								<div class="p-2 bg-info" style="margin-left:5px;">
									
									<select class="empInput form-control" name="Year_Id" id="SeoYear_Id" style="border: 1px solid #858796;" id="sel1">
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
									<h5 style="margin-right: 70px; color:#6f42c1; font-weight:700;">Monthly Goals for Content Writer Team</h5>
									</div>
									<div class="table-responsive">
										<table class="table table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
											<thead>
											<tr style="background: #00d3c3!important; color: #fff!important;">
												<th class="cmPayroll">S.No.</th>
												<th class="cmPayroll">Employee Name</th>
												<th class="cmPayroll">Marks</th>
												<th class="cmPayroll">Comment</th>
												<th class="cmPayroll">Action</th>
											
											</tr>
											</thead>
											
										
										<tbody>
											<?php if(!empty($User)):  ?>
									
											<?php
											
											
											$sno = 1;
											foreach($User as $emp): ?>
											<tr>
												<td style="text-align:center;"><?php  echo $sno++; ?></td>
												<td><?php  echo $emp->name; ?></td>
												<td>1</td>
												<td>Need to Complete entire pages of BME.com.au</td>
												<td>
												
													<div class=" ">
													<ul class="tnUemp">
													<li class="tnemp"><a href="#"><i class="actionFontSize fas fa-trash-alt"></i></a></li>
													<li class="tnemp"><a href="<?=base_url('index.php/hrzone/CompanyGoals/KPIGoalView/'.$emp->id);?>"><i class="actionFontSize fa fa-eye" aria-hidden="true"></i></a></li>
													<li class="tnemp"><a href="<?=base_url('index.php/hrzone/dashboard/empKPIGoalsEdit');?>"><i class="actionFontSize fas fa-edit"></i></a></li>
													</ul>

													</div>
												
												</td>
												
											</tr>
											
											<?php endforeach;  ?>
										<?php else: ?>
										<tr>
										<td colspan="3">Data is Not Available</td>
										<?php endif; ?>

										</tr>
											
											
											
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
	
	
	
	
	
<div class="modal " id="updateModal" role="dialog">
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
			<label>Points</label>
			<input type="text" name="goal_points" id="goal_pointsUpdate" class="empInput form-control" style="border: 1px solid #858796;">
			</div>
			</div>
			<div class="col-lg-4">
			<div class="form-group">
			<label>Comment</label>
			<input type="text" name="goal_comments" id="goal_commentsUpdate" class="empInput form-control" style="border: 1px solid #858796;">
			</div>
			</div>
			</div>
		</form>
	</div>
        <button type="button" class="seoUpdateYearData" id="empSeoBtn" style="text-align:center; margin:25px 300px;">Update</button>
		<input type="hidden" name="" id="goal_IdHidden"/>
		<input type="hidden" name="" id="goal_YearIdHidden"/>
	
	</div>
<!-- Content Row -->

</div>

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
			<div class="col-lg-12">
			<div class="form-group">
			<label>Points</label>
			<input type="text" name="seogoal_points" id="team_seogoal_points" class="empInput form-control" style="border: 1px solid #858796;">
			</div>
			</div>
			</div>
			<div class="row" >
			<div class="col-lg-8">
			<div class="form-group">
			<label>Comment</label>
			<input type="text" name="seogoal_comments" id="team_seogoal_comments" class="empInput form-control" style="border: 1px solid #858796;">
			</div>
			</div>
			
			<div class="col-lg-4">
			<div class="form-group">
			<label>Work Status</label>
			<input type="text" name="work_status" id="team_work_status" class="empInput form-control" style="border: 1px solid #858796;">
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
		
var data = [];
var seodata = [];
$(document).ready(function(){
	$("body").on('click', '.SeoCompanyEdit', function(){

	var id = $(this).attr('data-yearEdit');

	console.log(data);
	//i => i.goalpoints_Id == id;
	var foundData = data.find(i => i.goalpoints_Id == id);
	console.log(foundData);
	// var goalpoint = $(this).data(goal_comments);
	// var user = ${response.data.map(function(data))};
	// var user = JSON.stringify(data);
	$('#goal_pointsUpdate').val(foundData.goal_points);
	$('#goal_commentsUpdate').val(foundData.goal_comments);
	$('#goal_IdHidden').val(foundData.goalpoints_Id);
	$('#goal_YearIdHidden').val(foundData.Year_Id);
	$("#updateModal").modal('show');
  });
  
  
  $("body").on('click', '.SeoTeamEdit', function(){

	var id = $(this).attr('data-seo');

	console.log(data);
	//i => i.goalpoints_Id == id;
	var foundData = seodata.find(i => i.Seo_Id == id);
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

$("body").on('click', '.seoUpdateYearData', function(){
  // function updateUserRecord(){
	var goal_points = $('#goal_pointsUpdate').val();
	var goal_comments = $('#goal_commentsUpdate').val();
	var goalpoints_Id = $('#goal_IdHidden').val();
	var Yid = $('#goal_YearIdHidden').val();
	// var Yid = $(this).attr('data-yearID');
	
	$.post("<?=site_url('hrzone/CompanyGoals/companygoalPointsUpdateById');?>", {
		goal_points : goal_points, 
		goal_comments : goal_comments,   
        goalpoints_Id : goalpoints_Id  
		}, function(data, status){
			$('#updateModal').modal("hide");
			CompanyYearlyGoal(YearID);
			alert("User details updated successfully!");
			
		});
  
});


	
		
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
			data = response.data;
			if(response)
				$("#CompanydataTable tbody").html(`${response.data.map(function(data, index){
					return(`<tr>
					
					<td style="text-align:center;">${++index}</td>
					<td>${data.goal_points}</td>
					<td>${data.goal_comments}</td>
					<td><div class=" ">
													<ul class="tnUemp">
													<li class="tnemp"><a href="javascript:void(0)"><i class="actionFontSize fas fa-trash-alt"></i></a></li>
													<li class="tnemp"><a href="javascript:void(0)" data-yearEdit="${data.goalpoints_Id}" class="SeoCompanyEdit"><i class="actionFontSize fas fa-edit"></i></a></li>
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
		
		var YearID = $("#SeoYear_Id option:selected").val();
		SeoYearlyGoal(YearID);
		
    $("#SeoYear_Id").change(function(){
		
		$('#CityPostContainer').html("<div>Loading Post.....</div>");
		
        var YearID = $("#SeoYear_Id option:selected").val();
		SeoYearlyGoal(YearID);
    });
	
	
	
});



function SeoYearlyGoal(YearID){
	var ajaxurl = "<?=site_url('hrzone/CompanyGoals/ContentWriterGoalPointsByYear');?>";
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
													<li class="tnemp"><a href="javascript:void(0)" data-teamId="${data.Seo_Id}" class="TeamGoalsdelete"><i class="actionFontSize fas fa-trash-alt"></i></a></li>
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



    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

<?php include('footer.php'); ?>