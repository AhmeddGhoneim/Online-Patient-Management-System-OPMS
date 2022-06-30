@extends('front::layouts.master')
@section('content')

<section class="home-slider owl-carousel">
    <div class="slider-item bread-item" style="background-image: url('{{ url("/") }}/front/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container" data-scrollax-parent="true">
        <div class="row slider-text align-items-end">
          <div class="col-md-7 col-sm-12 ftco-animate mb-5">
            <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="{{ url('/') }}">Home</a></span> <span>Blog</span></p>
            <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Read Our Blog</h1>
          </div>
        </div>
      </div>
    </div>
  </section>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ftco-animate">
                <h2 class="mb-3">{{$blog->title}}</h2>
                <p>
                    <img src="{{ url("/") }}/uploads/image_files/{{ $blog->image }}" alt="" class="img-fluid">
                </p>
                <p>{!! $blog->description !!}</p>
            </div>
        </div>
    </div>
</section>
@endsection