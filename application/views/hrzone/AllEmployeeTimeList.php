<?php include('header.php'); ?>
<?php include('payAndTimeSidebar.php'); ?>
        <!-- Content Wrapper -->
 

<style>

.addGoalsBtn{
	float:right;
	margin-bottom:5px;
	color:white!important;
    
	float:center;
    background: #1C304C;
    
    font-weight: 400;
    border-radius: 2px;
    padding: .2em 2em 0.2em 2em;
    border: none !important;
}
.tnUemp {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
 
}
.tnemp {
  float: right;
  text-align:center;
  padding:2px 0;
	
}
.tnNotify {
  float: left;
  text-align:center;
  padding:2px 0;
  margin:0 2px;		
}
.tnemp a {
  
  color: #706e80;
  text-align: center;
  padding: 8px 11px;
  text-decoration: none;
  
}

.empTime a {
  
  color: #706e80;
 
  text-decoration: none;
  
}

.actionFontSize{
	font-size:15px!important;
	color:#00d3c3!important;
}
.tnNotify a {
  
  color: white;
  text-align: center;
  padding: 8px 11px;
  text-decoration: none;
  
}
.tnAccept a {
	background-color:#504a94;
}
.tnDecline a {
	background-color:red;
}


.table td, .table th {
    
}

.empTL{
    padding: 0.5rem 0.5rem!important;
}

.empTL1{
	padding: 0rem!important;
	text-align:center;
}

.empTL2{
	padding: 0rem!important;
	text-align:center;
}
.col-lg-1{
    max-width: 4.33333%;
    padding-right:0px!important;
}
.card-header {
    padding: 0.3rem 1.25rem!important ;}
.ColorPrimary{
    font-size:15px;
    margin-left:9px;
}
.card-body{
    padding-top: 15px!important;
}
th {
    background: #00d3c3;
    position: sticky;
    top: 0;
    color: #4c3f5e;
    font-size: 14px;
    font-weight: bold!important;
    text-align:center!important;
}
.empList {
    font-size: 13px;
    color: #575757;
    text-align:center;
}
.empTime{
  text-align:left!important;
}
.cmPayroll{
  background: #00d3c3!important;
   color: #fff!important;

}
.table-bordered tbody tr:nth-of-type(odd){
  background-color:white;
 
}
.table-bordered tbody tr:nth-of-type(even){
 
  background-color: rgb(239 239 239);
}

.table td {
  padding:0.5rem!important;
}
</style>


 <div id="content-wrapper bg-gradient-primary" class="container-fluid col-lg-10" style="padding-left:10px; margin-bottom:50px;">

 
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
                        <div> &nbsp;&nbsp;<i style="font-size: 10px;color: white;" class="fas fa-chevron-right"></i><span class="breadcrumb_text" style="font-size: 15px;color: #00d3c3;font-weight: 600;">&nbsp; Employee Time List</span></div>
                        </div>
                    </div>     
                    <!-- Content Row -->
					  <!-- Area Chart -->
						
						<div class="shadow ">	
					
					
							
								
								<div class="">
								
								
									
									<div class="table-responsive">
									<table class="table table-bordered" id="dataTable" width="100%">
										<thead style="background-color:#f6f6ff;">
											<tr>
												
												<th style="width:100px;" class="cmPayroll empTL">S.No.</th>
												<th style="width:150px;" class="cmPayroll empTL">Employee Id</th>
												<th style="width:300px;" class="cmPayroll empTL">Employee Name</th>
                        <th style="width:200px;" class="cmPayroll empTL">Action</th>
												
											</tr>
										</thead>
										
										<tbody>
											
											<?php if(!empty($userData)):  ?>
									
											<?php	
											$Sno = 1;
											foreach($userData as $emp): ?>
											<tr>
												<td class="empList"><?php  echo $Sno; ?></td>
												<td class="empList" ><?php  echo $emp->employee_id; ?></td>
												<td class=" empList empTime"><?php  echo $emp->name; ?></a></td>
												<td class="empList actionFontSize"><a class="actionFontSize" href="<?=base_url('index.php/hrzone/Attendance/employeeSingleTimeList/'.$emp->id);?>"> <i style="color:#1C304C!important;" class="fas fa-eye"></i>
												
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

<?php include('footer.php'); ?>