

@extends('front::layouts.master')

@section('content')


<section class="home-slider owl-carousel">
      <div class="slider-item bread-item" style="background-image: url({{url('front/images/bg_1.jpg')}})" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container" data-scrollax-parent="true">
          <div class="row slider-text align-items-end">
            <div class="col-md-7 col-sm-12 ftco-animate mb-5">
              <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="{{ url('/') }}">Home</a></span> <span>Doctors</span></p>
              <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Well Experienced Doctors</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
		
	<section class="ftco-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-3">Meet Our Experience Doctors</h2>
            {{-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences</p> --}}
          </div>
        </div>
        <div class="row">

		@foreach($doctors as $doctor)
        	<div class="col-lg-4 col-md-6 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(' {{$doctor->image_path}} ')"></div>
      				<div class="info text-center">
      					<h3><a href="{{route('front.SingleDoctor',$doctor->id)}}">{{$doctor->name}}</a></h3>
      					<span class="position">{{$doctor->category->name}}</span>
      					<div class="text">
	        				<!-- <p>Far far away, behind the word mountains, far from the countries Vokalia</p> -->
	        			

							<p>{{$doctor->short_desc}}</p>
	        				<p>Address : {{$doctor->address}}</p>
	        				<p> Days : @foreach (json_decode($doctor->days) as $member) {{ $member }} @endforeach</p>
	        				<p>From : {{$doctor->from}} , To : {{$doctor->to}}</p>
	        				<p>Price : {{$doctor->price}} EGP</p>


	        				<ul class="ftco-social">
			              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
			              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
			              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
			              <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
			            </ul>
	        			</div>
      				</div>
        		</div>
        	</div>
		@endforeach	
      
        </div>
      </div>
    </section>


	<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url({{url('front/images/bg_1.jpg')}})" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row d-flex align-items-center">
    			<div class="col-md-3 aside-stretch py-5">
    				<div class=" heading-section heading-section-white ftco-animate pr-md-4">
	            <h2 class="mb-3">Achievements</h2>
	            {{-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> --}}
	          </div>
    			</div>
    			<div class="col-md-9 py-5 pl-md-5">
		    		<div class="row">
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="10">0</strong>
		                <span>Years of Experience</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="{{ $data['number_of_doctors'] }}">0</strong>
		                <span>Qualified Doctors</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="{{ $data['number_of_blogs'] }}">0</strong>
		                <span>Medicine Blogs</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="{{ $data['number_of_Patients'] }}">0</strong>
		                <span>Patients</span>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
	      </div>
    	</div>
    </section>

	<!-- <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-3">Our Best Pricing</h2>
            {{-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> --}}
          </div>
        </div>
    		<div class="row">
        	<div class="col-md-3 ftco-animate">
        		<div class="pricing-entry pb-5 text-center">
        			<div>
	        			<h3 class="mb-4">Basic</h3>
	        			<p><span class="price">$24.50</span> <span class="per">/ session</span></p>
	        		</div>
        			<ul>
        				<li>Diagnostic Services</li>
						<li>Professional Consultation</li>
						<li>Early examination</li>
						<li>Suggest appropriate treatment</li>
						<li>Follow up constantly</li>
        			</ul>
        			{{-- <p class="button text-center"><a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">Order now</a></p> --}}
        		</div>
        	</div>
        	<div class="col-md-3 ftco-animate">
        		<div class="pricing-entry pb-5 text-center">
        			<div>
	        			<h3 class="mb-4">Standard</h3>
	        			<p><span class="price">$34.50</span> <span class="per">/ session</span></p>
	        		</div>
        			<ul>
        				<li>Diagnostic Services</li>
						<li>Professional Consultation</li>
						<li>Early examination</li>
						<li>Suggest appropriate treatment</li>
						<li>Follow up constantly</li>
        			</ul>
        			{{-- <p class="button text-center"><a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">Order now</a></p> --}}
        		</div>
        	</div>
        	<div class="col-md-3 ftco-animate">
        		<div class="pricing-entry active pb-5 text-center">
        			<div>
	        			<h3 class="mb-4">Premium</h3>
	        			<p><span class="price">$54.50</span> <span class="per">/ session</span></p>
	        		</div>
        			<ul>
        				<li>Diagnostic Services</li>
						<li>Professional Consultation</li>
						<li>Early examination</li>
						<li>Suggest appropriate treatment</li>
						<li>Follow up constantly</li>
        			</ul>
        			{{-- <p class="button text-center"><a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">Order now</a></p> --}}
        		</div>
        	</div>
        	<div class="col-md-3 ftco-animate">
        		<div class="pricing-entry pb-5 text-center">
        			<div>
	        			<h3 class="mb-4">Platinum</h3>
	        			<p><span class="price">$89.50</span> <span class="per">/ session</span></p>
	        		</div>
        			<ul>
        				<li>Diagnostic Services</li>
						<li>Professional Consultation</li>
						<li>Early examination</li>
						<li>Suggest appropriate treatment</li>
						<li>Follow up constantly</li>
        			</ul>
        			{{-- <p class="button text-center"><a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">Order now</a></p> --}}
        		</div>
        	</div>
        </div>
    	</div>
    </section> -->

@endsection
