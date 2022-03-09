<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Audio Video Garage</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="//fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Limelight&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style-starter.css">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
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
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>
                    <a style="color:black;" class="navbar-brand nav justify-content-center text-center" href="{{ url('/') }}">
                        {{ config('app.name', 'Audio Video Garage') }}
                    </a>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            {{-- @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif --}}

                            {{-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif --}}
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')

            
        </main>
        {{-- style="margin-top:51.7vh;" --}}
        <footer class="w3l-footer-66 page-footer font-small purple pt-4 fixed-bottom">
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
    </div>
</body>
</html>
