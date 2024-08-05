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
	<link rel="stylesheet" href=" <?= base_url("Assets/bootstrap-star-rating/css/star-rating.min.css") ?>" >
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body id="page-top" class="bg-gradient-primary">

<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow" style="margin-bottom: 0rem!important;">

                    <!-- Sidebar Toggle (Topbar) -->
                    
					<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=base_url('index.php/hrzone/dashboard/wall');?>">
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
				<a class="dropdown-item d-flex align-items-center" href="<?=base_url('index.php/hrzone/dashboard/employeeNotification');?>">
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
				<a class="dropdown-item text-center small text-gray-500" href="<?=base_url('index.php/hrzone/dashboard/employeeNotification');?>">Show All Alerts</a>
			</div>
		</li>

		<!-- Nav Item - Messages -->
		
		<div class="topbar-divider d-none d-sm-block"></div>

		<!-- Nav Item - User Information -->
		<li class="nav-item dropdown no-arrow">
			<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
				data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<span class="mr-2 d-none d-lg-inline text-gray-600 small">
				<?php if(!empty($this->session->userData('auth')['name']))
                                echo strtoupper($this->session->userData('auth')['name']);
                         ?>
				
				</span>
			   
			</a>
			
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
  
  background-color: #514b95    ;
}

.tn {
  float: left;
   border-right: 1px solid #2e2869;
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
<nav class="">

                    <!-- Sidebar Toggle (Topbar) -->
                    

                    <!-- Topbar Search -->
                    

               
<ul class="tnb">
  <li class="tn"><a class="active" href="<?=base_url('index.php/hrzone/dashboard/wall');?>">Hr Wall</a></li>
  <li class="tn"><a href="<?=base_url('index.php/hrzone/Users/CompanyMissionAndGoals');?>">About Company</a></li>
  <li class="tn"><a href="<?=base_url('index.php/hrzone/Employee/employeeList');?>">All Employees</a></li>
  <li class="tn"><a href="<?=base_url('index.php/hrzone/CompanyGoals/CompanyGoalView');?>">Goals</a></li>
  <li class="tn"><a href="<?=base_url('index.php/hrzone/Pay/CompensationList');?>">Pay and Time</a></li>
  <li class="tn"><a href="<?=base_url('index.php/hrzone/Attendance/HrAttendance');?>">Calendar</a></li>
  <li class="tn"><a href="<?=base_url('index.php/hrzone/hierarchy');?>">Organisation Chart</a></li>
  <li class="tn"><a href="<?=base_url('index.php/hrzone/dashboard/jobOpening');?>">Job & Career</a></li>
  
  <li class="tn"><a href="<?=base_url('index.php/hrzone/dashboard/files');?>">Files</a></li>
  <li class="tn"><a href="<?=base_url('index.php/hrzone/Appraisal/OtherPage');?>">Other Pages</a></li>
  <li class="tn"><a href="<?=base_url('index.php/hrzone/Separation/EmpExitRequest');?>">Exit Request</a></li>
  <li class="tn"><a href="<?=base_url('index.php/hrzone/Appraisal/AppraisalRequest');?>">Appraisal</a></li>
  
  <li class="tn"><button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button></li>
</ul>
 </nav>
</div>

	