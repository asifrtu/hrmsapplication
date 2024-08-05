<?php include('header.php'); ?>

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
    padding: 19px 13px 10px 10.6px;
	transition: all 0.5s;
	-webkit-transition: all 0.5s;
	-moz-transition: all 0.5s;
}

/*We will use ::before and ::after to draw the connectors*/

.tree li::before, .tree li::after{
	content: '';
	position: absolute; top: 0; right: 50%;
	border-top: 1px solid #ccc;
	width: 53%; height: 20px;
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
.tree li:only-child{ padding-top: 0;
width:100%;}

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
.treeSir ul ul:before{
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
    background: #e9e8f0;
    color: #000;
    border: 1px solid #79864d;
    box-shadow: 0px 0px 6px 0px rgb(69 64 64 / 93%);



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
    color:white!important;
    border-color:white;
}
.teamTitle{
    color: #000000;
    font-size: 10px;
    font-weight: 600;
    margin-bottom: 2px;
    margin-top: 10px;
}
.teamBoxSize {
    width:100px;
    height:auto;
    border-radius: 5px;
}	
.desigTeam{
    font-size: 10px;
    font-weight: 600;
    color: #506e52;
}
.empView {
    background: #f5f4ff;
    margin-left: 15px;
    margin-right: 15px;
}
.str{
    background-color: white;
}
.Deepak::before {
    content: '';
    position: absolute;
    top: 0;
    left: 50%;
    border-top: none!important;
    width: 0;
    height: 20px;
}

.CeoTeam::before {
    content: '';
    position: absolute;
    top: 0;
    left: 50%;
    border-left: none!important;
    width: 0;
    height: 20px;
}

 .CeoView::after {
    content: '';
    position: absolute;
    top: 0;
    bottom: 50%;
    border-top: 1px solid #ccc;
    width: 0;
    height: 20px;
}

.CeoView{
    background:#e4fee5;
    padding-top:5px;
}
.CeoView:hover{
    background:#a1faa4!important;
}

.tree {
  /* Your existing styles */
  transform-origin: center;
}

.zoomed {
  transform: scale(1.2); /* Adjust the scale factor as needed */
}

 </style>



<style>
body{
    background:#DCDCDC;
   
}
.card-box {
    padding: 20px;
    border-radius: 3px;
    margin-bottom: 30px;
    background-color: #322b64;
}

.social-links li a {
    border-radius: 50%;
    color: rgba(121, 121, 121, .8);
    display: inline-block;
    height: 30px;
    line-height: 27px;
    border: 2px solid rgba(121, 121, 121, .5);
    text-align: center;
    width: 30px
}

.social-links li a:hover {
    color: #797979;
    border: 2px solid #797979
}
.thumb-lg {
    height: 57px;
    width: 80px;
}
.img-thumbnail {
    padding: .25rem;
    background-color: #fff;
    border: 1px solid #dee2e6;
    border-radius: .25rem;
    max-width: 100%;
    height: auto;
}

.img-thumbnailMain {
    padding: .25rem;
    background-color: #fff;
    border: 1px solid #dee2e6;
    border-radius: .25rem;
    max-width: 50%;
    height: auto;
    margin-top: 4px;
}



.text-pink {
    color: #f53f7d!important;
}
.btn-rounded {
    border-radius: 2em;
}
.text-muted {
    color: #ffffff!important;
    margin-bottom: 0px!important;
}
h4 {
    line-height: 22px;
    font-size: 18px;
}

.EmpH{
    margin-top: 60px;
    color: white;
    font-weight: 600;
}

.EmpHb{
	
    color: #f53f7d!important;
    font-weight: 400;
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
  
  text-decoration: none;
}


.APemp a:hover{
  
}


.ColorSecondaryNotes{
	background-color:#ececec;
	padding: .35rem 1.25rem!important;
}

.headerAsif{
	padding: 15px 31px 6px 31px;
}
.AttFontStatus{
	font-size:14px;
	
}
.cmPayroll{
	font-size:14px;
	font-weight:500;
}
.ceodesigTeam {
    color: #7b6f6f;
    font-size: 12px;
}
.shelly{
    padding-left:50px;
}
.col-lg-1{
    max-width: 4.33333%;
    padding-right:0px!important;
}
.employee_details {
    background-color: #1C304C;
    color: white;
    padding: 5px 20px;
    display: flex;
    justify-content: space-between;
    border-radius: 2px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
    border: 1px solid #1C304C;
    font-size: 14px;
}
.ticket-apply-note {
    background: #c5c5c5;
    padding: 8px 19px;
    font-size: 14px;
    color: #000;
    margin-top: 1px;
    font-style: italic;
    font-weight: 600;
}
.card-header {
    padding: 0.3rem 1.25rem!important ;}

</style>

            <div id="content" class="col-lg-12 my_information " style="margin: 30px 0 500px 0;">

              

                    <div class="card-header ColorSecondaryPre">
                        <div class="d-flex">
                        <div><a href="<?=site_url('hrzone/dashboard/wall');?>" style="color: #fff;font-size: 15px;"><i class="fa fa-home" aria-hidden="true"></i></a></div>
                        <div> &nbsp;&nbsp;<i style="font-size: 10px;color: #00d3c3;" class="fas fa-chevron-right"></i><span class="breadcrumb_text" style="font-size: 15px;color: #00d3c3;font-weight: 600;">&nbsp; Employee Hierarchy</span></div>
                        </div>
                    </div>
                        
    
                <!--<div class="ticket-apply-note">
                    <span>Shelly ma'am tell what should i write here ?... </span>
                </div>-->
                    <!-- Topbar -->
                    
                    <!-- End of Topbar -->
    
                    <!-- Begin Page Content -->
                    
                    <div>
    
                        <!-- Page Heading -->
                        
                        <div class="" style="margin-bottom:10px;">
                            
                        <!-- Content Row -->
                          <!-- Area Chart -->
                                    
                            
                            
             
    <!--
    We will create a family tree using just CSS(3)
    The markup will be simple nested lists
    -->
    
    
    <?php
        // $tasks[] = array("id" => 1, "parent_id" => 0, "title" => 'task 1');
        // $tasks[] = array("id" => 2, "parent_id" => 1, "title" => 'sub task 1');
        // $tasks[] = array("id" => 3, "parent_id" => 1, "title" => 'sub task 2');
        // $tasks[] = array("id" => 5, "parent_id" => 2, "title" => 'task 2');
        // $tasks[] = array("id" => 4, "parent_id" => 2, "title" => 'sub sub task 1');
        // $tasks[] = array("id" => 6, "parent_id" => 2, "title" => 'sub task 3');
        ?>
        
        <div class="zoom-buttons">
  <button id="zoom-in-btn">Zoom In</button>
  <button id="zoom-out-btn">Zoom Out</button>
</div>
<div class="myteam" style="margin:0px 0 50px 0;">
                
                
            
            <div class="tree">	
                <ul>
                    
                    <li class="str">
                        <ul class="CeoTeam">
                        <a href="javascript:void(0)" data-UserId="14" class="CeoView">
                        <li style="padding: 0px 0px 0 0px;">
                        <div class="teamBoxSize">
                        
                        <h6><i style="color: #71c374!important;" class="fas fa-user"></i></h6>
                        <p class="title teamTitle">Deepak Singh</p>
                            <h6 class="ceodesigTeam">Founder & CEO</h6>
                        
                        </div>
                        </li>
                        </a>
                        </ul>				
                    
                    <?php
                    // $tasks[] = array("id" => 7, "parent_id" => 6, "title" => 'sub task of 6');
        $branch = array();
    
        function buildTree(array $elements, array $branch, $parentId=0) {
            // group elements by parents if it does not comes on the parameters
            if (empty($branch)) {
                $branch = array();
    
                foreach ($elements as $element) {
                    
                    $branch[$element["parent_id"]][$element["id"]] = $element;
                }
            }
    
            // echo the childs referenced by the parentId parameter
            if (isset($branch[$parentId])) {
                echo'<ul >';
    
                foreach ($branch[$parentId] as $keyBranch => $itemBranch) {
                    
                    $imgDefault = "WhatsApp_Image_2021-12-01_at_2_37_45_PM.jpeg";
                    $defaultImage = (!empty($itemBranch["EmpProfileImage"]))? $itemBranch["EmpProfileImage"] : $imgDefault;
                    
                    
                    echo '<li class="'.$itemBranch["name"].'"> <a href="javascript:void(0)" data-UserId="'.$itemBranch["id"].'" class="empView" >
                            <div class="teamBoxSize">
                            <div class="thumb-lg member-thumb mx-auto"><img src="'.base_url('/upload/UserProfileImage/').$defaultImage.'" class="rounded-circle img-thumbnailMain" alt="profile-image"></div>
                            <span class="title teamTitle">'.$itemBranch['name'].'</span>
                            <h6 class="desigTeam">'.$itemBranch['position'].'</h6>
                            </div>
                        </a>';
                    buildTree($elements, $branch, $itemBranch["id"]); // iterate with the actual Id to check if this record have childs
                    echo '</li>';
                }
                echo '</ul>';
            }
        }
    
       
     echo buildTree($elements, array());
                    
                    ?>
                    
                        
                        
                    
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
		
		
		<div id="renderSingleUser" style="margin:80px -211px 0px 295px;">

		</div>

		
		
<!-- Content Row -->

</div>

</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
	document.addEventListener("DOMContentLoaded", function () {
  const tree = document.querySelector(".tree");
  const zoomInBtn = document.getElementById("zoom-in-btn");
  const zoomOutBtn = document.getElementById("zoom-out-btn");

  let currentScale = 1;

  function applyScale(scale) {
    currentScale = scale;
    tree.style.transform = `scale(${currentScale})`;
  }

  zoomInBtn.addEventListener("click", function () {
    applyScale(currentScale * 1.2);
  });

  zoomOutBtn.addEventListener("click", function () {
    applyScale(currentScale / 1.2);
  });

  // Apply zoom out on page load
  applyScale(0.8); // Adjust the initial scale as needed
});
	
$(document).ready(function(){

  $("body").on('click', '.empView', function(){
	var id = $(this).attr('data-UserId');
	
	// alert(id);
	var ajaxurl = "<?=site_url('hrzone/Hierarchy/hierarchyUserDetails');?>";
        $.ajax({
            type: "post",
            url: ajaxurl,
            data: {id: id},
			dataType: "JSON",
			}).done(function(response){
			$("#updateUserModal").modal('show');
			if(response){
				
				
				
				$("#renderSingleUser").html(`
					
						
						
						<div class="row">
						
						${response.data.map(function(data){
										return`
            <div class="col-lg-5">
                <div class="text-center card-box">
                    <div class="member-card pt-2 pb-2">
                        <div class="thumb-lg member-thumb mx-auto"><img src="<?php echo base_url();?>upload/UserProfileImage/${data.EmpProfileImage}" class="rounded-circle img-thumbnail" alt="profile-image"></div>
                        <div class="">
                            <h4 class="EmpH">${data.userName}</h4>
                            <p class="text-muted">Position <span>| </span><span><a href="#" class="text-pink">${data.position}</a></span></p>
                        </div>
                       <div class="mt-4">
                            <div class="row">
                                <div class="col-6">
                                    <div class="mt-3">
                                        <h6>Employee Id</h6>
                                        <p class="EmpHb mb-0 text-muted" style="color:black!important; font-weight:400;">${data.employee_id}</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mt-3">
                                        <h6>Joining Date</h6>
                                        <p class="EmpHb mb-0 text-muted" style="color:black!important; font-weight:400;">${data.joiningDate}</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col -->
           `}).join('')}
            <!-- end col -->
        </div>
		`);

				
				} else {
				$("#AttendencedataTable tbody").html("<div>No data Found.....</div>");
			}
				
        });
	
  });
  
		
  
  
});	
	
    </script>
<?php include('footer.php'); ?>