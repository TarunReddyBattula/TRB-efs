@extends('app')
@section('content')
    <h1>Update Asset</h1>
    {!! Form::model($fundasset,['method' => 'PATCH','route'=>['fundassets.update',$fundasset->id]]) !!}

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
        {!! Form::label('interest', 'Interset:') !!}
        {!! Form::text('interest',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop