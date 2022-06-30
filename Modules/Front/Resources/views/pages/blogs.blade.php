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
                @foreach ($blogs as $blog)
                    <div class="row">
                        <div class="col-md-10">
                            <div class="row">
                        <div class="col-md-12 ftco-animate">
                        <div class="blog-entry">
                        <a href="{{ Route('front.SingleBlog',$blog->id) }}" class="block-20" style="background-image: url('{{ url("/") }}/uploads/image_files/{{ $blog->image }}');">
                        </a>
                        <div class="text d-flex py-4">
                            <div class="meta mb-3">
                            <div><a href="#">{{ $blog->created_at }}</a></div>
                            <div><a href="#">{{ $blog->doctor->name }}</a></div>
                            </div>
                            <div class="desc pl-sm-3 pl-md-5">
                                <h3 class="heading"><a href="{{ Route('front.SingleBlog',$blog->id) }}">{{ $blog->title }}</a></h3>
                                <p> {{ substr(strip_tags($blog->description),1,200) }} .... </p>
                                <p><a href="{{ Route('front.SingleBlog',$blog->id) }}" class="btn btn-primary btn-outline-primary">Read more</a></p>
                            </div>
                        </div>
                        </div>
                    </div>

                    </div>
              
				
        
				</div>
                @endforeach
			</div>

		</section>

@endsection