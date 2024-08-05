<?php include('header.php'); ?>
<?php include('commonSidebar.php'); ?>
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

</style>


 <div id="content-wrapper bg-gradient-primary" class="d-flex flex-column" style="margin-top:50px; margin-bottom:50px;">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    
					<div class="card shadow mb-4" style="margin-bottom:100px; width: 950px;">
                        <div class="ColorSecondaryPre" style="padding: 12px 5px 5px 12px;">
                            <h5 class=" md-4 ColorPrimary" style="font-size:17px;">Timing List</h5>
                        </div>
                        
                    <!-- Content Row -->
					<!-- Area Chart -->
						
						<div class="">	
						
							
								
								<div class="card-body">
								
								
									<div class="d-flex sasifb flex-row-reverse ">
									<div class="p-2 bg-info" style="margin-left:5px;">

									<select class="AttSortMonth empInput form-control" name="month_Id" id="month_Id" style="border: 1px solid #858796;">
									<option value="">Select Month</option>

										<?php
										$curMonth = date("m");
										// echo "<pre>";
										// print_r($teamDesignation);die;


									foreach ($GoalMonth as $Month)
									{
									$selected_text='';
									if($Month->month_Id == $curMonth)
									$selected_text='selected';
									echo "<option month='".$Month->month."' value='".$Month->month_Id."'  $selected_text > ".$Month->month."</option>";

									}
									  
										 ?>

									</select>
									</div>
									
									<div class="p-2 bg-info" >
									
									<select class="AttSort empInput form-control" name="Year_Id" id="Year_Id" style="border: 1px solid #858796;" id="sel1">
											<option value="">Select Year</option>
											
											<?php 
											$curnYear = date("Y");
											// echo "<pre>";
											// print_r($teamDesignation);die;
											
											
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
									
									<h5 style="text-align:center; margin:auto; color:#6f42c1; font-weight:500; font-size: 16px;"><?php echo $UserInfo->name; ?> Timing List</h5>
									
									</div>
									
								<div class="table-responsive">
									<table class="table table-bordered" id="TimelistdataTable" width="100%">
										<thead style="background-color:#f3f3f7;">
											<tr>
												
												<th class=" cmPayroll empTL">S.No.</th>
												<th class="cmPayroll empTL">Date</th>
												<th class="cmPayroll empTL">Day</th>
												<th colspan="2" class="cmPayroll empTL1">Planned Time<div style="margin-bottom: 0rem!important; border-top: 1px solid #e3e6f0;"></div>
												<div class="row">
												<div class="col-lg-6">
												<h6 style="color:green; text-align: center;">IN</h6>
												</div>
												<div class="col-lg-6">
												<h6 style="color:red; text-align: center;">OUT</h6>
												</div>
												</div>
												</th>
												<th colspan="2" class="cmPayroll empTL2">Actual Time
												<div style="margin-bottom: 0rem!important; border-top: 1px solid #e3e6f0;"></div>
												<div class="row">
												<div class="col-lg-6">
												<h6 style="color:green; text-align: center;">IN</h6>
												</div>
												<div class="col-lg-6">
												<h6 style="color:red; text-align: center;">OUT</h6>
												</div>
												</div>
												</th>
												<th class="cmPayroll empTL">Status</th>
												<th class="cmPayroll empTL">Late In</th>
												<th class="cmPayroll empTL">Remarks</th>
												
												
												
											</tr>
										
										</thead>
										<tfoot >
											<tr>
												
												<td colspan="3" >Staff Summary</td>
												<td>180:30</td>
												<td>180:30</td>
												<td>180:30</td>
												<td>180:30</td>
												<td></td>
												<td>3:35</td>
												 
												<td>On leave(0)</td>
												
												
												
												
												
											</tr>
										
										</tfoot>
										
										<tbody>
											
											
											
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
				$("#TimelistdataTable tbody").html(`${response.data.map(function(data, index){
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