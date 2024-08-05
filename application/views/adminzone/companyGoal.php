<?php include('header.php'); ?>
<?php include('commonSidebar.php'); ?>
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


td:first-child { width:10px; };








.APUemp {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
 
}
.APemp {
  float: left;
	
}

.InProgress{
	color: #9c6515!important;
    background-color: #ffeba1;
    text-align: center;
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

.AttFontStatus{
	font-size:12px;
	
}
.cmPayroll{
	font-weight:600!important;
	color: #343434!important;
}
.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 0 1.25rem;
	margin-top: 15px;
}

.Completed{
	color: #00610f!important;
    background-color: #c6efcf;
    text-align: center;
}


.Pending{
	color: #9d030c!important;
    background-color: #ffc7ce;
    text-align: center;
}
.AttSort{
	height: calc(1em + .75rem + 2px);
   
    padding: .200rem .5rem;
    font-size: 12px;
}

.table{
	border-collapse:collapse!important;
}
.ellipsis3 {
  text-overflow: ellipsis;
  white-space: nowrap;
  display: block;
  overflow: hidden;
  width: 535px;
  font-size: 12px;
}
.ellipsis {
  text-overflow: ellipsis;
  white-space: nowrap;
  display: block;
  overflow: hidden;
  width: 180px;
  font-size: 12px;
}
.ellipsis2 {
  text-overflow: ellipsis;
  white-space: nowrap;	
  overflow: hidden;
  width: 180px;
  font-size: 12px;
}


.wrap_open{
 text-overflow: ellipsis;
  white-space: normal;
  display: block;
  overflow: hidden;
  width: 180px;

}
td:hover .tooltip{
	color:red;
	background:black;
}
.table tbody tr {
    border-bottom: 1px solid #ddd;
}
table tbody td {
    padding: 8px 14px!important;
    border-bottom: none!important;
	border-right:none!important;
	border-left:1px solid #ddd;
}
.ellipsis3 + .tooltip > .tooltip-inner{ 
	background-color:red!important;
	color:white;
}
.bs-tooltip-top{


}

.tooltip{
	max-width:100%;
}
.AttSort{

	height: calc(1em + 0.75rem + 2px);
    padding: 0.2rem 0.5rem;
    font-size: 12px;
} 
</style>

 <div id="content-wrapper bg-gradient-primary" class="col-lg-10 my_information" >

            <!-- Main Content -->
            <div id="content">
				
		
                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="">

                    <!-- Page Heading -->
                    
					<div class=" shadow ">
                        
							
							
					<div class="employee_details" style="padding: 7px 5px 0px 0px; display:flex; justify-content:space-between;">
                         
						 <div><h5 class=" md-4 ColorPrimary" style=" font-size: 15px; margin-top: 5px; margin-left: 20px; margin-bottom:8px;">Company's Yearly Goals
						 
						 
						 
						 </h5></div>
							<div>
							<select class="AttSort form-control" name="Year_Id" id="Year_Id" style="border: 1px solid #858796;" id="sel1">
											<option value="">Select Year</option>
											
											<?php 
											// echo "<pre>";
											// print_r($teamDesignation);die;
											$curnYear = date("Y");
											
											 foreach ( $GoalYear as $year )
											{
											$selected_text='';
											if($year->year == $curnYear)
											$selected_text='selected';
											echo "<option year='".$year->year."' value='".$year->Year_Id."'  $selected_text > ".$year->year."</option>";

											}
											 
											 
											 ?>
											
											</select>
											</div>
                        </div>
						
				
                    <!-- Content Row -->
					  <!-- Area Chart -->
								
							
							<div class="card-body col-lg-12">
							
								
								<div class="table-responsive" style="width:100%">
									<table class="table " id="CompanydataTable">
										<thead class="information_heading courses" >
											<tr>
												<th class="cmPayroll" >S.No.</th>
												<th class="cmPayroll"  >2021 Goals List of the Entire Year</th>	
												<th class="cmPayroll text-center" >Assignee</th>
												<th class="cmPayroll text-center" >Comment</th>
												<th class="cmPayroll text-center" >Status</th>
											</tr>
										</thead>
										
										<tbody>
											
											
											
										</tbody>
									</table>
								</div>
							</div>
							
							
							
							
							
							
							<div class="previous_month_sallary_slip">
