<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="description" content="Nigerian Air Force">
	<meta name="author" content="http://airforce.mil.ng/">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Nigerian Air Force</title>
	<!-- Calling Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="assets/pages/img/favicon.png">
	<!-- Calling Favicon -->
	<!-- ********************* -->
	<!-- CSS files -->
	<link rel="stylesheet" href="assets/pages/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/pages/css/animate.css">
	<link rel="stylesheet" href="assets/pages/css/all.min.css">
	<link rel="stylesheet" href="assets/pages/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/pages/css/nice-select.css">
	<link rel="stylesheet" href="assets/pages/css/magnific-popup.css">
	<link rel="stylesheet" href="assets/pages/css/meanmenu.css" media="all">
	<link rel="stylesheet" href="assets/pages/css/default.css">
	<link rel="stylesheet" href="assets/pages/css/style.css">
	<link rel="stylesheet" class="color-changing" href="assets/pages/css/color.css">
	<link rel="stylesheet" href="assets/pages/css/responsive.css">
	<!-- End CSS files -->
</head>

<body>
<!-- Preloader start -->
<div class="loader-page flex-center">
	<img src="/assets/pages/img/loader.gif" alt="">
</div>
<!-- Preloader end -->

<!-- Header start -->
<header class="transperant-head transition-4 ">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-2 col-md-5 col-sm-4 col-5">
				<div class="logo transition-4">
					<a href="index-2.html">
						<img src="/assets/pages/img/logo/logo.png" class="transition-4" alt="logo">
					</a>
				</div>
			</div>
			<div class="col-lg-10 col-md-7 col-sm-8 col-7">
				<div class="icon-links d-flex align-items-center">
					<a href="#" class="search-icon d-none d-sm-block" data-toggle="modal" data-target="#searchModal">
						<i class="fas fa-search"></i>
					</a>
					<a href="#" class="btn btn-round d-none d-sm-block blob-small">CONTACT US</a>
				</div>
				<div class="menu-links">
					<nav class="main-menu white">
						<ul>
							@foreach($menus as $menu)
								<li>
                  <a href="{{ url($menu->slug) }}">
                  	{{ $menu->name }} 
                  	@if(count($menu->submenus) > 0) 
                  		<i class="fas fa-angle-down"></i> 
                  	@endif
 									</a>
                  @if (count($menu->submenus) > 0)
						        @foreach($menu->submenus as $submenu)
						        	<ul class="submenu">
                        <li><a href="{{ url($submenu->slug) }}">{{ $submenu->name }}</a></li>
                    	</ul>
						        @endforeach
							    @endif
              	</li>
							@endforeach
						</ul>
					</nav>
				</div>
			</div>
			<div class="col-12">
				<div class="mobile-menu"></div>
			</div>
		</div>
	</div>
</header>

<div class="search-popup modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal"
	 aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<form action="#">
					<div class="form-group relative">
						<input type="text" class="form-control input-search" id="search" placeholder="Search here...">
						<i class="fas fa-search transform-v-center"></i>
					</div>
				</form>

			</div>
		</div>
	</div>
	<i class="fas fa-times close-search-modal" data-dismiss="modal" aria-label="Close"></i>
</div>
<!-- The search Modal end -->

