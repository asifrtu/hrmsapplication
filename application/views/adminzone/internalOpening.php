<?php include('header.php'); ?>
<?php include('commonSidebar.php'); ?>


    
<style>

.ColorPrimary{
	color:white;
}





.leaveSubmitBtn{
	margin-left: 287px;
	background: #1C304C;
    color: white;
    font-weight: 400;
    border-radius: 2px;
    padding: .4em 2em 0.4em 2em;
    border: none !important;
    margin-right: 4%;
    outline: none !important;
    cursor: pointer;
    margin-top: 1em !important;
    margin-bottom: 20px;
    border: none;
    outline: none;
    
}


.fa-user{
	border: 1px solid #4d4489;
    padding: 10px;
    border-radius: 100%;
	color:#443b80;
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


.asd{
    content: "+";
    font-size: 1.5em;
    margin-left: 5px;
    line-height: 0.8em;
    float: right;
    transition: transform 0.3s ease-in-out;
}
.vacancy_text{
	float:right;
}
.Vacancies{
	background-color:white;
	margin: 20px;
}


.job_title_text {
   color: black;
    font-weight: 500;
    font-size: 1.5em;
}

.accordion p {
    padding: 1em 2em 1em 2em;
}
.career_ul {
    padding: 0 3em;
}

.career_apply {
    float: right;
    background: #1C304C;
    color: white;
    font-weight: 400;
    border-radius: 2px;
    padding: .2em 2em 0.2em 2em;
    border: none !important;
    margin-right: 4%;
    outline: none !important;
    cursor: pointer;
    margin-top: 1em !important;
    margin-bottom: 20px;
    border: none;
    outline: none;
}
.hvr-glow {
    display: inline-block;
    vertical-align: middle;
}

.careerBody{
	padding-bottom: 50px;
}
	
}
.careerHeader{
	padding: .3rem 1.25rem!important;
}
a.isDisabled:link {
  text-decoration: none;
}

.a:before {
    content: "• ";
    color: rgb(47, 63, 120);
    font-size: 20px;
}

.a{
	    font-size: 1.2rem;
}

ul.career_ul {
  list-style-type: none;
}

ul.career_ul li{
	padding: 5px;
}
.career_subul i {
    color: #2f3f78;
}
.fa, .fas {
    font-weight: 900;
}
.fa, .far, .fas {
    font-family: "Font Awesome 5 Free";
}
.shadowCareer{
	box-shadow: 4px 7px #4e73df;
}
.modal-content {
    margin-left: 100px;
	margin-top: -28px;
}

.careerFont{
	font-weight: bolder;
    font-size: 18px;
}
.careerInputModal{
	border-radius:7px;
}


.careerInputModalEmail{
	border-radius:7px;
	border: 1px solid;
	padding: 0px;
	
}
.Qdxupload-btn-wrapper input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}
.btnQd {
  border: 2px solid #6610f2;
  color: white;
  background-color: #6610f2;
  padding: 4px 10px;
  border-radius: 0px;
  font-size: 20px;
  font-weight: bold;
}
.form-control {

	border: 1px solid #9c50ff94 !important;
    border-radius: 2px;
	height: calc(1.5em + 0.25rem + 2px);
}

.form-control:focus{

	box-shadow: 0 0 0 0.1rem rgb(199 156 255 / 58%)!important;
	color: #343434!important;
}


form .row {
    padding-right: 10px;
    padding-left: 10px;
}

form{
    padding: 0px 15px;

}
.col-lg-10  {

	padding-left:0px!important;
	padding-right:0px!important;
}



