<?php include('header.php'); ?>
<?php include('AppraisalSidebar.php'); ?>
        <!-- Content Wrapper -->
		
		
 
 
 <?php if(!empty($UserInfo->id)){$UserId = $UserInfo->id;} 
 
 
 // print_r($UserInfo); die;
 ?>

<style>
.btncrat::after {
    width: 1rem;
    text-align: center;
    float: right;
    vertical-align: 0;
    border: 0;
    font-weight: 900;
    content: '\25BC';
	padding-left:10px;
    font-family: 'Font Awesome 5 Free';
}
.addGoalsBtn{
	float:left;
	margin-bottom:5px;
	color:#1C304C!important;
	background: white!important;
	font-weight: 400;
    border-radius: 2px;
    padding: .2em 2em 0.2em 2em;
    border: 2px solid #1C304C!important;
}
.tnUemp {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
 
}
.tnemp {
  float: right;
  text-align:center;
  padding:2px 0;
	
}
.tnNotify {
  float: left;
  text-align:center;
  padding:2px 0;
  margin:0 2px;		
}
.tnemp a {
  
  color: #706e80;
  text-align: center;
  padding: 8px 11px;
  text-decoration: none;
  
}
.tnNotify a {
  
  color: white;
  text-align: center;
  padding: 8px 11px;
  text-decoration: none;
  
}
.tnAccept a {
	background-color:#504a94;
}
.tnDecline a {
	background-color:red;
}


.table td, .table th {
    
}

.empTL{
	padding:1rem .35rem!important;
}

.empTL1{
	padding: 0rem!important;
	text-align:center;
}

.empTL2{
	padding: 0rem!important;
	text-align:center;
}

.dropbtn {
  margin-bottom:5px;
	color:#1C304C!important;
	background: white!important;
	font-weight: 400;
    border-radius: 2px;
    padding: .2em 2em 0.2em 2em;
    border: 2px solid #1C304C!important;
  
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 122px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 5px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}

.empWeekOff{
	background-color: lightgray;
}
.empLWP{
	background-color: #f9c3cd;
}

td{
    padding: .3rem 1rem!important;
}
.arrow-down {
  width: 0; 
  height: 0; 
  border-left: 20px solid transparent;
  border-right: 20px solid transparent;
  
  border-top: 20px solid red;
}	
.actionFontSize{
	font-size:15px!important;
    color: #00d3c3!important;
}

.bg-info {
    background-color: #ececec!important;
}
.p-2 {
    padding: .1rem!important;
}
.sasifb{
	margin-bottom:25px;
}


.form-check-label {
    color: black;
}
.calTH{
	text-align:center;
}

.empCL{
	text-align:center;
}


.table td, .table th {
padding: .3rem .3rem .0rem .3rem!important;
}
.AttSort{
	height: calc(1em + .75rem + 2px);
   
    padding: .200rem .5rem;
    font-size: 14px;
}
.AttSortMonth{
	height: calc(1em + .75rem + 2px);
   
    padding: .200rem .2rem;
    font-size: 14px;
}


.sasifb{
	margin-bottom: 10px;
    margin-top: 10px;
}
.AttFontStatus{
	font-size:14px;
	
}
.cmPayroll{
	font-size:14px;
	font-weight:500;
}



.W-OFF{
	color:#929396;
	background-color:#f9f9fd;
	font-size:12px;
	text-align:center;
}

.H{
	color:#929396;
	background-color:#f9f9fd;
	font-size:12px;
	text-align:center;
}

.MD{
	color:white;
	background-color:#f9f9fd;
	font-size:12px;
	text-align:center;
}

.P{
	
	font-size:12px;
	text-align:center;
}

.CL{
	color:#929396;
	background-color:#f9f9fd;
	font-size:12px;
	text-align:center;
}
.EL{
	color:#929396;
	background-color:#f9f9fd;
	font-size:12px;
	text-align:center;
}
.LWP{
	color:#929396;
	background-color:#f9f9fd;
	font-size:12px;
	text-align:center;
}


