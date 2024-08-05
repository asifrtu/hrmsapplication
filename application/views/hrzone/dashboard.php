<?php include('header.php'); ?>

<style>
#welcomeDashboard{
	background-color: #6495ED;
    padding: 54px 0 10px 0;
    margin: 14px;
	border-radius: .35rem;
    border-bottom: 32px solid #dec9f7!important;
}
.adminTitle{
	text-align: center;
    color: white;
}
#dashboardClock{
	color:white!important;
	padding: 13px;
    
}
.addempbtn a {
  display: block;
  color: white;
  
  text-decoration: none;
}
.addEmpBtn{
    float:center;
    background: #7db135;
    color: white;
    font-weight: 400;
    border-radius: 2px;
    padding: .2em 0.5em 0.2em 0.5em;
    border: none !important; 
	margin-top: 20px;
	margin-left: 55px;
}
.MAR-3 {
   
    border-bottom: 5px solid #dec9f7!important;
}
.AR2{
    background-color: #1C304C!important;
}
.bg-gradient-primary {
    background-color: #dec9f7!important;
    background-image: none !important;
    background-size: cover;
}
</style>
<div class="">
 	
	<button class="addEmpBtn addempbtn" ><a href="<?=base_url('index.php/hrzone/dashboard/addEmployee');?>">+ Add New Employee</a></button>
							
</div>
    <!-- Page Wrapper -->
    <div id="wrapper">
	<?php include('sidebar.php');?>

        <!-- Content Wrapper -->
        <div id="content-wrapper bg-gradient-primary" class="container-fluid col-lg-10" style="margin-top:40px;">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="">

                    <!-- Page Heading -->
                    

                    <!-- Content Row -->
					<div class="row" >
					<div class="col-lg-12">
					<label  class="markAttendence">
					Mark Your Attendence
					<input type="checkbox">
					</label>
					</div>
					</div>
									
									
									
					<div class="row" >
					<div class="container-fluid" id="welcomeDashboard">
					
						<h1 class="adminTitle">Welcome Admin!</h1>
					<div class="row" style="height:97px;">
						
                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4" style="margin-bottom: 0rem!important;">
						<h6 style="margin-bottom: 1rem!important; color:white;" class="m-0 font-weight-bold">Welcome Smith!</h6>
						<div class="card shadow mb-4" style="margin-bottom: 0rem!important; background-color: #514b95!important;">
                                <div class="timeDas">
                                    
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
                        <div class="mb-4 " style="background-color: #514b95!important;">
                                <div class="">
									
									<input type="text" class="form-control myWallInput" placeholder="What's on your mind..." id="email">
									</div>
                        </div>
						</div>
                    </div>
                    </div>
                    </div>
                    <!-- Content Row -->

                    <div class="row ">

                        <!-- Area Chart -->
                        <div class="col-lg-6 mb-4" style="border-right: 10px solid #dec9f7;">
                            <div class="card shadow mb-4 notifySideBdr" >
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
											
									<i class="fas fa-sticky-note gfColor" style="font-size:26px"></i>
									</div>

									<div class="info-box-content">
									<span class="info-box-text gfColor">Raised Tickets</span>

									</div>
									<!-- /.info-box-content -->
									</div>
									</div>
									</div>
									
									<div class="row">
									<div class="col-md-4 faviconCustomise">
									<div class="info-box">
									<i class="fas fa-folder-open gfColor" style="font-size:26px"></i>
									<div class="info-box-content ">
									<span class="info-box-text gfColor">Projects</span>

									</div>
									<!-- /.info-box-content -->
									</div>
									</div>
									
									<div class="col-md-4 faviconCustomise">
									<div class="info-box">
									<i class="fas fa-tasks gfColor" style="font-size:26px"></i>
										
									<div class="info-box-content">
									<span class="info-box-text gfColor">Events</span>

									</div>
									<!-- /.info-box-content -->
									</div>
									</div>
									<div class="col-md-4 faviconCustomise">
									<div class="info-box">
									<div class="col-auto">
									
									<i class="fas fa-users gfColor" style="font-size:26px"></i>
									</div>

									<div class="info-box-content">
									<span class="info-box-text gfColor">Meeting</span>

									</div>
									<!-- /.info-box-content -->
									</div>
									</div>
									</div>
									
									
                                
                                </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-lg-6 mb-4" style="border-right: 10px solid #dec9f7;">
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
<script>
$('*[data-poload]').hover(function() {
    var e = $(this);
    e.off('hover');
    $.get(e.data('poload'), function(d) {
        e.popover({
            content: d
        }).popover('show');
    });
});
</script>
<?php include('footer.php'); ?>