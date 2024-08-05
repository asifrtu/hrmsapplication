<?php include('header.php'); ?>


<?php include('YearGoalSidebar.php'); ?>
<style>
.addEmpSubmitBtn{
	margin: 30px 445px;
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
	height: calc(0.75em + 0.75rem + 1px)!important;
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



label {
	margin-bottom: 0rem!important;
    font-weight: bold;
    color: #4c3f5e !important;
    font-size: 13px;
	padding:10px 11px!important;
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



.empInput{
	border: 1px solid #858796;
    border-radius: 2px;
	overflow:hidden!important;
	
	padding: .2rem .75rem!important;
}

.table td, .table th {
     padding: 0.2rem; 
    vertical-align: top;
    border-top: 1px solid #e3e6f0;
}
.table td{
	padding:0px;
}

.sasifb{
	
	margin: 5px 13px;
}
.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 0 1.25rem;
}
.col-lg-1{
    max-width: 4.33333%;
	padding-right:0px!important;
}
.card-header {
    padding: 0.25rem 1.25rem!important;
}
.sasifb {
    margin: 0px 13px;
    padding-top: 10px;
}
 </style>
        

        <!-- Content Wrapper -->
        <div id="content-wrapper bg-gradient-primary" class=" col-lg-10" style="padding-left:20px; margin-bottom:50px; ">

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
                    
					<div class="shadow mb-4" style="margin-bottom:100px;">
                        
                    <!-- Content Row -->
					  <!-- Area Chart -->
								
					  <div class="card-header ColorSecondaryPre">
						<div class="row d-flex pl-1 ">

<div class="col-lg-1"><a href="<?php echo base_url() ?>index.php/hrzone/dashboard/wall" style="color: white;font-size: 15px;"><i class="fa fa-home" aria-hidden="true"></i></a></div>
<div class="col-lg-7"> <i style="font-size: 10px;color: white;" class="fas fa-chevron-right"></i><span class="breadcrumb_text" style="font-size: 15px;color: #fff;font-weight: 600;"> &nbsp;Company yearly Goals - create</span></div>
<div class="col-lg-4">
<?php echo form_open_multipart('hrzone/CompanyGoals/AddYearlyGoals/'); ?>
	<div class="" style="margin-left:5px; float: right;margin-right:-30px;">
									
		<select class="empInput form-control" name="Year_Id" id="Year_Id" style="width: 83PX;FONT-SIZE: 10PX!IMPORTANT;COLOR: #343434;padding: 0.2rem 0.67rem!important;HEIGHT: calc(0.75em + 0.75rem + 4px)!important;MARGIN-TOP: 1PX;border-radius: 1px;" id="sel1">
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
						<div style="background: #fff;">			
						
						
					
                        
								
									
									
						
								<div class="card-body">
										
										
										<div class="table-responsive pt-4">
										<table class="table table-bordered" id="TimelistdataTable" width="100%">
										<thead>
										<tr style="background:#00d3c3; color:#fff;">
										<td style="min-width: 800px!important; padding-left: 20px;">
										
										
										<label>Company Goals of Entire Year</label>
										
										
										
										</td>
										<td colspan="2" style="text-align:center;">
										
										<label>Assignee </label>
										
										</td>
										
										
										
										
										
										</tr>
										</thead>
										<tbody id="YearGoal">
										<tr>
										
										<td>
										
										<input type="text" name="goal_points[]" id="titleOne" class="empInput form-control" style="border: 1px solid white;">
										
										</td>
										<td>
										
										<input type="text" name="assignee[]" id="marksOne" class="empInput form-control" style="border: 1px solid white;">
										
										</td>
										
										
										</tr>
										
										
										<tr>
										
										<td>
										
										<input type="text" name="goal_points[]" id="titleTwo" class="empInput form-control" style="border: 1px solid white;">
										
										</td>
										<td>
										
										<input type="text" name="assignee[]" id="marksTwo" class="empInput form-control" style="border: 1px solid white;">
										
										</td>
										
										
										</tr>
										
										
										<tr>
										
										<td>
										
										<input type="text" name="goal_points[]" id="titleThree" class="empInput form-control" style="border: 1px solid white;">
										
										</td>
										<td>
										
										<input type="text" name="assignee[]" id="marksThree" class="empInput form-control" style="border: 1px solid white;">
										
										</td>
										
										
										</tr>
										
										
										<tr>
										
										<td>
										
										<input type="text" name="goal_points[]" id="titleFour" class="empInput form-control" style="border: 1px solid white;">
										
										</td>
										<td>
										
										<input type="text" name="assignee[]" id="marksFour" class="empInput form-control" style="border: 1px solid white;">
										
										</td>
										
										
										</tr>
										
										
										<tr>
										
										<td>
										
										<input type="text" name="goal_points[]" id="titleFive" class="empInput form-control" style="border: 1px solid white;">
										
										</td>
										<td>
										
										<input type="text" name="assignee[]" id="marksFive" class="empInput form-control" style="border: 1px solid white;">
										
										</td>
										
										
										</tr>
										
										
										
										
										
										
										
										</tbody>
										</table>
										</div>
										<div class="d-flex sasifb flex-row-reverse ">
									
									<div class="ml-auto">
	
									<h5 style=" color:#6f42c1; font-weight:500; font-size: 16px;">Click on <span style="color:#504a94;">"+"</span>icon to <span style="color:#504a94;"><strong>Add New Row.</strong></span><a href="#" id="add-rowGoal"style="padding-left: 13px;"><span style="color:red;">"+"</span></a></h5>
									</div>
									
									</div>
										
									</div>
										
									
					
						
								
							<div class="card-body text-center" style="margin-top: 0px;">
									
							<button class="btn btn-default addEmpSubmitBtn" id="KPISubmit" type="submit" name="submit">Create</button>

							</div>
						</form>
					</div>
							
						
						
                   

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
										
										<input type="text" name="goal_points[]" class="empInput form-control" style="border: 1px solid white;">
										
										</td>
										<td>
										
										<input type="text" name="assignee[]" class="empInput form-control" style="border: 1px solid white;">
										
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
		
		var marksOne_error = true;
		var marksTwo_error = true;
		var marksThree_error = true;
		var marksFour_error = true;
		var marksFive_error = true;
		
		
		
		
		
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
		
		titleTwo_error = true;
		
		titleThree_error = true;
		
		titleFour_error = true;
		
		titleFive_error = true;
		
		
			
			titleOne_check();
			
			titleTwo_check();
			
			titleThree_check();
		
			titleFour_check();
			
			titleFive_check();
			
			
			
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