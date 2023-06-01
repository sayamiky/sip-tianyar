{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}

@extends('layouts.master')
@section('content')
    <main class="main-wrapper clearfix">
        <!-- Page Title Area -->
        <div class="row page-title clearfix">
            <div class="page-title-left">
                <h6 class="page-title-heading mr-0 mr-r-5">Dashboard</h6>
                <p class="page-title-description mr-0 d-none d-md-inline-block">statistics, charts and events</p>
            </div>
            <!-- /.page-title-left -->
            <div class="page-title-right d-none d-sm-inline-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Home</li>
                </ol>
            </div>
            <!-- /.page-title-right -->
        </div>
        <!-- /.page-title -->
        <!-- =================================== -->
        <!-- Different data widgets ============ -->
        <!-- =================================== -->
        <div class="widget-list row">
            <div class="widget-holder widget-sm col-md-6 widget-full-height">
                <div class="widget-bg">
                    <div class="widget-body">
                        <div class="counter-w-info media">
                            <div class="media-body">
                                <p class="text-muted mr-b-5">Product</p>
                                <span class="counter-title color-primary"><span class="counter">11</span> </span>
                                <!-- /.counter-title --> 
                                {{-- <span class="counter-difference text-success"><i class="feather feather-arrow-up"></i> 23%</span> --}}
                                <div class="mr-t-20">
                                    <span data-toggle="sparklines" data-height="15" data-width="70" data-line-color="#1976d2" data-line-width="3" data-spot-radius="1" data-fill-color="rgba(0,0,0,0)" data-spot-color="undefined" data-min-spot-color="undefined"
                                    data-max-spot-color="undefined" data-highlight-line-color="undefined">
                                    <!-- 10,5,7,8,3,0,4,12,10,8,12 -->
                                    </span>
                                </div>
                            </div>
                            <!-- /.media-body -->
                            <div class="pull-right align-self-center"><i class="list-icon feather feather-package bg-primary"></i>
                            </div>
                        </div>
                        <!-- /.counter-w-info -->
                    </div>
                    <!-- /.widget-body -->
                </div>
                <!-- /.widget-bg -->
            </div>
            <!-- /.widget-holder -->
            <div class="widget-holder widget-sm col-md-6 widget-full-height">
                <div class="widget-bg">
                    <div class="widget-body">
                        <div class="counter-w-info media">
                            <div class="media-body">
                                <p class="text-muted mr-b-5">User</p><span class="counter-title color-pink"><span class="counter">11</span> </span>
                                <!-- /.counter-title -->
                                <div style="margin-top: 15px"><span data-toggle="sparklines" data-height="15" data-bar-width="3" data-type="bar" data-chart-range-min="0" data-bar-spacing="5" data-bar-color="#ff6b88"><!-- 3,4,5,3,2,3,5,3,2,3,5,4,2 --></span>
                                </div>
                            </div>
                            <!-- /.media-body -->
                            <div class="pull-right align-self-center"><i class="list-icon feather feather-user bg-pink"></i>
                            </div>
                        </div>
                        <!-- /.counter-w-info -->
                    </div>
                    <!-- /.widget-body -->
                </div>
                <!-- /.widget-bg -->
            </div>
            {{-- {{dd(Auth::guard('admin')->check())}} --}}
            {{-- @if (empty(Auth::user()->department_id) && Auth::guard('admin')->check() == false)
                <div class="col-md-12 widget-holder">
                    <div class="widget-bg">
                        <div class="widget-body clearfix">
                            <h5 class="box-title">INFO</h5>
                            <div class="alert alert-icon alert-warning border-warning alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                </button> <i class="material-icons list-icon">warning</i>  
                                <strong>Complete your registration!</strong> <br>You are not registered in any department, please contact admin for further information.
                            </div>
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-bg -->
                </div>
            @endif --}}
            
        </div>
    </main>
@endsection