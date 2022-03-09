<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Audio Video Garage</title>
  <!-- Template CSS -->
  <link href="//fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css2?family=Limelight&display=swap" rel="stylesheet">
  <!-- Template CSS -->
  <link rel="stylesheet" href="/css/style-starter.css">
  <link rel="stylesheet" href="/css/models.css">
  <!-- Template CSS -->
</head>

<body>
  <!--header-->
  <header id="site-header" class="fixed-top">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light">
        <h1><a class="navbar-brand" href="index.html">
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
  <div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h2 class="section-title"></h2>
        </div>
        @foreach ($multimedias as $multimedia)
        @if (is_numeric($multimedia->id))
        <div class="col-lg-3 col-sm-6 mb-4">
          <div class="card border-0 shadow rounded-xs pt-5 text-center">
            <div class="card-body">
                <img src="{{ url('storage/app/'. $multimedia->id) }}" alt="Car Model photo"/>
                <h4 class="mt-4 mb-4 font-weight-bold">{{$multimedia->name}}</h4>
                <p class="mt-2 mb-2">{{$multimedia->short_description}}</p>
                <p class="mt-2 mb-4">{{$multimedia->price}}</p>
                <a href="/car-multimedia/{{$multimedia->id}}" class="car-models-button">Избери</a>
                @php 
                $key = 1
                @endphp
            </div>
          </div>
        </div>
        @endif
        @endforeach

        @if (!isset($key))
        <script> alert('Известување! Не се достапни податоци за овој модел, ве молиме одберете еден од понудените модели.'); 
        window.location.href='/models';</script>
        @endif
    </div>
  </div>
</body>
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
  
  var scroll = $(window).scrollTop();
  $("#site-header").addClass("nav-fixed");

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