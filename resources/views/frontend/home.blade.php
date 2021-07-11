@extends('frontend.layouts.app')

@section('content')
    <div id="slider">
        <figure>
            <a><img src="{{ asset('images/slide1.jpg') }}"></a>
            <a><img src="{{ asset('images/slide2.jpg') }}"></a>
            <a><img src="{{ asset('images/slide1.jpg') }}"></a>
            <a><img src="{{ asset('images/slide3.jpg') }}"></a>
            <a><img src="{{ asset('images/slide1.jpg') }}"></a>
        </figure>
    </div>
    <div class="wrap">
        <div class="container">
            <div class="box-1">
                <div class="img-m">
                    <a><img src="{{ asset('images/box11.jpg') }}" alt=""></a>
                </div>
                <div class="img-m">
                    <a><img src="{{ asset('images/box12.png') }}" alt=""></a>
                </div>
            </div>
            <br>
            <div class="box-2">
                <div class="title1">
                    <h1><a>{{ $category[0]->name }}</a></h1>
                </div>
                <div class="box-21">
                    @foreach ($smartProducts as $smartProduct)
                        <div class="box-product">
                            <div class="box-img">
                                <a href="{{ route('product_details', ['id' => $smartProduct->id]) }}"><img
                                        src="{{ asset('uploads/product_images/') }}/{{ $smartProduct->image }}" alt=""></a>
                            </div>
                            <h3><a>{{ $smartProduct->long_description }}</a></h3>
                            <div class="lable-0">{{ $smartProduct->short_description }}</div>
                            <div class="price">{{ $smartProduct->price }} dong</div>
                        </div>
                    @endforeach
                </div>
            </div>
            <br>
            <div class="box-2">
                <div class="title1">
                    <h1><a href="">{{ $category[1]->name }}</a></h1>
                </div>
                <div class="box-21">
                    @foreach ($livingProducts as $livingProduct)
                        <div class="box-product">
                            <div class="box-img">
                                <a href="{{ route('product_details', ['id' => $livingProduct->id]) }}"><img
                                        src="{{ asset('uploads/product_images/') }}/{{ $livingProduct->image }}"
                                        alt=""></a>
                            </div>
                            <h3><a>{{ $livingProduct->long_description }}</a></h3>
                            <div class="lable-0">{{ $livingProduct->short_description }}</div>
                            <div class="price">{{ $livingProduct->price }} dong</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
