@extends('admin-interface/app')

@section('dashboard')

 
 @if(session('product_add_msg'))
 <div class="alert alert-success alert-dismissible fade show" role="alert">
   {{session('product_add_msg')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>
 @endif

<form action="{{route('product_save')}}" method="post" enctype="multipart/form-data" name="product">
	@csrf	
  <div class="form-group row">
    <label for="product_name" class="col-sm-2 col-form-label">Product Name</label>
    <div class="col-sm-6">
      <input type="text" name ="product_name" value ="{{old('product_name')}}"class="form-control" id="product_name" placeholder="Product Name">
       @foreach($errors->get('product_name') as $message)
      <span class="text-danger">{{$message}}</span>
      @endforeach
    </div>
  </div>
  <div class="form-group row">
    <label for="category_name" class="col-sm-2 col-form-label">Category Name</label>
    <div class="col-sm-6">
     <select name="category_id" class="form-control">
        <option value="">---Select a Category---</option>
        @foreach($categories as $category)
        <option value="{{$category->id}}">{{$category->category_name}}</option>
        @endforeach
     </select>
      @foreach($errors->get('product_name') as $message)
      <span class="text-danger">Category Name is Required</span>
      @endforeach
    </div>
  </div>
  <div class="form-group row">
    <label for="product_short_description" class="col-sm-2 col-form-label">Product Short Description
    </label>
    <div class="col-sm-6">
      <textarea id="product_short_description" class="form-control" name="product_short_description" rows="3" placeholder="Product Short Description" value ="{{old('product_short_description')}}"></textarea>
       @foreach($errors->get('product_short_description') as $message)
      <span class="text-danger">{{$message}}</span>
      @endforeach
    </div>
  </div>
  <div class="form-group row">
    <label for="product_long_description" class="col-sm-2 col-form-label">Product Long Description
    </label>
    <div class="col-sm-6">
      <textarea id="summernote" class="textarea" name ="product_long_description" style="width:100%;height:400px; font-size:14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" value ="{{old('product_long_description')}}">
        </textarea>
         @foreach($errors->get('product_long_description') as $message)
             <span class="text-danger">{{$message}}</span>
         @endforeach
        </div>
  </div>
  <div class="form-group row">
    <label for="product_price" class="col-sm-2 col-form-label">Product Price</label>
    <div class="col-sm-6">
      <input type="text" name="product_price"class="form-control" id="product_price" placeholder="Product Price" value ="{{old('product_price')}}">
       @foreach($errors->get('product_price') as $message)
      <span class="text-danger">{{$message}}</span>
      @endforeach
    </div>
  </div>
  <div class="form-group row">
    <label for="product_image" class="col-sm-2 col-form-label">Product Image</label>
    <div class="col-sm-6">
      <input type="file" name="product_image" class="form-control" id="product_image" placeholder="Product Image" value ="{{old('product_Image')}}">
       @foreach($errors->get('product_Image') as $message)
      <span class="text-danger">{{$message}}</span>
      @endforeach
    </div>
  </div>
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Publication Status</legend>
      <div class="col-sm-6">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="publication_status" 
          id="publication_status" value="1">
          <label class="form-check-label" for="publication_status" >
            Published
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="publication_status" 
          id="publication_status_unpublish" value="0">
          <label class="form-check-label" for="publication_status_unpublish">
            Unpublished
          </label>
        </div>
         @foreach($errors->get('publication_status') as $message)
          <span class="text-danger">{{$message}}</span>
          @endforeach
  </fieldset>
  <div class="form-group row">
  	<div class="col-sm-2"></div>
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Add Product</button>
    </div>
  </div>
</form>
<script>
  document.forms['product'].elements['category_id'].value = {{old('category_id')}};
  </script>
@endsection