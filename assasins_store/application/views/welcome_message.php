<!DOCTYPE html>
<html>
<head>
	<title>Front-End Toko Online</title>
	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>bootstrap/css2/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>bootstrap/css2/slick.css"/>
		<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>bootstrap/css2/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>bootstrap/css2/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="<?php echo base_url();?>bootstrap/css2/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>bootstrap/css2/style.css"/>
</head>
<body>
	<?php $this->load->view('layout/top_menu') ?>

	<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="<?php echo base_url();?>bootstrap/img2/shop01.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Wakanda<br>Collection</h3>
								<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="<?php echo base_url();?>bootstrap/img2/shop02.png" alt="">
							</div>
							<div class="shop-body">
								<h3>STARK Industries<br>Collection</h3>
								<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="<?php echo base_url();?>bootstrap/img2/shop03.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Infinity Stones<br>Collection</h3>
								<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
	<div class="row">
		<?php foreach($products as $product) : ?>
		<div class="col-sm-3 col-md-3">
			<div class="thumbnail">
				<?=img([
					'src'=>'uploads/' . $product->image,
					'style'=>'max-width: 200%; max-height:200%; height:200px'
				])?>
				<div class="caption">
					<h2 align="center" style="min-height: 60px; font-family: latin wide"><?=$product->nama?></h2>
					<p align="center" style="font-family: moaren Regular"><?=$product->description?></p>
					<p align="center" style="font-family: latin wide" >Rp.<?=$product->price?></p>
					<p align="center">
						<?php echo anchor('welcome/add_to_cart/' . $product->id, 'Buy' , [
							'class' => 'primary-btn cta-btn',
							'role' => 'button'
						]); ?>
					</p>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
	</div>
	<div id="hot-deal" class="section")">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="hot-deal">
							<ul class="hot-deal-countdown"><div></div>
								<li style="background-image: url(bootstrap/img2/WIN_20180831_234859.JPG)"><br><br><br><br><br><br><h4 style="font-family: bemydor Regular">Faridl</h4>
								</li>
								<li style="background-image: url(bootstrap/img2/180901-131501.png)">
									<br><br><br><br><br><br><h4 style="font-family: bemydor Regular">Ghozi</h4>
								</li>
								<li style="background-image: url(bootstrap/img2/WIN_20180901_12_00_05_Pro.jpg)">
									<br><br><br><br><br><br><h4 style="font-family: bemydor Regular">Aulia</h4>
								</li>
								<li style="background-image: url(bootstrap/img2/WIN_20180901_11_52_36_Pro.jpg)">
									<br><br><br><br><br><br><h4 style="font-family: bemydor Regular">Daffa</h4>
								</li>
							</ul>
							<h2 class="text-uppercase" >Together We Make This Template</h2>
							<p>"Loren Ipsum Dolor" that's what We allways found on,
							 but our motto is "7 times falled, 8 times standback" #copyrightjapanesequotes:D</p>
							
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling</h4>
							<div class="section-nav">
								<div id="slick-nav-3" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick slick-initialized slick-slider" data-nav="#slick-nav-3">
							<div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 1725px; transform: translate3d(-690px, 0px, 0px);"><div class="slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" tabindex="-1" style="width: 345px;">
							
								<!-- product widget -->
							</div><div class="slick-slide slick-cloned" data-slick-index="2" aria-hidden="true" tabindex="-1" style="width: 345px;">
						
								<!-- product widget -->
							</div><div class="slick-slide slick-cloned" data-slick-index="3" aria-hidden="true" tabindex="-1" style="width: 345px;">
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="<?php echo base_url();?>bootstrap/img2/product01.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#" tabindex="-1">Bleding Edge</a></h3>
										<h4 class="product-price">Rp.47.000.000 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="<?php echo base_url();?>bootstrap/img2/product02.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#" tabindex="-1">One Ring</a></h3>
										<h4 class="product-price">Rp.978.980 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="<?php echo base_url();?>bootstrap/img2/product03.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#" tabindex="-1">Strom Braker</a></h3>
										<h4 class="product-price">Rp.980.000 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div></div></div>

							
						</div>
					</div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling</h4>
							<div class="section-nav">
								<div id="slick-nav-4" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick slick-initialized slick-slider" data-nav="#slick-nav-4">
							<div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 1725px; transform: translate3d(-690px, 0px, 0px);"><div class="slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" tabindex="-1" style="width: 345px;">
								
								<!-- product widget -->
							</div><div class="slick-slide slick-cloned" data-slick-index="2" aria-hidden="true" tabindex="-1" style="width: 345px;">
								<!-- product widget -->
							
							</div><div class="slick-slide slick-cloned" data-slick-index="3" aria-hidden="true" tabindex="-1" style="width: 345px;">
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="<?php echo base_url();?>bootstrap/img2/product07.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#" tabindex="-1">Infinity Ring</a></h3>
										<h4 class="product-price">Rp.980.000 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="<?php echo base_url();?>bootstrap/img2/product08.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#" tabindex="-1">Ironman Iron Technology</a></h3>
										<h4 class="product-price">Rp.2.090.000 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="<?php echo base_url();?>bootstrap/img2/product09.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#" tabindex="-1">Power Stone</a></h3>
										<h4 class="product-price">Rp.97.898.000 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div></div></div>

							
						</div>
					</div>

					<div class="clearfix visible-sm visible-xs"></div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling</h4>
							<div class="section-nav">
								<div id="slick-nav-5" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick slick-initialized slick-slider" data-nav="#slick-nav-5">
							<div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 1725px; transform: translate3d(-345px, 0px, 0px);"><div class="slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" tabindex="-1" style="width: 345px;">
							</div><div class="slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" style="width: 345px;">
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="<?php echo base_url();?>bootstrap/img2/product04.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#" tabindex="-1">Terseract</a></h3>
										<h4 class="product-price">Rp.97.898.000 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="<?php echo base_url();?>bootstrap/img2/product05.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#" tabindex="-1">Golder Jaguar Suit</a></h3>
										<h4 class="product-price">Rp.790.000 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="<?php echo base_url();?>bootstrap/img2/product06.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#" tabindex="-1">Age Of Agamotto</a></h3>
										<h4 class="product-price">Rp.9.789.700 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div><div class="slick-slide slick-cloned" data-slick-index="2" aria-hidden="true" tabindex="-1" style="width: 345px;">
								<!-- product widget -->
								
								<!-- product widget -->
								
								<!-- product widget -->
							</div></div></div>

							
						</div>
					</div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>

		<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="hot-deal">
							<img src="<?php echo base_url();?>bootstrap/img2/hotdeal2.png">
							<br>
							<br>
							<h2 class="text-uppercase">this website Support by</h2>
							<p>Marvel Peace Corporation</p>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>

		<footer id="footer" >
			<!-- top footer -->
			<div class="section" align="center">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row" >
								<h3 class="footer-title" style="color: white;">About Us</h3>
								<p>"Loren Ipsum Dolor" thats whan usualy people wrhite on their websites but we don't now what that's means, but we inspired by some thing to make this website together and one from many cause is Duty and Value </p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>Miftah Faridl</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>Aulia Ahmad</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>Ghozi Al Ghifary</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>Daffa Al Kautsar</a></li>
								</ul>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>

</body>
</html>