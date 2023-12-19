@extends('layout.index')

@section('title', 'Thanh toán')

@section('content')
    <div class="thanh-toan">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <h5>Thông tin đơn hàng</h5>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="eugxlEFKBqgcVbE6eADUreOtORzRkAo8bmIMhZtb"
                                autocomplete="off">
                            <div class="form-group">
                                <input type="text" name="hovaten" class="form-control" id="inputAddress"
                                    placeholder="Họ và tên">
                                <div class="error-message"></div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-8">
                                    <input type="email" name="email" class="form-control" id="inputEmail4"
                                        placeholder="Email">
                                    <div class="error-message"></div>
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" name="sdt" class="form-control" id="inputAddress2"
                                        placeholder="Số điện thoại">
                                    <div class="error-message"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="diachi" class="form-control" id="inputCity"
                                    placeholder="Địa chỉ">
                                <div class="error-message"></div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <select class="field-input" id="tinh" name="tinh">
                                        <option data-code="null" value="null">
                                            Chọn tỉnh / thành </option>
                                        <option data-code="HC" value="">Hồ Chí Minh</option>
                                        <option data-code="HI" value="1">Hà Nội</option>
                                        <option data-code="DA" value="32">Đà Nẵng</option>
                                        <option data-code="AG" value="57">An Giang</option>
                                        <option data-code="BV" value="49">Bà Rịa - Vũng Tàu</option>
                                        <option data-code="BI" value="47">Bình Dương</option>
                                        <option data-code="BP" value="45">Bình Phước</option>
                                        <option data-code="BU" value="39">Bình Thuận</option>
                                        <option data-code="BD" value="35">Bình Định</option>
                                        <option data-code="BL" value="62">Bạc Liêu</option>
                                        <option data-code="BG" value="15">Bắc Giang</option>
                                        <option data-code="BK" value="4">Bắc Kạn</option>
                                        <option data-code="BN" value="18">Bắc Ninh</option>
                                        <option data-code="BT" value="53">Bến Tre</option>
                                        <option data-code="CB" value="3">Cao Bằng</option>
                                        <option data-code="CM" value="63">Cà Mau</option>
                                        <option data-code="CN" value="59">Cần Thơ</option>
                                        <option data-code="GL" value="41">Gia Lai</option>
                                        <option data-code="HG" value="2">Hà Giang</option>
                                        <option data-code="HM" value="23">Hà Nam</option>
                                        <option data-code="HT" value="28">Hà Tĩnh</option>
                                        <option data-code="HO" value="11">Hòa Bình</option>
                                        <option data-code="HY" value="21">Hưng Yên</option>
                                        <option data-code="HD" value="19">Hải Dương</option>
                                        <option data-code="HP" value="20">Hải Phòng</option>
                                        <option data-code="HU" value="60">Hậu Giang</option>
                                        <option data-code="KH" value="37">Khánh Hòa</option>
                                        <option data-code="KG" value="58">Kiên Giang</option>
                                        <option data-code="KT" value="40">Kon Tum</option>
                                        <option data-code="LI" value="8">Lai Châu</option>
                                        <option data-code="LA" value="51">Long An</option>
                                        <option data-code="LO" value="6">Lào Cai</option>
                                        <option data-code="LD" value="44">Lâm Đồng</option>
                                        <option data-code="LS" value="13">Lạng Sơn</option>
                                        <option data-code="ND" value="24">Nam Định</option>
                                        <option data-code="NA" value="27">Nghệ An</option>
                                        <option data-code="NB" value="25">Ninh Bình</option>
                                        <option data-code="NT" value="38">Ninh Thuận</option>
                                        <option data-code="PT" value="16">Phú Thọ</option>
                                        <option data-code="PY" value="36">Phú Yên</option>
                                        <option data-code="QB" value="29">Quảng Bình</option>
                                        <option data-code="QM" value="33">Quảng Nam</option>
                                        <option data-code="QG" value="34">Quảng Ngãi</option>
                                        <option data-code="QN" value="14">Quảng Ninh</option>
                                        <option data-code="QT" value="30">Quảng Trị</option>
                                        <option data-code="ST" value="61">Sóc Trăng</option>
                                        <option data-code="SL" value="9">Sơn La</option>
                                        <option data-code="TH" value="26">Thanh Hóa</option>
                                        <option data-code="TB" value="22">Thái Bình</option>
                                        <option data-code="TY" value="12">Thái Nguyên</option>
                                        <option data-code="TT" value="31">Thừa Thiên Huế</option>
                                        <option data-code="TG" value="52">Tiền Giang</option>
                                        <option data-code="TV" value="54">Trà Vinh</option>



                                        <option data-code="TQ" value="5">Tuyên Quang</option>



                                        <option data-code="TN" value="46">Tây Ninh</option>



                                        <option data-code="VL" value="55">Vĩnh Long</option>



                                        <option data-code="VT" value="17">Vĩnh Phúc</option>



                                        <option data-code="YB" value="10">Yên Bái</option>



                                        <option data-code="DB" value="7">Điện Biên</option>



                                        <option data-code="DC" value="42">Đắk Lắk</option>



                                        <option data-code="DO" value="43">Đắk Nông</option>



                                        <option data-code="DN" value="48">Đồng Nai</option>



                                        <option data-code="DT" value="56">Đồng Tháp</option>



                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <select class="field-input" id="quan" name="quan">
                                        <option data-code="null" value="null" selected="">Chọn quận / huyện</option>
                                    </select>
                                </div>
                                {{-- <div class="form-group col-md-4">
                                    <select class="field-input" id="phuong" name="phuong">
                                        <option data-code="null" value="null" selected="">Chọn phường / xã</option>
                                    </select>
                                </div> --}}
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Đặt hàng</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <table class="table" style="color:#111;">
                            <tbody>
                                <tr>
                                    <td rowspan="2" style="width:100px;padding-left:0; padding-right:0;">
                                        <img class="img-fluid"
                                            src="https://cdn2.yame.vn/pimg/cart-thumb/28ae7f09-14dc-ed00-7e2f-001a6e0ccc03.jpg?w=70&amp;h=100&amp;c=true"
                                            alt="Áo Thun Cổ Tròn Tay Ngắn Sợi Nhân Tạo Co Giãn Trơn Dáng Vừa Đơn Giản Cosmo 26">
                                        <div>
                                            <form action="/cart/RemoveItem" id="formRemoveItem" method="POST">
                                                <input type="hidden" name="__ProductUpc" value="0022206003">
                                                <a href="javascript:void(0);" class="js-removeFromCart"><span
                                                        class="icon-delete"></span> Xóa</a>
                                            </form>
                                        </div>
                                    </td>
                                    <td style="padding-left:0; padding-right:0;">
                                        <p class="mb-1">
                                            <a href="/shop/ao-thun-don-gian-sale/ao-thun-co-tron-y1-m26-0022206?c=Xám Ghi"
                                                style="font-size:14px;">Áo Thun Cổ Tròn Tay Ngắn Sợi Nhân Tạo Co Giãn Trơn
                                                Dáng Vừa Đơn Giản Cosmo 26 - Xám Ghi, L</a>
                                        </p>
                                        <p class="mb-0">
                                            <span>Số lượng <b>1</b></span> * <span class="text-black">187,000 đ</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding-left:0; padding-right:0;">
                                        <div style="display:none;">
                                            <span style="font-size:11px;">Mã giảm giá</span>
                                            <form action="/cart/SetVoucher" method="POST" class="form-inline">
                                                <input type="hidden" name="__ProductUpc" value="0022206003">
                                                <input type="hidden" name="__Qty" value="1">
                                                <div class="form-group mb-2">
                                                    <input class="form-control-sm" type="text" placeholder=""
                                                        style="width:150px;" name="__txtVoucher">
                                                </div>
                                                <button type="submit" class="btn-sm btn-outline-secondary mb-2"
                                                    style="height:31px;">Thêm mã</button>
                                            </form>
                                        </div>
                                        = <b>187,000 <span>đ</span></b>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-right" style="padding-left:0; padding-right:0;">
                                        Giao hàng
                                    </td>
                                    <td>
                                        <div style="font-size:16px; color:#f00;">19,000đ</div>
                                        <div style="font-size:16px; color:#111;">* Miễn phí với đơn hàng từ <b>500K</b>.
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-right" style="padding-left:0; padding-right:0;">
                                        Tổng:
                                    </td>
                                    <td>
                                        <div id="grandTotal" style="font-size:16px; color:#f00;"><b>206,000
                                                <span>đ</span></b></div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
