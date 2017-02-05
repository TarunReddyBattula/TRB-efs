@extends('app')
@section('content')
    <h1>Customer </h1>

    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <thead><th>Details</th></thead>
            <tr class="bg-info">
            <tr>
                <td>Name</td>
                <td><?php echo ($customer['name']); ?></td>
            </tr>
            <tr>
                <td>Cust Number</td>
                <td><?php echo ($customer['cust_number']); ?></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><?php echo ($customer['address']); ?></td>
            </tr>
            <tr>
                <td>City </td>
                <td><?php echo ($customer['city']); ?></td>
            </tr>
            <tr>
                <td>State</td>
                <td><?php echo ($customer['state']); ?></td>
            </tr>
            <tr>
                <td>Zip </td>
                <td><?php echo ($customer['zip']); ?></td>
            </tr>
            <tr>
                <td>Home Phone</td>
                <td><?php echo ($customer['home_phone']); ?></td>
            </tr>
            <tr>
                <td>Cell Phone</td>
                <td><?php echo ($customer['cell_phone']); ?></td>
            </tr>


            </tbody>
      </table>
    </div>
        <div class="container">
            <h1>Stocks</h1>
        <table class="table table-striped table-bordered table-hover">
            <thead>

            <tr class="bg-info">
                <th>Symbol</th>
                <th>Name</th>
                <th>Shares</th>
                <th>Acquired Date</th>
                <th>Purchase Price</th>
                <th>Original Price</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($customer->stocks as $stocks)
                <tr>
                    <td> {{$stocks->symbol}} </td>
                    <td>{{ $stocks->name }}</td>
                    <td>{{ $stocks->shares }}</td>
                    <td>{{ $stocks->purchased}}</td>
                    <td>${{ $stocks->purchase_price }}</td>
                    <td>${{$stocks->shares*$stocks->purchase_price }}</td>

                </tr>
            @endforeach

            </tbody>

        </table>
            <?php $totalOV = 0; ?>
            @foreach($customer->stocks as $stocks)
               <?php $totalOV = $totalOV + ($stocks->shares*$stocks->purchase_price); ?>
            @endforeach
          <h3>  Total of Initial Stock Portfolio  <?php  echo "$" . $totalOV ; ?></h3>

    </div>

    </div>
    <div class="container">
        <h1>Investments</h1>
        <table class="table table-striped table-bordered table-hover">
            <thead>

            <tr class="bg-info">
                <th>Category</th>
                <th>Description</th>
                <th>Acquired Value</th>
                <th>Acquired Date</th>
                <th>Recent Value</th>
                <th>Recent Date</th>
            </tr>
            </thead>
            <tbody>

            @foreach ($customer->investments as $investment)
                <tr>
                    <td>{{ $investment->category }}</td>
                    <td>{{ $investment->description }}</td>
                    <td>${{ $investment->acquired_value }}</td>
                    <td>{{ $investment->acquired_date }}</td>
                    <td>${{ $investment->recent_value }}</td>
                    <td>{{ $investment->recent_date }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <?php $totaliip=0; ?>
        @foreach( $customer->investments as $investment)
            <?php $totaliip = $totaliip + $investment->acquired_value ?>
        @endforeach
        <h3>Total of Initial investment portfolio <?php echo "$" . $totaliip ?>

                

            <?php $totalcip=0; ?>
            @foreach( $customer->investments as $investment)
                <?php $totalcip = $totalcip + $investment->recent_value ?>
            @endforeach
            <h3>Total of Current investment portfolio <?php echo "$" . $totalcip ?> </h3>

            <div class="container">
                <h1>Assets</h1>
                <table class="table table-striped table-bordered table-hover">
                    <thead>

                    <tr class="bg-info">
                        <th>Asset Desc</th>
                        <th>Asset Value</th>
                        <th>Asset Date</th>
                        <th>Interest</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($customer->fundassets as $fundassets)
                        <tr>
                            <td> {{$fundassets->description}} </td>
                            <td>{{ $fundassets->asset_value }}</td>
                            <td>{{ $fundassets->asset_date }}</td>
                            <td>{{ $fundassets->interest}}</td>

                        </tr>
                    @endforeach

                    </tbody>

                </table>
                <?php $totalAF = 0; ?>
                @foreach($customer->fundassets as $fundassets)
                    <?php $totalAF = $totalAF + ($fundassets->asset_value); ?>
                @endforeach
                <h3>  Total of Asset Portfolio  <?php  echo "$" . $totalAF ; ?></h3>

            </div>
            <h1>Summary</h1>
                <l>----------------------------------------------------------------------------------------------------------------------</l>
            <h3> Total of Initial Portfolio Value <?php echo "$" . ($totalOV+$totaliip) ?></h3>
            <h3> Total of Current Portfolio Value <?php echo "$" . ($totalOV+$totalcip) ?></h3>
    </div>

@stop