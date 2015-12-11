  <?php
        include ('adminheader.php');
  ?>
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Orders
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="glyphicon glyphicon-shopping-cart"></i> Order Cart
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                

                <hr style="height:1px;border:none;color:#333;background-color:#333;">
                <div class="row">
                    <div class="col-lg-3 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <span style="font-weight:bold;">Order ID</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <span style="font-weight:bold;">Date</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <span style="font-weight:bold;">Customer Name</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <span style="font-weight:bold;">Products</span>
                            </div>
                        </div>
                    </div>
                </div>
 <?php foreach($results as $row){?>
                    <div class="row">
                    <div class="col-lg-3 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo $row->package_id;
          ?>  
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                          <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo $row->dateEvent;
          ?>  
                            </div>
                        </div>                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo $row->username;
          ?>  
                            </div>
                        </div>
                    </div>
                                                <?php break;} ?>

                    <div class="col-lg-3 text-center">
                        <div class="panel panel-default">
                           
                            <?php 
foreach($results as $row){

    ?>
                            <div class="panel-body">
                        <?php echo $row->name; ?>
                            </div>
                                                        <?php } ?>

                           
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <span style="font-weight:bold;">Total Price</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <i class="fa fa-inr">&nbsp;</i><span style="font-weight:bold;"><?php 
echo $total

    ?></span>
                            </div>
                        </div>
                    </div>
                </div>

              <!--   <div class="row">
                    <div class="col-lg-9 text-center">
                    </div>
                    <div class="col-lg-3 text-center" style="float: right;">
                        <button type="button" class="btn btn-success">Confirm</button>&nbsp;&nbsp;
                        <button type="button" class="btn btn-danger">Cancel</button>
                    </div>
                </div>
                    -->
                
                <hr style="height:1px;border:none;color:#333;background-color:#333;">


                




                <hr style="height:1px;border:none;color:#333;background-color:#333;">
                <!-- /.row -->
            </div>
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

</body>

</html>
