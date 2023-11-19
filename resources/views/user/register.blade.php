@extends('templates.layout')
@section('content')
<div class="breadcrumb-area">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
            <li class="breadcrumb-item active">Login</li>
        </ol>
    </div>
</div>
<!-- breadcrumb end -->

<!-- account area start -->
<div class="account-area pt-30 d-flex justify-content-center">
    <div class="container ">
        <!-- <div class="col-lg-6">
                <div class="account-info">
                    <form action="#">
                        <div class="form-fields">
                            <h2>Login</h2>
                            <p>
                                <label>
                                    Username or email address
                                    <span class="required">*</span>
                                </label>
                                <input type="text">
                            </p>
                            <p>
                                <label>
                                    Password
                                    <span class="required">*</span>
                                </label>
                                <input type="password">
                            </p>
                        </div>
                        <div class="form-action">
                            <label>
                                <a href="#" class="lost_password">Lost your password?</a>
                                <input type="checkbox">
                                Remember me
                            </label>
                            <input value="Login" type="submit">
                        </div>
                    </form>
                </div>
            </div> -->
        <div class="form-fields">
            <h2>Register</h2>
            <p>
                <label>Email address <span class="required">*</span></label>
                <input type="text">
            </p>
            <p>
                <label>Password <span class="required">*</span></label>
                <input type="password">
            </p>
        </div>
        <div class="form-action floatright">
            <input value="Register" type="submit">
        </div>
    </div>
</div>
<!-- account area end -->

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

<!-- newsletter-area-start -->
<div class="newsletter-area pt-10 pb-30 bg-color-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="newsletter-text">
                    <h3>Newsletter</h3>
                    <span>Make sure you don’t interesting happenings</span>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="newsletter-form">
                    <form action="#">
                        <input type="text" placeholder="Enter your e-mail" />
                        <button><i class="fa fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="newsletter-icon">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-youtube"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection