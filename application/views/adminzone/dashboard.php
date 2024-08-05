 <?php error_Reporting(0);
	include('header.php'); ?>
	<?php include('dashboardSidebar.php'); ?>


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
		padding-right: 0rem!important; margin-bottom: 0rem!important;
	}
	.tm-9 {
		padding-right: 0rem!important; padding-left: 0rem!important; margin-bottom: 0rem!important;
	}
	.commentBox {
		outline: 1px solid #344d63;margin-left: 10px;
	}
	.WallDateforUser{    
		padding: 12px 0px 12px 0px !important;
    	
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
    	
	}
	
	}

	
</style>


 <style>
 	.tooltip .tooltiptext {

 		visibility: hidden;

 		width: 500px !important;

 		background-color: #7343c5 !important;

 		color: #fff;

 		text-align: center;

 		border-radius: 6px;

 		padding: 5px 5px 5px 5px !important;



 		/* Position the tooltip */

 		position: absolute;

 		z-index: 1;

 	}

 	.notification_box_readToday {

 		border-radius: 2px;

 		background: #f6c23e;

 		border: 1px solid #e7d8ee;

 	}

 	.marquee {

 		display: block;

 		position: relative;



 		height: 444px;

 		animation: scroll 18s linear infinite;



 	}



 	.marquee:hover {

 		animation-play-state: paused
 	}

 	.emp_Id {
 		margin-bottom: 0px !important;
 	}

 	/* Make it move */

 	@keyframes scroll {

 		0% {
 			top: 0;
 		}

 		100% {
 			top: -100%;
 		}

 	}
 </style>

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
						<div class="col-lg-6 mb-4 tm-9">
								
								<div class="flex-fill AR2 WallDateforUser"><span class="userNameSpan">&nbsp;<?php if(isset($this->session->userData('auth')['shortName']))
                                    echo strtoupper($this->session->userData('auth')['name']);
                                    
                             ?> Hello!</span></div>
								
								

							</div>
	 <div class="col-lg-6 mb-4 tm-col">

	 <div class="d-flex" style="outline: 1px solid #344d63;">
	 <div class="flex-fill AR2 WallDate ">		
						<div class="box" style="padding:0 20px;">

					<button class=" checkin" id="attnId">Mark Your Attendance</button>

					</div>
					</div>
								
								<div class="flex-fill AR2 WallDate displayNoneContent"><span style="color: white;"><?php date_default_timezone_set("Asia/Calcutta");
								echo date("h:i A | l, d M Y") . "\n"; ?></span></div>
								<div class="flex-fill AR2 WallDate onlyDisplaySm"><span style="color: white;"><?php date_default_timezone_set("Asia/Calcutta");
								echo date("h:i A | l") . "\n"; ?></span></div>
								
								

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

<?php



   $date =  date("m-d");
   $bi = 0;



   $sections = $this->db->query('select * from employeedetails where dob like "%' . $date . '"   order by UserId')->result_array();

   foreach ($sections as $row) {

	   $st =  $this->db->get_where('tbl_user', ['id' => $row['UserId']])->row()->employeeStatus;

	   if ($st == 'Active') {

		   $bstr .= " 

&#127881; &#127874; Happy Birthday " . $this->db->get_where('tbl_user', ['id' => $row['UserId']])->row()->name . "&#127874; -  &#127881; <br/>";

		   $bi++;
	   }
   }











   //  $query = $this->db->query('employee_birthday', ['birthday_date'=> $date])->result_array();





   ?><style>
	.ui-tooltip {

		/* tooltip container box */

		white-space: pre-line;

	}



	.ui-tooltip-content {

		/* tooltip content */

		white-space: pre-line;

	}

	>
</style>

<?php if ($bi > 0) { ?>

	<sub class="buttonNotification" data-html="true" data-toggle="tooltip" title="Item 1 &#013; - Item 2 &#013; <?php echo $bstr; ?>">

		<?php echo $bi; ?>



	</sub> <?php } ?>



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


