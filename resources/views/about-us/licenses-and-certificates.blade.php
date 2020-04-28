@extends('layouts.master')

@section('page-title')
    @lang('about-us/licenses-and-certificates.licenses-certificates')
@stop

@section('breadcrumb')
    <span class="small-paragraph">@lang('about-us/licenses-and-certificates.licenses-certificates-2')</span>
@stop

@section('meta')

    <title>@lang('about-us/licenses-and-certificates.kdb-licenses')</title>

    {{-- Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/about-us/licenses-and-certificates.css') }}">

@stop

@section('content')

    @include('layouts.breadcrumb')

    {{-- Committees starts --}}
    <section class="desctop container licenses-and-certificates">
        <div class="row">
            
            <main class="col-md-9 main-hero mb-5">
                <div class="main-hero-inner">
                    <div class="row no-gutters">
                        @foreach ( $licenses as $license )
                        <div class="col-md-6 mb-4 flex-center item modal-open" modal-id="{{ $license->id }}">
                            <div class="item-inner flex-center">
                                <img src="{{ Voyager::image( $license->presenter_image ) }}" alt="KDB licenses">
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                @foreach ( $licenses as $license )
                <div class="global-modal-window flex-center" id="{{ $license->id }}">
                    <div class="global-modal-content">
                        <div class="modal-close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/>
                            </svg>
                        </div>
                        <div class="modal-content-inner">
                            <img src="{{ Voyager::image( $license->license_image ) }}" alt="KDB licenses">
                            <div class="row px-4">
                                <div class="col-md-6">
                                    <h5 class="small-paragraph">@lang('about-us/licenses-and-certificates.license-number')</h5>
                                    <p class="small-paragraph">{{ $license->license_number }}</p>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="small-paragraph">@lang('about-us/licenses-and-certificates.issued-date')</h5>
                                    <p class="small-paragraph mb-0">{{ $license->issued_date }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </main>

            @include('layouts.sidebars.about-us-sidebar')

        </div>
    </section>
    {{-- Committees ends --}}

@stop

@section('scripts')

    <!-- Modal js -->
    <script src="{{ asset('js/modal.js') }}"></script>

@stop