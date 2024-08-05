<?php include('header.php'); ?>
<?php include('fileSidebar.php'); ?>



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
  border: 2px solid #504a94;
  color: white;
  background-color: #504a94;
  
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
.actionFontSize{
	font-size:15px!important;
	color:#00d3c3!important;
}
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

.backBtn a {
 
  color:#898890;
  
  text-decoration: none;
}
</style>

 <!-- Content Wrapper -->
        <div id="content-wrapper bg-gradient-primary" class="d-flex flex-column" style="margin-top:50px; margin-bottom:50px; width:1050px!important;">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    
					<div class="card shadow mb-4" style="margin-bottom:100px; width: 1020px;">
                        <div class="card-header ColorSecondaryPre">
                            <h6 class="m-0 font-weight-bold ColorPrimary">Files</h6>
							<div class="Qdxupload-btn-wrapper" style="float:right; margin-top: -24px;">
							<div class="row">
							<h6 class="m-0 font-weight-bold ColorPrimary"  style="margin-top: 5px!important;">Upload File&nbsp;&nbsp;</h6>
							<button data-toggle="modal" data-target="#myModal" class="btnQd ">
							
							<i class="fa fa-upload" aria-hidden="true"></i>
							</button>
							
							</div>
							</div>
                        </div>
						<div class="row">
						<div class="col-lg-12" style="margin-top:-1px;">
						<div class="card-header" >
						<h6 class="m-0 font-weight-bold " >All files related with single employee is here.</h6>
						<h6 class="m-0 font-weight-bold " id="upload_result_div"></h6>
						</div>
						
						</div>
						</div>
                        
                    <!-- Content Row -->
					  <!-- Area Chart -->
						<div class="shadow mb-4">
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
												S.No
												</th>
												<th colspan="10" class="cmPayroll"> All Files</th>
												<th colspan="1" class="cmPayroll" style="text-align: center;">
													Action
												
												</th>
												
												
												
												
											</tr>
										</thead>
										
										<tbody>
										<?php $Sno = 1;?>
											<?php 
											// echo $empgetUserId->UserId;
											// print_r($empgetUserId);
											// die;
											if(count($empSingleDoc)):  ?>
									
											<?php	
											
											foreach($empSingleDoc as $emp): ?>
											
											<tr>
												<td colspan="1">
													<?php  echo $Sno; ?></td>
												<td colspan="10" ><span><i class="fas fa-file-pdf"></i></i></span>&nbsp; 
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
													<li class="tnemp close" style="float:right;"><a href="<?=base_url('index.php/adminzone/DocFile/singleEmpView/'.$emp->Id);?>" target="_blank"><i class="actionFontSize fa fa-eye" aria-hidden="true"></i></a></li>
													</ul>

													</div>
												
												</td>
												
											</tr>
											
											
												
											<?php 
											$Sno++;
											endforeach;  ?>
										<?php else: ?>
										<tr>
										<td colspan="3">Data is Not Available</td>
										<?php endif; ?>

										</tr>
											
											
											
											
											
										</tbody>
									</table>
								</div>
								
								<div>
								
								<input id="file-input" type="filePath" name="name" style="display: none;" />
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
							<input type="hidden" name="frmUserId" value="">
							
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
url: "<?=site_url('adminzone/DocFile/singleFileUpload');?>",
data: frmDt,
dataType: "json",
cache: false,
contentType: false,
processData: false,
success: response => {
$("#myModal").hide('modal');
location.reload();

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
	var ajaxurl = "<?=site_url('adminzone/EmployeeInfo/singleEmpDelete');?>";
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
  
});	
	
    </script>
<?php include('footer.php'); ?>