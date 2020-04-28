@extends('layouts.master')

@section('page-title')
    @lang('corporates/cciapm.1')
@stop

@section('breadcrumb')

    <span class="small-paragraph">@lang('corporates/cciapm.2')</span>

@stop

@section('meta')

    <title>@lang('corporates/cciapm.3')</title>

    {{-- Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/corporates/cciapm.css') }}">

@stop

@section('content')

    @include('layouts.breadcrumb')

    {{-- Committees starts --}}
    <section class="desctop container cciapm">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <div class="row">
                    <div class="col-6">
                        <div class="first-parent">
                            <h2 class="heading-2" style="text-transform: initial;">
                                @lang('corporates/cciapm.4')
                            </h2>
                            <p class="small-paragraph">
                                @lang('corporates/cciapm.5')
                            </p>
                        </div>
                        <div class="second-parent">
                            <h3 class="heading-3" style="text-transform: initial;">
                                @lang('corporates/cciapm.6')
                            </h3>
                            <ul class="right-icon">
                                <li>
                                    <p class="small-paragraph">
                                        @lang('corporates/cciapm.7')
                                    </p>
                                </li>
                                <li>
                                    <p class="small-paragraph">
                                        @lang('corporates/cciapm.8')
                                    </p>
                                </li>
                                <li>
                                    <p class="small-paragraph">
                                        @lang('corporates/cciapm.9')
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6">
                        <img src="{{ asset('img/corporates/cciapm/1.jpg') }}" width="100%">
                    </div>
                </div>
            </main>

            @include('layouts.sidebars.corporates-sidebar')

        </div>
    </section>
    {{-- Committees ends --}}

@stop