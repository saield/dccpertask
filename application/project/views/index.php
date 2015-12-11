<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Birthday Bash</title>
<?php 
  //if(isset($_SESSION['usrid']))
                     // include('headeruser.php');
                  
                   //else

                     include('header.php') ;

?>
    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url(http://localhost/CodeIgniter-3.0.0/images/slide/slide1.jpg);"></div>
                <div class="carousel-caption">
                    <h5>Birthday Candles</h5>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url(http://localhost/CodeIgniter-3.0.0/images/slide/slide2.jpg);"></div>
                <div class="carousel-caption">
                    <h5>Celebrate with us</h5>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url(http://localhost/CodeIgniter-3.0.0/images/slide/slide3.jpg);"></div>
                <div class="carousel-caption">
                    <h5>Order your Chocolate cake</h5>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome to Birthday Bash
                </h1>
            </div>
            

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

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
