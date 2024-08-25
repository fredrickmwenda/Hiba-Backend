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




    <style>
        .feature-box {
            margin-right: 10px !important;
        }

        .program-card {
            background-color: #fff;
            text-align: center;
            justify-content: center;
            height: 100%;
            border-radius: 6px;
            padding: 16px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
        }

        .program-card:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .program-card-icon {
            margin-bottom: 15px;
        }

        .program-card-icon img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .program-card-content {
            padding-top: 10px;
        }

        .program-name {
            display: inline-block;
            color: #333;
            font-weight: 700;
            font-size: 18px;
            margin-bottom: 0;
        }
        .half-sect{
            padding-top: 0px;
            padding-bottom: 20px!important;
        }
    </style>

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
                    <a class="navbar-brand" href="#">
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
                            <li class="nav-item"><a href="#home" class="nav-link">Home</a></li>
                          
                            <li class="nav-item dropdown submenu">
                                <a href="#features" class="nav-link">Features</a>
                                <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <div class="dropdown-menu submenu-content" aria-labelledby="navbarDropdownMenuLink">
                                    <div class="d-lg-flex mega-menu m-auto">
                                        <ul class="col-12 col-lg-4">
                                            <li class="w-100 p-0">
                                                <div class="w-100 icon-with-text-style-04 transition-inner-all md-mb-15px">
                                                    <div class="feature-box bg-white justify-content-start h-100 border-radius-6px p-16 lg-p-10 box-shadow-quadruple-large box-shadow-quadruple-large-hover">
                                                        <div class="feature-box-icon mb-25px">
                                                            <img src="https://via.placeholder.com/60x60" class="w-60px" alt="">
                                                        </div>
                                                        <div class="feature-box-content last-paragraph-no-margin">
                                                            <span class="d-inline-block text-dark-gray fw-700 fs-18 mb-5px">Guaranteed safety</span>
                                                            <p class="fs-16 text-medium-gray">We believe that what we create today, it will transform to brand growth in future.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="col-12 col-lg-4">
                                            <li class="w-100 p-0">
                                                <div class="w-100 icon-with-text-style-04 transition-inner-all md-mb-15px">
                                                    <div class="feature-box bg-white justify-content-start h-100 border-radius-6px p-16 lg-p-10 box-shadow-quadruple-large box-shadow-quadruple-large-hover">
                                                        <div class="feature-box-icon mb-25px">
                                                            <img src="https://via.placeholder.com/60x60" class="w-60px" alt="">
                                                        </div>
                                                        <div class="feature-box-content last-paragraph-no-margin">
                                                            <span class="d-inline-block text-dark-gray fw-700 fs-18 mb-5px">Fast performance</span>
                                                            <p class="fs-16 text-medium-gray">We believe that what we create today, it will transform to brand growth in future.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="col-12 col-lg-4">
                                            <li class="w-100 p-0">
                                                <div class="w-100 icon-with-text-style-04 transition-inner-all md-mb-15px">
                                                    <div class="feature-box bg-white justify-content-start h-100 border-radius-6px p-16 lg-p-10 box-shadow-quadruple-large box-shadow-quadruple-large-hover">
                                                        <div class="feature-box-icon mb-25px">
                                                            <img src="https://via.placeholder.com/60x60" class="w-60px" alt="">
                                                        </div>
                                                        <div class="feature-box-content last-paragraph-no-margin">
                                                            <span class="d-inline-block text-dark-gray fw-700 fs-18 mb-5px">Awesome design</span>
                                                            <p class="fs-16 text-medium-gray">We believe that what we create today, it will transform to brand growth in future.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="d-lg-flex mega-menu m-auto">
                                        <div class="w-100 mt-70px lg-mt-45px md-mt-35px md-mb-15px sm-mt-25px sm-mb-15px">
                                            <div class="row row-cols-2 row-cols-lg-5 row-cols-sm-3 clients-style-06 justify-content-center">
                                                <!-- start client item -->
                                                <div class="col client-box text-center md-mb-30px">
                                                    <a href="#" class="justify-content-center"><img src="{{asset('assets/front/images/logo-walmart.svg')}}" class="h-35px" alt=""></a>
                                                </div>
                                                <!-- end client item -->
                                                <!-- start client item -->
                                                <div class="col client-box text-center md-mb-30px">
                                                    <a href="#" class="justify-content-center"><img src="{{asset('assets/front/images/logo-logitech.svg')}}" class="h-35px" alt=""></a>
                                                </div>
                                                <!-- end client item -->
                                                <!-- start client item -->
                                                <div class="col client-box text-center md-mb-30px">
                                                    <a href="#" class="justify-content-center"><img src="{{asset('assets/front/images/logo-monday.svg')}}" class="h-35px" alt=""></a>
                                                </div>
                                                <!-- end client item -->
                                                <!-- start client item -->
                                                <div class="col client-box text-center sm-mb-30px">
                                                    <a href="#" class="justify-content-center"><img src="{{asset('assets/front/images/logo-google.svg')}}" class="h-35px" alt=""></a>
                                                </div>
                                                <!-- end client item -->
                                                <!-- start client item -->
                                                <div class="col client-box text-center">
                                                    <a href="#" class="justify-content-center"><img src="{{asset('assets/front/images/logo-paypal.svg')}}" class="h-35px" alt=""></a>
                                                </div>
                                                <!-- end client item -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item"><a href="#how-it-works" class="nav-link">How it works</a></li>
                            <li class="nav-item"><a href="#top-programs" class="nav-link">Top Programs</a></li>
                            <li class="nav-item"><a href="#reviews" class="nav-link">Reviews</a></li>
                            <li class="nav-item"><a href="#partners" class="nav-link">Partners</a></li>
                            <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto col-auto xs-ps-0">
                    <div class="header-icon">
                        <div class="header-button">
                            <a href="#" class="btn btn-small btn-rounded with-rounded btn-box-shadow btn-dark-gray text-uppercase-inherit">Download now<span class="bg-licorice-blue text-white"><i class="feather icon-feather-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end navigation -->
    </header>
    <!-- start section -->
    <section class="p-0 cover-background full-screen ipad-top-space-margin md-h-auto position-relative md-pb-70px" style="background-image: url('{{ asset('assets/front/images/demo-application-home-banner.jpg') }}')" id="home">
        <div id="particles-style-01" class="h-100 position-absolute left-0px top-0 w-100" data-particle="true" data-particle-options='{"particles": {"number": {"value": 12,"density": {"enable": true,"value_area": 2000}},"color": {"value": ["#8f76f5", "#a65cef", "#c74ad2", "#e754a4", "#ff6472"]},"shape": {"type": "circle","stroke":{"width":0,"color":"#000000"}},"opacity": {"value": 0.3,"random": false,"anim": {"enable": false,"speed": 1,"sync": false}},"size": {"value": 8,"random": true,"anim": {"enable": false,"sync": true}},"line_linked":{"enable":false,"distance":0,"color":"#ffffff","opacity":0.4,"width":1},"move": {"enable": true,"speed":1,"direction": "right","random": false,"straight": false}},"interactivity": {"detect_on": "canvas","events": {"onhover": {"enable": false,"mode": "repulse"},"onclick": {"enable": false,"mode": "push"},"resize": true}},"retina_detect": false}'></div>
        <div class="container h-100 position-relative z-index-9">
            <div class="row align-items-center h-100 justify-content-center">
                <div class="col-lg-6 col-md-10 text-center position-relative md-mb-50px" data-anime='{ "el": "childs", "opacity": [0, 1], "translateY": [80, 0], "staggervalue": 200, "duration": 900, "easing": "easeOutCirc" }'>
                    <div class="d-inline-block">
                        <div class="text-end w-90 lg-w-80 ms-auto animation-float">
                            <img src="https://via.placeholder.com/539x948" alt="">
                        </div>
                    </div>
                    <div class="w-60 position-absolute left-minus-40px lg-left-minus-30px xs-left-15px xs-w-50 bottom-minus-50px mb-30 xs-mb-15">
                        <img src="https://via.placeholder.com/236x282" class="border-radius-18px box-shadow-extra-large" alt="">
                    </div>
                </div>
                <div class="col-xl-5 ps-3 md-ps-15px col-lg-6 col-md-9 position-relative text-center text-lg-start" data-anime='{ "el": "childs", "translateY": [50, 0], "perspective": [1200,1200], "scale": [1.1, 1], "rotateY": [50, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="fs-90 xl-fs-80 lh-80 mb-35px text-dark-gray ls-minus-3px">
                        <span class="d-inline-block">Hiba Loyalty</span>
                        <span class="fw-800 d-inline-block">Program.</span>
                    </div>
                    <span class="fs-19 w-90 xs-w-100 d-block lh-32 mb-35px mx-auto mx-lg-0">Unlock a world of exclusive benefits & personalized offers</span>
                    <div class="row pe-20px md-ps-25px sm-px-0 md-border-end-0">
                        <a href="#" class="col-6">
                            <img src="{{asset('assets/front/images/app-store-white.svg')}}" class="box-shadow-medium-bottom box-shadow-quadruple-large-hover border-radius-4px" alt="">
                        </a>
                        <a href="#" class="col-6">
                            <img src="{{asset('assets/front/images/play-store-white.svg')}}" class="box-shadow-medium-bottom box-shadow-quadruple-large-hover border-radius-4px" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- start marquees -->
        <div class="marquees-text fw-800 fs-250 md-fs-200 ls-minus-10px text-dark-gray text-nowrap position-absolute bottom-130px opacity-1 text-center">loyalty application loyalty application</div>
        <!-- end marquees -->
    </section>
    <!-- end section -->
    <!-- start section -->
   
    <!-- end section -->
    <!-- start section -->
    <section class="pb-0" id="features">
        <div class="container">
            <div class="my-slider">
                <!-- <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center mb-6 sm-mb-12" data-anime='{ "el": "childs", "translateY": [0, 0], "perspective": [1200,1200], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'> -->
                <!-- start features box item -->
                <div class="col icon-with-text-style-04 transition-inner-all md-mb-30px">
                    <div class="feature-box bg-white text-start justify-content-start h-100 border-radius-6px p-16 lg-p-13 box-shadow-quadruple-large box-shadow-quadruple-large-hover">
                        <div class="feature-box-icon mb-25px">
                            <img src="{{asset('assets/front/images/biometric.svg')}}" class="w-60px" alt="">
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="d-inline-block text-dark-gray fw-700 fs-18 mb-5px">Biometric Login</span>
                            <p>We offer a cutting-edge biometric login feature that enhances security and convenience. Fingerprint biometric identifiers ensures a frictionless and secure authentication process.</p>

                        </div>
                    </div>
                </div>
                <!-- end features box item -->

                <!-- start features box item -->
                <div class="col icon-with-text-style-04 transition-inner-all md-mb-30px">
                    <div class="feature-box bg-white text-start justify-content-start h-100 border-radius-6px p-16 lg-p-13 box-shadow-quadruple-large box-shadow-quadruple-large-hover">
                        <div class="feature-box-icon mb-25px">
                            <img src="{{asset('assets/front/images/responsive.svg')}}" class="w-60px" alt="">
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="d-inline-block text-dark-gray fw-700 fs-18 mb-5px">Fully Responsive Design</span>
                            <p>Embracing the modern digital landscape, our app's responsive design adapts flawlessly to various devices and screen sizes.</p>
                        </div>
                        <!-- <span class="position-absolute top-25px right-25px bg-dark-gray border-radius-18px text-white fs-11 fw-700 text-uppercase ps-15px pe-15px lh-26">New</span> -->
                    </div>
                </div>
                <!-- end features box item -->

                <!-- start features box item -->
                <div class="col icon-with-text-style-04 transition-inner-all">
                    <div class="feature-box bg-white text-start justify-content-start h-100 border-radius-6px p-16 lg-p-13 box-shadow-quadruple-large box-shadow-quadruple-large-hover">
                        <div class="feature-box-icon mb-25px">
                            <img src="{{asset('assets/front/images/security.svg')}}" class="w-60px" alt="">
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="d-inline-block text-dark-gray fw-700 fs-18 mb-5px">Data Security</span>
                            <p>Ensuring utmost data security is a paramount aspect of our app. Robust encryption and protective measures are integrated to safeguard user information and transactions.</p>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->


                <div class="col icon-with-text-style-04 transition-inner-all">
                    <div class="feature-box bg-white text-start justify-content-start h-100 border-radius-6px p-16 lg-p-13 box-shadow-quadruple-large box-shadow-quadruple-large-hover">
                        <div class="feature-box-icon mb-25px">
                            <img src="{{asset('assets/front/images/interface.svg')}}" class="w-60px" alt="">
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="d-inline-block text-dark-gray fw-700 fs-18 mb-5px">Interface</span>
                            <p>The app's interface follows a minimalist and clean design philosophy. Uncluttered layouts, well-organized content, and a visually appealing aesthetic result in a user-friendly environment.</p>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->

                <!-- end features box item -->
                <div class="col icon-with-text-style-04 transition-inner-all">
                    <div class="feature-box bg-white text-start justify-content-start h-100 border-radius-6px p-16 lg-p-13 box-shadow-quadruple-large box-shadow-quadruple-large-hover">
                        <div class="feature-box-icon mb-25px">
                            <img src="{{asset('assets/front/images/ux.svg')}}" class="w-60px" alt="">
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="d-inline-block text-dark-gray fw-700 fs-18 mb-5px">User Experience</span>
                            <p>With a strong emphasis on user-centered design, our app offers an unparalleled user experience. Intuitive navigation, simplified workflows, and engaging interactions ensure that users foster a seamless and enjoyable journey.</p>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->

                <!-- end features box item -->
                <div class="col icon-with-text-style-04 transition-inner-all">
                    <div class="feature-box bg-white text-start justify-content-start h-100 border-radius-6px p-16 lg-p-13 box-shadow-quadruple-large box-shadow-quadruple-large-hover">
                        <div class="feature-box-icon mb-25px">
                            <img src="{{asset('assets/front/images/virtual.svg')}}" class="w-60px" alt="">
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="d-inline-block text-dark-gray fw-700 fs-18 mb-5px">Virtual Card Integration</span>
                            <p>Streamlining loyalty points, our app introduces a Virtual Card feature that consolidates accumulated rewards from various sources into one central point.</p>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- </div> -->
            </div>
            <div class="row justify-content-center align-items-center" data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 250, "easing": "easeOutQuad" }'>
                <div class="col-12 text-center align-items-center">
                    <div class="bg-white border border-1 border-color-extra-medium-gray box-shadow-extra-large fw-800 text-dark-gray text-uppercase border-radius-30px ps-20px pe-20px fs-12 me-10px sm-m-10px d-inline-block align-middle">hurray</div>
                    <div class="text-dark-gray d-block d-sm-inline-block align-middle fs-18 fw-600 ls-minus-05px">Download <a href="#" class="fw-800 text-decoration-line-bottom text-dark-gray">hiba application</a> and get a special discount.</div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="position-relative half-section" id="how-it-works">
        <div class="container-fluid">
            <div class="row">
                <div class="p-0 overlap-section position-absolute right-0px text-end w-auto xs-w-200px z-index-minus-1" data-bottom-top="transform: translateY(-150px)" data-top-bottom="transform: translateY(150px)">
                    <img src="{{asset('assets/front/images/demo-application-home-bg-right.png')}}" alt="">
                </div>
            </div>
        </div>
        <div class="position-absolute left-0px bottom-minus-100px w-auto xs-w-180px z-index-minus-1" data-bottom-top="transform: translateY(-100px)" data-top-bottom="transform: translateY(100px)">
            <img src="{{asset('assets/front/images/demo-application-home-bg-left.png')}}" alt="">
        </div>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-7 position-relative md-mb-20px" data-anime='{ "effect": "slide", "color": "#ffffff", "direction":"lr", "easing": "easeOutQuad", "delay":50}'>
                    <figure>
                        <div class="atropos" data-atropos>
                            <div class="atropos-scale">
                                <div class="atropos-rotate">
                                    <div class="atropos-inner">
                                        <img data-atropos-offset="5" src="https://via.placeholder.com/668x783" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <figcaption class="position-absolute bottom-90px xs-bottom-50px right-0px transform-3d xs-w-80 z-index-9">
                            <img src="{{asset('assets/front/images/420.png')}}" class="animation-float" alt="">
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-5 col-md-8 col-sm-10 text-center text-lg-start">
                    <div class="bg-base-color d-inline-block mb-20px fw-600 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-12" data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>How it works</div>
                    <h3 class="fw-700 mb-45px text-dark-gray ls-minus-1px" data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>Find amazing travel places and hotels.</h3>
                    <div class="row row-cols-1" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <!-- start process step item -->
                        <div class="col-12 process-step-style-05 position-relative hover-box">
                            <div class="process-step-item d-flex">
                                <div class="process-step-icon-wrap position-relative">
                                    <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-55px w-55px bg-linen fs-15 fw-700 position-relative">
                                        <span class="number position-relative z-index-1 text-dark-gray">01</span>
                                        <div class="box-overlay bg-base-color rounded-circle"></div>
                                    </div>
                                    <span class="progress-step-separator bg-dark-gray opacity-1"></span>
                                </div>
                                <div class="process-content ps-35px last-paragraph-no-margin mb-30px">
                                    <span class="d-block fw-700 text-dark-gray mb-5px fs-18">Explore your interests</span>
                                    <p class="w-70 lg-w-90 sm-w-100">We believe that what we create today it will transform to brand.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end process step item -->
                        <!-- start process step item -->
                        <div class="col-12 process-step-style-05 position-relative hover-box">
                            <div class="process-step-item d-flex">
                                <div class="process-step-icon-wrap position-relative">
                                    <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-55px w-55px bg-linen fs-15 fw-700 fw-600 position-relative">
                                        <span class="number position-relative z-index-1 text-dark-gray">02</span>
                                        <div class="box-overlay bg-base-color rounded-circle"></div>
                                    </div>
                                    <span class="progress-step-separator bg-dark-gray opacity-1"></span>
                                </div>
                                <div class="process-content ps-35px last-paragraph-no-margin mb-30px">
                                    <span class="d-block fw-700 text-dark-gray mb-5px fs-18">Select budget range</span>
                                    <p class="w-70 lg-w-90 sm-w-100">We believe that what we create today it will transform to brand.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end process step item -->
                        <!-- start process step item -->
                        <div class="col-12 process-step-style-05 position-relative hover-box">
                            <div class="process-step-item d-flex">
                                <div class="process-step-icon-wrap position-relative">
                                    <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-55px w-55px bg-linen fs-15 fw-700 fw-600 position-relative">
                                        <span class="number position-relative z-index-1 text-dark-gray">03</span>
                                        <div class="box-overlay bg-base-color rounded-circle"></div>
                                    </div>
                                </div>
                                <div class="process-content ps-35px last-paragraph-no-margin">
                                    <span class="d-block fw-700 text-dark-gray mb-5px fs-18">Create the perfect trip</span>
                                    <p class="w-70 lg-w-90 sm-w-100">We believe that what we create today it will transform to brand.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end process step item -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="p-0" id="top-programs">
        <div class="container">
            <div class="row justify-content-center mb-3">
                <div class="col-md-7 text-center appear anime-complete" data-anime="{ &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }" style="">
                    <div class="bg-base-color d-inline-block mb-15px fw-600 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-12">Top Programs</div>
                    <!-- <h3 class="fw-700 text-dark-gray w-65 lg-w-85 mx-auto ls-minus-1px">Venture into the most opted in Programs</h3> -->
                </div>
            </div>

            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach ($optedInPrograms as $program)
                    <div class="swiper-slide">
                        <div class="col-md-6">
                            <a href="{{route('companyProgramLink', $program->id) }}">
                                <div class="program-card">
                                    <div class="program-card-icon">
                                        <img src="{{ asset('assets/images/company/' . $program->logo) }}" alt="{{ $program->name }}">
                                    </div>
                                    <div class="program-card-content">
                                        <span class="program-name">{{ $program->name }}</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Navigation -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>




        </div>
    </section>
    <!-- end section -->
    <!-- start section -->

    <!-- end section -->
    <!-- start section -->
    <section class="pb-0 position-relative" id="reviews">
        <div class="container-fluid">
            <div class="row justify-content-center lg-mx-0">
                <div class="col-xxl-10 col-xl-11 cover-background p-6 border-radius-10px" style="background-image: url('{{asset('assets/front/images/demo-application-home-slider-bg.jpg')}}">
                    <div class="row align-items-center">
                        <div class="col-xxl-3 col-xl-4 position-relative text-center text-xl-start" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <div class="bg-white-transparent-very-light d-inline-block mb-20px fw-600 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-12">Reviews</div>
                            <h3 class="fw-600 text-white ls-minus-1px">What hiba customers are saying.</h3>
                            <div class="d-flex lg-mb-35px justify-content-center justify-content-xl-start">
                                <!-- start slider navigation -->
                                <div class="slider-one-slide-prev-1 text-white swiper-button-prev slider-navigation-style-04 border border-2 border-color-transparent-white-light"><i class="feather icon-feather-arrow-left icon-small"></i></div>
                                <div class="slider-one-slide-next-1 text-white swiper-button-next slider-navigation-style-04 border border-2 border-color-transparent-white-light"><i class="feather icon-feather-arrow-right icon-small"></i></div>
                                <!-- end slider navigation -->
                            </div>
                        </div>
                        <div class="col-xxl-9 col-xl-8 ps-6 lg-ps-15px position-relative" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <div class="outside-box-right-20 sm-outside-box-right-0">
                                <div class="swiper slider-one-slide magic-cursor drag-cursor" data-slider-options='{ "slidesPerView": 1, "spaceBetween": 30, "loop": true, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "autoplay": { "delay": 3000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1400": { "slidesPerView": 3 }, "1200": { "slidesPerView": 2 }, "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>
                                    <div class="swiper-wrapper">
                                        <!-- start review item -->
                                        <div class="swiper-slide review-style-07">
                                            <div class="d-flex justify-content-center h-100 flex-column border-radius-6px p-12 xs-p-8 bg-oxford-blue">
                                                <div class="mb-20px">
                                                    <img src="https://via.placeholder.com/125x125" class="rounded-circle w-90px h-90px me-15px" alt="">
                                                    <div class="d-inline-block align-middle">
                                                        <div class="text-white fw-600 fs-18">Leonel mooney</div>

                                                    </div>
                                                </div>
                                                <p class="mb-15px">Anthony Bourdain was an icon who different cultures and parts of the world through the food that humanity.</p>
                                                <div class="d-flex align-items-center">
                                                    <div class="d-inline-block me-auto">
                                                        <div class="text-white float-start me-10px fw-500">5.0</div>
                                                        <div class="review-star-icon float-start">
                                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                                        </div>
                                                    </div>
                                                    <div class="d-inline-block bg-medium-gray-transparent fw-600 text-uppercase border-radius-3px ps-15px pe-15px fs-12 lh-26 text-white">20 Jan</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end review item -->
                                        <!-- start review item -->
                                        <div class="swiper-slide review-style-07">
                                            <div class="d-flex justify-content-center h-100 flex-column border-radius-6px p-12 xs-p-8 bg-oxford-blue">
                                                <div class="mb-20px">
                                                    <img src="https://via.placeholder.com/125x125" class="rounded-circle w-90px h-90px me-15px" alt="">
                                                    <div class="d-inline-block align-middle">
                                                        <div class="text-white fw-600 fs-18">Den viliamson</div>

                                                    </div>
                                                </div>
                                                <p class="mb-15px">Anthony Bourdain was an icon who different cultures and parts of the world through the food that humanity.</p>
                                                <div class="d-flex align-items-center">
                                                    <div class="d-inline-block me-auto">
                                                        <div class="text-white float-start me-10px fw-500">4.5</div>
                                                        <div class="review-star-icon float-start">
                                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>
                                                        </div>
                                                    </div>
                                                    <div class="d-inline-block bg-medium-gray-transparent fw-600 text-uppercase border-radius-3px ps-15px pe-15px fs-12 lh-26 text-white">10 Jan</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end review item -->
                                        <!-- start review item -->
                                        <div class="swiper-slide review-style-07">
                                            <div class="d-flex justify-content-center h-100 flex-column border-radius-6px p-12 xs-p-8 bg-oxford-blue">
                                                <div class="mb-20px">
                                                    <img src="https://via.placeholder.com/125x125" class="rounded-circle w-90px h-90px me-15px" alt="">
                                                    <div class="d-inline-block align-middle">
                                                        <div class="text-white fw-600 fs-18">Herman miller</div>

                                                    </div>
                                                </div>
                                                <p class="mb-15px">Anthony Bourdain was an icon who different cultures and parts of the world through the food that humanity.</p>
                                                <div class="d-flex align-items-center">
                                                    <div class="d-inline-block me-auto">
                                                        <div class="text-white float-start me-10px fw-500">5.0</div>
                                                        <div class="review-star-icon float-start">
                                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                                        </div>
                                                    </div>
                                                    <div class="d-inline-block bg-medium-gray-transparent fw-600 text-uppercase border-radius-3px ps-15px pe-15px fs-12 lh-26 text-white">01 Jan</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end review item -->
                                        <!-- start review item -->
                                        <div class="swiper-slide review-style-07">
                                            <div class="d-flex justify-content-center h-100 flex-column border-radius-6px p-12 xs-p-8 bg-oxford-blue">
                                                <div class="mb-20px">
                                                    <img src="https://via.placeholder.com/125x125" class="rounded-circle w-90px h-90px me-15px" alt="">
                                                    <div class="d-inline-block align-middle">
                                                        <div class="text-white fw-600 fs-18">Matthew taylor</div>

                                                    </div>
                                                </div>
                                                <p class="mb-15px">Anthony Bourdain was an icon who different cultures and parts of the world through the food that humanity.</p>
                                                <div class="d-flex align-items-center">
                                                    <div class="d-inline-block me-auto">
                                                        <div class="text-white float-start me-10px fw-500">5.0</div>
                                                        <div class="review-star-icon float-start">
                                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                                        </div>
                                                    </div>
                                                    <div class="d-inline-block bg-medium-gray-transparent fw-600 text-uppercase border-radius-3px ps-15px pe-15px fs-12 lh-26 text-white">10 Dec</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end review item -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->


    <!-- start section -->
    <section class="position-relative p-0 z-index-1">
        <div class="container-fluid">
            <div class="row">
                <div class="p-0 overlap-section position-absolute right-0px text-end w-auto" data-bottom-top="transform: translateY(-150px)" data-top-bottom="transform: translateY(150px)">
                    <img src="{{asset('assets/front/images/demo-application-home-bg-right.png')}}" class="w-80" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="overflow-hidden position-relative bg-gradient-very-light-gray py-0 lg-pt-8 lg-pb-8">
        <div id="particles-style-02" class="h-100 position-absolute left-0px top-0 w-100" data-particle="true" data-particle-options='{"particles": {"number": {"value": 18,"density": {"enable": true,"value_area": 2000}},"color": {"value": ["#8f76f5", "#a65cef", "#c74ad2", "#e754a4", "#ff6472"]},"shape": {"type": "circle","stroke":{"width":0,"color":"#000000"}},"opacity": {"value": 0.3,"random": false,"anim": {"enable": false,"speed": 1,"sync": false}},"size": {"value": 8,"random": true,"anim": {"enable": false,"sync": true}},"line_linked":{"enable":false,"distance":0,"color":"#ffffff","opacity":0.4,"width":1},"move": {"enable": true,"speed":1,"direction": "right","random": false,"straight": false}},"interactivity": {"detect_on": "canvas","events": {"onhover": {"enable": false,"mode": "repulse"},"onclick": {"enable": false,"mode": "push"},"resize": true}},"retina_detect": false}'></div>
        <div class="container">
            <div class="row align-items-center ps-50px pe-50px lg-px-0 position-relative z-index-1 justify-content-md-center">
                <div class="col-lg-6 md-mb-50px">
                    <div class="row">
                        <div class="col-sm-6 xs-mb-30px">
                            <img src="https://via.placeholder.com/600x1240" class="w-100 box-shadow-quadruple-large border-radius-10px" data-bottom-top="transform: translateY(-250px)" data-top-bottom="transform: translateY(200px)" alt="">
                        </div>
                        <div class="col-sm-6">
                            <img src="https://via.placeholder.com/600x1240" class="w-100 box-shadow-quadruple-large border-radius-10px" data-bottom-top="transform: translateY(200px)" data-top-bottom="transform: translateY(-300px)" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 col-md-8 text-center text-lg-start">
                    <h3 class="fw-800 text-dark-gray ls-minus-1px">Download the travellers app now!</h3>
                    <span class="fs-18 w-80 xl-w-100 d-block mb-35px">Your ultimate travel partner. Carries the information you need while travelling.</span>
                    <div class="row pe-20px xl-pe-0 justify-content-center justify-content-lg-start">
                        <a href="#" class="col-6 col-lg-6 col-sm-5">
                            <img src="{{asset('assets/front/images/app-store-white.svg')}}" class="box-shadow-medium-bottom border-radius-6px" alt="">
                        </a>
                        <a href="#" class="col-6 col-lg-6 col-sm-5">
                            <img src="{{asset('assets/front/images/play-store-white.svg')}}" class="box-shadow-medium-bottom border-radius-6px" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="pt-0 position-relative mt-40" id="contact" style="margin-top: 20px">
        <div class="container-fluid">
            <div class="row">
                <div class="p-0 overlap-section position-absolute top-100px left-0px text-end w-auto" data-bottom-top="transform: translateY(-100px)" data-top-bottom="transform: translateY(100px)">
                    <img src="images/demo-application-about-bg-left.png" alt="">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="bg-very-light-gray p-7 border-radius-8px">
                        <form action="email-templates/contact-form.php" method="post" class="contact-form-style-05">
                            <div class="col-12 text-center mb-5 appear anime-child anime-complete" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 100, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                                <div class="bg-base-color d-inline-block mb-15px fw-600 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-12">Get In Touch</div>
                                <h2 class="text-dark-gray fw-700 ls-minus-1px" style="">Let's get in touch</h2>
                            </div>
                            <div class="row justify-content-center appear anime-complete" data-anime="{ &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 500, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }" style="">
                                <div class="col-md-6 sm-mb-30px">
                                    <input class="mb-30px form-control bg-white required" type="text" name="name" placeholder="Your name*">
                                    <input class="mb-30px form-control bg-white required" type="email" name="email" placeholder="Your email address*">
                                    <input class="form-control bg-white" type="tel" name="phone" placeholder="Your phone">
                                </div>
                                <div class="col-md-6">
                                    <textarea class="h-100 form-control bg-white" name="message" cols="40" rows="6" placeholder="Your message"></textarea>
                                </div>
                                <div class="col-md-6 mt-30px sm-mt-20px">
                                    <p class="mb-0 fs-13 lh-24 text-center text-md-start">We are committed to protecting your privacy. We will never collect information about you without your explicit consent.</p>
                                </div>
                                <div class="col-md-6 text-center text-md-end mt-30px sm-mt-20px">
                                    <input type="hidden" name="redirect" value="">
                                    <button class="btn btn-medium btn-dark-gray btn-box-shadow btn-rounded submit" type="submit">Send message</button>
                                </div>
                                <div class="col-12">
                                    <div class="form-results mt-20px d-none"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- end section -->

    <section class="pb-0 half-sect lg-pt-0" id="partners">
        <div class="container">
            <div class="row" data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 600, "delay": 300, "staggervalue": 250, "easing": "easeOutQuad" }'>
                <div class="col text-center">
                    <span class="fs-19 alt-font mb-35px d-inline-block text-dark-gray fw-600 ls-minus-05px">Join the <span class="fw-800">10000+</span> people trusting hiba.</span>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-5 row-cols-md-3 row-cols-sm-2 clients-style-06 justify-content-center" data-anime='{ "el": "childs", "translateX": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 250, "easing": "easeOutQuad" }'>
                <!-- start client item -->
                <div class="col client-box text-center md-mb-35px">
                    <a href="#"><img src="{{asset('assets/front/images/logo-walmart.svg')}}" class="h-35px" alt=""></a>
                </div>
                <!-- end client item -->
                <!-- start client item -->
                <div class="col client-box text-center md-mb-35px">
                    <a href="#"><img src="{{asset('assets/front/images/logo-logitech.svg')}}" class="h-35px" alt=""></a>
                </div>
                <!-- end client item -->
                <!-- start client item -->
                <div class="col client-box text-center md-mb-35px">
                    <a href="#"><img src="{{asset('assets/front/images/logo-monday.svg')}}" class="h-35px" alt=""></a>
                </div>
                <!-- end client item -->
                <!-- start client item -->
                <div class="col client-box text-center sm-mb-35px">
                    <a href="#"><img src="{{asset('assets/front/images/logo-google.svg')}}" class="h-35px" alt=""></a>
                </div>
                <!-- end client item -->
                <!-- start client item -->
                <div class="col client-box text-center">
                    <a href="#"><img src="{{asset('assets/front/images/logo-paypal.svg')}}" class="h-35px" alt=""></a>
                </div>
                <!-- end client item -->
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start scroll progress -->
    <div class="scroll-progress d-none d-xxl-block">
        <a href="#" class="scroll-top" aria-label="scroll">
            <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
        </a>
    </div>

    <footer class="footer-dark p-0 position-relative bg-black-pearl-blue-dark">
        
        <div class="container">
            <div class="row justify-content-center pt-6 sm-pt-40px">
                <!-- start footer column -->
                <div class="col-lg-3 col-md-4 col-sm-6 md-mb-30px text-center text-sm-start">
                    <a href="#" class="footer-logo mb-15px d-inline-block">
                        <img src="{{asset('assets/images/Hiba-logo.png')}}" data-at2x="images/demo-application-logo-white@2x.png" alt="">
                    </a>
                    <p>Generate traffic,create awareness and connect.</p>
                    <ul class="list-unstyled social-icon foot-social-icon mb-0 mt-4">
                        <li class="list-inline-item">

                            <a href="javascript:void(0)" class="rounded">
                                <i class="icon feather icon-feather-facebook icon-small text-medium-gray"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="javascript:void(0)" class="rounded">
                                <i class="icon feather icon-feather-instagram icon-small text-medium-gray"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="javascript:void(0)" class="rounded">
                                <i class="icon feather icon-feather-twitter icon-small text-medium-gray"></i>

                            </a>
                        </li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                    </ul>
                    <!-- <div class="row align-items-center border border-color-transparent-white-light g-0 border-radius-4px mt-30px lg-mt-25px">
                        <div class="col-5 text-center">
                            <h3 class="text-white fw-700 mb-0">4.8</h3>
                        </div>
                        <div class="col-7 border-start border-color-transparent-white-light ps-20px pe-20px pt-15px pb-15px lg-ps-15px lg-pe-15px text-center text-sm-start">
                            <div class="review-star-icon fs-14 lh-30">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            </div>
                            <span class="d-block fs-14 text-white lh-20 fw-500">30k Reviews</span>
                        </div>
                    </div> -->
                </div>
                <!-- end footer column -->
                <!-- start footer column -->
                <div class="col-5 col-lg-2 col-md-3 col-sm-5 offset-sm-1 md-mb-30px">
                    <span class="d-block text-white fw-600 mb-10px">About product</span>
                    <ul>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Features</a></li>
                        <li><a href="#">How it works</a></li>
                        <li><a href="#">Reviews</a></li>
                        <li><a href="#">Top Programs</a></li>

                    </ul>
                </div>
                <!-- end footer column -->
                <!-- start footer column -->
                <div class="col-7 col-lg-3 col-md-4 col-sm-5 offset-md-0 offset-sm-1 order-5 order-md-3 xs-mb-30px">
                    <span class="d-block text-white fw-600 mb-10px">Need help?</span>
                    <span class="d-block">Call us directly?</span>
                    <a href="tel:1235678901" class="text-white fw-600 mb-15px d-inline-block">(123) 567 8901</a>
                    <span class="d-block">Need live support?</span>
                    <a href="mailto:support@domain.com" class="text-white fw-600 d-inline-block">support@domain.com</a>
                </div>
                <!-- end footer column -->
                <!-- start footer column -->
                <div class="col-lg-3 col-md-10 col-sm-6 text-md-center text-lg-start order-last order-sm-4">
                    <span class="d-block text-white fw-600 mb-10px">Keep in touch with us</span>
                    <p class="mb-20px lh-30 w-90 xl-w-100">Subscribe our newsletter to get the latest news and updates.</p>
                    <div class="d-inline-block w-100 newsletter-style-02 position-relative mb-15px">
                        <form action="email-templates/subscribe-newsletter.php" method="post" class="position-relative w-100">
                            <input class="input-small fs-14 bg-transparent border-color-transparent-white-light w-100 form-control required" type="email" name="email" placeholder="Enter your email">
                            <input type="hidden" name="redirect" value="">
                            <button class="btn submit" aria-label="submit">
                                <i class="icon feather icon-feather-mail icon-small text-medium-gray"></i></button>
                            <div class="form-results border-radius-4px pt-5px pb-5px ps-15px pe-15px fs-14 lh-22 mt-10px w-100 text-center position-absolute d-none"></div>
                        </form>
                    </div>
                    <div class="d-flex align-items-center justify-content-lg-start justify-content-md-center">
                        <i class="line-icon-Handshake align-middle icon-medium me-10px"></i>
                        <span class="fs-14">Protecting your privacy</span>
                    </div>
                </div>
                <!-- end footer column -->
            </div>
            <div class="row justify-content-center align-items-center pt-5 md-pt-30px">
                <div class="col-12">
                    <div class="divider-style-03 divider-style-03-01 border-color-transparent-white-light"></div>
                </div>
                <div class="col-xl-8 col-lg-9 pt-30px pb-30px fs-14 lh-26 last-paragraph-no-margin text-center order-2 order-sm-1">
                    <div class="text-sm-start">
                        <p class="mb-0">© <script>
                                document.write(new Date().getFullYear())
                            </script> Hiiba. Designed by<a href="https://servolltech.co.ke/" target="_blank" class="fw-800 text-decoration-line-bottom"> Servoll Technologies</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script type="text/javascript" src="{{asset('assets/front/js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/front/js/vendors.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/front/js/main.js')}}"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var slider = tns({
                container: '.my-slider',
                items: 1,
                slideBy: 'page',
                autoplay: true,
                controls: false, // No prev and next buttons
                nav: false, // Dots at the bottom
                autoplayButtonOutput: false, // No autoplay start/stop button
                responsive: {
                    768: {
                        items: 2
                    },
                    1024: {
                        items: 3
                    }
                }
            });
        });
    </script>

    <!-- Swiper JS -->

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const swiper = new Swiper('.swiper-container', {
                slidesPerView: 4,
                spaceBetween: 30,
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                autoplay: {
                    delay: 30000, // 30 seconds
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 30,
                    },
                    1024: {
                        slidesPerView: 4,
                        spaceBetween: 40,
                    },
                },
            });
        });
    </script>
</body>

</html>