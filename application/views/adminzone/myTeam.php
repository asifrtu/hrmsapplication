<?php include('header.php'); ?>
<?php include('employeeSidebar.php'); ?>
<style>


/*Now the CSS*/
* {margin: 0; padding: 0;}

.tree ul {
    padding-top: 20px; position: relative;
	
	transition: all 0.5s;
	-webkit-transition: all 0.5s;
	-moz-transition: all 0.5s;
}

.tree li {
	float: left; text-align: center;
	list-style-type: none;
	position: relative;
	padding: 20px 5px 0 5px;
	
	transition: all 0.5s;
	-webkit-transition: all 0.5s;
	-moz-transition: all 0.5s;
}

/*We will use ::before and ::after to draw the connectors*/

.tree li::before, .tree li::after{
	content: '';
	position: absolute; top: 0; right: 50%;
	border-top: 1px solid #ccc;
	width: 50%; height: 20px;
}
.tree li::after{
	right: auto; left: 50%;
	border-left: 1px solid #ccc;
}

/*We need to remove left-right connectors from elements without 
any siblings*/
.tree li:only-child::after, .tree li:only-child::before {
	display: none;
}

/*Remove space from the top of single children*/
.tree li:only-child{ padding-top: 0;}

/*Remove left connector from first child and 
right connector from last child*/
.tree li:first-child::before, .tree li:last-child::after{
	border: 0 none;
}

.tree li:second-child::before{
	border: 0 none;
}
/*Adding back the vertical connector to the last nodes*/
.tree li:last-child::before{
	border-right: 1px solid #ccc;
	border-radius: 0 5px 0 0;
	-webkit-border-radius: 0 5px 0 0;
	-moz-border-radius: 0 5px 0 0;
}
.tree li:first-child::after{
	border-radius: 5px 0 0 0;
	-webkit-border-radius: 5px 0 0 0;
	-moz-border-radius: 5px 0 0 0;
}
.tree li:second-child::after{
	border-radius: 5px 0 0 0;
	-webkit-border-radius: 5px 0 0 0;
	-moz-border-radius: 5px 0 0 0;
}

/*Time to add downward connectors from parents*/
.tree ul ul::before{
	content: '';
	position: absolute; top: 0; left: 50%;
	border-left: 1px solid #ccc;
	width: 0; height: 20px;
}
.treeSir ul ul::before{
	content: '';
	position: absolute; top: 0; left: 50%;
	border-left: 1px solid #ccc;
	width: 0; height: 20px;
}

.tree li a{
	border: 1px solid #ccc;
	
	text-decoration: none;
	color: #666;
	font-family: arial, verdana, tahoma;
	font-size: 11px;
	display: inline-block;
	
	border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	
	transition: all 0.5s;
	-webkit-transition: all 0.5s;
	-moz-transition: all 0.5s;
}

/*Time for some hover effects*/
/*We will apply the hover effect the the lineage of the element also*/
.tree li a:hover, .tree li a:hover+ul li a {
	background: #c8e4f8; color: #000; border: 1px solid #94a0b4;
}
/*Connector styles on hover*/
.tree li a:hover+ul li::after, 
.tree li a:hover+ul li::before, 
.tree li a:hover+ul::before, 
.tree li a:hover+ul ul::before{
	border-color:  #94a0b4;
}


.fa-user{
	border: 1px solid #ccc;
    padding: 10px;
	border-radius:100%;
}
.teamTitle{
	color:#1C304C;
	font-size: 13px;
    font-weight: bold;
}
.teamBoxSize{
	width: 154px;
    height: 127px;
	margin-top: 20px;
}	
.desigTeam{
	
}

.CeoTeam::before {
    content: '';
    position: absolute;
    top: 0;
    left: 50%;
    border-left: 1px solid #fff!important;
    width: 0;
    height: 20px;
}
 </style>
       

        <!-- Content Wrapper -->
        <div id="content-wrapper bg-gradient-primary" class="d-flex flex-column" style="margin-top:50px; margin-bottom:50px;">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    
					<div class="card shadow mb-4" style="margin-bottom:100px; width:1058px">
                        
                    <!-- Content Row -->
					  <!-- Area Chart -->
								
                        <div class="card-header ColorSecondaryPre">
							
                            <h6 class="m-0 font-weight-bold ColorPrimary" style="text-align:center;">Organization Chart(12)</h6>
							
                        </div>
						<div class="card-header">
							<div style="margin-left:20px;">
                            <h6 class="m-0 font-weight-bold ">Team heirarchy chart and reporting chart</h6>
							</div>
                        </div>
						

