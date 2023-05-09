@extends('layouts.app')
@section('content')
<div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="w-100" src="{{ asset('public/img/carousel-1.jpg')}}" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px;">
                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">Let us do the dirty work for you</h5>
                    <h1 class="display-1 text-white mb-md-4 animated zoomIn">Healthy Homes Start with Clean Spaces</h1>
                    <a  href="#facleaners-quote" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Free Quote</a>
                    <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="w-100" src="{{ asset('public/img/carousel-2.jpg')}}" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px;">
                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">Clean space, happy place</h5>
                    <h1 class="display-1 text-white mb-md-4 animated zoomIn">Cleaning That Fits Your Schedule</h1>
                    <a onclick="startRating()" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Free Quote</a>
                    <a href="#facleaners-quote" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<div class="container-fluid facts py-5 pt-lg-0">
    <div class="container py-5 pt-lg-0">
        <div class="row gx-0">
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                    <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                        <i class="fa fa-users text-primary"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-white mb-0">Happy Clients</h5>
                        <h1 class="text-white mb-0" data-toggle="counter-up">11</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                        <i class="fa fa-check text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-primary mb-0">Projects Done</h5>
                        <h1 class="mb-0" data-toggle="counter-up">17</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                    <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                        <i class="fa fa-award text-primary"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-white mb-0">Team Members</h5>
                        <h1 class="text-white mb-0" data-toggle="counter-up">28</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Facts Start -->


<!-- About Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase">About Us</h5>
                    <h1 class="mb-0">Cleaning Experts You Can Trust</h1>
                </div>
                <p class="mb-4">
                    At FA Cleaners, we are committed to providing high-quality cleaning services to our customers. Our team of experienced and dedicated cleaners are passionate about what they do and take pride in delivering outstanding results. We believe that a clean environment is essential to creating a healthy and happy home or workspace. That's why we go above and beyond to ensure that every surface is thoroughly cleaned, sanitized, and free from dirt and germs.</p>
                <div class="row g-0 mb-3">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Satisfaction Guarantee</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Flexible scheduling options</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Professional Staff</h5>
                        
                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>24/7 Support</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Eco-friendly cleaning products and methods</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Fair Prices</h5>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Call to ask any question</h5>
                        <h4 class="text-primary mb-0">647 687 5042</h4>
                    </div>
                </div>
                <a href="#facleaners-quote" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Request A Quote</a>
            </div>
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('public/img/service.jpg') }}" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Features Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Why Choose Us</h5>
            <h1 class="mb-0">Choosing Us Means Choosing Quality and Reliability</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-cubes text-white"></i>
                        </div>
                        <h4>It’s That Easy</h4>
                        <p class="mb-0">Click on Get Quote, select a type of service, specify date and time submit the form, and FA Cleaners Cleaning will be there for you!</p>
                    </div>
                    <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-white"></i>
                        </div>
                        <h4>Satisfaction Guaranteed</h4>
                        <p class="mb-0">If you aren’t satisfied, we’ll re-clean for free.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="{{ asset('public/img/us.jpg') }}" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-users-cog text-white"></i>
                        </div>
                        <h4>Professional Staff</h4>
                        <p class="mb-0">Our team members undergo strict background checks and are thoroughly screened.</p>
                    </div>
                    <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <h4>24/7 Support</h4>
                        <p class="mb-0">Our customer service is always ready to help</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features Start -->


