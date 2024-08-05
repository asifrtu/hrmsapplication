<?php include('header.php'); ?>
<?php include('jobOpeningSidebar.php'); ?>
<style>
.addEmpSubmitBtn{
	margin: 0px 445px;
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
    margin: 1rem 0rem!important;
}

.empInput{
	border: 1px solid #858796;
    border-radius: 3px;
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
                    
					<div class="card shadow mb-4" style="margin-bottom:100px;">
                        
                    <!-- Content Row -->
					  <!-- Area Chart -->
						<div class="card-header ColorSecondaryPre">
                            <h6 class="font-weight-bold md-4 ColorPrimary">Add Job Opening</h6>
                        </div>		
                        
								
									
									
						<form  action="#" method="post">
							
								<div class="card-body">
										<div class="row" >
										<div class="col-lg-12" >
											<div class=" ">
											<ul class="tnUemp">
											<li class="tnemp"><a href="#"><i class="useremp fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;Job Details</a></li>
											
											</ul>

											</div>
										</div>
										</div>
										
										<div class="col-lg-12">
										<div class="row" >
										<div class="col-lg-3">
										<div class="form-group">
										<label>Posting Title</label>
										<input type="text" class="empInput form-control" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
										<label for="email">Job Status</label>
										<select class="form-control" style="border: 1px solid #858796;" id="sel1">
										<option>select</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										</select>
										
										</div>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
										<label for="email">Hiring Lead</label>
										<select class="form-control" style="border: 1px solid #858796;" id="sel1">
										<option>select</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										</select>
										
										</div>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
										<label for="email">Department</label>
										<select class="form-control" style="border: 1px solid #858796;" id="sel1">
										<option>select</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										</select>
										
										</div>
										</div>
										
										
										</div>
										</div>
										<div class="col-lg-12">
										<div class="row" >
										
										<div class="col-lg-3">
										<div class="form-group">
										<label for="email">Employment Type</label>
										<select class="form-control" style="border: 1px solid #858796;" id="sel1">
										<option>select</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										</select>
										
										</div>
										</div>
										
										<div class="col-lg-3">
										<div class="form-group">
										<label for="email">Minimum Experience</label>
										<select class="form-control" style="border: 1px solid #858796;" id="sel1">
										<option>select</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										</select>
										
										</div>
										</div>
										
										<div class="col-lg-3">
										<div class="form-group">
										<label for="email">Education</label>
										<select class="form-control" style="border: 1px solid #858796;" id="sel1">
										<option>select</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										</select>
										
										</div>
										</div>
										
										<div class="col-lg-3">
										<div class="form-group">
										<label for="email">Opening</label>
										<select class="form-control" style="border: 1px solid #858796;" id="sel1">
										<option>select</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										</select>
										
										</div>
										</div>
										
										<div class="col-lg-3">
										<div class="form-group">
										<label for="email">Annual Salary</label>
										<input type="text" class="empInput form-control" style="border: 1px solid #858796;" id="email">
										
										
										</div>
										</div>
										
										
										
										</div>
										</div>
										
										<div class="col-lg-12">
										<div class="row" >
										<div class="col-lg-12">
										<div class="form-group">
										<label>Required Candidate Profile</label>
										<textarea type="text" class="empInput form-control" style="border: 1px solid #858796;" id="email"></textarea>
										</div>
										</div>
										
										
										</div>
										</div>
										
										<div class="col-lg-12">
										<div class="row" >
										<div class="col-lg-12">
										<div class="form-group">
										<label>Job Description</label>
										<textarea type="text" class="empInput form-control" style="border: 1px solid #858796;" id="email"></textarea>
										</div>
										</div>
										
										
										</div>
										</div>
										
										<div class="col-lg-12">
										<div class="row" >
										<div class="col-lg-12">
										<div class="form-group">
										<label>Key skills</label>
										<textarea type="text" class="empInput form-control" style="border: 1px solid #858796;" id="email"></textarea>
										</div>
										</div>
										
										
										</div>
										</div>
										
										<div class="col-lg-12">
										<div class="row" >
										<div class="col-lg-12">
										<div class="form-group">
										<label>About Company</label>
										<textarea type="text" class="empInput form-control" style="border: 1px solid #858796;" id="email"></textarea>
										</div>
										</div>
										
										
										</div>
										</div>
										
										
										<div class="col-lg-12">
										<div class="row" >
										
										<div class="col-lg-3">
										<div class="form-group">
										<label>Location</label>
										<input type="text" class="empInput form-control" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										
										<div class="col-lg-3">
										<div class="form-group">
										<label>Company Name</label>
										<input type="text" class="empInput form-control" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										
										<div class="col-lg-3">
										<div class="form-group">
										<label>Website</label>
										<input type="text" class="empInput form-control" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										
										<div class="col-lg-3">
										<div class="form-group">
										<label>Address</label>
										<input type="text" class="empInput form-control" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										
										
										
										</div>
										</div>
										
										
										
									</div>
									
							
							
							
							
					
							<div>
								
							<div class="card-body">
									
							<button type="submit" class="btn btn-default addEmpSubmitBtn">Create</button>
							</div>
							</div>
						</form>
							
						
						
                   

                    <!-- Content Row -->
                    </div>
        
								
        
      
 
							
						
							
								
								
							
							
							
							
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function(){
        $(".add-rowEducation").click(function(){
            
            var markup = `<div class="row" >
										<div class="col-lg-3">
										<div class="form-group">
										<label>Exam Passed</label>
										<input type="text" class="empInput form-control" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
										<label>Year</label>
										<input type="text" class="empInput form-control" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
										<label>Board/University</label>
										<input type="text" class="empInput form-control" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
										<label>% Marks and Division  </label>
										<input type="text" class="empInput form-control" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										
										</div>`;
            $("#addfullrow").append(markup);
        });				
	
	$(".add-rowCourse").click(function(){
            
            var markup = `<div class="row" >
										<div class="col-lg-3">
										<div class="form-group">
										<label>Exam Passed</label>
										<input type="text" class="empInput form-control" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
										<label>Year</label>
										<input type="text" class="empInput form-control" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
										<label>Board/University</label>
										<input type="text" class="empInput form-control" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
										<label>% Marks and Division  </label>
										<input type="text" class="empInput form-control" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										
										</div>`;
            $("#addfullrowCourse").append(markup);
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

<?php include('footer.php'); ?>