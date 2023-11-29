@extends('layout.index')

@section('title', 'Sản phẩm')

@section('content')

    <!-- ***** Product Area Starts ***** -->
    <section class="section" id="product">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="left-images">
                        <img src="assets/images/single-product-01.jpg" alt="">
                        <img src="assets/images//single-product-02.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="right-content">
                        <h4>Tên sản phẩm</h4>
                        <span class="price">Giá: VND</span>
                        <ul class="stars">
                            <li><i class="fa fa-heart-o" style="font-size:24px;"></i></li>
                        </ul>
                        <span>Mô tả</span>
                        <div class="quote">

                            <p>Mô tả ở đây</p>
                        </div>
                        <div class="quantity-content">
                            <div class="left-content">
                                <h6>Màu sắc </h6>
                            </div>
                            <div class="right-content">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-dark">Dark</button>
                                    <button type="button" class="btn btn-outline-dark">Dark</button>
                                    <button type="button" class="btn btn-outline-dark">Dark</button>
                                    <button type="button" class="btn btn-outline-dark">Dark</button>
                                    <button type="button" class="btn btn-outline-dark">Dark</button>
                                </div>
                            </div>
                            <div class="left-content">
                                <h6>Kích thước </h6>
                            </div>
                            <div class="right-content">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-dark">Dark</button>
                                    <button type="button" class="btn btn-outline-dark">Dark</button>
                                    <button type="button" class="btn btn-outline-dark">Dark</button>
                                    <button type="button" class="btn btn-outline-dark">Dark</button>
                                    <button type="button" class="btn btn-outline-dark">Dark</button>

                                </div>
                            </div>
                            <div class="left-content">
                                <h6>Số lượng </h6>
                            </div>
                            <div class="right-content">
                                <div class="quantity buttons_added">
                                    <input type="button" value="-" class="minus"><input type="number" step="1"
                                        min="1" max="" name="quantity" value="1" title="Qty"
                                        class="input-text qty text" size="4" pattern="" inputmode=""><input
                                        type="button" value="+" class="plus">
                                </div>

                            </div>
                        </div>
                        <div class="total">
                            <div class="main-border-button">
                                <a href="#">Thêm vào giỏ hàng</a>
                                <a href="#">Mua ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Product Area Ends ***** -->
@endsection
