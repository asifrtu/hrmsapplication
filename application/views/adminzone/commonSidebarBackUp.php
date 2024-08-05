
   <!-- Page Wrapper -->
    <div id="wrapper">
<style>
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
a.empCH:hover{
	background-color:#514b95;
}
.nav-link{
	padding:0.75rem 0 0.75rem 2.9rem!important;
}
.sidebar .nav-item{
	 border-bottom: 1px solid #2e2869;
}                
 .sidebarScroll {
			
  margin-top:50px;
  margin-bottom:50px;
  width: 226px!important;
  height: 405px;
  overflow-y: scroll;
  background-color:#3d3780;
  border-radius: 0 10px 10px 0;
}
.style-8::-webkit-scrollbar-track
{
	border: 1px solid #6f42c1;
	background-color: #6f42c1;
}

.style-8::-webkit-scrollbar
{
	width: 0px;
	background-color: #6f42c1;
}

.style-8::-webkit-scrollbar-thumb
{
	background-color: #6f42c1;	
}

 
 </style>
        <!-- Sidebar -->
		<div class="card sidebarScroll accordion style-8 sidebar" id="accordionSidebar">
        <ul class="navbar-nav sidebar sidebar-dark" id="accordionSidebar">

           
			<li class="nav-item">
                <a class="active nav-link empCH collapsed" href="<?=base_url('index.php/adminzone/dashboard/about');?>" >
                    <span>My Information</span>
                </a>
                
            </li>

            <!-- Divider -->
            
            <li class="nav-item">
                <a class="nav-link empCH collapsed" href="<?=base_url('index.php/adminzone/dashboard/myPay');?>" >
                    
                    <span>My Pay</span>
                </a>
                
            </li>

            <!-- Divider -->
            
            <li class="nav-item">
                <a class="nav-link empCH collapsed" href="#" 
				data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    
                    <span>My Calendar</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar" >
                    
                        
				<a class="nav-link empCH collapsed" style=" color:yellow!important; border-top: 1px solid #2e2869;" href="<?=base_url('index.php/adminzone/dashboard/employeeAttendence');?>" >
                    
                    <span>Attendence</span>
                </a>
                
                
				<a class="nav-link empCH collapsed" style=" color:yellow!important; border-top: 1px solid #2e2869;" href="<?=base_url('index.php/adminzone/dashboard/applyLeave');?>" >
                    
                    <span>Apply Leave</span>
                </a>
                <a class="nav-link empCH collapsed" style=" color:yellow!important; border-top: 1px solid #2e2869;" href="<?=base_url('index.php/adminzone/dashboard/calender');?>" >
                    
                    <span>Calendar</span>
                </a>    
                </div>
            </li>

            <!-- Divider -->
            
            <li class="nav-item">
                <a class="nav-link empCH collapsed" href="<?=base_url('index.php/adminzone/dashboard/EmployeeTimeList');?>" >
                    
                    <span>My Time</span>
                </a>
                
            </li>

            <!-- Divider -->
            
            <li class="nav-item">
                <a class="nav-link empCH collapsed" href="<?=base_url('index.php/adminzone/dashboard/myTeam');?>" >
                    
                    <span>My Team</span>
                </a>
                
            </li>

            <!-- Divider -->
            
            <li class="nav-item">
                <a class="nav-link empCH collapsed" href="<?=base_url('index.php/adminzone/dashboard/myForm');?>" >
                    
                    <span>My Forms</span>
                </a>
                
            </li>

            <!-- Divider -->
            
            <li class="nav-item">
                <a class="nav-link empCH collapsed" href="<?=base_url('index.php/adminzone/dashboard/HRPolicy');?>" >
                    
                    <span>HR Policy</span>
                </a>
                
            </li>

            <!-- Divider -->
            
            <li class="nav-item">
                <a class="nav-link empCH collapsed" href="<?=base_url('index.php/adminzone/dashboard/myGoals');?>" >
                    
                    <span>My Goals</span>
                </a>
                
            </li>

            <!-- Divider -->
            
            <li class="nav-item">
                <a class="nav-link empCH collapsed" href="<?=base_url('index.php/adminzone/dashboard/myTicket');?>" >
                    
                    <span>My Ticket</span>
                </a>
                
            </li>

            <!-- Divider -->
            
            <li class="nav-item">
                <a class="nav-link empCH sa collapsed" href="#" 
				data-toggle="collapse" data-target="#collapseFeedback"
                    aria-expanded="true" aria-controls="collapseFeedback">
                    
                    <span>Feedback</span>
                </a>
                <div id="collapseFeedback" class="collapse" aria-labelledby="headingFeedback"
                    data-parent="#accordionSidebar" >
                    
                        
                <a class="nav-link empCH collapsed" style=" color:yellow!important; border-top: 1px solid #2e2869;" href="<?=base_url('index.php/adminzone/dashboard/Feedback');?>" >
                    
                    <span>Feedback</span>
                </a>
                <a class="nav-link empCH collapsed" style=" color:yellow!important; border-top: 1px solid #2e2869;" href="<?=base_url('index.php/adminzone/dashboard/Appraisal');?>" >
                    
                    <span>Appraisal</span>
                </a>
                    
                </div>
            </li><!-- Divider -->
            
            

        </ul>
        </div>
        <!-- End of Sidebar -->