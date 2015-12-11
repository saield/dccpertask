<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Cart</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	
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
                <h1 class="page-header">Cart
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Cart</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->


    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover border">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th class="text-center">Price</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                <form name="nm" method="post">
                <?php 
				  $cart=$this->cart->contents();
				  foreach($cart as $item){
					 
				 
				?>


                    <tr>
                        <td class="col-sm-8 col-md-6">
                        <div class="media">
                      
                    <a class="thumbnail pull-left" href="#"> <img class="media-object" src='<?php echo $item['image'] ?> ' style="width: 105px; height: 72px;"> </a>
                            <div class="media-body">
                 <h4 class="media-heading" style="margin-top:15px;"><a href="#"><?php echo $item['name'] ?></a></h4>
                                
                             <span>Message: </span><span class="text-success"><strong>success</strong></span>
                            </div>
                        </div></td>
						
                        <td class="col-sm-1 col-md-1 text-center"><strong>&#8377; <?php echo $item['price'] ?></strong></td>
                        <td class="col-sm-1 col-md-1">

                            <a href='http://localhost/CodeIgniter-3.0.0/index.php/birthday_controller/remove/<?php echo $item['rowid'] ?>'>
                        <button type="button" class="btn btn-danger">
                            <span class="glyphicon glyphicon-remove"></span> Remove

                        </button>
                    </a>
                    </td>
                    </tr>
                </form>
					<?php } ?>
                                        <tr>
                        
                        <td>   </td>
                        <td><h3>Total</h3></td>
                        <td class="text-right"><h3><strong>&#8377; <?php echo $this->cart->total() ; ?></strong></h3></td>
                    </tr>
                       <td>
                        <a href="http://localhost/CodeIgniter-3.0.0/index.php/birthday_controller/tabs/newservices"><button type="button" class="btn btn-default">
                            <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
                        </button></a></td>
                        <td>
                            <a href="http://localhost/CodeIgniter-3.0.0/index.php/birthday_controller/addorder">
                        <button type="button" class="btn btn-success">
                           <span class="glyphicon glyphicon-play"></span> Place Order 
                        </button></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
<?php include('footer.php') ; ?>
</body>
</html>