.form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + 0.4rem + 2px);
	font-size: 0.9rem;
}

.addEmpSubmitBtn{
	margin: 0px 445px;
	margin-bottom:50px;
	color:white!important;
    
	float:center;
    background: #1C304C;
    
    font-weight: 400;
    border-radius: 2px;
    padding: .2em 2em 0.2em 2em;
    border: none !important;
}

.appraisal:before {
    content: "• ";
    color: rgb(47, 63, 120);
    font-size: 20px;
}




.page-item:first-child .page-link {
    margin-left: 0;
    border-top-left-radius: .1rem;
    border-bottom-left-radius: .1rem;
}

.page-item:last-child .page-link {
    border-top-right-radius: .1rem;
    border-bottom-right-radius: .1rem;
}

.page-link {
    position: relative;
    display: block;
    padding: .5rem .75rem;
    margin-left: -1px;
    line-height: 1.25;
    color: #2e2869;
    background-color: #fff;
    border: 1px solid #dddfeb;
}

.page-item.active .page-link {
    z-index: 3;
    color: #fff;
    background-color: #2f296a;
    border-color: #2e2869;
}
</style>


 <div id="content-wrapper bg-gradient-primary" class="d-flex flex-column" style="margin-top:50px; margin-bottom:50px;">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                 <?php if(!empty($this->session->flashdata('message'))) { ?>
			
			
			<?=$this->session->flashdata('message');?>
			
		<?php } ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    
					<div class="card shadow mb-4">
                        <div class="ColorSecondaryPre" style="padding: 12px 5px 5px 12px;">
                            <h5 class=" md-4 ColorPrimary" style="font-size:17px;">Performance Evaluation</h5>
                        </div>
                        
                    <!-- Content Row -->
					<!-- Area Chart -->
						<div class="card shadow mb-4" style="border: 2px solid #504a94; margin:20px;">
						<div class="">	
						
								<?php echo form_open_multipart('#'); ?>
								
								<div class="card-body" style="width:1000px;">
								
								
									
									<div class="row">
						<div class="col-lg-12" style="margin-bottom: 15px;">
						<div class="ColorSecondaryPre">
						<h6 class="m-0 font-weight-bold ColorPrimary" style="padding:5px;"><?php if(!empty($Title->title_76)){echo $Title->title_76;} ?></h6>
						</div>
						</div>
						</div>
								<div class="table-responsive">
									<table class="table table-bordered" id="TimelistdataTable" width="100%">
										
										<tbody>
											<tr>
												
												<td style="min-width: 120px!important;">Employee Name</td>
												<td style="min-width: 120px!important;"><?php if(!empty($UserInfo->name)){echo $UserInfo->name;} ?></td>
												<td style="min-width: 120px!important;">Employee Id</td>
												<td style="min-width: 120px!important;"><?php if(!empty($UserInfo->employee_id)){echo $UserInfo->employee_id;} ?></td>
												
												
												
											</tr>
											<tr>
												
												<td style="min-width: 120px!important;">Position</td>
												<td style="min-width: 120px!important;"><?php //echo //$EmployeeDetails->position; ?></td>
												<td style="min-width: 120px!important;">Email</td>
												<td style="min-width: 120px!important;"><?php if(!empty($UserInfo->email)){echo $UserInfo->email;} ?></td>
												
												
												
											</tr>
											
											
										</tbody>
										
									</table>
								</div>
								
								
								
								
								</div>
								
								
							<div class="card-body" style="width:1000px;">
								
								<div class="row">
						<div class="col-lg-12" style="margin-bottom: 15px;">
						<div class="ColorSecondaryPre">
						<h6 class="m-0 font-weight-bold ColorPrimary" style="padding:5px;"><?php if(!empty($Title->title_77)){echo $Title->title_77;} ?></h6>
						</div>
						</div>
						</div>	
									
									
								<div class="table-responsive">
									<table class="table" id="TimelistdataTable" width="100%">
										
										<tbody>
											
											<?php if(!empty($GoalsAndObjective)):  ?>
									
											<?php	
											
											
											foreach($GoalsAndObjective as $emp): ?>
											<tr class="appraisal">
											
												
												<td><?php  echo $emp->title; ?>&nbsp;&nbsp;&nbsp;<a href="javascript:void(0)" data-GoalsId="<?php echo $emp->GoalsAndObjective_Id; ?>" class="AppraisalGoalsEdit" ><i class="actionFontSize fas fa-edit"></i></a></td>
												
											</tr>
											
											<?php  endforeach;  ?>
										<?php else: ?>
										<tr>
										<td colspan="3">Data is Not Available</td>
										<?php endif; ?>

										</tr>
											
										</tbody>
										
									</table>
								</div>
								
								
								
								
								</div>	
								
								
								<div class="card-body" style="width:1000px;">
								
								<div class="row">
						<div class="col-lg-12" style="margin-bottom: 15px;">
						<div class="ColorSecondaryPre">
						<h6 class="m-0 font-weight-bold ColorPrimary" style="padding:5px;"><?php if(!empty($Title->title_78)){echo $Title->title_78;} ?></h6>
						</div>
						</div>
						</div>	
									
									
								<div class="table-responsive">
									<table class="table" id="TimelistdataTable" width="100%">
										
										<tbody>
											
											
											<?php if(!empty($Process)):  ?>
									
											<?php	
											$SNo = 1;
											
											foreach($Process as $emp): ?>
											<tr>
											
												<td style="min-width: 10px!important;"><?php  echo $SNo; ?></td>
												
												<td><?php  echo $emp->title; ?>&nbsp;&nbsp;&nbsp;<a href="javascript:void(0)" data-ProcessId="<?php echo $emp->process_Id; ?>" class="AppraisalProcessEdit" ><i class="actionFontSize fas fa-edit"></i></a></td>
												
											</tr>
											
											<?php  $SNo++; endforeach;  ?>
										<?php else: ?>
										<tr>
										<td colspan="3">Data is Not Available</td>
										<?php endif; ?>

										</tr>
											
										</tbody>
										
									</table>
								</div>
								
								
								
								
								</div>	
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								</form>
								
								
								
								
							</div>
							
							
							
							
							<ul class="pagination justify-content-center" style="margin:20px 0">
							<li class="page-item active" ><a class="page-link" href="<?=base_url('index.php/hrzone/Appraisal/AppraisalForm/');?>">1</a></li>
							<li class="page-item"><a class="page-link" href="<?=base_url('index.php/hrzone/Appraisal/AppraisalFormTwo/');?>">2</a></li>
							<li class="page-item"><a class="page-link" href="<?=base_url('index.php/hrzone/Appraisal/AppraisalFormThree/');?>">3</a></li>
							<li class="page-item"><a class="page-link" href="<?=base_url('index.php/hrzone/Appraisal/AppraisalFormFour/');?>">4</a></li>
							<li class="page-item"><a class="page-link" href="<?=base_url('index.php/hrzone/Appraisal/AppraisalFormFive/');?>">5</a></li>
							<li class="page-item"><a class="page-link" href="<?=base_url('index.php/hrzone/Appraisal/AppraisalFormSix/');?>">6</a></li>
							<li class="page-item"><a class="page-link" href="<?=base_url('index.php/hrzone/Appraisal/AppraisalFormTwo/');?>">Next</a></li>
							</ul>

							
							
							
							
							
							
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



  <!-- End of Page Wrapper -->
