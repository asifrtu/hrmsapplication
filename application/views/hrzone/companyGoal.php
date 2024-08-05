<?php include('header.php'); ?>
<?php include('YearGoalSidebar.php'); ?>
<!-- Content Wrapper -->

<style>
	.fa,
	.fas {
		font-weight: 300;
		font-size: 13px;
	}

	.addGoalsBtn {
		float: right;
		margin-bottom: 5px;
		color: white !important;

		float: center;
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
		text-align: center;
		padding: 2px 0;

	}

	.tnemp a {

		color: #706e80;
		text-align: center;
		padding: 4px 8px;
		text-decoration: none;

	}

	.table-sm td,
	.table-sm th {
		padding: .4rem;
	}

	.tableHeadAR {
		background-color: #504a94;
		padding: .35rem 1.25rem !important;
	}

	thead {
		background: #00d3c3;
	}

	.mar {
		margin: 10px 0;
	}

	.form-control {

		height: calc(1.5em + .5rem + 1px);
		padding: .275rem .5rem;
	}

	.bg-info {
		background-color: #ececec !important;
	}

	.p-2 {
		padding: .1rem !important;
	}

	.sasifb {
		margin-bottom: 10px;
		margin-top: 10px;
	}

	th:first-child {
		width: 10px;
	}

	;

	#empSeoBtn {
		float: center;
		background: #1C304C;
		color: white;
		font-weight: 400;
		border-radius: 2px;
		padding: .2em 3em 0.2em 3em;
		border: none !important;

		margin-bottom: 62px;
		margin-left: 284px;
		margin-top: 20px;

	}

	.modal-body {
		position: relative;
		flex: 1 1 auto;
		padding: 0rem;
	}

	td:last-child {
		width: 75px;
	}

	.actionFontSize {
		font-size: 15px !important;
		color: #00d3c3 !important;
	}


	.empInput {
		overflow: hidden !important;
		font-size: 12px !important;
		color: #000 !important;
	}

	.AttSort {
		height: calc(1em + 0.7rem + 2px);
		padding: 0.2rem 0.5rem;
		font-size: 12px;
	}

	.form-control {
		display: block;
		width: 100%;
		height: calc(.75em + 0.75rem + 1px);
		font-size: 10px !important;
		font-weight: 400;
		line-height: 1.5;
		color: #6e707e;
		background-clip: padding-box;
		border: none;
	}


	.InProgress {
		color: #9c6515 !important;
		background-color: #ffeba1;
		text-align: center;
		vertical-align: middle !important;

	}



	.Completed {
		color: #00610f !important;
		background-color: #c6efcf;
		text-align: center;
		vertical-align: middle !important;
	}


	.Pending {
		color: #9d030c !important;
		background-color: #ffc7ce;
		text-align: center;
		vertical-align: middle !important;
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


	.APemp a:hover {}


	.ColorSecondaryNotes {
		background-color: #ececec;
		padding: .35rem 1.25rem !important;
	}

	.headerAsif {
		padding: 15px 31px 6px 31px;
	}

	.AttFontStatus {
		font-size: 12px;
		color: #343434;
		vertical-align: middle !important;

	}

	.cmPayroll {
		font-size: 13px;
		font-weight: 600;
		background: #00d3c3 !important;
		color: #fff !important;
		padding: 10px 11px !important;
	}


	.card-body {
		flex: 1 1 auto;
		min-height: 1px;
		padding: 0 1.25rem;
	}

	.close {
		float: right;
		font-size: 14px;
		line-height: 1;
		color: #f3f3f3;
		text-shadow: 0 1px 0 #fff;
		opacity: 1 !important;
		margin-top: -20px;
		margin-right: 10px;
		/* margin-bottom: 6px; */
		border: 1px solid white !important;
		border-radius: 50%;
		padding: 1px 4px !important;
	}

	label {
		display: inline-block;
		margin-bottom: 0rem;
		color: #343434;
	}

	.seoUpdateYearData {
		text-align: center;
		background: #1C304C;
		margin: 13px 295px;
		color: white;
		border: none;
		padding: 6px;
		margin-bottom: 30px;
	}

	.ColorSecondaryPre {
		padding: 5px 15px;
	}
</style>

<div id="content-wrapper bg-gradient-primary" class="col-lg-10" style=" margin-bottom:50px;padding-left: 20px;">

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

						<div class="col-lg-1"><a href="<?php echo base_url() ?>index.php/hrzone/dashboard/wall" style="color: white;font-size: 15px;text-decoration: none;"><i class="fa fa-home" aria-hidden="true"></i></a></div>
						<div class="col-lg-7"> <i style="font-size: 10px;color: white;" class="fas fa-chevron-right"></i><span class="breadcrumb_text" style="font-size: 15px;color: #fff;"> &nbsp;Company Yearly Goals - <span style="font-weight:bold;">view </span></span></div>
						<div class="col-lg-4 d-flex " style="justify-content: right;margin-top: 2px;">
							<div class="" style="font-size: 13px;padding: 0px; ">
								<button id="EditKPI" style="border: 1px solid white;"></button>
							</div>
							<div class="" style=" margin-right:-30px; border: 1px solid white;background: white;color: #343434;font-weight: bold;height: calc(0.6em + 0.75rem + 2px);border-left: 2px solid #343434!important;">

								<select class="empInput form-control" name="Year_Id" id="Year_Id" style="" id="sel1">
									<option value="">Select Year</option>

									<?php
									// echo "<pre>";
									// print_r($teamDesignation);die;
									$currentYear = date("Y");
									$curnYear = (!empty($Year_Id)) ? $Year_Id : 6;

									foreach ($GoalYear as $year) {
										$selected_text = '';
										if ($year->Year_Id == $curnYear)
											$selected_text = 'selected';
										echo "<option year='" . $year->year . "' value='" . $year->Year_Id . "'  $selected_text > " . $year->year . "</option>";
									}


									?>

								</select>
							</div>

						</div>

					</div>
				</div>

				<!-- Content Row -->
				<!-- Area Chart -->


				<div class="card-body">



					<div class="d-flex sasifb flex-row-reverse ">

					</div>
					<div class="table-responsive" style="">
						<table class="table table-bordered table-sm" id="CompanydataTable" width="100%">
							<thead>
								<tr>
									<th class="cmPayroll">S.No.</th>
									<th class="cmPayroll">2021 Goals List of the Entire Year</th>
									<th style="width:150px;" class="cmPayroll">Assignee</th>
									<th class="cmPayroll">Comment</th>
									<th style="width:80px;" class="cmPayroll">Status</th>
									<th class="cmPayroll">Action</th>

								</tr>
							</thead>

							<tbody>



							</tbody>
						</table>
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


<!-- Start of Company Goals -->


<div class="modal " id="updateModal" role="dialog">
	<div class="modal-dialog modal-lg">
		<!-- Modal content-->
		<div class="modal-content" style="margin: 199px 9px 0 80px;  width: 89%!important; ">
			<div class="card-header" style="padding:7px!important; background-color: #1C304C;">
				<div class="">
					<h6 class="ColorPrimary" style="text-align: center;margin-bottom: 0px;">Company Yearly Goals Edit</h6>
					<button style="/* margin-left:197px; */" type="button" class="close" data-bs-dismiss="modal">×</button>
				</div>
			</div>

			<div class="modal-body">

				<form class="form-horizontal" action="#">
					<div class="row">
						<div class="col-lg-12">
							<div class="form-group">
								<label>Points</label>
								<input type="text" name="goal_points" id="goal_pointsUpdate" class="empInput form-control" style="border: 1px solid #858796;font-size: 14px!important;padding: 3px 10px;height: calc(1em + 1rem + 1px);">
							</div>
						</div>

						<div class="col-lg-4">
							<div class="form-group">
								<label>Work Status</label>
								<select class="empInput form-control" name="work_status" id="team_work_status" style="border: 1px solid #858796;font-size: 14px!important;padding: 3px 10px;height: calc(1em + 1rem + 1px);" id="sel1">
									<option>Work Status</option>
									<option>Pending</option>
									<option>InProgress</option>
									<option>Completed</option>
								</select>

							</div>
						</div>

						<div class="col-lg-4">
							<div class="form-group">
								<label>Assignee</label>
								<input type="text" name="assignee" id="team_work_assignee" class="empInput form-control" style="border: 1px solid #858796;font-size: 14px!important;padding: 3px 10px;height: calc(1em + 1rem + 1px);">
							</div>
						</div>

						<div class="col-lg-4">
							<div class="form-group">
								<label>Comment</label>
								<input type="text" name="goal_comments" id="goal_commentsUpdate" class="empInput form-control" style="border: 1px solid #858796;font-size: 14px!important;padding: 3px 10px;height: calc(1em + 1rem + 1px);">
							</div>
						</div>



					</div>
				</form>
			</div>
			<button type="button" class="seoUpdateYearData" id="empSeoBtn" style="text-align:center; margin:25px 300px;">Update</button>
			<input type="hidden" name="" id="goal_IdHidden" />
			<input type="hidden" name="" id="goal_YearIdHidden" />

		</div>
		<!-- Content Row -->

	</div>

</div>



<div class="modal " id="updateAssignee" role="dialog">
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
					<div class="row">

						<div class="col-lg-6">
							<div class="form-group">
								<label>Assignee</label>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<input type="text" name="assignee" id="work_assignee" class="empInput form-control" style="border: 1px solid #858796;">
							</div>
						</div>


					</div>
				</form>
			</div>
			<button type="button" class="AssigneeData" id="empSeoBtn" style="text-align:center; margin:25px 300px;">Update</button>
			<input type="hidden" name="" id="goal_IdHidden" />
			<input type="hidden" name="" id="goal_YearIdHidden" />

		</div>
		<!-- Content Row -->

	</div>

</div>



<div class="modal " id="updateComment" role="dialog">
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
					<div class="row">

						<div class="col-lg-6">
							<div class="form-group">
								<label>Comment</label>
							</div>
						</div>

						<div class="col-lg-6">
							<div class="form-group">
								<input type="text" name="goal_comments" id="commentsUpdate" class="empInput form-control" style="border: 1px solid #858796;">
							</div>
						</div>



					</div>
				</form>
			</div>
			<button type="button" class="CommentData" id="empSeoBtn" style="text-align:center; margin:25px 300px;">Update</button>
			<input type="hidden" name="" id="goal_IdHidden" />
			<input type="hidden" name="" id="goal_YearIdHidden" />

		</div>
		<!-- Content Row -->

	</div>

</div>





<div class="modal " id="updateOther" role="dialog">
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
					<div class="row">


						<div class="col-lg-6">
							<div class="form-group">
								<label>Work Status</label>

							</div>
						</div>

						<div class="col-lg-6">
							<div class="form-group">
								<select class="empInput form-control" name="work_status" id="work_status" style="border: 1px solid #858796;" id="sel1">
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
			<button type="button" class="StatusData" id="empSeoBtn" style="text-align:center; margin:25px 300px;">Update</button>
			<input type="hidden" name="" id="goal_IdHidden" />
			<input type="hidden" name="" id="goal_YearIdHidden" />

		</div>
		<!-- Content Row -->

	</div>

</div>







<!-- End of Content Wrapper -->


<!-- End of Page Wrapper -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script>
	var data = [];
	var seodata = [];
	$(document).ready(function() {

		var YearID = $("#Year_Id option:selected").val();
		CompanyYearlyGoal(YearID);

		$("body").on('dblclick', '.AssigneeEdit', function() {

			var id = $(this).attr('data-assigne');

			console.log(data);
			//i => i.goalpoints_Id == id;
			var foundData = data.find(i => i.goalpoints_Id == id);
			// console.log(foundData);
			// var goalpoint = $(this).data(goal_comments);
			// var user = ${response.data.map(function(data))};
			// var user = JSON.stringify(data);
			$('#work_assignee').val(foundData.assignee);
			$('#goal_IdHidden').val(foundData.goalpoints_Id);
			$('#goal_YearIdHidden').val(foundData.Year_Id);
			$("#updateAssignee").modal('show');
		});



		$("body").on('click', '.SeoCompanyEdit', function() {

			var id = $(this).attr('data-yearEdit');

			console.log(data);
			//i => i.goalpoints_Id == id;
			var foundData = data.find(i => i.goalpoints_Id == id);
			console.log(foundData);
			// var goalpoint = $(this).data(goal_comments);
			// var user = ${response.data.map(function(data))};
			// var user = JSON.stringify(data);
			$('#goal_pointsUpdate').val(foundData.goal_points);
			$('#team_work_status').val(foundData.work_status);
			$('#team_work_assignee').val(foundData.assignee);
			$('#goal_commentsUpdate').val(foundData.goal_comments);
			$('#goal_IdHidden').val(foundData.goalpoints_Id);
			$('#goal_YearIdHidden').val(foundData.Year_Id);
			$("#updateModal").modal('show');
		});

		$("body").on('dblclick', '.CommentEdit', function() {

			var id = $(this).attr('data-comments');

			console.log(data);
			//i => i.goalpoints_Id == id;
			var foundData = data.find(i => i.goalpoints_Id == id);
			console.log(foundData);
			// var goalpoint = $(this).data(goal_comments);
			// var user = ${response.data.map(function(data))};
			// var user = JSON.stringify(data);
			$('#commentsUpdate').val(foundData.goal_comments);
			$('#goal_IdHidden').val(foundData.goalpoints_Id);
			$('#goal_YearIdHidden').val(foundData.Year_Id);
			$("#updateComment").modal('show');
		});




		$("body").on('dblclick', '.editStatus', function() {

			var id = $(this).attr('data-dropdown');

			console.log(data);
			//i => i.goalpoints_Id == id;
			var foundData = data.find(i => i.goalpoints_Id == id);
			console.log(foundData);
			// var goalpoint = $(this).data(goal_comments);
			// var user = ${response.data.map(function(data))};
			// var user = JSON.stringify(data);

			$('#work_status').val(foundData.work_status);

			$('#goal_IdHidden').val(foundData.goalpoints_Id);
			$('#goal_YearIdHidden').val(foundData.Year_Id);
			$("#updateOther").modal('show');
		});







		$("body").on('click', '.CompanyData', function() {
			var conf = 'Are you sure You have to delete this file';
			var id = $(this).attr('data-yearD');
			var Yid = $("#Year_Id").val();
			// var Yid = $('#goal_YearIdHidden').val();
			var ajaxurl = "<?= site_url('hrzone/CompanyGoals/companygoalPointsDeleteById'); ?>";
			$.ajax({
					type: "get",
					url: ajaxurl,
					data: {
						id: id
					},
					success: function() {
						CompanyYearlyGoal(Yid);
						alert(conf);
					}

				}

			);

		});








		$("body").on('click', '.seoUpdateYearData', function() {
			// function updateUserRecord(){
			var goal_points = $('#goal_pointsUpdate').val();
			var goal_status = $('#team_work_status').val();
			var goal_assignee = $('#team_work_assignee').val();
			var goal_comments = $('#goal_commentsUpdate').val();
			var goalpoints_Id = $('#goal_IdHidden').val();
			var Yid = $('#goal_YearIdHidden').val();
			// var Yid = $(this).attr('data-yearID');

			$.post("<?= site_url('hrzone/CompanyGoals/companygoalPointsUpdateById'); ?>", {
				goal_points: goal_points,
				goal_status: goal_status,
				goal_assignee: goal_assignee,
				goal_comments: goal_comments,
				goalpoints_Id: goalpoints_Id
			}, function(data, status) {
				$('#updateModal').modal("hide");
				CompanyYearlyGoal(YearID);
				alert("User details updated successfully!");

			});

		});



		$("body").on('click', '.StatusData', function() {
			// function updateUserRecord(){
			var goal_status = $('#work_status').val();

			var goalpoints_Id = $('#goal_IdHidden').val();
			var Yid = $('#goal_YearIdHidden').val();
			// var Yid = $(this).attr('data-yearID');

			$.post("<?= site_url('hrzone/CompanyGoals/companygoalStausUpdateById'); ?>", {
				goal_status: goal_status,
				goalpoints_Id: goalpoints_Id
			}, function(data, status) {
				$('#updateOther').modal("hide");
				CompanyYearlyGoal(YearID);
				alert("User details updated successfully!");

			});

		});


		$("body").on('click', '.CommentData', function() {
			// function updateUserRecord(){
			var goal_comments = $('#commentsUpdate').val();
			var goalpoints_Id = $('#goal_IdHidden').val();
			var Yid = $('#goal_YearIdHidden').val();
			// var Yid = $(this).attr('data-yearID');

			$.post("<?= site_url('hrzone/CompanyGoals/companygoalCommentsUpdateById'); ?>", {
				goal_comments: goal_comments,
				goalpoints_Id: goalpoints_Id
			}, function(data, status) {
				$('#updateComment').modal("hide");
				CompanyYearlyGoal(YearID);
				alert("User details updated successfully!");

			});

		});


		$("body").on('click', '.AssigneeData', function() {
			// function updateUserRecord(){
			var goal_assignee = $('#work_assignee').val();
			var goalpoints_Id = $('#goal_IdHidden').val();
			var Yid = $('#goal_YearIdHidden').val();
			// var Yid = $(this).attr('data-yearID');

			$.post("<?= site_url('hrzone/CompanyGoals/companygoalAsiigneUpdateById'); ?>", {

				goal_assignee: goal_assignee,

				goalpoints_Id: goalpoints_Id
			}, function(data, status) {
				$('#updateAssignee').modal("hide");
				CompanyYearlyGoal(YearID);
				alert("User details updated successfully!");

			});

		});




	});
</script>



<script>
	$(document).ready(function() {


		$("#Year_Id").change(function() {

			$('#CityPostContainer').html("<div>Loading Post.....</div>");

			var YearID = $("#Year_Id option:selected").val();
			CompanyYearlyGoal(YearID);
		});



	});



	function CompanyYearlyGoal(YearID) {
		var ajaxurl = "<?= site_url('hrzone/CompanyGoals/goalPointsByYear'); ?>";
		$.ajax({
			type: "get",
			url: ajaxurl,
			data: {
				YearID: YearID
			},
			dataType: "JSON"
		}).done(function(response) {

			data = response.data;
			if (response) {
				$("#CompanydataTable tbody").html(`
				
				
				${response.data.map(function(data, index){
					return(`<tr>
					
					<td class="AttFontStatus text-center">${++index}</td>
					<td class="AttFontStatus">${data.goal_points}</td>
					<td class="AttFontStatus AssigneeEdit" data-assigne="${data.goalpoints_Id}">${data.assignee}</td>
					<td class="AttFontStatus CommentEdit" data-comments="${data.goalpoints_Id}" style="min-width: 200px!important;">${data.goal_comments}</td>
					<td class="AttFontStatus editStatus ${data.work_status}" data-dropdown="${data.goalpoints_Id}">${data.work_status}</td>
								
					<td>
						<div class=" ">
						<ul class="tnUemp">
						<li class="tnemp"><a href="javascript:void(0)" data-yearD="${data.goalpoints_Id}" class="CompanyData"><i style="color:red;" class="actionFontSize fas fa-trash-alt"></i></a></li>
						<li class="tnemp"><a href="javascript:void(0)" data-yearEdit="${data.goalpoints_Id}" class="SeoCompanyEdit"><i style="color:green;" class="actionFontSize fas fa-edit"></i></a></li>
						</ul>

						</div>
					</td>
					
					
					</tr>`)
				}).join('')}
				
				
				
				`);



				$("#EditKPI").html(`
			${response.YearempID.map(function(YearempIDData){
			return(`	
				
			<a href="<?= site_url('hrzone/CompanyGoals/CompanyGoalsEdit'); ?>/${YearempIDData}" style="color: #000; text-decoration: none;">Edit</a>
			
			`)
			}).join('')}
			
			
			
			`);


			} else {
				$("#CompanydataTable tbody").html("<div>No data Found.....</div>");
			}

		});
	}
</script>




<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>

<?php include('footer.php'); ?>