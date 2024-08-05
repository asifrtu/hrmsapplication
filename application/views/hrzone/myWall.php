<?php include('header.php'); ?>

<?php include('sidebar.php'); ?>
<style>
	#welcomeDashboard {



		border-bottom: 16px solid #344d63;
	}

	.adminTitle {
		text-align: center;
		color: white;
	}

	#dashboardClock {
		color: white !important;
		padding: 13px;

	}

	.addempbtn a {
		display: block;
		color: white;

		text-decoration: none;
	}

	.addEmpBtn {
		float: center;
		background: #7db135;
		color: white;
		font-weight: 400;
		border-radius: 2px;
		padding: .2em 0.5em 0.2em 0.5em;
		border: none !important;
		margin-top: 20px;
		margin-left: 55px;
	}

	.timeDas {
		border-bottom: 1px solid #6f42c1;
		padding-bottom: 0.3rem !important;
		background-color: #514b95 !important;
		border-radius: 5px;
		padding-top: 16px;
	}

	.myWallInput {
		padding: 1.5rem .75rem;
		border-radius: 5px;

		display: block;
		width: 100%;
		height: calc(1.5em + .75rem + 2px);

		font-size: 1rem;
		font-weight: 400;
		line-height: 1.5;
		color: #6e707e;
		background-color: #fff;
		background-clip: padding-box;
		border-bottom: none !important;
	}


	.AR {
		color: white;
	}


	.AR2 {
		background-color: #1c304c;
	}

	.AR12 {
		background-color: #514b95;
	}

	.AR3 {
		background-color: white;
	}


	.MAR-12 {
		padding: 12px 5px 10px 5px !important;
		border-radius: 4px 0 0 4px;

	}

	.MAR-2 {
		padding: 12px 303px 10px 5px !important;
		border-radius: 4px 4px 0 4px;

	}


	.AppraisalBtn {
		float: right;
		margin-bottom: 5px;
		color: white !important;
		margin-right: 176px;
		float: center;
		background: #3d3780;

		font-weight: 400;
		border-radius: 2px;
		padding: .2em 2em 0.2em 2em;
		border: none !important;
	}

	.MAR-3 {

		border-bottom: 5px solid #344d63;
	}

	.MAR-8 {
		padding: 4px !important;
	}

	.MAR-7 {
		padding-left: 13px !important;
	}

	.MAR-4 {
		padding-left: 288px !important; border-radius: 0px 4px 4px 0;
	}

	.MAR-5 {
		padding-left: 492px !important;
	}

	.MAR-6 {
		padding-left: 503px !important;
	}

	.MAR-12 {
		padding-left: 23px !important;
	}

	.MAR-11 {
		padding: .5rem !important;
	}

	.form-control {
		display: block;
		width: 100%;
		height: calc(1.5em + 1.2rem + 2px) !important;
		padding: 0.75rem 0.75rem;
		font-size: 1rem;
		font-weight: 400;
		line-height: 1.5;
		color: #6e707e;
		background-color: #fff;
		background-clip: padding-box;
		border: none;
		border-radius: 2px 2px 2px 2px;
		border-bottom: none;
		overflow: hidden;
		margin-bottom: 4px;
	}

	.bs-tooltip-auto[x-placement^=top] .arrow::before,
	.bs-tooltip-top .arrow::before {
		top: 0;
		border-width: 1.4rem 0.4rem 0;
		border-top-color: #f00f17;
	}

	.tooltip .arrow {
		position: absolute;
		display: block;
		transform: rotate(20deg);
		width: 0.8rem;
		height: 0.8rem;
	}

	.tooltip-inner {
		max-width: 200px;
		font-size: 20px;
		color: rgb(255, 255, 255);
		text-align: center;
		background-color: red;
		padding: 14px 21px;
		border-radius: 32px;
	}


	.arrow {
		left: 10px !important;
	}



	.clearfix {
		list-style: none;
	}

	.card-body {
		flex: 1 1 auto;
		min-height: 1px;
		padding: 0 0 0 0 !important;

	}

	.AR102 {
		background: white;
	}



	.sidebarWallScroll {
		width: auto;
		height: 372px;
		overflow: auto;
		overflow-y: auto;

		border-radius: 0 0px 0px 0;
	}

	.style-18::-webkit-scrollbar-track {
		border: 5px solid #1c304c;
		background-color: white;
	}

	.style-18::-webkit-scrollbar {
		width: 7px;
		background-color: white;

	}

	.style-18::-webkit-scrollbar-thumb {
		background-color: white;
	}

	.WallDate {
		padding: 17px 0px 12px 0px !important;
	}

	@media (min-width: 768px) {
		.WallDate {
			padding: 18px 0px 16px 0px;
		}
	}



	.tnUemp {
		list-style-type: none;
		padding: 0;
		overflow: hidden;
		margin-top: -4px;
		margin-left: 6px;

	}

	.tnemp {
		float: left;
		text-align: center;
		padding: 2px 0;
		list-style: none;

	}

	.tnemp a {

		color: #706e80;
		text-align: center;
		padding: 0px 4px;
		text-decoration: none;

	}

	.list-group {
		display: flex;
		flex-direction: column;
		padding-left: 0;
		margin-bottom: 0;
		border-radius: 2px;
	}

	.list-group-item {
		position: relative;
		font-size: 13px;
		display: block;
		padding: 0.3rem 0.025rem;
		background-color: #fff;
		border-BOTTOM: 1px solid #ddd8d8 !important;
		BORDER: NONE;
	}

	.notifySideBdr {
		border: 1px solid #1c304c !important;
		background-color: #1c304c !important;
	}

	.faviconCustomise {
		border-bottom: 1px solid #344d63 !important;
		border: none;
	}

	.faviconCustomise:hover {
		background: #00d3c3;

	}

	.faviconCustomise:hover>a>.infobox>i {
		color: white !important;
	}

	.shadow {
		box-shadow: 0px 0px 5px 2px rgb(114 116 138 / 39%) !important;
	}

	.gfColor {
		color: #00d3c3;

	}

	.info-box-text {
		color: #343434;
	}

	.form-control:focus {
		color: #343434;
		background-color: #fff;
		border-color: #601fb454 !important;
		outline: 0;
		box-shadow: none;
	}

	.hola {
		display: flex;
		padding: 0px !important;
		align-items: center;
		justify-content: center;
	}

	.gap {
		padding: 0px !important;
	}

	.buttons {
		padding: 33px 10px;
		outline: 1px solid #344d63;
		background: #1c304c;
		cursor: pointer;
	}

	.gap a {
		text-decoration: none;
	}

	.buttons i {
		position: relative;
	}

	.buttons p {
		margin-bottom: 0px;
		color: #fff;
		font-size: 15px;
		margin-top: 10px;
	}

	.shortcut {

		padding-left: 0px;
		text-align: center;
	}


	.buttons:hover {
		background: #00d3c3;
		color: white;
		outline: 1px solid rgb(218, 218, 218);
	}

	.buttonNotification {
		background-color: #00d3c3;
		border-radius: 54%;
		color: white;
		font-size: 11px;
		padding: 10px 4px;
		text-align: center;
		position: absolute;
		height: 22px;
		width: 23px;
		top: -6px;
		left: 19px;
		font-weight: normal;
		border: 2px solid white;
	}

	.buttons:hover .copy_of_edit {
		color: #fff;
	}

	.buttons:hover p {
		margin-bottom: 0px;
		color: #fff;
	}

	.buttons:hover .fa-envelope {
		color: #fff;
	}

	.buttons:hover .fa-birthday-cake {
		color: #fff;
	}

	.buttons:hover .fa-calendar-alt {
		color: #fff;
	}

	.buttons:hover .copy_of_bell {
		color: #fff;
	}

	.buttons:hover .fa-bullhorn {
		color: #fff;
	}

	.buttons:hover .fa-clipboard-list {
		color: #fff;
	}

	.buttons:hover .fa-folder-open {
		color: #fff;
	}

	.buttons:hover .fa-tasks {
		color: #fff;
	}

	.buttons:hover .fa-users {
		color: #fff;
	}

	.buttons:hover .fa-copy {
		color: #fff;
	}

	.buttons:hover .fa-edit {
		color: #fff;
	}



	.fa-envelope {

		font-size: 30px;
		color: #00d3c3;

	}

	.fa-birthday-cake {
		font-size: 30px;
		color: #00d3c3;
	}

	.fa-calendar-alt {
		font-size: 30px;
		color: #00d3c3;
	}

	.copy_of_bell {

		font-size: 30px;
		color: #00d3c3;
	}

	.fa-bullhorn {
		font-size: 30px;
		color: #00d3c3;
	}

	.fa-clipboard-list {
		font-size: 30px;
		color: #00d3c3;
	}

	.fa-folder-open {

		font-size: 30px;
		color: #00d3c3;
	}

	.fa-tasks {
		font-size: 30px;
		color: #00d3c3;
	}

	.fa-users {
		font-size: 30px;
		color: #00d3c3;
	}

	.fa-copy {
		font-size: 30px;
		color: #00d3c3;
	}

	.copy_of_edit {
		color: #00d3c3;
		font-size: 30px;
	}

	.close {
		float: right;
		font-size: 14px;
		line-height: 1;
		color: #f3f3f3;
		text-shadow: 0 1px 0 #fff;
		opacity: 1 !important;
		margin-top: -26px;
		margin-right: 10px;
		margin-bottom: 6px;
		border: 1px solid white !important;
		border-radius: 50%;
		padding: 1px 4px !important;
	}

	.modal-dialog {
		width: 525px;
	}

	.emoji_keyboard {

		height: 280px !important;
	}

	.ColorPrimary {
		color: white;
		margin-bottom: 7px;
		font-size: 14px;
		margin-top: 10px;
	}

	.emojionearea .emojionearea-editor {
		min-height: 100% !important;
		padding: 0px !important;
	}


	.emojionearea .emojionearea-picker .emojionearea-wrapper {
		height: 278px !important;

	}

	.modal-content {
		border: none !important;
		background-color: #ffffff !important;
	}

	.modal-body {
		background: #fff;
		padding: 0px !important;
	}

	.mb-2 {
		margin-bottom: 0.2rem !important;
	}


	.notice_comment {
		padding-right: 1rem !important;
		padding-left: 1rem !important;
	}

	.close:hover {
		color: #b9b9b9;
		text-decoration: none;
		border-color: #b9b9b9 !important;
	}

	.tnemp_date {
		color: #343434;
		font-size: 13px;
		font-weight: 600;
		margin-top: 20px;
		margin-bottom: 8px;
		list-style: none;
		text-align: center;
	}
	@media (min-width: 992px){
	.tm-col {
		padding-left: 0rem!important; margin-bottom: 0rem!important;
	}
	.tm-9 {
		padding-right: 0rem!important; padding-left: 0rem!important; margin-bottom: 0rem!important;
	}
	.commentBox {
		outline: 1px solid #344d63;margin-left: 10px;
	}
	.WallDateforUser{    
		padding: 12px 0px 12px 0px !important;
    	width: 300px;
	}
	.userNameSpan {
		color: #00d3c3;
    padding: 0 5px;
    font-size: 20px;
	}
	.onlyDisplaySm {
		display: none!important;
	}
	}
	@media (max-width: 772px){
	.tm-col {
		padding-right: 0rem!important; padding-left: 0rem!important;
	}
	.tm-9 {
		padding-right: 0rem!important; padding-left: 0rem!important;
	}
	.commentBox {
		outline: 1px solid #344d63;
	}
	.col-mb-sm {
		margin-top: 20px;
	}
	.userNameSpan {
	color: #00d3c3;
    font-size: 16px;
    font-weight: 600;
    padding: 10px;
    font-family: 'proxima_novaregular';
	}
	.WallDateforUser{    
		padding: 12px 0px 12px 0px !important;
    	width: 182px;
	}
	
	}

	
