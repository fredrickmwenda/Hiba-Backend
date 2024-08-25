<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>Hiba - Saas & Software Landing Page Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
    <meta name="keywords" content="Saas, Software, multi-uses, HTML, Clean, Modern" />
    <meta name="author" content="Shreethemes" />
    <meta name="email" content="support@shreethemes.in" />
    <meta name="website" content="https://shreethemes.in" />
    <meta name="Version" content="v4.4.0" />

    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('assets/landing/images/favicon.ico')}}" />

    <!-- Css -->
    <link href="{{asset('assets/landing/libs/tiny-slider/tiny-slider.css')}}" rel="stylesheet">
    <link href="{{asset('assets/landing/libs/tobii/css/tobii.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/landing/libs/animate.css/animate.min.css')}}" rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="{{asset('assets/landing/css/bootstrap.min.css')}}" id="bootstrap-style" class="theme-opt" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('assets/landing/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/landing/libs/@iconscout/unicons/css/line.css')}}" type="text/css" rel="stylesheet" />
    <!-- Style Css-->
    <link href="{{asset('assets/landing/css/style.min.css')}}" id="color-opt" class="theme-opt" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <style>
        .swiper-container {
            width: 100%;
            height: 100%;
        }
        .swiper-slide {
            display: flex;
            justify-content: center;
        }
        .program-card img {
            width: 100%;
            height: auto;
        }
        .team-icon {
            position: absolute;
            top: 10px;
            right: 10px;
        }
        .team-icon li {
            display: inline;
        }
    </style>

</head>

