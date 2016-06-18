@extends('layouts.app')

@section('content')
<div class="panel panel-default">
	<div class="panel-heading">Add new menu</div>

    <div class="panel-body">
    	
    	{!! Form::open(array('route' => 'Menus.store' , 'files'=> true)) !!}
    	
    	<div class="form-group col-lg-4">
    		{!! Form::text('title', null, array('required', 'class'=>'form-control', 'placeholder' => 'Menu Title')) !!}	
    	</div>
    	<div class="form-group col-lg-4">	
    		{!! Form::select('type', ['Food'=>'Food','Hot Drinks'=>'Hot Drinks','Cold Drinks'=>'Cold Drinks'], null, array('required', 'class'=>'form-control', 'placeholder' => 'Menu Type')) !!}	
    	</div>
    	
    	<div class="form-group col-lg-4">	
    		{!! Form::select('status', ['1'=>'Active','0'=>'Inactive'], null, array('required', 'class'=>'form-control', 'placeholder' => 'Menu Status')) !!}	
    	</div>
    	
    	<div class="form-group col-lg-12">	
    		{!! Form::textarea('description', null, array('required', 'class'=>'form-control', 'placeholder' => 'Menu Description')) !!}	
    	</div>
    	<div class="form-group col-lg-4">	
    		{!! Form::file('image', array('required', 'class'=>'form-control', 'placeholder' => 'Menu Status')) !!}	
    	</div>
    	<div class="form-group col-lg-2">	
    		{!! Form::submit('Add', array('class'=>'btn btn-primary')) !!}	
    	</div>
    	{!! Form::close() !!}
    </div>
</div>
@endsection