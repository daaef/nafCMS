<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nigerian Air Force | Welcome</title>
  <link rel="stylesheet" href="assets/pages/assets/css/app.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">
  <link rel="favicon" href="./assets/pages/assets/logo.svg">
  <link rel="apple-touch-icon" href="./assets/favicon.png">
  <link href="./assets/pages/assets/favicon.png" rel="icon">
  <link rel="apple-touch-icon" href="./assets/favicon.png">
  <link rel="apple-touch-icon" sizes="152x152" href="./assets/pages/assets/favicon.png">
  <link rel="apple-touch-icon" sizes="180x180" href="./assets/pages/assets/favicon.png">
  <link rel="apple-touch-icon" sizes="167x167" href="./assets/pages/assets/favicon.png">
</head>
<body>
<!--Preloader-->
<div id="introLoader" class="introloader">
  <div class="loader-container">
    <div class="spinner">
      <img src="assets/pages/assets/img/logo.png" alt="">
    </div>
  </div>
</div>
<div id="particles-js" class="uk-position-fixed" hidden></div>
<section>
  <header class="padding-top-md">
    <div class="text-center">
      <img class="logo-main" src="./assets/pages/assets/img/logo.png" alt="">
      <h2 class="header-title">NIGERIAN AIR FORCE</h2>
      <span class="color-accent">Willing, Able, Ready</span>
      <p class="color-white">Welcome to Our Official Website</p>
    </div>
    <div class="bg-theme width-100%" style="width: 100%!important">
      <nav class="uk-navbar-container width-80% container" uk-navbar style="position: relative; z-index: 980;">
  
        <div class="uk-navbar-left">
  
          <ul class="uk-navbar-nav">
            @foreach($menus as $menu)
              <!-- <li class="uk-active"><a href="#">Home</a></li> -->
              <li>
                <a href="{{ url($menu->slug) }}">
                  {{ $menu->name }} 
                  @if(count($menu->submenus) > 0) 
                    <i class="fas fa-angle-down"></i> 
                  @endif
                </a>
                @if (count($menu->submenus) > 0)
                  <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                      @foreach($menu->submenus as $submenu)
                    
                        <li>
                          <a href="{{ url($submenu->slug) }}">
                            {{ $submenu->name }}
                          </a>
                        </li>
                      
                      @endforeach
                    </ul>
                  </div>
                @endif
              </li>
              <!-- <li>
                <a href="#">Careers</a>
                <div class="uk-navbar-dropdown">
                  <ul class="uk-nav uk-navbar-dropdown-nav">
                    <li class="uk-active"><a href="#">Active</a></li>
                    <li><a href="#">Item</a></li>
                    <li><a href="#">Item</a></li>
                  </ul>
                </div>
              </li> -->
              <!-- <li><a href="#">About Us</a></li> -->
              <!-- <li><a href="#">News</a></li> -->
              <!-- <li><a href="#">Media</a></li> -->
              <!-- <li><a href="#">Links</a></li> -->
            @endforeach
          </ul>
  
        </div>
  
        <div class="uk-navbar-right social">
  
          <ul class="uk-navbar-nav">
            <li>
              <a href="#">
                <img src="./assets/pages/assets/img/facebook-nav.png" alt="">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="./assets/pages/assets/img/twitter-nav.png" alt="">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="./assets/pages/assets/img/google-nav.png" alt="">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="./assets/pages/assets/img/linkedin-nav.png" alt="">
              </a>
            </li>
          </ul>
  
        </div>
  
      </nav>
    </div>
  </header>    
  
  <div class="page-container">
    <section>
      <div class="latest-news">
        <div class="container width-80%">
          <h4>Latest News</h4>
          @if($latest != null)
            <div class="news-content width-100% uk-flex uk-flex-wrap">
              <div class="uk-width-1-2@m uk-position-relative">
                &nbsp;
                <img src="../uploads/news/images/{{$latest->news_image}}" alt="">
              </div>
              <div class="uk-width-1-2@m padding-bottom-sm">
                <h5 class="text-bold">{{ strtoupper($latest->title) }}</h5>
                <p class="color-accent margin-top-xs">
                  {{ date('d', strtotime($latest->created_at)) }} 
                  {{ date('F', strtotime($latest->created_at)) }},
                  {{ date('Y', strtotime($latest->created_at)) }}
                </p>
                <p class="margin-top-xs smallish">
                  {!! strlen($latest->body) > 200 ? substr($latest->body,0,200) : $latest->body !!}...
                </p>
              </div>
            </div>
          @else
            <h4>No Latest News</h4>
          @endif
        </div>
      </div>
      <div class="news">
        <div class="container width-80%">
          <div class="uk-child-width-1-4@m uk-grid-small" uk-grid>
            @foreach($posts as $post)
              <div>
                <div class="uk-card uk-card-default">
                  <div class="uk-card-media-top">
                    <img src="../uploads/news/images/{{$post->news_image}}" alt="">
                  </div>
                  <div class="uk-card-body uk-padding-small">
                    <h5 class="text-bold">
                      {!! strlen($post->title) > 50 ? strtoupper(substr($post->title,0,50)) : strtoupper($post->title) !!}...
                    </h5>
                    <div class="padding-bottom-xs">                     
                      {!! strlen($post->body) > 150 ? substr($post->body,0,150) : $post->body !!}...
                    </div>
                    <div class="uk-text-center">
                      <a href="" class="br25 uk-button uk-button-primary">Read more</a>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
          <div class="uk-child-width-1-2@m padding-top-md padding-bottom-md" uk-grid>
            <div class="uk-width-2-5@m">
              <h3 class="color-white">HISTORICAL BACKGROUND OF THE NIGERIAN AIR FORCE</h3>
              <p class="color-white margin-top-sm margin-bottom-sm">The idea of establishing an air force for Nigeria was first mooted in 1961 following the nation’s participation in peace-keeping operations in Congo and Tanganyika (now Tanzania). During these peace-keeping operations, foreign air forces aircraft were employed to airlift the Nigerian Army Regiment to and from the theatres of operation</p>
              <a class="color-white margin-top-sm link-reset link-styled" href="#">Learn more <span uk-icon="icon: arrow-right;"></span></a>
            </div>
            <div class="uk-grid-small history uk-width-3-5@m uk-child-width-1-2@m" uk-grid>
              <div>
                <div class="uk-card uk-card-body text-center">
                  <img src="./assets/pages/assets/img/hist-1.png" alt="">
                  <h5 class="color-white text-bold">VISION & MISSION</h5>
                  <p class="color-white">To reposition the NAF into a highly professional and disciplined force through capacity building initiatives for effective, efficient.</p>
                </div>
              </div>
              <div>
                <div class="uk-card uk-card-body text-center">
                  <img src="./assets/pages/assets/img/hist-2.png" alt="">
                  <h5 class="color-white text-bold">ABOUT THE NAF</h5>
                  <p class="color-white">To ensure the integrity of the airspace by gaining and maintaining control of the air while retaining a credible capacity to fulfill</p>
                </div>
              </div>
              <div>
                <div class="uk-card uk-card-body text-center">
                  <img src="./assets/pages/assets/img/hist-3.png" alt="">
                  <h5 class="color-white text-bold">PUBLICATIONS</h5>
                  <p class="color-white">Find out all you need to know about the Nigerian Air Force Publications, exciting Bulletins and various Articles</p>
                </div>
              </div>
              <div>
                <div class="uk-card uk-card-body text-center">
                  <img src="./assets/pages/assets/img/hist-4.png" alt="">
                  <h5 class="color-white text-bold">FOREIGN MISSION</h5>
                  <p class="color-white">To ensure the integrity of the airspace by gaining and maintaining control of the air while retaining a credible capacity to fulfill</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="oga">
        <div class="container width-80%">
          <div class="uk-child-width-1-2@m padding-top-md padding-bottom-md" uk-grid>
            <div class="uk-width-1-3@m vid-pic">
              &nbsp;
              <img src="./assets/pages/assets/img/video-pic.png" alt="">
            </div>
            <div class="uk-grid-small history uk-width-2-3@m" uk-grid>
              <div class="uk-width-1-3@m">
                <img src="./assets/pages/assets/img/oga.png" alt="">
              </div>
              <div class="uk-width-2-3@m">
                <h4 class="fw-600">Chief of the Air Staff</h4>
                <p class="uk-text-average">Air Marshal Sadique Baba Abubakar</p>
                <p class="color-accent">DFS GSS psc(+) fwc ndc(+) MSc</p>
                <p class="text-justifyf">Air Marshal SB Abubakar was born on 8 April 1960 at Azare in Bauchi State. He had his primary education at St Paul’s Primary School Bauchi from 1967 to 1973 and his secondary education at GSS Bauchi. He joined the Nigerian Air Force as a member of Cadet Military Training Course (CMTC 5) in November 1979.</p>
              </div>
            </div>
        </div>
      </div>
    </section>
  </div>
  <footer class="footer widget-footer clearfix">
    @include('layout.frontend.footer')
  </footer>
</section>

<script src="assets/pages/assets/js/app.js"></script>
</body>
</html>