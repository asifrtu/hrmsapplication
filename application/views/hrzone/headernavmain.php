

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

<body id="page-top" class="background">

				

				

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




<style>


    
h1 {
  margin-top: 100px;
  text-align: center;
  font-size: 60px;
  line-height: 70px;
  font-family: 'roboto', sans-serif;
}
#container {
  margin: 0 auto;
  max-width: 890px;
}
p { text-align: center; }
 .toggle, [id^=drop] {
 display: none;
}
nav {
  margin: 0;
  padding: 0;
  background-color: #254441;
}

#logo {
  display: block;
  padding: 0 30px;
  float: left;
  font-size: 20px;
  line-height: 60px;
}

nav:after {
  content: "";
  display: table;
  clear: both;
}

nav ul {
  float: left;
  padding: 0;
  margin: 0;
  list-style: none;
  position: relative;
    z-index: 999;
}

nav ul li {
  margin: 0px;
  display: inline-block;
  float: left;
  background-color: #254441;
}

nav a {
  display: block;
  padding: 0 20px;
  color: #FFF;
  font-size: 20px;
  line-height: 60px;
  text-decoration: none;
}

nav ul li ul li:hover { background: #000000; }

nav a:hover { background-color: #000000; }

nav ul ul {
  display: none;
  position: absolute;
  top: 60px;
}

.textDecNav a {

font-size:15px;

text-decoration: none;

}


nav ul li:hover > ul { display: inherit; }

nav ul ul li {
  width: 170px;
  float: none;
  display: list-item;
  position: relative;
}

nav ul ul ul li {
  position: relative;
  top: -60px;
  left: 170px;
}

li > a:after { content: ' +'; }

li > a:only-child:after { content: ''; }


/* Media Queries
--------------------------------------------- */

@media all and (max-width : 768px) {

#logo {
  display: block;
  padding: 0;
  width: 100%;
  text-align: center;
  float: none;
}

nav { margin: 0; }

.toggle + a,
 .menu { display: none; }

.toggle {
  display: block;
  background-color: #254441;
  padding: 0 20px;
  color: #FFF;
  font-size: 22px;
  font-weight:bold;
  line-height: 60px;
  text-decoration: none;
  border: none;
}

.toggle:hover { background-color: #000000; }

[id^=drop]:checked + ul { display: block; }

nav ul li {
  display: block;
  width: 100%;
}

nav ul ul .toggle,
 nav ul ul a { padding: 0 40px; }

nav ul ul ul a { padding: 0 80px; }

nav a:hover,
 nav ul ul ul a { background-color: #000000; }

nav ul li ul li .toggle,
 nav ul ul a { background-color: #212121; }

nav ul ul {
  float: none;
  position: static;
  color: #ffffff;
}

nav ul ul li:hover > ul,
nav ul li:hover > ul { display: none; }

nav ul ul li {
  display: block;
  width: 100%;
}

nav ul ul ul li { position: static;

}
}

@media all and (max-width : 330px) {

nav ul li {
  display: block;
  width: 94%;
}

}
</style>


<nav>
  <label for="drop" class="toggle">&#8801; Menu</label>
  <input type="checkbox" id="drop" />
  <ul class="menu">
    <li class="textDecNav"><a href="<?=base_url('index.php/hrzone/dashboard/wall');?>"><i class="fa fa-home" aria-hidden="true"></i></a></li>
    
    
    <li class="textDecNav"> 
      <!-- First Tier Drop Down -->
      <label for="drop-1" class="toggle">About Company +</label>
      <a href="#">About Company</a>
      <input type="checkbox" id="drop-1"/>
      <ul>
        <li class="textDecNav"><a href="<?=base_url('index.php/hrzone/Users/CompanyMissionAndGoals');?>">Company Info</a></li>
        <li class="textDecNav"><a href="<?=base_url('index.php/hrzone/Users/adminInfo');?>">Users View</a></li>
      </ul>
    </li>
    <li class="textDecNav"> 
      <!-- First Tier Drop Down -->
      <label for="drop-2" class="toggle">Employee Details +</label>
      <a href="#">Employee Details</a>
      <input type="checkbox" id="drop-2"/>
      <ul>
        <li class="textDecNav"><a href="<?=base_url('index.php/hrzone/Employee/employeeList');?>">Employee List</a></li>
        <li class="textDecNav"><a href="<?=base_url('index.php/hrzone/Employee/EmployeeDoc');?>">Employee Database</a></li>
        <li class="textDecNav"><a href="<?=base_url('index.php/hrzone/Ticket/EmpTicket');?>">Raised Tickets</a></li>
      </ul>
    </li>
    <li class="textDecNav"> 
      <!-- First Tier Drop Down -->
      <label for="drop-3" class="toggle">Pay and Time +</label>
      <a href="#">Pay and Time</a>
      <input type="checkbox" id="drop-3"/>
      <ul>
        <li class="textDecNav"><a href="<?=base_url('index.php/hrzone/Pay/CompensationList');?>">Compensation List</a></li>
        <li class="textDecNav"><a href="<?=base_url('index.php/hrzone/Attendance/AllEmployeeTimeList');?>">Employee Time List</a></li>
        <li class="textDecNav"><a href="<?=base_url('index.php/hrzone/SalaryBreakUp');?>">Salary BreakUp</a></li>
      </ul>
    </li>
    <li class="textDecNav"> 
      <!-- First Tier Drop Down -->
      <label for="drop-4" class="toggle">Calendar +</label>
      <a href="#">Calendar</a>
      <input type="checkbox" id="drop-4"/>
      <ul>
        <li class="textDecNav"><a href="<?=base_url('index.php/hrzone/Attendance/HrAttendance');?>">Attendance</a></li>
        <li class="textDecNav"><a href="<?=base_url('index.php/hrzone/Attendance/employeeLeaveView');?>">Leave Request</a></li>
        <li class="textDecNav"><a href="<?=base_url('index.php/hrzone/Attendance/addLeave');?>">Add Leave</a></li>
        <li class="textDecNav"><a href="<?=base_url('index.php/hrzone/Attendance/addUserAttendance');?>">Add User</a></li>
        <li class="textDecNav"><a href="<?=base_url('index.php/hrzone/Attendance/HCalendar');?>">Holiday Calender</a></li>
        <li class="textDecNav"><a href="<?=base_url('index.php/hrzone/Attendance/CalenderHR');?>">Event Calender</a></li>
      </ul>
    </li>
    <li class="textDecNav"><a href="<?=base_url('index.php/hrzone/hierarchy');?>">Organisation Chart</a></li>
    <li class="textDecNav"> 
      <!-- First Tier Drop Down -->
      <label for="drop-5" class="toggle">Files</label>
      <a href="#">Files</a>
      <input type="checkbox" id="drop-5"/>
      <ul>
        <li class="textDecNav"><a href="<?=base_url('index.php/hrzone/dashboard/files');?>">Files</a></li>
      </ul>
    </li>

    <li class="textDecNav"> 
      <!-- First Tier Drop Down -->
      <label for="drop-6" class="toggle">Balanced ScoreCard</label>
      <a href="#">Balanced ScoreCard</a>
      <input type="checkbox" id="drop-6"/>
      <ul>
        <li class="textDecNav"><a href="<?=base_url('index.php/hrzone/CompanyGoals/CompanyGoalInfo');?>">Company Yearly Goals</a></li>
        <li class="textDecNav"><a href="<?=base_url('index.php/hrzone/CompanyGoals/SeoGoalView');?>">Team Yearly Goals</a></li>
        <li class="textDecNav"><a href="<?=base_url('index.php/hrzone/Kpi/MonthlyKpi');?>">Monthly KPI Goals</a></li>
      </ul>
    </li>
    <li class="textDecNav"><a href="<?=base_url('index.php/hrzone/Appraisal/AppraisalRequest');?>">Appraisal Request</a></li>
    <li class="textDecNav"><a href="<?=base_url('index.php/hrzone/Separation/EmpExitRequest');?>">Exit Request</a></li>

    
  </ul>
</nav>


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

	