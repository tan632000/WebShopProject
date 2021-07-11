@extends('frontend.layouts.app')

@section('content')
<<<<<<< HEAD
<div class="breadcrumb">
   <div class="container">
        <a href="">Trang chủ</a>
            &nbsp; / &nbsp;
        <a href="">Dịch Vụ</a>
             &nbsp; / &nbsp;
        <a href="">Cách thức thanh toán</a>
          
   </div>
</div>
<div id="wrapper">
     <div class="container">
           <div class="boxmain">
                <div class="gach1">
                     <h1 class="titlemain">Cách thức thanh toán</h1>
                </div>

                <div class="padd4all">
                     <div class="content" style="font-size:16px ; margin-top: 30px">
                         <div>
                                <span style="color:#ff0000">
                                    <strong>
                                            <span style="font-size:20px">
                                            Cách thức thanh toán
                                            </span>
                                    </strong>
                                </span>
                         </div>
                         <div>
                             <span> I. THANH TOÁN TRỰC TIẾP</span>
                         </div>
                        <div> &nbsp</div>
                        <div>
                            <span> • Quý khách có thể thanh toán trực tiếp tại showrom Luxury Hanoi: </span>
                        </div>
                        <div> &nbsp</div>
                        <div>
                            <span> Số 90 phố Ô Chợ Dừa,Đống Đa,Hà Nội</span>
                        </div>
                        <div> &nbsp</div>
                        <div>
                            <span> • Chúng tôi chấp nhận thanh qua thẻ thanh toán quốc tế (VISA, MASTER…) và thẻ nội địa của tất cả các Ngân hàng cho khách hàng</span>
                        </div>
                        <div> &nbsp</div>
                        <div>
                             <span> II. CHUYỂN KHOẢN QUA HỆ THỐNG TÀI KHOẢN NGÂN HÀNG</span>
                         </div>
                        <div> &nbsp</div>
                        <div>
                             <span> • Ngân hàng Vietcombank- CN Hà Nội :</span>
                         </div>
                        <div> &nbsp</div>
                        <div>
                             <span> *Chủ tài khoản: Vũ Hồng Quyết</span>
                         </div>
                        <div> &nbsp</div>
                        <div>
                             <span> * Số tài khoản: 0011009955555</span>
                         </div>
                        <div> &nbsp</div>
                        <div>
                             <span> • Ngân hàng BIDV – CN Hà Nội</span>
                         </div>
                        <div> &nbsp</div>
                        <div>
                             <span> *Chủ tài khoản: Vũ Hồng Quyết</span>
                         </div>
                        <div> &nbsp</div>
                        <div>
                             <span> * Số tài khoản: 12010006106779</span>
                         </div>
                        <div> &nbsp</div>
                          
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
                         <a href="" style="color:#808080">Chính sách đổi trả hàng</a>
                    </h3>
                    <h3 class="tinhot" style="font-size: 16px; padding-left: 15px">
                         <i class="fas fa-caret-right"></i>
                         <a href="" style="color:#808080">Chính sách vận chuyển</a>
                    </h3>
                    <h3 class="tinhot" style="font-size: 16px; padding-left: 15px">
                         <i class="fas fa-caret-right"></i>
                         <a href="" style="color:#808080">Bảo mật thông tin khách hàng</a>
                    </h3>
                </div>

           </div>
     </div>
</div>

=======

<div class="wrap-title">
    <div class="container">
        <a href="{{url('/')}}">Trang chủ</a>
    </div>
</div>
<div class="wrap">
    <div class="container">
        <div class="box-2">
            <div class="title1">
                <h1><a href="">THANH TOÁN</a></h1>
            </div>
           <div class="carts_giohang">
               <table style="width:1100px;">
                   <tbody>
                       <tr class="tr-title">
                            <td style="width:5%; ">STT</td>
                            <td style="width:25%;">&nbsp;</td>
                            <td style="width:25%;">TÊN SẢN PHẨM</td>
                            <td style="width:10%;">SỐ LƯỢNG</td>
                           <td style="width:15%; ">ĐƠN GIÁ</td>
                           <td style="width:15%; ">THÀNH TIỀN</td>
                           <td style="width:5%;">&nbsp;</td>
                       </tr>
                       <tr class="tr-content">
                           <td style="color:red;" class={}>1</td>
                           <td > <img src="{{ asset('images/ip13.jpg') }}" alt="" style="width:100%;"></td>
                           <td ><p>Đồng hồ Hublot Big Bang One Click King Gold Pave 465.OX.1180.RX.1604</p></td>
                           <td><input type="number" style="width:100%;"></td>
                           <td style="color:red;">460,000,000</td>
                           <td style="color:red;">460,000,000</td>
                           <td ><i class="fa fa-times close-carts" style="color:red;" ></i></td>
                       </tr>
                       <tr>
                            <td colspan="7" style="text-align:right;">
                                <div style="margin: 15px 0px;"><span style="font-size:20px; font-weight:bold; line-height: 42px;">Tổng tiền thanh toán : <span style="color:#F00; font-weight:bold">0 VND</span></span></div>
                            </td>
                        </tr>
                   </tbody>
               </table>
               
           </div>
           <form action="">
                    <div class="thanh-toan">
                        <div class="thanh-toan-left">
                            <h3><label for="">THÔNG TIN MUA HÀNG</label></h3>
                            <div>
                                <label for="">Email</label>
                                <input name="email" type="email" required >
                            </div>
                            <div>
                                <label for="">Họ và Tên</label>
                                <input name="hoten" type="text" required >
                            </div>
                            <div>
                                <label for="">Số Điện Thoại</label>
                                <input name="phone" type="tel" pattern="[0][0-9]{9}" required >
                            </div>
                            <div>
                                <label for="">Địa chỉ</label>
                                <input name="diachi" type="text" required >
                            </div>
                            <div>
                                <label for="" class="tt-note">Ghi chú</label>
                                <textarea name="note"  ></textarea>
                            </div>
                        </div>
                        <div class="thanh-toan-right">
                            <h3><label for="">THANH TOÁN</label></h3>
                            <div>
                                <p >
                                    <img src="{{ asset('images/napas.png') }}" alt="napas">
                                    <strong>Chuyển khoản qua ngân hàng</strong>
                                </p>
                            </div>
                            <p>Quý khách vui lòng chuyển khoản tới tài khoản:</p>
                            <p>Vietcombank - HOÀNG VĂN TÂN :88888888888 chi nhánh Hà Nội</p>
                            <p>Quý khách có thể chỉ cần đặt cọc trước một phần và thanh toán toàn đầy đủ sau khi nhận hàng.</p>
                            <p>Liên hệ 098 11 55555 để được tư vấn  trực tiếp.</p>
                            <p ><a class="tt-csht" href="">Chính sách hoàn trả</a></p>
                            <div>
                                <input type="submit" name="dathang" value="ĐẶT HÀNG">
                            </div>
                            <p style="text-align: center;"><a class="tt-back" href="">< Quay về giỏ hàng</a></p>
                        </div>
                    </div>
               </form>
        </div>
    </div>
</div>
>>>>>>> ab334efdf8db9162215dc52d6983249639306c82
@endsection