<!--
We will create a family tree using just CSS(3)
The markup will be simple nested lists
-->
	<div class="myteam" style="margin:50px 0 50px 0;">
			
			
		
		<div class="tree">	
			<ul>
				
				<li>
					<ul class="CeoTeam">
					<div class="treeSir">
					<a href="#" class="empView">
					<li>
					<div class="teamBoxSize sir">
					
					<h6><i class="fas fa-user"></i></h6>
					<p class="title teamTitle">Deepak Singh</p>
						<h6 class="desigTeam">Founder & CEO</h6>
					
					</div>
					</li>
					</a>
					<a href="#" class="empView">
					<li>
					<div class="teamBoxSize mam">
					<h6><i class="fas fa-user"></i></h6>
					<p class="title teamTitle">Neha Singh</p>
					<h6 class="desigTeam">Founder & CEO</h6>

					</div>
					</li>
					</a>
					</div>
					</ul>
					
				
				
				<ul>
				
				<li>
					<a href="javascript:void(0)" data-UserId="33" class="empView">
						<div class="teamBoxSize">
						<h6><i class="fas fa-user"></i></h6>
						<p class="title teamTitle">Shelly Sharma</p>
						<h6 class="desigTeam">Marketing Manager</h6>
						</div>
					</a>
					<ul>
						
						<li>
							<a href="javascript:void(0)" data-UserId="" class="empView">
							<div class="teamBoxSize">
							<h6><i class="fas fa-user"></i></h6>
							<p class="title teamTitle">Name</p>
							<h6 class="desigTeam">Team Leader</h6>
							</div>
							</a>
							<ul>
							<li>
								<a href="javascript:void(0)" data-UserId="38" class="empView">
									<div class="teamBoxSize">
									<h6><i class="fas fa-user"></i></h6>
									<p class="title teamTitle">Preeti Sharma</p>
									<h6 class="desigTeam">Team Leader</h6>
									</div>
								</a>
								<ul>
									<li>
										<a href="javascript:void(0)" data-UserId="" class="empView">
											<div class="teamBoxSize">
											<h6><i class="fas fa-user"></i></h6>
											<p class="title teamTitle">Name</p>
											<h6 class="desigTeam">SEO Executive</h6>
											</div>
										</a>
									</li>
									<li>
										<a href="javascript:void(0)" data-UserId="80" class="empView">
											<div class="teamBoxSize">
											<h6><i class="fas fa-user"></i></h6>
											<p class="title teamTitle">Shivam Dubey</p>
											<h6 class="desigTeam">SEO Analyst</h6>
											</div>
										</a>
									</li>
									<li>
										<a href="javascript:void(0)" data-UserId="76" class="empView">
											<div class="teamBoxSize">
											<h6><i class="fas fa-user"></i></h6>
											<p class="title teamTitle">Manish Kumar</p>
											<h6 class="desigTeam">SEO Analyst</h6>
											</div>
										</a>
									</li>
									
								</ul>
							</li>
								<li>
									<a href="javascript:void(0)" data-UserId="41" class="empView">
										<div class="teamBoxSize">
										<h6><i class="fas fa-user"></i></h6>
										<p class="title teamTitle">Ghufran Ahmed</p>
										<h6 class="desigTeam">Graphic Designer</h6>
										</div>
									</a>
									<ul>
									<li>
									<a href="javascript:void(0)" data-UserId="65" class="empView">
										<div class="teamBoxSize">
										<h6><i class="fas fa-user"></i></h6>
										<p class="title teamTitle">Durga Manral</p>
										<h6 class="desigTeam">Graphic Designer</h6>
										</div>
									</a>
									</li>
									</ul>
								</li>
								<li>
									<a href="javascript:void(0)" data-UserId="81" class="empView">
										<div class="teamBoxSize">
										<h6><i class="fas fa-user"></i></h6>
										<p class="title teamTitle">Jaspreet Singh</p>
										<h6 class="desigTeam">SEO Analyst</h6>
										</div>
									</a>
								</li>
								<li>
									<a href="javascript:void(0)" data-UserId="78" class="empView">
										<div class="teamBoxSize">
										<h6><i class="fas fa-user"></i></h6>
										<p class="title teamTitle">Md Asif Raza</p>
										<h6 class="desigTeam">Web Developer</h6>
										</div>
									</a>
									<ul>
									<li>
									<a href="javascript:void(0)" data-UserId="82" class="empView">
										<div class="teamBoxSize">
										<h6><i class="fas fa-user"></i></h6>
										<p class="title teamTitle">Amit Singh Bhadouria</p>
										<h6 class="desigTeam">Web Developer</h6>
										</div>
									</a>
									</li>
									</ul>
								</li>
							</ul>
						</li>
						
					</ul>
				</li>
			</ul>
		</li>
	</ul>
		
