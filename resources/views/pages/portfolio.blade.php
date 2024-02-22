@extends('layouts.app')
@section('main')
<style>
    
</style>

<div class="container">
    <div class="Portfolio">
        <div class="header2">
            <div class="portfolio-title">
                <h2>Portfolio</h2>
            </div>
            <div class="header-center">
                <ul class="portfolio-nav">
                    <li><a href="">Lorem ipsum</a></li>
                    <li><a href="">Lorem ipsum</a></li>
                    <li><a href="">Lorem ipsum</a></li>
                    <li><a href="">Lorem ipsum</a></li>
                    <li><a href="">Lorem ipsum</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        @foreach($portfolios as $img => $portfolio)
        <div class="col-md-4 mb-4" id="portfolio">
            <div class="card">
                <div class="card-img">
                    <img src="{{ asset('storage/'.$images[$img]) }}" alt="card-img" class="img-fluid" style="max-width: 100%;">
                </div>
                <div class="card-body">
                    <p class="card-text">{{ $portfolio->title }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
