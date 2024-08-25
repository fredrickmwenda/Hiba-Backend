
<!doctype html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <title>Hiba- Saas & App Site</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Premium Bootstrap 5 Landing Page Template">
        <meta name="keywords" content="Saas, app">
        <meta name="author" content="Shreethemes">
        <meta name="email" content="support@hiba.io">
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
        <link href="{{asset('assets/landing/libs/@mdi/font/css/materialdesignicons.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets/landing/libs/@iconscout/unicons/css/line.css')}}" type="text/css" rel="stylesheet">
        <!-- Style Css-->
        <link href="{{asset('assets/landing/css/style-yellow.min.css')}}" id="color-opt" class="theme-opt" rel="stylesheet" type="text/css">

    </head>

    <body>
        <!-- Loader -->
        <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
        <!-- Loader -->
        <span class="modern-app-round top-50 start-50 translate-middle"></span>
        
        <!-- Navbar STart -->
        <header id="topnav" class="defaultscroll sticky">
            <div class="container">
                <!-- Logo container-->
                <a class="logo" href="index.html">
                    <img src="{{asset('assets/images/Hiba-logo.png')}}" height="24" class="logo-light-mode" alt="">
                    <img src="{{asset('assets/images/Hiba-logo.png')}}" height="24" class="logo-dark-mode" alt="">
                </a>
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
                        <a href="{{route('companyFront')}}" class="btn btn-primary pt-6" type="button" style="padding:10px">
                            Company
                            <!-- <img src="{{asset('assets/landing/images/app/app-store.png')}}" class="avatar avatar-ex-small p-1" alt=""> -->
                        </a>
                    </li>
                    <!-- <li class="list-inline-item mb-0">
                        <a href="javascript:void(0)" class="btn btn-icon btn-light">
                            <img src="{{asset('assets/landing/images/app/app-store.png')}}" class="avatar avatar-ex-small p-1" alt="">
                        </a>
                    </li> -->
                </ul>
                <!--Login button End-->

                <div id="navigation">
                    <!-- Navigation Menu-->   
                    <ul class="navigation-menu">
                        <li><a href="index.html" class="sub-menu-item">Home</a></li>
                        <li><a href="index.html" class="sub-menu-item">About Us</a></li>
                        <li><a href="index.html" class="sub-menu-item">Features</a></li>
                        <li><a href="index.html" class="sub-menu-item">Testimonials</a></li>
                        <li><a href="index.html" class="sub-menu-item">Optin</a></li>
                        <li><a href="index.html" class="sub-menu-item">Contact Us</a></li>
                        <!-- <li class="has-submenu parent-parent-menu-item">
                            <a href="javascript:void(0)">Landing</a><span class="menu-arrow"></span>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li class="megamenu-head"><i class="uil uil-book-open fs-6 align-middle"></i> Landing Pages</li>
                                        <li><a href="index-saas.html" class="sub-menu-item">Saas</a></li>
                                        <li><a href="index-classic-saas.html" class="sub-menu-item">Classic Saas</a></li>
                                        <li><a href="index-modern-saas.html" class="sub-menu-item">Modern Saas <span class="badge text-bg-success ms-2">Animation</span><span class="badge text-bg-danger">New</span></a></li>
                                        <li><a href="index-agency.html" class="sub-menu-item">Agency</a></li>
                                        <li><a href="index-apps.html" class="sub-menu-item">Application</a></li>
                                        <li><a href="index-classic-app.html" class="sub-menu-item">Classic App</a></li>
                                        <li><a href="index-modern-app.html" class="sub-menu-item">Modern App <span class="badge text-bg-danger ms-2">New</span></a></li>
                                        <li><a href="index-studio.html" class="sub-menu-item">Studio</a></li>
                                        <li><a href="index-marketing.html" class="sub-menu-item">Marketing</a></li>
                                        <li><a href="index-enterprise.html" class="sub-menu-item">Enterprise</a></li>
                                        <li><a href="index-services.html" class="sub-menu-item">Service</a></li>
                                        <li><a href="index-payments.html" class="sub-menu-item">Payments</a></li>
                                        <li><a href="index-it-solution.html" class="sub-menu-item">IT Solution </a></li>
                                        <li><a href="index-it-solution-two.html" class="sub-menu-item">IT Solution Two </a></li>
                                    </ul>
                                </li>

                                <li>
                                    <ul>
                                        <li class="megamenu-head"><i class="uil uil-book-open fs-6 align-middle"></i> Landing Pages</li>
                                        <li><a href="index-developer.html" class="sub-menu-item">Developer</a></li>
                                        <li><a href="index-seo-agency.html" class="sub-menu-item">SEO Agency</a></li>
                                        <li><a href="index-hospital.html" class="sub-menu-item">Hospital</a></li>
                                        <li><a href="index-coworking.html" class="sub-menu-item">Coworking</a></li>
                                        <li><a href="index-business.html" class="sub-menu-item">Business</a></li>
                                        <li><a href="index-modern-business.html" class="sub-menu-item">Modern Business</a></li>
                                        <li><a href="index-finance.html" class="sub-menu-item">Finance </a></li>
                                        <li><a href="index-logistics.html" class="sub-menu-item">Delivery & Logistics </a></li>
                                        <li><a href="index-social-marketing.html" class="sub-menu-item">Social Media</a></li>
                                        <li><a href="index-digital-agency.html" class="sub-menu-item">Digital Agency</a></li>
                                        <li><a href="index-customer.html" class="sub-menu-item">Customer</a></li>
                                        <li><a href="index-software.html" class="sub-menu-item">Software</a></li>
                                        <li><a href="index-yoga.html" class="sub-menu-item">Yoga <span class="badge text-bg-danger ms-2">New</span></a></li>
                                        <li><a href="index-gym.html" class="sub-menu-item">GYM & Fitness <span class="badge text-bg-danger ms-2">New</span></a></li>
                                    </ul>
                                </li>

                                <li>
                                    <ul>
                                        <li class="megamenu-head"><i class="uil uil-book-open fs-6 align-middle"></i> Landing Pages</li>
                                        <li><a href="index-hotel.html" class="sub-menu-item">Hotel</a></li>
                                        <li><a href="index-restaurant.html" class="sub-menu-item">Restaurant <span class="badge text-bg-danger ms-2">New</span></a></li>
                                        <li><a href="index-construction.html" class="sub-menu-item">Construction</a></li>
                                        <li><a href="index-videocall.html" class="sub-menu-item">Video Conference </a></li>
                                        <li><a href="index-blockchain.html" class="sub-menu-item">Blockchain </a></li>
                                        <li><a href="index-crypto-two.html" class="sub-menu-item">Cryptocurrency Two </a></li>
                                        <li><a href="index-integration.html" class="sub-menu-item">Integration</a></li>
                                        <li><a href="index-task-management.html" class="sub-menu-item">Task Management </a></li>
                                        <li><a href="index-email-inbox.html" class="sub-menu-item">Email Inbox </a></li>
                                        <li><a href="index-travel.html" class="sub-menu-item">Travel </a></li>
                                        <li><a href="index-course.html" class="sub-menu-item">Course</a></li>
                                        <li><a href="index-online-learning.html" class="sub-menu-item">Online Learning</a></li>
                                        <li><a href="index-insurance.html" class="sub-menu-item">Insurance</a></li>
                                        <li><a href="index-furniture.html" class="sub-menu-item">Furniture <span class="badge text-bg-danger ms-2">New</span></a></li>
                                    </ul>
                                </li>
                        
                                <li>
                                    <ul>
                                        <li class="megamenu-head"><i class="uil uil-book-open fs-6 align-middle"></i> Landing Pages</li>
                                
                                        <li><a href="index-law-firm.html" class="sub-menu-item">Law Firm <span class="badge text-bg-danger ms-2">New</span></a></li>
                                        <li><a href="index-single-product.html" class="sub-menu-item">Product</a></li>
                                        <li><a href="index-car-riding.html" class="sub-menu-item">Car Ride</a></li>
                                        <li><a href="index-landing-one.html" class="sub-menu-item">Landing One </a></li>
                                        <li><a href="index-landing-two.html" class="sub-menu-item">Landing Two </a></li>
                                        <li><a href="index-landing-three.html" class="sub-menu-item">Landing Three </a></li>
                                        <li><a href="index-landing-four.html" class="sub-menu-item">Landing Four</a></li>
                                        <li><a href="index-charity.html" class="sub-menu-item">Charity <span class="badge text-bg-danger ms-2">New</span></a></li>
                                        <li><a href="index-personal.html" class="sub-menu-item">Personal</a></li>
                                        <li><a href="index-creative-personal.html" class="sub-menu-item">Creative Personal </a></li>
                                        <li><a href="index-freelancer.html" class="sub-menu-item">Freelance </a></li>
                                        <li><a href="index-event.html" class="sub-menu-item">Event</a></li>
                                        <li><a href="index-ebook.html" class="sub-menu-item">E-Book</a></li>
                                        <li><a href="index-onepage.html" class="sub-menu-item">Saas <span class="badge text-bg-warning ms-2">Onepage</span></a></li>
                                    </ul>
                                </li>
                        
                                <li>
                                    <ul>
                                        <li class="megamenu-head"><i class="uil uil-cube fs-6 align-middle"></i> Full Demos</li>
                                        <li><a href="index-corporate.html" class="sub-menu-item">Corporate</a></li>
                                        <li><a href="index-crypto.html" class="sub-menu-item">Cryptocurrency <span class="badge text-bg-dark ms-2">Dark</span></a></li>
                                        <li><a href="index-shop.html" class="sub-menu-item">Shop</a></li>
                                        <li><a href="index-portfolio.html" class="sub-menu-item">Portfolio <span class="badge text-bg-info ms-2">Updated</span></a></li>
                                        <li><a href="helpcenter-overview.html" class="sub-menu-item">Help Center</a></li>
                                        <li><a href="index-hosting.html" class="sub-menu-item">Hosting & Domain</a></li>
                                        <li><a href="index-job.html" class="sub-menu-item">Jobs & Careers</a></li>
                                        <li><a href="index-video-studio.html" class="sub-menu-item">Video Studio <span class="badge text-bg-danger ms-2">New</span></a></li>
                                        <li><a href="index-real-estate.html" class="sub-menu-item">Real Estate</a></li>
                                        <li><a href="forums.html" class="sub-menu-item">Forums</a></li>
                                        <li><a href="index-blog.html" class="sub-menu-item">Blog or News</a></li>
                                        <li><a href="index-nft.html" class="sub-menu-item">NFT Marketplace</a></li>
                                        <li><a href="index-photography.html" class="sub-menu-item">Photography <span class="badge text-bg-dark ms-2">Dark</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li> -->

                        <!-- <li class="has-submenu parent-parent-menu-item">
                            <a href="javascript:void(0)">Pages</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Company </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="page-aboutus.html" class="sub-menu-item"> About Us</a></li>
                                        <li><a href="page-aboutus-two.html" class="sub-menu-item"> About Us Two </a></li>
                                        <li><a href="page-services.html" class="sub-menu-item">Services</a></li>
                                        <li><a href="page-history.html" class="sub-menu-item">History </a></li>
                                        <li><a href="page-team.html" class="sub-menu-item"> Team</a></li>
                                        <li><a href="page-pricing.html" class="sub-menu-item">Pricing</a></li>
                                    </ul> 
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Account </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="account-profile.html" class="sub-menu-item">Profile</a></li>
                                        <li><a href="account-members.html" class="sub-menu-item">Members </a></li>
                                        <li><a href="account-works.html" class="sub-menu-item">Works </a></li>
                                        <li><a href="account-messages.html" class="sub-menu-item">Messages </a></li>
                                        <li><a href="account-chat.html" class="sub-menu-item">Chat </a></li>
                                        <li><a href="account-payments.html" class="sub-menu-item">Payments </a></li>
                                        <li><a href="account-setting.html" class="sub-menu-item">Setting</a></li>
                                        <li><a href="page-invoice.html" class="sub-menu-item">Invoice</a></li>
                                    </ul>  
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Email Template</a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="email-confirmation.html" class="sub-menu-item">Confirmation</a></li>
                                        <li><a href="email-password-reset.html" class="sub-menu-item">Reset Password</a></li>
                                        <li><a href="email-alert.html" class="sub-menu-item">Alert</a></li>
                                        <li><a href="email-invoice.html" class="sub-menu-item">Invoice</a></li>
                                    </ul>  
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Blog </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="blog-grid.html" class="sub-menu-item">Blog Grid</a></li>
                                        <li><a href="blog-grid-sidebar.html" class="sub-menu-item">Blog with Sidebar</a></li>
                                        <li><a href="blog-list.html" class="sub-menu-item">Blog Listing</a></li>
                                        <li><a href="blog-list-sidebar.html" class="sub-menu-item">Blog List & Sidebar</a></li>
                                        <li><a href="blog-detail.html" class="sub-menu-item">Blog Detail</a></li>
                                        <li><a href="blog-detail-two.html" class="sub-menu-item">Blog Detail 2 </a></li>
                                    </ul>  
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Case Study </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="page-cases.html" class="sub-menu-item">All Cases </a></li>
                                        <li><a href="page-case-detail.html" class="sub-menu-item">Case Detail </a></li>
                                    </ul>
                                </li>
                                <li><a href="course-detail.html" class="sub-menu-item">Course Detail </a></li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Auth Pages </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Login </a><span class="submenu-arrow"></span>
                                            <ul class="submenu">
                                                <li><a href="auth-login.html" class="sub-menu-item">Login</a></li>
                                                <li><a href="auth-cover-login.html" class="sub-menu-item">Login Cover</a></li>
                                                <li><a href="auth-login-three.html" class="sub-menu-item">Login Simple</a></li>
                                                <li><a href="auth-bs-login.html" class="sub-menu-item">BS5 Login</a></li>
                                                <li><a href="auth-login-bg-video.html" class="sub-menu-item">Login Five</a></li>
                                            </ul>  
                                        </li>

                                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Signup </a><span class="submenu-arrow"></span>
                                            <ul class="submenu">
                                                <li><a href="auth-signup.html" class="sub-menu-item">Signup</a></li>
                                                <li><a href="auth-cover-signup.html" class="sub-menu-item">Signup Cover</a></li>
                                                <li><a href="auth-signup-three.html" class="sub-menu-item">Signup Simple</a></li>
                                                <li><a href="auth-bs-signup.html" class="sub-menu-item">BS5 Singup</a></li>
                                                <li><a href="auth-signup-bg-video.html" class="sub-menu-item">Singup Five</a></li>
                                            </ul>  
                                        </li>

                                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Reset password </a><span class="submenu-arrow"></span>
                                            <ul class="submenu">
                                                <li><a href="auth-re-password.html" class="sub-menu-item">Reset Password</a></li>
                                                <li><a href="auth-cover-re-password.html" class="sub-menu-item">Reset Password Cover</a></li>
                                                <li><a href="auth-re-password-three.html" class="sub-menu-item">Reset Password Simple</a></li>
                                                <li><a href="auth-bs-reset.html" class="sub-menu-item">BS5 Reset Password</a></li>
                                                <li><a href="auth-reset-password-bg-video.html" class="sub-menu-item">Reset Pass Five</a></li>
                                            </ul>  
                                        </li>
                                    </ul>  
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Utility </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="page-terms.html" class="sub-menu-item">Terms of Services</a></li>
                                        <li><a href="page-privacy.html" class="sub-menu-item">Privacy Policy</a></li>
                                    </ul>  
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Special</a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="page-comingsoon.html" class="sub-menu-item">Coming Soon</a></li>
                                        <li><a href="page-comingsoon2.html" class="sub-menu-item">Coming Soon Two</a></li>
                                        <li><a href="page-maintenance.html" class="sub-menu-item">Maintenance</a></li>
                                        <li><a href="page-error.html" class="sub-menu-item">Error</a></li>
                                        <li><a href="page-thankyou.html" class="sub-menu-item">Thank you</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Contact </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="page-contact-detail.html" class="sub-menu-item">Contact Detail</a></li>
                                        <li><a href="page-contact-one.html" class="sub-menu-item">Contact One</a></li>
                                        <li><a href="page-contact-two.html" class="sub-menu-item">Contact Two</a></li>
                                        <li><a href="page-contact-three.html" class="sub-menu-item">Contact Three</a></li>
                                    </ul>  
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Multi Level Menu</a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="javascript:void(0)" class="sub-menu-item">Level 1.0</a></li>
                                        <li class="has-submenu child-menu-item"><a href="javascript:void(0)"> Level 2.0 </a><span class="submenu-arrow"></span>
                                            <ul class="submenu">
                                                <li><a href="javascript:void(0)" class="sub-menu-item">Level 2.1</a></li>
                                                <li><a href="javascript:void(0)" class="sub-menu-item">Level 2.2</a></li>
                                            </ul>  
                                        </li>
                                    </ul>  
                                </li>
                                <li><a href="footer.html" class="sub-menu-item">Footer Layouts </a></li>
                            </ul>
                        </li> -->

                        <!-- <li class="has-submenu parent-parent-menu-item">
                            <a href="javascript:void(0)">Demos</a><span class="menu-arrow"></span>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li>
                                            <a href="index-corporate.html" class="sub-menu-item">
                                                <div class="text-lg-center">
                                                    <span class="d-none d-lg-block"><img src="{{asset('assets/landing/images/demos/corporate.png')}}" class="img-fluid rounded shadow-md" alt=""></span>
                                                    <span class="mt-lg-2 d-block">Corporate</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index-crypto.html" class="sub-menu-item">
                                                <div class="text-lg-center">
                                                    <span class="d-none d-lg-block"><img src="{{asset('assets/landing/images/demos/crypto.png')}}" class="img-fluid rounded shadow-md" alt=""></span>
                                                    <span class="mt-lg-2 d-block">Cryptocurrency <span class="badge text-bg-dark ms-2">Dark</span></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index-real-estate.html" class="sub-menu-item">
                                                <div class="text-lg-center">
                                                    <span class="d-none d-lg-block"><img src="{{asset('assets/landing/images/demos/real.png')}}" class="img-fluid rounded shadow-md" alt=""></span>
                                                    <span class="mt-lg-2 d-block">Real Estate</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <ul>
                                        <li>
                                            <a href="index-shop.html" class="sub-menu-item">
                                                <div class="text-lg-center">
                                                    <span class="d-none d-lg-block"><img src="{{asset('assets/landing/images/demos/shop.png')}}" class="img-fluid rounded shadow-md" alt=""></span>
                                                    <span class="mt-lg-2 d-block">Shop</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index-portfolio.html" class="sub-menu-item">
                                                <div class="text-lg-center">
                                                    <span class="d-none d-lg-block"><img src="{{asset('assets/landing/images/demos/portfolio.png')}}" class="img-fluid rounded shadow-md" alt=""></span>
                                                    <span class="mt-lg-2 d-block">Portfolio <span class="badge text-bg-info ms-2">Updated</span></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index-photography.html" class="sub-menu-item">
                                                <div class="text-lg-center">
                                                    <span class="d-none d-lg-block"><img src="{{asset('assets/landing/images/demos/photography.png')}}" class="img-fluid rounded shadow-md" alt=""></span>
                                                    <span class="mt-lg-2 d-block">Photography <span class="badge text-bg-dark ms-2">Dark</span></span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <ul>
                                        <li>
                                            <a href="helpcenter-overview.html" class="sub-menu-item">
                                                <div class="text-lg-center">
                                                    <span class="d-none d-lg-block"><img src="{{asset('assets/landing/images/demos/help-center.png')}}" class="img-fluid rounded shadow-md" alt=""></span>
                                                    <span class="mt-lg-2 d-block">Help Center</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index-hosting.html" class="sub-menu-item">
                                                <div class="text-lg-center">
                                                    <span class="d-none d-lg-block"><img src="{{asset('assets/landing/images/demos/hosting.png')}}" class="img-fluid rounded shadow-md" alt=""></span>
                                                    <span class="mt-lg-2 d-block">Hosting & Domain</span>
                                                </div>
                                            </a>
                                        </li>
  
                                    </ul>
                                </li>
                        
                                <li>
                                    <ul>
                                        <li>
                                            <a href="index-job.html" class="sub-menu-item">
                                                <div class="text-lg-center">
                                                    <span class="d-none d-lg-block"><img src="{{asset('assets/landing/images/demos/job.png')}}" class="img-fluid rounded shadow-md" alt=""></span>
                                                    <span class="mt-lg-2 d-block">Job & Career</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="forums.html" class="sub-menu-item">
                                                <div class="text-lg-center">
                                                    <span class="d-none d-lg-block"><img src="{{asset('assets/landing/images/demos/forums.png')}}" class="img-fluid rounded shadow-md" alt=""></span>
                                                    <span class="mt-lg-2 d-block">Forums</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                        
                                <li>
                                    <ul>
                                        <li>
                                            <a href="index-blog.html" class="sub-menu-item">
                                                <div class="text-lg-center">
                                                    <span class="d-none d-lg-block"><img src="{{asset('assets/landing/images/demos/blog.png')}}" class="img-fluid rounded shadow-md" alt=""></span>
                                                    <span class="mt-lg-2 d-block">Blog</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index-nft.html" class="sub-menu-item">
                                                <div class="text-lg-center">
                                                    <span class="d-none d-lg-block"><img src="{{asset('assets/landing/images/demos/nft.png')}}" class="img-fluid rounded shadow-md" alt=""></span>
                                                    <span class="mt-lg-2 d-block">NFT Marketplace</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li> -->

                        <!-- <li class="has-submenu parent-parent-menu-item">
                            <a href="javascript:void(0)">Components</a><span class="menu-arrow"></span>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li><a href="ui-button.html" class="sub-menu-item"><i class="uil uil-cube fs-6 align-middle me-1"></i> Buttons</a></li>
                                        <li><a href="ui-badges.html" class="sub-menu-item"><i class="uil uil-award fs-6 align-middle me-1"></i> Badges</a></li>
                                        <li><a href="ui-alert.html" class="sub-menu-item"><i class="uil uil-info-circle fs-6 align-middle me-1"></i> Alert</a></li>
                                        <li><a href="ui-dropdown.html" class="sub-menu-item"><i class="uil uil-layers fs-6 align-middle me-1"></i> Dropdowns</a></li>
                                        <li><a href="ui-typography.html" class="sub-menu-item"><i class="uil uil-align-center-alt fs-6 align-middle me-1"></i> Typography</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <ul>
                                        <li><a href="ui-background.html" class="sub-menu-item"><i class="uil uil-palette fs-6 align-middle me-1"></i> Background</a></li>
                                        <li><a href="ui-text.html" class="sub-menu-item"><i class="uil uil-text fs-6 align-middle me-1"></i> Text Color</a></li>
                                        <li><a href="ui-accordion.html" class="sub-menu-item"><i class="uil uil-list-ui-alt fs-6 align-middle me-1"></i> Accordions</a></li>
                                        <li><a href="ui-card.html" class="sub-menu-item"><i class="uil uil-postcard fs-6 align-middle me-1"></i> Cards</a></li>
                                        <li><a href="ui-tooltip-popover.html" class="sub-menu-item"><i class="uil uil-backspace fs-6 align-middle me-1"></i> Tooltips & Popovers</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <ul>
                                        <li><a href="ui-shadow.html" class="sub-menu-item"><i class="uil uil-square-full fs-6 align-middle me-1"></i> Shadows</a></li>
                                        <li><a href="ui-border.html" class="sub-menu-item"><i class="uil uil-border-out fs-6 align-middle me-1"></i> Border</a></li>
                                        <li><a href="ui-carousel.html" class="sub-menu-item"><i class="uil uil-slider-h-range fs-6 align-middle me-1"></i> Carousel</a></li>
                                        <li><a href="ui-form.html" class="sub-menu-item"><i class="uil uil-notes fs-6 align-middle me-1"></i> Form Elements</a></li>
                                        <li><a href="ui-breadcrumb.html" class="sub-menu-item"><i class="uil uil-sort-amount-down fs-6 align-middle me-1"></i> Breadcrumb</a></li>
                                    </ul>
                                </li>
                        
                                <li>
                                    <ul>
                                        <li><a href="ui-pagination.html" class="sub-menu-item"><i class="uil uil-copy fs-6 align-middle me-1"></i> Pagination</a></li>
                                        <li><a href="ui-avatar.html" class="sub-menu-item"><i class="uil uil-image fs-6 align-middle me-1"></i> Avatars</a></li>
                                        <li><a href="ui-nav-tabs.html" class="sub-menu-item"><i class="uil uil-bars fs-6 align-middle me-1"></i> Nav Tabs</a></li>
                                        <li><a href="ui-modals.html" class="sub-menu-item"><i class="uil uil-vector-square fs-6 align-middle me-1"></i> Modals</a></li>
                                    </ul>
                                </li>
                        
                                <li>
                                    <ul>
                                        <li><a href="ui-tables.html" class="sub-menu-item"><i class="uil uil-table fs-6 align-middle me-1"></i> Tables</a></li>
                                        <li><a href="ui-icons.html" class="sub-menu-item"><i class="uil uil-icons fs-6 align-middle me-1"></i> Icons</a></li>
                                        <li><a href="ui-progressbar.html" class="sub-menu-item"><i class="uil uil-brackets-curly fs-6 align-middle me-1"></i> Progressbar</a></li>
                                        <li><a href="ui-lightbox.html" class="sub-menu-item"><i class="uil uil-play-circle fs-6 align-middle me-1"></i> Lightbox</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li> -->

                        <!-- <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)">Docs</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="documentation.html" class="sub-menu-item">Documentation</a></li>
                                <li><a href="changelog.html" class="sub-menu-item">Changelog</a></li>
                                <li><a href="widget.html" class="sub-menu-item">Widget</a></li>
                            </ul>
                        </li> -->
                    </ul><!--end navigation menu-->
                </div><!--end navigation-->
            </div><!--end container-->
        </header><!--end header-->
        <!-- Navbar End -->

        <!-- Start -->
        <section class="bg-half d-table w-100 overflow-hidden">
            <div class="container position-relative">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-7">
                        <div class="title-heading">
                            <span class="badge text-bg-primary rounded-pill mb-2">Hiba</span>
                            <h1 class="heading fw-bold mb-3">Increasing the <br> value of your life<span class="typewrite" data-period="4000" data-type='[ "..." ]'></span></h1>
                            <p class="para-desc text-muted">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap v5 html page.</p>
                            <div class="mt-4">
                                <!-- <a href="javascript:void(0)">
                                    <img src="{{asset('assets/landing/images/app/app.png')}}" class="m-1" height="50" alt="">
                                </a> -->
                                
                                <a href="javascript:void(0)">
                                    <img src="{{asset('assets/landing/images/app/playstore.png')}}" class="m-1" height="50" alt="">
                                </a>
                                <ul class="list-unstyled h5 text-warning mb-0 mt-2">
                                    <li class="list-inline-item mb-0 align-middle"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item mb-0 align-middle"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item mb-0 align-middle"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item mb-0 align-middle"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item mb-0 align-middle"><i class="mdi mdi-star-half"></i></li>
                                    <li class="list-inline-item mb-0 align-middle text-muted fs-6">150+ ratings</li>
                                </ul>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-5 col-md-5 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <div class="modern-app-bg-shape position-relative">
                            <img src="{{asset('assets/landing/images/app/classic01.png')}}" class="img-fluid mover mx-auto d-block" alt="">
                            
                            <div class="modern-app-absolute-left">
                                <div class="card">
                                    <div class="features feature-primary d-flex justify-content-between align-items-center rounded shadow p-3">
                                        <div class="d-flex align-items-center">
                                            <div class="icon bg-soft-primary text-center rounded-pill">
                                                <i class="uil uil-usd-circle fs-4 mb-0"></i>
                                            </div>
                                            <div class="flex-1 ms-3">
                                                <h6 class="mb-0 text-muted">Revenue</h6>
                                                <p class="fs-5 text-dark fw-bold mb-0">$<span class="counter-value" data-target="48575">45968</span></p>
                                            </div>
                                        </div>
    
                                        <span class="text-success ms-4"><i class="uil uil-arrow-growth"></i> 3.84%</span>
                                    </div>
                                </div>
                            </div>

                            <div class="modern-app-absolute-right">
                                <div class="card rounded shadow">
                                    <div class="p-3">
                                        <div class="d-flex align-items-center">
                                            <img src="{{asset('assets/landing/images/client/05.jpg')}}" class="avatar avatar-small rounded-pill shadow-md" alt="">
                                            <div class="flex-1 ms-2">
                                                <h6 class="text-dark mb-0">Cristina Murphy</h6>
                                                <p class="text-muted small mb-0">C.E.O.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="position-absolute top-0 start-50 translate-middle z-index-m-1">
                                <img src="{{asset('assets/landing/images/shapes/dots.svg')}}" class="avatar avatar-xl-large" alt="">
                            </div>

                            <div class="position-absolute top-0 start-0 translate-middle">
                                <p class="avatar avatar-small bg-primary rounded-md mb-0 spin-anything" style="opacity: 0.05;"></p>
                            </div>
                            
                            <div class="position-absolute top-100 start-100 translate-middle">
                                <p class="avatar avatar-small bg-primary rounded-pill mb-0 zoom-in-out" style="opacity: 0.05;"></p>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div>
        </section><!--end section-->
        <!-- End -->
        
        <!-- Partners start -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                    <img src="{{asset('assets/landing/images/client/amazon.svg')}}" class="avatar avatar-ex-sm" alt="">
                </div><!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                    <img src="{{asset('assets/landing/images/client/google.svg')}}" class="avatar avatar-ex-sm" alt="">
                </div><!--end col-->
                
                <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                    <img src="{{asset('assets/landing/images/client/lenovo.svg')}}" class="avatar avatar-ex-sm" alt="">
                </div><!--end col-->
                
                <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                    <img src="{{asset('assets/landing/images/client/paypal.svg')}}" class="avatar avatar-ex-sm" alt="">
                </div><!--end col-->
                
                <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                    <img src="{{asset('assets/landing/images/client/shopify.svg')}}" class="avatar avatar-ex-sm" alt="">
                </div><!--end col-->
                
                <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                    <img src="{{asset('assets/landing/images/client/spotify.svg')}}" class="avatar avatar-ex-sm" alt="">
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
        <!-- Partners End -->

        <!-- Start -->
        <section class="section overflow-hidden`">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <div class="modern-app-bg-shape position-relative">
                            <div class="px-4">
                                <img src="{{asset('assets/landing/images/portrait-girl.jpg')}}" class="img-fluid mover mx-auto d-block rounded-md shadow" alt="">
                            </div>

                            <div class="modern-saas-absolute-right wow animate__animated animate__fadeInUp" data-wow-delay=".5s">
                                <div class="card rounded shadow">
                                    <div class="p-3">
                                        <h5>Manage Your Software</h5>

                                        <div class="progress-box mt-2">
                                            <h6 class="title fw-normal text-muted">Work in dashboard</h6>
                                            <div class="progress">
                                                <div class="progress-bar position-relative bg-primary" style="width:84%;">
                                                    <div class="progress-value d-block text-muted h6 mt-1">84%</div>
                                                </div>
                                            </div>
                                        </div><!--end process box-->
                                    </div>
                                </div>
                            </div>

                            <div class="position-absolute top-0 start-0">
                                <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" class="avatar avatar-md-md rounded-pill shadow-md card bg-primary d-flex justify-content-center align-items-center lightbox">
                                    <i class="mdi mdi-play fs-4 text-white"></i>
                                </a>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-7 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <div class="section-title ms-lg-5">
                            <h4 class="title mb-4">Great Product Analytics With Real Problem</h4>
                            <p class="text-muted">Due to its widespread use as filler text for layouts, non-readability is of great importance: human perception is tuned to recognize certain patterns and repetitions in texts. If the distribution of letters visual impact.</p>
                            <ul class="list-unstyled text-muted">
                                <li class="mb-1"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Digital Marketing Solutions for Tomorrow</li>
                                <li class="mb-1"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Create your own skin to match your brand</li>
                            </ul>
                            <a href="javascript:void(0)" class="mt-3 h6 text-primary">Find Out More <i class="uil uil-angle-right-b"></i></a>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

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
                                <p class="text-muted para-desc mb-0">Start working with <span class="text-primary fw-bold">Hiba</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                            </div>
    
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item rounded shadow wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button border-0 bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                            aria-expanded="true" aria-controls="collapseOne">
                                            How does it work ?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse border-0 collapse show" aria-labelledby="headingOne"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body text-muted">
                                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="accordion-item rounded shadow mt-3 wow animate__animated animate__fadeInUp" data-wow-delay=".5s">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            Do I need a designer to use Hiba ?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse border-0 collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body text-muted">
                                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                        </div>
                                    </div>
                                </div>
    
                                <div class="accordion-item rounded shadow mt-3 wow animate__animated animate__fadeInUp" data-wow-delay=".7s">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            What do I need to do to start selling ?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse border-0 collapse" aria-labelledby="headingThree"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body text-muted">
                                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                        </div>
                                    </div>
                                </div>
    
                                <div class="accordion-item rounded shadow mt-3 wow animate__animated animate__fadeInUp" data-wow-delay=".9s">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            What happens when I receive an order ?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse border-0 collapse" aria-labelledby="headingFour"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body text-muted">
                                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title mb-4 pb-2">
                            <h4 class="title mb-4">App Features</h4>
                            <p class="text-muted para-desc mb-0 mx-auto">Start working with <span class="text-primary fw-bold">Hiba</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
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
                                        <h4 class="title">Use On Any Device</h4>
                                        <p class="text-muted para mb-0">Composed in a pseudo-Latin language which more or less pseudo-Latin language corresponds.</p>
                                    </div>
                                </div>
                            </div><!--end col-->
                            
                            <div class="col-12 mt-4 pt-2">
                                <div class="d-flex features feature-primary">
                                    <div class="icon text-center rounded-circle text-primary me-3 mt-2">
                                        <i data-feather="feather" class="fea icon-ex-md"></i>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="title">Feather Icons</h4>
                                        <p class="text-muted para mb-0">Composed in a pseudo-Latin language which more or less pseudo-Latin language corresponds.</p>
                                    </div>
                                </div>
                            </div><!--end col-->
                            
                            <div class="col-12 mt-4 pt-2">
                                <div class="d-flex features feature-primary">
                                    <div class="icon text-center rounded-circle text-primary me-3 mt-2">
                                        <i data-feather="eye" class="fea icon-ex-md"></i>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="title">Retina Ready</h4>
                                        <p class="text-muted para mb-0">Composed in a pseudo-Latin language which more or less pseudo-Latin language corresponds.</p>
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
                                        <h4 class="title">W3c Valid Code</h4>
                                        <p class="text-muted para mb-0">Composed in a pseudo-Latin language which more or less pseudo-Latin language corresponds.</p>
                                    </div>
                                </div>
                            </div><!--end col-->
                            
                            <div class="col-12 mt-4 pt-2">
                                <div class="d-flex features feature-primary">
                                    <div class="icon text-center rounded-circle text-primary me-3 mt-2">
                                        <i data-feather="smartphone" class="fea icon-ex-md"></i>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="title">Fully Responsive</h4>
                                        <p class="text-muted para mb-0">Composed in a pseudo-Latin language which more or less pseudo-Latin language corresponds.</p>
                                    </div>
                                </div>
                            </div><!--end col-->
                            
                            <div class="col-12 mt-4 pt-2">
                                <div class="d-flex features feature-primary">
                                    <div class="icon text-center rounded-circle text-primary me-3 mt-2">
                                        <i data-feather="heart" class="fea icon-ex-md"></i>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="title">Browser Compatibility</h4>
                                        <p class="text-muted para mb-0">Composed in a pseudo-Latin language which more or less pseudo-Latin language corresponds.</p>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title mb-4 pb-2">
                            <h4 class="title mb-4">What Our Users Say</h4>
                            <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary fw-bold">Hiba</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
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

            <div class="container mt-100 mt-60">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-5 col-12">
                        <img src="{{asset('assets/landing/images/illustrator/envelope-yellow.svg')}}" class="img-fluid mx-auto d-block" alt="">
                    </div><!--end col-->

                    <div class="col-lg-7 col-md-7 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="section-title">
                            <div class="alert alert-light alert-pills text-dark" role="alert">
                                <span class="badge text-bg-primary rounded-pill me-1">Hiba</span>
                                <span class="content">Download now <i class="uil uil-angle-right-b align-middle"></i></span>
                            </div>
                            <h4 class="title mb-4">Available for your <br> Smartphones</h4>
                            <p class="text-muted para-desc mb-0">Start working with <span class="text-primary fw-bold">Hiba</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                            <div class="my-4">
                                <!-- <a href="javascript:void(0)" class="btn btn-lg btn-dark mt-2 me-2"><i class="uil uil-apple"></i> App Store</a> -->
                                <a href="javascript:void(0)" class="btn btn-lg btn-dark mt-2"><i class="uil uil-google-play"></i> Play Store</a>
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
        </section><!--end section-->
        <!-- End -->
        
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
                                        <!-- <li class="list-inline-item mb-0"><a href="#" target="_blank" class="rounded"><i class="uil uil-shopping-cart align-middle" title="Buy Now"></i></a></li> -->
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
                                        <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Blog</a></li>
                                        <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Login</a></li>
                                    </ul>
                                </div><!--end col-->
                        
                                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                    <h5 class="footer-head">Usefull Links</h5>
                                    <ul class="list-unstyled footer-list mt-4">
                                        <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Terms of Services</a></li>
                                        <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Privacy Policy</a></li>
                                        <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Documentation</a></li>
                                        <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Changelog</a></li>
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
                                <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> Hiba. Design with <i class="mdi mdi-heart text-danger"></i> by <a href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.</p>
                            </div>
                        </div><!--end col-->

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
        <!-- <div class="card cookie-popup shadow rounded py-3 px-4">
            <p class="text-muted mb-0">This website uses cookies to provide you with a great user experience. By using it, you accept our <a href="https://shreethemes.in" target="_blank" class="text-success h6">use of cookies</a></p>
            <div class="cookie-popup-actions text-end">
                <button><i class="uil uil-times text-dark fs-4"></i></button>
            </div>
        </div> -->
        <!--Note: Cookies Js including in plugins.init.js (path like; js/plugins.init.js) and Cookies css including in _helper.scss (path like; scss/_helper.scss)-->
        <!-- Cookies End -->

        <!-- Offcanvas Start -->
        <div class="offcanvas offcanvas-end shadow border-0" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header p-4 border-bottom">
                <h5 id="offcanvasRightLabel" class="mb-0">
                    <img src="{{asset('assets/landing/images/logo-dark.png')}}" height="24" class="light-version" alt="">
                    <img src="{{asset('assets/landing/images/logo-light.png')}}" height="24" class="dark-version" alt="">
                </h5>
                <button type="button" class="btn-close d-flex align-items-center text-dark" data-bs-dismiss="offcanvas" aria-label="Close"><i class="uil uil-times fs-4"></i></button>
            </div>
            <div class="offcanvas-body p-4">
                <div class="row">
                    <div class="col-12">
                        <img src="{{asset('assets/landing/images/contact.svg')}}" class="img-fluid d-block mx-auto" alt="">
                        <div class="card border-0 mt-4" style="z-index: 1">
                            <div class="card-body p-0">
                                <h4 class="card-title text-center">Login</h4>  
                                <form class="login-form mt-4">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label class="form-label">Your Email <span class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="user" class="fea icon-sm icons"></i>
                                                    <input type="email" class="form-control ps-5" placeholder="Email" name="email" required="">
                                                </div>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label class="form-label">Password <span class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="key" class="fea icon-sm icons"></i>
                                                    <input type="password" class="form-control ps-5" placeholder="Password" required="">
                                                </div>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-lg-12">
                                            <div class="d-flex justify-content-between">
                                                <div class="mb-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">Remember me</label>
                                                    </div>
                                                </div>
                                                <p class="forgot-pass mb-0"><a href="auth-cover-re-password.html" class="text-dark fw-bold">Forgot password ?</a></p>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-lg-12 mb-0">
                                            <div class="d-grid">
                                                <button class="btn btn-primary">Sign in</button>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-12 text-center">
                                            <p class="mb-0 mt-3"><small class="text-dark me-2">Don't have an account ?</small> <a href="auth-cover-signup.html" class="text-dark fw-bold">Sign Up</a></p>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="offcanvas-footer p-4 border-top text-center">
                <ul class="list-unstyled social-icon social mb-0">
                    <!-- <li class="list-inline-item mb-0"><a href="#" target="_blank" class="rounded"><i class="uil uil-shopping-cart align-middle" title="Buy Now"></i></a></li> -->
                    <li class="list-inline-item mb-0"><a href="#" target="_blank" class="rounded"><i class="uil uil-dribbble align-middle" title="dribbble"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="#" target="_blank" class="rounded"><i class="uil uil-behance align-middle" title="behance"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="#" target="_blank" class="rounded"><i class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="#" target="_blank" class="rounded"><i class="uil uil-instagram align-middle" title="instagram"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="#" target="_blank" class="rounded"><i class="uil uil-twitter align-middle" title="twitter"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="mailto:support@hiba.in" class="rounded"><i class="uil uil-envelope align-middle" title="email"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="#" target="_blank" class="rounded"><i class="uil uil-globe align-middle" title="website"></i></a></li>
                </ul><!--end icon-->
            </div>
        </div>
        <!-- Offcanvas End -->
        <!-- Switcher Start -->
        <a href="javascript:void(0)" class="card switcher-btn shadow-md text-primary z-index-1 d-md-inline-flex d-none" data-bs-toggle="offcanvas" data-bs-target="#switcher-sidebar">
            <i class="mdi mdi-cog mdi-24px mdi-spin align-middle"></i>
        </a>

        <div class="offcanvas offcanvas-start shadow border-0" tabindex="-1" id="switcher-sidebar" aria-labelledby="offcanvasLeftLabel">
            <div class="offcanvas-header p-4 border-bottom">
                <h5 id="offcanvasLeftLabel" class="mb-0">
                    <img src="{{asset('assets/landing/images/logo-dark.png')}}" height="24" class="light-version" alt="">
                    <img src="{{asset('assets/landing/images/logo-light.png')}}" height="24" class="dark-version" alt="">
                </h5>
                <button type="button" class="btn-close d-flex align-items-center text-dark" data-bs-dismiss="offcanvas" aria-label="Close"><i class="uil uil-times fs-4"></i></button>
            </div>
            <div class="offcanvas-body p-4 pb-0">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center">
                            <h6 class="fw-bold">Select your color</h6>
                            <ul class="pattern mb-0 mt-3">
                                <li>
                                    <a class="color-list rounded color1" href="javascript: void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Primary" onclick="setColorPrimary()"></a>
                                </li>
                                <li>
                                    <a class="color-list rounded color2" href="javascript: void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Green" onclick="setColor('green')"></a>
                                </li>
                                <li>
                                    <a class="color-list rounded color3" href="javascript: void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Yellow" onclick="setColor('yellow')"></a>
                                </li>
                            </ul>
                        </div>
                        <div class="text-center mt-4 pt-4 border-top">
                            <h6 class="fw-bold">Theme Options</h6>

                            <ul class="text-center style-switcher list-unstyled mt-4">
                                <li class="d-grid"><a href="javascript:void(0)" class="rtl-version t-rtl-light" onclick="setTheme('style-rtl')"><img src="{{asset('assets/landing/images/demos/rtl.png')}}" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 240px;" alt=""><span class="text-dark fw-medium mt-3 d-block">RTL Version</span></a></li>
                                    <li class="d-grid"><a href="javascript:void(0)" class="ltr-version t-ltr-light" onclick="setTheme('style')"><img src="{{asset('assets/landing/images/demos/ltr.png')}}" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 240px;" alt=""><span class="text-dark fw-medium mt-3 d-block">LTR Version</span></a></li>
                                    <li class="d-grid"><a href="javascript:void(0)" class="dark-rtl-version t-rtl-dark" onclick="setTheme('style-dark-rtl')"><img src="{{asset('assets/landing/images/demos/dark-rtl.png')}}" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 240px;" alt=""><span class="text-dark fw-medium mt-3 d-block">RTL Version</span></a></li>
                                    <li class="d-grid"><a href="javascript:void(0)" class="dark-ltr-version t-ltr-dark" onclick="setTheme('style-dark')"><img src="{{asset('assets/landing/images/demos/dark.png')}}" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 240px;" alt=""><span class="text-dark fw-medium mt-3 d-block">LTR Version</span></a></li>
                                    <li class="d-grid"><a href="javascript:void(0)" class="dark-version t-dark mt-4" onclick="setTheme('style-dark')"><img src="{{asset('assets/landing/images/demos/dark.png')}}" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 240px;" alt=""><span class="text-dark fw-medium mt-3 d-block">Dark Version</span></a></li>
                                    <li class="d-grid"><a href="javascript:void(0)" class="light-version t-light mt-4" onclick="setTheme('style')"><img src="ass{{asset('assets/landing/images/demos/ltr.png')}}" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 240px;" alt=""><span class="text-dark fw-medium mt-3 d-block">Light Version</span></a></li>
                                <li class="d-grid"><a href="#" target="_blank" class="mt-4"><img src="{{asset('assets/landing/images/demos/admin.png')}}" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 240px;" alt=""><span class="text-dark fw-medium mt-3 d-block">Admin Dashboard</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="offcanvas-footer p-4 border-top text-center">
                <ul class="list-unstyled social-icon social mb-0">
                    <!-- <li class="list-inline-item mb-0"><a href="#" target="_blank" class="rounded"><i class="uil uil-shopping-cart align-middle" title="Buy Now"></i></a></li> -->
                    <li class="list-inline-item mb-0"><a href="#" target="_blank" class="rounded"><i class="uil uil-dribbble align-middle" title="dribbble"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="#" target="_blank" class="rounded"><i class="uil uil-behance align-middle" title="behance"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="#" target="_blank" class="rounded"><i class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="#" target="_blank" class="rounded"><i class="uil uil-instagram align-middle" title="instagram"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="#" target="_blank" class="rounded"><i class="uil uil-twitter align-middle" title="twitter"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="mailto:support@hiba.in" class="rounded"><i class="uil uil-envelope align-middle" title="email"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="#" target="_blank" class="rounded"><i class="uil uil-globe align-middle" title="website"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- Switcher End -->

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fs-5"><i data-feather="arrow-up" class="fea icon-sm icons align-middle"></i></a>
        <!-- Back to top -->

        <!-- javascript -->
        <!-- JAVASCRIPT -->
        <script src="{{asset('assets/landing/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- SLIDER -->
        <script src="{{asset('assets/landing/libs/tiny-slider/min/tiny-slider.js')}}"></script>
        <!-- Lightbox -->
        <script src="{{asset('assets/landing/libs/shufflejs/shuffle.min.js')}}"></script>
        <script src="{{asset('assets/landing/libs/tobii/js/tobii.min.js')}}"></script>
        <!-- Main Js -->
        <script src="{{asset('assets/libs/feather-icons/feather.min.js')}}"></script>
        <script src="{{asset('assets/landing/js/plugins.init.js')}}"></script><!--Note: All init (custom) js like tiny slider, counter, countdown, lightbox, gallery, swiper slider etc.-->
        <script src="{{asset('assets/landing/js/app.js')}}"></script><!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
    </body>
</html>