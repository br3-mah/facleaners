<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>FA Cleaners | Making your space shine</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('public/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/lib/animate/animate.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('public/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('public/css/style.css') }}" rel="stylesheet">
    <style>
        .modal-window {
            position: fixed;
            background-color: rgba(255, 255, 255, 0.25);
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 999;
            visibility: hidden;
            opacity: 0;
            pointer-events: none;
            transition: all 0.3s;
        }
        .modal-window:target {
            visibility: visible;
            opacity: 1;
            pointer-events: auto;
        }
        .modal-window > div {
            width: 400px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 2em;
            background: white;
        }
        .modal-window header {
            font-weight: bold;
        }
        .modal-window h1 {
            font-size: 150%;
            margin: 0 0 15px;
        }
        .modal-close {
            color: #aaa;
            line-height: 50px;
            font-size: 80%;
            position: absolute;
            right: 0;
            text-align: center;
            top: 0;
            width: 70px;
            text-decoration: none;
        }
        .modal-close:hover {
            color: black;
        }
        /* Demo Styles */
        html, body {
            height: 100%;
        }
        html {
            font-size: 18px;
            line-height: 1.4;
        }
        .modal-window > div {
            border-radius: 1rem;
        }
        .modal-window div:not(:last-of-type) {
            margin-bottom: 15px;
        }
        .logo {
            max-width: 150px;
            display: block;
        }
 
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>1276 Islington Avenue, M9A3J9, Etobicoke.</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>647 687 5042</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>Info@facleaners.ca</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="{{ url('/');}}" class="navbar-brand p-0">
                <h1 class="m-0"><i class="fa fa-mop me-2"></i>FA Cleaners</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{url('/')}}" class="nav-item nav-link active">Home</a>
                    <a href="{{route('about-us')}}" class="nav-item nav-link">About</a>
                    <a href="{{route('services')}}" class="nav-item nav-link">Services</a>
                 
                    {{-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="price.html" class="dropdown-item">Pricing Plan</a>
                            <a href="feature.html" class="dropdown-item">Our features</a>
                            <a href="team.html" class="dropdown-item">Team Members</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="quote.html" class="dropdown-item">Free Quote</a>
                        </div>
                    </div> --}}
                    <a href="{{route('contact-us')}}" class="nav-item nav-link">Contact</a>
                </div>
                <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
                <a href="#facleaners-quote" class="btn btn-primary py-2 px-4 ms-3">Get Quote</a>
            </div>
        </nav>

        
    </div>
    <!-- Navbar & Carousel End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <main class="">
        @yield('content')
    </main>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 footer-about">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                        <a href="index.html" class="navbar-brand">
                            <h1 class="m-0 text-white"><i class="fa fa-user-tie me-2"></i>FA Cleaners</h1>
                        </a>
                        <p class="mt-3 mb-4">We Take Care of the Cleaning, You Take Care of Your Life</p>
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                                <button class="btn btn-dark">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Get In Touch</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0">1276 Islington Avenue, M9A3J9, Etobicoke</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <a href="mailto:Info@facleaners.ca" class="mb-0">Info@facleaners.ca</a>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">647 687 5042</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            {{-- <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Quick Links</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Meet The Team</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                                <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                            </div> --}}
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Popular Links</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="{{url('/')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                                <a class="text-light mb-2" href="{{route('about-us')}}"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                                <a class="text-light mb-2" href="{{route('services')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                                {{-- <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Meet The Team</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a> --}}
                                <a class="text-light" href="{{route('contact-us')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">facleaners - 2023</a>. All Rights Reserved. 
						
						<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
						{{-- Designed by <a class="text-white border-bottom" href="https://htmlcodex.com">HTML Codex</a></p> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

    <div id="facleaners-quote" class="modal-window">
        
        <div class="pt-2">
            <a href="#" title="Close" class="modal-close">Close</a>
            <h5 class="py-3">Receive a free quote</h5>
            <form action="{{route('send-message')}}" method="post">
                @csrf
                <div class="row g-3">
                    <div class="col-xl-12">
                        <input name="names" type="text" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;">
                    </div>
                    <div class="col-12">
                        <input name="email" type="email" class="form-control bg-light border-0" placeholder="Your Email" style="height: 55px;">
                    </div>
                    <div class="col-12">
                        <select name="subject" class="form-select bg-light border-0" style="height: 55px;">
                            <option selected>Select A Service</option>
                            <option value="Office Cleaning">Office Cleaning</option>
                            <option value="Restaurant Cleaning">Restaurant Cleaning</option>
                            <option value="Gym Cleaning">Gym Cleaning</option>
                            <option value="House/Condo Cleaning">House/Condo Cleaning</option>
                            <option value="Retail Store Cleaning">Retail Store Cleaning</option>
                            <option value="Other Cleaning">Other Cleaning</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <textarea title="Mention the time and date our services are needed if neccessary" name="message" class="form-control bg-light border-0" rows="3" placeholder="Message"></textarea>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-dark w-100 py-3" type="submit">Request A Quote</button>
                    </div>
                </div>
            </form>
            <a href="https://chrome.google.com/webstore/detail/chroma/pkgejkfioihnchalojepdkefnpejomgn?utm_campaign=chromapromo&utm_source=codepen.io" target="_blank">
        
            {{-- <svg class="logo" width="244" height="52" viewBox="0 0 244 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M25.6002 0.000182857V25.6002H51.2002C51.2002 18.8105 48.503 12.2992 43.7019 7.49824C38.9012 2.69714 32.3895 0 25.6 0L25.6002 0.000182857Z" fill="#F6BAC1" />
                <path d="M0.000182757 0.000182857V25.6002H25.6002C25.6002 18.8105 22.9031 12.2992 18.102 7.49824C13.3012 2.69714 6.78949 0 0 0L0.000182757 0.000182857Z" fill="#016B55" />
                <path d="M25.6002 25.6003V51.2003H51.2002C51.2002 44.4106 48.503 37.8993 43.7019 33.0983C38.9012 28.2972 32.3895 25.6001 25.6 25.6001L25.6002 25.6003Z" fill="#F39202" />
                <path d="M25.6001 38.4001C25.6001 45.4694 19.8694 51.2001 12.8001 51.2001C5.73086 51.2001 0.00012207 45.4694 0.00012207 38.4001C0.00012207 31.3308 5.73086 25.6001 12.8001 25.6001C19.8694 25.6001 25.6001 31.3308 25.6001 38.4001Z" fill="#68B5D8" />
                <path d="M97.7537 32.9839L96.8897 39.0319C95.6417 39.8639 94.3137 40.5039 92.9057 40.9519C91.4977 41.3679 90.0577 41.5759 88.5857 41.5759C84.9377 41.5759 81.9617 40.4079 79.6577 38.0719C77.3537 35.7359 76.2017 32.6799 76.2017 28.9039C76.2017 25.2559 77.4177 22.2319 79.8497 19.8319C82.3137 17.3999 85.4177 16.1839 89.1617 16.1839C90.7297 16.1839 92.1697 16.4079 93.4817 16.8559C94.7937 17.2719 96.0417 17.9439 97.2257 18.8719V25.2559H97.1297C95.6897 23.8799 94.3457 22.8879 93.0977 22.2799C91.8497 21.6399 90.5857 21.3199 89.3057 21.3199C87.1937 21.3199 85.4337 22.0399 84.0257 23.4799C82.6497 24.9199 81.9617 26.7119 81.9617 28.8559C81.9617 31.0639 82.6177 32.8719 83.9297 34.2799C85.2737 35.6879 86.9857 36.3919 89.0657 36.3919C90.4417 36.3919 91.8977 36.0879 93.4337 35.4799C94.9697 34.8399 96.3777 33.9919 97.6577 32.9359L97.7537 32.9839Z" fill="black" />
                <path d="M114.754 21.2719C113.666 21.2719 112.642 21.5279 111.682 22.0399C110.754 22.5519 109.65 23.4479 108.37 24.7279V40.9999H102.706V6.34387L108.37 4.56787V21.0799C109.65 19.3839 110.946 18.1519 112.258 17.3839C113.602 16.6159 115.106 16.2319 116.77 16.2319C119.33 16.2319 121.362 17.0799 122.866 18.7759C124.402 20.4719 125.17 22.7599 125.17 25.6399V40.9999H119.458V26.5039C119.458 24.8399 119.042 23.5599 118.21 22.6639C117.41 21.7359 116.258 21.2719 114.754 21.2719Z" fill="black" />
                <path d="M145.441 22.3759C144.065 22.3759 142.705 22.6639 141.361 23.2399C140.017 23.7839 138.497 24.7279 136.801 26.0719V40.9999H131.137V17.3359L136.753 16.3759V22.5199C138.545 20.1199 140.033 18.4879 141.217 17.6239C142.401 16.7599 143.649 16.3279 144.961 16.3279C145.217 16.3279 145.457 16.3439 145.681 16.3759C145.905 16.4079 146.177 16.4559 146.497 16.5199L146.881 22.5199C146.625 22.4559 146.385 22.4239 146.161 22.4239C145.937 22.3919 145.697 22.3759 145.441 22.3759Z" fill="black" />
                <path d="M161.795 41.6719C158.051 41.6719 154.963 40.4399 152.531 37.9759C150.131 35.5119 148.931 32.4879 148.931 28.9039C148.931 25.3519 150.163 22.3279 152.627 19.8319C155.091 17.3039 158.179 16.0399 161.891 16.0399C165.667 16.0399 168.755 17.2719 171.155 19.7359C173.555 22.1679 174.755 25.1759 174.755 28.7599C174.755 32.3439 173.523 35.3999 171.059 37.9279C168.595 40.4239 165.507 41.6719 161.795 41.6719ZM169.091 28.7599C169.091 26.5519 168.403 24.7119 167.027 23.2399C165.683 21.7679 163.971 21.0319 161.891 21.0319C159.779 21.0319 158.035 21.7839 156.659 23.2879C155.283 24.7919 154.595 26.6639 154.595 28.9039C154.595 31.1439 155.267 33.0159 156.611 34.5199C157.987 35.9919 159.715 36.7279 161.795 36.7279C163.907 36.7279 165.651 35.9759 167.027 34.4719C168.403 32.9359 169.091 31.0319 169.091 28.7599Z" fill="black" />
                <path d="M190.845 21.2719C189.853 21.2719 188.925 21.5119 188.061 21.9919C187.197 22.4719 186.189 23.3039 185.037 24.4879V40.9999H179.373V17.3359L184.989 16.3759V20.8879C186.237 19.2559 187.485 18.0719 188.733 17.3359C190.013 16.5999 191.421 16.2319 192.957 16.2319C194.685 16.2319 196.189 16.6959 197.469 17.6239C198.781 18.5199 199.725 19.7839 200.301 21.4159C201.645 19.5919 202.989 18.2799 204.333 17.4799C205.677 16.6479 207.181 16.2319 208.845 16.2319C211.309 16.2319 213.261 17.0799 214.701 18.7759C216.173 20.4719 216.909 22.7599 216.909 25.6399V40.9999H211.245V26.5039C211.245 24.8719 210.845 23.5919 210.045 22.6639C209.277 21.7359 208.189 21.2719 206.781 21.2719C205.789 21.2719 204.845 21.5279 203.949 22.0399C203.085 22.5199 202.077 23.3359 200.925 24.4879C200.957 24.6159 200.973 24.7599 200.973 24.9199C200.973 25.0799 200.973 25.3199 200.973 25.6399V40.9999H195.309V26.5039C195.309 24.8719 194.909 23.5919 194.109 22.6639C193.341 21.7359 192.253 21.2719 190.845 21.2719Z" fill="black" />
                <path d="M243.442 26.5999V40.4239L237.874 41.3839V37.3999C236.178 38.7439 234.562 39.7519 233.026 40.4239C231.522 41.0639 230.034 41.3839 228.562 41.3839C226.418 41.3839 224.69 40.7919 223.378 39.6079C222.098 38.4239 221.458 36.8399 221.458 34.8559C221.458 32.1359 222.802 30.1039 225.49 28.7599C228.21 27.4159 232.322 26.7119 237.826 26.6479C237.794 24.8559 237.33 23.5119 236.434 22.6159C235.57 21.6879 234.306 21.2239 232.642 21.2239C231.298 21.2239 229.906 21.5119 228.466 22.0879C227.058 22.6319 225.618 23.4479 224.146 24.5359L224.05 24.4879L225.058 18.7279C226.402 17.8959 227.762 17.2879 229.138 16.9039C230.546 16.4879 232.05 16.2799 233.65 16.2799C236.818 16.2799 239.234 17.1599 240.898 18.9199C242.594 20.6799 243.442 23.2399 243.442 26.5999ZM226.882 34.4239C226.882 35.2239 227.154 35.8639 227.698 36.3439C228.274 36.7919 229.074 37.0159 230.098 37.0159C231.058 37.0159 232.162 36.7919 233.41 36.3439C234.69 35.8959 236.162 35.2239 237.826 34.3279V29.8159C234.146 30.0719 231.394 30.5679 229.57 31.3039C227.778 32.0399 226.882 33.0799 226.882 34.4239Z" fill="black" />
            </svg> --}}
        </div>
    </div>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('public/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('public/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('public/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('public/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('public/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('public/js/main.js')}}"></script>
</body>

</html>