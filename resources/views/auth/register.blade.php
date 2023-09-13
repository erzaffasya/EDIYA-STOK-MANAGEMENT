<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Register Ediya VIP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('tlandingpage/assets/img/ediya.png') }}">

    <!-- Template CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('tlandingpage/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('tlandingpage/assets/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('tlandingpage/assets/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('tlandingpage/assets/css/skins/yellow.css') }}" />

    <!-- Template JS Files -->
    <script src="{{ asset('tlandingpage/assets/js/modernizr.js')}}"></script>

</head>

<body class="double-diagonal dark auth-page">
    <!-- Preloader Starts -->
    <div class="preloader" id="preloader">
        <div class="logopreloader">
            <!-- <img src="http://via.placeholder.com/159x28" alt="logo"> -->
        </div>
        <div class="loader" id="loader"></div>
    </div>
    <!-- Preloader Ends -->
    <!-- Page Wrapper Starts -->
    <div class="wrapper">
        <div class="container-fluid user-auth">
			<div class="hidden-xs col-sm-4 col-md-4 col-lg-4">
				<!-- Logo Starts -->
				<a class="logo" href="index-kenburns.html">
					<img id="single-logo" class="img-responsive" src="http://via.placeholder.com/159x28" alt="logo">
				</a>
				<!-- Logo Ends -->
				<!-- Slider Starts -->
				<div id="carousel-testimonials" class="carousel slide carousel-fade" data-ride="carousel">
					<!-- Indicators Starts -->
					<ol class="carousel-indicators">
						<li data-target="#carousel-testimonials" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-testimonials" data-slide-to="1"></li>
						<li data-target="#carousel-testimonials" data-slide-to="2"></li>
					</ol>
					<!-- Indicators Ends -->
					<!-- Carousel Inner Starts -->
					<div class="carousel-inner">
						<!-- Carousel Item Starts -->
						<div class="item active item-1">
							<div>
								<blockquote>
									<p>Amira's Team Was Great To Work With And Interpreted Our Needs Perfectly.</p>
									<footer><span>Lucy Smith</span>, England</footer>
								</blockquote>
							</div>
						</div>
						<!-- Carousel Item Ends -->
						<!-- Carousel Item Starts -->
						<div class="item item-2">
							<div>
								<blockquote>
									<p>The Team Is Endlessly Helpful, Flexible And Always Quick To Respond, Thanks Amira!</p>
									<footer><span>Rawia Chniti</span>, Russia</footer>
								</blockquote>
							</div>
						</div>
						<!-- Carousel Item Ends -->
						<!-- Carousel Item Starts -->
						<div class="item item-3">
							<div>
								<blockquote>
									<p>We Are So Appreciative Of Their Creative Efforts, And Love Our New Site!, millions of thanks Amira!</p>
									<footer><span>Mario Verratti</span>, Spain</footer>
								</blockquote>
							</div>
						</div>
						<!-- Carousel Item Ends -->
					</div>
					<!-- Carousel Inner Ends -->
				</div>
				<!-- Slider Ends -->
			</div>
			<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
				<!-- Logo Starts -->
				<a class="visible-xs" href="index-kenburns.html">
					<img class="img-responsive mobile-logo" src="http://via.placeholder.com/159x28" alt="logo">
				</a>
				<!-- Logo Ends -->
				<div class="form-container">
					<div>
						<!-- Main Heading Starts -->
					<div class="text-center top-text">
						<h1><span>get</span> started</h1>
						<p>open account absolutely free</p>
					</div>
					<!-- Main Heading Ends -->
						<!-- Form Starts -->
						<form class="custom-form">
							<!-- Input Field Starts -->
							<div class="form-group">
								<input class="form-control" name="name" id="name" placeholder="NAME" type="text" required>
							</div>
							<!-- Input Field Ends -->
							<!-- Input Field Starts -->
							<div class="form-group">
								<input class="form-control" name="email" id="email" placeholder="EMAIL" type="email" required>
							</div>
							<!-- Input Field Ends -->
							<!-- Input Field Starts -->
							<div class="form-group">
								<input class="form-control" name="password" id="password" placeholder="PASSWORD" type="password" required>
							</div>
							<!-- Input Field Ends -->
							<!-- Submit Form Button Starts -->
							<div class="form-group">
								<button class="custom-button" type="submit">create account</button>
								<p class="text-center">already have an account ? <a href="login.html">Login</a>
							</div>
							<!-- Submit Form Button Ends -->
						</form>
						<!-- Form Ends -->
					</div>
				</div>
				<!-- Copyright Text Starts -->
				<p class="text-center copyright-text">Copyright © 2023 Ediya All Rights Reserved</p>
				<!-- Copyright Text Ends -->
			</div>
		</div>
    </div>
    <!-- Wrapper Ends -->

    @include('landingpage.partials.scripts')
</body>

</html>
