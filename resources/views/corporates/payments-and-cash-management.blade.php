@extends('layouts.master')

@section('page-title')
    @lang('corporates/payments-and-cash-management.1')
@stop

@section('breadcrumb')
    <span class="small-paragraph">@lang('corporates/payments-and-cash-management.2')</span>
@stop

@section('meta')

    <title>@lang('corporates/payments-and-cash-management.3')</title>

    {{-- Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/corporates/payments-and-cash-management.css') }}">

@stop

@section('content')

    @include('layouts.breadcrumb')

    {{-- Committees starts --}}
    <section class="desctop container payments-and-cash-management">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <div>
                    <h3 class="heading-3">@lang('corporates/payments-and-cash-management.4')</h3>
                    <ul class="right-icon pt-3">
                        <li>
                            <p>@lang('corporates/payments-and-cash-management.5')</p>
                        </li>
                        <li>
                            <p>@lang('corporates/payments-and-cash-management.6')</p>
                        </li>
                        <li>
                            <p>
                                @lang('corporates/payments-and-cash-management.7')
                            </p>
                        </li>
                        <li>
                            <p>
                                @lang('corporates/payments-and-cash-management.8')
                            </p>
                        </li>
                        <li>
                            <p>
                                @lang('corporates/payments-and-cash-management.9')
                            </p>
                        </li>
                        <li>
                            <p>
                                @lang('corporates/payments-and-cash-management.10')
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="mt-5">
                    <img class="w-100 mb-4 align-left" src="{{ asset('img/corporates/payments-and-cash-management/transfers-in-exotic-currencies.jpg') }}" alt="Letters of credit with post-financing option">
                    <h3 class="heading-3">@lang('corporates/payments-and-cash-management.11')</h3>
                    <p>@lang('corporates/payments-and-cash-management.12')</p>
                </div>
            </main>

            @include('layouts.sidebars.corporates-sidebar')

        </div>
    </section>
    {{-- Committees ends --}}

@stop