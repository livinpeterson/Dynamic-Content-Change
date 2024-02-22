@extends('layouts.app')

@section('main')

<div class="container">
    <div class="blog-info">
        <div class="blog-title">
            <h2>Blog Post</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit</p>
        </div>

        <div class="container">
            <div class="row">
                @foreach($blogposts as $index => $post)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset('storage/'.$images[$index]) }}" alt="card-img">
                        </div>
                        <div class="card-body">
                            <div>
                                <a href="">{{ $post->sub_heading }}</a>
                            </div>
                            <div>
                                <h4>{{ $post->title }}</h4>
                                <div>
                                    <p>{{ $post->description }}</p>
                                </div>
                            </div>
                            <p class="card-text">{{ $post->excerpt }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="testimonial">
    <div class="testimonial-title">
      <h2>Testimonials</h2>
      <span>Follow Webflow System</span>
    </div>
    <div class="testimonial-cards">
      <div class="card">
<img src="https://placehold.co/500x500" class="testimonial-card-img" alt="..." width="80" height="80">
<div class="card-body testmonial-body">
  <h5 class="card-title">Customer name</h5>
  <h6>Company</h6>
  <div class="rating">
    <a href=""><span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star"></span></a>
  </div>
  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
 </div>
</div>

<div class="card">
<img src="https://placehold.co/500x500" class="testimonial-card-img" alt="..." width="80" height="80">
<div class="card-body testmonial-body">
  <h5 class="card-title">Customer name</h5>
  <h6>Company</h6>
  <div class="rating">
    <a href=""><span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star"></span></a>
  </div>
  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
 </div>
</div>

<div class="card">
<img src="https://placehold.co/500x500" class="testimonial-card-img" alt="..." width="80" height="80">
<div class="card-body testmonial-body">
  <h5 class="card-title">Customer name</h5>
  <h6>Company</h6>
  <div class="rating">
    <a href=""><span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star"></span></a>
  </div>
  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
 </div>
</div>
</div>

@endsection
