@extends('layouts.master')

@section('page-title')
    {{ $page_name }}
@stop

@section('breadcrumb')

    <span class="small-paragraph">
        {{ $page_name }}
    </span>

@stop

@section('meta')

    <title>
        KDB | {{ $page_name }}
    </title>

    {{-- Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/corporates/local-cards.css') }}">

@stop

@section('content')

    @include('layouts.breadcrumb')

    {{-- Committees starts --}}
    <section class="desctop container local-cards my-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    @php $i = 1; @endphp
                    @foreach ($payment_systems as $payment_system)
                        <li class="nav-item">
                            <a class="nav-link {{ ($i == 1) ? 'active' : ''}}" 
                                id="{{ $payment_system }}-tab"
                                data-toggle="tab"
                                href="#{{ $payment_system }}"
                                role="tab"
                                aria-controls="{{ $payment_system }}"
                                aria-selected="true">
                                    {{ strtoupper(str_replace('-', ' ', $payment_system)) }}
                            </a>
                        </li>
                        @php $i++; @endphp
                    @endforeach
                </ul>
                <div class="tab-content" id="myTabContent">
                    @php $a = 1; @endphp
                    @foreach($payment_systems as $payment_system)
                        <div class="tab-pane fade {{ ($a == 1) ? 'show active' : ''}}" id="{{ $payment_system}}" role="tabpanel" aria-labelledby="{{ $payment_system }}-tab">
                            @foreach($cards as $card)
                                @if($card->payment_system == strtoupper(str_replace('-', ' ', $payment_system)))
                                <a href="{{ route(Route::currentRouteName(), app()->getLocale()) . '/' . $card->slug }}" class="card-link">
                                    <article class="card-cards mt-4">
                                        <div class="row m-0">
                                            <div class="col-lg-4 p-0"> 
                                                <img src="{{ Voyager::image( $card->image ) }}" class="img" alt="{{ $card->getTranslatedAttribute('name', $locale, 'fallbackLocale') }}">
                                            </div>
                                            <div class="col-lg-8 p-0 pl-lg-4 mt-4 mt-lg-0">
                                                <div class="d-flex justify-content-between">
                                                    <h3 class="heading-3 mb-0">{{ $card->getTranslatedAttribute('name', $locale, 'fallbackLocale') }}</h3>
                                                    <p class="mb-0 fs-14 d-none d-md-flex align-items-center">
                                                        @lang('cards.learn-all')
                                                        <i class="fas fa-angle-right pl-1"></i>
                                                    </p>
                                                </div>
                                                <div class="row mt-4">
                                                    <div class="col-md-4">
                                                        <p class="small-paragraph">@lang('cards.payment-system')</p>
                                                        <p class="small-paragraph fs-14 d-flex align-items-center mb-0">
                                                            <img src="{{ asset('img/corporates/local-cards/payment-system.svg') }}">
                                                            <strong class="pl-2">{{ $card->payment_system }}</strong>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-4 mt-4 mt-md-0">
                                                        <p class="small-paragraph">@lang('cards.currency')</p>
                                                        <p class="small-paragraph fs-14 d-flex align-items-center mb-0">
                                                            <img src="{{ asset('img/corporates/local-cards/cash.svg') }}">
                                                            <strong class="pl-2">{{ $card->getTranslatedAttribute('currency', $locale, 'fallbackLocale') }}</strong>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-4 mt-4 mt-md-0">
                                                        <p class="small-paragraph">@lang('cards.type-of')</p>
                                                        <p class="small-paragraph fs-14 d-flex align-items-center mb-0">
                                                            <img src="{{ asset('img/corporates/local-cards/card-icon.svg') }}">
                                                            <strong class="pl-2">{{ $card->getTranslatedAttribute('type', $locale, 'fallbackLocale') }}</strong>
                                                        </p>
                                                    </div>
                                                </div>
                                                @if($card->note)
                                                    <div class="custom-alert mt-4">
                                                        <p class="text">{{ $card->getTranslatedAttribute('note', $locale, 'fallbackLocale') }}</p>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </article>
                                </a>
                                @endif
                            @endforeach
                        </div>
                    @php $a++; @endphp
                    @endforeach
                </div>
            </main>

            @if ($current_route_name == "individuals.local-cards" || $current_route_name == "individuals.international-cards")
                @include('layouts.sidebars.individuals-sidebar')
            @else 
                @include('layouts.sidebars.corporates-sidebar')
            @endif

        </div>
    </section>
    {{-- Committees ends --}}

@stop