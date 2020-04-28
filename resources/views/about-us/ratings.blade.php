@extends('layouts.master')

@section('page-title')
    @lang('about-us/ratings.1')
@stop

@section('breadcrumb')
    <span class="small-paragraph">@lang('about-us/ratings.2')</span>
@stop

@section('meta')

    <title>@lang('about-us/ratings.3')</title>

    {{-- Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/about-us/ratings.css') }}">

@stop

@section('content')

    @include('layouts.breadcrumb')

    {{-- Committees starts --}}
    <section class="desctop container ratings">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <div class="main-hero-inner">
                    <div class="row no-gutters">
                        @foreach ($data as $item)

                            <div class="col-md-6 mb-4 flex-center item">
                                <div class="item-inner flex-center modal-open" modal-id="{{ $item['presenter_name'] }}">
                                    <img src="{{ Voyager::image( $item['presenter_img'] ) }}" alt="KDB certificates">
                                </div>
                            </div>

                            <div class="global-modal-window flex-center" id="{{ $item['presenter_name'] }}">
                                <div class="global-modal-content">
                                    <div class="modal-close">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/>
                                        </svg>
                                    </div>
                                    <div class="modal-content-inner">
                                        <ul>
                                            @php $a = 1; @endphp
                                            @foreach ($data as $item_inner)
                                                @if( $item['presenter_name'] == $item_inner['presenter_name'] )
                                                    <li>
                                                        <button class="tablinks {{ $a == 1 ? 'show active' : '' }}" onclick="openTabs(event, {{ $item_inner['id'] }})">
                                                            <span>{{ date( 'd.m.Y', strtotime($item_inner['issued_date'])) }}</span>
                                                        </button>
                                                    </li>
                                                @endif
                                                @php $a++;  @endphp
                                            @endforeach
                                        </ul>
                                        @php $b = 1; @endphp
                                        @foreach ($data as $item_inner)
                                            @if( $item['presenter_name'] == $item_inner['presenter_name'] )
                                                <div id="{{ $item_inner['id'] }}" class="tabcontent {{ $b == 1 ? 'show active' : '' }}">
                                                    <img src="{{ Voyager::image( $item_inner['rating_img'] ) }}" alt="KDB licenses">
                                                </div>
                                            @php $b++;  @endphp
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </div>
                </div>    
            </main>

            @include('layouts.sidebars.about-us-sidebar')

        </div>
    </section>
    {{-- Committees ends --}}

@stop

@section('scripts')

    <!-- Modal js -->
    <script src="{{ asset('js/modal.js') }}"></script>

    <!-- Tab js -->
    <script src="{{ asset('js/tab.js') }}"></script>

@stop