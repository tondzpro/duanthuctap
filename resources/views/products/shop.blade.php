<!-- breadcrumb start -->
@extends('templates.layout')
@section('content')
<div class="content-wrapper ">
    <div class="container-full">
        <div class="breadcrumb-area">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
                    <li class="breadcrumb-item active">Shop</li>
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
                            <img src="{{asset('assets/images/shop/sach.jpg')}}" alt="" />
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
                                    @foreach($products as $pr)
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="propular-product-wrapper mb-30">
                                            <div class="propular-product-image">
                                                <a href="{{ route('detail', ['id' => $pr->id]) }}"><img src="{{ asset('storage/'.$pr->image) }}" alt="" /></a>
                                                <span class="new">new</span>
                                                <div class="propular-product-icon">
                                                    <a href="{{route('Cart_add',['id'=>$pr->id])}}" class="shopping-cart"><i class="fa fa-shopping-cart"></i></a>
                                                    <a href="{{route('WishList_add',['id'=>$pr->id])}}" class="heart"><i class="fa fa-heart"></i></a>
                                                    <a href="#" class="exchange"><i class="fa fa-exchange"></i></a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#productModal" class="eye"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="propular-product-info text-center">
                                                <a href="#">
                                                    <h4>{{$pr->name}}</h4>
                                                </a>
                                                <div class="propular-product-price text-center">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <span class="propular-price mt-10 text-center">{{$pr->price}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

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
                            <h3 class="sidebar-title">Loại sách</h3>
                            <ul class="sidebar-menu">
                                @foreach( $cate as $cate)
                                <li><a href="{{route('shop-category', ['id' => $cate->id])}}"><?php echo $cate->cate_name; ?><span>(11)</span></a></li>
                                @endforeach
                           </ul>
                        </div>
@endsection