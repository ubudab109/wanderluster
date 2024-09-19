@extends('master')
@section('content')

<div class="personalized-trips" style="padding-top: 100px;">
    <div class="container">
        <div class="titlepage-event">
            <h2>Event Trip</h2>
            <p style="text-align: center">Tailor your travel experience to your preferences and enjoy a unique journey crafted just for you.</p>
        </div>
        <div class="row">
            <!-- Card 1 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card event-trip">
                    <img src="{{ asset('assets/img/balipura.jpg') }}" alt="Trip Image 1" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Bali Event Trip</h5>
                        <p class="card-text">Plan a culture escape with your partner and create unforgettable moments in stunning destinations.</p>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card event-trip">
                    <img src="{{ asset('assets/img/prambanan.jpeg') }}" alt="Trip Image 2" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Prambanan Festival</h5>
                        <p class="card-text">Enjoy a fun-filled event trip with activities and attractions for all ages.</p>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card event-trip">
                    <img src="{{ asset('assets/img/bromo.jpg') }}" alt="Trip Image 3" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Bromo Trip</h5>
                        <p class="card-text">Embark on a adventure and explore Mountain Bromo destinations at your own pace.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
