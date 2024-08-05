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
                                        <h5>"<?php echo COMPANY_NAME; ?> Employee Zone"</h5>
										
                                </div>
							</div>
                            <div class="col-lg-4">
                                <div class="p-5">
							<div class="card o-hidden border-0 shadow-lg my-5 bg-logincard-image" style="background-color:#ECF0F1; margin-top:0rem!important; height: 480px;">
                                 
									
										<div style="margin-left:20px; margin-top: 40px; color: white; font-size: 23px;">
											<span>FOR FIRST TIME</span><br>
											<span>REGISTRATION</span>
										</div>
                                    <form action="<?php echo base_url(); ?>adminzone/register/signUp" class="user" method="post">
                                        <div class="emplogin" style=" background:white; border-radius: 10px;margin: 20px; border: 2px solid white;">
											<div class="form-group">
                                            <input type="text" class="form-control input-group-lg reg_name" id="email" name="email"
                                                placeholder="Company Email ID">
											</div>
											<div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="employee_id" name="employee_id" placeholder="Company Employee ID">
											</div>
											
										</div>
                                        
                                        
                                            <button class="btn btn-user btn-block" id="submitButton" type="submit" name="submit">Sign In</button>
                                       
                                        
                                        
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
                                    <div class="alert alert-danger"><?=$message?></div>
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
		var email_error = true;
		var empId_error = true;
		
		
		$("#email").keyup(function(){
			email_check();
		});
		
		function email_check(){
			var email_val = $("#email").val();
			var nameArr = email_val.split('@');
			//console.log(nameArr);
			if(nameArr[1] != COMPANY_DOMAIN){
				
				$("#email").css("border-color", "red");
				email_error = false;
				return false;
				
			}else if(nameArr[1] == COMPANY_DOMAIN){
				$("#email").css("border-color", "green");
				return true;
			}
		
		
		}
		$("#employee_id").keyup(function(){
			employeeId_check();
		});
		
		function employeeId_check(){
			var emp_val = $("#employee_id").val();
			
			if(emp_val == ""){
				$("#employee_id").css("border-color", "red");
				empId_error = false;
				return false;
				
			}else{
				$("#employee_id").css("border-color", "green");
				return true;
			}
		
		
		}
		
		
		
		$("#submitButton").click(function(){
			email_error = true;
		    empId_error = true;
		    
			
			email_check();
			employeeId_check();
			
			
			if((email_error == true) && (empId_error == true)){
				return true;
			}else{
				$("#email_error").html(" Your mail Id is not Valid!");
				return false;
			}
			
		
		});
		
		
		
		
		
	});
</script>
<?php include('footer.php'); ?>
