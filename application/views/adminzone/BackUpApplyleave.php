
<?php  include('header.php');   ?>

<?php include ('commonSidebar.php'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>  
 <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>  
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
 
 <style>
.bootstrap-select:not([class*=col-]):not([class*=form-control]):not(.input-group-btn) {
    width: 133px;
}

.col-lg-6{
	padding-right: 0.01rem;
    padding-left: 0.01rem;
}
.col-lg-12{
	padding-right: 0.01rem;
    padding-left: 0.01rem;
}


}
 </style>
    <div class="col-lg-10 right_apply_ticket " >

            <div class="employee_details">
                <span> Apply Leave</span>
            </div>

            <div class="ticket-apply-note">
                <span>Apply for leave or time off from work. Views your application status and known your current leave balance when you apply for new leave. </span>
            </div>
            <?php if(!empty($this->session->flashdata('message'))) { ?>
			
			
                <?=$this->session->flashdata('message');?>
                
            <?php } ?>
                
            <div class="col-lg-12">
            <div>
            <a href="javascript:void(0)" class="addEmpSubmitBtn" data-toggle="modal" data-target="#myModal">
               <button  class="apply_leave_button">Apply Leave</button>
               </a>
           </div>



      
        <div class="apply_leave_table">
            <table class="table">
                <thead class="courses">
                    <tr>
                        <th>S.No</th>
                       <th>Action date</th>
                       <th>Start date</th>
                       <th>End date</th>
                       <th>Days</th>
                       <th>To</th>
                       <th>Status</th>
                       <th>Leave Type</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($leaveEmpData)):  ?>
									
											<?php	
											$SNo = 1;
											
											foreach($leaveEmpData as $emp): ?>
                    <tr>
                        <td><?php  echo $SNo; ?></td>
                        <td><?php					
                            $date=date_create($emp->created_at);					
                            echo date_format($date,"d-m-Y"); ?></td>
                        <td><?php  echo $emp->StartDate; ?></td>
                        <td><?php  echo $emp->EndDate; ?></td>
                        <td>
                            <?php  
                                $startDate  = new DateTime($emp->StartDate);
                                $endDate = new DateTime($emp->EndDate);
                                $diff = $startDate->diff($endDate);
                            echo $diff->d + 1; ?>
                        </td>
                        <td><?php  echo $emp->org_Email; ?></td>
                        <td><?php  echo $emp->leaveStatus; ?></td>
                        <td><?php  echo $emp->LeaveType; ?></td>
                    </tr>
                    <?php  $SNo++; endforeach;  ?>
										<?php else: ?>
										<tr>
										<td colspan="3">Data is Not Available</td>
										<?php endif; ?>

										</tr>
                </tbody>
            </table>
        </div>
                <div>
                    <p style="margin-bottom:5px; margin-top:20px; color:#1C304C;">Remaining Leaves</p>
                </div>
                <!-- <hr style="margin-bottom: 10px; background-color: #d3b6f8;">  -->
           <div class="leaves_dashboard">
                <div class="row" style="margin-bottom:16px;">

                    <div class="col-lg-4 col-md-6" >
                    <div class="CLEL_token"  style=" border: 2px solid #60c0df;" >
                    <div class="tokens_and_allowed_days" >
                            <p class="allowed" style="color:#007385;">10 Days Allowed</p>
                            </div>
                            <div class="text-center">
                        <a href="#" class="btn btn-info btn-circle" style="width: 80px; border-radius: 50%;font-size: 44px;height: 80px;">
                            <?php echo $getUserCLEL->CL;?>
                            </a>
                            <p class="tokensIHave" >You Have <?php echo $getUserCLEL->CL;?> Tokens</p>
                          </div>
                         
                            </div>
                                <div class=" CLEL_board1">
                                    <h6 class="m-0 font-weight-bold ColorPrimary">CASUAL LEAVES</h6>
                                    </div>
                    </div>

                    <div class="col-lg-4 col-md-6" >
                        <div class="CLEL_token" style=" border: 2px solid #FC0B4D;">
                        <div class="tokens_and_allowed_days" >
                            <p class="allowed" style="color:#d1043c;">7 Days Allowed</p>
                            </div>
                            <div class="text-center">
                            <a href="#" class="btn btn-circle earned_leaves" style="color: white; background-color:#FC0B4D;  width: 80px; border-radius: 50%;font-size: 44px;height: 80px;">
                            <?php echo $getUserCLEL->EL;?>
                            </a>
                            <p class="tokensIHave" >You Have  <?php echo $getUserCLEL->EL;?> Tokens</p>
                            </div>

                        
                            </div>
                            <div class=" CLEL_board2 col-lg-12">
								<h6 class="m-0 font-weight-bold ColorPrimary">EARNED LEAVES</h6>
								</div>
                    </div>


                </div>
           </div>
                
          

    </div>

