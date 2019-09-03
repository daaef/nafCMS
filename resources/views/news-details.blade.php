<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../assets/pages/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/pages/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/pages/css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/pages/css/style-v=1.0.1.css">
    <link rel="stylesheet" type="text/css" href="../assets/pages/css/fixes.css">

    <link rel="icon" href="img/favicon.png">
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
    <link rel='stylesheet' id='contact-form-7-css' href='../assets/pages/css/styles-ver=5.0.5.css' type='text/css' media='all'/>
    <script type='text/javascript' src='../assets/pages/js/jquery-ver=1.12.4.js'></script>
    <script type='text/javascript' src='../assets/pages/js/jquery-migrate.min-ver=1.4.1.js'></script>
    <link rel='shortlink' href='index.html'/>
    <link rel="stylesheet" href="../assets/pages/css/custom.css">
    <link rel="stylesheet" href="../assets/pages/css/icons.data.svg.css">
    <link rel="stylesheet" href="../assets/pages/css/aos.css">
</head>

<body class="home page-template-default page page-id-2">

<div class="site-header">
    <header class="site-header">

        <h1 class="header-site-logo icon-logo-airforce" href="/" style="background-image: none;">
            <span class="logo-title">Nigerian Air Force</span>
        </h1>

        <ul class="main-top-nav">
            <li class="apply-now-label">
                <a class="label-text" href="https://mail.airforce.mil.ng/owa">Mail</a></li>
            <li class="apply-now-label">
                <a class="label-text" href="{{route('pages.career')}}">Careers</a></li>
            <li class="page-label">
                <span class="label-text is-filled">News
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
<section id="home" class="news-detail">
    <div data-bind="template: { name: 'faq' }" class="view view-faq" style="visibility: visible;">
        
        <header class="hero-image text-inverted is-small" style="background-image: url('../uploads/news/images/{{$news->news_image}}');">
        </header>
        <section>
            <div data-bind="css : 'block-container ' + (controller.options.extraClassName || '')"
                 class="block-container">
                <div class="site-wrapper xl p-top-none content-wrapper content-xsmall-head">
                    <div class="story-intro-image-content site-wrapper l grid-wrapper text-left">
                        <div class="grid-item grid-nine-sixteenth story-intro-image-caption text-inverted small-right">
                            <span class="heading-03 quote-copy"
                               data-bind="html: $data.quote, css: {'quote-copy': !$data.quoteMark}">
                                   {{ $news->title }}
                               </span>
                        </div>

                        <div class="grid-item grid-one-whole">
                            
                            <div class="story-tabs">
                                <div class="block-container">
                                    <div class="copy-body-01 null">
                                        {!! $news->body !!}
                                    </div>
                                    
                                </div><!--/ko-->
                            </div><!--/ko-->
                        </div>
                        
                        <div class="lightbox">
                            <div class="title"></div>
                            <div class="filter"></div>
                            <div class="arrowr"></div>
                            <div class="arrowl"></div>
                            <div class="close"></div>
                        </div>
                    </div><!--/ko-->
                </div>
            </div><!--/ko-->
        </section>
    </div>
</section>
<footer class="site-footer">

    @include('layout.frontend.footer')

</footer>

<script src="../assets/pages/js/jquery-3.2.1.min.js"></script>
<script src="../assets/pages/js/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="../assets/pages/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="../assets/pages/js/scrollreveal.js"></script>
<script src="../assets/pages/js/owl.carousel.min.js"></script>
<script type='text/javascript' src='../assets/pages/js/wp-embed.min-ver=4.9.10.js'></script>
<script src="../assets/pages/js/isInViewport.jquery.js"></script>
<script src="../assets/pages/js/anime.min.js"></script>
<script src="../assets/pages/js/script.js"></script>
<script type='text/javascript' src='../assets/pages/js/scripts-ver=5.0.5.js'></script>
<script src="../assets/pages/js/fixes.js"></script>
<script src="../assets/pages/js/aos.js"></script>
<script src="../assets/pages/js/jquery.matchHeight.js"></script>
<script>
    AOS.init({
        easing: 'ease-out-back',
        duration: 1000
    });
    $(function () {
        $('.card.no-overflow').matchHeight({
            byRow: true,
            property: 'height',
            target: null,
            remove: false
        });
    });

        console.log($(".section img"))
        $(".section img").click(function() {
            $(".lightbox").fadeIn(300);
            $(".lightbox").append("<img src='" + $(this).attr("src") + "' alt='" + $(this).attr("alt") + "' />");
            $(".filter").css("background-image", "url(" + $(this).attr("src") + ")");
            /*$(".title").append("<h1>" + $(this).attr("alt") + "</h1>");*/
            $("html").css("overflow", "hidden");
            if ($(this).is(":last-child")) {
                $(".arrowr").css("display", "none");
                $(".arrowl").css("display", "block");
            } else if ($(this).is(":first-child")) {
                $(".arrowr").css("display", "block");
                $(".arrowl").css("display", "none");
            } else {
                $(".arrowr").css("display", "block");
                $(".arrowl").css("display", "block");
            }
        });

        $(".close").click(function() {
            $(".lightbox").fadeOut(300);
            $("h1").remove();
            $(".lightbox img").remove();
            $("html").css("overflow", "auto");
        });

        $(document).keyup(function(e) {
            if (e.keyCode == 27) {
                $(".lightbox").fadeOut(300);
                $(".lightbox img").remove();
                $("html").css("overflow", "auto");
            }
        });

        $(".arrowr").click(function() {
            var imgSrc = $(".lightbox img").attr("src");
            var search = $("section").find("img[src$='" + imgSrc + "']");
            var newImage = search.next().attr("src");
            /*$(".lightbox img").attr("src", search.next());*/
            $(".lightbox img").attr("src", newImage);
            $(".filter").css("background-image", "url(" + newImage + ")");

            if (!search.next().is(":last-child")) {
                $(".arrowl").css("display", "block");
            } else {
                $(".arrowr").css("display", "none");
            }
        });

        $(".arrowl").click(function() {
            var imgSrc = $(".lightbox img").attr("src");
            var search = $("section").find("img[src$='" + imgSrc + "']");
            var newImage = search.prev().attr("src");
            /*$(".lightbox img").attr("src", search.next());*/
            $('.lightbox img').attr("src", newImage);
            $(".filter").css("background-image", "url(" + newImage + ")");

            if (!search.prev().is(":first-child")) {
                $(".arrowr").css("display", "block");
            } else {
                $(".arrowl").css("display", "none");
            }
        });
</script>
</body>

</html>