.referal_div{
    background:white;
	padding-bottom: 30px;
    box-shadow: 0 -1px 7px #919191;
}
.shadow {
    box-shadow: 0 .15rem 1.10rem 0 rgba(58, 59, 69, .15)!important;
	padding-bottom: 15px;
}
label {
    margin-bottom: 1px!important;
    color: #343434;
    font-size: 14px;
}
.refer_button{
	padding: 4px 20px;
    outline: none;
    border: none;
    border-radius: 5px;
    background-color: #1C304C;
    color: white;
}
.opening_dropdown{
	padding: 10px 17px;
    border: none;
    box-shadow: 4px 7px #c0baff;
    background: #ececec;
    width: 100%!important;
    display: flex;
    justify-content: space-between;
}
.opening_dropdown:focus{
	border: 1px solid #c7c5c5!important;
}
.opening_dropdown:active{
	border: 1px solid #c7c5c5!important;
}
.dropdown h5{
    margin-bottom: 0px!important;
    margin-top: 5px;
    margin-left: 7px;
	color: #3d3580;
    font-family: system-ui;
}
.desig_info{
	display: flex; justify-content: space-between;
}
.dropdown .dropdown-menu {       width: 100%;
    padding-left: 100px;
    PADDING-TOP: 35px;
    padding-bottom: 35px;
    border: none;
	border-left:2px solid #3d3580;
    margin-top: -1px!important;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;

}
.dropdown .dropdown-menu h4{
    color: #343434;
    font-size: 22px;
    font-weight: 600;
    margin-bottom: 20px;
}
.dropdown .dropdown-menu h6{
    color: #5b5b5b;
    font-size: 14px;
    font-weight: 600;
}
.dropdown .dropdown-menu ul li{
	margin-left: 50px;
	color: #4e4e4e;
    font-size: 12px;
	list-style: none;

}
.job_opening{
	width:87%;
}

.avial_vac{
	padding-top: 8px;
}
.referal_heading h6{
    font-size: 25px;
    color: black;
    font-family: sans-serif;
    padding-top: 40px;
    margin-bottom: 0px;

}
.resume{
	font-size: 8px!important;
    padding-bottom: 22px!important;
}

/* PANNEL */

.panel-group {
    margin-bottom: 20px;
}

.panel-group .panel {
	margin-bottom: 10px;
    border-radius: 2px;
	box-shadow: 3px 4px 0px #c297d7;
}

.panel-default {
    border-color: #ddd;
}
.panel {
    margin-bottom: 20px;
    background-color: #fff;
    border: 1px solid transparent;
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 1px rgb(0 0 0 / 5%);
    box-shadow: 0 1px 1px rgb(0 0 0 / 5%);
}

.panel-default>.panel-heading {
    color: #333;
    background-color: #f5f5f5;
    border-color: #ddd;
}

.panel-group .panel-heading {
    border-bottom: 0;
}
.panel-default>.panel-heading {
    background-color:#!important;
}
.panel-heading {
	padding: 4px 15px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
}
.panel-title {
	margin-bottom: 2px;
}
.panel-title-1 {
	margin-bottom: 2px;
}
.panel-collapse {
    border-left: 2px solid #ddd;
}
.panel-body h4 {
	font-size: 20px!important;
    font-weight: 600;
}
 .panel-body li {
	list-style: disc!important;
	margin: 5px 0px 10px 65px!important;
    list-style-position: outside!important;
    color: #000;
    font-family: -webkit-pictograph;
}
.panel-body {
    padding: 30px;
}

.panel-body {
    font-size: 17px!important;
    color: #000!important;
}
.cur-span {
    float: right;
    margin-right: 15px;
	margin-top: 8px;
}
.panel-title a{
	color:#4c3f5e!important;
	font-size: 14px;
}
.panel-title-1 a{
	color:#4c3f5e!important;
	font-size: 14px;
}
.panel-body li::marker {
    color: #fe8e00;
	font-size: 20px;
}
.current_oppurtunities{
    font-size: 25px;
    color: black;
    font-family: sans-serif;
}
.current_oppurtunities_div{
    padding: 20px 20px;
    box-shadow: 0px 2px 7px #919191;
    background-color: white;
}

 </style>
        <!-- Sidebar -->
		
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper bg-gradient-primary" class="my_information col-lg-10" style="background: none;">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="">

                    <!-- Page Heading -->
                    
					<div class=" ">
                        
                    <!-- Content Row -->
					  <!-- Area Chart -->
								
					  <div class="employee_details" style=" font-size: 13px;  font-weight: 600;">
            <span>Referal Form</span>
        </div>
		<div class=" mx-auto  referal_div">


<div> 

<form action="/action_page.php">

<div class="row">
<div class="col-3 mt-3">
	<label> Full Name </label>
