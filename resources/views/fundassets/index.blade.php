@extends('app')
@section('content')
    <h1>Asset</h1>
    <a href="{{url('/fundassets/create')}}" class="btn btn-success">Create Asset</a>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
		    <th>Cust No</th>
            <th>Cust Name</th>
            <th>Asset Desc</th>
            <th>Asset Value</th>
            <th>Asset Date</th>
            <th>Interest Rate</th>
            <th colspan="3">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($fundassets as $fundasset)
            <tr>
                <td>{{ $fundasset->customer->cust_number }}</td>
                <td>{{ $fundasset->customer->name }}</td>
                <td>{{ $fundasset->description }}</td>
                <td>{{ $fundasset->asset_value }}</td>
                <td>{{ $fundasset->asset_date }}</td>
                <td>{{ $fundasset->interest }}</td>
                <td><a href="{{url('fundassets',$fundasset->id)}}" class="btn btn-primary">Read</a></td>
                <td><a href="{{route('fundassets.edit',$fundasset->id)}}" class="btn btn-warning">Update</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['fundassets.destroy', $fundasset->id]]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>
@endsection