<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact us</title>

    <?php 
  if(isset($_SESSION['usrid']))
                      include('headeruser.php');
                  else
                     include('header.php') ;

?>
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Contact us
                </h1>
                <ol class="breadcrumb">
                    <li><a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/tabs/index">Home</a>
                    </li>
                    <li class="active">Contact us</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-md-8">
                <!-- Embedded Google Map -->
                <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://regiohelden.de/google-maps/map_en.php?width=750&amp;height=400&amp;hl=en&amp;q=goa%20univerity%20india+(goa%20university)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
            </div>
            <!-- Contact Details Column -->
            <div class="col-md-4">
                <h3>Contact Details</h3>
                <p>
                    Goa University<br>Taleigao, Panaji Goa<br>
                </p>
                <p><i class="fa fa-2x fa-phone wow bounceIn"></i> 
                    <abbr title="Phone">Ph</abbr>: (0832) 2456915</p>
                <p><i class="fa fa-2x fa-envelope-o wow bounceIn" data-wow-delay=".2s"></i> 
                    <abbr title="Email">E</abbr>: <a href="mailto:saiel2474@gmail.com">mail@birthdaybash.com</a>
                </p>
                <p><i class="fa fa-2x fa-clock-o wow bounceIn" data-wow-delay=".3s"></i> 
                    <abbr title="Hours">Hr</abbr>: Monday - Friday: 9:00 AM to 7:00 PM</p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="https://www.facebook.com/bdaybash7?ref=hl" target="_blank"><i class="fa fa-facebook-square fa-2x wow bounceIn" data-wow-delay=".4s"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
     
           

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <?php include('footer.php'); ?>
    <!-- Contact Form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="http://localhost/CodeIgniter-3.0.0/js/jqBootstrapValidation.js"></script>
    <script src="http://localhost/CodeIgniter-3.0.0/js/contact_me.js"></script>
    <script src="http://localhost/CodeIgniter-3.0.0/js/jquery.fittext.js"></script>
    <script src="http://localhost/CodeIgniter-3.0.0/js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="http://localhost/CodeIgniter-3.0.0/js/creative.js"></script>

</body>

</html>
