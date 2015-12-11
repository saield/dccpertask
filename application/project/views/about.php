<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>About us</title>
<?php 
  if(isset($_SESSION['usrid']))
                      include('headeruser.php');
                  
                   else

                     include('header.php') ;

?>
    <!-- Bootstrap Core CSS -->
  
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">About us</h1>
                <ol class="breadcrumb">
                    <li><a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/tabs/home">Home</a>
                    </li>
                    <li class="active">About us</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Intro Content -->
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive" src="http://localhost/CodeIgniter-3.0.0/images/team/birthdaybash.jpg" alt="">
            </div>
            <div class="col-md-6">
                <h2>About Birthday Bash</h2>
				
                <p>Birthday Bash has established itself as one of the finest party and event organisers companies in Panaji 
				and offers some of the best event management services in the whole of the Goa and near by states.</p>
				
                <p>Since our inception we have developed key qualities which have resulted in a privileged position as event organisers 
				0and party planners within the industry. We are proud to cater in Goa’s most prestigious venues and our event organisers 
				look after an impressive client base from a broad range of backgrounds.</p>
				
                <p>Along with our core values of Sensational Party, Impeccable service, and Exceptional design we acknowledge the 
				importance of relationships with clients, venues and suppliers alike. Birthday Bash quotes on a bespoke basis and we 
				take the individual requirements of each event into consideration. By doing this we remain as flexible as possible and are 
				able to lead with creative concepts and solutions, as well as reacting to briefs and surpassing expectations.</p>

            
                
            </div>
        </div>
        <!-- /.row -->

        <!-- Team Members -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Our Team</h2>
            </div>
            <div class="col-md-4 text-center">
                <div class="thumbnail">
                    <img class="img-responsive" src="http://localhost/CodeIgniter-3.0.0/images/team/kedar.jpg" alt="">
                    <div class="caption">
                        <h3>Kedar Marathe<br>
                            <small>Leader</small>
                        </h3>
                        <p>Studing MCA in Goa University</p>
                        <ul class="list-inline">
                            <li><a href="https://www.facebook.com/kedar.marathe1?fref=ts" target="_blank"><i class="fa fa-2x fa-facebook-square"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="thumbnail">
                    <img class="img-responsive" src="http://localhost/CodeIgniter-3.0.0/images/team/namrata.jpg" alt="">
                    <div class="caption">
                        <h3>Namrata Bhat<br>
                            <small>Team Leader</small>
                        </h3>
                        <p>Studing MCA in Goa University</p>
                        <ul class="list-inline">
                            <li><a href="https://www.facebook.com/namrata.bhat.18?fref=ts" target="_blank"><i class="fa fa-2x fa-facebook-square"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="thumbnail">
                    <img class="img-responsive" src="http://localhost/CodeIgniter-3.0.0/images/team/saiel.jpg" alt="">
                    <div class="caption">
                        <h3>Saiel Divkar<br>
                            <small>Leader</small>
                        </h3>
                        <p>Studing MCA in Goa University</p>
                        <ul class="list-inline">
                            <li><a href="https://www.facebook.com/saield" target="_blank"><i class="fa fa-2x fa-facebook-square"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <!-- /.row -->

       

        <hr>

       <?php
        include ('footer.php');
    ?>
</div>
</body>

</html>
