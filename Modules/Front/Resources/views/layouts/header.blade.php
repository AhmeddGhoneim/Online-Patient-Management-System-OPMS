

 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="{{ url('/') }}">FindUr<span>Doctor</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item {{ request()->segment('1')=='' ?  'active' : '' }} "><a href="{{route('front.index')}}" class="nav-link">Home</a></li>
	          <li class="nav-item  {{ request()->segment('1')=='about' ?  'active' : '' }}"><a href="{{route('front.about')}}" class="nav-link">About</a></li>
	          <li class="nav-item  {{ request()->segment('1')=='services' ?  'active' : '' }}"><a href="{{route('front.services')}}" class="nav-link">Services</a></li>
	          <li class="nav-item {{ request()->segment('1')=='doctors' ?  'active' : '' }}"><a href="{{route('front.doctors')}}" class="nav-link">Doctors</a></li>
	          <li class="nav-item {{ request()->segment('1')=='blogs' ?  'active' : '' }}"  ><a href="{{ Route('front.blogs') }}" class="nav-link">Blog</a></li>
	          <li class="nav-item {{ request()->segment('1')=='contact-us' ?  'active' : '' }}"><a href="{{ route('front.contact') }}" class="nav-link">Contact</a></li>
			  @if (auth('patiant')->check())
				<li class="nav-item "><a href="{{ Route('patinet.dashboard') }}" class="nav-link"><span>myDashboard</span></a></li>
				<li class="nav-item "><a href="{{ Route('patiant.logout') }}" class="nav-link"><span>logout</span></a></li>
			  
			    <li class="nav-item cta"><a href="#" class="nav-link" data-toggle="modal" data-target="#modalRequest"><span>Make an Appointment</span></a></li>

				@else
					<li class="nav-item cta"><a href="{{ Route('patiant.login') }}" class="nav-link"><span>Login</span></a></li>
			  @endif
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    