<div class="col-lg-6 col-mb-sm screen" id="htmlRenderComment" style="background:#1c304c; border-left: 10px solid #344d63;padding-right: 0rem!important; padding-left: 0rem!important;">
	
				
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








 <footer class="fixed-bottom py-1 ">

 	<p style="margin-bottom: 0px;">HR HELP 24x7</p>

 </footer>

 </div>

 </div>

 </div>











 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

 <script src="<?= base_url("Assets\NewJs/infiniteslidev2.js") ?>"></script>

 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>



 <script>
 	function sliderList() {

 		$('.slide_vertical').infiniteslide({

 			direction: 'up',

 			speed: 15,

 			responsive: true,

 			pauseonhover: true

 		});

 	}



 	$(document).ready(function() {

 		var YearID = 2021;

 		CommentSystem(YearID);



















 		$("#attnId").click(function() {

 			// alert("Dekh k bhai.........");

 			var ajaxurl = "<?= site_url('adminzone/dashboard/AutoAttendance'); ?>";

 			$.ajax({

 				type: "post",

 				url: ajaxurl,

 				data: {
 					present: true
 				},

 				dataType: "JSON",

 				success: function(response) {

 					// alert(response.message);

 					if (response.status === 'P') {

 						Swal.fire({

 							title: response.message,

 							position: 'center',

 							icon: 'success',

 							showConfirmButton: false,

 							color: '#FFF',

 							background: '#1C304C',

 							timer: 3500

 						})

 						// alert(response.message);

 					} else if (response.status == 'MD') {

 						Swal.fire({

 							title: response.message,

 							position: 'center',

 							icon: 'success',

 							showConfirmButton: false,

 							color: '#FFF',

 							background: '#1C304C',

 							timer: 3500

 						})

 						// alert(response.message);

 					} else if (response.status == 'A') {

 						Swal.fire({

 							html: response.message,

 							position: 'center',

 							icon: 'warning',

 							showConfirmButton: false,

 							color: '#FFF',

 							background: '#1C304C',

 							timer: 3500

 						})

 						// alert(response.message);

 					} else {

 						Swal.fire({

 							html: response.message,

 							position: 'center',

 							icon: 'warning',

 							showConfirmButton: false,

 							color: '#FFF',

 							background: '#1C304C',

 							timer: 34500

 						})

 						// alert(response.message);

 					}







 				}



 			});

 		});

 	});





 	function HrNotificationSystem(YearID) {

 		var ajaxurl = "<?= site_url('adminzone/Comment/HrNotification'); ?>";

 		$.ajax({

 			type: "get",

 			url: ajaxurl,

 			data: {
 				YearID: YearID
 			},

 			dataType: "JSON"

 		}).done(function(response) {



 			datacomment = response.dataAnni;



 			console.log(datacomment);

 			if (response) {

 				$("#NotificationList").html(`

			

			

			${response.dataAnni.map(function(dataAnni, index){

					return(`

					

							

								<a class="dropdown-item d-flex align-items-center" href="${dataAnni.TitleUrl}">

					<div class="mr-3">

						<div class="icon-circle bg-primary">

							<i class="fas fa-file-alt text-white"></i>

						</div>

					</div>

					<div>

						<div class="small text-gray-500">${dataAnni.NotifyDate}</div>

						<span class="font-weight-bold">${dataAnni.Title}</span>

					</div>

				</a>

							`)}).join('')}

							

				

				

					

					`);



 				$("#notifyCount").html(`

			

			

			        ${response.CountData.map(function(dataCountData, index){

					return(`

							<span>${dataCountData.CountNotfy}</span>

							

							`)}).join('')}

							

					`);

 			} else

 				$("#CompanydataTable tbody").html("<div>No data Found.....</div>");

 		});

 	}







 	function CommentSystem(YearID) {

 		var ajaxurl = "<?= site_url('adminzone/EventController/AdminComment'); ?>";

 		$.ajax({

 			type: "get",

 			url: ajaxurl,

 			data: {
 				YearID: YearID
 			},

 			dataType: "JSON"

 		}).done(function(response) {



 			datacomment = response.dataAdmin;

 			console.log(datacomment);

 			if (response) {

 				$("#htmlRenderComment").html(`

			

				<div class="slide_vertical_wrap" >

    <ul class="slide_vertical">

			${response.dataAnni.map(function(dataAnni, index){

					return(`

					

										

							<li>

								<h3 class="notification_date"></h3>

								<div class="notification_box_read">

								<div class="notification_title container">

								<h5></h5>

								<h6></h6>

								</div>

								<div class="notifications container">

								<p>${dataAnni.title}</p>

								</div>

								</div>

								</li>



							

							

							

							`)}).join('')}

							

			${response.dataAnni.map(function(dataAnni, index){

					return(`

					

										

							<li>

								<h3 class="notification_date"></h3>

								<div class="notification_box_read">

								<div class="notification_title container">

								<h5></h5>

								<h6></h6>

								</div>

								<div class="notifications container">

								<p></p>

								</div>

								</div>

								</li>



							

							

							

							`)}).join('')}	

				

				

				

			${response.datadob.map(function(datadob, index){

					return(`

					

														

							<li>

								<h3 class="notification_date"></h3>

								<div class="notification_box_read">

								<div class="notification_title container">

								<h5></h5>

								<h6></h6>

								</div>

								<div class="notifications container">

								<p>${datadob.title}</p>

								</div>

								</div>

								</li>



							

							`)}).join('')}

							

				

				

				

				

				

							

						${response.dataEvent.map(function(dataEvent, index){

					return(`

					



						<li>

								<h3 class="notification_date">${dataEvent.startEvent}</h3>

								<div class="${(dataEvent.dateEvent == dataEvent.currdate)? 'notification_box_readToday' : 'notification_box_read'}">

								<div class="notification_title container">

								<h5 class="col-lg-9" style="padding-right:0px!important; padding-left:0px!important;">${dataEvent.title}</h5>

								<h6 class="col-lg-3 " style="padding-left:0px!important;padding-right:0px!important;">${dataEvent.startTime}&nbsp;&nbsp;-&nbsp;&nbsp;${dataEvent.endTime}</h6>

								</div>

								<div class="notifications container">

								<p>${dataEvent.discription}</p>

								</div>

								</div>

								</li>



							

							`)}).join('')}

							

							

							

							

			

			${response.data.map(function(data, index){

					return(`

					

														

							<li class="clearfix">

							<div class="media g-mb-30 media-comment">
							<div class="media-body u-shadow-v18 g-bg-secondary g-pa-30" style="background: #759d9a;     border: 1px solid #759d9a; padding: 0 10px; margin-top: 20px;">
							

							<p style=" color: #918e8e; margin-bottom: 0.1rem;     font-size: 12px;color: #fff;">${data.CommentUser}</p>

							
							</div>
							</div>

							</li>



							`)}).join('')}

							

							

					

					

					

					`);



 				sliderList();



 			} else

 				$("#CompanydataTable tbody").html("<div>No data Found.....</div>");

 		});

 	}
 </script>

 <script>
 	function myFunction() {

 		var x = document.getElementById("myLink");

 		if (x.style.display === "block") {

 			x.style.display = "none";

 		} else {

 			x.style.display = "block";

 		}

 	}
 </script>

 <script>
 	$(document).ready(function() {

 		$('[data-toggle="tooltip"]').tooltip();

 	});
 </script>



 <link rel="stylesheet" href=" <?= base_url("Assets/vendor/fontawesome-free/css/all.min.css") ?>">



 <!-- Bootstrap core JavaScript-->



 <script src="<?= base_url("Assets/vendor/bootstrap/js/bootstrap.bundle.min.js") ?>"></script>

 <script src="<?= base_url("Assets/vendor/jquery-easing/jquery.easing.min.js") ?>"></script>

 <script src="<?= base_url("Assets/js/sb-admin-2.min.js") ?>"></script>

 </body>

 </html>