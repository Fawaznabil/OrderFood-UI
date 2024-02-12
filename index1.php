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
								<h1 style="font-size: 18px; color:red">Ayomakan!</h1>
								<!-- <img src="assets/img/logo.png" alt=""> -->
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
								<li><a href="keranjang.php">Shop</a></li>
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

	<style>
		@media (max-width: 768px) {
			.containerku {
				padding-top: 20%;
			}

			.col-md-6 {
				margin-bottom: 20px;
			}
		}
	</style>

	<style>
		h2 {
			margin-left: 10%;
			font-size: 23px;
			padding-top: 3%;
			display: flex;
			align-items: center;
		}

		img {
			max-width: 15px;
			height: auto;
			margin-right: 5px;
			/* Menambahkan margin kanan pada gambar */
		}

		.flex-container {
			display: flex;
			align-items: center;
		}

		@media (max-width: 768px) {
			h2 {
				margin-left: 5px;
				font-size: 20px;
			}

			.flex-container {
				flex-direction: column;
				/* Mengubah tata letak menjadi vertikal pada layar kecil */
				align-items: flex-start;
				/* Mengatur agar teks mulai dari kiri */
			}
		}
	</style>

	<section class="beranda" style="padding-top:10%">
		<div class="containerku" style="max-width: 80%; margin: 0 auto; overflow: hidden; border-radius: 10px;">
			<div class="row">
				<div class="col-md-6 ">
					<img src="assets/produk1.jpg" alt=""
						style="max-width: 100%; height: 300px; object-fit: cover; border-radius: 10px; display: block; margin-left: auto; margin-right: auto;">
				</div>
				<div class="col-md-6">
					<img src="assets/produk1.jpg" alt=""
						style="max-width: 100%; height: 150px; object-fit: cover; border-radius: 10px; display: block; margin-bottom: 10px;">
					<img src="assets/produk1.jpg" alt=""
						style="max-width: 100%; height: 150px; object-fit: cover; border-radius: 10px; display: block; margin-bottom: 10px;">
				</div>
			</div>
		</div>

		<h2>Krispy Kreme Gambir</h2>

		<h2>
			<img src="assets/star.png" alt="">
			<span style="font-size: 14px; color: #616161; font-weight: 200;">5 </span>
			<img src="assets/titik.png" alt="">
			<span style="font-size: 14px; color: #616161; font-weight: 200;">6 Ulasan </span>
			<img src="assets/titik.png" alt="">
			<span style="font-size: 14px; color: #616161; font-weight: 200;">Surabaya</span>
			<img src="assets/titik.png" alt="">
			<span style="font-size: 14px; color: #616161; font-weight: 200;">Rp 60.000</span>
		</h2>

		<h2 style="margin-left: 10%;">
			<span style="font-size: 16px; color: black; font-weight: 200;">Jam Operasional</span>
			<span style="font-size: 16px; color: black; font-weight: 200; margin-left: 150px;">Pemesanan Online</span>
		</h2>

		<h2 style="margin-left: 10%;">
			<img src="assets/minute.png" alt="">
			<span style="font-size: 16px; color: black; font-weight: 200;">Rabu 09.00 - 18.00</span>
			<img src="assets/minute.png" alt="" style=" margin-left: 100px;">
			<span style="font-size: 16px; color: black; font-weight: 200;">Buka Hingga 22.00</span>
		</h2>
	</section>

	<style>
		.my-button {
			display: inline-block;
			padding: 8px 20px;
			font-size: 16px;
			text-align: left;
			text-decoration: none;
			border-radius: 20px;
			cursor: pointer;
			margin: 10px;
		}

		.my-button:hover {
			background-color: #45a049;
		}

		.col-md-4 {
			text-align: left;
		}

		.col-md-4 img {
			max-width: 10%;
			margin-bottom: 10px;
		}
	</style>

	<div class="row">
		<div class="col-md-4" style="margin-left: 100px;">
			<a href="keranjang.php" class="my-button" style="background-color:red; color:white">Pesan Makanan</a>
		</div>
	</div>

	<style>
		.container-1 {
			display: flex;
			justify-content: flex-start;
			height: 3vh;
			margin-left: 9%;
			padding-top: 30px;
		}

		.pembatas {
			width: 90%;
			height: 0.1px;
			background-color: #afa9a0;
			margin-right: 5px;
		}
	</style>

	<div class="container-1">
		<div class="pembatas"></div>
	</div>

	<h1 style="text-align: left; margin-left:10%; font-size:25px">Tentang</h1>
	<p style="text-align: left; margin-left:10%; font-size:15px; margin-right:10%">Menyajikan kebahagiaan bagi pelanggan
		melalui berbagai pilihan menu, seperti sweets, snack, food service & gift (Birthday cake, Seasonal hampers,
		dll). Kibo menjadi salah satu Cheese Cake terbaik yang ada di Indonesia, dengan tekstur yang lembut dengan rasa
		gurihnya keju yang pas.</p>

	<div class="container-1">
		<div class="pembatas"></div>
	</div>

	<img src="assets/image1.png" alt="" style="margin-left:10%; max-width:50%">

	<style>
		.my-button1 {
			display: inline-block;
			padding: 1px 20px;
			font-size: 16px;
			text-align: left;
			text-decoration: none;
			border-radius: 20px;
			cursor: pointer;
			margin: 10px;
		}

		.my-button:hover {
			background-color: #45a049;
		}

		.col-md-4 {
			text-align: left;
		}

		.col-md-4 img {
			max-width: 50%;
			margin-bottom: 10px;
		}
	</style>

	<div class="row" style="padding-top: 3%;">
		<div class="col-md-4" style="padding-left: 10%;">
			<a href="#" class="my-button1" style="background-color:red; color:white">Tulis Ulasan</a>
		</div>
	</div>

	<style>
		.voucher-container {
			width: 25%;
			padding: 10px;
			border: 1px;
			text-align: center;
			box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
			margin: 10px;

		}

		.voucher-image {
			max-width: 100%;
			height: auto;
			margin-bottom: 10px;
			width: 100%;
		}

		.voucher-description {
			font-size: 14px;
			color: black;
			text-align: left;
		}
	</style>

	<section class="voucher" style="padding-top: 5%; ">
		<div class="tekss" style="display: flex;">
			<div style="flex: 1;">
				<h1 style="margin-left: 15%; font-size:18px">Restoran Serupa</h1>
				<h1 style="margin-left: 15%; font-weight:300; font-size:15px">Cek juga restoran serupa dekat kamu</h1>

			</div>

		</div>
		<div class="container" style="display: flex; flex-wrap: wrap; justify-content:center; align-items:center; ">
			<div class="voucher-container"
				style="box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2); background-color:white; border-radius:15px">
				<img class="voucher-image" src="assets/promo1.png" alt="Sample Image">
				<p class="voucher-description" style="font-weight:bold">Promo Asik</p>
				<p style="color:#d6d6d6;">-----------------------------------------------------------</p>
				<p style="text-align: left; font-size:12px;">Periode promo hingga 1 februari 2024</p>
			</div>

			<div class="voucher-container"
				style="box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2); background-color:white; border-radius:15px ">
				<img class="voucher-image" src="assets/promo2.png" alt="Sample Image">
				<p class="voucher-description" style="font-weight:bold">Promo Kenyang</p>
				<p style="color:#d6d6d6;">-----------------------------------------------------------</p>
				<p style="text-align: left; font-size:12px;">Periode promo hingga 5 februari 2024</p>
			</div>

			<div class="voucher-container"
				style="box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2); background-color:white; border-radius:15px">
				<img class="voucher-image" src="assets/promo3.png" alt="Sample Image">
				<p class="voucher-description" style="font-weight:bold">Promo manis</p>
				<p style="color:#d6d6d6;">-----------------------------------------------------------</p>
				<p style="text-align: left; font-size:12px;">Periode promo hingga 2 februari 2024</p>
			</div>
		</div>
	</section>

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

	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p>Copyrights &copy; 2019 - <a href="https://imransdesign.com/">Imran Hossain</a>, All Rights
						Reserved.</p>
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
	<script src="js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="bootstrap/js/bootstrap.min.js"></script>
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