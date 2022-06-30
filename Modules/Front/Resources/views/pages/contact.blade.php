@extends('front::layouts.master')

@section('content')
    <section class="home-slider owl-carousel">
        <div class="slider-item bread-item" style="background-image: url('{{ url("/") }}/front/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container" data-scrollax-parent="true">
            <div class="row slider-text align-items-end">
            <div class="col-md-7 col-sm-12 ftco-animate mb-5">
                <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="{{ url('/') }}">Home</a></span> <span>Contact Us</span></p>
                <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Contact Us</h1>
            </div>
            </div>
        </div>
        </div>
    </section>


    <section class="ftco-section contact-section ftco-degree-bg">
        <div class="container">
          <div class="row d-flex mb-5 contact-info">
            <div class="col-md-12 mb-4">
              <h2 class="h4">Contact Information</h2>
            </div>
            <div class="w-100"></div>
            <div class="col-md-3">
              <p><span>Address:</span> 	203 Fake St. Cairo View, Egypt</p>
            </div>
            <div class="col-md-3">
              <p><span>Phone:</span> <a href="tel://1234567920">	+0112234567
              </a></p>
            </div>
            <div class="col-md-3">
              <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
            </div>
            <div class="col-md-3">
              <p><span>Website</span> <a href="#">	info@yourdomain.com</a></p>
            </div>
          </div>
          <div class="row block-9 center">
            <div class="col-md-6 pr-md-5">
              <form action="{{ route('front.post.contact') }}" method="POST">
                @csrf
                <div class="form-group">
                  <input required name="name" type="text" class="form-control" placeholder="Your Name">
                </div>
                <div class="form-group">
                  <input required name="email" type="email" class="form-control" placeholder="Your Email">
                </div>
                <div class="form-group">
                  <input required name="subject" type="text" class="form-control" placeholder="Subject">
                </div>
                <div class="form-group">
                  <textarea required name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                </div>
              </form>
            
            </div>
  
           
          </div>
        </div>
      </section>
  
@endsection