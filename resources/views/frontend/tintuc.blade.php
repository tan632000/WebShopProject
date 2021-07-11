@extends('frontend.layouts.app')

@section('content')

<div class="wrap-title">
    <div class="container">
        <a href="{{url('/')}}">Trang chủ</a>
            &nbsp; / &nbsp;
        <a href="{{url('/khampha/tintuc')}}">Tin Tức</a>
    </div>
</div>
<div class="wrap">
    <div class="container">
        <div class="box-2">
            <div class="title1">
                <h1><a href="">Tin Tức</a></h1>
            </div>
            <div class="box-new">
                <div class="box-new1 ">
                    <div class="box-img">
                        <a href=""><img src="{{ asset('images/copa-America.jpg') }}" alt=""></a>
                    </div>
                    <h3><a href="">Messi, Neymar hay nhất Copa America 2021</a></h3>
                </div> 
                <div class="box-new1 ">
                    <div class="box-img">
                        <a href=""><img src="{{ asset('images/vu-hp.jpg') }}" alt=""></a>
                    </div>
                    <h3><a href="">Vũ - "Hoàng tử Indie" của Việt Nam bước ra biển lớn</a></h3>
                </div> 
                <div class="box-new1 ">
                    <div class="box-img">
                        <a href=""><img src="{{ asset('images/actvn.png') }}" alt=""></a>
                    </div>
                    <h3><a href="">Giới thiệu - Học Viện Kỹ Thuật Mật Mã</a></h3>
                </div> 
                <div class="box-new1 ">
                    <div class="box-img">
                        <a href=""><img src="{{ asset('images/euro2020.jpg') }}" alt=""></a>
                    </div>
                    <h3><a href="">Chung Kết EURO 2020</a></h3>
                </div> 
            </div>
        </div>
    </div>
</div>
@endsection