<?php include('header.php'); ?>


<?php include('KpiTeamSidebar.php'); ?>
<style>
.addEmpSubmitBtn{
	color:white!important;
    margin-bottom:30px;
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
    margin-bottom: 0rem!important;
    color: #4c3f5e !important;
    font-size: 13px;
	font-weight:600;
    vertical-align: middle!important;
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
	font-size: 13px!important;
	height: calc(1.2em + 0.4rem + 2px);
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
	background-color:white;
	padding: .35rem 1.25rem!important;
}



.empInput{
	border: 1px solid #858796;
    border-radius: 3px;
	overflow:hidden!important;
	
	padding: .2rem .75rem!important;
}
.table td {
     padding: 0.2rem; 
    vertical-align: top;
    border-top: 1px solid #e3e6f0;
}
.table th{
	padding:10px 11px !important;
}


.sasifb{
	
	margin-right: -30px;
    padding-top: 1px;
}
.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 0 1.25rem;
}
.ColorSecondaryPre{
	padding:5px 15px;
}
.form-control:focus {
    color: #6e707e;
    background-color: #fff;
    border-color: #bac8f3;
    outline: 0;
    box-shadow: 0 0 0 0.1rem rgb(180 171 185 / 32%)!important;
	border-radius:1px!important;
}
.card-header:first-child{
    border-radius: calc(0.3rem - 1px) calc(0.3rem - 1px) 0 0!important;
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
						<form method="post">		
					  <div class="card-header ColorSecondaryPre">
						<div class="row d-flex pl-1 ">

<div class="col-lg-1"><a href="<?php echo base_url() ?>index.php/hrzone/dashboard/wall" style="color: white;font-size: 15px;"><i class="fa fa-home" aria-hidden="true"></i></a></div>
<div class="col-lg-6"> <i style="font-size: 10px;color: white;" class="fas fa-chevron-right"></i><span class="breadcrumb_text" style="font-size: 15px;color: #fff;font-weight: 600;"> &nbsp; Add Designer Monthly Kpi Goals</span></div>
  <div class="col-lg-5">


  
						<div class="d-flex sasifb flex-row-reverse ">
									<div class="" style="margin-left:5px;">
									
									<select class="empInput form-control" name="month_Id" id="month_Id" style="border: 1px solid #858796;" id="sel1">
									<option value="">Select Month</option>

									<?php 
									// echo "<pre>";
									// print_r($teamDesignation);die;
									$curMonth = date("n");


									 foreach ( $GoalMonth as $Month )
									{
									$selected_text='';
									if($Month->month_Id == $curMonth)
									$selected_text='selected';
									echo "<option year='".$Month->month."' value='".$Month->month_Id."'  $selected_text > ".$Month->month."</option>";

									}
									 
									 
									 ?>

									</select>
									</div>
									
									
									<div class="" style="margin-left:5px;">
									
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
									
									
									<div class="" style="margin-left:5px;">
									
									<select class="empInput form-control" name="User_Id" id="User_Id" style="border: 1px solid #858796;">
											<option>Select Employee</option>
											<?php 
											// echo "<pre>";
											// print_r($teamDesignation);die;
											
											$curnUser_Id = "";
											
											 foreach ( $User as $year )
											{
											$selected_text='';
											if($year->id == $curnUser_Id)
											$selected_text='selected';
											echo "<option year='".$year->id."' value='".$year->id."'  $selected_text > ".$year->name."</option>";

											}?>
											</select>
									</div>
				
									
									</div>

  </div>                    

</div>
			</div>
                        
								
									
									
						
								<div class="card-body pt-4">
										
										
										<div class="table-responsive">
										<table class="table table-bordered" id="TimelistdataTable" width="100%">
										<thead>
										<tr style="background: #00d3c3!important; color: #fff!important;">
										<th style="min-width: 800px!important; padding-left: 20px;">
										
										
										<label>Monthly Key Performance Indicator</label>
										
										
										
										</th>
										<th colspan="2" style="text-align:center;">
										
										<label>Marks</label>
										
										</th>
										
										
										
										
										
										</tr>
										</thead>
										<tbody id="YearGoal">
										<tr>
										
										<td>
										
										<input type="text" name="kpiGoal_Points[]" id="titleOne" class="empInput form-control" style="border: 1px solid white;">
										
										</td>
										<td>
										
										<input type="text" name="kpi_marks[]" id="marksOne" class="empInput form-control" style="border: 1px solid white;">
										
										</td>
										
										
										</tr>
										
										<tr>
										
										<td>
										
										<input type="text" name="kpiGoal_Points[]" id="titleTwo" class="empInput form-control" style="border: 1px solid white;">
										
										</td>
										<td>
										
										<input type="text" name="kpi_marks[]" id="marksTwo" class="empInput form-control" style="border: 1px solid white;">
										
										</td>
										
										
										</tr>
										
										<tr>
										
										<td>
										
										<input type="text" name="kpiGoal_Points[]" id="titleThree" class="empInput form-control" style="border: 1px solid white;">
										
										</td>
										<td>
										
										<input type="text" name="kpi_marks[]" id="marksThree" class="empInput form-control" style="border: 1px solid white;">
										
										</td>
										
										
										</tr>
										
										<tr>
										
										<td>
										
										<input type="text" name="kpiGoal_Points[]" id="titleFour" class="empInput form-control" style="border: 1px solid white;">
										
										</td>
										<td>
										
										<input type="text" name="kpi_marks[]" id="marksFour" class="empInput form-control" style="border: 1px solid white;">
										
										</td>
										
										
										</tr>
										
										<tr>
										
										<td>
										
										<input type="text" name="kpiGoal_Points[]" id="titleFive" class="empInput form-control" style="border: 1px solid white;">
										
										</td>
										<td>
										
										<input type="text" name="kpi_marks[]" id="marksFive" class="empInput form-control" style="border: 1px solid white;">
										
										</td>
										
										
										</tr>
										
										
										
										
										
										</tbody>
										</table>
										</div>

										<div class="d-flex  flex-row-reverse ">
										<div class=" ml-auto">
									<h5 style="color:#6f42c1; font-weight:500; font-size: 16px;">Click on <span style="color:#504a94;">"+"</span>icon to <span style="color:#504a94;"><strong>Add New Row.</strong></span><a href="#" id="add-rowGoal" style="padding-left: 13px;"><span style="color:red;">"+"</span></a></h5>
									</div>
										</div>
										
									</div>
										
									
					
							<div>
								
							<div class="card-body text-center" style="margin-top:0px;">
									
							<button id="KPISubmit"  type="submit"  name="submit" class="btn btn-default addEmpSubmitBtn">Create</button>
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
										
										<input type="text" name="kpiGoal_Points[]" class="empInput form-control" style="border: 1px solid white;">
										
										</td>
										<td>
										
										<input type="text" name="kpi_marks[]" class="empInput form-control" style="border: 1px solid white;">
										
										</td>
										<td style="min-width: 10px!important;">
										
										
										<button type="button" data-row="${row}" class="EducationDeleteRow"><i class="fas fa-times-circle"></i></button>
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
		
		var User_Id = $("#User_Id").val();
		
		console.log(User_Id);
		var User_Id_error = true;
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
		
		
		$("#User_Id").change(function(){
			User_Id_check();
		});
		
		function User_Id_check(){
			var User_Id = $("#User_Id option:selected").val();
			
			if(User_Id == "Select Employee"){
				$("#User_Id").css("border-color", "red");
				User_Id_error = false;
				return false;
				
			}else{
				$("#User_Id").css("border-color", "green");
				return true;
			}
		
		}
		
		
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
		
		$("#marksOne").keyup(function(){
			marksOne_check();
		});
		
		function marksOne_check(){
			var marksOne_val = $("#marksOne").val();
			
			if(marksOne_val == ""){
				$("#marksOne").css("border-color", "red");
				marksOne_error = false;
				return false;
				
			}else if(marksOne_val == 1){
				$("#marksOne").css("border-color", "green");
				
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
		
		
		
		
		$("#marksTwo").keyup(function(){
			marksTwo_check();
		});
		
		function marksTwo_check(){
			var marksTwo_val = $("#marksTwo").val();
			
			if(marksTwo_val == ""){
				$("#marksTwo").css("border-color", "red");
				marks1_error = false;
				return false;
				
			}else if(marksTwo_val == 1){
				$("#marksTwo").css("border-color", "green");
				return true;
			}
		
		}
		
		
		$("#marksThree").keyup(function(){
			marksThree_check();
		});
		
		function marksThree_check(){
			var marksThree_val = $("#marksThree").val();
			
			if(marksThree_val == ""){
				$("#marksThree").css("border-color", "red");
				marksThree_error = false;
				return false;
				
			}else if(marksThree_val == 1){
				$("#marksThree").css("border-color", "green");
				return true;
			}
		
		}
		
		
		$("#marksFour").keyup(function(){
			marksFour_check();
		});
		
		function marksFour_check(){
			var marksFour_val = $("#marksFour").val();
			
			if(marksFour_val == ""){
				$("#marksFour").css("border-color", "red");
				marksFour_error = false;
				return false;
				
			}else if(marksFour_val == 1){
				$("#marksFour").css("border-color", "green");
				
				return true;
				
			}
		
		}
		
		
		$("#marksFive").keyup(function(){
			marksFive_check();
		});
		
		function marksFive_check(){
			var marksFive_val = $("#marksFive").val();
			
			if(marksFive_val == ""){
				$("#marksFive").css("border-color", "red");
				marksFive_error = false;
				return false;
				
			}else if(marksFive_val == 1){
				$("#marksFive").css("border-color", "green");
				return true;
			}
		
		}
		
		
		
		
		$("#KPISubmit").click(function(){
		User_Id_error = true;
		titleOne_error = true;
		marksOne_error = true;
		titleTwo_error = true;
		marksTwo_error = true;
		titleThree_error = true;
		marksThree_error = true;
		titleFour_error = true;
		marksFour_error = true;
		titleFive_error = true;
		marksFive_error = true;
		
			User_Id_check();
			titleOne_check();
			marksOne_check();
			titleTwo_check();
			marksTwo_check();
			titleThree_check();
			marksThree_check();
			titleFour_check();
			marksFour_check();
			titleFive_check();
			marksFive_check();
			
			
			if((User_Id_error == true) && (titleOne_error == true) && (marksOne_error == true) && (titleTwo_error == true) && (marksTwo_error == true) && (titleThree_error == true) && (marksThree_error == true) && (titleFour_error == true) && (marksFour_error == true) && (titleFive_error == true) && (marksFive_error == true)){
				alert("HIi");
				return true;
			}else{
				alert("Please fill required fields!");
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