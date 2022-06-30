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
                <h3>Users</h3>
               
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ Route('dashboard.index') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Users</li>
                        <li class="breadcrumb-item active" aria-current="page">Create</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
   <!-- Horizontal Input start -->
   <form method="POST" action="{{ Route('user.store') }}">
       @csrf
   <section id="horizontal-input">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">User Information</h4>
                </div>

                <div class="card-body">
                    <div class="row">
                       
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <div class="col-lg-2 col-3">
                                    <label class="col-form-label">UserName</label>
                                </div>
                                <div class="col-lg-10 col-9">
                                    <input value="{{ old('UserName') }}" type="text" id="first-name" class="form-control" name="UserName"
                                        placeholder="Enter UserName">
                                        @if ($errors->has('UserName'))
                                        <span class="invalid feedback"role="alert">
                                            <strong style="color: rgb(197, 51, 51)">{{ $errors->first('UserName') }}.</strong>
                                        </span>
                                        @endif
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <div class="col-lg-3 col-3">
                                    <label class="col-form-label">User Phone</label>
                                </div>
                                <div class="col-lg-9 col-9">
                                    <input value="{{ old('phone') }}" type="number" id="last-name" class="form-control" name="phone"
                                        placeholder="Enter User Phone">
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
                                    <label class="col-form-label">User Email</label>
                                </div>
                                <div class="col-lg-10 col-9">
                                    <input value="{{ old('email') }}" type="email" id="last-name" class="form-control" name="email"
                                        placeholder="Enter User Email">
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
                                <div class="col-lg-3 col-3">
                                    <label class="col-form-label">Company Select</label>
                                </div>
                                <div class="col-lg-9 col-9">
                                    <div class="form-group">
                                        <select name="company_id[]" class="choices form-select" multiple="multiple">
                                            @foreach ($companies as $company)
                                                <option value="{{ $company->id }}">{{ $company->name }}</option>
                                            @endforeach
                                           
                                        </select>
                                    </div>
                                        @if ($errors->has('company_id'))
                                        <span class="invalid feedback "role="alert">
                                            <strong style="color: rgb(197, 51, 51)">{{ $errors->first('company_id') }}.</strong>
                                        </span>
                                        @endif
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <div class="col-lg-2 col-3">
                                    <label class="col-form-label">Password </label>
                                </div>
                                <div class="col-lg-10 col-9">
                                    <input  type="password" id="last-name" class="form-control" name="password"
                                        placeholder="Enter Password ">
                                        @if ($errors->has('password'))
                                        <span class="invalid feedback "role="alert">
                                            <strong style="color: rgb(197, 51, 51)">{{ $errors->first('password') }}.</strong>
                                        </span>
                                        @endif
                                </div>
                            </div>
                        </div>

                        

                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <div class="col-lg-3 col-3">
                                    <label class="col-form-label">Password Confirmation</label>
                                </div>
                                <div class="col-lg-9 col-9">
                                    <input  type="password" id="last-name" class="form-control" name="password_confirmation"
                                        placeholder="Enter Password Confirmation">
                                        @if ($errors->has('password_confirmation'))
                                        <span class="invalid feedback "role="alert">
                                            <strong style="color: rgb(197, 51, 51)">{{ $errors->first('password_confirmation') }}.</strong>
                                        </span>
                                        @endif
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <div class="col-lg-3 col-3">
                                    <label class="col-form-label">Allow Files</label>
                                </div>
                                    <div class="form-check">
                                        <input class="form-check-input" value="0" checked type="radio" name="allow_files"
                                            id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                             Allowed Files 
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" value="1" type="radio" name="allow_files"
                                            id="flexRadioDefault2" >
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            All Files
                                        </label>
                                    </div>
                                        @if ($errors->has('allow_files'))
                                        <span class="invalid feedback "role="alert">
                                            <strong style="color: rgb(197, 51, 51)">{{ $errors->first('allow_files') }}.</strong>
                                        </span>
                                        @endif
                            </div>
                        </div>

                        @php
                        $models=['user','company','file','enroll'];
                            
                        @endphp
                         <div class="col-md-12">
                            <div class="form-group row align-items-center">
                                <label class="col-form-label">Permissions </label>
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    @foreach($models as $model)
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link {{$loop->first? 'active' : ''}}" id="home-tab" data-bs-toggle="tab" href="#{{$model}}"
                                            role="tab" aria-controls="home" aria-selected="true">{{$model}}</a>
                                    </li>
                                    @endforeach
                                </ul>

                                <div class="tab-content" id="myTabContent">
                                    @foreach($models as $model)
                                    <div class="tab-pane fade show {{$loop->first? 'active' : ''}}" id="{{$model}}" role="tabpanel"
                                        aria-labelledby="home-tab">
                                            @if ($model=='file')
                                                <label style="cursor:pointer" class="form-control" ><input class="form-check-input form-check-primary" value="0_download" name='permissions[]' type="checkbox"> DownLoad</label>
                                            @endif

                                            <label style="cursor:pointer" class="form-control" ><input class="form-check-input form-check-primary" value="{{$model}}_read" name='permissions[]' type="checkbox"> Read</label>
                                            <label style="cursor:pointer" class="form-control" ><input class="form-check-input form-check-primary" value="{{$model}}_create"  name='permissions[]' type="checkbox"> Create</label>
                                            <label style="cursor:pointer" class="form-control" ><input class="form-check-input form-check-primary" value="{{$model}}_update"  name='permissions[]' type="checkbox"> Update</label>
                                            <label style="cursor:pointer" class="form-control" ><input class="form-check-input form-check-primary" value="{{$model}}_delete"  name='permissions[]' type="checkbox"> Delete</label>
                                    </div>
                                    @endforeach
                                    
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