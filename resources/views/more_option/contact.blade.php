@extends('templates.layout')
@section('content')
<div class="map-area">
    <div id="googleMap" style="width:100%;height:410px;"></div>
</div>
<!-- map-area end -->

<!-- contact-area start -->
<div class="contact-area">
    <div class="container">
        <div class="row">
            <!-- contact-info start -->
            <div class="col-lg-6">
                <div class="contact-info">
                    <h3>Contact info</h3>
                    <ul>
                        <li>
                            <i class="fa fa-map-marker"></i> <strong>Address</strong>
                            Your address goes here.
                        </li>
                        <li>
                            <i class="fa fa-envelope"></i> <strong>Phone</strong>
                            0123456789
                        </li>
                        <li>
                            <i class="fa fa-mobile"></i> <strong>Email</strong>
                            <a href="#">demo@example.com</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- contact-info end -->
            <div class="col-lg-6">
                <div class="contact-form">
                    <h3><i class="fa fa-envelope-o"></i> Leave a Message</h3>
                    <div class="row">
                        <form id="contact-form" action="https://htmldemo.net/galardo/galardo/mail.php" method="post">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input name="name" placeholder="Name (required)" type="text">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input name="email" placeholder="Email (required)" type="email">
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <input name="subject" placeholder="Subject" type="text">
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                <button type="submit">Submit</button>
                            </div>
                        </form>
                        <p class="form-messege"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact-area end -->

<!-- brand-area-start -->
<div class="brand-area ptb-30 fix">
    <div class="container">
        <div class="custom-row">
            <div class="brand-active owl-carousel">
                <div class="custom-col">
                    <div class="single-brand">
                        <a href="#"><img src="assets/images/brand/1.webp" alt="" /></a>
                    </div>
                </div>
                <div class="custom-col">
                    <div class="single-brand">
                        <a href="#"><img src="assets/images/brand/2.webp" alt="" /></a>
                    </div>
                </div>
                <div class="custom-col">
                    <div class="single-brand">
                        <a href="#"><img src="assets/images/brand/3.webp" alt="" /></a>
                    </div>
                </div>
                <div class="custom-col">
                    <div class="single-brand">
                        <a href="#"><img src="assets/images/brand/4.webp" alt="" /></a>
                    </div>
                </div>
                <div class="custom-col">
                    <div class="single-brand">
                        <a href="#"><img src="assets/images/brand/5.webp" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- brand-area-end -->


<script src="{{asset('assets/js/main.js')}}"></script>

<!-- Google Map js -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
    function initialize() {
        var mapOptions = {
            zoom: 15,
            scrollwheel: false,
            center: new google.maps.LatLng(21.020556, 105.763806)
        };
        var map = new google.maps.Map(document.getElementById('googleMap'),
            mapOptions);
        var marker = new google.maps.Marker({
            position: map.getCenter(),
            animation: google.maps.Animation.BOUNCE,
            icon: 'assets/images/map-icon.webp',
            map: map
        });
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>
@endsection