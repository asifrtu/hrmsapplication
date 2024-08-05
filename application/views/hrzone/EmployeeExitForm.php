<?php include('header.php'); ?>
<?php include('ExitSidebar.php'); ?>
        <!-- Content Wrapper -->
 

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
.empCL{
	
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
	font-size:12px;
	color:#343434;
	
}


.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 0 1.25rem;
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
.card-header .col-lg-1{
	max-width:6.33333%!important;
}
.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem 1.25rem;
}
.ColorSecondaryPre{
	padding:5px 15px;
}
.actionFontSize{
	font-size:15px!important;
    color: #00d3c3!important;
}
.cmPayroll{
	font-size: 13px;
    font-weight: 600;
    background: #00d3c3!important;
	color: #fff!important;
	padding: 10px 11px!important;
}
thead{
	background: #00d3c3!important; color: #fff!important;
}
</style>


 <div id="content-wrapper bg-gradient-primary" class="col-lg-10" style=" padding-left:20px; margin-bottom:50px;">

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
                        
					<div class="card-header ColorSecondaryPre">
                        <div class="d-flex">
                        <div><a href="<?=site_url('hrzone/dashboard/wall');?>" style="color: #fff;font-size: 15px;"><i class="fa fa-home" aria-hidden="true"></i></a></div>
                        <div> &nbsp;&nbsp;<i style="font-size: 10px;color: white;" class="fas fa-chevron-right"></i><span class="breadcrumb_text" style="font-size: 15px;color: #00d3c3;font-weight: 600;">&nbsp;Exit Forms</span></div>
                        </div>
                    </div>
                    <!-- Content Row -->
					<!-- Area Chart -->
						
						<div class="">	
						
							
								
								<div class="card-body" style="">
								
								
									
									
								<div class="table-responsive">
									<table class="table table-bordered" width="100%">
										<thead style="background: #00d3c3!important; color: #fff!important;">
											<tr>
												
												<th class="FontA cmPayroll empTL">S.No.</th>
												<th class="FontA cmPayroll empTL">Name</th>
												<th class="FontA cmPayroll empTL">Exit Form</th>
												<th class="FontA cmPayroll empTL">Resignation</th>
												<th class="FontA cmPayroll empTL">Declaration</th>
												
												
											</tr>
										
										</thead>
											
										<tbody>
											<?php if(!empty($ExitEmp)):  ?>
									
											<?php	
											$Sno = 1;
											foreach($ExitEmp as $emp): ?>
											<tr>
												<td style="text-align:center;"><?php  echo $Sno; ?></td>
												<td class="empCL AttFontStatus"><?php  echo $emp->name; ?></td>
												<td class="empCL AttFontStatus"><a href="<?=base_url('index.php/hrzone/Separation/ExitFormEdit/'.$emp->id);?>"><i class="actionFontSize fas fa-edit"></i></a></td>
												<td class="empCL AttFontStatus"><a href="<?=base_url('index.php/hrzone/Separation/ResignationLetter/'.$emp->id);?>"><i class="actionFontSize fas fa-edit"></i></a></td>
												<td class="empCL AttFontStatus"><a href="<?=base_url('index.php/hrzone/Separation/DeclarationForm/'.$emp->id);?>"><i class="actionFontSize fas fa-edit"></i></a></td>
												
												
											</tr>
											
											<?php 
											$Sno++;
											endforeach;  ?>
										<?php else: ?>
										<tr>
										<td colspan="3">Data is Not Available</td>
										<?php endif; ?>

										</tr>
											
											
										</tbody>
									</table>
								</div>
								</div>
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

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


<?php include('footer.php'); ?>