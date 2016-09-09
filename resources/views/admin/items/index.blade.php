@extends('layouts.admin')
@section('content')
<div class="container">
	<div  class="table-responsive">
	<a class="btn btn-primary pull-right" href="{{url('admin/items/create')}}" role="button">დამატება</a>
		<table class="table table-striped"> 
			<thead> 
				<tr> 
					<th>ID</th> 
					<th>pictu</th> 
					<th>სახელი</th> 
					<th>Weight</th> 
					<th>length</th>
					<th>width</th>
					<th>Materials</th>
					<th>Author</th>
					<th>Store</th>
					<th>Kind</th>
					<th>Category</th>
					<th>Description</th>
					<th colspan="2">Actions</th> 
				</tr>
			</thead>
			<tbody>
				@foreach($items as $item) 
					<tr> 
						<td scope="row">{{$item->id}}</td> 
						<td>{{$item->name}}</td>
						<td>{{$item->weight}}</td>
						<td>{{$item->length}}</td>
						<td>{{$item->width}}</td>
						<td>{{$item->material->name}}</td>
						<td>{{$item->author->name}}</td>
						<td>{{$item->store->name}}</td>
						<td>{{$item->kind->name}}</td>
						<td>{{$item->category->name}}</td>
						<td>{{$item->description}}</td>
						<td>
						    <a href="{{url('admin/items/'.$item->id.'/edit')}}">
						    	<i class="glyphicon glyphicon-edit"></i>
						    </a>
						</td>
						<td>
					    	<form method="POST" action="{{url('admin/items/'.$item->id)}}">
								<button type="submit" style="background: transparent; border: 0;" id="singlebutton" name="singlebutton" ><i class="glyphicon glyphicon-remove-circle"></i></button>
								<input type="hidden" value="delete" name="_method">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
							</form>
						</td> 
					</tr>
				@endforeach

			</tbody>
		</table>
		<div class="text-center">
		</div>
	</div>
</div>
@endsection