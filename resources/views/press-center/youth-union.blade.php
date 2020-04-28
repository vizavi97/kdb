@extends('layouts.master')

@section('page-title')
    @lang('press-center/youth-union.1')
@stop

@section('breadcrumb')
    <span class="small-paragraph">@lang('press-center/youth-union.2')</span>
@stop

@section('meta')

    <title>@lang('press-center/youth-union.3')</title>

    {{-- Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/press-center/youth-union.css') }}">

@stop

@section('content')

    @include('layouts.breadcrumb')

    {{-- Committees starts --}}
    <section class="desctop container youth-union mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <div class="first-parent">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="heading-2">
                                @lang('press-center/youth-union.4')
                            </h2>
                            <p>
                                @lang('press-center/youth-union.5')
                            </p>
                            <p>
                                @lang('press-center/youth-union.6')
                            </p>
                            <p>
                                @lang('press-center/youth-union.7')
                            </p>
                        </div>
                        <div class="col-md-6">
                            <div class="box">
                                <img src="{{ asset('img/press-center/youth-union/1.jpg') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            @include('layouts.sidebars.press-center-sidebar')

        </div>
    </section>
    {{-- Committees ends --}}

@stop