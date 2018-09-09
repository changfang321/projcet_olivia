<?php
session_start();
if(!isset($_SESSION['Receiver'])||($_GET['url']=='ch1' && isset($_SESSION['Receiver']))){
    $temp['name']           = $_POST['name'];
    $temp['mobile']         = $_POST['mobile'];
    $temp['zipcode']        = $_POST['zipcode'];
    $temp['county']         = $_POST['county'];
    $temp['district']       = $_POST['district'];
    $temp['address']        = $_POST['address'];
    $temp['phone']          = $_POST['phone'];
    $temp['email']          = $_POST['email'];
    $temp['delivery'] = null;
    $temp['payment']  = null;
    //將陣列資料加入到session Cart中
    $_SESSION['Receiver'] = $temp;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
    <meta name="keywords" content="">

    <title>
        OLIVIA. 貨運選擇
    </title>

    <meta name="keywords" content="">

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
                        <li>結帳 - Delivery method</li>
                    </ul>
                </div>

                <div class="col-md-9" id="checkout">

                    <div class="box">
                        <form method="post" action="checkout3.php">
                            <h1>結帳 - Delivery method</h1>
                            <ul class="nav nav-pills nav-justified">
                                <li><a href="checkout1.php"><i class="fa fa-map-marker"></i><br>填寫收件者資料</a>
                                </li>
                                <li class="active"><a href="#"><i class="fa fa-truck"></i><br>選擇取貨方式</a>
                                </li>
                                <li class="disabled"><a href="#"><i class="fa fa-money"></i><br>選擇付款方式</a>
                                </li>
                                <li class="disabled"><a href="#"><i class="fa fa-eye"></i><br>訂單確認</a>
                                </li>
                            </ul>

                            <div class="content">
                                <div class="row">
                                
                                 <div class="col-sm-12">
                                 <div class="alert alert-info text-center">
                                            <strong>本賣場商品除運送過程中造成毀損事情況退換貨，其餘狀況均不受理退換貨!</strong> 
                                        </div>
                                 </div>



                                    <div class="col-sm-6">
                                        <div class="box shipping-method">

                                            <h4>宅配</h4>

                                            <p>本店使用黑貓宅配送。</p>

                                            <div class="box-footer text-center">

                                                <input type="radio" checked name="delivery" value="90">
                                            </div>
                                        </div>
                                    </div>

 
                                   <!-- <div class="col-sm-6">
                                        <div class="box shipping-method">

                                            <h4>貨到付款</h4>

                                            <p>貨到付款需要備註說明送達時段</p>

                                            <div class="box-footer text-center">

                                                <input type="radio"  name="delivery" value="100">
                                            </div>
                                        </div>
                                    </div> -->

                                    <input type="hidden" name="Delivery" value="POST"> 
                                </div>
                                <!-- /.row -->

                            </div>
                            <!-- /.content -->

                            <div class="box-footer">
                                <div class="pull-left">
                                    <a href="checkout1.php" class="btn btn-default"><i class="fa fa-chevron-left"></i>上一步</a>
                                </div>
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-primary">繼續<i class="fa fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->


                </div>
                <!-- /.col-md-9 -->

                <div class="col-md-3">

                </div>
                <!-- /.col-md-3 -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->
</div>

       <?php require_once('template/footbar.php'); ?>






</body>

</html>