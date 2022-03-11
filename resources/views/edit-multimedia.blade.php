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
  <link rel="stylesheet" href="/css/add-model.css">
  <!-- Template CSS -->
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
              <a href="contact.html" class="btn btn-primary btn-style mr-2">Контакт</a>
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
<div class="container card-0 justify-content-center ">
    <div class="card-body px-sm-4 px-0">
        <div class="row justify-content-center round">
            <div class="col-lg-10 col-md-12 ">
                <div class="card shadow-lg card-1">
                    <div class="card-body inner-card">
                      <form action="add-multimedia" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                          <div class="col-6">
                            <label>Име на продукт</label>
                            <input type="text" class="form-control rounded" value="{{$multimedia->name}}" name="name" placeholder="Името на продуктот.." required> 
                          </div>
                          <div class="col-6">
                            <label class="form-label">Избери слика</label>
                            <input type="file" name="image" class="form-control rounded" required>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-6">
                            <label>Цена</label>
                            <input type="text" class="form-control rounded" name="price" value="{{$multimedia->price}}"  placeholder="Цена на производ.." required> 
                          </div>
                          <div class="col-6">
                            <label>Краток опис</label>
                            <input type="text" class="form-control rounded" name="short_description" value="{{$multimedia->short_description}}" placeholder="Кратко објаснување.." required> 
                          </div>
                        </div>
                         <div class="row">
                           <div class="col-6">
                             <label>Одберете модел</label>
                            <select class="form-control" name="car_id">
                              @foreach ($cars as $car)
                                @if($car->id == $multimedia->car_id)
                                    <option value="{{$car->id}}" selected>{{$car->model_name}}</option>
                                @else
                                    <option value="{{$car->id}}">{{$car->model_name}}</option>
                                @endif
                              @endforeach
                            </select>
                            <label style="margin-top: 13.5px;">Дали продуктот е на попуст?</label>
                            <select class="form-control" name="featured">
                                @if ($multimedia->featured == 0)
                                    <option value="0">Не</option>
                                @else
                                    <option value="1">Да</option>
                                @endif
                            </select>
           
                           </div>
                           <div class="col-6">
                             <label>Долг опис</label>
                             <textarea class="w-100" rows="5" placeholder="Внесете подолго објаснување" name="long_description">{{$multimedia->long_description}}</textarea>
                            </div>
                         </div>
                         <div class="row">
                           <div class="col-12">
                            <input type="submit" class="btn btn-primary rounded mt-4" value="Постави нов модел" name="submit">
                           </div>
                         </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="w3l-footer-66">
  <section class="footer-inner-main">
    <div class="below-section">
      <div class="container">
        <div class="copyright-footer">
          <div class="columns">
            <p>© 2020 Audio Video Garage. All rights reserved | Powered by <a href="https://webmak.mk">WebMak</a></p>
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