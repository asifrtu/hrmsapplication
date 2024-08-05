<?php include('header.php'); ?>
<?php include('fileSidebar.php'); ?>
<style>

.ColorSecondary{
	background-color:#6f42c1;
	padding: .35rem 1.25rem!important;
	
}

input.bPayroll{
 color:#6f42c1;
}
.cmPayroll{
 color:#fff;
}
.Qdxupload-btn-wrapper {
  position: relative;
  
  display: inline-block;
}

.btnQd {
  border: 2px solid #00d3c3;
  color: white;
  background-color: #00d3c3;
  padding: 4px 10px;
  border-radius: 0px;
  font-size: 20px;
  font-weight: bold;
}
.btnQdUpload {
  border: 2px solid white;
  color: gray;
  background-color: white;
  padding: 3px 9px;
  border-radius: 0px;
  font-size: 20px;
  font-weight: bold;
}

.Qdxupload-btn-wrapper input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}


.empFile{
	border-bottom: 2px solid white;
    padding: 10px;
    background-color: white;
	color:grey;

}

 .empFile a {
 
  color: grey;
  
  text-decoration: none;
}
.tnUemp {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
 
}
.tnemp {
  float: left;
  padding:2px 0;
	
}
.tnemp a {
  
  color: #706e80;
  text-align: center;
  padding: 8px 11px;
  text-decoration: none;
  
}
.fC a {
  text-decoration: none;
  color: #706e80;
}
.actionFontSize{
	background: #fff!important; color: #1c304c!important;
}
 .cmPayroll{
	background: #00d3c3!important; color: #fff!important;
}

.btnQdUpload {
    border: none;
    color: white;
    background-color: #00d3c3;
    font-size: 12px;
    border-radius: 3px;
}
.actionFile a{
	text-decoration:none;
	color:#504a94;
}
.col-lg-1{
    max-width: 4.33333%;
    padding-right:0px!important;
}
th {
    background: #00d3c3!important;
    position: sticky;
    top: 0;
    color: #fff!important;
    font-size: 14px;
    font-weight: 500;
    text-align: center;
}
tbody td {
    font-size:16px;
    color:#343434;
}

.ColorPrimary {
    FONT-SIZE: 15PX;
}
.card-header {
    padding: 0.3rem 1.25rem!important ;}

 </style>
        
	
        <!-- Content Wrapper -->
        <div id="content-wrapper bg-gradient-primary" class="container-fluid col-lg-10" style="margin-bottom:50px; margin-top:30px; padding-left:10px;">
       
            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="">

                    <!-- Page Heading -->
                    
					<div class="card shadow mb-4" style="margin-bottom:100px;">
					<div class="card-header ColorSecondaryPre">
                        <div class="d-flex">
                        <div><a href="<?=site_url('hrzone/dashboard/wall');?>" style="color: #fff;font-size: 15px;"><i class="fa fa-home" aria-hidden="true"></i></a></div>
                        <div class="mr-auto"> &nbsp;&nbsp;<i style="font-size: 10px;color: #00d3c3;" class="fas fa-chevron-right"></i><span class="breadcrumb_text" style="font-size: 15px;color: #00d3c3;font-weight: 600;">&nbsp; Files</span></div>
                        <div class="">
							<h6 style="color: #00d3c3;">Upload File&nbsp;&nbsp;</h6>
              				
						</div>
						<div><button class="btnQdUpload"><i class="fas fa-folder-open"></i></button> </div>
						</div>
                    </div>
						
                           
                    <!-- Content Row -->
					  <!-- Area Chart -->
						<div class="shadow ">
							
							<div class="card-body">
							
							
							<div class="table-responsive">
									<table class="table table-bordered table-sm" id="dataTable" width="100%">
										<thead>
											<tr>
												<th class="text-left" colspan="10" class="cmPayroll"> All Folders</th>
												<th colspan="1" class="cmPayroll">
													<span class="cmPayroll"><a href="#" class="cmPayroll">Action</a></span>
												
												</th>
												
												
												
												
											</tr>
										</thead>
										
										<tbody>
											<tr>
												
												<td class="fC" colspan="10"><i class="fa fa-folder" aria-hidden="true"></i>&nbsp; <a href="<?=base_url('index.php/hrzone/dashboard/fileResumeAndApplication');?>">Signed Documents</a></td>
												<td colspan="1">
													<div class=" " style="display: flex;justify-content: center;">
													<ul class="tnUemp">
													<li class="tnemp" style="float:right;"><a href="#"><i style="color:red;" class="actionFontSize fas fa-trash-alt"></i></a></li>
													<li class="tnemp" style="float:right;"><a href="#"><i style="color:green;" class="actionFontSize fas fa-edit"></i></a></li>
													</ul>

													</div>
												
												</td>
												
											</tr>
											<tr>
												
												<td class="fC" colspan="10"><i class="fa fa-folder" aria-hidden="true"></i>&nbsp; <a href="<?=base_url('index.php/hrzone/dashboard/fileResumeAndApplication');?>">Tasklist Attachments</a></td>
												<td colspan="1">
													<div class=" " style="display: flex;justify-content: center;">
													<ul class="tnUemp">
													<li class="tnemp" style="float:right;"><a href="#"><i style="color:red;" class="actionFontSize fas fa-trash-alt"></i></a></li>
													<li class="tnemp" style="float:right;"><a href="#"><i style="color:green;" class="actionFontSize fas fa-edit"></i></a></li>
													</ul>

													</div>
												
												</td>
												
											</tr>
											
											<tr>
												
												<td class="fC" colspan="10"><i class="fa fa-folder" aria-hidden="true"></i>&nbsp; <a href="<?=base_url('index.php/hrzone/dashboard/fileResumeAndApplication');?>">Workflow Attachments</a></td>
												<td colspan="1">
													<div class=" " style="display: flex;justify-content: center;">
													<ul class="tnUemp">
													<li class="tnemp" style="float:right;"><a href="#"><i style="color:red;" class="actionFontSize fas fa-trash-alt"></i></a></li>
													<li class="tnemp" style="float:right;"><a href="#"><i style="color:green;" class="actionFontSize fas fa-edit"></i></a></li>
													</ul>

													</div>
												
												</td>
												
											</tr>
											
											
											
											
											
											
											
										</tbody>
									</table>
								</div>
							</div>
						</div>
							
					
							
						
							
							
					
							
							
							
							
					
							
							
						
						
                   

                    <!-- Content Row -->
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
<script>
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>
<?php include('footer.php'); ?>