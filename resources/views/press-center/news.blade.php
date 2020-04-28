@extends('layouts.master')

@section('page-title')
    @lang('press-center/news.1')
@stop

@section('breadcrumb')
    <span class="small-paragraph">@lang('press-center/news.2')</span>
@stop

@section('meta')

    <title>@lang('press-center/news.3')</title>

    {{-- Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/press-center/news.css') }}">

@stop

@section('content')

    @include('layouts.breadcrumb')

    {{-- Committees starts --}}
    <section class="desctop container news mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="news-tab" data-toggle="tab" href="#news" role="tab" aria-controls="news" aria-selected="true">@lang('press-center/news.4')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="announcement-tab" data-toggle="tab" href="#announcement" role="tab" aria-controls="announcement" aria-selected="false">@lang('press-center/news.5')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="events-tab" data-toggle="tab" href="#events" role="tab" aria-controls="events" aria-selected="false">@lang('press-center/news.6')</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="news" role="tabpanel" aria-labelledby="news-tab">
                        <div class="first-parent">
                            @foreach($news as $new)
                                <div class="row box no-gutters">
                                    <div class="col-lg-8 order-lg-1 order-2 information">
                                        <a href="{{ route('press-center.news', app()->getLocale()) . '/' . $new->slug }}">
                                            <h3 class="heading-3">{{ $new->getTranslatedAttribute('title', $locale, 'fallbackLocale') }}</h3>
                                        </a>
                                        <p>{{ $new->getTranslatedAttribute('excerpt', $locale, 'fallbackLocale') }}</p>
                                        <a href="{{ route('press-center.news', app()->getLocale()) . '/' . $new->slug }}">
                                            @lang('press-center/news.7')
                                        </a>
                                    </div>
                                    <div class="col-lg-4 order-lg-2 order-1">
                                        <img src="{{ Voyager::image( $new->image ) }}">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="announcement" role="tabpanel" aria-labelledby="announcement-tab">
                       <div class="first-parent">
                            @foreach($announcements as $announcement)
                                <div class="row box no-gutters">
                                    <div class="col-lg-8 order-lg-1 order-2 information">
                                        <a href="{{ route('press-center.news', app()->getLocale()) . '/' . $announcement->slug }}">
                                            <h3 class="heading-3">{{ $announcement->getTranslatedAttribute('title', $locale, 'fallbackLocale') }}</h3>
                                        </a>
                                        <p>{{ $announcement->getTranslatedAttribute('excerpt', $locale, 'fallbackLocale') }}</p>
                                        <a href="{{ route('press-center.news', app()->getLocale()) . '/' . $announcement->slug }}">
                                            @lang('press-center/news.7')
                                        </a>
                                    </div>
                                    <div class="col-lg-4 order-lg-2 order-1">
                                        <img src="{{ Voyager::image( $announcement->image ) }}">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="events" role="tabpanel" aria-labelledby="events-tab">
                        <div class="first-parent">
                            @foreach($events as $event)
                                <div class="row box no-gutters">
                                    <div class="col-lg-8 order-lg-1 order-2 information">
                                        <a href="{{ route('press-center.news', app()->getLocale()) . '/' . $event->slug }}">
                                            <h3 class="heading-3">{{ $event->getTranslatedAttribute('title', $locale, 'fallbackLocale') }}</h3>
                                        </a>
                                        <p>{{ $event->getTranslatedAttribute('excerpt', $locale, 'fallbackLocale') }}</p>
                                        <a href="{{ route('press-center.news', app()->getLocale()) . '/' . $event->slug }}">
                                            @lang('press-center/news.7')
                                        </a>
                                    </div>
                                    <div class="col-lg-4 order-lg-2 order-1">
                                        <img src="{{ Voyager::image( $event->image ) }}">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </main>

            @include('layouts.sidebars.press-center-sidebar')

        </div>
    </section>
    {{-- Committees ends --}}

@stop