<div class="modal " id="updateModal" role="dialog">
<div class="modal-dialog modal-lg">
<!-- Modal content-->
	<div class="modal-content" style="margin: 196px 9px 0 259px;  width: 89%!important; ">
		<div class="card-header" style="padding:0!important; background-color: #2e2869;">
		<div class="row">
		<h6 class="ColorPrimary" style="padding-left: 302px; padding-top: 10px;">Appraisal Edit</h6>
		<button style="margin-left:220px;" type="button" class="close" data-bs-dismiss="modal">&times;</button>
		</div>
		</div>

	<div class="modal-body">

	<form class="form-horizontal" action="#">
			<div class="row" >
			<div class="col-lg-3">
			<div class="form-group">
			<label>Title</label>
			</div>
			</div>
			</div>
			<div class="row" >
			<div class="col-lg-12">
			<div class="form-group">
			<textarea type="text" rows="4" name="CL_Status" id="AppraisalTitle" class="empInput form-control" style="border: 1px solid #858796;"></textarea>
			</div>
			</div>
			
			
			
			</div>
		

	<button type="button" class="addEmpSubmitBtn AppraisalSubmit" id="btnUploadPage" style="text-align:center; margin:25px 300px;">Submit</button>
	<input type="hidden" name="" id="GoalsId" >

	</form>
	</div>
	</div>
