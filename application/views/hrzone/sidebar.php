
<div id="wrapper">

<style>


.addWallEmpBtn{
    background: #00d3c3;
    color: white;
    font-weight: 400;
    padding: 0.5em 0.5em 0.5em 0.5em;
    border: none !important;
    margin-left: 30px!important;
    margin-top: 0px;
    font-size: 13px;
    border-radius: 2px;
}

.addWallEmpBtn:hover{

    box-shadow: 3px 3px 3px #fff inset;
    outline: 1px solid #00d3c3!important;
    border-radius: 0px;
}
.switch {
  position: relative;
  display: inline-block;
  width: 55px;
  height: 25px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 18px;
  width: 18px;
  left: 4px;
  bottom: 4px;
  background-color: #6610f2;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: white;
}

input:focus + .slider {
  box-shadow: 0 0 1px white;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 15px;
}

.slider.round:before {
  border-radius: 50%;
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid #2e2869;
    border-radius: .35rem;
}
.sidebar .nav-item .nav-link{
    display: block;
    font-size: 14px;
    padding-top: 14px!important;
    padding-bottom: 14px!important;

}

.sidebar .nav-item:last-child{
    margin-bottom:0px!important;
    border-bottom:0px!important;
}

.nav-link{
    padding: 1rem 1rem 1rem 1.9rem!important;
}
.sidebar .nav-item{
    border-bottom: 1px solid #e6d3ff47;
}
.float-right {
    float: right!important;
    margin-right: 35px;
}
                   
 .sidebarScroll {
			
  margin-top:50px;
  margin-bottom:50px;
  background-color: #1C304C;
  border-radius: 0 2px 2px 0;
}

a.empCH:hover{
	background-color:#1C304C;
}

.faviconCustomise{
	text-align: center;
    border: 1px solid #2e2869;
    padding: 40px 0px;
}	 
.gfColor{
	color:white;
}
.Gh{
	background-color:#DE3163;
}
.Lwp{
	background-color:#FF7F50;
}
.faviconCustomise:hover{
	background-color:#6a64b1;
}
.sidebar {
   margin-top:5px;
	display: flex;
    flex-direction: column;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
    padding-right: 0px!important;
	
}

.row {
    
    margin-right:0rem!important;
    margin-left:0rem!important;
}
		 </style>
		 
		 
		 
<style>


.thumb-lg {
    height: 88px;
    width: 88px;
}
.img-thumbnail {
    padding: .25rem;
    background-color: #fff;
    border: 1px solid #dee2e6;
    border-radius: .25rem;
    max-width: 100%;
    height: auto;
}
.text-pink {
    color: #ff679b!important;
}
.btn-rounded {
    border-radius: 2em;
}
.text-muted {
    color: #98a6ad!important;
}
h4 {
    line-height: 22px;
    font-size: 16px;
    letter-spacing: 1px;
}

span a{
	text-decoration:none;
}

.profile-pic {
    max-width: 200px;
    max-height: 200px;
    display: block;
}

.file-upload {
    display: none;
}
.circle {
    border-radius: 50%;
    overflow: hidden;
    width: 50%;
    height: 113px;
    border: 4px solid rgb(255 255 255);
    position: absolute;
    top: 22px;
    left: 53px;
}
img {
    max-width: 100%;
    height: auto;
}
.p-image {
    position: absolute;
    top: 106px;
    right: 60px;
    padding: 2px 5px;
    border: 1px solid white;
    border-radius: 77px;
    color: #75566f;
    background: white;
    transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
}


.p-image:hover {
  transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
}
.upload-button {
  font-size: 1.2em;
}

.upload-button:hover {
  transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
  color: #1C304C;
}



