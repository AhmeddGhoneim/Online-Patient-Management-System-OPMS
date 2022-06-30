@extends('admin::layouts.master')
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
                <h3>Patientes</h3>
               
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ Route('dashboard.index') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">patients</li>
                        <li class="breadcrumb-item active" aria-current="page">Create</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
   <!-- Horizontal Input start -->
   <form method="POST" action="{{ Route('admin.patient.store') }}" enctype="multipart/form-data">
       @csrf
   <section id="horizontal-input">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Patient Information</h4>
                </div>

                <div class="card-body">
                    <div class="row">
                       
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <div class="col-lg-2 col-3">
                                    <label class="col-form-label">Patient Name</label>
                                </div>
                                <div class="col-lg-10 col-9">
                                    <input required value="{{ old('name') }}" type="text" id="first-name" class="form-control" name="name"
                                        placeholder="Enter Patient Name">
                                        @if ($errors->has('name'))
                                        <span class="invalid feedback"role="alert">
                                            <strong style="color: rgb(197, 51, 51)">{{ $errors->first('name') }}.</strong>
                                        </span>
                                        @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <div class="col-lg-2 col-3">
                                    <label class="col-form-label">Patient Phone</label>
                                </div>
                                <div class="col-lg-10 col-9">
                                    <input required  value="{{ old('phone') }}" type="number"  class="form-control" name="phone"
                                        placeholder="Enter Patient Phone">
                                        @if ($errors->has('phone'))
                                        <span class="invalid feedback "role="alert">
                                            <strong style="color: rgb(197, 51, 51)">{{ $errors->first('phone') }}.</strong>
                                        </span>
                                        @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <div class="col-lg-2 col-3">
                                    <label class="col-form-label">Patient Email</label>
                                </div>
                                <div class="col-lg-10 col-9">
                                    <input  required value="{{ old('email') }}" type="email"  class="form-control" name="email"
                                        placeholder="Enter Patient Email">
                                        @if ($errors->has('email'))
                                        <span class="invalid feedback "role="alert">
                                            <strong style="color: rgb(197, 51, 51)">{{ $errors->first('email') }}.</strong>
                                        </span>
                                        @endif
                                </div>
                            </div>
                        </div>



                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <div class="col-lg-2 col-3">
                                    <label class="col-form-label">Image (optional)</label>
                                </div>
                                <div class="col-lg-9 col-9">
                                    
                                    <input name="image" class="form-control" type="file" id="formFile">
                                        @if ($errors->has('image'))
                                        <span class="invalid feedback"role="alert">
                                            <strong style="color: rgb(197, 51, 51)">{{ $errors->first('image') }}.</strong>
                                        </span>
                                        @endif
                                </div>
                            </div>
                        </div>

                
                        <!-- <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <div class="col-lg-3 col-3">
                                    <label class="col-form-label">Patient Category <strong style="color: red">*</strong></label>
                                </div>
                                <div class="col-lg-9 col-9">
                                    <div class="form-group">
                                    <select required name="category_id[]" class="choices form-select" multiple="multiple">
                                           
                                    
                                    @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                       
                                </div>
                            </div>
                        </div> -->

                       


                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <div class="col-lg-2 col-3">
                                    <label class="col-form-label">password</label>
                                </div>
                                <div class="col-lg-10 col-9">
                                    <input required  type="password"  class="form-control" name="password">
                                       

                                    @if ($errors->has('password'))
                                        <span class="invalid feedback"role="alert">
                                            <strong style="color: rgb(197, 51, 51)">{{ $errors->first('password') }}.</strong>
                                        </span>
                                        @endif

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <div class="col-lg-2 col-3">
                                    <label class="col-form-label">re password</label>
                                </div>
                                <div class="col-lg-10 col-9">
                                    <input required value="{{ old('to') }}" type="password"  class="form-control" name="password_confirmation">
                                       
                                        @if ($errors->has('password_confirmation'))
                                            <span class="invalid feedback"role="alert">
                                                <strong style="color: rgb(197, 51, 51)">{{ $errors->first('password_confirmation') }}.</strong>
                                            </span>
                                        @endif

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

@endsection