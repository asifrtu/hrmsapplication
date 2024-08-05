	
   <!-- Page Wrapper -->
    <div id="wrapper">
	
	
    <style>

.Add_emp_button a {
  display: block;
  color: white;
  
  text-decoration: none;
}
.Add_emp_button{
    background: #7db135;
    color: white;
    font-weight: 400;
    border: none !important;
    margin-top: 15px;
    margin-left: 31px;
    margin-right: 49px;
    border-radius: 2px;
    margin-bottom: 15px;
    font-size: 13px;
    padding: 0.5em 0.5em 0.5em 0.5em;
}

.Add_emp_button:hover{
    box-shadow: 3px 3px 3px #3f6b00 inset;
    outline: 1px solid #6b6b6b!important;
    border-radius: 0px;
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border:none;
    
}
.sidebar .nav-item .nav-link {
    display: block;
    font-size: 14px;
    font-weight: 500;
    color: #e6d3ff;
    border-bottom: 1px solid #e6d3ff47;
    cursor: pointer;
    padding-bottom: 14px!important;
    padding-top: 14px!important;
}
a.SBhover:hover{
	background-color:#1C304C;
}
.nav-link {
	padding:0.75rem 0 0.75rem 2.0rem!important;
}              
 .sidebarScroll {
			
   margin-top:30px;
    margin-bottom: 50px;
    height: 405px;
    overflow-y: scroll;
    background-color: #1C304C!important;
    border-radius: 0 2px 2px 0;
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

.accordion{
    border-radius:0px 2px 0px 2px;
}
@media (min-width: 768px){
.sidebar .nav-item .nav-link {
    display: block;
    width: 100%;
    text-align: left;
    width: auto;
}
}
</style>
        <!-- Sidebar -->
		<div class="card displayNoneContent sidebarScroll accordion style-8 sidebar" id="accordionSidebar">
        <ul class="navbar-nav sidebar sidebar-dark" id="accordionSidebar">

           
			<li class="nav-item <?php if($page == 'HrAttendance'){ ?> current <?php } ?> ">
                <a class="active nav-link SBhover collapsed" href="<?=base_url('index.php/hrzone/Attendance/HrAttendance');?>" >
                    <span>Attendence</span>
                </a>
                
            </li>

            
			<li class="nav-item <?php if($page == 'employeeLeaveView'){ ?> current <?php } ?>">
                <a class="nav-link SBhover collapsed" href="<?=base_url('index.php/hrzone/Attendance/employeeLeaveView');?>" >
                    
                    <span>Leave request</span>
                </a>
                
            </li>
			
			<li class="nav-item <?php if($page == 'addLeave'){ ?> current <?php } ?>">
                <a class="nav-link SBhover collapsed" href="<?=base_url('index.php/hrzone/Attendance/addLeave');?>" >
                    
                    <span>Add Leave</span>
                </a>
                
            </li>
			
			<li class="nav-item <?php if($page == 'addUserAttendance'){ ?> current <?php } ?>">
                <a class="nav-link SBhover collapsed" href="<?=base_url('index.php/hrzone/Attendance/addUserAttendance');?>" >
                    
                    <span>Add User</span>
                </a>
                
            </li>
			
			
			
			
            <li class="nav-item <?php if($page == 'HCalendar'){ ?> current <?php } ?>">
                <a class="nav-link SBhover collapsed" href="<?=base_url('index.php/hrzone/Attendance/HCalendar');?>" >
                    
                    <span>Holiday Calender</span>
                </a>
                
            </li>

            <li class="nav-item <?php if($page == 'CalenderHR'){ ?> current <?php } ?>">
                <a class="nav-link SBhover collapsed" href="<?=base_url('index.php/hrzone/CalenderHR');?>" >
                    
                    <span>Event Calender</span>
                </a>
                
            </li>

            
            

        </ul>
        </div>
        <!-- End of Sidebar -->