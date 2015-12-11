<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Performance</title>

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
                <h1 class="page-header">Performance
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Performance</li>
                </ol>
            </div>
        </div>

        <!-- *************************************************************************** -->

        <!-- /.row -->
        <div class="package">






        <div class="col-md-2" style="background:#ebebeb; border-radius: 15px; box-shadow: 5px 5px 15px #888888; margin-bottom:10px;">
    
            <p style="padding-top:20px;"><label>Refine your Search:</label></p>
            
            <form method="post" action="<?php echo base_url() ?>index.php/birthday_controller/searchD/performance">

        <div class="input-group" position="relative" style="padding:5px;">
            <div style="width:150px; position-relative;" onclick="showDivprice('type','downh')">
            <p><label>Type:&nbsp;&nbsp;<i id="downh" class="glyphicon glyphicon-chevron-down"></i></label></p>
            </div>
            <div class="category" id="type" style="display:none; padding-left:10px">
                <input type="checkbox" name="category[]" id="checkbox_id" value="magician">
                <span for="checkbox_id">Magicians</span></br>
                <input type="checkbox" name="category[]" id="checkbox_id" value="singer">
                <span for="checkbox_id">Singers</span></br>
                <input type="checkbox" name="category[]" id="checkbox_id" value="mimicry">
                <span for="checkbox_id">Mimicry</span></br>
                <input type="checkbox" name="category[]" id="checkbox_id" value="dance">
                <span for="checkbox_id">Dancers</span></br></br>
            </div>
        </div>


        


        <div class="input-group" position="relative" style="padding:5px;">
            <div style="width:150px; position-relative;" onclick="showDivprice('price','downp')">
            <p><label>Price:&nbsp;&nbsp;<i id="downp" class="glyphicon glyphicon-chevron-down"></i></label></p>
                </div>          
            <div class="category" id="price" style="display:none; padding-left:10px">
                <input type="radio" name="pricer" id="checkbox_id" value="0,5000">
                <span for="checkbox_id">below 5000</span></br>
                <input type="radio" name="pricer" id="checkbox_id" value="5000,10000">
                <span for="checkbox_id">5000-10000 Rs</span></br>
                <input type="radio" name="pricer" id="checkbox_id" value="10000,15000">
                <span for="checkbox_id">10000-15000 Rs</span></br>
                <input type="radio" name="pricer" id="checkbox_id" value="15000,100000">
                <span for="checkbox_id">above 15000</span></br></br>
            </div>
        </div>
       

        
        <div class="input-group" position="relative">
         <button class="btn btn-default btn-sm" type="submit" aria-expanded="false">Refine</button>
        </div>
        </br>
    </form>
    </div>
     <!-- end of col-md-2-->


         <script>

        function showDivprice(ele,vis) {
           var div = document.getElementById(ele);
            if (div.style.display !== "none") {
                div.style.display = "none";
                document.getElementById(vis).className = "glyphicon glyphicon-chevron-down";
            }
            else {
                div.style.display = "block";
                document.getElementById(vis).className = "glyphicon glyphicon-chevron-up";
                }
            }


      
        
        </script>


        


       <div class="col-md-10">
        <!-- Projects Row -->

       <?php   foreach ($results as $row) {

 
  


        echo '<div class="row">';
                       echo '<form  method="post" action="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/addToCart/performance">';

           echo '<div class="col-md-7">';

               $str =$row->url;
            //    $str="asdasd=qwerty";
           
                    echo "<iframe width='500' height='300' src='http://www.youtube.com/embed/$str'></iframe>";

               
            echo '</div>';
            echo '<div class="col-md-5">';
               echo '<h3><b>' .$row->name. '</b></h3>';
               echo '<h4>Price: &#8377;' .$row->price. '/-</h4>';
                echo '<h4>Type  ' .$row->category. '</h4>';

               echo '<p><b>Product Description:</b>' .$row->description. '</p>';
               $performid=$row->performance_id;
                                echo "<input type='hidden' name='id' value='$performid' />";
                                echo "<input type='hidden' name='name' value='$row->name' />";
                                echo "<input type='hidden' name='price' value='$row->price' />";
                                echo "<input type='hidden' name='qty' value='1' />";
                               

               echo '<button type="submit" name="submit"  value="add to cart" class="btn btn-primary" >Add to cart</button>';
           echo '</div>';
                   echo '</form>';

        echo '</div>';
        echo '<hr />';
        
}
        ?>
        <hr>


    </div> <!-- end of col-md-10-->


    </div> <!-- end of package div -->
     <!-- *************************************************************************** -->

        <hr>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
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
