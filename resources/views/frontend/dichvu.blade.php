@extends('frontend.layouts.app')

@section('content')

<div class="wrap-title">
    <div class="container">
        <a href="">Trang chủ</a>
            &nbsp; / &nbsp;
        <a href="">Dịch vụ</a>
    </div>
</div>
<div class="wrap">
    <div class="container">
        <div class="box-2">
            <div class="title1">
                <h1><a href="">Dịch vụ</a></h1>
            </div>
            <div class="box-new">
                <div class="box-new1">
                    <h3><a href="">Dịch Vụ sửa chữa</a></h3>
                </div>
                
                <div class="box-new1">
                    <h3><a href="">Bảo hành sản phẩm </a></h3>
                </div>

                <div class="box-new1">
                    <div class="box-img">
                        <a href=""><img src="{{ asset('images/vertu6.jpg') }}" alt=""></a>
                    </div>
                    <h3><a href="">Mua lại điện thoại Vertu cũ đã qua sử dụng</a></h3>
                </div> 
                
                <div class="box-new1">
                    <h3><a href="">Cách thức thanh toán</a></h3>
                </div>

                <div class="box-new1">
                    <h3><a href="">Bảo mật thông tin khách hàng </a></h3>
                </div> 

                <div class="box-new1">
                    <h3><a href="">chính sách vận chuyển </a></h3>
                </div> 

                <div class="box-new1">
                    <h3><a href="">Chính sách đôi trả hàng</a></h3>
                </div>

                <div class="box-new1">
                    <div class="box-img">
                        <a href=""><img src="{{ asset('images/vertu6.jpg') }}" alt=""></a>
                    </div>
                    <h3><a href="">Dịch vụ bảo hành </a></h3>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection