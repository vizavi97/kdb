@extends('layouts.master')

@section('page-title')
    @lang('interactive-services/sample-forms.1')
@stop

@section('breadcrumb')
    <span class="small-paragraph">@lang('interactive-services/sample-forms.2')</span>
@stop

@section('meta')

    <title>@lang('interactive-services/sample-forms.3')</title>

    {{-- Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/interactive-services/sample-forms.css') }}">

@stop

@section('content')

    @include('layouts.breadcrumb')

    {{-- Committees starts --}}
    <section class="desctop container sample-forms mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <div class="first-parent">

                    {{-- Sample Forms Start --}}
                    @foreach ($files as $file)
                    <div class="row box">
                        <div class="col-sm-8">
                            <h6>{{ $file->getTranslatedAttribute('name', app()->getLocale(), 'fallbackLocale') }}</h6>
                            <p class="helper-paragraph">
                                @lang('interactive-services/sample-forms.4') {{ date( 'd.m.Y', strtotime($file->date) ) }}.   @lang('interactive-services/sample-forms.5') {{ $file->number }}
                            </p>
                        </div>
                        <div class="col-sm-4 right-parent">
                            <div class="top">
                                <a href="{{ $file->source_link }}">{{ $file->getTranslatedAttribute('source_name', app()->getLocale(), 'fallbackLocale') }}</a>
                                <a href="{{ Voyager::image( (json_decode($file['file_' . app()->getLocale()]))[0]->download_link ) }}" download="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path d="M19.35 10.04C18.67 6.59 15.64 4 12 4 9.11 4 6.6 5.64 5.35 8.04 2.34 8.36 0 10.91 0 14c0 3.31 2.69 6 6 6h13c2.76 0 5-2.24 5-5 0-2.64-2.05-4.78-4.65-4.96zM19 18H6c-2.21 0-4-1.79-4-4 0-2.05 1.53-3.76 3.56-3.97l1.07-.11.5-.95C8.08 7.14 9.94 6 12 6c2.62 0 4.88 1.86 5.39 4.43l.3 1.5 1.53.11c1.56.1 2.78 1.41 2.78 2.96 0 1.65-1.35 3-3 3zm-5.55-8h-2.9v3H8l4 4 4-4h-2.55z" fill="#FFB600"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- Sample Forms End --}}

                </div>
            </main>

            @include('layouts.sidebars.interactive-services-sidebar')

        </div>
    </section>
    {{-- Committees ends --}}

@stop