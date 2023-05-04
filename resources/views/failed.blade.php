@extends('layouts.plain')
@section('content')

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5 mx-auto">
        <div class="col-12 justify-center">
            <img src="https://cdn3d.iconscout.com/3d/premium/thumb/failed-message-5309096-4440432.png?f=webp" >
        </div>
        <div class="col-12">
            <h5><b>Oops.. Your message failed to send.</b></h5>
            <h6 class="text-danger">Please check your internet connection and try again.</h6>
            <br>
            <a href="{{ url('/') }}" class="btn btn-primary ">Home</a>
        </div>
    </div>
</div>

@endsection