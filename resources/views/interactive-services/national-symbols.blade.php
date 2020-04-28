@extends('layouts.master')

@section('page-title')
    @lang('interactive-services/national-symbols.1')
@stop

@section('breadcrumb')
    <span class="small-paragraph">@lang('interactive-services/national-symbols.2')</span>
@stop

@section('meta')

    <title>@lang('interactive-services/national-symbols.3')</title>

    {{-- Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/interactive-services/national-symbols.css') }}">

@stop

@section('content')

    @include('layouts.breadcrumb')

    {{-- Committees starts --}}
    <section class="desctop container national-symbols mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <div class="first-parent">
                    <div class="row box no-gutters">
                        <div class="col-lg-6">
                            <div class="title-parent">
                                <h2 class="heading-2">
                                    @lang('interactive-services/national-symbols.4')
                                </h2>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <img src="{{ asset('img/interactive-services/national-symbols/1.jpg') }}">
                        </div>
                    </div>
                    <p class="paragraph">
                        @lang('interactive-services/national-symbols.5')
                    </p>
                    <div class="helper-parent d-flex">
                        <i class="fas fa-flag flag-icon"></i>
                        <p class="paragraph">
                            @lang('interactive-services/national-symbols.6')
                        </p>
                    </div>
                    <ul class="right-icon">
                        <li>
                            <p class="paragraph">
                                @lang('interactive-services/national-symbols.7')
                            </p>
                        </li>
                        <li>
                            <p class="paragraph">
                                @lang('interactive-services/national-symbols.8')
                            </p>
                        </li>
                        <li>
                            <p class="paragraph">
                                @lang('interactive-services/national-symbols.9')
                            </p>
                        </li>
                        <li>
                            <p class="paragraph">
                                @lang('interactive-services/national-symbols.10')
                            </p>
                        </li>
                    </ul>
                    <div class="row box no-gutters">
                        <div class="col-lg-6">
                            <div class="title-parent">
                                <h2 class="heading-2">
                                    @lang('interactive-services/national-symbols.11')
                                </h2>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <img src="{{ asset('img/interactive-services/national-symbols/2.jpg') }}">
                        </div>
                    </div>
                    <p class="paragraph">
                        @lang('interactive-services/national-symbols.12')
                    </p>
                    <ul class="right-icon">
                        <li>
                            <p class="paragraph">
                                @lang('interactive-services/national-symbols.13')
                            </p>
                        </li>
                        <li>
                            <p class="main-pargarph">
                                @lang('interactive-services/national-symbols.14')
                            </p>
                        </li>
                        <li>
                            <p class="main-pargarph">
                                @lang('interactive-services/national-symbols.15')
                            </p>
                        </li>
                        <li>
                            <p class="paragraph">
                                @lang('interactive-services/national-symbols.16')
                            </p>
                        </li>
                    </ul>
                    <div class="row box no-gutters">
                        <div class="col-lg-6">
                            <div class="title-parent">
                                <h2 class="heading-2">
                                    @lang('interactive-services/national-symbols.17')
                                </h2>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <img src="{{ asset('img/interactive-services/national-symbols/3.jpg') }}">
                        </div>
                    </div>
                    <p class="paragraph">
                        @lang('interactive-services/national-symbols.18')
                    </p>
                    <div class="row">
                        <div class="col-sm-6">
                            <b>
                                @lang('interactive-services/national-symbols.19')
                            </b>
                            <b>
                                @lang('interactive-services/national-symbols.20')
                            </b>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mx-auto text-center mt-5">
                            <p class="anthem-paragraph">
                                @lang('interactive-services/national-symbols.21')
                            </p>
                            <p class="anthem-paragraph">
                                @lang('interactive-services/national-symbols.22')
                            </p>
                            <p class="anthem-paragraph">
                                @lang('interactive-services/national-symbols.23')
                            </p>
                            <p class="anthem-paragraph">
                                @lang('interactive-services/national-symbols.24')
                            </p>
                            <p class="anthem-paragraph">
                                @lang('interactive-services/national-symbols.25')
                            </p>
                            <p class="anthem-paragraph">
                                @lang('interactive-services/national-symbols.26')
                            </p>
                            <p class="anthem-paragraph">
                                @lang('interactive-services/national-symbols.27')
                            </p>
                            <p class="anthem-paragraph">
                                @lang('interactive-services/national-symbols.28')
                            </p>
                            <p class="anthem-paragraph">
                                @lang('interactive-services/national-symbols.29')
                            </p>
                            <p class="anthem-paragraph">
                                @lang('interactive-services/national-symbols.30')
                            </p>
                            <p class="anthem-paragraph">
                                @lang('interactive-services/national-symbols.31')
                            </p>
                            <p class="anthem-paragraph">
                                @lang('interactive-services/national-symbols.32')
                            </p>
                            <p class="anthem-paragraph">
                                @lang('interactive-services/national-symbols.33')
                            </p>
                            <p class="anthem-paragraph">
                                @lang('interactive-services/national-symbols.34')
                            </p>
                            <p class="anthem-paragraph">
                                @lang('interactive-services/national-symbols.35')
                            </p>
                            <p class="anthem-paragraph">
                                @lang('interactive-services/national-symbols.36')
                            </p>
                        </div>
                    </div>
                </div>
            </main>

            @include('layouts.sidebars.interactive-services-sidebar')

        </div>
    </section>
    {{-- Committees ends --}}

@stop