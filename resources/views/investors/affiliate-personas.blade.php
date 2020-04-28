@extends('layouts.master')

@section('page-title')
    @lang('investors/affiliate-personas.1')
@stop

@section('breadcrumb')
    <span class="small-paragraph">@lang('investors/affiliate-personas.2')</span>
@stop

@section('meta')

    <title>@lang('investors/affiliate-personas.3')</title>

    {{-- Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/investors/affiliate-personas.css') }}">

@stop

@section('content')

    @include('layouts.breadcrumb')

    {{-- Committees starts --}}
    <section class="desctop container affiliate-personas mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <h2 class="heading-2 mb-4">@lang('investors/affiliate-personas.4')</h2>
                <table>
                    <tr>
                        <th>№</th>
                        <th>@lang('investors/affiliate-personas.5')</th>
                        <th>@lang('investors/affiliate-personas.6')</th>
                        <th>@lang('investors/affiliate-personas.7')</th>
                    </tr>
                    @php $i = 1; @endphp
                    @foreach ( $parties as $party )
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $party->getTranslatedAttribute('name', app()->getLocale(), 'fallbackLocale') }}</td>
                            <td>{{ $party->getTranslatedAttribute('address', app()->getLocale(), 'fallbackLocale') }}</td>
                            <td>{{ $party->getTranslatedAttribute('grounds', app()->getLocale(), 'fallbackLocale') }}</td>
                        </tr>
                        @php $i++; @endphp
                    @endforeach
                </table>
            </main>

            @include('layouts.sidebars.investors-sidebar')

        </div>
    </section>
    {{-- Committees ends --}}

@stop