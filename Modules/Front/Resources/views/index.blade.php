

@extends('front::layouts.master')

@section('content')

<section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url({{url('front/images/bg_1.jpg')}})">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">
            <div class="col-md-6 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
              <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Modern Medicine in a Calm and Relaxed Environment</h1>
              {{-- <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> --}}
			  @if (auth('patiant')->check())
              	<p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="#" data-toggle="modal" data-target="#modalRequest" class="btn btn-primary px-4 py-3">Make an Appointment</a></p>
			  @endif
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url({{url('front/images/bg_2.jpg')}})">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">
            <div class="col-md-6 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
              <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Modern Achieve Your Desired Perfect Health</h1>
              {{-- <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> --}}
			  @if (auth('patiant')->check())
              	<p><a data-toggle="modal" data-target="#modalRequest" href="#" class="btn btn-primary px-4 py-3">Make an Appointment</a></p>
			  @endif
            </div>
          </div>
        </div>
      </div>
    </section>

    {{-- <section class="ftco-intro">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-3 color-1 p-4">
    				<h3 class="mb-4">Emergency Cases</h3>
    				<p>A small river named Duden flows by their place and supplies</p>
    				<span class="phone-number">+ (123) 456 7890</span>
    			</div>
    			<div class="col-md-3 color-2 p-4">
    				<h3 class="mb-4">Opening Hours</h3>
    				<p class="openinghours d-flex">
    					<span>Monday - Friday</span>
    					<span>8:00 - 19:00</span>
    				</p>
    				<p class="openinghours d-flex">
    					<span>Saturday</span>
    					<span>10:00 - 17:00</span>
    				</p>
    				<p class="openinghours d-flex">
    					<span>Sunday</span>
    					<span>10:00 - 16:00</span>
    				</p>
    			</div>
    			<div class="col-md-6 color-3 p-4">
    				<h3 class="mb-2">Make an Appointment</h3>
    				<form action="#" class="appointment-form">
	            <div class="row">
	            	<div class="col-sm-4">
	                <div class="form-group">
			              <div class="select-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="" class="form-control">
                      	<option value="">Department</option>
                        <option value="">Teeth Whitening</option>
                        <option value="">Teeth CLeaning</option>
                        <option value="">Quality Brackets</option>
                        <option value="">Modern Anesthetic</option>
                      </select>
                    </div>
			            </div>
	              </div>
	              <div class="col-sm-4">
	                <div class="form-group">
	                	<div class="icon"><span class="icon-user"></span></div>
			              <input type="text" class="form-control" id="appointment_name" placeholder="Name">
			            </div>
	              </div>
	              <div class="col-sm-4">
	                <div class="form-group">
	                	<div class="icon"><span class="icon-paper-plane"></span></div>
			              <input type="text" class="form-control" id="appointment_email" placeholder="Email">
			            </div>
	              </div>
	            </div>
	            <div class="row">
	              <div class="col-sm-4">
	                <div class="form-group">
	                	<div class="icon"><span class="ion-ios-calendar"></span></div>
	                  <input type="text" class="form-control appointment_date" placeholder="Date">
	                </div>    
	              </div>
	              <div class="col-sm-4">
	                <div class="form-group">
	                	<div class="icon"><span class="ion-ios-clock"></span></div>
	                  <input type="text" class="form-control appointment_time" placeholder="Time">
	                </div>
	              </div>
	              <div class="col-sm-4">
	                <div class="form-group">
	                	<div class="icon"><span class="icon-phone2"></span></div>
	                  <input type="text" class="form-control" id="phone" placeholder="Phone">
	                </div>
	              </div>
	            </div>
	            
	            <div class="form-group">
	              <input type="submit" value="Make an Appointment" class="btn btn-primary">
	            </div>
	          </form>
    			</div>
    		</div>
    	</div>
    </section> --}}
  
    <section class="ftco-section ftco-services">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-2">Our Service Keeps you Health</h2>
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
                <h3 class="heading">Imaging Services</h3>
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
                <h3 class="heading">Pregnancy and New Parent</h3>
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
                <p>When you need to see a specialist for heart problems, rest assured that FindUrDoctor Heart & Vascular Center will provide the care you need.</p>
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
                <p>We believe in giving you the tools you need to maintain good nutrition and health.</p>
              </div>
            </div>      
          </div>
		  
        </div>
      </div>
      <div class="container-wrap mt-5">
      	<div class="row d-flex no-gutters">
      		<div class="col-md-6 img" style="background-image: url({{url('front/images/about-2.jpg')}})">
      		</div>
      		<div class="col-md-6 d-flex">
      			<div class="about-wrap">
      				<div class="heading-section heading-section-white mb-5 ftco-animate">
		            <h2 class="mb-2">Healthcare with a personal touch</h2>
		            {{-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> --}}
		          </div>
      				<div class="list-services d-flex ftco-animate">
      					<div class="icon d-flex justify-content-center align-items-center">
      						<span class="icon-check2"></span>
      					</div>
      					<div class="text">
	      					<h3>Well Experience Doctors & Comfortable Clinicst</h3>
	      					<p>In an increasingly technology-driven world, healthcare providers are now expected to provide easy and convenient facilities, as well as high-quality care. Online scheduling is a software tool that enables patients to book or request appointments with only a few simple clicks from any internet-connected device. It is one of the most popular and simplest technologies used by forward-thinking healthcare providers, including hospitals. Using online scheduling can bring many benefits to practices who use it.</p>
      					</div>
      				</div>
      				<div class="list-services d-flex ftco-animate">
      					<div class="icon d-flex justify-content-center align-items-center">
      						<span class="icon-check2"></span>
      					</div>
      					<div class="text">
	      					<h3>High Technology Facilities</h3>
	      					<p>In an increasingly technology-driven world, healthcare providers are now expected to provide easy and convenient facilities, as well as high-quality care. Online scheduling is a software tool that enables patients to book or request appointments with only a few simple clicks from any internet-connected device. It is one of the most popular and simplest technologies used by forward-thinking healthcare providers, including hospitals. Using online scheduling can bring many benefits to practices who use it.</p>
      					</div>
      				</div>
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
		@foreach($data['doctors'] as $doctor)
        	<div class="col-lg-4 col-md-6 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<!-- <div class="img mb-4" style="background-image: url({{url('front/images/person_5.jpg')}})"></div> -->
      				<div class="img mb-4" style="background-image: url( '{{$doctor->image_path}}')"></div>

				
 
					 
      				<div class="info text-center">
      					<h3><a href="{{route('front.SingleDoctor',$doctor->id)}}">{{$doctor->name}}</a></h3>
      					<span class="position">{{$doctor->category->name}}</span>
      					<div class="text">
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
        	<!-- <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url({{url('front/images/person_6.jpg')}})"></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Mark Wilson</a></h3>
      					<span class="position">Dentist</span>
      					<div class="text">
	        				<p>Far far away, behind the word mountains, far from the countries Vokalia</p>
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
        	<div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url({{url('front/images/person_7.jpg')}})"></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Patrick Jacobson</a></h3>
      					<span class="position">Dentist</span>
      					<div class="text">
	        				<p>Far far away, behind the word mountains, far from the countries Vokalia</p>
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
        	<div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url({{url('front/images/person_8.jpg')}})"></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Ivan Dorchsner</a></h3>
      					<span class="position">System Analyst</span>
      					<div class="text">
	        				<p>Far far away, behind the word mountains, far from the countries Vokalia</p>
	        				<ul class="ftco-social">
			              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
			              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
			              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
			              <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
			            </ul>
	        			</div>
      				</div>
        		</div>
        	</div> -->
			
        </div>
        {{-- <div class="row  mt-5 justify-conten-center">
        	<div class="col-md-8 ftco-animate">
        		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi vero accusantium sunt sit aliquam ipsum molestias autem perferendis, incidunt cumque necessitatibus cum amet cupiditate, ut accusamus. Animi, quo. Laboriosam, laborum.</p>
        	</div>
        </div> --}}
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

    
		
	{{-- <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-2">Testimony</h2>
            <span class="subheading">Our Happy Customer Says</span>
          </div>
        </div>
        <div class="row justify-content-center ftco-animate">
          <div class="col-md-8">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url({{url('front/images/person_1.jpg')}})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                    <p class="name">Dennis Green</p>
                    <span class="position">Marketing Manager</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url({{url('front/images/person_2.jpg')}}) ">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Dennis Green</p>
                    <span class="position">Interface Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url({{url('front/images/person_3.jpg')}})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Dennis Green</p>
                    <span class="position">UI Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image:  url({{url('front/images/person_1.jpg')}})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Dennis Green</p>
                    <span class="position">Web Developer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url({{url('front/images/person_1.jpg')}})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Dennis Green</p>
                    <span class="position">System Analytics</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> --}}
		
	{{-- <section class="ftco-gallery">
    	<div class="container-wrap">
    		<div class="row no-gutters">
					<div class="col-md-3 ftco-animate">
						<a href="#" class="gallery img d-flex align-items-center" style="background-image:  url({{url('front/images/gallery-1.jpg')}})">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="#" class="gallery img d-flex align-items-center" style="background-image: url({{url('front/images/gallery-2.jpg')}})">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="#" class="gallery img d-flex align-items-center" style="background-image: url({{url('front/images/gallery-3.jpg')}})">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="#" class="gallery img d-flex align-items-center" style="background-image: url({{url('front/images/gallery-4.jpg')}})">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
        </div>
    	</div>
    </section> --}}

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-2">Latest Blog</h2>
          </div>
        </div>
        <div class="row">
			@foreach ($data['blogs'] as $blog)
			<div class="col-md-4 ftco-animate">
				<div class="blog-entry">
				  <a href="{{ Route('front.SingleBlog',$blog->id) }}" class="block-20" style="background-image: url({{ url("/") }}/uploads/image_files/{{ $blog->image }})">
				  </a>
				  <div class="text d-flex py-4">
					<div class="meta mb-3">
					  <div><a href="#">{{ $blog->created_at }}</a></div>
					  <div><a href="#">{{ $blog->doctor->name }}</a></div>
					</div>
					<div class="desc pl-3">
						<h3 class="heading"><a href="{{ Route('front.SingleBlog',$blog->id) }}">{{ $blog->title }}</a></h3>
					  </div>
				  </div>
				</div>
			  </div>
			@endforeach
          


  
        </div>
      </div>
    </section>
		
		<section class="ftco-quote">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6 pr-md-5 aside-stretch py-5 choose">
    				<div class="heading-section heading-section-white mb-5 ftco-animate">
	            <h2 class="mb-2">FindUrDoctor Procedure &amp; High Quality Services</h2>
	          </div>
	          <div class="ftco-animate">
	          	{{-- <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. Because there were thousands of bad Commas, wild Question Marks and devious Semikoli</p> --}}
	          	<ul class="un-styled my-5">
	          		<li><span class="icon-check"></span>Quick Response</li>
	          		<li><span class="icon-check"></span>Speed in solving problems</li>
	          		<li><span class="icon-check"></span>accept suggestions</li>
	          	</ul>
	          </div>
    			</div>
    			<div class="col-md-6 py-5 pl-md-5">
    				<div class="heading-section mb-5 ftco-animate">
	            <h2 class="mb-2">Contact With Us</h2>
	          </div>
	          <form action="{{ route('front.post.contact') }}" method="POST" class="ftco-animate">
				@csrf
	          	<div class="row">
	          		<div class="col-md-6">
		              <div class="form-group">
		                <input required name="name" type="text" class="form-control" placeholder="Full Name">
		              </div>
	              </div>
	              <div class="col-md-6">
		              <div class="form-group">
		                <input required name="email" type="text" class="form-control" placeholder="Email">
		              </div>
	              </div>
	              <div class="col-md-6">
	              	<div class="form-group">
		                <input  required name="subject" type="text" class="form-control" placeholder="subjects">
		              </div>
		            </div>
		            <div class="col-md-12">
		              <div class="form-group">
		                <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
		              </div>
		            </div>
		            <div class="col-md-12">
		              <div class="form-group">
		                <input type="submit" value="submit" class="btn btn-primary py-3 px-5">
		              </div>
	              </div>
              </div>
            </form>
    			</div>
    		</div>
    	</div>
    </section>
@endsection
