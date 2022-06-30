@extends('admin::layouts.master')

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
                        <li class="breadcrumb-item active" aria-current="page">Categories</li>
                        <li class="breadcrumb-item active" aria-current="page">Create</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

<section id="horizontal-input">
    <form action="{{ route('admin.category.store') }}" method="POST">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row align-items-center">
                            <div class="col-lg-2 col-3">
                                <label class="col-form-label">Category Name </label>
                            </div>
                            <div class="col-lg-10 col-9">
                                <input   value="{{ old('name') }}" type="text"  class="form-control" name="name"
                                    placeholder="Enter Category Name">
                                    @if ($errors->has('name'))
                                    <span class="invalid feedback "role="alert">
                                        <strong style="color: rgb(197, 51, 51)">{{ $errors->first('name') }}.</strong>
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
    </form>
</section>


</div>
</div>