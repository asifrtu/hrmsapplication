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
	font-size: 12px!important;
    height: calc(1.2em + .4rem + 2px);
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
    border-radius: 1px;
    overflow: hidden!important;
    padding: 0.1rem 0.75rem!important;
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
        <div id="content-wrapper bg-gradient-primary" class="col-lg-10" style=" margin-top:30px; margin-bottom:50px; padding-left:20px;">

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
<div class="col-lg-6"> <i style="font-size: 10px;color: white;" class="fas fa-chevron-right"></i><span class="breadcrumb_text" style="font-size: 15px;color: #fff;font-weight: 600;"> &nbsp; Add Content Writer onthly Kpi Goals</span></div>
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
									
									<select class="empInput form-control" name="User_Id" style="border: 1px solid #858796;" id="sel1">
											<option>Select Employee</option>
											<?php 
											// echo "<pre>";
											// print_r($teamDesignation);die;
											
											foreach($User as $data){
											echo '<option value="'.$data->id.'">'.$data->name.'</option>';
											 }?>
											</select>
									</div>
									
									
									</div>

</div>                        


</div>
			</div>
					
                        
								
									
									
						<?php echo form_open_multipart('#'); ?>
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
										
										<input type="text" name="kpiGoal_Points[]" class="empInput form-control" style="border: 1px solid white;">
										
										</td>
										<td>
										
										<input type="text" name="kpi_marks[]" class="empInput form-control" style="border: 1px solid white;">
										
										</td>
										
										
										</tr>
										
										<tr>
										
										<td>
										
										<input type="text" name="kpiGoal_Points[]" class="empInput form-control" style="border: 1px solid white;">
										
										</td>
										<td>
										
										<input type="text" name="kpi_marks[]" class="empInput form-control" style="border: 1px solid white;">
										
										</td>
										
										
										</tr>
										
										<tr>
										
										<td>
										
										<input type="text" name="kpiGoal_Points[]" class="empInput form-control" style="border: 1px solid white;">
										
										</td>
										<td>
										
										<input type="text" name="kpi_marks[]" class="empInput form-control" style="border: 1px solid white;">
										
										</td>
										
										
										</tr>
										
										<tr>
										
										<td>
										
										<input type="text" name="kpiGoal_Points[]" class="empInput form-control" style="border: 1px solid white;">
										
										</td>
										<td>
										
										<input type="text" name="kpi_marks[]" class="empInput form-control" style="border: 1px solid white;">
										
										</td>
										
										
										</tr>
										
										<tr>
										
										<td>
										
										<input type="text" name="kpiGoal_Points[]" class="empInput form-control" style="border: 1px solid white;">
										
										</td>
										<td>
										
										<input type="text" name="kpi_marks[]" class="empInput form-control" style="border: 1px solid white;">
										
										</td>
										
										
										</tr>
										
										
										
										
										
										</tbody>
										</table>
										</div>
										
										<div class="d-flex  flex-row-reverse ">
										<div class=" ml-auto">
									<h5 style="color:#6f42c1; font-weight:500; font-size: 16px;">Click on <span style="color:#504a94;">"+"</span>icon to <span style="color:#504a94;"><strong>Add New Row.</strong></span><a href="#" id="add-rowGoal"style="padding-left: 13px;"><span style="color:red;">"+"</span></a></h5>
									</div>
										</div>
										
									</div>
										
									
					
							<div>
								
							<div class="card-body text-center" style="margin-top:0px;">
									
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