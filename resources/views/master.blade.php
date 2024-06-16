<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wanderluster.id</title>

    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- font google nya adalah Philosopher -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

        

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light fixed-top" id="navbar">

        <a class="navbar-brand kotak-logo">
            <img src="{{asset('assets/img/Logo Putih.svg')}}" class="white_logo">
            <img src="{{asset('assets/img/orange_logo.svg')}}" class="orange_logo">
        </a>

        <button type="button" class="navbar-toggler bg-light" data-toggle="collapse" data-target="#nav">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse justify-content-center" id="nav">
            <ul class="navbar-nav justify-content-center">
                <li class="nav-item {{Route::current()->getName() == 'home' ? 'active' : ''}}">
                    <a class="nav-link text-light font-weight-bold px-3" href="/">Home</a>
                </li>
                <li class="nav-item {{Route::current()->getName() == 'our-services' ? 'active' : ''}}">
                    <a class="nav-link text-light font-weight-bold px-3" href="/our-services">Our Services</a>
                </li>
                {{-- <li class="nav-item dropdown active">
                    <a class="nav-link text-light font-weight-bold px-3 dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Dropdown link
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <ul class="list-inline">
                            <a class="dropdown-item" href="#">Transportation</a>
                            <a class="dropdown-item" href="#">Group Tours</a>
                            <a class="dropdown-item" href="#">Personalized Trips</a>
                            <a class="dropdown-item" href="#">Event Trip</a>
                        </ul>
                        
                    </div>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link text-light font-weight-bold px-3" href="#">Destination</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light font-weight-bold px-3" href="#">Tour & Travel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light font-weight-bold px-3 contact_nav" href="#">Contact Us</a>
                </li>
            </ul>
        </div>
        <span class="text-light font-weight-bold px-3 right-side-nav">
            Contact Us
        </span>

    </nav>
    @yield('content')
    {{-- <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5">
        <div class="col mb-3">
            <a class="footer-brand kotak">
                <img src="{{ asset('assets/img/Logo Only White.svg') }}" alt="">
            </a>
            <p class="text-muted">© 2022</p>
        </div>

        <div class="col mb-3">
            <h5>Our Services</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Transportation</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Group Tours</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Personalized Trip</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Event Trip</a></li>
            </ul>
        </div>

        <div class="col mb-3">
            <h5>Our Policies</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Terms & Conditions</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Payment & Cancellation</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About Us</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Contact Us</a></li>
            </ul>
        </div>

        <div class="col mb-3">
            <h5>Connect With Us</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">info@wanderluster.id</a></li>
            </ul>
        </div>
    </footer> --}}
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <script>
        window.addEventListener('scroll', function() {
            const logo = document.querySelector('.kotak-logo');
            const logoImg = document.querySelector('.white_logo');
            
            if (window.innerWidth >= 1299) {
                if (window.scrollY > 50) {
                    logo.style.height = 'fit-content';
                    logoImg.style.marginTop = '0px';
                } else {
                    logo.style.height = '200px';
                    logoImg.style.marginTop = '108px';
                }
            } else {
                // Reset styles to original if width is less than 1300px and remove inline styles
                logo.style.height = '';
                logoImg.style.marginTop = '';
            }
        });
    
        // Ensure correct styles are applied on initial load based on scroll position and width
        window.addEventListener('load', function() {
            const logo = document.querySelector('.kotak-logo');
            const logoImg = document.querySelector('.white_logo');
    
            if (window.innerWidth >= 1299) {
                if (window.scrollY > 50) {
                    logo.style.height = 'fit-content';
                    logoImg.style.marginTop = '0px';
                } else {
                    logo.style.height = '200px';
                    logoImg.style.marginTop = '108px';
                }
            } else {
                // Ensure styles are reset when the page loads and width is less than 1300px
                logo.style.height = '';
                logoImg.style.marginTop = '';
            }
        });
    
        // Adjust styles if window is resized
        window.addEventListener('resize', function() {
            const logo = document.querySelector('.kotak-logo');
            const logoImg = document.querySelector('.white_logo');
    
            if (window.innerWidth >= 1299) {
                if (window.scrollY > 50) {
                    logo.style.height = 'fit-content';
                    logoImg.style.marginTop = '0px';
                } else {
                    logo.style.height = '200px';
                    logoImg.style.marginTop = '108px';
                }
            } else {
                // Ensure styles are reset when resized below 1300px
                logo.style.height = '';
                logoImg.style.marginTop = '';
            }
        });
    </script>
</body>

</html>