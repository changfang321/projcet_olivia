<?php
session_start();
require_once('connection/connection.php');
$query = $db->query("SELECT * FROM product_categories ORDER BY product_categories_id ASC");
$categories = $query->fetchAll(PDO::FETCH_ASSOC);
//productlist
$query2 = $db->query("SELECT * FROM products ORDER BY created_at  DESC LIMIT 0,6");
$product_list = $query2->fetchAll(PDO::FETCH_ASSOC);

//newslist
$query3 = $db->query("SELECT * FROM news ORDER BY published_date  DESC LIMIT 0,6");
$news_list = $query3->fetchAll(PDO::FETCH_ASSOC);
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
	
	<aside id="fh5co-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(images/img_bg_1.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<div class="desc">
		   						<span class="price">Wedding arrangement</span>
		   						<h2>婚禮佈置</h2>
		   						<p>樂覓婚禮顧問為新人規劃過多樣化的婚禮主題佈置 從海洋風、旅行風、鄉村風、酒莊婚禮以及白金色、玫瑰金、童話故事風、歐式莊園風、時尚精品風、法式浪漫風、英倫風、大亨小傳風、咖啡主題婚禮…等，多變樣式且富有創意、故事性的主題，正等著您倆來實現．</p>
			   					<p><a href="#" class="btn btn-primary btn-outline btn-lg">Purchase Now</a></p>
		   					</div>
		   				</div>
		   			</div>
		   		</div>
			   </li>
			   <!-- oooooooo -->
		   	<li style="background-image: url(images/img_bg_2.jpg);">
		   		<div class="container">
		   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<div class="desc">
		   						<span class="price">Flower arrangement</span>
		   						<h2>花藝教學</h2>
		   						<p>忙碌的生活中，空閒時你會如何放鬆？除了喝咖啡、看電影之外，不妨嘗試與花草植物相處的午后。不論是乾燥花、永生花、新鮮花朵，在花藝教室體驗手作，把迷人的花花草草帶入你生活的場所，細細品味一草一木，享受手作過程的純淨美好；跟著 Olivia 用植物開啟質感生活吧！ </p>
			   					<p><a href="#" class="btn btn-primary btn-outline btn-lg">Purchase Now</a></p>
		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

