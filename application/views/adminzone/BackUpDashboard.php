<?php include('header.php'); ?>

<style>
.myWallInput{
	padding: 1.5rem .75rem;
	border-radius: 5px;
	
	display: block;
    width: 100%;
    height: calc(1.5em + .75rem + 2px);
   
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #6e707e;
    background-color: #fff;
    background-clip: padding-box;
   border-bottom:none!important;
}
.timeDas{
	border-bottom: 1px solid #6f42c1;
	padding-bottom: 0.3rem!important; 
	background-color: #514b95!important;
	border-radius: 5px;
    padding-top: 15px;
}

.markAttendence {
    float: right;
    color: white;
    font-weight: 400;
}

.Attendancebtn{
	border: 1px solid #b5b5b5;
    border-radius: 3px;
    padding: 1px 30px;
    color: white;
    background: #514b95;
}

.clearfix{
	list-style: none;
}
.sidebarWallScroll {
			
 
  width: auto;
  height: 413px;
  overflow:auto;
  overflow-y: auto;
  
  border-radius: 0 0px 0px 0;
}


.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 0 0 0 0!important;
    
}


.tnUemp {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
 
}
.tnemp {
  float: left;
  text-align:center;
  padding:2px 0;
	
}
.tnemp a {
  
  color: #706e80;
  text-align: center;
  padding: 8px 11px;
  text-decoration: none;
  
}
</style>
    <!-- Page Wrapper -->
    <div id="wrapper">
	<?php include('sidebar.php');?>

        <!-- Content Wrapper -->
        <div id="content-wrapper bg-gradient-primary" class="d-flex flex-column" style="margin-top:40px; width: 1141px;">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div style="background-color:white;">
						
					</div>

                    <!-- Content Row -->
									<div class="row" >
									<div class="col-lg-12">
									<label  class="markAttendence">
									Mark your attendance
									<button class="Attendancebtn" ><a href="javascript: void(0);" id="attnId" style="text-decoration:none; color:white;">Click</a></button>
									</label>
									</div>
									</div>
					<div class="row" >

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4" style="margin-bottom: 0rem!important; padding-left: 0rem!important; ">
						<h6 style="margin-bottom: 1rem!important; color:white;" class="m-0">Welcome <?php echo $UserInfo->name; ?>!</h6>
						<div class="card shadow mb-4" style="margin-bottom: 0rem!important; background-color: #514b95!important;">
                                <div class="timeDas">
                                    
                                    <div class="row">
                                    <div class="col-lg-12">
									
									<h6 style="color:white!important; font-size: 14px; font-weight: 300;" ><?php date_default_timezone_set("Asia/Calcutta");
							echo date("d F Y h:i A") . "\n"; ?></h6>
											</div>
											
									</div>
                                </div>
								
                        </div>
                        </div>
                        <div class="col-lg-6 mb-4" style="margin-bottom: 0rem!important; padding-right: 0rem!important;">
						<h6 style="margin-bottom: 1rem!important; color:white;" class="m-0">My Wall:</h6>
                        <div class="mb-4 " style="background-color: #514b95!important;">
                                <div class="">
									
									<input type="text" class="form-control myWallInput" placeholder="What's on your mind..." id="email">
									</div>
                        </div>
						</div>
                    </div>
                    <!-- Content Row -->
				<div class="card" style="margin-bottom:50px;">
                    <div class="row ">

                        <!-- Area Chart -->
                        <div class="col-lg-6" style="border-right: 10px solid #2f296a; padding-left: 0rem!important; padding-right: 0rem!important;">
                                <!-- Card Header - Dropdown -->
                                <div class="card-body notifySideBdr">
                                
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
									<span class="info-box-text gfColor">Report Tickets</span>

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
                                <!-- Card Header - Dropdown -->
                        <div class="col-lg-6" style="border-left: 10px solid #2f296a;padding-right: 0rem!important; padding-left: 0rem!important;">
                                <div class="card-body notifySideBdr sidebarWallScroll style-18">
                                    
									
									<div class="container " >
									<div class="row">
									<div class="col-md-12" >
									<div class="blog-comment" >

									<ul class="comments" id="htmlRenderComment" style="padding-left: 0;">
									</ul>
									</div>

									</div>


									</div>


									</div>
                                </div>
                        </div>
						</div>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
	$(document).ready(function(){
		
		
		var YearID = 2021;
		CommentSystem(YearID);
		
		
  $("#attnId").click(function(){
    // alert("Dekh k bhai.........");
	var ajaxurl = "<?=site_url('adminzone/dashboard/AutoAttendance');?>";
			$.ajax({
				type: "post",
				url: ajaxurl,
				data: {present:true },
				dataType: "JSON",
				success: function(response){
					// alert(response.message);
					if(response.status === 'P'){
						alert(response.message);
					}else if(response.status == 'MD'){
						alert(response.message);
					}else if(response.status == 'A'){
						alert(response.message);
					}else{
						alert(response.message);
					}
					
					
				}
			
			});
  });
});
		
	