<!-- Slider start -->
<section class="slider-area-2 relative">
	<div class="owl-carousel slider-2">
		<div class="item">
			<div class="silder-img" style="background-image: url('/assets/pages/img/03.jpg');" data-overlay="7">
				<div class="container">
					<div class="row">
						<div class="col-xl-7 col-lg-8">
							<div class="slider-content z-10">
								<h5 class="line-head border-white color-white">
									Welcome to the official website of the
									<span class="line after"></span>
								</h5>
								<h1 class="banner-head-2 f-700 mt-25 mb-35 mt-xs-20 mb-xs-30">Nigerian <strong>Air
									Force</strong>
									<br>Willing | Able | Ready</h1>
								<a href="#" class="btn btn-square">Learn More<i
										class="fas fa-long-arrow-alt-right ml-20"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="item">
			<div class="silder-img" style="background-image: url('/assets/pages/img/5516.jpg');" data-overlay="7">
				<div class="container">
					<div class="row">
						<div class="col-xl-7 col-lg-8">
							<div class="slider-content z-10">
								<h5 class="line-head border-white color-white">
									UI DISTINGUISHED PERSONALITY LECTURE:
									<span class="line after"></span>
								</h5>
								<h1 class="banner-head-2 color-white capitalize f-700 mt-25 mb-35 mt-xs-20 mb-xs-30">
									cas honoured as fellow of spsp, distinguished alumnus of ipss
								</h1>
								<a href="#" class="btn btn-square">Learn More<i
										class="fas fa-long-arrow-alt-right ml-20"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="item">
			<div class="silder-img" style="background-image: url('/assets/pages/img/5543.jpg');" data-overlay="7">
				<div class="container">
					<div class="row">
						<div class="col-xl-7 col-lg-8">
							<div class="slider-content z-10">
								<h5 class="line-head border-white color-white">
									NAF TO STRENGTHEN TIES WITH BANGLADESH
									<span class="line after"></span>
								</h5>
								<h1 class="banner-head-2 capitalize f-700 mt-25 mb-35 mt-xs-20 mb-xs-30">for capacity
									building in pilot training, others</h1>
								<a href="#" class="btn btn-square">Learn More<i
										class="fas fa-long-arrow-alt-right ml-20"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="item">
			<div class="silder-img" style="background-image: url('assets/pages/img/5651.jpg');" data-overlay="7">
				<div class="container">
					<div class="row">
						<div class="col-xl-7 col-lg-8">
							<div class="slider-content z-10">
								<h5 class="line-head border-white color-white">
									NAF IMMORTALIZES LATE FLYING OFFICER ABDULRAHMAN BAYERO,
									<span class="line after"></span>
								</h5>
								<h1 class="banner-head-2 capitalize f-700 mt-25 mb-35 mt-xs-20 mb-xs-30">trains 4,500
									regiment personnel in 4 years</h1>
								<a href="#" class="btn btn-square">Learn More<i
										class="fas fa-long-arrow-alt-right ml-20"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="slider-control z-5">
		<div class="container">
			<div class="row align-items-end">
				<div class="col-lg-6">
					<div class="dots-slider">

					</div>
				</div>
				<div class="col-lg-6 text-right d-none d-lg-block">
					<div class="nav-slider d-flex justify-content-end">
						<a href="#" class="slider-btn slides-left flex-center">
							<i class="fas fa-chevron-left"></i>
						</a>
						<a href="#" class="slider-btn slides-right flex-center">
							<i class="fas fa-chevron-right"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Slider end -->
<!-- Our features start -->

<section class="features-area bg-light-white pt-40 pb-40 pb-xs-00">
	<div class="container">
		<div class="row">
			<div class="col-sm-3 text-center text-lg-left">
				<div class="icon-box d-flex flex-column flex-lg-row align-items-center">
					<div class="icon-text">
						<h5 class="f-700"><a href="#" class="nav-link" href="#">Vision & Mission</a></h5>
					</div>
				</div>
			</div>
			<div class="col-sm-3 text-center text-lg-left">
				<div class="icon-box d-flex flex-column flex-lg-row align-items-center">
					<div class="icon-text">
						<h5 class="f-700"><a href="#" class="nav-link" href="#">About NAF</a></h5>
					</div>
				</div>
			</div>
			<div class="col-sm-3 text-center text-lg-left">
				<div class="icon-box d-flex flex-column flex-lg-row align-items-center">
					<div class="icon-text">
						<h5 class="f-700"><a href="#" class="nav-link" href="#">Publications</a></h5>
					</div>
				</div>
			</div>
			<div class="col-sm-3 text-center text-lg-left">
				<div class="icon-box d-flex flex-column flex-lg-row align-items-center">
					<div class="icon-text">
						<h5 class="f-700"><a href="#" class="nav-link" href="#">Foreign Mission</a></h5>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Our features end -->

<!-- About us start -->
<section class="about-us pt-100 pb-100">
	<div class="container">
		<div class="row align-items-xl-center">
			<div class="col-lg-5">
				<div class="owl-carousel slider-about">
					<div class="item h-100">
						<div class="ceo-video h-100 relative img-lined mx-auto shadow-1 wow fadeInLeft">
							<img class="col-md-12 img-cover p-0" src="/assets/pages/img/about-2.jpg" alt="">
						</div>
					</div>
					<div class="item">
						<div class="ceo-video relative img-lined mx-auto shadow-1 wow fadeInLeft">
							<img class="col-md-12 p-0" src="/assets/pages/img/avm.png" alt="">
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-7">
				<div class="about-text mt-md-60 text-center text-lg-left wow fadeInRight">
					<div class="fancy-head left-al  mb-10">
						<h5 class="line-head mb-10">
							<span class="line before d-lg-none"></span>
							BACKGROUND OF THE
							<span class="line  after"></span>
						</h5>
						<h1>NIGERIAN AIR FORCE</h1>
					</div>
					<p>The idea of establishing an air force for Nigeria was first mooted in 1961 following the nation’s
						participation in peace-keeping operations in Congo and Tanganyika (now Tanzania). During these
						peace-keeping operations, foreign air forces aircraft were employed to airlift the Nigerian Army
						Regiment to and from the theatres of operation. <a href="about-us.html">Read More</a></p>
					<div class="about-author mt-20 d-flex align-items-center justify-content-center justify-content-lg-start">
						<div class="name-author">
							<p>Chief of the Air Staff</p>
							<p class="name">
								Air Marshal SB Abubakar
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- About us end -->

