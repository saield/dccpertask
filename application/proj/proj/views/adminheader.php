<!--<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Birthday Bash Admin login</title>
-->
    <!-- Bootstrap Core CSS -->
    <link href="http://localhost/CodeIgniter-3.0.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="http://localhost/CodeIgniter-3.0.0/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="http://localhost/CodeIgniter-3.0.0/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://localhost/CodeIgniter-3.0.0/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Birthday Bash Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
                <li class="dropdown">
                    <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/logout_action" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user">&nbsp;</i>logout<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/displayOrders"><i class="glyphicon glyphicon-shopping-cart"></i> Orders</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/logout_action"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/admincakeadd"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/displayOrders"><i class="glyphicon glyphicon-shopping-cart"></i> Orders</a>
                    </li>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-camera"></i> Gallery</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-edit"></i> Messages</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-wrench"></i> Update Services <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/admincakeadd">Cakes</a>
                            </li>
                            <li>
                                <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/display_table/photography/photography_id">Photography</a>
                            </li>
                            <li>
                                <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/display_table/videography/videography_id">Videography</a>
                            </li>
                            <li>
                                <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/addvenue">Venues & Location</a>
                            </li>
                            <li>
                                <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/display_table/decoration/decoration_id">Design & Decor</a>
                            </li>
                            <li>
                                <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/display_table/invitationcards/card_id">Invitation Cards</a>
                            </li>
                            <li>
                                <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/display_table/music/music_id">Music</a>
                            </li>
                            <li>
                                <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/display_table/games/game_id">Games</a>
                            </li>
                            <li>
                                <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/display_table/performance/performance_id">Performances</a>
                            </li>
                            <li>
                                <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/display_table/returngifts/gift_id">Return Gifts</a>
                            </li>
                            <li>
                                <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/display_table/masterofceremony/moc_id">Master of the ceremony</a>
                            </li>
                            <li>
                                <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/display_table/mascots/mascot_id">Mascots</a>
                            </li>
                        
                            <li>
                                <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/display_table/themes/theme_id">Theme of the day</a>
                            </li>
                            <li>
                                <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/display_table/catering/catering_id">Catering</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

       <div id="page-wrapper">

            <div class="container-fluid">