<?php include('header.php'); ?>
<?php include('commonSidebar.php'); ?>
<style>

.ColorSecondary{
	background-color:#6f42c1;
	padding: .35rem 1.25rem!important;
	
}

input.bPayroll{
 color:#6f42c1;
}
.cmPayroll{
 color:#504a94;
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

.table-bordered td {
    border: 1px solid #9d9ea1;
}
table thead th{
  border: 2px solid #9d9ea1;
}

.table-bordered thead th {
    border-bottom-width: 1px!important;
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
	font-size:15px!important;
	color: #1C304C!important;
}

.btnQdUpload {
  border: 2px solid #504a94;
  color: white;
  background-color: #504a94;
  padding: 0px 7px;
  border-radius: 0px;
  font-size: 16px;
  font-weight: bold;
}
.actionFile a{
	float:right;
	text-decoration:none;
	color:#504a94;
}
.compUemp{
	list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
}
.compemp a{
	text-decoration:none;
	text-align: center;
	color:#706e80;
}

.table th {
    text-align: center;
    padding:0.50rem;
}
.table td{
    text-align: center;
    vertical-align: middle;
}
.empList{
    font-size: 12px;
    color: #575757;
}
.table td {
  padding: 0px;
}
.empimage{
	text-align:center;
}

.empListP{
    font-size: 15px;
    margin-top: 1px!important;
    margin-bottom: -1px!important;
}

.empHeader{
	padding: .3rem 1.25rem!important;
}



.topHeaderEmp a {
  float: left;
  display: block;
  
  text-align: center;
  padding: 10px 16px;
  text-decoration: none;
  
}




.topHeaderEmp .search-container {
  float: right;
}

.topHeaderEmp input[type=text] {
    padding: 2px;
    margin-top: 7px;
    font-size: 15px;
    border: none;
    border-radius: 2px 0 0 2px;
}

.topHeaderEmp .search-container button {

    float: right;
    padding: 3px 12px;
    margin-top: 7px;
    margin-right: 16px;
    background: #ddd;
    font-size: 14px;
    border: none;
    cursor: pointer;
    border-radius: 0 2px 2px 0;

}



@media screen and (max-width: 600px) {
  .topHeaderEmp .search-container {
    float: none;
  }
  .topHeaderEmp a, .topHeaderEmp input[type=text], .topHeaderEmp .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  
}

.EmpListScroll {
			
  
  width: auto;
  height: 505px;
  overflow-x: scroll;
  overflow-y: scroll;
  
  border-radius: 0 0px 0px 0;
}


#style-7::-webkit-scrollbar-track
{
    -webkit-box-shadow: inset 0 0 6px #9e9d9f;
    background-color: #ffffff;
}

#style-7::-webkit-scrollbar
{
	width: 9px;
	background-color: #F5F5F5;
}

#style-7::-webkit-scrollbar-thumb
{
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
  background: #00d3c3!important; color: #fff!important;
    position: sticky;
    top: 0;
    font-size: 14px;
    font-weight:bold;
}


.rounded-circle{
  -webkit-border-radius: 50%;
-moz-border-radius:50%;
    border-radius: 50%;
    border-radius: 50%;
    border: 1px solid transparent; 
    outline: 1px solid #1C304C;

}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: none!important;
}
.card-header:first-child {
    border-radius: 2px 2px 0px 0px;
}
.card-header{
    border-bottom:none!important;
}
.table-striped tbody tr:nth-of-type(odd){
  background-color:white;
 
}
.table-striped tbody tr:nth-of-type(even){
 
  background-color: rgb(239 239 239);
}


.table-striped tbody .fixed_info:nth-of-type(odd){
  background-color:white;
 
}
.table-striped tbody .fixed_info:nth-of-type(even){
  background-color:rgb(239 239 239);
 
}
.status{
  width: 100%;
    padding: 12px;
    color: white;

    font-size: 13px;
    letter-spacing: 1px;
}
.working, .NA{
  background:#7db135;
}
.Lwau, .No{
  background-color:#e35446;
}
.Lsn{
  background-color:#ffa218;
}
.Atl{
  background-color:#a71111;
}
.Active{
  background-color:#7db135;
}
.InActive{
  background-color:#d3c076;
}
.Yes{
  background-color:#ffa218;
}
.fixed_info{
  position: absolute;
    width: 107px;
    padding: 13px!important;
    overflow-y: clip;
}
.fixed_image{
  position: absolute;
  

}

