@extends('frontend.layouts.app')

@section('content')
<div id="slider">
    <figure>
        <a href=""><img src="{{ asset('images/slide1.jpg') }}" ></a>
        <a href=""><img src="{{ asset('images/slide2.jpg') }}" ></a>
        <a href=""><img src="{{ asset('images/slide1.jpg') }}" ></a>
        <a href=""><img src="{{ asset('images/slide3.jpg') }}" ></a>
        <a href=""><img src="{{ asset('images/slide1.jpg') }}" ></a>
    </figure>
</div>
<div class="wrap">
    <div class="container">
        <div class="box-1">
            <div class="img-m">
                <a href=""><img src="{{ asset('images/box11.jpg') }}" alt=""></a>
            </div>
            <div class="img-m">
                <a href=""><img src="{{ asset('images/box12.png') }}" alt=""></a>
            </div>
        </div>
        <br>
        <div class="box-2">
            <div class="title1">
                <h1><a href="">Vertu</a></h1>
            </div>
            <div class="box-21">
                @foreach($smartProducts as $smartProduct)
                <div class="box-product">
                    <div class="box-img">
                        <a href=""><img src="{{asset('uploads/product_images/')}}/{{$smartProduct->image}}" alt=""></a>
                    </div>
                    <h3><a href="">{{$smartProduct->long_description}}</a></h3>
                    <div class="lable-0">{{$smartProduct->short_description}}</div>
                    <div class="price">{{$smartProduct->price}} dong</div>
                </div>
                @endforeach
            </div>
        </div>
        <br>
        <div class="box-2">
            <div class="title1">
                <h1><a href="">VERTU SIGNATURE S</a></h1>
            </div>
            <div class="box-21">
                <div class="box-product">
                    <div class="box-img">
                        <a href=""><img src="{{ asset('images/vertu1.jpg') }}" alt=""></a>
                    </div>
                    <h3><a href="">Vertu Signature S Yellow Gold Full Pave Baguette Diamonds Bag Key</a></h3>
                    <div class="lable-0">VT 84</div>
                    <div class="price">1 Tỷ 720 Triệu</div>
                </div>
                <div class="box-product">
                    <div class="box-img">
                        <a href=""><img src="{{ asset('images/vertu2.jpg') }}" alt=""></a>
                    </div>
                    <h3><a href="">Vertu Signature S Clous de Paris Red Gold</a></h3>
                    <div class="lable-0">VT 87</div>
                    <div class="price">820 Triệu</div>
                </div>
                <div class="box-product">
                    <div class="box-img">
                        <a href=""><img src="{{ asset('images/vertu3.jpg') }}" alt=""></a>
                    </div>
                    <h3><a href="">Vertu Signature S Rose Gold</a></h3>
                    <div class="lable-0">VT 82</div>
                    <div class="price">750 Triệu</div>
                </div>

                <div class="box-product">
                    <div class="box-img">
                        <a href=""><img src="{{ asset('images/vertu4.jpg') }}" alt=""></a>
                    </div>
                    <h3><a href="">Vertu Signature S Red Gold Black DLC</a></h3>
                    <div class="lable-0">VT 93</div>
                    <div class="price">450 Triệu</div>
                </div>
                <div class="box-product">
                    <div class="box-img">
                        <a href=""><img src="{{ asset('images/vertu5.jpg') }}" alt=""></a>
                    </div>
                    <h3><a href="">Vertu Signature S Navy Alligator</a></h3>
                    <div class="lable-0">VT 119</div>
                    <div class="price">370 Triệu</div>
                </div>
                <div class="box-product">
                    <div class="box-img">
                        <a href=""><img src="{{ asset('images/vertu6.jpg') }}" alt=""></a>
                    </div>
                    <h3><a href="">Vertu Signature S Ultimate Black</a></h3>
                    <div class="lable-0">VT 92</div>
                    <div class="price">380 Triệu</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
