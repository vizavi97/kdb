@extends('layouts.master')

@section('page-title')
    @lang('about-us/management-board.meet-management')
@stop

@section('breadcrumb')
    <span class="small-paragraph">@lang('about-us/management-board.meet-management-2')</span>
@stop

@section('meta')

    <title>@lang('about-us/management-board.kdb-meet')</title>

    {{-- Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/about-us/managment-board.css') }}">

@stop

@section('content')

    @include('layouts.breadcrumb')

    {{-- Committees starts --}}
    <section class="desctop container managment-board">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <h2 class="heading-2" style="text-transform: initial;">@lang('about-us/management-board.meet-the')</h2>
                <p class="paragraph top">
                    @lang('about-us/management-board.the-members')
                </p>
                <div class="row">
                    @foreach ($users as $user)
                    <div class="col-md-4 item">
                        <div class="card">
                            <img src="{{ Voyager::image( $user->image ) }}" alt="{{ $user->getTranslatedAttribute('name', $locale, 'fallbackLocale') }}" class="image">
                            <div class="card-body">
                                <h3 class="heading-3">{{ $user->getTranslatedAttribute('name', $locale, 'fallbackLocale') }}</h3>
                                <p class="paragraph bold">{{ $user->getTranslatedAttribute('desc', $locale, 'fallbackLocale') }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </main>

            @include('layouts.sidebars.about-us-sidebar')

        </div>
    </section>
    {{-- Committees ends --}}

@stop

