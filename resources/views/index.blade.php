@extends('layouts.web')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                @include('graphs.computer_usage', ['computer_usage' => $computer_usage])
                @include('graphs.consumption_by_day', ['computer_usage' => $computer_usage_daily])

            </div>
        </div>
    </div>
@endsection
