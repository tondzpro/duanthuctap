@extends('templates.layout')
@section('content')
<div class="coupon-area pt-30">
    <div class="container">
        <!-- ACCORDION START -->

        <!-- coupon-area end -->

        <!-- checkout-area start -->
        <div class="checkout-area">
            <div class="container">
                <form action="{{route('order_success')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="checkbox-form">
                                <h3>Địa chỉ nhận hàng</h3>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <select class="form-select form-select-sm mb-3" id="city" aria-label=".form-select-sm">
                                            <option value="" selected>Chọn tỉnh thành</option>
                                        </select>

                                        <select class="form-select form-select-sm mb-3" id="district" aria-label=".form-select-sm">
                                            <option value="" selected>Chọn quận huyện</option>
                                        </select>

                                        <select class="form-select form-select-sm" id="ward" aria-label=".form-select-sm">
                                            <option value="" selected>Chọn phường xã</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Tên <span class="required">*</span></label>
                                            <input type="text" placeholder="" name="name" value="{{$user->name}}" />
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Địa chỉ<span class="required">*</span></label>
                                            <input type="text" placeholder="address" name="adress" value="{{$user->adress}}" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Email <span class="required">*</span></label>
                                            <input type="email" placeholder="" value="{{$user->email}}" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Số điện thoại<span class="required">*</span></label>
                                            <input type="text" name="number" placeholder="Postcode / Zip" />
                                        </div>
                                    </div>

                                </div>
                                <div class="different-address">

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="your-order">
                                <h3>Your order</h3>
                                <div class="your-order-table table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product-name">Product</th>
                                                <th class="product-total">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $t = session('cart_data');

                                            foreach ($t as $data) { ?>
                                                <tr class="cart_item">
                                                    <td class="product-name">
                                                        {{$data['name']}} <strong class="product-quantity"> X {{$data['quantity']}}</strong>
                                                    </td>
                                                    <td class="product-total">

                                                        <span class="amount"><?php echo number_format($data['price'], '0', '', ',') ?> VND</span>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr class="cart-subtotal">
                                                <input type="text" name="goc" value="{{$goc}}" hidden id="">

                                                <th>Giá gốc</th>
                                                <td><span class="amount">{{$goc}} VND</span></td>
                                            </tr>
                                            <tr class="order-total">
                                                <input type="text" name="tong" value="{{$tong}}" hidden id="">
                                                <th>Tổng Hóa Đơn</th>
                                                <td><strong><span class="amount">{{$tong}} VND</span></strong>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="payment-method">
                                    <div class="payment-accordion">
                                        <div class="panel-group" id="accordion">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" id="headingOne">
                                                    <h4 class="panel-title">
                                                        <a data-bs-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                            Chuyển tiền khi nhận hàng
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseOne" class="panel-collapse collapse show">
                                                    <div class="panel-body">
                                                        <p>Bạn sẽ nhận được hàng sau vài ngày vận chuyển. Bạn hãy kiểm tra kĩ hàng trước khi thanh toán .</p>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="order-button-payment">
                                            <input type="submit" value="Đặt hàng" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
        <script>
            var citis = document.getElementById("city");
            var districts = document.getElementById("district");
            var wards = document.getElementById("ward");
            var Parameter = {
                url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json",
                method: "GET",
                responseType: "application/json",
            };
            var promise = axios(Parameter);
            promise.then(function(result) {
                renderCity(result.data);
            });

            function renderCity(data) {
                for (const x of data) {
                    citis.options[citis.options.length] = new Option(x.Name, x.Id);
                }
                citis.onchange = function() {
                    district.length = 1;
                    ward.length = 1;
                    if (this.value != "") {
                        const result = data.filter(n => n.Id === this.value);

                        for (const k of result[0].Districts) {
                            district.options[district.options.length] = new Option(k.Name, k.Id);
                        }
                    }
                };
                district.onchange = function() {
                    ward.length = 1;
                    const dataCity = data.filter((n) => n.Id === citis.value);
                    if (this.value != "") {
                        const dataWards = dataCity[0].Districts.filter(n => n.Id === this.value)[0].Wards;

                        for (const w of dataWards) {
                            wards.options[wards.options.length] = new Option(w.Name, w.Id);
                        }
                    }
                };
            }
        </script>
        @endsection