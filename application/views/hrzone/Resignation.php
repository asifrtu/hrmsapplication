<?php include('header.php'); ?>
<?php include('ExitSidebar.php'); ?>
 
        <!-- Content Wrapper -->
 

<style>

.addGoalsBtn{
	float:right;
	margin-bottom:5px;
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
  float: right;
  text-align:center;
  padding:2px 0;
	
}
.tnemp a {
  
  color: #706e80;
  text-align: center;
  padding: 8px 11px;
  text-decoration: none;
  
}
.table-sm td, .table-sm th {
    padding: .4rem;
}
.tableHeadAR{
	background-color: #504a94;
    padding: .35rem 1.25rem!important;
}
thead{
	background:#ececec;
}
.mar{
	margin:10px 0;
}
.form-control {
    
    height: calc(1.5em + .4rem + 1px);
    padding: .275rem .5rem;
	font-size: 0.9rem;
	
}

.form-group {
        margin: 0.1rem 0 0.7rem 0rem!important;
}
.bg-info {
    background-color: #ececec!important;
}
.p-2 {
    padding: .1rem!important;
}
.sasifb{
	margin-bottom: 10px;
    margin-top: 10px;
}

.empInput{
	border: 1px solid #858796;
    border-radius: 3px;
	overflow:hidden!important;
	
	padding: .2rem .75rem!important;
}

td:last-child{
	width:60px;
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
  font-size:14px;
  text-decoration: none;
}
.ColorSecondaryNotes{
	background-color:#ececec;
	padding: .35rem 1.25rem!important;
}

td:first-child { width:10px; };



.Completed{
	color:white;
	background-color:#7bc017;
	
	text-align:center;
}


.Pending{
	color:white;
	background-color:#f65c4c;
	
	text-align:center;
}



.InProgress{
	color:white;
	background-color:#feaa27;
	
	text-align:center;
}

.AttFontStatus{
	font-size:14px;
	
}
.cmPayroll{
	font-size:14px;
	font-weight:500;
}
.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 0 1.25rem;
}
</style>

 <div id="content-wrapper bg-gradient-primary" class="d-flex flex-column" style="margin-top:50px; margin-bottom:50px;">

            <!-- Main Content -->
            <div id="content">
				
		
                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    
					<div class="card shadow mb-4" style="width: 1000px!important; margin-bottom:100px;">
                       
						
						
						
						<div class="ColorSecondaryPre" style="padding: 12px 5px 5px 12px;">
                            <h5 class=" md-4 ColorPrimary" style="font-size:17px;">Resignation Letter</h5>
                        </div>
						
						<div class="" >
						<ul class="APUemp ColorSecondaryNotes">
						<li class="APemp"><a href="#" style="font-style: italic;">Here are the Resignation Letter.</a></li>
						</ul>


						</div>
							
                    <!-- Content Row -->
					  <!-- Area Chart -->
								
							<?php echo form_open_multipart('adminzone/Separation/ResignLetter'); ?>
							
								
								<div class="card-body">
								
								
									<div class="d-flex sasifb flex-row-reverse ">
									<div class="p-2 bg-info">
									
									 
									</div>
									<h5 style="text-align:center; margin:auto; font-weight:bold; font-size: 21px;">Resignation Letter</h5>
									
									
									</div>
									
								
									<br>
									<br>
									<h6>Date &nbsp;&nbsp; &nbsp;<?php if(!empty($letter->apply_date)){echo $letter->apply_date;} ?></h6>
									
									<h6>To</h6>
									<h6>The Manager</h6>
									<h6><?php echo COMPANY_NAME; ?> Group</h6>
									<div class="row" style="margin:0px!important;">
									<div class="col-lg-2" style="padding:0px!important;">
									<h6 style="margin-bottom: 0.1rem;">Subject: </h6>
									</div>
									<div class="col-lg-10" style="margin:0px!important;">
									<?php if(!empty($letter->Subject)){echo $letter->Subject;} ?>
									</div>
									</div>
									
									
									<br>
									<h6>Dear Sir,</h6>
									<br>
									
									<h6>I &nbsp;&nbsp; &nbsp; <?php if(!empty($letter->name)){echo $letter->name;} ?>
									
									&nbsp;&nbsp; &nbsp; S/O &nbsp;&nbsp; &nbsp; <?php if(!empty($letter->guardian_so)){echo $letter->guardian_so;} ?> 
									
									&nbsp;&nbsp; &nbsp; R/O &nbsp;&nbsp; <?php if(!empty($letter->guardian_ro)){echo $letter->guardian_ro;} ?>
									
									
									
									&nbsp;&nbsp; &nbsp; with Employee Code &nbsp;&nbsp; &nbsp; <?php if(!empty($letter->Employee_Code)){echo $letter->Employee_Code;} ?>
									
									&nbsp;&nbsp; &nbsp; have worked with <?php echo COMPANY_NAME; ?>,&nbsp;&nbsp; &nbsp;  
									
									as a &nbsp;&nbsp; <?php if(!empty($letter->position)){echo $letter->position;} ?>
									
									
									
									&nbsp;&nbsp; &nbsp; from &nbsp;&nbsp; &nbsp; <?php if(!empty($letter->date_from)){echo $letter->date_from;} ?>
									
									&nbsp;&nbsp; &nbsp; to &nbsp;&nbsp; &nbsp;  <?php if(!empty($letter->date_to)){echo $letter->date_to;} ?>
									
									&nbsp;&nbsp; &nbsp; in &nbsp;&nbsp; <?php if(!empty($letter->title_in)){echo $letter->title_in;} ?>
									
									&nbsp;&nbsp; &nbsp; Due to &nbsp;&nbsp; &nbsp;  <?php if(!empty($letter->Due_to)){echo $letter->Due_to;} ?>
									
									I would like to resign from my current employement.
									
									So please accept my resignation and relieve me as per the terms and
									condition of the appointment letter and do my full final settlement.</h6>
									
									
									
									<h6><br><br><br>Thank You,<br><br>Yours Sincerely,<br><?php if(!empty($letter->Yours_Sincerely)){echo $letter->Yours_Sincerely;} ?><br><br></h6>
								</div>
					
							
							</form>
						
						
                   

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
	
	

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

<?php include('footer.php'); ?>