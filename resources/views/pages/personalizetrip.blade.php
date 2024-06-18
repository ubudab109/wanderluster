@extends('master')
@section('content')

<div class="personalized-trips" style="padding-top: 100px;">
    <div class="container">
        <div class="titlepage">
            <h2>Personalized Trips</h2>
            <p style="text-align: center">Tailor your travel experience to your preferences and enjoy a unique journey crafted just for you.</p>
        </div>
        <div class="row">
            <!-- Card 1 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card card-trip">
                    <img src="{{ asset('assets/img/bali.png') }}" alt="Trip Image 1" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Romantic Getaway</h5>
                        <p class="card-text">Plan a romantic escape with your partner and create unforgettable moments in stunning destinations.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card card-trip">
                    <img src="{{ asset('assets/img/bali.png') }}" alt="Trip Image 2" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Family Adventure</h5>
                        <p class="card-text">Enjoy a fun-filled family trip with activities and attractions for all ages.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card card-trip">
                    <img src="{{ asset('assets/img/bali.png') }}" alt="Trip Image 3" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Solo Expedition</h5>
                        <p class="card-text">Embark on a solo adventure and explore new destinations at your own pace.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
