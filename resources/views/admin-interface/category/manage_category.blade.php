@extends('admin-interface/app')

@section('dashboard')

 @if(session('category_update_msg'))
 <div class="alert alert-success alert-dismissible fade show" role="alert">
   {{session('category_update_msg')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>
 @endif
 
 @if(session('publish_status_msg'))
 <div class="alert alert-info alert-dismissible fade show" role="alert">
   {{session('publish_status_msg')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>
 @endif

@if(session('unpublish_status_msg'))
 <div class="alert alert-warning alert-dismissible fade show" role="alert">
   {{session('unpublish_status_msg')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>
 @endif

 @if(session('category_delete_msg'))
 <div class="alert alert-danger alert-dismissible fade show" role="alert">
   {{session('category_delete_msg')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>
 @endif
<table class="table table-bordered table hover">
	<thread>
		<tr>
			<th>Serial No.</th>
			<th>Category Name</th>
			<th>Category Description</th>
			<th>Created Date</th>
			<th>Publication Status</th>
			<th>Action</th>
		</tr>
	</thread>
	<tbody>
		@foreach($categories as $category)
		<tr>
			<td>{{$loop->index+1}}</td>
			<td>{{$category->category_name}}</td>
			<td>{{$category->category_description}}</td>
			<td>{{$category->created_at}}</td>
			<td>{{$category->publication_status == 1 ? 'Published' : 'Unpublished'}}	
			</td>
			<td>
				<div class="btn-group" role="group" aria-label="Button-Group">
					@if($category->publication_status == 1)
					<a href="{{route('category_unpublish', ['id'=>$category->id])}}" class="btn btn-outline-success">Unpublished</a>
					@else
					<a href="{{route('category_publish', ['id'=>$category->id])}}"  class="btn btn-outline-info">Published</a>
					@endif
				<a href="{{route('category_edit', ['id'=>$category->id])}}" class="btn btn-outline-warning">Edit</a>
				<a href="{{route('category_delete', ['id'=>$category->id])}}" class="btn btn-outline-danger">Delete</a>	
			</div>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
{{$categories->links()}}
@endsection