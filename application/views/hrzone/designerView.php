<?php include('header.php'); ?>
<?php include('TeamGoalSidebar.php'); ?>
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
	background:# !important;
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
    color: #9c6515!important;
    background-color: #ffeba1;
	text-align:center;
	vertical-align: middle!important;
	font-size: 12px;
	
}

.Completed{
	color: #00610f!important;
    background-color: #c6efcf;
	text-align:center;
	vertical-align: middle!important;
	font-size: 12px;
}


.Pending{
	color: #9d030c!important;
    background-color: #ffc7ce;
	text-align:center;
	vertical-align: middle!important;
	font-size: 12px;
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
    font-size: 12px;
    color: #343434;
    vertical-align: middle!important;
	
}
.cmPayroll{
	font-size: 13px;
    font-weight: 600;
    color: #4c3f5e!important;
    padding: 10px 11px!important;
}
.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 0 1.25rem;
}



.swal2-popup {
  max-height: 250px !important;
  max-width: 400px !important;
}
.swal2-icon {
  font-size: 7px !important;
}

.swal2-text {
  max-height: 20px;
}

.swal2-styled {
    margin: 0.3125em;
    padding: 0.25em 1.1em;
    transition: box-shadow .1s;
    box-shadow: 0 0 0 3px transparent;
    font-weight: 500;
}

.swal2-title {
    position: relative;
    max-width: 100%;
    margin: 0;
    padding: 0.2em 0.2em 0;
    color: inherit;
    font-size: .875em;
    font-weight: 600;
    text-align: center;
    text-transform: none;
    word-wrap: break-word;
}

label{
	margin-bottom: 0rem;
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
    /* margin-bottom: 6px; */
    border: 1px solid white !important;
    border-radius: 50%;
    padding: 1px 4px!important;
}

.seoTeamData{
    text-align: center;
    background: #1C304C;
    margin: 25px 300px;
    color: white;
    border: none;
    padding: 6px;
}
.ColorSecondaryPre{
	padding:5px 15px;
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
</style>

 <div id="content-wrapper bg-gradient-primary" class="col-lg-10" style="margin-top:30px; padding-left:20px; margin-bottom:50px;">

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
<div class="col-lg-7"> <i style="font-size: 10px;color: white;" class="fas fa-chevron-right"></i><span class="breadcrumb_text" style="font-size: 15px;color: #fff;"> &nbsp;Designer Team Goals - <span style="font-weight:bold;">view </span></span></div>
<div class="col-lg-4 d-flex " style="justify-content: right;margin-top: 2px;">
<div class="" style="margin-left:5px;font-size: 13px;padding: 0px;">					
<button id="EditKPI" style="border: 1px solid white;"></button>
</div>

<div class="" style="margin-right:-30px;" >
									
									<select class="empInput form-control" name="Year_Id" id="SeoYear_Id" style="border: 1px solid white;background: white;color: #343434;height: calc(0.75em + 0.75rem + 2px);border-left: 2px solid #343434!important;font-size: 12px;padding: 4px;" id="sel1">
											<option value="">Select Year</option>
											
											<?php 
											// echo "<pre>";
											// print_r($teamDesignation);die;
												$curnYear = (!empty($Year_Id))?$Year_Id:5;
											
											 foreach ( $GoalYear as $year )
											{
											$selected_text='';
											if($year->Year_Id == $curnYear)
											$selected_text='selected';
											echo "<option year='".$year->year."' value='".$year->Year_Id."'  $selected_text > ".$year->year."</option>";

											}
											 
											 
											 ?>
											
											</select> 
									</div>

</div>
</div>
										</div>
						
						
						

							
							
							
								
								<div class="card-body pt-4">
								
									
								
								
								
									<div class="table-responsive">
										<table class="table table-bordered table-sm" id="SeodataTable" width="100%" cellspacing="0">
											<thead>
											<tr>
												<th class="cmPayroll">S.No.</th>
												<th class="cmPayroll">Goals List for Web Designer Team</th>
												<th class="cmPayroll">Comment</th>
												<th class="cmPayroll">Status</th>
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
	
	
	
	


	
<div class="modal " id="updateTeamModal" role="dialog">
<div class="modal-dialog modal-lg">
<!-- Modal content-->
	<div class="modal-content" style="margin: 199px 9px 0 80px;  width: 89%!important; ">
	<div class="card-header" style="padding:7px!important; background-color: #1C304C;">
			<div class="">
			<h6 class="ColorPrimary" style="text-align: center;margin-bottom: 0px;">Designer's Goal Edit</h6>
			<button style="/* margin-left:197px; */" type="button" class="close" data-bs-dismiss="modal">×</button>
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
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
	var data = [];
	var DEVELOPERdata = [];
	
	$(document).ready(function(){
	  var YearID = $("#SeoYear_Id option:selected").val();
      SeoYearlyGoal(YearID);
		
  
  
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
			SeoYearlyGoal(yearID);
			alert("Data updated Successfully");
			}
			
		});
  
}); 
  
  




 $("body").on('click', '.TeamGoalsdelete', function(){
     Swal.fire({
  title: 'Are you sure?',
 
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#e74a3b',
  color: '#FFF',
			background: 'darkgray',
  cancelButtonColor: 'rgb(16 50 42)',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    
  

	// var conf = 'Are you sure You have to delete this file';
	
	var id = $(this).attr('data-teamId');
	var Yid = $("#SeoYear_Id option:selected").val();
	// var Yid = $('#goal_YearIdHidden').val();
	var ajaxurl = "<?=site_url('hrzone/CompanyGoals/TeamGoalDeleteById');?>";
        $.ajax({
            type: "get",
            url: ajaxurl,
            data: { id : id},
			success:function(response){
			// alert(response.message);
			SeoYearlyGoal(Yid);
			Swal.fire(
			'Deleted!',
			'Your file has been deleted.',
			'success',
			
			)
		}
			
	});
	
	}
	
	
	})
	
  });
		 
		 
		 
		 
	
	
	
});


						
</script>

