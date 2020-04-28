@extends('layouts.master')

@section('page-title')
    @lang('about-us/awards.awards')
@stop

@section('breadcrumb')
    <span class="small-paragraph">@lang('about-us/awards.awards-2')</span>
@stop

@section('meta')

    <title>@lang('about-us/awards.kdb-awards')</title>

    {{-- Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/about-us/awards.css') }}">

@stop

@section('content')

    @include('layouts.breadcrumb')

    {{-- Committees starts --}}
    <section class="desctop container awards">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5 ">
                @foreach ( $awards as $award )
                <div>
                    <div class="card-custom mt-4">
                        <div class="row m-0">
                            <div class="col-md-3 p-0">
                                <img class="card-img" src="{{ Voyager::image( $award->card_img ) }}">
                            </div>
                            <div class="col-md-9 p-4 d-flex flex-column justify-content-between">
                                <div>
                                    <h3 class="heading-3">{{ $award->getTranslatedAttribute('title', app()->getLocale(), 'fallbackLocale') }}</h3>
                                    <p class="small-paragraph">{{ $award->getTranslatedAttribute('excerpt', app()->getLocale(), 'fallbackLocale') }}</p>
                                </div>
                                <button class="card-custom-toggler" data-target-id="{{ $award->id }}">
                                    @lang('about-us/awards.read-more')
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="opener-info" id="{{ $award->id }}">
                        <div class="row">
                            <div class="col-md-6 p-4 order-2 order-md-1">
                                <div class="rich-text">
                                    {!! $award->getTranslatedAttribute('body', app()->getLocale(), 'fallbackLocale') !!}
                                </div>
                            </div>
                            <div class="col-md-6 order-1 order-md-2">
                                <img class="info-img" src="{{ Voyager::image( $award->body_img ) }}">
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </main>

            @include('layouts.sidebars.about-us-sidebar')

        </div>
    </section>
    {{-- Committees ends --}}

@stop

@section('scripts')

    {{-- BootStrap --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

@stop