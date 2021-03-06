<!DOCTYPE html>
<html lang="en">
<head>
	<title>Food Blog - Web Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Food Blog Web Template">
	<meta name="keywords" content="food, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/owl.carousel.css"/>
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/animate.css"/>
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/style.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
<?php wp_head(); ?>
</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="header-social">
					<h3 href=""> Aff-Ens </h3>
					<a href="#"><i class="fa fa-pinterest"></i></a>
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-dribbble"></i></a>
					<a href="#"><i class="fa fa-behance"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
				</div>
				<div class="user-panel">
					<a href="#">Register</a> / 
					<a href="#">Login</a>
				</div>
			</div>
		</div>
		<div class="header-bottom">
			<div class="container">
				<a href="index.html" class="site-logo">
					<img src="img/logo.png" alt="">
				</a>
				<div class="nav-switch">
					<i class="fa fa-bars"></i>
				</div>
				<div class="header-search">
					<a href="#"><i class="fa fa-search"></i></a>
				</div>
				<ul class="main-menu">
					<li><a href="<?php get_bloginfo('wpurl');?>/">Home</a></li>
					<li><a href="<?php bloginfo('template_directory');?>/about.php">Features</a></li>
					<li><a href="<?php bloginfo('template_directory');?>/recipes.php">Receipies</a></li>
					<li><a href="#">Reviews</a></li>
					<li><a href="<?php bloginfo('template_directory');?>/contact.php">Contact</a></li>
				</ul>
			</div>
		</div>
		<?php wp_head();?>
	</header>
	<!-- Header section end -->
