<?php include('adminheader.php'); ?>

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="nav nav-tabs">
                            <li role="presentation" class="active"><a href="#">Add</a></li>
                            <li role="presentation"><a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/performance_forupdate">Update/Delete</a></li>
                        </ul>
                    </div>
                </div><br><br>




                <div class="row">
                    <div class="col-lg-6">

                        <form role="form" name ="add cake" method="post" action="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/AddPerformance/performance" enctype="multipart/form-data">

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
                            <label>Video URL:</label>
                            <input type="text" class="form-control" placeholder="Enter Video URL" name="url">
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

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
