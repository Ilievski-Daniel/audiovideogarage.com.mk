<!doctype html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Audio Video Garage</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
              <a class="nav-link" href="/models"><strong> Сите марки</strong></a>
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

   <!-- Breadcrumb -->
   <section class="w3l-about-breadcrumb position-relative text-center">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
      <div class="container py-lg-5 py-3">
        <h2 class="title">Контакт</h2>
        <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="#url">Дома</a></li>
          <li class="active"><span class="fa fa-angle-double-right mx-2" aria-hidden="true"></span> Контакт </li>
        </ul>
      </div>
    </div>
  </section>
  
  {{-- Contact info --}}
  <section class="w3l-contact-11">
		<div class="form-41-mian py-5">
			<div class="container py-lg-4">
			  <div class="row align-form-map">
				  <div class="col-lg-6 contact-left pr-lg-4">
					  <div class="partners">
					    <div class="cont-details">
						    <div class="title-content text-left">
							    <h6 class="sub-title">Информации</h6>
							    <h3 class="hny-title">Audio Video Garage</h3>
						    </div>
						    <p class="mt-3 mb-4 pr-lg-5">Здраво, достапни сме во секое време.</p>
						    <h6 class="mb-4"> За повеќе информации ќе Ве молиме да искористите еден од начините и да не исконтактирате.</h6>
					    </div>
					    <div class="hours">
						    <h6 class="mt-4">Емаил адреса:</h6>
						    <p> <a href="mailto:info@audiovideogarage.com.mk">
                info@audiovideogarage.com.mk</a></p>
                <h6 class="mt-4">Работиме во:</h6>
                <p> Скопје, Охрид и Гостивар.</p>
                <h6 class="mt-4">Телефонски броеви:</h6>
						    <p class="margin-top"><a href="tel:077 640 203">077 640 203</a></p>
                <p class="margin-top"><a href="tel:078 306 942">078 306 942</a></p>
					    </div>
					  </div>
				  </div>

          <div class="col-lg-6 form-inner-cont">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11861.831903484672!2d21.58255993465574!3d41.990445850000015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x135438cc4cde9f7f%3A0x7cfeb9106e50ef0f!2sGostilnica%20Doma!5e0!3m2!1sen!2smk!4v1647089530708!5m2!1sen!2smk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            {{-- Contact form --}}
          </div>
			  </div>
			</div>
		</div>
	</section>

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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>