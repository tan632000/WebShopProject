@extends('frontend.layouts.app')

@section('content')

<div class="wrap-title">
    <div class="container">
        <a href="{{url('/')}}">Trang chủ</a>
            &nbsp; / &nbsp;
        <a href="{{url('/khampha')}}">Khám phá</a>
    </div>
</div>
<div class="wrap">
    <div class="container">
        <div class="box-2">
            <div class="title1">
                <h1><a href="">Khám Phá</a></h1>
            </div>
            <div class="box-new">
                <div class="box-new1">
                    <div class="box-img">
                        <a href="{{ url('/khampha/tintuc2') }}"><img src="{{ asset('images/vu-hp.jpg') }}" alt=""></a>
                    </div>
                    <h3><a href="{{ url('/khampha/tintuc2') }}">Vũ - "Hoàng tử Indie" của Việt Nam bước ra biển lớn</a></h3>
                </div>
                <div class="box-new1">
                    <div class="box-img">
                        <a href="{{ url('/khampha/kienthuc1') }}"><img src="{{ asset('images/rolex_lichsu.jpg') }}" alt=""></a>
                    </div>
                    <h3><a href="{{ url('/khampha/kienthuc1') }}">Lịch sử thương hiệu đồng hồ Rolex chính hãng Thụy Sỹ</a></h3>
                </div> 
                <div class="box-new1">
                    <div class="box-img">
                        <a href="{{ url('/khampha/tintuc1') }}"><img src="{{ asset('images/copa-America.jpg') }}" alt=""></a>
                    </div>
                    <h3><a href="{{ url('/khampha/tintuc1') }}">Messi, Neymar hay nhất Copa America 2021</a></h3>
                </div> 
                <div class="box-new1">
                    <div class="box-img">
                        <a href="{{ url('/khampha/kienthuc2') }}"><img src="{{ asset('images/quart.jpg') }}" alt=""></a>
                    </div>
                    <h3><a href="{{ url('/khampha/kienthuc2') }}">Đồng hồ Quartz là gì? Đồng hồ Automatic là gì? Sự khác nhau giữa đồng hồ Quartz & Automatic</a></h3>
                </div> 
                <div class="box-new1">
                    <div class="box-img">
                        <a href="{{ url('/khampha/kienthuc3') }}"><img src="{{ asset('images/hddt.png') }}" alt=""></a>
                    </div>
                    <h3><a href="{{ url('/khampha/kienthuc3') }}">Đâu là chiếc điện thoại được mong đợi nhất sẽ ra mắt nửa cuối...</a></h3>
                </div> 
                <div class="box-new1">
                    <div class="box-img">
                        <a href="{{ url('/khampha/kienthuc4') }}"><img src="{{ asset('images/kienthucip.jpg') }}" alt=""></a>
                    </div>
                    <h3><a href="{{ url('/khampha/kienthuc4') }}">Rò rỉ hình ảnh ốp lưng của iPhone 13 Pro cho thấy cụm camera...</a></h3>
                </div> 
                <div class="box-new1">
                    <div class="box-img">
                        <a href="{{ url('/khampha/tintuc3') }}"><img src="{{ asset('images/actvn.png') }}" alt=""></a>
                    </div>
                    <h3><a href="{{ url('/khampha/tintuc3') }}">Giới thiệu - Học Viện Kỹ Thuật Mật Mã</a></h3>
                </div> 
                <div class="box-new1">
                    <div class="box-img">
                        <a href="{{ url('/khampha/tintuc4') }}"><img src="{{ asset('images/euro2020.jpg') }}" alt=""></a>
                    </div>
                    <h3><a href="{{ url('/khampha/tintuc4') }}">Chung Kết EURO 2020</a></h3>
                </div> 
               
            </div>
        </div>
    </div>
</div>
@endsection