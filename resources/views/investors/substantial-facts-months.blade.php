@extends('layouts.master')

@section('page-title')
    @lang('investors/substantial-facts-months.1')
@stop

@section('breadcrumb')
    <span class="small-paragraph">@lang('investors/substantial-facts-months.2')</span>
@stop

@section('meta')

    <title>@lang('investors/substantial-facts-months.3')</title>

    {{-- Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/investors/substantial-facts.css') }}">

@stop

@section('content')

    @include('layouts.breadcrumb')

    {{-- Committees starts --}}
    <section class="desctop container substantial-facts mt-5">
        <div class="row">
            <main class="col-xl-9 main-hero mb-5">
                <h2 class="heading-2 mb-4">@lang('investors/substantial-facts-months.4')</h2>
                <a href="{{ route('investors.substantial-facts', app()->getLocale()) }}" class="back-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12l4.58-4.59z" fill="#FFB600"/>
                    </svg>
                    {{ $year }}
                </a>
                <div class="row">
                    @foreach($months as $month)
                        <div class="col-md-4">
                            <a href="{{ url('/' . app()->getLocale() . '/investors/substantial-facts/' . $year . '/' . json_decode($month)[1]) }}" class="card-archive">
                                {{ json_decode($month)[0] }}
                            </a>
                        </div>
                    @endforeach
                </div>
            </main>

            @include('layouts.sidebars.investors-sidebar')

        </div>
    </section>
    {{-- Committees ends --}}

@stop