</div>
</div>
</div>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog col-lg-5">

    <!-- Modal content-->
    <div class="modal-content" style="margin-top:100px;">

    
    <div class="" style="padding: .5rem 1.25rem .25rem 1.25rem; border-radius: calc(.1rem - 1px) calc(.1rem - 1px) 0 0; background:#3e028c;">
<div class="row apply_ticket_form_heading">
<h6 style="background-color: rgb(62 2 140);">Apply Leave Request</h6>
<button  type="button" class="close apply_ticket_close_button" data-bs-dismiss="modal">×</button>
</div>
</div>
    <div class="modal-body apply_forms">
    <?php echo form_open_multipart('adminzone/EmployeeAttendance/userLeaveApply'); ?>
   
              
    <div class="row ">

<div class="col-lg-12 selectBox">

<div class="form-group">
<label>Reason Of Leave<span>*</span> </label>
<select class="empInput form-control" id="selectForm" name="ReasonOfLeave" id="insertReasonOfLeave" style="border: 1px solid #858796;">
  <option>Select</option>
  <option>Sir, I am not well today...</option>
  <option>Family member is not well...</option>
  <option>Parent's doctor appointment...</option>
  <option>Some Happening in my relative...</option>
  <option>Stuck in traffic!...</option>
  <option>Adverse House Situations...</option>
  <option value="otherOption">Others...</option>
  </select>
</div>


</div>
<div class="col-lg-12 form-box otherOption" >

<div class="form-group">
<label>Subject<span>*</span> </label>
<input type="text"  id="insertSubject" name="ReasonOfOther" class="empInput form-control" style="border: 1px solid #858796; " >
</div>


</div>
</div>
    
<div class="row ">

<div class="col-lg-6">

<div class="form-group">
<label>Start Date <span>*</span> </label>
<input type="date" name="StartDate" id="insertStartDate" class="empInput form-control" style="border: 1px solid #858796;">
</div>


</div><div class="col-lg-6">

<div class="form-group">
<label>End Date <span>*</span> </label>
<input type="date" name="EndDate" id="insertEndDate" class="empInput form-control" style="border: 1px solid #858796;">
</div>


</div>
</div>
<div class="row ">

<div class="col-lg-6">

<div class="form-group">
<label>Requested Days <span>*</span> </label>
<input type="text" name="RequestedDay" value="" id="insertRequestedDay" class="empInput form-control" style="border: 1px solid #858796;">
</div>


</div><div class="col-lg-6">

<div class="form-group">
<label>To<span>*</span> </label>
    <div style="display:flex; justify-content:space-between;">
    
<select class="empInput form-control" name="org_Email" id="insertOrg_Email" style="border: 1px solid #858796;">
  <option>Select</option>
  <option>HR</option>
  <option>Manager</option>
  <option>Team Leader</option>
  </select>
    </div>
</div>


</div>
</div>
<div class="row">

