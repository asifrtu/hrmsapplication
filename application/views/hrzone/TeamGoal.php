<?php 

// echo "<>";
// print_r($companyGoals);die;

include('header.php');



 ?>
<?php include('teamGoalsSidebar.php'); ?>
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
.actionFontSize .cmPayroll{
	background: #00d3c3!important; color: #fff!important;
};
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
    
    height: calc(1.5em + .5rem + 1px);
    padding: .275rem .5rem;
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

td:first-child { width:10px; };

td:last-child{
	width:110px;
}


.InProgress{
	color:white;
	background-color:#feaa27;
	
	text-align:center;
}



.Completed{
	color:white;
	background-color:#7bc017;
	
	text-align:center;
}


.Pending{
	color:white;
	background-color:#f65c4c;
	
	text-align:center;
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
                    
					<div class="card shadow mb-4" style="width: 900px!important; margin-bottom:100px;">
                        
						
						<div class="ColorSecondaryPre" style="padding: 12px 5px 5px 12px;">
                            <h5 class=" md-4 ColorPrimary" style="font-size:17px;">Team Goals</h5>
                        </div>
						
						<div class="" >
						<ul class="APUemp ColorSecondaryNotes">
						<li class="APemp"><a href="#" style="font-style: italic;">All Team Goals are here.</a></li>
						</ul>


						</div>
						
						
							
                    <!-- Content Row -->
					  <!-- Area Chart -->
							
							
							
								
								<div class="card-body">
								
									
								
								
								
								
									<div class="d-flex sasifb flex-row-reverse ">
								<div class="p-2 bg-info">
									
									<select class="empInput form-control" name="Year_Id" id="SeoYear_Id" style="border: 1px solid #858796;" id="sel1">
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
									
									<div class="p-2 bg-info">
									
									<select class="form-control" placeholder="position" name="position" id="position_Id" style="border: 1px solid #858796;" id="sel1">
										
											<option>select</option>
											<?php 
											// echo "<pre>";
											// print_r($teamDeisn);die;
											$curnYear = 1;
											
											 foreach ( $teamDeisn as $year )
											{
											$selected_text='';
											if($year->designation_Id == $curnYear)
											$selected_text='selected';
											echo "<option year='".$year->designation_Id."' value='".$year->designation_Id."'  $selected_text > ".$year->Designation."</option>";

											}
											 
											
											 
											 ?>
											</select>
									</div>
									
									
									<h5 style="text-align:center; margin:auto; color:#6f42c1; font-weight:500; font-size: 18px;">Yearly Team Goals</h5>
									</div>
									<div class="table-responsive">
										<table class="table table-bordered table-sm" id="SeodataTable" width="100%" cellspacing="0">
											<thead>
											<tr>
												<th class="cmPayroll">S.No.</th>
												<th class="cmPayroll">2021 Goals List for SEO Team</th>
												<th class="cmPayroll">Status</th>
												<th class="cmPayroll">Comment</th>
												<th class="cmPayroll" style="width: 110px;">Action</th>
												
												
											</tr>
										</thead>
										
										<tbody>
											
											
											
										</tbody>
										</table>
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
        <button type="button" class="CompanyGoalSub" id="empSeoBtn" style="text-align:center; margin:25px 300px;">Update</button>
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
		<h6 class="ColorPrimary" style="padding-left: 302px; padding-top: 10px;">Developer Goals Edit</h6>
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
		<input type="hidden" name="" id="goal_designation_IdHidden"/>
	
	</div>
<!-- Content Row -->

</div>

</div>
  

	
	
	
    <!-- End of Page Wrapper -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
	var data = [];
	var DEVELOPERdata = [];
	
	$(document).ready(function(){
	  var YearID = $("#SeoYear_Id option:selected").val();
       var PositionID = $("#position_Id option:selected").val();
		SeoYearlyGoal(PositionID, YearID);
		
  
  
  $("body").on('click', '.DeveloperTeamEdit', function(){

	var id = $(this).attr('data-seo');

	
	//i => i.goalpoints_Id == id;
	var foundData = DEVELOPERdata.find(i => i.Seo_Id == id);
	console.log(foundData);
	// var goalpoint = $(this).data(goal_comments);
	// var user = ${response.data.map(function(data))};
	// var user = JSON.stringify(data);
	$('#team_seogoal_points').val(foundData.seogoal_points);
	$('#team_seogoal_comments').val(foundData.seogoal_comments);
	$('#team_work_status').val(foundData.work_status);
	$('#team_IdHidden').val(foundData.Seo_Id);
	$('#goal_YearIdHidden').val(foundData.Year_Id);
	$('#goal_designation_IdHidden').val(foundData.designation_Id);
	$("#updateTeamModal").modal('show');
  });
  
  
  
  
  
	$("body").on('click', '.seoTeamData', function(){
  // function updateUserRecord(){
	var team_points = $('#team_seogoal_points').val();
	var team_comments = $('#team_seogoal_comments').val();
	var team_work = $('#team_work_status').val();
	var teamId = $('#team_IdHidden').val();
	var yearID = $('#goal_YearIdHidden').val();
	var Desig_ID = $('#goal_designation_IdHidden').val();
	
	// var Yid = $(this).attr('data-yearID');
	var ajaxurl = "<?=site_url('hrzone/CompanyGoals/TeamgoalUpdateById');?>";
        $.ajax({
            type: "post",
            url: ajaxurl,
            data: {team_points : team_points, team_comments : team_comments, team_work:team_work, teamId:teamId, yearID:yearID},
			dataType: "JSON",
			success:function(data){
			$('#updateTeamModal').modal("hide");
			SeoYearlyGoal(Desig_ID, YearID);
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
			SeoYearlyGoal(YearID);
			alert(conf);
		}
			
	}
	
	);
	
  });
		 
		 
		 
		 
		 
		 
	
	
	
});


						
</script>

<script>
	$(document).ready(function(){
		
		
    $("#position_Id, #SeoYear_Id").change(function(){
		
		$('#CityPostContainer').html("<div>Loading Post.....</div>");
		
        var YearID = $("#SeoYear_Id option:selected").val();
        var PositionID = $("#position_Id option:selected").val();
		SeoYearlyGoal(PositionID, YearID);
    });
	
	
	
});



function SeoYearlyGoal(PositionID, YearID){
	var ajaxurl = "<?=site_url('hrzone/CompanyGoals/TeamGoalsByYear');?>";
        $.ajax({
            type: "post",
            url: ajaxurl,
            data: {PositionID:PositionID, YearID : YearID},
			dataType: "JSON"
        }).done(function(response){
			
			DEVELOPERdata = response.data;
			if(response)
				$("#SeodataTable tbody").html(`${response.data.map(function(data, index){
					return(`<tr>
					
					<td style="text-align:center;">${++index}</td>
					<td class="AttFontStatus">${data.seogoal_points}</td>
					<td class="${data.work_status}">${data.work_status}</td>
					<td class="AttFontStatus">${data.seogoal_comments}</td>
					<td class="AttFontStatus"><div class=" ">
													<ul class="tnUemp">
													<li class="tnemp"><a href="javascript:void(0)" data-teamId="${data.Seo_Id}" class="TeamGoalsdelete"><i class="actionFontSize fas fa-trash-alt"></i></a></li>
													<li class="tnemp"><a href="javascript:void(0)" data-seo="${data.Seo_Id}" class="DeveloperTeamEdit"><i class="actionFontSize fas fa-edit"></i></a></li>
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