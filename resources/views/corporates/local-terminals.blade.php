@extends('layouts.master')

@section('page-title')
    @lang('corporates/local-terminals.1')
@stop

@section('breadcrumb')

    <span class="small-paragraph">@lang('corporates/local-terminals.2')</span>

@stop

@section('meta')

    <title>@lang('corporates/local-terminals.3')</title>

    {{-- Fancy-box CSS CDN --}}
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">

    {{-- Internet Banking CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/individuals/remote-banking/internet-banking.css') }}">

    {{-- Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/corporates/local-terminals.css') }}">

@stop

@section('content')

    @include('layouts.breadcrumb')

    {{-- Committees starts --}}
    <section class="desctop container local-terminals internet-banking">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <img src="{{ asset('img/corporates/local-terminals/1.jpg') }}" width="100%">
                <h2 class="heading-2 mt-4">@lang('corporates/local-terminals.4')</h2>
                <p class="small-paragraph mt-4">
                    @lang('corporates/local-terminals.5')
                </p>
                <div class="row mt-5">
                    <div class="col-md-6">
                        <div class="simple-card text-center">
                            <div class="w-100">
                                <img src="{{ asset('img/corporates/local-terminals/visa.svg') }}" height="40px">
                                <h3 class="heading-3 mt-4">@lang('corporates/local-terminals.6')</h3>
                                <p class="small-paragraph mt-2">
                                    @lang('corporates/local-terminals.7')
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="simple-card text-center">
                            <div class="w-100">
                                <img src="{{ asset('img/corporates/local-terminals/mastercard.svg') }}" height="40px">
                                <h3 class="heading-3 mt-4">@lang('corporates/local-terminals.8')</h3>
                                <p class="small-paragraph mt-2">
                                    @lang('corporates/local-terminals.9')
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="simple-card text-center">
                            <div class="w-100">
                                <img src="{{ asset('img/corporates/local-terminals/humocard.svg') }}" height="40px">
                                <h3 class="heading-3 mt-4">@lang('corporates/local-terminals.10')</h3>
                                <p class="small-paragraph mt-2">
                                    @lang('corporates/local-terminals.11')
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="simple-card text-center">
                            <div class="w-100">
                                <img src="{{ asset('img/corporates/local-terminals/uzcard.svg') }}" height="40px">
                                <h3 class="heading-3 mt-4">@lang('corporates/local-terminals.12')</h3>
                                <p class="small-paragraph mt-2">
                                    @lang('corporates/local-terminals.13')
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            @include('layouts.sidebars.corporates-sidebar')

        </div>
    </section>
    {{-- Committees ends --}}

@stop