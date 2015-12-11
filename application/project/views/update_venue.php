<?php include('adminheader.php'); ?>


    <!-- Page Content -->
    <div class="container">

		<?php foreach($result as $row) { ?>
		<div class="row">
            <div class="col-md-8">
                <h3>Add Options</h3>
				<hr>
                <form name="sentMessage" id="contactForm" novalidate action="http://localhost/CodeIgniter-3.0.0/index.php/birthday_controller/update_venue" method="post" enctype="multipart/form-data">
                    
					<div class="control-group form-group">
                        <div class="controls">
                   
                            <input type="hidden" value="<?php echo $row->venue_id; ?>" name="id" class="form-control" required data-validation-required-message="Please enter your name.">
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
                            <label>Address:</label>
                            <input type="text" value='<?php echo $row->address; ?>' name="address" class="form-control"  required data-validation-required-message="Please enter Price">
                        </div>
                    </div>
					<div class="control-group form-group">
                        <div class="controls">
                            <label>Capacity:</label>
                            <input type="number" value='<?php echo $row->capacity; ?>' name="capacity" class="form-control" required data-validation-required-message="Please enter Price">
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
                            <input type="file" name='fileUpload' class="form-control"  required data-validation-required-message="Please enter ">
                        </div>
                    </div>
				<!--	<div class="control-group form-group">
                        <div class="controls">
                            <label>Table:</label>
                            <SELECT name = "table" onchange = "changeOptionValue()">
								<OPTION value="photography">Photography</OPTION>
								<OPTION value="videography">Videography</OPTION>
								<OPTION value="design&decor">Design and decor</OPTION>
								<OPTION value="invitationcards">Invitation cards</OPTION>
								<OPTION value="music">Music</OPTION>
								<OPTION value="games">Games</OPTION>
								<OPTION value="performances">Performances</OPTION>
								<OPTION value="returngifts">Return Gifts</OPTION>
								<OPTION value="moc">Master Of Ceremony</OPTION>
								<OPTION value="mascots">mascots</OPTION>
								<OPTION value="theme">Themes</OPTION>
								<OPTION value="catering">catering</OPTION>
							</SELECT
						</div>
                    </div> -->
					
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

</body>
<?php
break;}
?>
</html>