</style>

<!-- Page Wrapper -->


<!-- Content Wrapper -->
<div id="content-wrapper bg-gradient-primary" class="container-fluid" style="margin-top:40px;">

	<!-- Main Content -->
	<div id="content">









		<!-- Topbar -->

		<!-- End of Topbar -->

		<!-- Begin Page Content -->
		<div class="">

			<!-- Page Heading -->


			<!-- Content Row -->






			<!-- Content Row -->

			<div class="" style="margin-bottom:50px;">


				<div id="welcomeDashboard">



					<div class="row">

						<!-- Content Column -->
						<div class="col-lg-6 mb-4 tm-col">

							<div class="d-flex" style="outline: 1px solid #344d63;">
								
								<div class="flex-fill AR2 WallDateforUser"><span class="userNameSpan"><?php if(!empty($this->session->userData('auth')['name']))
                                $str = explode(' ', $this->session->userData('auth')['name']);
								echo strtoupper($str[0]);
                         ?> Hello!</span></div>
								
								<div class="flex-fill AR2 WallDate displayNoneContent"><span style="color: white;"><?php date_default_timezone_set("Asia/Calcutta");
								echo date("h:i A | l, d M Y") . "\n"; ?></span></div>
								<div class="flex-fill AR2 WallDate onlyDisplaySm"><span style="color: white;"><?php date_default_timezone_set("Asia/Calcutta");
								echo date("h:i A | l") . "\n"; ?></span></div>
								
								

							</div>
						</div>
						<div class="col-lg-6 mb-4 tm-9 displayNoneContent">

							<div class="d-flex commentBox">

								<div class="flex-fill AR102"><textarea type="text" id="CreateCommentModal" class="form-control  mr-3" rows="1" placeholder="What's on your mind..."></textarea></div>


							</div>
						</div>
					</div>







				</div>
				<div class="row ">

					<!-- Area Chart -->
					<div class="col-lg-6" style=" padding-left: 0rem!important; padding-right: 0rem!important;">
						<!-- Card Header - Dropdown -->
						<div class="shortcut col-md-12 ">
							<div class="container col-md-12 hola">
								<div class=" col-lg-4 col-md-4  gap">
									<a href="">
										<div class="buttons ">
											<i class="far fa-envelope"><sub class="buttonNotification"></sub></i>
											<p>Message</p>
										</div>
									</a>
								</div>

								<div class="gap col-lg-4 col-md-4">
									<a href="<?php echo base_url() ?>index.php/hrzone/Employee/EmployeeBirthday">
										<div class=" buttons ">
											<i class="fas fa-birthday-cake ">


											</i>
											<p>Birthday</p>

										</div>
									</a>

								</div>
								<div class="gap col-lg-4 col-md-4">
									<a href="<?php echo base_url() ?>index.php/hrzone/Attendance/HrAttendance">
										<div class=" buttons ">
											<i class="far fa-calendar-alt"></i>
											<p>Calendar</p>
										</div>
									</a>
								</div>
							</div>

							<div class="container col-md-12 hola">
								<div class="gap col-lg-4">
									<a href="<?php echo base_url() ?>index.php/hrzone/Comment/Notification">
										<div class=" buttons">
											<i class="far fa-bell copy_of_bell"></i>
											<p>Notification</p>
										</div>
									</a>
								</div>
								<div class="gap col-lg-4">
									<a href="">
										<div class=" buttons ">
											<i class="fas fa-bullhorn"></i>
											<p>Announcement</p>
										</div>
									</a>
								</div>
								<div class="gap col-lg-4">
									<a href="<?php echo base_url() ?>index.php/hrzone/Ticket/EmpTicket">
										<div class=" buttons">
											<i class="far fa-copy"><sub class="buttonNotification"></sub></i>
											<p>Tickets</p>
										</div>
									</a>
								</div>
							</div>
							<div class="container col-md-12 hola">
								<div class="gap col-lg-4">
									<a href="">
										<div class=" buttons">
											<i class="far fa-edit copy_of_edit"></i>
											<p>Notes</p>
										</div>
									</a>
								</div>
								<div class="gap col-lg-4">
									<a href="<?php echo base_url() ?>index.php/hrzone/CalenderHR">
										<div class=" buttons ">
											<i class="fas fa-tasks gfColor"></i>
											<p>Events</p>
										</div>
									</a>
								</div>
								<div class="gap col-lg-4">
									<a href="">
										<div class=" buttons">
											<i class="fas fa-users gfColor"></i>
											<p>Meeting</p>
										</div>
									</a>
								</div>
							</div>


						</div>



					</div>
					<!-- /.container-fluid -->


					<div class="col-lg-6 col-mb-sm" style="border-left: 10px solid #344d63;padding-right: 0rem!important; padding-left: 0rem!important;">
						<div class="card-body notifySideBdr sidebarWallScroll style-18">



							<div class="row">
								<div class="blog-comment">

									<ul class="comments" id="htmlRenderComment" style="padding-left: 0;">
									</ul>


									<ul class="comments" style="padding-left: 0;">
										<li class="clearfix">

											<div class="media g-mb-30 media-comment">

												<div class="media-body u-shadow-v18 g-bg-secondary g-pa-30" style="padding: 10px; margin-top: 20px;">

													<div class="d-flex  g-mb-15" style="JUSTIFY-CONTENT: SPACE-BETWEEN;font-size: 20px;color: #ffffff !important;font-weight: 700;text-shadow: solis 1px;text-shadow: 2px 2px #8823b9;font-size: 20px;">
														<!--<img src="<?php echo base_url() ?>upload/UserProfileImage/cake_img.jpg" alt="" />--->



													</div>
												</div>

										</li>
									</ul>
								</div>

							</div>






						</div>


					</div>

				</div>
			</div>
			<!-- End of Main Content -->

			<!-- Footer -->

		</div>
		<!-- End of Content Wrapper -->

	</div>
	<!-- End of Page Wrapper -->
	<div class="modal " id="myModal" role="dialog">
		<div class="modal-dialog modal-lg" style="margin-right: 526px; margin-top: 100px;">



			<!-- Modal content-->
			<div class="modal-content" style=" width: 73%!important; ">


				<div class="card-header" style="padding:0!important; background-color: #2e2869;">

					<div class="row">
						<h6 class="ColorPrimary" style="padding-left: 232px; padding-top: 10px;">Profile Image Upload</h6>
						<button style="margin-left:140px;" type="button" class="close" data-bs-dismiss="modal">&times;</button>
					</div>
				</div>

				<div class="modal-body">

					<form id="Image-form">

						<div class="col-lg-12">
							<div class="row">
								<div class="col-lg-5">
									<div class="form-group">
										<label>Profile Image Upload</label>
									</div>
								</div>
								<div class="col-lg-7">
									<div class="form-group">
										<input type="file" class="empInput form-control" name="EmpProfileImage[]" style="border: 1px solid #858796;">
									</div>
								</div>




							</div>
						</div>
						<button type="button" class="empBtn" id="btnUploadPage" style="text-align:center; margin:15px 244px;">Submit</button>
						<input type="hidden" name="frmUserId" value="">

					</form>
				</div>
			</div>




			<!-- Content Row -->




		</div>

	</div>



	<div class="modal " id="commentModal" role="dialog">
		<div class="modal-dialog modal-lg">
			<!-- Modal content-->
			<div class="modal-content" style="margin: 164px 0px 0px -28px;width: 110%!important;">
				<div class="card-header" style="padding:0!important; background-color: #601fb4;">
					<div class="">
						<h6 class="ColorPrimary" style="text-align: center;">Create Post</h6>
						<button style="/* margin-left:197px; */" type="button" class="close" data-bs-dismiss="modal">×</button>
					</div>
				</div>

				<div class="modal-body" style="padding-bottom: 0px;">

					<form class="form-horizontal" action="#">

						<div class="row">

							<div class="col-lg-12 mt-3 mb-2 notice_comment ">
								<div class="form-group m-0 ">
									<textarea type="text" name="Comment" id="textarea" class="empInput emoji_keyboard form-control" style="border: 1px solid #858796;"></textarea>
								</div>
							</div>


						</div>
					</form>
					<button type="button" class="" id="CommentSubmit" style="text-align:center;width: 96%;margin-left: 12px!important;border-radius: 2px;margin-top: 8px;outline: none;border: 0px;background: #00d3c3;padding: 8px;color: white;margin-bottom: 17px;font-size: 14px;">Post</button> <input type="hidden" name="" id="goal_YearIdHidden" />

				</div>
			</div>
		</div>
	</div>
	<!-- Content Row -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.js"> </script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.css">

	<script>
		$('#textarea').emojioneArea({
			pickerPosition: 'bottom',
			shortnames: true,
			hideSource: true,
			autocomplete: true,


		})
	</script>



	<div class="modal " id="updateCommentModal" role="dialog">
		<div class="modal-dialog modal-lg">
			<!-- Modal content-->
			<div class="modal-content" style="margin: 199px 9px 0 80px;  width: 89%!important; ">
				<div class="card-header" style="padding:0!important; background-color: #601fb4;">
					<div class="">
						<h6 class="ColorPrimary" style="text-align: center;">Comment Edit</h6>
						<button style="/* margin-left:197px; */" type="button" class="close" data-bs-dismiss="modal">×</button>
					</div>
				</div>

				<div class="modal-body">

					<form class="form-horizontal" action="">

						<div class="row" style="display: inline;">
							<div class="col-lg-2">
								<div class="form-group" style="margin-bottom: -1rem;">
									<label style="color: #4c3f5e !important;">Comment</label>
								</div>
							</div>

							<div class="col-lg-12">
								<div class="form-group">
									<input type="text" name="Comment" id="Edit_Comment" class="empInput form-control" style="border: 1px solid #aa7ee4;width: 100p;height: 100px!important;">
								</div>
							</div>


						</div>
					</form>
				</div>
				<button type="button" class="commentData" id="empSeoBtn" style="text-align:center;margin: 0px 14px;margin-bottom: 20px;border: 0px;color: white;background: #00d3c3;padding: 5px;border-radius: 3px;">Update</button>
				<input type="hidden" name="" id="Comment_Id" />
				<input type="hidden" name="" id="goal_YearIdHidden" />

			</div>
			<!-- Content Row -->

		</div>

	</div>


	<div class="modal " id="updateEventModal" role="dialog">
		<div class="modal-dialog modal-lg">
			<!-- Modal content-->
			<div class="modal-content" style="margin: 199px 9px 0 80px;  width: 89%!important; ">
				<div class="card-header" style="padding:0!important; background-color: #601fb4;">
					<div class="">
						<h6 class="ColorPrimary" style="text-align: center;">Event Edit</h6>
						<button style="/* margin-left:197px; */" type="button" class="close" data-bs-dismiss="modal">×</button>
					</div>
				</div>

				<div class="modal-body">

					<form class="form-horizontal" action="#">

						<div class="row">
							<div class="col-lg-2">
								<div class="form-group">
									<label>Title</label>
								</div>
							</div>

							<div class="col-lg-10">
								<div class="form-group">
									<input type="text" name="title" id="Edit_Event" class="empInput form-control" style="border: 1px solid #858796;">
								</div>
							</div>


						</div>
						<div class="row">
							<div class="col-lg-2">
								<div class="form-group">
									<label>description</label>
								</div>
							</div>

							<div class="col-lg-10">
								<div class="form-group">
									<input type="text" name="title" id="Edit_descp" class="empInput form-control" style="border: 1px solid #858796;">
								</div>
							</div>

							<div class="col-lg-10">
								<div class="form-group">
									<label>Share</label>
									<select id="frameworkUpdate" data-live-search="true" data-selected-text-format="count" name="frameworkUpdate[]" multiple="" class="selectpicker">
										<option value=""></option>
										<option value=""></option>
										<option value=""></option>
										<option value=""></option>
										<option value=""></option>
										<option value=""></option>
										<option value=""></option>
										<option value=""></option>
										<option value=""></option>
										<option value=""></option>
										<option value=""></option>
										<option value=""></option>
										<option value=""></option>
										<option value=""></option>
										<option value=""></option>
										<option value=""></option>
									</select>
								</div>

							</div>

						</div>
					</form>
				</div>
				<button type="button" class="EventData" id="empSeoBtn" style="text-align:center; margin:25px 150px;">Update</button>
				<input type="hidden" name="" id="Comment_Id" />
				<input type="hidden" name="" id="goal_YearIdHidden" />

			</div>
			<!-- Content Row -->

		</div>

	</div>


	<div class="modal " id="taggedUserModal" role="dialog">
		<div class="modal-dialog modal-sm">
			<!-- Modal content-->
			<div class="modal-content" style="margin: 269px 9px 0 574px;width: 60%!important;text-align: center; ">


				<div class="modal-body" id="htmlTaggedPerson" style="padding: 0rem;">



				</div>
				<!-- Content Row -->

			</div>

		</div>



		<!-- Scroll to Top Button-->

		<script>



		</script>

		


		<script>
			var datacomment = [];
			var dataEvents = [];


			$(document).ready(function() {



				var YearID = 2021;
				CommentSystem(YearID);
				$('[data-toggle="tooltip"]').tooltip("show");


				$("#btnUploadPage").click(function() {

					let frm = $("#Image-form")[0];
					let frmDt = new FormData(frm);


					$.ajax({
						type: "post",
						url: "<?= site_url('hrzone/Employee/singleFileAdminUpload'); ?>",
						data: frmDt,
						dataType: "json",
						cache: false,
						contentType: false,
						processData: false,
						beforeSend: () => {
							$("#btnUploadPage").text("Uploading....");
							$("btnUploadPage").attr("disabled", true);
						},

						complete: () => {
							$("#btnUploadPage").text("Upload");
							$("#btnUploadPage").attr("disabled", false);
						},

						success: response => {

							if (response.status === 1) {
								$("#myModal").hide('modal');
								location.reload();
							}
						},
						error: error => {
							console.log("Error", error);
						}
					});
				});










				$("body").on('click', '#CreateCommentModal', function() {


					$("#commentModal").modal('show');


				});

				$("body").on('click', '#CommentSubmit', function() {


					$("#commentModal").modal('hide');



				});





				$("body").on('click', '#CommentSubmit', function() {

					var Comment_Add = $('#textarea').val();


					var ajaxurl = "<?= site_url('hrzone/Comment/WallCommentAdd'); ?>";
					$.ajax({
						type: "post",
						url: ajaxurl,
						data: {
							Comment_Add: Comment_Add
						},
						dataType: "JSON",
						success: function(data) {
							alert("Data Inserted Successfully");
							$('#textarea').val('');
							CommentSystem(YearID);
						}

					});


				});











				$("body").on('click', '.tagUser', function() {
					var id = $(this).attr('data-tagUser');
					var ajaxurl = "<?= site_url('hrzone/Comment/TagUser'); ?>";
					$.ajax({
						type: "get",
						url: ajaxurl,
						data: {
							id: id
						},
						dataType: "JSON"
					}).done(function(response) {
						if (response) {
							$("#htmlTaggedPerson").html(`
					
			${response.dataEvent.map(function(dataEvent, index){
					return(`
					
							<ul class="list-group">
							${dataEvent.eventUrl.map(function(dataeventUrl, index){
					return(`
							
							<li class="list-group-item">${dataeventUrl.name}</li>
							
							`)}).join('')}
  
							</ul>
								
							`)}).join('')}
							
			
					`);


							$("#taggedUserModal").modal('show');
						} else {
							$("#CompanydataTable tbody").html("<div>No data Found.....</div>");
						}

					});







				});


				$("body").on('click', '.commentEdit', function() {

					$("#updateCommentModal").modal('show');


				});


				$("body").on('click', '.commentEdit', function() {


					var id = $(this).attr('data-commentEdit');

					console.log(id);
					var foundData = datacomment.find(i => i.comment_Id == id);

					console.log(foundData);
					// var goalpoint = $(this).data(goal_comments);
					// var user = ${response.data.map(function(data))};
					// var user = JSON.stringify(data);
					$('#Edit_Comment').val(foundData.CommentUser);

					$('#Comment_Id').val(foundData.comment_Id);


					$("#updateCommentModal").modal('show');

				});


				$("body").on('click', '.commentData', function() {
					// function updateUserRecord(){
					var AdComment = $('#Edit_Comment').val();

					var AdComment_Id = $('#Comment_Id').val();

					// var Yid = $(this).attr('data-yearID');
					var ajaxurl = "<?= site_url('hrzone/Comment/UpdateWallComment'); ?>";
					$.ajax({
						type: "post",
						url: ajaxurl,
						data: {
							AdComment: AdComment,
							AdComment_Id: AdComment_Id
						},
						dataType: "JSON",
						success: function(data) {
							$('#updateCommentModal').modal("hide");

							CommentSystem(YearID);
							alert("Data updated Successfully");
						}

					});

				});




				$("body").on('click', '.commentDel', function() {
					// function updateUserRecord(){
					var ans = confirm('Are you sure you want to delete this item?');
					if (!ans) {

					} else {
						var id = $(this).attr('data-commentDel');

						// var Yid = $(this).attr('data-yearID');
						var ajaxurl = "<?= site_url('hrzone/Comment/DeleteWallComment'); ?>";
						$.ajax({
							type: "post",
							url: ajaxurl,
							data: {
								id: id
							},
							dataType: "JSON",
							success: function(data) {

								CommentSystem(YearID);


							}

						});
					}
				});



				// There is the Event related update and delete!!!!!!!!!!!!!!!!




				$("body").on('click', '.EventEdit', function() {

					var id = $(this).attr('data-EventEdit');
					console.log(id);

					var foundData = dataEvents.find(i => i.Id == id);
					console.log(foundData.title);

					// var goalpoint = $(this).data(goal_comments);
					// var user = ${response.data.map(function(data))};
					// var user = JSON.stringify(data);
					$('#Edit_Event').val(foundData.title);

					$('#Comment_Id').val(foundData.Id);

					$("#updateEventModal").modal('show');

				});







				$("body").on('click', '.EventData', function() {
					// function updateUserRecord(){
					var AdComment = $('#Edit_Event').val();
					alert('edit');
					var AdDesc = $('#Edit_descp').val();


					var AdComment_Id = $('#Comment_Id').val();

					// var Yid = $(this).attr('data-yearID');
					var ajaxurl = "<?= site_url('hrzone/Comment/UpdateWallEvent'); ?>";
					$.ajax({
						type: "post",
						url: ajaxurl,
						data: {
							AdComment: AdComment,
							AdComment_Id: AdComment_Id
						},
						dataType: "JSON",
						success: function(data) {
							$('#updateEventModal').modal("hide");
							CommentSystem(YearID);
							alert("Data updated Successfully");
						}

					});

				});




				$("body").on('click', '.EventDel', function() {
					// function updateUserRecord(){

					var ans = confirm('Are you sure you want to delete this item?');
					if (!ans) {

					} else {
						var id = $(this).attr('data-EventDel');

						// var Yid = $(this).attr('data-yearID');
						var ajaxurl = "<?= site_url('hrzone/Comment/DeleteWallEvent'); ?>";
						$.ajax({
							type: "post",
							url: ajaxurl,
							data: {
								id: id
							},
							dataType: "JSON",
							success: function(data) {

								alert("Data deleted Successfully");
								CommentSystem(YearID);
							}

						});
					}

				});









			});






			function CommentSystem(YearID) {
				var ajaxurl = "<?= site_url('hrzone/Comment/AdminComment'); ?>";
				$.ajax({
					type: "get",
					url: ajaxurl,
					data: {
						YearID: YearID
					},
					dataType: "JSON"
				}).done(function(response) {

					datacomment = response.data;
					dataEvents = response.dataEvent;
					console.log(datacomment);
					if (response)
						$("#htmlRenderComment").html(`
			
			
			${response.dataAnni.map(function(dataAnni, index){
					return(`
					
							
								<li class="clearfix">

							<div class="media g-mb-30 media-comment">
							<div class="media-body u-shadow-v18 g-bg-secondary g-pa-30" style="background: #00d3c3c7; padding: 10px; margin-top: 20px;">
							<div class="d-flex  g-mb-15" style="JUSTIFY-CONTENT: SPACE-BETWEEN;">
							
							</div>

							<p style="color:white; margin-bottom: 0rem; font-weight:600;   font-size: 13px;color: #343434;">${dataAnni.title}</p>


							</div>
							</div>

							</li>
							`)}).join('')}
							
				
			
				
				
			${response.datadob.map(function(datadob, index){
					return(`
					
							
								<li class="clearfix">

							<div class="media g-mb-30 media-comment">
							<div class="media-body u-shadow-v18 g-bg-secondary g-pa-30" style="background: #759d9a;     border: 1px solid #759d9a; padding: 10px; margin-top: 20px;">
							<div class="d-flex  g-mb-15" style="JUSTIFY-CONTENT: SPACE-BETWEEN;">
							
							</div>

							<p style=" color: #918e8e; margin-bottom: 0.1rem; margin-top: 8px; font-weight:600;   font-size: 12px;color: #fff;">${datadob.title}</p>


							</div>
							</div>

							</li>
							`)}).join('')}
							
				
				
				
				
				
							
						${response.dataEvent.map(function(dataEvent, index){
					return(`
					
							
								<li class="clearfix">

							<div class="media g-mb-30 media-comment">
							<div> 
							<li class="tnemp_date ">${dataEvent.startEvent}</li>
							 </div>
							<div class="media-body u-shadow-v18 g-bg-secondary g-pa-30" style="background: #759d9a;border: 1px solid #759d9a;padding: 10px;padding-bottom: 15px;">
							<div class="d-flex  g-mb-15" style="JUSTIFY-CONTENT: SPACE-BETWEEN;">
							<h5 class="h5 g-color-gray-dark-v1 mb-0" style=" color: #918e8e; font-size:0.7rem; ">${dataEvent.startTime}&nbsp;&nbsp;-&nbsp;&nbsp;${dataEvent.endTime}</h5>
							<div class=" ">
							
							
							<ul class="tnUemp">
						
							
							<li class="tnemp tagUser" data-tagUser="${dataEvent.Id}" style=" color: #918e8e; font-size:10px;">Taged-User&nbsp;&nbsp;&nbsp;|</li>
							<li class="tnemp " style=" color: #918e8e; font-size:10px;">&nbsp;&nbsp;Created By&nbsp;:&nbsp;${dataEvent.createdBy}</li>
							
							</ul>

							</div>
							
							
							
							
							
							
							
							</div>

							<p style=" color: #918e8e; margin-bottom: 0.1rem;margin-top: 8px ; font-weight:600;font-size: 14px;color: #fff;">${dataEvent.title}</p>
							<h6 style=" color: #918e8e; font-size:12px;  margin-top: 6px; color: #5b4d4d;">${dataEvent.discription}</h6>
								<div style="margin-top: -8px;float: right;">
										<ul>

										<li class="tnemp" style="font-size:10px;"><a href="javascript:void(0)" data-EventDel="${dataEvent.Id}" class="EventDel" style="color: #f14e4e;">&nbsp;|&nbsp;<i class="actionFontSize fas fa-trash-alt"></i>&nbsp;|</a></li>
							<li class="tnemp" style="font-size:10px;"><a href="javascript:void(0)" data-EventEdit="${dataEvent.Id}" class="EventEdit" style="color: #00e291;">|&nbsp;<i class="actionFontSize fas fa-edit"></i>&nbsp;|</a></li>


										</ul>
								</div>

							</div>
							</div>

							</li>
							`)}).join('')}
							
							
							
							
			
			${response.data.map(function(data, index){
					return(`
					
							
								<li class="clearfix">

							<div class="media g-mb-30 media-comment">
							<div class="media-body u-shadow-v18 g-bg-secondary g-pa-30" style="background: #759d9a;     border: 1px solid #759d9a; padding: 10px; margin-top: 20px;">
							<div class="d-flex g-mb-15" style="JUSTIFY-CONTENT: SPACE-BETWEEN;">
							<h5 class="h5  mb-0" style="font-size:17px; color:#fff; margin-right: 15px;"></h5>
							
							</div>

							<p style=" color: #918e8e; margin-bottom: 0.1rem;     font-size: 12px;color: #fff;">${data.CommentUser}</p>

							<div style="margin-top: 10px;float: right;">
							<ul class="tnUemp">
							<li class="tnemp" style="font-size:10px;"><a href="javascript:void(0)" data-commentDel="${data.comment_Id}" class="commentDel" style="color: #f14e4e;">&nbsp;|&nbsp;<i class="actionFontSize fas fa-trash-alt"></i>&nbsp;|&nbsp;</a></li>
							<li class="tnemp" style="font-size:10px;"><a href="javascript:void(0)" data-commentEdit="${data.comment_Id}" class="commentEdit" style="color: #00e291;">&nbsp;|&nbsp;<i class="actionFontSize fas fa-edit"></i>&nbsp;|&nbsp;</a></li>
							</ul>

							</div>
							</div>
							</div>

							</li>
							`)}).join('')}
							
							
					
					
					
					`);
					else
						$("#CompanydataTable tbody").html("<div>No data Found.....</div>");
				});
			}
		</script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

		<script>
			$(document).ready(function() {
				$('[data-toggle="popover"]').popover();
			});
		</script>

		<?php include('footer.php'); ?>