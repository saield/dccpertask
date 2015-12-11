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
				<input class="form-control" type="text" name="name" placeholder="First name">
			</div>
				<label class="col-sm-1 control-label"></label>
			</div>
            
	<div class="form-group">
      <label class="col-sm-1 control-label"></label>
      <div class="col-sm-10">
        <input class="form-control" type="number" name="phone" placeholder="Mobile no.">
      </div>
	  <label class="col-sm-1 control-label"></label>
    </div>
	
    <div class="form-group">
      <label class="col-sm-1 control-label"></label>
      <div class="col-sm-10">
        <input class="form-control" type="email" name="email" placeholder="Email ID">
      </div>
	  <label class="col-sm-1 control-label"></label>
    </div>
    <div class="form-group" >
				<label class="col-sm-1 control-label"></label>
			<div class="col-sm-10">
				<input class="form-control" type="text" name="address" placeholder="Address">
			</div>
				<label class="col-sm-1 control-label"></label>
			</div>
    
	<div class="form-group">
      <label class="col-sm-1 control-label"></label>
      <div class="col-sm-10">
        <input class="form-control" type="password" name="password" placeholder="Password">
      </div>
	  <label class="col-sm-1 control-label"></label>
    </div>
  
  
	
	<div class="form-group">
      <label class="col-sm-1 control-label"></label>
      <div class="col-sm-10">
      <button type="submit" name="submitq" class="btn btn-primary">Sign in</button>
      </div>
	  <label class="col-sm-1 control-label"></label>
    </div>
  
					
					
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

    
    <!-- /.container -->

    <!-- jQuery -->
   
</body>

</html>
