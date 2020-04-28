@extends('layouts.master')
@section('page-title')
    @lang('individuals/deposits.1')
@stop

@section('breadcrumb')

    <span class="small-paragraph">@lang('individuals/deposits.2')</span>

@stop

@section('meta')

    <title>@lang('individuals/deposits.3')</title>

    {{-- Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/individuals/deposits.css') }}">

@stop

@section('content')

    @include('layouts.breadcrumb')

    {{-- Committees starts --}}
    <section class="desctop container deposits mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <h2 class="heading-2">@lang('individuals/deposits.4')</h2>
                <p class="small-paragraph">@lang('individuals/deposits.5')</p>
                <p class="small-paragraph">
                    @lang('individuals/deposits.6')
                </p>

                <h3 class="heading-3">@lang('individuals/deposits.7')</h3>

                <ul class="right-icon mt-4">
                    <li>
                        <p>@lang('individuals/deposits.8')</p>
                        <ul>
                            <li>
                                <p>@lang('individuals/deposits.9')</p>
                            </li>
                            <li>
                                <p>@lang('individuals/deposits.10')</p>
                            </li>
                            <li>
                                <p>@lang('individuals/deposits.11')</p>
                            </li>
                            <li>
                                <p>@lang('individuals/deposits.12')</p>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <p>@lang('individuals/deposits.13')</p>
                    </li>
                    <li>
                        <p>@lang('individuals/deposits.14')</p>
                    </li>
                    <li>
                        <p>@lang('individuals/deposits.15')</p>
                    </li>
                    <li>
                        <p>@lang('individuals/deposits.16')</p>
                    </li>
                </ul>

                <p class="small-paragraph">
                    @lang('individuals/deposits.17') 
                </p>

           
            </main>

            @include('layouts.sidebars.individuals-sidebar')

        </div>
    </section>
    {{-- Committees ends --}}

@stop