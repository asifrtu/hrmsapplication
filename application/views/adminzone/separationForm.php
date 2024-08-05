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
                            <h5 class=" md-4 ColorPrimary" style="font-size:17px;">Separation Form</h5>
                        </div>
                        
                    <!-- Content Row -->
					<!-- Area Chart -->
						
						<div class="">	
						
								<?php echo form_open_multipart('adminzone/Separation/AddSepOne'); ?>
								
								<div class="card-body" style="width:1000px;">
								
								
									
									
								<div class="table-responsive">
									<table class="table table-bordered" id="TimelistdataTable" width="100%">
										<thead style="background-color:#f3f3f7;">
											<tr>
												
												<th colspan="6" class="cmPayroll empTL">Employee Details</th>
												
												
												
												
											</tr>
										
										</thead>
										<tbody>
											<tr>
												
												<td style="min-width: 120px!important;">Employee Name</td>
												<td style="min-width: 120px!important;"><?php echo $UserInfo->name; ?></td>
												<td style="min-width: 120px!important;">Employee Id</td>
												<td style="min-width: 120px!important;"><?php echo $UserInfo->employee_id; ?></td>
												<td style="min-width: 120px!important;">Email</td>
												<td style="min-width: 120px!important;"><?php echo $UserInfo->email; ?></td>
												
												
											</tr>
											
											
										</tbody>
										
									</table>
								</div>
								</div>
								
								
								
								
								<div class="card-body" style="width:1000px;">
								
								
									
									
								<div class="table-responsive">
									<table class="table table-bordered" id="TimelistdataTable" width="100%">
										<thead style="background-color:#f3f3f7;">
											<tr>
												
												<th colspan="6" class="cmPayroll empTL">Provident Fund</th>
												
												
												
												
											</tr>
										
										</thead>
										<tbody>
											<tr>
												
												<td >
												
												<div class="form-check">
												<label class="form-check-label" style="padding-left: 20px;">
												I would like to withdraw my PF, From 10C & 19 closed.
												</label>
												</div>

												
												</td>
												<td >
												<div class="row" style="margin:0px!important;">
													<div class="col-lg-6">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="pf_status" value="Yes"  >Yes
													</label>
													</div>
													</div>
													<div class="col-lg-6">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="pf_status" value="No"  >No
													</label>
													</div>
													</div>
													</div>
												</td>
												
												
											</tr>
											
											
										</tbody>
										
									</table>
								</div>
								</div>
								
								
								
								
								
								<div class="card-body" style="width:1000px;">
								
								
									
									
								<div class="table-responsive">
									<table class="table table-bordered" id="TimelistdataTable" width="100%">
										<thead style="background-color:#f3f3f7;">
											<tr>
												
												<th colspan="6" class="cmPayroll empTL">List of Handover</th>
												
												
												
												
											</tr>
										
										</thead>
										<tbody>
											<tr>
												
												<td style="min-width: 15px!important;">S.No</td>
												<td style="min-width: 380px!important;">Particulars</td>
												<td  style="min-width: 180px!important;">Applicable</td>
												<td style="min-width: 120px!important;">Responsibilities</td>
												<td style="min-width: 120px!important;">Remarks</td>
												
												
											</tr>
											
											
											
											
											
												<tr>
												
												
												<td style="min-width: 15px!important;">1</td>
												<td style="min-width: 120px!important;"><input type="hidden" placeholder="" name="Particulars[]" value="Exit Interview" class="form-control" id="usr">Exit Interview</td>
												<td style="min-width: 120px!important;">
													
													<div class="row" style="margin:0px!important;">
													<div class="col-lg-6">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="Applicable[]" value="1"  >Yes
													</label>
													</div>
													</div>
													<div class="col-lg-6">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="Applicable[]" value="0"  >No
													</label>
													</div>
													</div>
													</div>
													
												</td>
												<td style="min-width: 120px!important;">
													
													<input type="text" placeholder="Name" name="Responsibilities[]" class="form-control" id="usr">
													
												</td>
												
												<td style="min-width: 120px!important;">
													
													<input type="text" class="form-control" name="Remarks[]" id="usr">
													
												</td>
												
												</tr>
												
												<tr>
												
												
												<td style="min-width: 15px!important;">2</td>
												<td style="min-width: 120px!important;"><input type="hidden" name="Particulars[]" value="Handover of job responsibilities">Handover of job responsibilities</td>
												<td style="min-width: 120px!important;">
													
													<div class="row" style="margin:0px!important;">
													<div class="col-lg-6">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="Applicable[]" value="1"  >Yes
													</label>
													</div>
													</div>
													<div class="col-lg-6">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="Applicable[]" value="0"  >No
													</label>
													</div>
													</div>
													</div>
													
												</td>
												<td style="min-width: 120px!important;">
													
													<input type="text" placeholder="Name" name="Responsibilities[]" class="form-control">
													
												</td>
												
												<td style="min-width: 120px!important;">
													
													<input type="text" class="form-control" name="Remarks[]">
													
												</td>
												</tr>
												
												
												<tr>
												
												
												<td style="min-width: 15px!important;">3</td>
												<td style="min-width: 120px!important;"><input type="hidden" name="Particulars[]" value="Access of ocament either in hand or soft format">Access of ocament either in hand or soft format</td>
												<td style="min-width: 120px!important;">
													
													<div class="row" style="margin:0px!important;">
													<div class="col-lg-6">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="Applicable[]" value="1">Yes
													</label>
													</div>
													</div>
													<div class="col-lg-6">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="Applicable[]" value="0">No
													</label>
													</div>
													</div>
													</div>
													
												</td>
												<td style="min-width: 120px!important;">
													
													<input type="text" placeholder="Name" name="Responsibilities[]" class="form-control" id="usr">
													
												</td>
												
												<td style="min-width: 120px!important;">
													
													<input type="text" class="form-control" name="Remarks[]" id="usr">
													
												</td>
												</tr>
												
												<tr>
												
												
												<td style="min-width: 15px!important;">4</td>
												<td style="min-width: 120px!important;"><input type="hidden" name="Particulars[]" value="Mail ID/ System access deactivated">Mail ID/ System access deactivated</td>
												<td style="min-width: 120px!important;">
													
													<div class="row" style="margin:0px!important;">
													<div class="col-lg-6">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="Applicable[]" value="1">Yes
													</label>
													</div>
													</div>
													<div class="col-lg-6">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="Applicable[]" value="0">No
													</label>
													</div>
													</div>
													</div>
													
												</td>
												<td style="min-width: 120px!important;">
													
													<input type="text" placeholder="Name" name="Responsibilities[]" class="form-control" >
													
												</td>
												
												<td style="min-width: 120px!important;">
													
													<input type="text" class="form-control" name="Remarks[]">
													
												</td>
												</tr>
												
												<tr>
												
												
												<td style="min-width: 15px!important;">5</td>
												<td style="min-width: 120px!important;"><input type="hidden" name="Particulars[]" value="IOU/ Salary Advance">IOU/ Salary Advance</td>
												<td style="min-width: 120px!important;">
													
													<div class="row" style="margin:0px!important;">
													<div class="col-lg-6">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="Applicable[]" value="1">Yes
													</label>
													</div>
													</div>
													<div class="col-lg-6">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="Applicable[]" value="0">No
													</label>
													</div>
													</div>
													</div>
													
												</td>
												<td style="min-width: 120px!important;">
													
													<input type="text" placeholder="Name" name="Responsibilities[]" class="form-control">
													
												</td>
												
												<td style="min-width: 120px!important;">
													
													<input type="text" class="form-control" name="Remarks[]">
													
												</td>
												</tr>
												
												<tr>
												
												
												<td style="min-width: 15px!important;">6</td>
												<td style="min-width: 120px!important;"><input type="hidden" name="Particulars[]" value="Loan Cleared">Loan Cleared</td>
												<td style="min-width: 120px!important;">
													
													<div class="row" style="margin:0px!important;">
													<div class="col-lg-6">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="Applicable[]" value="1">Yes
													</label>
													</div>
													</div>
													<div class="col-lg-6">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="Applicable[]" value="0">No
													</label>
													</div>
													</div>
													</div>
													
												</td>
												<td style="min-width: 120px!important;">
													
													<input type="text" placeholder="Name" name="Responsibilities[]" class="form-control">
													
												</td>
												
												<td style="min-width: 120px!important;">
													
													<input type="text" class="form-control" name="Remarks[]">
													
												</td>
												</tr>
												
												<tr>
												
												
												<td style="min-width: 15px!important;">7</td>
												<td style="min-width: 120px!important;"><input type="hidden" name="Particulars[]" value="Handover of office keys/floppies etc">Handover of office keys/floppies etc</td>
												<td style="min-width: 120px!important;">
													
													<div class="row" style="margin:0px!important;">
													<div class="col-lg-6">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="Applicable[]" value="1">Yes
													</label>
													</div>
													</div>
													<div class="col-lg-6">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="Applicable[]" value="0">No
													</label>
													</div>
													</div>
													</div>
													
												</td>
												<td style="min-width: 120px!important;">
													
													<input type="text" placeholder="Name" name="Responsibilities[]" class="form-control">
													
												</td>
												
												<td style="min-width: 120px!important;">
													
													<input type="text" class="form-control" name="Remarks[]">
													
												</td>
												</tr>
												
												<tr>
												
												
												<td style="min-width: 15px!important;">8</td>
												<td style="min-width: 120px!important;"><input type="hidden" name="Particulars[]" value="Company lease transfer">Company lease transfer</td>
												<td style="min-width: 120px!important;">
													
													<div class="row" style="margin:0px!important;">
													<div class="col-lg-6">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="Applicable[]" value="1">Yes
													</label>
													</div>
													</div>
													<div class="col-lg-6">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="Applicable[]" value="0">No
													</label>
													</div>
													</div>
													</div>
													
												</td>
												<td style="min-width: 120px!important;">
													
													<input type="text" placeholder="Name" name="Responsibilities[]" class="form-control">
													
												</td>
												
												<td style="min-width: 120px!important;">
													
													<input type="text" class="form-control" name="Remarks[]">
													
												</td>
												</tr>
												
												<tr>
												
												
												<td style="min-width: 15px!important;">9</td>
												<td style="min-width: 120px!important;"><input type="hidden" name="Particulars[]" value="Returned book to Kwench library">Returned book to Kwench library</td>
												<td style="min-width: 120px!important;">
													
													<div class="row" style="margin:0px!important;">
													<div class="col-lg-6">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="Applicable[]" value="1">Yes
													</label>
													</div>
													</div>
													<div class="col-lg-6">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="Applicable[]" value="0">No
													</label>
													</div>
													</div>
													</div>
													
												</td>
												<td style="min-width: 120px!important;">
													
													<input type="text" placeholder="Name" name="Responsibilities[]" class="form-control">
													
												</td>
												
												<td style="min-width: 120px!important;">
													
													<input type="text" class="form-control" name="Remarks[]">
													
												</td>
												</tr>
												
												<tr>
												
												
												<td style="min-width: 15px!important;">10</td>
												<td style="min-width: 120px!important;"><input type="hidden" name="Particulars[]" value="Sign off Client Ledget(AVP & Above Sign)">Sign off Client Ledget(AVP & Above Sign)</td>
												<td style="min-width: 120px!important;">
													
													<div class="row" style="margin:0px!important;">
													<div class="col-lg-6">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="Applicable[]" value="1">Yes
													</label>
													</div>
													</div>
													<div class="col-lg-6">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="Applicable[]" value="0">No
													</label>
													</div>
													</div>
													</div>
													
												</td>
												<td style="min-width: 120px!important;">
													
													<input type="text" placeholder="Name" name="Responsibilities[]" class="form-control" >
													
												</td>
												
												<td style="min-width: 120px!important;">
													
													<input type="text" class="form-control" name="Remarks[]" >
													
												</td>
												
												</tr>
												
												<tr>
												
												
												<td style="min-width: 15px!important;">11</td>
												<td style="min-width: 120px!important;"><input type="hidden" name="Particulars[]" value="Handover of company assets">Handover of company assets</td>
												<td style="min-width: 120px!important;">
													
													<div class="row" style="margin:0px!important;">
													<div class="col-lg-6">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="Applicable[]" value="1">Yes
													</label>
													</div>
													</div>
													<div class="col-lg-6">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="Applicable[]" value="0">No
													</label>
													</div>
													</div>
													</div>
													
												</td>
												<td style="min-width: 120px!important;">
													
													<input type="text" placeholder="Name" name="Responsibilities[]" class="form-control">
													
												</td>
												
												<td style="min-width: 120px!important;">
													
													<input type="text" class="form-control" name="Remarks[]" >
													
												</td>
												</tr>
												
												<tr>
												
												
												<td style="min-width: 15px!important;">a</td>
												<td style="min-width: 120px!important;"><input type="hidden" name="Particulars[]" value="Mobile Sim card">Mobile Sim card</td>
												<td style="min-width: 120px!important;">
													
													<div class="row" style="margin:0px!important;">
													<div class="col-lg-6">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="Applicable[]" value="1">Yes
													</label>
													</div>
													</div>
													<div class="col-lg-6">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="Applicable[]" value="0">No
													</label>
													</div>
													</div>
													</div>
													
												</td>
												<td style="min-width: 120px!important;">
													
													<input type="text" placeholder="Name" name="Responsibilities[]" class="form-control" >
													
												</td>
												
												<td style="min-width: 120px!important;">
													
													<input type="text" class="form-control" name="Remarks[]" >
													
												</td>
												
												</tr>
												
												<tr>
												
												
												<td style="min-width: 15px!important;">b</td>
												<td style="min-width: 120px!important;"><input type="hidden" name="Particulars[]" value="Laptop">Laptop</td>
												<td style="min-width: 120px!important;">
													
													<div class="row" style="margin:0px!important;">
													<div class="col-lg-6">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="Applicable[]" value="1">Yes
													</label>
													</div>
													</div>
													<div class="col-lg-6">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="Applicable[]" value="0">No
													</label>
													</div>
													</div>
													</div>
													
												</td>
												<td style="min-width: 120px!important;">
													
													<input type="text" placeholder="Name" name="Responsibilities[]" class="form-control" >
													
												</td>
												
												<td style="min-width: 120px!important;">
													
													<input type="text" class="form-control" name="Remarks[]" >
													
												</td>
												</tr>
												
												<tr>
												
												
												<td style="min-width: 15px!important;">c</td>
												<td style="min-width: 120px!important;"><input type="hidden" name="Particulars[]" value="Pen Drive">Pen Drive</td>
												<td style="min-width: 120px!important;">
													
													<div class="row" style="margin:0px!important;">
													<div class="col-lg-6">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="Applicable[]" value="1">Yes
													</label>
													</div>
													</div>
													<div class="col-lg-6">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="Applicable[]" value="0">No
													</label>
													</div>
													</div>
													</div>
													
												</td>
												<td style="min-width: 120px!important;">
													
													<input type="text" placeholder="Name" name="Responsibilities[]" class="form-control" >
													
												</td>
												
												<td style="min-width: 120px!important;">
													
													<input type="text" class="form-control" name="Remarks[]" >
													
												</td>
												</tr>
												
												<tr>
												
												
												<td style="min-width: 15px!important;">d</td>
												<td style="min-width: 120px!important;"><input type="hidden" name="Particulars[]" value="Printer">Printer</td>
												<td style="min-width: 120px!important;">
													
													<div class="row" style="margin:0px!important;">
													<div class="col-lg-6">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="Applicable[]" value="1">Yes
													</label>
													</div>
													</div>
													<div class="col-lg-6">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="Applicable[]" value="0">No
													</label>
													</div>
													</div>
													</div>
													
												</td>
												<td style="min-width: 120px!important;">
													
													<input type="text" placeholder="Name" name="Responsibilities[]" class="form-control" >
													
												</td>
												
												<td style="min-width: 120px!important;">
													
													<input type="text" class="form-control" name="Remarks[]" >
													
												</td>
												
												</tr>
												
												<tr>
												
												
												<td style="min-width: 15px!important;">e</td>
												<td style="min-width: 120px!important;"><input type="hidden" name="Particulars[]" value="Desktop">Desktop</td>
												<td style="min-width: 120px!important;">
													
													<div class="row" style="margin:0px!important;">
													<div class="col-lg-6">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="Applicable[]" value="1">Yes
													</label>
													</div>
													</div>
													<div class="col-lg-6">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="Applicable[]" value="0">No
													</label>
													</div>
													</div>
													</div>
													
												</td>
												<td style="min-width: 120px!important;">
													
													<input type="text" placeholder="Name" name="Responsibilities[]" class="form-control" >
													
												</td>
												
												<td style="min-width: 120px!important;">
													
													<input type="text" class="form-control" name="Remarks[]" >
													
												</td>
												</tr>
												
												<tr>
												
												
												<td style="min-width: 15px!important;">f</td>
												<td style="min-width: 120px!important;"><input type="hidden" name="Particulars[]" value="ID Card">ID Card</td>
												<td style="min-width: 120px!important;">
													
													<div class="row" style="margin:0px!important;">
													<div class="col-lg-6">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="Applicable[]" value="1">Yes
													</label>
													</div>
													</div>
													<div class="col-lg-6">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="Applicable[]" value="0">No
													</label>
													</div>
													</div>
													</div>
													
												</td>
												<td style="min-width: 120px!important;">
													
													<input type="text" placeholder="Name" name="Responsibilities[]" class="form-control" >
													
												</td>
												
												<td style="min-width: 120px!important;">
													
													<input type="text" class="form-control" name="Remarks[]" >
													
												</td>
												</tr>
												
												<tr>
												
												
												<td style="min-width: 15px!important;">g</td>
												<td style="min-width: 120px!important;"><input type="hidden" name="Particulars[]" value="Blackberry">Blackberry</td>
												<td style="min-width: 120px!important;">
													
													<div class="row" style="margin:0px!important;">
													<div class="col-lg-6">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="Applicable[]" value="1">Yes
													</label>
													</div>
													</div>
													<div class="col-lg-6">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="Applicable[]" value="0">No
													</label>
													</div>
													</div>
													</div>
													
												</td>
												<td style="min-width: 120px!important;">
													
													<input type="text" placeholder="Name" name="Responsibilities[]" class="form-control" >
													
												</td>
												
												<td style="min-width: 120px!important;">
													
													<input type="text" class="form-control" name="Remarks[]" >
													
												</td>
												</tr>
												
												<tr>
												
												
												<td style="min-width: 15px!important;">h</td>
												<td style="min-width: 120px!important;"><input type="hidden" name="Particulars[]" value="Keys if any">Keys if any</td>
												<td style="min-width: 120px!important;">
													
													<div class="row" style="margin:0px!important;">
													<div class="col-lg-6">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="Applicable[]" value="1">Yes
													</label>
													</div>
													</div>
													<div class="col-lg-6">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="Applicable[]" value="0">No
													</label>
													</div>
													</div>
													</div>
													
												</td>
												<td style="min-width: 120px!important;">
													
													<input type="text" placeholder="Name" name="Responsibilities[]" class="form-control" >
													
												</td>
												
												<td style="min-width: 120px!important;">
													
													<input type="text" class="form-control" name="Remarks[]" >
													
												</td>
												</tr>
												
												<tr>
												
												
												<td style="min-width: 15px!important;">i</td>
												<td style="min-width: 120px!important;"><input type="hidden" name="Particulars[]" value="Corp. credit card">Corp. credit card</td>
												<td style="min-width: 120px!important;">
													
													<div class="row" style="margin:0px!important;">
													<div class="col-lg-6">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="Applicable[]" value="1">Yes
													</label>
													</div>
													</div>
													<div class="col-lg-6">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="Applicable[]" value="0">No
													</label>
													</div>
													</div>
													</div>
													
												</td>
												<td style="min-width: 120px!important;">
													
													<input type="text" placeholder="Name" name="Responsibilities[]" class="form-control" >
													
												</td>
												
												<td style="min-width: 120px!important;">
													
													<input type="text" class="form-control" name="Remarks[]" >
													
												</td>
												</tr>
												
												<tr>
												
												
												<td style="min-width: 15px!important;">12</td>
												<td style="min-width: 120px!important;"><input type="hidden" name="Particulars[]" value="Any Other">Any Other</td>
												<td style="min-width: 120px!important;">
													
													<div class="row" style="margin:0px!important;">
													<div class="col-lg-6">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="Applicable[]" value="1">Yes
													</label>
													</div>
													</div>
													<div class="col-lg-6">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="Applicable[]" value="0">No
													</label>
													</div>
													</div>
													</div>
													
												</td>
												<td style="min-width: 120px!important;">
													
													<input type="text" placeholder="Name" name="Responsibilities[]" class="form-control" >
													
												</td>
												
												<td style="min-width: 120px!important;">
													
													<input type="text" class="form-control" name="Remarks[]" >
													
												</td>
												</tr>
												
											
										</tbody>
										
									</table>
								</div>
								</div>
								
								
								
								
								
										
							<button type="submit" class="btn btn-default addEmpSubmitBtn">Submit</button>
							
								
								
								
								</form>
								
								
								
								
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
	$(document).ready(function(){
		var d = new Date();
		var curYear =  d.getFullYear();
		var currMonth = d.getMonth() + 1;
		MonthlyUserTimeList(curYear, currMonth);
		
    $("#month_Id").change(function(){
		// alert("BHAIiiiiiiii");
        var MonthID = $("#month_Id option:selected").val();
		var YearID  = $("#Year_Id").val();
		
		MonthlyUserTimeList(YearID, MonthID);
    });
	
	
	
});



function MonthlyUserTimeList(YearID, MonthID){
	var ajaxurl = "<?=site_url('adminzone/EmployeeAttendance/UserTimeList');?>";
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