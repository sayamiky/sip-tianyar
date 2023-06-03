@extends('layouts.master')
@section('content')
<!-- /.widget-body -->
<main class="main-wrapper clearfix">
    <!-- Page Title Area -->
    <div class="row page-title clearfix">
        <div class="page-title-left">
            <h6 class="page-title-heading mr-0 mr-r-5">Form Edit</h6>
            <p class="page-title-description mr-0 d-none d-md-inline-block">Category Data</p>
        </div>
        <!-- /.page-title-left -->
        <div class="page-title-right d-none d-sm-inline-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item"><a href="{{ route('blog-categories.index') }}">Category</a>
                </li>
                <li class="breadcrumb-item active">Form Edit Category Data</li>
            </ol>
        </div>
        <!-- /.page-title-right -->
    </div>
    <!-- /.page-title -->
    <!-- =================================== -->
    <!-- Different data widgets ============ -->
    <!-- =================================== -->
    <div class="widget-list">
        <div class="row">
            <!-- /.widget-holder -->
            <div class="col-md-12 widget-holder">
                <div class="widget-bg">
                    <div class="widget-body clearfix">
                        <h5 class="box-title mr-b-0"></h5>
                        <form method="POST" action="{{ route('blog-categories.update', $category_data->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="l30">category Name</label>
                                        <input class="form-control @error('category_name') is-invalid @enderror" type="text"
                                            id="category_name"
                                            name="category_name"
                                            placeholder="Type your category name"
                                            value="{{ $category_data->category_name }}">
                                        @if ($errors->has('category_name'))
                                        <div class="invalid-feedback">{{ $errors->first('category_name') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions btn-list">
                                <button class="btn btn-primary" type="submit">Submit</button>
                                <button class="btn btn-outline-default" type="cancel">Cancel</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.widget-body -->
                </div>
                <!-- /.widget-bg -->
            </div>
            <!-- /.widget-holder -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.widget-list -->
</main>                   
@endsection
