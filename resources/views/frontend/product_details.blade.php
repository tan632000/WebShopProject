@extends('frontend.layouts.app')

@section('content')

    <div class="wrap-title">
        <div class="container">
            <a href="{{ url('/') }}">Trang chủ</a>
            &nbsp; / &nbsp;
            <a href="{{url('danhmuc/')}}/{{$product->realtionToCategory->id}}">{{ $product->realtionToCategory->name }}</a>
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
                        <div class="xzoom-container" style="width:35%; height:25%;">
                            <img class="xzoom" id="xzoom-default"
                                src="{{ asset('uploads/product_images/') }}/{{ $product->image }}"
                                xoriginal="{{ asset('uploads/product_images/') }}/{{ $product->image }}"
                                style="width:100%; height:100%;" />
                        </div>
                    </div>
                    <div class="col-sm-7 col-xs-12">
                        {{-- <div class="product_code" 
                        style="font-weight: bold;
                           font-size: 16px;
                           margin-bottom: 20px;
                           color: #F62022;
                           line-height: 30px;
                           height: 30px;
                           overflow: hidden;"> Mã: RL 68
                        </div> --}}

                        <div class="content">
                            <span style="font-size:16px;">
                                <strong style="color:rgb(204, 0, 0); font-family:tahoma,geneva,sans-serif"> Thông tin sản
                                    phẩm</strong>
                            </span>


                            <ul style="list-style: none; " class="thongso">
                                <li>
                                    <span style="color: #696969;">
                                        <span style="font-size:16px;font-family: sans-serif;font-weight: normal;">Tình
                                            trạng: mới</span>
                                    </span>
                                </li>
                                <li>
                                    <span style="color: #696969;">
                                        <span style="font-size:16px;font-family: sans-serif;font-weight: normal;">Serial
                                            No.: 228235</span>
                                    </span>
                                </li>
                                <li>
                                    <span style="color: #696969;">
                                        <span style="font-size:16px;font-family: sans-serif;font-weight: normal;">Kích thước
                                            : 40 mm</span>
                                    </span>
                                </li>
                                <li>
                                    <span style="color: #696969;">
                                        <span style="font-size:16px;font-family: sans-serif;font-weight: normal;">Chất liệu
                                            thân đồng hồ : vàng hồng 18k</span>
                                    </span>
                                </li>
                                <li>
                                    <span style="color: #696969;">
                                        <span style="font-size:16px;font-family: sans-serif;font-weight: normal;">Bezel :
                                            vàng hồng 18k</span>
                                    </span>
                                </li>
                                <li>
                                    <span style="color: #696969;">
                                        <span style="font-size:16px;font-family: sans-serif;font-weight: normal;">Chức năng
                                            hiển thị: Giờ, Phút, Giây, Ngày</span>
                                    </span>
                                </li>
                                <li>
                                    <span style="color: #696969;">
                                        <span style="font-size:16px;font-family: sans-serif;font-weight: normal;">Loại máy:
                                            Automatic</span>
                                    </span>
                                </li>
                                <li>
                                    <span style="color: #696969;">
                                        <span style="font-size:16px;font-family: sans-serif;font-weight: normal;">Loại dây
                                            đeo: vàng hồng 18k</span>
                                    </span>
                                </li>
                                <li>
                                    <span style="color: #696969;">
                                        <span style="font-size:16px;font-family: sans-serif;font-weight: normal;">Mặt quay
                                            số: màu xanh</span>
                                    </span>
                                </li>
                                <li>
                                    <span style="color: #696969;">
                                        <span style="font-size:16px;font-family: sans-serif;font-weight: normal;">Khả năng
                                            chống nước: 100m</span>
                                    </span>
                                </li>
                            </ul>
                            <p style="text-align: justify;">
                                <span style="font-size: 16px;">
                                    <span style="color: rgb(204, 0, 0)">
                                        <strong>Phụ kiện: </strong>
                                    </span>
                                    <span>
                                        Nguyên hộp, Thân đồng hồ, thẻ bảo hành, sách hướng dẫn
                                    </span>
                                    <br>
                                    <span style="color: rgb(204, 0, 0);">
                                        <strong>Bảo hành:</strong>
                                    </span>
                                    <span>
                                        5 năm
                                    </span>
                                </span>
                            </p>

                        </div>
                        <div class="price_detail1" style="font-size: 28px;
                                                                      margin: 20px 0px;
                                                                      font-weight: bold;
                                                                      color: #F62022;
                                                                      padding-top: 8px;">
                            Giá: {{ $product->price }} dong
                        </div>
                        <br>
                        <div id="muahang1">
                            <a href="{{ route('list_cart') }}" style="text-decoration: none;"> Mua ngay</a>
                        </div>
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
                                <div class="price">{{ $relatedProduct->price }} dong</div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
