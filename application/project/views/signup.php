<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sign Up</title>
<?php 
  
                     include('header.php') ;

?>
  <body>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sign up
                </h1>
                <ol class="breadcrumb">
                    <li><a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/tabs/index">Home</a>
                    </li>
                    <li class="active">Sign up</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
		<form class="form-horizontal" role="form" method="post" action="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/insert">
        <div class="row">
             <div class="col-md-3">
               
            </div>
			
            <div class="col-md-6">
                <div class="panel panel-primary text-center">
                    <div class="panel-heading">
                        <h3 class="panel-title">Sign up</h3>
                    </div>
                    
			
			<div class="form-group" style="margin-top:15px;">
				<label class="col-sm-1 control-label"></label>
			<div class="col-sm-10">
				<input class="form-control" type="text" name="name" placeholder="First name" required data-validation-required-message="Please enter your name.">
			</div>
				<label class="col-sm-1 control-label"></label>
			</div>
    
           
	
	
    <div class="form-group">
      <label class="col-sm-1 control-label"></label>
      <div class="col-sm-10">
        <input class="form-control" type="email" id="email" onblur="check_email()" name="email" placeholder="Email ID" required data-validation-required-message="Please enter your email.">
      </div>
	  <label class="col-sm-1 control-label"></label>
    </div>
     <script> 
     function check_email(){
           var reg = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
           var email = document.getElementById("email").value;
           if (!(reg.test(email)))alert("Invalid Email_id");

            }
        
        </script>

    <div class="form-group" >
				<label class="col-sm-1 control-label"></label>
			<div class="col-sm-10">
				<input class="form-control" type="text" name="address" placeholder="Address" required data-validation-required-message="Please enter your address.">
			</div>
				<label class="col-sm-1 control-label"></label>
			</div>


    <div class="form-group">
      <label class="col-sm-1 control-label"></label>
      <div class="col-sm-7">
        <input class="form-control" id="pass1" type="password" onblur="check_pass() "name="password" placeholder="Password">
       <script> function check_pass(){
          var passwrd = document.getElementById("pass").value;
          if(passwrd.length < 8) alert("Password too short");
        }
        </script>
      </div>
    <label class="col-sm-4 control-label"></label>
    </div>

    <div class="form-group">
      <label class="col-sm-1 control-label"></label>
      <div class="col-sm-7">
        <input class="form-control" id="pass2" type="password" placeholder="Confirm Password" onchange="checkPass(); return false;">
      </div>
      <font size="2" color="red"><label id="passmsg" class="col-sm-4 control-label" style="text-align:left; margin-left:-20px;"></label></font>
    </div>

	  <div class="form-group">
      <label class="col-sm-1 control-label"></label>
      <div class="col-sm-10">
        <input class="form-control" type="number" id="phone" onblur="check_phone()" name="phone" placeholder="Mobile no." required data-validation-required-message="Please enter your mobile.">
      </div>
    <label class="col-sm-1 control-label"></label>
    </div>
    <script> function check_phone(){
          var phone = document.getElementById("phone").value;
          if(phone.length < 10) alert("Phone too short");
        }</script> 
	
	<div class="form-group">
      <label class="col-sm-1 control-label"></label>
      <div class="col-sm-10">
      <button type="submit" name="submitq" class="btn btn-primary">Sign in</button>
      </div>
	  <label class="col-sm-1 control-label"></label>
    </div>
   <script>

        function checkPass()
    {
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
    var message = document.getElementById('passmsg');
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    
    if(pass1.value == pass2.value){
        
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!"
    }
    else{
        
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!"
    }
}

    </script>
					
					
                </div>
            </div>
           <div class="col-md-3">
                
		   </div>
		   </div>
		</form>
		
        <!-- /.row -->

        <hr>
        <!-- Footer -->
<?php include('footer.php') ; ?>


<script src="http://localhost/CodeIgniter-3.0.0/js/jqBootstrapValidation.js"></script>
    <!-- /.container -->

    <!-- jQuery -->
   
</body>

</html>
