@extends('layouts.app')

@section('content')
<div class="p-5 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Discover top train journeys</h1>
        <p class="col-md-8 fs-4">Travel thousands of destinations in and across 45 countries</p>
    </div>

    <div class="conatiner">
        <div class="row">
            <div class="col">
                <div class="card">
                    <img class="card-img-top" src="" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Azienda</h4>
                        <div class="train_details">
                            <h4>code</h4>
                            <p><strong>Railway coaches:</strong></p>
                        </div>
                        <div class="card_info d-flex justify-content-between align-items-center">
                            <div class="departure">
                                <h4>partenza</h4>
                                <p>orario</p>
                            </div>
                            <div class="arrival">
                                <h4>arrivo</h4>
                                <p>orario</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection