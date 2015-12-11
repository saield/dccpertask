<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mascots</title>

</head>
<?php 
  if(isset($_SESSION['usrid']))
                      include('headeruser.php');
                  else
                     include('header.php') ;

?><body>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Mascots                   <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Mascots</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

      <?php   foreach ($results as $row) {

 
  


        echo '<div class="row">';
		               echo '<form  method="post" action="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/addToCart/mascots">';

           echo '<div class="col-md-7">';
		   $img=$row->image;
		     $imgconcat="";
             $imgconcat.="http://localhost/CodeIgniter-3.0.0/";
			 $imgconcat.=$img;
                    echo "<img class='img-responsive img-hovercake' src='$imgconcat' alt=''>";
               
            echo '</div>';
            echo '<div class="col-md-5">';
               echo '<h3><b>' .$row->name. '</b></h3>';
               echo '<h4>Price: &#8377;' .$row->price. '/-</h4>';
               echo '<p><b>Product Description:</b>' .$row->description. '</p>';
			   $mascotid=$row->mascot_id;
                                echo "<input type='hidden' name='id' value='$mascotid' />";
                                echo "<input type='hidden' name='name' value='$row->name' />";
                                echo "<input type='hidden' name='price' value='$row->price' />";
                                echo "<input type='hidden' name='qty' value='1' />";
                                echo "<input type='hidden' name='image' value='$imgconcat' />";

               echo '<button type="submit" name="submit"  value="add to cart" class="btn btn-primary" >Add to cart</button>';
           echo '</div>';
		           echo '</form>';

        echo '</div>';
		echo '<hr />';
        
}
		?>
        <hr>

       <!-- Footer -->
       <?php include('footer.php'); ?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
   
</body>

</html>
