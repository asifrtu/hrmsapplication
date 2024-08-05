

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

    background-color: #344d63!important;

    font-family: 'Klavika',Arial, sans-serif;



   

}







.show-all-alert:hover{

	background-color: #1C304Ca8!important;

}





</style>

<body id="page-top" class="bodyB">

				

				

<style>

.bodyB{
  background-color: #344d63!important;
}

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

    font-size: 15px!important;

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
  font-size: 15px;
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
  background-color: #1C304C;
}

#logo {
  display: block;
  padding: 0 30px;
  float: left;
  font-size: 15px;
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
  background-color: #1C304C;
}

nav a {
  display: block;
  padding: 0 15px;
  color: #ffffff;
  line-height: 35px;
  text-decoration: none;
  text-transform: uppercase;
    font-size: 1em;
    overflow: hidden;
    transition: 0.5s ease;
    font-weight: 600;

}

nav ul li ul li:hover { background: #1C304C; }

nav a:hover { color: #00d3c3; background-color: #1C304C; }

nav ul ul {
  display: none;
  position: absolute;
  top: 35px;
}
label {
    text-align: center;
}
.textDecNav a {

  font-size: 1em;
display: block;
text-align: center;
font-family: 'proxima_novaregular';
text-decoration: none;
transition: 0.5s;

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

li > a:after { content: ''; }

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
  background-color: 1px solid hsl(175deg 100% 41% / 20%);
  padding: 0 15px;
  color: #ffffff;
  font-size: 1em;
  font-family: 'proxima_novaregular';
  line-height: 35px;
  text-decoration: none;
  border: none;
}

.toggle:hover { color:#00d3c3;background-color: #1C304C; }

[id^=drop]:checked + ul { display: block; }

nav ul li {
  display: block;
  width: 100%;
  font-family: 'proxima_novaregular';
  border-top: 1px solid hsl(175deg 100% 41% / 20%);
  text-transform: uppercase;
    font-size: 1em;
    overflow: hidden;
    transition: 0.5s ease;
    font-weight: 600;
}

nav ul ul .toggle,
 nav ul ul a { padding: 0 40px;
    color: rgba(255, 255, 255, 0.7);
    background-color: #253a56;
    border: none !important; 
    letter-spacing: 0;
  }

nav ul ul ul a { padding: 0 80px; }

nav a:hover,
 nav ul ul ul a { background-color: #1C304C; }

nav ul li ul li .toggle,
 nav ul ul a { 
  background-color: 1px solid hsl(175deg 100% 41% / 20%);
  

}

nav ul ul {
  float: none;
  position: static;
  color: #ffffff;
  font-family: 'proxima_novaregular';
  font-size: 1em;
}

nav ul ul li:hover > ul,
nav ul li:hover > ul { display: none; }

nav ul ul li {
  display: block;
  width: 100%;
  font-family: 'proxima_novaregular';
  text-transform: uppercase;
    font-size: 1em;
    overflow: hidden;
    transition: 0.5s ease;
    font-weight: 600;
  
}
.mp-20 {
  width: 100px;
  float: none;
  display: list-item;
  position: relative;
}

nav ul ul ul li { 
  position: static;
  font-family: 'proxima_novaregular';
  font-size: 1em;
}
}

@media all and (max-width : 330px) {

nav ul li {
  display: block;
  width: 94%;
  font-family: 'proxima_novaregular';
  text-transform: uppercase;
    font-size: 1em;
    overflow: hidden;
    transition: 0.5s ease;
    font-weight: 600;

}
}
@media all and (min-width : 730px) {
.contentForMobile{
  display: none;
}

}

.companyNamestyle {
  font-size: 16px;
      
      width: 241px;
}
</style>


<nav>
<div class="d-flex">
    <div><label for="drop" class="toggle" style="padding-left: 12px!important;">&#8801; Menu</label></div>
    <div class="ml-auto">
    <ul class="df contentForMobile" style="float: left; padding-right:65px;">
    
    <li class="textDecNav" style="float: right;"> 
      <!-- First Tier Drop Down -->
      <label for="drop-7" class="toggle"><i class="fa fa-user" aria-hidden="true"></i></label>
      <a href="#"><i class="fa fa-user" aria-hidden="true"></i></a>
      <input type="checkbox" id="drop-7"/>
      <ul>
        <li class="textDecNav mp-20" style="width: 100px;"><a href="<?=base_url('index.php/hrzone/login/logout');?>">LogOut</a></li>
        <li class="textDecNav mp-20" style="width: 100px;"><a href="#">User</a></li>
      </ul>
    </li>
    
    
  </ul>

    </div>
  </div>
  
  <input type="checkbox" id="drop" />
  <ul class="menu">
  <li class="textDecNav companyNamestyle"><a href="<?=base_url('index.php/hrzone/dashboard/wall');?>" style="color: #06adad!important; padding: 0px 5px!important;">HR HELP 24x7 PVT LTD</a></li>
    <!-- <li class="textDecNav"><a href="<?=base_url('index.php/hrzone/dashboard/wall');?>"><i class="fa fa-home" aria-hidden="true"></i></a></li> -->
    
    <li class="textDecNav"> 
      <!-- First Tier Drop Down -->
      <label for="drop-2" class="toggle">Employee Details</label>
      <a href="#">Employee Details</a>
      <input type="checkbox" id="drop-2"/>
      <ul>
        <li class="textDecNav displayNoneContent"><a href="<?=base_url('index.php/hrzone/Employee/employeeList');?>">Employee List</a></li>
        <li class="textDecNav"><a href="<?=base_url('index.php/hrzone/Employee/EmployeeDoc');?>">Employee Database</a></li>
        <!-- <li class="textDecNav"><a href="<?=base_url('index.php/hrzone/Employee/EmployeeListing');?>">Employee Listing</a></li> -->
        <li class="textDecNav"><a href="<?=base_url('index.php/hrzone/Ticket/EmpTicket');?>">Raised Tickets</a></li>
        <li class="textDecNav"><a href="<?=base_url('index.php/hrzone/dashboard/files');?>">Files</a></li>
        <li class="textDecNav"><a href="<?=base_url('index.php/hrzone/hierarchy');?>">Hierarchy</a></li>
      </ul>
    </li>
    <li class="textDecNav"> 
      <!-- First Tier Drop Down -->
      <label for="drop-3" class="toggle">Pay and Time</label>
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
      <label for="drop-4" class="toggle">Calendar</label>
      <a href="#">Calendar</a>
      <input type="checkbox" id="drop-4"/>
      <ul>
        <li class="textDecNav"><a href="<?=base_url('index.php/hrzone/Attendance/HrAttendance');?>">Attendance</a></li>
        <li class="textDecNav"><a href="<?=base_url('index.php/hrzone/Attendance/employeeLeaveView');?>">Leave Request</a></li>
        <li class="textDecNav"><a href="<?=base_url('index.php/hrzone/Attendance/addLeave');?>">Add Leave</a></li>
        <li class="textDecNav"><a href="<?=base_url('index.php/hrzone/Attendance/addUserAttendance');?>">Add User</a></li>
        <li class="textDecNav"><a href="<?=base_url('index.php/hrzone/Attendance/HCalendar');?>">Holiday Calender</a></li>
        <li class="textDecNav"><a href="<?=base_url('index.php/hrzone/CalenderHR');?>">Event Calender</a></li>
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
    <li class="textDecNav"> 
      <!-- First Tier Drop Down -->
      <label for="drop-7" class="toggle">Request</label>
      <a href="#">Request</a>
      <input type="checkbox" id="drop-7"/>
      <ul>
        <li class="textDecNav"><a href="<?=base_url('index.php/hrzone/Appraisal/AppraisalRequest');?>">Appraisal Request</a></li>
        <li class="textDecNav"><a href="<?=base_url('index.php/hrzone/Separation/EmpExitRequest');?>">Exit Request</a></li>
      </ul>
    </li>
</ul>
    <ul class="menu" style="float: right; padding-right:65px;">
    <li class="textDecNav"> 
      <!-- First Tier Drop Down -->
      <label for="drop-7" class="toggle"><i class="fa fa-bell" aria-hidden="true"></i></label>
      <a href="#"><i class="fa fa-bell" aria-hidden="true"></i></a>
      <input type="checkbox" id="drop-7"/>
      <!-- <ul class="userNot">
        <li class="textDecNav"><a href="<?=base_url('index.php/hrzone/Appraisal/AppraisalRequest');?>">Appraisal Request</a></li>
        <li class="textDecNav"><a href="<?=base_url('index.php/hrzone/Separation/EmpExitRequest');?>">Exit Request</a></li>
      </ul> -->
    </li>
    <li class="textDecNav" > 
      <!-- First Tier Drop Down -->
      <label for="drop-7" class="toggle"><i class="fa fa-bell" aria-hidden="true"></i></label>
      <a href="#"><i class="fa fa-user" aria-hidden="true"></i></a>
      <input type="checkbox" id="drop-7"/>
      <ul>
        <li class="textDecNav mp-20" style="width: 100px;"><a href="<?=base_url('index.php/hrzone/login/logout');?>">LogOut</a></li>
        <li class="textDecNav mp-20" style="width: 100px;"><a href="#">User</a></li>
      </ul>
    </li>
    
    
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

	