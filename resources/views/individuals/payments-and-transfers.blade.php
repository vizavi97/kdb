@extends('layouts.master')
@section('page-title')
    @lang('individuals/payments-and-transfers.1')
@stop

@section('breadcrumb')

    <span class="small-paragraph">@lang('individuals/payments-and-transfers.2')</span>

@stop

@section('meta')

    <title>@lang('individuals/payments-and-transfers.3')</title>

    {{-- Fancy-box CSS CDN --}}
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">

    {{-- Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/individuals/payments-and-transfers.css') }}">

@stop

@section('content')

    @include('layouts.breadcrumb')

    {{-- Committees starts --}}
    <section class="desctop container payments-and-transfers">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <!-- Begin Transfer Service -->
                <div class="row transfer-service pb-48">
                    <div class="col-md-6 transfer_service__item pr-md-3">
                        <h2 class="heading-2">@lang('individuals/payments-and-transfers.4')</h2>
                        <p class="small-paragraph">@lang('individuals/payments-and-transfers.5')</p>
                    </div>
                    <div class="col-md-6 service_video p-0">
                        <a data-fancybox  href="{{ asset('video/transfer-' . app()->getLocale() . '.mp4') }}" class="fancybox">
                            <img class="img-cover" src="{{ asset('img/individuals/payments-and-transfers/player-background.jpg') }}" alt="Video player">
                            <i class="far fa-play-circle"></i>
                        </a>
                    </div>
                </div>
                <!-- End Transfer Service -->
                
                
                <!-- Begin Process Description -->
                <section class="process_descr">
                    <div class="row pb-48">
                        <div class="col-12">
                            <h3 class="heading-3 mb-4">@lang('individuals/payments-and-transfers.6')</h3>
                        </div>
                        <div class="col-lg-6 descr_box">
                            <div class="process_item box-shadow">
                                <h4 class="heading-4"><span>1.</span> @lang('individuals/payments-and-transfers.7')</h4>
                                <p class="small-paragraph">@lang('individuals/payments-and-transfers.8')</p>
                            </div>
                        </div>
                        <div class="col-lg-6 descr_box">
                            <div class="process_item box-shadow">
                                <h4 class="heading-4"><span>2.</span> @lang('individuals/payments-and-transfers.9')</h4>
                                <p class="small-paragraph">@lang('individuals/payments-and-transfers.10')</p>
                            </div>
                        </div>
                        <div class="col-lg-6 descr_box">
                            <div class="process_item box-shadow">
                                <h4 class="heading-4"><span>3.</span> @lang('individuals/payments-and-transfers.11')</h4>
                                <p class="small-paragraph">@lang('individuals/payments-and-transfers.12')</p>
                            </div>
                        </div>
                        <div class="col-lg-6 descr_box">
                            <div class="process_item box-shadow">
                                <h4 class="heading-4"><span>4.</span> @lang('individuals/payments-and-transfers.13')</h4>
                                <p class="small-paragraph">@lang('individuals/payments-and-transfers.14')</p>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Process Description -->
                <!-- Begin Currency -->
                <section class="currency pb-48">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="heading-3">@lang('individuals/payments-and-transfers.15')</h3>
                            <p class="small-paragraph mb-24">@lang('individuals/payments-and-transfers.16')</p>
                        </div>

                        {{-- Transfer Currencies Start --}}
                        @foreach($currencies as $currency)
                            <div class="col-md-4 col-sm-6">
                                <div class="currency_item box-shadow">
                                    <strong>{{ $currency->abbr }}</strong>
                                    <span>{{ $currency->getTranslatedAttribute('name', app()->getLocale(), 'fallbackLocale') }}</span>
                                </div>
                            </div>
                        @endforeach
                        {{-- Transfer Currencies End --}}

                        <div class="col-12 contact_info">
                            <p class="small-paragraph mb-24">
                                @lang('individuals/payments-and-transfers.17')
                            </p>
                            <strong class="mb-24">@lang('individuals/payments-and-transfers.18')</strong>
                        </div>

                        <!-- Contact Info -->
                        @foreach ($emails as $email) 
                            <div class="col-lg-4 col-sm-6">
                                <div class="contact box-shadow">
                                    <img src="{{ asset('img/global/user-tie-solid.svg') }}" alt="user">
                                    <span>
                                        <a href="mailto:{{ $email->email }}" class="phone-number">{{ $email->email }}</a>
                                    </span>
                                </div>
                            </div>
                        @endforeach
                        <!--End Contact Info -->
                        
                    </div>
                </section>
                <!-- End Currency -->
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