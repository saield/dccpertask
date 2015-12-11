<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cakes</title>

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
                <h1 class="page-header">Cakes
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Cakes</li>
                </ol>
            </div>
        </div>

        <!-- *************************************************************************** -->

        <!-- /.row -->
        <div class="package">






        <div class="col-md-2" style="background:#ebebeb; border-radius: 15px; box-shadow: 5px 5px 15px #888888; margin-bottom:10px;">
    
            <p style="padding-top:20px;"><label>Refine your Search:</label></p>
            

      <form  method="post" action="<?php echo base_url() ?>index.php/birthday_controller/searchD/cakes">
        <div class="input-group" position="relative" style="padding:5px;">
            <div style="width:150px; position-relative;" onclick="showDivcat('cat','downc')">
            <p><label>Category:&nbsp;&nbsp;<i id="downc" class="glyphicon glyphicon-chevron-down"></i></label></p>
            </div>
            <div class="category" id="cat" style="display:none; padding-left:10px">
               <!-- <input type="checkbox" name="category" id="checkbox_id" value="veg" onchange="showContent(this);"> -->
                                <input type="checkbox" name="category" id="checkbox_id" value="veg" >

                <span for="checkbox_id">Veg</span></br>
                <input type="checkbox" name="category" id="checkbox_id" value="non-veg" >
                <span for="checkbox_id">Non veg</span></br></br>
            </div>
        </div>
        



        <div class="input-group" position="relative" style="padding:5px;">
            <div style="width:150px; position-relative;" onclick="showDivcat('price1','downp')">
            <p><label>Price Range:&nbsp;&nbsp;<i id="downp" class="glyphicon glyphicon-chevron-down"></i></label></p>
                </div>          
            <div class="category" id="price1" style="display:none; padding-left:10px">
                <input type="radio" name="pricer" id="checkbox_id"  value="0,1000">
                <span for="checkbox_id">0-1000 </span></br>
                <input type="radio" name="pricer" id="checkbox_id" value="1000,2000">
                <span for="checkbox_id">1000-2000</span></br>
                <input type="radio" name="pricer" id="checkbox_id" value="2000,3000">
                <span for="checkbox_id">2000-3000 </span></br>
                <input type="radio" name="pricer" id="checkbox_id" value="3000,8000">
                <span for="checkbox_id">above 3000 </span></br>
                
            </div>
        </div>
       


        <div class="input-group" position="relative" style="padding:5px;">
            <div style="width:150px; position-relative;" onclick="showDivcat('weight1','downw'))">
            <p><label>Weight:&nbsp;&nbsp;<i id="downw" class="glyphicon glyphicon-chevron-down"></i></label></p>
                </div>
            <div class="category" id="weight1" style="display:none; padding-left:10px">
                <input type="radio" name="weight" id="checkbox_id" value="1">
                <span for="checkbox_id">1 kg</span></br>
                <input type="radio" name="weight" id="checkbox_id" value="2">
                <span for="checkbox_id">2 kg</span></br>
                <input type="radio" name="weight"  id="checkbox_id" value="3">
                <span for="checkbox_id">3 kg</span></br>
                <input type="radio" name="weight"  id="checkbox_id" value="4">
                <span for="checkbox_id">4 kg</span></br>
                <input type="radio" name="weight"  id="checkbox_id" value="5">
                <span for="checkbox_id">5 kg</span></br></br>
            </div>
        </div>

         <div class="input-group" position="relative" style="padding:5px;">
            <div style="width:150px; position-relative;" onclick="showDivcat('color1','downcl')">
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
                <span for="checkbox_id">white</span></br></br>
            </div>
        </div>
        
        <div class="input-group" position="relative">
         <button class="btn btn-default btn-sm" type="submit" aria-expanded="false">Refine</button>
        </div>
        </br>
    </form>
    </div> <!-- end of col-md-2-->



        <script>
       
 function showDivcat(cat , downc) {
           var div = document.getElementById(cat);
            if (div.style.display !== "none") {
                div.style.display = "none";
                document.getElementById(downc).className = "glyphicon glyphicon-chevron-down";
            }
            else {
                div.style.display = "block";
                document.getElementById(downc).className = "glyphicon glyphicon-chevron-up";
                }
            }


      

function showContent(ele) {
     var name=ele.name;
    if (ele.checked){ 
     var value=ele.value;
 if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
         xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("container").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","<?php echo base_url()?>index.php/birthday_controller/search/cakes?q="+value,true);
        xmlhttp.send();
 
    }
          else
            alert("yeye");
   /* } else { 
        
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
 
    }
*/
}


           
        </script>


        <script>
        function mymodal(){
                $('#myModal').modal(data-show="");
            }
            </script>






        


        <div class="col-md-10" id="container">
        <!-- Projects Row -->
        <?php

foreach ($results as $row) {

 
  


        echo '<div class="row">';
                    echo "<form name='c' method='post' action='addToCart/cakes'>";

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
                echo'<h4>Weight: 5 kg</h4> ';
               echo '<p><b>Product Description:</b>' .$row->description. '</p>';
               $cakeid=$row->cake_id;
               $_SESSION['id']=$cakeid;

                                echo "<input type='hidden' name='id' value='$cakeid' />";
                                echo "<input type='hidden' name='name' value='$row->name' />";
                                echo "<input type='hidden' name='price' value='$row->price' />";
                                echo "<input type='hidden' name='qty' value='1' />";
                                echo "<input type='hidden' name='image' value='$imgconcat' />";

           echo "<button type='submit' class='btn btn-primary' >Add to Cart</button>";
           echo '</div>';
                  echo '</form>';

        echo '</div>';
        echo '<hr />';
        
}
        ?>
       
    </div> <!-- end of col-md-10-->


    </div> <!-- end of package div -->


        <!-- *************************************************************************** -->

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
    <script src="<?php echo base_url()?>js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()?>js/bootstrap.min.js"></script>

</body>

</html>
