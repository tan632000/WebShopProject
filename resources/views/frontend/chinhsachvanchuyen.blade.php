@extends('frontend.layouts.app')

@section('content')

<div class="breadcrumb">
   <div class="container">
        <a href="{{url('/')}}">Trang chủ</a>
            &nbsp; / &nbsp;
        <a href="{{url('/dichvu')}}">Dịch Vụ</a>
             &nbsp; / &nbsp;
        <a href="{{url('/chinhsachvanchuyen')}}">Chính sách vận chuyển</a>
          
   </div>
</div>
<div id="wrapper">
     <div class="container">
           <div class="boxmain">
                <div class="gach1">
                     <h1 class="titlemain">Chính sách vận chuyển</h1>
                </div>

                <div class="padd4all">
                     <div class="content" style=" margin-top: 30px">
                          <div>
                                <span style="color: #b22222;">
                                    <strong>
                                        <span style="font-size:20px" > Chính sách vận chuyển</span>
                                    </strong>
                                </span>
                          </div>
                          <div>
                              <span style="color: #808080">
                                    <span style="font-size: 16px">
                                    LUXURY HANOI miễn phí vận chuyển trên toàn quốc
                                    </span>
                              </span>
                          </div>
                          <div>
                              <span style="color: #808080">
                                    <span style="font-size: 16px">
                                    1. Khu vực Hà nội và lân cận:
                                    </span>
                              </span>
                          </div>
                          <div>
                              <span style="color: #808080">
                                    <span style="font-size: 16px">
                                    - Nhân viên vận chuyển của chúng tôi sẽ giao hàng tận nơi.
                                    </span>
                              </span>
                          </div>
                          <div>
                              <span style="color: #808080">
                                    <span style="font-size: 16px">
                                    2. Các tỉnh ngoài:
                                    </span>
                              </span>
                          </div>
                          <div>
                              <span style="color: #808080">
                                    <span style="font-size: 16px">
                                    - Sử dụng hương thức chuyển hàng của dịch vụ bưu chính Viettel (Viettel Post)
                                    </span>
                              </span>
                          </div>
                          <div>
                              <span style="color: #808080">
                                    <span style="font-size: 16px">
                                    Thời gian chuyển từ 1-2 ngày.Khách hàng thanh toán sau khi nhận hàng.
                                    </span>
                              </span>
                          </div>

                         
                         
                          
                     </div>
                     <p class="detail" style="text-align: right;">
                          <a href="{{url('/dichvu')}}">[Quay lại]</a>
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
                         <a href="{{url('/cachthucthanhtoan')}}" style="color:#808080">Cách thức thanh toán</a>
                    </h3>
                    <h3 class="tinhot" style="font-size: 16px; padding-left: 15px">
                         <i class="fas fa-caret-right"></i>
                         <a href="{{url('/chinhsachdoitra')}}" style="color:#808080">Chính sách đổi trả hàng</a>
                    </h3>
                    <h3 class="tinhot" style="font-size: 16px; padding-left: 15px">
                         <i class="fas fa-caret-right"></i>
                         <a href="{{url('/baomatthongtin')}}" style="color:#808080">Bảo mật thông tin khách hàng</a>
                    </h3>
                </div>

           </div>
     </div>
</div>

@endsection