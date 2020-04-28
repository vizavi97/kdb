@extends('layouts.master')
@section('page-title')
    @lang('individuals/credit.1')
@stop

@section('breadcrumb')

    <span class="small-paragraph">@lang('individuals/credit.2')</span>

@stop

@section('meta')

    <title>@lang('individuals/credit.3')</title>

    {{-- Credit CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/corporates/credit/credit.css') }}">

    {{-- Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/individuals/credit.css') }}">

@stop

@section('content')

    @include('layouts.breadcrumb')

    {{-- Committees starts --}}
    <section class="desctop container credit my-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero">
                <h2 class="heading-2 mb-4">@lang('individuals/credit.4')</h2>
                <h3 class="heading-3 mb-4">@lang('individuals/credit.5')</h3>
                <div class="row">
                    <div class="col-lg-3">
                        <p class="small-paragraph">
                            <strong>@lang('individuals/credit.6')</strong>
                        </p>
                    </div>
                    <div class="col-lg-9">
                        <p class="small-paragraph">@lang('individuals/credit.7')</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <p class="small-paragraph">
                            <strong>@lang('individuals/credit.8')</strong>
                        </p>
                    </div>
                    <div class="col-lg-9">
                        <p class="small-paragraph">@lang('individuals/credit.9')</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <p class="small-paragraph">
                            <strong>@lang('individuals/credit.10')</strong>
                        </p>
                    </div>
                    <div class="col-lg-9">
                        <p class="small-paragraph">@lang('individuals/credit.11')</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <p class="small-paragraph">
                            <strong>@lang('individuals/credit.12')</strong>
                        </p>
                    </div>
                    <div class="col-lg-9">
                        <p class="small-paragraph">@lang('individuals/credit.13')</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <p class="small-paragraph">
                            <strong>@lang('individuals/credit.14')</strong>
                        </p>
                    </div>
                    <div class="col-lg-9">
                        <p class="small-paragraph">@lang('individuals/credit.15')</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <p class="small-paragraph">
                            <strong>@lang('individuals/credit.16')</strong>
                        </p>
                    </div>
                    <div class="col-lg-9">
                        <p class="small-paragraph">@lang('individuals/credit.17')</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <p class="small-paragraph">
                            <strong>@lang('individuals/credit.18')</strong>
                        </p>
                    </div>
                    <div class="col-lg-9">
                        <p class="small-paragraph">@lang('individuals/credit.19')</p>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-lg-3">
                        <p class="small-paragraph">
                            <strong>@lang('individuals/credit.20')</strong>
                        </p>
                    </div>
                    <div class="col-lg-9">
                        <p class="small-paragraph">@lang('individuals/credit.21')</p>
                    </div>
                </div>
                <p class="small-paragraph mb-0">
                    <strong>@lang('individuals/credit.22')</strong>
                </p>

                {{-- Email Starts --}}
                @if(count($emails) > 0)
                    <div class="email">
                        <div class="row">
                            @foreach($emails as $email)
                                <div class="col-md-4 mt-4">
                                    <a class="email-card" href="mailto:{{ $email->email }}">
                                        {{ $email->email }}
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
                {{-- Email Ends --}}


                <div class="row mt-5">

                    @foreach ($branches as $branch)
                        <div class="col-lg-4 col-sm-6 mb-4">
                            <div class="modal-open" modal-id="{{ $branch->id }}">
                                <img src="{{ asset('img/individuals/credit/building.svg') }}">
                                <h4 class="heading-4 text-center">{{ $branch->getTranslatedAttribute('card_title', app()->getLocale(), 'fallbackLocale') }}</h4>    
                            </div>
                        </div>
                    @endforeach

                </div>


                {{-- Calculator start --}}
                <div class="credit-calculator mt-4">
                    <h4>@lang('individuals/credit.23')</h4>
                    <form action="#" method="POST">
                        @csrf
                        <div class="row m-0">
                            <div class="col-lg-8 px-0 pr-lg-4">
                                <div class="slider">
                                    <div class="header">
                                        <h5>@lang('individuals/credit.24')</h5>
                                        <div class="holder">
                                            <input type="text" id="amount-output" value="10 000 000" maxlength="14">
                                            @lang('individuals/credit.25')
                                        </div>
                                    </div>
                                    <div class="body">
                                        <input type="range" min="5000000" max="50000000000" value="10000000" step="100000" class="range" id="amount-range">
                                        <div class="ranged-area" id="amount-ranged-area"></div>
                                    </div>
                                    <div class="footer">
                                        <p>5 000 000</p>
                                        <p>50 000 000 000</p>
                                    </div>
                                </div>
                                <div class="slider mt-3">
                                    <div class="header">
                                        <h5>@lang('individuals/credit.26_1')</h5>
                                        <div class="holder">
                                            <input type="text" id="month-output" value="12" maxlength="2">
                                            @lang('individuals/credit.26')
                                        </div>
                                    </div>
                                    <div class="body">
                                        <input type="range" min="6" max="60" value="12" step="1" class="range" id="month-range">
                                        <div class="ranged-area" id="month-ranged-area"></div>
                                    </div>
                                    <div class="footer">
                                        <p>6</p>
                                        <p>60</p>
                                    </div>
                                </div>
                                <div class="slider mt-3">
                                    <div class="header">
                                        <h5>@lang('individuals/credit.27')</h5>
                                        <div class="holder">
                                            <input type="text" id="interest-output" value="12" maxlength="2">
                                            %
                                        </div>
                                    </div>
                                    <div class="body">
                                        <input type="range" min="4" max="40" value="12" step="1" class="range" id="interest-range">
                                        <div class="ranged-area" id="interest-ranged-area"></div>
                                    </div>
                                    <div class="footer">
                                        <p>4</p>
                                        <p>40</p>
                                    </div>
                                </div>
                                <div class="custom-alert mt-4 d-none d-lg-block">
                                    <p class="text">
                                        @lang('individuals/credit.28')
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 p-0 mt-4 mt-lg-0">
                                <div class="result">
                                    <div class="label">@lang('individuals/credit.29')</div>
                                    <div class="output">
                                        <span id="monthly-payment"></span>
                                        @lang('individuals/credit.30')
                                    </div>
                                    <div class="label">@lang('individuals/credit.31')</div>
                                    <div class="output">
                                        <span id="total-payment"></span>
                                        @lang('individuals/credit.32')
                                    </div>
                                    <div class="label">@lang('individuals/credit.33')</div>
                                    <div class="output pb-0">
                                        <span id="total-interest"></span>
                                        @lang('individuals/credit.34')
                                    </div>
                                </div>
                                <div class="custom-alert mt-4 d-block d-lg-none">
                                    <p class="text">
                                        @lang('individuals/credit.35')
                                    </p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                {{-- Calculator end --}}

                @foreach ($branches as $branch)
                    <div class="global-modal-window" id="{{ $branch->id }}">
                        <div class="global-modal-content">
                            <div class="modal-close">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/>
                                </svg>
                            </div>
                            <div class="modal-content-inner">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="{{ Voyager::image( $branch->image ) }}">
                                    </div>
                                    <div class="col-md-6 px-3 py-4">
                                        <h4 class="heading-4 mb-4">{{ $branch->getTranslatedAttribute('title', app()->getLocale(), 'fallbackLocale') }}</h4>
                                        <div class="row mb-4">
                                            <div class="col-lg-3">
                                                <p class="small-paragraph">
                                                    <strong>@lang('individuals/credit.36')</strong>
                                                </p>
                                            </div>
                                            <div class="col-lg-9">
                                                <p class="small-paragraph">{{ $branch->getTranslatedAttribute('address', app()->getLocale(), 'fallbackLocale') }}</p>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-lg-3">
                                                <p class="small-paragraph">
                                                    <strong>@lang('individuals/credit.37')</strong>
                                                </p>
                                            </div>
                                            <div class="col-lg-9">
                                                <p class="small-paragraph">{{ $branch->getTranslatedAttribute('tel', app()->getLocale(), 'fallbackLocale') }}</p>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-lg-3">
                                                <p class="small-paragraph">
                                                    <strong>@lang('individuals/credit.38')</strong>
                                                </p>
                                            </div>
                                            <div class="col-lg-9">
                                                <p class="small-paragraph">{{ $branch->getTranslatedAttribute('fax', app()->getLocale(), 'fallbackLocale') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </main>

            @include('layouts.sidebars.individuals-sidebar')

        </div>
    </section>
    {{-- Committees ends --}}

@stop

@section('scripts')

    <!-- Modal js -->
    <script src="{{ asset('js/modal.js') }}"></script>

    {{-- jQuery Number JS --}}
    <script src="{{ asset('js/jquery.number.min.js') }}"></script>
    
    {{-- Credit Calculator JS --}}
    <script src="{{ asset('js/credit-calculator.js') }}"></script>

@stop