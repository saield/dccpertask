

    <!-- Bootstrap Core CSS -->
    <link href="http://localhost/CodeIgniter-3.0.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="http://localhost/CodeIgniter-3.0.0/css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">




   
<!-- ************************************************************************ -->



<!-- Home page carouser -->

<!--
<!-- jQuery -->
    <script src="http://localhost/CodeIgniter-3.0.0/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="http://localhost/CodeIgniter-3.0.0/js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
<!-- ************************************************************* -->

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
                <a class="navbar-brand" href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/tabs/about">Birthday Bash</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
					<li>
                        <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/tabs/home">Home</a>
                    </li>
                   
                    <li>
                        <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/tabs/newServices">Services</a>
                    </li>
					<li>
                        <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/tabs/gallery">Gallery</a>
                    </li>
                     <li>
                        <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/tabs/about">About us</a>
                    </li>
                    <li>
                        <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/tabs/contact">Contact</a>
                    </li>
                    <li>
                        <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/tabs/cart">Cart</a>
                    </li>
					 <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user">&nbsp;</i><?php if(isset($_SESSION['usrid']))
{


echo $_SESSION['name'];
}



                       ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="divider"></li>
                        <li>
                            <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/logout_action"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <!--<div class="container"> -->