<!--	<div id="fh5co-services" class="fh5co-bg-section">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4 text-center">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-credit-card"></i>
						</span>
						<h3>Credit Card</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p>
						<p><a href="#" class="btn btn-primary btn-outline">Learn More</a></p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 text-center">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-wallet"></i>
						</span>
						<h3>Save Money</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p>
						<p><a href="#" class="btn btn-primary btn-outline">Learn More</a></p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 text-center">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-paper-plane"></i>
						</span>
						<h3>Free Delivery</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p>
						<p><a href="#" class="btn btn-primary btn-outline">Learn More</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-product">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<span>Cool Stuff</span>
					<h2>Products.</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
		
			<div class="row">
			<?php foreach($product_list as $product){ ?>
				<div class="col-md-4 text-center animate-box">
					<div class="product">
						<div class="product-grid" style="background-image:url(uploads/products/<?php echo $product['picture']?>);">
						<?php if($product['type']==2)
						 		echo "<span class='sale'>Sale</span>";
							  if($product['type']==1)
							    echo "<span class='sale'>New</span>";
					    ?>
							  
							<div class="inner">
								<p>
									<a href="single.php" class="icon"><i class="icon-shopping-cart"></i></a>
									<a href="single.php?product_id=<?php echo $product['products_id']?>" class="icon"><i class="icon-eye"></i></a>
								</p>
							</div>
						</div>
						<div class="desc">
							<h3><a href="single.php"><?php echo $product['name']?></a></h3>
							<span class="price">$<?php echo $product['price']?></span>
						</div>
					</div>
				</div>
			<?php }?>
		
				 <div class="col-md-4 text-center animate-box">
					<div class="product">
						<div class="product-grid" style="background-image:url(images/product-2.jpg);">
							<span class="sale">Sale</span>
							<div class="inner">
								<p>
									<a href="single.php" class="icon"><i class="icon-shopping-cart"></i></a>
									<a href="single.php" class="icon"><i class="icon-eye"></i></a>
								</p>
							</div>
						</div>
						<div class="desc">
							<h3><a href="single.php">Pavilion Speaker</a></h3>
							<span class="price">$600</span>
						</div>
					</div>
				</div>
				<div class="col-md-4 text-center animate-box">
					<div class="product">
						<div class="product-grid" style="background-image:url(images/product-3.jpg);">
							<div class="inner">
								<p>
									<a href="single.php" class="icon"><i class="icon-shopping-cart"></i></a>
									<a href="single.php" class="icon"><i class="icon-eye"></i></a>
								</p>
							</div>
						</div>
						<div class="desc">
							<h3><a href="single.php">Ligomancer</a></h3>
							<span class="price">$780</span>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 text-center animate-box">
					<div class="product">
						<div class="product-grid" style="background-image:url(images/product-4.jpg);">
							<div class="inner">
								<p>
									<a href="single.php" class="icon"><i class="icon-shopping-cart"></i></a>
									<a href="single.php" class="icon"><i class="icon-eye"></i></a>
								</p>
							</div>
						</div>
						<div class="desc">
							<h3><a href="single.php">Alato Cabinet</a></h3>
							<span class="price">$800</span>
						</div>
					</div>
				</div>
				<div class="col-md-4 text-center animate-box">
					<div class="product">
						<div class="product-grid" style="background-image:url(images/product-5.jpg);">
							<div class="inner">
								<p>
									<a href="single.php" class="icon"><i class="icon-shopping-cart"></i></a>
									<a href="single.php" class="icon"><i class="icon-eye"></i></a>
								</p>
							</div>
						</div>
						<div class="desc">
							<h3><a href="single.php">Earing Wireless</a></h3>
							<span class="price">$100</span>
						</div>
					</div>
				</div>
				<div class="col-md-4 text-center animate-box">
					<div class="product">
						<div class="product-grid" style="background-image:url(images/product-6.jpg);">
							<div class="inner">
								<p>
									<a href="single.php" class="icon"><i class="icon-shopping-cart"></i></a>
									<a href="single.php" class="icon"><i class="icon-eye"></i></a>
								</p>
							</div>
						</div>
						<div class="desc">
							<h3><a href="single.php">Sculptural Coffee Table</a></h3>
							<span class="price">$960</span>
						</div>
					</div>
				</div> 
			</div>
		</div>
	</div>

	<div id="fh5co-testimonial" class="fh5co-bg-section">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<span>Testimony</span>
					<h2>Happy Clients</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row animate-box">
						<div class="owl-carousel owl-carousel-fullwidth">
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="images/person1.jpg" alt="user">
									</figure>
									<span>Jean Doe, via <a href="#" class="twitter">Twitter</a></span>
									<blockquote>
										<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="images/person2.jpg" alt="user">
									</figure>
									<span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
									<blockquote>
										<p>&ldquo;Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="images/person3.jpg" alt="user">
									</figure>
									<span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
									<blockquote>
										<p>&ldquo;Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> 
	

	 <div id="fh5co-counter" class="fh5co-bg fh5co-counter" style="background-image:url(images/img_bg_5.jpg);">
		<div class="container">
			<div class="row">
				<div class="display-t">
					<div class="display-tc">
						<div class="col-md-3 col-sm-6 animate-box">
							<div class="feature-center">
								<span class="icon">
									<i class="icon-eye"></i>
								</span>

								<span class="counter js-counter" data-from="0" data-to="22070" data-speed="5000" data-refresh-interval="50">1</span>
								<span class="counter-label">Creativity Fuel</span>

							</div>
						</div>
						<div class="col-md-3 col-sm-6 animate-box">
							<div class="feature-center">
								<span class="icon">
									<i class="icon-shopping-cart"></i>
								</span>

								<span class="counter js-counter" data-from="0" data-to="450" data-speed="5000" data-refresh-interval="50">1</span>
								<span class="counter-label">Happy Clients</span>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 animate-box">
							<div class="feature-center">
								<span class="icon">
									<i class="icon-shop"></i>
								</span>
								<span class="counter js-counter" data-from="0" data-to="700" data-speed="5000" data-refresh-interval="50">1</span>
								<span class="counter-label">All Products</span>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 animate-box">
							<div class="feature-center">
								<span class="icon">
									<i class="icon-clock"></i>
								</span>

								<span class="counter js-counter" data-from="0" data-to="5605" data-speed="5000" data-refresh-interval="50">1</span>
								<span class="counter-label">Hours Spent</span>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> 

	< <div id="fh5co-started">
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
	</div> -->

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

