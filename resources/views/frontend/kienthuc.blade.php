@extends('frontend.layouts.app')

@section('content')

<div class="wrap-title">
    <div class="container">
        <a href="{{url('/')}}">Trang chủ</a>
            &nbsp; / &nbsp;
        <a href="{{url('/khampha/kienthuc')}}">Khám phá</a>
    </div>
</div>
<div class="wrap">
    <div class="container">
        <div class="box-2">
            <div class="title1">
                <h1><a href="">Khám Phá</a></h1>
            </div>
            <div class="box-new">
                <div class="box-new1 ">
                    <div class="box-img">
                        <a href=""><img src="{{ asset('images/rolex_lichsu.jpg') }}" alt=""></a>
                    </div>
                    <h3><a href="">Lịch sử thương hiệu đồng hồ Rolex chính hãng Thụy Sỹ</a></h3>
                </div> 
                <div class="box-new1 ">
                    <div class="box-img">
                        <a href=""><img src="{{ asset('images/quart.jpg') }}" alt=""></a>
                    </div>
                    <h3><a href="">Đồng hồ Quartz là gì? Đồng hồ Automatic là gì? Sự khác nhau giữa đồng hồ Quartz & Automatic</a></h3>
                </div> 
                <div class="box-new1 ">
                    <div class="box-img">
                        <a href=""><img src="{{ asset('images/hddt.png') }}" alt=""></a>
                    </div>
                    <h3><a href="">Đâu là chiếc điện thoại được mong đợi nhất sẽ ra mắt nửa cuối...</a></h3>
                </div> 
                <div class="box-new1 ">
                    <div class="box-img">
                        <a href=""><img src="{{ asset('images/kienthucip.jpg') }}" alt=""></a>
                    </div>
                    <h3><a href="">Rò rỉ hình ảnh ốp lưng của iPhone 13 Pro cho thấy cụm camera...</a></h3>
                </div> 
            </div>
        </div>
    </div>
</div>
@endsection