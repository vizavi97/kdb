@extends('layouts.master')

@section('page-title')
    @lang('press-center/single-news.1')
@stop

@section('breadcrumb')
    <span class="small-paragraph">@lang('press-center/single-news.2')</span>
@stop

@section('meta')

    <title>KDB | {{ $post->getTranslatedAttribute('title', $locale, 'fallbackLocale') }}</title>

    <meta name="keywords" content="{{ $post->getTranslatedAttribute('keywords', $locale, 'fallbackLocale') }}">
    <meta name="description" content="{{ $post->getTranslatedAttribute('excerpt', $locale, 'fallbackLocale') }}">

    {{-- Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/press-center/single-news.css') }}">

@stop

@section('content')

    @include('layouts.breadcrumb')

    {{-- Committees starts --}}
    <section class="desctop container single-news mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <div class="first-parent">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="h-100 d-flex align-items-center">
                                <div>
                                    <h2 class="heading-2">{{ $post->getTranslatedAttribute('title', $locale, 'fallbackLocale') }}</h2>
                                    <div class="post-date">
                                        @if (empty($post->date))
                                            {{ date('d.m.Y', strtotime(  $post->created_at )) }}
                                        @elseif ($locale == "en")
                                            {{ date('d.m.Y g:i a', strtotime(  $post->date )) }}
                                        @else
                                            {{ date('d.m.Y G:i', strtotime(  $post->date )) }}
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <img src="{{ Voyager::image( $post['image'] ) }}" class="main-image">
                        </div>
                    </div>
                    <div class="row my-5">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-10">
                            <div class="rich-text">
                                {!! $post->getTranslatedAttribute('body', $locale, 'fallbackLocale') !!}
                            </div>
                        </div>
                    </div>
                </div>
                <button>
                    <a href="{{ route('press-center.news', app()->getLocale()) }}" class="back-list">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12l4.58-4.59z" fill="#fff"/>
                        </svg>
                        @lang('press-center/single-news.3')
                    </a>
                </button>
            </main>

            @include('layouts.sidebars.press-center-sidebar')

        </div>
    </section>
    {{-- Committees ends --}}

@stop