@extends('layouts.master')

@section('page-title')
    @lang('interactive-services/usefull-links.1')
@stop

@section('breadcrumb')
    <span class="small-paragraph">@lang('interactive-services/usefull-links.2')</span>
@stop

@section('meta')

    <title>@lang('interactive-services/usefull-links.3')</title>

    {{-- Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/interactive-services/usefull-links.css') }}">

@stop

@section('content')

    @include('layouts.breadcrumb')

    {{-- Committees starts --}}
    <section class="desctop container usefull-links mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <div class="first-parent">
                    <div class="row">

                        {{-- Useful Links Start --}}
                        @foreach ($links as $link)
                        <div class="col-lg-6 item-parent">
                            <div class="item">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <img src="{{ Voyager::image( $link->image ) }}">
                                    </div>
                                    <div class="col-sm-8 information">
                                        <h5>{{ $link->getTranslatedAttribute('title', app()->getLocale(), 'fallbackLocale') }}</h5>
                                        <a href="{{ $link->source_link }}" class="link" target="_blank">{{ $link->source_name }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        {{-- Useful Links End --}}

                    </div>
                </div>
            </main>

            @include('layouts.sidebars.interactive-services-sidebar')

        </div>
    </section>
    {{-- Committees ends --}}

@stop