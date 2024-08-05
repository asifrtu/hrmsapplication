<?php include('header.php');?>
<?php  include('commonSidebar.php'); ?>

<div class="col-lg-10  my_information" >

<div class="employee_details ">
            <span style=" font-size: 15px; margin-top: 3px!important;">Company Files</span>
    <div style="padding-right: 467px;">
                <span style="text-align: center;color: white;font-size: 18px;font-weight: 600;">All Company Related Files Is Here</span>
            </div>
        </div>
    <div class="container mt-4">
    <div class="data_table col-lg-12">
    <?php if(!empty($this->session->flashdata('message'))) { ?>
                    <div class="alert alert-info alert-dismissible">
                    <button type="button" class="close" data-bs-dismiss="alert">&times;</button>
                    <?=$this->session->flashdata('message');?>
                    </div>
                <?php } ?>
    

    </div>
    </div>
    </div>
</div>

    <footer class="fixed-bottom py-1 ">
<p style="margin-bottom: 0px;">HR HELP 24x7</p>
</footer>
</div>
</body>
</html>
