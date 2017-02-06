@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"> <h2><p style="text-align:center;">Eagle Financial Services</p></h2>
                </div>

                <div class="panel-body">

                    <a href = "{{url('/customers')}}"> <h3><p style="text-align:center;">Begin</p></h3> </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
