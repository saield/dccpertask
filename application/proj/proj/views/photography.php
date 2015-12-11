<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Photography</title>
<?php 
  if(isset($_SESSION['usrid']))
                      include('headeruser.php');
                  else
                     include('header.php') ;

?>
   
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Photography
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/tabs/index">Home</a>
                    </li>
                    <li class="active">Photography</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Project One -->
                <?php

foreach ($results as $row) {
   $img=$row->image;
             $imgconcat="";
             $imgconcat.="http://localhost/CodeIgniter-3.0.0/";
             $imgconcat.=$img;
 
   ?>
        <div class="row">
            <div class="col-md-7">

                
                 <?php echo   "<img class='img-responsive img-hovercake' src='$imgconcat' alt=''>"; ?>
                
            </div>
            <div class="col-md-5">
				<h3><b><?php $row->name; ?> </b></h3>
				<h4>Price: &#8377; <?php echo $row->price ?> </h4>
				<p><b>More:</b><?php echo $row->description;?></p>
                <a class="btn btn-primary" href="#">Add To Caart</i></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>
<?php } ?>
        <!-- Project Two -->


        <!-- /.row -->

        <hr>


		
	
        
        <!-- /.row -->

        <hr>

       <!-- Footer -->
       <?php
        include ('footer.php');
                    

    ?>
</body>

</html>