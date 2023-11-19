<!-- breadcrumb start -->
@extends('templates.layout')
@section('content')
<div class="breadcrumb-area">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
            <li class="breadcrumb-item active">Shop nam</li>
        </ol>
    </div>
</div>
<!-- breadcrumb end -->

<!-- shop-area-start -->
<div class="shop-area ptb-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="shop-page-img">
                    <img src="{{asset('assets/images/shop/shop.webp')}}" alt="" />
                </div>
                <div class="shop-bar-page mt-30">
                    <div class="shop-bar">
                        <!-- Nav tabs -->
                        <ul class="nav shop-tab">
                            <li><a class="active" href="#home" data-bs-toggle="tab"><i class="fa fa-th-large"></i></a></li>
                            <li><a href="#profile" data-bs-toggle="tab"><i class="fa fa-th-list"></i></a></li>
                        </ul>
                        <div class="selector-field">
                            <form action="#">
                                <label>Sort by</label>
                                <select name="select">
                                    <option value="">----</option>
                                    <option value="">Price: Lowest first</option>
                                    <option value="">Price: Highest first</option>
                                    <option value="">Product Name: A to Z</option>
                                    <option value="">Product Name: Z to A</option>
                                    <option value="">In stock</option>
                                    <option value="">Reference: Lowest first</option>
                                    <option value="">Reference: Highest first</option>
                                </select>
                            </form>
                        </div>
                        <div class="selector-field">
                            <form action="#">
                                <label>Show</label>
                                <select name="select">
                                    <option value="">12</option>
                                    <option value="">13</option>
                                    <option value="">14</option>
                                </select>
                            </form>
                        </div>
                    </div>
                    <div class="selector-field">
                        <form action="#">
                            <button class="compare">Compare (1)</button>
                        </form>
                    </div>
                </div>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade show active" id="home">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="propular-product-wrapper mb-30">
                                    <div class="propular-product-image">
                                        <a href="#"><img src="assets/images/product/1.webp" alt="" /></a>
                                        <span class="new">new</span>
                                        <div class="propular-product-icon">
                                            <a href="#" class="shopping-cart"><i class="fa fa-shopping-cart"></i></a>
                                            <a href="#" class="heart"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="exchange"><i class="fa fa-exchange"></i></a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#productModal" class="eye"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="propular-product-info text-center">
                                        <a href="#">
                                            <h4> Blouse</h4>
                                        </a>
                                        <div class="propular-product-price text-center">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <span class="propular-price mt-10 text-center">$22</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="propular-product-wrapper mb-30">
                                    <div class="propular-product-image">
                                        <a href="#"><img src="assets/images/product/2.webp" alt="" /></a>
                                        <span class="new">new</span>
                                        <div class="propular-product-icon">
                                            <a href="#" class="shopping-cart"><i class="fa fa-shopping-cart"></i></a>
                                            <a href="#" class="heart"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="exchange"><i class="fa fa-exchange"></i></a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#productModal" class="eye"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="propular-product-info text-center">
                                        <a href="#">
                                            <h4> Printed Summer Dress </h4>
                                        </a>
                                        <div class="propular-product-price text-center">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <span class="propular-price mt-10 text-center">$30.12</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="propular-product-wrapper mb-30">
                                    <div class="propular-product-image">
                                        <a href="#"><img src="assets/images/product/4.webp" alt="" /></a>
                                        <span class="new">new</span>
                                        <div class="propular-product-icon">
                                            <a href="#" class="shopping-cart"><i class="fa fa-shopping-cart"></i></a>
                                            <a href="#" class="heart"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="exchange"><i class="fa fa-exchange"></i></a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#productModal" class="eye"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="propular-product-info text-center">
                                        <a href="#">
                                            <h4> Printed Dress </h4>
                                        </a>
                                        <div class="propular-product-price text-center">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <span class="propular-price mt-10 text-center">$55</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="propular-product-wrapper mb-30">
                                    <div class="propular-product-image">
                                        <a href="#"><img src="assets/images/product/3.webp" alt="" /></a>
                                        <span class="new">new</span>
                                        <div class="propular-product-icon">
                                            <a href="#" class="shopping-cart"><i class="fa fa-shopping-cart"></i></a>
                                            <a href="#" class="heart"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="exchange"><i class="fa fa-exchange"></i></a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#productModal" class="eye"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="propular-product-info text-center">
                                        <a href="#">
                                            <h4>Blouse</h4>
                                        </a>
                                        <div class="propular-product-price text-center">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <span class="propular-price mt-10 text-center">$12.22</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="propular-product-wrapper mb-30">
                                    <div class="propular-product-image">
                                        <a href="#"><img src="assets/images/product/5.webp" alt="" /></a>
                                        <span class="new">new</span>
                                        <div class="propular-product-icon">
                                            <a href="#" class="shopping-cart"><i class="fa fa-shopping-cart"></i></a>
                                            <a href="#" class="heart"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="exchange"><i class="fa fa-exchange"></i></a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#productModal" class="eye"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="propular-product-info text-center">
                                        <a href="#">
                                            <h4> Printed Summer Dress </h4>
                                        </a>
                                        <div class="propular-product-price text-center">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <span class="propular-price mt-10 text-center">$45.55</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="propular-product-wrapper mb-30">
                                    <div class="propular-product-image">
                                        <a href="#"><img src="assets/images/product/6.webp" alt="" /></a>
                                        <span class="new">new</span>
                                        <div class="propular-product-icon">
                                            <a href="#" class="shopping-cart"><i class="fa fa-shopping-cart"></i></a>
                                            <a href="#" class="heart"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="exchange"><i class="fa fa-exchange"></i></a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#productModal" class="eye"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="propular-product-info text-center">
                                        <a href="#">
                                            <h4> Faded Short Sleeves T-shirt </h4>
                                        </a>
                                        <div class="propular-product-price text-center">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <span class="propular-price mt-10 text-center">$33.33</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="propular-product-wrapper mb-30">
                                    <div class="propular-product-image">
                                        <a href="#"><img src="assets/images/product/7.webp" alt="" /></a>
                                        <span class="new">new</span>
                                        <div class="propular-product-icon">
                                            <a href="#" class="shopping-cart"><i class="fa fa-shopping-cart"></i></a>
                                            <a href="#" class="heart"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="exchange"><i class="fa fa-exchange"></i></a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#productModal" class="eye"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="propular-product-info text-center">
                                        <a href="#">
                                            <h4> Printed Dress </h4>
                                        </a>
                                        <div class="propular-product-price text-center">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <span class="propular-price mt-10 text-center">$43.34</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="propular-product-wrapper mb-30">
                                    <div class="propular-product-image">
                                        <a href="#"><img src="assets/images/product/8.webp" alt="" /></a>
                                        <span class="new">new</span>
                                        <div class="propular-product-icon">
                                            <a href="#" class="shopping-cart"><i class="fa fa-shopping-cart"></i></a>
                                            <a href="#" class="heart"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="exchange"><i class="fa fa-exchange"></i></a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#productModal" class="eye"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="propular-product-info text-center">
                                        <a href="#">
                                            <h4> Faded Short Sleeves T-shirt </h4>
                                        </a>
                                        <div class="propular-product-price text-center">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <span class="propular-price mt-10 text-center">$33.33</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="propular-product-wrapper mb-30">
                                    <div class="propular-product-image">
                                        <a href="#"><img src="assets/images/product/3.webp" alt="" /></a>
                                        <span class="new">new</span>
                                        <div class="propular-product-icon">
                                            <a href="#" class="shopping-cart"><i class="fa fa-shopping-cart"></i></a>
                                            <a href="#" class="heart"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="exchange"><i class="fa fa-exchange"></i></a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#productModal" class="eye"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="propular-product-info text-center">
                                        <a href="#">
                                            <h4>Blouse</h4>
                                        </a>
                                        <div class="propular-product-price text-center">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <span class="propular-price mt-10 text-center">$23.23</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="profile">
                        <div class="row mb-30">
                            <div class="col-lg-4 col-md-4 col-sm-5">
                                <div class="propular-product-image">
                                    <a href="#"><img src="assets/images/product/1.webp" alt="" /></a>
                                    <span class="new">new</span>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-7">
                                <div class="propular-product-info product-info-shop">
                                    <a href="#">
                                        <h4> Printed Summer Dress</h4>
                                    </a>
                                    <div class="propular-product-price">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <span class="propular-price mt-10">$22</span>
                                    <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit.
                                        Accessorize with a straw hat and you're ready for summer!</p>
                                </div>
                                <div class="shop_icon">
                                    <a href="#" class="shopping-cart shop_page_c"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    <a href="#" class="heart"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="exchange"><i class="fa fa-exchange"></i></a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#productModal" class="eye"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-30">
                            <div class="col-lg-4 col-md-4 col-sm-5">
                                <div class="propular-product-image">
                                    <a href="#"><img src="assets/images/product/2.webp" alt="" /></a>
                                    <span class="new">new</span>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-7">
                                <div class="propular-product-info product-info-shop">
                                    <a href="#">
                                        <h4> Faded Short Sleeves T-shirt </h4>
                                    </a>
                                    <div class="propular-product-price">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <span class="propular-price mt-10">$41.11</span>
                                    <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit.
                                        Accessorize with a straw hat and you're ready for summer!</p>
                                </div>
                                <div class="shop_icon">
                                    <a href="#" class="shopping-cart shop_page_c"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    <a href="#" class="heart"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="exchange"><i class="fa fa-exchange"></i></a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#productModal" class="eye"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-30">
                            <div class="col-lg-4 col-md-4 col-sm-5">
                                <div class="propular-product-image">
                                    <a href="#"><img src="assets/images/product/3.webp" alt="" /></a>
                                    <span class="new">new</span>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-7">
                                <div class="propular-product-info product-info-shop">
                                    <a href="#">
                                        <h4> Printed Dress</h4>
                                    </a>
                                    <div class="propular-product-price">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <span class="propular-price mt-10">$30.00</span>
                                    <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit.
                                        Accessorize with a straw hat and you're ready for summer!</p>
                                </div>
                                <div class="shop_icon">
                                    <a href="#" class="shopping-cart shop_page_c"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    <a href="#" class="heart"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="exchange"><i class="fa fa-exchange"></i></a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#productModal" class="eye"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-30">
                            <div class="col-lg-4 col-md-4 col-sm-5">
                                <div class="propular-product-image">
                                    <a href="#"><img src="assets/images/product/4.webp" alt="" /></a>
                                    <span class="new">new</span>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-7">
                                <div class="propular-product-info product-info-shop">
                                    <a href="#">
                                        <h4> Faded Short Sleeves T-shirt </h4>
                                    </a>
                                    <div class="propular-product-price">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <span class="propular-price mt-10">$44.44</span>
                                    <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit.
                                        Accessorize with a straw hat and you're ready for summer!</p>
                                </div>
                                <div class="shop_icon">
                                    <a href="#" class="shopping-cart shop_page_c"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    <a href="#" class="heart"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="exchange"><i class="fa fa-exchange"></i></a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#productModal" class="eye"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-30">
                            <div class="col-lg-4 col-md-4 col-sm-5">
                                <div class="propular-product-image">
                                    <a href="#"><img src="assets/images/product/5.webp" alt="" /></a>
                                    <span class="new">new</span>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-7">
                                <div class="propular-product-info product-info-shop">
                                    <a href="#">
                                        <h4> Printed Chiffon Dress </h4>
                                    </a>
                                    <div class="propular-product-price">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <span class="propular-price mt-10">$21.10</span>
                                    <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit.
                                        Accessorize with a straw hat and you're ready for summer!</p>
                                </div>
                                <div class="shop_icon">
                                    <a href="#" class="shopping-cart shop_page_c"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    <a href="#" class="heart"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="exchange"><i class="fa fa-exchange"></i></a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#productModal" class="eye"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-30">
                            <div class="col-lg-4 col-md-4 col-sm-5">
                                <div class="propular-product-image">
                                    <a href="#"><img src="assets/images/product/6.webp" alt="" /></a>
                                    <span class="new">new</span>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-7">
                                <div class="propular-product-info product-info-shop">
                                    <a href="#">
                                        <h4> Printed Summer Dress</h4>
                                    </a>
                                    <div class="propular-product-price">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <span class="propular-price mt-10">$33.33</span>
                                    <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit.
                                        Accessorize with a straw hat and you're ready for summer!</p>
                                </div>
                                <div class="shop_icon">
                                    <a href="#" class="shopping-cart shop_page_c"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    <a href="#" class="heart"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="exchange"><i class="fa fa-exchange"></i></a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#productModal" class="eye"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-30">
                            <div class="col-lg-4 col-md-4 col-sm-5">
                                <div class="propular-product-image">
                                    <a href="#"><img src="assets/images/product/2.webp" alt="" /></a>
                                    <span class="new">new</span>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-7">
                                <div class="propular-product-info product-info-shop">
                                    <a href="#">
                                        <h4> Printed Summer Dress</h4>
                                    </a>
                                    <div class="propular-product-price">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <span class="propular-price mt-10">$22.00</span>
                                    <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit.
                                        Accessorize with a straw hat and you're ready for summer!</p>
                                </div>
                                <div class="shop_icon">
                                    <a href="#" class="shopping-cart shop_page_c"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    <a href="#" class="heart"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="exchange"><i class="fa fa-exchange"></i></a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#productModal" class="eye"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-30">
                            <div class="col-lg-4 col-md-4 col-sm-5">
                                <div class="propular-product-image">
                                    <a href="#"><img src="assets/images/product/8.webp" alt="" /></a>
                                    <span class="new">new</span>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-7">
                                <div class="propular-product-info product-info-shop">
                                    <a href="#">
                                        <h4> Printed Summer Dress</h4>
                                    </a>
                                    <div class="propular-product-price">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <span class="propular-price mt-10">$22</span>
                                    <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit.
                                        Accessorize with a straw hat and you're ready for summer!</p>
                                </div>
                                <div class="shop_icon">
                                    <a href="#" class="shopping-cart shop_page_c"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    <a href="#" class="heart"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="exchange"><i class="fa fa-exchange"></i></a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#productModal" class="eye"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-30">
                            <div class="col-lg-4 col-md-4 col-sm-5">
                                <div class="propular-product-image">
                                    <a href="#"><img src="assets/images/product/6.webp" alt="" /></a>
                                    <span class="new">new</span>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-7">
                                <div class="propular-product-info product-info-shop">
                                    <a href="#">
                                        <h4> Printed Summer Dress</h4>
                                    </a>
                                    <div class="propular-product-price">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <span class="propular-price mt-10">$45.74</span>
                                    <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit.
                                        Accessorize with a straw hat and you're ready for summer!</p>
                                </div>
                                <div class="shop_icon">
                                    <a href="#" class="shopping-cart shop_page_c"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    <a href="#" class="heart"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="exchange"><i class="fa fa-exchange"></i></a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#productModal" class="eye"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-sortpagibar">
                        <div class="sortpagibar">
                            <p class="product-count">Showing 1 - 12 of 13 items</p>
                            <ul class="shop-pagi">
                                <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                        <div class="selector-field">
                            <form action="#">
                                <button class="compare">Compare (1)</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="sidebar">
                    <div class="title-block">
                        <h3>Catalog</h3>
                    </div>
                </div>
                <div class="sidebar-widget">
                    <h3 class="sidebar-title">Categories</h3>
                    <ul class="sidebar-menu">
                        <li><a href="#">Jeans<span>(11)</span></a></li>
                        <li><a href="#">Shoes<span>(11)</span></a></li>
                        <li><a href="#">Clothing<span>(11)</span></a></li>
                        <li><a href="#">Vest<span>(11)</span></a></li>
                        <li><a href="#">Short Sleeve<span>(11)</span></a></li>
                    </ul>
                </div>
                <div class="sidebar-widget">
                    <h3 class="sidebar-title">Availability</h3>
                    <ul class="sidebar-menu">
                        <li><a href="#">In stock<span>(11)</span></a></li>
                    </ul>
                </div>
                <div class="sidebar-widget">
                    <h3 class="sidebar-title">Condition</h3>
                    <ul class="sidebar-menu">
                        <li><a href="#">New<span>(11)</span></a></li>
                    </ul>
                </div>
                <div class="sidebar-widget">
                    <h3 class="sidebar-title">Manufacturer</h3>
                    <ul class="sidebar-menu">
                        <li><a href="#">Fashion Manufacturer<span>(11)</span></a></li>
                    </ul>
                </div>
                <div class="sidebar-widget">
                    <h3 class="sidebar-title">Price</h3>
                    <div class="price-slider-area">
                        <div id="slider-range"></div>
                        <p>
                            <label for="amount">Range:</label>
                            <input type="text" id="amount" readonly style="border:0; color:#666; font-weight:bold;">
                        </p>
                    </div>
                </div>
                <div class="sidebar-widget">
                    <h3 class="sidebar-title">Size</h3>
                    <ul class="sidebar-menu">
                        <li><a href="#">S<span>(6)</span></a></li>
                        <li><a href="#">M<span>(7)</span></a></li>
                        <li><a href="#">L<span>(10)</span></a></li>
                    </ul>
                </div>
                <div class="sidebar-widget">
                    <h3 class="sidebar-title">Color</h3>
                    <ul class="sidebar-menu">
                        <li><a href="#">Beige<span>(2)</span></a></li>
                        <li><a href="#">White <span>(3)</span></a></li>
                        <li><a href="#">Black<span>(2)</span></a></li>
                        <li><a href="#">Orange<span>(2)</span></a></li>
                        <li><a href="#">Blue<span>(2)</span></a></li>
                        <li><a href="#">Green<span>(2)</span></a></li>
                        <li><a href="#">Yellow<span>(2)</span></a></li>
                        <li><a href="#">Pink<span>(2)</span></a></li>
                    </ul>
                </div>
                <div class="sidebar-widget">
                    <h3 class="sidebar-title">Compositions</h3>
                    <ul class="sidebar-menu">
                        <li><a href="#">Cotton<span>(2)</span></a></li>
                        <li><a href="#">Polyester <span>(3)</span></a></li>
                        <li><a href="#">Viscose<span>(2)</span></a></li>
                    </ul>
                </div>
                <div class="sidebar-widget">
                    <h3 class="sidebar-title">Styles</h3>
                    <ul class="sidebar-menu">
                        <li><a href="#">Casual<span>(2)</span></a></li>
                        <li><a href="#">Dressy<span>(3)</span></a></li>
                        <li><a href="#">Girly<span>(2)</span></a></li>
                    </ul>
                </div>
                <div class="sidebar-widget">
                    <h3 class="sidebar-title">Properties</h3>
                    <ul class="sidebar-menu">
                        <li><a href="#">Colorful Dress<span>(2)</span></a></li>
                        <li><a href="#">Maxi Dress<span>(3)</span></a></li>
                        <li><a href="#">Midi Dress<span>(2)</span></a></li>
                        <li><a href="#">Short Dress<span>(2)</span></a></li>
                        <li><a href="#">Short Sleeve<span>(2)</span></a></li>
                    </ul>
                </div>
                <div class="sibebar-slider">
                    <div class="feature-title">
                        <h3>Best Sellers</h3>
                    </div>
                    <div class="feature-product-active owl-carousel">
                        <div class="all-feature-product">
                            <div class="propular-product-wrapper feature-product mt-30">
                                <div class="propular-product-image">
                                    <a href="#"><img src="assets/images/feature/10.webp" alt="" /></a>
                                </div>
                                <div class="propular-product-info">
                                    <a href="#">
                                        <h4> Blouse</h4>
                                    </a>
                                    <div class="propular-product-price feature-product-price">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <span class="propular-price feature-product-price mt-10">$16</span>
                                    <span class="propular-del"><del>$23</del></span>
                                    <span class="purcent">-19%</span>
                                </div>
                            </div>
                            <div class="propular-product-wrapper feature-product mt-30">
                                <div class="propular-product-image">
                                    <a href="#"><img src="assets/images/feature/9.webp" alt="" /></a>
                                </div>
                                <div class="propular-product-info">
                                    <a href="#">
                                        <h4> Printed Chiffon Dress </h4>
                                    </a>
                                    <div class="propular-product-price feature-product-price">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <span class="propular-price feature-product-price mt-10">$20</span>
                                    <span class="propular-del"><del>$25</del></span>
                                    <span class="purcent">-11%</span>
                                </div>
                            </div>
                            <div class="propular-product-wrapper feature-product mt-30">
                                <div class="propular-product-image">
                                    <a href="#"><img src="assets/images/feature/8.webp" alt="" /></a>
                                </div>
                                <div class="propular-product-info">
                                    <a href="#">
                                        <h4> Faded Short Sleeves .. </h4>
                                    </a>
                                    <div class="propular-product-price feature-product-price">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <span class="propular-price feature-product-price mt-10">$18</span>
                                    <span class="propular-del"><del>$25</del></span>
                                </div>
                            </div>
                            <div class="propular-product-wrapper feature-product mt-30">
                                <div class="propular-product-image">
                                    <a href="#"><img src="assets/images/feature/7.webp" alt="" /></a>
                                </div>
                                <div class="propular-product-info">
                                    <a href="#">
                                        <h4> Blouse</h4>
                                    </a>
                                    <div class="propular-product-price feature-product-price">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <span class="propular-price feature-product-price mt-10">$15</span>
                                    <span class="propular-del"><del>$30.51</del></span>
                                    <span class="purcent">-21%</span>
                                </div>
                            </div>
                        </div>
                        <div class="all-feature-product">
                            <div class="propular-product-wrapper feature-product mt-30">
                                <div class="propular-product-image">
                                    <a href="#"><img src="assets/images/feature/10.webp" alt="" /></a>
                                </div>
                                <div class="propular-product-info">
                                    <a href="#">
                                        <h4> Blouse</h4>
                                    </a>
                                    <div class="propular-product-price feature-product-price">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <span class="propular-price feature-product-price mt-10">$16</span>
                                    <span class="propular-del"><del>$23</del></span>
                                    <span class="purcent">-19%</span>
                                </div>
                            </div>
                            <div class="propular-product-wrapper feature-product mt-30">
                                <div class="propular-product-image">
                                    <a href="#"><img src="assets/images/feature/9.webp" alt="" /></a>
                                </div>
                                <div class="propular-product-info">
                                    <a href="#">
                                        <h4> Printed Chiffon Dress </h4>
                                    </a>
                                    <div class="propular-product-price feature-product-price">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <span class="propular-price feature-product-price mt-10">$20</span>
                                    <span class="propular-del"><del>$25</del></span>
                                    <span class="purcent">-11%</span>
                                </div>
                            </div>
                            <div class="propular-product-wrapper feature-product mt-30">
                                <div class="propular-product-image">
                                    <a href="#"><img src="assets/images/feature/8.webp" alt="" /></a>
                                </div>
                                <div class="propular-product-info">
                                    <a href="#">
                                        <h4> Faded Short Sleeves.. </h4>
                                    </a>
                                    <div class="propular-product-price feature-product-price">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <span class="propular-price feature-product-price mt-10">$18</span>
                                    <span class="propular-del"><del>$25</del></span>
                                </div>
                            </div>
                            <div class="propular-product-wrapper feature-product mt-30">
                                <div class="propular-product-image">
                                    <a href="#"><img src="assets/images/feature/7.webp" alt="" /></a>
                                </div>
                                <div class="propular-product-info">
                                    <a href="#">
                                        <h4> Blouse</h4>
                                    </a>
                                    <div class="propular-product-price feature-product-price">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <span class="propular-price feature-product-price mt-10">$15</span>
                                    <span class="propular-del"><del>$30.51</del></span>
                                    <span class="purcent">-21%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection