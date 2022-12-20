@extends('layouts.app')

@section('content')
<div class="p-5 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Discover top train journeys</h1>
        <p class="col-md-8 fs-4">Travel thousands of destinations in and across 45 countries</p>
    </div>

    <div class="conatiner">
        <div class="row row-cols-5 g-4">
            @forelse($trains as $train)
            <div class="col p-3">
                <div class="card">
                    <img class="card-img-top" src="" alt="">
                    <div class="card-body">
                        <h4 class="card-title">{{$train->train_companies}}</h4>
                        <div class="train_details">
                            <h4>{{$train->train_code}}</h4>
                            <p><strong>Railway coaches:</strong>{{$train->railway_coaches}}</p>
                        </div>
                        <div class="card_info d-flex justify-content-between align-items-center">
                            <div class="departure">
                                <h4>{{$train->train_station_from}}</h4>
                                <p>{{$train->departure_hour}}</p>
                            </div>
                            <div class="arrival">
                                <h4> {{$train->train_station_to}}</h4>
                                <p>{{$train->arrival_hour}}</p>
                            </div>
                        </div>
                        <div class="train_info">
                            @if($train->on_time == true)
                            <strong>On Time</strong>
                            @else
                            <strong>Delay</strong>
                            @endif

                            @if($train->cancelled == true)
                            <h4>Cancelled</h4>
                            @else
                            <h4>Confirmed</h4>
                            @endif
                        </div>

                    </div>
                </div>
            </div>
            @empty
            <h2>No trains to show now</h2>
            @endforelse
        </div>
    </div>
</div>
@endsection