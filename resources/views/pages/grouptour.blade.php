@extends('master')
@section('content')

<section class="group-tours page-group" id="group-tours" style="padding-top: 100px;">
    <div class="container">
        <div class="titlepage-group">
            <h2>Group Tours</h2>
            <p style="text-align: center">Discover the world with our expertly crafted group tours. Our tours are designed to offer you the best experiences, from cultural immersions to thrilling adventures. Whether you're traveling with friends, family, or fellow explorers, our group tours provide the perfect balance of comfort, adventure, and discovery.</p>
        </div>
        <div class="row">
            @foreach ($cards as $card)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card__image-container">
                            <img src="{{ asset($card['image']) }}" class="card-img-top" alt="{{ $card['title'] }}">
                            <div class="card__content">
                                <div class="card__content-inner">
                                    <div class="card__title">{{ $card['title'] }}</div>
                                    <div class="card__description">{{ $card['copy'] }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


@endsection
