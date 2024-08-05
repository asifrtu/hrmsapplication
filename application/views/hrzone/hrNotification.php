<?php include('header.php'); ?>
<?php include('calenderSidebar.php'); ?>
        <!-- Content Wrapper -->
 

<style>
.bg-info {
    background-color: #ececec!important;
}
.p-2 {
    padding: .1rem!important;
}
.sasifb{
	margin-bottom: 10px;
    margin-top: 10px;
}
.actionFontSize, .cmPayroll{
	background: #00d3c3!important; color: #fff!important;
};
.btncrat::after {
    width: 1rem;
    text-align: center;
    float: right;
    vertical-align: 0;
    border: 0;
    font-weight: 900;
    content: '\25BC';
	padding-left:10px;
    font-family: 'Font Awesome 5 Free';
}
.addGoalsBtn{
	float:left;
	margin-bottom:5px;
	color:#1C304C!important;
	background: white!important;
	font-weight: 400;
    border-radius: 2px;
    padding: .2em 2em 0.2em 2em;
    border: 2px solid #1C304C!important;
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
	padding:1rem .35rem!important;
}

.empTL1{
	padding: 0rem!important;
	text-align:center;
}

.empTL2{
	padding: 0rem!important;
	text-align:center;
}

.dropbtn {
  margin-bottom:5px;
	color:#1C304C!important;
	background: white!important;
	font-weight: 400;
    border-radius: 2px;
    padding: .2em 2em 0.2em 2em;
    border: 2px solid #1C304C!important;
  
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 122px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 5px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
.empCL{
	background-color: #cef9ea;
}
.empWeekOff{
	background-color: lightgray;
}
.empLWP{
	background-color: #f9c3cd;
}

td{
    padding: .3rem 1rem!important;
}
.arrow-down {
  width: 0; 
  height: 0; 
  border-left: 20px solid transparent;
  border-right: 20px solid transparent;
  
  border-top: 20px solid red;
}	
</style>


 <div id="content-wrapper bg-gradient-primary" class="d-flex flex-column" style="width: 950px; margin-top:50px; margin-bottom:50px;">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    
					<div class="card shadow mb-4" style="margin-bottom:100px;">
                        <div class="card-header ColorSecondaryPre">
                            <h6 class="m-0 font-weight-bold ColorPrimary">Notification List</h6>
                        </div>
						
                        
                    <!-- Content Row -->
					<!-- Area Chart -->
						
						<div class="shadow mb-4">	
							
								<div class="card-body">
								
								
									
									<div class="d-flex sasifb flex-row-reverse ">
									<div class="p-2 bg-info" style="margin-left:5px;">

									<select class="empInput form-control" name="month_Id" id="month_Id" style="border: 1px solid #858796;">
									<option value="">Select Month</option>

										<?php 
										
										
										$curMonth = date("n");
										 // echo $curMonth = date("m", strtotime($cur));
										// echo "<pre>";
										// print_r($teamDesignation);die;


										  foreach ( $GoalMonth as $Month )
									{
									$selected_text='';
									if($Month->month_Id == $curMonth)
									$selected_text='selected';
									echo "<option month='".$Month->month."' value='".$Month->month_Id."'  $selected_text > ".$Month->month."</option>";

									}
									 
										 
										 
										 ?>

									</select>
									</div>
									<div class="p-2 bg-info" >
									
									<select class="empInput form-control" name="Year_Id" id="Year_Id" style="border: 1px solid #858796;" id="sel1">
											<option value="">Select Year</option>
											
											<?php 
											// echo "<pre>";
											// print_r($teamDesignation);die;
											$curnYear = date("Y");
											
											 foreach ( $GoalYear as $year )
											{
											$selected_text='';
											if($year->year == $curnYear)
											$selected_text='selected';
											echo "<option year='".$year->year."' value='".$year->year."'  $selected_text > ".$year->year."</option>";

											}
											 
											 
											 ?>
											
											</select>
									</div>
									
									
									
									</div>
									<div class="table-responsive">
									<table class="table table-striped" id="dataTable" width="100%">
										<thead style="background-color:#f3f3f7;">
											<tr>
												<th class="cmPayroll">S.No.</th>
												<th class="cmPayroll">Time</th>
												<th class="cmPayroll">Date</th>
												<th class="cmPayroll">Title</th>
												
												
												<th class="cmPayroll">Action</th>	
											</tr>
										
										</thead>
										
										
										<tbody>
											
											
											
											<?php if(!empty($userAdminData)):  ?>
											
											<?php	
											$No = 1;
											
											foreach($userAdminData as $emp): 
					$this->db->select('*');
		$this->db->from('notification_track');
		$this->db->where('Notify_UserId', (int) $uid);
		$this->db->where('Notification_Id', (int) $emp->Id);
		$query = $this->db->get();
		// print_r($query->num_rows());die;
		if($query->num_rows() > 0){
			//echo "sss";
		}else{
			
		$CommentData = [
			
			'Notification_Id' => $emp->Id,
			'Notify_UserId' => $uid,
			'type' => 'seen'
			
			];

			$this->db->insert('notification_track', $CommentData);
		}						
											
											
											
											
											
											
											
											
											?>
											<tr>
												<td><?php  echo $No; ?> </td>
												<td><?php  echo $emp->NotifyTime; ?></td>
												<td><?php  echo $emp->NotifyDate; ?></td>
												<td><?php  echo $emp->Title; ?></td>
												
												<td>
												<div class=" ">
													<ul class="tnUemp">
													<li class="tnemp"><a href="#"><i class="actionFontSize fas fa-trash-alt"></i></a></li>
													<li class="tnemp"><a href="#"><i class="actionFontSize fas fa-edit"></i></a></li>
													</ul>

													</div>
												</td>
											</tr>
											
											<?php

												$No++;

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