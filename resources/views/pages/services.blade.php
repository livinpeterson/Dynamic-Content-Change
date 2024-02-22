@extends('layouts.app')

@section('main')
<div class="container">
    <div class="service-info">
        <div class="service-title">
            <h2>Our Services</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita quisquam consequatur beatae est deserunt sint, laborum, natus eligendi similique sunt ab distinc.</p>
        </div>
    </div>
    <div class="row" id="services">
        @foreach($services as $img => $service)
        <div class="col-md-3 mb-4">
            <div class="card">
                <div class="card-icon">
                    <img src="{{ asset('storage/'.$images[$img]) }}" alt="">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $service->title }}</h5>
                    <p class="card-text">{{ $service->description }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