@media (min-width: 768px)
{
.sidebar {
    width: auto;
}
}
</style>
        <!-- Sidebar -->
		<div class="displayNoneContent" id="accordionSidebar" style="height: 368px; margin-top: 34px;">
        
		
		
		<ul class="displayNoneContent sidebar sidebarScroll sidebar-dark colorSidebar col-lg-12" id="accordionSidebar">
			
            <!-- Sidebar - Brand -->
          	<div class="row">
            <div class="col-lg-12" style="padding-right: .2rem; padding-left: .2rem;">
                <div class="text-center card-box" style="margin-top: 0px;">
                
                    <div class="member-card pt-2 pb-2">
                    
					<div class="small-12 medium-2 large-2 columns">
					<div class="circle">
					<!-- User Profile Image -->
					<?php if(!empty($EmployeeProfileImage->EmpProfileImage)){ ?>
						
						<img src="<?php echo base_url();?>upload/UserProfileImage/<?php  echo $EmployeeProfileImage->EmpProfileImage; ?>" class="" alt="profile-image" style="height:115px; width: 115px;">
						<?php } else{ ?>
						<img src="<?php echo base_url() ?>Assets/img/qdxPrintLogo.png" class="rounded-circle img-thumbnail" alt="profile-image">
                        <?php } ?>
					<!-- Default Image -->
					<!-- <i class="fa fa-user fa-5x"></i> -->
					</div>
					<div class="p-image">
					<a href="#" data-toggle="modal" data-target="#myModal" style="text-decoration:none;"><i class="fa fa-camera upload-button"></i></a>
					
					</div>
					</div>
					
						
						
						
						<div class="" style="margin-top: 145px;">
                            <h4 style="margin-top: 20px; color: white;" style="font-size:16px;"><?php echo $UserInfo->name; ?></h4>
                            <p class="text-muted"><span><a href="#" class="text-pink" style="text-decoration: none;" style="font-size:15px;"><?php if(!empty($EmployeeDetails->position)){ echo $EmployeeDetails->position;} ?></a></span></p>
                            
                        </div>
                       
					   
                       
					   
					   
                    </div>
                </div>
            </div>
            <!-- end col -->
           
            <!-- end col -->
        </div>
				
			<div class="">
                            <button class="addWallEmpBtn addempbtn" style="margin-bottom: 12px!important;"><a href="<?=base_url('index.php/hrzone/Employee/AddEmployee');?>">+ Add New Employee</a></button>
                        </div>	
          

           
            <!-- Heading -->
            
            <!-- Nav Item - Pages Collapse Menu -->
            
            <!-- Nav Item - Utilities Collapse Menu -->
			<li class="nav-item" style="border-top: 1px solid #e6d3ff47; margin-top: 10px;">
                <a class="nav-link empCH  navPadding" href="<?=base_url('index.php/hrzone/Users/CompanyMissionAndGoals');?>" >
                    
                    <span>Company Info</span>
                </a>
                
            </li>

            <!-- Divider -->
            
            <li class="nav-item">
                <a class="nav-link empCH collapsed" href="<?=base_url('index.php/hrzone/Employee/employeeList');?>" target="_blank">
                    
                    <span>Employee List</span>
                </a>
                
            </li>

            <!-- Divider -->
            
            <li class="nav-item">
                <a class="nav-link empCH collapsed" href="<?=base_url('index.php/hrzone/Employee/EmployeeDoc');?>" >
                    
                    <span>Employee Info</span>
                </a>
                
            </li>
            
			<li class="nav-item">
                <a class="nav-link empCH collapsed" href="<?=base_url('index.php/hrzone/Pay/CompensationList');?>" target="_blank">
                    
                    <span>Employee Pay</span>
                </a>
                
            </li>

            <!-- Divider -->
            
			
            

        </ul>
        </div>
        <!-- End of Sidebar -->
	




	
		
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {

    
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.profile-pic').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    

    $(".file-upload").on('change', function(){
        readURL(this);
    });
    
    $(".upload-button").on('click', function() {
       $(".file-upload").click();
    });
});
		
		</script>