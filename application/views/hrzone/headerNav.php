<?php error_reporting(0);?>

<!DOCTYPE html>

<html lang="en">



<head>



    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">

    <meta name="author" content="">



    <title>HR and Employee Portal</title>



    

	<link rel="stylesheet" href=" <?= base_url("Assets/vendor/fontawesome-free/css/all.min.css") ?>" >

	<link rel="stylesheet" href=" <?= base_url("Assets/css/sb-admin-2.min.css") ?>" >

	<link rel="stylesheet" href=" <?= base_url("Assets/css/hrPortal.css") ?>" >

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />



</head>

<style>

.fa-fw {

    font-size: 22px;

}





.fontColor{

	padding-left: 16px;

    color: blue;



}

.background {

    background-color: #dec9f7!important;

    font-family: 'Klavika',Arial, sans-serif;



   

}







.show-all-alert:hover{

	background-color: #1C304Ca8!important;

}





</style>

<body id="page-top" class=" background">



<nav class="navbar navbar-expand navbar-light bg-white topbar static-top shadow" style="margin-bottom: 0rem!important;">



                    <!-- Sidebar Toggle (Topbar) -->

                    

				<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=base_url('index.php/hrzone/dashboard/wall');?>">

                <div class="sidebar-brand-icon">

                    <img src="<?= base_url("Assets/img/logo-03.png") ?>" style="width: 160px;margin-left: 35px;">

                    

                </div>

                </a>

					

                    <!-- Topbar Search -->

                    <form>

                       

                    </form>



                    <!-- Topbar Navbar -->

    <ul class="navbar-nav ml-auto">



		<!-- Nav Item - Search Dropdown (Visible Only XS) -->

		<li class="nav-item dropdown no-arrow d-sm-none">

			<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"

				data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

				<i class="fas fa-search fa-fw" style="color: #bd93ef;"></i>

			</a>

			<!-- Dropdown - Messages -->

			<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"

				aria-labelledby="searchDropdown">

				<form class="form-inline mr-auto w-100 navbar-search">

					<div class="input-group">

						<input type="text" class="form-control bg-light border-0 small"

							placeholder="Search for..." aria-label="Search"

							aria-describedby="basic-addon2">

						<div class="input-group-append">

							<button class="btn btn-primary" type="button">

								<i class="fas fa-search fa-sm"></i>

							</button>

						</div>

					</div>

				</form>

			</div>

		</li>



		<!-- Nav Item - Alerts -->

		<li class="nav-item dropdown no-arrow mx-1">

			<a class="nav-link dropdown-toggle Notify_count" href="#" id="alertsDropdown" role="button"

				data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

				<i class="fas fa-bell fa-fw bellfont" id="notifyCount"></i>

				<!-- Counter - Alerts -->

				

			</a>

			<!-- Dropdown - Alerts -->

			<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"

				aria-labelledby="alertsDropdown" style="background-color:white!important;">



				<div class="col-lg-12 px-0 d-flex">

					<div >

						<h6 class="dropdown-header" style="background-color: #ffffff;border: 1px solid #fefefe;color: #1C304C;font-size: 12px;font-weight: 500;text-transform: capitalize!important;padding-left: 45px;padding-right: 45px;padding-top: 14px;">

							Notifications

						</h6>

			</div>

			<a class="dropdown-item text-center small text-gray-500 px-0 show-all-alert" style=" margin-top: 0px; border:none!important;padding-top:0.6rem!important;background:#1C304C; color:white!important;" href="<?=base_url('index.php/hrzone/Comment/Notification');?>">

			<div>

			Show All Alerts

			</div>

		</a>



			</div>

				

				<div id="NotificationList">

				

				

				

				</div>

				

				<div class="fixed-bottom">

				

			</div>

			</div>

		</li>



		<!-- Nav Item - Messages -->

		

		<div class="topbar-divider d-none d-sm-block"></div>



		<!-- Nav Item - User Information -->

		<li class="nav-item dropdown no-arrow" style="align-items: center;margin-top: 23px;">

			<a class=" dropdown-toggle" style="text-decoration: none; height: 3.8rem!important;" href="#" id="userDropdown" role="button"

				data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

				<span class="mr-2 d-none d-lg-inline text-gray-600 small" style="color:#343434;">

				<?php if(!empty($this->session->userData('auth')['name']))

                                echo strtoupper($this->session->userData('auth')['name']);

                         ?>

                         <!--<?php echo $this->session->userData('auth')['id'];?>-->

				</span>

			   

			</a>

			

			<!-- Dropdown - User Information -->

			<a   data-toggle="modal" data-target="#logoutModal">

			<div class="dropdown-menu animated--grow-in"

				aria-labelledby="userDropdown" style="left: -58px!important;">

					

				

					

					<a class="dropdown-item" href="<?=base_url('index.php/hrzone/login/logout');?>" style="padding: .5rem 1.5rem!important;">Logout</a>

			</div>

				</a>

		</li>

		

		

		

		<li class="nav-item dropdown no-arrow">

			

			

			<!-- Dropdown - User Information -->

			<a   data-toggle="modal" data-target="#logoutModal">

			<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"

				aria-labelledby="userDropdown">

					

				

					

					<a class="dropdown-item" href="<?=base_url('index.php/hrzone/login/logout');?>">Logout</a>

			</div>

				</a>

		</li>

		

		

		

							



	</ul>



                               

                </nav>

				

				

				

