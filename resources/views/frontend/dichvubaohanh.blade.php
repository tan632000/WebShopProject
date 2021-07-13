@extends('frontend.layouts.app')

@section('content')

<div class="breadcrumb">
   <div class="container">
        <a href="{{url('/')}}">Trang chủ</a>
            &nbsp; / &nbsp;
        <a href="{{url('/dichvu')}}">Dịch Vụ</a>
             &nbsp; / &nbsp;
        <a href="{{url('/dichvubaohanh')}}">Dịch vụ bảo hành</a>
          
   </div>
</div>
<div id="wrapper">
     <div class="container">
           <div class="boxmain">
                <div class="gach1">
                     <h1 class="titlemain">Dịch vụ bảo hành</h1>
                </div>

                <div class="padd4all">
                     <div class="content" style=" margin-top: 30px">
                          
                          <div>
                              <span style="color: #808080">
                                    <span style="font-size: 16px">
                                    Tất cả các sản phẩm đều được chúng tôi hỗ trợ bảo hành là 12 tháng tính từ ngày khách hàng mua hàng,đối với một số dòng sản phẩm có thể lên đến 24 tháng.
                                    </span>
                              </span>
                          </div>
                          <br>
                          <div>
                              <span style="color: #808080">
                                    <span style="font-size: 16px">
                                    Máy của quý khách mang đến BH trong thời gian còn hiệu lực đối với một số lỗi thông thường chúng tôi sẻ trả máy cho quý khách trong ngày với khoảng thời gian nhanh nhất có thể.Đối với những máy cần để lại kiểm tra chúng tôi sẽ kiểm tra và thông báo lại tình trạng máy va thời gian trả máy cho quý khách(chúng tôi luôn cố gắng trả máy cho khách hàng nhanh nhất để không làm mất thời gian chờ đợi của khách hàng)
                                   </span>
                              </span>
                          </div>
                          <br>

                          <div>
                              <span style="color: #808080">
                                    <span style="font-size: 16px">
                                    Máy của quý khách mang đến BH khi hết thời gian BH chúng tôi vẫn nhận kiểm tra máy cho khách hàng đối với một số lỗi nhỏ chúng tôi sẽ không tính phí.Chúng tôi có thể tính phí đối với những lỗi cụ thể sau khi tiến hành kiểm tra máy của quý khách       
                                  </span>
                                </span>
                          </div>
                          <br>
                          <div>
                               <span style="color: #808080">
                                    <span style="font-size: 16px">
                                    Hỗ trợ bảo hành tại nhà cho quý khách
                                     </span>
                                </span>
                          </div>
                          <br>
                          <div>
                                <span style="color: #b22222;">
                                    <strong>
                                        <span style="font-size:20px" > QUY ĐỊNH VỀ DỊCH VỤ BẢO HÀNH SẢN PHẨM</span>
                                    </strong>
                                </span>
                          </div>
                          <br>

                          <div style="padding-left: 20px">
                               <span style="color: #808080; ">
                                    <span style="font-size: 16px; ">
                                    Máy phải mang đến trung tâm cùng phiếu bảo hành.Máy chỉ được bảo hành khi có phiếu bảo hành và ghi đầy đủ các dữ liệu cần thiết trùng khớp với số IMEI trong phiếu bảo hành.Máy chỉ được bảo hành khi có phiếu bảo hàng (chúng tôi có giữ lại một cuống phiếu bảo hành để kiểm tra thẻ bảo hành của khách khi cần) không được tẩy xóa sửa chữa.
                                     </span>
                                </span>
                          </div>
                          <br>
                          <div>
                                <span style="color: #b22222;">
                                    <strong>
                                        <span style="font-size:20px" >Trung tâm sẽ không chịu trách nhiệm bảo hành trong những truờng hợp sau:</span>
                                    </strong>
                                </span>
                          </div>
                          <br>
                          <div style="padding-left: 20px">
                               <span style="color: #808080; ">
                                    <span style="font-size: 16px; ">
                                    Máy không được sử dụng đúng với hướng dẫn trong sổ tay hướng dẫn.
                                     </span>
                                </span>
                          </div>
                          <div style="padding-left: 20px">
                               <span style="color: #808080; ">
                                    <span style="font-size: 16px; ">
                                    Màn hình LCD bị mất nét, đen trắng sọc màn hình sau khi sử dụng.Không bảo hành thẻ nhớ, tai nghe
                                     </span>
                                </span>
                          </div>
                          <div style="padding-left: 20px">
                               <span style="color: #808080; ">
                                    <span style="font-size: 16px; ">
                                    Vỏ thân máy bị trầy xước, có vết  mốc, gỉ, ăn mòn, bị nứt vỡ, gẫy, biến dạng, cháy nổ, có chất lỏng, dây nguồn do đóng mở.
                                     </span>
                                </span>
                          </div>
                          <div style="padding-left: 20px">
                               <span style="color: #808080; ">
                                    <span style="font-size: 16px; ">
                                    Máy để trong môi trường ẩm ướt ( phòng lạnh ), Nhiệt độ cao, ngoài nắng, gần lửa, các nguồn nhiệt vượt quá nhiệt độ cho phép( dưới 15*C và trên 40*C )
                                     </span>
                                </span>
                          </div>
                          <div style="padding-left: 20px">
                               <span style="color: #808080; ">
                                    <span style="font-size: 16px; ">
                                    Máy có mùi khét, mùi lạ tại một phần hoặc toàn bộ máy. Máy bị cấn dẫn đến bị cong Mainboard.
                                     </span>
                                </span>
                          </div>
                          <div style="padding-left: 20px">
                               <span style="color: #808080; ">
                                    <span style="font-size: 16px; ">
                                    Máy bị ướt mưa, rơi  vào nước, rớt xuống đất hoặc va chạm vào vật cứng
                                     </span>
                                </span>
                          </div>
                          <div style="padding-left: 20px">
                               <span style="color: #808080; ">
                                    <span style="font-size: 16px; ">
                                    Khách hàng tự ý can thiệp vào bên trong máy hoặc tự ý làm phần mền (không phải do trung tâm)
                                     </span>
                                </span>
                          </div>
                          <div style="padding-left: 20px">
                               <span style="color: #808080; ">
                                    <span style="font-size: 16px; ">
                                    Máy trong tình trạng security code, lock sim card, contact service, màn hình không đọc được IMEI (số IMEI không hiên lên nàm hình )
                                     </span>
                                </span>
                          </div>
                          <div style="padding-left: 20px">
                               <span style="color: #808080; ">
                                    <span style="font-size: 16px; ">
                                    Thay đổi ,làm gẫy Anten hoặc dán keo hoặc làm máy không tản nhiệt được
                                     </span>
                                </span>
                          </div>
                          <div style="padding-left: 20px">
                               <span style="color: #808080; ">
                                    <span style="font-size: 16px; ">
                                    Phiếu bảo hành bị mất hoặc không chính xác với  cuống phiếu trung tâm .
                                     </span>
                                </span>
                          </div>
                          <div style="padding-left: 20px">
                               <span style="color: #808080; ">
                                    <span style="font-size: 16px; ">
                                    Máy đem bảo hành sau khi hết hạn bảo hành.
                                     </span>
                                </span>
                          </div>
                          <br>
                          <div >
                               <span style="color: #808080; ">
                                    <span style="font-size: 16px; ">
                                    ​Trung tâm bảo hành không giải quyết mọi lý do trả lại máy
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
                         <a href="{{url('/chinhsachvanchuyen')}}" style="color:#808080">Chính sách vận chuyển</a>
                    </h3>
                </div>

           </div>
     </div>
</div>

@endsection