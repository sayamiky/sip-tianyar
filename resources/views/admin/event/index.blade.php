@extends('layouts.master')
@section('content')
    <main class="main-wrapper clearfix">
        <!-- Page Title Area -->
        <div class="row page-title clearfix">
            <div class="page-title-left">
                <h6 class="page-title-heading mr-0 mr-r-5">Event</h6>
                <p class="page-title-description mr-0 d-none d-md-inline-block">statistics, charts and events</p>
            </div>
            <!-- /.page-title-left -->
            <div class="page-title-right d-none d-sm-inline-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Event</li>
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
                            <a href="{{ route('events.create') }}">
                                <button type="button" class="btn btn-sm btn-primary ripple" data-toggle="modal"
                                    data-target=""><i class="social-icons list-icon">addme</i> Add Event</button>
                            </a>
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
                                            <form method="POST" action="{{ route('events.store') }}">
                                                @csrf
                                                <div class="form-group mr-b-10">
                                                    <label for="emailaddress1">Title</label>
                                                    <input class="form-control @error('name') is-invalid @enderror"
                                                        type="text" id="name" name="name"
                                                        placeholder="Type your title" value="{{ old('name') }}"
                                                        data-validation="{{ $errors->has('name') ? 'has-error' : '' }}">
                                                    @if ($errors->has('name'))
                                                        <div class="invalid-feedback">{{ $errors->first('name') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="form-group mr-b-10">
                                                    <label for="emailaddress1">Description</label>
                                                    <textarea name="description" id="description" cols="30" rows="10"
                                                        class="form-control @error('description') is-invalid @enderror" placeholder="Type your description"
                                                        data-validation="{{ $errors->has('description') ? 'has-error' : '' }}">{{ old('description') }}</textarea>
                                                    @if ($errors->has('description'))
                                                        <div class="invalid-feedback">{{ $errors->first('description') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="form-group mr-b-10">
                                                    <label for="emailaddress1">Locations</label>
                                                    <input class="form-control @error('locations') is-invalid @enderror"
                                                        type="text" id="locations" name="locations"
                                                        placeholder="Type your locations" value="{{ old('locations') }}"
                                                        data-validation="{{ $errors->has('locations') ? 'has-error' : '' }}">
                                                    @if ($errors->has('locations'))
                                                        <div class="invalid-feedback">{{ $errors->first('locations') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="form-group mr-b-10">
                                                    <label for="emailaddress1">Location Url</label>
                                                    <input class="form-control @error('location_url') is-invalid @enderror"
                                                        type="text" id="location_url" name="location_url"
                                                        placeholder="Type your location url"
                                                        value="{{ old('location_url') }}"
                                                        data-validation="{{ $errors->has('location_url') ? 'has-error' : '' }}">
                                                    @if ($errors->has('location_url'))
                                                        <div class="invalid-feedback">{{ $errors->first('location_url') }}
                                                        </div>
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
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                            aria-hidden="true">×</span>
                                    </button> <i class="material-icons list-icon">check_circle</i> <strong>Well
                                        done!</strong> {{ session('success') }}
                                </div>
                            @endif
                            @if (!$errors->isEmpty())
                                <div class="alert alert-icon alert-danger border-danger alert-dismissible fade show"
                                    role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                            aria-hidden="true">×</span>
                                    </button> <i class="material-icons list-icon">not_interested</i>
                                    <strong>Oh
                                        snap!</strong> {{ $errors->first() }}
                                </div>
                            @endif

                            <table class="table table-striped table-responsive" data-toggle="datatables"
                                data-plugin-options='{"searching": true}'>
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Location</th>
                                        <th>Location Url</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($events as $event)
                                        <tr>
                                            <td>{{ $event->name }}</td>
                                            <td>{{ Str::limit($event->description, 100) }}</td>
                                            <td>{{ $event->locations }}</td>
                                            <td>{{ $event->location_url }}</td>
                                            <td><img src="{{ asset('storage/' . $event->image) }}" alt=""></td>
                                            <td style="white-space: nowrap; width: 1%;">
                                                <div class="btn-group btn-group-sm" role="group">
                                                    <form action="{{ route('events.destroy', $event->id) }}"
                                                        method="POST">
                                                        <a href="{{ route('events.show', $event->id) }}">
                                                            <button type="button"
                                                                class="btn btn-sm btn-primary-outline"><i
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
