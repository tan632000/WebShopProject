@extends('frontend.layouts.app')

@section('content')
@if(Session::get('customer_name'))
    @if (session('message_add_cart'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{session('message_add_cart')}}
    </div>
    @endif
    @if (session('message_update_cart'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{session('message_update_cart')}}
    </div>
    @endif
    @if (session('message_remove_cart'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{session('message_remove_cart')}}
    </div>
    @endif
@endif
    <div class="wrap-title">
        <div class="container">
            <a href="">Trang chủ</a>
        </div>
    </div>
    <div class="wrap">
        <div class="container">
            <div class="box-2">
                <div class="title1">
                    @if(Session::get('customer_name'))
                    <h1><a href="">GIỎ HÀNG cua: {{Session::get('customer_name')}}</a></h1>
                    @else
                    <h1><a href="">Ban can dang nhap truoc de them vao gio hang.</a></h1>
                    @endif
                </div>
                <form action="{{route('cart_update')}}" method="POST">
                    @csrf
                    <div class="carts_giohang">
                        <table style="width:1100px;">
                            <tbody>
                                <tr class="tr-title">
                                    <td style="width:5%;">STT</td>
                                    <td style="width:25%;">Anh</td>
                                    <td style="width:15%;">TÊN SẢN PHẨM</td>
                                    <td style="width:10%;">SỐ LƯỢNG</td>
                                    <td style="width:15%; ">ĐƠN GIÁ</td>
                                    <td style="width:15%; ">THÀNH TIỀN</td>
                                    <td style="width:10%; ">Hanh dong</td>
                                    <td style="width:5%;">&nbsp;</td>
                                </tr>
                                @foreach ($all_cart_products as $product)
                                    <tr class="tr-content">
                                        <input class="w-100" type="hidden" value="{{$product->id}}" name="id">
                                        <td>{{$loop->index+1}}</td>
                                        <td> <img
                                                src="{{ asset('uploads/product_images/') }}/{{ $product['attributes']['image'] }}"
                                                alt="" style="width:100%;"></td>
                                        <td>
                                            <p>{{ $product['name'] }}</p>
                                        </td>
                                        <td><input name="quantity" type="number" style="width:100%;" value="{{ $product['quantity'] }}"></td>
                                        <td style="color:red;">{{ number_format($product['price']) }} VND</td>
                                        <td>{{number_format($product['price']*$product['quantity'])}} VND</td>
                                        <td><a href="{{route('cart_remove_item',['id' => $product['id']])}}">Xoa</a></td>
                                    </tr>   
                                @endforeach
                                <tr>
                                    <td colspan="7" style="text-align:right;">
                                        <div style="margin: 15px 0px;">
                                            <span style="font-size:20px; font-weight:bold; line-height: 42px;">
                                                Tổng tiền thanh toán : 
                                            <span style="color:#F00; font-weight:bold">{{number_format($cartSubtotal)}} VND</span></span>
                                            @php
                                                Session::put(['total_price'=>$cartSubtotal]);
                                            @endphp
                                        </div>
                                    </td>
                                </tr>
                                <tr class="tr-muahang">
                                    <td colspan="7" style="text-align:right;">
                                        <a class="btnCart" href="{{url('/')}}">Mua hàng
                                            tiếp</a>
                                        <input name="submit" type="submit" class="btnCart" value="Cập nhât giỏ hàng" />
                                        <a class="btnCart" href="{{route('save_shipping')}}">Thanh toán</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
