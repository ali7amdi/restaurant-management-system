@extends('layouts.app')

@section('content')
<div class="panel panel-default">
	<div class="panel-heading">Edit Item: {{ $item->title }}</div>

    <div class="panel-body">
    	<div class="col-lg-8">
    	
    	{!! Form::model($item, array('method' => 'PATCH', 'action' => ['ItemsController@update', $item->id] , 'files'=> true)) !!}
    	
    	<div class="form-group col-lg-4">
    		{!! Form::text('title', null, array('required', 'class'=>'form-control', 'placeholder' => 'Mneu Title')) !!}	
    	</div>
    	<div class="form-group col-lg-4">	
    		{!! Form::select('menu_id', $menus, null, array('required', 'class'=>'form-control', 'placeholder' => 'Choose Itme Menu')) !!}	
    	</div>
    	
    	<div class="form-group col-lg-4">	
    		{!! Form::select('status', ['1'=>'Active','0'=>'Inactive'], null, array('required', 'class'=>'form-control', 'placeholder' => 'Item Status')) !!}	
    	</div>
    	
    	<div class="form-group col-lg-12">	
    		{!! Form::textarea('description', null, array('required', 'class'=>'form-control', 'placeholder' => 'Item Description')) !!}	
    	</div>
    	<div class="form-group col-lg-4">
    		{!! Form::number('price', null, array('required', 'step' => 'any', 'class'=>'form-control', 'placeholder' => 'Item Price $')) !!}	
    	</div>
    	<div class="form-group col-lg-4">	
    		{!! Form::file('image', array('class'=>'form-control', 'placeholder' => 'Item Status')) !!}	
    	</div>
    	<div class="form-group col-lg-2">	
    		{!! Form::submit('Update', array('class'=>'btn btn-primary')) !!}	
    	</div>
    	{!! Form::close() !!}
    		
    	</div>
    	
    	<div class="col-lg-4">
    		<img src="{{asset($item->image)}}" alt="{{$item->title}}" class="img-responsive img-rounded editItemImg">	
    	</div>
    	
    </div>
</div>
@endsection