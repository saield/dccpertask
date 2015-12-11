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
   
<?php 
  if(isset($_SESSION['usrid']))
                      include('headeruser.php');
                  else
                     include('header.php') ;

?>
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Venue
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/tabs/index">Home</a>
                    </li>
                    <li class="active">Venue</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Project One -->
                <?php

foreach ($results as $row) {

 

        echo '<div class="row">';
				               echo '<form  method="post" action="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/addToCart/venue">';


           echo ' <div class="col-md-7">';
                  $img=$row->image;
		     $imgconcat="";
             $imgconcat.="http://localhost/CodeIgniter-3.0.0/";
			 $imgconcat.=$img;
                   echo "<img class='img-responsive img-hovercake' src='$imgconcat' alt=''>";
                
            echo "</div>";
             echo '<div class="col-md-5">';
             echo '<h3><b>' .$row->name. '</b></h3>';
			 echo '<h4>Address :'.$row->address.'</h4>';
			 echo '<h4>Capacity :'.$row->capacity.'</h4>';

               echo '<p><b>Product Description:</b>' .$row->description. '</p>';

               echo '<h4>Price: &#8377;' .$row->price. '/-</h4>';
			   $venueid=$row->venue_id;
                                echo "<input type='hidden' name='id' value='$venueid' />";
								 echo "<input type='hidden' name='name' value='$row->name' />";
                                echo "<input type='hidden' name='price' value='$row->price' />";
                                echo "<input type='hidden' name='qty' value='1' />";
                                echo "<input type='hidden' name='image' value='$imgconcat' />";
               echo ' <button type="submit" name="submit"  value="add to cart" class="btn btn-primary" >Add to cart</button>';
            echo '</div>';
			echo '</form>';
       echo ' </div>';

        echo '<hr>';

}
?>

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
