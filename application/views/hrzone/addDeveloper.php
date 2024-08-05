<?php include('header.php'); ?>


<?php include('TeamGoalSidebar.php'); ?>
<style>
.addEmpSubmitBtn{
	margin-bottom:30px;
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
    border-radius: 2px;
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
	padding: 15px 31px 6px 20px;
}

label {
    margin-bottom: 0rem!important;
	font-weight: 600;
	font-size:13px;
	color:#4c3f5e !important;
	padding:10px 11px;	
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
	background-color:white;
	padding: .35rem 1.25rem!important;
}



.form-control{
	display: block;
    width: 100%;
    height: calc(1em + 0.75rem + 2px);
    padding: 0.1rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #6e707e;
    background-color: #fff;
    background-clip: padding-box;
    border: none;
}

.empInput {
    overflow: hidden!important;
    font-size: 10px!important;
    color: #000!important;
}

.table td, .table th {
     padding: 0.2rem; 
    vertical-align: top;
    border-top: 1px solid #e3e6f0;
}
.table td{
	padding:0px!important;
}

.sasifb{
	
	margin: 5px 13px;
}
.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 0 1.25rem;
}
.ColorSecondaryPre{
	padding:5px 15px;
}
 </style>
        

        <!-- Content Wrapper -->
        <div id="content-wrapper bg-gradient-primary" class="col-lg-10" style="margin-top:30px; margin-bottom:50px; padding-left:20px;">

            <!-- Main Content -->
            <div id="content">
 <?php if(!empty($this->session->flashdata('message'))) { ?>
			
			
			<?=$this->session->flashdata('message');?>
			
		<?php } ?>
                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="">

                    <!-- Page Heading -->
                    
					<div class="card shadow mb-4" style="margin-bottom:100px;">
                        
                    <!-- Content Row -->
					  <!-- Area Chart -->
			<?php echo form_open_multipart('hrzone/CompanyGoals/DeveloperGoal/'); ?>				
					  <div class="card-header ColorSecondaryPre">
						<div class="row d-flex pl-1 ">

<div class="col-lg-1"><a href="<?php echo base_url() ?>index.php/hrzone/dashboard/wall" style="color: white;font-size: 15px;"><i class="fa fa-home" aria-hidden="true"></i></a></div>
<div class="col-lg-7"> <i style="font-size: 10px;color: white;" class="fas fa-chevron-right"></i><span class="breadcrumb_text" style="font-size: 15px;color: #fff;font-weight: 600;"> &nbsp;Developer Team Goals</span></div>

<div class="col-lg-4">

<div class="" style="width: 25%;float: right;margin-right: -30px;">
						
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
											echo "<option year='".$year->year."' value='".$year->Year_Id."'  $selected_text > ".$year->year."</option>";

											}
											 
											 
											 ?>
											
											</select>
									</div>

</div>

</div>
                        </div>
						
						
						
                        
								
									
									
						
								<div class="card-body pt-4">
										
										
										<div class="table-responsive">
										<table class="table table-bordered" id="TimelistdataTable" width="100%">
										<thead>
										<tr style="background: #00d3c3!important; color: #fff!important;">
										<td style="min-width: 800px!important; padding-left: 20px;">
										
										
										<label>Developer Team Goals of Entire Year</label>
										
										
										
										</td>
										<td colspan="2" style="text-align:center;">
										
										<label>Status</label>
										
										</td>
										
										
										
										
										
										</tr>
										</thead>
										<tbody id="YearGoal">
										<tr>
										
										<td>
										
										<input type="text" name="seogoal_points[]" id="titleOne" class="empInput form-control" style="border: 1px solid white;">
										
										</td>
										<td>
										<select class="form-control" name="work_status[]" style="padding: .3rem .75rem .3rem .75rem!important;border: 1px solid #858796;text-align:center; color:#343434;" >
										
										<option>status</option>
										<option>Pending</option>
										<option>InProgress</option>
										<option>Completed</option>
										</select>
										</td>
										
										
										</tr>
										
										
										<tr>
										
										<td>
										
										<input type="text" name="seogoal_points[]" id="titleTwo" class="empInput form-control" style="border: 1px solid white;">
										
										</td>
										<td>
										<select class="form-control" name="work_status[]" style="padding: .3rem .75rem .3rem .75rem!important;border: 1px solid #858796;text-align:center; color:#343434;" >
										
										<option>status</option>
										<option>Pending</option>
										<option>InProgress</option>
										<option>Completed</option>
										</select>
										</td>
										
										
										</tr>
										
										
										<tr>
										
										<td>
										
										<input type="text" name="seogoal_points[]" id="titleThree" class="empInput form-control" style="border: 1px solid white;">
										
										</td>
										<td>
										<select class="form-control" name="work_status[]" style="padding: .3rem .75rem .3rem .75rem!important;border: 1px solid #858796;text-align:center; color:#343434;" >
										
										<option>status</option>
										<option>Pending</option>
										<option>InProgress</option>
										<option>Completed</option>
										</select>
										</td>
										
										
										</tr>
										
										
										<tr>
										
										<td>
										
										<input type="text" name="seogoal_points[]" id="titleFour" class="empInput form-control" style="border: 1px solid white;">
										
										</td>
										<td>
										<select class="form-control" name="work_status[]" style="padding: .3rem .75rem .3rem .75rem!important;border: 1px solid #858796;text-align:center; color:#343434;" >
										
										<option>status</option>
										<option>Pending</option>
										<option>InProgress</option>
										<option>Completed</option>
										</select>
										</td>
										
										
										</tr>
										
										
										<tr>
										
										<td>
										
										<input type="text" name="seogoal_points[]" id="titleFive" class="empInput form-control" style="border: 1px solid white;">
										
										</td>
										<td>
										<select class="form-control" name="work_status[]" style="padding: .3rem .75rem .3rem .75rem!important;border: 1px solid #858796;text-align:center; color:#343434;" >
										
										<option>status</option>
										<option>Pending</option>
										<option>InProgress</option>
										<option>Completed</option>
										</select>
										</td>
										
										
										</tr>
										
										
										
										
										
										
										
										</tbody>
										</table>
										</div>
											
										<div class="d-flex sasifb flex-row-reverse ">
									<div class=" ml-auto">
									
									<h5 style="padding-top:5px; color:#6f42c1; font-weight:500; font-size: 16px;">Click on <span style="color:#504a94;">"+"</span>icon to <span style="color:#504a94;"><strong>Add New Row.</strong></span><a href="#" id="add-rowGoal"style="padding-left: 13px;"><span style="color:red;">"+"</span></a></h5>
									</div>
										</div>
										
									</div>
										
									
					
							<div>
								
							<div class="card-body text-center" style="margin-top:0px;">
									
							<button class="btn btn-default addEmpSubmitBtn" id="KPISubmit" type="submit" name="submit">Create</button>
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
            var markup = `<tr id="row_Education_${row}">
										
										
										<td>
										
										<input type="text" name="seogoal_points[]" class="empInput form-control" style="border: 1px solid white;">
										
										</td>
										<td>
										<select class="form-control" name="work_status[]" style="padding: .3rem .75rem .3rem .75rem!important;border: 1px solid #858796;text-align:center; color:#343434;" >
										
										<option>status</option>
										<option>Pending</option>
										<option>InProgress</option>
										<option>Completed</option>
										</select>
										</td>
										<td style="min-width: 10px!important;">
										
										
										<a data-row="${row}" class="EducationDeleteRow"><i class="fas fa-times-circle"></i></a>
										</td>
										</tr>
										`;
            $("#YearGoal").append(markup);

        });		
		
		
		
		
		$("body").on('click', '.EducationDeleteRow', function(){
		var id = $(this).attr('data-row');
		$("#row_Education_"+ id).remove();
		console.log(this);
	});

	
	});						
						
    </script>   