<body>



    <!-- Navbar STart -->
    <header id="topnav" class="defaultscroll sticky">
        <div class="container">
            <!-- Logo container-->
            <div>
                <a class="logo" href="#">
                    <img src="{{asset('assets/images/Hiba-logo.png')}}" height="24" class="logo-light-mode" alt="">
                    <img src="{{asset('assets/images/Hiba-logo.png')}}" height="24" class="logo-dark-mode" alt="">
                </a>
            </div>

            <!-- Logo End -->

            <!-- End Logo container-->
            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>

            <!--Login button Start-->
            <ul class="buy-button list-inline mb-0">
                <li class="list-inline-item mb-0">
                    <a href="{{route('login')}}" class="btn btn-primary">
                        Login
                    </a>
                    <!-- <a href="route('login')" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                            <div class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="settings" class="fea icon-sm"></i></div>
                        </a> -->
                </li>

                <!-- <li class="list-inline-item ps-1 mb-0">
                        <a href="" target="_blank">
                            <div class="btn btn-icon btn-pills btn-primary"><i data-feather="shopping-cart" class="fea icon-sm"></i></div>
                        </a>
                    </li> -->
            </ul>
            <!--Login button End-->

            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu" id="navmenu-nav">
                    <li class="has-submenu">
                        <a href="#home">Home</a>
                    </li>
                    <li class="has-submenu">
                        <a href="#service">Feature</a>
                    </li>
                    <li class="has-submenu">
                        <a href="#testimonial">Review</a>
                    </li>
                    <!-- <li class="has-submenu">
                            <a href="#pricing">Price</a>
                        </li> -->
                    <li class="has-submenu">
                        <a href="#contact">Contact</a>
                    </li>
                </ul><!--end navigation menu-->
            </div><!--end navigation-->
        </div><!--end container-->
    </header><!--end header-->
    <!-- Navbar End -->


    <section class="slider">
        <div class="slick-carousel carousel-arrows-light carousel-dots-light m-slides-0" data-slick='{"slidesToShow": 1, "arrows": true, "dots": true, "speed": 700,"fade": true,"cssEase": "linear"}'>
            <div class="slide-item align-v-h bg-overlay bg-overlay-gradient">
                <div class="bg-img"><img src="{{ asset('assets/smart/images/sliders/1.jpg')}}" alt="slide img"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                            <div class="slide__content">
                                <h2 class="slide__title">We Run All Kinds Of IT Services That Vow Your Success</h2>
                                <p class="slide__desc">We are experienced professionals who understand that It services is
                                    changing,
                                    and are true partners who care about your success. Our team provides a consultative approach on
                                    emerging technology.</p>
                                <!-- <a href="" class="btn btn__primary btn__icon mr-30">
                    <span>More About Us</span>
                    <i class="icon-arrow-right"></i>
                  </a> -->
                                <a href="projects-grid.html" class="btn btn__white">Our Services</a>
                            </div><!-- /.slide-content -->
                        </div><!-- /.col-xl-7 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.slide-item -->
            <div class="slide-item align-v-h bg-overlay bg-overlay-gradient">
                <div class="bg-img"><img src="{{ asset('assets/smart/images/sliders/2.jpg')}}" alt="slide img"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                            <div class="slide__content">
                                <h2 class="slide__title">Keep Business Safe And Ensure High Availability.</h2>
                                <p class="slide__desc">We are experienced professionals who understand that It services is
                                    changing,
                                    and are true partners who care about your success. Our team provides a consultative approach on
                                    emerging technology.</p>
                                <a href="" class="btn btn__primary btn__icon mr-30">
                                    <span>More About Us</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                                <a href="projects-grid.html" class="btn btn__white">Our Services</a>
                            </div><!-- /.slide-content -->
                        </div><!-- /.col-xl-7 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.slide-item -->
        </div><!-- /.carousel -->
    </section><!-- /.slider -->

    <!-- Hero Start -->
    <section class="bg-home bg-light d-flex align-items-center mb-60" style="background: url('assets/landing/images/onepage/bg.png') top left no-repeat; height: auto;" id="home">
        <div class="container">
            <div class="row justify-content-center wow animate__animated animate__fadeIn">
                <div class="col-md-9 text-center mt-0 mt-md-5 pt-0 pt-md-5">
                    <div class="title-heading margin-top-100">
                        <h1 class="heading mb-3">Launch, Manage <br> and Promote Your Business Via Loyalties</h1>
                        <p class="para-desc mx-auto text-muted">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap v5 html page.</p>
                        <div class="text-center subcribe-form mt-4 pt-2">

                            <a href="#about" class="btn btn-primary">Start Free Trial <i class="uil uil-angle-right-b"></i></a>

                            <!-- <form>
                                    <div class="mb-0">
                                        <input type="email" id="email3" name="email" class="shadow rounded-pill" required="" placeholder="Email Address">
                                        <button type="submit" class="btn btn-pills btn-primary">Get Started</button>
                                    </div>
                                </form> -->
                        </div>
                    </div>

                    <div class="home-dashboard onepage-hero">
                        <img src="{{asset('assets/landing/images/saas/classic02.png')}}" alt="" class="img-fluid rounded">
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Hero End -->

    <!-- Features Start -->
    <section class="section pb-0 " id="service">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                        <h4 class="title mb-4">Great Features</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary fw-bold">Hiba</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card features feature-primary explore-feature border-0 rounded text-center">
                        <div class="card-body">
                            <span class="icons rounded-circle shadow-lg d-inline-block h4">
                                <i class="uil uil-database-alt"></i>
                            </span>
                            <div class="content mt-3">
                                <h5 class="mb-3"><a href="javascript:void(0)" class="title text-dark">Variety of Programs</a></h5>
                                <p class="text-muted mb-3">"Easy creation of a variety of programs, loyalty rewards, referral incentives and special promotions, to enhance customer engagement and foster brand loyalty.</p>
                                <!-- <a href="javascript:void(0)" class="read-more">Read More <i data-feather="chevron-right" class="fea icon-sm"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="card features feature-primary explore-feature border-0 rounded text-center">
                        <div class="card-body">
                            <span class="icons rounded-circle shadow-lg d-inline-block h4">
                                <i class="uil uil-cell"></i>
                            </span>
                            <div class="content mt-3">
                                <h5 class="mb-3"><a href="javascript:void(0)" class="title text-dark">Redeem Loyalties</a></h5>
                                <p class="text-muted mb-3">Customers can redeem their accumulated loyalties for a range of exciting rewards and benefits.They process is enhanced by system plugins</p>
                                <!-- <a href="javascript:void(0)" class="read-more">Read More <i data-feather="chevron-right" class="fea icon-sm"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 mt-lg-0 pt-2 pt-lg-0">
                    <div class="card features feature-primary explore-feature border-0 rounded text-center">
                        <div class="card-body">
                            <span class="icons rounded-circle shadow-lg d-inline-block h4">
                                <i class="uil uil-webcam"></i>
                            </span>
                            <div class="content mt-3">
                                <h5 class="mb-3"><a href="javascript:void(0)" class="title text-dark">Sambaza Loyalties</a></h5>
                                <p class="text-muted mb-3">Within the same loyalty program, customers can transfer their earned rewards to others in exchange for cash value.</p>
                                <!-- <a href="javascript:void(0)" class="read-more">Read More <i data-feather="chevron-right" class="fea icon-sm"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card features feature-primary explore-feature border-0 rounded text-center">
                        <div class="card-body">
                            <span class="icons rounded-circle shadow-lg d-inline-block h4">
                                <i class="uil uil-cloud-heart"></i>
                            </span>
                            <div class="content mt-3">
                                <h5 class="mb-3"><a href="javascript:void(0)" class="title text-dark">Track Points</a></h5>
                                <p class="text-muted mb-3">Customers can easily monitorand track their loyalty points accumulation. They can also view the points history usage</p>
                                <!-- <a href="javascript:void(0)" class="read-more">Read More <i data-feather="chevron-right" class="fea icon-sm"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card features feature-primary explore-feature border-0 rounded text-center">
                        <div class="card-body">
                            <span class="icons rounded-circle shadow-lg d-inline-block h4">
                                <i class="uil uil-cloud-upload"></i>
                            </span>
                            <div class="content mt-3">
                                <h5 class="mb-3"><a href="javascript:void(0)" class="title text-dark">Notifications</a></h5>
                                <p class="text-muted mb-3">We provide notifications to keep your customers informed and engaged with personalized updates and exclusive offers..</p>
                                <!-- <a href="javascript:void(0)" class="read-more">Read More <i data-feather="chevron-right" class="fea icon-sm"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card features feature-primary explore-feature border-0 rounded text-center">
                        <div class="card-body">
                            <span class="icons rounded-circle shadow-lg d-inline-block h4">
                                <i class="uil uil-server"></i>
                            </span>
                            <div class="content mt-3">
                                <h5 class="mb-3"><a href="javascript:void(0)" class="title text-dark">Enhanced Security</a></h5>
                                <p class="text-muted mb-3">By leveraging the power of Hyperledger technology, we ensure enhanced security across every facet of our operations</p>
                                <!-- <a href="javascript:void(0)" class="read-more">Read More <i data-feather="chevron-right" class="fea icon-sm"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div><!--end col-->


            </div><!--end row-->
        </div><!--end container-->

        <!-- <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="wow animate__animated animate__fadeInUp" data-wow-delay="1.5s">
                        <img src="{{asset('assets/landing/images/software/mobile01.png')}}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-7 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title ms-lg-5 wow animate__animated animate__fadeInUp" data-wow-delay="1.7s">
                        <h4 class="title mb-4">Seamless Operation via Smart SEO</h4>
                        <p class="text-muted">You can combine all the Hiba templates into a single one, you can take a component from the Application theme and use it in the Website.</p>
                        <ul class="list-unstyled mb-0 text-muted">
                            <li class="mb-1"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Digital Marketing Solutions for Tomorrow</li>
                            <li class="mb-1"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Our Talented & Experienced Marketing Agency</li>
                            <li class="mb-1"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Create your own skin to match your brand</li>
                        </ul>
                        <div class="mt-4">
                            <a href="javascript:void(0)" class="text-primary p-1 px-2 shadow rounded">Read More <i class="uil uil-angle-right-b"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- <div class="container mt-100 mt-60">
                <div class="p-4 rounded bg-light shadow wow animate__animated animate__fadeInUp" data-wow-delay="1.9s">
                    <div class="row align-items-center">
                        <div class="col-sm-7">
                            <div class="text-sm-start">
                                <h5 class="mb-0">Start building beautiful block-based websites.</h5>
                            </div>
                        </div>
    
                        <div class="col-sm-5 mt-4 mt-sm-0">
                            <div class="text-sm-end">
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#trialform" class="btn btn-outline-primary">Free Trial <span class="badge rounded-pill bg-danger ms-2">v4.4.0</span> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->


        <!-- <div class="modal fade" id="trialform" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content rounded shadow border-0">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">14 Days Free Trial</h5>
                            <button type="button" class="btn btn-icon btn-close" data-bs-dismiss="modal" id="close-modal"><i class="uil uil-times fs-4 text-dark"></i></button>
                        </div>
                        <div class="modal-body">
                            <div class="feature-form">
                                <img src="assets/images/illustrator/Mobile_notification_SVG.svg" alt="">
    
                                <div class="content mt-4 pt-2">
                                    <form>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Name : <span class="text-danger">*</span></label>
                                                    <div class="form-icon position-relative">
                                                        <i data-feather="user" class="fea icon-sm icons"></i>
                                                        <input type="text" class="form-control ps-5" placeholder="Name" name="name" required="">
                                                    </div>
                                                </div>
                                            </div>
    
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Email : <span class="text-danger">*</span></label>
                                                    <div class="form-icon position-relative">
                                                        <i data-feather="mail" class="fea icon-sm icons"></i>
                                                        <input type="email" class="form-control ps-5" placeholder="Email" name="email" required="">
                                                    </div>
                                                </div>
                                            </div>
    
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Password : <span class="text-danger">*</span></label>
                                                    <div class="form-icon position-relative">
                                                        <i data-feather="key" class="fea icon-sm icons"></i>
                                                        <input type="password" class="form-control ps-5" placeholder="Password" required="">
                                                    </div>
                                                </div>
                                            </div>
    
                                            <div class="col-lg-12 mt-2 mb-0">
                                                <div class="d-grid">
                                                    <button class="btn btn-primary">Login</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        <!-- Modal Content End -->

        <!-- <div class="container mt-100 mt-60">
                <div class="row">
                    <div class="col-12">
                        <div class="position-relative wow animate__animated animate__fadeInUp" data-wow-delay="2.1s" style="z-index: 1;">
                            <img src="assets/images/saas/classic01.png" class="rounded img-fluid mx-auto d-block" alt="">
                            <div class="play-icon">
                                <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" class="play-btn lightbox border-0">
                                    <i class="mdi mdi-play text-primary rounded-circle shadow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

        <div class="container mt-100 mt-60">
            <!-- <div class="row align-items-center">
                <div class="col-lg-7 col-md-6 order-2 order-md-1 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title me-lg-5">
                        <h4 class="title mb-4">Get Notified About Importent Email</h4>
                        <p class="text-muted">This prevents repetitive patterns from impairing the overall visual impression and facilitates the comparison of different typefaces. Furthermore, it is advantageous when the dummy text is relatively realistic.</p>
                        <ul class="list-unstyled text-muted">
                            <li class="mb-1"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Digital Marketing Solutions for Tomorrow</li>
                            <li class="mb-1"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Create your own skin to match your brand</li>
                        </ul>
                        <a href="javascript:void(0)" class="mt-3 h6 text-primary">Find Out More <i class="uil uil-angle-right-b"></i></a>
                    </div>
                </div>

                <div class="col-lg-5 col-md-6 order-1 order-md-2">
                    <img src="{{ asset('assets/landing/images/illustrator/app_development_SVG.svg')}}" alt="">
                </div>
            </div> -->
        </div>
    </section>
    <div class="position-relative">
        <div class="shape overflow-hidden text-light">
            <svg viewBox="0 0 2880 250" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M720 125L2160 0H2880V250H0V125H720Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- Features End -->

    <!-- Review Start -->
    <section class="section bg-light" id="testimonial">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                        <h4 class="title mb-4">Our Testimonial</h4>
                        <p class="text-muted para-desc mb-0 mx-auto">Start working with <span class="text-primary fw-bold">Hiba</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div>
            </div><!--end row-->

            <div class="row justify-content-center">
                <div class="col-lg-12 mt-4">
                    <div class="tiny-three-item wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                        <div class="tiny-slide">
                            <div class="d-flex client-testi m-2">
                                <img src="{{asset('assets/landing/images/client/01.jpg')}}" class="avatar avatar-small client-image rounded shadow" alt="">
                                <div class="card flex-1 content p-3 shadow rounded position-relative">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <p class="text-muted mt-2">" It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. "</p>
                                    <h6 class="text-primary">- Thomas Israel <small class="text-muted">C.E.O</small></h6>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="d-flex client-testi m-2">
                                <img src="{{asset('assets/landing/images/client/02.jpg')}}" class="avatar avatar-small client-image rounded shadow" alt="">
                                <div class="card flex-1 content p-3 shadow rounded position-relative">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star-half text-warning"></i></li>
                                    </ul>
                                    <p class="text-muted mt-2">" One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others. "</p>
                                    <h6 class="text-primary">- Barbara McIntosh <small class="text-muted">M.D</small></h6>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="d-flex client-testi m-2">
                                <img src="{{asset('assets/landing/images/client/03.jpg')}}" class="avatar avatar-small client-image rounded shadow" alt="">
                                <div class="card flex-1 content p-3 shadow rounded position-relative">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <p class="text-muted mt-2">" The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. "</p>
                                    <h6 class="text-primary">- Carl Oliver <small class="text-muted">P.A</small></h6>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="d-flex client-testi m-2">
                                <img src="{{asset('assets/landing/images/client/04.jpg')}}" class="avatar avatar-small client-image rounded shadow" alt="">
                                <div class="card flex-1 content p-3 shadow rounded position-relative">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <p class="text-muted mt-2">" According to most sources, Lorum Ipsum can be traced back to a text composed by Cicero. "</p>
                                    <h6 class="text-primary">- Christa Smith <small class="text-muted">Manager</small></h6>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="d-flex client-testi m-2">
                                <img src="{{asset('assets/landing/images/client/05.jpg')}}" class="avatar avatar-small client-image rounded shadow" alt="">
                                <div class="card flex-1 content p-3 shadow rounded position-relative">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <p class="text-muted mt-2">" There is now an abundance of readable dummy texts. These are usually used when a text is required. "</p>
                                    <h6 class="text-primary">- Dean Tolle <small class="text-muted">Developer</small></h6>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="d-flex client-testi m-2">
                                <img src="{{asset('assets/landing/images/client/06.jpg')}}" class="avatar avatar-small client-image rounded shadow" alt="">
                                <div class="card flex-1 content p-3 shadow rounded position-relative">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <p class="text-muted mt-2">" Thus, Lorem Ipsum has only limited suitability as a visual filler for German texts. "</p>
                                    <h6 class="text-primary">- Jill Webb <small class="text-muted">Designer</small></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <!-- Partners start -->
        <div class="container pt-5">
            <div class="row justify-content-center">
                <div class="col-lg-2 col-md-2 col-6 text-center wow animate__animated animate__fadeInUp" data-wow-delay=".5s">
                    <img src="{{asset('assets/landing/images/client/amazon.svg')}}" class="avatar avatar-ex-sm" alt="">
                </div><!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center wow animate__animated animate__fadeInUp" data-wow-delay=".7s">
                    <img src="{{asset('assets/landing/images/client/google.svg')}}" class="avatar avatar-ex-sm" alt="">
                </div><!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center mt-4 mt-sm-0 wow animate__animated animate__fadeInUp" data-wow-delay=".9s">
                    <img src="{{asset('assets/landing/images/client/lenovo.svg')}}" class="avatar avatar-ex-sm" alt="">
                </div><!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center mt-4 mt-sm-0 wow animate__animated animate__fadeInUp" data-wow-delay="1.1s">
                    <img src="{{asset('assets/landing/images/client/paypal.svg')}}" class="avatar avatar-ex-sm" alt="">
                </div><!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center mt-4 mt-sm-0 wow animate__animated animate__fadeInUp" data-wow-delay="1.3s">
                    <img src="{{asset('assets/landing/images/client/shopify.svg')}}" class="avatar avatar-ex-sm" alt="">
                </div><!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center mt-4 mt-sm-0 wow animate__animated animate__fadeInUp" data-wow-delay="1.5s">
                    <img src="{{asset('assets/images/client/spotify.svg')}}" class="avatar avatar-ex-sm" alt="">
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
        <!-- Partners End -->
    </section>

    <!--end section-->
    <!-- Review End -->

    <!-- Pricing Start -->
    <!-- <section class="section" id="pricing">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title mb-4 pb-2 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                            <h4 class="title mb-4">Our Pricing</h4>
                            <p class="text-muted para-desc mb-0 mx-auto">Start working with <span class="text-primary fw-bold">Hiba</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        </div>
                    </div>
                </div>

                <div class="row">                    
                    <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                        <div class="card pricing pricing-primary business-rate shadow bg-light border-0 rounded wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                            <div class="card-body">
                                <h6 class="title name fw-bold text-uppercase mb-4">Free</h6>
                                <div class="d-flex mb-4">
                                    <span class="h4 mb-0 mt-2">$</span>
                                    <span class="price h1 mb-0">0</span>
                                    <span class="h4 align-self-end mb-1">/mo</span>
                                </div>
                                
                                <ul class="list-unstyled mb-0 ps-0">
                                    <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Full Access</li>
                                    <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Source Files</li>
                                </ul>
                                <a href="javascript:void(0)" class="btn btn-primary mt-4">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                        <div class="card pricing pricing-primary business-rate shadow border-0 rounded wow animate__animated animate__fadeInUp" data-wow-delay=".5s">
                            <div class="ribbon ribbon-right ribbon-warning overflow-hidden"><span class="text-center d-block shadow small h6">Best</span></div>
                            <div class="card-body">
                                <h6 class="title name fw-bold text-uppercase mb-4">Starter</h6>
                                <div class="d-flex mb-4">
                                    <span class="h4 mb-0 mt-2">$</span>
                                    <span class="price h1 mb-0">39</span>
                                    <span class="h4 align-self-end mb-1">/mo</span>
                                </div>

                                <ul class="list-unstyled mb-0 ps-0">
                                    <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Full Access</li>
                                    <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Source Files</li>
                                    <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Free Appointments</li>
                                </ul>
                                <a href="javascript:void(0)" class="btn btn-primary mt-4">Get Started</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                        <div class="card pricing pricing-primary business-rate shadow bg-light border-0 rounded wow animate__animated animate__fadeInUp" data-wow-delay=".7s">
                            <div class="card-body">
                                <h6 class="title name fw-bold text-uppercase mb-4">Professional</h6>
                                <div class="d-flex mb-4">
                                    <span class="h4 mb-0 mt-2">$</span>
                                    <span class="price h1 mb-0">59</span>
                                    <span class="h4 align-self-end mb-1">/mo</span>
                                </div>
                                
                                <ul class="list-unstyled mb-0 ps-0">
                                    <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Full Access</li>
                                    <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Source Files</li>
                                    <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>1 Domain Free</li>
                                    <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Enhanced Security</li>
                                </ul>
                                <a href="javascript:void(0)" class="btn btn-primary mt-4">Try It Now</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                        <div class="card pricing pricing-primary business-rate shadow bg-light border-0 rounded wow animate__animated animate__fadeInUp" data-wow-delay=".9s">
                            <div class="card-body">
                                <h6 class="title name fw-bold text-uppercase mb-4">Ultimate</h6>
                                <div class="d-flex mb-4">
                                    <span class="h4 mb-0 mt-2">$</span>
                                    <span class="price h1 mb-0">79</span>
                                    <span class="h4 align-self-end mb-1">/mo</span>
                                </div>
                                
                                <ul class="list-unstyled mb-0 ps-0">
                                    <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Full Access</li>
                                    <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Enhanced Security</li>
                                    <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Source Files</li>
                                    <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>1 Domain Free</li>
                                    <li class="h6 text-muted mb-0"><span class="icon h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Free Installment</li>
                                </ul>
                                <a href="javascript:void(0)" class="btn btn-primary mt-4">Started Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
    <!-- Pricing End -->


    <section class="section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                        <h4 class="title mb-4">Top Programs</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary fw-bold">Hiba</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div>
            </div>


            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach ($optedInPrograms as $program)
                    <div class="swiper-slide">
                        <div class="mt-4 pt-2">
                            <a href="{{route('companyProgramLink', $program->id) }}">
                            <div class="card team team-primary text-center rounded border-0">
                                <div class="card-body">
                                    <div class="position-relative">
                                        <img src="{{ asset('assets/images/company/' . $program->logo) }}" class="img-fluid avatar avatar-ex-large rounded-circle shadow" alt="{{ $program->name }}">

                                    </div>
                                    <div class="content pt-3">
                                        <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">{{ $program->name }}</a></h5>
                                        <!-- <small class="designation text-muted">User Count: {{ $program->user_count }}</small> -->
                                    </div>
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

            <!-- <div class="row">
                    <div class="col-lg-3 col-md-6 mt-4 pt-2">
                        <div class="card team team-primary text-center rounded border-0 wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                            <div class="card-body">
                                <div class="position-relative">
                                    <img src="assets/images/client/01.jpg" class="img-fluid avatar avatar-ex-large rounded-circle shadow" alt="">
                                    <ul class="list-unstyled mb-0 team-icon">
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="facebook" class="icons"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="instagram" class="icons"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="twitter" class="icons"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="linkedin" class="icons"></i></a></li>
                                    </ul>
                                </div>
                                <div class="content pt-3">
                                    <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Ronny Jofra</a></h5>
                                    <small class="designation text-muted">UI Designers</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-4 pt-2">
                        <div class="card team team-primary text-center rounded border-0 wow animate__animated animate__fadeInUp" data-wow-delay=".5s">
                            <div class="card-body">
                                <div class="position-relative">
                                    <img src="assets/images/client/04.jpg" class="img-fluid avatar avatar-ex-large rounded-circle shadow" alt="">
                                    <ul class="list-unstyled mb-0 team-icon">
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="facebook" class="icons"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="instagram" class="icons"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="twitter" class="icons"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="linkedin" class="icons"></i></a></li>
                                    </ul>
                                </div>
                                <div class="content pt-3">
                                    <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Micheal Carlo</a></h5>
                                    <small class="designation text-muted">UX Designer</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 mt-4 pt-2">
                        <div class="card team team-primary text-center rounded border-0 wow animate__animated animate__fadeInUp" data-wow-delay=".7s">
                            <div class="card-body">
                                <div class="position-relative">
                                    <img src="assets/images/client/03.jpg" class="img-fluid avatar avatar-ex-large rounded-circle shadow" alt="">
                                    <ul class="list-unstyled mb-0 team-icon">
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="facebook" class="icons"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="instagram" class="icons"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="twitter" class="icons"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="linkedin" class="icons"></i></a></li>
                                    </ul>
                                </div>
                                <div class="content pt-3">
                                    <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Aliana Rosy</a></h5>
                                    <small class="designation text-muted">Web Developer</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 mt-4 pt-2">
                        <div class="card team team-primary text-center rounded border-0 wow animate__animated animate__fadeInUp" data-wow-delay=".9s">
                            <div class="card-body">
                                <div class="position-relative">
                                    <img src="assets/images/client/02.jpg" class="img-fluid avatar avatar-ex-large rounded-circle shadow" alt="">
                                    <ul class="list-unstyled mb-0 team-icon">
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="facebook" class="icons"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="instagram" class="icons"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="twitter" class="icons"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="linkedin" class="icons"></i></a></li>
                                    </ul>
                                </div>
                                <div class="content pt-3">
                                    <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Sofia Razaq</a></h5>
                                    <small class="designation text-muted">Web Designer</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
        </div>
    </section>


    <!-- Contact Start -->
    <section class="section pb-0" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                        <h4 class="title mb-4">Get In Touch !</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary fw-bold">Hiba</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row align-items-center">
                <div class="col-lg-12 col-md-6 mt-4 pt-2 order-2 order-md-1">
                    <div class="card rounded shadow border-0 wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                        <div class="card-body">
                            <div class="custom-form">
                                <form action="" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Company Name <span class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="user" class="fea icon-sm icons"></i>
                                                    <input name="name" id="name2" type="text" class="form-control ps-5" placeholder="First Name :">
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Company Email <span class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="mail" class="fea icon-sm icons"></i>
                                                    <input name="email" id="email2" type="email" class="form-control ps-5" placeholder="Your email :">
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label class="form-label">Comments</label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="message-circle" class="fea icon-sm icons"></i>
                                                    <textarea name="comments" id="comments2" rows="4" class="form-control ps-5" placeholder="Your Message :"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--end row-->
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <div class="d-grid">
                                                <input type="submit" id="submit2" name="send" class="submitBnt btn btn-primary" value="Send Message">
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </form><!--end form-->
                            </div><!--end custom-form-->
                        </div>
                    </div>
                </div><!--end col-->

                <!-- <div class="col-lg-7 col-md-6 mt-4 pt-2 order-1 order-md-2">
                    <div class="title-heading ms-lg-4 wow animate__animated animate__fadeInUp" data-wow-delay=".5s">
                        <h4 class="mb-4">Contact Details</h4>
                        <p class="text-muted">Start working with <span class="text-primary fw-bold">Hiba</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        <div class="card border-0 bg-transparent">
                            <div class="card-body p-0">
                                <div class="contact-detail d-flex align-items-center mt-3">
                                    <div class="icon">
                                        <i data-feather="mail" class="fea icon-m-md text-dark me-3"></i>
                                    </div>
                                    <div class="content overflow-hidden d-block">
                                        <h6 class="fw-bold mb-0">Email</h6>
                                        <a href="mailto:contact@example.com" class="text-primary">contact@example.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card border-0 bg-transparent">
                            <div class="card-body p-0">
                                <div class="contact-detail d-flex align-items-center mt-3">
                                    <div class="icon">
                                        <i data-feather="phone" class="fea icon-m-md text-dark me-3"></i>
                                    </div>
                                    <div class="content overflow-hidden d-block">
                                        <h6 class="fw-bold mb-0">Phone</h6>
                                        <a href="tel:+152534-468-854" class="text-primary">+152 534-468-854</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card border-0 bg-transparent">
                            <div class="card-body p-0">
                                <div class="contact-detail d-flex align-items-center mt-3">
                                    <div class="icon">
                                        <i data-feather="map-pin" class="fea icon-m-md text-dark me-3"></i>
                                    </div>
                                    <div class="content overflow-hidden d-block">
                                        <h6 class="fw-bold mb-0">Location</h6>
                                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin" data-type="iframe" class="video-play-icon text-primary lightbox">View on Google map</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div><!--end row-->
        </div><!--end contact-->

        <div class="container-fluid mt-100 mt-60">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin" style="border:0" allowfullscreen></iframe>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Contact End -->

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-py-60">
                        <div class="row">
                            <div class="col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                                <a href="#" class="logo-footer">
                                    <img src="{{asset('assets/landing/images/Hiba-dark.png')}}" height="24" alt="">
                                </a>
                                <p class="mt-4">Generate traffic,create awareness and connect.</p>
                                <ul class="list-unstyled social-icon foot-social-icon mb-0 mt-4">
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                                </ul>
                                <!--end icon-->
                            </div><!--end col-->

                            <div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <h5 class="footer-head">Company</h5>
                                <ul class="list-unstyled footer-list mt-4">
                                    <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> About us</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Features</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Review</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Price</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Contact</a></li>
                                    <li><a href="{{route('login')}}" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Login</a></li>
                                    <li><a href="{{route('register')}}" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Register</a></li>
                                </ul>
                            </div><!--end col-->

                            <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <h5 class="footer-head">Usefull Links</h5>
                                <ul class="list-unstyled footer-list mt-4">
                                    <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Terms of Services</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Privacy Policy</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Documentation</a></li>
                                    <!-- <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Changelog</a></li>
                                        <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Components</a></li> -->
                                </ul>
                            </div><!--end col-->

                            <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <h5 class="footer-head">Newsletter</h5>
                                <p class="mt-4">Sign up and receive the latest tips via email.</p>
                                <form>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="foot-subscribe mb-3">
                                                <label class="form-label">Write your email <span class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="mail" class="fea icon-sm icons"></i>
                                                    <input type="email" name="email" id="emailsubscribe" class="form-control ps-5 rounded" placeholder="Your email : " required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="d-grid">
                                                <input type="submit" id="submitsubscribe" name="send" class="btn btn-soft-primary" value="Subscribe">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="footer-py-30 footer-bar">
            <div class="container text-center">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="text-sm-start">
                            <p class="mb-0">© <script>
                                    document.write(new Date().getFullYear())
                                </script> Hiba. Design with <i class="mdi mdi-heart text-danger"></i> by <a href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.</p>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-sm-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <ul class="list-unstyled text-sm-end mb-0">
                            <li class="list-inline-item"><a href="javascript:void(0)"><img src="{{asset('assets/landing/images/payments/american-ex.png')}}" class="avatar avatar-ex-sm" title="American Express" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img src="{{asset('assets/landing/images/payments/discover.png')}}" class="avatar avatar-ex-sm" title="Discover" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img src="{{asset('assets/landing/images/payments/master-card.png')}}" class="avatar avatar-ex-sm" title="Master Card" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img src="{{asset('assets/landing/images/payments/paypal.png')}}" class="avatar avatar-ex-sm" title="Paypal" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img src="{{asset('assets/landing/images/payments/visa.png')}}" class="avatar avatar-ex-sm" title="Visa" alt=""></a></li>
                        </ul>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </div>
    </footer><!--end footer-->
    <!-- Footer End -->

    <!-- Cookies Start -->
    <div class="card cookie-popup shadow rounded py-3 px-4">
        <p class="text-muted mb-0">This website uses cookies to provide you with a great user experience. By using it, you accept our <a href="https://shreethemes.in" target="_blank" class="text-success h6">use of cookies</a></p>
        <div class="cookie-popup-actions text-end">
            <button><i class="uil uil-times text-dark fs-4"></i></button>
        </div>
    </div>
    <!--Note: Cookies Js including in plugins.init.js (path like; js/plugins.init.js) and Cookies css including in _helper.scss (path like; scss/_helper.scss)-->
    <!-- Cookies End -->


    <!-- Back to top -->
    <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fs-5"><i data-feather="arrow-up" class="fea icon-sm icons align-middle"></i></a>
    <!-- Back to top -->

    <!-- Javascript -->
    <!-- JAVASCRIPT -->
    <script src="{{asset('assets/landing/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- For Menu -->
    <script src="{{asset('assets/landing/libs/gumshoejs/gumshoe.min.js')}}"></script>
    <!-- SLIDER -->
    <script src="{{asset('assets/landing/libs/tiny-slider/min/tiny-slider.js')}}"></script>
    <!-- Lightbox -->
    <script src="{{asset('assets/landing/libs/tobii/js/tobii.min.js')}}"></script>
    <!-- Animation -->
    <script src="{{asset('assets/landing/libs/wow.js/wow.min.js')}}"></script>
    <!-- Main Js -->
    <script src="{{asset('assets/landing/libs/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('assets/landing/js/plugins.init.js')}}"></script><!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
    <script src="{{asset('assets/landing/js/app.js')}}"></script><!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
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