<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="assets/pages/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/pages/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/pages/css/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="assets/pages/css/style-v=1.0.1.css">
	<link rel="stylesheet" type="text/css" href="assets/pages/css/fixes.css">

	<link rel="icon" href="img/favicon.png">
	<title>Nigerian Air Force | Leadership</title>
	<link rel="canonical" href="index.html"/>
	<meta property="og:locale" content="en_GB"/>
	<meta property="og:type" content="website"/>
	<meta property="og:title" content="Nigerian Air Force"/>
	<meta property="og:url" content="http://airforce.mil.ng/"/>
	<meta property="og:site_name" content="Nigerian Air FOrce"/>
	<meta name="twitter:card" content="summary_large_image"/>
	<meta name="twitter:title" content="Nigerian Air Force"/>
	<!-- / Yoast SEO plugin. -->

	<link rel='dns-prefetch' href='https://s.w.org'/>
	<style type="text/css">
		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 .07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}
	</style>
	<link rel='stylesheet' id='contact-form-7-css' href='assets/pages/css/styles-ver=5.0.5.css' type='text/css' media='all'/>
	<script type='text/javascript' src='assets/pages/js/jquery-ver=1.12.4.js'></script>
	<script type='text/javascript' src='assets/pages/js/jquery-migrate.min-ver=1.4.1.js'></script>
	<link rel='shortlink' href='index.html'/>
	<link rel="stylesheet" href="assets/pages/css/custom.css">
	<link rel="stylesheet" href="assets/pages/css/icons.data.svg.css">
	<link rel="stylesheet" href="assets/pages/css/aos.css">
</head>

<body class="home page-template-default page page-id-2">
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2';
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
		</script>

		<div class="site-header">
			<header class="site-header">

				<a class="header-site-logo text-uppercase icon-logo-airforce"
				   href="/" style="background-image: none;">
					<span class="logo-title">Nigerian Air Force</span>
				</a>

				<ul class="main-top-nav">
					<li class="apply-now-label">
						<a class="label-text" href="https://mail.airforce.mil.ng/owa">Mail</a></li>
					<li class="apply-now-label">
						<a class="label-text" href="{{route('pages.career')}}">Careers</a></li>
					<li class="page-label">
				<span class="label-text is-filled"><!--ko text:navPageName-->LEADERSHIP
					<!--/ko--></span>
					</li>
					<li>
						<a href="#" class="ir top-nav-button main-nav-toggle"
						>
							<span class="lines"></span>
							<span class="cross">
						<span class="cross-diagonal"></span>
					</span>
						</a>
					</li>
				</ul>

			</header>
			<span class="site-header-small-view-bg" style="transform: matrix(1, 0, 0, 1, 0, 0);"></span>
		</div>
		<nav class="main-navigation is-hidden text-inverted">
			@include('layout.frontend.navbar')
		</nav>
