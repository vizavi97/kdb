@extends('layouts.master')

@section('page-title')
    @lang('corporates/deposits.1')
@stop

@section('breadcrumb')
    <span class="small-paragraph">@lang('corporates/deposits.2')</span>
@stop


@section('meta')

    <title>@lang('corporates/deposits.3')</title>

    {{-- Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/corporates/deposits.css') }}">

@stop

@section('content')

    @include('layouts.breadcrumb')

    {{-- Committees starts --}}
    <section class="desctop container deposits">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <h2 class="heading-2">@lang('corporates/deposits.4')</h2>
                <p class="small-paragraph">@lang('corporates/deposits.5')</p>
                <p class="small-paragraph">
                    @lang('corporates/deposits.6')
                </p>
                <h3 class="heading-3">@lang('corporates/deposits.7')</h3>
                <ul class="right-icon mt-4">
                    <li>
                        <p>@lang('corporates/deposits.8')</p>
                    </li>
                    <li>
                        <p>@lang('corporates/deposits.9')</p>
                    </li>
                    <li>
                        <p>@lang('corporates/deposits.10')</p>
                    </li>
			<li>
			<p>@lang('corporates/deposits.11')</p>
			</li>
                </ul>
            </main>

            @include('layouts.sidebars.corporates-sidebar')

        </div>
    </section>
    {{-- Committees ends --}}

@stop