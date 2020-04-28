@extends('layouts.master')

@section('page-title')
    {{ $card->getTranslatedAttribute('name', $locale, 'fallbackLocale') }}
@stop

@section('meta')

    <title>KDB | {{ $card->getTranslatedAttribute('name', $locale, 'fallbackLocale') }}</title>

    {{-- Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/corporates/single-local-card.css') }}">

@stop

@section('content')

    <!-- Breadcrumb starts -->
    <section class="breadcrumb-custom container-fluid single-local-card">
        <div class="desctop container">
            <h1 class="heading-1">{{ $card->getTranslatedAttribute('name', $locale, 'fallbackLocale') }}</h1>
            <div>
                <a class="small-paragraph" href="{{ route('home', app()->getLocale()) }}">@lang('single-card.home')</a> /
                {{-- <a class="small-paragraph" href="{{ $parentPageLink }}">{{ $parentPageName }}</a> / --}}
                <span class="small-paragraph" href="#">{{ $card->getTranslatedAttribute('name', $locale, 'fallbackLocale') }}</span>
            </div>
            <article class="card-cards mt-5">
                <div class="row m-0">
                    <div class="col-lg-4 p-0">
                        <img src="{{ Voyager::image( $card['image'] ) }}" class="img" alt="{{ $card->getTranslatedAttribute('name', $locale, 'fallbackLocale') }}">
                    </div>
                    <div class="col-lg-8 p-0 pl-lg-5 mt-4 mt-lg-0">
                        <div class="row">
                            <div class="col-md-4">
                                <p class="small-paragraph">@lang('single-card.payment-system')</p>
                                <p class="small-paragraph fs-14 d-flex align-items-center mb-0">
                                    <img src="{{ asset('img/corporates/local-cards/payment-system.svg') }}">
                                    <strong class="pl-2">{{ $card->getTranslatedAttribute('payment_system', $locale, 'fallbackLocale') }}</strong>
                                </p>
                            </div>
                            <div class="col-md-4 mt-4 mt-md-0">
                                <p class="small-paragraph">@lang('single-card.currency')</p>
                                <p class="small-paragraph fs-14 d-flex align-items-center mb-0">
                                    <img src="{{ asset('img/corporates/local-cards/cash.svg') }}">
                                    <strong class="pl-2">{{ $card->getTranslatedAttribute('currency', $locale, 'fallbackLocale') }}</strong>
                                </p>
                            </div>
                            <div class="col-md-4 mt-4 mt-md-0">
                                <p class="small-paragraph">@lang('single-card.type-of')</p>
                                <p class="small-paragraph fs-14 d-flex align-items-center mb-0">
                                    <img src="{{ asset('img/corporates/local-cards/card-icon.svg') }}">
                                    <strong class="pl-2">{{ $card->getTranslatedAttribute('type', $locale, 'fallbackLocale') }}</strong>
                                </p>
                            </div>
                        </div>
                        {{-- <div class="row mt-5">
                            <div class="col-md-4">
                                <p class="small-paragraph">The validity of the card:</p>
                                <p class="small-paragraph fs-14 d-flex align-items-center mb-0">
                                    <strong class="pl-2">{{ $card->getTranslatedAttribute('validity_period', $locale, 'fallbackLocale') }}</strong>
                                </p>
                            </div>
                            <div class="col-md-4 mt-4 mt-md-0">
                                <p class="small-paragraph">Transaction processing:</p>
                                <p class="small-paragraph fs-14 d-flex align-items-center mb-0">
                                    <strong class="pl-2">{{ $card->getTranslatedAttribute('transaction', $locale, 'fallbackLocale') }}</strong>
                                </p>
                            </div>
                            <div class="col-md-4 mt-4 mt-md-0">
                                <p class="small-paragraph">Card account maintenance:</p>
                                <p class="small-paragraph fs-14 d-flex align-items-center mb-0">
                                    <strong class="pl-2">{{ $card->getTranslatedAttribute('maintenance', $locale, 'fallbackLocale') }}</strong>
                                </p>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </article>
        </div>
    </section>
    <!-- Breadcrumb ends -->

    {{-- Committees starts --}}
    <section class="desctop container single-local-card mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="desc-tab" data-toggle="tab" href="#desc" role="tab" aria-controls="desc" aria-selected="true">@lang('single-card.description')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="instruction-tab" data-toggle="tab" href="#instruction" role="tab" aria-controls="instruction" aria-selected="false">@lang('single-card.instruction')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="tariffs-tab" data-toggle="tab" href="#tariffs" role="tab" aria-controls="tariffs" aria-selected="false">@lang('single-card.tariffs')</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active pt-4" id="desc" role="tabpanel" aria-labelledby="desc-tab">
                        <div class="rich-text">
                            {!! $card->getTranslatedAttribute('description', $locale, 'fallbackLocale') !!}
                        </div>
                    </div>
                    <div class="tab-pane fade pt-4" id="instruction" role="tabpanel" aria-labelledby="instruction-tab">
                        <div class="rich-text">
                            {!! $card->getTranslatedAttribute('instruction', $locale, 'fallbackLocale') !!}
                        </div>
                    </div>
                    <div class="tab-pane fade pt-4" id="tariffs" role="tabpanel" aria-labelledby="tariffs-tab">
                        <div class="rich-text">
                            {!! $card->getTranslatedAttribute('tariffs', $locale, 'fallbackLocale') !!}
                        </div>
                    </div>
                </div>
            </main>

            @if ($current_route_name == "individuals.single-card") 
                @include('layouts.sidebars.individuals-sidebar')
            @else 
                @include('layouts.sidebars.corporates-sidebar')
            @endif

        </div>
    </section>
    {{-- Committees ends --}}

@stop