<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Beauty Dessert</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="themes/css/flexslider.css" rel="stylesheet"/>
		<link href="themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
    <body>		
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					<form method="POST" class="search_form">
						<input type="text" class="input-block-level search-query" Placeholder="eg. T-sirt">
					</form>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">				
							<li><a href="Login.html">Login</a></li>
							<li><a href="Contact.php">Contact Us</a></li>
							<li><a href="Giftcard.php">Gift Card</a></li>					
							<li><a href="Bag.php">Bag</a></li>		
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="main.php" class="logo pull-left"><img src="http://s19.postimg.org/6ednpuz77/Logo.jpg" class="site_logo" alt=""></a>

					<nav id="menu" class="pull-right">
						<ul>
							<li><a href="main.php">New Arrivals</a></li>															
							<li><a href="BestSallers.php">Best Sellers</a></li>			
							<li><a href="#">Cosmeticst</a>
								<ul>									
									<li><a href="Cosmetics.php">All Cosmetics</a></li>
									<li><a href="CosmeticsFace.php">Face</a></li>
									<li><a href="CosmeticsEye.php">Eye&Eye Brow</a></li>
									<li><a href="CosmeticsLips.php">Lips&Cheek</a></li>									
								</ul>
							</li>							
							<li><a href="#">Skin Care</a>
								<ul>
									<li><a href="SkinCare.php">All Skin Care</a></li>									
									<li><a href="SkinCareLotion.php">Lotiob@Emulation</a></li>
									<li><a href="SkinCareCream.php">Cream</a></li>									
								</ul>
							</li>
							<li><a href="Dietary.php">Dietary Supplement</a></li>
						</ul>
					</nav>
				</div>
			</section>
			<section  class="homepage-slider" id="home-slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<a href="Promotion1.php"><img src="Picture/Promotion/Promotion1.jpg" alt="" /></a>
						</li>
						<li>
							<a href="Promotion2.php"><img src="Picture/Promotion/Promotion2.jpg" alt="" /></a>
							<div class="intro"><br><br>
								<h1>Mega Valentine</h1>
								<p><span>Up to 40% Off</span></p>

							</div>
						</li>
					</ul>
				</div>			
			</section>
			<section class="header_text">
				@ Beauty Dessert<br>
				We stand for Your Beauty 
			</section>
			<section class="main-content">
				<div class="row">
					<div class="span12">													
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line"> <strong>NEW ARRIVALS</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
									</span>
								</h4>	

							<?php
							$conn = new mysqli("127.0.0.1", "root", "", "projectse");
							if (mysqli_connect_errno()) {
							echo "Failed to connect to MySQL: " .mysqli_connect_error();
							}
							// Search By Name or Email
							$sql = "SELECT product.*
							FROM product";
							$query = mysqli_query($conn,$sql) or die ("Error Query [".$sql."]");
							$count = 0;

							?>
								
								<div id="myCarousel" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
										<?php
										while($result = mysqli_fetch_array($query))
										{
										?>			
											<ul class="thumbnails">												
												<li class="span3">

													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="product_detail.html"><img src="<?php echo $result["PictureURL"];?>" alt="" /></a></p>
														<a href="product_detail.html" class="title"><?php echo $result["ProductName"];?></a><br/>
														<a href="product_detail.html" class="category"><?php echo $result["ProductType"];?></a>
														<p class="price">$<?php echo $result["Price"];?></p>
													</div>
												</li>
										<?php
										$count++;
										}
										?>
											</ul>										
									<?php
									mysqli_close($conn);
									?>												
										</div>
									</div>							
								</div>
							</div>						
						</div>
						<br/>
						<div class="row feature_box">						
							<div class="span4">
								<div class="service">
									<div class="responsive">	
										<img src="themes/images/feature_img_2.png" alt="" />
										<h4>MODERN <strong>DESIGN</strong></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>									
									</div>
								</div>
							</div>
							<div class="span4">	
								<div class="service">
									<div class="customize">			
										<img src="themes/images/feature_img_1.png" alt="" />
										<h4>FREE <strong>SHIPPING</strong></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
									</div>
								</div>
							</div>
							<div class="span4">
								<div class="service">
									<div class="support">	
										<img src="themes/images/feature_img_3.png" alt="" />
										<h4>24/7 LIVE <strong>SUPPORT</strong></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
									</div>
								</div>
							</div>	
						</div>		
					</div>				
				</div>
			</section>

			<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Navigation</h4>
						<ul class="nav">
							<li><a href="./main.php">Homepage</a></li>  
							<li><a href="./about.html">About Us</a></li>
							<li><a href="./contact.html">Contac Us</a></li>
							<li><a href="./cart.html">Your Cart</a></li>
							<li><a href="./register.html">Login</a></li>							
						</ul>					
					</div>
					<div class="span4">
						<h4>My Account</h4>
						<ul class="nav">
							<li><a href="#">My Account</a></li>
							<li><a href="#">Order History</a></li>
							<li><a href="#">Wish List</a></li>
							<li><a href="#">Newsletter</a></li>
						</ul>
					</div>
					<div class="span5">
						<p class="logo"><img src="themes/images/logo.png" class="site_logo" alt=""></p>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. the  Lorem Ipsum has been the industry's standard dummy text ever since the you.</p>
						<br/>
						<span class="social_icons">
							<a class="facebook" href="#">Facebook</a>
							<a class="twitter" href="#">Twitter</a>
							<a class="skype" href="#">Skype</a>
							<a class="vimeo" href="#">Vimeo</a>
						</span>
					</div>					
				</div>	
			</section>
			<section id="copyright">
				<span>Copyright 2013 bootstrappage template  All right reserved.</span>
			</section>
		</div>
		<script src="themes/js/common.js"></script>
		<script src="themes/js/jquery.flexslider-min.js"></script>
		<script type="text/javascript">
			$(function() {
				$(document).ready(function() {
					$('.flexslider').flexslider({
						animation: "fade",
						slideshowSpeed: 4000,
						animationSpeed: 600,
						controlNav: false,
						directionNav: true,
						controlsContainer: ".flex-container" // the container that holds the flexslider
					});
				});
			});
		</script>
    </body>
</html>