<div class="col-lg-6">
<div class="form-group">
<label>Leave Type <span>*</span></label>
   <select id="framework" name="LeaveType[]" multiple class="selectpicker" >
  <option>Select</option>
  <option>CL</option>
  <option>EL</option>
  <option>MD</option>
  <option>LWP</option>
 
  </select>
</div>
</div>
    
<div class="col-lg-6">

<div class="form-group">
<label>Upload</label>
<input type="file" name="filePath[]" id="insertuserFile" class="uploadInput " >
</div>


</div>



</div>


  


<div class="row">
<div class="col-lg-12">

<div class="form-group">
<label>Description <span>*</span></label>
<textarea class=" form-control empdescp" name="Description" id="insertDescription" rows="3" style="border: 1px solid #858796;"></textarea>
</div>


</div>
</div>
    <!-- <div>
    <div class="Upload_section">
    <h6 class="m-0 font-weight-bold" style="margin:15px 0;">Upload Documents</h6>
    <i class="fas fa-upload"></i>
    </div>
    </div> -->

    <div>
    <div class="text-center" style="padding-top:12px;padding-bottom:16px;">
    <button type="submit" id="#" name="submit" class="btn btn-default leaveApplySubmitBtn  ">Submit</button>
    </div>
    </div>
    </div>
    





    <!-- Content Row -->
    



    </div>

    </div>
     <script>
$(document).ready(function(){
 
 
 $('#insertOrg_Email').click(function(){
	var insertStartDate_val = $("#insertStartDate").val();
	var insertEndDate_val = $("#insertEndDate").val();
	 var date1 = new Date(insertStartDate_val);
var date2 = new Date(insertEndDate_val); //less than 1
var start = Math.floor(date1.getTime() / (3600 * 24 * 1000)); //days as integer from..
var end = Math.floor(date2.getTime() / (3600 * 24 * 1000)); //days as integer from..
var daysDiff = end - start; // exact dates
console.log(daysDiff);
const daysDifference = daysDiff + 1;
$('#insertRequestedDay').val(daysDifference);
 });
 
 
 $('#frameworkUpdate').selectpicker();
 
 $('.otherOption').hide();
});










</script>
	
	<script type="text/javascript">
       
	$("#insertStartDate").click(function(){
	
	var st = $('#insertStartDate').val();
	// var en = $('#insertEndDate').val();
	
	// var startdate = st.getDate();
	
	// var endDate = en.getDate();
	// var toCal = endDate - startdate;
	// document.getElementById("reqDays").innerHTML = st.getDate();
	// $('#reqDays').show(toCal);
	console.log(st);
	// console.log(startdate);
	// applyDateCal(startdate, endDate)
	// var endDate = $(this).attr('data-LeaveId');
});	
	
$(document).ready(function(){




$("#btnLeaveApply").click(function(){

let frm = $("#Image-myform")[0];
let frmDt = new FormData(frm);


$.ajax({
type: "post",
url: "<?=site_url('adminzone/EmployeeAttendance/userLeaveApply');?>",
data: frmDt,
dataType: "json",
cache: false,
contentType: false,
processData: false,
beforeSend: () => {
$("#btnLeaveApply").text("Uploading....");
$("btnLeaveApply").attr("disabled", true);
},

complete: () => {
$("#btnLeaveApply").text("Upload");
$("#btnLeaveApply").attr("disabled", false);
},

success: response => {


$("#myModal").hide('modal');
location.reload();

},
error: error => {
console.log("Error", error);
}
});
});	

  
});	
	
    </script>
<script>
        $(function() {
            $('#selectForm').change(function() {
                let SelectedForm = $(this).find('option:selected').val();
                $('.form-box').hide();
                $('.' + SelectedForm).show();
            })
        });
    </script>
    
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

<script type="text/javascript">

function changetextbox() { 

if (document.getElementById("insertReasonOfLeave").value === " ")

{         document.getElementById("insertSubject").disabled='true';

} else {  

      document.getElementById("insertSubject").disabled=''; }

} </script>




    </body>
    </html>