@extends('front::layouts.master')
@section('content')

<section class="home-slider owl-carousel">
    <div class="slider-item bread-item" style="background-image: url('{{ url("/") }}/front/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container" data-scrollax-parent="true">
        <div class="row slider-text align-items-end">
          <div class="col-md-7 col-sm-12 ftco-animate mb-5">
            <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="{{ url('/') }}">Home</a></span> <span>Doctor</span></p>
            <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Read Our Data</h1>
          </div>
        </div>
      </div>
    </div>
  </section>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ftco-animate">
                <h2 class="mb-3">{{$doctor->name}}</h2>
                <p>
                    <img src="{{ url("/") }}/uploads/image_files/{{ $doctor->image }}" alt="" class="img-fluid">
                </p>
                   <p>{{$doctor->short_desc}}</p>
	        				<p> Days : @foreach (json_decode($doctor->days) as $member) {{ $member }} @endforeach</p>
	        				<p>From : {{$doctor->from}} , To : {{$doctor->to}}</p>
	        				<p>Price : {{$doctor->price}}$</p>

                  <h2>Personal Data</h2>
                  <p>Email:{{$doctor->email}}</p>
                  <p>Phone:{{$doctor->phone}}</p>
	        				<p>Address : {{$doctor->address}}</p>


              

            </div>
        </div>
    </div>
</section>
@endsection