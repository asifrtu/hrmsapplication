<?php include('header.php'); ?>
<?php include('commonSidebar.php'); ?>
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
                            <h6 class="font-weight-bold md-4 ColorPrimary">Employee KPI Goals</h6>
                        </div>		
                        
								
									
									
						<form  action="#" method="post">
							
								<div class="card-body">
										<div class="row" >
										<div class="col-lg-12" >
											<div class=" ">
											<ul class="tnUemp">
											<li class="tnemp"><a href="#">Note: Please press the enter button for adding a new row.</a></li>
											</ul>

											</div>
										</div>
										</div>
										
										<div class="col-lg-12" id="YearGoal">
										<div class="row" >
										<div class="col-lg-12">
										<div class="form-group">
										<label>Title</label>
										<input type="text" class="empInput form-control" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										</div>
										
										<div class="row" >
										<div class="col-lg-6">
										<div class="form-group">
										<label>Name</label>
											<select class="empInput form-control" style="border: 1px solid #858796;" id="sel1">
											<option>select</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											</select>
										</div>
										</div>
										<div class="col-lg-6">
										<div class="form-group">
										<label>Designation</label>
											<select class="empInput form-control" style="border: 1px solid #858796;" id="sel1">
											<option>select</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											</select>
										</div>
										</div>
										</div>
										<div class="row" >
										<div class="col-lg-3">
										<div class="form-group">
										<label>Points</label>
										<input type="text" class="empInput form-control" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
										<label>Marks</label>
										<input type="text" class="empInput form-control" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
										<label>Comment</label>
										<input type="text" class="empInput form-control" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
										<label>A.Marks</label>
										<input type="text" class="empInput form-control" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										</div>
										
										<div class="row" >
										<div class="col-lg-3">
										<div class="form-group">
										<input type="text" class="empInput form-control" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
										<input type="text" class="empInput form-control" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
										<input type="text" class="empInput form-control" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
										<input type="text" class="empInput form-control" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										
										</div>
										
										<div class="row" >
										<div class="col-lg-12">
										<div class="form-group">
										<label>Remarks: After KPI</label>
										<textarea type="text" class="empInput form-control" style="border: 1px solid #858796;" id="email"></textarea>
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
		
		$(window).keydown(function(event){
                if(event.keyCode == 13) {
                    event.preventDefault();
                    
					var markup = `<div class="row" >
										<div class="col-lg-3">
										<div class="form-group">
										<input type="text" class="empInput form-control" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
										<input type="text" class="empInput form-control" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
										<input type="text" class="empInput form-control" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
										<input type="text" class="empInput form-control" style="border: 1px solid #858796;" id="email">
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

<?php include('footer.php'); ?>