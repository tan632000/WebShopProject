@extends('frontend.layouts.app')

@section('content')

<div class="wrap-title">
    <div class="container">
        <a href="{{url('/')}}">Trang chủ</a>
            &nbsp; / &nbsp;
        <a href="{{url('/dichvu')}}">Dịch vụ</a>
    </div>
</div>
<div class="wrap">
    <div class="container">
        <div class="boxmain">
            <div class="gach1" style=" border-bottom: 1px solid #FF6E01;
                                        margin-bottom: 20px;
                                        margin-left: 1px;">
                <h1 class="titlemain"><a href="{{url('/dichvu')}}">Dịch vụ</a></h1>
            </div>
            <div class="box-new">
                <div class="box-new1">
                    <h3><a href="{{url('/dichvusuachua')}}">Dịch vụ sửa chữa</a></h3>
                </div>
                
                <div class="box-new1">
                    <h3><a href="{{url('/dichvubaohanh')}}">Bảo hành sản phẩm </a></h3>
                </div>

                <div class="box-new1">
                    <!-- <div class="box-img">
                        <a href=""><img src="{{ asset('images/vertu6.jpg') }}" alt="" style=" width: 200px; height :200px ;" ></a>
                    </div> -->
                    <h3><a href="{{url('/mualaidienthoai')}}">Mua lại điện thoại cũ đã qua sử dụng</a></h3>
                </div> 
                
                <div class="box-new1">
                    <h3><a href="{{url('/cachthucthanhtoan')}}">Cách thức thanh toán</a></h3>
                </div>

                <div class="box-new1">
                    <h3><a href="{{url('/baomatthongtin')}}">Bảo mật thông tin khách hàng </a></h3>
                </div> 

                <div class="box-new1">
                    <h3><a href="{{url('/chinhsachvanchuyen')}}">Chính sách vận chuyển </a></h3>
                </div> 

                <div class="box-new1">
                    <h3><a href="{{url('/chinhsachdoitra')}}">Chính sách đôi trả hàng</a></h3>
                </div>

                <div class="box-new1">
                    <!-- <div class="box-img">
                        <a href=""><img src="{{ asset('images/vertu6.jpg') }}" alt=""></a>
                    </div> -->
                    <h3><a href="{{url('/dichvubaohanh')}}">Dịch vụ bảo hành </a></h3>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection