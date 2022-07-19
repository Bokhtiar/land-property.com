@extends('layouts.user.app')
@section('title', 'Property Detail')
@section('css')
@endsection
@section('user_content')

<div class="pagetitle container">
    <h1>Property Details</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item">Property Show</li>
            <li class="breadcrumb-item active">Property Details</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section id="portfolio-details" class="portfolio-details">
    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-8">
          <div class="portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">
                <img src="{{ asset($show->image) }}" height="350px" width="100%" alt="">
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="portfolio-info">
            <h3>Property information</h3>
            <ul>
              <li><strong>Property Title</strong>: {{ $show->title}}</li>
              <li><strong>Contact-Us</strong>: {{ $show->price}}</li>
              <li><strong>Property Type</strong>: {{ $show->category ? $show->category->name : "Data Not Found" }}</li>
              <li><strong>Property Location</strong>: {{ $show->location}}</li>
              <li><strong>Contact-Us</strong>: {{ $show->phone}}</li>
              @if ($show->sell == 1)
              <li> <a href="@route('user.cart.store', $show->property_id)" class="btn btn-sm btn-success">Add To Cart</a> </li>
              @endif
              
            </ul>
          </div>
          <div class="portfolio-description">
              <hr>
            <h3> More Info</h3>
            <p>
             {!! $show->body !!}
            </p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Details Section -->


@section('js')
@endsection
@endsection
