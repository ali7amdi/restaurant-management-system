@extends('layouts.app')

@section('content')

<div class="panel panel-default">
   
    <div class="panel-heading">Items 
    	<a href="Items/create">
        	<span class="glyphicon glyphicon-plus pull-right"></span> 
    	</a>
    </div>

    <div class="panel-body">
		
		<table class="table table-bordered table-striped table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Title</th>
					<th>Price</th>
					<th>Description</th>
					<th>Status</th>
					<th>image</th>
					<th>Created By</th>
					<th>Menu</th>
					<th>Delete</th>
					<th>Edit</th>
				</tr>
			</thead>
			<tbody>
				@foreach($items as $item)
					<tr>
						<td>{{$item->id}}</td>
						<td>{{$item->title}}</td>
						<td>{{$item->price}}</td>
						<td>{{$item->description}}</td>
						<td>{{$item->status}}</td>
						<td class="menuThumb"> <img class="img-responsive" src="{{$item->image}}"></td>
						<td>{{$item->user->name}}</td>
						<td>{{$item->menu->title}}</td>
						<td>
				{!! Form::open(['method'=>'delete', 'route'=>['Items.destroy',$item->id]]) !!}
					{!! Form::submit('X', ['class'=>'btn btn-danger']) !!}
				{!! Form::close() !!}
						</td>
						<td>	
							<a href="Items/{{$item->id}}/edit"> <span class="glyphicon glyphicon-edit"></span> </a>									
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
            
        <div class="paginatios col-lg-12">
        	{!! $items->links() !!}
        </div>   
         
    </div>
</div>
       
@endsection
