<?php include('header.php'); ?>
<?php include('aboutUserSidebar.php'); ?>
<style>
.addEmpSubmitBtn{
	color:white!important;
    
	float:center;
    background: #1C304C;
    
    font-weight: 400;
    border-radius: 5px!important;
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
  float: left;
	
}
.tnemp a {
  display: block;
  color: #4c3f5e;
  text-align: center;
  padding: 0px 11px;
  text-decoration: none;
  font-weight: 700;
    font-size: larger;

}
.dd a {
	text-decoration:none;
	color:white;
}
.form-group {
    margin: 1rem 0rem!important;
}
  
.empInput{
    
    border: 1px solid #9c50ff94!important;
    border-radius: 3px;
    overflow: hidden!important;
    padding: 0.2rem 0.75rem!important;
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
    margin-bottom: .5rem;
    color: #706e80;
   
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
  color:#4c3f5e;
	
}
.APemp a {
  display: block;
  color: #4c3f5e;
  text-align: center;
  margin-left:9px;
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


.ColorPrimary {
    color: white;
    font-size: 16px;
    margin-bottom: 6px;
    margin-left: 18px;
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
 </style>
        

		<?php if(!empty($this->session->flashdata('message'))) { ?>
		<?=$this->session->flashdata('message');?>
		<?php } ?>


        <!-- Content Wrapper -->
        <div id="content-wrapper bg-gradient-primary" class="container-fluid col-lg-10" style=" margin-bottom:50px; margin-top: 16px; padding-left:10px;">
       
            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="">

                    <!-- Page Heading -->
                    
					<div class=" shadow mb-4" style="margin-bottom:100px;">
                        
                    <!-- Content Row -->
					  <!-- Area Chart -->
								
                        <div class="ColorSecondaryPre" style="padding: 12px 5px 5px 12px;">
                            <h5 class=" md-4 ColorPrimary">Add Management</h5>
                        </div>		
                        <div class=" " style="">
											<ul class="APUemp ColorSecondaryNotes">
											<li class="APemp"><a href="#"><span><small style="font-weight:700;">Please Fill the Management Details in below section.</small></span></a></li>
											</ul>
										</div>
								
							<?php echo form_open_multipart('hrzone/Users/User'); ?>
							
								<div class="card-body" style="background:#fff;">
										<div class="row" >
										<div class="col-lg-12 " >
											<ul class="tnUemp ">
											<li class="tnemp "><a href="#"><i class="fa fa-user " style="color:#1C304C;" aria-hidden="true"></i>&nbsp;&nbsp;Management Details</a></li>
											
											</ul>

											</div>
										</div>
										
									
										<div class="col-lg-12">
										<div class="row" >
										<div class="col-lg-4">
										<div class="form-group">
										<select class="form-control empInput" placeholder="Name" name="name" value="<?php if(isset($EmployeeDetails->name)) echo $EmployeeDetails->name;?>" style="border: 1px solid #858796;" id="sel1">
										
											<option><?php if(isset($EmployeeDetails->name)) echo $EmployeeDetails->name;?></option>
											<?php 
											// echo "<pre>";
											// print_r($teamDeisn);die;
											
											foreach($AllUserInfo as $data){
											echo '<option value="'.$data->name.'">'.$data->name.'</option>';
											 }?>
											</select>
										
										</div>
										
										</div>
										<div class="col-lg-4">
										<div class="form-group">
										<select class="form-control empInput" placeholder="position" name="email" value="<?php if(isset($EmployeeDetails->email)) echo $EmployeeDetails->email;?>" style="border: 1px solid #858796;" id="sel1">
										
											<option><?php if(isset($EmployeeDetails->email)) echo $EmployeeDetails->email;?></option>
											<?php 
											// echo "<pre>";
											// print_r($teamDeisn);die;
											
											foreach($AllUserInfo as $data){
											echo '<option value="'.$data->email.'">'.$data->email.'</option>';
											 }?>
											</select>
										
										</div>
										
										</div>
										
										<div class="col-lg-4">
										<div class="form-group">
										
											<select class="empInput form-control" name="type" style="border: 1px solid #858796;" id="sel1">
											<option>Select Role</option>
											<option>Admin</option>
											<option>Manager</option>
											<option>HR</option>
											<option>Team Leader</option>
											</select>
										
										</div>
										
										</div>
										</div>

										
									
										
									
                    <div style="display: flex;justify-content: center;"><button type="submit" class="btn btn-default addEmpSubmitBtn">Create</button></div>
							
							</div>
						</form>
							
							
						
						
                   

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