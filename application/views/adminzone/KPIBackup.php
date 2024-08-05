<?php include('header.php'); ?>
<?php include('goalsSidebar.php'); ?>
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
<style>
body{
    margin-top:20px;
    background:#eee;
}
@media (min-width: 0) {
    .g-mr-15 {
        margin-right: 1.07143rem !important;
    }
}
@media (min-width: 0){
    .g-mt-3 {
        margin-top: 0.21429rem !important;
    }
}

.g-height-50 {
    height: 50px;
}

.g-width-50 {
    width: 50px !important;
}

@media (min-width: 0){
    .g-pa-30 {
        padding: 2.14286rem !important;
    }
}

.g-bg-secondary {
    background-color: #fafafa !important;
}

.u-shadow-v18 {
    box-shadow: 0 5px 10px -6px rgba(0, 0, 0, 0.15);
}

.g-color-gray-dark-v4 {
    color: #777 !important;
}

.g-font-size-12 {
    font-size: 0.85714rem !important;
}

.media-comment {
    margin-top:20px
}


.form-group.fl_icon .icon {
    position: absolute;
    top: 1px;
    left: 16px;
    width: 48px;
    height: 48px;
    background: #f6f6f7;
    color: #b5b8c2;
    text-align: center;
    line-height: 50px;
    -webkit-border-top-left-radius: 2px;
    -webkit-border-bottom-left-radius: 2px;
    -moz-border-radius-topleft: 2px;
    -moz-border-radius-bottomleft: 2px;
    border-top-left-radius: 2px;
    border-bottom-left-radius: 2px;
}

.form-group .form-input {
    font-size: 13px;
    line-height: 50px;
    font-weight: 400;
    color: #b4b7c1;
    width: 100%;
    height: 50px;
    padding-left: 20px;
    padding-right: 20px;
    border: 1px solid #edeff2;
    border-radius: 3px;
}

.form-group.fl_icon .form-input {
    padding-left: 70px;
}

