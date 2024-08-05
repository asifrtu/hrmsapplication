<?php include('header.php'); ?>
<?php include('AppraisalSidebar.php'); ?>
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
padding: .7rem .3rem .6rem .3rem!important;
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







.star-rating {
  
  display:flex;
  flex-direction: row-reverse;
  font-size:1.5em;
  justify-content:space-around;
  padding:0 .2em;
  text-align:center;
  width:5em;
}

.star-rating input {
  display:none;
}

.star-rating label {
  color:#ccc;
  cursor:pointer;
}

.star-rating :checked ~ label {
  color:#f90;
}

.star-rating label:hover,
.star-rating label:hover ~ label {
  color:#fc0;
}



.star-ratingCC {
  
  display:flex;
  flex-direction: row-reverse;
  font-size:1.5em;
  justify-content:space-around;
  padding:0 .2em;
  text-align:center;
  width:5em;
}

.star-ratingCC input {
  display:none;
}

.star-ratingCC label {
  color:#ccc;
  cursor:pointer;
}

.star-ratingCC :checked ~ label {
  color:#f90;
}

.star-ratingCC label:hover,
.star-ratingCC label:hover ~ label {
  color:#fc0;
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
						
								<?php echo form_open_multipart('hrzone/Appraisal/AppraisalSix/'.$UserInfo->id); ?>
								
								
								
							
								
								<div class="card-body" style="width:1000px;">
								
									<div class="table-responsive">
										<table class="table table-bordered table-sm" id="SeodataTable" width="100%" cellspacing="0">
										<thead>
											<tr class="ColorSecondaryPre">
												
												<th colspan="6" class="m-0 font-weight-bold ColorPrimary" style="text-align:center; min-width: 120px!important;"><?php if(!empty($Title->title_68)){echo $Title->title_68;} ?></th>
												
												
												
											</tr>
											<tr style="background-color:#f3f3f7;">
												
												<th colspan="6" class="" style="color:black; min-width: 120px!important;"><?php if(!empty($Title->title_69)){echo $Title->title_69;} ?></th>
												
												
												
											</tr>
										
											<tr>
												<th class="cmPayroll">S.No.</th>
												<th class="cmPayroll">Goals List</th>
												<th class="cmPayroll">Status</th>
												<th class="cmPayroll">Comment</th>
												
												
												
											</tr>
										</thead>
										
										<tbody>
											
											
											
										</tbody>
										</table>
									</div>
									
									
								<div class="table-responsive">
									<table class="table table-bordered" id="TimelistdataTable" width="100%">
										
									
										<thead>
											
											<tr class="ColorSecondaryPre">
												<th colspan="4" class="m-0 font-weight-bold ColorPrimary" style="text-align:center; "><?php if(!empty($Title->title_70)){echo $Title->title_70;} ?></th>
												
												
												
											</tr>
											<tr style="background-color:#f3f3f7;">
												
												<th class="" style="color:black;"><?php if(!empty($Title->title_71)){echo $Title->title_71;} ?></th>
												<th class="" style="color:black;"><?php if(!empty($Title->title_72)){echo $Title->title_72;} ?></th>
												<th class="" style="color:black;"><?php if(!empty($Title->title_73)){echo $Title->title_73;} ?></th>
												<th class="" style="color:black;"><?php if(!empty($Title->title_74)){echo $Title->title_74;} ?></th>
												
												
												
											</tr>
											
											
										</thead>
										<tbody>
											<tr>
												
												<td ><input type="text" class="form-control" name="Goal[]" id="usr"></td>
												<td ><input type="text" class="form-control" name="ExpectedOutcomeMeasurableCriteria[]" id="usr"></td>
												<td ><input type="text" class="form-control" name="TimeTable[]" id="usr"></td>
												<td ><input type="text" class="form-control" name="IssueOrComments[]" id="usr"></td>
												
												
												
											</tr>
											
											<tr>
												
												<td ><input type="text" class="form-control" name="Goal[]" id="usr"></td>
												<td ><input type="text" class="form-control" name="ExpectedOutcomeMeasurableCriteria[]" id="usr"></td>
												<td ><input type="text" class="form-control" name="TimeTable[]" id="usr"></td>
												<td ><input type="text" class="form-control" name="IssueOrComments[]" id="usr"></td>
												
												
												
											</tr>
											
											<tr>
												
												<td ><input type="text" class="form-control" name="Goal[]" id="usr"></td>
												<td ><input type="text" class="form-control" name="ExpectedOutcomeMeasurableCriteria[]" id="usr"></td>
												<td ><input type="text" class="form-control" name="TimeTable[]" id="usr"></td>
												<td ><input type="text" class="form-control" name="IssueOrComments[]" id="usr"></td>
												
												
												
											</tr>
											
											<tr>
												
												<td ><input type="text" class="form-control" name="Goal[]" id="usr"></td>
												<td ><input type="text" class="form-control" name="ExpectedOutcomeMeasurableCriteria[]" id="usr"></td>
												<td ><input type="text" class="form-control" name="TimeTable[]" id="usr"></td>
												<td ><input type="text" class="form-control" name="IssueOrComments[]" id="usr"></td>
												
												
												
											</tr>
											
											<tr>
												
												<td ><input type="text" class="form-control" name="Goal[]" id="usr"></td>
												<td ><input type="text" class="form-control" name="ExpectedOutcomeMeasurableCriteria[]" id="usr"></td>
												<td ><input type="text" class="form-control" name="TimeTable[]" id="usr"></td>
												<td ><input type="text" class="form-control" name="IssueOrComments[]" id="usr"></td>
												
												
												
											</tr>
											
											
											
											
											
										</tbody>
										
										
										<thead>
											
											<tr style="background-color:#f3f3f7;">
												
												<th colspan="4" class="" style="color:black; min-width: 120px!important;"><?php if(!empty($Title->title_75)){echo $Title->title_75;} ?></th>
												
												
												
											</tr>
											
											
										</thead>
										<tbody>
											<tr>
												
												
												<td colspan="4"><textarea class="form-control" name="OverallComments" rows="2"></textarea></td>
												
												
												
												
											</tr>
											
											
											
											
										</tbody>
										<thead>
											
											<tr class="ColorSecondaryPre">
												
												<th colspan="2" class="m-0 font-weight-bold ColorPrimary" style="min-width: 120px!important;">Signature</th>
												<th colspan="2" class="m-0 font-weight-bold ColorPrimary" style="min-width: 120px!important;">Date</th>
												
												
												
											</tr>
										</thead>
										<tbody>
											<tr>
												
												<tr>
												
												<td colspan="2"></td>
												<td colspan="2"></td>
												
												
											</tr>
												
												
												
											</tr>
											
											
											
											
										</tbody>
										
										
									</table>
								</div>
								
								
								
								
								</div>
								
								
							
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
										
							<button type="submit" class="btn btn-default addEmpSubmitBtn">Submit</button>
							
								
								
								
								</form>
								
								
								
								
							</div>
							
							
							<ul class="pagination justify-content-center" style="margin:20px 0">
							<li class="page-item"><a class="page-link" href="<?=base_url('index.php/hrzone/Appraisal/AppraisalFormFive/'.$UserInfo->id);?>">Previous</a></li>
							<li class="page-item " ><a class="page-link" href="<?=base_url('index.php/hrzone/Appraisal/AppraisalForm/'.$UserInfo->id);?>">1</a></li>
							<li class="page-item "><a class="page-link" href="<?=base_url('index.php/hrzone/Appraisal/AppraisalFormTwo/'.$UserInfo->id);?>">2</a></li>
							<li class="page-item "><a class="page-link" href="<?=base_url('index.php/hrzone/Appraisal/AppraisalFormThree/'.$UserInfo->id);?>">3</a></li>
							<li class="page-item"><a class="page-link" href="<?=base_url('index.php/hrzone/Appraisal/AppraisalFormFour/'.$UserInfo->id);?>">4</a></li>
							<li class="page-item"><a class="page-link" href="<?=base_url('index.php/hrzone/Appraisal/AppraisalFormFive/'.$UserInfo->id);?>">5</a></li>
							<li class="page-item active"><a class="page-link" href="<?=base_url('index.php/hrzone/Appraisal/AppraisalFormSix/'.$UserInfo->id);?>">6</a></li>
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

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>

		
		$(document).ready(function(){
			
		var YearID = "<?php date("Y"); ?>";
		console.log(YearID);
		SeoYearlyGoal(4);
			
			
});			
		
		
    


function SeoYearlyGoal(YearID){
	var ajaxurl = "<?=site_url('hrzone/EmployeeInfo/TeamGoals');?>";
        $.ajax({
            type: "get",
            url: ajaxurl,
            data: { YearID : YearID},
			dataType: "JSON"
        }).done(function(response){
			seodata = response.data;
			if(response)
				$("#SeodataTable tbody").html(`${response.data.map(function(data, index){
					return(`<tr>
					
					<td style="text-align:center;">${++index}</td>
					<td>${data.seogoal_points}</td>
					<td class="${data.work_status}">${data.work_status}</td>
					<td>${data.seogoal_comments}</td>
					
					
					
					</tr>`)
				})}`);
            else 
				$("#CompanydataTable tbody").html("<div>No data Found.....</div>");
        });
}


			
</script>


<?php include('footer.php'); ?>