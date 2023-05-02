@extends('layouts.app')
@section('content')
<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Services</h1>
            <a href="" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h5 text-white">Services</a>
        </div>
    </div>
</div>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Our Services</h5>
            <h1 class="mb-0">Professional Cleaning Services for Your Home or Office</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div style="background-image: url('{{ asset("public/img/Office.jpg") }}'); color:#fff" class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-shield-alt text-white"></i>
                    </div>
                    <h4 class="mb-3 text-info">Office Cleaning</h4>
                    <p class="m-0">Get your office cleaned by professional cleaners in the Toronto area.</p>
                    <a class="btn btn-lg btn-primary rounded" href="">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div style="background-image: url('{{ asset("public/img/restaurant.jpg") }}'); color:#fff" class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-chart-pie text-white"></i>
                    </div>
                    <h4 class="mb-3 text-info">Restaurant Cleaning</h4>
                    <p class="m-0">The best cleaning solution for restaurant spaces.</p>
                    <a class="btn btn-lg btn-primary rounded" href="">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div style="background-image: url('{{ asset("public/img/condo.jpg") }}'); color:#fff" class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-code text-white"></i>
                    </div>
                    <h4 class="mb-3 text-info">Condo Buildings Cleaning</h4>
                    <p class="m-0">Book your condo for a once-off or regular cleaning.</p>
                    <a class="btn btn-lg btn-primary rounded" href="">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div style="background-image: url('{{ asset("public/img/gym.jpg") }}'); color:#fff" class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fab fa-android text-white"></i>
                    </div>
                    <h4 class="mb-3 text-info">Gym Cleaning Cleaning</h4>
                    <p class="m-0">Give your gym a breeze with our cleaning services</p>
                    <a class="btn btn-lg btn-primary rounded" href="">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div style="background-image: url('{{ asset("public/img/retail.jpg") }}'); color:#fff" class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-search text-white"></i>
                    </div>
                    <h4 class="mb-3 text-info">Retail Stores Cleaning</h4>
                    <p class="m-0">Our team of experienced cleaners make sure your store is clean, sanitized, and ready for business.</p>
                    <a class="btn btn-lg btn-primary rounded" href="">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                    <h3 class="text-white mb-3">Call Us For Quote</h3>
                    <p class="text-white mb-3">Clita ipsum magna kasd rebum at ipsum amet dolor justo dolor est magna stet eirmod</p>
                    <h2 class="text-white mb-0">647 687 5042</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


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
                        <h4 class="text-primary mb-1">Bremah Nyeleti</h4>
                        <small class="text-uppercase">ICT officer</small>
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
                        <h4 class="text-primary mb-1">Sampa Nkonde</h4>
                        <small class="text-uppercase">Chef</small>
                    </div>
                </div>
                <div class="pt-4 pb-5 px-5">
                    My appartment was a bit messy after my trip but the cleaners from Picasso cleaning did an excellent job.I will definitely book other jobs with them.
                </div>
            </div>
            <div class="testimonial-item bg-light my-4">
                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                    <img class="img-fluid rounded" src="{{asset('public/img/testimonial-3.jpg')}}" style="width: 60px; height: 60px;" >
                    <div class="ps-4">
                        <h4 class="text-primary mb-1">Jack Chanda</h4>
                        <small class="text-uppercase">Teacher</small>
                    </div>
                </div>
                <div class="pt-4 pb-5 px-5">
                    Best cleaning service in the GTA! I highly recommend Picasso Cleaning to anyone looking to have their place cleaned for a fair price!
                </div>
            </div>
            <div class="testimonial-item bg-light my-4">
                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                    <img class="img-fluid rounded" src="{{ asset("public/img/testimonial-4.jpg")}}" style="width: 60px; height: 60px;" >
                    <div class="ps-4">
                        <h4 class="text-primary mb-1">Lucas Tembo</h4>
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

@endsection