@extends('master')
@section('content')

<!-- Headline Section -->
<div class="headline-section" style="position: relative; padding-top: 100px; background-color: #f8f9fa;">
    <div class="overlay"></div>
    <img src="{{ asset('assets/img/headline1.jpg') }}" class="img-fluid headline-img" alt="Headline Image">
    <div class="container">
        <div class="headline-content text-center">
            <h1>Welcome to Our Travel Agency</h1>
            <p>Your journey begins here. Discover amazing personalized trips, and unforgettable experiences.</p>
        </div>
    </div>
</div>

<div class="personalized-trips" style="padding-top: 30px;">
    <div class="container">
        <div class="titlepage-personalize">
            <h2>Personalized Trips</h2>
            <p class="text-center">Tailor your travel experience to your preferences and enjoy a unique journey crafted just for you.</p>
        </div>
        <div class="row">
            <!-- Card 1 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card card-trip">
                    <img src="{{ asset('assets/img/personal1.jpg') }}" alt="Trip Image 1" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Solo Expedition</h5>
                        <p class="card-text">Embark on a solo adventure and explore new destinations at your own pace</p>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card card-trip">
                    <img src="{{ asset('assets/img/personal2.jpg') }}" alt="Trip Image 2" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Family Adventure</h5>
                        <p class="card-text">Enjoy a fun-filled family trip with activities and attractions for all ages.</p>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card card-trip">
                    <img src="{{ asset('assets/img/personal3.jpg') }}" alt="Trip Image 3" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Crew Adventure</h5>
                        <p class="card-text">Gather your friends for an epic Crew Adventure. Experience thrilling activities.p</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
