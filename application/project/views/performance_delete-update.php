

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Performance</title>
<?php include('adminheader.php'); ?>
     
    <!-- Page Content -->
    <div class="container" id="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Performance
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Performance</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

       <hr>

        <!-- Project Two -->
        <?php

foreach ($results as $row) {

 
  


        echo '<div class="row">';
		               echo '<form  method="post" action="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/update_performances">';

           echo '<div class="col-md-7">';
		  $str =$row->url;
            //    $str="asdasd=qwerty";
                $key=explode('=',$str);
                $vid= $key[1];
           
                    echo "<iframe width='600' height='300' src='http://www.youtube.com/embed/$vid'></iframe>";
               
            echo '</div>';
            echo '<div class="col-md-5">';
               echo '<h3><b>' .$row->name. '</b></h3>';
			   echo '<p><b>Product Description:</b>' .$row->description. '</p>';
			   
               echo '<h4>Price: &#8377;' .$row->price. '/-</h4>';
               
			   $cakeid=$row->performance_id;
                                echo "<input type='hidden' name='id' value='$cakeid' />";

               echo '<button type="submit" name="submit"  value="update" class="btn btn-primary" >Update</button>';
			   echo ' <button type="submit" name="submit"  value="delete" class="btn btn-primary" >Delete</button>';
           echo '</div>';
		           echo '</form>';

        echo '</div>';
		echo '<hr />';
        
}
		?>
        <!-- /.row -->

       
    

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
    <script src="http://localhost/CodeIgniter-3.0.0/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="http://localhost/CodeIgniter-3.0.0/js/bootstrap.min.js"></script>

</body>

</html>



              