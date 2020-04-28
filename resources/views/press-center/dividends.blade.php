@extends('layouts.master')

@section('page-title')
    @lang('press-center/dividends.1')
@stop

@section('breadcrumb')
    <span class="small-paragraph">@lang('press-center/dividends.2')</span>
@stop

@section('meta')

    <title>@lang('press-center/dividends.3')</title>

    {{-- Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/press-center/dividends.css') }}">

@stop

@section('content')

    @include('layouts.breadcrumb')

    {{-- Committees starts --}}
    <section class="desctop container dividends mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <h2 class="heading-2 mb-4">@lang('press-center/dividends.4')</h2>
                <p class="small-paragraph">
                    @lang('press-center/dividends.5')
                </p>
                <table>
                    <tr>
                        <th>@lang('press-center/dividends.6')</th>
                        <th>@lang('press-center/dividends.7')</th>
                        <th>@lang('press-center/dividends.8')</th>
                        <th>@lang('press-center/dividends.9')</th>
                    </tr>
                    @foreach ($dividends as $dividend)
                        <tr>
                            <td>{{ $dividend->getTranslatedAttribute('payment_year', app()->getLocale(), 'fallbackLocale') }}</td>
                            <td>{{ $dividend->getTranslatedAttribute('fy', app()->getLocale(), 'fallbackLocale') }}</td>
                            <td>{{ $dividend->getTranslatedAttribute('currency', app()->getLocale(), 'fallbackLocale') }}</td>
                            <td>{{ $dividend->getTranslatedAttribute('purpose', app()->getLocale(), 'fallbackLocale') }}</td>
                        </tr>
                    @endforeach
                </table>
            </main>

            @include('layouts.sidebars.press-center-sidebar')

        </div>
    </section>
    {{-- Committees ends --}}

@stop