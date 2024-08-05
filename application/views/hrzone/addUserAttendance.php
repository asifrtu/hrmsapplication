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
  padding: 0;
  overflow: hidden;
 
}
.tnemp {
  float: left;
	
}
.tnemp a {
  display: block;
  color: #706e80;
  text-align: center;
  padding: 8px 11px;
  text-decoration: none;
  font-weight: 700;
    font-size: larger;

}
.dd a {
	text-decoration:none;
	color:white;
}
.form-group {
    margin: 0.5rem 0rem!important;
    text-align:center;
}


.empInput{
	border: 1px solid #858796;
    border-radius: 2px;
    height: calc(1.5em + 1rem + 2px)!important;
    border: 1px solid #9c50ff94!important;
    color:#343434;
}
.empInput:focus{
    box-shadow: 0 0 0 0.2rem rgb(96 31 180 / 7%)!important;

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
    margin-bottom: 1.3rem!important;
    color: #706e80;
   
}
.addempH{
	margin-left:10px;
}
.colorEmp{
	background-color:#1C304C;
}

.form-control {
    display: block;
    width: 100%;
	font-size: 0.9rem!important;
    height: calc(1.5em + .4rem + 2px);
}

input:focus::placeholder {
  color: transparent;
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
  color: grey;
  text-align: center;
  
  text-decoration: none;
}


.APemp a:hover{
  
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


.ColorSecondaryNotes{
  background-color: #00d3c3;
  padding: 0.35rem 1.2rem!important;
    border: 1px solid #c4b4cc;
    color: #343434;
    font-style: italic;
     font-weight: 700;
     font-size:13px;
}

.headerAsif{
	padding: 15px 31px 6px 31px;
}

label {
    margin-bottom: 0.3rem!important;
    font-weight: 600;
    color: #343434;
    font-size: 30px;
    margin-bottom: 20px!important;
}
.col-lg-1{
    max-width: 4.33333%;
    padding-right:0px!important;
}
.card-body {
    padding-top: 15px!important;
    display: flex;
    justify-content: center;
}

.card-header {
    padding: 0.3rem 1.25rem!important ;}
 </style>
        

        <!-- Content Wrapper -->
        <div id="content-wrapper bg-gradient-primary" class="container-fluid col-lg-10" style=" margin-top:30px; margin-bottom:50px;padding-left:10px;">

     
           
            <div id="content">

                
                <div class="">
<?php

			

			if(!empty($this->session->flashdata('message'))) { ?>
                    
                    
                    <?=$this->session->flashdata('message');?>
                    
                <?php } ?>
                    <!-- Page Heading -->
                    
					<div class="card shadow mb-4" style="margin-bottom:100px;">
                        
                    <!-- Content Row -->
					  <!-- Area Chart -->
            <div class="card-header ColorSecondaryPre">
						<div class="row d-flex pl-1 ">

<div class="col-lg-1"><a href="<?php echo base_url() ?>index.php/hrzone/dashboard/wall" style="color: white;font-size: 15px;"><i class="fa fa-home" aria-hidden="true"></i></a></div>
<div class="col-lg-10"> <i style="font-size: 10px;color: white;" class="fas fa-chevron-right"></i>&nbsp;<span class="breadcrumb_text" style="font-size: 15px;color: #fff;font-weight: 600;">&nbsp; Add Attandance</span></div>
</div>
                        </div>
						
						<div class="" >
						<ul class="APUemp ColorSecondaryNotes">
						<li class="APemp"><a href="#" style="font-style: italic;">Please select the Employee for adding Attendance.</a></li>
						</ul>


						</div>
						
								
									
									
						<?php echo form_open_multipart('hrzone/Attendance/addUserAttendanceQdx/'); ?>
							
								<div class="card-body">
										
										
										<div class="col-lg-12" id="YearGoal">
										
										<div class="row" style="  margin-right: 20rem;  margin-left: 20rem;" >
										<div class="col-lg-12">
										<div class="form-group">
										<label>Add Employee Attendance</label>
											<select class="empInput form-control" name="User_Id" style="border: 1px solid #858796;" id="sel1">
											<option>Select Employee</option>
											<?php 
											// echo "<pre>";
											// print_r($teamDesignation);die;
											
											foreach($UserInfo as $data){
											echo '<option value="'.$data->id.'">'.$data->name.'</option>';
											 }?>
											</select>
										</div>
										</div>
										
										</div>
										
										
										
										
										
										
										
										
										
										
										
										
										
										
										</div>
									</div>
										
									
					
							<div>
								
							<div class="card-body">
									
							<button type="submit" onclick="uploadMessage()" class="btn btn-default addEmpSubmitBtn">Create</button>
							</div>
							</div>
						</form>
							
						
						
                   

                    <!-- Content Row -->
                    </div>
        
								
        
      
 
							
						
							
								
								
							
							
							
							
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function(){
		
		$(window).keydown(function(event){
                if(event.keyCode == 13) {
                    event.preventDefault();
                    
					var markup = `<div class="row" >
										<div class="col-lg-6">
										<div class="form-group">
										<input type="text" name="goal_points[]"class="empInput form-control" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-6">
										<div class="form-group">
										<input type="text" name="goal_comments[]" class="empInput form-control" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										</div>`;
            $("#YearGoal").append(markup);
					
					
                }
                   
            });
        		
	

	
	});						
						
    </script>               

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
function uploadMessage() {
  //document.getElementById("demo").innerHTML = "File Upload successfully";
  alert('Employee Attendance added successfully');
}
</script>

<?php include('footer.php'); ?>