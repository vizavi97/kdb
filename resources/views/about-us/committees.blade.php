@extends('layouts.master')

@section('page-title')

    @lang('about-us/committees.committees')

@stop

@section('breadcrumb')
    <span class="small-paragraph">@lang('about-us/committees.committees-2')</span>
@stop

@section('meta')

    <title>@lang('about-us/committees.kdb-committees')</title>

    {{-- Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/about-us/committees.css') }}">

@stop

@section('content')

    @include('layouts.breadcrumb')

    {{-- Committees starts --}}
    <section class="desctop container committees">
        <div class="row">
            <main class="col-xl-9 main-hero mb-5">
                <div class="shadow">
                    <button class="collapse-button" type="button" data-toggle="collapse" data-target="#firs-item" aria-expanded="false" aria-controls="firs-item">
                    <span>@lang('about-us/committees.general-meeting')</span>
                    <div>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    </button>
                    <div class="collapse" id="firs-item">
                        <div class="card card-body">
                            <p class="small-paragraph">
                                @lang('about-us/committees.the-general')
                            </p>
                        </div>
                    </div>
                </div>
                <div class="shadow">
                    <button class="collapse-button" type="button" data-toggle="collapse" data-target="#second-item" aria-expanded="false" aria-controls="second-item">
                    <span>@lang('about-us/committees.counting-commission')</span>
                    <div>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    </button>
                    <div class="collapse" id="second-item">
                        <div class="card card-body">
                            <p class="small-paragraph">
                                @lang('about-us/committees.the-role')
                            </p>
                        </div>
                    </div>
                </div>
                <div class="shadow">
                    <button class="collapse-button" type="button" data-toggle="collapse" data-target="#third-item" aria-expanded="false" aria-controls="third-item">
                    <span>@lang('about-us/committees.supervisory-board')</span>
                    <div>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    </button>
                    <div class="collapse" id="third-item">
                        <div class="card card-body">
                            <p class="small-paragraph">
                                @lang('about-us/committees.the-supervisory')
                            </p>
                        </div>
                    </div>
                </div>
                <div class="shadow">
                    <button class="collapse-button" type="button" data-toggle="collapse" data-target="#fourth-item" aria-expanded="false" aria-controls="fourth-item">
                    <span>@lang('about-us/committees.revision-commission')</span>
                    <div>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    </button>
                    <div class="collapse" id="fourth-item">
                        <div class="card card-body">
                            <p class="small-paragraph">
                                @lang('about-us/committees.the-revision')
                            </p>
                        </div>
                    </div>
                </div>
                <div class="shadow">
                    <button class="collapse-button" type="button" data-toggle="collapse" data-target="#fifth-item" aria-expanded="false" aria-controls="fifth-item">
                    <span>@lang('about-us/committees.management-board')</span>
                    <div>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    </button>
                    <div class="collapse" id="fifth-item">
                        <div class="card card-body">
                            <p class="small-paragraph">
                                @lang('about-us/committees.the-direction')
                            </p>
                        </div>
                    </div>
                </div>
                <div class="shadow">
                    <button class="collapse-button" type="button" data-toggle="collapse" data-target="#sixth-item" aria-expanded="false" aria-controls="sixth-item">
                    <span>@lang('about-us/committees.alco-committee')</span>
                    <div>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    </button>
                    <div class="collapse" id="sixth-item">
                        <div class="card card-body">
                            <p class="small-paragraph">
                                @lang('about-us/committees.asset-liability')
                            </p>
                        </div>
                    </div>
                </div>
                <div class="shadow">
                    <button class="collapse-button" type="button" data-toggle="collapse" data-target="#seventh-item" aria-expanded="false" aria-controls="seventh-item">
                    <span>@lang('about-us/committees.risk-management')</span>
                    <div>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    </button>
                    <div class="collapse" id="seventh-item">
                        <div class="card card-body">
                            <p class="small-paragraph">
                                @lang('about-us/committees.risk-management-2')
                            </p>
                        </div>
                    </div>
                </div>
                <div class="shadow">
                    <button class="collapse-button" type="button" data-toggle="collapse" data-target="#eightth-item" aria-expanded="false" aria-controls="eightth-item">
                    <span>@lang('about-us/committees.credit-committee')</span>
                    <div>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    </button>
                    <div class="collapse" id="eightth-item">
                        <div class="card card-body">
                            <p class="small-paragraph">
                                @lang('about-us/committees.credit-committee-2') 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="shadow">
                    <button class="collapse-button" type="button" data-toggle="collapse" data-target="#nineth-item" aria-expanded="false" aria-controls="nineth-item">
                    <span>@lang('about-us/committees.liquidity-management') </span>
                    <div>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    </button>
                    <div class="collapse" id="nineth-item">
                        <div class="card card-body">
                            <p class="small-paragraph">
                                @lang('about-us/committees.the-liquidity')
                            </p>
                        </div>
                    </div>
                </div>
                <div class="shadow">
                    <button class="collapse-button" type="button" data-toggle="collapse" data-target="#ten-item" aria-expanded="false" aria-controls="ten-item">
                    <span>@lang('about-us/committees.human-resources')</span>
                    <div>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    </button>
                    <div class="collapse" id="ten-item">
                        <div class="card card-body">
                            <p class="small-paragraph">
                                @lang('about-us/committees.the-human')
                            </p>
                        </div>
                    </div>
                </div>
                <div class="shadow">
                    <button class="collapse-button" type="button" data-toggle="collapse" data-target="#elevn-item" aria-expanded="false" aria-controls="elevn-item">
                    <span>@lang('about-us/committees.procurement-committee')</span>
                    <div>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    </button>
                    <div class="collapse" id="elevn-item">
                        <div class="card card-body">
                            <p class="small-paragraph">
                                @lang('about-us/committees.the-main')
                            </p>
                        </div>
                    </div>
                </div>
                <div class="shadow">
                    <button class="collapse-button" type="button" data-toggle="collapse" data-target="#twelwe-item" aria-expanded="false" aria-controls="twelwe-item">
                    <span>@lang('about-us/committees.audit-committee')</span>
                    <div>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    </button>
                    <div class="collapse" id="twelwe-item">
                        <div class="card card-body">
                            <p class="small-paragraph">
                                @lang('about-us/committees.audit-committee-2')
                            </p>
                            <p class="small-paragraph">
                                @lang('about-us/committees.the-main-2')
                            </p>
                            <ul class="right-icon">
                                <li>
                                    <p>@lang('about-us/committees.studying-reports')</p>
                                </li>
                                <li>
                                    <p>@lang('about-us/committees.studying-quarterly')</p>
                                </li>
                                <li>
                                    <p>@lang('about-us/committees.rendering-assistance')</p>
                                </li>
                                <li>
                                    <p>@lang('about-us/committees.rendering-assistance-2')</p>
                                </li>
                                <li>
                                    <p>@lang('about-us/committees.coordination-of')</p>
                                </li>
                                <li>
                                    <p>@lang('about-us/committees.consideration-of-2')</p>
                                </li>
                                <li>
                                    <p>@lang('about-us/committees.control-over')</p>
                                </li>
                                {{-- <li>
                                    <p>safeguarding the independence of the Internal Audit and barring of interference by members of Managing Board and other departments heads to the activity of Internal Audit as well as to the content and scope of the audit.</p>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </main>

            @include('layouts.sidebars.about-us-sidebar')

        </div>
    </section>
    {{-- Committees ends --}}

@stop

@section('scripts')

    {{-- BootStrap --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

@stop