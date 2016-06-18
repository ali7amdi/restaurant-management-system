@extends('layouts.app')

@section('content')
<div class="panel panel-default">
	<div class="panel-heading">Add new Item</div>

    <div class="panel-body">
    	
    	{!! Form::open(array('route' => 'Items.store' , 'files'=> true)) !!}
    	
    	<div class="form-group col-lg-4">
    		{!! Form::text('title', null, array('required', 'class'=>'form-control', 'placeholder' => 'Item Title')) !!}	
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
    		{!! Form::file('image', array('required', 'class'=>'form-control', 'placeholder' => 'Item Status')) !!}	
    	</div>
    	<div class="form-group col-lg-2">	
    		{!! Form::submit('Add', array('class'=>'btn btn-primary')) !!}	
    	</div>
    	{!! Form::close() !!}
    </div>
</div>
@endsection