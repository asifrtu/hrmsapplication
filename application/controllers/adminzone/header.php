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
                             ?></span>
                </div></a>
    <button class="btn notification_bell_icon " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fas fa-bell top_bell" ><sub class="buttonnotification" id="notifyCount"></sub></i>
	</button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
    <h6 class="dropdown-header">
					Alerts Center
				</h6>
				<div id="NotificationList">
				
				
				
				</div>
				
				
				<a class="dropdown-item text-center small text-gray-500" href="<?=base_url('index.php/adminzone/Comment/Notification');?>">Show All Alerts</a>
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
                    <button class="dropbtn">Key Performance Indicator <i class="fas fa-caret-down"></i> </button>
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
                    <a href="<?=base_url('index.php/adminzone/dashboard/exitRequest');?>">
                    <button class="dropbtn">Exit Request</button></a>
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
		
});

function HrNotificationSystem(YearID){
	var ajaxurl = "<?=site_url('adminzone/Comment/HrNotification');?>";
        $.ajax({
            type: "get",
            url: ajaxurl,
			data: {YearID:YearID},
			dataType: "JSON"
        }).done(function(response){
			
			datacomment = response.dataAnni;
			
			console.log(datacomment);
			if(response){
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