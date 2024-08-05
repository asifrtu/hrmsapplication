
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HR and Employee Portal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url("Assets/newCss/style.css") ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Rubik&display=swap" rel="stylesheet">


</head>

<body id="page-top">
    
<div class="main_div ">
<div class="container ">
    <div class="row main_row no-gutters  col-lg-12 col-xl-12  ">
      <div class="col-lg-7  ">
        <div class="col-lg-11 head-div ">
        <div class="mt-5">
        <h1 class="head"><?php echo COMPANY_NAME; ?></h1>
        <h3 class="tagline">Keep yourself connected, informed, & engaged with  employee performance dashboard.</h3>
        <a href="<?=base_url('index.php/adminzone/login');?>"> <button class="btun"> Login</button> </a>
         </div>
      
      
    </div>
    </div>
          <div class="card-body col-lg-4 p-5 p-sm-5 my-5  ">
            
            <p class="text-center topic">Password Reset</p>
            <form class="mt-3" method="post">
                
              <div class="form-floating mb-3">
                <label for="" class="mb-1">One Time Password</label> 
                <input type="text" class="form-control" id="temp_password" name="temp_password" placeholder="Temperorary Password" required autofocus>
           
              </div>

              
              <div class="form-floating mb-3">
                <label for="" class="mb-1 ">New Password</label>
                <input type="text" class="form-control"  id="password" name="password" placeholder="">
               
              </div>
            
              
              <div class="form-floating mb-4">
                <label for="" class="mb-1">Confirm Password</label>
                <input type="password" class="form-control"  id="cpassword" name="cpassword" placeholder="">
               
              </div>

              

              <div class="d-grid ">
                <button class="btn2   btn-login fw-bold " id="submitButton" type="submit">Confirm</button>
              </div>

              <a class="d-block text-center mt-2 large" href="#">Resend Temperorary Password</a>

            
               
               
            </form>
            <?php if(isset($message)) { ?>
              <div style="margin-top:100px;" class="alert alert-danger"><?=$message?></div>
          <?php } ?>
          </div>
    
    </div>
  </div>
  <footer class="fixed-bottom ">
    <div class="container text-center ">
   <p> Copyright &copy; HR HELP 24x7 2021</p>
    </div>
  
  </footer>
</div>
	<link rel="stylesheet" href=" <?php echo base_url() ?>Assets/vendor/fontawesome-free/css/all.min.css" >
	
    <!-- Bootstrap core JavaScript-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    

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
    
</body>
</html>