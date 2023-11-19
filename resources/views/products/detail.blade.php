@extends('templates.layout')
@section('content')
<div class="breadcrumb-area">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
            <li class="breadcrumb-item active">Product-Details</li>
        </ol>
    </div>
</div>
<!-- breadcrumb end -->

<!-- product-details-area-start -->
<div class="product-details-area ptb-30">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8 col-sm-10">
                <!-- Tab panes -->
                <div class="tab-content">
                    @foreach($images as $image)
                    <div class="tab-pane fade show <?php echo ($i < 1) ? 'active' : '' ?> " id="home{{$i++}}">
                        <div class="pro-large-img ">
                            <img src="{{ asset('storage/'.$image->image) }}" alt="" />

                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Nav tabs -->
                <ul class="nav simple-tab-menu">
                    @foreach($images as $image)
                    <li><a class="<?php echo ($a > 0) ? '' : 'active' ?>" href="#home{{$a++ }}" data-bs-toggle="tab"><img src="{{ asset('storage/'.$image->image) }}" alt="" /></a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-7 p-5 pt-0 ml-3">
                <div class="product_details">
                    <div class="propular-product-info">
                        <h3>{{$product->name}}</h3>
                        <div class="propular-product-price">
                            <?php
                            $avg = round($avgStar);
                            for ($i = 0; $i < $avg; $i++) {
                            ?>
                                <i class="fa fa-star-o"></i>
                            <?php } ?>
                        </div>

                        <p><span class="propular-price"> Giá chỉ còn : <?php echo number_format($product->deal, '0', '', ','); ?> VND </span></p>
                        <p><span>Giá gốc : </span><del style="color: red;"><?php echo number_format($product->price, '0', '', ','); ?> VND</del> </p>
                    </div>
                    <div class="product-details-info">
                        <p><span>Loại sản Phẩm : </span> {{$product->cate_name}}</p>


                    </div>
                    <div class="box-quantity">
                        <form action="{{route('Cart_add',['id'=>$product->id])}}">
                            <label>Số lượng</label>
                            <input type="number" value="1" min="0" />
                            <button>add to cart</button>
                        </form>
                    </div>
                    <div class="select-size">
                        <form action="#">
                            <label>Size</label>
                            <select name="#">
                                <option value="">XXL</option>
                                <option value="">XL</option>
                                <option value="">X</option>
                                <option value="">s</option>
                                <option value="">Inbox cho shop để đặt riêng size khác</option>
                            </select>

                        </form>
                        <p class="mt-4 " style="text-transform: capitalize;"> {{$product->title}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product-details-area-end -->

<!-- pro-info-area start -->
<div class=" pro-info-area ptb-80">
    <div class="container">
        <div class="pro-info-box">
            <!-- Nav tabs -->
            <ul class="nav pro-info-tab">
                <li><a class="active" href="#hhh" data-bs-toggle="tab">More info</a></li>
                <li><a href="#profile3" data-bs-toggle="tab">Data sheet</a></li>
                <li><a href="#messages3" data-bs-toggle="tab">Reviews</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane fade show active" id="hhh">
                    <div class="pro-desc">
                        <p>Fashion has been creating well-designed collections since 2010. The brand offers feminine designs
                            delivering stylish separates and statement dresses which have since evolved into a full ready-to-wear
                            collection in which every item is a vital part of a woman's wardrobe. The result? Cool, easy, chic looks
                            with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and
                            manufactured with the greatest attention. Now Fashion extends to a range of accessories including shoes,
                            hats, belts and more!</p>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile3">
                    <div class="pro-desc">
                        <table class="table-data-sheet">
                            <tbody>
                                <tr class="odd">
                                    <td>Compositions</td>
                                    <td>Cotton</td>
                                </tr>
                                <tr class="even">
                                    <td>Styles</td>
                                    <td>Casual</td>
                                </tr>
                                <tr class="odd">
                                    <td>Properties</td>
                                    <td>Short Sleeve</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="messages3">
                    <div class="pro-desc">
                        <h2>Đánh giá</h2>


                        @foreach($comment as $comment)
                        <div class=" border mt-2 mb-2 p-3 rounded-2 shadow-none p-3 mb-5 bg-light rounded ">
                            <h4> <b>{{$comment->name}}</b></h4>
                            <h4 class="">{{$comment->comment}}</h4>
                            <div class="propular-product-price mt-2">
                                <?php

                                for ($i = 0; $i < $comment->rate; $i++) {
                                ?>
                                    <i class="fa fa-star-o"></i>
                                <?php } ?>
                            </div>

                        </div>
                        @endforeach
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">viết cảm nhận của bạn!!</button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <form action="{{route('comment',['id'=>$product->id])}}" method="POST">
                                    @csrf
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Viết cảm nghĩ của bạn</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container d-flex justify-content-center mt-200">


                                                <div class="row">

                                                    <div class="col-md-12">

                                                        <div class="stars">
                                                            <input type="text" name="id" value="{{$product->id}}" hidden id="">

                                                            <input class="star star-5 " checked id="star-5" type="radio" name="rate" value="5" />

                                                            <label class="star star-5" for="star-5"></label>


                                                            <input class="star star-4" id="star-4" type="radio" name="rate" value="4" />

                                                            <label class="star star-4" for="star-4"></label>


                                                            <input class="star star-3" id="star-3" type="radio" name="rate" value="3" />

                                                            <label class="star star-3" for="star-3"></label>


                                                            <input class="star star-2" id="star-2" type="radio" name="rate" value="2" />

                                                            <label class="star star-2" for="star-2"></label>


                                                            <input class="star star-1" id="star-1" type="radio" name="rate" value="1" />

                                                            <label class="star star-1" for="star-1"></label>



                                                        </div>



                                                    </div>


                                                </div>

                                            </div>
                                            <div class="mb-3">
                                                <label for="message-text" class="col-form-label">Nội dung</label>
                                                <textarea class="form-control" id="message-text" name="comment"></textarea>
                                            </div>



                                        </div>
                                        <div class="modal-footer mt-3">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                                            <button type="submit" class="btn btn-primary">Đánh giá</button>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- pro-info-area end -->

<div class="product-details-carousel pb-30">
    <div class="container">
        <div class="feature-title product-title mb-70 text-center">
            <h3>Related Products</h3>
        </div>

        <div class="custom-row dotted-style-4">
            <div class="product-details-active owl-carousel">
                <div class="custom-col">
                    <div class="propular-product-wrapper">
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
                                <h4> Printed Dress </h4>
                            </a>
                            <div class="propular-product-price text-center">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <span class="propular-price mt-10 text-center">$22.00</span>
                        </div>
                    </div>
                </div>
                <div class="custom-col">
                    <div class="propular-product-wrapper">
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
                                <h4>Printed Summer Dress</h4>
                            </a>
                            <div class="propular-product-price text-center">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <span class="propular-price mt-10 text-center">$20.00</span>
                        </div>
                    </div>
                </div>
                <div class="custom-col">
                    <div class="propular-product-wrapper">
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
                                <h4>Printed Summer Dress</h4>
                            </a>
                            <div class="propular-product-price text-center">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <span class="propular-price mt-10 text-center">$30.44</span>
                        </div>
                    </div>
                </div>
                <div class="custom-col">
                    <div class="propular-product-wrapper">
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
                                <h4> Printed Summer Dress </h4>
                            </a>
                            <div class="propular-product-price text-center">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <span class="propular-price mt-10 text-center">$44.91</span>
                        </div>
                    </div>
                </div>
                <div class="custom-col">
                    <div class="propular-product-wrapper">
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
                                <h4> Printed Summer Dress </h4>
                            </a>
                            <div class="propular-product-price text-center">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <span class="propular-price mt-10 text-center">$70.91</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection