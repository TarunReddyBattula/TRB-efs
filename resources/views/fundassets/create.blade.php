@extends('app')
@section('content')
<h1>Create New Asset</h1>
    {!! Form::open(['url' => 'fundassets']) !!}

       <div class="form-group">
        {!! Form::select('customer_id', $customers) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description', 'Description:') !!}
        {!! Form::text('description',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('asset_value', 'Asset Value:') !!}
        {!! Form::text('asset_value',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('asset_date', 'Asset Date:') !!}
        {!! Form::text('asset_date',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('interest', 'Interest rate:') !!}
        {!! Form::text('interest',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop