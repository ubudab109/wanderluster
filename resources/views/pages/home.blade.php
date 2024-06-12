@extends('master')
@section('content')
    <!-- Awal Header -->
    {{-- <header>
    <input type="checkbox" name="" id="toggler">
    <label for="toggler" class="fas-fa-bars"></label>
    <div class="kotak-logo">
        <a href="#" class="flogo"><img src="{{asset('assets/img/Logo Putih.svg')}}" alt=""></a>
    </div>

    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#service">Our Services</a>
        <a href="#destination">Destination</a>
        <a href="#service">Tour & Travel</a>
    </nav>
    <div class="contact">
        <a href="#contact"> Contact Us</a>
    </div>
    

    <!-- Akhir Header -->
</header> --}}

    <!--  Awal Home Section -->
    <section class="home" id="#home">
        <div class="content">
            <h3>Bali-Lombok</h3>
            <p>3 Days 2 Night</p>
            <a href="#" class="btn"> Book Now</a>
        </div>
    </section>
    <!-- Akhir Home Section -->


    <!-- About Section Start -->
    <section>
        <div class="row mt-3">
            <div class="col-xl-6 col-lg-12">
                <h1 class="heading">About Us</h1>
                <h2 class="moto mb-3">We bring you the world</h2>
                <p style="font-size: 18px;">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum error dicta nihil veritatis iusto,
                    similique
                    pariatur, sint fuga asperiores eaque blanditiis possimus culpa quis soluta? Beatae, saepe tempore
                    voluptates
                    labore ipsam molestias reiciendis adipisci quaerat perferendis, vero voluptatibus quo nesciunt corrupti
                    obcaecati laboriosam ratione officia, quibusdam temporibus doloribus totam aperiam!
                </p>
            </div>
        </div>
    </section>

    <section>
        <div class="titlepage">
            <h2>Enjoy your trip</h2>
            <p style="font-size: 18px">It is a long established fact that a reader will be distracted by the readable
                content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                normal distribution of letters,</p>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!--Bali Carousel-->
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <!--First Slide: Bali-->
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{ asset('assets/img/bali.png') }}" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Travel to Bali</h5>
                                <p>Explore With Us</p>
                            </div>
                        </div>
                        <!--Second Slide: Lombok-->
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('assets/img/lombok.png') }}" alt="Second slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>The Best Tours Lombok</h5>
                                <p>Explore With Us</p>
                            </div>
                        </div>
                        <!--Third Slide: GWK-->
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('assets/img/gwk.png') }}" alt="Third slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>See a Beauty GWK</h5>
                                <p>Explore With Us</p>
                            </div>
                        </div>
                    </div>
                    <!--Carousel Controls-->
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- end Bali -->

    <!-- Statistik Count -->
    <section class="statistics">
        <div class="container-fluid">
            <div class="statistic-banner">
                <div class="statistic-item">
                    <h3>1000+</h3>
                    <p>Happy Customers</p>
                </div>
                <div class="statistic-item">
                    <h3>500+</h3>
                    <p>Destinations</p>
                </div>
                <div class="statistic-item">
                    <h3>200+</h3>
                    <p>Successful Tours</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section End -->
@endsection