<script>
	
$(document).ready(function(){
		
		
    $("#SeoYear_Id").change(function(){
		
		$('#CityPostContainer').html("<div>Loading Post.....</div>");
		
        var YearID = $("#SeoYear_Id option:selected").val();
		SeoYearlyGoal(YearID);
    });
	
	
	
});



function SeoYearlyGoal(YearID){
	var ajaxurl = "<?=site_url('hrzone/CompanyGoals/DesignerGoalPointsByYear');?>";
        $.ajax({
            type: "get",
            url: ajaxurl,
            data: {YearID : YearID},
			dataType: "JSON"
        }).done(function(response){
			
			DEVELOPERdata = response.data;
			if(response){
				$("#SeodataTable tbody").html(`${response.data.map(function(data, index){
					return(`<tr>
					
					<td class="AttFontStatus" style="text-align:center;">${++index}</td>
					<td class="AttFontStatus">${data.seogoal_points}</td>
					<td class="AttFontStatus">${data.seogoal_comments}</td>
					<td class="${data.work_status}">${data.work_status}</td>
					<td class="AttFontStatus">
						<div class=" ">
						<ul class="tnUemp">
						<li class="tnemp"><a href="javascript:void(0)" data-teamId="${data.Seo_Id}" class="TeamGoalsdelete"><i style="color:red;" class="actionFontSize fas fa-trash-alt"></i></a></li>
						<li class="tnemp"><a href="javascript:void(0)" data-seo="${data.Seo_Id}" class="DeveloperTeamEdit"><i style="color:green;" class="actionFontSize fas fa-edit"></i></a></li>
						</ul>

						</div>
					</td>
					
					
					</tr>`)
				})}`);
				
				
				$("#EditKPI").html(`
			${response.YearempID.map(function(YearempIDData){
			return(`	
				
			<a href="<?=site_url('hrzone/CompanyGoals/DesignerGoalsEdit');?>/${YearempIDData}" style="color: #7481a5; text-decoration: none;">Edit</a>
			
			`)
			}).join('')}
			
			
			
			`);
			
			
		}else 
				$("#CompanydataTable tbody").html("<div>No data Found.....</div>");
        });
}
							
</script>



    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

<?php include('footer.php'); ?>