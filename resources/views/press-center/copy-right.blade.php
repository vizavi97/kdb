@extends('layouts.master')

@section('page-title')
    @lang('press-center/copy-right.1')
@stop

@section('breadcrumb')
    <span class="small-paragraph">@lang('press-center/copy-right.2')</span>
@stop

@section('meta')

    <title>@lang('press-center/copy-right.3')</title>

    {{-- Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/press-center/copy-right.css') }}">

@stop

@section('content')

    @include('layouts.breadcrumb')

    {{-- Committees starts --}}
    <section class="desctop container dividends mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <div class="rich-text">
                    {!! $copy->getTranslatedAttribute('copy', app()->getLocale(), 'fallbackLocale') !!}
                </div>        
            </main>

            @include('layouts.sidebars.press-center-sidebar')

        </div>
    </section>
    {{-- Committees ends --}}

@stop