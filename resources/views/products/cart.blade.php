@extends('templates.layout')
@section('content')
<div class="breadcrumb-area">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
            <li class="breadcrumb-item active">Cart</li>
        </ol>
    </div>
</div>
<!-- breadcrumb end -->

<!-- cart-main-area start -->
<div class="cart-main-area pt-30">
    <div class="container">
        <form action="{{route('deal_apply')}}" method="post">
            @csrf
            <div class="table-content table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th class="product-thumbnail">Image</th>
                            <th class="product-name">Product</th>
                            <th class="product-price">Price</th>
                            <th class="product-quantity">Quantity</th>
                            <th class="product-subtotal">Total</th>
                            <th class="product-remove">Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $a = session('cart_data');
                        if (isset($a)) {

                            foreach ($a as $dat) { ?>

                                <tr>
                                    <td class="product-thumbnail"><a href="#"><img src="{{ asset('storage/'.$dat['image']) }}" alt="" /></a></td>
                                    <td class="product-name"><a href="product-details.html">{{$dat['name']}}</a></td>
                                    <td class="product-price"><span class="amount"><?php echo number_format($dat['price'], '0', '', ',') ?> VND</span></td>
                                    <td class="product-quantity"><input type="number" value="{{$dat['quantity']}}" /></td>
                                    <td class="product-subtotal"><?php $total = $dat['price'] * $dat['quantity'];
                                                                    echo number_format($total, '0', '', ',');
                                                                    ?> VND</td>
                                    <td class="product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                </tr>

                        <?php }
                        } ?>

                    </tbody>
                </table>
            </div>

            <div class="row">
                <div class="col-lg-9 col-md-7">
                    <div class="buttons-cart">


                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Mã giảm giá được áp dụng</h5>
                                <a href="#" class="btn btn-primary"><?php if (isset($code)) {
                                                                        echo $code->title;
                                                                    } ?></a>
                            </div>
                        </div>

                    </div>
                    <div class="coupon">
                        <h3>Coupon</h3>
                        <p>Enter your coupon code if you have one.</p>
                        <input type="text" placeholder="Coupon code" name="code" />
                        <input type="submit" value="Apply Coupon" />
                    </div>
                </div>
                <div class="col-lg-3 col-md-5">
                    <div class="cart_totals">
                        <h2>Cart Totals</h2>
                        <table>
                            <tbody>
                                <tr class="cart-subtotal">
                                    <th>Giá gốc</th>
                                    <td><span class="amount"><?php
                                                                $data = session()->get('cart_data', []);
                                                                $tien = 0;
                                                                foreach ($data as $t) {
                                                                    $tien += $t['price'] * $t['quantity'];
                                                                }
                                                                echo number_format($tien, '0', '', ',');


                                                                ?> VND</td></span></td>
                                </tr>
                                <tr class="order-total">
                                    <th>Tổng tiền </th>
                                    <td>
                                        <strong><span class="amount"><?php
                                                                        if (isset($tong)) {
                                                                            echo number_format($tong, '0', '', ',');
                                                                        } else {
                                                                            $data = session()->get('cart_data', []);
                                                                            $tien = 0;
                                                                            foreach ($data as $t) {
                                                                                $tien += $t['price'] * $t['quantity'];
                                                                            }
                                                                            echo number_format($tien, '0', '', ',');
                                                                        }
                                                                        ?>
                                                VND</span></strong>
                                    </td>
                                </tr>
                            </tbody>
                        </table>



                    </div>
                </div>
            </div>
        </form>
        <form action="{{route('checkout')}}" method="get">
            <div class="wc-proceed-to-checkout">
                <input type="text" name="tongtien" value="<?php
                                                            if (isset($tong)) {
                                                                echo number_format($tong, '0', '', ',');
                                                            } else {
                                                                $data = session()->get('cart_data', []);
                                                                $tien = 0;
                                                                foreach ($data as $t) {
                                                                    $tien += $t['price'] * $t['quantity'];
                                                                }
                                                                echo number_format($tien, '0', '', ',');
                                                            }
                                                            ?>">
                <input type="text" name="giagoc" value="<?php
                                                        $data = session()->get('cart_data', []);
                                                        $tien = 0;
                                                        foreach ($data as $t) {
                                                            $tien += $t['price'] * $t['quantity'];
                                                        }
                                                        echo number_format($tien, '0', '', ',');


                                                        ?>" id="">

                <button class="btn btn-primary">Proceed to Checkout</button>
            </div>
        </form>

    </div>
</div>
<!-- cart-main-area end -->
@endsection