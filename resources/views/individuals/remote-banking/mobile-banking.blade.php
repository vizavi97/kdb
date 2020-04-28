@extends('layouts.master')
@section('page-title')
    @lang('individuals/remote-banking/mobile-banking.1')
@stop

@section('breadcrumb')

    <span class="small-paragraph">@lang('individuals/remote-banking/mobile-banking.2')</span>

@stop

@section('meta')

    <title>@lang('individuals/remote-banking/mobile-banking.3')</title>

    {{-- Fancy-box CSS CDN --}}
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">

    {{-- Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/individuals/remote-banking/mobile-banking.css') }}">

@stop

@section('content')

    @include('layouts.breadcrumb')

    {{-- Committees starts --}}
    <section class="desctop container mobile-banking mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="heading-2 mb-4">@lang('individuals/remote-banking/mobile-banking.4')</h2>
                        <h3 class="heading-3 mb-3">@lang('individuals/remote-banking/mobile-banking.5')</h3>
                        <p class="small-paragraph">
                            @lang('individuals/remote-banking/mobile-banking.6')
                        </p>
                        <ul class="right-icon">
                            <li>
                                <p>@lang('individuals/remote-banking/mobile-banking.7')</p>
                            </li>
                            <li>
                                <p>@lang('individuals/remote-banking/mobile-banking.8')</p>
                            </li>
                            <li>
                                <p>@lang('individuals/remote-banking/mobile-banking.9')</p>
                            </li>
                            <li>
                                <p>@lang('individuals/remote-banking/mobile-banking.10')</p>
                            </li>
                            <li>
                                <p>@lang('individuals/remote-banking/mobile-banking.11')</p>
                            </li>
                            <li>
                                <p>@lang('individuals/remote-banking/mobile-banking.12')</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 d-none d-md-block">
                        <img src="{{ asset('img/individuals/remote-banking/mobile-banking/phone.jpg') }}">
                    </div>
                </div>
                <div class="row mt-5 mx-0">
                    <div class="col-md-6 p-0">
                        <div class="mobile-banking-video align-right">
                            <a data-fancybox  href="{{ asset('video/multipay-' . app()->getLocale() . '.mp4') }}" class="fancybox">
                                <img class="img-cover" src="{{ asset('img/individuals/remote-banking/mobile-banking/video-player.jpg') }}" alt="Video player">
                                <i class="far fa-play-circle"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 multipay-desc">
                        <div>
                            <p class="small-paragraph text-center">
                                @lang('individuals/remote-banking/mobile-banking.13')
                            </p>
                            <div class="d-flex justify-content-center">
                                <a href="https://play.google.com/store/apps/details?id=uz.xsoft.multipay&hl=ru" target="_blank">
                                    <img src="{{ asset('img/footer/google-play.svg') }}" class="app-link mr-3">
                                </a>
                                <a href="https://apps.apple.com/us/app/multipay-kdb/id1437373777" target="_blank">
                                    <img src="{{ asset('img/footer/app-store.svg') }}" class="app-link">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            @include('layouts.sidebars.individuals-sidebar')

        </div>
    </section>
    {{-- Committees ends --}}

@stop

@section('scripts')

    <!-- Fancybox -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

@stop