.form-group textarea.form-input {
    height: 150px;
}
.be-comment-block {
    margin-bottom: 50px !important;
    border: 1px solid #edeff2;
    border-radius: 2px;
    padding: 50px 70px;
    border:1px solid #ffffff;
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
                        
						
						
						<div class="ColorSecondaryPre" style="padding: 12px 5px 5px 12px;">
                            <h5 class=" md-4 ColorPrimary" style="font-size:17px;">KPI</h5>
                        </div>
						
						<div class="" >
						<ul class="APUemp ColorSecondaryNotes">
						<li class="APemp"><a href="#" style="font-style: italic;">Here are your KPI.</a></li>
						</ul>


						</div>
						

						
                    <!-- Content Row -->
					  <!-- Area Chart -->
								
							
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
									
									<h5 style="text-align:center; margin:auto; color:#6f42c1; font-weight:500; font-size: 16px;"><?php echo $User->name." "; ?>KPI Goals</h5>
									
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
<div class="container">
    <div class="row">
		<div class="col-md-12">
		<div class="d-flex flex-row add-comment-section mt-4 mb-4"><img class="img-fluid img-responsive rounded-circle mr-2" src="https://i.imgur.com/qdiP4DB.jpg" width="38"><input type="text" name="Comment" id="Comment_Insert" class="form-control mr-3" placeholder="Add comment"><button class="btn btn-primary" type="submit" name="submit" id="CommentSubmit">Comment</button></div>
 
		
		
		
		    <div class="blog-comment">
				<h3 class="text-success">Comments</h3>
                <hr/>
				
				
				
				<?php
				// $tasks[] = array("id" => 7, "parent_id" => 6, "title" => 'sub task of 6');
    $branch = array();

    function buildTree(array $elements, array $branch, $parentId=0) {
        // group elements by parents if it does not comes on the parameters
        if (empty($branch)) {
            $branch = array();

            foreach ($elements as $element) {
				
                $branch[$element["parent_id"]][$element["comment_Id"]] = $element;
            }
        }

        // echo the childs referenced by the parentId parameter
        if (isset($branch[$parentId])) {
            echo'<ul class="comments">';

            foreach ($branch[$parentId] as $keyBranch => $itemBranch) {
				echo '<li class="clearfix">
				
				<div class="media g-mb-30 media-comment">
            <img class="d-flex g-width-50 g-height-50 rounded-circle g-mt-3 g-mr-15" src="'.base_url('/upload/UserProfileImage/').$itemBranch["EmpProfileImage"].'" alt="Image Description">
            <div class="media-body u-shadow-v18 g-bg-secondary g-pa-30">
              <div class="g-mb-15">
                <h5 class="h5 g-color-gray-dark-v1 mb-0">'.$itemBranch['name'].'</h5>
                <span class="g-color-gray-dark-v4 g-font-size-12">5 days ago</span>
              </div>
        
              <p>'.$itemBranch['Comment'].'</p>
        
              <ul class="list-inline d-sm-flex my-0">
                <li class="list-inline-item g-mr-20">
                  <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                    <i class="fa fa-thumbs-up g-pos-rel g-top-1 g-mr-3"></i>
                    178
                  </a>
                </li>
                <li class="list-inline-item g-mr-20">
                  <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                    <i class="fa fa-thumbs-down g-pos-rel g-top-1 g-mr-3"></i>
                    34
                  </a>
                </li>
                <li class="list-inline-item ml-auto">
                  <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="javascript:void(0)" data-CommentId="'.$itemBranch["comment_Id"].'" id="CommentReply">
                    <i class="fa fa-reply g-pos-rel g-top-1 g-mr-3"></i>
                    Reply
                  </a>
                </li>
              </ul>
            </div>
        </div>';
				buildTree($elements, $branch, $itemBranch["comment_Id"]); // iterate with the actual Id to check if this record have childs
				echo '</li>';
            }
            echo '</ul>';
        }
    }

   
 echo buildTree($elements, array());
				
				?>
				
			</div>
			
			
		</div>
		
		
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
  

	
<div class="modal " id="CommentModel" role="dialog">
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
			<label>Comment</label>
			
			<input type="text" name="Comment" id="Comment_Insert" class="form-control mr-3" placeholder="Add comment">
			</div>
			</div>
			
			
			</div>
		</form>
	</div>
        <button type="button" class="ReplyCommentData" id="empSeoBtn" style="text-align:center; margin:25px 300px;">Update</button>
		<input type="hidden" name="" id="Comment_IdHidden"/>
		<input type="hidden" name="" id="UserIdHidden"/>
	
	</div>
<!-- Content Row -->

</div>

</div>
  

	
	
    <!-- End of Page Wrapper -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script>




$(document).ready(function(){
		
	$("body").on('click', '#CommentSubmit', function(){
	var Comment_Add = $('#Comment_Insert').val();
	var ajaxurl = "<?=site_url('adminzone/Comment/CommentAdd');?>";
        $.ajax({
            type: "post",
            url: ajaxurl,
            data: {Comment_Add:Comment_Add},
			dataType: "JSON",
			success:function(data){
			alert("Data Inserted Successfully");
			}
			
		});
  
}); 


$("body").on('click', '#ReplyCommentData', function(){
	var Comment_User = $('#Comment_Insert').val();
	var Comment_Id = $('#Comment_IdHidden').val();
	var ajaxurl = "<?=site_url('adminzone/Comment/CommentAdd');?>";
        $.ajax({
            type: "post",
            url: ajaxurl,
            data: {Comment_User:Comment_User, Comment_Id:Comment_Id},
			dataType: "JSON",
			success:function(data){
			alert("Data Inserted Successfully");
			$("#CommentModel").modal('hide');
			}
			
		});
  
}); 


		
		
		
$("body").on('click', '#CommentReply', function(){

	var id = $(this).attr('data-CommentId');

	$('#Comment_IdHidden').val(id);
	$("#CommentModel").modal('show');
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
  
		
	
function CommentSystem(){
	var ajaxurl = "<?=site_url('adminzone/Comment/AllComment');?>";
        $.ajax({
            type: "get",
            url: ajaxurl,
			dataType: "JSON"
        }).done(function(response){
			if(response)
				$("#dataTable tbody").html(`${response.data.map(function(data, index){
					return(`<tr>
					
					
					<td class="AttFontStatus">${data.kpiGoal_Points}</td>
					<td class="AttFontStatus">${data.kpi_marks}</td>
					<td class="AttFontStatus">${data.kpiGoal_Comments}</td>
					<td class="AttFontStatus">${data.afterKpi_marks}</td>
					
					
					
					</tr>`)
				})}`);
            else 
				$("#CompanydataTable tbody").html("<div>No data Found.....</div>");
        });
}



	
		
		
		
	
	
});






							
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
					<td class="AttFontStatus">${data.kpiGoal_Points}</td>
					<td class="AttFontStatus">${data.kpi_marks}</td>
					<td class="AttFontStatus">${data.kpiGoal_Comments}</td>
					<td class="AttFontStatus">${data.afterKpi_marks}</td>
					
					
					
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