</div>			
</div>			
										
							
						
						
                   

                    <!-- Content Row -->
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



<div class="modal " id="updateUserModal" role="dialog">
<div class="modal-dialog modal-lg">
<!-- Modal content-->
		<div class="modal-content" style="margin: 196px 9px 0 259px;  width: 89%!important; ">
		<div class="card-header" style="padding:0!important; background-color: #2e2869;">
		<div class="row">
		<h6 class="ColorPrimary" style="padding-left: 302px; padding-top: 10px;">Employee Details</h6>
		<button style="margin-left:220px;" type="button" class="close" data-bs-dismiss="modal">&times;</button>
		</div>
		</div>

		<div class="modal-body">
		<div class="table-responsive" id="renderSingleUser">

		</div>

		</div>
		</div>
<!-- Content Row -->

</div>

</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
       
		
$(document).ready(function(){

  $("body").on('click', '.empView', function(){
	var id = $(this).attr('data-UserId');
	
	// alert(id);
	var ajaxurl = "<?=site_url('adminzone/EmployeeAttendance/UserSingleDetails');?>";
        $.ajax({
            type: "post",
            url: ajaxurl,
            data: {id: id},
			dataType: "JSON",
			}).done(function(response){
			$("#updateUserModal").modal('show');
			if(response){
				
				
				
				$("#renderSingleUser").html(`
					<table class="table table-bordered  " id="dataTable" width="100%">
										
										<thead>
										
										${response.data.map(function(data){
										return`<tr>
												<th colspan="5" class="fc qdxPrintCF" style="padding-bottom:0px!important;">
												
												
												<div class="row ">
												<div class="col-lg-6 col-md-6 col-sm-6 namepb qdxCenter">
													<h6 style="padding: 8px 8px 0px 0px;">Employee Name</h6>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-6 qdxCenter">
													<h6 style="padding: 8px 8px 0px 0px;">${data.userName}</h6>
												</div>
												</div>
												
												<div class="row ">
												<div class="col-lg-6 col-md-6 col-sm-6 namepb qdxCenter">
													<h6 style="padding: 8px 8px 0px 0px;">Employee ID</h6>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-6 qdxCenter">
													<h6 style="padding: 8px 8px 0px 0px;">${data.employee_id}</h6>
												</div>
												</div>
												
												<div class="row ">
												<div class="col-lg-6 col-md-6 col-sm-6 namepb qdxCenter">
													<h6 style="padding: 8px 8px 0px 0px;">Designation</h6>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-6 qdxCenter">
													<h6 style="padding: 8px 8px 0px 0px;">${data.position}</h6>
												</div>
												</div>
												<div class="row ">
												<div class="col-lg-6 col-md-6 col-sm-6 namepb qdxCenter">
													<h6 style="padding: 8px 8px 0px 0px;">Joining Date</h6>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-6 qdxCenter">
													<h6 style="padding: 8px 8px 0px 0px;">${data.joiningDate}</h6>
												</div>
												</div>
												
												
												</th>
												<th class="fc qdxPrintCF"><img class="logoPrint" src="<?php echo base_url();?>upload/UserProfileImage/${data.EmpProfileImage}" style="width:100px;" alt="Cinque Terre"></th>
													
											</tr>`
										}).join('')}
											
										</thead>
										
										
									</table>
										`);

				
				} else {
				$("#AttendencedataTable tbody").html("<div>No data Found.....</div>");
			}
				
        });
	
  });
  
		
  
  
});	
	
    </script>
<?php include('footer.php'); ?>