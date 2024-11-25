@extends('master')

@section('content')

<section class="contact-page-section" style="padding-top: 150px">
    <div class="container">
        <div class="sec-title">
            <div class="title">Contact Us</div>
            <h2>Let's Get in Touch.</h2>
        </div>
        <div class="inner-containner">
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
                            <li><i class="far fa-envelope"></i>info@wanderluster.id</li>
                            <li><i class="fas fa-phone"></i>+62 811-9938-389
                        </ul>
                        <ul class="social-icon-four">
                            <li class="follow">Follow on: </li>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://www.instagram.com/wanderluster.id?igsh=c28yYnZkcmNzMmJi"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="https://wa.link/g0uvk0"><i class="fab fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
