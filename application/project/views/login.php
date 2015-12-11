<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>


<?php 
  
                     include('header.php') ;

?>


        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Login
                </h1>
                <ol class="breadcrumb">
                    <li><a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/tabs/index">Home</a>
                    </li>
                    <li class="active">Login</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
		<form class="form-horizontal" role="form" method="post" action="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/check_login">
        <div class="row">
             <div class="col-md-4">
               
            </div>
			
            <div class="col-md-4">
                <div class="panel panel-primary text-center">
                    <div class="panel-heading">
                        <h3 class="panel-title">Login</h3>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Login id</strong><input type="text" class="form-control" name="name"></li>
                        <li class="list-group-item"><strong>Password</strong><input type="password" class="form-control" name="password"></li>
                        <li class="list-group-item"><button type="submit" name="submit" value="login" class="btn btn-primary">Login</button>
						<a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/tabs/signup" class="btn btn-primary">Sign Up!</a>
                        </li>
                    </ul>
                </div>
            </div>
           <div class="col-md-4">
                
		   </div>
		   </div>
		   </form>
        <!-- /.row -->

        
		<hr>
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Birthday Bash &copy; | Powered by 3 Idiots 2015</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
