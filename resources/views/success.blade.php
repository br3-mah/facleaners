@extends('layouts.plain')
@section('content')

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5 mx-auto">
        <div class="col-12 justify-center">
            <img src="https://cdn.dribbble.com/users/1097272/screenshots/10744485/media/fbd89f6862b321afa9473905e71bbb86.png?compress=1&resize=400x300&vertical=top" >
        </div>
        <div class="col-12">
            <h5><b>Your message has been sent successfully.</b></h5>
            <h6 class="text-success">We'll get right back to you for more details, please check your <span style="color:rgb(0, 119, 255)">email</span>.</h6>
            <br>
            <br>
            <a href="{{ url('/') }}" class="btn btn-primary ">Home</a>
        </div>
    </div>
</div>

@endsection