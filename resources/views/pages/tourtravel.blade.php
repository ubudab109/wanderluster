@extends('master')

@section('content')

<div class="tour-travel-container" style="padding-top: 100px;">
    <div class="slide">
        <div class="item" style="background-image: url(/assets/img/pura.jpg);">
            <div class="content">
                <div class="name">Switzerland</div>
                <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                <button>See More</button>
            </div>
        </div>
        <div class="item" style="background-image: url(/assets/img/pura.jpg);">
            <div class="content">
                <div class="name">Indonesia</div>
                <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                <button>See More</button>
            </div>
        </div>
        <div class="item" style="background-image: url(/assets/img/pura.jpg);">
            <div class="content">
                <div class="name">Iceland</div>
                <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                <button>See More</button>
            </div>
        </div>
        <div class="item" style="background-image:url(/assets/img/pura.jpg);">
            <div class="content">
                <div class="name">Australia</div>
                <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                <button>See More</button>
            </div>
        </div>
        <div class="item" style="background-image: url(/assets/img/pura.jpg);">
            <div class="content">
                <div class="name">Netherlands</div>
                <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                <button>See More</button>
            </div>
        </div>
        <div class="item" style="background-image: url(/assets/img/pura.jpg);"> <div class="content">
                <div class="name">Ireland</div>
                <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                <button>See More</button>
            </div>
        </div>
    </div>

    <div class="button">
        <button class="prev"><i class="fa-solid fa-arrow-left" style="color: #fff"></i></button>
        <button class="next"><i class="fa-solid fa-arrow-right" style="color: #fff"></i></button>
    </div>
</div>


<div class="additional-content">
    <h2>Travel & Tours</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <ul>
        <li><a href="#">Destination 1</a></li>
        <li><a href="#">Destination 2</a></li>
        <li><a href="#">Destination 3</a></li>
        <li><a href="#">Destination 4</a></li>
        <li><a href="#">Destination 5</a></li>
    </ul>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        let next = document.querySelector('.next');
        let prev = document.querySelector('.prev');
    
        next.addEventListener('click', function() {
            let items = document.querySelectorAll('.item');
            document.querySelector('.slide').appendChild(items[0]);
        });
    
        prev.addEventListener('click', function() {
            let items = document.querySelectorAll('.item');
            document.querySelector('.slide').prepend(items[items.length - 1]);
        });
    });
    </script>

@endsection
