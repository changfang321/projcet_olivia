<?php
require_once('connection/connection.php');
$query = $db->query("SELECT * FROM product_categories ORDER BY product_categories_id ASC");
$categories = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-xs-2">
					<div id="fh5co-logo"><a href="index.php">OLIVIA.</a></div>
				</div>
				<div class="col-md-6 col-xs-6 text-center menu-1">
					<ul>
						<li class="has-dropdown">
							<a href="#">花坊</a>
							<ul class="dropdown">
							 <?php foreach($categories as $category){?>
								<li><a href="product.php?category=<?php echo $category['product_categories_id']?>"><?php echo $category['category']?></a></li>
							 <?php } ?>
							</ul>
						</li>
						<li><a href="about.php">關於OLIVIA</a></li>
						<li class="has-dropdown">
							<a href="services.php">服務項目</a>
							<ul class="dropdown">
								<li><a href="#">婚禮佈置</a></li>
								<li><a href="#">花藝教學</a></li>
								<li><a href="#">comming soon</a></li>
								<li><a href="#">comming soon</a></li>
							</ul>
						</li>
						<li><a href="contact.php">與我聯絡</a></li>
					</ul>
				</div>
				<div class="col-md-3 col-xs-4 text-right hidden-xs menu-2">
					<ul>
						<li class="search">
							<div class="input-group">
						      <input type="text" placeholder="Search..">
						      <span class="input-group-btn">
						        <button class="btn btn-primary" type="button"><i class="icon-search"></i></button>
						      </span>
						    </div>
						</li>
						<li class="shopping-cart"><a href="basket.php" class="cart"><span><small> 

<?php if(isset($_SESSION['Cart']) && $_SESSION['Cart'] !=null) echo count($_SESSION['Cart']) ;

else echo '0' ;?></small><i class="icon-shopping-cart"></i></span></a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>