@extends('layouts.master')

@section('page-title')
    Search
@stop

@section('breadcrumb')
    <span class="small-paragraph">Search</span>
@stop

@section('meta')

    <title>KDB | Search</title>

    {{-- Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/interactive-services/search.css') }}">

@stop

@section('content')

    @include('layouts.breadcrumb')

    {{-- Committees starts --}}
    <section class="desctop container search mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">

                {{-- Search Starts --}}
                <input type="search" value="{{ $query }}" id="search-input-sec">
                <button id="search-button">To find</button>   
                {{-- Search Ends --}}

                <ul class="mt-4">
                    @if ($results)
                    @foreach ($results as $result)
                        <li>
                            <a href="{{ $result['url'] }}">{!! $result['text'] !!}</a>
                            <br/>
                            <span class="link">{{ $result['url'] }}</span>
                        </li>
                        <hr />
                    @endforeach
                    @else 
                        Nothing found
                    @endif
                </ul>
            </main>

            @include('layouts.sidebars.interactive-services-sidebar')

        </div>
    </section>
    {{-- Committees ends --}}

@stop