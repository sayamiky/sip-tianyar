@extends('layouts.master')
@section('content')
    <main class="main-wrapper clearfix">
        <!-- Page Title Area -->
        <div class="row page-title clearfix">
            <div class="page-title-left">
                <h6 class="page-title-heading mr-0 mr-r-5">Category</h6>
                <p class="page-title-description mr-0 d-none d-md-inline-block">product</p>
            </div>
            <!-- /.page-title-left -->
            <div class="page-title-right d-none d-sm-inline-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Category</li>
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
                <div class="col-md-12 widget-holder">
                    <div class="widget-bg">
                        <div class="widget-heading clearfix">
                            <h5></h5>
                            <button type="button" class="btn btn-sm btn-primary ripple" data-toggle="modal"
                                data-target="#login-modal"><i class="social-icons list-icon">addme</i> Add Category</button>
                            <!-- Add category Modal -->
                            <div id="login-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"
                                style="display: none">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-hidden="true">×</button>
                                        <div class="modal-body">
                                            <div class="text-center my-3">
                                                <a href="{{ route('dashboard') }}" class="text-success">
                                                    <img src="{{ asset('assets/img/logo-lights.png') }}" alt="">
                                                </a>
                                            </div>
                                            <form method="POST" action="{{ route('blog-categories.store') }}">
                                                @csrf
                                                <div class="form-group mr-b-10">
                                                    <label for="emailaddress1">Category name</label>
                                                    <input class="form-control @error('category_name') is-invalid @enderror" type="text" id="category_name"
                                                        name="category_name" placeholder="Type your category name"
                                                        value="{{ old('category_name') }}"
                                                        data-validation="{{ $errors->has('category_name') ? 'has-error' : '' }}">
                                                    @if ($errors->has('category_name'))
                                                        <div class="invalid-feedback">{{ $errors->first('category_name') }}</div>
                                                    @endif
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-danger btn-rounded ripple text-left"
                                                        data-dismiss="modal">Cancel</button>
                                                    <button class="btn btn-rounded btn-primary ripple"
                                                        type="submit">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                        </div>
                        <!-- /.widget-heading -->
                        <div class="widget-body clearfix">
                            {{-- Alert --}}
                            @if (session('success'))
                                <div class="alert alert-icon alert-success border-success alert-dismissible fade show"
                                    role="alert">
                                    <button type="button" class="close" data-dismiss="alert"
                                        aria-label="Close"><span aria-hidden="true">×</span>
                                    </button> <i class="material-icons list-icon">check_circle</i> <strong>Well
                                        done!</strong> {{ session('success') }}
                                </div>
                            @endif
                            @if (!$errors->isEmpty())
                                <div class="alert alert-icon alert-danger border-danger alert-dismissible fade show"
                                    role="alert">
                                    <button type="button" class="close" data-dismiss="alert"
                                        aria-label="Close"><span aria-hidden="true">×</span>
                                    </button> <i class="material-icons list-icon">not_interested</i>
                                    <strong>Oh
                                        snap!</strong> {{$errors->first()}}
                                </div>
                            @endif

                            <table class="table table-striped table-responsive" data-toggle="datatables"
                                data-plugin-options='{"searching": true}'>
                                <thead>
                                    <tr>
                                        <th>Category Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($category_data as $data)
                                        <tr>
                                            <td>{{ $data->category_name }}</td>
                                            <td style="white-space: nowrap; width: 1%;">
                                                <div class="btn-group btn-group-sm" role="group">
                                                    <form action="{{ route('blog-categories.destroy', $data->id) }}" method="POST">
                                                        <a href="{{ route('blog-categories.show', $data->id) }}">
                                                            <button type="button" class="btn btn-sm btn-primary-outline"><i
                                                                    class="list-icon fa fa-edit" data-toggle="modal"
                                                                    data-target="#edit-modal"></i></button>
                                                        </a>
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-sm btn-primary-outline"><i
                                                                class="list-icon fa fa-trash"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
    <!-- /.main-wrappper -->
@endsection