<style>



.text-gray-500 {

    color: #2e2869!important;

}

.topbar .nav-item .nav-link {

    height: 4.675rem;

   

}

.bellfont{

    font-size:22px!important;

}

.mr-2 {

    margin-right: 4.5rem!important;

}

.tnb {

  list-style-type: none;

  margin: 0;

  padding: 0;

  overflow: hidden;

  padding-left:50px;

  background-color: #1C304C    ;

}



.tn {

  float: left;



}

.tn li:last-child {

  border-right: none;

}

.topbar {

    height: 4rem;

}

.tn a {

  display: block;

  color: white;

  padding: 6px 12px;

  font-size:15px;

  text-decoration: none;

}



.tndrop a {

  display: block;

  color: white;

  text-align: center;

  padding: 8px 12px;

  font-size:15px;

  text-decoration: none;

}



.tn a:hover{

  background-color: #1C304C;

  color:white;

}



.tn a:active {

	background-color: #1C304C;

  	color:white;  ;

}



.current {

	background-color: #1C304C!important;

  	color:white!important;

}



.btn{



	border-radius:0px!important;

}



.btn:focus{

	box-shadow:none;

}

.dropdown-menu {

   

	font-size: 13px !important;

    min-width: 140px !important;

    position: absolute;

    background-color: #fff;

    box-shadow: 0px 8px 16px 0px rgb(0 0 0 / 20%);

    text-align: left;

    border: none!important;

	margin-top:1px!important;

	border-radius:0px!important;

	padding: 0px!important;

}

.tn-dropdown{

	color: black!important;

    border-bottom: 1px solid #ede0fd!important;

    padding: 8px 10px!important;

    font-size: 13px!important;

    text-decoration: none!important;

}





.dropdown-menu-right {

    left: -140px;

    top: 71px;

	height: 400px;

	width:320px;



}



.topbar .dropdown-list{

	overflow: scroll;

    overflow-x: hidden;

}



.tn-dropdown:hover{

	background-color:#1C304C;

	color:white!important;

}

.btn:hover{

    border-radius:inherit;

}



.rounded-circle_notification{

	border-radius:50%;

	width: 30px;

	height: 30px;

}

.emojionearea, .emojionearea.form-control{

	padding:20px!important;

}

.titleuNBold{

	font-weight:200!important;

}

.titleBold{

	font-weight:700!important;

}

</style>



<div >

<nav class="topics">



                    <!-- Sidebar Toggle (Topbar) -->

                    



                    <!-- Topbar Search -->

                    



               

