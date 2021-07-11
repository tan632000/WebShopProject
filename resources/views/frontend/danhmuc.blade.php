@extends('frontend.layouts.app')

@section('content')

<div class="wrap-title">
    <div class="container">
        <a href="{{url('/')}}">Trang chủ</a>
            &nbsp; / &nbsp;
        <a href="">{{$category->name}}</a>
    </div>
</div>
<div class="wrap">
    <div class="container">
        <div class="box-2">
            <div class="title1">
                <h1><a>{{$category->name}}</a></h1>
            </div>
            <div class="box-21"> 
                @foreach($products as $product)
                    <div class="box-product" id="vertu">
                        <div class="box-img">
                            <a href="{{ route('product_details', ['id' => $product->id]) }}"><img src="{{ asset('uploads/product_images/') }}/{{ $product->image }}" alt=""></a>
                        </div>
                        <h3><a>{{$product->name}}</a></h3>
                        <div class="lable-0">{{$product->short_description}}</div>
                        <div class="price">{{$product->price}} dong</div>
                    </div>
                @endforeach
            </div>
            {{$products->links()}}
        </div>
    </div>
</div>
@endsection
