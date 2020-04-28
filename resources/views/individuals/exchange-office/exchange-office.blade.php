@extends('layouts.master')
@section('page-title')
    @lang('individuals/exchange-office/exchange-office.1')
@stop

@section('breadcrumb')

    <span class="small-paragraph">@lang('individuals/exchange-office/exchange-office.2')</span>

@stop

@section('meta')

    <title>@lang('individuals/exchange-office/exchange-office.3')</title>

    {{-- Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/individuals/exchange-office/exchange-office.css') }}">

@stop

@section('content')

    @include('layouts.breadcrumb')

    {{-- Committees starts --}}
    <section class="desctop container exchange-office mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <p class="small-paragraph mb-4">
                    @lang('individuals/exchange-office/exchange-office.4')
                </p>
                <div>
                    @foreach ($offices as $office)
                        <div>
                            <div class="card-custom mt-4">
                                <div class="row m-0">
                                    <div class="col-md-3 p-0">
                                        <img src="{{ Voyager::image( $office->image ) }}">
                                    </div>
                                    <div class="col-md-9 p-4 d-flex flex-column justify-content-between">
                                        <div>
                                            <div class="d-flex align-items-start justify-content-between">
                                                <h3 class="heading-3 mb-4">{{ $office->getTranslatedAttribute('title', app()->getLocale(), 'fallbackLocale') }}</h3>
                                                <button class="card-custom-toggler" data-target-id="{{ $office->id }}">
                                                    @lang('individuals/exchange-office/exchange-office.5')
                                                </button>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <p class="small-paragraph fs-14">
                                                        <strong>@lang('individuals/exchange-office/exchange-office.6')</strong>
                                                    </p>
                                                </div>
                                                <div class="col-md-9">
                                                    <p class="small-paragraph fs-14">
                                                        {{ $office->getTranslatedAttribute('address', app()->getLocale(), 'fallbackLocale') }}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <p class="small-paragraph fs-14">
                                                        <strong>@lang('individuals/exchange-office/exchange-office.7')</strong>
                                                    </p>
                                                </div>
                                                <div class="col-md-9">
                                                    <p class="small-paragraph fs-14">
                                                        {{ $office->phone }}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <p class="small-paragraph fs-14">
                                                        <strong>@lang('individuals/exchange-office/exchange-office.8')</strong>
                                                    </p>
                                                </div>
                                                <div class="col-md-9">
                                                    <p class="small-paragraph fs-14">
                                                        {{ $office->fax }}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <p class="small-paragraph fs-14">
                                                        <strong>@lang('individuals/exchange-office/exchange-office.9')</strong>
                                                    </p>
                                                </div>
                                                <div class="col-md-9">
                                                    <p class="small-paragraph fs-14">
                                                        {{ $office->getTranslatedAttribute('working_days', app()->getLocale(), 'fallbackLocale') }}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <p class="small-paragraph fs-14 mb-lg-0">
                                                        <strong>@lang('individuals/exchange-office/exchange-office.10')</strong>
                                                    </p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p class="small-paragraph fs-14 mb-lg-0">
                                                        {{ $office->working_hours }}
                                                    </p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p class="small-paragraph fs-14 mb-lg-0">
                                                        <strong>@lang('individuals/exchange-office/exchange-office.11')</strong>
                                                    </p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p class="small-paragraph fs-14 mb-lg-0">
                                                        {{ $office->lunch_time }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="opener-info mt-3" id="{{ $office->id }}">
                                <iframe src="{{ $office->map }}" width="100%" height="282" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                            </div>
                        </div>
                    @endforeach

                </div>
            </main>

            @include('layouts.sidebars.individuals-sidebar')

        </div>
    </section>
    {{-- Committees ends --}}

@stop