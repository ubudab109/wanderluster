@extends('master')
@section('content')

<div class="header-exhibition" style="padding-top: 100px;">
    <div class="container text-center">
        <h1>Exhibition</h1>
        <p class="lead">Wanderluster Exhibition offering</p>
    </div>
</div>

<section class="destination-section">
    <div class="container">
        <div class="text-desc">
            <p>Join us for the ultimate global travel exhibition, where destinations come to life and inspire your next adventure.</p>
        </div>
        <div class="timeline-container">
            <h1 class="timeline-title"><span class="timeline-navy-blue">EXPLORE OUR</span> <span class="timeline-red">EXHIBITION</span></h1>
            </div>

            
            <div class="row">
                <!-- Destination 1 -->
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="destination-item">
                        <div class="destination-image">
                            <img src="{{ asset('assets/img/bali.png') }}" alt="Destination Image 1">
                    </div>
                    <div class="destination-info">
                        <h3 class="destination-title">Bali, Indonesia</h3>
                        <p class="destination-description">Experience the beauty and culture of this amazing location.</p>
                    </div>
                </div>
            </div>
            
            <!-- Destination 2 -->
            <div class="col-lg-4 col-md-12 mb-4">
                <div class="destination-item">
                    <div class="destination-image">
                        <img src="{{ asset('assets/img/petronas.jpg') }}" alt="Destination Image 2">
                    </div>
                    <div class="destination-info">
                        <h3 class="destination-title">Kuala Lumpur, Malaysia</h3>
                        <p class="destination-description">Discover the stunning landmarks and Luxury Building.</p>
                    </div>
                </div>
            </div>

            <!-- Destination 3 -->
            <div class="col-lg-4 col-md-12 mb-4">
                <div class="destination-item">
                    <div class="destination-image">
                        <img src="{{ asset('assets/img/marinabay.jpg') }}" alt="Destination Image 3">
                    </div>
                    <div class="destination-info">
                        <h3 class="destination-title">Marina Bay Sands, Singapore</h3>
                        <p class="destination-description">Feel together the landmark of Singapore.</p>
                    </div>
                </div>
            </div>
        </div>
            
            <!-- Add more destinations as needed -->
            
        </div>
    </div>
</section>

<script>
    document.querySelectorAll('.timeline-chevron-down').forEach(function(chevron) {
    chevron.addEventListener('click', function() {
        const timelineItem = this.closest('.timeline-item');
        timelineItem.classList.toggle('active');
    });
});

</script>

@endsection
