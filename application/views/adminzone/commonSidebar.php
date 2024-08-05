
<div class=" container-fluid marginCommanTop">
<div class="row col-lg-12" style="padding-left: 0rem;">
<div class="innerLeft col-lg-2 col-md-6 displayNoneContent">
                    <div class="common_slider">
                    <a href="<?php echo base_url() ?>index.php/adminzone/EmployeeInfo/AboutMe"> <div class="links">
          <span> My Information</span> 
        </div></a>

        <a href="<?php echo base_url() ?>index.php/adminzone/Ticket/EmployeeTicket">   <div class="links">
           <span>My Tickets</span>
        </div></a>

        <div class="Sidebar_dropdown">
           <div onclick="myFunction3()" style=" display: flex; justify-content: space-between;">
               <button  class="dropbtn_common_sidebar">Attandance </button> <i class="fas fa-caret-down"></i>
               </div>
               <div id="common_sidebar_dropdown2" class="dropdwn-content">
                  <a href="<?php echo base_url() ?>index.php/adminzone/EmployeeAttendance/myAttendance"> <div class="sidebar_sub_dropdown"> My Attandance </div></a>
                  <a href="<?=base_url('index.php/adminzone/EmployeeAttendance/EmployeeApplyLeave');?>"> <div class="sidebar_sub_dropdown"> Apply Leave </div> </a>
               </div>
               </div>

        <a href="<?php echo base_url() ?>index.php/adminzone/EventController">   <div  class="links">
           <span>My Calendar</span>
        </div></a>


        <a href="<?php echo base_url() ?>index.php/adminzone/EmployeeAttendance/EmployeePay">  <div class="links">
           <span>My Pay</span>
        </div></a>
        <a href="<?php echo base_url() ?>index.php/adminzone/EmployeeAttendance/EmployeeTimeList"> <div class="links">
           <span>My Time</span>
        </div></a>
        <div class="Sidebar_dropdown">
        <div onclick="myFunction1()" style=" display: flex; justify-content: space-between;">
               <button class="dropbtn_common_sidebar">Files </button><i class="fas fa-caret-down"></i>
            </div>
               <div id="common_sidebar_dropdown" class="dropdwn-content">
                  <a href="<?=base_url('index.php/adminzone/DocFile/singleEmployeeDoc');?>"> <div class="sidebar_sub_dropdown"> My Documents </div></a>
                  <a href="<?=base_url('index.php/adminzone/dashboard/files');?>"> <div class="sidebar_sub_dropdown"> Company Files </div> </a>
                  <a href="<?=base_url('index.php/adminzone/dashboard/HRPolicy');?>"> <div class="sidebar_sub_dropdown"> HR Policy </div></a>
               </div>
               </div>

               <div class="Sidebar_dropdown">
               <div onclick="myFunction2()" style=" display: flex; justify-content: space-between;">
               <button class="dropbtn_common_sidebar">KPI </button>
               <i class="fas fa-caret-down"></i>
               </div>
               <div id="common_sidebar_dropdown1" class="dropdwn-content">
                  <a href="<?=base_url('index.php/adminzone/EmployeeInfo/CompanyGoals');?>"> <div class="sidebar_sub_dropdown"> Company Goals </div></a>
                  <a href="<?=base_url('index.php/adminzone/EmployeeInfo/TeamYearlyGoals');?>"> <div class="sidebar_sub_dropdown"> Team Goals </div> </a>
                  <a href="<?=base_url('index.php/adminzone/EmployeeInfo/KPI');?>"> <div class="sidebar_sub_dropdown">My KPI  </div></a>
               </div>
               </div>
              
                        
                    </div>
        </div>
        <script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */

function myFunction1() {
  document.getElementById("common_sidebar_dropdown").classList.toggle("drop_show");
 
}
function myFunction2() {
  document.getElementById("common_sidebar_dropdown1").classList.toggle("drop_show");
 
}
function myFunction3() {
  document.getElementById("common_sidebar_dropdown2").classList.toggle("drop_show");
 
}


</script>
