<?php
if (!isset($_SESSION)){
    session_start();
}
require_once('connection/connection.php');
$query = $db->query("SELECT *FROM products WHERE products_id=".$_GET['product_id']);
$product = $query->fetch(PDO::FETCH_ASSOC) ;
$query2 = $db->query("SELECT * FROM product_categories WHERE product_categories_id=".$product['product_categories_id']);
$pname = $query2->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Cake House 帶給你最天然健康的幸福滋味">
    <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
    <meta name="keywords" content="">

    <title>
        Cake House : 帶給你最天然健康的幸福滋味
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
 
                        <li><?php echo $pname['category'] ; ?></li>
                    </ul>

                </div>

<div class="col-md-3">
                    <!-- *** MENUS AND FILTERS ***
 _________________________________________________________ -->
 <div class="panel panel-default sidebar-menu">

<div class="panel-heading">
    <h3 class="panel-title">產品分類</h3>
</div>

<div class="panel-body">
    <ul class="nav nav-pills nav-stacked category-menu">
    <?php foreach($categories as $side_categories){
        $query = $db->query("SELECT * FROM products WHERE product_categories_id=".$side_categories['product_categories_id']);
        $total_products = count($query->fetchALL(PDO::FETCH_ASSOC));
        ?>



        <li>
            <a href="product.php?category=<?php echo $side_categories['product_categories_id'];?>"><?php echo $side_categories['category']; ?> 
            <span class="badge pull-right"><?php echo $total_products;?></span></a>
            
        </li>
    <?php } ?>

    </ul>

</div>
</div>

                    
                    

<!-- *** MENUS AND FILTERS END *** -->

                    <div class="banner">
                        <a href="#">
                            <img src="../images/ad-banner.jpg" alt="sales 2014" class="img-responsive">
                        </a>
                    </div>
                </div>

                <div class="col-md-9">

                    <div class="row" id="productMain">
                        <div class="col-sm-6">
                            <div id="mainImage">
                                <img src="uploads/products/<?php echo $product['picture'];?>"  alt="" class="img-responsive">
                       </div>



                        <?php if($product['type']==1) {?>
                            <div class="ribbon sale">
                                <div class="theribbon">SALE</div>
                                <div class="ribbon-background"></div>
                            </div>
                        <?php }else if($product['type']==2){ ?>
                            <!-- /.ribbon -->

                            <div class="ribbon new">
                                <div class="theribbon">NEW</div>
                                <div class="ribbon-background"></div>
                            </div>
                            <?php } ?>
                            <!-- /.ribbon -->

                        </div>
                        <div class="col-sm-6">

                        <form action="cart/add_cart.php" method='post'>
                            <div class="box">
                                
                                <h1 class="text-center"><?php echo $product['name'];?></h1>
                                <p class="goToDescription"><a href="#details" class="scroll-to">詳細介紹</a>
                                </p>
                                <p class="quantity"><input type="number" value='1' name='quantity' class='form-conteol'></p>
                                <p class="price">$<?php echo $product['price'];?></p>
                                <?php if(isset($_GET['Existed']) && $_GET['Existed'] != null){
                                            if($_GET['Existed'] == 'true'){ ?>
                                    <div class="alert alert-danger">
                                        <strong>此商品已存在購物車，請至「我的購物車」修改數量。</strong>
                                    </div>
                                    <?php }else{ ?>
                                     <div class="alert alert-danger">
                                        <strong>成功加入購物車!</strong>
                                    </div>   
                                    <?php  }//end $_GET['Existed'] == 'true'
                                        } ?>   

                                <p class="text-center buttons">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>加入購物車</button>
                                </p>

                                <input type="hidden" name="picture" value="<?php echo $product['picture'];?> ">
                                <input type="hidden" name="name" value="<?php echo $product['name'];?> ">
                                <input type="hidden" name="price" value="<?php echo $product['price'];?> ">
                                <input type="hidden" name="products_id" value="<?php echo $product['products_id'];?> ">

                            </div>
                        </form>
                            <div class="row" id="thumbs">

                            </div>
                        </div>

                    </div>
                    
                    

                    <div class="box" id="details">
                    <div class="row">
				<div class="col-md-12 ">
					<div class="fh5co-tabs animate-box">
						<ul class="fh5co-tab-nav">
							<li class="active"><a href="#" data-tab="1"><span class="icon visible-xs"><i class="icon-file"></i></span><span class="hidden-xs">商品敘述</span></a></li>
							<li><a href="#" data-tab="2"><span class="icon visible-xs"><i class="icon-bar-graph"></i></span><span class="hidden-xs">購物須知</span></a></li>
							<li><a href="#" data-tab="3"><span class="icon visible-xs"><i class="icon-star"></i></span><span class="hidden-xs">注意事項</span></a></li>
						</ul>

						<!-- Tabs -->
						<div class="fh5co-tab-content-wrap">

							<div class="fh5co-tab-content tab-content active" data-tab-content="1">
								<div class="col-md-12 ">
									<h2><?php echo $product['name'];?></h2>
									<p><?php echo $product['description'];?></p>
									<div class="row">
										<div class="col-md-6">
										<h2 class="uppercase">give you peace</h2>
										</div>
										<div class="col-md-6">
										<h2 class="uppercase">blow you mind</h2>
										</div>
									</div>

								</div>
							</div>

							<div class="fh5co-tab-content tab-content" data-tab-content="2">
								<div class="col-md-12">
									<h3>購物須知</h3>
									<ul>
										<li>配送時段	早上09:00~12:00下午12:00~ 17:00晚上17:00 ~21:00指定時間+額外運費 <br>
                                        * 節日期間因為配送量較多，無法指定時段，只可選擇5pm前或5pm後配送。
                                       </li>
										<li>訂購時間<br>
											1.花店訂單需於配送日期前一工作天17:00前，完成訂購與付款。<br>
											2.臨時訂單請來電洽詢<br>
                                            3.花店僅接受1個月內的訂單預約。
                                        </li>
									</ul>
								</div>
                            </div>
                            
							<div class="fh5co-tab-content tab-content" data-tab-content="3">
								<div class="col-md-12 ">
                                <h3>注意事項</h3>
									<ul>
                                    <li>
									    	1. 花材配材因市場因素短缺，將直接以其他材料代替，不再另行通知。<br>
											2. 主花材因市場因素短缺，將以電話通知可更換花材。<br>
											3. 盆花、盆栽、蘭花圖片內之花器通常為參考，實際花器以現貨為主。</li>
										<li>花材照顧<br>
											1. 玫瑰、結梗、香水百合等主花材壽命約5天。請保持空氣流通、溫度<30度、適度加水換水，可增加觀賞期。<br>
											2. 蘭花類壽命約3周以上。<br>
											3. 盆栽類均為適合室內種植的植物，可長期種植。</li>
                                        </li>
									</ul>
									</div>

								</div>
							</div>

						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

                            </div>
                    </div>

                    

                    

                </div>
                <!-- /.col-md-9 -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


       <?php require_once('template/footbar.php'); ?>


   <!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>



</body>

</html>