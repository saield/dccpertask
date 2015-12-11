<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Our Services</title>
    <?php 
  if(isset($_SESSION['usrid']))
                      include('headeruser.php');
                  else
                     include('header.php') ;

?>
<body>
        <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Our Services
                    <small>..</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/tabs/index">Home</a>
                    </li>
                    <li class="active">Our Services</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row border">
            <div class="col-md-4 img-portfolio">
                <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/cakes">
                    <img class="img-responsive img-hover" src="http://localhost/CodeIgniter-3.0.0/images/services/cake.jpg" alt="">
                </a>
                <h3>
                    <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/cakes">Cakes</a>
                </h3>
                <p>Choose from the variety of cakes.</p>
            </div>
            <div class="col-md-4 img-portfolio">
                <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/services/photography">
                    <img class="img-responsive img-hover" src="http://localhost/CodeIgniter-3.0.0/images/services/photography.jpg" alt="">
                </a>
                <h3>
                    <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/services/photography">Photography</a>
                </h3>
                <p>Capture the lovely moments.</p>
            </div>
            <div class="col-md-4 img-portfolio">
                <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/services/videography">
                    <img class="img-responsive img-hover" src="http://localhost/CodeIgniter-3.0.0/images/services/videography.jpg" alt="">
                </a>
                <h3>
                    <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/services/videography">Videography</a>
                </h3>
                <p>Record all the fun you had.</p>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row border">
            <div class="col-md-4 img-portfolio">
                <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/services/venue">
                    <img class="img-responsive img-hover" src="http://localhost/CodeIgniter-3.0.0/images/services/venue.jpg" alt="">
                </a>
                <h3>
                    <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/services/venue">Venues & Location</a>
                </h3>
                <p>Choose from the best venues.</p>
            </div>
            <div class="col-md-4 img-portfolio">
                <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/services/decoration">
                    <img class="img-responsive img-hover" src="http://localhost/CodeIgniter-3.0.0/images/services/deco.jpg" alt="">
                </a>
                <h3>
                    <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/services/decoration">Design & Decor</a>
                </h3>
                <p>Decorate your hall according to your wishes.</p>
            </div>
            <div class="col-md-4 img-portfolio">
                <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/services/invitation">
                    <img class="img-responsive img-hover" src="http://localhost/CodeIgniter-3.0.0/images/services/invitation.jpg" alt="">
                </a>
                <h3>
                    <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/services/invitation">Invitation Cards</a>
                </h3>
                <p>Select the best way to invite your guests.</p>
            </div>
        </div>

        <!-- Projects Row -->
        <div class="row border">
            <div class="col-md-4 img-portfolio">
                <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/services/music">
                    <img class="img-responsive img-hover" src="http://localhost/CodeIgniter-3.0.0/images/services/music.jpg" alt="">
                </a>
                <h3>
                    <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/services/music">Music</a>
                </h3>
                <p>The world's most famous and popular language is music.</p>
            </div>
            <div class="col-md-4 img-portfolio">
                <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/services/games">
                    <img class="img-responsive img-hover" src="http://localhost/CodeIgniter-3.0.0/images/services/games.jpg" alt="">
                </a>
                <h3>
                    <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/services/games">Games</a>
                </h3>
                <p>Enjoy our selected games.</p>
            </div>
            <div class="col-md-4 img-portfolio">
                <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/services/performance">
                    <img class="img-responsive img-hover" src="http://localhost/CodeIgniter-3.0.0/images/services/performance.jpg" alt="">
                </a>
                <h3>
                    <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/services/performance">Performances</a>
                </h3>
                <p>Make your birthday memorable by selecting the best entertaining performances.</p>
            </div>
        </div>
        <!-- /.row -->
		
		<!-- Projects Row -->
        <div class="row border">
            <div class="col-md-4 img-portfolio">
                <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/services/return_gifts">
                    <img class="img-responsive img-hover" src="http://localhost/CodeIgniter-3.0.0/images/services/gift.jpg" alt="">
                </a>
                <h3>
                    <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/services/return_gifts">Return Gifts</a>
                </h3>
                <p>Let your guests return home with a smile.</p>
            </div>
            <div class="col-md-4 img-portfolio">
                <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/services/master">
                    <img class="img-responsive img-hover" src="http://localhost/CodeIgniter-3.0.0/images/services/mc.jpg" alt="">
                </a>
                <h3>
                    <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/services/master">Master of the ceremony</a>
                </h3>
                <p>His job is to entertain people with his witty words and to help them have an Enthusiastic and a supercalifragilisticexpialidocious time.</p>
            </div>
            <div class="col-md-4 img-portfolio">
                <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/services/mascot">
                    <img class="img-responsive img-hover" src="http://localhost/CodeIgniter-3.0.0/images/services/mascot.jpg" alt="">
                </a>
                <h3>
                    <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/services/mascot">Mascots</a>
                </h3>
                <p>have our mascots entertain the little ones.</p>
            </div>
        </div>
        <!-- /.row -->
		
		<!-- Projects Row -->
        <div class="row border">
           >
            <div class="col-md-4 img-portfolio">
                <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/services/theme">
                    <img class="img-responsive img-hover" src="http://localhost/CodeIgniter-3.0.0/images/services/theme.jpg" alt="">
                </a>
                <h3>
                    <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/services/theme">Theme of the day</a>
                </h3>
                <p> Choose interesting party themes</p>
            </div>
            <div class="col-md-4 img-portfolio">
                <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/services/catering">
                    <img class="img-responsive img-hover" src="http://localhost/CodeIgniter-3.0.0/images/services/catering.jpg" alt="">
                </a>
                <h3>
                    <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/services/catering">Catering</a>
                </h3>
                                <p>Choose among the best caterers</p>

            </div>
        </div>
        <!-- /.row -->
		
		<hr>
        <!-- Footer -->
       <?php include('footer.php'); ?>
    
    <!-- /.container -->

  

</body>

</html>
