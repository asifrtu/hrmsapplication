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
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">

</head>

<body id="page-top" class="bg-gradient-primary">

<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow" style="margin-bottom: 0rem!important;">

                    <!-- Sidebar Toggle (Topbar) -->
                    
					<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
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
                        

                        <!-- Nav Item - Alerts -->
                        

                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userRegisterDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                
								<div class="topbar-divider d-none d-sm-block"></div>
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><b><u style="text-decoration: none;">SIGN UP</u></b></span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userRegisterDropdown">
                                
                                <a class="dropdown-item" href="<?=base_url('index.php/adminzone/register/signUp');?>">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    EMPLOYEE SIGN UP
                                </a>
                                <a class="dropdown-item" href="<?=base_url('index.php/hrzone/register/signUp');?>">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    ADMIN SIGN UP
                                </a>
                            </div>
                        </li>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                
								<div class="topbar-divider d-none d-sm-block"></div>
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><b><u style="text-decoration: none;">SIGN IN</u></b></span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                
                                <a class="dropdown-item" href="<?=base_url('index.php/adminzone/login');?>">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Employee Login
                                </a>
                                <a class="dropdown-item" href="<?=base_url('index.php/hrzone/login');?>">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    HR Login
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
				
				
<style>
.topbar .topbar-divider {
    width: 0;
    border-right: 1px solid #e3e6f0;
    height: calc(5.2rem - 2rem);
    margin: auto 1rem;
}
.topbar .nav-item .nav-link {
    height: 2.85rem;
    display: flex;
    align-items: center;
    padding: 0rem!important;
}
.topbar {
    height: 3.5rem;
}
.topbar .nav-item .nav-link {
    height: 2.85rem;
    display: flex;
    align-items: center;
    padding: 0 .75rem;
}
</style>