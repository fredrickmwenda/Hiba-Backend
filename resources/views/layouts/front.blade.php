<!doctype html>
<html class="no-js" lang="en">

<head>
    <title>Hiba - Best Loyalty Tracker Platform</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="ThemeZaa">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="description" content="Elevate your online presence with Crafto - a modern, versatile, multipurpose Bootstrap 5 responsive HTML5, SCSS template using highly creative 48+ ready demos.">
    <!-- favicon icon -->
    <link rel="shortcut icon" href="{{asset('assets/front/images/favicon.png')}}">
    <link rel="apple-touch-icon" href="{{asset('assets/front/images/apple-touch-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets/front/images/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets/front/images/apple-touch-icon-114x114.png')}}">
    <!-- google fonts preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- style sheets and font icons  -->
    <link rel="stylesheet" href="{{asset('assets/front/css/vendors.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/front/css/icon.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/front/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/front/css/responsive.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/front/application.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css">
    <!-- Tiny Slider JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/min/tiny-slider.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    @stack('css')

    </head>

    <body data-mobile-nav-style="classic" class="custom-cursor">
        <!-- start cursor -->
        <div class="cursor-page-inner">
            <div class="circle-cursor circle-cursor-inner"></div>
            <div class="circle-cursor circle-cursor-outer"></div>
        </div>
        <!-- end cursor -->
        <!-- start header -->
        <header>
            <!-- start navigation -->
            <nav class="navbar navbar-expand-lg header-light bg-transparent disable-fixed" data-header-hover="light">
                <div class="container-fluid">
                    <div class="col-auto me-auto">
                        <a class="navbar-brand" href="{{route('landing')}}">
                            <img src="{{asset('assets/images/Hiba-logo.png')}}" data-at2x="images/demo-application-logo-white@2x.png" alt="" class="default-logo">
                            <img src="{{asset('assets/images/Hiba-logo.png')}}" data-at2x="images/demo-application-logo-black@2x.png" alt="" class="alt-logo">
                            <img src="{{asset('assets/front/images/demo-application-logo-black.png')}}" data-at2x="images/demo-application-logo-black@2x.png" alt="" class="mobile-logo">
                        </a>
                    </div>
                    <div class="col-auto menu-order position-static">
                        <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item"><a href="{{route('landing')}}" class="nav-link">Home</a></li>
                                <!-- <li class="nav-item"><a href="#" class="nav-link">About</a></li> -->
                               
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto col-auto xs-ps-0">
                        <div class="header-icon">
                            <div class="header-button">
                            <a href="{{route('login')}}" class="btn btn-small btn-rounded with-rounded btn-box-shadow btn-dark-gray text-uppercase-inherit">Login<span class="bg-licorice-blue text-white"><i class="feather icon-feather-arrow-right"></i></span></a>

                                <a href="#" class="btn btn-small btn-rounded with-rounded btn-box-shadow btn-dark-gray text-uppercase-inherit">Download now<span class="bg-licorice-blue text-white"><i class="feather icon-feather-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- end navigation -->
        </header>
        @yield('content')

        @include('layouts.partials.front-footer')


        <script type="text/javascript" src="{{asset('assets/front/js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/front/js/vendors.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/front/js/main.js')}}"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

        @stack('scripts')
    </body>
</html>