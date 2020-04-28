@extends('layouts.master')

@section('page-title')
    @lang('press-center/procurement.1')
@stop

@section('breadcrumb')
    <span class="small-paragraph">@lang('press-center/procurement.2')</span>
@stop

@section('meta')

    <title>@lang('press-center/procurement.3')</title>

    {{-- Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/press-center/procurement.css') }}">

@stop

@section('content')

    @include('layouts.breadcrumb')

    {{-- Committees starts --}}
    <section class="desctop container procurement mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <div class="first-parent">
                    <h2 class="heading-2">
                        @lang('press-center/procurement.4')
                    </h2>
                    <p>
                        @lang('press-center/procurement.5')
                    </p>
                    <p>
                        @lang('press-center/procurement.6')
                    </p>
                    <ul class="right-icon">
                        <li>
                            <p>
                                @lang('press-center/procurement.7')
                            </p>
                        </li>
                        <li>
                            <p>
                                @lang('press-center/procurement.8')
                            </p>
                        </li>
                        <li>
                            <p>
                                @lang('press-center/procurement.9')
                            </p>
                        </li>
                        <li>
                            <p>
                                @lang('press-center/procurement.10')
                            </p>
                        </li>
                        <li>
                            <p>
                                @lang('press-center/procurement.11')
                            </p>
                        </li>
                        <li>
                            <p>
                                @lang('press-center/procurement.12')
                            </p>
                        </li>
                    </ul>
                    <p>
                        @lang('press-center/procurement.13')
                    </p>
                    <p>
                        @lang('press-center/procurement.14')
                    </p>
                    <p>
                        @lang('press-center/procurement.15')
                    </p>
                    <p>
                        @lang('press-center/procurement.16')
                    </p>
                </div>
                <div class="second-parent">

                    {{-- Email Starts --}}
                    @if(count($emails) > 0)
                        <div class="email">
                            <span class="small-paragraph email-card-title">@lang('press-center/procurement.17')</span>
                            <div class="row">
                                @foreach($emails as $email)
                                    <div class="col-md-4 mb-4">
                                        <a class="email-card" href="mailto:{{ $email->email }}">
                                            {{ $email->email }}
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                    {{-- Email Ends --}}
                    
                </div>
            </main>

            @include('layouts.sidebars.press-center-sidebar')

        </div>
    </section>
    {{-- Committees ends --}}

@stop