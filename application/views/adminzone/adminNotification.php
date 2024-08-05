<?php include('header.php'); ?>
<?php include('commonSidebar.php'); ?>
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
  float: left;
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

.empInput{
    font-size:12px;
}

.allnotifications{
    border:1px solid grey;
    height:400px;
    
}
.all_notification{
    background-color:grey;
    color:white;
    padding:3px 7px;
    border-radius:6px;  
}
.unread_notification{
    background-color:blue;
    color:white;
    padding:3px 7px;
    border-radius:6px;

}

.table tbody {
    font-size: 13px!important;
}
.table {
    border-collapse: collapse;
}

</style>


 <div id="content-wrapper bg-gradient-primary" class="my_information col-lg-10" style="background:none;">

            <!-- Main Content -->
          
                    <!-- Page Heading -->
                    
					<div class=" shadow " style="background:white;"  >
                    <div class="employee_details" style="padding: 7px 5px 0px 0px; display:flex; justify-content:space-between;">
                         
                         <div><h5 class=" md-4 ColorPrimary" style=" font-size: 15px; margin-top: 8px; margin-left: 20px; margin-bottom: 10px;">All Notifications</h5></div>
                 <div class="d-flex  flex-row-reverse ">
                 
                         <div class="p-2 select-info" style="margin-left:5px;">
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
                         
                         <div class="p-2 select-info">

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
             </div>
						
                        
                    
             <div class="table-responsive mt-4 pb-3 px-4">
									<table class="table container " id="dataTable" width="100%">
										<thead class="information_heading courses">
											<tr>
												<th class="cmPayroll text-center">S.No.</th>
												<th class="cmPayroll text-center ">Time</th>
												<th class="cmPayroll text-center">Date</th>
												<th class="cmPayroll text-center">Title</th>
												
												
												<th class="cmPayroll text-center">Action</th>	
											</tr>
										
										</thead>
										
										
										<tbody>
											
											
											
											<?php if(!empty($userAdminData)):  ?>
											
											<?php	
											$No = 1;
											// print_r($userAdminData);die;
											foreach($userAdminData as $emp): 
											
											$this->db->select('*');
											$this->db->from('notification_track');
											$this->db->where('Notify_UserId', (int) $User_ID);
											$this->db->where('Notification_Id', (int) $emp->Id);
											$query = $this->db->get();
											// print_r($query->num_rows());die;
											if($query->num_rows() == 0){
												$CommentData = [

												'Notification_Id' => $emp->Id,
												'Notify_UserId' => $User_ID,
												'type' => 'seen'

												];

												$this->db->insert('notification_track', $CommentData);
											}else{

											
											}						

											
											?>
											<tr>
												<td  class="text-center " ><?php  echo $No; ?></td>
												<td  class="text-center "><?php  echo $emp->NotifyTime; ?></td>
												<td  class="text-center "><?php  echo $emp->NotifyDate; ?></td>
												<td style="width: 60%;"><?php  echo $emp->Title; ?></td>
												
												<td>
												<div class="text-center ">
													<ul class="tnUemp ">
													<li class=""><a href="#"><i class="actionFontSize fas fa-trash-alt"></i></a></li>
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
							</div>
							
							
							
					
							
							
						
						
                   

                    <!-- Content Row -->
                    </div>

							

                </div>
                <!-- /.container-fluid -->


    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

<?php include('footer.php'); ?>