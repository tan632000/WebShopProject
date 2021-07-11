@extends('frontend.layouts.app')

@section('content')

<div class="wrap-title">
    <div class="container">
        <a href="">Trang chủ</a>
    </div>
</div>
<div class="wrap">
    <div class="container">
        <div class="box-2">
            <div class="title1">
                <h1><a href="">Học Viện Kỹ Thuật Mật Mã</a></h1>
            </div>
            <div class="kienthuc1">
                
                <div>
                    <h3 style="color:red;">Chào Mừng Đến Với Học Viện Kỹ Thuật Mật Mã </h3><br>
                    <img src="{{ asset('images/actvn.png') }}" style="width:50%;"> 
                </div> <br>

                <h4>Hãy cùng xem KMA có gì để các bạn có thể lựa chọn cho những năm tháng Đại học của mình nhé.</h4>
                <div>
                    <img src="{{ asset('images/actvn4.png') }}" style="width:50%;"> <br>
                </div>
                <p>Trường tuyển sinh hệ quân sự hay hệ dân sự? Trường mình tuy có đào tạo cả hệ quân sự (Mật mã)
                    và hệ dân sự (An toàn thông tin - Công nghệ thông tin - Điện tử viễn thông) nhưng chỉ tuyển sinh hệ dân sự gồm 3 ngành trên.</p>
                
                <div>
                    <img src="{{ asset('images/actvn1.jpg') }}" alt=""> <br>
                    <strong>1 góc sân trường</strong>
                </div>
                <div>
                    <img src="{{ asset('images/actvn3.jpg') }}" alt=""> <br>
                    <strong>"Căng-tin"</strong>
                </div>

                <h3> CÁC TIN LIÊN QUAN</h3>
                <h6><a href="">Messi, Neymar hay nhất Copa America 2021</a></h6>
                <h6><a href="">Vũ - "Hoàng tử Indie" của Việt Nam bước ra biển lớn </a></h6>
                <h6><a href="">Chung Kết EURO 2020</a></h6>
            </div>
           
        </div>
    </div>
</div>
@endsection