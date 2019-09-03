<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/pages/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/pages/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/pages/css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="assets/pages/css/style-v=1.0.1.css">
    <link rel="stylesheet" type="text/css" href="assets/pages/css/fixes.css">

    <script src="assets/pages/js/jquery-3.2.1.min.js"></script>
    <script src="assets/pages/js/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="assets/pages/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    <script src="assets/pages/js/scrollreveal.js"></script>
    <script src="assets/pages/js/owl.carousel.min.js"></script>

    <link rel="icon" href="assets/pages/img/favicon.png">
    <title>Nigerian Air Force</title>
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
    <link rel='stylesheet' id='contact-form-7-css' href='assets/pages/css/styles-ver=5.0.5.css' type='text/css' media='all'/>
    <script type='text/javascript' src='assets/pages/js/jquery-ver=1.12.4.js'></script>
    <script type='text/javascript' src='assets/pages/js/jquery-migrate.min-ver=1.4.1.js'></script>
    <link rel='shortlink' href='index.html'/>
    <link rel="stylesheet" href="assets/pages/css/custom.css">
    <link rel="stylesheet" href="assets/pages/css/icons.data.svg.css">
    <link rel="stylesheet" href="assets/pages/css/aos.css">
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
        .page-label span.label-text.is-filled {
            font-size: 14px;
            line-height: 35px;
        }
    </style>
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
                <span class="label-text is-filled">MISSION & VISION
                    </span>
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
<section id="home">
    <div data-bind="template: { name: 'faq' }" class="view view-faq" style="visibility: visible;">
        
        <header class="hero-image text-inverted is-small"
                data-bind="css: { 'is-small': isSmall, 'has-option-slider': hasOptionSlider }">
            <div class="hero-image-title">
                <h6 class="heading-06 subtitle">Nigerian Air Force</h6>
                <h1 class="heading-02 title">Mission &amp; Vision</h1>
            </div>
        </header>

        <article class="content-wrapper mission">
            <div class="site-wrapper s text-left single-margin-bottom">
                <h6 class="heading-03">MISSION</h6>
                
                <h3 class="copy-intro-01" data-bind="text: deeplinkQuestion().question">
                    {!! $mission->mission !!}
                </h3>


                <h6 class="heading-03">CHIEF OF THE AIR STAFF VISION</h6>
                <h3 class="copy-intro-01" data-bind="text: deeplinkQuestion().question">
                    “{!! $vision->vision !!}" 
                    <br />
                    <br />
                    <span class="heading-07 mb-1">
                        Air Marshal SB Abubakar DFS GSS psc(+) fwc ndc(+) MSc
                    </span>                   
                    
                </h3>
            </div>

            <div class="site-wrapper s text-left">
                
            </div>

            <hr class="site-wrapper semi-transparent-line single-margin-bottom inverted">
            
            <h6 class="heading-03">
                KEY DRIVERS OF CAS VISION
            </h6>

            <div class="site-wrapper sm grid-wrapper text-left">
              
                <ul class="reset-list grid-item grid-one-whole grid-padding-side-half grid-s-no-padding">
                    <li class="mb-1 grid-item grid-one-half grid-padding-side-half grid-s-no-padding">
                        
                        <hr class="double-line">
                        <h4 class="copy-intro-02">Human capacity development through robust and result oriented training for enhanced professional performance.</h4>
                        
                    </li>

                    <li class="mb-1 grid-item grid-one-half grid-padding-side-half grid-s-no-padding">
                        <hr class="double-line">
                        <h4 class="copy-intro-02">Robust logistics support and maitenance culture to sustain platforms and equipment serviceability.</h4>
                    </li>

                    <li class="mb-1 grid-item grid-one-half grid-padding-side-half grid-s-no-padding">
                        <hr class="double-line">
                        <h4 class="copy-intro-02">
                            Reinforce a culture of self-reliance and prudent management of resources.
                        </h4>
                    </li>
                    <li class="grid-item grid-one-half grid-padding-side-half grid-s-no-padding">
                        <hr class="double-line">
                        <h4 class="copy-intro-02">
                            Strategic partnerships with MDAs for enhanced research and development.
                        </h4>
                    </li>

                    <li class="mb-1 grid-item grid-one-half grid-padding-side-half grid-s-no-padding">
                        <hr class="double-line">
                        <h4 class="copy-intro-02">
                            Promote and inculcate the core values of integrity, excellence and service delivery.
                        </h4>

                    </li>

                    <li class="mb-1 grid-item grid-one-half grid-padding-side-half grid-s-no-padding">
                        <hr class="double-line">
                        <h4 class="copy-intro-02">
                            Focus on comradeship, regimentation and inter-Service cooperation.
                        </h4>
                    </li>
                </ul>

            </div>
        </article>

    </div> 
</section>
        <footer class="site-footer">

            @include('layout.frontend.footer')

        </footer>

<!--
<div id="cookie-policy">
    <a href="index.html#" class="btn-close">X</a>
    <p>We use cookie to give you the best experience on our website.</p>
    <p>By continuing to use our website without changing your cookie settings, you agree to our use of cookies in accordance with our updated <a href="cookie-policy/index.html">Cookie Policy</a></p>
</div>
-->


<script type='text/javascript' src='assets/pages/js/wp-embed.min-ver=4.9.10.js'></script>
<script src="assets/pages/js/isInViewport.jquery.js"></script>
<script src="assets/pages/js/anime.min.js"></script>
<script src="assets/pages/js/script.js"></script>
<script type='text/javascript' src='assets/pages/js/scripts-ver=5.0.5.js'></script>
<script src="assets/pages/js/fixes.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDl7qvcP18DbNkAoeGscVNA1VPE8Ni4bYI&callback=initMap" async
        defer></script>
<script src="assets/pages/js/aos.js"></script>
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
