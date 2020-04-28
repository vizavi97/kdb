@extends('layouts.master')

@section('page-title')
    @lang('corporates/correspondent-banks.1')
@stop

@section('breadcrumb')
    <span class="small-paragraph">@lang('corporates/correspondent-banks.2')</span>
@stop

@section('meta')

    <title>@lang('corporates/correspondent-banks.3')</title>

    {{-- Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/corporates/correspondent-banks.css') }}">

@stop

@section('content')

    @include('layouts.breadcrumb')

    {{-- Committees starts --}}
    <section class="desctop container correspondent-banks">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <div class="first-parent">
                    <div class="row box">
                        <div class="col-lg-1 col-md-3 col-12 text-md-center text-left mb-md-0 mb-3">
                            <img src="{{ asset('img/corporates/correspondent-banks/banks.svg') }}" height="40px">
                        </div>
                        <div class="col-lg-11 col-md-9 col-12">
                            <p class="paragraph">
                                @lang('corporates/correspondent-banks.4')
                            </p>
                        </div>
                    </div>
                </div>
                <h2 class="heading-2">
                    @lang('corporates/correspondent-banks.5')
                </h2>
                @if(count($banks) > 0)
                <div class="second-parent">
                    <div class="row">
                        @foreach($banks as $bank)
                        <div class="col-lg-4 col-md-6 item-parent">
                            <div class="item">
                                <img src="{{ Voyager::image( $bank->logo ) }}">
                                <h3 class="heading-3">{{ $bank->name }}</h3>
                                <table>
                                    <tr>
                                        <td>
                                            @lang('corporates/correspondent-banks.6')
                                        </td>
                                        <td>
                                            {{ $bank->country }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            @lang('corporates/correspondent-banks.7')
                                        </td>
                                        <td>
                                            {{ $bank->currency }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            @lang('corporates/correspondent-banks.8')
                                        </td>
                                        <td>
                                            {{ $bank->bic }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            @lang('corporates/correspondent-banks.9')
                                        </td>
                                        <td>
                                            {{ $bank->account_number }}
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
                <div class="third-parent">
                    <p class="paragraph">
                        @lang('corporates/correspondent-banks.10')
                    </p>
                </div>
            </main>
            @include('layouts.sidebars.corporates-sidebar')
        </div>
    </section>
    {{-- Committees ends --}}

@stop