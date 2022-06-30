

@include('sweetalert::alert')

 <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
            <a class="navbar-brand" href="{{ url('/') }}">FindUr<span>Doctor</span></a>
              <p>Even a minor health challenge can be hard to handle alone. Having “FindUrdoctor” in your corner makes it easier. Our wide array of services all share the same goal: To help you get healthy and stay that way.</p>
            </div>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft ">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>

              
            </ul>
          </div>
          <div class="col-md-2">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Quick Links</h2>
              <ul class="list-unstyled">
                  <li><a href="{{route('front.index')}}" class="nav-link">Home</a></li>
                  <li><a href="{{route('front.about')}}" class="nav-link">About</a></li>
                  <li><a href="{{route('front.services')}}" class="nav-link">Services</a></li>
                  <li><a href="{{route('front.doctors')}}" class="nav-link">Doctors</a></li>
                  <li><a href="{{ Route('front.blogs') }}" class="nav-link">Blog</a></li>
                  <li><a href="{{ route('front.contact') }}" class="nav-link">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 pr-md-4">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Recent Blog</h2>
          @foreach ($Recent_Blogs as $blog)
            <div class="block-21 mb-4 d-flex">
              <a href="{{ Route('front.SingleBlog',$blog->id) }}" class="blog-img mr-4" style="background-image: url('{{ url('/') }}/public/uploads/image_files/{{ $blog->image }}');"></a>
              <div class="text">
                <h3 class="heading"><a href="{{ Route('front.SingleBlog',$blog->id) }}">{{ $blog->name }}</a></h3>
                <div class="meta">
                  <div><a href="{{ Route('front.SingleBlog',$blog->id) }}"><span class="icon-calendar"></span> {{ $blog->created_at }}</a></div>
                  <div><a href="{{ Route('front.SingleBlog',$blog->id) }}"><span class="icon-person"></span> {{ $blog->doctor->name }}</a></div>
                </div>
              </div>
            </div>
          @endforeach
              

             
              
            </div>
          </div>
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Office</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Cairo View, Egypt</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+0112234567</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">


          </div>
        </div>
      </div>
    </footer>
    