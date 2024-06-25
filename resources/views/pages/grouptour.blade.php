@extends('master')
@section('content')

<section class="group-tours" id="group-tours" style="padding-top: 100px;">
    <div class="container">
        <div class="titlepage-group">
            <h2>Group Tours</h2>
            <p style="text-align: center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas explicabo fugit saepe voluptates laudantium enim, perspiciatis ullam sint possimus dolorum a itaque. Vero delectus laboriosam omnis doloremque officia voluptate dignissimos esse ex voluptatem eaque! Fugiat perspiciatis temporibus harum doloremque libero, illo suscipit maxime assumenda amet vero quis possimus ratione repellat..</p>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card-tour">
                    <img src="{{ asset('assets/img/bali.png') }}" class="card-img-top" alt="Tour 1">
                    <div class="card-body">
                        <h5 class="card-title">Adventure in Bali</h5>
                        <p class="card-text">Explore the beauty of Bali with our adventure group tour. Enjoy hiking, surfing, and cultural experiences.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-tour">
                    <img src="{{ asset('assets/img/bali.png') }}" class="card-img-top" alt="Tour 2">
                    <div class="card-body">
                        <h5 class="card-title">Cultural Tour in Yogyakarta</h5>
                        <p class="card-text">Immerse yourself in the rich culture and history of Yogyakarta. Visit temples, museums, and local markets.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-tour">
                    <img src="{{ asset('assets/img/bali.png') }}" class="card-img-top" alt="Tour 3">
                    <div class="card-body">
                        <h5 class="card-title">Nature Trip in Lombok</h5>
                        <p class="card-text">Discover the natural wonders of Lombok. Enjoy scenic landscapes, waterfalls, and pristine beaches.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
