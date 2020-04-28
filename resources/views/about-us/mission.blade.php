@extends('layouts.master')

@section('page-title')
    @lang('about-us/mission.mission')
@stop

@section('breadcrumb')
    <span class="small-paragraph">@lang('about-us/mission.mission-2')</span>
@stop

@section('meta')
    <title>@lang('about-us/mission.kdb-mission')</title>
    {{-- Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/about-us/mission.css') }}">
@stop

@section('content')

@include('layouts.breadcrumb')

{{-- Committees starts --}}
<section class="desctop container mission">
    <div class="row">
        
        <main class="col-xl-9 main-hero mb-5">
            <div class="row first-box">
                <div class="col-lg-6">
                    <h3 class="heading-3">
                        @lang('about-us/mission.mission-3')
                    </h3>
                    <p class="small-paragraph">
                        @lang('about-us/mission.our-mission')
                    </p>
                    <p class="small-paragraph">
                        @lang('about-us/mission.we-share')
                    </p>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('img/about-us/mission/mission-1.jpg') }}" class="img-1 img-cover">
                </div>
            </div>
            <div class="row second-box">
                <div class="col-lg-6 parent">
                    <div class="item">
                        <div class="icon pr-3">
                            <img src="{{ asset('img/about-us/mission/trust.svg') }}">
                        </div>
                        <div class="information">
                            <h6 class="hero">@lang('about-us/mission.trust')</h6>
                            <p class="small-paragraph helper">
                                @lang('about-us/mission.build-trust')
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 parent">
                    <div class="item">
                        <div class="icon pr-3">
                            <img src="{{ asset('img/about-us/mission/passion.svg') }}">
                        </div>
                        <div class="information">
                            <h6 class="hero">@lang('about-us/mission.passion')</h6>
                            <p class="small-paragraph helper">
                                @lang('about-us/mission.stay-passionate')
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 parent">
                    <div class="item">
                        <div class="icon pr-3">
                            <img src="{{ asset('img/about-us/mission/focus.svg') }}">
                        </div>
                        <div class="information">
                            <h6 class="hero">@lang('about-us/mission.client-focus')</h6>
                            <p class="small-paragraph helper">
                                @lang('about-us/mission.understand-diverse')
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 parent">
                    <div class="item">
                        <div class="icon pr-3">
                            <img src="{{ asset('img/about-us/mission/performance.svg') }}">
                        </div>
                        <div class="information">
                            <h6 class="hero">@lang('about-us/mission.sustainable-performance')</h6>
                            <p class="small-paragraph helper">
                                @lang('about-us/mission.1')
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row third-box">
                <div class="col-lg-6 order-lg-1 order-2 mt-lg-0 mt-5">
                    <h3 class="heading-3">@lang('about-us/mission.2')</h3>
                    <p class="small-paragraph">
                        @lang('about-us/mission.3')
                    </p>
                    <ul class="right-icon">
                        <li>
                            <p>
                                @lang('about-us/mission.4')
                            </p>
                        </li>
                        <li>
                            <p>
                                @lang('about-us/mission.5')
                            </p>
                        </li>
                        <li>
                            <p>
                                @lang('about-us/mission.6')
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 order-lg-2 order-1">
                    <img src="{{ asset('img/about-us/mission/mission-2.jpg') }}" class="img-1" width="100%">
                </div>
            </div>
            <div class="row third-box"></div>
        </main>

        @include('layouts.sidebars.about-us-sidebar')

    </div>
</section>
{{-- Committees ends --}}

@stop