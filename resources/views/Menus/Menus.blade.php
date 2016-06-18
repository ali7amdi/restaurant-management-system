@extends('layouts.app')

@section('content')

<div class="panel panel-default">
   
    <div class="panel-heading">Menus 
    	<a href="Menus/create">
        	<span class="glyphicon glyphicon-plus pull-right"></span> 
    	</a>
    </div>

    <div class="panel-body">
		
		<table class="table table-bordered table-striped table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Title</th>
					<th>Type</th>
					<th>Description</th>
					<th>Status</th>
					<th>image</th>
					<th>Created By</th>
					<th>Delete</th>
					<th>Edit</th>
				</tr>
			</thead>
			<tbody>
				@foreach($menus as $menu)
					<tr>
						<td>{{$menu->id}}</td>
						<td>{{$menu->title}}</td>
						<td>{{$menu->type}}</td>
						<td>{{$menu->description}}</td>
						<td>{{$menu->status}}</td>
						<td class="menuThumb"> <img class="img-responsive" src="{{$menu->image}}"></td>
						<td>{{$menu->user->name}}</td>
						<td>
				{!! Form::open(['method'=>'delete', 'route'=>['Menus.destroy',$menu->id]]) !!}
					{!! Form::submit('X', ['class'=>'btn btn-danger']) !!}
				{!! Form::close() !!}
						</td>
						<td>	
							<a href="Menus/{{$menu->id}}/edit"> <span class="glyphicon glyphicon-edit"></span> </a>									
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
            
        <div class="paginatios col-lg-12">
        	{!! $menus->render() !!}
        </div>
            
    </div>
</div>
       
@endsection
