<?php include('adminheader.php'); ?>

    <!-- Page Content -->
    <div class="container" id="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Venue
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Venue</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

       <hr>

        <!-- Project Two -->
        <?php

foreach ($results as $row) {

 
  


        echo '<div class="row">';
		               echo '<form  method="post" action="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/delete_venue">';

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
				echo'<h4>Address: '.$row->address.'</h4> ';
				echo'<h4>Capacity: '.$row->capacity.'</h4> ';
               echo '<p><b>Product Description:</b>' .$row->description. '</p>';
			   $venueid=$row->venue_id;
                                echo "<input type='hidden' name='id' value='$venueid' />";

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
