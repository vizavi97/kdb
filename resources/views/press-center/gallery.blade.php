@extends('layouts.master')

@section('page-title')
    @lang('press-center/gallery.1')
@stop

@section('breadcrumb')
    <span class="small-paragraph">@lang('press-center/gallery.2')</span>
@stop

@section('meta')

    <title>@lang('press-center/gallery.3')</title>

    {{-- Owl-Carousel CSS CDN --}}
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    {{-- Fancy-box CSS CDN --}}
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">

    {{-- Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/press-center/gallery.css') }}">

@stop

@section('content')

    @include('layouts.breadcrumb')

    {{-- Committees starts --}}
    <section class="desctop container gallery mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <div class="first-parent">
                    <h2 class="heading-2">
                        @if ($data == "photos")
                            @lang('press-center/gallery.3_1')
                        @else
                            @lang('press-center/gallery.3_2')
                        @endif
                        @lang('press-center/gallery.4')
                    </h2>
                    @foreach ($categories as $category)
                        @if ($data == "photos")
                            @if ($category->photos != "[]")
                                <div class="row">
                                    <div class="col-12">
                                        <h3 class="heading-3">{{ $category->getTranslatedAttribute('name', $locale, 'fallbackLocale') }}</h3>
                                    </div>
                                </div>
                                <div class="owl-carousel owl-photo owl-theme">
                                    @foreach($category->photos as $photo)
                                        @if(!empty( $photo['file_' . $locale] ))
                                            <a data-fancybox  href="{{ Voyager::image( $photo['file_' . $locale] ) }}" class="fancybox">
                                                <img class="img-cover" src="{{ Voyager::image( $photo['file_' . $locale] ) }}" alt="video player">
                                            </a>
                                        @endif
                                    @endforeach
                                </div>
                            @endif
                        @else 
                            @if ($category->videos != "[]")
                                <div class="row">
                                    <div class="col-12">
                                        <h3 class="heading-3">{{ $category->getTranslatedAttribute('name', $locale, 'fallbackLocale') }}</h3>
                                    </div>
                                </div>
                                <div class="owl-carousel owl-photo owl-theme">
                                    @foreach($category->videos as $video)
                                        @if (!empty((json_decode($video['file_' . $locale]))[0]))
                                            <div class="item">
                                                <a data-fancybox  href="{{ Voyager::image( (json_decode($video['file_' . $locale]))[0]->download_link ) }}" class="fancybox">
                                                    <img class="img-cover" src="{{ Voyager::image( $video['file_' . $locale . '_thumb'] ) }}" alt="video player">
                                                </a>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            @endif
                        @endif
                    @endforeach
                    
                </div>
            </main>

            @include('layouts.sidebars.press-center-sidebar')

        </div>
    </section>
    {{-- Committees ends --}}

@stop

@section('scripts')

    <!-- Owl Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- Fancybox -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

    {{-- Custom JS --}}
    <script src="{{ asset('/js/gallery.js') }}"></script>

@stop