<?php include('header.php');   ?>

<?php include('commonSidebar.php'); ?>
<link href="<?= base_url("Assets/css/bootstrap-datetimepicker.min.css") ?>" rel="stylesheet" media="screen">
<link href="<?= base_url("Assets/css/bootstrap-datetimepicker.css") ?>" rel="stylesheet" media="screen">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script type="text/javascript" src="<?= base_url("Assets/js/bootstrap-datetimepicker.js") ?>" charset="UTF-8"></script>
<script type="text/javascript" src="<?= base_url("Assets/js/bootstrap-datetimepicker.min.js") ?>" charset="UTF-8"></script>


<style>
	.bootstrap-select:not([class*=col-]):not([class*=form-control]):not(.input-group-btn) {
		width: 133px;
	}

	.leaveApplyInput {
		height: calc(1em + 0.75rem + 2px) !important;
		border-radius: 2px !important;
		border: 1px solid #9c50ff94;
	}

	.empdescpLeave {
		border-radius: 2px;
		border: 1px solid #9c50ff94;
	}

	.status {
		width: 100%;
		padding: 12px;
		color: white;
		font-size: 13px;
		letter-spacing: 1px;
	}

	.Pending {
		background: #ffa218!important;
		color: white!important;
	}

	.Approval {
		background: #7db135!important;
		color: white!important;
	}

	.Decline {
		background: #e35446!important;
		color: white!important;
	}
	@media screen and (max-width: 792px) {
	.table thead th {
		padding: 5px 2px !important;
    	font-size: 12px;
	}
	.table tbody td {
    	padding: 8px 0px !important;
	}
	}
</style>
<div class="col-lg-10 right_apply_ticket ">
	<div class="card-header ColorSecondaryPre">
		<div class="d-flex">
			<div><a href="<?= site_url('hrzone/dashboard/wall'); ?>" style="color: #fff;font-size: 15px;"><i class="fa fa-home" aria-hidden="true"></i></a></div>
			<div> &nbsp;&nbsp;<i style="font-size: 10px;color: #00d3c3;" class="fas fa-chevron-right"></i><span class="breadcrumb_text" style="font-size: 15px;color: #00d3c3;font-weight: 600;">&nbsp; Apply Leave</span></div>
		</div>
	</div>


	<div class="ticket-apply-note">
		<span>Apply for leave or time off from work. Views your application status and known your current leave balance when you apply for new leave. </span>
	</div>
	<?php if (!empty($this->session->flashdata('message'))) { ?>


		<?= $this->session->flashdata('message'); ?>

	<?php } ?>

	<div class="col-lg-12">
		<div>
			<a href="javascript:void(0)" class="addEmpSubmitBtn" data-toggle="modal" data-target="#myModal">
				<button class="apply_leave_button">Apply Leave</button>
			</a>
		</div>




		<div class="apply_leave_table table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th class="">S.No</th>
						<th class="displayNoneContent">Action date</th>
						<th>From</th>
						<th>To</th>
						<th>Days</th>
						<th>To</th>
						<th>Status</th>
						<th>Leave</th>
					</tr>
				</thead>
				<tbody>
					<?php if (!empty($leaveEmpData)) :  ?>

						<?php
						$SNo = 1;

						foreach ($leaveEmpData as $emp) : ?>
							<tr>
								<td class=""><?php echo $SNo; ?></td>
								<td class="displayNoneContent"><?php
																$date = date_create($emp->created_at);
																echo date_format($date, "d-M-Y"); ?></td>
								<td><?php echo date_format(date_create($emp->StartDate), "d-M-y"); ?></td>
								<td><?php echo date_format(date_create($emp->EndDate), "d-M-y"); ?></td>
								<td>
									<?php
									$startDate  = new DateTime($emp->StartDate);
									$endDate = new DateTime($emp->EndDate);
									$diff = $startDate->diff($endDate);
									echo $diff->d + 1; ?>
								</td>
								<td><?php echo $emp->org_Email; ?></td>
								<td class="<?= $emp->leaveStatus ?>">
									<?php if ($emp->leaveStatus == "Pending") { ?>
										Pending
									<?php } elseif ($emp->leaveStatus == "Decline") { ?>
										Decline
									<?php } elseif ($emp->leaveStatus == "Approve") { ?>
										Approve
									<?php	}  ?>

								</td>
								<td><?php echo $emp->LeaveType; ?></td>
							</tr>
						<?php $SNo++;
						endforeach;  ?>
					<?php else : ?>
						<tr>
							<td colspan="3">Data is Not Available</td>
						<?php endif; ?>

						</tr>
				</tbody>
			</table>
		</div>



	</div>

</div>
</div>
</div>

