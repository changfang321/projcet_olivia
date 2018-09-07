<?php
if (!isset($_SESSION)){
    session_start();
}
require_once('connection/connection.php');
$query = $db->query("SELECT *FROM products WHERE product_categories_id=".$_GET['category']);
$product_list = $query->fetchALL(PDO::FETCH_ASSOC) ;

$query2 = $db->query("SELECT * FROM product_categories WHERE product_categories_id=".$_GET['category']);
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

	
	<div id="fh5co-product">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<span>OLIVIA. Stuff</span>
					<h2><?php echo $pname['category']?></h2>
					<p></p>
				</div>
			</div>
			<div class="row">
			  <?php foreach($product_list as $product_ca) {?>
				<div class="col-sm-4 text-center animate-box">
					<div class="product  js-fullheight">
						<div class="product-grid" style="background-image:url(uploads/products/<?php echo $product_ca['picture']?>);">
							<div class="inner">
								<p>
									<a href="#" class="icon"><i class="icon-shopping-cart"></i></a>
									<a href="products.php?product_id=<?php echo $product_ca['products_id']?>" class="icon"><i class="icon-eye"></i></a>
								</p>
							</div>
						</div>
						<div class="desc">
							<h3><a href="#"><?php echo $product_ca['name']?></a></h3>
							<span class="price">$<?php echo $product_ca['price']?></span>
						</div>
					
					</div>
				</div>
			 <?php }?>
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

