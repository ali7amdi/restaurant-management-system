@extends('layouts.app')

@section('content')

<div class="panel panel-default">
   
    <div class="panel-heading">Meals 
    	<a href="Meals/create">
        	<span class="glyphicon glyphicon-plus pull-right"></span> 
    	</a>
    </div>

    <div class="panel-body">
		
		<table class="table table-bordered table-striped table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Title</th>
					<th>Description</th>
					<th>Price</th>
					<th>Status</th>
					<th>image</th>
					<th>Created By</th>
					<th>Delete</th>
					<th>Edit</th>
				</tr>
			</thead>
			<tbody>
				@foreach($meals as $meal)
					<tr>
						<td>{{$meal->id}}</td>
						<td>{{$meal->title}}</td>
						<td>{{$meal->description}}</td>
						<td>{{$meal->price}}</td>
						<td>{{$meal->status}}</td>
						<td class="menuThumb"> <img class="img-responsive" src="{{$meal->image}}"></td>
						<td>{{$meal->user->name}}</td>
						<td>
				{!! Form::open(['method'=>'delete', 'route'=>['Meals.destroy',$meal->id]]) !!}
					{!! Form::submit('X', ['class'=>'btn btn-danger']) !!}
				{!! Form::close() !!}
						</td>
						<td>	
							<a href="Meals/{{$meal->id}}/edit"> <span class="glyphicon glyphicon-edit"></span> </a>									
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
            
        <div class="paginatios col-lg-12">
        	{!! $meals->links() !!}
        </div>   
         
    </div>
</div>
       
@endsection
