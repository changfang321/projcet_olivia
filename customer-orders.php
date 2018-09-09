<?php
session_start();
require_once('connection/connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>


    <?php require_once('template/head_file.php'); ?>



</head>

<body>
<?php require_once('template/navbar.php'); ?>

    <!-- *** NAVBAR END *** -->

    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">

                    <ul class="breadcrumb">
                        <li><a href="index.php">首頁</a>
                        </li>
                        <li>訂單查詢</li>
                    </ul>

                </div>

                <div class="col-md-3">
                    <!-- *** CUSTOMER MENU ***
 _________________________________________________________ -->
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">訂單查詢</h3>
                        </div>

                        <div class="panel-body">

                            <ul class="nav nav-pills nav-stacked">
                                <li class="active">
                                    <a href="customer-orders.php"><i class="fa fa-list"></i> 訂單查詢</a>
                                </li>
                        </div>

                    </div>
                    <!-- /.col-md-3 -->

                    <!-- *** CUSTOMER MENU END *** -->
                </div>

               <div class="col-md-9" id="checkout">

<div class="box">
    <form method="get" action="customer-order.php" data-toggle="validator">
        <h1>訂單查詢</h1>
        <ul class="nav nav-pills nav-justified">
            <li class="active"><a href="#"><i class="fas fa-clipboard"></i><br>填寫訂單編號</a>
            </li>
        </ul>

        <div class="content">
            <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                <label for="order_no">訂單編號</label>
                    <input type="text" class="form-control" id="order_no" name="order_no" 
                    placeholder="olxxxxxxxxxx" data-error="請輸入訂單編號" required>
                 <div class="help-block with-errors text-left alert-warning"></div>
                </div>
             </div>


                </div>

            </div>
            <!-- /.row -->
        </div>

        <div class="box-footer">

            <div class="pull-right">
                <button type="submit" class="btn btn-primary">下一步<i class="fa fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </form>
</div>
<!-- /.box -->


</div>
<!-- /.col-md-9 -->

        <?php require_once('template/footbar.php'); ?>



</body>

</html>