<script type="text/javascript">


	$(document).ready(function(){
		
		
		var titleOne_error = true;
		var titleTwo_error = true;
		var titleThree_error = true;
		var titleFour_error = true;
		var titleFive_error = true;
		
		
		
		
		$("#titleOne").keyup(function(){
			titleOne_check();
		});
		
		function titleOne_check(){
			var titleOne_val = $("#titleOne").val();
			
			if(titleOne_val == ""){
				
				$("#titleOne").css("border-color", "red");
				titleOne_error = false;
				return false;
				
				
			}else{
				$("#titleOne").css("border-color", "green");
				return true;
				
			}
		
		}
		
		
		
		
		
		$("#titleTwo").keyup(function(){
			titleTwo_check();
		});
		
		function titleTwo_check(){
			var titleTwo_val = $("#titleTwo").val();
			
			if(titleTwo_val == ""){
				$("#titleTwo").css("border-color", "red");
				titleTwo_error = false;
				return false;
				
			}else{
				$("#titleTwo").css("border-color", "green");
				return true;
			}
		
		}
		
		$("#titleThree").keyup(function(){
			titleThree_check();
		});
		
		function titleThree_check(){
			var titleThree_val = $("#titleThree").val();
			
			if(titleThree_val == ""){
				$("#titleThree").css("border-color", "red");
				titleThree_error = false;
				return false;
				
			}else{
				$("#titleThree").css("border-color", "green");
				return true;
			}
		
		}
		
		$("#titleFour").keyup(function(){
			titleFour_check();
		});
		
		function titleFour_check(){
			var titleFour_val = $("#titleFour").val();
			
			if(titleFour_val == ""){
				$("#titleFour").css("border-color", "red");
				titleFour_error = false;
				return false;
				
			}else{
				$("#titleFour").css("border-color", "green");
				return true;
			}
		
		}
		
		$("#titleFive").keyup(function(){
			titleFive_check();
		});
		
		function titleFive_check(){
			var titleFive_val = $("#titleFive").val();
			
			if(titleFive_val == ""){
				$("#titleFive").css("border-color", "red");
				titleFive_error = false;
				return false;
				
			}else{
				$("#titleFive").css("border-color", "green");
				return true;
			}
		
		}
		
		
		
		
		
		
		
		$("#KPISubmit").click(function(){
		
		titleOne_error = true;
		// marksOne_error = true;
		titleTwo_error = true;
		// marksTwo_error = true;
		titleThree_error = true;
		// marksThree_error = true;
		titleFour_error = true;
		// marksFour_error = true;
		titleFive_error = true;
		// marksFive_error = true;
		
			
			titleOne_check();
			// marksOne_check();
			titleTwo_check();
			// marksTwo_check();
			titleThree_check();
			// marksThree_check();
			titleFour_check();
			// marksFour_check();
			titleFive_check();
			// marksFive_check();
			
			
			if((titleOne_error == true) && (titleTwo_error == true) && (titleThree_error == true) && (titleFour_error == true) && (titleFive_error == true)){
				
				return true;
			}else{
				alert("Fill the all required fields!");
				return false;
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