.sticky-col {
  position: -webkit-sticky;
  position: sticky;

}

.fixed_name{
  position:absolute;
  width:150px;
  padding-top: 13px!important;
  padding-bottom:13px!important;
}

.LeaveSymbol {
  position: relative;
    margin-right: 2px;
    text-align: center;
    margin-top: 2px;
}

.Marking_color{
  text-align: center;
    color: white;
    padding: 7px 6px;
    width: 120px;
    font-size: 11px;
    
}

.form-check-label {
    color: #393535!important;
    font-size: 10px;
}
.card-header {
    padding: 0.3rem 1.25rem!important ;}
    .col-lg-1{
    max-width: 4.33333%;
padding-right:0px!important}
 </style>
        
	
        <!-- Content Wrapper -->
        <div id="content-wrapper bg-gradient-primary" class="container-fluid col-lg-10" style="padding-left:10px;margin-bottom: 16px;">




            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="">

                    <!-- Page Heading -->
                    
					<div class="card shadow mb-4" style="margin-bottom:10px; ">
            <div class="card-header ColorSecondaryPre">
              <div class="row d-flex pl-1 pt-1 pb-1">
              
              <div class="col-lg-1"><a href="<?php echo base_url() ?>index.php/hrzone/dashboard/wall" style="color: white;font-size: 15px;"><i class="fa fa-home" aria-hidden="true"></i></a></div>
              <div class="col-lg-7"> <i style="font-size: 10px;color: white;" class="fas fa-chevron-right"></i>&nbsp;<span class="breadcrumb_text"  style="font-size: 15px;color: #fff; font-weight:600;"> Employee List</span>&nbsp;</div>
  
              <div class="col-lg-4 d-flex search-container" style="justify-content: right;margin-top: -3px;">
                <form action="#">
									<input id="myInput" type="text" placeholder="Search.." style="font-size: 11px;">
									<button type="submit" style="background: none;border: none;"><i class="fa fa-search" style="font-size: 13px;color: white;"></i></button>
								</form>
                
                </div>
              </div>
              
                          </div>


						
                        


                        
								<div class="table-responsive scrollbarIMBD scrollbarIMBDWebkit">
								 
								  <table class="table table-bordered table-striped">
									<thead>
									  <tr>
										<th class="sticky-col" style="min-width: 107px!important; ">Employee ID</th>
										<th class="sticky-col" style="min-width: 89px!important;">Profile Pic</th>
										<th class="sticky-col" style="min-width: 150px!important;">Name</th>
										<th style="min-width: 130px!important;">Designation</th>
										<th style="min-width: 102px!important;">Join Date</th>
										<th style="min-width: 106px!important;">Phone No</th>
										<th style="min-width: 106px!important;">Alternate No</th>
										<th style="min-width: 340px!important;">Location</th>
										<th style="min-width: 106px!important;">Salary/Month</th>
										<th style="min-width: 150px!important;">Bank A/C</th>
										<th style="min-width: 150px!important;">IFSC Code</th>
										<th style="min-width: 150px!important;">Pan Card No</th>
										<th style="min-width: 150px!important;">Aadhar No</th>
										<th style="min-width: 97px!important;">Exit Date</th>
										<th style="min-width: 97px!important;">Year</th>
										<th style="min-width: 97px!important;">Month</th>
										<th style="min-width: 110px!important;">Work Status</th>
										<th style="min-width: 125px!important;">Recieved Docs</th>
										<th style="min-width: 159px!important;">Status</th>
										
									  </tr>
									</thead>
									<tbody id="myTable">
										
									  <?php if(count($empList)):  ?>
									
									<?php	foreach($empList as $emp): ?>
									  <tr>
										<td class="empList "><?php  echo $emp->employee_id; ?></td>
										<td class=" " style="padding:2px!important;">
											<?php if(!is_null($emp->EmpProfileImage)){ ?>
										<img  width="40px" height="40px" src="<?php echo base_url();?>upload/UserProfileImage/<?php  echo $emp->EmpProfileImage; ?>" class="rounded-circle " alt="Cinque Terre">
											<?php } else{ ?>
												
										<img  width="40px" height="40px" src="<?php echo base_url();?>upload/UserProfileImage/WhatsApp_Image_2021-12-01_at_2_37_45_PM.jpeg" class="rounded-circle " alt="Cinque Terre">
											
											<?php } ?>
											
											</td>
										<td class="empList text-left" style="padding-left: 8px!important; Padding-right:8px;"><?php  echo $emp->name; ?></td>
										
										<td class="empList"><?php  echo $emp->position; ?></td>
										<td class="empList"><?php  echo $emp->EmployeejoiningDate; ?></td>
										<td class="empList"><?php  echo $emp->phone; ?></td>
										<td class="empList"><?php  echo $emp->alternatePhone; ?></td>
										<td class="empList text-left" style="padding-left: 8px!important; Padding-right:8px;"><?php  echo $emp->permanentAddress; ?></td>
										<td class="empList"><?php  echo $emp->monthlySalary; ?></td>
										<td class="empList"><?php  echo $emp->bankAccount; ?></td>
										<td class="empList"><?php  echo $emp->bankIFSCCode; ?></td>
										<td class="empList"><?php  echo $emp->pancard; ?></td>
										<td class="empList"><?php  echo $emp->aadharcard; ?></td>
										<td class="empList">
										
										<?php if(!empty($emp->employeeExitDate) && $emp->employeeExitDate != 00-00-0000){?>
										
										<?php  echo $emp->employeeExitDate; ?>
										<?php }else{echo "N/A";}?>
										</td>
										
										<?php  
											
										// date("d", strtotime($_GET['start_date']));$start_date = DateTime::createFromFormat("U", $dbResult->db_timestamp);
										
										
										date_default_timezone_set("Asia/Kolkata");
										$birth_date = new DateTime(($emp->EmployeejoiningDate));
										$Leave_date = ($emp->employeeStatus === "InActive")? new DateTime(($emp->employeeExitDate)) : new DateTime(); 
										// print_r($birth_date);die;
										
										// $Leave_date = $emp->employeeleaveDate;
										// $current_date = $emp->joiningDate;
										// $start_date = date("Y/m/d");
										// $current_date = new DateTime();
										
										// $diff = abs(strtotime($current_date) - strtotime($Leave_date));
										// $years = floor($diff / (365*60*60*24));
										// echo $years;die;
										// if(!empty($Leave_date)){
											// $diff = $birth_date->diff($Leave_date);
										// }else{
											// $diff = $birth_date->diff($current_date);
										// }
										
										// $diff = $Leave_date->diff($Leave_date);
										$diff = $birth_date->diff($Leave_date);

										// echo $years     = $diff->y . " years " . $diff->m . " months " . $diff->d . " day(s)"; echo "<br/>";
										// die;
										// $birth_date     = $emp->joiningDate;
										// $current_date   = new DateTime();

										// $diff           = $birth_date->diff($current_date);

										// echo $years     = $diff->y . " years " . $diff->m . " months " . $diff->d . " day(s)";
										
										
										// $dob= 
										// $diff = (date() - date(strtotime($dob)));
										// echo $diff;
										
										?>
										<td class="empList"><?php echo $diff->y. " years "; ?></td>
										<td class="empList"><?php  echo $diff->m. " months "; ?></td>
										<td class="empList">
                    <?php if($emp->employeeStatus == 'InActive'){ ?>  
                   <div  class="status InActive">InActive</div>
                   <?php }?>
                   <?php if($emp->employeeStatus == 'Active'){ ?>  
                   <div  class="status Active">Active</div>
                   <?php }?></td>

										<td class="empList">

                          <?php if($emp->gotRelievingLetter == 'N/A'){ ?>  
                          <div  class="status NA">Working</div>
                          <?php } ?>

                          <?php if($emp->gotRelievingLetter == 'No'){ ?>  
                          <div  class="status No">No</div>
                          <?php } ?>

                          <?php if($emp->gotRelievingLetter == 'Yes'){ ?>  
                          <div  class="status Yes">Yes</div>
                          <?php } ?>

                    </td>


									<td class="empList" style="padding:0px!important;"> 
  
                          <?php if($emp->noticeServedStatus == 'Working'){ ?>  
                          <div  class="status working">Working</div>
                          <?php } ?>

                          <?php if($emp->noticeServedStatus == 'Left without any update'){ ?>  
                          <div  class="status Lwau">Left Without Update</div>
                          <?php } ?>

                          <?php if($emp->noticeServedStatus == 'Left - Served notice'){ ?>  
                          <div  class="status Lsn">Served Notice</div>
                          <?php } ?>

                          <?php if($emp->noticeServedStatus == 'ATL (Ask to Leave)'){ ?>  
                          <div  class="status Atl">Ask To Leave</div>
                          <?php } ?>
  
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

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
  
   
  
});
</script>
<?php include('footer.php'); ?>