@extends('doctor::layouts.master')
@section('css')
    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }

        /* Firefox */
        input[type=number] {
        -moz-appearance: textfield;
        }
    </style>


     <!-- Include Choices CSS -->
     <link rel="stylesheet" href="{{ url('/') }}/assets/vendors/choices.js/choices.min.css" />

@endsection
@section('content')
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Blogs
                </h3>
               
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ Route('dashboard.index') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blogs</li>
                        <li class="breadcrumb-item active" aria-current="page">Create</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
   <!-- Horizontal Input start -->
   <form method="POST" action="{{ Route('doctor.blogs.store') }}" enctype="multipart/form-data">
       @csrf
   <section id="horizontal-input">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Blog Information</h4>
                </div>

                <div class="card-body">
                    <div class="row">
                       
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <div class="col-lg-2 col-3">
                                    <label class="col-form-label">Title</label>
                                </div>
                                <div class="col-lg-10 col-9">
                                    <input  value="" type="text" id="first-name" class="form-control" name="title"
                                        placeholder="Enter BLog Title">
                                        @if ($errors->has('title'))
                                        <span class="invalid feedback"role="alert">
                                            <strong style="color: rgb(197, 51, 51)">{{ $errors->first('title') }}.</strong>
                                        </span>
                                        @endif
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <div class="col-lg-2 col-3">
                                    <label class="col-form-label">Blog</label>
                                </div>
                                <div class="col-lg-10 col-9">
                                    <textarea name="description" id="editor" cols="30" rows="10">Type Your Blog</textarea>
                                    
                                        @if ($errors->has('description'))
                                        <span class="invalid feedback"role="alert">
                                            <strong style="color: rgb(197, 51, 51)">{{ $errors->first('description') }}.</strong>
                                        </span>
                                        @endif
                                </div>
                            </div>
                        </div>
                       
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <div class="col-lg-2 col-3">
                                    <label class="col-form-label">Image</label>
                                </div>
                                <div class="col-lg-9 col-9">
                                    
                                    <input name="image" class="form-control image" type="file" id="formFile">
                                        @if ($errors->has('image'))
                                        <span class="invalid feedback"role="alert">
                                            <strong style="color: rgb(197, 51, 51)">{{ $errors->first('image') }}.</strong>
                                        </span>
                                        @endif
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <div class="col-lg-2 col-3">
                                    <label class="col-form-label">Current Image </label>
                                </div>
                                <div class="col-lg-9 col-9">
                                    
                                    <img style="width: 100px" class="img-thumbnail image-preview" src=" {{ url('/') . '/images/doctor.png' }}">
                                </div>
                            </div>
                        </div>
                        <div class="buttons">
                            <button href="#" class="btn btn-primary rounded-pill btn-sm"><i class="fa fa-save"></i> Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</form>
<!-- Horizontal Input end -->


</div>
</div>
@endsection

@section('js')
<script src="{{ url('/') }}/assets/vendors/choices.js/choices.min.js"></script>
<script src="{{ url('/') }}/assets/vendors/ckeditor/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
        
</script>

@endsection