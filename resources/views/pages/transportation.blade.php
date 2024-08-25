@extends('master')
@section('content')

    <section class="transport" id="ourservices">
        <div class="content-transport">
            <h3>Transportation</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta aspernatur nam ea sint nostrum alias, rerum
                voluptates quis fuga temporibus!</p>
            <a href="#" class="btn-transport">More Info</a>
        </div>
    </section>

    <section class="transportation">
        <div class="center-text">
            <h2>Our Transportation Serve</h2>
        </div>

        <div class="transportation-content">
            <div class="box">
                <img src="{{ asset('assets/img/plane.jpg') }}" alt="">
                <h6>Planes</h6>
                <h4>More than 10+ Air Transportation</h4>
            </div>

            <div class="box">
                <img src="{{ asset('assets/img/car.jpg') }}" alt="">
                <h6 class="khusus">Cars</h6>
                <h4 class="khusus-h4">Highest quality transportation</h4>
            </div>

            <div class="box">
                <img src="{{ asset('assets/img/train.jpg') }}" alt="">
                <h6>Trains</h6>
                <h4>Enjoy domestic travel with Trains</h4>
            </div>


        </div>

        <div class="center-textt">
            <h2>Discover the Ease of Travel <br> Our Premium Transportation Services</h2>
            <h5>Embark on your next journey with confidence and comfort by choosing our top-tier transportation services. Whether you're planning a family vacation, a business trip, or a solo adventure, we are dedicated to providing you with a seamless and enjoyable travel experience.</h5>
            <div class="button">
                <a href="#">Book Now</a>
            </div>
        </div>


    </section>

   
    
@endsection
