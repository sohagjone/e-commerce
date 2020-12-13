@extends('admin-interface/app')

@section('dashboard')

 
 @if(session('category_add_msg'))
 <div class="alert alert-success alert-dismissible fade show" role="alert">
   {{session('category_add_msg')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>
 @endif

 @if($errors->any())
 <div class="alert alert-danger alert-dismissible fade show" role="alert">
   <ul>
      @foreach($errors->all() as $error)
      <li>{{ $error}}</li>
      @endforeach
   </ul>
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
 </div>
@endif

<form action="{{route('category_save')}}" method="post">
	@csrf	
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Category Name</label>
    <div class="col-sm-6">
      <input type="text" name = "category_name"class="form-control" id="inputEmail3" placeholder="Category Name">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Category Description
    </label>
    <div class="col-sm-6">
      <textarea id="category_description" class="form-control" name="category_description" rows="3" placeholder="Category Description"></textarea>
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
  </fieldset>
  <div class="form-group row">
  	<div class="col-sm-2"></div>
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Add Category</button>
    </div>
  </div>
</form>

@endsection