@extends('layouts.master')

@section('page-title')
    @lang('press-center/gallery-category.1')
@stop

@section('breadcrumb')
    <span class="small-paragraph">@lang('press-center/gallery-category.2')</span>
@stop

@section('meta')

    <title>@lang('press-center/gallery-category.3')</title>

    {{-- Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/press-center/gallery-category.css') }}">

@stop

@section('content')

    @include('layouts.breadcrumb')

    {{-- Committees starts --}}
    <section class="desctop container gallery-category mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero">
                <div class="row">
                    <div class="col-md-4">
                        <div class="box">
                            <a href="{{ url( app()->getLocale() . '/press-center/gallery', ['data' => 'photos']) }}">
                                <h3 class="heading-blue">@lang('press-center/gallery-category.4')</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <a href="{{ url( app()->getLocale() . '/press-center/gallery', ['data' => 'videos']) }}">
                                <h3 class="heading-blue">@lang('press-center/gallery-category.5')</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </main>

            @include('layouts.sidebars.press-center-sidebar')

        </div>
    </section>
    {{-- Committees ends --}}

@stop