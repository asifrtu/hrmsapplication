<?php include('header.php'); ?>
<?php include('calenderSidebar.php'); ?>
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


 .table th {
    padding: 0.5rem 0.3rem 0.5rem 0.3rem!important;
}
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
	
    font-size: 12px!important;
    color: #575757;
    text-align:center;
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
	margin-bottom: 3px;
    margin-top: 7px;
}


.form-check-label {
    color: black;
}
.calTH{
	text-align:center;
}

.table td{
padding: .3rem .3rem .3rem .3rem!important;
vertical-align:middle;
}
.AttSort{
	height: calc(1em + 0.75rem + 2px);
    padding: 0.2rem 0.5rem;
    font-size: 12px;
}
.AttSortMonth{
	height: calc(1em + 0.75rem + 2px);
    padding: 0.2rem 0.5rem;
    font-size: 12px;
}

.AttFontStatus{
	font-size:14px;
	
}
.cmPayroll{
	font-size:14px;
	font-weight:500;
}
.card-body{
    padding-top: 15px!important;
}
.col-lg-1{
    max-width: 4.33333%;
	padding-right:0px!important;
}
th {
    background: #;
    position: sticky;
    top: 0;
    color: #4c3f5e!important;
    font-size: 14px;
    font-weight: 500;
    text-align: center;
}
.table-bordered tbody tr:nth-of-type(odd){
  background-color:white;
 
}
.table-bordered tbody tr:nth-of-type(even){
 
  background-color: rgb(239 239 239);
}
.card-header {
    padding: 0.3rem 1.25rem!important ;}

	.empInput {
    overflow: hidden!important;
    /* padding: 0.2rem 0.75rem!important; */
    font-size: 10px!important;
    color: #000!important;
}
.AttSort {
    height: calc(1em + 0.7rem + 2px);
    padding: 0.2rem 0.5rem;
    font-size: 12px;
}
.form-control{
	border-bottom:none!important;
}
@media (min-width: 992px){
.col-lg-4 {
    flex: 4 0 33.33333% !important;
    max-width: 36.33333%!important;
}
}
</style>


 <div id="content-wrapper bg-gradient-primary" class="container-fluid col-lg-10" style="padding-left:10px; margin-bottom:50px; margin-top:30px;">
 
            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="">

                    <!-- Page Heading -->
                    
					<div class="card shadow mb-4" style="margin-bottom:100px;">

					<div class="card-header ColorSecondaryPre">
					<div class="row d-flex pl-1 ">

<div class="col-lg-1"><a href="<?php echo base_url() ?>index.php/hrzone/dashboard/wall" style="color: white;font-size: 15px;"><i class="fa fa-home" aria-hidden="true"></i></a></div>
<div class="col-lg-7"> <i style="font-size: 10px;color: white;" class="fas fa-chevron-right"></i>&nbsp;<span class="breadcrumb_text" style="font-size: 15px;color: #fff;font-weight: 600;">&nbsp; Holiday Calander</span></div>

<div class=" col-lg-4 d-flex" style="justify-content: right;padding-left: 3rem;">

<div class="p-2 " style="margin-left:5px;">

<select class="empInput AttSort form-control" name="month_Id" id="month_Id" >
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

<div class="p-2 " >

<select class="empInput AttSort form-control" name="Year_Id" id="Year_Id"  id="sel1">
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


</div>

</div>
</div>
                
                    <!-- Content Row -->
					<!-- Area Chart -->
						
						<div class="">	
						
							
								
								<div class="">
								
								
								
									
								<div class="table-responsive">
									<table class="table table-bordered" id="TimelistdataTable" width="100%">
										<thead style="background-color:#00d3c3;">
											<tr>
												
												<th class="FontA cmPayroll empTL">S.No.</th>
												<th class="FontA cmPayroll empTL">Date</th>
												<th class="FontA cmPayroll empTL">Day</th>
												
												<th class="FontA cmPayroll empTL">Holiday List</th>
												<th class="FontA cmPayroll empTL">Sort Name</th>
												
												<th class="FontA cmPayroll empTL">Action</th>
												
												
												
											</tr>
										
										</thead>
										
										
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

