@extends('dashboard/dashboard_main_content')
@section('title')
Add Product
@endsection
@section('dashboard_body')

@if (session('product_add_msg'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{session('product_add_msg')}}
    </div>
@endif



<form action="{{route('product_add')}}" method="POST" name='test' enctype="multipart/form-data">
    @csrf
    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Product Name</label>
        <div class="col-sm-10">
            <input type="text" value="{{old('name')}}" name="name" class="form-control " id="name"
                placeholder="Enter Category Name">
            @foreach ($errors->get('name') as $message )
            <span class="text-danger">{{$message}}</span>
            @endforeach
        </div>
    </div>
    <div class="form-group row">
        <label for="category_name" class="col-sm-2 col-form-label">Category Name</label>
        <div class="col-sm-10">
            <select name="category_id" class="form-control" id="category_name" >
                <option value="">--- Select A Category---</option>
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
            <textarea  name="short_description" class="form-control" rows="3">{{old('short_description')}}</textarea>
            @foreach ($errors->get('short_description') as $message )
                <span class="text-danger">{{$message}}</span>
            @endforeach
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Product Long Description</label>
        <div class="col-sm-10">
            <textarea id="summary-ckeditor" name="long_description" value="" class="form-control" rows="3">{{old('long_description')}}</textarea>
            @foreach ($errors->get('long_description') as $message )
           <span class="text-danger">{{$message}}</span>
              @endforeach
        </div>
    </div>
    <div class="form-group row">
        <label for="quantity" class="col-sm-2 col-form-label">Product Quantity</label>
        <div class="col-sm-10">
            <input type="number" name="quantity" value="{{old('quantity')}}" class="form-control " id="quantity">
            @foreach ($errors->get('quantity') as $message )
            <span class="text-danger">{{$message}}</span>
              @endforeach
        </div>
    </div>
    <div class="form-group row">
        <label for="price" class="col-sm-2 col-form-label">Product Price</label>
        <div class="col-sm-10">
            <input type="text" name="price" value="{{number_format(old('price'))}}" class="form-control " id="price">
            @foreach ($errors->get('price') as $message )
            <span class="text-danger">{{$message}}</span>
              @endforeach
        </div>
    </div>
    <div class="form-group row">
        <label for="image" class="col-sm-2 col-form-label">Photos Upload</label>
        <div class="col-sm-10">
            <input type="file" name="image" class="form-control " id="image">
            @foreach ($errors->get('image') as $message )
                <span class="text-danger">{{$message}}</span>
            @endforeach
        </div>
    </div>
    {{--  <div class="form-group row">
        <label for="image" class="col-sm-2 col-form-label">Multiple file</label>
        <div class="col-sm-10">
            <input type="file" name="product_sub[]" class="form-control " id="price" multiple>
            @if ($errors->has('product_sub[]'))
            <span class="text-danger"> Select image</span>

            @endif

        </div>
    </div>  --}}
    <div class="form-group row">
        <div class="col-sm-2">Publication Status</div>
        <div class="col-sm-10">
            <div class="form-check">
                <input class="form-check-input"  name="status" value="1" type="radio" id="status">
                <label class="form-check-label" for="status">
                    Published
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" name="status" value="0" type="radio" id="status">
                <label class="form-check-label" for="status">
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
            <button type="submit" class="btn btn-primary">Product Add</button>
        </div>
    </div>
</form>
<script>
     document.forms['test'].elements['category_id'].value= {{old('category_id')}};
</script>

@endsection()