<ul class="tnb">

  <li class="tn <?php if($page == 'wall'){ ?> current <?php } ?>"><a class="btn without_dropdown" href="<?=base_url('index.php/hrzone/dashboard/wall');?>">Hr Wall</a></li>

  

   <li class="tn"><a href="#" class="btn dropdown-toggle" data-toggle="dropdown">About Company</a>

  

   

    <div class="dropdown-menu">

	

      <a class="dropdown-item tn-dropdown <?php if($page == 'CompanyMissionAndGoals'){ ?> current <?php } ?>" style="border-bottom: 1px solid white;" href="<?=base_url('index.php/hrzone/Users/CompanyMissionAndGoals');?>">Company Info</a>

      <a class="dropdown-item tn-dropdown <?php if($page == 'adminInfo'){ ?> current <?php } ?>"style="border-bottom: 1px solid white;" href="<?=base_url('index.php/hrzone/Users/adminInfo');?>">Users View</a>

    </div>

 

  

  </li>

  

  <li class="tn"><a href="#" class="btn dropdown-toggle" data-toggle="dropdown">Employee Details</a>

  

   

    <div class="dropdown-menu">

	

      <a class="dropdown-item tn-dropdown <?php if($page == 'employeeList'){ ?> current <?php } ?>" style="border-bottom: 1px solid white;" href="<?=base_url('index.php/hrzone/Employee/employeeList');?>">Employee List</a>

      <a class="dropdown-item tn-dropdown <?php if($page == 'EmployeeDoc'){ ?> current <?php } ?>" style="border-bottom: 1px solid white;" href="<?=base_url('index.php/hrzone/Employee/EmployeeDoc');?>">Employee Database</a>

      <a class="dropdown-item tn-dropdown <?php if($page == 'EmpTicket'){ ?> current <?php } ?>" style="border-bottom: 1px solid white;" href="<?=base_url('index.php/hrzone/Ticket/EmpTicket');?>">Raised Tickets</a>

    </div>

 

  

  </li>

  

  <li class="tn"><a href="#" class="btn dropdown-toggle" data-toggle="dropdown">Pay and Time</a>

  

   

    <div class="dropdown-menu">

	

      <a class="dropdown-item tn-dropdown <?php if($page == 'CompensationList'){ ?> current <?php } ?>" style="border-bottom: 1px solid white;" href="<?=base_url('index.php/hrzone/Pay/CompensationList');?>">Compensation List</a>

      <a class="dropdown-item tn-dropdown <?php if($page == 'AllEmployeeTimeList'){ ?> current <?php } ?>" style="border-bottom: 1px solid white;" href="<?=base_url('index.php/hrzone/Attendance/AllEmployeeTimeList');?>">Employee Time List</a>

      <a class="dropdown-item tn-dropdown <?php if($page == 'SalaryBreakUp'){ ?> current <?php } ?>"  href="<?=base_url('index.php/hrzone/SalaryBreakUp');?>">Salary BreakUp </a>

    </div>

 

  

  </li>

  

  <li class="tn"><a href="#" class="btn dropdown-toggle" data-toggle="dropdown">Calendar</a>

  

   

    <div class="dropdown-menu">

	

      <a class="dropdown-item tn-dropdown" style="border-bottom: 1px solid white;" href="<?=base_url('index.php/hrzone/Attendance/HrAttendance');?>">Attendance</a>

      <a class="dropdown-item tn-dropdown" style="border-bottom: 1px solid white;" href="<?=base_url('index.php/hrzone/Attendance/employeeLeaveView');?>">Leave Request</a>

      <a class="dropdown-item tn-dropdown" style="border-bottom: 1px solid white;" href="<?=base_url('index.php/hrzone/Attendance/addLeave');?>">Add Leave</a>

      <a class="dropdown-item tn-dropdown" style="border-bottom: 1px solid white;" href="<?=base_url('index.php/hrzone/Attendance/addUserAttendance');?>">Add User</a>

      <a class="dropdown-item tn-dropdown" style="border-bottom: 1px solid white;" href="<?=base_url('index.php/hrzone/Attendance/HCalendar');?>">Holiday Calender</a>

      <a class="dropdown-item tn-dropdown" style="border-bottom: 1px solid white;" href="<?=base_url('index.php/hrzone/CalenderHR');?>">Event Calender</a>

    </div>

 

  

  </li>

  <li class="tn <?php if($page == 'hierarchy'){ ?> current <?php } ?>"><a class="btn  without_dropdown" href="<?=base_url('index.php/hrzone/hierarchy');?>">Organisation Chart</a></li>

  

  <li class="tn"><a href="#" class="btn dropdown-toggle" data-toggle="dropdown">Files</a>

  <div class="dropdown-menu">

  <a class="dropdown-item tn-dropdown" style="border-bottom: 1px solid white;" href="<?=base_url('index.php/hrzone/dashboard/files');?>">Files</a>

  <a class="dropdown-item tn-dropdown" style="border-bottom: 1px solid white;" href="<?=base_url('index.php/hrzone/todo');?>" target="_blank">Database List</a>

  <a class="dropdown-item tn-dropdown" style="border-bottom: 1px solid white;" href="<?=base_url('index.php/hrzone/dashboard/sheet/2022');?>"  target="_blank">External Links</a>

  <a class="dropdown-item tn-dropdown" style="border-bottom: 1px solid white;" href="<?=base_url('index.php/hrzone/dashboard/ranking_sheet/2022/BME/152');?>"  target="_blank">Ranking Sheet</a>

  

  </div></li>

  <li class="tn"><a href="#" class="btn dropdown-toggle" data-toggle="dropdown">Balanced ScoreCard</a>

  

   

    <div class="dropdown-menu">

	

      <a class="dropdown-item tn-dropdown" style="border-bottom: 1px solid white;" href="<?=base_url('index.php/hrzone/CompanyGoals/CompanyGoalInfo');?>">Company Yearly Goals</a>

      <a class="dropdown-item tn-dropdown" style="border-bottom: 1px solid white;" href="<?=base_url('index.php/hrzone/CompanyGoals/SeoGoalView');?>">Team Yearly Goals</a>

      <a class="dropdown-item tn-dropdown"  href="<?=base_url('index.php/hrzone/Kpi/MonthlyKpi');?>">Monthly KPI Goals</a>

    </div>

 

  

  </li>

  

  





 

  <li class="tn "><a class="btn without_dropdown" href="<?=base_url('index.php/hrzone/Appraisal/AppraisalRequest');?>">Appraisal Request</a></li>

  <li class="tn "><a class="btn without_dropdown" href="<?=base_url('index.php/hrzone/Separation/EmpExitRequest');?>">Exit Request</a></li>

  

  

  <li class="tn"><button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">

                        <i class="fa fa-bars"></i>

                    </button></li>

