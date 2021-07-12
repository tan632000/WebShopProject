@extends('frontend.layouts.app')

@section('content')

    <div class="wrap-title">
        <div class="container">
            <a href="{{ url('/') }}">Trang chủ</a>
            &nbsp; / &nbsp;
            <a
                href="{{ url('danhmuc/') }}/{{ $product->realtionToCategory->id }}">{{ $product->realtionToCategory->name }}</a>
            &nbsp; / &nbsp;{{ $product->name }}
        </div>
    </div>

    <div id="wrapper">
        <div class="container">
            <div class="boxmain" style="margin-bottom: 50px">
                <div class="title1">
                    <h1> <a>{{ $product->name }}</a> </h1>
                </div>
                <div class="row">
                    <div class="col-sm-5 col-xs-12">
                        <!-- <div class="img-pro magnify" style="height:60%"> -->
                        <!-- thẻ div chứa ảnh to -->
                        <!-- <div class="large">

                                            </div> -->
                        <!-- phiên bản ảnh nhỏ -->
                        <div style="height:65% ; width:100%;">
                            <img src="{{ asset('uploads/product_images/') }}/{{ $product->image }}" alt="detail"
                                class="small" style="height:100% ; width:100%; padding-bottom:10px;" />
                        </div>

                        <!-- </div> -->
                        <div class="xzoom-container" style="width:40%; height:28%;">
                            <img class="xzoom" id="xzoom-default"
                                src="{{ asset('uploads/product_images/') }}/{{ $product->image }}"
                                xoriginal="{{ asset('uploads/product_images/') }}/{{ $product->image }}"
                                style="width:100%; height:100%;" />
                        </div>
                    </div>
                    <div class="col-sm-7 col-xs-12">
                        <div class="content">
                            <span style="font-size:16px;">
                                <strong style="font-size: 28px; color:rgb(204, 0, 0); font-family:tahoma,geneva,sans-serif">
                                    Thông tin sản
                                    phẩm</strong>
                            </span>
                            <ul style="list-style: none; " class="thongso">
                                <li>
                                    <span style="color: #696969;">
                                        <span style="font-size:16px;font-family: sans-serif;font-weight: normal;">
                                            Tình trạng:
                                            @if ($product->status > 0 && $product->quantity > 0)
                                                Moi
                                            @else
                                                Het hang
                                            @endif
                                        </span>
                                    </span>
                                </li>
                                <li>
                                    <span style="color: #696969;">
                                        <span style="font-size:16px;font-family: sans-serif;font-weight: normal;">
                                            {{ $product->long_description }}
                                        </span>
                                    </span>
                                </li>
                                <li>
                                    <span style="color: #696969;">
                                        <span style="font-size:16px;font-family: sans-serif;font-weight: normal;">
                                            {{ $product->short_description }}
                                        </span>
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class="price_detail1" style="font-size: 28px;
                                    margin: 20px 0px;
                                    color: #F62022;
                                    padding-top: 8px;">
                            Giá: {{ number_format($product->price) }} VND
                        </div>
                        <form action="{{route('add_to_cart')}}" method="POST">
                            @csrf
                                <div class="float-left">
                                <input type="hidden" name="quantity" value="1">
                                <input type="hidden" name="id" value="{{$product->id}}">
                                </div>
                            <div class="cart-pro">
                                @if(Session::get('customer_name'))
                                    <button class="btn btn-outline-dark btn-lg" type="submit">Mua ngay</button>
                                @else
                                    <input type="text" class="btn btn-warning" value="Ban can dang nhap">
                                @endif
                            </div>
                        </form>
                        
                        <br>
                        {{-- <div id="muahang1">
                            <a href="{{ route('list_cart') }}" style="text-decoration: none;"> Mua ngay</a>
                        </div> --}}
                        <div id="contact123" style="width: 150px;
                                                                    height: 15px;
                                                                    display: grid;
                                                                    grid-template-columns: auto auto auto auto auto auto;
                                                                    margin-top: 35px;
                                                                    height: 15px;
                                                                     ">
                            <div style="">
                                <img src="{{ asset('images/facebook.jpg') }}" alt="detail"
                                    style="height:16px ; width:16px;">
                            </div>
                            <div style="">
                                <img src="{{ asset('images/twitter.png') }}" alt="detail"
                                    style="height:16px ; width:16px;">
                            </div>
                            <div style="">
                                <img src="{{ asset('images/printer.png') }}" alt="detail"
                                    style="height:16px ; width:16px;">
                            </div>
                            <div style="">
                                <img src="{{ asset('images/email.png') }}" alt="detail"
                                    style="height:16px ; width:16px;">
                            </div>
                            <div style="">
                                <img src="{{ asset('images/addthis.png') }}" alt="detail"
                                    style="height:16px ; width:16px;">
                            </div>
                            <div style="">
                                <img src="{{ asset('images/addthis2.png') }}" alt="detail"
                                    style="height:16px ; width:16px;">
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div id="orgatab">
                <ul class="nav" style=" border-bottom: 1px solid #FF6E01;
                                                           margin-bottom: 20px;
                                                           margin-left: 1px;">
                    <li>
                        <a class="hienList-wrap" style="text-decoration: none;"> Thông tin chung</a>
                    </li>
                    <li>
                        <a style="text-decoration: none;" class="anList-wrap"> Thông số kỹ thuật</a>
                    </li>
                    <li>
                        <a style="text-decoration: none;">Nhận xét</a>
                    </li>
                </ul>
                <div class="list-wrap">
                    <p style="text-align: center">
                        <img src="{{ asset('uploads/product_images/') }}/{{ $product->image }}" alt="detail"
                            style=" width:80%;" />
                    </p>
                </div>

                <div class="box-2">
                    <div class="title1">
                        <h1> <a>Sản phẩm cùng loại</a> </h1>
                    </div>
                    <div class="box-21">
                        @foreach ($relatedProducts as $relatedProduct)
                            <div class="box-product" id="vertu">
                                <div class="box-img">
                                    <a href="{{ route('product_details', ['id' => $relatedProduct->id]) }}"><img
                                            src="{{ asset('uploads/product_images/') }}/{{ $relatedProduct->image }}"
                                            alt=""></a>
                                </div>
                                <h3><a>{{ $relatedProduct->name }}</a>
                                </h3>
                                <div class="lable-0">{{ $relatedProduct->short_description }}</div>
                                <div class="price">{{ number_format($relatedProduct->price) }} VND</div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
