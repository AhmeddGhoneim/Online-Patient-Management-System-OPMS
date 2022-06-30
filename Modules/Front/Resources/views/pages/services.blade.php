@extends('front::layouts.master')
@section('content')



<section class="home-slider owl-carousel">
      <div class="slider-item bread-item" style="background-image: url({{url('front/images/bg_1.jpg')}})" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container" data-scrollax-parent="true">
          <div class="row slider-text align-items-end">
            <div class="col-md-7 col-sm-12 ftco-animate mb-5">
              <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="{{route('front.index')}}">Home</a></span> <span>Services</span></p>
              <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Our Service Keeps you Smile</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-2">Our Service Keeps you Smile</h2>
            <p>Even a minor health challenge can be hard to handle alone. Having “FindUrdoctor” in your corner makes it easier. Our wide array of services all share the same goal: To help you get healthy and stay that way.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">

         <div class="media block-6 services d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span ><img style="width: 100% !important" src="{{ url('/') }}/front/images/x-ray.png" alt=""></span>
					
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Imaging Services
				</h3>
                <p>We offer a comprehensive range of medical imaging servicesfrom basic screening through the most advanced.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
				<span ><img style="width: 100% !important" src="{{ url('/') }}/front/images/consultation.png" alt=""></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Pregnancy and New Parent
				</h3>
                <p>Whether you are already a parent, expecting your first baby.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
				<span ><img style="width: 100% !important" src="{{ url('/') }}/front/images/medical-history.png" alt=""></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Heart Services</h3>
                <p>When you need to see a specialist for heart problems, rest assured that FindUrDoctor Heart & Vascular Center will provide the care you need..</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            	<span ><img style="width: 100% !important" src="{{ url('/') }}/front/images/pills.png" alt=""></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Nutrition Services
				</h3>
                <p>
					We believe in giving you the tools you need to maintain good nutrition and health.	 </p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
				<span ><img style="width: 100% !important" src="{{ url('/') }}/front/images/x-ray (1).png" alt=""></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Orthopedic Services
				</h3>
                <p>Our Orthopedics Services focus on addressing injuries and diseases that affect the musculoskeletal system — all the bones, joints, ligaments, tendons, muscles, and nerves that keep your body moving.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
				<span ><img style="width: 100% !important" src="{{ url('/') }}/front/images/blood-test.png" alt=""></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Lab Services
				</h3>
                <p>With convenient LabCorp locations in our hospitals and outpatient centers, lab services are never far away. & The Helicobacter pylori (or H. Pylori) breath test is a simple and safe test used to detect an active H. pyloriinfection.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            	<span ><img style="width: 100% !important" src="{{ url('/') }}/front/images/health-check.png" alt=""></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading"> Medical Check-up Program
				</h3>
                <p>Early diagnosis is a key element in the prevention and diagnosis of many diseases that may not show any prior symptoms. Prime Clinics check-up program is designed to detect risk factors that could affect your health and provide solutions to alter them and prevent the development of illness.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
				<span ><img style="width: 100% !important" src="{{ url('/') }}/front/images/healthcare.png" alt=""></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Addiction Medicine Recovery Services</h3>
                <p>Coming to terms with addiction is an important and life-changing step . We’re here to work with you and your family as you recover and begin to build your new life.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url({{url('front/images/bg_1.jpg')}})" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row d-flex align-items-center">
    			<div class="col-md-3 aside-stretch py-5">
    				<div class=" heading-section heading-section-white ftco-animate pr-md-4">
	            <h2 class="mb-3">Achievements</h2>
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