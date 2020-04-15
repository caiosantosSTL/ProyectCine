<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Super Cine</title>
        <!-- Bootstrap -->
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
        <!-- Animate.css -->
        <link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css" />
        <!-- Font Awesome iconic font -->
        <link href="{{ asset('css/fontawesome-all.css') }}" rel="stylesheet" type="text/css" />
        <!-- Magnific Popup -->
        <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet" type="text/css" />
        <!-- Slick carousel -->
        <link href="{{ asset('css/slick.css') }}" rel="stylesheet" type="text/css" />
        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Oswald:300,400,500,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
        <!-- Theme styles -->
        <link href="{{ asset('css/dot-icons.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/theme.css') }}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
         integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
         crossorigin=""/>
    </head>
    <body class="body">
        <header class="header header-horizontal header-view-pannel">
            <div class="container">
                <nav class="navbar">
                    <a class="navbar-brand" href="{{ route('inicio') }} ">
                        <span class="logo-element">
                            <span class="logo-tape">
                                <span class="svg-content svg-fill-theme" data-svg="{{ asset('images/svg/logo-part.svg') }}"></span>
                            </span>
                            <span class="logo-text text-uppercase">
                                <span></span>Super Cine</span>
                        </span>
                    </a>
                    <button class="navbar-toggler" type="button">
                        <span class="th-dots-active-close th-dots th-bars">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </button>
                    <div class="navbar-collapse">
                        <ul class="navbar-nav">
                            <li class="nav-item nav-item-arrow-down nav-hover-show-sub">
                                <a class="nav-link" href="{{ route('inicio') }}">Homepage</a>
                                <div class="nav-arrow"><i class="fas fa-chevron-down"></i></div>
                                <ul class="collapse nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="homepage-1.html">Homepage 1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="homepage-2.html">Homepage 2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="homepage-3.html">Homepage 3</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item nav-item-arrow-down nav-hover-show-sub">
                                <a class="nav-link" href="#" data-role="nav-toggler">Pages</a>
                                <div class="nav-arrow"><i class="fas fa-chevron-down"></i></div>
                                <ul class="collapse nav">
                                    <li class="nav-item nav-item-arrow-down nav-hover-show-sub">
                                        <a class="nav-link" href="#" data-role="nav-toggler">Movies</a>
                                        <div class="nav-arrow"><i class="fas fa-chevron-down"></i></div>
                                        <ul class="collapse nav">
                                            <li class="nav-item">
                                                <a class="nav-link" href="movies-blocks.html">Blocks - No Sidebar</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="movies-blocks-sidebar-right.html">Blocks - Sidebar right</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="movies-posters.html">Posters - No Sidebar</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="movies-posters-sidebar-right.html">Posters - Sidebar right</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="movies-list.html">List - No Sidebar</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="movie-info-sidebar-right.html">Movie info</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="gallery.html">Gallery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="news-blocks-sidebar-right.html">News</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="article-sidebar-right.html">Article</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="about-us.html">About us</a>
                                    </li>
                                    <li class="nav-item nav-item-arrow-down nav-hover-show-sub">
                                        <a class="nav-link" href="#" data-role="nav-toggler">User pages</a>
                                        <div class="nav-arrow"><i class="fas fa-chevron-down"></i></div>
                                        <ul class="collapse nav">
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{route('login')}}">Login</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="sign-up.html">Registrarse</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item nav-item-arrow-down nav-hover-show-sub">
                                        <a class="nav-link" href="#" data-role="nav-toggler">Status pages</a>
                                        <div class="nav-arrow"><i class="fas fa-chevron-down"></i></div>
                                        <ul class="collapse nav">
                                            <li class="nav-item">
                                                <a class="nav-link" href="under-construction.html">Under construction</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="coming-soon.html">Coming soon</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="404-1.html">404 - 1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="404-2.html">404 - 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>


                        </ul>
                        <div class="navbar-extra">
                            <a class="btn-theme btn" href="#"><i class="fas fa-ticket-alt"></i>&nbsp;&nbsp;Buy Ticket</a>
                        </div>
                        <ul class="navbar-nav">
                          @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('login')}}">Inicia Sesión</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('register')}}">Registrar</a>
                            </li>
                          @else
                          <li class="nav-item nav-item-arrow-down nav-hover-show-sub">

                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{ Auth::user()->name }} <span class="caret"></span>
                              </a>
                              <ul class="collapse nav">
                                  <li class="nav-item">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                  </li>
                                </ul>
                          </li>
                          @endguest
                        </ul>
                    </div>
                </nav>
            </div>
        </header>

        <!-- CONTENIDO -->
          @yield('content')
        <!-- FIN DE CONTENIDO -->

        <a class="scroll-top disabled" href="#"><i class="fas fa-angle-up" aria-hidden="true"></i></a>
        <footer class="section-text-white footer footer-links bg-darken">
            <div class="footer-body container">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <a class="footer-logo" href="./">
                            <span class="logo-element">
                                <span class="logo-tape">
                                    <span class="svg-content svg-fill-theme" data-svg="./images/svg/logo-part.svg"></span>
                                </span>
                                <span class="logo-text text-uppercase">
                                    <span></span>Super Cine</span>
                            </span>
                        </a>

                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <h5 class="footer-title text-uppercase">Peliculas</h5>
                        <ul class="list-unstyled list-wide footer-content">
                            <li>
                                <a class="content-link" href="#">All Movies</a>
                            </li>
                            <li>
                                <a class="content-link" href="#">Upcoming movies</a>
                            </li>
                            <li>
                                <a class="content-link" href="#">Top 100 movies</a>
                            </li>
                            <li>
                                <a class="content-link" href="#">Blockbasters</a>
                            </li>
                            <li>
                                <a class="content-link" href="#">British movies</a>
                            </li>
                            <li>
                                <a class="content-link" href="#">Summer movies collection</a>
                            </li>
                            <li>
                                <a class="content-link" href="#">Movie trailers</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <h5 class="footer-title text-uppercase">Información</h5>
                        <ul class="list-unstyled list-wide footer-content">
                            <li>
                                <a class="content-link" href="#">Schedule</a>
                            </li>
                            <li>
                                <a class="content-link" href="#">News</a>
                            </li>
                            <li>
                                <a class="content-link" href="#">Contact us</a>
                            </li>
                            <li>
                                <a class="content-link" href="#">Community</a>
                            </li>
                            <li>
                                <a class="content-link" href="#">Blog</a>
                            </li>
                            <li>
                                <a class="content-link" href="#">Events</a>
                            </li>
                            <li>
                                <a class="content-link" href="#">Help center</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <h5 class="footer-title text-uppercase">Follow</h5>
                        <ul class="list-wide footer-content list-inline">
                            <li class="list-inline-item">
                                <a class="content-link" href="#"><i class="fab fa-slack-hash"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a class="content-link" href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a class="content-link" href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a class="content-link" href="#"><i class="fab fa-dribbble"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a class="content-link" href="#"><i class="fab fa-google-plus-g"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a class="content-link" href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                        <h5 class="footer-title text-uppercase">Subscribe</h5>
                        <div class="footer-content">
                            <p class="footer-text">Get latest movie news right away with our subscription</p>
                            <form class="footer-form" autocomplete="off">
                                <div class="input-group">
                                    <input class="form-control" name="email" type="email" placeholder="Your email" />
                                    <div class="input-group-append">
                                        <button class="btn btn-theme" type="submit"><i class="fas fa-angle-right"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copy">
                <div class="container">Copyright 2019 &copy; AmigosThemes. All rights reserved.</div>
            </div>
        </footer>
        <!-- jQuery library -->
        <script src="{{ asset('js/jquery-3.3.1.js') }}"></script>
        <!-- Bootstrap -->
        <script src="{{ asset('js/bootstrap.js') }}"></script>
        <!-- Paralax.js -->
        <script src="{{ asset('js/parallax.js') }}"></script>
        <!-- Waypoints -->
        <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
        <!-- Slick carousel -->
        <script src="{{ asset('js/slick.min.js') }}"></script>
        <!-- Magnific Popup -->
        <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
        <!-- Inits product scripts -->
        <script src="{{ asset('js/script.js') }}"></script>
        <script async defer src="https://ia.media-imdb.com/images/G/01/imdb/plugins/rating/js/rating.js"></script>
        <!-- Make sure you put this AFTER Leaflet's CSS -->
        <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
          integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
          crossorigin=""></script>
        @if (trim($__env->yieldContent('scripts')))
            @yield('scripts')
        @endif
    </body>
</html>
