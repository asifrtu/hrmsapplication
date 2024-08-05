<?php include('header.php'); ?>
<?php include('calenderSidebar.php'); ?>
<style>
.addEmpSubmitBtn {
    color: white!important;
    float: center;
    background: #1C304C;
    font-weight: 400;
    /* border-radius: 5px!important; */
    padding: 0.3em 2em 0.3em 2em;
    border: 1px solid #ebaa48;
}
.tnUemp {
    list-style-type: none;
    margin: 0;
    padding: 20px 0px;
    display: flex;
    overflow: hidden;
    justify-content: center;
}
.tnemp {
    float: left;
    border: 1px solid #f0f0f0;
}
.tnemp a {
    display: block;
    color: #343434;
    text-align: center;
    padding: 0px 11px;
    text-decoration: none;
    font-weight: 700;
    font-size: larger;
    font-size: 30px;
}
.dd a {
	text-decoration:none;
	color:white;
}
.form-group {
    margin: 0.1rem 0rem!important;
    margin-bottom:25px!important;
}
  
.empInput {
    border: 1px solid #9c50ff94!important;
    border-radius: 3px;
    overflow: hidden!important;
    padding: 1rem 0.75rem!important;
    font-size: 12px!important;
    color: #000!important;
}
.form-control{

    border: 1px solid #9c50ff94!important;
    border-radius: 3px;
    overflow: hidden!important;
    padding: 1rem 0.75rem!important;
    font-size: 12px!important;
    color: #000!important;
}
.useremp {
    background-color: #1C304C;
    color: white;
    border: 1px solid #1C304C;
    padding: 4px;
    border-radius: 100%;
}

label {
    display: inline-block;
    margin-bottom: 0.1rem;
    color: #343434;
    font-size: 14px;
}
.addempH{
	margin-left:10px;
}
.colorEmp{
	background-color:#1C304C;
}

.personalD{
	border-bottom:1px solid black;
}

.AUemp {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
 
}
.Aemp {
  float: left;
	
}
.Aemp a {
  display: block;
  color: white;
  text-align: center;
  
  text-decoration: none;
}


.Aemp a:hover{
  
}
.APUemp {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
 
}
.APemp {
  float: left;
	
}
.APemp a {
  display: block;
  color: #343434;
  text-align: center;
  
  text-decoration: none;
}


.APemp a:hover{
  
}

.Aqdx{
	margin-top:20px;
}

.ColorSecondary{
	background-color:#504a94;
	padding: .35rem 1.25rem!important;
	
}

.ColorSecondaryNotes{
  background-color: #00d3c3;
  padding: 0.35rem 1.2rem!important;
    border: 1px solid #c4b4cc;
    color: #343434;
    font-style: italic;
     font-weight: 800;
}


.form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + 0.4rem + 2px);
	font-size: 0.9rem;
}

input:focus::placeholder {
  color: transparent;
}

.salaryInput{
	background-color: #f2efef;
	border: 1px solid #e6e6e6!important;

}
::-webkit-datetime-edit-year-field:not([aria-valuenow]),
::-webkit-datetime-edit-month-field:not([aria-valuenow]),
::-webkit-datetime-edit-day-field:not([aria-valuenow]) {
    color: transparent;
}

input[type=date]::-webkit-inner-spin-button,
  input[type=date]::-webkit-outer-spin-button {
    -webkit-appearance: none;
  }

  input[type=date] {
    -moz-appearance: textfield;
  }
  
 .error_UserDAta{
	 background-color:red;
 }
 .card-body{
     padding-top:15px!important;
 }

.card-header {
    padding: 0.3rem 1.25rem!important ;}

    .col-lg-1{
    max-width: 4.33333%;
    padding-right:0px!important;
}

@media (min-width: 992px) {
  .rowMargin{
    margin: 0 10.25rem;
  }
}
 </style>
        

		<?php if(!empty($this->session->flashdata('message'))) { ?>
		<?=$this->session->flashdata('message');?>
		<?php } ?>


        <!-- Content Wrapper -->
        <div id="content-wrapper bg-gradient-primary" class="container-fluid col-lg-10" style="margin-top:30px; margin-bottom:50px; padding-left:10px;">

        
            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="">

                    <!-- Page Heading -->
                    
					<div class="card shadow mb-4" style="margin-bottom:100px;">
                        
                    <!-- Content Row -->
					  <!-- Area Chart -->
            <div class="card-header ColorSecondaryPre">
                <div class="d-flex">
                <div><a href="<?=site_url('hrzone/dashboard/wall');?>" style="color: #fff;font-size: 15px;"><i class="fa fa-home" aria-hidden="true"></i></a></div>
                <div> &nbsp;&nbsp;<i style="font-size: 10px;color: #00d3c3;" class="fas fa-chevron-right"></i><span class="breadcrumb_text" style="font-size: 15px;color: #00d3c3;font-weight: 600;">&nbsp; Add Leave</span></div>
                </div>
            </div>
						


                        <div class=" " style="margin-bottom: 20px;">
											<ul class="APUemp ColorSecondaryNotes">
											<li class="APemp"><a href="#"><span><small style="font-weight:700;">Please Fill the Employee Leave Details in below section.</small></span></a></li>
											</ul>

											
										</div>    		
								
							<?php echo form_open_multipart('hrzone/Attendance/addLeaveQdx'); ?>
              <div class="card-body">
										<div class="row">
										<div class="col-lg-12 ">
											<ul class="tnUemp ">
											<li class="tnemp "><a href="#"><i style="color:#1C304C;font-size: 32px;" class="fa fa-user " aria-hidden="true"></i>&nbsp;&nbsp;Leave Details</a></li>
											
											</ul>

											</div>
										</div>
										
										
									
										<div class="row px-auto rowMargin">
										<div class="col-6">
										<div class="form-group">
										<label>Select Employee</label>
										<select class="form-control" placeholder="Name" name="user_Id" value="<?php if(isset($EmployeeDetails->name)) echo $EmployeeDetails->name;?>" style="border: 1px solid #858796;" id="sel1">
										
											<option><?php if(isset($EmployeeDetails->name)){ echo $EmployeeDetails->name; }else{?>Select User<?php }?></option>
											<?php 
											// echo "<pre>";
											// print_r($teamDeisn);die;
											
											foreach($UserInfo as $data){
											echo '<option value="'.$data->id.'">'.$data->name.'</option>';
											 }?>
											</select>
										
										
										</div>
										
										</div>
										<div class="col-6">
										<div class="form-group">
										<label>Casual Leave</label>
										<input type="date" class="empInput form-control" name="LeaveDate" style="border: 1px solid #858796;">
										
										</div>
                                        </div><br>
                                        </div>
<br>
										<div class="row rowMargin">
                                            
									
										<div class="col-6">
										<div class="form-group">
										<label>Casual Leave</label>
										<input type="text" class="empInput form-control" name="CL" style="border: 1px solid #858796;">
										
										</div>
										
										</div>
										
										<div class="col-6">
										<div class="form-group">
										<label>Earned Leave</label>
										<input type="text" class="empInput form-control" name="EL" style="border: 1px solid #858796;">
											
										
										</div>
										
										</div>
										</div>

										
									
										
                    <div style="display: flex;justify-content: center;margin-top: 30px;margin-bottom: 30px;"><button type="submit" class="btn btn-default addEmpSubmitBtn">Create</button></div>
							
						
							
							
						
						
                   

                    <!-- Content Row -->
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