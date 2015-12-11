<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Venue</title>

    <!-- Bootstrap Core CSS -->
    <link href="http://localhost/CodeIgniter-3.0.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="http://localhost/CodeIgniter-3.0.0/css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
                <a class="navbar-brand" href="index.html">Birthday Bash</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
					<li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="about.html">About us</a>
                    </li>
                    <li>
                        <a href="services.html">Services</a>
                    </li>
					<li>
                        <a href="gallery.html">Gallery</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                    <li>
                        <a href="#">Cart</a>
                    </li>
					<li>
                        <a href="login.html">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

		
		<div class="row">
            <div class="col-md-8">
                <h3>Add Venue</h3>
				<hr>
                <form name="sentMessage" id="contactForm" novalidate action="http://localhost/CodeIgniter-3.0.0/index.php/birthday_controller/getvenuedetails" method="post" enctype="multipart/form-data">
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Name:</label>
                            <input type="text" name="name" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Description:</label>
                             <textarea name="description" rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Price:</label>
                            <input type="number" name="price" class="form-control" id="email" required data-validation-required-message="Please enter Price">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>address:</label>
                            <textarea rows="10" cols="100" name="address" class="form-control" id="message" required data-validation-required-message="Please enter address" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
					<div class="control-group form-group">
                        <div class="controls">
                            <label>Seating Capacity:</label>
                            <input type="number" name="capacity" class="form-control" id="email" required data-validation-required-message="Please enter Seating capacity">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Picture:</label>
                            <input type="file" name="fileUpload" class="form-control"  required ">
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" name="submit" class="btn btn-primary">Add</button>
                </form>
            </div>

        </div>
		


		
	
        
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
