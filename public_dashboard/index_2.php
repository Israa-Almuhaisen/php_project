<?php
				session_start();

				include("../admin_dashboard/config.php");
				$sql = "select * from products";
				$data= $conn->query($sql);
				// print_r($data) ;
				?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Fruitkha - Slider Version</title>

    <script src="https://kit.fontawesome.com/18b0a154a3.js" crossorigin="anonymous"></script>


	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="../public_dashboard/assets/img/th.jpg">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="index.html">
								<img src="../public_dashboard/assets/img/logomotor (2).png" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class="current-list-item"><a href="#">Home</a>
									<ul class="sub-menu">
										<li><a href="index.html">Static Home</a></li>
										<li><a href="index_2.html">Slider Home</a></li>
									</ul>
								</li>
								<li><a href="about.html">About</a></li>
							
								
								<li><a href="contact.html">Contact</a></li>
								<li><a href="shop.html">Shop</a>
									<ul class="sub-menu">
										<li><a href="shop.html">Standard</a></li>
										<li><a href="shop.html">Sport</a></li>
										<li><a href="shop.html">Cruiser</a></li>
										<li><a href="checkout.html">Dual-Sport</a></li>
										<li><a href="single-product.html">Scooter</a></li>
										<li><a href="cart.html">Electric</a></li>
									</ul>
								</li>
								<li><a href="../loginuser.php">login</a></li>
							
								<li><a href="">register</a></li>
								<li>
									<div class="header-icons">
										<a class="shopping-cart" href="cart.html"><i class="fas fa-shopping-cart fa-2x"></i></a>
										<!-- <a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a> -->
									</div>
								</li>
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->
	
	<!-- search area -->
	<!-- <div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- end search area -->

	<!-- home page slider -->
	<div class="homepage-slider">
		<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-1">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-7 offset-lg-1 offset-xl-0">
						<div class="hero-text">
							<div class="hero-text-tablecell">
							
								<h1>Own your dream Motorcycle</h1>
								<div class="hero-btns">
									<a href="shop.html" class="boxed-btn">shop now</a>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
			<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-3">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1 text-right">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								
								<h1>Two wheels, endless fun</h1>
								<div class="hero-btns">
									<a href="shop.html" class="boxed-btn">Visit Shop</a>
									<a href="contact.html" class="bordered-btn">Contact Us</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end home page slider -->


	<!-- Categories section -->
	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Our</span> Categories</h3>
						<p>No road is too long when you have good company</p>
						<!-- <h3><span class="orange-text">On</span> Sale </h3> -->
						<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet beatae optio.</p> -->
					</div>
				</div>
			</div>

			
			<div class="row">
				<?php
				foreach($data as $ele){
					if ($ele["is_discount"]){
						echo '<div class="col-lg-4 col-md-6 text-center">
						<div class="single-product-item">
							<div class="product-image">';
							$pic=$ele["pic_main"];
							$id=$ele["product_id"];
							// echo $pic;
						echo "<a href='single-product.php?product_id=$id'><img src='../admin_dashboard/img/products/$pic' alt=''></a>";
						echo "</div>";
						$name = $ele['product_name'];
						echo "<h3>$name</h3>";
						$old_price = $ele['price'];
						$new_price =$old_price - ($ele['discount'] * $old_price)/100;
						echo "<h3> <span class='product-price'><del>$old_price </del></span><span class='product-price'>$$new_price</span></h3>";
						echo "<a href='add_to_cart.php?productid=$id' class='cart-btn'><i class='fas fa-shopping-cart'></i> Add to Cart</a></div></div>";
						// $url = getcwd();
						// $url = (parse_url($url, PHP_URL_FRAGMENT));
						// $url =str_replace('C:\xampp\htdocs',"localhost",$url);
						// echo $url;
						// $_SESSION["current_url"]= $url;
					}
				}
				?>

				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="../img/category/standard.png" alt=""></a>
							 <a href="single-product.html"><img src="../admin_dashboard/img/products/" alt=""></a> 
						</div>
						<h3>Standard</h3>
						<p class="product-price"> <span>1,999$ - 6,499$</span> </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="../img/category/sport.png" alt=""></a>
						</div>
						<h3>Sport</h3>
						<p class="product-price"> <span>2,199$ - 8,499$</span> </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="../img/category/cruiser1.png" alt=""></a>
						</div>
						<h3>Cruiser</h3>
						<p class="product-price"> <span>6,499$ - 18,799$</span> </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="../img/category/dual-sport.png" alt=""></a>
						</div>
						<h3>Dual-Sport</h3>
						<p class="product-price"> <span>3,399$ - 9,000$</span> </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
					<div class="col-lg-4 col-md-6 text-center">
						<div class="single-product-item">
							<div class="product-image">
								<a href="single-product.html"><img src="../img/category/Aprilia-SXR-160-.png" alt=""></a>
							</div>
							<h3>Scooter</h3>
							<p class="product-price"> <span>1,349$ - 7,499$</span> </p>
							<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
						</div>
					</div>
						<div class="col-lg-4 col-md-6 text-center">
							<div class="single-product-item">
								<div class="product-image">
									<a href="single-product.html"><img src="../img/category/electric.png" alt=""></a>
								</div>
								<h3>Electric</h3>
								<p class="product-price"> <span>2,399$ - 6,499$</span> </p>
								<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
							</div>
						</div>
						<!-- <?php
			require_once("../admin_dashboard/config.php");
			$sql = "SELECT * FROM categories"; // query sentence
                                $conn->query($sql); // execute query 
                                $array = ($conn->query($sql));                 
                            
																foreach($array as $ele){
							$category = "<div class='row'>
								<div class='col-lg-4 col-md-6 text-center'>
									<div class='single-product-item'>
										<div class='product-image'>";

							$category_pic=$ele['category_pic'];
							// echo $category_pic;
							$category_name=$ele['category_name'];
							$category_pri=$ele['category_price'];
							
							$category .=	"<a href='single-product.html'><img src='/$category_pic' alt=''></a>
							</div>";
							$category .= "<h3>$category_name</h3>";
							$category .= "<p class='product-price'> <span>$category_pri</span> </p>
							<a href='cart.html' class='cart-btn'><i class='fas fa-shopping-cart'></i> Add to Cart</a>
						</div>
					</div>
				</div>";
					echo $category;
						}
							?> -->
							
			</div>
		</div>
	</div>
	<!-- end Categories section -->

	<!-- cart banner section -->
	<section class="cart-banner pt-100 pb-100">
    	<div class="container">
        	<div class="row clearfix">
            	<!--Image Column-->
            	<div class="image-column col-lg-6">
                	<div class="image">
                    	<div class="price-box">
                        	<div class="inner-price">
                                <span class="price">
                                    <strong>30%</strong> <br> for Cruiser category
                                </span>
                            </div>
                        </div>
                    	<img src="../img/category/cruiser1.png" alt="">
                    </div>
                </div>
                <!--Content Column-->
                <div class="content-column col-lg-6">
					<h3><span class="orange-text">Deal</span> of the month</h3>
                    <h4>Cruiser Bikes</h4>
                    <div class="text">A cruiser motorcycle is a motorcycle in the style of American machines from the 1930s to the early 1960s, including those made by Harley-Davidson, Indian, Excelsior and Henderson. The riding position usually places the feet forward and the hands up, with the spine erect or leaning back slightly. Typical cruiser engines emphasize easy rideability and shifting, with plenty of low-end torque but not necessarily large amounts of horsepower, and are traditionally V-twins, but inline engines have become more common.</div>
                    <!--Countdown Timer-->
                    <div class="time-counter"><div class="time-countdown clearfix" data-countdown="2020/2/01"><div class="counter-column"><div class="inner"><span class="count">00</span>Days</div></div> <div class="counter-column"><div class="inner"><span class="count">00</span>Hours</div></div>  <div class="counter-column"><div class="inner"><span class="count">00</span>Mins</div></div>  <div class="counter-column"><div class="inner"><span class="count">00</span>Secs</div></div></div></div>
                	<a href="cart.html" class="cart-btn mt-3"><i class="fas fa-shopping-cart"></i> Shop Now </a>
                </div>
            </div>
        </div>
    </section>
    <!-- end cart banner section -->

	<!-- testimonail-section -->
	<div class="testimonail-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 text-center">
					<div class="testimonial-sliders">
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="عدي.jpeg" alt="">
							</div>
							<div class="client-meta">
								<h3>Oday AL-ghoul<span>Local shop owner</span></h3>
								<p class="testimonial-body">
									" Director and owner of Motorbike Company
										He has a great experience in the world of bicycles, he traveled to several countries around the world and toured until he was saturated with sufficient knowledge to serve the local community "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="ولاء.jpeg" alt="">
							</div>
							<div class="client-meta">
								<h3>Wala' obeidat <span>Local shop owner</span></h3>
								<p class="testimonial-body">
									" Director of Public Relations and the owner of a prominent footprint in the development and advancement of our dear company, Ms. Walaa has a great reputation in public relations and commercial affairs "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end testimonail-section -->
	
	<!-- advertisement section -->
	<div class="abt-section mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="abt-bg">
						<a href="https://www.youtube.com/watch?v=eZS_UbALG0s" class="video-play-btn popup-youtube"><i class="fas fa-play"></i></a>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="abt-text">
						<p class="top-sub">Since Year 2023</p>
						<h2>We are <span class="orange-text">MOTORBIKE</span></h2>
						<p>We strive to provide the best possible service to motorcycle and scooter enthusiasts. Facilitating the process of owning motorcycles and scooters through their acquisition without down payment and easy installments.</p>
						<p>The world of motorcycles will take you from the prison of movement to the freedom of movement, and that we seek to provide through us.</p>
						<a href="about.html" class="boxed-btn mt-4">About US</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end advertisement section -->
	
	<!-- shop banner -->
	<!-- <section class="shop-banner">
    	<div class="container">
        	<h3>December sale is on! <br> with big <span class="orange-text">Discount...</span></h3>
            <div class="sale-percent"><span>Sale! <br> Upto</span>50% <span>off</span></div>
            <a href="shop.html" class="cart-btn btn-lg">Shop Now</a>
        </div>
    </section> -->
	<!-- end shop banner -->

	<!-- logo carousel -->
	<div class="logo-carousel-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="logo-carousel-inner">
						<div class="single-logo-item">
							<img src="../public_dashboard/assets/img/company-logos/R (1).png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="../public_dashboard/assets/img/company-logos/bmw.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="../public_dashboard/assets/img/company-logos/honda.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="../public_dashboard/assets//img/company-logos/kkk.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="../public_dashboard/assets/img/company-logos//ktm.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="../public_dashboard/assets/img/company-logos/Suzuki.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end logo carousel -->
	

	
	
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p><i class="fa-solid fa-envelope"></i> obaidaalthunibat@gmail.com<br>
					<i class="fa-solid fa-phone"></i> +00962781841055
					</p>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="https://web.facebook.com/darwazeh.motors/?_rdc=1&_rdr" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="https://www.instagram.com/darwazeh.motors/" target="_blank"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end copyright -->
	
	<!-- jquery -->
	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="assets/js/sticker.js"></script>
	<!-- main js -->
	<script src="assets/js/main.js"></script>

</body>
</html>