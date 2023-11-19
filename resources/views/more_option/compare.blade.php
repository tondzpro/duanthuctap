@extends('templates.layout')
@section('content')
<div class="breadcrumb-area">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
            <li class="breadcrumb-item active">Compare</li>
        </ol>
    </div>
</div>
<!-- breadcrumb end -->

<!-- account area start -->
<div class="compare-area pt-60">
    <div class="container">
        <div class="table-content table-responsive">
            <table>
                <tbody>
                    <tr class="remove">
                        <th>Remove</th>
                        <td>
                            <a href="#">Remove<span>x</span></a>
                        </td>
                        <td>
                            <a href="#">Remove<span>x</span></a>
                        </td>
                        <td>
                            <a href="#">Remove<span>x</span></a>
                        </td>
                    </tr>
                    <tr class="image">
                        <th>Image</th>
                        <td>
                            <div><img src="assets/images/shop/1.1.webp" alt="" width="220" height="154"></div>
                        </td>
                        <td>
                            <div><img src="assets/images/shop/1.2.webp" alt="" width="220" height="154"></div>
                        </td>
                        <td>
                            <div><img src="assets/images/shop/1.3.webp" alt="" width="220" height="154"></div>
                        </td>
                    </tr>
                    <tr class="title">
                        <th>Title</th>
                        <td>Proin lectus ipsums</td>
                        <td>Fisher Price Toys</td>
                        <td>Nunc facilisiser</td>
                    </tr>
                    <tr class="price">
                        <th>Price</th>
                        <td>
                            <div class="price-box">
                                <span class="new-price">$89.00</span>
                                <span class="old-price">$135.00</span>
                            </div>
                        </td>
                        <td>
                            <div class="price-box">
                                <span class="new-price">$90.00</span>
                            </div>
                        </td>
                        <td>
                            <div class="price-box">
                                <span class="new-price">$98.00</span>
                                <span class="old-price">$110.00</span>
                            </div>
                        </td>
                    </tr>
                    <tr class="add-to-cart">
                        <th>Add to cart</th>
                        <td>
                            <a href="#">Select options</a>
                        </td>
                        <td>
                            <a href="#">Add to cart</a>
                        </td>
                        <td>
                            <a href="#">Select options</a>
                        </td>
                    </tr>
                    <tr class="description">
                        <th>Description</th>
                        <td>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique
                                auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper.
                                Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. </p>
                        </td>
                        <td>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique
                                auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper.
                                Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. </p>
                        </td>
                        <td>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique
                                auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper.
                                Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. </p>
                        </td>
                    </tr>
                    <tr class="stock">
                        <th>Availability</th>
                        <td>In stock</td>
                        <td>In stock</td>
                        <td>In stock</td>
                    </tr>
                    <tr class="price price2">
                        <th>Price</th>
                        <td>
                            <div class="price-box">
                                <span class="new-price">$89.00</span>
                                <span class="old-price">$135.00</span>
                            </div>
                        </td>
                        <td>
                            <div class="price-box">
                                <span class="new-price">$90.00</span>
                            </div>
                        </td>
                        <td>
                            <div class="price-box">
                                <span class="new-price">$98.00</span>
                                <span class="old-price">$110.00</span>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection