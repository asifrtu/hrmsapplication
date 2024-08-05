<?php include('header.php'); ?>


    <!-- Page Wrapper -->
    <div id="wrapper">
	<?php include('sidebar.php');?>

        <!-- Content Wrapper -->
        <div id="content-wrapper bg-gradient-primary" class="d-flex flex-column" style="margin-top:40px;">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    

                    <!-- Content Row -->
									<div class="row" >
									<div class="col-lg-12">
									<label  style="float:right; color:white; font-weight:bold;">
									Mark Your Attendence
									<input type="checkbox">
									</label>
									</div>
									</div>
					<div class="row" >

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4" style="margin-bottom: 0rem!important;">
						<h6 style="margin-bottom: 1rem!important; color:white;" class="m-0 font-weight-bold">Welcome Smith!</h6>
						<div class="card shadow mb-4" style="margin-bottom: 0rem!important; background-color: #514b95!important;">
                                <div class="card-header py-3" style=" border-bottom: 1px solid #6f42c1; padding-bottom: 0rem!important; background-color: #514b95!important;">
                                    
                                    <div class="row">
                                    <div class="col-lg-12">
									
									<h6 style="color:white!important;" ><?php date_default_timezone_set("Asia/Calcutta");
							echo date("d F Y h:i A") . "\n"; ?></h6>
											</div>
											
									</div>
                                </div>
								
                        </div>
                        </div>
                        <div class="col-lg-6 mb-4" style="margin-bottom: 0rem!important;">
						<h6 style="margin-bottom: 1rem!important; color:white;" class="m-0 font-weight-bold ">My Wall:</h6>
                        <div class="card shadow mb-4 " style="background-color: #514b95!important;">
                                <div class="form-group">
									
									<input type="text" class="form-control" placeholder="What's on your mind..." id="email">
									</div>
                        </div>
						</div>
                    </div>
                    <!-- Content Row -->

                    <div class="row ">

                        <!-- Area Chart -->
                        <div class="col-lg-6 mb-4">
                            <div class="card shadow mb-4 " style="background-color:#514b95;">
                                <!-- Card Header - Dropdown -->
                               
									<div class="row">
									<div class="col-md-4 faviconCustomise">
									<a class="fah" href="#">
									<div class="info-box">
									
									<i class="fa fa-envelope-square gfColor" style=" font-size:30px"></i>
									<div class="info-box-content">
									<span class="info-box-text gfColor">Messages</span>
									

									</div>
									<!-- /.info-box-content -->
									</div>
									</a>
									</div>
									<div class="col-md-4 faviconCustomise">
									<div class="info-box">
									<div class="col-auto">
									<i class="fa fa-birthday-cake gfColor" style="font-size:26px" aria-hidden="true"></i>
									</div>

									<div class="info-box-content">
									<span class="info-box-text gfColor">Birthdays</span>

									</div>
									<!-- /.info-box-content -->
									</div>
									</div>
									<div class="col-md-4 faviconCustomise">
									<div class="info-box">
									<span ><i class="fa fa-calendar gfColor" style="font-size:26px"></i></span>
									
									<div class="info-box-content">
									<span class="info-box-text gfColor">Calendar</span>

									</div>
									<!-- /.info-box-content -->
									</div>
									</div>
									</div> 
									
									<div class="row">
									<div class="col-md-4 faviconCustomise">
									<div class="info-box">
									<i class="fa fa-bell gfColor" style="font-size:26px"></i>
									<div class="info-box-content ">
									<span class="info-box-text gfColor">Notification</span>

									</div>
									<!-- /.info-box-content -->
									</div>
									</div>
									
									<div class="col-md-4 faviconCustomise">
									<div class="info-box">
									<i class="fa fa-bullhorn gfColor" style="font-size:26px"></i>
										
									<div class="info-box-content">
									<span class="info-box-text gfColor">Announcement</span>

									</div>
									<!-- /.info-box-content -->
									</div>
									</div>
									<div class="col-md-4 faviconCustomise">
									<div class="info-box">
									<div class="col-auto">
									<i class="fas fa-tasks gfColor" style="font-size:26px"></i>
									</div>

									<div class="info-box-content">
									<span class="info-box-text gfColor">TAsks</span>

									</div>
									<!-- /.info-box-content -->
									</div>
									</div>
									</div>
									
									
                                
                                </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-lg-6 mb-4">
                            <div class="card shadow mb-4 " style="background-color:#514b95;">
                                <!-- Card Header - Dropdown -->
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                            src="img/undraw_posting_photo.svg" alt="">
                                    </div>
									<p style="text-align:center; color: white;">Lorem ipsum dolor sit amet,
									consectetur adipiscing elit, sed do eiusmod tempor
									Massa vitae tortor condimentum lacinia quis vel eros donec.
									Mattis pellentesque id nibh tortor id aliquet lectus proin nibh. Massa sed elementum</p>

                                </div>
                        </div>
						</div>

                    <!-- Content Row -->
                    

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

<?php include('footer.php'); ?>