<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Learning</title>
	<link href="{{ asset('assets/css/bootstrap-theme.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('css/demo_page.css')}}" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">
	<script src="{{ asset('assets/js/jquery.min.js')}}" type="text/javascript"></script>
	
	<style>
		@font-face {
			font-family: 'exo';
			src: url('assets/exo/Exo2.0-Regular.otf');
		}
		body, html{
			font-family: exo, sans-serif;
		}
	</style>
</head>
<body>
	<!-- <div class="container-fluid container-top-links">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<ul class="list-inline pull-right list-signup">
						<li><a href="#" class="text-capitalize">register</a></li>
						<li class="list-menu-separator">|</li>
						<li><a href="#" class="text-capitalize">login</a></li>
					</ul>
						<!-- <ul class="list-inline pull-right list-menu">
							<li><a href="#">FAQ</a></li>
							<li><a href="#" class="text-capitalize">blog</a></li>
							<li><a href="#" class="text-capitalize">about us</a></li>
							<li><a href="#" class="text-capitalize">shopping cart</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>  -->
		<div class="modal fade" id="navbar-links">
			<div class="modal-dialog">
				<div class="modal-content">
					<ul class="list-unstyled text-center list-links-media">
						<li><a href="{{url('/')}}" class="text-uppercase active">home</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<nav class="container-links">
				<div class="container">
					<div class="navbar-header">
						<button class="navbar-toggle" data-toggle="modal" data-target="#navbar-links">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a href="index.php" class="navbar-brand">
							<img src="{{ asset('assets/images/logo.png')}}" class="logo">
						</a>
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="{{url('/')}}" class="text-uppercase active">home</a></li>
						</ul>
					</div>
				</div>
			</nav>

			<div class="row row-carousel">
				<div class="carousel slide" data-ride="carousel" id="banner-slider">
					<div class="carousel-inner">
						<div class="item active">
							<img src="{{ asset('assets/images/webs.jpg')}}">
							<div class="carousel-caption">
								<div class="col-lg-8 pull-right">
									<div class="banner-content-inner pull-right">
										<h1 class="text-uppercase" style="font-family: Arial, sans-serif; font-size: 50px;"><span class="text-yellow" style="font-weight: 800;">Web</span> <span class="text-white" style="font-weight: 800;">Technology</span><br><span class="text-white" style="font-weight: 800;"></span> <span class="text-yellow" style="font-weight: 800;">Training</span></h1>
									</div>
									{{-- <h3 class="text-uppercase text-white txt-hide" style="font-family: Arial, sans-serif;"><b>for individuals & corporations</b></h3> --}}
								</div>
							</div>
						</div>
						<div class="item">
							<img src="{{ asset('assets/images/graphic.jpg')}}">
							<div class="carousel-caption">
								<div class="col-lg-8 pull-right">
									<div class="banner-content-inner pull-right">
										<h1 class="text-uppercase" style="font-family: Arial, sans-serif; font-size: 50px;"><span class="text-yellow" style="font-weight: 800;">Graphics</span> <span class="text-white" style="font-weight: 800;">Technology</span><br><span class="text-white" style="font-weight: 800;"></span> <span class="text-yellow" style="font-weight: 800;">Training</span></h1>
									</div>
									{{-- <h3 class="text-uppercase text-white txt-hide" style="font-family: Arial, sans-serif;"><b>for individuals & corporations</b></h3> --}}
								</div>
							</div>
						</div>
						<div class="item">
							<img src="{{ asset('assets/images/desktops.jpg')}}">
							<div class="carousel-caption">
								<div class="col-lg-8 pull-right">
									<div class="banner-content-inner pull-right">
										<h1 class="text-uppercase" style="font-family: Arial, sans-serif; font-size: 50px;"><span class="text-yellow" style="font-weight: 800;">Desktop</span> <span class="text-white" style="font-weight: 800;">Technology</span><br><span class="text-white" style="font-weight: 800;"></span> <span class="text-yellow" style="font-weight: 800;">Training</span></h1>
									</div>
									{{-- <h3 class="text-uppercase text-white txt-hide" style="font-family: Arial, sans-serif;"><b>for individuals & corporations</b></h3> --}}
								</div>
							</div>
						</div>
						<div class="item">
							<img src="{{ asset('assets/images/network.jpg')}}">
							<div class="carousel-caption">
								<div class="col-lg-8 pull-right">
									<div class="banner-content-inner pull-right">
										<h1 class="text-uppercase" style="font-family: Arial, sans-serif; font-size: 50px;"><span class="text-yellow" style="font-weight: 800;">Network</span> <span class="text-white" style="font-weight: 800;">Technology</span><br><span class="text-white" style="font-weight: 800;"></span> <span class="text-yellow" style="font-weight: 800;">Training</span></h1>
									</div>
									{{-- <h3 class="text-uppercase text-white txt-hide" style="font-family: Arial, sans-serif;"><b>for individuals & corporations</b></h3> --}}
								</div>
							</div>
						</div>
					</div>
					<a data-slide="prev" href="#banner-slider" class="left carousel-control hidden-xs"><span class="fa fa-caret-left fa-2x"></span></a>
					<a data-slide="next" href="#banner-slider" class="right carousel-control hidden-xs"><span class="fa fa-caret-right fa-2x"></span></a>
				</div>
			</div>
		</div> 	
		@yield('content')
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12"style="padding:0px;">
					<footer class="footer-distributed">

			<div class="footer-left">

				<!-- <h3>E<span>Learning</span></h3> -->
				<img src="{{ asset('assets/images/logo.png')}}" class="logo">

				<p class="footer-links">
					<a href="{{url('/')}}">Home</a>
				</p>

				<p class="footer-company-name">Directorate of IT Kpk &copy; 2016</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>Deans Trade Center Peshawar Cantt</span> Khyber Pukhtunkhwa , Pakistan</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>091-9211789</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@company.com"> info@kp.gov.pk</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the company</span>
					Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
				</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>

		</footer>
				</div>
			</div>
		</div>

		<script src="{{ asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
		<script>
			$('.carousel').carousel({
				pause: "false"
			});
		</script>
	</body>

	</html>