<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Hiba- Loyalty Program</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap 5 Landing Page Template">
    <meta name="keywords" content="Saas, app">
    <meta name="author" content="Shreethemes">
    <meta name="email" content="support@Hiiba.io">
    <meta name="website" content="https://hiba.io">
    <meta name="Version" content="v0.0.1">

    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('assets/landing/images/favicon.ico')}}">

    <!-- Style Css-->
    <link href="{{asset('assets/landing/libs/tiny-slider/tiny-slider.css')}}" rel="stylesheet">
    <link href="{{asset('assets/landing/libs/tobii/css/tobii.min.css')}}" rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="{{asset('assets/landing/libs/bootstrap/css/bootstrap.min.css')}}" id="bootstrap-style" class="theme-opt" rel="stylesheet" type="text/css">

    <!-- <link href="{{asset('assets/landing/css/bootstrap-yellow.min.css')}}" id="bootstrap-style" class="theme-opt" rel="stylesheet" type="text/css"> -->
    <!-- Icons Css -->
    <link href="{{asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/landing/libs/@iconscout/unicons/css/line.css')}}" type="text/css" rel="stylesheet">
    <!-- Style Css-->
    <link href="{{asset('assets/landing/css/style-yellow.min.css')}}" id="color-opt" class="theme-opt" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/landing/libs/tiny-slider/tiny-slider.css')}}" rel="stylesheet">

</head>