</ul>

 </nav>







</div>







<script type="text/javascript">

// var datacomment = [];

// var dataEvents = [];





$(document).ready(function(){

	



	

	var YearID = 2022;

		HrNotificationSystem(YearID);

		// $("#datacount").load("select.php");

        setInterval(function(){

           HrNotificationSystem(YearID)

		   // $('#audiobox')[0].play()

        }, 3000);

		

		

		

		

		

// strat the insert value for update the satus!!!!!!!!!!	

$("body").on('click', '.Notify_Status', function(){

	var id = $(this).attr('data-notify');

	var ajaxurl = "<?=site_url('hrzone/Comment/updateNotification');?>";

	$.ajax({

		type: "post",

		url: ajaxurl,

		data: {id:id},

		dataType: "JSON",

		success:function(data){

			

		

		}

			

	});



});



// End the insert value for update the satus!!!!!!!!!	

	

 // strat the insert Count satus!!!!!!!!!!	

$("body").on('click', '.Notify_count', function(){

	var id = "User";

	var ajaxurl = "<?=site_url('hrzone/Comment/CountNotification');?>";

	$.ajax({

		type: "post",

		url: ajaxurl,

		data: {id:id},

		dataType: "JSON",

		success:function(data){

			

		

		}

			

	});



});



// End the insert Count satus!!!!!!!!!	

	

	

		

		

		

		

		

});



function HrNotificationSystem(YearID){

	var ajaxurl = "<?=site_url('hrzone/Comment/HrNotification');?>";

        $.ajax({

            type: "get",

            url: ajaxurl,

			data: {YearID:YearID},

			dataType: "JSON"

        }).done(function(response){

			

			

			if(response){

				$("#NotificationList").html(`

			

			

			${response.dataAnni.map(function(dataAnni, index){

					return(`

					

							

								<a class="Notify_Status dropdown-item d-flex align-items-center" style="padding-left:10px; padding-right:10px;" href="${dataAnni.TitleUrl}" data-notify="${dataAnni.Id}" >

				

						<div class=" col-lg-12 d-flex px-0">

							<div class=" icon-circle col-lg-2 px-0">

							${dataAnni.ProfileImage.map(function(ProfileImageData){

										return`<span><img class="rounded-circle_notification" style="width:40px; height:40px;" src="<?php echo base_url();?>upload/UserProfileImage/${ProfileImageData.EmpProfileImage}" ></span>`

										}).join('')}

						

						</div>

					

					<div class="col-lg-9 pr-0">

						<span class="${dataAnni.Read.length > 0 ? `titleuNBold`:`titleBold`}">${dataAnni.Title} </span>

						<div class="small text-gray-500">${dataAnni.NotifyDate}</div>

					</div>

					<div class="col-lg-1 pr-2 pl-0">

						<span>  ${dataAnni.Read.length > 0 ? `${dataAnni.Read.map(function(ReadData){ return``}).join('')}` :`<i class="fontColor fas fa-circle"></i>`}  </span>

					</div>

				</div>

				</a>

							`)}).join('')}

							

				

				

					

					`);

					

					

					

					$("#notifyCount").html(`

			

			

			${response.CountData.map(function(dataCountData, index){

					return(`

					

							

							

						

							${(dataCountData.CountNotfy != 0)? `<span class="badge badge-danger badge-counter" >${(dataCountData.CountNotfy != 0)? dataCountData.CountNotfy : ''}</span>` : '' }

							

							

						

							

				

							`)}).join('')}

							

				

				

					

					`);

					

					

					

					

					

					

					

					

		}else 

				$("#CompanydataTable tbody").html("<div>No data Found.....</div>");

        });

}













function playSound(filename){

  var mp3Source = '<source src="' + filename + '.mp3" type="audio/mpeg">';

  var oggSource = '<source src="' + filename + '.ogg" type="audio/ogg">';

  var embedSource = '<embed hidden="true" autostart="true" loop="false" src="' + filename +'.mp3">';

  document.getElementById("sound").innerHTML='<audio autoplay="autoplay">' + mp3Source + oggSource + embedSource + '</audio>';

}

</script>

	