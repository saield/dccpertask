<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Add Photography</title>

   
    <div class="container">

		
		<div class="row">
            <div class="col-md-8">
                <h3>Add Photography</h3>
				<hr>
                <form name="sentMessage" id="contactForm" novalidate action="http://localhost/CodeIgniter-3.0.0/index.php/birthday_controller/AddVideography/videography/addVideography" method="post">
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Name:</label>
                            <input type="text" name="name" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Description:</label>
                             <textarea name="description" rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Price:</label>
                            <input type="number" name="price" class="form-control" id="email" required data-validation-required-message="Please enter Price">
                        </div>
                    </div>
					<div class="control-group form-group">
                        <div class="controls">
                            <label>Picture:</label>
                            <input type="file" name='fileUpload' class="form-control" id="email" required data-validation-required-message="Please enter Seating capacity">
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" name="submit" class="btn btn-primary">Add</button>
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

</body>

</html>
