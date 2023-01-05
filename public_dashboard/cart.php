<?php
session_start();
// session_unset();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Cart</title>

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
    <!-- <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div> -->
    <!--PreLoader Ends-->
	
	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="index_2.php">
								<img src="../public_dashboard/assets/img/logomotor (2).png" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<?php include("../includs/navbar.php") ?> 
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->

	<!-- search area -->
	<div class="search-area">
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
	</div>
	<!-- end search arewa -->
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
											<h1>Cart</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- cart -->
	<div class="cart-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class='col-lg-8 col-md-12'>
					
								<?php
								// echo "<pre>";
								// print_r($_SESSION["added_products"]);
								// echo "</pre>";

								include("../admin_dashboard/config.php");
								// $html ='';
								$totalprice = 0;
								// i = number of products in cart
								// $i = 0;
								// echo "<pre>";
								// print_r($_SESSION["added_products"]);
								// echo "</pre>";
								if (isset( $_SESSION["added_products"])){
								if ($_SESSION["added_products"]){

								echo "<div class='cart-table-wrap'>
								<table class='cart-table'>
									<thead class='cart-table-head'>
										<tr class='table-head-row'>
											<th class='product-remove'></th>
											<th class='product-image'>Product Image</th>
											<th class='product-name'>Name</th>
											<th class='product-price'>Price</th>
											<th class='product-quantity'>Quantity</th>
											<th class='product-total'>Total</th>
											<th class='product-total'>Edite</th>
										</tr>
									</thead>
									<tbody>
										<form action='' method='post'>";

									
								foreach ($_SESSION["added_products"] as $key => $ele){
									// $sql = "select * from products where product_id = $ele[0]";
									// $product= $conn->query($sql);
									// $product = mysqli_fetch_array($product, MYSQLI_ASSOC);
									// echo "product";
									// echo "<pre>";
									// print_r($product);
									// echo "</pre>";
									$html ='';
									$html .= "<tr class='table-body-row'>";
									$html .= "<td class='product-remove'><a href='deletepoduct.php?index=$key'><i class='far fa-window-close'></i></a></td>";
									$pic=$ele[8];
									$html .= "<td class='product-image'><img src='../upload/$pic' alt=''></td>";
									$name=$ele[2];
									$html .= "<td class='product-name'>$name</td>";
									if ($ele[11]){
									$price=$ele[6]-(($ele[6]*$ele[12])/100);}else {
										$price=$ele[6];
									}
									$html .= "<td class='product-price'>$price</td>";
									$qun = $ele[1];
									$html .= "<td class='product-quantity'><form method='post'><input type='number' value='$qun' name ='new_qun' min='1'></td>";
									$html .= "<td class='product-quantity' style='display: none;'><input type='number' value='$key' name ='arr_index' min='1'></td>";
									$total = $qun * $price ;
									$html .= "<td class='product-total'>$total</td>";
									$html .= "<td class='product-remove'><button type ='submit' class='btn btn-primary rounded-pill m-2'>update quatity</button></form></td>";
									$html .= "</tr>";
									$totalprice += $total;
									echo $html;
									// echo $price;
									// $i++;

								}}}else{
									echo "<h2>cart is empty</h2>";
								}
								if ($_SERVER['REQUEST_METHOD']=="POST") {
									// echo $_POST["new_qun"];
									// echo "<br>";
									// echo $_POST["arr_index"];
									// echo $_POST[""];
									// echo "rwefasdasd";
									echo $_POST["new_qun"];
									echo $_POST["arr_index"];
									$_POST["new_qun"] = (int) $_POST["new_qun"];
									$_SESSION["added_products"][$_POST["arr_index"]][1] = $_POST["new_qun"];
									echo "<meta http-equiv='refresh' content='0'>";
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
				<?php
				if(isset( $_SESSION["added_products"]) && $_SESSION["added_products"] ){
				
				echo "<div class='col-lg-4'>
					<div class='total-section'>
						<table class='total-table'>
							<thead class='total-table-head'>
								<tr class='table-total-row'>
									<th>Total</th>
									<th>Currency</th>
								</tr>
							</thead>
							<tbody>
								<tr class='total-data'>
									<td><strong>
									$totalprice
									</strong></td>
									<td>jordanian dinar</td>
								</tr>
							</tbody>
						</table>
						<div class='cart-buttons'>
					<a href='checkout.php' class='boxed-btn black'>Check Out</a>
				</div>
			</div>
				</form>
				</div>";
			}
			?>
			</div>
		</div>
	</div>
	<!-- end cart -->
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
					<p>Copyrights &copy; 2019 - <a href="https://imransdesign.com/">Imran Hossain</a>,  All Rights Reserved.<br>
						Distributed By - <a href="https://themewagon.com/">Themewagon</a>
					</p>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
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