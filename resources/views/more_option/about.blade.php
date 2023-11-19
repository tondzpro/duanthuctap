@extends('templates.layout')
@section('content')
<div class="breadcrumb-area">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
            <li class="breadcrumb-item active">About Us</li>
        </ol>
    </div>
</div>
<!-- breadcrumb end -->

<!-- about-us-area-start -->
<div class="about-us-area">
    <div class="container">
        <div class="about-title mt-30 text-uppercase mb-40 text-center">
            <h3>About Us</h3>
        </div>

        <div class="row">
            <div class="col-lg-7">
                <div class="about-info">
                    <h3>The standard lorem ipsum passage</h3>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia
                        non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad
                        minima veniam, ullam, commodi consequatur?</p>
                    <div class="blockquote">
                        <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur,
                            vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu nisi ac mi malesuada vestibulum.
                        Phasellus tempor nunc eleifend cursus molestie. Mauris lectus arcu, pellentesque at sodales sit amet,
                        condimentum id nunc. Donec ornare mattis suscipit. Praesent fermentum accumsan vulputate.</p>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="single-blog-image mb-30">
                    <a href="#"><img src="{{asset('assets/images/about/1.webp')}}" alt="" /></a>
                </div>
            </div>
        </div>
        <div class="about-title mt-30 text-uppercase mb-40 text-center">
            <h3>Meet the team</h3>
        </div>

        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="item-team text-center">
                    <div class="team-info">
                        <div class="team-img">
                            <a href="#"><img src="{{asset('assets/images/about/2.webp')}}" alt="" /></a>
                            <div class="mask">
                                <div class="mask-inner">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                        <h4>Havier Macherano</h4>
                        <h5>Developer</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="item-team text-center">
                    <div class="team-info">
                        <div class="team-img">
                            <a href="#"><img src="{{asset('assets/images/about/3.webp')}}" alt="" /></a>
                            <div class="mask">
                                <div class="mask-inner">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                        <h4>Havier Macherano</h4>
                        <h5>Developer</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="item-team text-center">
                    <div class="team-info">
                        <div class="team-img">
                            <a href="#"><img src="{{asset('assets/images/about/4.webp')}}" alt="" /></a>
                            <div class="mask">
                                <div class="mask-inner">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                        <h4>Havier Macherano</h4>
                        <h5>Developer</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="item-team text-center">
                    <div class="team-info">
                        <div class="team-img">
                            <a href="#"><img src="{{asset('assets/images/about/5.webp')}}" alt="" /></a>
                            <div class="mask">
                                <div class="mask-inner">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                        <h4>Havier Macherano</h4>
                        <h5>Developer</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection