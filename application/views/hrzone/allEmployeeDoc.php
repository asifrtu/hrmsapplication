<?php include('header.php'); ?>

<?php
$window_width = "<script type='text/javascript'>document.write(window.innerWidth);</script>";
if($window_width < 1000){
    include('commonSidebar.php'); 
}
?>
<style>

.ColorSecondary{
	background-color:#6f42c1;
	padding: .35rem 1.25rem!important;
	
}

input.bPayroll{
 color:#6f42c1;
}
.cmPayroll{
    background: #00d3c3!important; 
    color: #fff!important;
}
.Qdxupload-btn-wrapper {
  position: relative;
  
  display: inline-block;
}

.btnQd {
  border: 2px solid #504a94;
  color: white;
  background-color: #504a94;
  padding: 4px 10px;
  border-radius: 0px;
  font-size: 20px;
  font-weight: bold;
}
.btnQdUpload {
  border: 2px solid white;
  color: gray;
  background-color: white;
  padding: 4px 10px;
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

.fC{
    font-size: 12px;
    color: #575757;
    padding-top:8px!important;
    text-decoration: none;
}
a{
    
}

.actionFontSize{
	font-size: 11px!important;
    color: #1C304C!important;
}

.card-header{

    border-bottom:none!important;
}


element.style {
    min-width: 165px!important;
}
.table-bordered thead td, .table-bordered thead th {
    border-bottom-width: 2px;
}
.table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #e3e6f0;
}
.table th {
   
    text-align:center;
}
.table-bordered td, .table-bordered th {
    border: 1px solid #e3e6f0;
}
.table td, .table th {
    padding: 0.75rem;
    vertical-align: top;
    border-top: 1px solid #e3e6f0;
}
th {
    background: #00d3c3!important;
    position: sticky;
    top: 0;
    color: #4c3f5e!important;
    font-size: 14px;
    font-weight: 500;
}

.btnQdUpload {
  border: 2px solid #601fb3;
  color: white;
  background-color: #601fb3;
  padding: 0px 7px;
  border-radius: 0px;
  font-size: 16px;
  font-weight: bold;
}
.actionFile a{
	text-decoration:none;
	color:#504a94;
}


#style-7::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px #9e9d9f;
    background-color: #ffffff;
}
#style-7::-webkit-scrollbar {
    width: 9px;
    background-color: #F5F5F5;
}

#style-7::-webkit-scrollbar-thumb {
    background: #1C304C8a;
}
.scrollbar
{
	
    height: 500px;
	width: auto;
	background: #F5F5F5;
	overflow-y: scroll;
	
	
}

th {
  background: white;
  position: sticky;
  top: 0; /* Don't forget this, required for the stickiness */
  box-shadow: 0 2px 2px -1px rgba(0, 0, 0, 0.4);
  color:#4c3f5e!important;
  font-weight:bold;
}

.empListP {
    font-size: 15px;
    margin-top: 1px!important;
    margin-bottom: -1px!important;
}
.card-body{
    padding:0px!important;
}
.table td{
    vertical-align: middle;
    padding:2px!important;
  
}
.text-center {
    margin-top: 0px!important;
}
.rounded-circle{
    border: 1px solid transparent;
    outline: 1px solid #1C304C;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    -khtml-border-radius: 50%;
}

.table-striped tbody tr:nth-of-type(odd){
    background-color:white;
}
.table-striped tbody tr:nth-of-type(even){

    background-color: rgb(239 239 239);

}
.col-lg-1{
    max-width: 4.33333%;
    padding-right:0px!important;
}