<span>Monthly Comment (if any)</span>
</div>
					
							
								
								
<div class="card-body col-lg-12">
							
								
							<div class="table-responsive" style="width:100%">
								<table class="table ">
									<thead class="information_heading courses" >
										<tr>
											<th class="cmPayroll" >S.No.</th>
											<th class="cmPayroll"  >Date</th>	
											<th class="cmPayroll" >Comment</th>
											<th class="cmPayroll" >Posted By</th>
											<th class="cmPayroll" >Tags</th>
											<th class="cmPayroll" >Reply</th>
										</tr>
									</thead>
									
									<tbody>
									<tr>
											<td  >1</td>
											<td   >1/1/2022</td>	
											<td  >Hello ,this is for test purpose</td>
											<td  >CEO</td>
											<td  >Entire Team</td>
											<td style="border-right:1px solid #ddd!important; color:red"  ><i  class="fas fa-reply-all"></i></td>
										</tr>
										<tr>
											<td  >2</td>
											<td   >2/1/2022</td>	
											<td  >Hello ,this is for test purpose</td>
											<td  >Manager</td>
											<td  >SEO Team</td>
											<td style="border-right:1px solid #ddd!important; color:red"  ><i  class="fas fa-reply-all"></i></td>
										</tr>
										
										
									</tbody>
								</table>
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
	
	
	
<div class="modal " id="updateTeamModal" role="dialog">
<div class="modal-dialog modal-lg">
<!-- Modal content-->
	<div class="modal-content" style="margin: 199px 9px 0 80px;  width: 89%!important; ">
		<div class="card-header" style="padding:0!important; background-color: #2e2869;">
		<div class="row">
		<h6 class="ColorPrimary" style="padding-left: 302px; padding-top: 10px;">Team Goals Edit</h6>
		<button style="margin-left:197px;" type="button" class="close" data-bs-dismiss="modal">&times;</button>
		</div>
		</div>

	<div class="modal-body">

	<form class="form-horizontal" action="#">
			
			<div class="row" >
			
			<div class="col-lg-4">
			<div class="form-group">
			<label>Work Status</label>
			<select class="empInput form-control" name="work_status" id="team_work_status"style="border: 1px solid #858796;" id="sel1">
			<option>Work Status</option>
			<option>Pending</option>
			<option>InProgress</option>
			<option>Completed</option>
			</select>
			
			</div>
			</div>
			
			
			</div>
		</form>
	</div>
        <button type="button" class="seoTeamData" id="empSeoBtn" style="text-align:center; margin:25px 300px;">Update</button>
		<input type="hidden" name="" id="team_IdHidden"/>
		<input type="hidden" name="" id="goal_YearIdHidden"/>
	
	</div>
<!-- Content Row -->

</div>

</div>
  

	
	
    <!-- End of Page Wrapper -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>

var seodata = [];
	$(document).ready(function(){
// 		$("body").on('click', '#wrap', function(){
// 			var element =document.getElementById("wrap");
//   element.classList.add("wrap_open");
// 		});
		
		var YearID = $("#Year_Id option:selected").val();
		CompanyYearlyGoal(YearID);
		
    $("#Year_Id").change(function(){
		
		$('#CityPostContainer').html("<div>Loading Post.....</div>");
		
        var YearID = $("#Year_Id option:selected").val();
		CompanyYearlyGoal(YearID);
    });
	
	
	
});



function CompanyYearlyGoal(YearID){
	var ajaxurl = "<?=site_url('hrzone/CompanyGoals/goalPointsByYear');?>";
        $.ajax({
            type: "get",
            url: ajaxurl,
            data: { YearID : YearID},
			dataType: "JSON"
        }).done(function(response){
			seodata = response.data;
			if(response){
				$("#CompanydataTable tbody").html(`${response.data.map(function(data, index){
					return(`<tr   >
					
					<td style="text-align:center; border-left: 1px solid #dddddd;">${++index}</td>
					<td class="AttFontStatus ellipsis3"  data-toggle="tooltip" data-placement="top" title="${data.goal_points}"  >${data.goal_points}</td>
					<td class="AttFontStatus ellipsis2 "  data-toggle="tooltip" data-placement="top" title="${data.assignee}">${data.assignee}</td>
					<td class="AttFontStatus ellipsis " data-toggle="tooltip" data-placement="top" title="${data.goal_comments}"    >${data.goal_comments}</td>
					<td  style="border-right:1px solid #ddd!important;" class="AttFontStatus ${data.work_status}">${data.work_status}</td>
					
					
					
					</tr>`)
				})}`);
				$('[data-toggle="tooltip"]').tooltip();
			}
            else {
				$("#CompanydataTable tbody").html("<div>No data Found.....</div>");
		}});
}

					
</script>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<script>
$(document).ready(function(){
	
  $("td").tooltip();   
});
</script>


    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

<?php include('footer.php'); ?>