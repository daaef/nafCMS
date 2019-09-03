<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131272747-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}

		gtag('js', new Date());
		gtag('config', 'UA-131272747-1');
	</script>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="/assets/pages/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/pages/css/owl.carousel.min.css">
	<link rel="stylesheet" href="/assets/pages/css/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/pages/css/style-v=1.0.1.css">
	<link rel="stylesheet" type="text/css" href="/assets/pages/css/fixes.css">

	<link rel="icon" href="/assets/pages/img/favicon.png">
	<title>Nigerian Air Force | Welcome</title>
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
	<link rel='stylesheet' id='contact-form-7-css' href='/assets/pages/css/styles-ver=5.0.5.css' type='text/css' media='all'/>
	<link rel='shortlink' href='index.html'/>
	<link rel="stylesheet" href="/assets/pages/css/custom.css">
	<link rel="stylesheet" href="/assets/pages/css/icons.data.svg.css">
	<link rel="stylesheet" href="/assets/pages/css/aos.css">
</head>

<body class="home page-template-default page page-id-2">
	<div id="fb-root"></div>
	<script>
		(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2';
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>

	<div class="site-header">
		<header class="site-header">
			<a class="header-site-logo text-uppercase icon-logo-airforce" href="index.html" style="background-image: none;">
				<span class="logo-title">Nigerian Air Force</span>
			</a>
			<ul class="main-top-nav">
				<li class="apply-now-label">
					<a class="label-text" href="https://mail.airforce.mil.ng/owa">Mail</a></li>
				<li class="apply-now-label">
					<a class="label-text" href="{{ route('pages.career') }}">Careers</a></li>
				<li class="page-label">
					<span class="label-text is-filled">
						Home
					</span>
				</li>
				<li>
					<a href="#" class="ir top-nav-button main-nav-toggle">
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
	
	<section id="home">
	<header>
		<div class="video-background" style="background-image: url('/assets/pages/img/pia-video-poster.jpeg')">
			<video muted loop autoplay class="video-foreground" id='player' allow="autoplay">
				<source src="/assets/pages/vid/video_5.mp4" type="video/mp4"/>
			</video>
			<div class="overlay"></div>
			<!-- ELVIN EDITED BEGIN -->

			<div style="  position: absolute; left:calc(50% - 165px ); top: calc((50%) + 30px); color:white;">

			</div>
			<!-- ELVIN EDITED END -->
			<div class="head-container">
				<h1 class="head-title">
					<a href="#" class="typewrite" data-period="500"
					   data-type='[ "WILLING       ", "ABLE       ", "READY       " ]'>
						<span class="wrap">WILLING</span>
					</a>
				</h1>

			</div>

		</div>
	</header>
	<article data-aos="zoom-in" data-aos-duration="1500" id="welcome" class="content-wrapper a-page-intro">

		<div class="heading-block" data-transition="heading-block-02">
			<div class="heading-block-topline-v-wrapper">
				<hr class="heading-block-topline-v">
			</div>
			
			<h6 id="textAnimation" data-aos="zoom-in"
				data-aos-duration="2500" class="text-anime heading-06">
				<span>WELCOME TO THE OFFICIAL WEBSITE OF THE
</span>
			</h6>
			<h2 data-aos="fade"
				data-aos-duration="3000"
				id="text" class="heading-02 title responsive-title">
				Nigerian Air Force</h2>
			<div class="button-wrapper-subtitle">
				
			</div>

		</div>

		<div class="site-wrapper text-left">

			<ul class="reset-list grid-wrapper grid-padding-single">
				<li class="grid-item grid-one-half single-margin-bottom">
					<div class="heading-block-more-info">
						<h6 class="heading-04 s-large">HISTORY OF THE NAF</h6>
					</div>
					<p class="copy-body-01 null text-light">
					The idea of establishing an air force for Nigeria was first mooted in 1961 following the nation’s
					participation in peace-keeping operations in Congo and Tanganyika (now Tanzania). During these
					peace-keeping operations, foreign air forces aircraft were employed to airlift the Nigerian Army
					Regiment to and from the theatres of operation.</p>
					<div class="button-alignment">
						<a href="{{ route('pages.history') }}" class="btn btn-outline-white btn-more" target="">
							More
						</a>
					</div>
				</li>
				<li class="grid-item grid-one-half single-margin-bottom">
					<div class="half-margin-bottom">
						<div class="heading-block-more-info">
							<h6 class="heading-04 s-large">
								NAF MISSION
							</h6>
						</div>
						<div class="copy-body-01 null text-light">
							{!! $mission->mission !!}
						</div>
					</div>
					<div>

						<div class="heading-block-more-info">
							<h6
									class="heading-04 s-large">
								CAS VISION
							</h6>
						</div>
						<div class="copy-body-01 null text-light">
							“{!! $vision->vision !!}" 
						</div>
					</div>
				</li>
			</ul>

		</div>
	</article>
	<article data-aos="zoom-in" data-aos-duration="2500" data-aos-delay="300" class="content-wrapper content-small-head s-small-padding">
		<div class="heading-block mt-70px">
			<h2 class="heading-02 title responsive-title" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
				Latest News
			</h2>
		</div>	

		<div class="site-wrapper">
			<div class="grid-wrapper home-grid-items text-inverted single-margin-bottom" data-transition="">
				<div class="grid-item grid-four-seventh">
					<a href="{{ route('news.show.details', $latest->slug) }}" class="button-block full-image-grid-item-small">
						<figure class="full-image-ratio ratio-1-1 is-active">
							<img src="/assets/pages/img/{{ $latest->news_image }}"
								 alt="" style="">
						</figure>

						<div class="full-image-caption">
							<h4 class="heading-07" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
								{{ date('d', strtotime($latest->created_at)) }}/
								{{ date('m', strtotime($latest->created_at)) }}/
								{{ date('Y', strtotime($latest->created_at)) }}
							</h4>
							<h3 class="copy-intro-01 text-no-margin" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
								{!!strlen($latest->title) > 150 ? substr($latest->title,0,150) : $latest->title!!}...
								</h3>
						</div>
					</a>
				</div>

				<div class="grid-item grid-three-seventh">
					@foreach($posts as $post)
						<a href="{{ route('news.show.details', $post->slug) }}" class="button-block full-image-grid-item-small">
						
							<figure class="full-image-ratio ratio-3-2 is-active">
								<img src="/assets/pages/img/{{ $latest->news_image }}" alt="" style="">
							</figure>
							<div class="full-image-caption">
								<h4 class="heading-07" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
									{{ date('d', strtotime($post->created_at)) }}/
									{{ date('m', strtotime($post->created_at)) }}/
									{{ date('Y', strtotime($post->created_at)) }}
								</h4>
								<h3 class="copy-intro-01 text-no-margin" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
									{!!strlen($post->title) > 150 ? substr($post->title,0,150) : $post->title!!}...	
								</h3>
							</div>
						</a>
					@endforeach				

				</div>
			</div>
			
			<div class="button-alignment">
				<a href="{{route('pages.news')}}"
				   class="btn btn-outline-dark btn-lg btn-more" target="">view More
				</a>
			</div>
			<div class="heading-block mt-70px">
				<h2 class="heading-02 title responsive-title" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
					Latest Video</h2>
			</div>
			<div class="grid-item grid-one-whole">


				<iframe style="width: 100%; min-height: 400px" src="https://www.youtube.com/embed/RZ4R2h0Rxmk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

			</div>
			<div class="mt-70px">
				<a href="{{route('pages.videos')}}" class="btn btn-outline-dark btn-lg btn-more">
					view More
				</a>
			</div>
		</div>
	</article>
</section>

<div class="share-wrapper fixed-side-share footer-social-nav text-inverted share-view-all">
	
	<ul class="share">
		<li>
			<a href="https://web.facebook.com/hqnigerianairforce/?_rdc=1&_rdr"
			   target="_blank">
					<span class="button-icon undefined is-inverted">
  				<svg
							class="circle-svg button-icon-outline" width="100px" height="100px" viewBox="0 0 100 100"
					>
  <circle class="circle" cx="50" cy="50" r="48.8" fill="none" stroke="#fff" stroke-width="1.2"
			vector-effect="non-scaling-stroke"></circle>
</svg><!-- /ko -->
  <span class="icon icon-facebook" style="background-image: none;"><svg
			xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="#FFF"
																		 d="M13.5 22v-9H16l.5-4h-3.2V7.6c0-1.1.5-1.9 2-1.9h1.2V2.1c-.3 0-.7-.1-2.1-.1-2.9 0-4.9 1.8-4.9 5v2h-2v4h2v9h4z"></path></svg></span>
</span>
				<!-- /ko -->
			</a>
		</li>

		<li>
			<a href="https://twitter.com/nigairforce" target="_blank">
				   <span class="button-icon undefined is-inverted">
  			<svg
						   class="circle-svg button-icon-outline" width="100px" height="100px" viewBox="0 0 100 100"
				   >
  <circle class="circle" cx="50" cy="50" r="48.8" fill="none" stroke="#fff" stroke-width="1.2"
			vector-effect="non-scaling-stroke"></circle>
</svg><!-- /ko -->
  <span class="icon icon-twitter" style="background-image: none;"><svg
			xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="#FFF"
																		 d="M22.5 5.5c-.8.3-1.6.6-2.5.7.9-.5 1.6-1.4 1.9-2.4-.8.5-1.8.8-2.7 1-.8-.8-1.9-1.3-3.2-1.3-2.4 0-4.3 1.9-4.3 4.3 0 .3 0 .7.1 1C8.3 8.6 5.1 6.9 3 4.3c-.4.6-.6 1.4-.6 2.1 0 1.5.8 2.8 1.9 3.6-.7 0-1.4-.2-2-.5v.1c0 2.1 1.5 3.8 3.5 4.2-.4.1-.7.2-1.1.2-.3 0-.5 0-.8-.1.5 1.7 2.1 2.9 4 3-1.5 1.2-3.3 1.8-5.4 1.8-.3 0-.7 0-1-.1 1.9 1.2 4.2 1.9 6.6 1.9 7.9 0 12.3-6.5 12.3-12.2v-.6c.8-.6 1.5-1.3 2.1-2.2z"></path></svg></span>
</span>
			</a>
		</li>

		<li>
			<a href="https://www.instagram.com/nigerianairforce/?hl=en"
			   target="_blank">
					<span class="button-icon undefined is-inverted">
  <svg
							class="circle-svg button-icon-outline" width="100px" height="100px" viewBox="0 0 100 100"
					>
  <circle class="circle" cx="50" cy="50" r="48.8" fill="none" stroke="#fff" stroke-width="1.2"
			vector-effect="non-scaling-stroke"></circle>
</svg><!-- /ko -->
  <span class="icon icon-instagram" style="background-image: none;"><svg
			xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path
			d="M12.003 2.162c2.163.06 4.366-.147 6.497.302 1.754.346 3.001 1.948 3.171 3.687.289 2.987.13 5.999.154 8.997-.033 1.939.007 4.264-1.67 5.593-1.787 1.327-4.132.997-6.22 1.087-2.639-.041-5.295.127-7.92-.189-1.695-.202-3.213-1.457-3.548-3.16-.459-2.27-.237-4.613-.3-6.915.067-2.096-.161-4.244.368-6.294.44-1.818 2.248-2.902 4.03-2.995 1.808-.144 3.626-.102 5.438-.113zm0-2.162c-2.506.08-5.09-.218-7.524.519C2.234 1.17.612 3.229.257 5.506-.146 8.303.06 11.146.01 13.963c.034 2.566-.13 5.44 1.582 7.562 1.53 1.961 4.17 2.46 6.524 2.437 3.208.019 6.425.118 9.628-.106 2.3-.192 4.605-1.494 5.495-3.702 1.025-2.436.673-5.145.762-7.719-.065-2.483.174-5.013-.369-7.456-.494-2.263-2.343-4.112-4.605-4.607C16.731-.154 14.339.059 12.003 0zm0 5.836c-3.063-.07-5.884 2.477-6.129 5.53-.383 3.045 1.87 6.112 4.887 6.665 2.945.672 6.17-1.183 7.079-4.06 1.029-2.842-.417-6.274-3.166-7.528-.83-.4-1.75-.608-2.671-.607zm0 10.158c-2.365.077-4.388-2.282-3.953-4.607.286-2.342 2.911-3.982 5.142-3.21 2.27.63 3.504 3.462 2.416 5.553-.642 1.363-2.096 2.282-3.605 2.264zm6.404-11.84c-1.233-.068-1.938 1.633-1.018 2.457.824.919 2.525.215 2.457-1.018.017-.774-.664-1.456-1.439-1.44z"
			fill="#fff"></path></svg></span>
</span>
				<!-- /ko -->
			</a>
		</li>

		<li>
			<a href="https://www.youtube.com/channel/UC2Jf80aJw_wGhA5AzP_9iLg" target="_blank">
					<span class="button-icon undefined is-inverted">
  <!-- ko template: { name: '_circle-svg', data: { elementClassName: 'button-icon-outline' } } --><svg
							class="circle-svg button-icon-outline" width="100px" height="100px" viewBox="0 0 100 100"
					>
  <circle class="circle" cx="50" cy="50" r="48.8" fill="none" stroke="#fff" stroke-width="1.2"
			vector-effect="non-scaling-stroke"></circle>
</svg><!-- /ko -->
  <span class="icon icon-youtube" style="background-image: none;"><svg
			xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="#FFF"
																		 d="M23.8 7s-.2-1.6-1-2.3c-.9-.9-1.9-.9-2.4-1-3.4-.2-8.4-.2-8.4-.2s-5 0-8.4.2c-.5.1-1.5.1-2.4 1C.5 5.4.2 7 .2 7S0 8.8 0 10.6v1.7c0 1.9.2 4.7.2 4.7s.2 1.6 1 2.3c.9.9 2.1.9 2.6 1 1.9.2 8.2.2 8.2.2s5 0 8.4-.2c.5-.1 1.5-.1 2.4-1 .7-.7 1-2.3 1-2.3s.2-1.8.2-3.7v-2.7c0-1.8-.2-3.6-.2-3.6zm-8.2 5.6L10 15.4c-.1 0-.2.1-.3.1s-.3 0-.4-.1c-.2-.1-.3-.4-.3-.6V9.2c0-.2.1-.5.3-.6.1-.1.2-.1.4-.1.1 0 .2 0 .3.1l5.6 2.8c.2.1.4.4.4.6 0 .3-.1.5-.4.6z"></path></svg></span>
</span>
				
			</a>
		</li>
	</ul>
</div>

		<footer class="site-footer">			
			@include('layout.frontend.footer')
		</footer>
<script src="/assets/pages/js/jquery-3.2.1.min.js"></script>
<script type='text/javascript' src='/assets/pages/js/jquery-ver=1.12.4.js'></script>
<script type='text/javascript' src='/assets/pages/js/jquery-migrate.min-ver=1.4.1.js'></script>
<script src="/assets/pages/js/popper.min.js"></script>
<script src="/assets/pages/js/bootstrap.min.js"></script>
<script src="/assets/pages/js/scrollreveal.js"></script>
<script src="/assets/pages/js/owl.carousel.min.js"></script>
<script type='text/javascript' src='/assets/pages/js/wp-embed.min-ver=4.9.10.js'></script>
<script src="/assets/pages/js/isInViewport.jquery.js"></script>
<script src="/assets/pages/js/anime.min.js"></script>
<script src="/assets/pages/js/script.js"></script>
<script type='text/javascript' src='/assets/pages/js/scripts-ver=5.0.5.js'></script>
<script src="/assets/pages/js/fixes.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDl7qvcP18DbNkAoeGscVNA1VPE8Ni4bYI&callback=initMap" async
		defer></script>
<script src="/assets/pages/js/aos.js"></script>
<script src="/assets/pages/js/noframework.waypoints.min.js"></script>
<script>
	AOS.init({
		easing: 'ease-out-back',
		duration: 1000
	});
</script>
<script>
	window.onload = function () {
		let textWrapper = document.querySelector('.text-anime > span');
		textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
		let textAnime = anime({
			targets: '.text-anime > span > span',
			opacity: [
				{value: .1, easing: 'easeOutSine', duration: 500},
				{value: 1, easing: 'easeInOutQuad', duration: 1200}
			],
			autoplay: true,
			delay: anime.stagger(80, {start: 200})
		});
		jQuery('#textAnimation').waypoint(function () {
			anime({
				targets: '.text-anime > span > span',
				opacity: [
					{value: .1, easing: 'easeOutSine', duration: 500},
					{value: 1, easing: 'easeInOutQuad', duration: 1200}
				],
				autoplay: true,
				delay: anime.stagger(80, {start: 200})
			});
		}, {offset: '100%'});

		var elements = document.getElementsByClassName('typewrite');
		for (var i=0; i<elements.length; i++) {
			var toRotate = elements[i].getAttribute('data-type');
			var period = elements[i].getAttribute('data-period');
			if (toRotate) {
				new TxtType(elements[i], JSON.parse(toRotate), period);
			}
		}
		// INJECT CSS
		var css = document.createElement("style");
		css.type = "text/css";
		// css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
		document.body.appendChild(css);
	}
</script>
</body>
</html>
