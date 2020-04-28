@extends('layouts.master')
 
@section('page-title')
    @lang('interactive-services/calculators.1') 
@stop

@section('breadcrumb')
    <span class="small-paragraph">@lang('interactive-services/calculators.2')</span>
@stop


@section('meta')

    <title>@lang('interactive-services/calculators.3')</title>

    {{-- Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/corporates/credit/credit.css') }}">

@stop

@section('content')

    @include('layouts.breadcrumb')

    {{-- Committees starts --}}
    <section class="desctop container credit my-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero">
                {{-- Calculator start --}}
                <div class="credit-calculator mt-5">
                    <h4>@lang('interactive-services/calculators.4')</h4>
                    <form action="#" method="POST">
                        @csrf
                        <div class="row m-0">
                            <div class="col-lg-8 px-0 pr-lg-4">
                                <div class="slider">
                                    <div class="header">
                                        <h5>@lang('interactive-services/calculators.5')</h5>
                                        <div class="holder">
                                            <input type="text" id="amount-output" value="10 000 000" maxlength="14">
                                            @lang('interactive-services/calculators.6')
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
                                        <h5>@lang('interactive-services/calculators.7')</h5>
                                        <div class="holder">
                                            <input type="text" id="month-output" value="12" maxlength="2">
                                            @lang('interactive-services/calculators.8')
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
                                        <h5>@lang('interactive-services/calculators.9_1')</h5>
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
                                        @lang('interactive-services/calculators.9')
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 p-0 mt-4 mt-lg-0">
                                <div class="result">
                                    <div class="label">@lang('interactive-services/calculators.10')</div>
                                    <div class="output">
                                        <span id="monthly-payment"></span>
                                        @lang('interactive-services/calculators.11')
                                    </div>
                                    <div class="label">@lang('interactive-services/calculators.12')</div>
                                    <div class="output">
                                        <span id="total-payment"></span>
                                        @lang('interactive-services/calculators.13')
                                    </div>
                                    <div class="label">@lang('interactive-services/calculators.14')</div>
                                    <div class="output pb-0">
                                        <span id="total-interest"></span>
                                        @lang('interactive-services/calculators.14_1')
                                    </div>
                                </div>
                                <div class="custom-alert mt-4 d-block d-lg-none">
                                    <p class="text">
                                        @lang('interactive-services/calculators.15')
                                    </p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                {{-- Calculator end --}}
            </main>

            @include('layouts.sidebars.interactive-services-sidebar')

        </div>
    </section>
    {{-- Committees ends --}}

@stop

@section('scripts')

    {{-- jQuery Number JS --}}
    <script src="{{ asset('js/jquery.number.min.js') }}"></script>
    
    {{-- Credit Calculator JS --}}
    <script src="{{ asset('js/credit-calculator.js') }}"></script>

@stop