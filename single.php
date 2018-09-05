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

<!DOCTYPE HTML>
<html>
	<head>
	<?php require_once('template/head_file.php') ;?>
	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<?php require_once('template/navbar.php') ;?>

	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm text-center" role="banner" style="background-image:url(uploads/category/<?php echo $pname['picture'] ?>);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>商品敘述</h1>
							<h2> <a href="#" target="_blank"></a></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<div id="fh5co-product">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 animate-box">
					
					<div class="owl-carousel owl-carousel-fullwidth product-carousel">
						<div class="item">
							<div class="active text-center">
								<figure>
									<img src="uploads/products/<?php echo $product['picture'];?>" alt="user">
								</figure>
							</div>
						</div>
					</div>

					<div class="row animate-box">
						<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
							<h2><?php echo $product['name'];?></h2>
							<p>
								<a href="#" class="btn btn-primary btn-outline btn-lg"><i class="icon-shopping-cart"></i>Add to Cart</a>
								<a href="#" class="btn btn-primary btn-outline btn-lg">Compare</a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="fh5co-tabs animate-box">
						<ul class="fh5co-tab-nav">
							<li class="active"><a href="#" data-tab="1"><span class="icon visible-xs"><i class="icon-file"></i></span><span class="hidden-xs">商品敘述</span></a></li>
							<li><a href="#" data-tab="2"><span class="icon visible-xs"><i class="icon-bar-graph"></i></span><span class="hidden-xs">購物須知</span></a></li>
							<li><a href="#" data-tab="3"><span class="icon visible-xs"><i class="icon-star"></i></span><span class="hidden-xs">Feedback &amp; Ratings</span></a></li>
						</ul>

						<!-- Tabs -->
						<div class="fh5co-tab-content-wrap">

							<div class="fh5co-tab-content tab-content active" data-tab-content="1">
								<div class="col-md-10 col-md-offset-1">
									<span class="price">TW: <?php echo $product['price'];?></span>
									<h2><?php echo $product['name'];?></h2>
									<p><?php echo $product['description'];?></p>

									<p></p>

									<div class="row">
										<div class="col-md-6">
											<h2 class="uppercase">Keep it simple</h2>
											<p>Ullam dolorum iure dolore dicta fuga ipsa velit veritatis</p>
										</div>
										<div class="col-md-6">
											<h2 class="uppercase">Less is more</h2>
											<p>Ullam dolorum iure dolore dicta fuga ipsa velit veritatis</p>
										</div>
									</div>

								</div>
							</div>

							<div class="fh5co-tab-content tab-content" data-tab-content="2">
								<div class="col-md-10 col-md-offset-1">
									<h3>購物須知</h3>
									<ul>
										<li>配送時段	早上09:00~12:00下午12:00~ 17:00晚上17:00 ~21:00指定時間+額外運費 <br>
									    * 節日期間因為配送量較多，無法指定時段，只可選擇5pm前或5pm後配送。</li>
										<li>訂購時間<br>
											1.花店訂單需於配送日期前一工作天17:00前，完成訂購與付款。<br>
											2.臨時訂單請來電洽詢<br>
											3.花店僅接受1個月內的訂單預約。</li>
										<li>注意事項<br>
											1. 花材配材因市場因素短缺，將直接以其他材料代替，不再另行通知。<br>
											2. 主花材因市場因素短缺，將以電話通知可更換花材。<br>
											3. 盆花、盆栽、蘭花圖片內之花器通常為參考，實際花器以現貨為主。</li>
										<li>花材照顧<br>
											1. 玫瑰、結梗、香水百合等主花材壽命約5天。請保持空氣流通、溫度<30度、適度加水換水，可增加觀賞期。<br>
											2. 蘭花類壽命約3周以上。<br>
											3. 盆栽類均為適合室內種植的植物，可長期種植。</li>
									</ul>
								</div>
							</div>


						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-started">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Newsletter</h2>
					<p>Just stay tune for our latest Product. Now you can subscribe</p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<form class="form-inline">
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label for="email" class="sr-only">Email</label>
								<input type="email" class="form-control" id="email" placeholder="Email">
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<button type="submit" class="btn btn-default btn-block">Subscribe</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

<?php require_once('template/footbar.php') ;?>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
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
