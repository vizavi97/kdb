@extends('layouts.master')

@section('page-title') 
    @lang('corporates/remote-banking.1')
@stop

@section('breadcrumb')
    <span class="small-paragraph">@lang('corporates/remote-banking.2')</span>
@stop

@section('meta')

    <title>@lang('corporates/remote-banking.3')</title>

    {{-- Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/corporates/remote-banking.css') }}">

@stop

@section('content')

    @include('layouts.breadcrumb')

    {{-- Committees starts --}}
    <section class="desctop container remote-banking">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <h2 class="heading-2 mb-4">@lang('corporates/remote-banking.4')</h2>
                <p class="small-paragraph mb-4">
                    @lang('corporates/remote-banking.5')
                </p>
                <div>
                    <div>
                        <div class="card-custom">
                            <div class="row m-0">
                                <div class="col-md-3 p-0">
                                    <img src="{{ asset('img/corporates/remote-banking/office.net.jpg') }}">
                                </div>
                                <div class="col-md-9 p-4 d-flex flex-column justify-content-between">
                                    <div>
                                        <h3 class="heading-3">@lang('corporates/remote-banking.6')</h3>
                                        <p class="small-paragraph">
                                            @lang('corporates/remote-banking.7')
                                        </p>
                                    </div>
                                    <button class="card-custom-toggler" data-target-id="1">
                                        @lang('corporates/remote-banking.8')
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="opener-info" id="1">
                            <h4 class="heading-4">@lang('corporates/remote-banking.9')</h4>
                            <ul class="right-icon pt-3">
                                <li>
                                    <p>@lang('corporates/remote-banking.10')</p>
                                </li>
                                <li>
                                    <p>@lang('corporates/remote-banking.11')</p>
                                </li>
                                <li>
                                    <p>@lang('corporates/remote-banking.12')</p>
                                </li>
                                <li>
                                    <p>@lang('corporates/remote-banking.13')</p>
                                </li>
                                <li>
                                    <p>@lang('corporates/remote-banking.14')</p>
                                </li>
                            </ul>
                            <p class="small-paragraph pt-2">
                                @lang('corporates/remote-banking.15')
                            </p>
                        </div>
                    </div>
                    <div class="pt-4">
                        <div class="card-custom">
                            <div class="row m-0">
                                <div class="col-md-3 p-0">
                                    <img src="{{ asset('img/corporates/remote-banking/internet-banking.jpg') }}">
                                </div>
                                <div class="col-md-9 p-4 d-flex flex-column justify-content-between">
                                    <div>
                                        <h3 class="heading-3">@lang('corporates/remote-banking.16')</h3>
                                        <p class="small-paragraph">
                                            @lang('corporates/remote-banking.17')
                                        </p>
                                    </div>
                                    <button class="card-custom-toggler" data-target-id="2">
                                        @lang('corporates/remote-banking.18')
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="opener-info" id="2">
                            <h4 class="heading-4">@lang('corporates/remote-banking.19')</h4>
                            <ul class="right-icon pt-3">
                                <li>
                                    <p>@lang('corporates/remote-banking.20')</p>
                                </li>
                                <li>
                                    <p>@lang('corporates/remote-banking.21')</p>
                                </li>
                                <li>
                                    <p>@lang('corporates/remote-banking.22')</p>
                                </li>
                                <li>
                                    <p>@lang('corporates/remote-banking.23')</p>
                                </li>
                                <li>
                                    <p>@lang('corporates/remote-banking.24')</p>
                                </li>
                                <li>
                                    <p>@lang('corporates/remote-banking.25')</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="pt-4">
                        <div class="card-custom">
                            <div class="row m-0">
                                <div class="col-md-3 p-0">
                                    <img src="{{ asset('img/corporates/remote-banking/sms-informing.jpg') }}">
                                </div>
                                <div class="col-md-9 p-4 d-flex flex-column justify-content-between">
                                    <div>
                                        <h3 class="heading-3">@lang('corporates/remote-banking.26')</h3>
                                        <p class="small-paragraph">
                                            @lang('corporates/remote-banking.27')
                                        </p>
                                    </div>
                                    <button class="card-custom-toggler" data-target-id="3">
                                        @lang('corporates/remote-banking.28')
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="opener-info" id="3">
                            <h4 class="heading-4">@lang('corporates/remote-banking.29')</h4>
                            <p class="small-paragraph">@lang('corporates/remote-banking.30')</p>
                            <ul class="right-icon pt-3">
                                <li>
                                    <p>@lang('corporates/remote-banking.31')</p>
                                </li>
                                <li>
                                    <p>@lang('corporates/remote-banking.32')</p>
                                </li>
                                <li>
                                    <p>@lang('corporates/remote-banking.33')</p>
                                </li>
                                <li>
                                    <p>@lang('corporates/remote-banking.34')</p>
                                </li>
                            </ul>
                            <p class="small-paragraph pt-2">
                                @lang('corporates/remote-banking.35')
                            </p>
                        </div>
                    </div>
                </div>
            </main>

            @include('layouts.sidebars.corporates-sidebar')

        </div>
    </section>
    {{-- Committees ends --}}

@stop