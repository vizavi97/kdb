@extends('layouts.master')

@section('page-title')

    @lang('about-us/careers.job-pportunities')

@stop

@section('breadcrumb')
    <span class="small-paragraph">@lang('about-us/careers.job-opportunities-2')</span>
@stop

@section('meta')

    <title>@lang('about-us/careers.kdb-job')</title>

    {{-- Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/about-us/careers.css') }}">

@stop

@section('content')

    @include('layouts.breadcrumb')

    {{-- Committees starts --}}
    <section class="desctop container job-vacancies">
        <div class="row">
            
            <main class="col-md-9 main-hero mb-5">

                <div class="row">
                    <div class="col-lg-7">
                        <img src="{{ asset('img/about-us/careers/1.jpg') }}" class="img-1">
                        <p class="paragraph space-1">
                            @lang('about-us/careers.professionalism')
                        </p>
                        <div class="item modal-open" modal-id="modal1">
                            @lang('about-us/careers.why-kdb')
                        </div>
                        <div class="item modal-open" modal-id="modal2">
                            @lang('about-us/careers.eligibility')
                        </div>
                        <div class="item modal-open" modal-id="modal3">
                            @lang('about-us/careers.requirements')
                        </div>
                        <div class="item modal-open" modal-id="modal4">
                            @lang('about-us/careers.available')
                        </div>
                        <div class="item modal-open" modal-id="modal5">
                            @lang('about-us/careers.frequently-asked')
                        </div>
                    </div>
                    <div class="col-lg-5 space-2">
                        <img src="{{ asset('img/about-us/careers/2.jpg') }}" class="woman">
                    </div>
                </div>

            </main>

            @include('layouts.sidebars.about-us-sidebar')

            {{-- Modal 1 Start --}}
            <div class="global-modal-window flex-center" id="modal1">
                <div class="global-modal-content">
                    <div class="modal-close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/>
                        </svg>
                    </div>
                    <div class="modal-content-inner">
                        <!-- Why KDB Starts -->
                        <div class="why-kdb w-100">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="heading-2 text-center">
                                        @lang('about-us/careers.why-kdb-2')
                                    </h2>
                                    <ul class="right-icon">
                                        <li>
                                            <p>
                                                @lang('about-us/careers.we-offer')
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                @lang('about-us/careers.we-offer-2')
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                @lang('about-us/careers.working-with')
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                @lang('about-us/careers.development-is')
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                @lang('about-us/careers.an-internal')
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Why KDB Ends -->
                    </div>
                </div>
            </div>
            {{-- Modal 1 End --}}

            {{-- Modal 2 Start --}}
            <div class="global-modal-window flex-center" id="modal2">
                <div class="global-modal-content">
                    <div class="modal-close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/>
                        </svg>
                    </div>
                    <div class="modal-content-inner">
                        <!-- Why KDB Starts -->
                        <div class="why-kdb w-100">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="heading-2 text-center">@lang('about-us/careers.eligibility-2')</h2>
                                    <ul class="right-icon">
                                        <li>
                                            <p>
                                                @lang('about-us/careers.university-degree')
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                @lang('about-us/careers.have-at')
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                @lang('about-us/careers.high-communication')
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                @lang('about-us/careers.good-time')
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                @lang('about-us/careers.experience-in')
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                @lang('about-us/careers.fluency-in')
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Why KDB Ends -->
                    </div>
                </div>
            </div>
            {{-- Modal 2 End --}}

            {{-- Modal 3 Start --}}
            <div class="global-modal-window flex-center" id="modal3">
                <div class="global-modal-content">
                    <div class="modal-close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/>
                        </svg>
                    </div>
                    <div class="modal-content-inner">
                        <!-- Why KDB Starts -->
                        <div class="requirments why-kdb">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="heading-2 text-center">
                                        @lang('about-us/careers.requirements')
                                    </h2>
                                    <p class="bold-paragraph">
                                        @lang('about-us/careers.kdb-bank')
                                    </p>
                                    <ul class="right-icon">
                                        <li>
                                            <p>
                                                @lang('about-us/careers.university-degree')
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                @lang('about-us/careers.basic-knowledge')
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                @lang('about-us/careers.professionally-fluent')
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                @lang('about-us/careers.ability-to')
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                @lang('about-us/careers.good-client')
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                @lang('about-us/careers.good-client-2')
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                @lang('about-us/careers.prior-experience')
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                @lang('about-us/careers.excellent-skills')
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                @lang('about-us/careers.adapt-easily')
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                @lang('about-us/careers.attention-to')
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                @lang('about-us/careers.a-strong')
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                @lang('about-us/careers.strong-communication')
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Why KDB Ends -->
                    </div>
                </div>
            </div>
            {{-- Modal 3 End --}}

            {{-- Modal 4 Start --}}
            <div class="global-modal-window flex-center" id="modal4">
                <div class="global-modal-content">
                    <div class="modal-close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/>
                        </svg>
                    </div>
                    <div class="modal-content-inner">
                        <!-- Avilabel Vacancies Starts -->
                        <div class="availabel-vacancies">
                            <div class="row mb-4 mb-lg-0">
                                <div class="col-12">
                                    <h2 class="heading-2 text-center">
                                        @lang('about-us/careers.available-vacancies')
                                    </h2>
                                </div>
                            </div>

                            @foreach ($jobs as $job)
                                <div class="row box">
                                    <div class="col-lg-2 col-md-3">
                                        <img src="{{ asset('img/about-us/careers/3.jpg') }}" class="d-none d-lg-block">
                                    </div>
                                    <div class="col-lg-10 col-md-9">
                                        <h6 class="heading-6">{{ $job->getTranslatedAttribute('department', app()->getLocale(), 'fallbackLocale') }}</h6>
                                        <h6 class="heading-blue">{{ $job->getTranslatedAttribute('position', app()->getLocale(), 'fallbackLocale') }}</h6>
                                        <p class="main-paragraph">{!! $job->getTranslatedAttribute('desc', app()->getLocale(), 'fallbackLocale') !!}</p>
                                        <a href="mailto:{{ $job->email }}" class="apply-btn">@lang('about-us/careers.apply-via')</a>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <!-- Avilabel Vacancies Ends -->
                    </div>
                </div>
            </div>
            {{-- Modal 4 End --}}

            {{-- Modal 5 Start --}}
            <div class="global-modal-window flex-center" id="modal5">
                <div class="global-modal-content">
                    <div class="modal-close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/>
                        </svg>
                    </div>
                    <div class="modal-content-inner">
                        <!-- Asked Questions starts -->
                        <section class="committees asked-questions w-100">
                            <div class="row">
                                <main class="col-12 main-hero">
                                    <h2 class="heading-2 text-center">
                                        @lang('about-us/careers.frequently-asked')
                                    </h2>
                                    <div class="shadow">
                                        <button class="collapse-button" type="button" data-toggle="collapse" data-target="#firs-item" aria-expanded="false" aria-controls="firs-item">
                                        <span>@lang('about-us/careers.working-conditions')</span>
                                        <div>
                                            <i class="fas fa-chevron-down"></i>
                                        </div>
                                        </button>
                                        <div class="collapse" id="firs-item">
                                            <div class="card card-body">
                                                <p class="small-paragraph">
                                                    @lang('about-us/careers.kdb-bank-2')
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shadow">
                                        <button class="collapse-button" type="button" data-toggle="collapse" data-target="#second-item" aria-expanded="false" aria-controls="second-item">
                                        <span>@lang('about-us/careers.what-are')</span>
                                        <div>
                                            <i class="fas fa-chevron-down"></i>
                                        </div>
                                        </button>
                                        <div class="collapse" id="second-item">
                                            <div class="card card-body">
                                                <p class="small-paragraph">
                                                    @lang('about-us/careers.kdb-bank-3')
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shadow">
                                        <button class="collapse-button" type="button" data-toggle="collapse" data-target="#thiord-item" aria-expanded="false" aria-controls="thiord-item">
                                        <span>@lang('about-us/careers.about-learning')</span>
                                        <div>
                                            <i class="fas fa-chevron-down"></i>
                                        </div>
                                        </button>
                                        <div class="collapse" id="thiord-item">
                                            <div class="card card-body">
                                                <p class="small-paragraph">
                                                    @lang('about-us/careers.kdb-bank-4')
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shadow">
                                        <button class="collapse-button" type="button" data-toggle="collapse" data-target="#fourth-item" aria-expanded="false" aria-controls="fourth-item">
                                        <span>@lang('about-us/careers.what-steps')</span>
                                        <div>
                                            <i class="fas fa-chevron-down"></i>
                                        </div>
                                        </button>
                                        <div class="collapse" id="fourth-item">
                                            <div class="card card-body">
                                                <p class="small-paragraph">
                                                    @lang('about-us/careers.kdb-bank-5')
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </main>
                            </div>
                        </section>
                        <!-- Asked Questions ends -->
                    </div>
                </div>
            </div>
            {{-- Modal 5 End --}}

        </div>
    </section>
    {{-- Committees ends --}}

@stop

@section('scripts')

    <!-- Modal js -->
    <script src="{{ asset('js/modal.js') }}"></script>

@stop