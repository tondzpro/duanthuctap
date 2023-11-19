@extends('templates.layout')
@section('content')
<div class="breadcrumb-area">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
            <li class="breadcrumb-item active">My wishlist</li>
        </ol>
    </div>
</div>
<!-- breadcrumb end -->

<!-- wishlist-area start -->
<div class="wishlist-area pt-20">
    <div class="container">
        <div class="wishlist-content">
            <form action="#">
                <div class="wishlist-table table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th class="product-remove"><span class="nobr">Remove</span></th>
                                <th class="product-thumbnail">Image</th>
                                <th class="product-name"><span class="nobr">Product Name</span></th>
                                <th class="product-price"><span class="nobr"> Unit Price </span></th>
                                <th class="product-stock-stauts"><span class="nobr"> Stock Status </span></th>
                                <th class="product-add-to-cart"><span class="nobr">add-to-cart </span></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $data)
                            <tr>
                                <td class="product-remove"><a href="{{ route('WishList_delete', ['id' => $data->id]) }}">x</a></td>
                                <td class="product-thumbnail"><a href="{{ route('detail', ['id' => $data->id]) }}"><img src="{{ asset('storage/'.$data->image) }}" alt="" /></a></td>
                                <td class="product-name"><a href="product-details.html">{{$data->title}}</a></td>
                                <td class="product-price"><span class="amount"><?php echo number_format($data->deal, '0', '', ','); ?> VND </span></td>
                                <td class="product-stock-status"><span class="wishlist-in-stock">Còn hàng</span></td>
                                <td class="product-add-to-cart"><a href="#"> Thêm vào giỏ hàng</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="6">
                                    <div class="wishlist-share">
                                        <h4 class="wishlist-share-title">Share on:</h4>
                                        <ul>
                                            <li><a class="facebook" href="#"></a></li>
                                            <li><a class="twitter" href="#"></a></li>
                                            <li><a class="pinterest" href="#"></a></li>
                                            <li><a class="googleplus" href="#"></a></li>
                                            <li><a class="email" href="#"></a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- wishlist-area end -->

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
@endsection