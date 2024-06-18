@extends('master')
@section('content')
    {{-- CONTENT DISINI --}}

    <section class="transport" id="ourservices">
        <div class="content-transport">
            <h3>Transportation</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta aspernatur nam ea sint nostrum alias, rerum
                voluptates quis fuga temporibus!</p>
            <a href="#" class="btn-transport">More Info</a>
        </div>
    </section>

    <div class="serve">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Our serve Transportation</h2>
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae a dolorum error sunt
                            tempora doloribus similique, architecto possimus voluptate perferendis.</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card-transportation">
                        <img src="{{ asset('assets/img/bali.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Plane</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-transportation">
                        <img src="{{ asset('assets/img/bali.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Ship</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-transportation">
                        <img src="{{ asset('assets/img/bali.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Train</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
