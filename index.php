<!DOCTYPE html>
<html lang="en">
<head>
	<title>Enchanting Rwanda</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<meta name="keywords" content="Enchanting Rwanda"/>
	<meta name="description" content="Enchanting Rwanda , Travel and Tour Agency"/>
	<meta name="subject" content="Travel and Tour Agency">
	<meta name="copyright"content="Enchanting Rwanda">
	<meta name="language" content="ES">
    <meta name=" author " content="Prince Niyonshuti" />

	<!-- OpenGraph Meta Tags -->
	<meta name="og:title" content="Enchanting Rwanda"/>
	<meta name="og:type" content="Travel and Tour Agency"/>
	<meta name="og:url" content="http://localhost/enchantingrwanda/"/>
	<meta name="og:image" content="assets/images/icon/icon.jpeg"/>
	<meta name="og:site_name" content="Enchanting Rwanda"/>
	<meta name="og:description" content="Enchanting Rwanda , Travel and Tour Agency"/>

	<!-- Icon and favicon -->
	<link rel="apple-touch-icon" href="assets/images/icon/icon.jpeg">
    <link rel="shortcut icon" href="assets/images/icon/icon.jpeg">
	
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="assets/css/animate.css">
	
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="assets/css/magnific-popup.css">

	<link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="assets/css/jquery.timepicker.css">

	
	<link rel="stylesheet" href="assets/css/flaticon.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index">Enchanting<span>Rwanda</span></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="index" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="index?about" class="nav-link">About Us</a></li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="index?destination" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Tours Packages
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Tour Package Name 1</a>
							<a class="dropdown-item" href="#">Tour Package Name 1</a>
							<a class="dropdown-item" href="#">Tour Package Name 1</a>
							<a class="dropdown-item" href="#">Tour Package Name 1</a>
						<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="index?destination">All Tours Package</a>
						</div>
					</li>
					<li class="nav-item"><a href="index?hotel" class="nav-link">Special Offers</a></li>
					<li class="nav-item"><a href="index?blog" class="nav-link">Blog</a></li>
					<li class="nav-item"><a href="index?contact" class="nav-link">Contact Us</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->
	
	<?php 
		if (isset($_GET['home'])) {
     		include 'home.php';
		} elseif (isset($_GET['about'])) {
			include 'about.php';
		} elseif (isset($_GET['destination'])) {
			include 'destination.php';
		} elseif (isset($_GET['hotel'])) {
			include 'hotel.php';
		} elseif (isset($_GET['blog'])) {
			include 'blog.php';
		} elseif (isset($_GET['blog_single'])) {
			include 'blog_single.php';
		} elseif (isset($_GET['contact'])) {
			include 'contact.php';
		} 

		//close
		else {
			include 'home.php';
		} ?>

	<footer class="ftco-footer bg-bottom ftco-no-pt" style="background-image: url(assets/images/bg_3.jpg);">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md pt-5">
					<div class="ftco-footer-widget pt-md-5 mb-4">
						<h2 class="ftco-heading-2">About</h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<ul class="ftco-footer-social list-unstyled float-md-left float-lft">
							<li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md pt-5 border-left">
					<div class="ftco-footer-widget pt-md-5 mb-4 ml-md-5">
						<h2 class="ftco-heading-2">Infromation</h2>
						<ul class="list-unstyled">
							<li><a href="#" class="py-2 d-block">Online Enquiry</a></li>
							<li><a href="#" class="py-2 d-block">General Enquiries</a></li>
							<li><a href="#" class="py-2 d-block">Booking Conditions</a></li>
							<li><a href="#" class="py-2 d-block">Privacy and Policy</a></li>
							<li><a href="#" class="py-2 d-block">Refund Policy</a></li>
							<li><a href="#" class="py-2 d-block">Call Us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md pt-5 border-left">
					<div class="ftco-footer-widget pt-md-5 mb-4">
						<h2 class="ftco-heading-2">Experience</h2>
						<ul class="list-unstyled">
							<li><a href="#" class="py-2 d-block">Adventure</a></li>
							<li><a href="#" class="py-2 d-block">Hotel and Restaurant</a></li>
							<li><a href="#" class="py-2 d-block">Beach</a></li>
							<li><a href="#" class="py-2 d-block">Nature</a></li>
							<li><a href="#" class="py-2 d-block">Camping</a></li>
							<li><a href="#" class="py-2 d-block">Party</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md pt-5 border-left">
					<div class="ftco-footer-widget pt-md-5 mb-4">
						<h2 class="ftco-heading-2">Have a Questions?</h2>
						<div class="block-23 mb-3">
							<ul>
								<li><span class="icon fa fa-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
								<li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2 392 3929 210</span></a></li>
								<li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">info@yourdomain.com</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">

					<p>
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://princeniyonshuti.github.io./" target="_blank">NP Tech</a>
					</p>
					</div>
				</div>
			</div>
	</footer>

	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery-migrate-3.0.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.easing.1.3.js"></script>
	<script src="assets/js/jquery.waypoints.min.js"></script>
	<script src="assets/js/jquery.stellar.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<script src="assets/js/jquery.animateNumber.min.js"></script>
	<script src="assets/js/bootstrap-datepicker.js"></script>
	<script src="assets/js/scrollax.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="assets/js/google-map.js"></script>
	<script src="assets/js/main.js"></script>
	
</body>
</html>
