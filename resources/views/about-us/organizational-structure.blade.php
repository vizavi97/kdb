@extends('layouts.master')

@section('page-title')
    @lang('about-us/organizational-structure.1')
@stop

@section('breadcrumb')
    <span class="small-paragraph">@lang('about-us/organizational-structure.2')</span>
@stop

@section('meta')

    <title>@lang('about-us/organizational-structure.3')</title>

    {{-- Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/about-us/organizational-structure.css') }}">

@stop

@section('content')

    @include('layouts.breadcrumb')

    <!-- Organizational Structure starts -->
    <section class="desctop container organizational-structure">
        <div class="row">
            <main class="col-xl-9 main-hero mb-5">
                <img width="100%" src="{{ Voyager::image( $structure['image_' . app()->getLocale()] ) }}" alt="organizational structure">
            </main>

            @include('layouts.sidebars.about-us-sidebar')

        </div>
    </section>
    <!-- Organizational Structure ends -->

@stop
