<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Update Cakes</title>

   <?php include('adminheader.php'); ?>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Birthday Bash</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

		
		<div class="row">
            <div class="col-md-8">
                <h3>Update</h3>

                <?php foreach($result as $row){ ?>
				<hr>
                <form name="sentMessage"  novalidate action="http://localhost/CodeIgniter-3.0.0/index.php/birthday_controller/update_cake" method="post" enctype="multipart/form-data">
                    
					<div class="control-group form-group">
                        <div class="controls">
                   
                            <input type="hidden" value='<?php echo $row->cake_id; ?>' name="id" class="form-control" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
					
					<div class="control-group form-group">
                        <div class="controls">
                            <label>Name:</label>
                            <input type="text" value='<?php echo $row->name; ?>' name="name" class="form-control" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Description:</label>
							
                         <textarea name="description" rows="10" cols="100" class="form-control"  required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"> <?php echo $row->description; ?> </textarea>
                        </div>
                    </div>
					 
					
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Price:</label>
                            <input type="number" value='<?php echo $row->price; ?>' name="price" class="form-control"  required data-validation-required-message="Please enter Price">
                        </div>
                    </div>
					
                    
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Picture:</label>
                            <input type="file" name='fileUpload' class="form-control" required data-validation-required-message="Please enter "/>
                        </div>
                    </div>

				
					
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" name="submit" class="btn btn-primary">Save</button>
                </form>
            </div>

        </div>
		


		
	
        
        <!-- /.row -->

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
<?php
break; }
?>
</body>

</html>
