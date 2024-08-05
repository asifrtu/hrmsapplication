<?php include('header.php'); ?>
<?php include('YearGoalSidebar.php'); ?>
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
    margin: 0.5rem 0rem!important;
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

.ColorSecondaryNotes{
	background-color:#E0E0E0;
	
}

.headerAsif{
	padding: 15px 31px 6px 31px;
}

label {
    margin-bottom: .2rem!important;
	font-weight: 600;
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
.Aqdx{
	margin-top:20px;
}

.ColorSecondary{
	background-color:#504a94;
	padding: .1rem 1.25rem!important;
	
}


APUemp {
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


.ColorSecondaryNotes{
	background-color:#ececec;
	padding: .35rem 1.25rem!important;
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
                        <?php

			

			if(!empty($this->session->flashdata('message'))) { ?>
                    
                    
                    <?=$this->session->flashdata('message');?>
                    
                <?php } ?>
                    <!-- Content Row -->
					  <!-- Area Chart -->
						<div class="headerAsif ColorSecondaryPre">
                            <h6 class="font-weight-bold ColorPrimary">Company's Goals</h6>
                        </div>

						<div class="" >
						<ul class="APUemp ColorSecondaryNotes">
						<li class="APemp"><a href="#"><span><small style="padding-left: 13px;">Please Click on the add button for adding a new row.</small></span></a></li>
						</ul>


						</div>

						
						
                        
								
									
									
						<?php echo form_open_multipart('hrzone/CompanyGoals/AddYearlyGoals/'); ?>
							
								<div class="card-body">
										
										
										<div class="col-lg-12" id="YearGoal">
										
										<div class=" Aqdx col-lg-12 ColorSecondary">
										<div class="row" >
										<div class="col-lg-3">
										<div class="form-group" style="margin: 0rem 0rem!important;">
										<label style="color:white;">Year</label>
										</div>
										</div>
										<div class="col-lg-3">
										<div class="form-group" style="margin: 0rem 0rem!important;">
										<select class="empInput form-control" name="Year_Id" style="border: 1px solid #858796;" id="sel1">
											
											<option>select</option>
											<?php 
											// echo "<pre>";
											// print_r($teamDesignation);die;
											
											foreach($GoalYear as $data){
											echo '<option value="'.$data->Year_Id.'">'.$data->year.'</option>';
											 }?>
											
											</select>
										</div>
										</div>
										
										<div class="col-lg-6">
											<ul class="AUemp">
											<li class="Aemp"><a href="#"><span><small>&nbsp;&nbsp; </small></span></a></li>
											<li class="Aemp" style="float:right;"><a id="add-rowGoal" href="javascript:void(0)"><span><small>Add</small></span>+</a></li>
											</ul>

											
										</div>
										
										
										</div>
										</div>
										
										<div class="row" >
										<div class="col-lg-6">
										<div class="form-group">
										<label>Points</label>
										<input type="text" name="goal_points[]" class="empInput form-control" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-5">
										<div class="form-group">
										<label>Comment</label>
										<input type="text" name="goal_comments[]" class="empInput form-control" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										</div>
										
										<div class="row" >
										<div class="col-lg-6">
										<div class="form-group">
										<input type="text" name="goal_points[]" class="empInput form-control" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-5">
										<div class="form-group">
										<input type="text" name="goal_comments[]" class="empInput form-control" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										</div>
										
										
										<div class="row" >
										<div class="col-lg-6">
										<div class="form-group">
										<input type="text" name="goal_points[]" class="empInput form-control" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-5">
										<div class="form-group">
										<input type="text" name="goal_comments[]" class="empInput form-control" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										</div>
										
										
										<div class="row" >
										<div class="col-lg-6">
										<div class="form-group">
										<input type="text" name="goal_points[]" class="empInput form-control" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-5">
										<div class="form-group">
										<input type="text" name="goal_comments[]" class="empInput form-control" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										</div>
										
										
										<div class="row" >
										<div class="col-lg-6">
										<div class="form-group">
										<input type="text" name="goal_points[]" class="empInput form-control" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-5">
										<div class="form-group">
										<input type="text" name="goal_comments[]" class="empInput form-control" style="border: 1px solid #858796;" id="email">
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
        
								
        
      
 
							
						
							
								
						
							
							
							
							
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript">


var row =0;
    $(document).ready(function(){
		
		 $("#add-rowGoal").click(function(){
            row++
            var markup = `<div class="row" id="row_Education_${row}">
										<div class="col-lg-6">
										<div class="form-group">
										<input type="text" name="goal_points[]" class="empInput form-control" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-5">
										<div class="form-group">
										<input type="text" name="goal_comments[]" class="empInput form-control" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-1">
										<button type="button" data-row="${row}" class="EducationDeleteRow"><i class="fas fa-times-circle"></i></button>
										</div>
										</div>`;
            $("#YearGoal").append(markup);

        });		
		
		
		
		
		$("body").on('click', '.EducationDeleteRow', function(){
		var id = $(this).attr('data-row');
		$("#row_Education_"+ id).remove();
		console.log(this);
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