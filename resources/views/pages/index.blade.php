@extends('layouts.app')
@section('main')

<div class="wrapper">
    <div class="container-xxl">
        <div class="banner">
            <div class="container-fluid">
                <div class="row">
                    @foreach($banners as $banner)
                        <div class="col-md-4 position-relative">
                            <img src="{{ asset('storage/'.$banner->image) }}" alt="{{ $banner->image }}" class="img-fluid" style="max-width: 100%;">
                            <div class="banner-content">
                                <h4>Your Gateway to Excellence</h4>
                                <h1><strong>Empowering Success</strong></h1>
                                <h1><strong>Through Innovative</strong></h1>
                                <h1><strong>Solutions</strong></h1>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates sint eos, mollitia laborum deserunt culpa consectetur
                                    enim natus in illo magnam id minus nemo soluta ab quia impedit eveniet architecto?</p>
                                <a href="#" class="Primary">Primary Action</a>
                                <a href="#" class="secondary">Secondary Action</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>


@endsection
