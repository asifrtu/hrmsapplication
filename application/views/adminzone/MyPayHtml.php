
<?php include('header.php');?>
<?php  include('commonSidebar.php'); ?>

    <div class="col-lg-10 right_apply_ticket mb-3 " >

    <div class="employee_details">
            <span>My Pay</span>
        </div>

    

    <div class="container-fluid col-lg-12 ">
        <div class="mt-3 mb-2" style="color:#504a94">Remaining Leaves</div>
        <div class="row">

                    <div class="col-lg-2 mypay_boxes text-center" style="background-color: #00aeef;">
                        <h6>14</h6>
                        <span>Leaves</span>
                        <div style="background: #05a2dc;">
                          <h4>CASUAL</h4>
                        </div>
                        
                    </div>
                    <div class="col-lg-2 mypay_boxes text-center"  style="background-color: #e3ce21;">
                        <h6>14</h6>
                        <span>Leaves</span>
                        <div style="background: #d0bd1d;">
                          <h4>SICK</h4>
                        </div>
                        </div>
                    <div class="col-lg-2 mypay_boxes text-center"  style="background-color: #ec008c;">
                        <h6>14</h6>
                        <span>Leaves</span>
                        <div style="background: #d10f82;">
                          <h4>EARNED</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 mypay_boxes text-center"  style="background-color: #f89b22;">
                        <h6>14</h6>
                        <span>Leaves</span>
                        <div style="background: #e18a19;">
                          <h4>MID DAY</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 mypay_boxes text-center"  style="background-color: #fa7f7f;">
                        <h6>14</h6>
                        <span>Leaves</span>
                        <div style="background: #f76565;">
                          <h4>WITHOUT PAY</h4>
                        </div>
                    </div>

        </div>
        <hr style="margin-bottom: 20px; margin-top: 31px; background-color: #d3b6f8;"> 
    </div>


        <div class="container-fluid">
        <div class="color-scheme-mypay col-lg-4">
            <div class="color_scheme_div col-lg-3">
                <div class="circle_color_scheme_mypay" style="background-color: #e5ae4d;">

                </div>
                <span>Pending</span>
            </div>
            <div class="color_scheme_div col-lg-4 ">
                <div class="circle_color_scheme_mypay" style="background-color: #7cb133;">

                </div>
                <span>Completed</span>
            </div>

            <div class="color_scheme_div col-lg-3">
                <div class="circle_color_scheme_mypay" style="background-color: #3e83bf;">

                </div>
                <span>Current</span>
            </div>
    </div>
    <div class="row " style="justify-content: space-evenly;">

        <button class="col-lg-2 mypay_boxes text-center months_button" style="background-color: #fac15e; border: 1px solid #e5ae4d;">
            <h6>November</h6>
            <span>2021</span>
            <div style="background: #e5ae4d;">
              <h4>PENDING</h4>
            </div>
            
        </button>
        <button class="col-lg-2 mypay_boxes text-center months_button" style="background-color: #8dc63f;border: 1px solid #7cb133;">
            <h6>DECEMBER</h6>
            <span>2021</span>
            <div style="background: #7cb133;">
              <h4>COMPLETED</h4>
            </div>
        </button>
        <button class="col-lg-2 mypay_boxes text-center months_button" style="background-color: #448ccb; border: 1px solid #3e83bf; margin-bottom: -14px;">
            <h6>January</h6>
            <span>2022</span>
            <div style="background: #3e83bf;">
              <h4>CURRENT</h4>
            </div>
        </button>
        <button class="col-lg-2 mypay_boxes text-center months_button" style="background-color: #c2c2c2;    border: 1px solid #acacac;">
            <h6>FEBRUARY</h6>
            <span>2022</span>
            <div style="background: #acacac;">
              <h4>UPCOMING</h4>
            </div>
        </button>
        <button class="col-lg-2 mypay_boxes text-center months_button" style="background-color: #c2c2c2;    border: 1px solid #acacac;">
            <h6>MARCH</h6>
            <span>2022</span>
            <div style="background: #acacac;">
              <h4>UPCOMING</h4>
            </div>
        </button>
        <button class="col-lg-2 mypay_boxes text-center months_button" style="background-color: #c2c2c2;    border: 1px solid #acacac;">
            <h6>APRIL</h6>
            <span>2022</span>
            <div style="background: #acacac;">
              <h4>UPCOMING</h4>
            </div>
        </button>

    

</div>
<div class="selector"></div>
</div>

    <div class="Apply_ticket_main container-fluid " style=" margin-bottom: 40px;">
        <table class="table">
        <thead class="courses">
			<tr>
            <th>Current Month Payroll</th>
            <th>CL</th>
            <th>EL</th>
            <th>MD</th>
            <th>LWP</th>
            <th>Working Days</th>
            <th>Pay Roll</th>
            <th>Gross Per Month</th>
			</tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
          
                
        </tbody>
        </table>
    </div>

<div class="previous_month_sallary_slip">
<span>Previous Months</span>
</div>

<div class="Apply_ticket_main container-fluid " style="margin-top: 20px;">
   
    <div class="d-flex flex-row-reverse">
        <button class="year_select" style="border: 1px solid #ddd;" alt="previous Year"><i class="fas fa-chevron-right"></i></button>
        <button class="year_select" style="border: 1px solid #ddd;" alt="next Year"><i class="fas fa-chevron-left"></i></button>
    </div>

    <table class="table">
    <thead class="courses">
        <tr>
        <th>Month</th>
        <th>CL</th>
        <th>EL</th>
        <th>MD</th>
        <th>LWP</th>
        <th>Working Days</th>
        <th>Pay Roll</th>
        <th>Gross Per Month</th>
        <th colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td class="text-center"><i class="far fa-eye"></i></td>
            <td class="text-center"><i class="fas fa-download"></i></td>
        </tr>
      
            
    </tbody>
    </table>
</div>

<footer class="fixed-bottom py-1 ">
    <p style="margin-bottom: 0px;">HR HELP 24x7</p>
    </footer>
    </div>
    <script>
        function myFunction() {
          var x = document.getElementById("myLink");
          if (x.style.display === "block") {
            x.style.display = "none";
          } else {
            x.style.display = "block";
          }
        }
        </script>
    </body>
    </html>