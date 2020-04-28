@extends('layouts.master')

@section('page-title')
    @lang('investors/information-on-gsm.1')
@stop

@section('breadcrumb')
    <span class="small-paragraph">@lang('investors/information-on-gsm.2')</span>
@stop

@section('meta')

    <title>@lang('investors/information-on-gsm.3')</title>

    {{-- Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/investors/information-on-gsm.css') }}">

@stop

@section('content')

    @include('layouts.breadcrumb')

    {{-- Committees starts --}}
    <section class="desctop container information-on-gsm mt-5">
        <div class="row">
            
            <main class="col-xl-9 mb-5">
                <!-- Gsm Information Item(5) Start -->
                <div class="row">
                    @foreach($posts as $post)
                    <a class="event-link" href="{{ route('press-center.news', app()->getLocale()) . '/' . $post->slug }}">
                        <div class="col-md-12">
                            <div class="information-gsm-item">
                                <div class="row">
                                    <div class="col-lg-2 gsm-month">
                                        <span class="date">{{ date( 'd', strtotime($post->date) ) }}</span>
                                       {{--  <span class="fs-12 month">{{ date( 'm', strtotime($post->date) ) }}</span> --}}
                                        <p class="fs-12">{{ date( 'm.Y', strtotime($post->date) ) }}</p>
                                    </div>
                                    <div class="col-lg-6 gsm-holding">
                                        <h3 class="heading-3">{{ $post->getTranslatedAttribute('title', app()->getLocale(), 'fallbackLocale') }}</h3>
                                        <p class="small-paragraph fs-12">{{ $post->getTranslatedAttribute('excerpt', app()->getLocale(), 'fallbackLocale') }}</p>
                                    </div>
                                    <div class="col-lg-4 gsm_location">
                                        <div class="gsm-location-item">
                                            <span class="fa fa-map-marker-alt fs-12"></span>
                                            <p class="small-paragraph fs-12">{{ $post->getTranslatedAttribute('address', app()->getLocale(), 'fallbackLocale') }}</p>
                                        </div>
                                        <div class="gsm-location-item">
                                            <span class="far fa-clock fs-12"></span>
                                            <p class="small-paragraph fs-12">
                                                @if (app()->getLocale() == "en")
                                                    {{ date('g:i a', strtotime(  $post->date )) }}
                                                @else
                                                    {{ date('G:i', strtotime(  $post->date )) }}
                                                @endif
                                            </p>
                                        </div>
                                        <div class="gsm-location-item">
                                            <span class="fa fa-calendar-alt fs-12"></span>
                                            <p class="small-paragraph fs-12 mb-0">{{ date( 'm.d.Y', strtotime($post->date) ) }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </main>

            @include('layouts.sidebars.investors-sidebar')

        </div>
    </section>
    {{-- Committees ends --}}

@stop