<!-- Service Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Our Services</h5>
            <h1 class="mb-0">Custom IT Solutions for Your Successful Business</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div style="background-image: url('{{ asset("public/img/Office.jpg") }}'); color:#fff" class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-shield-alt text-white"></i>
                    </div>
                    <h4 class="mb-3 bg-white" style="color:#043c69; padding:4%; border-radius:2%; opacity:0.7">Office<br>Cleaning</h4>
                    <p class="m-0">Get your office cleaned by professional cleaners in the Toronto area.</p>
                    <a class="btn btn-lg btn-primary rounded" href="{{ route('services')}}">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div style="background-image: url('{{ asset("public/img/restaurant.jpg") }}'); color:#fff" class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-chart-pie text-white"></i>
                    </div>
                    <h4 class="mb-3 bg-white" style="color:#043c69; padding:4%; border-radius:2%; opacity:0.7">Restaurant<br>Cleaning</h4>
                    <p class="m-0">The best cleaning solution for restaurant spaces.</p>
                    <a class="btn btn-lg btn-primary rounded" href="{{ route('services')}}">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div style="background-image: url('{{ asset("public/img/condo.jpg") }}'); color:#fff" class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-code text-white"></i>
                    </div>
                    <h4 class="mb-3 bg-white" style="color:#043c69; padding:4%; border-radius:2%; opacity:0.7">Condo Buildings Cleaning</h4>
                    <p class="m-0">Book your condo for a once-off or regular cleaning.</p>
                    <a class="btn btn-lg btn-primary rounded" href="{{ route('services')}}">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div style="background-image: url('{{ asset("public/img/gym.jpg") }}'); color:#fff" class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fab fa-android text-white"></i>
                    </div>
                    <h4 class="mb-3 bg-white" style="color:#043c69; padding:4%; border-radius:2%; opacity:0.7">Gym Cleaning Cleaning</h4>
                    <p class="m-0">Give your gym a breeze with our cleaning services</p>
                    <a class="btn btn-lg btn-primary rounded" href="{{ route('services')}}">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div style="background-image: url('{{ asset("public/img/retail.jpg") }}'); background-size:fit; color:#fff" class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-search text-white"></i>
                    </div>
                    <h4 class="mb-3 bg-white" style="color:#043c69; padding:4%; border-radius:2%; opacity:0.7">Retail Stores Cleaning</h4>
                    <p class="m-0">Our team of experienced cleaners make sure your store is clean, sanitized, and ready for business.</p>
                    <a class="btn btn-lg btn-primary rounded" href="{{ route('services')}}">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                    <h3 class="text-white mb-3">Call Us For Quote</h3>
                    <p class="text-white mb-3">Looking for a cleaning service that delivers quality and affordability? Contact us today for a free quote and experience our top-notch service firsthand.</p>
                    <h2 class="text-white mb-0">647 687 5042</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- Pricing Plan Start -->
{{-- <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Pricing Plans</h5>
            <h1 class="mb-0">We are Offering Competitive Prices for Our Clients</h1>
        </div>
        <div class="row g-0">
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                <div class="bg-light rounded">
                    <div class="border-bottom py-4 px-5 mb-4">
                        <h4 class="text-primary mb-1">Basic Plan</h4>
                        <small class="text-uppercase">For Small Size Business</small>
                    </div>
                    <div class="p-5 pt-0">
                        <h1 class="display-5 mb-3">
                            <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>49.00<small
                                class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                        </h1>
                        <div class="d-flex justify-content-between mb-3"><span>HTML5 & CSS3</span><i class="fa fa-check text-primary pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Bootstrap v5</span><i class="fa fa-check text-primary pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Responsive Layout</span><i class="fa fa-times text-danger pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-2"><span>Cross-browser Support</span><i class="fa fa-times text-danger pt-1"></i></div>
                        <a href="" class="btn btn-primary py-2 px-4 mt-4">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                <div class="bg-white rounded shadow position-relative" style="z-index: 1;">
                    <div class="border-bottom py-4 px-5 mb-4">
                        <h4 class="text-primary mb-1">Standard Plan</h4>
                        <small class="text-uppercase">For Medium Size Business</small>
                    </div>
                    <div class="p-5 pt-0">
                        <h1 class="display-5 mb-3">
                            <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>99.00<small
                                class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                        </h1>
                        <div class="d-flex justify-content-between mb-3"><span>HTML5 & CSS3</span><i class="fa fa-check text-primary pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Bootstrap v5</span><i class="fa fa-check text-primary pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Responsive Layout</span><i class="fa fa-check text-primary pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-2"><span>Cross-browser Support</span><i class="fa fa-times text-danger pt-1"></i></div>
                        <a href="" class="btn btn-primary py-2 px-4 mt-4">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                <div class="bg-light rounded">
                    <div class="border-bottom py-4 px-5 mb-4">
                        <h4 class="text-primary mb-1">Advanced Plan</h4>
                        <small class="text-uppercase">For Large Size Business</small>
                    </div>
                    <div class="p-5 pt-0">
                        <h1 class="display-5 mb-3">
                            <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>149.00<small
                                class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                        </h1>
                        <div class="d-flex justify-content-between mb-3"><span>HTML5 & CSS3</span><i class="fa fa-check text-primary pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Bootstrap v5</span><i class="fa fa-check text-primary pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Responsive Layout</span><i class="fa fa-check text-primary pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-2"><span>Cross-browser Support</span><i class="fa fa-check text-primary pt-1"></i></div>
                        <a href="" class="btn btn-primary py-2 px-4 mt-4">Order Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Pricing Plan End -->


<!-- Quote Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase">Request A Quote</h5>
                    <h1 class="mb-0">Need A Free Quote? Please Feel Free to Contact Us</h1>
                </div>
                <div class="row gx-3">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                        <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>Reply within 24 hours</h5>
                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                        <h5 class="mb-4"><i class="fa fa-phone-alt text-primary me-3"></i>24 hrs telephone support</h5>
                    </div>
                </div>
                <p class="mb-4">We pride ourselves on our excellent customer service and our commitment to providing high-quality cleaning services at competitive prices. Contact us today to get started and let us help you achieve a clean, healthy, and inviting environment for your home or business.</p>
                <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Call to ask any question</h5>
                        <h4 class="text-primary mb-0">647 687 5042</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
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
                                <textarea name="message" class="form-control bg-light border-0" rows="3" placeholder="Message"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-dark w-100 py-3" type="submit">Request A Quote</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quote End -->


<!-- Testimonial Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Testimonial</h5>
            <h1 class="mb-0">What Our Clients Say About Our Cleaning Services</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
            <div class="testimonial-item bg-light my-4">
                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                    <img class="img-fluid rounded" src="{{ asset('public/img/testimonial-1.jpg')}}" style="width: 60px; height: 60px;" >
                    <div class="ps-4">
                        <h4 class="text-primary mb-1">Mary Jane</h4>
                        <small class="text-uppercase">Nurse</small>
                    </div>
                </div>
                <div class="pt-4 pb-5 px-5">
                    The cleaners from FA Cleaners did an amazing job cleaning my home. They are trustworthy, reliable, and definitely go the extra mile to make your home sparkling clean. So nice
                    to have friends over after work and know my house will be clean!
                </div>
            </div>
            <div class="testimonial-item bg-light my-4">
                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                    <img class="img-fluid rounded" src="{{ asset('public/img/testimonial-2.jpg')}}" style="width: 60px; height: 60px;" >
                    <div class="ps-4">
                        <h4 class="text-primary mb-1">Peter Jonathan</h4>
                        <small class="text-uppercase">Chef</small>
                    </div>
                </div>
                <div class="pt-4 pb-5 px-5">
                    My appartment was a bit messy after my trip but the cleaners from FA Cleaners cleaning did an excellent job.I will definitely book other jobs with them.
                </div>
            </div>
            <div class="testimonial-item bg-light my-4">
                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                    <img class="img-fluid rounded" src="{{asset('public/img/testimonial-3.jpg')}}" style="width: 60px; height: 60px;" >
                    <div class="ps-4">
                        <h4 class="text-primary mb-1">Jack Krestenesen</h4>
                        <small class="text-uppercase">Teacher</small>
                    </div>
                </div>
                <div class="pt-4 pb-5 px-5">
                    Best cleaning service in the GTA! I highly recommend FA Cleaners Cleaning to anyone looking to have their place cleaned for a fair price!
                </div>
            </div>
            <div class="testimonial-item bg-light my-4">
                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                    <img class="img-fluid rounded" src="{{ asset("public/img/testimonial-4.jpg")}}" style="width: 60px; height: 60px;" >
                    <div class="ps-4">
                        <h4 class="text-primary mb-1">Miriam Minchenkovic</h4>
                        <small class="text-uppercase">Shop owner</small>
                    </div>
                </div>
                <div class="pt-4 pb-5 px-5">
                    This team is very professional and delivers top class cleaning services.
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


<!-- Team Start -->
{{-- <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Team Members</h5>
            <h1 class="mb-0">Professional Stuffs Ready to Help Your Business</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                <div class="team-item bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{ asset('public/img/team-1.jpg')}}" alt="">
                        <div class="team-social">
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <h4 class="text-primary">Full Name</h4>
                        <p class="text-uppercase m-0">Designation</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                <div class="team-item bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{ asset('public/img/team-2.jpg')}}" alt="">
                        <div class="team-social">
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <h4 class="text-primary">Full Name</h4>
                        <p class="text-uppercase m-0">Designation</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                <div class="team-item bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{ asset('public/img/team-3.jpg')}}" alt="">
                        <div class="team-social">
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <h4 class="text-primary">Full Name</h4>
                        <p class="text-uppercase m-0">Designation</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Team End -->

<!-- Vendor Start -->
{{-- <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5 mb-5">
        <div class="bg-white">
            <div class="owl-carousel vendor-carousel">
                <img src="{{ asset('public/img/vendor-1.jpg')}}" alt="">
                <img src="{{ asset('public/img/vendor-2.jpg')}}" alt="">
                <img src="{{ asset('public/img/vendor-3.jpg')}}" alt="">
                <img src="{{ asset('public/img/vendor-4.jpg')}}" alt="">
                <img src="{{ asset('public/img/vendor-5.jpg')}}" alt="">
                <img src="{{ asset('public/img/vendor-6.jpg')}}" alt="">
                <img src="{{ asset('public/img/vendor-7.jpg')}}" alt="">
                <img src="{{ asset('public/img/vendor-8.jpg')}}" alt="">
                <img src="{{ asset('public/img/vendor-9.jpg')}}" alt="">
            </div>
        </div>
    </div>
</div> --}}
<!-- Vendor End -->

@endsection