<?php include('headerTheme.php'); ?>


    <div class="container">
		
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5 bg-login-image">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
						
                            <div class="col-lg-8 d-none d-lg-block ">
							<div style="text-align:center; margin-top: 13px; color: #6f42c1;">
                                        <h4>HR and Employee Portal</h4>
                                        <h5>"<?php echo COMPANY_NAME; ?> HR Zone"</h5>
										
                                </div>
							</div>
                            <div class="col-lg-4">
                                <div class="p-5">
							<div class="card o-hidden border-0 shadow-lg my-5 bg-logincard-image" style="background-color:#ECF0F1; margin-top:0rem!important; height: 480px;">
                                 
									
										<div style="margin-left:20px; margin-top: 35px; color: white; font-size: 20px;">
											<span>Generate Password</span>
											
										</div>
										
                                    <form class="user" method="post">
                                        <div class="emplogin" style=" background:white; border-radius: 10px;margin: 20px; border: 2px solid white;">
											<div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="temp_password" name="temp_password"
                                                placeholder="Temp Password">
											</div>
											<div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="password" name="password" placeholder="New Password">
											</div>
											<div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="cpassword" name="cpassword" placeholder="Confirm Password">
											</div>
										</div>
                                        
                                        
                                            <button class="btn btn-user btn-block" id="submitButton" type="submit" name="submit">Submit</button>
                                       
                                        
                                        
                                    </form>
<style>
.forgotP{
margin-left:200px;
color:#7B7D7D;
}

@media only screen and (max-width: 600px){
.forgotP{
margin-left:160px;
color:#7B7D7D;
}
}
</style>
                                    
									
									<?php if(isset($message)) { ?>
                                    <div style="margin-top:100px;" class="alert alert-danger"><?=$message?></div>
                                <?php } ?>
									<span id="email_error" style="text-align:center; margin-top:50px;" class="text-danger"></span>
                                    </div>
                                </div>
                                </div>
                               
								
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">


	$(document).ready(function(){
		var temp_password_error = true;
		var pass_error = true;
		var cpass_error = true;
		
		$("#temp_password").keyup(function(){
			temp_password_check();
		});
		
		function temp_password_check(){
			var pass_val = $("#temp_password").val();
			
			if(pass_val == ""){
				$("#temp_password").css("border-color", "red");
				pass_error = false;
				return false;
				
			}else{
				$("#temp_password").css("border-color", "green");
				return true;
			}
		
		}
		
		$("#password").keyup(function(){
			password_check();
		});
		
		function password_check(){
			var pass_val = $("#password").val();
			
			if(pass_val == ""){
				$("#password").css("border-color", "red");
				pass_error = false;
				return false;
				
			}else{
				$("#password").css("border-color", "green");
				return true;
			}
		
		}
		
		$("#cpassword").keyup(function(){
			cpassword_check();
		});
		
		function cpassword_check(){
			var cpass_val = $("#cpassword").val();
			var pass_val = $("#password").val();
			if(pass_val != cpass_val){
				$("#cpassword").css("border-color", "red");
				cpass_error = false;
				return false;
				
			}else{
				$("#cpassword").css("border-color", "green");
				return true;
			}
		
		}
		
		
		
		$("#submitButton").click(function(){
			temp_password_error = true;
		    pass_error = true;
		    cpass_error = true;
			
			temp_password_check();
			password_check();
			cpassword_check();
			
			if((temp_password_error == true) && (pass_error == true) && (cpass_error == true)){
				return true;
			}else{
				$("#cpass_error").html(" Your Password and Confirm Password doesn't match!");
				return false;
			}
			
		
		});
		
		
		
		
		
	});
</script>
<?php include('footer.php'); ?>
