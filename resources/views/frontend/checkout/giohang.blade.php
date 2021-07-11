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
                <h1><a href="">GIỎ HÀNG</a></h1>
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
                        <tr class="tr-muahang">
                            <td  colspan="7" style="text-align:right;">
                                <a class="btnCart" href="#" onclick="window.history.back(); return false;">Mua hàng tiếp</a> 
                                <input name="submit" type="submit" class="btnCart" value="Cập nhât giỏ hàng" />
                                <input name="xoaall" type="button" class="btnCart" value="Xóa giỏ hàng" />
                                <a class="btnCart" href="">Thanh toán</a>
                            </td>
                        </tr>
                   </tbody>
               </table>
           </div>
        </div>
    </div>
</div>
@endsection