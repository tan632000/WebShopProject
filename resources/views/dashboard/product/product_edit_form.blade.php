@extends('dashboard/dashboard_main_content')
@section('title_admin')
Update Product
@endsection
@section('dashboard_body')

@if (session('product_add_msg'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{session('product_add_msg')}}
    </div>
@endif

<form action="{{route('product_update')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Product Name</label>
        <div class="col-sm-10">
            <input type="text" value="{{$product->name}}" name="name" class="form-control " id="inputEmail3"
                placeholder="Enter Category Name">
            <input type="hidden" name="id" value="{{$product->id}}">
            @foreach ($errors->get('name') as $message )
                <span class="text-danger">{{$message}}</span>
            @endforeach
        </div>
    </div>
    <div class="form-group row">
        <label for="category_id" class="col-sm-2 col-form-label">Category Name</label>
        <div class="col-sm-10">
            <select name="category_id" class="form-control" id="category_id" >
                <option value="{{$curCategory->id}}">{{$curCategory->name}}</option>
                @foreach ($categories as $category )
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            @if ($errors->has('category_id'))
            <span class="text-danger"> Select a Category</span>

            @endif
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Product Short Description</label>
        <div class="col-sm-10">
            <textarea  name="short_description" class="form-control" rows="3">{{$product->short_description}}</textarea>
            @foreach ($errors->get('short_description') as $message )
            <span class="text-danger">{{$message}}</span>
              @endforeach
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Product Long Description</label>
        <div class="col-sm-10">
            <textarea id="summary-ckeditor" name="long_description" value="" class="form-control" rows="3">{{$product->long_description}}</textarea>
            @foreach ($errors->get('long_description') as $message )
           <span class="text-danger">{{$message}}</span>
              @endforeach
        </div>
    </div>
    <div class="form-group row">
        <label for="quantity" class="col-sm-2 col-form-label">Quantity</label>
        <div class="col-sm-10">
            <input type="text" name="quantity" value="{{$product->quantity}}"class="form-control " id="quantity">
            @foreach ($errors->get('quantity') as $message )
            <span class="text-danger">{{$message}}</span>
              @endforeach
        </div>
    </div>
    <div class="form-group row">
        <label for="price" class="col-sm-2 col-form-label">Product Price</label>
        <div class="col-sm-10">
            <input type="text" name="price" value="{{number_format($product->price)}}"class="form-control " id="price">
            @foreach ($errors->get('price') as $message )
            <span class="text-danger">{{$message}}</span>
              @endforeach
        </div>
    </div>
    <div class="form-group row">
        <label for="image" class="col-sm-2 col-form-label">Product Images</label>
        <div class="col-sm-10">
            <input type="file" name="image" class="form-control" id="image">
        </div>
    </div>
    <div class="form-group row">
        <label for="image" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-4">
            <img src="{{asset('uploads/product_images')}}/{{$product->image}}" class="img-fluid w-50" alt="">
        </div>
        <div class="col-sm-6"> </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-2">Publication Status</div>
        <div class="col-sm-10">
            <div class="form-check">
                <input class="form-check-input"  name="status" {{$product->status==1?'checked':''}} value="1" type="radio" id="gridCheck1">
                <label class="form-check-label" for="gridCheck1">
                    Published
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" {{$product->status==0?'checked':''}}  name="status" value="0" type="radio" id="unpublished">
                <label class="form-check-label" for="unpublished">
                    Unpublished
                </label>
            </div>
            @foreach ($errors->get('status') as $message )
            <span class="text-danger">{{$message}}</span>
              @endforeach
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Update Product</button>
            <a type="button" href="{{url('/product/manage')}}" class="btn btn-success">Back to Manage Product</a>
        </div>
    </div>
</form>

@endsection()
