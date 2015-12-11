<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Invitations</title>

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
                <h1 class="page-header">Venue
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Venue</li>
                </ol>
            </div>
        </div>

        <!-- *************************************************************************** -->

        <!-- /.row -->
        <div class="package">






        <div class="col-md-2" style="background:#ebebeb; border-radius: 15px; box-shadow: 5px 5px 15px #888888; margin-bottom:10px;">
    
            <p style="padding-top:20px;"><label>Refine your Search:</label></p>
            

 <form name="refine" method="post" action="<?php echo base_url(); ?>index.php/birthday_controller/searchD/invitation">

       
        <div class="input-group" position="relative" style="padding:5px;">
            <div style="width:150px; position-relative;" onclick="showDivprice('price','downp');">           
             <p><label>Price range:&nbsp;&nbsp;<i id="downp" class="glyphicon glyphicon-chevron-down"></i></label></p>
                </div>          
            <div class="category" id="price" style="display:none; padding-left:10px">
                <input type="radio" name="pricer" id="checkbox_id"  value="0,150">
                <span for="checkbox_id">0-150 </span></br>
                <input type="radio" name="pricer" id="checkbox_id" value="150,300">
                <span for="checkbox_id">150-300</span></br>
                <input type="radio" name="pricer" id="checkbox_id" value="300,3000">
                <span for="checkbox_id">above 300 </span></br>
                
            </div>
        </div>

       <div class="input-group" position="relative" style="padding:5px;">
            <div style="width:150px; position-relative;" onclick="showDivprice('color1','downcl');">
            <p><label>Color:&nbsp;&nbsp;<i id="downcl" class="glyphicon glyphicon-chevron-down"></i></label></p>
                </div>
            <div class="category" id="color1" style="display:none; padding-left:10px">
                <input type="checkbox" name="color[]" id="checkbox_id" value="blue">
                <span for="checkbox_id">blue</span></br>
                <input type="checkbox" name="color[]" id="checkbox_id" value="pink">
                <span for="checkbox_id">pink</span></br>
                <input type="checkbox" name="color[]"  id="checkbox_id" value="green">
                <span for="checkbox_id">green</span></br>
                <input type="checkbox" name="color[]"  id="checkbox_id" value="purple">
                <span for="checkbox_id">purple</span></br>
                <input type="checkbox" name="color[]"  id="checkbox_id" value="white">
                <span for="checkbox_id">white</span></br>
                <input type="checkbox" name="color[]"  id="checkbox_id" value="brown">
                <span for="checkbox_id">brown</span></br>
                <input type="checkbox" name="color[]"  id="checkbox_id" value="yellow">
                <span for="checkbox_id">yellow</span></br></br>
            </div>
        </div>
        
        <div class="input-group" position="relative">
         <button class="btn btn-default btn-sm" type="submit" aria-expanded="false">Refine</button>
        </div>
        </br>
    </form>
    </div> <!-- end of col-md-2-->


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

        <div class="col-md-10" id="container">




<?php foreach ($results as $row) {

 
  


        echo '<div class="row">';
                   echo '<form  method="post" action="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/addToCart/invitaion">';

           echo '<div class="col-md-7">';
       $img=$row->image;
         $imgconcat="";
             $imgconcat.="http://localhost/CodeIgniter-3.0.0/";
       $imgconcat.=$img;
                    echo "<img class='img-responsive img-hovercake' src='$imgconcat' alt=''>";
               
            echo '</div>';
            echo '<div class="col-md-5">';
               echo '<h3><b>' .$row->name. '</b></h3>';
               echo '<h4>Color' .$row->color. '/-</h4>';
              echo '<h4>Price: &#8377;' .$row->price. '/-</h4>';
               echo '<p><b>Product Description:</b>' .$row->description. '</p>';
         $cardid=$row->invitation_id;
                                echo "<input type='hidden' name='id' value='$cardid' />";
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

</div>
    </div> <!-- end of package div -->

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
