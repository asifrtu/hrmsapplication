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
									<h5><div class="row"><div class="col-lg-2">Date </div><div class="col-lg-4"><input type="date" class="form-control" name="apply_date"></div></div></h5>
									
									<h6>To</h6>
									<h6>The Manager</h6>
									<h6><?php echo COMPANY_NAME; ?> Group</h6>
									<div class="row" style="margin:0px!important;">
									<div class="col-lg-2" style="padding:0px!important;">
									<h6 style="margin-bottom: 0.1rem;">Subject: </h6>
									</div>
									<div class="col-lg-10" style="margin:0px!important;">
									<input type="text" class="form-control" name="Subject">
									</div>
									</div>
									
									
									<br>
									<h6>Dear Sir,</h6>
									<br>
									<div class="row">
									<div class="col-lg-4">
									<h6>I &nbsp;&nbsp; &nbsp; <input type="text" class="form-control" name="name"></h6>
									</div>
									<div class="col-lg-4">
									<h6>S/O &nbsp;&nbsp; &nbsp; <input type="text" class="form-control" name="guardian_so"> </h6>
									</div>
									<div class="col-lg-4">
									<h6>R/O &nbsp;&nbsp; <input type="text" class="form-control" name="guardian_ro"></h6>
									</div>
									</div>
									
									<div class="row">
									<div class="col-lg-4">
									<h6>with Employee Code &nbsp;&nbsp; &nbsp; <input type="text" class="form-control" name="Employee_Code"></h6>
									</div>
									<div class="col-lg-4">
									<h6>have worked with <?php echo COMPANY_NAME; ?> Global Solution LLP,&nbsp;&nbsp; &nbsp;  </h6>
									</div>
									<div class="col-lg-4">
									<h6>as a &nbsp;&nbsp; <input type="text" class="form-control" name="position"></h6>
									</div>
									</div>
									
									<div class="row">
									<div class="col-lg-4">
									<h6>from &nbsp;&nbsp; &nbsp; <input type="date" class="form-control" name="date_from"></h6>
									</div>
									<div class="col-lg-4">
									<h6>to &nbsp;&nbsp; &nbsp;  <input type="date" class="form-control" name="date_to"></h6>
									</div>
									<div class="col-lg-4">
									<h6>in &nbsp;&nbsp; <input type="text" class="form-control" name="title_in"></h6>
									</div>
									</div>
									
									<div class="row">
									
									<div class="col-lg-6">
									<h6>Due to &nbsp;&nbsp; &nbsp;  <input type="text" class="form-control" name="Due_to"></h6>
									</div>
									<div class="col-lg-6" style="padding-right:0;">
									<h6>I would like to resign from my current employement. </h6>
									</div>
									</div>
									
									
									<h6>So please accept my resignation and relieve me as per the terms and
									condition of the appointment letter and do my full final settlement.</h6>
									
									
									
									<h6><br><br><br>Thank You,<br><br>Yours Sincerely,<br><div class="col-lg-4"><input type="text" class="form-control" name="Yours_Sincerely"></div><br><br></h6>
								</div>
					
							<button type="submit" class="btn btn-default addEmpSubmitBtn">Submit</button>
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