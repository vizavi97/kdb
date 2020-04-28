@extends('layouts.master')

@section('page-title')
    @lang('about-us/general-information.general-information')
@stop

@section('breadcrumb')
    <span class="small-paragraph">@lang('about-us/general-information.general-information-2')</span>
@stop

@section('meta')

    <title>@lang('about-us/general-information.kdb-general')</title>

    {{-- Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/about-us/general-information.css') }}">

@stop

@section('content')

    @include('layouts.breadcrumb')

    {{-- Committees starts --}}
    <section class="desctop container general-information">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <div class="row item no-gutters">
                    <div class="col-5">
                        <p class="main">
                            @lang('about-us/general-information.full-name')
                        </p>
                    </div>
                    <div class="col-7">
                        <p class="small-paragraph">
                            @lang('about-us/general-information.joint-stock')
                        </p>
                    </div>
                </div>
                <div class="row item no-gutters">
                    <div class="col-5">
                        <p class="main">
                            @lang('about-us/general-information.short-name')
                        </p>
                    </div>
                    <div class="col-7">
                        <p class="small-paragraph">
                            @lang('about-us/general-information.jsc-kdb')
                        </p>
                    </div>
                </div>
                <div class="row item no-gutters">
                    <div class="col-5">
                        <p class="main">
                            @lang('about-us/general-information.year-of')
                        </p>
                    </div>
                    <div class="col-7">
                        <p class="small-paragraph">
                            @lang('about-us/general-information.1997')
                        </p>
                    </div>
                </div>
                <div class="row item no-gutters">
                    <div class="col-5">
                        <p class="main">
                            @lang('about-us/general-information.branches')
                        </p>
                    </div>
                    <div class="col-7">
                        <p class="small-paragraph">
                            @lang('about-us/general-information.head-office')
                        </p>
                        <p class="small-paragraph">
                            @lang('about-us/general-information.yunusabad-branch')
                        </p>
                        <p class="small-paragraph">
                            @lang('about-us/general-information.yakkasaray-branch')
                        </p>
                        <p class="small-paragraph">
                            @lang('about-us/general-information.cciapm')
                        </p>
                    </div>
                </div>
                <div class="row item no-gutters">
                    <div class="col-5">
                        <p class="main">
                            @lang('about-us/general-information.shareholders')
                        </p>
                    </div>
                    <div class="col-7">
                        <p class="small-paragraph">
                            @lang('about-us/general-information.korea-development')
                        </p>
                        <p class="small-paragraph">
                            @lang('about-us/general-information.national-bank')
                        </p>
                        <p class="small-paragraph">
                            @lang('about-us/general-information.turon-bank')
                        </p>
                    </div>
                </div>
                <div class="row item no-gutters">
                    <div class="col-5">
                        <p class="main">
                            @lang('about-us/general-information.credit-ratings')
                        </p>
                    </div>
                    <div class="col-7">
                        <p class="small-paragraph">
                            @lang('about-us/general-information.standard-and')
                        </p>
                        <p class="small-paragraph">
                            @lang('about-us/general-information.moody')
                        </p>
                        <p class="small-paragraph">
                            @lang('about-us/general-information.fitch')
                        </p>
                    </div>
                </div>
                <div class="row item no-gutters">
                    <div class="col-5">
                        <p class="main">
                            @lang('about-us/general-information.credit-rating')
                        </p>
                    </div>
                    <div class="col-7">
                        <p class="small-paragraph">
                            @lang('about-us/general-information.standard-poor')
                        </p>
                        <br>
                        <p class="small-paragraph">
                            @lang('about-us/general-information.long-term')
                        </p>
                        <p class="small-paragraph">
                            @lang('about-us/general-information.short-term')
                        </p>
                        <p class="small-paragraph">
                            @lang('about-us/general-information.outlook-stable')
                        </p>
                    </div>
                </div>
                <div class="row item no-gutters">
                    <div class="col-5">
                        <p class="main">
                            @lang('about-us/general-information.local-rating')
                        </p>
                    </div>
                    <div class="col-7">
                        <p class="small-paragraph">
                            @lang('about-us/general-information.credit-rating-2')
                        </p>
                        <p class="small-paragraph">
                            @lang('about-us/general-information.outlook')
                        </p>
                    </div>
                </div>
                <div class="row item no-gutters">
                    <div class="col-5">
                        <p class="main">
                            @lang('about-us/general-information.corporate-website')
                        </p>
                    </div>
                    <div class="col-7">
                        <a href="@lang('about-us/general-information.http')">
                            @lang('about-us/general-information.http')
                        </a>
                    </div>
                </div>
                <div class="row item no-gutters">
                    <div class="col-5">
                        <p class="main">
                            @lang('about-us/general-information.e-mail')
                        </p>
                    </div>
                    <div class="col-7">
                        <a href="mailto:@lang('about-us/general-information.info')">
                            @lang('about-us/general-information.info')
                        </a>
                    </div>
                </div>
                <div class="row item no-gutters">
                    <div class="col-5">
                        <p class="main">
                            @lang('about-us/general-information.telephone')
                        </p>
                        <p class="main">
                            @lang('about-us/general-information.fax')
                        </p>
                    </div>
                    <div class="col-7">
                        <a href="tel:@lang('about-us/general-information.+998')">
                            @lang('about-us/general-information.+9987')
                        </a>
                        <a href="tel:@lang('about-us/general-information.+99878')">
                            @lang('about-us/general-information.+998781')
                        </a>
                    </div>
                </div>
                <div class="row item no-gutters">
                    <div class="col-5">
                        <p class="main">
                            @lang('about-us/general-information.license')
                        </p>
                    </div>
                    <div class="col-7">
                        <p class="small-paragraph license">
                            @lang('about-us/general-information.cbu-license')
                        </p>
                        <img src="{{ asset('img/about-us/general-information/license2017.jpg') }}">
                    </div>
                </div>
            </main>

            @include('layouts.sidebars.about-us-sidebar')

        </div>
    </section>
    {{-- Committees ends --}}

@stop
