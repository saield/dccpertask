

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
  if(isset($_SESSION['usrid']))
                      include('headeruser.php');
                  
                   else

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
                <div class="fill" style="background-image: url(http://localhost/CodeIgniter-3.0.0/images/slide/slide1.jpg);"></div>
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
            <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="page-header section-heading">
                    Welcome to Birthday Bash
                </h2>
            </div>
            <div class="col-lg-12">
                <p >Birthday is an exceptional day for everyone and since it comes once in every year, it has to be an extra ordinary day. This is the day which takes us a step further to another journey of life. Birthdays are the best time for having fun and jolly time with friends and relatives and in each passing year we gain more experience and wisdom. If you’re making arrangements to celebrate your big day with a birthday bash – or even for that matter if you’re organizing a birthday party for someone else – first priority is to search out the right materials well in advance, to make sure everything goes as planned. An idea of a birthday party differs from individual to individual depending on their budget. Party is so much entertaining if you are passionate and have the patience you can go all out and plan something unique filled with some extra- fun.
            </p>
            </div>
            </div>
        </div>
    <hr class="primary">






        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="container1">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">At Your Service</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container2">
            <div class="row">
        
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">
                        <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/tabs/login">
                            <div class="wow bounceIn">
                        <img src="http://localhost/CodeIgniter-3.0.0/images/home/login.jpg" class="img-circle" alt="Cinque Terre" width="150" height="150">
                        </div>
                        <h3>Log In</h3>
                    </a>
                        <p class="text-muted">Log in to place your order!</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">
                        <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/tabs/gallery">
                        <div class="wow bounceIn" data-wow-delay=".2s">
                        <img src="http://localhost/CodeIgniter-3.0.0/images/home/gallery.jpg" class="img-circle" alt="Cinque Terre" width="150" height="150">
                        </div>
                        <h3>Gallery</h3>
                    </a>
                        <p class="text-muted">Check out our photo gallery</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">
                        <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/tabs/signup">
                        <div class="wow bounceIn" data-wow-delay=".3s">
                        <img src="http://localhost/CodeIgniter-3.0.0/images/home/signup.jpg" class="img-circle" alt="Cinque Terre" width="150" height="150">
                        </div>
                        <h3>Register</h3>
                    </a>
                        <p class="text-muted">Register yourself to use the best of our services!</p>
                    </div>
                </div>

            </div>
        </div>


        </div>
        <!-- /.row -->
 
 <script src="http://localhost/CodeIgniter-3.0.0/js/jquery.fittext.js"></script>
 <script src="http://localhost/CodeIgniter-3.0.0/js/wow.min.js"></script>
 <script src="http://localhost/CodeIgniter-3.0.0/js/creative.js"></script>
        


        

    <?php
        include ('footer.php');
    ?>
</body>

</html>