<!-- Service start -->
<section class="services bg-light-white pt-95 pb-70 bg">
	<div class="container">
		<div class="row align-items-end  mb-45">
			<div class="col-lg-7 col-md-12 text-center text-lg-left">
				<div class="fancy-head left-al">
					<h5 class="line-head mb-15">
						<span class="line before d-lg-none"></span>
						Careers
						<span class="line after"></span>
					</h5>
					<h1>Choose How You Serve</h1>
				</div>
			</div>
			<div class="col-lg-5 col-md-12 text-center text-lg-right">
				<a href="career.html" class="btn btn-round-border mb-15 mt-md-20">View All</a>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="service-box transition-4 text-center relative img-lined mb-30">
					<div class="service-icon">
						<div class="service-icon-bg"></div>
						<img src="/assets/pages/img/service/1.png" class="transform-center" alt="">
					</div>
					<div class="service-text">
						<h4 class="f-700 mt-30 mb-10">
							<a href="services-details.html">ENGINEERING</a>
						</h4>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="service-box transition-4 text-center relative img-lined mb-30">
					<div class="service-icon">
						<div class="service-icon-bg"></div>
						<img src="/assets/pages/img/service/2.png" class="transform-center" alt="">
					</div>
					<div class="service-text">
						<h4 class="f-700 mt-30 mb-10">
							<a href="services-details.html">MEDICAL</a>
						</h4>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="service-box transition-4 text-center relative img-lined mb-30">
					<div class="service-icon">
						<div class="service-icon-bg"></div>
						<img src="/assets/pages/img/service/3.png" class="transform-center" alt="">
					</div>
					<div class="service-text">
						<h4 class="f-700 word-b mt-30 mb-10">
							<a href="#">ADMINISTRATION</a>
						</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Service end -->

<!-- Blog/news letter area start -->
<section class="blog-type-2 bg-light-white pt-25 pb-100">
	<div class="container">
		<div class="row align-items-end  mb-45">
			<div class="col-lg-7 col-md-12 text-center text-lg-left">
				<div class="fancy-head left-al">
					<h5 class="line-head mb-15">
						<span class="line before d-lg-none"></span>
						News &amp; blogs
						<span class="line after"></span>
					</h5>
					<h1>Latest News</h1>
				</div>
			</div>
			<div class="col-lg-5 col-md-12 text-center text-lg-right">
				<a href="news.html" class="btn btn-round-border mb-15 mt-md-20">View All</a>
			</div>
		</div>
		<div class="row mb-55 mb-sm-15">
			@foreach($posts as $post)
				<div class="col-md-6">
				<div class="blog-box relative">
					<a href="blog-details-slider.html">
						<div class="blog-img img-lined mr-40 mr-md-00">
							<img src="../uploads/news/images/{{$post->news_image}}" alt="" class="w-100">
						</div>
					</a>
					<div class="blog-box-text z-10 bg-green-op-9 shadow-4">
						<p class="blue mb-10">
							<span class="line-before transition-4 color-white">{{ date('d', strtotime($post->created_at)) }} - {{ date('m', strtotime($post->created_at)) }} - {{ date('Y', strtotime($post->created_at)) }}</span>
						</p>
						<h5 class="white f-700 mb-10 capitalize">
							<a href="{{ route('news.show', $post->slug) }}">{{ $post->title }}</a>
						</h5>
						<a href="{{ route('news.show', $post->slug) }}" class="text-link-a white fs-13 mb-10 uppercase f-600">
							Readmore
							<i class="fas fa-long-arrow-alt-right ml-10"></i></a>
					</div>
				</div>
			</div>
			@endforeach
			
		</div>
		
	</div>
</section>
<!-- Blog/news letter area end -->

