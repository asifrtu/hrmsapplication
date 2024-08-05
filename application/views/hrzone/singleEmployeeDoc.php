<?php include('header.php'); ?>
<?php include('commonSidebar.php'); ?>


<?php 

// print_r($empSingleDoc);die;

?>
<style>
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
.tnULower {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
 
}
.tnLower {
	
    border: 1px solid;
    margin: 10px 14px;
	padding: 3px 9px;
	float:right;
}
.tnLower a {
  

  text-align: center;
 
  text-decoration: none;
  
}

.Qdxupload-btn-wrapper {
  position: relative;
 
  display: inline-block;
}

.btnQd {
    border: none;
    color: white;
    background-color: #faa931;
    font-size: 12px;
    border-radius: 3px;
    margin-top: 5px;
    margin-right: 10px;
  
}
.cmPayroll{
 color:#504a94;
}
.Qdxupload-btn-wrapper input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}
.actionFontSize .cmPayroll{
	background: #00d3c3!important; color: #fff!important;
};
table.table tr th:last-child {
		width: 165px;
	}
table.table tr th:first-child {
		width: 40px;
	}
	
.table-sm td, .table-sm th {
    padding: .5rem 0.3rem 0.1rem 0.3rem;
}
input[type=checkbox], input[type=radio] {
    
    width: 10px!important;
}

.checkBoxS{
	padding-left: 9px;

}
.backBtn{
	
    
}

.checkBoxS{
	padding-left:0px;
}

tbody td{
	text-align: center;
	font-size:12px;
}