<input type="text" class="form-control" name="name">
</div>
<div class="col-3 mt-3">
<label>Applying For</label>
<input type="text" class="form-control" name="Designation">
</div>
<div class="col-3 mt-3">
<label>Years of Experience</label>
<input type="text" class="form-control" name="Designation">
</div>
    <div class="col-3 mt-3">
<label>Email ID</label>
<input type="email" class="form-control" name="email">
</div>
</div>
<div class="row">
<div class="col-3 mt-4">
<label>Phone No</label>
<input type="text" class="form-control" name="phone">
</div>
<div class="col-3 mt-4">
<label>Referring Date </label>
<input type="date" class="form-control" name="phone">
</div>
<div class="col-3 mt-4">
<label>Refered By</label>
<input type="text" class="form-control" name="refer">
</div>
<div class="col-3 mt-4">
<label>Resume</label>
<input type="file" class="form-control resume" name="resume">
</div>
</div>
<div class="text-center mt-4">
<button class="refer_button">Submit</button>

</div>
</form>


</div>




 
</div>

<!--
We will create a family tree using just CSS(3)
The markup will be simple nested lists
-->
<div class="employee_details" style="    font-size: 13px;margin-top: 40px;font-weight: 600;">
            <span>Current Oppurtunities</span>
        </div>
<div class="current_oppurtunities_div" >

