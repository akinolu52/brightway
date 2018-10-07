<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Begin Head -->

<head>
<meta charset="utf-8" />
<title>Gemscargo - Transport and shipping</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta name="description"  content="Transporting"/>
<meta name="keywords" content="Transporting, Cargo, Shipping" />
<meta name="MobileOptimized" content="320" />

<!--srart theme style -->
<link href="css/main.css" rel="stylesheet" type="text/css"/>
<!-- end theme style -->
<!-- favicon links -->
<link rel="shortcut icon" type="image/png" href="images/header/favicon.png" />
</head>
<body>
<!--Page main section start-->
<div id="pro_wrapper">
<!--Header start-->
<header id="ed_header_wrapper">
	<div class="ed_header_top">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="pro_call">
						<p style="font-size: 14px; line-height: 24px;">call now <i class="fa fa-volume-control-phone" aria-hidden="true"></i> 
							<a href="tel:+971529670247" style="color: #FFF;"> +971-52-967-0247</a> </p>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="ed_info_wrapper">
						<ul>
							<li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Google+"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#" data-toggle="tooltip" data-placement="bottom" title="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="ed_header_bottom">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-3">
					<div class="pro_logo"> <a href="/"><img src="images/header/Logo.png" alt="logo" /></a> </div>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-9">
					<div class="pro_menu_toggle navbar-toggle" data-toggle="collapse" data-target="#ed_menu">Menu <i class="fa fa-bars"></i>
					</div>
					<div class="pro_menu">
						<ul class="collapse navbar-collapse" id="ed_menu">
                            <li><a href="/">Home</a></li>
							<li><a href="/about">about us</a></li>
							<li><a href="/services">Services</a></li>
							<li><a href="/pricing">pricing</a></li>
							<li><a href="/contact">Contact</a></li>
							<li><a href="/track">track</a></li> 
						</ul>
					</div>
				</div>
			</div>
		</div>
    </div>
</header>
<!--header end -->
<!--Breadcrumb start-->
@if(!Route::name('login'))
<div class="ed_pagetitle">
<div class="ed_img_overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="page_title">
					<h2>@yield('title')</h2>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12">
				<ul class="breadcrumb">
					<li><a href="/">home</a></li>
					<li>//</li>
					<li><a href="@yield('page-link')">@yield('title')</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
@endif
<!--Breadcrumb end-->
@yield('content')
<!--Footer Top section start-->
<div class="ed_footer_wrapper ed_toppadder60 ed_bottompadder30">
	<div class="ed_footer_top">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-12">
					<div class="widget text-widget">
                        <p><a href="/"><img src="images/footer/F_Logo.png" alt="Footer Logo" /></a></p>
						<p>Gemscargo is the center of the world! It is the glue of our daily lives. When it goes well, we don't see it. When it goes wrong, it negatively colors our day, makes us feel angry and impotent.</p>
						<div class="ed_sociallink">
						<ul>
							<li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Google+"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#" data-toggle="tooltip" data-placement="bottom" title="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-12">
					<div class="widget text-widget">
						<h4 class="widget-title">services</h4>
						<div class="ed_footer_menu">
							<ul>
								<li><a href="#">Logistic</a></li>
								<li><a href="#">Warehousing</a></li>
								<li><a href="#">Ground Transport</a></li>
								<li><a href="#">Packaging & Storage</a></li>
								<li><a href="#">Door-To-Door Delivery</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-12">
					<div class="widget text-widget">
						<h4 class="widget-title">quick links</h4>
						<div class="ed_footer_menu">
							<ul>
								<li><a href="/">home</a></li>
								<li><a href="/about">about</a></li>
								<li><a href="/contact">contact us</a></li>
								<li><a href="/pricing">pricing</a></li>
								<li><a href="/services">services</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-12">
					<div class="widget text-widget">
						<h4 class="widget-title">find us</h4>
						<p><i class="fa fa-home" aria-hidden="true"></i> 001- Al Naif Street - Dubai - United Arab Emirates</p>
						<p><i class="fa fa-envelope" aria-hidden="true"></i><a href="#">info@Gemscargo.com</a></p>
						<p><i class="fa fa-phone" aria-hidden="true"></i> +971 52 967 0247</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--Footer Top section end-->
<!--Footer Bottom section start-->
<div class="ed_footer_bottom">
	<div class="container">
		<div class="col-lg-12 col-md-12 col-sm-12">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="ed_copy_right">
					<p>&copy; Copyright 2018, All Rights Reserved, <a href="#">Gemscargo</a></p>
				</div>
			</div>
		</div>
		</div>
	</div>
</div>
<!--Footer Bottom section end-->
</div>
<!--Page main section end-->
<!--main js file start--> 
<script type="text/javascript" src="js/jquery-1.12.2.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/modernizr.js"></script> 
<script type="text/javascript" src="js/owl.carousel.js"></script>
<script type="text/javascript" src="js/smooth-scroll.js"></script> 
<script type="text/javascript" src="js/jquery.magnific-popup.js"></script> 
<script type="text/javascript" src="js/plugins/revel/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="js/plugins/revel/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="js/plugins/revel/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="js/plugins/revel/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="js/plugins/revel/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="js/plugins/revel/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="js/plugins/revel/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="js/plugins/revel/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="js/plugins/revel/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="js/plugins/revel/revolution.extension.video.min.js"></script>
<script type="text/javascript" src="js/plugins/countto/jquery.countTo.js"></script>
<script type="text/javascript" src="js/plugins/countto/jquery.appear.js"></script>
<script type="text/javascript" src="js/custom.js"></script> 
<!--main js file end-->
</body>

</html>