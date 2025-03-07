@extends('layouts.app')

@section('content')
<div class="homepage">
    <div class="d-flex align-items-center" style="height: 60%;">
        <div class="container-fluid">
            @auth
                @if (auth()->user()->is_admin)
                    <h1 class="heading1 text-yellow">Welcome, Admin! Let's get to work.</h1>
                    <a href="{{ route('admin.dashboard') }}" class="btn custom-btn text-white px-4 py-2 text-uppercase">Get Started</a>
                    <a href="{{ route('admin.dashboard') }}" class="btn"><img src="{{ asset('assets/arrow.png') }}" alt=""> </a>
                @else
                    <h1 class="heading1 text-yellow">Book your online appointment now!</h1>
                    <p class="fs-5 col-3 mt-4 mb-5">
                        "Our online appointment booking platform offers a convenient way for busy car owners to schedule car
                        wash services anytime and anywhere without the hassle of physically visiting a car wash facility."
                    </p>
                    <a href="{{ route('requestform') }}" class="btn custom-btn text-white px-4 py-2 text-uppercase">Get Started</a>
                    <a href="{{ route('requestform') }}" class="btn"><img src="{{ asset('assets/arrow.png') }}" alt=""> </a>
                @endif
            @else
                <h1 class="heading1 text-yellow">Book your online appointment now!</h1>
                <p class="fs-5 col-3 mt-4 mb-5">
                    "Our online appointment booking platform offers a convenient way for busy car owners to schedule car
                    wash services anytime and anywhere without the hassle of physically visiting a car wash facility."
                </p>
                <a href="{{ route('creation') }}" class="btn custom-btn text-white px-4 py-2 text-uppercase">Get Started</a>
                <a href="{{ route('creation') }}" class="btn"><img src="{{ asset('assets/arrow.png') }}" alt=""> </a>
            @endauth
        </div>
    </div>
</div>
@endsection

<style>
body {
    background: url("../assets/homewp.png") no-repeat center center fixed !important; /* Replace "../assets/login.jpeg" with the path to your desired image */
    background-size: cover !important; /* Adjust the background image size to cover the entire body */
}
</style>
