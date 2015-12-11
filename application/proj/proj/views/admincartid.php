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
                                <i class="fa fa-dashboard"></i>  <a href="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/tabs/adminheader">Dashboard</a>
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
                    <div class="col-lg-4 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <span style="font-weight:bold;">Order ID</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <span style="font-weight:bold;">Customer Name</span>
                            </div>
                        </div>
                    </div>
                 <div class="col-lg-3 text-center">
                    </div>
                </div>
                


                <hr>
               <?php foreach($results as $row){ 
                ?>
                <div class="row">
                    
                    <div class="col-lg-4 text-center">
                       
                        <div class="panel panel-default">
                           
                            <div class="panel-body">
                                <?php echo $row->package_id ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo $row->username ?>
                            </div>
                        </div>
                    </div>
                 <div class="col-lg-3 text-center">
                        <div class="panel-body">
                      <?php echo  "<a href='http://localhost/codeigniter-3.0.0/index.php/birthday_controller/displaycart/$row->package_id'>" ?>
                    <button type="submit"  class="btn btn-info btn-block" >View Order</button>
                </a>
                </div>
                    </div>
                </div><br>

                   <?php  } ?>

                        

              




                    
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
