<?php include('header.php'); ?>
<?php include('KpiTeamSidebar.php'); ?>
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
	font-size:14px;
	font-weight:500;
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

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 0 1.25rem;
}
</style>

 <div id="content-wrapper bg-gradient-primary" class="d-flex flex-column" style="margin-top:16px; margin-bottom:50px;">

            <!-- Main Content -->
            <div id="content">
				
		
                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    
					<div class="card shadow mb-4" style="width:900px; margin-bottom:100px;">
                        
							
							
							<div class="ColorSecondaryPre" style="padding: 12px 5px 5px 12px;">
                            <h5 class=" md-4 ColorPrimary" style="font-size:17px;">Seo Team KPI</h5>
                        </div>
						
						<div class="" >
						<ul class="APUemp ColorSecondaryNotes">
						<li class="APemp"><a href="#" style="font-style: italic;">All Team KPI are here.</a></li>
						</ul>


						</div>
                    <!-- Content Row -->
					  <!-- Area Chart -->
							
						
							<div class="card-body">
                   		
								
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
									
									
									<h5 style="text-align:center; margin:auto; color:#6f42c1; font-weight:500; font-size: 16px;">Seo Team KPI</h5>
									</div>
									<div class="table-responsive">
										<table class="table table-bordered table-sm" id="KPITeamRenderHtml" width="100%" cellspacing="0">
											<thead>
											<tr>
												<th class="cmPayroll">S.No.</th>
												<th class="cmPayroll">Employee Name</th>
												<th class="cmPayroll">Marks</th>
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
  
    <!-- End of Page Wrapper -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
		
var KPIdata = [];

$(document).ready(function(){
	
  
		 var PositionID = $("#position_Id option:selected").val();
		var YearID = $("#Year_Id option:selected").val();
		var MonthID = $("#month_Id option:selected").val();
		
		EmployeeKPITeam(PositionID, YearID, MonthID);
  
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


	
		
		 
		
    $("#Year_Id, #month_Id").change(function(){
		
		$('#CityPostContainer').html("<div>Loading Post.....</div>");
		
       var MonthID = $("#month_Id option:selected").val();
		var YearID = $("#Year_Id option:selected").val();
		
		EmployeeKPITeam(YearID, MonthID);
    });
	
	
	
});



function EmployeeKPITeam(MonthID, YearID){
	var ajaxurl = "<?=site_url('hrzone/CompanyGoals/KPIDesignerTeam');?>";
        $.ajax({
            type: "get",
            url: ajaxurl,
            data: {YearID : YearID, MonthID:MonthID},
			dataType: "JSON"
        }).done(function(response){
			KPIdata = response.data;
			if(response)
				$("#KPITeamRenderHtml tbody").html(`${response.data.map(function(data, index){
					return(`<tr>
												<td style="text-align:center;" >${++index}</td>
												<td style="min-width: 105px!important; padding: 0.25rem!important;">${data.userName}</td>
												
												${data.KPIMarks.map(function(KPIMarksData){
										return`
										
										<td style="min-width: 15px!important; text-align:center; padding: 0.25rem!important;" class="AttFontStatus edit_Attn ${KPIMarksData.AfterKpiMarks}">${(KPIMarksData.AfterKpiMarks != "")?KPIMarksData.AfterKpiMarks: "Nil"}</td>
										<td style="min-width: 265px!important; text-align:center; padding: 0.25rem!important;" class="AttFontStatus edit_Attn ${KPIMarksData.AfterKPIComments}">${(KPIMarksData.AfterKPIComments != "")?KPIMarksData.AfterKPIComments: "Nil"}</td>
										
										
										
										`
										}).join('')}
												
												<td style="min-width: 130px;">
												
													<div class=" ">
													<ul class="tnUemp">
													
													<li class="tnemp"><a href="<?=base_url('index.php/hrzone/CompanyGoals/KPIGoalView/');?>${data.userId}"><i class="actionFontSize fa fa-eye" aria-hidden="true"></i></a></li>
													<li class="tnemp"><a href="javascript:void(0)" data-KPIID="${data.userId}" class="KPI_UserAdd"><i class="fa fa-plus" aria-hidden="true"></i></a></li>
												
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


    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

<?php include('footer.php'); ?>