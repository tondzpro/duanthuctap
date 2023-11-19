<!-- breadcrumb start -->
@extends('templates.layout')
@section('content')
<div class="breadcrumb-area">
    <div class="container">
    </div>
</div>
<!-- breadcrumb end -->

<!-- shop-area-start -->
<div class="shop-area ptb-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                
                
                    
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
            </div>
        </div>
    </div>
</div>
@endsection