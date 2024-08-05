<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href=" <?= base_url("Assets/vendor/fontawesome-free/css/all.min.css") ?>" >
    <link rel="stylesheet" href="<?= base_url("Assets/newCss/employeeDashboard.css") ?>">
	<link rel="stylesheet" href=" <?= base_url("Assets/css/sb-admin-2.min.css") ?>" >
	<link rel="stylesheet" href=" <?= base_url("Assets/css/hrPortal.css") ?>" >
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;700&display=swap" rel="stylesheet">    

<title>Employee Dashboard</title>
</head>


<style>

.titleBold{
	font-weight:200!important;
}

.fontColor{
	padding-left: 16px;
    color: blue;

}


.notifications li{

  min-height: 40px;
    padding-top: 8px;
    padding-bottom: 8px;
    list-style: none;
    background: #f5f4f4bd;
    border-bottom: 1px solid #cbcbcb;
}

.notifications li:hover{

  background-color: #dabdff91;
}

.notifications .row{
  margin-left:0px;
  margin-right:0px;
}

.notifications .row .col-lg-8 h6{
  margin-top: 7px;
    margin-bottom: 7px;
    color: #343434;
    font-size: 13px;
    font-weight:600;
}
.dropdown-menu{
  max-width:290px;
}
.notification_image {
    width: 35px;
    border-radius: 50%;
    margin-top: 5px;
    margin-left: 1px;
}
.dropdown-menu.show {
    display: block;
    padding-top: 0;
    padding-bottom: 0;
}
.notifications .row .col-lg-8{
  padding-right:4px!important;
}
.dropdown-item {
  color: #9b9b9b;
  padding-top: 5px;
    padding-left: 30px;
}
.dropdown-item:hover{
  background:#1C304C;
  color:white;
  border-top-right-radius: 5px;
}
.unread{
  width: 14px;
    height: 14px;
    border-radius: 50%;
    margin-top: 16px;
    margin-bottom: 16px;
    background: #0000ff;
    
}
.dropdown-header{
  color: #1C304C!important;
}
</style>
<body class="background">
    <div class="main">
<header>
    <nav class="  top ">
       <!-- <div class="container-fluid top"> -->
          <div class="logo">
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
          </a>
          <a href="<?=base_url('index.php/adminzone/dashboard');?>"> <img src="<?= base_url("Assets/img/logo-03.png") ?>" alt="HR HELP 24x7 Logo"></a>
        </div>
            <div class="notification">
              
                   <a href="<?=base_url('index.php/adminzone/EmployeeInfo/AboutMe');?>">   <div class="headerimage">
                        <img src="<?php echo base_url();?>upload/UserProfileImage/<?php if(isset($this->session->userData('auth')['EmployeeProfileImage']))
                                    echo $this->session->userData('auth')['EmployeeProfileImage'];
                
                             ?>" alt="" >
                       <span>&nbsp;<?php if(isset($this->session->userData('auth')['shortName']))
                                    echo strtoupper($this->session->userData('auth')['shortName']);
                                    
                             ?>
                             <!--<?php echo $this->session->userData('auth')['id'];?>--->
                             </span>
                </div></a>
    <button class="btn notification_bell_icon Notify_count" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fas fa-bell top_bell" id="notifyCount"></i>
	</button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
    <div class="d-flex">
  <h6 class="dropdown-header">
				Notifications
				</h6>
        <a class="dropdown-item  " href="<?=base_url('index.php/adminzone/Comment/UserNotification');?>">Show All Alerts</a>
        </div>
				<div class="notifications">
				
        <ul id="NotificationList">
              


        </ul>
        
				
				
				</div>
				
				
				
  </div>
                <div class="logout">
                    <i class="fas fa-caret-down"></i>
                      <div class="logout-content">
                      <a href="<?=base_url('index.php/adminzone/login/logout/');?>"><span></span>Logout</a>
                      </div>
                    </div>
            </div>
            
        
       
    </nav>
        <div class=" container-fluid  down" id="myLink">
            <div class=" tabs">
                <div class="dropdown" >
                    <a class="active" href="<?=base_url('index.php/adminzone/dashboard');?>">
                    <button class="dropbtn">My Wall</button></a>
                  </div>

                  <div class="dropdown"  >
                    <button class="dropbtn">About Me <i class="fas fa-caret-down"></i></button>
                    <div class="dropdown-content">
                        <a href="<?=base_url('index.php/adminzone/EmployeeInfo/AboutMe');?>">My Information</a>
                        <a href="<?=base_url('index.php/adminzone/Ticket/EmployeeTicket');?>">My Tickets</a>
                    </div>
                  </div>

                  <div class="dropdown" >
                  <a href="<?=base_url('index.php/adminzone/EmployeeAttendance/EmployeePay');?>"><button class="dropbtn">My Pay</button></a>
                  </div>

                  <div class="dropdown" >
                    <button class="dropbtn">Attandence <i class="fas fa-caret-down"></i> </button>
                    <div class="dropdown-content">
                        <a href="<?=base_url('index.php/adminzone/EmployeeAttendance/myAttendance');?>">Attandance</a>
                        <a href="<?=base_url('index.php/adminzone/EmployeeAttendance/EmployeeApplyLeave');?>">Apply Leave</a>
                        <a href="<?=base_url('index.php/adminzone/EventController');?>">Calender</a>
                    </div>
                  </div>

                  <div class="dropdown" >
                    <a href="<?=base_url('index.php/adminzone/EmployeeAttendance/EmployeeTimeList');?>">    <button class="dropbtn">My Time</button> </a>
                  </div>

                  <div class="dropdown" >
                    <a href="<?=base_url('index.php/adminzone/hierarchy');?>">    <button class="dropbtn">Organisation Chart</button> </a>
                  </div>

                  <div class="dropdown" >
                    <button class="dropbtn" >Files <i class="fas fa-caret-down"></i> </button>
                    <div class="dropdown-content" style="left:10px">
                        <a href="<?=base_url('index.php/adminzone/DocFile/singleEmployeeDoc');?>">My Documents</a>
                        <a href="<?=base_url('index.php/adminzone/dashboard/files');?>">Company Files</a>
                        <a href="<?=base_url('index.php/adminzone/dashboard/HRPolicy');?>">HR Policy</a>
                    </div>
                  </div>

                  <div class="dropdown" >
                    <button class="dropbtn">Balanced scorecard <i class="fas fa-caret-down"></i> </button>
                    <div class="dropdown-content">
                        <a href="<?=base_url('index.php/adminzone/EmployeeInfo/CompanyGoals');?>">Company Goals</a>
                        <a href="<?=base_url('index.php/adminzone/EmployeeInfo/TeamYearlyGoals');?>">Team Goals</a>
                        <a href="<?=base_url('index.php/adminzone/EmployeeInfo/KPI');?>">KPI</a>
                    </div>
                  </div>

                  <div class="dropdown" >
                    <a href="<?=base_url('index.php/adminzone/Appraisal/AppraisalRequest');?>">
                    <button class="dropbtn">Appraisal Request</button></a>
                  </div>
                  <div class="dropdown" >
                    <a href="<?=base_url('index.php/adminzone/Separation/AddExitRequest');?>">
                    <button class="dropbtn">Exit Request</button></a>
                  </div>
                  <div class="dropdown" >
                    <a href="<?=base_url('index.php/adminzone/dashboard/internalOpening');?>">
                    <button class="dropbtn">Internal Opening</button></a>
                  </div>
                  <div class="dropdown" >
                    <a href="<?=base_url('index.php/adminzone/todo');?>">
                    <button class="dropbtn">Database List</button></a>
                  </div>

                  
    </div>
    </div>
</header> 




<audio id="audiobox">
				<source src="<?= base_url("Assets/NotifySound/pristine-609.mp3") ?>" type="audio/mp3">
				<source src="<?= base_url("Assets/NotifySound/pristine-609.m4r") ?>" type="audio/m4r">
				<source src="<?= base_url("Assets/NotifySound/pristine-609.ogg") ?>" type="audio/ogg">
				
				</audio>
<script type="text/javascript">
var datacomment = [];
// var dataEvents = [];


$(document).ready(function(){
	

	
	var YearID = 2021;
	HrNotificationSystem(YearID);
	// $("#datacount").load("select.php");
	setInterval(function(){
	   HrNotificationSystem(YearID)
	   // $('#audiobox')[0].play()
	}, 3000);
		
		
		
		
// strat the insert value for update the satus!!!!!!!!!!	
$("body").on('click', '.Notify_Status', function(){
	var id = $(this).attr('data-notify');
	var ajaxurl = "<?=site_url('adminzone/Comment/updateNotification');?>";
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
// $("body").on('click', '.Notify_count', function(){
	// var id = "User";
	// var ajaxurl = "<?=site_url('adminzone/Comment/CountNotification');?>";
	// $.ajax({
		// type: "post",
		// url: ajaxurl,
		// data: {id:id},
		// dataType: "JSON",
		// success:function(data){
			
		
		// }
			
	// });

// });

// End the insert Count satus!!!!!!!!!	
	
  
		
});

function HrNotificationSystem(YearID){
	var ajaxurl = "<?=site_url('adminzone/Comment/AdminNotification');?>";
        $.ajax({
            type: "get",
            url: ajaxurl,
			data: {YearID:YearID},
			dataType: "JSON"
        }).done(function(response){
			
			datacomment = response.dataAnni;
			
			// console.log(datacomment);
     
			if(response){
				$("#NotificationList").html(`
			
			
			${response.dataAnni.map(function(dataAnni, index){
					return(`
					
							<li>
                <a class="Notify_Status" href="${dataAnni.NotifyUrl}" data-notify="${dataAnni.Id}">
				<div class="row">
                  <div class="col-lg-3">
                    ${dataAnni.ProfileImage.map(function(ProfileImageData){
										return`<img class="notification_image" src="<?php echo base_url();?>upload/UserProfileImage/${ProfileImageData.EmpProfileImage}" alt="">`
										}).join('')}
					
                  </div>
                  <div class="col-lg-8">
                    <section>
                      <h6 class="${dataAnni.Read.length > 0 ? `titleBold`:`nn`}">${dataAnni.Title}</h6>
					  <p>${dataAnni.NotifyDate}</p>
                    </section>

                  </div>
                 <div class="col-lg-1" style="padding-right: 0px!important;padding-left: 0px!important;">
                    ${dataAnni.Read.length > 0 ? `${dataAnni.Read.map(function(ReadData){
										return`<div class=""></div>`}).join('')}` :`<div class="unread"></div>`}

                  </div>
                </div>
				</a>
              </li>
								
							`)}).join('')}
							
				
				
					
					`);
					
					
					
					$("#notifyCount").html(`
			
			
			${response.CountData.map(function(dataCountData, index){
					return(`
					
							
							
			
							
							${(dataCountData.CountNotfy != 0)? `<sub class="buttonnotification" ><span>${(dataCountData.CountNotfy != 0)? dataCountData.CountNotfy : ''}</span></sub>` : '' }
							
							
						
							
				
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
<script>
        $(document).ready(function() {
            $('li').click(function() {
                $('li.list-group-item.active').removeClass("active");
                $(this).addClass("active");
            });
        });
    </script>