.backBtn a {
 
  color:#898890;
  
  text-decoration: none;
}
.ColorPrimary{
    FONT-SIZE:15PX;
}
.card-header {
    padding: 0.5rem 1.25rem;
}   
th {
    background: #00d3c3!important; color: #fff!important;
    position: sticky;
    top: 0;
    font-size: 14px;
    font-weight: 500;
    text-align: center;
}
.col-lg-1{
    max-width: 4.33333%;
padding-right:0px!important}
</style>

 <!-- Content Wrapper -->
        <div id="content-wrapper bg-gradient-primary" class="container-fluid col-lg-10" style=" margin-bottom:50px; padding-left:10px;">

     
            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="">

                    <!-- Page Heading -->
                    
					<div class="card shadow mb-4" style="margin-bottom:100px;">
                        <div class="card-header ColorSecondaryPre">
						<div class="row d-flex pl-1 pt-1 pb-1">
						
						<div class="col-lg-1"><a href="<?php echo base_url() ?>index.php/hrzone/dashboard/wall" style="color: white;font-size: 15px;"><i class="fa fa-home" aria-hidden="true"></i></a></div>
						<div class="col-lg-7"> <i style="font-size: 10px;color: white;" class="fas fa-chevron-right"></i>&nbsp;<span class="breadcrumb_text"  style="font-size: 15px;color: #fff;"> Employee DataBase  &nbsp;</span>&nbsp;<i style="font-size: 10px;color: white;" class="fas fa-chevron-right"></i>&nbsp;&nbsp;&nbsp;<span class="breadcrumb_text"  style="font-size: 15px;color: #fff;font-weight: 600;margin-left: -4px;">Employee Documents</span></div>

						<div class="col-lg-4 d-flex" style="justify-content: right;">
							<h6 class="m-0 ColorPrimary"  style="margin-top: 6px!important;">Upload File&nbsp;&nbsp;</h6>
							<button data-toggle="modal" data-target="#myModal" class="btnQd ">
							
							<i class="fa fa-upload" aria-hidden="true"></i>
							</button>
							
							</div>
						</div>
						
                        </div>
					
                        
                    <!-- Content Row -->
					  <!-- Area Chart -->
						<div class="shadow ">
							<?php if(!empty($this->session->flashdata('message'))) { ?>
                    <div class="alert alert-info alert-dismissible">
                    <button type="button" class="close" data-bs-dismiss="alert">&times;</button>
                    <?=$this->session->flashdata('message');?>
                    </div>
                <?php } ?>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-bordered table-sm" id="example" width="100%">
										<thead>
											<tr>
												
												<th colspan="1">
												<span class="custom-checkbox checkBoxS">
												<input type="checkbox" id="chkAll" />
												
												</span>
												</th>
												<th colspan="10" class="cmPayroll text-left"> All Files</th>
												<th colspan="1" class="cmPayroll" style="text-align: center;">
													Action
												
												</th>
												
												
												
												
											</tr>
										</thead>
										
										<tbody>
										
											<?php 
											// echo $empgetUserId->UserId;
											// print_r($empgetUserId);
											// die;
											if(count($empSingleDoc)):  ?>
									
											<?php	
											
											foreach($empSingleDoc as $emp): ?>
											
											<tr>
												<td colspan="1">
													<span class="custom-checkbox checkBoxS">
													<input type="checkbox" name="employees" />
													
													</span></td>
												<td  class=" text-left" colspan="10" ><span><i style="color: #e80000;" class="fas fa-file-pdf"></i></i></span>&nbsp; 
												<?php  
												$filetmpPath = $emp->filePath;
												$fileCheck = explode(".", $filetmpPath);
												
												// echo print_r($fileCheck);die;
												if($emp->fileName != ""){
													
												echo $emp->fileName; 
												}else{
													echo $fileCheck[0]; 
												}
												
												
												
												
												?></td>
												
												
												<td colspan="1">
													<div class=" ">
													<ul class="tnUemp">
													<li class="tnemp close" style="float:right;"><a href="<?=base_url('index.php/hrzone/Employee/singleEmpDownload/'.$emp->Id);?>"><i class="actionFontSize fa fa-download" aria-hidden="true"></i></a></li>
													<li class="tnemp close" style="float:right;"><a class="singleDoc" data-singleId="<?php echo $emp->Id; ?>"><i class="actionFontSize fas fa-trash-alt"></i></a></li>
													<li class="tnemp close" style="float:right;"><a class="FileNameEdit" data-DocId="<?php echo $emp->Id; ?>"><i class="actionFontSize fas fa-edit"></i></a></li>
													<li class="tnemp close" style="float:right;"><a href="<?=base_url('index.php/hrzone/Employee/singleEmpView/'.$emp->Id);?>" target="_blank"><i class="actionFontSize fa fa-eye" aria-hidden="true"></i></a></li>
													</ul>

													</div>
												
												</td>
												
											</tr>
											
											
												
											<?php endforeach;  ?>
										<?php else: ?>
										<tr>
										<td colspan="3">Data is Not Available</td>
										<?php endif; ?>

										</tr>
											
											
											
											
											
										</tbody>
									</table>
								</div>
								<div class="row">
								
								<div class="col-lg-4">
								<div class="row" style="float:center;">
									<div class=" " >
									<ul class="tnULower">
									<li class="tnLower"><i class="actionFontSize fa fa-download" aria-hidden="true"></i></li>
									<li class="tnLower"><i class="actionFontSize fas fa-trash-alt"></i></li>
									</ul>

									</div>
								</div>
								</div>
								
								</div>
								<div>
								
								<input id="file-input" type="filePath" name="name" style="display: none;" />
								</div>
							<span class="backBtn"><a href="<?=base_url('index.php/hrzone/Employee/allEmployeeDoc');?>"><i class="fas fa-arrow-circle-left"></i>&nbsp;&nbsp;Back</a></span>
							
								
								
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
<div class="modal " id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
   
    
      <!-- Modal content-->
      <div class="modal-content" style="margin: 196px 9px 0 259px;  width: 89%!important; ">
	  
		
                        <div class="card-header" style="padding:0!important; background-color: #2e2869;">
							
							<div class="row">
                            <h6 class="ColorPrimary" style="padding-left: 302px; padding-top: 10px;">File Upload</h6>
							<button style="margin-left:220px;" type="button" class="close" data-bs-dismiss="modal">&times;</button>
							</div>
                        </div>
									
					<div class="modal-body">
					
					<form id="Image-form" >
							
										<div class="col-lg-12">
										<div class="row" >
										<div class="col-lg-6">
										<div class="form-group">
										<label>File Name</label>
										<input type="text" class="empInput form-control" name="fileName[]" style="border: 1px solid #858796;">
										</div>
										</div>
										<div class="col-lg-6">
										<div class="form-group">
										<label>&nbsp;</label>
										<input type="file" class="empInput form-control" name="filePath[]" style="border: 1px solid #858796;" >
										</div>
										</div>
										
										
										
										
										</div>
										</div>
							<button type="button" class="empBtn" id="btnUploadPage" style="text-align:center; margin:25px 300px;">Submit</button>
							<input type="hidden" name="frmUserId" value="<?php echo $userId; ?>">
							
							</form>
							</div>
										</div>
						
						
                   

                    <!-- Content Row -->
                    
        
								
        
      </div>
      
    </div>
	
	
	
	
