<?php include('header.php'); ?>
<?php include('commonSidebar.php'); ?>

<div class="col-lg-10 right_apply_ticket ">
  <div class="card-header color-primary" style="border-radius: 0;">
    <div class="d-flex">
      <div><a href="<?= site_url('adminzone/dashboard'); ?>" style="color: #fff;font-size: 15px;"><i class="fa fa-home" aria-hidden="true"></i></a></div>
      <div> &nbsp;&nbsp;<i style="font-size: 10px;color: #00d3c3;" class="fas fa-chevron-right"></i><span class="breadcrumb_text" style="font-size: 15px;color: #00d3c3;font-weight: 600;">&nbsp; Apply Tickets</span></div>
    </div>
  </div>

  <div class="ticket-apply-note">
    <span> Note: Click on Apply Ticket button for ticket apply. </span>
  </div>
  <?php if (!empty($this->session->flashdata('message'))) { ?>


    <?= $this->session->flashdata('message'); ?>

  <?php } ?>


  <div class="Apply_ticket_main col-lg-12">
    <div>
      <a href="javascript:void(0)" class="  addEmpSubmitBtn" data-toggle="modal" data-target="#myModal">
        <button type="button" class="apply_ticket_button">
          Apply Ticket
        </button>
      </a>
    </div>
    <div class="table-responsive" id="renderHtmlLeave">


      <table class="table table-sm">
        <thead class="courses">
          <tr>
            <th>S.No</th>
            <th>Date</th>
            <th>Reason</th>
            <th>To</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <?php if (!empty($Ticketrecord)) :  ?>

            <?php
            $SNo = 1;

            foreach ($Ticketrecord as $emp) : ?>
              <tr>
                <td><?php echo $SNo; ?></td>
                <td><?php echo $emp->TokenDate; ?></td>
                <td><?php echo $emp->ReasonOfToken; ?></td>
                <td><?php echo $emp->organisationEmail; ?></td>
                <td class="<?php echo $emp->ticketStatus; ?>"><?php echo $emp->ticketStatus; ?></td>
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



<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog col-lg-5">

    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">My Ticket</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <div class="modal-body apply_forms">
        <form action="<?php echo base_url() ?>index.php/adminzone/Ticket/TicketAdd" enctype="multipart/form-data" method="post" accept-charset="utf-8">

          <div class="row">

            <div class="col-lg-12">
              <div class="form-group">
                <label>Reason Of Token <span>*</span></label>
                <select class="empInput form-control" name="ReasonOfToken" id="insertReasonOfToken" style="border: 1px solid #858796;">
                  <option>Select</option>
                  <option>Laptop/charger issue...</option>
                  <option>Mouse not working...</option>
                  <option>Floor lighting issue...</option>
                  <option>Dusting issue...</option>
                  <option>Hygiene issues /Bathroom cleaning...</option>
                </select>
              </div>
            </div>



          </div>

          <div class="row ">

            <div class="col-lg-12">

              <div class="form-group">
                <label>To<span>*</span></label>
                <select class="empInput form-control" name="organisationEmail" id="insertTo" style="border: 1px solid #858796;">
                  <option>Select</option>
                  <option>HR...</option>
                  <option>Manager</option>
                  <option>Team Leader</option>

                </select>
              </div>


            </div>
          </div>

          <div class="row ">

            <div class="col-lg-12">

              <div class="form-group">
                <label>Token Date<span>*</span></label>
                <input type="date" name="TokenDate" id="inserttokendate" class="empInput form-control" style="border: 1px solid #858796;">
              </div>


            </div>
          </div>




          <div class="row">
            <div class="col-lg-12">

              <div class="form-group">
                <label>Description <span>*</span></label>
                <textarea class=" form-control empdescp" name="Description" id="insertDescription" rows="5" style="border: 1px solid #858796;"></textarea>
              </div>


            </div>
          </div>


          <div style="text-align:center; padding-bottom:16px; padding-top:12px;">
            <button type="submit" id="#" class="btn btn-default leaveApplySubmitBtn">Submit</button>
          </div>
        </form>
      </div>


    </div>







    <!-- Content Row -->




  </div>

</div>
</div>

<!-- JavaScript Bundle with Popper -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {


    $("#btnUploadPage").click(function() {

      let frm = $("#Image-form")[0];
      let frmDt = new FormData(frm);


      $.ajax({
        type: "post",
        url: "<?= site_url('adminzone/Ticket/TicketAdd'); ?>",
        data: frmDt,
        dataType: "json",
        cache: false,
        contentType: false,
        processData: false,

        success: response => {

          if (response.status === 1) {
            $("#myModal").hide('modal');
            location.reload();
          }
        }
      });
    });
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
</body>

</html>