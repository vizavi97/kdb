@extends('layouts.master')

@section('page-title')
    @lang('about-us/history.history')
@stop

@section('breadcrumb')
    <span class="small-paragraph">@lang('about-us/history.history-2')</span>
@stop

@section('meta')

    <title>@lang('about-us/history.kdb-history')</title>

    {{-- Fancy-box CSS CDN --}}
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">

    {{-- Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/about-us/history.css') }}">

@stop

@section('content')

    @include('layouts.breadcrumb')

    <!-- history starts -->
    <section class="desctop container history">
        <div class="row">
            <main class="col-xl-9 main-hero mb-5">
                <div class="history-content">
                    <div class="history-video align-right">
                        <a data-fancybox  href="{{ asset('video/history-' . app()->getLocale() . '.mp4') }}" class="fancybox">
                            <img class="img-cover" src="{{ asset('img/about-us/history/video-player.jpg') }}" alt="video player">
                        </a>
                    </div>
                    <p class="small-paragraph">
                        @lang('about-us/history.jsc-kdb')
                    </p>
                    <p class="small-paragraph">
                        @lang('about-us/history.kdb-enhances')
                    </p>
                    <p class="small-paragraph">
                        @lang('about-us/history.korea-development') 
                    </p>
                    <p class="small-paragraph mb-md-0">
                        @lang('about-us/history.jsc-kdb-2') 
                    </p>
                </div>

                <div class="history-evolution-box">
                    <div class="row no-gutters history-evolution">
                        <div class="history-evolution-inner">
                            <p class="heading-3">
                                @lang('about-us/history.jsc-kdb-3') 
                            </p>
                            <div class="history-evolution-date"><span class="heading-3">@lang('about-us/history.2018')</span></div>
                        </div>
                        <div class="clear clear-top"></div>
                    </div>
                     <div class="row no-gutters history-evolution">
                        <div class="history-evolution-inner">
                            <p class="heading-3">
                                @lang('about-us/history.jsc-kdb-4')
                            </p>
                            <div class="history-evolution-date"><span class="heading-3">@lang('about-us/history.2016')</span></div>
                        </div>
                    </div>
                    <div class="row no-gutters history-evolution">
                        <div class="history-evolution-inner">
                            <p class="heading-3">
                                @lang('about-us/history.kdb-bank')
                            </p>
                            <div class="history-evolution-date"><span class="heading-3">@lang('about-us/history.2014')</span></div>
                        </div>
                    </div>
                    <div class="row no-gutters history-evolution">
                        <div class="history-evolution-inner">
                            <p class="heading-3">
                                @lang('about-us/history.two-subsidiaries')  
                            </p>
                            <div class="history-evolution-date"><span class="heading-3">@lang('about-us/history.2013')</span></div>
                        </div>
                    </div>
                     <div class="row no-gutters history-evolution">
                        <div class="history-evolution-inner">
                            <p class="heading-3">
                                @lang('about-us/history.rsb-nb')
                            </p>
                            <div class="history-evolution-date"><span class="heading-3">@lang('about-us/history.2011')</span></div>
                        </div>
                    </div>
                     <div class="row no-gutters history-evolution">
                        <div class="history-evolution-inner">
                            <p class="heading-3">
                                @lang('about-us/history.kdb-decided')
                            </p>
                            <div class="history-evolution-date"><span class="heading-3">@lang('about-us/history.2010')</span></div>
                        </div>
                    </div>
                    <div class="row no-gutters history-evolution">
                        <div class="history-evolution-inner">
                            <p class="heading-3">
                                @lang('about-us/history.renamed-to')
                            </p>
                            <div class="history-evolution-date"><span class="heading-3">@lang('about-us/history.2006')</span></div>
                        </div>
                    </div>
                    <div class="row no-gutters history-evolution botton">
                        <div class="history-evolution-inner">
                            <p class="heading-3">
                                @lang('about-us/history.joint-uzbek')
                            </p>
                            <div class="history-evolution-date"><span class="heading-3">@lang('about-us/history.1997')</span></div>
                        </div>
                        <div class="clear clear-bottom"></div>
                    </div>
                </div>
            </main>

            @include('layouts.sidebars.about-us-sidebar')

        </div>
    </section>
    <!-- history ends -->

@stop

@section('scripts')

    <!-- Fancybox -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

@stop