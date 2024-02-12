<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description"
		content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Fruitkha</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="css/responsive.css">

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
								<!-- <img src="assets/img/logo.png" alt=""> -->
								<h1 style="font-size: 18px; color:red">Ayomakan!</h1>
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li><a href="index.php">Home</a></li>
								<li><a href="katalog-produk.php">Produk</a></li>
								<li><a href="arsip-artikel.php">News</a></li>
								<li><a href="histori-transaksi.php">Pesanan</a></li>
								<li class="current-list-item"><a href="keranjang.php">Shop</a></li>
								<li><a href="#"></a></li>
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
	<!-- end search area -->

	<!-- hero area -->
	<div class="hero-area hero-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 offset-lg-2 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							<p class="subtitle">Ayomakan!</p>
							<h1>Delicious Seasonal Fruits</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end hero area -->


	<style>
		.container-1 {
			display: flex;
			justify-content: flex-start;
			height: 3vh;
			margin-left: 9%;
		}

		.pembatas {
			width: 75%;
			height: 1px;
			background-color: #afa9a0;
			margin-right: 5px;
		}

		.pembatas2 {
			width: 12%;
			height: 5px;
			background-color: red;
			margin-bottom: 5px;
		}
	</style>

	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="tekss" style="display: flex;">
						<div style="flex: 1;">
							<h3 style="margin-left: 9%;padding:20px">Pesanan Anda</h3>
						</div>
					</div>
				</div>
			</div>

			<!-- cart -->
			<div class="cart-section mt-60 mb-60">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-md-12">
							<div class="cart-table-wrap">
								<table class="cart-table" style="box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);">
									<thead class="cart-table-head">
										<tr class="table-head-row" style="color: white;">
											<th class="product-remove"></th>
											<th class="product-image">Product Image</th>
											<th class="product-name">Nama </th>
											<th class="product-price">Harga</th>
											<th class="product-total">Total</th>
										</tr>
									</thead>
									<tbody>
										<tr class="table-body-row">
											<td class="product-remove"><a href="#"><svg
														xmlns="http://www.w3.org/2000/svg" width="16" height="16"
														fill="currentColor" class="bi bi-x-circle-fill"
														viewBox="0 0 16 16">
														<path
															d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z" />
													</svg></a></td>
											<td class="product-image"><img src="assets/produk1.jpg" alt=""></td>
											<td class="product-name">Krispy Kreme Gambir</td>
											<td class="product-price">Rp 60.000</td>
											<td class="product-total">1</td>
										</tr>

									</tbody>
								</table>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="total-section">
								<table class="total-table" style="box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);">
									<thead class="total-table-head" style="background-color: white;">
										<tr class="table-total-row" style="background-color: red;">
											<th style="color: white;">Total</th>
											<th style="color: white;">Harga</th>
										</tr>
									</thead>
									<tbody>
										<tr class="total-data">
											<td><strong>Subtotal: </strong></td>
											<td>Rp 60.000</td>
										</tr>
										<tr class="total-data">
											<td><strong>Voucher: </strong></td>
											<td>Rp -</td>
										</tr>
										<tr class="total-data">
											<td><strong>Total: </strong></td>
											<td>Rp 60.000</td>
										</tr>
									</tbody>
								</table>
								<div class="cart-buttons">
									<a href="cart.html" class="boxed-btn">Update Cart</a>
									<a href="pembayaran.php" class="boxed-btn black">Check Out</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><br>

		</div>
	</div>


	<!-- logo carousel -->
	<div class="logo-carousel-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="logo-carousel-inner">
						<div class="single-logo-item">
							<img src="assets/img/company-logos/1.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/2.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/3.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/4.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/5.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end logo carousel -->

	<!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">About us</h2>
						<p>Ut enim ad minim veniam perspiciatis unde omnis iste natus error sit voluptatem accusantium
							doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Get in Touch</h2>
						<ul>
							<li>34/8, East Hukupara, Gifirtok, Sadan.</li>
							<li>support@fruitkha.com</li>
							<li>+00 111 222 3333</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">Pages</h2>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="services.html">Shop</a></li>
							<li><a href="news.html">News</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box subscribe">
						<h2 class="widget-title">Subscribe</h2>
						<p>Subscribe to our mailing list to get the latest updates.</p>
						<form action="index.html">
							<input type="email" placeholder="Email">
							<button type="submit"><i class="fas fa-paper-plane"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->

	<!-- jquery -->
	<script src="js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="js/sticker.js"></script>
	<!-- main js -->
	<script src="js/main.js"></script>

</body>

</html>