<section id="home" class="leadership">
	<div class="view view-faq" style="visibility: visible;">
		<header class="hero-image text-inverted is-small">
			<div class="hero-image-title">
				<h6 class="heading-06 subtitle">Nigerian Air Force</h6>
				<h1 class="heading-02 title">LEADERSHIP</h1>
			</div>
		</header>
		<div class="site-wrapper mt-70px">
			<div class="heading-block text-center" data-transition="heading-block-02" data-bind="css: { 'small-margin-bottom': ko.unwrap($data.smallMarginBottom) }">
				<h6 class="heading-06 text-mask-background text-stroke-through">
					HOME > ABOUT > LEADERSHIP</h6>
				<h2 class="heading-02 title responsive-title">Chief of The Air Staff (CAS)</h2>
			</div>
			<div class="row padding@mobile">
				<div class="col-12 col-md-5 image bg-contain">
					<img src="assets/pages/img/avm.png" class="img-fluid">
				</div>
				<div class="col-12 col-md-7 description grid-padding-around">
					<h4 class="feature-title">Air Marshal Sadique Baba Abubakar</h4>
					<h5 class="title">DFS GSS psc(+) fwc ndc(+) MSc</h5>
					<p>Air Marshal SB Abubakar was born on 8 April 1960 at Azare in Bauchi State. He had his primary education at St Paul’s Primary School Bauchi from 1967 to 1973 and his secondary education at GSS Bauchi. He joined the Nigerian Air Force as a member of Cadet Military Training Course (CMTC 5) in November 1979.</p>
					<div class="button-alignment">
						<a href="#"
						   class="btn btn-outline-dark btn-lg btn-more" target="">Read More
						</a>
					</div>
				</div>
			</div>


		</div>
		<article class="content-wrapper content-small-head section-specialty-careers">
			<div class="heading-block" data-transition="">
				<h3 class="heading-03 has-small-margin text-mask-background text-stroke-through" data-bind="
			css: {
				'has-margin': $data.bodyCopy,
				'has-small-margin': !$data.bodyCopy,
				'text-mask-background text-stroke-through': !$data.noStrokeThrough
			}" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
					Senior Commanders
				</h3>
			</div>
			<!--/ko-->

			<ol class="reset-list grid-wrapper justify-content-center site-wrapper block-grid-animate">
				@foreach($cases as $case)
					<li class="grid-item mt-1 mb-1 grid-one-quarter">
						<a href="commanders.html" class="card no-overflow">
							<div class="media">
								<img class="card-img-top" src="assets/pages/img/cmd2.jpg" alt="Card image cap">
							</div>
							<div class="card-body">
								<h5 class="card-title">
									{{ $case->cas_title }}
								</h5>
								<p class="card-text">
									{{ $case->description }}
								</p>
							</div>
						</a>
					</li>
				@endforeach
			</ol>
			<hr class="is-horizontal-line">
			<ol class="reset-list grid-wrapper justify-content-center site-wrapper block-grid-animate">
				@foreach($leaders as $case)
					<li class="grid-item mt-1 mb-1 grid-one-quarter">
						<a href="commanders.html" class="card no-overflow">
							<div class="media">
								<img class="card-img-top" src="assets/pages/img/cmd2.jpg" alt="Card image cap">
							</div>
							<div class="card-body">
								<h5 class="card-title">
									{{ $case->cas_title }}
								</h5>
								<p class="card-text">
									{{ $case->description }}
								</p>
							</div>
						</a>
					</li>
				@endforeach				
			</ol>
		</article>
	</div>
</section>
		<footer class="site-footer">
			@include('layout.frontend.footer')
		</footer>


<script src="assets/pages/js/jquery-3.2.1.min.js"></script>
<script src="assets/pages/js/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
		crossorigin="anonymous"></script>
<script src="assets/pages/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
		crossorigin="anonymous"></script>
<script src="assets/pages/js/scrollreveal.js"></script>
<script src="assets/pages/js/owl.carousel.min.js"></script>
<script type='text/javascript' src='assets/pages/js/wp-embed.min-ver=4.9.10.js'></script>
<script src="assets/pages/js/isInViewport.jquery.js"></script>
<script src="assets/pages/js/anime.min.js"></script>
<script src="assets/pages/js/script.js"></script>
<script type='text/javascript' src='assets/pages/js/scripts-ver=5.0.5.js'></script>
<script src="assets/pages/js/fixes.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDl7qvcP18DbNkAoeGscVNA1VPE8Ni4bYI&callback=initMap" async
		defer></script>
<script src="assets/pages/js/aos.js"></script>
<script src="assets/pages/js/jquery.matchHeight.js"></script>
<script>
	AOS.init({
		easing: 'ease-out-back',
		duration: 1000
	});
	$(function() {
		$('.card.no-overflow').matchHeight({
			byRow: true,
			property: 'height',
			target: null,
			remove: false
		});
	});
</script>
</body>

</html>