<div class="modal fade" id="myModal" role="dialog">
	<div class="modal-dialog col-lg-5">

		<!-- Modal content-->
		<div class="modal-content" style="margin-top: 100px;">

		<div class="modal-header">
                <h5 class="modal-title">Apply Leave Request</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>			
			
			<div class="modal-body apply_forms">

				<form id="Image-myform">
					<div class="row ">

						<div class="col-lg-12 selectBox">

							<div class="form-group">
								<label>Reason Of Leave<span>*</span> </label>
								<select class="leaveApplyInput form-control" name="ReasonOfLeave" id="selectForm">
									<option>Select</option>
									<option>Personal or family health problems</option>
									<option>The loss of a loved one</option>
									<option>Wanting to travel</option>
									<option>Stuck in traffic!</option>
									<option value="otherOption">Other...</option>
								</select>
							</div>


						</div>
						<div class="col-lg-12 form-box otherOption">

							<div class="form-group">
								<label>Other reason of leave<span>*</span> </label>
								<input type="text" id="insertSubject" name="ReasonOfOther" class="leaveApplyInput form-control" style="border: 1px solid #858796; ">
							</div>


						</div>
					</div>

					<div class="row ">

						<div class="col-lg-6">

							<div class="form-group">
								<label>Start Date <span>*</span> </label>
								<input type="text" name="StartDate" id="insertStartDate" data-date="" data-date-format="dd-MM-yyyy" data-link-field="dtp_input2" data-link-format="yyyy-MM-dd" class="form_date leaveApplyInput form-control" style="border: 1px solid #858796;">
							</div>


						</div>
						<div class="col-lg-6">

							<div class="form-group">
								<label>End Date <span>*</span> </label>
								<input type="text" name="EndDate" id="insertEndDate" class="form_date leaveApplyInput form-control" data-date="" data-date-format="dd-MM-yyyy" data-link-field="dtp_input2" data-link-format="yyyy-MM-dd" style="border: 1px solid #858796;">
							</div>


						</div>
					</div>
					<div class="row ">

						<div class="col-lg-6">

							<div class="form-group">
								<label>Requested Days <span>*</span> </label>
								<input type="text" name="RequestedDay" id="insertRequestedDay" class="leaveApplyInput form-control" style="border: 1px solid #858796;">
							</div>


						</div>
						<div class="col-lg-6">

							<div class="form-group">
								<label>To<span>*</span> </label>
								<div style="display:flex; justify-content:space-between;">

									<select class="leaveApplyInput form-control" name="org_Email" id="insertAdmin" style="border: 1px solid #858796;">
										<option value="">Select</option>
										<option>HR</option>
										<option>Admin</option>
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
								<select id="framework" name="LeaveType[]" multiple class=" selectpicker">
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
								<input type="file" name="filePath[]" id="insertuserFile" class="uploadInput ">
							</div>


						</div>



					</div>





					<div class="row">
						<div class="col-lg-12">

							<div class="form-group">
								<label>Description <span>*</span></label>
								<textarea class="empdescpLeave form-control" name="Description" id="insertDescription" rows="2"></textarea>
							</div>
							<div class="row">
								<div class="col-lg-12">

									<div class="form-group">
										<p style="border:1px solid #858796; text-align:center; font-size:12px; font-weight:300;" id="leaveStatus"></p>
									</div>
								</div>
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
							<input type="button" id="btnLeaveApply" class="btn btn-default leaveApplySubmitBtn" value="Submit">
						</div>



					</div>
			</div>






			<!-- Content Row -->




		</div>

	</div>


	<script>
		$('.form_date').datetimepicker({
			language: 'fr',
			weekStart: 1,
			todayBtn: 1,
			autoclose: 1,
			todayHighlight: 1,
			startView: 2,
			startDate: "<?php echo date("Y-m-d") ?>",
			minView: 2,
			forceParse: 0
		});



		$(document).ready(function() {

			// $('#leaveStatus').hide();

			$('#insertAdmin').click(function() {
				var insertStartDate_val = $("#insertStartDate").val();
				console.log(insertStartDate_val);
				var insertEndDate_val = $("#insertEndDate").val();
				console.log(insertEndDate_val);
				var date1 = new Date(insertStartDate_val);
				var date2 = new Date(insertEndDate_val); //less than 1
				console.log(date1);
				console.log(date2);
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
		var data = [];
		$("#insertStartDate").click(function() {

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

		$(document).ready(function() {


			$("body").on('click', '#insertEndDate', function() {
				var insertStartDate_val = $("#insertStartDate").val();
				var ajaxurl = "<?= site_url('adminzone/EmployeeAttendance/getEmployeeLeave'); ?>";
				$.ajax({
					type: "post",
					url: ajaxurl,
					data: {
						insertStartDate_val: insertStartDate_val
					},
					dataType: "JSON",
					success: function(data) {


					}

				}).done(function(response) {
					data = response;
					console.log(response.CL);

				});

			});
			// selectForm insertStartDate insertEndDate insertAdmin framework insertDescription
			var selectForm_error = true;
			var insertStartDate_error = true;
			var insertEndDate_error = true;
			var insertAdmin_error = true;
			var framework_error = true;
			var insertDescription_error = true;

			$("#selectForm").click(function() {
				selectForm_check();
			});

			function selectForm_check() {
				var selectForm_val = $("#selectForm").val();

				if (selectForm_val == "Select") {
					// alert("Dekh bhaiii");
					$("#selectForm").css("border-color", "red");
					selectForm_error = false;
					return false;

				} else {
					$("#selectForm").css("border-color", "green");
					return true;
				}

			}


			$("#insertStartDate").click(function() {
				insertStartDate_check();
			});

			function insertStartDate_check() {
				var insertStartDate_val = $("#insertStartDate").val();

				if (insertStartDate_val == "") {
					$("#insertStartDate").css({
						'border-color': 'red',
						'font-size': '12px'
					});
					insertStartDate_error = false;
					return false;

				} else {
					$("#insertStartDate").css({
						'border-color': 'green',
						'font-size': '13px'
					});
					return true;
				}

			}



			$("#insertEndDate").click(function() {
				insertEndDate_check();
			});

			function insertEndDate_check() {
				var insertEndDate_val = $("#insertEndDate").val();

				if (insertEndDate_val == "") {
					$("#insertEndDate").css({
						'border-color': 'red',
						'font-size': '12px'
					});
					insertEndDate_error = false;
					return false;

				} else {
					$("#insertEndDate").css({
						'border-color': 'green',
						'font-size': '13px'
					});
					return true;
				}

			}

			$("#insertAdmin").click(function() {
				insertAdmin_check();
			});

			function insertAdmin_check() {
				var insertAdmin_val = $("#insertAdmin").val();

				if (insertAdmin_val == "") {
					$("#insertAdmin").css("border-color", "red");
					insertAdmin_error = false;
					return false;

				} else {
					$("#insertAdmin").css("border-color", "green");
					return true;
				}

			}



			$("#framework").click(function() {
				framework_check();
			});

			function framework_check() {

				var insertStartDate_val = $("#insertStartDate").val();
				// console.log(insertStartDate_val);
				var insertEndDate_val = $("#insertEndDate").val();
				// console.log(insertEndDate_val);
				var date1 = new Date(insertStartDate_val);
				var date2 = new Date(insertEndDate_val); //less than 1
				// console.log(date1);
				// console.log(date2);
				var start = Math.floor(date1.getTime() / (3600 * 24 * 1000)); //days as integer from..
				var end = Math.floor(date2.getTime() / (3600 * 24 * 1000)); //days as integer from..
				var daysDiff = end - start; // exact dates
				var daysDifference = daysDiff + 1;
				// console.log(daysDifference);



				var framework_val = $("#framework").val();
				// console.log(framework_val);
				var leaveCL = framework_val.find(checkCL);
				// console.log(leaveCL);
				var leaveEL = framework_val.find(checkEL);
				// console.log(leaveEL);
				var leaveMD = framework_val.find(checkMD);
				// console.log(leaveMD);
				var leaveLWP = framework_val.find(checkLWP);
				// console.log(leaveLWP);
				function checkCL(argCL) {
					return argCL === 'CL';
				}

				function checkEL(argEL) {
					return argEL === 'EL';
				}

				function checkMD(argMD) {
					return argMD === 'MD';
				}

				function checkLWP(argLWP) {
					return argLWP === 'LWP';
				}



				if (framework_val.length != 0) {

					if (leaveCL == 'CL' && leaveEL != 'EL' && leaveLWP != 'LWP' && leaveMD != 'MD') {
						if (daysDifference <= data.CL) {
							// $("#framework").css("border-color", "green");
							$(".show-tick").css("border", "1px solid green");
							$('#leaveStatus').text('');
							return true;
						} else {
							$(".show-tick").css("border", "1px solid red");
							$('#leaveStatus').text('You dont have as much CL as you applied for leave!');
							framework_error = false;
							return false;
						}

						// console.log(data.CL);
						// console.log(leaveEL);
						// console.log(leaveLWP);

					} else if (leaveCL != 'CL' && leaveEL == 'EL' && leaveLWP != 'LWP' && leaveMD != 'MD') {
						if (daysDifference <= data.EL) {
							// $("#framework").css("border-color", "green");
							$(".show-tick").css("border", "1px solid green");
							$('#leaveStatus').text('');
							// $('#leaveStatus').hide();
							return true;
						} else {
							$(".show-tick").css("border", "1px solid red");
							$('#leaveStatus').text('You dont have as much EL as you applied for leave!');
							framework_error = false;
							return false;
						}
						// console.log(leaveCL);
						// console.log(leaveEL);
						// console.log(leaveLWP);
						// $("#framework").css("border-color", "green");
						// return true;
					} else if (leaveCL == 'CL' && leaveEL == 'EL' && leaveLWP != 'LWP' && leaveMD != 'MD') {
						var dataLeaveCl = data.CL + data.EL;
						if (daysDifference <= dataLeaveCl) {
							$(".show-tick").css("border", "1px solid green");
							$('#leaveStatus').text('');
							return true;
						} else {
							$(".show-tick").css("border", "1px solid red");
							$('#leaveStatus').text('You dont have as much CL and EL as you applied for leave!');
							framework_error = false;
							return false;
						}
						// console.log(leaveCL);
						// console.log(leaveEL);
						// console.log(leaveLWP);
						// $("#framework").css("border-color", "green");
						// return true;
					} else if (leaveCL == 'CL' && leaveEL == 'EL' && leaveLWP == 'LWP' && leaveMD != 'MD') {
						var dataLeaveCl = data.CL + data.EL;
						if (daysDifference <= dataLeaveCl) {
							$(".show-tick").css("border", "1px solid green");
							$('#leaveStatus').text('');
							return true;
						} else {
							$(".show-tick").css("border", "1px solid red");
							$('#leaveStatus').text('');
							framework_error = false;
							return false;
						}
						// console.log(leaveCL);
						// console.log(leaveEL);
						// console.log(leaveLWP);
						// $("#framework").css("border-color", "green");
						// return true;
					} else if (leaveCL != 'CL' && leaveEL != 'EL' && leaveLWP != 'LWP' && leaveMD == 'MD') {

						$(".show-tick").css("border", "1px solid green");
						$('#leaveStatus').text('');
						return true;

					} else if (leaveCL != 'CL' && leaveEL != 'EL' && leaveLWP == 'LWP' && leaveMD != 'MD') {

						$(".show-tick").css("border", "1px solid green");
						$('#leaveStatus').text('');
						return true;

					} else {
						// alert('dekh k bhaiiii');
						$(".show-tick").css("border", "1px solid red");
						$('#leaveStatus').text('');
						framework_error = false;
						return false;
					}

				} else {
					$(".show-tick").css("border", "1px solid red");
					$('#leaveStatus').text('');
					framework_error = false;
					return false;


				}

			}




			$("#insertDescription").keyup(function() {
				insertDescription_check();
			});

			function insertDescription_check() {
				var insertDescription_val = $("#insertDescription").val();

				if (insertDescription_val == "") {
					$("#insertDescription").css("border-color", "red");
					insertDescription_error = false;
					return false;

				} else {
					$("#insertDescription").css("border-color", "green");
					return true;
				}

			}







			<?php //echo form_open_multipart('adminzone/EmployeeAttendance/EmployeeLeaveApply'); 
			?>


			$("#btnLeaveApply").click(function() {
				selectForm_error = true;
				insertStartDate_error = true;
				insertEndDate_error = true;
				insertAdmin_error = true;
				framework_error = true;
				insertDescription_error = true;



				// selectForm insertStartDate insertEndDate insertAdmin framework insertDescription
				selectForm_check()
				insertStartDate_check()
				insertEndDate_check()
				insertAdmin_check()
				framework_check()
				insertDescription_check()

				if ((selectForm_error == true) && (insertStartDate_error == true) && (insertEndDate_error == true) && (insertAdmin_error == true) && (framework_error == true) && (insertDescription_error == true)) {

					let frm = $("#Image-myform")[0];
					let frmDt = new FormData(frm);


					$.ajax({
						type: "post",
						url: "<?= site_url('adminzone/EmployeeAttendance/EmployeeLeaveApply'); ?>",
						data: frmDt,
						dataType: "json",
						cache: false,
						contentType: false,
						processData: false,
						success: function(data) {
							hideModal();
							$("#Image-myform")[0].reset();
							$('#framework option:selected').each(function() {
								$(this).prop('selected', false);
							});
							$("#framework").selectpicker('refresh');
							// $('#myModal').modal("hide");
							alert("Data updated Successfully");
							window.location = "<?= site_url('adminzone/EmployeeAttendance/EmployeeApplyLeave'); ?>";
							// $('#myModal').modal("hide");
						},

					});


				} else {
					return false;
				}

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



		function hideModal() {
			$("#myModal").removeClass("in");
			$(".modal-backdrop").remove();
			$('body').removeClass('modal-open');
			$('body').css('padding-right', '');
			$("#myModal").hide();
		}
	</script>

	<footer class="fixed-bottom py-1 ">
		<p style="margin-bottom: 0px;">HR HELP 24x7</p>
	</footer>
</div>





</body>

</html>