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
               
                <div class="row">
                    <div class="col-lg-4 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <span style="font-weight:bold;">Order ID</span>
                            </div>
                            <hr>
    <?php foreach($results as $row){?>

                            <div class="panel-body">

<?php echo $row->package_id;
          ?>                </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <span style="font-weight:bold;">Customer Name</span>
                            </div>
                            <hr>

                            <div class="panel-body">
                                <?php echo $row->username;  break;  ?>
                            </div>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="col-lg-4 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <span style="font-weight:bold;">Products</span>
                            </div>
                            <hr> 

                            <?php 
foreach($results as $row){

    ?>


                
                            <div class="panel-body">
                        <?php echo $row->name; ?>
                            </div>
                            <?php } ?>




                </div>
                <!-- /.row -->




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
                <!-- /.row -->

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
