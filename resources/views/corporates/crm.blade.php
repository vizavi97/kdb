@extends('layouts.master')

@section('page-title')
    @lang('corporates/crm.1')
@stop

@section('breadcrumb')
    <span class="small-paragraph">@lang('corporates/crm.2')</span>
@stop


@section('meta')

    <title>@lang('corporates/crm.3')</title>

    {{-- Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/corporates/crm.css') }}">

@stop

@section('content')

    @include('layouts.breadcrumb')

    {{-- Committees starts --}}
    <section class="desctop container crm mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <div class="credit">
                    <img class="w-100 mb-4 align-right" src="{{ asset('img/corporates/crm/crm.jpg') }}" alt="Letters of credit with post-financing option">
                    <h2 class="heading-2">@lang('corporates/crm.4')</h2>
                    <p class="small-paragraph">
                        @lang('corporates/crm.5')
                    </p> 
                    <p class="small-paragraph">
                        @lang('corporates/crm.6') 
                    </p>
                    <p class="small-paragraph">
                        @lang('corporates/crm.7')  
                    </p>
                    <ul class="right-icon mt-4">
                        <li>
                            <p>
                                @lang('corporates/crm.8')
                            </p>
                        </li>
                        <li>
                            <p>
                                @lang('corporates/crm.9')
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