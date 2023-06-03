@extends('layouts.master')
@section('content')
    <!-- /.widget-body -->
    <main class="main-wrapper clearfix">
        <!-- Page Title Area -->
        <div class="row page-title clearfix">
            <div class="page-title-left">
                <h6 class="page-title-heading mr-0 mr-r-5">Form Create</h6>
                <p class="page-title-description mr-0 d-none d-md-inline-block">Product</p>
            </div>
            <!-- /.page-title-left -->
            <div class="page-title-right d-none d-sm-inline-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ route('blogs.index') }}">Blog</a>
                    </li>
                    <li class="breadcrumb-item active">Form Create Blog</li>
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
                            <form method="POST" action="{{ route('blogs.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="l30">Product Name</label>
                                            <input class="form-control @error('product_name') is-invalid @enderror"
                                                type="text" id="product_name" name="product_name"
                                                placeholder="Type product name" value="{{ old('product_name') }}">
                                            @if ($errors->has('product_name'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('product_name') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="l38">Category</label>
                                            <div class="col-md-12">
                                                <select name="category_id" id="category_id" class="form-control">
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->category_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="l38">Weight</label>
                                                    <input class="form-control @error('weight') is-invalid @enderror"
                                                        type="text" id="weight" name="weight"
                                                        placeholder="Type product weight" value="{{ old('weight') }}">
                                                    @if ($errors->has('weight'))
                                                        <div class="invalid-feedback">
                                                            {{ $errors->first('weight') }}
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="l38">Price</label>
                                                    <input class="form-control @error('price') is-invalid @enderror"
                                                        type="text" id="price" name="price"
                                                        placeholder="Type product price" value="{{ old('price') }}">
                                                    @if ($errors->has('price'))
                                                        <div class="invalid-feedback">
                                                            {{ $errors->first('price') }}
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="l38">Unit</label>
                                                    <input class="form-control @error('pcs') is-invalid @enderror"
                                                        type="text" id="pcs" name="pcs"
                                                        placeholder="Type product pcs" value="{{ old('pcs') }}">
                                                    @if ($errors->has('pcs'))
                                                        <div class="invalid-feedback">
                                                            {{ $errors->first('pcs') }}
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="l38">Description</label>
                                            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                                                rows="3" value="{{ old('description') }}" placeholder="Type product description"></textarea>
                                            @if ($errors->has('description'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('description') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="l39">Product Image</label>
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
