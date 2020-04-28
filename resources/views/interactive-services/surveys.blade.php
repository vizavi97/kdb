@extends('layouts.master')

@section('page-title')
    @lang('interactive-services/surveys.1')
@stop

@section('breadcrumb')
    <span class="small-paragraph">@lang('interactive-services/surveys.2')</span>
@stop

@section('meta')

    <title>@lang('interactive-services/surveys.3')</title>

    {{-- Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/interactive-services/surveys.css') }}">

@stop

@section('content')

    @include('layouts.breadcrumb')

    {{-- Committees starts --}}
    <section class="desctop container surveys mt-5">
        <div class="row">
             
            <main class="col-xl-9 main-hero mb-5">
                @foreach($surveys as $survey)
                    @if(in_array($survey->id, $userVoteIds))
                        <div class="box">
                            <h3 class="heading-3">{{ $survey->getTranslatedAttribute('question', $locale, 'fallbackLocale') }}</h3>
                            @foreach($orders as $order)
                                @if($survey['answer_' . $order])
                                    <div class="answer">
                                        <div class="overlay" style="width: {{ round($survey['answer_' . $order . '_votes'] / $survey->all_votes * 100, 0) . '%' }}"></div>
                                        <div class="text">{{ $survey->getTranslatedAttribute('answer_' . $order, $locale, 'fallbackLocale') }}</div>
                                        <div class="percentage">{{ $survey['answer_' . $order . '_votes'] . ' (' . round($survey['answer_' . $order . '_votes'] / $survey->all_votes * 100, 0) . '%)' }}</div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    @else
                        <div class="box">
                            <form action="{{ route('interactive-services.post-survey', app()->getLocale()) }}" method="POST" class="col-12">
                                @csrf
                                <input type="hidden" name="question_id" value="{{ $survey->id }}">
                                <h3 class="heading-3">{{ $survey->getTranslatedAttribute('question', $locale, 'fallbackLocale') }}</h3>
                                @foreach($orders as $order)
                                    @if($survey['answer_' . $order])
                                        <div class="input-parent">
                                            <input type="radio" id="answer-{{ $order . '-' . $survey->id }}" name="answer" value="{{ $survey->getTranslatedAttribute('answer_' . $order, $locale, 'fallbackLocale') }}">
                                            <label for="answer-{{ $order . '-' . $survey->id }}">
                                                {{ $survey->getTranslatedAttribute('answer_' . $order, $locale, 'fallbackLocale') }}
                                            </label>
                                        </div>
                                    @endif
                                @endforeach
                                <button type="submit">@lang('interactive-services/surveys.4')</button>
                            </form>
                        </div>
                    @endif
                @endforeach
            </main>

            @include('layouts.sidebars.interactive-services-sidebar')

        </div>
    </section>
    {{-- Committees ends --}}

@stop