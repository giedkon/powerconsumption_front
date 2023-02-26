@extends('layouts.web')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-header">Computer 2</div>
                        <table class="computer-table">
                            <thead>
                                <tr>
                                    <th>Timestamp</th>
                                    <th>Computer Name</th>
                                    <th>Inactivity (seconds)</th>
                                    <th>CPU Consumption (kWh)</th>
                                    <th>GPU Consumption (kWh)</th>
                                </tr>
                            </thead>
                            <tbody id="data">
                                @foreach ($computers as $computer)
                                    <tr>
                                        <td>1/1/2022, 12:00:00 AM</td>
                                        <td>{{ $computer['name'] }}</td>
                                        <td>39</td>
                                        <td>106 kWh</td>
                                        <td>106 kWh</td>
                                    </tr>
                                @endforeach
                        </table>

                        <a href="#" width="20" class="btn btn-secondary">Load more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
