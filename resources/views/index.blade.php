<!doctype html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Audio Video Garage</title>
  <link href="//fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css2?family=Limelight&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/style-starter.css">
</head>

<body>
  <!--header-->
  <header id="site-header" class="fixed-top">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light">
        <h1><a class="navbar-brand" href="/">
            Audio<span>Video</span>Garage
          </a></h1>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="fa icon-expand fa-bars"></span>
          <span class="fa icon-close fa-times"></span>
        </button>

        <div class="collapse navbar-collapse ml-5" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/#home"><strong>Дома</strong> </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/#about"><strong>За нас</strong></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/#featured"><strong>Модели на попуст</strong></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/models"><strong> Сите модели</strong></a>
            </li>
            <li class="nav-item">
              <a href="/contact" class="btn btn-primary btn-style mr-2">Контакт</a>
            </li>
          </ul>
        <div class="mobile-position">
          <nav class="navigation">
            <div class="theme-switch-wrapper">
              <label class="theme-switch" for="checkbox">
                <input type="checkbox" id="checkbox">
              </label>
            </div>
          </nav>
        </div>
      </nav>
    </div>
  </header>
  <!--/header-->
  <!-- main-slider -->
  <section class="w3l-main-slider position-relative" id="home">
    <div class="companies20-content">
      <div class="owl-one owl-carousel owl-theme">
        <div class="item">
          <li>
            <div class="slider-info banner-view bg bg2">
              <div class="banner-info">
                <div class="container">
                  <div class="banner-info-bg">
                    <h5>Audio Video Garage.</h5>
                    <div class="banner-buttons">
                      <a class="btn btn-style btn-primary" href="/models">Сите модели</a>
                      <a href="#small-dialog" class="popup-with-zoom-anim play-view">
                        <span class="video-play-icon">
                          <span class="fa fa-play"></span>
                        </span>
                        <h6>Погледни видео</h6>
                      </a>
                      <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                        <iframe width="1280" height="720" src="https://www.youtube.com/embed/oXyh94x3Lb0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </div>
        <div class="item">
          <li>
            <div class="slider-info  banner-view banner-top1 bg bg2">
              <div class="banner-info">
                <div class="container">
                  <div class="banner-info-bg">
                    <h5>Audio Video Garage.</h5>
                    <div class="banner-buttons">
                      <a class="btn btn-style btn-primary" href="/contact">Контакт</a>
                      <a href="#small-dialog" class="popup-with-zoom-anim play-view">
                        <span class="video-play-icon">
                          <span class="fa fa-play"></span>
                        </span>
                        <h6>Погледни видео</h6>
                      </a>
                      <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                        <iframe src="https://player.vimeo.com/video/425349644" allow="autoplay; fullscreen"
                          allowfullscreen=""></iframe>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </div>
      </div>
    </div>
  </section>
  <!-- //banner-slider-->
  <!-- //bottom-grids -->
  <section class="w3l-content-3" id="about">
    <div class="content-3-mian py-5">
      <div class="container py-lg-5">
        <div class="content-info-in row">
          <div class="col-lg-6">
            <image img src="/images/ab1.jpg" alt="" class="img-fluid"></image>
          </div>
          <div class="col-lg-6 mt-lg-0 mt-5 about-right-faq align-self  pl-lg-5">
            <div class="title-content text-left mb-2">
              <h6 class="sub-title"><strong>За нас</strong></h6>
              <h3 class="hny-title"> Audio Video Garage</h3>
            </div>
            <p class="mt-3">Ние во ID COM се идентификуваме со потребите и очекувањата на нашите купувачи и знаеме дека секогаш постои подобар начин да се исполнат нивните очекувања. <br><br> 
              Нашите напори и енергија се константно фокусирани на потребите на нашите купувачи и веруваме дека слушањето на желбите на купувачите и водењето грижа за секој детал на производите е единствениот начин да ја оствариме нашата цел, а тоа е 100 % задоволни купувачи. 
              <br><br>Вистинските артикли, достава на време и висок квалитет на постпродажна услуга е нашата работна филозофија.</p>
            <a href="/contact" class="btn btn-style btn-primary mt-md-5 mt-4">Контакт</a>
          </div>
        </div>
      </div>
  </section>


  @if(isset($multimedias))
  <!-- /features-4 -->
  <section class="features-4" id="featured">
    <div class="features4-block py-5">
      <div class="container py-lg-4">
        <div class="title-content text-center mb-lg-5 mt-4">
          <h6 class="sub-title">Известување</h6>
          <h3 class="hny-title">Модели на попуст</h3>
        </div>
        
        <div class="row features4-grids text-left mt-lg-4">
          @foreach($multimedias as $multimedia)
          <div class="col-lg-3 col-md-6 col-sm-6 features4-grid mt-4">
            <div class="features4-grid-inn">
              <div class="features4-rightinfo">
                <img class="mb-4" height="100vh" src="{{asset('/storage/images/multimedias/' . $multimedia->image)}}" alt="Featured image">
                <h5><a href="#">{{$multimedia->name}}</a></h5>
                @foreach($cars as $car)
                @if($car->id == $multimedia->car_id)
                <p>За {{$car->model_name}}</p>
                @endif
                @endforeach
                <a href="#" class="btn btn-style btn-primary mt-md-2 mt-2">Избери</a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>
  @else 
  <section class="features-4">
    <center><h6 class="sub-title">Известување</h6></center>
    <center><h3 class="hny-title">Немаме модели на попуст во моментот!</h3></center>
    <br><br>
  </section>
  @endif
  <footer class="w3l-footer-66">
    <section class="footer-inner-main">
      <div class="below-section">
        <div class="container">
          <div class="copyright-footer">
            <div class="columns">
              <p>© 2020 Audio Video Garage. All rights reserved | Designed by <a href="https://webmak.mk">WebMak</a></p>
            </div>
          </div>
        </div>

      <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-long-arrow-up" aria-hidden="true"></span>
      </button>
      <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
          scrollFunction()
        };

        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
          } else {
            document.getElementById("movetop").style.display = "none";
          }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
      </script>
      <!-- /move top -->

    </section>
  </footer>
  <script src="/js/jquery-3.3.1.min.js"></script>
