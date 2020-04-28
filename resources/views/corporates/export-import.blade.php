@extends('layouts.master')

@section('page-title')
    @lang('corporates/export-import.1')
@stop

@section('breadcrumb')

    <span class="small-paragraph">@lang('corporates/export-import.2')</span>

@stop

@section('meta')

    <title>@lang('corporates/export-import.3')</title>

    {{-- Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/corporates/export-import.css') }}">

@stop

@section('content')

    @include('layouts.breadcrumb')

    {{-- Committees starts --}}
    <section class="desctop container export-import">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <h2 class="heading-2">@lang('corporates/export-import.4')</h2>
                <p class="small-paragraph">@lang('corporates/export-import.5')</p>
                <h3 class="heading-3 mb-3">@lang('corporates/export-import.6')</h3>
                <div class="item">
                    <p class="small-paragraph">
                        @lang('corporates/export-import.7')
                    </p>
                </div>
                <div class="item">
                    <p class="small-paragraph">
                        @lang('corporates/export-import.8')
                    </p>
                </div>
                <div class="item">
                    <p class="small-paragraph">
                        @lang('corporates/export-import.9')
                    </p>
                </div>
                <div class="item">
                    <p class="small-paragraph">
                        @lang('corporates/export-import.10')
                    </p>
                </div>
                <div class="item">
                    <p class="small-paragraph">
                        @lang('corporates/export-import.11')
                    </p>
                </div>
                <div class="item">
                    <p class="small-paragraph">
                        @lang('corporates/export-import.12')
                    </p>
                </div>
                <div class="item">
                    <p class="small-paragraph">
                        @lang('corporates/export-import.13')
                    </p>
                </div>
                <div class="item">
                    <p class="small-paragraph">
                        @lang('corporates/export-import.14')
                    </p>
                </div>
                <div class="item">
                    <p class="small-paragraph">
                        @lang('corporates/export-import.15')
                    </p>
                </div>
                <h3 class="heading-3 mb-3 mt-4">@lang('corporates/export-import.16')</h3>
                <div class="item">
                    <p class="small-paragraph">
                        @lang('corporates/export-import.17')
                    </p>
                </div>
                <p class="small-paragraph mt-4">
                    @lang('corporates/export-import.18')
                </p>

                <button class="modal-open" modal-id="modal1">@lang('corporates/export-import.19')</button>

                <div class="global-modal-window flex-center" id="modal1">
                    <div class="global-modal-content">
                        <div class="modal-close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/>
                            </svg>
                        </div>
                        <div class="modal-content-inner">
                            <div class="p-4">
                                <h3 class="heading-2 mb-4">@lang('corporates/export-import.20')</h3>

                                @foreach ($contacts as $contact)
                                <div class="row item no-gutters">
                                    <div class="col-md-3">
                                        <p class="small-paragraph">{{ $contact->user_name }}</p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="small-paragraph">{{ $contact->getTranslatedAttribute('duty', app()->getLocale(), 'fallbackLocale') }}</p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="small-paragraph">{{ $contact->phone }}</p>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="mailto:{{ $contact->email }}" class="small-paragraph modal-mail">{{ $contact->email }}</a>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </main>

            @include('layouts.sidebars.corporates-sidebar')

        </div>
    </section>
    {{-- Committees ends --}}

@stop

@section('scripts')
    <script src="{{ asset('js/modal.js') }}"></script>
@stop