.card-header {
    padding: 0.3rem 1.25rem!important ;}
    .empProfileCaption{
	padding: 5px 20px;
}
.empProfileCard{
	
    padding: 10px;

}
.cardColumn{
	
    margin:0 10px 10px 0;
    border: 1px #00d3c3;

}
.cardColumnRow{
	
    margin-left: 10px;

}
.empProfileCaption{
	padding: 2px 10px;
}

 </style>
        
	
        <!-- Content Wrapper -->
        <div id="content-wrapper bg-gradient-primary" class="container-fluid col-lg-10" style="  padding-left:10px;">

        

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="">

                    <!-- Page Heading -->
                    <?php

			

			if(!empty($this->session->flashdata('message'))) { ?>
                    
                    
                    <?=$this->session->flashdata('message');?>
                    
                <?php } ?>
                
					<div class="card shadow mb-4" style="margin-bottom:100px; ">
                    <div class="card-header ColorSecondaryPre">
                        <div class="d-flex">
                        <div><a href="<?=site_url('hrzone/dashboard/wall');?>" style="color: #fff;font-size: 15px;"><i class="fa fa-home" aria-hidden="true"></i></a></div>
                        <div> &nbsp;&nbsp;<i style="font-size: 10px;color: #00d3c3;" class="fas fa-chevron-right"></i><span class="breadcrumb_text" style="font-size: 15px;color: #00d3c3;font-weight: 600;">&nbsp; Employee Database</span></div>
                        </div>
                    </div>
						
                        
                    <!-- Content Row -->
					  <!-- Area Chart -->
						<div class="shadow ">
							
							<div class="card-body">
                            
							<div class="table-responsive scrollbar" id="style-7">
									<table class="table table-bordered table-sm table-striped" id="dataTable" width="100%">
										<thead>
											<tr>
                                                <th style="min-width: 107px!important;" class="displayNoneContent cmPayroll text-center">Employee Id</th>
                                                <th style="min-width: 89px!important;"  class="displayNoneContent cmPayroll text-center">Profile Pic</th>
												<th style="min-width: 170px!important;" class=" cmPayroll text-center">Employee Name</th>
                                                <th style="min-width: 170px!important;" class="displayNoneContent cmPayroll text-center">Designation</th>
                                                <th style="min-width: 170px!important;" class="displayNoneContent cmPayroll text-center">Joining Date</th>
                                                <th  class="displayNoneContent cmPayroll text-center">Employee Docs</th>
												
												<th colspan="1" class="cmPayroll text-center ">
													<span class="actionFile r">Action</span>
												
												</th>
												
												
												
												
											</tr>
										</thead>
										
										<tbody>
										
										
											<?php if(count($empDoc)):  ?>
									
											<?php	
											
											foreach($empDoc as $emp): ?>
											
											
											
											<tr >
                                            <td class="displayNoneContent fC text-center" >&nbsp; <?php  echo $emp->employee_id; ?></td>
                                            <td class="displayNoneContent fc text-center">
                                            <?php if(!is_null($emp->EmpProfileImage)){ ?>
										<img width="40px" height="40px" src="<?php echo base_url();?>upload/UserProfileImage/<?php  echo $emp->EmpProfileImage; ?>" class="rounded-circle" alt="Cinque Terre">
											<?php } else{ ?>
												
										<img width="40px" height="40px" src="<?php echo base_url();?>upload/UserProfileImage/WhatsApp_Image_2021-12-01_at_2_37_45_PM.jpeg" class="rounded-circle" alt="Cinque Terre">
											
											<?php } ?>
                                            </td>
                                            <td class="fC text-center">
                                            <?php  echo $emp->name; ?>
                                            </td>

                                            <td class="displayNoneContent fC text-center"> 
                                            <?php  echo $emp->position; ?>
                                            </td>


                                               <td class="displayNoneContent fC text-center"> 
                                               <?php  echo $emp->EmployeejoiningDate; ?>
                                            </td>     

												<td class="displayNoneContent fC text-center" > <a href="<?=base_url('index.php/hrzone/Employee/singleEmployeeDoc/'.$emp->id);?>"><img style=" width: 33px;" src="<?= base_url("Assets/newCss/folder.png") ?>" ></i>&nbsp;</a></td>
												
												<td colspan="1" class="text-center"> 
													<div class=""style="display: flex;justify-content: center;">
													<ul class="tnUemp">
													<li class="tnemp" style="float:right;"><a href="javascript:void(0)" class="empDel" data-EmpId="<?=$emp->id;?>"><i style="color:red;;" class="displayNoneContent actionFontSize fas fa-trash-alt"></i></a></li>
													<li class="tnemp" style="float:right;"><a href="<?=base_url('index.php/hrzone/Employee/EditEmployee/'.$emp->id);?>"><i style="color:green;"class="displayNoneContent actionFontSize fas fa-edit"></i></a></li>
													<li class="tnemp" style="float:right;"><a href="<?=base_url('index.php/hrzone/Employee/employeeProfile/'.$emp->id);?>"><i style="color:blue;" class="actionFontSize fa fa-eye" aria-hidden="true"></i></a></li>
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
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
	
	
	
	
	
	
	
	
	
	
	
	
  $(".empDel").click(function(){
    var conf = 'Deleted Successfully!';
	var id = $(this).attr('data-EmpId');
	// var Yid = $(this).attr('data-yearID');
	if(confirm("Are you sure you want to remove it?"))
    {
	var ajaxurl = "<?=site_url('hrzone/Employee/EmployeeProfileDeleteById');?>";
        $.ajax({
            type: "post",
            url: ajaxurl,
            data: { id : id},
			success:function(){
			// CompanyYearlyGoal(Yid);
			alert(conf);
		}
			
	});
	
  }
	
  });
  
  
  
  
  
  
  
  
  
  
  
function CompanyYearlyGoal(){
	var ajaxurl = "<?=site_url('hrzone/Employee/EmployeeDoc');?>";
        $.ajax({
            type: "get",
            url: ajaxurl,
            dataType: "JSON"
        }).done(function(response){
			
			data = response.data;
			if(response)
				$("#dataTable tbody").html(`${response.data.map(function(data, index){
					return(`<tr>
					
					<td style="text-align:center;">${++index}</td>
					<td>${data.goal_points}</td>
					<td>${data.goal_comments}</td>
					<td><button data-year="${data.goalpoints_Id}" class="btn btn-warning seoData">Edit</button></td>
								
					<td>
						<div class=" ">
						<ul class="tnUemp">
						<li class="tnemp"><a href="#" data-yearD="${data.goalpoints_Id}" data-yearID="${data.Year_Id}" class="CompanyData"><i class="actionFontSize fas fa-trash-alt"></i></a></li>
						<li class="tnemp"><a href="#" data-yearfr="${data.goalpoints_Id}" class="seoDssata"><i class="actionFontSize fas fa-edit"></i></a></li>
						</ul>

						</div>
					</td>
					
					
					</tr>`)
				})}`);
            else 
				$("#CompanydataTable tbody").html("<div>No data Found.....</div>");
        });
}
	
  
});
</script>
<?php include('footer.php'); ?>