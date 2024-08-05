
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

<body class="background">
    
<div class="main_div  ">
<div class="container">
    <div class="row main_row no-gutters col-lg-12 col-xl-12  ">
        <div class="col-lg-7  ">
            <div class="col-lg-11 head-div ">
            <div class="mt-5">
            <h1 class="head">Aidernet&nbsp;Technology</h1>
            <h3 class="tagline">Keep yourself connected, informed, & engaged with  employee performance dashboard.</h3>
            <a href="<?=base_url('index.php/adminzone/login');?>"> <button class="btun ">Login</button> </a>
             </div>
          
        </div>
        </div>
          <div class="card-body col-lg-4 p-5 p-sm-5 my-5  ">
              <div class="container-fluid pr-0 pl-0">
                  <div class="row no-gutters">
                  <div class="col-lg-6 col-md-6">
                    <button class=" btn4  w-100  ">Employee</button>
                  </div>
                  <div class="col-lg-6 col-md-6">
                   <a href="<?=base_url('index.php/hrzone/login');?>"> <button class="btn3  w-100  ">HR Login</button></a>
                </div>
              </div>
            </div>
            
            <form method="post" >


            <div class="form-floating mb-4">
                <label for="" class="mb-0">Employee ID</label> 
                <input type="text" class="form-control" name="employee_id" id="employee_id" placeholder="Enter your employee id....">
               
              </div>


              <div class="form-floating mb-3">
                <label for="" class="mb-0">Official Email ID</label> 
                <input type="text" class="form-control" name="email" id="email" placeholder="Enter your email id.... ">
           
              </div>

              

            

            
              

              <div class="d-grid mb-2">
                <button class="btn2 btn-login fw-bold " id="submitButton" type="submit" name="submit">Register</button>
              </div>
                <hr>
              <p class="d-block text-center small temp-password mb-0" style="color:#979797;" >You will recieve OTP on your official email. </p>

         
                
               
            </form>
            <?php if(isset($message)) { ?>
                                    <div style="margin-top:100px;" class="alert alert-danger"><?=$message?></div>
                                <?php } ?>
									<span id="email_error" style="text-align:center; margin-top:100px;" class="text-danger"></span>
          </div>
    
    </div>
  </div>
  <footer class="fixed-bottom  ">
    <div class="container text-center ">
   <p> Copyright &copy; Aidernet Technology 2021</p>
    </div>
  
  </footer>
</div>


	<link rel="stylesheet" href=" https://www.aidernet.com/hrportal/Assets/vendor/fontawesome-free/css/all.min.css" >
	
    <!-- Bootstrap core JavaScript-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    
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
        if(nameArr[1] != "aidernet.com"){
            
            $("#email").css("border-color", "red");
            email_error = false;
            return false;
            
        }else if(nameArr[1] == "aidernet.com"){
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


</body>
</html>