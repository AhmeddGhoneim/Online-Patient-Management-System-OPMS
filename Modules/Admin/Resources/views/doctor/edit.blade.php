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
                <h3>Doctores</h3>
               
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ Route('dashboard.index') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Doctores</li>
                        <li class="breadcrumb-item active" aria-current="page">Edit</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
   <!-- Horizontal Input start -->
   <form method="POST" action="{{ Route('admin.doctor.update',$doctor->id) }}" enctype="multipart/form-data">
       @csrf
   <section id="horizontal-input">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Doctor Information</h4>
                </div>

                <div class="card-body">
                    <div class="row">
                       
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <div class="col-lg-2 col-3">
                                    <label class="col-form-label">Doctor Name</label>
                                </div>
                                <div class="col-lg-10 col-9">
                                    <input required value="{{ $doctor->name }}" type="text" id="first-name" class="form-control" name="name"
                                        placeholder="Enter Doctor Name">
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
                                    <label class="col-form-label">Doctor Phone</label>
                                </div>
                                <div class="col-lg-10 col-9">
                                    <input required  value="{{ $doctor->phone }}" type="number"  class="form-control" name="phone"
                                        placeholder="Enter Doctor Phone">
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
                                    <label class="col-form-label">Doctor Email</label>
                                </div>
                                <div class="col-lg-10 col-9">
                                    <input  required value="{{ $doctor->email }}" type="email"  class="form-control" name="email"
                                        placeholder="Enter Doctor Email">
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
                                    <label class="col-form-label"> Address </label>
                                </div>
                                <div class="col-lg-10 col-9">
                                    <input required value="{{ $doctor->address }}" type="text" id="address" class="form-control" name="address"
                                        placeholder="Enter address ">
                                        @if ($errors->has('address'))
                                        <span class="invalid feedback"role="alert">
                                            <strong style="color: rgb(197, 51, 51)">{{ $errors->first('address') }}.</strong>
                                        </span>
                                        @endif
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <div class="col-lg-2 col-3">
                                    <label class="col-form-label"> price </label>
                                </div>
                                <div class="col-lg-10 col-9">
                                    <input required value="{{ $doctor->price }}" type="number" min="0" id="price" class="form-control" name="price"
                                        placeholder="Enter price ">
                                        @if ($errors->has('price'))
                                        <span class="invalid feedback"role="alert">
                                            <strong style="color: rgb(197, 51, 51)">{{ $errors->first('price') }}.</strong>
                                        </span>
                                        @endif
                                </div>
                            </div>
                        </div>



                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <div class="col-lg-2 col-3">
                                    <label class="col-form-label">Doctor Category</label>
                                </div>
                                <div class="col-lg-10 col-9">
                                    <div class="form-group">
                                        <select name="category_id" class="choices form-select">
                                            @foreach ($categories as $category)
                                                <option @if($category->id == $doctor->category_id) selected @endif value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                        @if ($errors->has('category_id'))
                                        <span class="invalid feedback "role="alert">
                                            <strong style="color: rgb(197, 51, 51)">{{ $errors->first('category_id') }}.</strong>
                                        </span>
                                        @endif
                                </div>
                            </div>
                        </div>



                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <div class="col-lg-2 col-3">
                                    <label class="col-form-label">Short Description </label>
                                </div>
                                <div class="col-lg-10 col-9">
                                    <input required value="{{ $doctor->short_desc }}" type="text" id="first-name" class="form-control" name="short_desc"
                                        placeholder="Enter Doctor Description">
                                        @if ($errors->has('short_desc'))
                                        <span class="invalid feedback"role="alert">
                                            <strong style="color: rgb(197, 51, 51)">{{ $errors->first('short_desc') }}.</strong>
                                        </span>
                                        @endif
                                </div>
                            </div>
                        </div>

                
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <div class="col-lg-3 col-3">
                                    <label class="col-form-label">Dooctor Days <strong style="color: red">*</strong></label>
                                </div>
                                <div class="col-lg-9 col-9">
                                    <div class="form-group">
                                    <select required name="days[]" class="choices form-select" multiple="multiple">
                                           
                                    
                                                <option  @if( isset($days) && in_array('Saturday',$days)) selected @endif value="Saturday">Saturday</option>
                                                <option @if( isset($days) && in_array('Sunday',$days)) selected @endif  value="Sunday">Sunday</option>
                                                <option @if( isset($days) && in_array('Monday',$days)) selected @endif  value="Monday">Monday </option>
                                                <option @if( isset($days) && in_array('Tuesday',$days)) selected @endif  value="Tuesday">Tuesday</option>
                                                <option @if( isset($days) && in_array('Wednesday',$days)) selected @endif  value="Wednesday">Wednesday</option>
                                                <option @if( isset($days) && in_array('Thursday',$days)) selected @endif  value="Thursday">Thursday</option>
                                                <option @if( isset($days) && in_array('Friday',$days)) selected @endif  value="Friday">Friday</option>
                                           
                                        </select>
                                    </div>
                                       
                                </div>
                            </div>
                        </div>

                    


                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <div class="col-lg-2 col-3">
                                    <label class="col-form-label">from</label>
                                </div>
                              

                                <div class="col-lg-10 col-9">
                                    <div class="form-group">
                                        <input  value="{{ $doctor->from }}" type="time" class="form-control" name="from">
                                    </div>
                                       
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <div class="col-lg-2 col-3">
                                    <label class="col-form-label">to</label>
                                </div>
                                <div class="col-lg-10 col-9">
                                    <div class="form-group">
                                        <input value="{{ $doctor->to }}" type="time" class="form-control" name="to">
                                    </div>
                                       
                                </div>
                            </div>
                        </div>

                   

                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <div class="col-lg-2 col-3">
                                    <label class="col-form-label">Pdf File</label>
                                </div>
                                <div class="col-lg-10 col-9">
                                    
                                    <input name="attachment" class="form-control" type="file" id="formFile">
                                        @if ($errors->has('pdf_file'))
                                        <span class="invalid feedback"role="alert">
                                            <strong style="color: rgb(197, 51, 51)">{{ $errors->first('pdf_file') }}.</strong>
                                        </span>
                                        @endif
                                </div>
                            </div>
                        </div>
                        

                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <div class="col-lg-3 col-3">
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


                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <div class="col-lg-2 col-3">
                                    <label class="col-form-label">password</label>
                                </div>
                                <div class="col-lg-10 col-9">
                                    <input   type="password"  class="form-control" name="password">
                                       

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
                                    <input  value="{{ old('to') }}" type="password"  class="form-control" name="password_confirmation">
                                       
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