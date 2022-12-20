@extends('layouts.app')

@section('content')
<div class="p-5 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">TrainLine</h1>
        <p class="col-md-8 fs-4">Explore Europe effortlessly by train and bus</p>
        <a class="btn btn-primary btn-lg" href="{{route('trains')}}">Find Trains</a>
    </div>
</div>
@endsection