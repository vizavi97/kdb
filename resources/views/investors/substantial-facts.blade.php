@extends('layouts.master')

@section('page-title')
    @lang('investors/substantial-facts.1')
@stop

@section('breadcrumb')
    <span class="small-paragraph">@lang('investors/substantial-facts.2')</span>
@stop

@section('meta')

    <title>@lang('investors/substantial-facts.3')</title>

    {{-- Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/investors/substantial-facts.css') }}">

@stop

@section('content')

    @include('layouts.breadcrumb')

    {{-- Committees starts --}}
    <section class="desctop container substantial-facts mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <h2 class="heading-2 mb-4">@lang('investors/substantial-facts.4')</h2>
                <div class="row">
                    @foreach($years as $year)
                        <div class="col-md-4">
                            <a href="{{ url('/' . app()->getLocale() . '/investors/substantial-facts/' . $year) }}" class="card-archive">{{ $year }}</a>
                        </div>
                    @endforeach
                </div>
            </main>

            @include('layouts.sidebars.investors-sidebar')

        </div>
    </section>
    {{-- Committees ends --}}

@stop