<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sign Up</title>

    <!-- Bootstrap Core CSS -->
    <link href="file:///B|/mca/sem4/web tech/birthday_bash/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="file:///B|/mca/sem4/web tech/birthday_bash/css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="file:///B|/mca/sem4/web tech/birthday_bash/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="file:///B|/mca/sem4/web tech/birthday_bash/index.html">Birthday Bash</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
					<li>
                        <a href="file:///B|/mca/sem4/web tech/birthday_bash/index.html">Home</a>
                    </li>
                    <li>
                        <a href="file:///B|/mca/sem4/web tech/birthday_bash/about.html">About us</a>
                    </li>
                    <li>
                        <a href="file:///B|/mca/sem4/web tech/birthday_bash/services.html">Services</a>
                    </li>
					<li>
                        <a href="file:///B|/mca/sem4/web tech/birthday_bash/gallery.html">Gallery</a>
                    </li>
                    <li>
                        <a href="file:///B|/mca/sem4/web tech/birthday_bash/contact.html">Contact</a>
                    </li>
                    <li>
                        <a href="file:///B|/mca/sem4/web tech/birthday_bash/cart.html">Cart</a>
                    </li>
					<li>
                        <a href="file:///B|/mca/sem4/web tech/birthday_bash/login.html">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sign up
                </h1>
                <ol class="breadcrumb">
                    <li><a href="file:///B|/mca/sem4/web tech/birthday_bash/index.html">Home</a>
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
        <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/insert" class="btn btn-primary">Submit</a>
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
    <script src="file:///B|/mca/sem4/web tech/birthday_bash/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="file:///B|/mca/sem4/web tech/birthday_bash/js/bootstrap.min.js"></script>

</body>

</html>
