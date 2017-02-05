@extends('app')
@section('content')
    <h1>Asset </h1>
    <div class="container">
<table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>Asset Desc</td>
                <td><?php echo ($fundasset['description']); ?></td>
            </tr>
                <td>Asset Value</td>
                <td><?php echo ($fundasset['asset_value']); ?></td>
            </tr>
            <tr>
                <td>Asset Date </td>
                <td><?php echo ($fundasset['asset_date']); ?></td>
            </tr>
            <tr>
                <td>Interest Rate</td>
                <td><?php echo ($fundasset['interest']); ?></td>
            </tr>
            </tbody>
        </table>
    </div>
@stop