<!-- Content Row -->

</div>

</div>




  <!-- End of Page Wrapper -->
<div class="modal " id="updateProcessModal" role="dialog">
<div class="modal-dialog modal-lg">
<!-- Modal content-->
	<div class="modal-content" style="margin: 196px 9px 0 259px;  width: 89%!important; ">
		<div class="card-header" style="padding:0!important; background-color: #2e2869;">
		<div class="row">
		<h6 class="ColorPrimary" style="padding-left: 302px; padding-top: 10px;">Appraisal Edit</h6>
		<button style="margin-left:220px;" type="button" class="close" data-bs-dismiss="modal">&times;</button>
		</div>
		</div>

	<div class="modal-body">

	<form class="form-horizontal" action="#">
			<div class="row" >
			<div class="col-lg-3">
			<div class="form-group">
			<label>Title</label>
			</div>
			</div>
			</div>
			<div class="row" >
			<div class="col-lg-12">
			<div class="form-group">
			<textarea type="text" name="title" id="AppraisalProcessTitle" class="empInput form-control" rows="4" style="border: 1px solid #858796;"></textarea>rows="4"
			</div>
			</div>
			
			
			
			</div>
		

	<button type="button" class="addEmpSubmitBtn AppraisalSubmit" id="btnUploadPage" style="text-align:center; margin:25px 300px;">Submit</button>
	<input type="hidden" name="" id="GoalsId" >

	</form>
	</div>
	</div>
<!-- Content Row -->

</div>

