@extends('layouts.master')
@section('content')
    <!-- /.widget-body -->
    <main class="main-wrapper clearfix">
        <!-- Page Title Area -->
        <div class="row page-title clearfix">
            <div class="page-title-left">
                <h6 class="page-title-heading mr-0 mr-r-5">Form Create</h6>
                <p class="page-title-description mr-0 d-none d-md-inline-block">Destination</p>
            </div>
            <!-- /.page-title-left -->
            <div class="page-title-right d-none d-sm-inline-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ route('destinations.index') }}">Destination</a>
                    </li>
                    <li class="breadcrumb-item active">Form Create Destination</li>
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
                            <form method="POST" action="{{ route('destinations.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="l30">Title</label>
                                            <input class="form-control @error('name') is-invalid @enderror" type="text"
                                                id="name" name="name" placeholder="Type title"
                                                value="{{ old('name') }}">
                                            @if ($errors->has('name'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('name') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="l38">locations</label>
                                                    <input class="form-control @error('locations') is-invalid @enderror"
                                                        type="text" id="locations" name="locations"
                                                        placeholder="Type locations" value="{{ old('locations') }}">
                                                    @if ($errors->has('locations'))
                                                        <div class="invalid-feedback">
                                                            {{ $errors->first('locations') }}
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="form-group">
                                                    <label for="l38">location url</label>
                                                    <input class="form-control @error('location_url') is-invalid @enderror"
                                                        type="text" id="location_url" name="location_url"
                                                        placeholder="Type url location" value="{{ old('location_url') }}">
                                                    @if ($errors->has('location_url'))
                                                        <div class="invalid-feedback">
                                                            {{ $errors->first('location_url') }}
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 widget-holder">
                                            <div class="widget-bg">
                                                <h5 class="box-title mr-b-0">Description</h5>
                                                <textarea data-toggle="wysiwyg" id="description" name="description">{{ old('description') }}</textarea>
                                                @if ($errors->has('description'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('description') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="l39">Image</label>
                                            <br>
                                            <input class="form-control @error('image') is-invalid @enderror" id="image"
                                                name="image" type="file">
                                            <br><small class="text-muted">Max file size 5 MB</small>
                                            @if ($errors->has('image'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('image') }}
                                                </div>
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
