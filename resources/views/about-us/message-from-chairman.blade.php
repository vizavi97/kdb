@extends('layouts.master')

@section('page-title')
    @lang('about-us/message-from-chairman.message-from')
@stop

@section('breadcrumb')
    <span class="small-paragraph">@lang('about-us/message-from-chairman.message-from-2')</span>
@stop

@section('meta')

    <title>@lang('about-us/message-from-chairman.kdb-message')</title>

    {{-- Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/about-us/message-from-chairman.css') }}">

@stop

@section('content')

    @include('layouts.breadcrumb')

    {{-- Committees starts --}}
    <section class="desctop container message-from-chairman">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                @if ( !is_null($message) )
                    <div class="row no-gutters">
                        <div class="col-md-4 first-parent">
                            <div class="card item">
                                <img src="{{ Voyager::image( $message['image'] ) }}" class="card-img-top">
                                <div class="card-body">
                                    <h4 class="heading-4">{{ $message->getTranslatedAttribute('name', $locale, 'fallbackLocale') }}</h4>
                                    <p class="small-paragraph blue">{{ $message->getTranslatedAttribute('desc', $locale, 'fallbackLocale') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 second-parent">
                            <div class="rich-text">
                                {!! $message->getTranslatedAttribute('message', $locale, 'fallbackLocale') !!}
                            </div>
                        </div>
                    </div>
                @endif
            </main>

            @include('layouts.sidebars.about-us-sidebar')

        </div>
    </section>
    {{-- Committees ends --}}

@stop

