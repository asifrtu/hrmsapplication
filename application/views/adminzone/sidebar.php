
    
        <div class="innerLeft col-lg-2">
        <div class="info">
            <?php if(!empty($EmployeeProfileImage->EmpProfileImage)){ ?>
            <img src="<?php echo base_url();?>upload/UserProfileImage/<?php  echo $EmployeeProfileImage->EmpProfileImage; ?>" alt="">
        </div>
        <?php } else{ ?>
            <img src="https://placehold.it/200x150?text=hrhelp24x7" class="rounded-circle img-thumbnail" alt="profile-image"></div>
            <?php } ?>
            <div class="  mb-4 text-center">
            <p class="" style="margin-bottom: 5px; color:#e6d3ff; font-size:16px; font-weight: 400;"><?php echo $UserInfo->name; ?></p>
            <h6><span><?php if(!empty($EmployeeDetails->position)){ echo $EmployeeDetails->position;} ?></span> </h6>
        </div>
        
        <div class="links">
            <a> Dashboard</a>
        </div>
        <div class="links">
            <a >Invoice Dashboard</a>
        </div>
        <div class="links">
            <a ><?php echo COMPANY_NAME; ?> Driver</a>
        </div>
       
    </div>
    <div class="col-lg-5 middle col-md-12 col-sm-12 ">