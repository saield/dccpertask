<?php include('adminheader.php'); ?>

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="nav nav-tabs">
                            <li role="presentation" class="active"><a href="#">Add</a></li>
                           <?php echo "<li role='presentation'><a href='http://localhost/CodeIgniter-3.0.0/index.php/birthday_controller/service_forupdate/$table/$table_id'>Update/Delete</a></li> " ?>
                        </ul>
                    </div>
                </div>
                <br><br>


                <div class="row">
                    <div class="col-lg-6">

                        <?php echo "<form role='form' name ='add cake' method='post' action='http://localhost/codeigniter-3.0.0/index.php/birthday_controller/addVideography/$table' enctype='multipart/form-data'>" ?>

                            <div class="form-group">
                                <label>Name:</label>
                                <input type="text" class="form-control" placeholder="Enter Name" name="name">
                            </div>

                            <div class="form-group">
                                <label>Description:</label>
                                <textarea class="form-control" placeholder="Enter Description" rows="3" name="description"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Price:</label>
                                <input type="number" class="form-control" placeholder="Enter Price" name="price">
                            </div>

                            <div class="form-group">
                            <label>Image:</label>
                            <input type="file" name='fileUpload' />
                            </div>

                            
                            <button type="submit" name="submit" class="btn btn-primary">Add</button>
                            <button type="reset" class="btn btn-primary">Reset</button>
                        

                        </form>
                        </div>
                    </div>
                    <br>
                    <hr>
                
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    <!-- </div> -->
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="http://localhost/CodeIgniter-3.0.0/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="http://localhost/CodeIgniter-3.0.0/js/bootstrap.min.js"></script>


    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