<!-- cta area start -->
<!--<section class="cta pt-50 pb-50" style="background-image: url('img/bg/bg_cta.jpg');" data-overlay="9">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-xl-4 col-lg-5 mb-md-20 text-center text-lg-left">
				<h3 class="z-5 white f-700 lh-18 wow fadeInLeft">What type of challenge are you facing?
					<span class="green italic">Let’s talk</span>
				</h3>
			</div>
			<div class="col-xl-8 col-lg-7 text-center text-lg-right z-5">
				<a href="#" class="btn btn-square-white mr-20 mr-xs-00 d-block d-sm-inline-block mb-xs-15 wow fadeInUp">
					<i class="fas fa-envelope mr-15"></i>info@example.com
				</a>
				<a href="tel:1234567890" class="btn btn-square-green d-block d-sm-inline-block blob-small wow fadeInUp">
					<i class="fas fa-phone mr-15"></i>+1 234 567 890
				</a>
			</div>
		</div>
	</div>
</section>-->
<!-- cta area end -->

<!-- Footer area start -->
<footer class="footer-area">
	<div class="container">
		<div class="row mb-sm-50 mb-xs-00">
			<div class="col-lg-4 z-5">
				<div class="contact-area relative h-100 mr-lg-20 mr-md-00">
					<div class="footer-logo mb-35">
						<img src="assets/pages/img/logo/logo.png" alt="">
					</div>
					<div class="contact-options mb-35">
						<ul>
							<li>
								<i class="fas fa-map-marker-alt green"></i>4221 Melrose Street,Yakima, Washington
							</li>
							<li>
								<i class="fas fa-phone green"></i>(1) 234 456 89
							</li>
							<li>
								<i class="fas fa-envelope green"></i>info@example.com
							</li>
						</ul>
					</div>
					<div class="social-links">
						<ul class="social-icons">
							<li>
								<a href="#"><i class="fab fa-facebook-f"></i></a>
							</li>
							<li>
								<a href="#"><i class="fab fa-twitter"></i></a>
							</li>
							<li>
								<a href="#"><i class="fab fa-linkedin-in"></i></a>
							</li>
							<li>
								<a href="#"><i class="fab fa-google-plus-g"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-4">
				<div class="footer-links pt-85 pt-md-50 mb-sm-70">
					<h5 class="green f-700 mb-35">Quick Links</h5>
					<ul class="links-list">
						<li><a href="#">Home</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Contact Us</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Career</a></li>
						<li><a href="#">Portfolio</a></li>
						<li><a href="{{ route('auth.login.get') }}">Admin Login</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-sm-4">
				<div class="footer-links pt-85 pt-md-50 mb-sm-70">
					<h5 class="green f-700 mb-35">Our Services</h5>
					<ul class="links-list">
						<li><a href="#">Investment planning</a></li>
						<li><a href="#">Financial Planning</a></li>
						<li><a href="#">Business Management</a></li>
						<li><a href="#">Mutual Funds</a></li>
						<li><a href="#">Markets Research</a></li>
						<li><a href="#">Business Consulting</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-sm-4">
				<div class="footer-links pt-85 pt-md-50 mb-50">
					<h5 class="green f-700 mb-35">Need Help?</h5>
					<ul class="links-list">
						<li><a href="#">FAQS</a></li>
						<li><a href="#">Privacy</a></li>
						<li><a href="#">Policy</a></li>
						<li><a href="#">Support</a></li>
						<li><a href="#">Get a Quote</a></li>
						<li><a href="#">Contact us</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<section class="copyright pt-25 pb-25">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-8">
					<p class="mb-0 white">© Copyrights 2019 Bizz All rights reserved</p>
				</div>
				<div class="col-xl-4 text-right">
					<a href="#" class="btn scroll-btn f-right flex-center z-25 opacity-0">
						<i class="fas fa-arrow-up"></i>
					</a>
				</div>
			</div>
		</div>
	</section>
</footer>
<!-- Footer area end -->
<!-- ********************* -->


<!-- JS Files -->
<script src="assets/pages/js/modernizr-3.5.0.min.js"></script>
<script src="assets/pages/js/jquery-1.12.4.min.js"></script>
<script src="assets/pages/js/bootstrap.bundle.min.js"></script>
<script src="assets/pages/js/owl.carousel.min.js"></script>
<script src="assets/pages/js/jquery.magnific-popup.min.js"></script>
<script src="assets/pages/js/jquery.nice-select.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="assets/pages/js/jquery.counterup.min.js"></script>
<script src="assets/pages/js/jquery.countdown.min.js"></script>
<script src="assets/pages/js/lightslider.min.js"></script>
<script src="assets/pages/js/wow.min.js"></script>
<script src="assets/pages/js/isotope.pkgd.min.js"></script>
<script src="assets/pages/js/jquery.meanmenu.min.js"></script>
<script src="assets/pages/js/main.js"></script>
<!-- JS Files end -->
</body>


<!-- Mirrored from vs-themes.co.in/bizz/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Aug 2019 00:58:46 GMT -->
</html>

09019704046