<div class="panel-group  " id="accordion" role="tablist" aria-multiselectable="true">
    

    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
             <h4 class="panel-title-1">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
          Search Engine Optimizer (SEO) <span class="cur-span">Current Vacancies - 2</span>
        </a>
      </h4>

        </div>
        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
            <div class="panel-body"> 
            <h4>Job Description/Desired Profile</h4>
            <ul>
               <li>Qualification: (B.COM/M.COM/MBA/MCA)</li>
               <li>Experience
                  <ul>
                     <li>Fresher</li>
                     <li> 1+ years of relevant work area experience</li>
                  </ul>
               </li>
               <li>The Candidate would be expected to carry out the following-
                   <ul>
                       <li> Command over On page and Off Page SEO</li>
                       <li> Keyword research &amp; analysis</li>
                       <li> Knowledge about recent Google algorithm updates</li>
                   </ul>
               </li>
            </ul>
                 <!--<a href="#careerModal" class="apply">Apply Now</a>-->
                
	    	</div>
        </div>
    </div>
    
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingTwo">
             <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Content Writer <span class="cur-span">Current Vacancies - 4</span>
        </a>
      </h4>

        </div>
        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;">
          
         <div class="panel-body"> 
            <h4>Job Description/Desired Profile</h4>
            <ul>
               <li>Qualification: (B.COM/M.COM/MBA/MCA)</li>
               <li>Experience
                  <ul>
                     <li>Fresher</li>
                     <li> 2+ years of relevant work area experience</li>
                  </ul>
               </li>
               <li>The Candidate would be expected to carry out the following-
                   <ul>
                       <li> Develop original content using the written word to clearly and effectively communicate ideas</li>
 <li>Write and post content online, maintain company web pages and blogs</li>
 <li>Update the company's social profiles like Facebook, Twitter, Quora etc</li>
 <li>Conduct extensive research on colleges, courses &amp; exams for presenting content in a well formatted manner</li>
 <li>Write articles for both internal (on-site) and external (SEO) use and edit content for correct spelling and grammar</li>
                   </ul>
               </li>
            </ul>
	    	</div>
        </div>
    </div>
    
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingThree">
             <h4 class="panel-title">
        <a class="" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
          Web Designer/Graphic Designer <span class="cur-span">Current Vacancies - 5</span>
        </a>
      </h4>

        </div>
        <div id="collapseThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree" aria-expanded="true" style="">
          
         <div class="panel-body"> 
            <h4>Job Description/Desired Profile</h4>
            <ul>
               <li>Qualification: (B.COM/M.COM/MBA/MCA)</li>
               <li>Experience
                  <ul>
                     <li>Fresher</li>
                     <li>1+ years of relevant work area experience</li>
                  </ul>
               </li>
               <li>The Candidate would be expected to carry out the following-
                   <ul>
                       <li> Experience in Adobe Photoshop, Illustrator for making UI designs</li>
                       <li>Experience in HTML5, CSS3, JavaScript, JQuery, Bootstrap, Experience on Responsive and Parallax designs</li>
                   </ul>
               </li>
            </ul>
	    	</div>
        </div>
    </div>
    
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingFour">
             <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          Website Developer <span class="cur-span">Current Vacancies - 3</span>
        </a>
      </h4>

        </div>
        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour" aria-expanded="false">
          
         <div class="panel-body"> 
            <h4>Job Description/Desired Profile</h4>
            <ul>
               <li>Qualification: (B.COM/M.COM/MBA/MCA)</li>
               <li>Experience
                  <ul>
                     <li>Fresher</li>
                     <li>1+ years of relevant work area experience</li>
                  </ul>
               </li>
               <li>The Candidate would be expected to carry out the following-
                   <ul>
                       <li> MANDATORY: Jquery, PHP, Javascript, Javascript framework</li>
                       <li>Experience in HTML5, CSS3, JavaScript, JQuery, Node.js</li>
                   </ul>
               </li>
            </ul>
                
	    	</div>
        </div>
    </div>
    
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingFive">
             <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          Mobile Application Developer <span class="cur-span">Current Vacancies - 7</span>
        </a>
      </h4>

        </div>
        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive" aria-expanded="false">
          
         <div class="panel-body"> 
            <h4>Job Description/Desired Profile</h4>
            <ul>
               <li>Qualification: (B.COM/M.COM/MBA/MCA)</li>
               <li>Experience
                  <ul>
                     <li>Fresher</li>
                     <li>1+ years of relevant work area experience</li>
                  </ul>
               </li>
               <li>The Candidate would be expected to carry out the following-
                   <ul>
                       <li> Excellent programming skills using either C, C++ or Java</li>
 <li>iOS Application Development : iOS SDK, Objective-C, Swift, Cocoa Touch</li>
 <li>Hybrid Application Development: HTML5, JS, CSS3</li>
 <li>Android Application Development: Android SDK, Java</li>
 <li>Development Frameworks: Apache Cordova, Xamarin</li>
                   </ul>
               </li>
            </ul>
               
	    	</div>
        </div>
    </div>
   
        
    </div>
    </div>


			<!-- <ul class="career_ul borderLine">
			
			<li class="Vacancies">
				
				
							
					<a class="isDisabled" href="#" 
					data-toggle="collapse" data-target="#career1"
					aria-expanded="true" aria-controls="career1">
					<div class="card-header shadowCareer careerHeader ">
					<i class="fas fa-user"></i><span> Search Engine Optimizer (SEO)</span><span class="vacancy_text">Current Vacancies(2)</span><span class="asd"></span>
					</div>
					</a>
                            
                
						
						
				<div id="career1" class="border border-top-0 card-body collapse careerBody " aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar" >
              	<ul class="career_ul" id="a">
              	<p class="job_title_text">Job Description/ Desired Profile: </p>
              		<li class="a">Qualification:(B.COM/M.COM/MBA/MCA)</li>
              		<li class="a">Experience:
						<ul class="career_ul ">
							<li><i class="fas fa-caret-right"></i> Fresher</li>
							<li><i class="fas fa-caret-right"></i> 1+ years of relevant work area experience</li>
						</ul>
              		</li>
              		<li class="a">The Candidate would be expected to carry out the following- 
						<ul class="career_ul career_subul">
							<li><i class="fas fa-caret-right"></i> Command over On page and Off Page SEO</li>
							<li><i class="fas fa-caret-right"></i> Keyword research &amp; analysis</li>
							<li><i class="fas fa-caret-right"></i> Knowledge about recent Google algorithm updates</li>
						</ul>
              		</li>
              	<button data-toggle="modal" data-target="#careerModal" class="career_apply hvr-glow">Refer</button>
              	</ul>
              	</div>
              	
			</li>
			<li class="Vacancies">
						
					<a class="isDisabled" href="#" 
					data-toggle="collapse" data-target="#career2"
					aria-expanded="true" aria-controls="career2">
					<div class="card-header shadowCareer careerHeader">
					<i class="fas fa-user"></i><span> Search Engine Optimizer (SEO)</span><span class="vacancy_text">Current Vacancies(2)</span><span class="asd"></span>
					</div>
					</a>
                            
                
						
						
				<div id="career2" class="border border-top-0 card-body collapse careerBody" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar" >
              	<ul class="career_ul">
              	<p class="job_title_text">Job Description/ Desired Profile: </p>
              		<li class="a">Qualification:(B.COM/M.COM/MBA/MCA)</li>
              		<li class="a">Experience:
						<ul class="career_ul career_subul">
							<li><i class="fas fa-caret-right"></i> Fresher</li>
							<li><i class="fas fa-caret-right"></i> 1+ years of relevant work area experience</li>
						</ul>
              		</li>
              		<li class="a">The Candidate would be expected to carry out the following- 
						<ul class="career_ul career_subul">
							<li><i class="fas fa-caret-right"></i> Command over On page and Off Page SEO</li>
							<li><i class="fas fa-caret-right"></i> Keyword research &amp; analysis</li>
							<li><i class="fas fa-caret-right"></i> Knowledge about recent Google algorithm updates</li>
						</ul>
              		</li>
              	</ul>
              	<button data-toggle="modal" data-target="#careerModal" class="career_apply hvr-glow">Refer</button>
              	</div>
              	
			</li>
			<li class="Vacancies">
						
					<a class="isDisabled" href="#" 
					data-toggle="collapse" data-target="#career3"
					aria-expanded="true" aria-controls="career3">
					<div class="card-header shadowCareer careerHeader">
					<i class="fas fa-user"></i><span> Search Engine Optimizer (SEO)</span><span class="vacancy_text">Current Vacancies(2)</span><span class="asd"></span>
					</div>
					</a>
                            
                
						
						
				<div id="career3" class="border border-top-0 card-body collapse careerBody" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar" >
              	<ul class="career_ul">
              	<p class="job_title_text">Job Description/ Desired Profile: </p>
              		<li class="a">Qualification:(B.COM/M.COM/MBA/MCA)</li>
              		<li class="a">Experience:
						<ul class="career_ul career_subul">
							<li><i class="fas fa-caret-right"></i> Fresher</li>
							<li><i class="fas fa-caret-right"></i> 1+ years of relevant work area experience</li>
						</ul>
              		</li>
              		<li class="a">The Candidate would be expected to carry out the following- 
						<ul class="career_ul career_subul">
							<li><i class="fas fa-caret-right"></i> Command over On page and Off Page SEO</li>
							<li><i class="fas fa-caret-right"></i> Keyword research &amp; analysis</li>
							<li><i class="fas fa-caret-right"></i> Knowledge about recent Google algorithm updates</li>
						</ul>
              		</li>
              	</ul>
              	<button data-toggle="modal" data-target="#careerModal" class="career_apply hvr-glow">Refer</button>
              	</div>
              	
			</li>
			<li class="Vacancies">
					
					<a class="isDisabled" href="#" 
					data-toggle="collapse" data-target="#career4"
					aria-expanded="true" aria-controls="career4">
				<div class="card-header shadowCareer careerHeader">

					<i class="fas fa-user"></i><span> Search Engine Optimizer (SEO)</span><span class="vacancy_text">Current Vacancies(2)</span><span class="asd"></span>
                            
                </div>
					</a>
						
						
				<div id="career4" class="border border-top-0 card-body collapse careerBody" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar" >
              	<ul class="career_ul">
              	<p class="job_title_text">Job Description/ Desired Profile: </p>
              		<li class="a">Qualification:(B.COM/M.COM/MBA/MCA)</li>
              		<li class="a">Experience:
						<ul class="career_ul career_subul">
							<li><i class="fas fa-caret-right"></i> Fresher</li>
							<li><i class="fas fa-caret-right"></i> 1+ years of relevant work area experience</li>
						</ul>
              		</li>
              		<li class="a">The Candidate would be expected to carry out the following- 
						<ul class="career_ul career_subul">
							<li><i class="fas fa-caret-right"></i> Command over On page and Off Page SEO</li>
							<li><i class="fas fa-caret-right"></i> Keyword research &amp; analysis</li>
							<li><i class="fas fa-caret-right"></i> Knowledge about recent Google algorithm updates</li>
						</ul>
              		</li>
              	</ul>
              	<button data-toggle="modal" data-target="#careerModal" class="career_apply hvr-glow">Refer</button>
              	</div>
              	
			</li>
            </ul> -->
              
		<div class="modal fade" id="careerModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
	  
		<div class="card shadow" style="border: 1px solid #ffffff;">
                        <div class="card-header ColorSecondaryPre">
							<div class="row">
                            <h3 class="m-0 font-weight-bold ColorPrimary" style="padding-left: 30px;">Employee Referral Form</h3>
							<button style="margin-left:410px;" type="button" class="close" data-bs-dismiss="modal">&times;</button>
							</div>
                        </div>
									
									<div class="modal-body">
					<form  action="/action_page.php">
							
								
								<div class="card-body">
										<hr style="	border-top: 1px solid #8c8b8b; margin-bottom:20px;">
						
										<div class="row">
										<div class="col-lg-4">
										<div class="form-group">
										
										<label class="careerFont">Employee Name</label>
										</div>
										</div>
										<div class="col-lg-8">
										<div class="form-group">
										<input type="email" class="form-control careerInputModal" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										</div>
										<div class="row">
										<div class="col-lg-4">
										<div class="form-group">
										
										<label class="careerFont">Designation</label>
										</div>
										</div>
										<div class="col-lg-8">
										<div class="form-group">
										<select class="form-control careerInputModal" style="border: 1px solid #858796;" id="sel1">
											<option>select</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											</select>
										</div>
										</div>
										</div>
										
										<hr style="	border-top: 1px solid #8c8b8b; margin-bottom:20px;">
						
										<div class="row">
										<div class="col-lg-4">
										<div class="form-group">
										
										<label class="careerFont">Referral Name</label>
										</div>
										</div>
										<div class="col-lg-8">
										<div class="form-group">
										<input type="email" class="form-control careerInputModal" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										</div>
										<div class="row">
										<div class="col-lg-4">
										<div class="form-group">
										
										<label for="email" class="careerFont">Referral Email</label>
										</div>
										</div>
										<div class="col-lg-8">
										<div class="form-group">
										<input type="email" class="form-control careerInputModal" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										</div>
										<div class="row">
										<div class="col-lg-4">
										<div class="form-group">
										
										<label class="careerFont">Referral Phone Number</label>
										</div>
										</div>
										<div class="col-lg-8">
										<div class="form-group">
										<input type="email" class="form-control careerInputModal" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										</div>
										
										<div class="row">
										<div class="col-lg-4">
										<div class="form-group">
										
										<label class="careerFont">Current Company /Position</label>
										</div>
										</div>
										<div class="col-lg-8">
										<div class="form-group">
										<input type="email" class="form-control careerInputModal" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										</div>
										
										<div class="row">
										<div class="col-lg-4">
										<div class="form-group">
										
										<label class="careerFont">Position Referred For</label>
										</div>
										</div>
										<div class="col-lg-8">
										<div class="form-group">
										<input type="email" class="form-control careerInputModal" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										</div>
										
										<div class="row">
										<div class="col-lg-4">
										<div class="form-group">
										
										<label class="careerFont">CV</label>
										</div>
										</div>
										<div class="col-lg-8">
										<div class="form-group">
										<div class="careerInputModalEmail Qdxupload-btn-wrapper">
										
										<i class="fas fa-cloud-upload-alt" style="font-size:55px; padding-top:10px; margin-left:161px;"></i>
									<input type="file" name="myfile" />
										<h3 style="margin-left: 124px;">Browse Files  </h3>
										<h5 style="margin-left: 100px;">Drag and Drop Files here  </h5>
										</div>
										</div>
										</div>
										</div>
										
										
										
										
										
									
										
										
								</div>
									
								
							
							
							
					
							<div>
								
							<div class="card-body">
									
							<button type="submit" class="btn btn-default leaveSubmitBtn">Submit</button>
							</div>
							</div>
							</form>
							
						
						
                   

                    <!-- Content Row -->
                    </div>
        
								
        
      </div>
      
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

<?php include('footer.php'); ?>