<script src="/js/jquery.magnific-popup.min.js"></script>
<script>
	$(document).ready(function () {
		$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',

			fixedContentPos: false,
			fixedBgPos: true,

			overflowY: 'auto',

			closeBtnInside: true,
			preloader: false,

			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});

		$('.popup-with-move-anim').magnificPopup({
			type: 'inline',

			fixedContentPos: false,
			fixedBgPos: true,

			overflowY: 'auto',

			closeBtnInside: true,
			preloader: false,

			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-slide-bottom'
		});
	});
</script>
<!--//-->
  <script src="/js/theme-change.js"></script>
  <script src="/js/owl.carousel.js"></script>
  <!-- script for banner slider-->
  <script>
    $(document).ready(function () {
      $('.owl-one').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        responsiveClass: true,
        autoplay: false,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          480: {
            items: 1,
            nav: false
          },
          667: {
            items: 1,
            nav: true
          },
          1000: {
            items: 1,
            nav: true
          }
        }
      })
    })
  </script>
  <!-- //script -->
  <!-- script for owlcarousel -->
  <script>
    $(document).ready(function () {
      $('.owl-testimonial').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        responsiveClass: true,
        autoplay: false,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          480: {
            items: 1,
            nav: false
          },
          667: {
            items: 1,
            nav: false
          },
          1000: {
            items: 1,
            nav: false
          }
        }
      })
    })
  </script>
  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- disable body scroll which navbar is in active -->

  <!-- stats number counter-->
  <script src="/js/jquery.waypoints.min.js"></script>
  <script src="/js/jquery.countup.js"></script>
  <script>
    $('.counter').countUp();
  </script>
  <!-- //stats number counter -->
  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->

  <script src="/js/bootstrap.min.js"></script>

</body>

</html>