@extends('layout.index')

@section('title', 'Thông tin khách hàng')

@section('content')
    <div class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="left-content">
                        <li><a href="/thong-tin-khach-hang">Thông tin tài khoản</a></li>
                        <li><a href="/thong-tin-khach-hang/don-hang">Đơn hàng của bạn</a></li>
                        <li><a href="/thong-tin-khach-hang/doi-mat-khau">Đổi mật khẩu</a></li>
                        <li><a href="/thong-tin-khach-hang/dia-chi">Sổ địa chỉ</a></li>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="right-content">
                        <h4>ĐƠN HÀNG CỦA BẠN</h4>
                        <table>
                            <thead class="thead-default">
                                <tr>
                                    <th>Mã đơn hàng</th>
                                    <th>Ngày đặt</th>
                                    <th>Địa chỉ</th>
                                    <th>Thành tiền</th>
                                    <th>TT thanh toán</th>
                                    <th>TT vận chuyển</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Mã đơn hàng</td>
                                    <td>Ngày đặt</td>
                                    <td>Địa chỉ</td>
                                    <td>Mã đơn hàng</td>
                                    <td>Ngày đặt</td>
                                    <td>Địa chỉ</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
