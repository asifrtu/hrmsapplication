<?php include('header.php'); ?>
<?php include('calenderSidebar.php'); ?>
        <!-- Content Wrapper -->
 

<style>
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
  padding: 1px 30px 1px 1px;
  overflow: hidden;
 
}
.actionFontSize{
	font-size:15px!important;
    color: #00d3c3!important;
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


.table td {
  font-size: 13px;
    color: #343434;
    vertical-align: middle;  
    text-align:center;  
}
.table th{
  padding:10px 11px!important;
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
.ColorSecondaryPre{
	padding:5px 15px;
}
.cmPayroll{margin-bottom: 0rem!important;
	font-weight: 600;
	font-size:14px;
  background: #00d3c3!important;
	color: #fff!important;
  text-align:center;
}
</style>
 <div id="content-wrapper bg-gradient-primary" class="col-lg-10" style=" padding-left:20px; margin-top:30px; margin-bottom:50px;">
<!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="  ">

                    <!-- Page Heading -->
                    
					<div class="card shadow mb-4" style="margin-bottom:100px;">
          <div class="card-header ColorSecondaryPre">
						<div class="row d-flex pl-1 ">

<div class="col-lg-1"><a href="<?php echo base_url() ?>index.php/hrzone/dashboard/wall" style="color: white;font-size: 15px;"><i class="fa fa-home" aria-hidden="true"></i></a></div>
<div class="col-lg-7"> <i style="font-size: 10px;color: white;" class="fas fa-chevron-right"></i><span class="breadcrumb_text" style="font-size: 15px;color: #fff;"> &nbsp;Birthday List </span></div>
                        </div>
 </div>
<!-- Content Row -->
					<!-- Area Chart -->
						
						<div class="shadow mb-4">	
							
								<div class="card-body">
								
								
									
									
									
									<div class="table-responsive">
									<table class="table table-bordered" id="dataTable" width="100%">
										<thead style="background-color:#00d3c3;">
											<tr>
												<th class="cmPayroll">S.No.</th>
												<th class="cmPayroll">Employee Name</th>
												<th class="cmPayroll">Date Of Birth</th>
												<th class="cmPayroll">Designation</th>
												
											</tr>
										</thead>
									<tbody> 
										<?php
               $i = 1;
						 //$query = $this->db->get_where('tbl_user', ['UserId'=> $id])->row()->name;
						//	$sections = $this->db->get('employeedetails')->result_array();
						$sections = $this->db->query('select * from employeedetails ORDER BY UserId')->result_array();
			foreach ($sections as $row){ 
        $st =  $this->db->get_where('tbl_user', ['id'=> $row['UserId']])->row()->employeeStatus;
		if($st == 'Active'){
    
    	?>
											<tr>
												<td><?php  echo $i; ?></td>
												<td class="text-left">
                   <?php 
                   
                  
                   echo  $this->db->get_where('tbl_user', ['id'=> $row['UserId']])->row()->name;?>        
                        
                        
                        
                        
                        </td>
												<td><?php  echo date("dS M",strtotime($row['dob'])); ?></td>
												<td><?php  echo $row['position']; ?></td>
								
												
                        
                        <td style="display:none;">
												<div class=" ">
													<ul class="tnUemp">
													<li class="tnemp"><a href="#"><i class="actionFontSize fas fa-trash-alt"></i></a></li>
													<li class="tnemp"><a href="#"><i class="actionFontSize fas fa-edit"></i></a></li>
													</ul>

													</div>
												</td>
											</tr>
                <?php $i++;?>     
	 <?php }  }?>
											
											
											
									
										</tbody>
									</table>





								</div>
									
									


</div>
</div>
</div>
</div>
</div>
</div>
 <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

<?php include('footer.php'); ?>