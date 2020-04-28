@extends('layouts.master')

@section('page-title')
    @lang('interactive-services/bank-regulations.1') 
@stop

@section('breadcrumb')
    <span class="small-paragraph">@lang('interactive-services/bank-regulations.2')</span>
@stop

@section('meta')

    <title>@lang('interactive-services/bank-regulations.3')</title>

    {{-- Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/interactive-services/bank-regulations.css') }}">

@stop

@section('content')

    @include('layouts.breadcrumb')

    {{-- Committees starts --}}
    <section class="desctop container bank-regulations mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <div class="first-parent">

                    {{-- Banking Regulations Start --}}
                    @foreach ( $files as $file )
                    @if (count( json_decode($file['file_' . app()->getLocale()])) > 0 )
                        <div class="row box">
                            <div class="col-sm-8">
                                <h6>{{ $file->getTranslatedAttribute('name', app()->getLocale(), 'fallbackLocale') }}</h6>
                                <p class="helper-paragraph">
                                    @lang('interactive-services/bank-regulations.4') {{ date( 'm.d.Y', strtotime($file->created_at) ) }}.   @lang('interactive-services/bank-regulations.5') {{ $file->number }}
                                </p>
                            </div>
                            <div class="col-sm-4 right-parent">
                                <div class="top">
                                    <a href="{{ $file->source_link }}">{{ $file->source_name }}</a>
                                </div>
                            </div>
                        </div>
                    @endif
                    @endforeach
                    {{-- Banking Regulations End --}}

                </div>
            </main>

            @include('layouts.sidebars.interactive-services-sidebar')

        </div>
    </section>
    {{-- Committees ends --}}

@stop