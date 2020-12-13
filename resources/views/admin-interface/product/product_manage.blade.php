@extends('admin-interface/app')

@section('dashboard')

@if(session('product_update_msg'))
 <div class="alert alert-success alert-dismissible fade show" role="alert">
   {{session('product_update_msg')}}
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

 @if(session('product_delete_msg'))
 <div class="alert alert-danger alert-dismissible fade show" role="alert">
   {{session('product_delete_msg')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>
 @endif

<table class="table table-bordered table hover table-responsive">
	<thread>
		<tr>
			<th>Serial No.</th>
			<th>Product Name</th>
			<th>Category Name</th>
			<th>Product Short Description</th>
			<th>Product Price</th>
			<th>Product Image</th>
			<th>Created Date</th>
			<th>Publication Status</th>
			<th>Action</th>
		</tr>
	</thread>
	<tbody>
		@foreach($products as $product)
		<tr>
			<td>{{$loop->index+1}}</td>
			<td>{{$product->product_name}}</td>
			<td>{{$product->relationToCategory->category_name}}</td>
			<td>{{$product->product_short_description}}</td>
			<td>{{$product->product_price}}</td>
			<td><img src="{{asset('admin-interface/uploads/product_images')}}/{{$product->product_image}}" alt="" class="img-fluid w-50"></td>
			<td>{{$product->created_at? $product->created_at->diffForHumans():'No Date'}}</td>
			{{--<td>{{$product->created_at->format('D-M-yy h:i:s A')}}</td>--}}
			<td>{{$product->publication_status == 1 ? 'Published' : 'Unpublished'}}	
			</td>
			<td>
				<div class="btn-group" role="group" aria-label="Button-Group">
					@if($product->publication_status == 1)
					<a href="{{route('unpublished_product', ['id'=>$product->id])}}" class="btn btn-outline-success">Unpublished</a>
					@else
					<a href="{{route('published_product', ['id'=>$product->id])}}"  class="btn btn-outline-info">Published</a>
					@endif
				<a href="{{route('product_edit', ['id'=>$product->id])}}"class="btn btn-outline-warning">Edit</a>
				<a href="{{route('product_delete', ['id'=>$product->id])}}" class="btn btn-outline-danger">Delete</a>	
			</div>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

{{$products->links()}}

@endsection