<div class="modal " id="updateEdu" role="dialog">
<div class="modal-dialog modal-lg">
<!-- Modal content-->
	<div class="modal-content" style="margin: 196px 9px 0 259px;  width: 89%!important; ">
		<div class="card-header" style="padding:0!important; background-color: #2e2869;">
		<div class="row">
		<h6 class="ColorPrimary" style="padding-left: 302px; padding-top: 10px;">FileName Edit</h6>
		<button style="margin-left:220px;" type="button" class="close" data-bs-dismiss="modal">&times;</button>
		</div>
		</div>

	<div class="modal-body">

	<form class="form-horizontal" action="#">
	<div class="row" >
	
	<div class="col-lg-4">
	<div class="form-group">
	<label>File Name</label>
	</div>
	</div>
	
	<div class="col-lg-8">
	<div class="form-group">
	<input type="text" class="empInput form-control" name="fileName"  id="fileName_Edit"style="border: 1px solid #858796;">
	</div>
	</div>
	
	
	
	

	
	</div>

	<button type="button" class="empBtn EduSubmit" id="btnUploadPage" style="text-align:center; margin:25px 300px;">Submit</button>
	<input type="hidden" name="" id="Edu_Id" >
	<input type="hidden" name="" id="UserId" >

	</form>
	</div>
	</div>
<!-- Content Row -->

</div>

</div>
        
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
       
		
$(document).ready(function(){
	

	$("#btnUploadPage").click(function(){

	let frm = $("#Image-form")[0];
	let frmDt = new FormData(frm);


	$.ajax({
	type: "post",
	url: "<?=site_url('hrzone/Employee/singleFileUpload');?>",
	data: frmDt,
	dataType: "json",
	cache: false,
	contentType: false,
	processData: false,
	beforeSend: () => {
	$("#btnUploadPage").text("Uploading....");
	$("btnUploadPage").attr("disabled", true);
	},

	complete: () => {
	$("#btnUploadPage").text("Upload");
	$("#btnUploadPage").attr("disabled", false);
	},

	success: response => {

	if(response.status === 1){
	$("#myModal").hide('modal');
	location.reload();
	}
	},
	error: error => {
	console.log("Error", error);
	}
	});
	});	



	 $(".singleDoc").click(function(){
		var conf = 'Are you sure You have to delete this file';
		var id = $(this).attr('data-singleId');
		// var Yid = $(this).attr('data-yearID');
		alert(conf);
		var ajaxurl = "<?=site_url('hrzone/Employee/singleEmpDelete');?>";
			$.ajax({
				type: "get",
				url: ajaxurl,
				data: { id : id},
				success: response => {

				if(response.status === 1){
				
				}
				},
				error: error => {
				console.log("Error", error);
				}
				
				
		});
		
	  });
	  
	  
	  
	  
	  
	  
	  
	  
			$("body").on('click', '.FileNameEdit', function(){
		var id = $(this).attr('data-DocId');
		var ajaxurl = "<?=site_url('hrzone/Separation/SingleUserDocView');?>";
			$.ajax({
				type: "get",
				url: ajaxurl,
				data: {id:id},
				dataType: "JSON",
				success:function(data){
					
					
					$('#Edu_Id').val(data.Edu_Id);
					$('#UserId').val(data.UserId);
					$('#fileName_Edit').val(data.examPassed);
					
					$("#updateEdu").modal('show');
				
				}
					
			});
		
	  });
		
	$("body").on('click', '.EduSubmit', function(){
	  // function updateUserRecord(){
		var employee_examPassed = $('#fileName_Edit').val();
		
		var User_Id = $('#Edu_Id').val();
		var emp_Id = $('#UserId').val();
		
		// var Yid = $(this).attr('data-yearID');
		var ajaxurl = "<?=site_url('hrzone/Separation/SingleUserDocEdit');?>";
			$.ajax({
				type: "post",
				url: ajaxurl,
				data: {employee_examPassed:employee_examPassed, User_Id:User_Id, emp_Id:emp_Id},
				dataType: "JSON",
				success:function(data){
				$('#updateEdu').modal("hide");
				
				alert("Data updated Successfully");
				}
				
			});
	  
	}); 




  
});	
	
    </script>
<?php include('footer.php'); ?>