@extends('frontend.layouts.app')

@section('content')

<div class="breadcrumb">
   <div class="container">
          <a href="{{url('/')}}">Trang chủ</a>
            &nbsp; / &nbsp;
          <a href="{{url('/dichvu')}}">Dịch vụ</a>
             &nbsp; / &nbsp;
          <a href="{{url('/dichvusuachua')}}">DV sửa chữa</a>
          
   </div>
</div>
<div id="wrapper">
     <div class="container">
           <div class="boxmain">
                <div class="gach1">
                     <h1 class="titlemain">DV sửa chữa</h1>
                </div>

                <div class="padd4all">
                     <div class="content">
                          <span style="color:#808080">
                               <span style="font-size:16px">
                               Luxury Hanoi – Với đội ngũ nhân viên kỹ thuật nhiều năm kinh nghiệm trong lĩnh vực sửa chữa điện thoại VERTU ….Công ty chúng tôi luôn luôn mang đến cho khách hàng những giải pháp cao cấp nhất với phong cách chuyên nghiệp và chi phí hợp lý nhất.                            
                              <br>
                              <br>
                              Vertu là dòng sản phẩm điện thoại cao cấp, quý tộc được làm thủ công từ những người thợ bậc thầy và được cấu thành từ rất nhiều chi tiết nhỏ, tinh xảo nên việc sửa chữa vertu đòi hỏi phải có những người thợ lành nghề và máy móc hiện đại. Đến với Chúng tôi bạn hoàn toàn yên tâm về dịch vụ sửa chữa với đội ngũ kỹ thuật lành nghề, được đào tạo bài bản sẽ chuẩn đoán chính xác bệnh, đúng bệnh, đúng linh kiện xịn, với giá tốt nhất, được bảo hành dài hạn 03-12 tháng tùy loại. Mọi việc sửa chữa, vệ sinh hay tháo lắp chỉ được thực hiện khi có sự đồng ý của Quý khách hàng. 
                              </span>
                          </span>
                          <br>
                          <br>
                          <ul style="font-size:16px ;padding-left: 30px">
                               <li>
                                   <span style="color: #808080;"> Sửa chữa thay thế các loại loa, mic, chân sạc, nguồn... của điện thoại vertu</span>
                               </li>
                               <li>
                                   <span style="color: #808080;"> Sửa chữa, thay thế các loại màn hình vertu signature, vertu constellation, vertu ascent...</span>
                               </li>
                               <li>
                                   <span style="color: #808080;"> Thay mặt kính các loại của điện thoại vertu</span>
                               </li>
                               <li>
                                   <span style="color: #808080;"> Thay nút bàn phím, phím các loại của điện thoại vertu</span>
                               </li>
                               <li>
                                   <span style="color: #808080;"> Thay da, bọc lại da, làm mới da cho điện thoại vertu</span>
                               </li>
                               <li>
                                   <span style="color: #808080;"> Đánh bóng, làm mới vertu các loại với công nghệ xi bóng hàng đầu việt nam</span>
                               </li>
                               <li>
                                   <span style="color: #808080;"> Chạy lại phần mềm các loại điện thoại Vertu, mở khóa, mở mạng các điện thoại vertu</span>
                               </li>
                          </ul>
                     </div>
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
                         <a href="{{url('/dichvubaohanh')}}" style="color:#808080">Bảo hành sản phẩm</a>
                    </h3>
                </div>

           </div>
     </div>
</div>

@endsection