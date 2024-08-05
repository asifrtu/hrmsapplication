<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta name="referrer" content="origin">
    <title>HR and Employee Portal</title>

    
	<link rel="stylesheet" href=" <?= base_url("Assets/vendor/fontawesome-free/css/all.min.css") ?>" >
	<link rel="stylesheet" href=" <?= base_url("Assets/css/sb-admin-2.min.css") ?>" >
	<link rel="stylesheet" href=" <?= base_url("Assets/css/hrPortal.css") ?>" >
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">

</head>

<body id="page-top" class="bg-gradient-primary">

<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow" style="margin-bottom: 0rem!important;">

                    <!-- Sidebar Toggle (Topbar) -->
                    
					<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=base_url('index.php/adminzone/dashboard');?>">
                <div class="sidebar-brand-icon">
                    <img src="<?= base_url("Assets/img/logo-03.png") ?>" style="height: 50px;">
                    
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
				<i class="fas fa-search fa-fw"></i>
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
			<a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
				data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class="fas fa-bell fa-fw"></i>
				<!-- Counter - Alerts -->
				<span class="badge badge-danger badge-counter">3+</span>
			</a>
			<!-- Dropdown - Alerts -->
			<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
				aria-labelledby="alertsDropdown">
				<h6 class="dropdown-header">
					Alerts Center
				</h6>
				<a class="dropdown-item d-flex align-items-center" href="<?=base_url('index.php/adminzone/dashboard/employeeNotification');?>">
					<div class="mr-3">
						<div class="icon-circle bg-primary">
							<i class="fas fa-file-alt text-white"></i>
						</div>
					</div>
					<div>
						<div class="small text-gray-500">December 12, 2019</div>
						<span class="font-weight-bold">A new monthly report is ready to download!</span>
					</div>
				</a>
				<a class="dropdown-item d-flex align-items-center" href="<?=base_url('index.php/adminzone/dashboard/employeeNotification');?>">
					<div class="mr-3">
						<div class="icon-circle bg-success">
							<i class="fas fa-donate text-white"></i>
						</div>
					</div>
					<div>
						<div class="small text-gray-500">December 7, 2019</div>
						$290.29 has been deposited into your account!
					</div>
				</a>
				<a class="dropdown-item d-flex align-items-center" href="<?=base_url('index.php/adminzone/dashboard/employeeNotification');?>">
					<div class="mr-3">
						<div class="icon-circle bg-warning">
							<i class="fas fa-exclamation-triangle text-white"></i>
						</div>
					</div>
					<div>
						<div class="small text-gray-500">December 2, 2019</div>
						Spending Alert: We've noticed unusually high spending for your account.
					</div>
				</a>
				<a class="dropdown-item text-center small text-gray-500" href="<?=base_url('index.php/adminzone/dashboard/employeeNotification');?>">Show All Alerts</a>
			</div>
		</li>

		<!-- Nav Item - Messages -->
		
		<div class="topbar-divider d-none d-sm-block"></div>

		<!-- Nav Item - User Information -->
		<li class="nav-item dropdown no-arrow">
			<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
				data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<span class="mr-2 d-none d-lg-inline text-gray-600 small">
				<?php if(isset($this->session->userData('auth')['name']))
                                echo strtoupper($this->session->userData('auth')['name']);
                         ?>
				
				</span>
			   
			</a>
			
			<!-- Dropdown - User Information -->
			<a   data-toggle="modal" data-target="#logoutModal">
			<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
				aria-labelledby="userDropdown">
					
				
					
					<a class="dropdown-item" href="<?=base_url('index.php/adminzone/login/logout/');?>">Logout</a>
				
			</div>
				</a>
		</li>
							

	</ul>

                               
                </nav>
<style>
.topbar {
    height: 3.5rem;
}
.topbar .nav-item .nav-link {
    height: 2.85rem;
    display: flex;
    align-items: center;
    padding: 0 .75rem;
}
.tnb {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  padding-left:50px;
  border: 1px solid #1C304C;
  background-color: #1C304C    ;
}

.tn {
  float: left;
   border-right: 1px solid #4f4992;
}
.tn li:last-child {
  border-right: none;
}
.tn a {
  display: block;
  color: white;
  text-align: center;
  padding: 8px 15px;
  text-decoration: none;
}

.tn a:hover{
  background-color: #3b357b    ;
}

.tn a.active {
  color: white;
  background-color: #514b95    ;
}
</style>

<div>
<nav>

                    <!-- Sidebar Toggle (Topbar) -->
                    

                    <!-- Topbar Search -->
                    

               
<ul class="tnb">
  <li class="tn"><a class="active" href="<?=base_url('index.php/adminzone/dashboard');?>">My Wall</a></li>
  <li class="tn"><a href="<?=base_url('index.php/adminzone/EmployeeInfo/AboutMe');?>">About Me</a></li>
  <li class="tn"><a href="<?=base_url('index.php/adminzone/EmployeeAttendance/EmployeePay');?>">My Pay</a></li>
  <li class="tn"><a href="<?=base_url('index.php/adminzone/EmployeeAttendance/myAttendance');?>">Attendence</a></li>
  <li class="tn"><a href="<?=base_url('index.php/adminzone/EmployeeAttendance/EmployeeTimeList');?>">My Time</a></li>
  <li class="tn"><a href="<?=base_url('index.php/adminzone/EmployeeInfo/CompanyGoals');?>">Goals</a></li>
  <li class="tn"><a href="<?=base_url('index.php/adminzone/hierarchy');?>">Organisation Chart</a></li>
  <li class="tn"><a href="<?=base_url('index.php/adminzone/dashboard/internalOpening');?>">Internal Opening</a></li>
  
  <li class="tn"><a href="<?=base_url('index.php/adminzone/DocFile/singleEmployeeDoc');?>">Files</a></li>
  <li class="tn"><a href="<?=base_url('index.php/adminzone/Separation/AddExitRequest');?>">Exit Request</a></li>
  <li class="tn"><a href="<?=base_url('index.php/adminzone/Appraisal/OtherPage');?>">Other Page</a></li>
  <li class="tn"><a href="<?=base_url('index.php/adminzone/Appraisal/AppraisalRequest');?>">Evaluation Form</a></li>
  
  <li class="tn"><button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button></li>
</ul>
 </nav>
</div>

	