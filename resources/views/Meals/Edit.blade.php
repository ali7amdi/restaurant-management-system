@extends('layouts.app')

@section('content')
<div class="panel panel-default">
	<div class="panel-heading">Edit Meal: {{ $meal->title }}</div>

    <div class="panel-body">
    	<div class="col-lg-8">
    	
    	{!! Form::model($meal, array('method' => 'PATCH', 'action' => ['MealsController@update', $meal->id] , 'files'=> true)) !!}
    	
    	<div class="form-group col-lg-3">
    		{!! Form::text('title', null, array('required', 'class'=>'form-control', 'placeholder' => 'Mneu Title')) !!}	
    	</div>
    	
    	
    	<div class="form-group col-lg-3">	
    		{!! Form::select('status', ['1'=>'Active','0'=>'Inactive'], null, array('required', 'class'=>'form-control', 'placeholder' => 'Meal Status')) !!}	
    	</div>
    	
    	<div class="form-group col-lg-3">
    		{!! Form::number('price', null, array('required', 'step' => 'any', 'class'=>'form-control', 'placeholder' => 'Meal Price $')) !!}	
    	</div>
    	<div class="form-group col-lg-3">	
    		{!! Form::file('image', array('class'=>'form-control', 'placeholder' => 'Meal Status')) !!}	
    	</div>
    	
    	<div class="form-group col-lg-12">	
    		{!! Form::textarea('description', null, array('required', 'class'=>'form-control', 'placeholder' => 'Meal Description')) !!}	
    	</div>
    	
    	
    	</div>
    		
    	<div class="col-lg-4">
    		<img src="{{asset($meal->image)}}" alt="{{$meal->title}}" class="img-responsive img-rounded editMealImg">	
    	</div>
    	
    	<div class="clearfix"></div>
    	
    	<div class="form-group">	
    		@foreach( $menus as $menu)
    			@if(count($menu->items) > 0)
	    			<h4>{{ $menu->title }}</h4>
	    			<div class="form-group col-lg-6 menuItems">
	    			<ul>
	    				@foreach($menu->items as $item)
			    			<li
			    			@if (in_array($item->id, $mealItemsIDs))
				    					class="red"
							@endif
							>
			    				<input 
				    				@if (in_array($item->id, $mealItemsIDs))
				    					checked
				    				@endif
			    					type="checkbox" 
			    					name="items[]" 
			    					value="{{$item->id}}"
			    				> 
			    				<input 
				    				@if (in_array($item->id, $mealItemsIDs))
				    					value="{{$mealItemsIDsWithDisocount[$item->id]}}"
				    				@endif
			    					type="number" 
			    					name="discount[{{$item->id}}]" 
			    					class="discount">
			    				{{$item->title}}
			    				
			    				
			    				</li>
		    			@endforeach	
	    			</ul>
	    			</div>
    			@endif	
    		@endforeach		
    	</div>
    	    	
    	<div class="clearfix"></div>    	
    	
    	<div class="form-group col-lg-2">	
    		{!! Form::submit('Update', array('class'=>'btn btn-primary')) !!}	
    	</div>
    	{!! Form::close() !!}
    	
    </div>
</div>
@endsection