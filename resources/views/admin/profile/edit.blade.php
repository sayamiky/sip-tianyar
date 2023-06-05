@extends('layouts.master')
@section('content')
<!-- /.widget-body -->
<main class="main-wrapper clearfix">
    <!-- Page Title Area -->
    <div class="row page-title clearfix">
        <div class="page-title-left">
            <h6 class="page-title-heading mr-0 mr-r-5">Form Edit</h6>
            <p class="page-title-description mr-0 d-none d-md-inline-block">Profile</p>
        </div>
        <!-- /.page-title-left -->
        <div class="page-title-right d-none d-sm-inline-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Form Edit Profile</li>
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
                        <form method="POST" action="{{ route('profiles.update', $village->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="l30">Name</label>
                                        <input class="form-control @error('name') is-invalid @enderror" type="text"
                                            id="name" name="name" placeholder="Type name"
                                            value="{{ $village->description['name'] }}">
                                        @if ($errors->has('name'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('name') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label for="l38">address</label>
                                                <input class="form-control @error('address') is-invalid @enderror"
                                                    type="text" id="address" name="address"
                                                    placeholder="Type address" value="{{ $village->description['address'] }}">
                                                @if ($errors->has('address'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('address') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="l38">postal code</label>
                                                <input class="form-control @error('postalcode') is-invalid @enderror"
                                                    type="text" id="postalcode" name="postalcode"
                                                    placeholder="Type postalcode" value="{{ $village->description['postalcode'] }}">
                                                @if ($errors->has('postalcode'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('postalcode') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="l38">province</label>
                                                <input class="form-control @error('province') is-invalid @enderror"
                                                    type="text" id="province" name="province"
                                                    placeholder="Type province" value="{{ $village->description['province'] }}">
                                                @if ($errors->has('province'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('province') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="l38">city</label>
                                                <input class="form-control @error('city') is-invalid @enderror"
                                                    type="text" id="city" name="city" placeholder="Type city"
                                                    value="{{ $village->description['city'] }}">
                                                @if ($errors->has('city'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('city') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="l38">subdistrict</label>
                                                <input class="form-control @error('subdistrict') is-invalid @enderror"
                                                    type="text" id="subdistrict" name="subdistrict"
                                                    placeholder="Type subdistrict" value="{{ $village->description['subdistrict'] }}">
                                                @if ($errors->has('subdistrict'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('subdistrict') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="l38">phone</label>
                                                <input class="form-control @error('phone') is-invalid @enderror"
                                                    type="text" id="phone" name="phone"
                                                    placeholder="Type phone" value="{{ $village->description['phone'] }}">
                                                @if ($errors->has('phone'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('phone') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="l38">email</label>
                                                <input class="form-control @error('email') is-invalid @enderror"
                                                    type="text" id="email" name="email"
                                                    placeholder="Type email" value="{{ $village->description['email'] }}">
                                                @if ($errors->has('email'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('email') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="l38">fax</label>
                                                <input class="form-control @error('fax') is-invalid @enderror"
                                                    type="text" id="fax" name="fax"
                                                    placeholder="Type fax" value="{{ $village->description['fax'] }}">
                                                @if ($errors->has('fax'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('fax') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        {{-- <div class="col-lg-4">
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
                                        </div> --}}
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="l38">location url</label>
                                                <input
                                                    class="form-control @error('location_url') is-invalid @enderror"
                                                    type="text" id="location_url" name="location_url"
                                                    placeholder="Type url location"
                                                    value="{{ $village->description['location_url'] }}">
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
                                            <textarea data-toggle="wysiwyg" id="description" name="description">{{ $village->description['description'] }}</textarea>
                                            @if ($errors->has('description'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('description') }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    {{-- <div class="form-group">
                                        <label for="l39">Image</label>
                                        <br>
                                        <input class="form-control @error('image') is-invalid @enderror"
                                            id="image" name="image" type="file">
                                        <br><small class="text-muted">Max file size 5 MB</small>
                                        @if ($errors->has('image'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('image') }}
                                            </div>
                                        @endif
                                    </div> --}}
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="l38">instagram</label>
                                                <input class="form-control @error('ig') is-invalid @enderror"
                                                    type="text" id="ig" name="ig"
                                                    placeholder="Type instagram link" value="{{ $village->description['ig'] }}">
                                                @if ($errors->has('ig'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('ig') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="l38">facebook</label>
                                                <input class="form-control @error('fb') is-invalid @enderror"
                                                    type="text" id="fb" name="fb"
                                                    placeholder="Type facebook link" value="{{ $village->description['fb'] }}">
                                                @if ($errors->has('fb'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('fb') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="l38">youtube</label>
                                                <input class="form-control @error('yt') is-invalid @enderror"
                                                    type="text" id="youtube link" name="yt"
                                                    placeholder="Type yt" value="{{ $village->description['yt'] }}">
                                                @if ($errors->has('yt'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('yt') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
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
