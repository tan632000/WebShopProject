@extends('dashboard/dashboard_main_content')
@section('title')
    Edit Category
@endsection
@section('dashboard_body')

    @if (session('Category_update_message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{session('Category_update_message')}}
        </div>
    @endif

    @if($errors->all())
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            @foreach ($errors->all() as $error )
                <ol>
                    <li>{{$error}}</li>
                </ol>
            @endforeach
        </div>
    @endif


<form action="{{route('category_update')}}" method="POST">
    @csrf
    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Category Name</label>
      <div class="col-sm-10">
        <input type="text" name="name" value="{{$category->name}}" class="form-control form-control-lg" id="inputEmail3" placeholder="Enter Category Name">
        <input type="hidden" name="category_id" value="{{$category->id}}">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword3"class="col-sm-2 col-form-label">Category Description</label>
      <div class="col-sm-10">

        <textarea id="summary-ckeditor"  name="description"  class="form-control" rows="3">{{$category->description}}</textarea>

      </div>
    </div>
    <div class="form-group row">
            <div class="col-sm-2">Publication Status</div>
            <div class="col-sm-10">
              <div class="form-check">
                <input class="form-check-input" name="status" {{$category->status == 1 ? 'Checked':''}} value="1" type="radio" id="gridCheck1">
                <label class="form-check-label" for="gridCheck1">
                 Published
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" name="status"{{$category->status == 0 ? 'Checked':''}} value="0" type="radio" id="unpublished">
                <label class="form-check-label" for="unpublished">
                  Unpublished
                </label>
              </div>
            </div>
          </div>


    <div class="form-group row">
        <div class="col-sm-2"></div>
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Category Update</button>
      </div>
    </div>
  </form>



@endsection()