</div>








    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
	$(document).ready(function(){
		
	$("body").on('click', '.AppraisalEdit', function(){
	var id = $(this).attr('data-titileId');
	var ajaxurl = "<?=site_url('hrzone/Appraisal/AppraisalView');?>";
        $.ajax({
            type: "get",
            url: ajaxurl,
            data: {id:id},
			dataType: "JSON",
			success:function(data){
				$("#updateModal").modal('show');
				$('#AppraisalTitle').val(data.title_76);
				
			
			}
				
        });
	
  });
	
	
	
	$("body").on('click', '.AppraisalGoalsEdit', function(){
	var id = $(this).attr('data-GoalsId');
	var ajaxurl = "<?=site_url('hrzone/Appraisal/AppraisalGoalsView');?>";
        $.ajax({
            type: "get",
            url: ajaxurl,
            data: {id:id},
			dataType: "JSON",
			success:function(data){
				$("#updateModal").modal('show');
				$('#AppraisalTitle').val(data.title);
				$('#GoalsId').val(data.Goals_Id);
				
			
			}
				
        });
	
  });
	
	$("body").on('click', '.AppraisalProcessEdit', function(){
	var id = $(this).attr('data-ProcessId');
	var ajaxurl = "<?=site_url('hrzone/Appraisal/AppraisalProcessView');?>";
        $.ajax({
            type: "get",
            url: ajaxurl,
            data: {id:id},
			dataType: "JSON",
			success:function(data){
				$("#updateProcessModal").modal('show');
				$('#AppraisalProcessTitle').val(data.title);
				$('#GoalsId').val(data.Goals_Id);
				
			
			}
				
        });
	
  });
	
	
	
	
	
	
		$("body").on('click', '.AppraisalSubmit', function(){
  // function updateUserRecord(){
	var Title = $('#AppraisalTitle').val();
	var GoalID = $('#GoalsId').val();
	
	
	// var Yid = $(this).attr('data-yearID');
	var ajaxurl = "<?=site_url('hrzone/Appraisal/UpadteAppraisalGoal');?>";
        $.ajax({
            type: "post",
            url: ajaxurl,
            data: {Title : Title, GoalID:GoalID},
			dataType: "JSON",
			success:function(data){
			$('#updateModal').modal("hide");
			alert("Data updated Successfully");
			}
			
		});
  
}); 




		$("body").on('click', '.AppraisalProcessSubmit', function(){
  // function updateUserRecord(){
	var Title = $('#AppraisalTitle').val();
	var GoalID = $('#GoalsId').val();
	
	
	// var Yid = $(this).attr('data-yearID');
	var ajaxurl = "<?=site_url('hrzone/Appraisal/UpadteAppraisalProcess');?>";
        $.ajax({
            type: "post",
            url: ajaxurl,
            data: {Title : Title, GoalID:GoalID},
			dataType: "JSON",
			success:function(data){
			$('#updateProcessModal').modal("hide");
			alert("Data updated Successfully");
			}
			
		});
  
}); 





	
	$("body").on('click', '.AppraisalaaaSubmit', function(){
  // function updateUserRecord(){
	var Title = $('#AppraisalTitle').val();
	
	
	// var Yid = $(this).attr('data-yearID');
	var ajaxurl = "<?=site_url('hrzone/Appraisal/UpadteTitle');?>";
        $.ajax({
            type: "post",
            url: ajaxurl,
            data: {Title : Title},
			dataType: "JSON",
			success:function(data){
			$('#updateModal').modal("hide");
			alert("Data updated Successfully");
			}
			
		});
  
}); 
	
	
	
});



function MonthlyUserTimeList(YearID, MonthID){
	var ajaxurl = "<?=site_url('hrzone/EmployeeAttendance/UserTimeList');?>";
        $.ajax({
            type: "get",
            url: ajaxurl,
            data: {YearID:YearID, MonthID : MonthID},
			dataType: "JSON"
        }).done(function(response){
			if(response){
				$("# tbody").html(`${response.data.map(function(data, index){
										return(`

										<tr class="${data.Status}">
										<td style="text-align:center;">${++index}</td>
										<td class="empCL AttFontStatus" style="min-width: 101px!important; ">${data.AttendenceDate}</td>
										<td class="empCL AttFontStatus" style="min-width: 75px!important; ">${data.CalDay}</td>
										<td class="empCL AttFontStatus" style="min-width: 75px!important; ">10:30</td>
										<td class="empCL AttFontStatus" style="min-width: 75px!important; ">06:30</td>
										<td class="empCL AttFontStatus" style="min-width: 75px!important; ">${(data.checkInTime != "")?data.checkInTime: "Nil"}</td>
										<td class="empCL AttFontStatus" style="min-width: 75px!important; ">${(data.checkOutTime != "")?data.checkOutTime: "Nil"}</td>
										<td class="empCL AttFontStatus" style="min-width: 75px!important; ">${data.Status}</td>
										<td class="empCL AttFontStatus" style="min-width: 75px!important; "></td>
										<td class="empCL AttFontStatus" style="min-width: 75px!important; "></td>
										
										</tr>

										`)
										}).join('')}
										
										
										`);

			} else {
				$("#TimelistdataTable tbody").html("<div>No data Found.....</div>");
			}
				
        });
}
							
</script>

<?php include('footer.php'); ?>