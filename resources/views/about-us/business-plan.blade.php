@extends('layouts.master')

@section('page-title')

    @lang('about-us/business-plan.business-plan')

@stop

@section('breadcrumb')
    <span class="small-paragraph">@lang('about-us/business-plan.business-plan-2')</span>
@stop

@section('meta')

    <title>@lang('about-us/business-plan.kdb-business')</title>

    {{-- Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/about-us/business-plan.css') }}">

@stop

@section('content')

    @include('layouts.breadcrumb')

    {{-- Committees starts --}}
    <section class="desctop container business-plan">
        <div class="row">
            <main class="col-xl-9 main-hero mb-5">
                <div class="row">
                    @foreach($plans as $plan)
                        @if(json_decode($plan['file_' . app()->getLocale()]))
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="business-plan-box">
                                    <div class="bg position-relative">
                                        <img class="img-cover" src="{{ Voyager::image( $plan['image_' . app()->getlocale()] ) }}" alt="KDB banks charter">
                                    </div>
                                    <div class="p-4">
                                        <h2 class="heading-3 mb-3">{{ $plan->getTranslatedAttribute('name', app()->getLocale(), 'fallbackLocale') }}</h2>
                                        <a href="{{ Voyager::image( (json_decode($plan['file_' . app()->getLocale()]))[0]->download_link ) }}" class="flex-justify-center" download>
                                            <i class="fas fa-download"></i>
                                            <span class="small-paragraph">@lang('about-us/business-plan.download')</span>
                                        </a>      
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </main>

            @include('layouts.sidebars.about-us-sidebar')

        </div>
    </section>
    {{-- Committees ends --}}

@stop