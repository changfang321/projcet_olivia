<?php
session_start();
 
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
        OLIVIA. 收件者資料
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
                        <li>結帳 - 填寫收件者資料</li>
                    </ul>
                </div>

                <div class="col-md-9" id="checkout">

                    <div class="box">
                        <form method="post" action="checkout2.php?url=ch1" data-toggle="validator">
                            <h1>結帳</h1>
                            <ul class="nav nav-pills nav-justified">
                                <li class="active"><a href="#"><i class="fa fa-map-marker"></i><br>填寫收件者資料</a>
                                </li>
                                <li class="disabled"><a href="#"><i class="fa fa-truck"></i><br>選擇取貨方式</a>
                                </li>
                                <li class="disabled"><a href="#"><i class="fa fa-money"></i><br>選擇付款方式</a>
                                </li>
                                <li class="disabled"><a href="#"><i class="fa fa-eye"></i><br>訂單確認</a>
                                </li>
                            </ul>

                            <div class="content">
                                <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                    <label for="name">姓名</label>
                                        <input type="text" class="form-control" id="name" name="name" 
                                    value="<?php if(isset($_SESSION['Receiver']) && $_SESSION['Receiver'] != null) echo $_SESSION['Receiver']['name'];?>"data-error="請輸入名稱" required>
                                     <div class="help-block with-errors text-left alert-warning"></div>
                                    </div>
                                 </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="mobile">行動電話</label>
                                            <input type="text" class="form-control" id="mobile" name="mobile"
                                            value="<?php if(isset($_SESSION['Receiver']) && $_SESSION['Receiver'] != null) 
                                                echo $_SESSION['Receiver']['mobile'];
                                            ?>"data-error="請輸入行動電話" required>
                                            <div class="help-block with-errors text-left alert-warning"></div>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="row">
                                   <div id="twzipcode"> 
                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="zip">郵遞區號</label>
                                            <input type="text" class="form-control" id="zipcode" name="zipcode"
                                            value="<?php if(isset($_SESSION['Receiver']) && $_SESSION['Receiver'] != null) 
                                                echo $_SESSION['Receiver']['zipcode'];
                                            ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="city">城市</label>
                                            <select class="form-control" id="county" name="county"
                                            value="<?php if(isset($_SESSION['Receiver']) && $_SESSION['Receiver'] != null) 
                                                echo $_SESSION['Receiver']['county'];
                                            ?>"data-error="請選擇城市" required>
                                            <div class="help-block with-errors text-left alert-warning"></div>></select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="state">地區</label>
                                            <select class="form-control" id="district" name="district"
                                            value="<?php if(isset($_SESSION['Receiver']) && $_SESSION['Receiver'] != null) 
                                                echo $_SESSION['Receiver']['district'];
                                            ?>"></select>
                                        </div>
                                    </div>
                                   </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="address">地址</label>
                                            <input type="text" class="form-control" id="address" name="address"
                                            value="<?php if(isset($_SESSION['Receiver']) && $_SESSION['Receiver'] != null) 
                                                echo $_SESSION['Receiver']['address'];
                                            ?>"data-error="請輸入運送地址" required>
                                            <div class="help-block with-errors text-left alert-warning"></div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="phone">聯絡電話</label>
                                            <input type="text" class="form-control" id="phone" name="phone"
                                            value="<?php if(isset($_SESSION['Receiver']) && $_SESSION['Receiver'] != null) 
                                                echo $_SESSION['Receiver']['phone'];
                                            ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" id="email" name="email"
                                            value="<?php if(isset($_SESSION['Receiver']) && $_SESSION['Receiver'] != null) 
                                                echo $_SESSION['Receiver']['email'];
                                            ?>"data-error="請輸入email" required>
                                            <div class="help-block with-errors text-left alert-warning"></div>
                                        </div>
                                    </div>

                                </div>
                                <!-- /.row -->
                            </div>

                            <div class="box-footer">
                                <div class="pull-left">
                                    <a href="basket.php" class="btn btn-default"><i class="fa fa-chevron-left"></i>回購物車</a>
                                </div>
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

                <div class="col-md-3">

                  
                </div>
                <!-- /.col-md-3 -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->

        <?php require_once('template/footbar.php'); ?>
        <script src="js/jquery.twzipcode.min.js"></script>
        <script>
        $(function(){
            
        <?php if(isset($_SESSION['Receiver'])){ ?>
            $('#twzipcode').twzipcode({
              'zipcodeSel'  : '<?php echo $_SESSION['Receiver']['zipcode'];?>', // 此參數會優先於 countySel, districtSel
              'countySel'   : '<?php echo $_SESSION['Receiver']['county'];?>',
              'districtSel' : '<?php echo $_SESSION['Receiver']['district'];?>'
            });
            <?php } else { ?>
             $('#twzipcode').twzipcode({
            });
        <?php } ?>
            
            $('#twzipcode').find('select[name="county"]').eq(1).remove();
            $('#twzipcode').find('select[name="district"]').eq(1).remove();
            $('#twzipcode').find('input[name="zipcode"]').eq(1).remove();


        });

        
        
        </script>
                            






</body>

</html>