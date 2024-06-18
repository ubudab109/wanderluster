@extends('master')

@section('content')

<section class="contact-page-section" style="padding-top: 100px">
    <div class="container">
        <div class="sec-title">
            <div class="title">Contact Us</div>
            <h2>Let's Get in Touch.</h2>
        </div>
        <div class="inner-container">
            <div class="row clearfix">
                <!--Form Column-->
                <div class="form-column col-md-8 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <!--Contact Form-->
                        <div class="contact-form">
                            <form method="post" action="sendemail.php" id="contact-form">
                                <div class="row clearfix">
                                    <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                        <input type="text" name="name" value="" placeholder="Name" required>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                        <input type="email" name="email" value="" placeholder="Email" required>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                        <input type="text" name="subject" value="" placeholder="Subject" required>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                        <input type="text" name="phone" value="" placeholder="Phone" required>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 co-xs-12">
                                        <textarea name="message" placeholder="Message"></textarea>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 co-xs-12">
                                        <button type="submit" class="theme-btn btn-style-one">Send Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--End Contact Form-->
                    </div>
                </div>
                <!--Info Column-->
                <div class="info-column col-md-4 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <h2>Contact Info</h2>
                        <ul class="list-info">
                            <li><i class="fas fa-globe"></i>123 lorem ipsum Abc, Ampera Raya, Bunker.</li>
                            <li><i class="far fa-envelope"></i>example@test</li>
                            <li><i class="fas fa-phone"></i>1-234-567-890 <br> 1-234-567-890</li>
                        </ul>
                        <ul class="social-icon-four">
                            <li class="follow">Follow on: </li>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
