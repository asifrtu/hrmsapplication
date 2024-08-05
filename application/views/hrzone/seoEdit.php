<?php include('header.php'); ?>


<?php include('TeamGoalSidebar.php'); ?>
<style>
.addEmpSubmitBtn {
    color: white!important;
    margin-bottom: 30px;
    float: center;
    background: #1C304C;
    font-weight: 400;
    border-radius: 2px;
    padding: 0.2em 2em 0.2em 2em;
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
	font-size: 13px!important;
    height: calc(1.5em + .4rem + 2px);
	color:#343434;
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
	font-size:14px;
	color:#4c3f5e;
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

.table td, .table th {
     padding: 0.2rem; 
    vertical-align: top;
    border-top: 1px solid #e3e6f0;
}

.sasifb{
	
	margin: 5px 13px;
}
.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem 1.25rem;
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
    border-radius: 1px!important;
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
								
					  <div class="card-header ColorSecondaryPre">
						<div class="row d-flex pl-1 ">

<div class="col-lg-1"><a href="<?php echo base_url() ?>index.php/hrzone/dashboard/wall" style="color: white;font-size: 15px;"><i class="fa fa-home" aria-hidden="true"></i></a></div>
<div class="col-lg-7"> <i style="font-size: 10px;color: white;" class="fas fa-chevron-right"></i><a href="<?php echo base_url() ?>index.php/hrzone/CompanyGoals/SeoGoalView"style="text-decoration:none;"><span class="breadcrumb_text" style="font-size: 15px;color: #fff;"> &nbsp;view&nbsp;&nbsp;</span></a><i style="font-size: 10px;color: white;" class="fas fa-chevron-right"></i><span class="breadcrumb_text" style="font-size: 15px;color: #fff;"> &nbsp;SEO Team Goals - <span style="font-weight:bold;">edit </span></span></div>
                        </div>
 </div>
					
					

						<?php echo form_open_multipart('hrzone/CompanyGoals/SeoGoalsUpdate'); ?>
						
									
									
						
								<div class="card-body">
										
										
										<div class="table-responsive">
										<table class="table table-bordered" id="TimelistdataTable" width="100%">
										<thead>
										<tr style="background: #d8cadf;">
										<td style="min-width: 450px!important; padding-left: 20px;">
										
										
										<label>Goals List for SEO Team</label>
										
										
										
										</td>
										
										
										
										
										
										<td  style="text-align:center;">
										
										<label>Comment</label>
										
										</td>
										<td colspan="" style="min-width: 50px!important;text-align:center;">
										
										<label>Status</label>
										
										</td>
										
										
										
										
										
										
										
										
										</tr>
										</thead>
										<tbody id="YearGoal">
										
										<?php 
										
										if(!empty($SeoGoalInfo)):  ?>
									
											<?php	
											
											
											foreach($SeoGoalInfo as $emp):
											
											
											?>
										
										<tr>
										
										<td>
										
										
										<input type="hidden" name="Year_Id" value="<?php if(isset($Year_Id)) echo $Year_Id;?>" class="empInput form-control" style="border: 1px solid white;">
										
										<input type="text" name="seogoal_points[]" value="<?php if(isset($emp->seogoal_points)) echo $emp->seogoal_points;?>" class="titleOne empInput form-control" style="border: 1px solid white;" required>
										
										</td>
										
										
										
									
										
										<td>
										
										<input type="text" name="seogoal_comments[]" value="<?php if(isset($emp->seogoal_comments)) echo $emp->seogoal_comments;?>" class="KpimarksOne empInput form-control" style="border: 1px solid white; text-align:center;" >
										
										</td>

										<td>
										
										<select class="form-control" name="work_status[]" value="<?php if(isset($emp->work_status)) echo $emp->work_status;?>" style="padding: .2rem .75rem .375rem .75rem!important; border: 1px solid #858796;" >
										
											<option><?php if(isset($emp->work_status)) echo $emp->work_status;?></option>
											<option>Pending</option>
											<option>InProgress</option>
											<option>Completed</option>
											</select>
										</td>

										</tr>
										<?php endforeach;  ?>
										<?php else: ?>
										<tr>
										<td colspan="3">Data is Not Available</td>
										<?php endif; ?>

										</tr>
										
										</tbody>
										</table>
										</div>
										<div class="d-flex sasifb flex-row-reverse ">
										<div class=" ml-auto">
									
									<h5 style="color:#6f42c1; font-weight:500; font-size: 16px;">Click on <span style="color:#504a94;">"+"</span>icon to <span style="color:#504a94;"><strong>Add New Row.</strong></span><a href="javascript:void(0)" id="add-rowGoal"style="padding-left: 13px;"><span style="color:red;">"+"</span></a></h5>
									</div>
										</div>
										
									</div>
										
									
					
							<div>
								
							<div class="card-body text-center" style="margin-top:0px;">
									
							<button class="btn btn-default addEmpSubmitBtn" id="KPISubmit" type="submit" >Update</button>
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
										
										
										<input type="hidden" name="Year_Id" value="<?php if(isset($Year_Id)) echo $Year_Id;?>" class="empInput form-control" style="border: 1px solid white;">
										
										<input type="text" name="seogoal_points[]" value="" class="titleOne empInput form-control" style="border: 1px solid white;" required>
										
										</td>
										
										
										
										<td>
										
										<select class="form-control" name="work_status[]" value="" style="padding: .2rem .75rem .375rem .75rem!important; border: 1px solid #858796;" >
										
											<option></option>
											<option>Work Status</option>
											<option>Pending</option>
											<option>InProgress</option>
											<option>Completed</option>
											</select>
										</td>
										<td>
										
										<input type="text" name="seogoal_comments[]" value="" class="KpimarksOne empInput form-control" style="border: 1px solid white; text-align:center;" >
										
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