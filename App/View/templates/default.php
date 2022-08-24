<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>McK</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="portfolio michel kasanga" />
	<meta name="keywords" content="php, js, html, css" />
	<meta name="author" content="Michel kasanga" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Google Webfonts -->
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

	<!-- Animate.css -->
	<link rel="stylesheet" href="public/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="public/css/icomoon.css">
	<!-- Simple Line Icons-->
	<link rel="stylesheet" href="public/css/simple-line-icons.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="public/css/magnific-popup.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="public/css/owl.carousel.min.css">
	<link rel="stylesheet" href="public/css/owl.theme.default.min.css">
	<!-- Salvattore -->
	<link rel="stylesheet" href="public/css/salvattore.css">
	<!-- Theme Style -->
	<link rel="stylesheet" href="public/css/style.css">
	<link rel="stylesheet" href="public/css/autotexte.css">
	<link rel="stylesheet" href="public/css/traitement.css">

	<!-- Modernizr JS -->
	<script src="public/js/modernizr-2.6.2.min.js"></script>

	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
			<script src="js/respond.min.js"></script>
			
			<![endif]-->
	<style>
		#photo {
			width: 100%;
			height: 100%;
			display: flex;
			padding: 0;
			margin: 0;
		}

		#photo1 {
			width: 100%;
			height: 100%;
		}
	</style>
</head>

<body class="font_family">

	<div id="fh5co-offcanvass">
		<ul>
			<li class="active"><a href="#" data-nav-section="home">Home</a></li>
			<li><a href="#" data-nav-section="features">Explore</a></li>
			<!-- <li><a href="#" data-nav-section="design">Design</a></li>
			<li><a href="#" data-nav-section="testimonies">Testimonies</a></li>
			<li><a href="#" data-nav-section="products">Products</a></li>
			<li><a href="#" data-nav-section="benefits">Benefits</a></li>
			<li><a href="#" data-nav-section="pricing">Pricing</a></li> -->
			<li><a href="#" data-nav-section="faqs">A propos</a></li>
		</ul>
		<h3 class="fh5co-lead">Connect </h3>
		<p class="fh5co-social-icons">
			<a href="twitter.com"><i class="icon-twitter"></i></a>
			<a href="facebook.com/kasanga.mwamba.michel"><i class="icon-facebook"></i></a>
			<a href="instagram.com"><i class="icon-instagram"></i></a>
			<a href="linkedin.com"><i class="icon-linkedin"></i></a>
			<a href="youtube.com"><i class="icon-youtube"></i></a>
			<a href="gmail.com"><i class="icon-mail2"></i></a>
		</p>
	</div>

	<div id="fh5co-menu" class="navbar">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#fh5co-navbar" aria-expanded="false" aria-controls="navbar"><span>Menu</span> <i></i></a>
					<a href="home" class="navbar-brand"><span>MICHEL K</span> </a>



					<!-- <a class="navbar-brand " href="./ "   id="ptoto">
						<img src="image/logo_mck.png" alt="main_logo" id="photo1">
						
					</a> -->


				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-page">
		<?= $content; ?>

		<footer id="fh5co-footer" style="">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-footer-content">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-4 col-md-push-3">
							<h3 class="fh5co-lead">Projets participer</h3>
							<ul>
								<li class="traitement">Traitement...</li>
							</ul>
						</div>
						<div class="col-md-3 col-sm-4 col-md-push-3">
							<h3 class="fh5co-lead">projets perso</h3>
							<ul>
								<li class="traitement">Traitement...</li>
							</ul>
						</div>
						<div class="col-md-3 col-sm-4 col-md-push-3">
							<h3 class="fh5co-lead">Proets en Cours</h3>
							<ul>
								<li><a href="#">DrayaModel</a></li>

							</ul>
						</div>

						<div class="col-md-3 col-sm-12 col-md-pull-9">
							<div class="fh5co-footer-logo"><a href="home">MICHEL K</a></div>
							<p class="fh5co-copyright"><small>&copy; <?= date('Y'); ?>. Tout droit Reserver <br> | <a href="" target="_blank">MICHEL K</a> | Dev. <a href="http://pexels.com/" target="_blank">CodeBrain</a>|</small></p>
							<p class="fh5co-social-icons">
								<a href="twitter.com"><i class="icon-twitter"></i></a>
								<a href="facebook.com/kasanga.mwamba.michel"><i class="icon-facebook"></i></a>
								<a href="instagram.com"><i class="icon-instagram"></i></a>
								<a href="linkedin.com"><i class="icon-linkedin"></i></a>
								<a href="youtube.com"><i class="icon-youtube"></i></a>
								<a href="gmail.com"><i class="icon-mail2"></i></a>
							</p>
						</div>

					</div>
				</div>
			</div>
		</footer>
	</div>


	<!-- jQuery -->
	<script src="public/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="public/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="public/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="public/js/jquery.waypoints.min.js"></script>
	<!-- Magnific Popup -->
	<script src="public/js/jquery.magnific-popup.min.js"></script>
	<!-- Owl Carousel -->
	<script src="public/js/owl.carousel.min.js"></script>
	<!-- toCount -->
	<script src="public/js/jquery.countTo.js"></script>
	<!-- Main JS -->
	<script src="public/js/main.js"></script>
	<script src="public/js/autotext.js"></script>
	<script src="public/js/t/traitement.js"></script>
</body>

</html>