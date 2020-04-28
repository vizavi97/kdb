@extends('layouts.master')

@section('page-title')
    @lang('individuals/bank-tariffs.1')
@stop

@section('breadcrumb')
    <span class="small-paragraph">@lang('individuals/bank-tariffs.2')</span>
@stop

@section('meta')

    <title>@lang('individuals/bank-tariffs.3')</title>

    {{-- Business Plan CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/about-us/business-plan.css') }}">

    {{-- Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/about-us/banks-charter.css') }}">

@stop

@section('content')

    @include('layouts.breadcrumb')

    {{-- Committees starts --}}
    <section class="desctop container business-plan">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <div class="row">
                    @foreach($tariffs as $tariff)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="business-plan-box">
                            <div class="bg position-relative">
                                <img class="img-cover" src="{{ Voyager::image( $tariff->image ) }}" alt="KDB banks charter">
                            </div>
                            <div class="p-4">
                                <h2 class="heading-3 mb-3">{{ $tariff->getTranslatedAttribute('title', app()->getLocale(), 'fallbackLocale') }}</h2>
                                <a href="{{ Voyager::image( (json_decode($tariff['file_' . app()->getLocale()]))[0]->download_link ) }}" class="flex-justify-center" download>
                                    <i class="fas fa-download"></i>
                                   <span class="small-paragraph">@lang('individuals/bank-tariffs.4')</span>
                               </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
               </div>
           </main>

            @include('layouts.sidebars.individuals-sidebar')

        </div>
    </section>
    {{-- Committees ends --}}

@stop