<div class="modal " id="updateModal" role="dialog">
<div class="modal-dialog modal-lg">
<!-- Modal content-->
	<div class="modal-content" style="margin: 196px 9px 0 259px;  width: 89%!important; ">
		<div class="card-header" style="padding:0!important; background-color: #2e2869;">
		<div class="row">
		<h6 class="ColorPrimary" style="padding-left: 302px; padding-top: 10px;">Holiday Calender Edit</h6>
		<button style="margin-left:220px;" type="button" class="close" data-bs-dismiss="modal">&times;</button>
		</div>
		</div>

	<div class="modal-body">

	<form class="form-horizontal" action="#">
	<div class="row" >
	

	<div class="col-lg-6">
	<div class="form-group">
	<label>Holiday Name</label>
	<input type="text" name="holiday_list" id="Edit_holiday_list" class="empInput form-control" style="border: 1px solid #858796;">
	</div>
	</div>




	<div class="col-lg-6">
	<div class="form-group">
	<label>Holiday Sort Name</label>
	<input type="text" name="sort_holidayname" id="Edit_sort_holidayname" class="empInput form-control" style="border: 1px solid #858796;">
	</div>
	</div>
	</div>

	<button type="button" class="empBtn LeaveSubmit" id="btnUploadPage" style="text-align:center; margin:25px 300px;">Submit</button>
	<input type="hidden" name="" id="EmpId" >

	</form>
	</div>
	</div>
<!-- Content Row -->

</div>

</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
	$(document).ready(function(){
		
		$("body").on('click', '.Hcal_Edit', function(){
	var id = $(this).attr('data-HCAl');
	var ajaxurl = "<?=site_url('hrzone/Attendance/ViewHcal');?>";
        $.ajax({
            type: "post",
            url: ajaxurl,
            data: {id:id},
			dataType: "JSON",
			success:function(data){
				
				
				$('#EmpId').val(data.h_id);
				$('#Edit_holiday_list').val(data.holiday_list);
				$('#Edit_sort_holidayname').val(data.sort_holidayname);
				
				$("#updateModal").modal('show');
			
			}
				
        });
	
  });
  
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
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
	
	
	
	
	$("body").on('click', '.LeaveSubmit', function(){
 
	var holiday_list = $('#Edit_holiday_list').val();
	var holidayname = $('#Edit_sort_holidayname').val();
	var holidayId = $('#EmpId').val();
	
	
	
	// var Yid = $(this).attr('data-yearID');
	var ajaxurl = "<?=site_url('hrzone/Attendance/EditHCal');?>";
        $.ajax({
            type: "post",
            url: ajaxurl,
            data: {holiday_list:holiday_list, holidayname:holidayname, holidayId:holidayId},
			dataType: "JSON",
			success:function(data){
			$('#updateModal').modal("hide");
			MonthlyUserTimeList(curYear, currMonth);
			alert("Data updated Successfully");
			}
			
		});
  
}); 
	
	
	
	
});



function MonthlyUserTimeList(YearID, MonthID){
	var ajaxurl = "<?=site_url('hrzone/Attendance/HCalendarByMonth');?>";
        $.ajax({
            type: "get",
            url: ajaxurl,
            data: {YearID:YearID, MonthID : MonthID},
			dataType: "JSON"
        }).done(function(response){
			if(response){
				Hdata = response.Hdata;
				$("#TimelistdataTable tbody").html(`${response.calenderDay.map(function(data, index){
										return(`

										<tr>
										<td style="text-align:center; color:#575757; font-size:12px;">${++index}</td>
										<td class="empCL AttFontStatus" style="min-width: 75px!important; ">${data.calender_date}</td>
										<td class="empCL AttFontStatus" style="min-width: 75px!important; ">${data.CalDay}</td>
										<td class="empCL AttFontStatus" style="min-width: 75px!important; ">${data.holiday_list}</td>
										<td class="empCL AttFontStatus" style="min-width: 75px!important; ">${data.sort_holidayname}</td>
										<td class="empCL AttFontStatus">
										<div style="display: flex;justify-content: center;" class=" ">
										<ul class="tnUemp">
										<li class="tnemp"><a href="javascript:void(0)" data-HCAl="${data.h_id}" class="Hcal_Edit"><i style="color:green;"class="actionFontSize fas fa-edit"></i></a></li>
										</ul>

										</div>
										</td>

										</tr>

										`)
										}).join('')}
										
										
										`);

			} else {
				$("#AttendencedataTable tbody").html("<div>No data Found.....</div>");
			}
				
        });
}
							
</script>

<?php include('footer.php'); ?>