<body>

    <span class="modern-app-round top-50 start-50 translate-middle"></span>

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
            <!-- <a class="logo" href="{{route('category.index')}}">
                <img src="{{asset('assets/images/Hiba-logo.png')}}" height="24" class="logo-light-mode" alt="">
                <img src="{{asset('assets/images/Hiba-logo.png')}}" height="24" class="logo-dark-mode" alt="">
            </a> -->
            <!-- Logo End -->

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
                    <a href="javascript:void(0)" class="btn btn-icon btn-light">
                        <img src="{{asset('assets/landing/images/app/play-store.png')}}" class="avatar avatar-ex-small p-1" alt="">
                    </a>
                </li>

                <li class="list-inline-item mb-0">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">
                        Login
                    </button>
                    <!-- <a href="{{route('companyFront')}}" class="btn btn-primary pt-6" type="button" style="padding:10px">
                            Login
                            <img src="{{asset('assets/landing/images/app/app-store.png')}}" class="avatar avatar-ex-small p-1" alt="">
                        </a> -->
                </li>

            </ul>
            <!--Login button End-->

            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu" id="navmenu-nav">
                    <li class="has-submenu">
                        <a href="#home">Home</a>
                    </li>
                    <li class="has-submenu">
                        <a href="#aboutus" class="sub-menu-item">About Us</a>
                    </li>
                    <li class="has-submenu">
                        <a href="#feature" class="sub-menu-item">Features</a>
                    </li>
                    <li class="has-submenu">
                        <a href="#testimonial" class="sub-menu-item">Testimonials</a>
                    </li>

                    <li class="has-submenu">
                        <a href="#contact" class="sub-menu-item">Contact Us</a>
                    </li>





                </ul><!--end navigation menu-->
            </div><!--end navigation-->
        </div><!--end container-->
    </header><!--end header-->
    <!-- Navbar End -->

    <!-- Hero Start -->
    <section class="home-slider position-relative">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <div class="bg-home d-flex align-items-center" style="background: url('{{asset('assets/landing/images/loyalty-program-hero.png')}}') center center;">
                        <!-- <div class="bg-overlay"></div> -->
                        <div class="container">
                            <div class="row align-items-center pt-5 pt-sm-0 mt-5 mt-sm-0">
                                <div class="col-md-6">
                                    <div class="title-heading">
                                        <h4 class="heading heading-lg fw-bold text-white mb-3 title-dark"> Unlock Exclusive Benefits<br> with <span class="text-primary"></span>  Hiba Loyalty Program. </h4>
                                        <p class="para-desc text-white-50">Elevate your customer experience by enrolling in our Hiba Loyalty Program and unlock a world of exclusive benefits, personalized offers.</p>
                                        <div class="mt-4 pt-2">
                                            <a href="javascript:void(0)" class="btn btn-primary mt-2 me-2"><i class="uil uil-apple"></i> Play Store</a>
                                            <a href="javascript:void(0)" class="btn btn-outline-primary mt-2"><i class="uil uil-google-play"></i> Company</a>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div><!--end container-->
                    </div><!--end slide-->
                </div>

                <div class="carousel-item" data-bs-interval="3000">
                    <div class="bg-home d-flex align-items-center" style="background: url('{{asset('assets/landing/images/loyalty-programs.jpg')}}') center center;">
                        <!-- <div class="bg-overlay"></div> -->
                        <div class="container">
                        <div class="row align-items-center pt-5 pt-sm-0 mt-5 mt-sm-0">
                                <div class="col-md-6">
                                    <div class="title-heading">
                                        <h4 class="heading heading-lg fw-bold text-white mb-3 title-dark"> Earn, Redeem, Repeat:<br> Maximizing Rewards <span class="text-primary"></span>  With Hiba </h4>
                                        <p class="para-desc text-white-50">Discover the joy of perpetual rewards as a member of the Hiba Loyalty Program—earn points with every purchase, redeem them for exciting perks.</p>
                                        <div class="mt-4 pt-2">
                                            <a href="javascript:void(0)" class="btn btn-primary mt-2 me-2"><i class="uil uil-apple"></i> Play Store</a>
                                            <a href="javascript:void(0)" class="btn btn-outline-primary mt-2"><i class="uil uil-google-play"></i> Company</a>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                            <!-- <div class="row justify-content-center mt-5">
                                <div class="col-lg-12 text-center">
                                    <div class="title-heading mt-4">
                                        <h6 class="text-white-50 para-dark animated fadeInDownBig animated.delay-2s">The Best Coworking in The City</h6>
                                        <h1 class="heading mb-3 text-white title-dark animated fadeInUpBig animated.delay-3s">Office Space in Vietnam</h1>
                                        <p class="para-desc mx-auto text-white-50 para-dark animated fadeInUpBig animated.delay-4s">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap v5 html page.</p>

                                        <div class="text-center subcribe-form mt-4 pt-2 animated fadeInUpBig animated.delay-5s">
                                            <form>
                                                <input type="email" id="email" name="email" class="rounded" placeholder="E-mail">
                                                <button type="submit" class="btn btn-primary">Book Space</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div><!--end container-->
                    </div><!--end slide-->
                </div>

                <div class="carousel-item" data-bs-interval="3000">
                    <div class="bg-home d-flex align-items-center" style="background: url('{{asset('assets/landing/images/loyalty-programs.jpg')}}') center center;">
                        <!-- <div class="bg-overlay"></div> -->
                        <div class="container">
                            <!-- <div class="row justify-content-center mt-5">
                                <div class="col-lg-12 text-center">
                                    <div class="title-heading mt-4">
                                        <h6 class="text-white-50 para-dark animated fadeInDownBig animated.delay-2s">Our Space for You</h6>
                                        <h1 class="heading mb-3 text-white title-dark animated fadeInUpBig animated.delay-3s">Own Your Office For A Day</h1>
                                        <p class="para-desc mx-auto text-white-50 para-dark animated fadeInUpBig animated.delay-4s">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap v5 html page.</p>
                                        <div class="mt-4 pt-2 animated fadeInUpBig animated.delay-5s">
                                            <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" class="btn btn-icon btn-pills btn-primary m-1 lightbox"><i data-feather="video" class="icons"></i></a><span class="fw-bold text-uppercase small text-light title-dark align-middle ms-1">Watch Now</span>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="row align-items-center pt-5 pt-sm-0 mt-5 mt-sm-0">
                                <div class="col-md-6">
                                    <div class="title-heading">
                                        <h4 class="heading heading-lg fw-bold text-white mb-3 title-dark">  Elevating Businesses <br> with <span class="text-primary"></span>  Tailored Rewards and Administration. </h4>
                                        <p class="para-desc text-white-50">Empower your company by registering for Hiba's Business Loyalty Program. Administer personalized rewards, manage loyalty incentives effortlessly, and enhance customer relationships.</p>
                                        <div class="mt-4 pt-2">
                                            <a href="javascript:void(0)" class="btn btn-primary mt-2 me-2"><i class="uil uil-apple"></i> Play Store</a>
                                            <a href="javascript:void(0)" class="btn btn-outline-primary mt-2"><i class="uil uil-google-play"></i> Company</a>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div><!--end slide-->
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </section><!--end section-->
    <!-- Hero End -->

    

    <!-- Partners start -->
    <!-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                <img src="{{asset('assets/landing/images/client/amazon.svg')}}" class="avatar avatar-ex-sm" alt="">
            </div>

            <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                <img src="{{asset('assets/landing/images/client/google.svg')}}" class="avatar avatar-ex-sm" alt="">
            </div>

            <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                <img src="{{asset('assets/landing/images/client/lenovo.svg')}}" class="avatar avatar-ex-sm" alt="">
            </div>

            <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                <img src="{{asset('assets/landing/images/client/paypal.svg')}}" class="avatar avatar-ex-sm" alt="">
            </div>

            <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                <img src="{{asset('assets/landing/images/client/shopify.svg')}}" class="avatar avatar-ex-sm" alt="">
