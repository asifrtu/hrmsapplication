<style>
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
    width: 100%;
   
    
   
  
}
.nav-link{
	padding:0.75rem 0 0.75rem 2.9rem!important;
}
.sidebar .nav-item{
	 border-bottom: 1px solid #2e2869;
}
.float-right {
    float: right!important;
    margin-right: 35px;
}
                   
 .sidebarScroll {
			
  margin-top:50px;
  margin-bottom:50px;
  width: 225px!important;
  
  
  background-color:#1C304C;
  border-radius: 0 10px 10px 0;
}

.style-8::-webkit-scrollbar-track
{
	border: 1px solid #1C304C;
	background-color: #1C304C;
}

.style-8::-webkit-scrollbar
{
	width: 0px;
	background-color: #1C304C;
}

.style-8::-webkit-scrollbar-thumb
{
	background-color: #1C304C;	
}

.sa{
	
	
}
a.empCH:hover{
	background-color:#514b95;
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
    min-height: 65vh;
	display: flex;
    flex-direction: column;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
	
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
    font-size: 18px;
}

span a{
	text-decoration:none;
}
</style>
        <!-- Sidebar -->
		<div class="" id="accordionSidebar" style="margin-top: 40px;">
        <ul class=" sidebar sidebarScroll sidebar-dark colorSidebar" id="accordionSidebar">

            <!-- Sidebar - Brand -->
          	<div class="row">
            <div class="col-lg-12" style="padding-right: .2rem; padding-left: .2rem;">
                <div class="text-center card-box" style="margin-top: 0px;">
                    <div class="member-card pt-2 pb-2">
                        <div class="thumb-lg member-thumb mx-auto">
					<?php if(!empty($EmployeeProfileImage->EmpProfileImage)){ ?>
						
						<img src="<?php echo base_url();?>upload/UserProfileImage/<?php  echo $EmployeeProfileImage->EmpProfileImage; ?>" class="rounded-circle img-thumbnail" alt="profile-image"></div>
						<?php } else{ ?>
						<img src="https://placehold.it/200x150?text=Aidernet" class="rounded-circle img-thumbnail" alt="profile-image"></div>
                        <?php } ?>
						
						<div class="">
                            <h4 style="margin-top: 20px; color: white;" style="font-size:16px;"><?php echo $UserInfo->name; ?></h4>
                            <p class="text-muted">Position <span>| </span><span><a href="#" class="text-pink" style="text-decoration: none;" style="font-size:15px;"><?php if(!empty($EmployeeDetails->position)){ echo $EmployeeDetails->position;} ?></a></span></p>
                        </div>
                       
                    </div>
                </div>
            </div>
            <!-- end col -->
           
            <!-- end col -->
        </div>
				
				
          

           
            <!-- Heading -->
            
            <!-- Nav Item - Pages Collapse Menu -->
            
            <!-- Nav Item - Utilities Collapse Menu -->
			<li class="nav-item" style="border-top: 1px solid #2e2869;">
                <a class="nav-link empCH  navPadding" href="#" >
                    
                    <span>TMS Dashboard</span>
                </a>
                
            </li>

            <!-- Divider -->
            
            <li class="nav-item">
                <a class="nav-link empCH collapsed" href="#" >
                    
                    <span>Invoice Dashboard</span>
                </a>
                
            </li>

            <!-- Divider -->
            
            <li class="nav-item">
                <a class="nav-link empCH collapsed" href="#" >
                    
                    <span>Aidernet Drive</span>
                </a>
                
            </li>

            
			

            <!-- Divider -->
            
			
            

        </ul>
        </div>
        <!-- End of Sidebar -->