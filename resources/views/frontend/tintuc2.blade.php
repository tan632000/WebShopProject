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
                <h1><a href="">Vũ - "Hoàng tử Indie" của Việt Nam bước ra biển lớn</a></h1>
            </div>
            <div class="kienthuc1">
          
                <div>
                    <img src="{{ asset('images/vu-hp.jpg') }}" alt=""> <br>
                    <strong>Màn kết hợp của "Hoàng tử Indie" Việt Nam - Thái Vũ với chủ nhân hit "7 years" - Lukas Graham được khán giả đánh giá cao.</strong>
                </div>
                <div>
                    <audio controls autoplay>
                        <source src="{{ asset('images/hfy.mp3') }}" type="audio/mpeg">
                    </audio>
                </div>
                <h4>MV song ngữ "Happy for you" của "Hoàng tử Indie" Thái Vũ kết hợp với nghệ sĩ Đan Mạch Lukas Graham - chủ nhân hit 1 tỉ view "7 years" - leo lên Top 3 âm nhạc thịnh hành YouTube chỉ sau 1 ngày phát hành.</h4>
                <p>Sau hơn 5 ngày phát hành, ca khúc “Happy For You” của Lukas Graham kết hợp cùng Vũ. vẫn chưa ngừng nhận về những phản hồi tích cực từ công chúng. Performance video cho sản phẩm đã thu về hơn 3,2 triệu lượt xem trên YouTube,
                    204 nghìn lượt yêu thích cùng hơn 8 nghìn bình luận từ fan Việt lẫn khán giả nước ngoài. Đến nay, video vẫn đang đứng đầu Top Trending mảng âm nhạc trên nền tảng, đồng thời từng chiếm vị trí No.3 trên Top Trending tổng hợp tất cả các mảng.</p>

                <div>
                    <img src="{{ asset('images/vu-hp1.jpg') }}" alt=""> <br>
                    <strong>Màn hợp tác của Vũ. và Lukas Graham vẫn liên tục mang về cho các nghệ sĩ những thành tích mới.</strong>
                </div>
                <h3> CÁC TIN LIÊN QUAN</h3>
                <h6><a href="">Messi, Neymar hay nhất Copa America 2021</a></h6>
                <h6><a href="">Giới thiệu - Học Viện Kỹ Thuật Mật Mã </a></h6>
                <h6><a href="">Chung Kết EURO 2020</a></h6>
            </div>
           
        </div>
    </div>
</div>
@endsection