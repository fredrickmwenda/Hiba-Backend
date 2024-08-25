@extends('layouts.front')
@push('css')
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
        .hidden{
            display: none;
        }
    </style>
@endpush

@section('content')
    <!-- end header -->
    <section class="page-title-big-typography ipad-top-space-margin cover-background background-position-center-bottom position-relative half-section sm-py-0" style="background-image: url(images/demo-application-page-title-bg.jpg)">
        <div id="particles-style-01" class="h-100 position-absolute left-0px top-0 w-100" data-particle="true" data-particle-options='{"particles": {"number": {"value": 12,"density": {"enable": true,"value_area": 2000}},"color": {"value": ["#8f76f5", "#a65cef", "#c74ad2", "#e754a4", "#ff6472"]},"shape": {"type": "circle","stroke":{"width":0,"color":"#000000"}},"opacity": {"value": 0.5,"random": false,"anim": {"enable": false,"speed": 1,"sync": false}},"size": {"value": 8,"random": true,"anim": {"enable": false,"sync": true}},"line_linked":{"enable":false,"distance":0,"color":"#ffffff","opacity":0.4,"width":1},"move": {"enable": true,"speed":1,"direction": "right","random": false,"straight": false}},"interactivity": {"detect_on": "canvas","events": {"onhover": {"enable": false,"mode": "repulse"},"onclick": {"enable": false,"mode": "push"},"resize": true}},"retina_detect": false}'></div>
        <div class="container">
            <div class="row align-items-center justify-content-center extra-very-small-screen">
                <div class="col-lg-6 col-md-8 position-relative text-center page-title-extra-large" data-anime='{ "el": "childs", "opacity": [0, 1], "rotateY": [-90, 0], "rotateZ": [-10, 0], "translateY": [80, 0], "translateZ": [50, 0], "staggervalue": 200, "duration": 900, "easing": "easeOutCirc" }'>
                    <h2 class="mb-10px fw-500">Application for every Loyalty Points Lover</h2>
                    <h1 class="mb-0 text-dark-gray fw-700 ls-minus-2px">About Program</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="p-0 overflow-hidden">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-7 position-relative text-center md-mb-30px" data-anime='{ "effect": "slide", "color": "#ffffff", "direction":"lr", "easing": "easeOutQuad", "delay":50}'>
                    <figure>
                        <div class="atropos" data-atropos>
                            <div class="atropos-scale">
                                <div class="atropos-rotate">
                                    <div class="atropos-inner">
                                        <img data-atropos-offset="5" src="{{ asset('assets/images/company/' . $companyProgram->company->logo) }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <figcaption class="position-absolute bottom-130px sm-bottom-100px xs-bottom-80px right-0px sm-right-minus-40px xs-right-minus-30px xs-w-80 z-index-9">
                            <img src="https://via.placeholder.com/427x240" class="animation-float" alt="">
                        </figcaption> -->
                    </figure>
                </div>
                <div class="col-lg-5 text-center text-lg-start ps-40px lg-ps-15px" data-anime='{ "el": "childs", "opacity": [0, 1], "rotateY": [-90, 0], "rotateZ": [-10, 0], "translateY": [80, 0], "translateZ": [50, 0], "staggervalue": 200, "duration": 900, "easing": "easeOutCirc" }'>
                    <div class="bg-base-color d-inline-block mb-20px fw-600 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-12">Hiba app</div>
                    <h3 class="fw-700 text-dark-gray ls-minus-1px w-90 xl-w-100">Perfect app to track your Loyalties</h3>
                    <p class="w-90 xs-w-100 mx-auto mx-lg-0">{{$companyProgram->description}}</p>
                    <div class="row row-cols-2 row-cols-2 counter-style-04 mb-40px md-mb-30px mt-20px justify-content-center justify-content-lg-start">
                        <!-- start counter item -->
                        <div class="col-auto col-sm-4">
                            <h2 class="vertical-counter d-inline-flex alt-font text-dark-gray fw-800 mb-0 ls-minus-3px" data-to="480"></h2>
                            <span class="d-block alt-font fw-600 lh-18 text-dark-gray">User reviews</span>
                        </div>
                        <!-- end counter item -->
                        <!-- start counter item -->
                        <div class="col-auto col-lg-auto col-sm-4">
                            <h2 class="vertical-counter d-inline-flex alt-font text-dark-gray fw-800 mb-0 ls-minus-3px" data-to="269"></h2>
                            <span class="d-block alt-font fw-600 lh-18 text-dark-gray">Awards winning</span>
                        </div>
                        <!-- end counter item -->
                    </div>
                    <a href="#" class="btn btn-large btn-rounded btn-dark-gray btn-box-shadow">Download now</a>
                </div>
            </div>
            <div class="row justify-content-center align-items-center mt-1 md-mt-7 sm-mt-10 mb-8" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 250, "easing": "easeOutQuad" }'>
                <div class="col-12 text-center align-items-center">
                    <div class="bg-white border border-1 border-color-extra-medium-gray box-shadow-extra-large fw-800 text-dark-gray text-uppercase border-radius-30px ps-20px pe-15px fs-12 me-10px xs-m-10px d-inline-block align-middle">hurray</div>
                    <div class="text-dark-gray d-block d-sm-inline-block align-middle fs-18 fw-600 ls-minus-05px">Join the <span class="fw-800 text-decoration-line-bottom">10000+</span> people trusting  hiba application.</div>
                </div>
            </div>

        </div>
    </section>
    <!-- start section -->
    <section class="section bg-light" id="testimonial">
        <div class="container">
            <div class="row">
                <!-- Form Column -->
                <div class="col-md-6">
                    <form id="choiceForm">
                        <label>
                            <input type="radio" name="accountChoice" value="account" id="accountRadio"> I have an account
                        </label>
                        <label>
                            <input type="radio" name="accountChoice" value="noAccount" id="noAccountRadio"> I don't have an account
                        </label>
                    </form>
                    <form id="numberChecker" class="hidden">
                        <div class="form-group">
                            <label for="phone_number">Phone Number::</label>
                            <input type="number" class="form-control" id="phone_number" name="phone_number" required>
                        </div>
                        <button type="submit" class="btn btn-medium btn-rounded btn-dark-gray btn-box-shadow mt-2">Submit</button>
                    </form>
                    <form id="registrationForm" class="hidden">
                    <h4 class="fw-800 text-dark-gray ls-minus-1px">Enroll Program {{$companyProgram->name}} now!</h4>
                        
                            <div class="form-group">
                                <label for="customer_name">Customer Name:</label>
                                <input type="text" class="form-control" id="customer_name" name="customer_name" required>
                            </div>
                            <div class="form-group">
                                <label for="phone_number">Phone Number:</label>
                                <input type="number" class="form-control" id="phone_number" name="phone_number" required>
                            </div>
        
                            <button type="submit" class="btn btn-medium btn-rounded btn-dark-gray btn-box-shadow mt-2">Submit</button>
                    </form>
                </div>

                <!-- QR Code Column -->
                <div class="col-md-6">
                    <h2 class="mb-0 text-dark-gray fw-700 ls-minus-2px" style="">QR Code</h2>
                    
                    <div class="qr-code">
                        @if ($companyProgram->qr_code)
                        {!! QrCode::size(200)->errorCorrection('L')->generate($companyProgram->qr_code) !!}
                        @else
                        <p>No QR Code available</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end section -->


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
                    <h3 class="fw-800 text-dark-gray ls-minus-1px">Download Hiba app now!</h3>
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
    @endsection

    @push('scripts')
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
            const accountRadio = document.getElementById('accountRadio');
            const noAccountRadio = document.getElementById('noAccountRadio');
            const loginForm = document.getElementById('numberChecker');
            const registrationForm = document.getElementById('registrationForm');
            const successMessage = document.getElementById('successMessage');

            accountRadio.addEventListener('change', () => {
                if (accountRadio.checked) {
                    loginForm.classList.remove('hidden');
                    registrationForm.classList.add('hidden');
                }
            });

            noAccountRadio.addEventListener('change', () => {
                if (noAccountRadio.checked) {
                    registrationForm.classList.remove('hidden');
                    loginForm.classList.add('hidden');
                }
            });

            registrationForm.addEventListener('submit', async (event) => {
                event.preventDefault(); // Prevent default form submission

                const formData = new FormData(form);
                localStorage.setItem('customer_name', formData.get('customer_name'));
                localStorage.setItem('phone_number', formData.get('phone_number'));
                localStorage.setItem('program_id', formData.get('program_id'));
                // localStorage.setItem('program_details', formData.get('program_details'));

                try {
                    const response = await fetch('{{ route("companyProgram.submit") }}', {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    });

                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }

                    const result = await response.json();

                    if (result.success) {
                        successMessage.style.display = 'block';
                        // Optionally, you can keep the form data if needed
                        // form.reset(); // Uncomment if you want to clear the form after submission
                    } else {
                        // Handle form errors if needed
                        alert('An error occurred');
                    }
                } catch (error) {
                    console.error('Error:', error);
                    alert('An error occurred');
                }
            });

            loginForm.addEventListener('submit', async (event) => {
                event.preventDefault();

                const formData = new FormData(loginForm);

                localStorage.setItem('phone_number', formData.get('phone_number'));

                // Add logic for handling login form submission if needed
            });
        });
    </script>
@endpush