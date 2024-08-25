@extends('master')

@section('content')
<div class="slider">
    <div class="list">
        <div class="item active">
            <img src="{{ asset('assets/img/petronas.jpg') }}" alt="">
            <div class="content">
               <p style="color: white">Kuala Lumpur</p>
               <h2>Petronas Tower</h2> 
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, similique.</p>
            </div>
        </div>
        <div class="item">
            <img src="{{ asset('assets/img/petronas.jpg') }}" alt="">
            <div class="content">
               <p style="color: white">Kuala Lumpur</p>
               <h2>Petronas Tower</h2> 
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, similique.</p>
            </div>
        </div>
        <div class="item">
            <img src="{{ asset('assets/img/petronas.jpg') }}" alt="">
            <div class="content">
               <p style="color: white">Kuala Lumpur</p>
               <h2>Petronas Tower</h2> 
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, similique.</p>
            </div>
        </div>
        <div class="item">
            <img src="{{ asset('assets/img/petronas.jpg') }}" alt="">
            <div class="content">
               <p style="color: white">Kuala Lumpur</p>
               <h2>Petronas Tower</h2> 
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, similique.</p>
            </div>
        </div>
        <div class="item">
            <img src="{{ asset('assets/img/petronas.jpg') }}" alt="">
            <div class="content">
               <p style="color: white">Kuala Lumpur</p>
               <h2>Petronas Tower</h2> 
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, similique.</p>
            </div>
        </div>
    </div>
</div>

<!-- button arrows -->
<div class="arrows">
    <button id="prev"><</button>
    <button id="next">></button>
</div>

<!-- thumbnail -->
<div class="thumbnail">
    <div class="item active">
        <img src="{{ asset('assets/img/bali.png') }}">
        <div class="content">Name Slider</div>
    </div>
    <div class="item">
        <img src="{{ asset('assets/img/bali.png') }}">
        <div class="content">Name Slider</div>
    </div>
    <div class="item">
        <img src="{{ asset('assets/img/bali.png') }}">
        <div class="content">Name Slider</div>
    </div>
    <div class="item">
        <img src="{{ asset('assets/img/bali.png') }}">
        <div class="content">Name Slider</div>
    </div>
    <div class="item">
        <img src="{{ asset('assets/img/bali.png') }}">
        <div class="content">Name Slider</div>
    </div>
</div>

<script>
  let items = document.querySelectorAll('.slider .list .item');
let next = document.getElementById('next');
let prev = document.getElementById('prev');
let thumbnails = document.querySelectorAll('.thumbnail .item');

// config param
let countItem = items.length;
let itemActive = 0;
// event next click
next.onclick = function(){
    itemActive = itemActive + 1;
    if(itemActive >= countItem){
        itemActive = 0;
    }
    showSlider();
}
//event prev click
prev.onclick = function(){
    itemActive = itemActive - 1;
    if(itemActive < 0){
        itemActive = countItem - 1;
    }
    showSlider();
}
// auto run slider
let refreshInterval = setInterval(() => {
    next.click();
}, 5000)
function showSlider(){
    // remove item active old
    let itemActiveOld = document.querySelector('.slider .list .item.active');
    let thumbnailActiveOld = document.querySelector('.thumbnail .item.active');
    itemActiveOld.classList.remove('active');
    thumbnailActiveOld.classList.remove('active');

    // active new item
    items[itemActive].classList.add('active');
    thumbnails[itemActive].classList.add('active');

    // clear auto time run slider
    clearInterval(refreshInterval);
    refreshInterval = setInterval(() => {
        next.click();
    }, 5000)
}

// click thumbnail
thumbnails.forEach((thumbnail, index) => {
    thumbnail.addEventListener('click', () => {
        itemActive = index;
        showSlider();
    })
})
</script>


<!-- Paket Wisata Unggulan Section -->
<section id="featured-packages" class="py-5">
    <div class="container">
        <h2 class="text-center font-weight-bold">Paket Wisata Unggulan</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('assets/img/package1.jpg') }}" class="card-img-top" alt="Package 1">
                    <div class="card-body">
                        <h5 class="card-title">Paket Wisata 1</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <a href="#" class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>
            <!-- Add other packages here -->
        </div>
    </div>
</section>
@endsection
