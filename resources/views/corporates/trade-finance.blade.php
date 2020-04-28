@extends('layouts.master')

@section('page-title')
    @lang('corporates/trade-finance.1')
@stop

@section('breadcrumb')

    <span class="small-paragraph">@lang('corporates/trade-finance.2')</span>

@stop

@section('meta')

    <title>@lang('corporates/trade-finance.3')</title>

    {{-- Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/corporates/trade-finance.css') }}">

@stop

@section('content')

    @include('layouts.breadcrumb')

    {{-- Committees starts --}}
    <section class="desctop container trade-finance">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <h2 class="heading-2">@lang('corporates/trade-finance.4')</h2>
                <p class="small-paragraph">
                    @lang('corporates/trade-finance.5')
                </p>
                <p class="small-paragraph">
                    @lang('corporates/trade-finance.6')
                </p>

                <h3 class="heading-3">@lang('corporates/trade-finance.7')</h3>
                <div class="row mt-4 pb-48">
                    <div class="col-lg-4">
                        <figure class="m-0">
                            <img class="w-100" src="{{ asset('img/corporates/trade-finance/export-import.svg') }}" alt="Export and import Letters of credit">
                            <figcaption>
                                <img src="{{ asset('img/corporates/trade-finance/icon-1.svg') }}" alt="">
                                <span>@lang('corporates/trade-finance.8')</span>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-4">
                        <figure class="m-0">
                            <img class="w-100" src="{{ asset('img/corporates/trade-finance/bank-guarantees.svg') }}" alt="Bank guarantees">
                            <figcaption>
                                <img src="{{ asset('img/corporates/trade-finance/icon-2.svg') }}" alt="">
                                <span>@lang('corporates/trade-finance.9')</span>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-4">
                        <figure class="m-0">
                            <img class="w-100" src="{{ asset('img/corporates/trade-finance/calculations.svg') }}" alt="Documentary Collection form of calculations.">
                            <figcaption>
                                <img src="{{ asset('img/corporates/trade-finance/icon-3.svg') }}" alt="">
                                <span>@lang('corporates/trade-finance.10')</span>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                {{-- Email Starts --}}
                @if(count($emails) > 0)
                    <div class="email pb-48">
                        <span class="small-paragraph email-card-title">@lang('corporates/trade-finance.11')</span>
                        <div class="row">
                            @foreach($emails as $email)
                                <div class="col-md-4">
                                    <a class="email-card" href="mailto:{{ $email->email }}">
                                        {{ $email->email }}
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
                {{-- Email Ends --}}

                <div class="credit">
                    <img class="w-100 mb-4 align-right" src="{{ asset('img/corporates/trade-finance/credit.jpg') }}" alt="Letters of credit with post-financing option">
                    <h3 class="heading-3">@lang('corporates/trade-finance.12')</h3>
                    <p class="small-paragraph">
                        @lang('corporates/trade-finance.13')
                    </p>
                    <p class="small-paragraph bold">@lang('corporates/trade-finance.14')</p>
                    <ul class="right-icon">
                        <li>
                            <p>@lang('corporates/trade-finance.15')</p>
                        </li>
                        <li>
                            <p>@lang('corporates/trade-finance.16')</p>
                        </li>
                        <li>
                            <p>@lang('corporates/trade-finance.17')</p>
                        </li>
                        <li>
                            <p>@lang('corporates/trade-finance.18')</p>
                        </li>
                        <li>
                            <p>@lang('corporates/trade-finance.19')</p>
                        </li>
                        <li>
                            <p>@lang('corporates/trade-finance.20')</p>
                        </li>
                        <li>
                            <p>@lang('corporates/trade-finance.21')</p>
                        </li>
                    </ul>
                    <div class="custom-alert">
                        <p class="text">
                            @lang('corporates/trade-finance.22')
                        </p>
                    </div>
                </div>
                <div class="letters-credit">
                    <img class="w-100 mb-4 align-right" src="{{ asset('img/corporates/trade-finance/import-letters-of-credit.jpg') }}" alt="import Letters of credit">
                    <h3 class="heading-3">@lang('corporates/trade-finance.23')</h3>
                    <ul class="right-icon mt-4">
                        <li>
                            <p>
                                @lang('corporates/trade-finance.24')
                            </p>
                        </li>
                        <li>
                            <p>
                                @lang('corporates/trade-finance.25')
                            </p>
                        </li>
                        <li>
                            <p>
                                @lang('corporates/trade-finance.26')
                            </p>
                        </li>
                    </ul>
                </div>
            </main>

            @include('layouts.sidebars.corporates-sidebar')

        </div>
    </section>
    {{-- Committees ends --}}

@stop