function CommentSystem(YearID){
	var ajaxurl = "<?=site_url('adminzone/EventController/AdminComment');?>";
        $.ajax({
            type: "get",
            url: ajaxurl,
			data: {YearID:YearID},
			dataType: "JSON"
        }).done(function(response){
			
			datacomment = response.dataAdmin;
			console.log(datacomment);
			if(response)
				$("#htmlRenderComment").html(`
			
			
			${response.dataAnni.map(function(dataAnni, index){
					return(`
					
							
								<li class="clearfix">

							<div class="media g-mb-30 media-comment">
							<div class="media-body u-shadow-v18 g-bg-secondary g-pa-30" style="background: #56519d; border-radius: 0 12px; padding: 10px; margin-top: 10px;">
							<div class="d-flex flex-row g-mb-15">
							
							</div>

							<p style="color:white; margin-bottom: 0.1rem;">${dataAnni.title}</p>


							</div>
							</div>

							</li>
							`)}).join('')}
							
				
				
				
				
			${response.datadob.map(function(datadob, index){
					return(`
					
							
								<li class="clearfix">

							<div class="media g-mb-30 media-comment">
							<div class="media-body u-shadow-v18 g-bg-secondary g-pa-30" style="background: #56519d; border-radius: 0 12px; padding: 10px; margin-top: 10px;">
							<div class="d-flex flex-row g-mb-15">
							
							</div>

							<p style="color:white; margin-bottom: 0.1rem;">${datadob.title}</p>


							</div>
							</div>

							</li>
							`)}).join('')}
							
				
				
				
				
				
							
						${response.dataEvent.map(function(dataEvent, index){
					return(`
					
							
								<li class="clearfix">

							<div class="media g-mb-30 media-comment">
							<div class="media-body u-shadow-v18 g-bg-secondary g-pa-30" style="background: #56519d; border-radius: 0 12px; padding: 10px; margin-top: 10px;">
							<div class="d-flex flex-row g-mb-15">
							<h5 class="h5 g-color-gray-dark-v1 mb-0" style="color:white; font-size:0.7rem; margin-right: 15px;">${dataEvent.startTime}&nbsp;&nbsp;-&nbsp;&nbsp;${dataEvent.endTime}</h5>
							
							<div class=" ">
							
							
							<ul class="tnUemp">
							<li class="tnemp " style="color:white; font-size:10px;">&nbsp;&nbsp;|&nbsp;${dataEvent.startEvent}&nbsp;</li>
							<li class="tnemp " style="color:white; font-size:10px;">&nbsp;&nbsp;|&nbsp;Created By&nbsp;:&nbsp;${dataEvent.createdBy}&nbsp;|&nbsp;</li>
							
							</ul>

							</div>
						
							
							
							
							
							</div>

							<p style="color:white; margin-bottom: 0.1rem;">${dataEvent.title}</p>
							<h6 style="color:white; font-size:13px; margin-bottom: 0.1rem;">${dataEvent.discription}</h6>


							</div>
							</div>

							</li>
							`)}).join('')}
							
							
							
							
			
			${response.data.map(function(data, index){
					return(`
					
							
								<li class="clearfix">

							<div class="media g-mb-30 media-comment">
							<div class="media-body u-shadow-v18 g-bg-secondary g-pa-30" style="background: #56519d; border-radius: 0 12px; padding: 10px; margin-top: 10px;">
							<div class="d-flex flex-row g-mb-15">
							<h5 class="h5 g-color-gray-dark-v1 mb-0" style="font-size:0.7rem; margin-right: 15px;"></h5>
							
							</div>

							<p style="color:white; margin-bottom: 0.1rem;">${data.CommentUser}</p>


							</div>
							</div>

							</li>
							`)}).join('')}
							
							
					
					
					
					`);
            else 
				$("#CompanydataTable tbody").html("<div>No data Found.....</div>");
        });
}



</script>
<?php include('footer.php'); ?>