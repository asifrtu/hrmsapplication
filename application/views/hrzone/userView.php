<?php include('header.php'); ?>
<?php include('aboutUserSidebar.php'); ?>
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
  float: left;
  text-align:center;
  padding:2px 0;
	
}
.actionFontSize .cmPayroll{
	background: #00d3c3!important; color: #fff!important;
};
.tnNotify {
  float: right;
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


.table td {
     font-size: 12px;
     text-align:center;
     vertical-align:middle;
     color:#343434;
}
.table td:nth-child(2){
  text-align:left;
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
.empCL{
	background-color: #cef9ea;
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
th{
	width:200px;
}
th:first-child{
	width:50px;
}
th:last-child{
	width:80px;
}	
.card-body{
    padding-top: 15px!important;
}
.table-bordered tbody tr:nth-of-type(odd){
  background-color:white;
 
}
.table-bordered tbody tr:nth-of-type(even){
 
  background-color: rgb(239 239 239);
}
.col-lg-1{
    max-width: 4.33333%;
}
th {
    background: #00d3c3!important; 
    color: #fff!important;
    position: sticky;
    top: 0;
    font-size: 14px;
    font-weight: 500;
    text-align: center;
    padding: 10px 2px!important;
}
.cmPayroll{
    color:#4c3f5e!important;

}

.empList {
    font-size: 12px;
    color: #575757;
    text-align:center;
}
.ColorPrimary {
    color: white;
    font-size: 15px;
}

.card-header {
    padding: 0.3rem 1.25rem!important ;}

</style>


 <div id="content-wrapper bg-gradient-primary" class="container-fluid col-lg-10" style="padding-left:10px; margin-bottom:50px;">

 
            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="">

                    <!-- Page Heading -->
                    
					<div class=" shadow mb-4" style="margin-bottom:100px;">
          <div class="card-header ColorSecondaryPre">
						<div class="row d-flex pl-1 ">

<div class="col-lg-1"><a href="<?php echo base_url() ?>index.php/hrzone/dashboard/wall" style="color: white;font-size: 15px;"><i class="fa fa-home" aria-hidden="true"></i></a></div>
<div class="col-lg-10"> <i style="font-size: 10px;color: white;" class="fas fa-chevron-right"></i>&nbsp;<span class="breadcrumb_text" style="font-size: 15px;color: #fff;font-weight: 600;">&nbsp; User View</span></div>
</div>
                        </div>
                        
                    <!-- Content Row -->
					<!-- Area Chart -->
						
						<div class="shadow " style="background:#fff;">	
							
								<div class="card-body">
								
								
									
									
									<div class="table-responsive">
									<table class="table table-bordered" id="dataTable" width="100%">
										<thead style="background-color:#f3f3f7;">
											<tr>
												<th class=" cmPayroll">S.No.</th>
												<th class="cmPayroll">Name</th>
												<th class="cmPayroll">Email ID</th>
												<th class="cmPayroll">Phone No</th>
												<th class="cmPayroll">Role</th>
												<th class="cmPayroll">Action</th>	
											</tr>
										
										</thead>
										
										
										<tbody>
											
											<?php 
											$Sn = 1;
											 if(!empty($adminInfo)):  ?>
									
											
									
									<?php	foreach($adminInfo as $emp): ?>
									  <tr>
											
											
										<td class="empList"><?php  echo $Sn ?></td>
										<td class="empList"><?php  echo $emp->name; ?></td>
										<td class="empList"><?php  echo $emp->email; ?></td>
										<td class="empList"><?php  echo $emp->phone; ?></td>
										<td class="empList"><?php  echo $emp->type; ?></td>
										<td>
										<div class=" " style="display:flex; justify-content:center;">
										<ul class="tnUemp">
										<li class="tnemp"><a href="<?=base_url('index.php/hrzone/Users/AdminDelete/'.$emp->id);?>"><i style="color:red;" class="actionFontSize fas fa-trash-alt"></i></a></li>
										</ul>

										</div>

										</td>
										
									  </tr>
										<?php 
										$Sn++;
										
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