</div>

            <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                <img src="{{asset('assets/landing/images/client/spotify.svg')}}" class="avatar avatar-ex-sm" alt="">
            </div>
        </div>
    </div> -->

    <!-- Start -->
    <section class="section overflow-hidden`">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="modern-app-bg-shape position-relative">
                        <div class="px-4">
                            <!-- <img src="{{asset('assets/landing/images/app/classic01.png')}}" class="img-fluid mover mx-auto d-block mb-3" alt=""> -->

                            <img src="{{asset('assets/landing/images/app/classic01.png')}}" class="img-fluid mover mx-auto d-block rounded-md shadow" alt="">
                        </div>

                        <div class="modern-saas-absolute-right wow animate__animated animate__fadeInUp" data-wow-delay=".5s">
                            <div class="card rounded shadow">
                                <div class="p-3">
                                    <h5>Manage Your Software</h5>

                                    <!-- <div class="progress-box mt-2">
                                        <h6 class="title fw-normal text-muted">Work in dashboard</h6>
                                        <div class="progress">
                                            <div class="progress-bar position-relative bg-primary" style="width:84%;">
                                                <div class="progress-value d-block text-muted h6 mt-1">84%</div>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>

                        <div class="position-absolute top-0 start-0">
                            <!-- <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" class="avatar avatar-md-md rounded-pill shadow-md card bg-primary d-flex justify-content-center align-items-center lightbox">
                                <i class="mdi mdi-play fs-4 text-white"></i>
                            </a> -->
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-7 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="section-title ms-lg-5">
                        <h4 class="title mb-4">Loyalty Points tracking and utilization</h4>
                        <!-- <p class="text-muted">Hiiba presents an innovative loyalty program meticulously designed to effortlessly track and manage loyalty points, providing customers with a seamless experience in monitoring their rewards. Through a user-friendly interface, Hisa empowers members to effortlessly oversee their accumulated points, ensuring a hassle-free path towards redeeming exclusive benefits and offers.</p> -->
                        <!-- <ul class="list-unstyled text-muted">
                            <li class="mb-1"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Digital Marketing Solutions for Tomorrow</li>
                            <li class="mb-1"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Create your own skin to match your brand</li>
                        </ul> -->
                        <a href="javascript:void(0)" class="mt-3 h6 text-primary">Find Out More <i class="uil uil-angle-right-b"></i></a>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->








    </section><!--end section-->
    <section>
        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6 order-md-2 order-3">
                    <div class="modern-app-bg-shape position-relative">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-6">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 mt-4 mt-lg-0 pt-2 pt-lg-0">
                                        <div class="card overflow-hidden rounded border-0 shadow-md">
                                            <img src="{{asset('assets/landing/images/course/online/ab02.jpg')}}" class="img-fluid" alt="work-image">
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-lg-12 col-md-12 mt-4">
                                        <div class="card overflow-hidden rounded border-0 shadow-md">
                                            <img src="{{asset('assets/landing/images/course/online/ab03.jpg')}}" class="img-fluid" alt="work-image">
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end col-->

                            <div class="col-lg-6 col-6 mt-4 mt-lg-0 pt-2 pt-lg-0">
                                <div class="card overflow-hidden rounded border-0 shadow-md">
                                    <img src="{{asset('assets/landing/images/course/online/ab01.jpg')}}" class="img-fluid" alt="work-image">
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                </div><!--end col-->

                <div class="col-lg-7 col-md-6 mt-4 mt-lg-0 pt-2 pt-lg-0 order-md-1 order-2">
                    <div class="me-lg-5">
                        <div class="section-title mb-4 pb-2 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                            <h4 class="title mb-4">Frequently Asked Questions</h4>
                            <p class="text-muted para-desc mb-0">Start working with <span class="text-primary fw-bold">Hiiba</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        </div>

                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item rounded shadow wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button border-0 bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        How does it work ?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse border-0 collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body text-muted">
                                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item rounded shadow mt-3 wow animate__animated animate__fadeInUp" data-wow-delay=".5s">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        What do i need to use Hiiba ?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse border-0 collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body text-muted">
                                        You just need to download the app and create an user account.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item rounded shadow mt-3 wow animate__animated animate__fadeInUp" data-wow-delay=".7s">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Which programs are on Hiiba?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse border-0 collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body text-muted">
                                        We offer a wide variety of programs from top companies
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item rounded shadow mt-3 wow animate__animated animate__fadeInUp" data-wow-delay=".9s">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        How do i track my loyalty ?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse border-0 collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body text-muted">
                                        Your loyalty points are integrated with the company offering the program in a seemless mannner that any transaction you make regarding a product on a program they are added up.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section>

    <section class="section pb-0" id="feature">
        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">App Features</h4>
                        <p class="text-muted para-desc mb-0 mx-auto">Start working with <span class="text-primary fw-bold">Hiiba</span> to keep loyalty points as an asset by your transaction habits.</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row justify-content-center align-items-center">
                <div class="col-lg-4 col-md-8 mt-4 text-center">
                    <img src="{{asset('assets/landing/images/app/feature.png')}}" class="img-fluid px-lg-0 px-md-5 px-4" alt="">
                </div><!--end col-->

                <div class="col-lg-4 col-md-6">
                    <div class="row">
                        <div class="col-12 mt-4 pt-2">
                            <div class="d-flex features feature-primary">
                                <div class="icon text-center rounded-circle text-primary me-3 mt-2">
                                    <i data-feather="monitor" class="fea icon-ex-md"></i>
                                </div>
                                <div class="flex-1">
                                    <h4 class="title">Biometric Login</h4>
                                    <p class="text-muted para mb-0">Our app offers a cutting-edge biometric login feature that enhances security and convenience. Fingerprint biometric identifiers ensures a frictionless and secure authentication process.</p>
                                </div>
                            </div>
                        </div><!--end col-->

                        <div class="col-12 mt-4 pt-2">
                            <div class="d-flex features feature-primary">
                                <div class="icon text-center rounded-circle text-primary me-3 mt-2">
                                    <i data-feather="feather" class="fea icon-ex-md"></i>
                                </div>
                                <div class="flex-1">
                                    <h4 class="title">Fully Responsive Design:</h4>
                                    <p class="text-muted para mb-0"> Embracing the modern digital landscape, our app's responsive design adapts flawlessly to various devices and screen sizes.</p>
                                </div>
                            </div>
                        </div><!--end col-->

                        <div class="col-12 mt-4 pt-2">
                            <div class="d-flex features feature-primary">
                                <div class="icon text-center rounded-circle text-primary me-3 mt-2">
                                    <i data-feather="eye" class="fea icon-ex-md"></i>
                                </div>
                                <div class="flex-1">
                                    <h4 class="title">Security</h4>
                                    <p class="text-muted para mb-0">Ensuring utmost data security is a paramount aspect of our app. Robust encryption and protective measures are integrated to safeguard user information and transactions</p>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end col-->

                <div class="col-lg-4 col-md-6">
                    <div class="row">
                        <div class="col-12 mt-4 pt-2">
                            <div class="d-flex features feature-primary">
                                <div class="icon text-center rounded-circle text-primary me-3 mt-2">
                                    <i data-feather="user-check" class="fea icon-ex-md"></i>
                                </div>
                                <div class="flex-1">
                                    <h4 class="title">Clean Interface</h4>
                                    <p class="text-muted para mb-0">The app's interface follows a minimalist and clean design philosophy. Uncluttered layouts, well-organized content, and a visually appealing aesthetic result in a user-friendly environment.</p>
                                </div>
                            </div>
                        </div><!--end col-->

                        <div class="col-12 mt-4 pt-2">
                            <div class="d-flex features feature-primary">
                                <div class="icon text-center rounded-circle text-primary me-3 mt-2">
                                    <i data-feather="smartphone" class="fea icon-ex-md"></i>
                                </div>
                                <div class="flex-1">
                                    <h4 class="title">User Experience (UX)</h4>
                                    <p class="text-muted para mb-0">With a strong emphasis on user-centered design, our app offers an unparalleled user experience. Intuitive navigation, simplified workflows, and engaging interactions ensure that users foster a seamless and enjoyable journey..</p>
                                </div>
                            </div>
                        </div><!--end col-->

                        <div class="col-12 mt-4 pt-2">
                            <div class="d-flex features feature-primary">
                                <div class="icon text-center rounded-circle text-primary me-3 mt-2">
                                    <i data-feather="heart" class="fea icon-ex-md"></i>
                                </div>
                                <div class="flex-1">
                                    <h4 class="title">Virtual Card Integration</h4>
                                    <p class="text-muted para mb-0"> Streamlining loyalty points, our app introduces a Virtual Card feature that consolidates accumulated rewards from various sources into one central point.</p>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section>

    <section class="section pb-0" id="testimonial">
        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">What Our Users Say</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary fw-bold">Hiiba</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row justify-content-center">
                <div class="col-lg-12 mt-4 pt-2">
                    <div class="tiny-three-item">
                        <div class="tiny-slide">
                            <div class="card border-0 text-center bg-transparent">
                                <div class="card-body py-0">
                                    <img src="{{asset('assets/landing/images/client/01.jpg')}}" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                                    <p class="text-muted mt-4">" It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. "</p>
                                    <h6 class="text-primary">- Thomas Israel</h6>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="card border-0 text-center bg-transparent">
                                <div class="card-body py-0">
                                    <img src="{{asset('assets/landing/images/client/02.jpg')}}" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                                    <p class="text-muted mt-4">" The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. "</p>
                                    <h6 class="text-primary">- Carl Oliver</h6>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="card border-0 text-center bg-transparent">
                                <div class="card-body py-0">
                                    <img src="{{asset('assets/landing/images/client/03.jpg')}}" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                                    <p class="text-muted mt-4">" One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others. "</p>
                                    <h6 class="text-primary">- Barbara McIntosh</h6>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="card border-0 text-center bg-transparent">
                                <div class="card-body py-0">
                                    <img src="{{asset('assets/landing/images/client/04.jpg')}}" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                                    <p class="text-muted mt-4">" Thus, Lorem Ipsum has only limited suitability as a visual filler for German texts. "</p>
                                    <h6 class="text-primary">- Jill Webb</h6>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="card border-0 text-center bg-transparent">
                                <div class="card-body py-0">
                                    <img src="{{asset('assets/landing/images/client/05.jpg')}}" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                                    <p class="text-muted mt-4">" There is now an abundance of readable dummy texts. These are usually used when a text is required. "</p>
                                    <h6 class="text-primary">- Dean Tolle</h6>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="card border-0 text-center bg-transparent">
                                <div class="card-body py-0">
                                    <img src="{{asset('assets/landing/images/client/06.jpg')}}" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                                    <p class="text-muted mt-4">" According to most sources, Lorum Ipsum can be traced back to a text composed by Cicero. "</p>
                                    <h6 class="text-primary">- Christa Smith</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section>

    <section>
        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-5 col-12">
                    <img src="{{asset('assets/landing/images/app/oficial.png')}}" class="img-fluid mx-auto d-block" alt="">
                </div><!--end col-->

                <div class="col-lg-7 col-md-7 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title">
                        <div class="alert alert-light alert-pills text-dark" role="alert">
                            <span class="badge text-bg-primary rounded-pill me-1">Hiiba</span>
                            <span class="content">Download now <i class="uil uil-angle-right-b align-middle"></i></span>
                        </div>
                        <h4 class="title mb-4">Available for your <br> Smartphones</h4>
                        <p class="text-muted para-desc mb-0">Start working with <span class="text-primary fw-bold">Hiiba</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        <div class="my-4">
                            <!-- <a href="javascript:void(0)" class="btn btn-lg btn-dark mt-2 me-2"><i class="uil uil-apple"></i> App Store</a> -->
                            <!-- <a href="javascript:void(0)" class="btn btn-lg btn-dark mt-2"><i class="uil uil-google-play"></i> Play Store</a> -->
                        </div>

                        <div class="d-inline-block">
                            <div class="pt-4 d-flex align-items-center border-top">
                                <i data-feather="smartphone" class="fea icon-md me-2 text-primary"></i>
                                <div class="content">
                                    <h6 class="mb-0">Install app now on your mobile phone</h6>
                                    <a href="javascript:void(0)" class="text-primary h6">Learn More <i class="uil uil-angle-right-b"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section>

    <!-- Contact Start -->
    <section class="section pb-0" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                        <h4 class="title mb-4">Get In Touch !</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary fw-bold">Hiiba</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row align-items-center">
                <div class="col-lg-12 col-md-6 mt-4 pt-2 order-2 order-md-1">
                    <div class="card rounded shadow border-0 wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                        <div class="card-body">
                            <div class="custom-form">
                                <form>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Your Name <span class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="user" class="fea icon-sm icons"></i>
                                                    <input name="name" id="name2" type="text" class="form-control ps-5" placeholder="First Name :">
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Your Email <span class="text-danger">*</span></label>
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
                        <p class="text-muted">Start working with <span class="text-primary fw-bold">Hiiba</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
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
                                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.846272090355!2d36.80011267451233!3d-1.2647765356020269!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f17400e0c0ffb%3A0xa25434e26772e4e6!2sNaivas!5e0!3m2!1sen!2ske!4v1692604720142!5m2!1sen!2ske" data-type="iframe" class="video-play-icon text-primary lightbox">View on Google map</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>

        <div class="container-fluid mt-100 mt-60">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.846272090355!2d36.80011267451233!3d-1.2647765356020269!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f17400e0c0ffb%3A0xa25434e26772e4e6!2sNaivas!5e0!3m2!1sen!2ske!4v1692604720142!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <!-- " style="border:0" allowfullscreen></iframe> -->
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
                                    <!-- <img src="{{asset('assets/landing/images/logo-light.png')}}" height="24" alt=""> -->
                                </a>
                                <p class="mt-4">Central hub, linking clients with diverse brands and companies that offer enticing loyalty programs and exclusive rewards</p>
                                <ul class="list-unstyled social-icon foot-social-icon mb-0 mt-4">
                                    <li class="list-inline-item mb-0"><a href="#" target="_blank" class="rounded"><i class="uil uil-dribbble align-middle" title="dribbble"></i></a></li>
                                    <li class="list-inline-item mb-0"><a href="#" target="_blank" class="rounded"><i class="uil uil-behance align-middle" title="behance"></i></a></li>
                                    <li class="list-inline-item mb-0"><a href="#" target="_blank" class="rounded"><i class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
                                    <li class="list-inline-item mb-0"><a href="#" target="_blank" class="rounded"><i class="uil uil-instagram align-middle" title="instagram"></i></a></li>
                                    <li class="list-inline-item mb-0"><a href="#" target="_blank" class="rounded"><i class="uil uil-twitter align-middle" title="twitter"></i></a></li>
                                    <li class="list-inline-item mb-0"><a href="#" class="rounded"><i class="uil uil-envelope align-middle" title="email"></i></a></li>
                                </ul><!--end icon-->
                            </div><!--end col-->

                            <div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <h5 class="footer-head">Company</h5>
                                <ul class="list-unstyled footer-list mt-4">
                                    <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> About us</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Services</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Team</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Pricing</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Project</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Careers</a></li>

                                </ul>
                            </div><!--end col-->

                            <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <h5 class="footer-head">Usefull Links</h5>
                                <ul class="list-unstyled footer-list mt-4">
                                    <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Terms of Services</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Privacy Policy</a></li>
                                    <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Documentation</a></li>
                                    <!-- <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Changelog</a></li> -->
                                    <!-- <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Components</a></li> -->
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
                                </script> Hiiba. Designed  by<a href="https://servolltech.co.ke/" target="_blank" class="text-reset">Servoll Technologies</a>.</p>
                        </div>
                    </div>

                    <div class="col-sm-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <!-- <ul class="list-unstyled text-sm-end mb-0">
                            <li class="list-inline-item"><a href="javascript:void(0)"><img src="{{asset('assets/landing/images/payments/american-ex.png')}}" class="avatar avatar-ex-sm" title="American Express" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img src="{{asset('assets/landing/images/payments/discover.png')}}" class="avatar avatar-ex-sm" title="Discover" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img src="{{asset('assets/landing/images/payments/master-card.png')}}" class="avatar avatar-ex-sm" title="Master Card" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img src="{{asset('assets/landing/images/payments/paypal.png')}}" class="avatar avatar-ex-sm" title="Paypal" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img src="{{asset('assets/landing/images/payments/visa.png')}}" class="avatar avatar-ex-sm" title="Visa" alt=""></a></li>
                        </ul> -->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </div>
    </footer><!--end footer-->






    <!-- The Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Login!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('login')}}" method="post">
                        @csrf
                        <p>Maximize your company's safety and efficiency by leveraging our loyalty points system. Easily track and utilize loyalty points to fortify your IT business while efficiently managing tasks and operations.</p>

                        <div class="input-group mb-4">
                            <span class="input-group-text"><i data-feather="mail"></i></span>
                            <input type="text" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
                        </div>


                        <div class="input-group mb-4">
                            <span class="input-group-text"><i data-feather="lock"></i></span>
                            <input type="password" class="form-control" placeholder="********" name="password" id="password">
                            <span class="input-group-text"><i id="passwordToggle" data-feather="eye-off" onclick="togglePasswordVisibility()" style="cursor:pointer"></i></span>
                        </div>


                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="custom-control custom-checkbox d-flex align-items-center">
                                <input type="checkbox" class="custom-control-input" id="remember_me" style="margin-right: 5px;" name="remember">
                                <label class="custom-control-label" for="remember_me">Remember Me!</label>
                            </div>
                            <a href="#" class="fz-14 font-weight-bold color-secondary">Forget Password?</a>
                        </div>
                        <button type="submit" class="btn btn-primary btn__block btn__xl">Login</button>
                    </form>
                </div>
                <div class="modal-footer d-flex justify-content-between">
                    <h6 style="flex: 3;">Join us for a personalized experience tailored just for you. <a href="#" data-bs-toggle="modal" data-bs-target="#registerModal" style="text-decoration: underline!important; flex: 1;">signup</a></h6>


                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerModalLabel">Signup!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('register')}}" method="post">
                        @csrf
                        <p>Maximize your company's safety and efficiency by leveraging our loyalty points system. Easily track and utilize loyalty points to fortify your IT business while efficiently managing tasks and operations.</p>
                        <div class="input-group mb-4">
                            <span class="input-group-text"><i data-feather="user"></i></span>
                            <input type="text" class="form-control" placeholder="Username" name="username" value="{{ old('name') }}">
                        </div>
                        <div class="input-group mb-4">
                            <span class="input-group-text"><i data-feather="mail"></i></span>
                            <input type="text" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
                        </div>
                        <div class="input-group mb-4">
                            <span class="input-group-text"><i data-feather="phone"></i></span>
                            <input type="phone" class="form-control" placeholder="Phone" name="phone" value="{{ old('phone') }}">
                        </div>
                        <div class="input-group mb-4">
                            <span class="input-group-text"><i data-feather="home"></i></span>
                            <select class="form-control select2" id="company_id" name="company" required>
                                <option>Select Company</option>
                                @php
                                $companies = \App\Models\Company::get();
                                @endphp
                                @foreach($companies as $company)
                                <option value="{{$company->id}}">{{$company->name}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('company'))
                            <span class="invalid-feedback">
                                <strong>{{$errors->first('company')}}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="input-group mb-4">
                            <span class="input-group-text"><i data-feather="lock"></i></span>
                            <input type="password" class="form-control" placeholder="********" name="password" id="password_set">
                            <span class="input-group-text"><i id="passwordToggle" data-feather="eye-off" onclick="togglePasswordVisibility()" style="cursor:pointer"></i></span>
                        </div>
                        <div class="input-group mb-4">
                            <span class="input-group-text"><i data-feather="lock"></i></span>
                            <input type="password" class="form-control" placeholder="********" name="password_confirmation" id="passwordConfirmation">
                            <span class="input-group-text"><i id="passwordConfirmationToggle" data-feather="eye-off" onclick="togglePasswordVisibility()" style="cursor:pointer"></i></span>
                        </div>

                        <!-- <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="custom-control custom-checkbox d-flex align-items-center">
            g                    <input type="checkbox" class="custom-control-input" id="remember_me" style="margin-right: 5px;">
                                <label class="custom-control-label" for="remember_me">Remember Me!</label>
                            </div>
                            <a href="#" class="fz-14 font-weight-bold color-secondary">Forget Password?</a>
                        </div> -->
                        <button type="submit" class="btn btn-primary btn__block btn__xl">Signup</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <h6 style="flex: 3;">Already have an account? <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal" style="text-decoration: underline!important; flex: 1;">login</a></h6>

                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">
                        <span>Login</span> -->
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Back to top -->
    <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fs-5"><i data-feather="arrow-up" class="fea icon-sm icons align-middle"></i></a>
    <!-- Back to top -->

    <!-- javascript -->
    <!-- JAVASCRIPT -->

    <script src="{{asset('assets/landing/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- SLIDER -->
    <script src="{{asset('assets/landing/libs/tiny-slider/min/tiny-slider.js')}}"></script>

    <script src="{{asset('assets/landing/libs/shufflejs/shuffle.min.js')}}"></script>
    <script src="{{asset('assets/landing/libs/tobii/js/tobii.min.js')}}"></script>
    <!-- <script src="{{asset('assets/landing/libs/tiny-slider/min/tiny-slider.js')}}"></script> -->

    <!-- Animation -->
    <script src="{{asset('assets/landing/libs/wow.js/wow.min.js')}}"></script>
    <script src="{{asset('assets/landing/libs/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('assets/landing/js/plugins.init.js')}}"></script><!--Note: All init (custom) js like tiny slider, counter, countdown, lightbox, gallery, swiper slider etc.-->
    <script src="{{asset('assets/landing/js/app.js')}}"></script>
    <!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script>
        function togglePasswordVisibility() {
            var passwordField = document.getElementById('password');
            var passwordToggle = document.getElementById('passwordToggle');
            if (passwordField.type === "password") {
                passwordField.type = "text";
                passwordToggle.setAttribute('data-feather', 'eye');
            } else {
                passwordField.type = "password";
                passwordToggle.setAttribute('data-feather', 'eye-off');
            }
            feather.replace();

            var passwordConfirmationField = document.getElementById('passwordConfirmation');
            var passwordConfirmationToggle = document.getElementById('passwordConfirmationToggle');
            if (passwordConfirmationField.type === "password") {
                passwordConfirmationField.type = "text";
                passwordConfirmationToggle.setAttribute('data-feather', 'eye');
            } else {
                passwordConfirmationField.type = "password";
                passwordConfirmationToggle.setAttribute('data-feather', 'eye-off');
            }
            feather.replace();
        }
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Check if 'showRegisterModal' session variable is set to true
            @if(session('showRegisterModal'))
            // Get the register modal
            var registerModal = document.getElementById('registerModal');
            // Show the register modal
            registerModal.style.display = 'block';
            @endif

            // Check if 'showLoginModal' session variable is set to true
            @if(session('showLoginModal'))
            // Get the login modal
            var loginModal = document.getElementById('loginModal');
            // Show the login modal
            loginModal.style.display = 'block';
            @endif
        });
    </script>

</body>

</html>