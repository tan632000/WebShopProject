@extends('frontend.layouts.app')

@section('content')
<div class="breadcrumb">
   <div class="container">
        <a href="{{url('/')}}">Trang chủ</a>
            &nbsp; / &nbsp;
        <a href="{{url('/dichvu')}}">Dịch Vụ</a>
             &nbsp; / &nbsp;
        <a href="{{url('/mualaidienthoai')}}">Mua lại điện thoại</a>
          
   </div>
</div>
<div id="wrapper">
     <div class="container">
           <div class="boxmain">
                <div class="gach1">
                     <h1 class="titlemain">Mua lại điện thoại Vertu cũ đã qua sử dụng</h1>
                </div>

                <div class="padd4all">
                     <div class="content">
                          <span style="color:#808080">
                               <span style="font-size:16px">
                               Nhằm tạo một Chuyên trang sưu tập và sân chơi về các dòng điện thoại đẹp, điện thoại độc... Uy tín, Chuyên nghiệp nên việc mua lại các sản phẩm điện thoại cũ đã qua sử dụng từ Quý khách hàng với giá cao nhất có thể nhằm tạo điều kiện cho những Khách hàng chưa biết, hoặc đam mê nhưng chưa có điều kiện có cơ hội được sở hửu những kiệt tác tuyệt đẹp với mức giá hợp lý khi mà số lượng máy ngày càng khan hiếm.
                              <br>
                              <br>
                              Chúng tôi thu mua lại tất cả các dòng máy điện thoại đời cao như Vertu,Mobiado....với giá cao nhất.Quý khách có nhu cầu bán máy vui lòng gọi trực tiếp hotline 034 209 0476 hoặc trực tiếp tại cửa hàng LUXURY HANOI - 90 Ô Chợ Dừa,HN
                              </span>
                          </span>
                             
                     <p class="detail" style="text-align: right;">
                          <a href="">[Quay lại]</a>
                     </p>
                     <br>
                     <br>
                     <br>
                     <h2 id="tinlienquan" style=" font-size: 20px;
                                                  margin-bottom: 15px;
                                                  color: #000;
                                                  font-family: inherit;
                                                  text-transform: uppercase;
                                                  font-weight: bold;">
                         Các tin liên quan
                    </h2>

                    <h3 class="tinhot" style="font-size: 16px; padding-left: 15px">
                         <i class="fas fa-caret-right"></i>
                         <a href="" style="color:#808080">DV sủa chữa</a>
                    </h3>
                </div>

           </div>
     </div>
</div>

@endsection