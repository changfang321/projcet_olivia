<?php
session_start();
require_once('connection/connection.php');
/*$query = $db->query("SELECT *FROM products WHERE products_id=".$_GET['id']);
$product = $query->fetch(PDO::FETCH_ASSOC) ;*/

$query = $db->query("SELECT * FROM customer_orders WHERE order_no ='".$_GET['order_no']."'");
$orders = $query->fetch(PDO::FETCH_ASSOC) ;

print_r($orders['customer_orders_id']);


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
                        <li><a href="../index.php">首頁</a>
                        </li>
                        <li><a href="customer-orders.php">我的訂單</a>
                        </li>
                    </ul>

                </div>

                <div class="col-md-3">
                    <!-- *** CUSTOMER MENU ***
 _________________________________________________________ -->
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">查詢訂單</h3>
                        </div>

                        <div class="panel-body">

                            <ul class="nav nav-pills nav-stacked">
                                <li class="active">
                                    <a href="customer-orders.php"><i class="fa fa-list"></i> 我的訂單</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- /.col-md-3 -->

                    <!-- *** CUSTOMER MENU END *** -->
                </div>

                <div class="col-md-9" id="customer-order">
                    <div class="box">
                        <?php if ($orders != null) {?>
                        <h1>訂單 <?php echo $orders['order_no']?></h1>


                        <p class="lead">於 <strong><?php echo $orders['created_at']?></strong> 成立，目前狀態為
                        <strong>
                        <?php switch($orders['status']){
                                                  case '0':
                                                  echo  '<span class="label label-info">待付款</span>
                                                  <div class="col-sm-12">
                                                  <div class="alert alert-danger text-center">
                                                             <strong>本訂單尚未付款，請於7日內付款，7日後未付款自動取消訂單!</strong> 
                                                         </div>
                                                  </div>
                                                   ';
                                                  break;
                                                  case '1':
                                                  echo  '<span class="label label-success">已付款</span>';
                                                  break;
                                                  case '2':
                                                  echo  '<span class="label label-success">貨物已送達</span>';
                                                  break;
                                                  case '3':
                                                  echo '<span class="label label-warning">出貨中</span>';
                                                  break; 
                                                  case '99':
                                                  echo '<span class="label label-danger">取消訂單</span>';
                                                  break;
                                                  }
                                                  ?> 
                        </strong></p>
                        <p class="text-muted">有任何問題請 <a href="contact.php">聯絡我們</a>, 我們將盡快回覆您.</p>
                        

                        <hr>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="2">產品名稱</th>
                                        <th>數量</th>
                                        <th>單價</th>
                                        <th>折扣</th>
                                        <th>小計</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                <?php 
                                 $query2 = $db->query("SELECT * FROM order_details WHERE customer_orders_id =".$orders['customer_orders_id']);
                                 $data = $query2->fetchAll(PDO::FETCH_ASSOC) ;
                                
                                    foreach($data as $product){?>
                                        <td>
                                            <a href="product.php?id=<?php echo $product['products_id'];?>">
                                                <img src="uploads/products/<?php echo $product['picture'];?>" alt="">
                                            </a>
                                        </td>
                                        <td><a href="#"><?php echo $product['name'];?></a>
                                        </td>
                                        <td><?php echo $product['quantity'];?></td>
                                        <td><?php echo $product['price'];?></td>
                                
                                        <td>0</td>
                                        <td><?php echo $product['price']* $product['quantity'];?></td>
                                    </tr>
                                <?php }?>  
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="5" class="text-right">訂單總計</th>
                                        <th><?php echo $orders['total_price'];?></th>
                                    </tr>
                                    <tr>
                                        <th colspan="5" class="text-right">運費</th>
                                        <th><?php echo $orders['shipping'];?></th>
                                    </tr>
                                   
                                    <tr>
                                        <th colspan="5" class="text-right">合計</th>
                                        <th><?php echo $orders['total_price']+$orders['shipping'];?></th>
                                    </tr>
                                </tfoot>
                            </table>
                            <div class="col-md-6">
                                <h2>送貨資訊</h2>
                                <p><?php echo $orders['name'];?>
                                    <br>連絡電話:<?php echo $orders['phone'];?>
                                    <br>地址:<?php echo $orders['zipcode'];?> <?php echo $orders['county']. $orders['district']. $orders['address'];?></p>
                            </div>
                        </div>
                        <!-- /.table-responsive -->
                                    <?php } else{?>
                                        <div class="col-sm-12">
                                                  <div class="alert alert-danger text-center">
                                                             <strong>無此訂單或訂單輸入錯誤請重新輸入!</strong> 
                                                         </div>
                                                  </div>
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
                                    <?php } ?>

                    </div>
                     <!-- /.box -->
                </div>

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


       <?php require_once('template/footbar.php'); ?>



</body>

</html>
