@extends('master')

@section('content')
<div class="slider">
    <div class="list">
        <div class="item active">
            <img src="{{ asset('assets/img/petronas.jpg') }}" alt="">
            <div class="content">
               <p style="color: white">Malaysia</p>
               <h2>Petronas Tower</h2> 
            </div>
        </div>
        <div class="item">
            <img src="{{ asset('assets/img/marinabay.jpg') }}" alt="">
            <div class="content">
               <p style="color: white">Singapore</p>
               <h2>Marina Bay Sands</h2> 
            </div>
        </div>
        <div class="item">
            <img src="{{ asset('assets/img/batucave.jpg') }}" alt="">
            <div class="content">
               <p style="color: white">Malaysia</p>
               <h2>Batu Cave</h2> 
            </div>
        </div>
        <div class="item">
            <img src="{{ asset('assets/img/patungsinga.jpg') }}" alt="">
            <div class="content">
               <p style="color: white">Singapore</p>
               <h2>Merlion Parks</h2> 
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
        <img src="{{ asset('assets/img/petronas.jpg') }}">
        <div class="content">Petronas Tower</div>
    </div>
    <div class="item">
        <img src="{{ asset('assets/img/marinabay.jpg') }}">
        <div class="content">Marina Bay</div>
    </div>
    <div class="item">
        <img src="{{ asset('assets/img/batucave.jpg') }}">
        <div class="content">Batu Cave</div>
    </div>
    <div class="item">
        <img src="{{ asset('assets/img/patungsinga.jpg') }}">
        <div class="content">Merlion Parks</div>
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

<div class="titlepage-event">
    <h2>Our Gallery</h2>
</div>

<!-- Paket Wisata Unggulan Section -->
<div class="paket-wisata">
    <img src="{{ asset('assets/img/wander.jpeg') }}" alt="">
    <img src="{{ asset('assets/img/wander2.jpeg') }}" alt="">
    <img src="{{ asset('assets/img/wander3.jpeg') }}" alt="">
    <img src="{{ asset('assets/img/wander4.jpeg') }}" alt="">
</div>

@endsection
