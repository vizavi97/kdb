@extends('layouts.master')

@section('page-title')

    @lang('about-us/contact-us.contact-us')

@stop

@section('breadcrumb')

<span class="small-paragraph">@lang('about-us/contact-us.contact-us-2')</span>

@stop

@section('meta')

<title>@lang('about-us/contact-us.kdb-contact')</title>
{{-- Custom CSS --}}
<link rel="stylesheet" type="text/css" href="{{ asset('css/about-us/contact-us.css') }}">

@stop

@section('content')

@include('layouts.breadcrumb')

{{-- Committees starts --}}
<section class="desctop container contact-us">
    <div class="row">

        <main class="col-xl-9 main-hero mb-5">
            <div class="client-services">
                <h2 class="heading-2">
                    @lang('about-us/contact-us.client-services')
                </h2>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active mr-0" id="corporates-tab" data-toggle="tab" href="#corporates"
                            role="tab" aria-controls="corporates" aria-selected="true">
                            @lang('about-us/contact-us.corporates')
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mr-0" id="individuals-tab" data-toggle="tab" href="#individuals" role="tab"
                            aria-controls="individuals" aria-selected="false">
                            @lang('about-us/contact-us.individuals')
                        </a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="corporates" role="tabpanel"
                        aria-labelledby="corporates-tab">
                        <div class="row parent no-gutters">
                            <div class="col-lg-3">
                                <img src="{{ Voyager::image( $corporates->image ) }}">
                            </div>
                            <div class="col-lg-3 p-4">
                                <h5 class="category-name">@lang('about-us/contact-us.full-name')</h5>
                                <h6 class="heading-blue">
                                    {{ $corporates->getTranslatedAttribute('worker_1_name', app()->getLocale(), 'fallbackLocale') }}
                                </h6>
                                <h6 class="heading-blue">
                                    {{ $corporates->getTranslatedAttribute('worker_2_name', app()->getLocale(), 'fallbackLocale') }}
                                </h6>
                                <h6 class="heading-blue">
                                    {{ $corporates->getTranslatedAttribute('worker_3_name', app()->getLocale(), 'fallbackLocale') }}
                                </h6>
                            </div>
                            <div class="col-lg-3 p-4">
                                <h5 class="category-name">@lang('about-us/contact-us.phone-number')</h5>
                                <a href="tel:{{ $corporates->getTranslatedAttribute('worker_1_phone', app()->getLocale(), 'fallbackLocale') }}"
                                    class="link">
                                    {{ $corporates->getTranslatedAttribute('worker_1_phone', app()->getLocale(), 'fallbackLocale') }}
                                </a>
                                <a href="tel:{{ $corporates->getTranslatedAttribute('worker_2_phone', app()->getLocale(), 'fallbackLocale') }}"
                                    class="link">
                                    {{ $corporates->getTranslatedAttribute('worker_2_phone', app()->getLocale(), 'fallbackLocale') }}
                                </a>
                                <a href="tel:{{ $corporates->getTranslatedAttribute('worker_3_phone', app()->getLocale(), 'fallbackLocale') }}"
                                    class="link">
                                    {{ $corporates->getTranslatedAttribute('worker_3_phone', app()->getLocale(), 'fallbackLocale') }}
                                </a>
                            </div>
                            <div class="col-lg-3 p-4">
                                <h5 class="category-name">@lang('about-us/contact-us.e-mail')</h5>
                                <a href="mailto:{{ $corporates->getTranslatedAttribute('worker_1_email', app()->getLocale(), 'fallbackLocale') }}"
                                    class="link">
                                    {{ $corporates->getTranslatedAttribute('worker_1_email', app()->getLocale(), 'fallbackLocale') }}
                                </a>
                                <a href="mailto:{{ $corporates->getTranslatedAttribute('worker_2_email', app()->getLocale(), 'fallbackLocale') }}"
                                    class="link">
                                    {{ $corporates->getTranslatedAttribute('worker_2_email', app()->getLocale(), 'fallbackLocale') }}
                                </a>
                                <a href="mailto:{{ $corporates->getTranslatedAttribute('worker_3_email', app()->getLocale(), 'fallbackLocale') }}"
                                    class="link">
                                    {{ $corporates->getTranslatedAttribute('worker_3_email', app()->getLocale(), 'fallbackLocale') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="individuals" role="tabpanel" aria-labelledby="individuals-tab">
                        <div class="row parent no-gutters">
                            <div class="col-lg-3">
                                <img src="{{ Voyager::image( $individuals->image ) }}">
                            </div>
                            <div class="col-lg-3 p-4">
                                <h5 class="category-name">@lang('about-us/contact-us.full-name-2')</h5>
                                <h6 class="heading-blue">
                                    {{ $individuals->getTranslatedAttribute('worker_1_name', app()->getLocale(), 'fallbackLocale') }}
                                </h6>
                                <h6 class="heading-blue">
                                    {{ $individuals->getTranslatedAttribute('worker_2_name', app()->getLocale(), 'fallbackLocale') }}
                                </h6>
                                <h6 class="heading-blue">
                                    {{ $individuals->getTranslatedAttribute('worker_3_name', app()->getLocale(), 'fallbackLocale') }}
                                </h6>
                            </div>
                            <div class="col-lg-3 p-4">
                                <h5 class="category-name">@lang('about-us/contact-us.phone-number-2')</h5>
                                <a href="tel:{{ $individuals->getTranslatedAttribute('worker_1_phone', app()->getLocale(), 'fallbackLocale') }}"
                                    class="link">
                                    {{ $individuals->getTranslatedAttribute('worker_1_phone', app()->getLocale(), 'fallbackLocale') }}
                                </a>
                                <a href="tel:{{ $individuals->getTranslatedAttribute('worker_2_phone', app()->getLocale(), 'fallbackLocale') }}"
                                    class="link">
                                    {{ $individuals->getTranslatedAttribute('worker_2_phone', app()->getLocale(), 'fallbackLocale') }}
                                </a>
                                <a href="tel:{{ $individuals->getTranslatedAttribute('worker_3_phone', app()->getLocale(), 'fallbackLocale') }}"
                                    class="link">
                                    {{ $individuals->getTranslatedAttribute('worker_3_phone', app()->getLocale(), 'fallbackLocale') }}
                                </a>
                            </div>
                            <div class="col-lg-3 p-4">
                                <h5 class="category-name">@lang('about-us/contact-us.e-mail-2')</h5>
                                <a href="mailto:{{ $individuals->getTranslatedAttribute('worker_1_email', app()->getLocale(), 'fallbackLocale') }}"
                                    class="link">
                                    {{ $individuals->getTranslatedAttribute('worker_1_email', app()->getLocale(), 'fallbackLocale') }}
                                </a>
                                <a href="mailto:{{ $individuals->getTranslatedAttribute('worker_2_email', app()->getLocale(), 'fallbackLocale') }}"
                                    class="link">
                                    {{ $individuals->getTranslatedAttribute('worker_2_email', app()->getLocale(), 'fallbackLocale') }}
                                </a>
                                <a href="mailto:{{ $individuals->getTranslatedAttribute('worker_3_email', app()->getLocale(), 'fallbackLocale') }}"
                                    class="link">
                                    {{ $individuals->getTranslatedAttribute('worker_3_email', app()->getLocale(), 'fallbackLocale') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="client-services">
                <h2 class="heading-2">
                    @lang('about-us/contact-us.client-relationship')
                </h2>
                <div class="row parent no-gutters">
                    <div class="col-lg-3">
                        <img src="{{ Voyager::image( $crm->image ) }}">
                    </div>
                    <div class="col-lg-3 p-4">
                        <h5 class="category-name">@lang('about-us/contact-us.full-name-3')</h5>
                        <h6 class="heading-blue">
                            {{ $crm->getTranslatedAttribute('worker_1_name', app()->getLocale(), 'fallbackLocale') }}
                        </h6>
                        <h6 class="heading-blue">
                            {{ $crm->getTranslatedAttribute('worker_2_name', app()->getLocale(), 'fallbackLocale') }}
                        </h6>
                        <h6 class="heading-blue">
                            {{ $crm->getTranslatedAttribute('worker_3_name', app()->getLocale(), 'fallbackLocale') }}
                        </h6>
                    </div>
                    <div class="col-lg-3 p-4">
                        <h5 class="category-name">@lang('about-us/contact-us.phone-number-3')</h5>
                        <a href="tel:{{ $crm->getTranslatedAttribute('worker_1_phone', app()->getLocale(), 'fallbackLocale') }}"
                            class="link">
                            {{ $crm->getTranslatedAttribute('worker_1_phone', app()->getLocale(), 'fallbackLocale') }}
                        </a>
                        <a href="tel:{{ $crm->getTranslatedAttribute('worker_2_phone', app()->getLocale(), 'fallbackLocale') }}"
                            class="link">
                            {{ $crm->getTranslatedAttribute('worker_2_phone', app()->getLocale(), 'fallbackLocale') }}
                        </a>
                        <a href="tel:{{ $crm->getTranslatedAttribute('worker_3_phone', app()->getLocale(), 'fallbackLocale') }}"
                            class="link">
                            {{ $crm->getTranslatedAttribute('worker_3_phone', app()->getLocale(), 'fallbackLocale') }}
                        </a>
                    </div>
                    <div class="col-lg-3 p-4">
                        <h5 class="category-name">@lang('about-us/contact-us.e-mail-3')</h5>
                        <a href="mailto:{{ $crm->getTranslatedAttribute('worker_1_email', app()->getLocale(), 'fallbackLocale') }}"
                            class="link">
                            {{ $crm->getTranslatedAttribute('worker_1_email', app()->getLocale(), 'fallbackLocale') }}
                        </a>
                        <a href="mailto:{{ $crm->getTranslatedAttribute('worker_2_email', app()->getLocale(), 'fallbackLocale') }}"
                            class="link">
                            {{ $crm->getTranslatedAttribute('worker_2_email', app()->getLocale(), 'fallbackLocale') }}
                        </a>
                        <a href="mailto:{{ $crm->getTranslatedAttribute('worker_3_email', app()->getLocale(), 'fallbackLocale') }}"
                            class="link">
                            {{ $crm->getTranslatedAttribute('worker_3_email', app()->getLocale(), 'fallbackLocale') }}
                        </a>
                    </div>
                </div>
            </div>
            <div class="client-services">
                <h2 class="heading-2">
                    @lang('about-us/contact-us.human-resources')
                </h2>
                <div class="row parent no-gutters">
                    <div class="col-lg-3">
                        <img src="{{ Voyager::image( $hr->image ) }}">
                    </div>
                    <div class="col-lg-3 p-4">
                        <h5 class="category-name">@lang('about-us/contact-us.full-name-4')</h5>
                        <h6 class="heading-blue">
                            {{ $hr->getTranslatedAttribute('worker_1_name', app()->getLocale(), 'fallbackLocale') }}
                        </h6>
                        <h6 class="heading-blue">
                            {{ $hr->getTranslatedAttribute('worker_2_name', app()->getLocale(), 'fallbackLocale') }}
                        </h6>
                        <h6 class="heading-blue">
                            {{ $hr->getTranslatedAttribute('worker_3_name', app()->getLocale(), 'fallbackLocale') }}
                        </h6>
                    </div>
                    <div class="col-lg-3 p-4">
                        <h5 class="category-name">@lang('about-us/contact-us.phone-number-4')</h5>
                        <a href="tel:{{ $hr->getTranslatedAttribute('worker_1_phone', app()->getLocale(), 'fallbackLocale') }}"
                            class="link">
                            {{ $hr->getTranslatedAttribute('worker_1_phone', app()->getLocale(), 'fallbackLocale') }}
                        </a>
                        <a href="tel:{{ $hr->getTranslatedAttribute('worker_2_phone', app()->getLocale(), 'fallbackLocale') }}"
                            class="link">
                            {{ $hr->getTranslatedAttribute('worker_2_phone', app()->getLocale(), 'fallbackLocale') }}
                        </a>
                        <a href="tel:{{ $hr->getTranslatedAttribute('worker_3_phone', app()->getLocale(), 'fallbackLocale') }}"
                            class="link">
                            {{ $hr->getTranslatedAttribute('worker_3_phone', app()->getLocale(), 'fallbackLocale') }}
                        </a>
                    </div>
                    <div class="col-lg-3 p-4">
                        <h5 class="category-name">@lang('about-us/contact-us.e-mail-4')</h5>
                        <a href="mailto:{{ $hr->getTranslatedAttribute('worker_1_email', app()->getLocale(), 'fallbackLocale') }}"
                            class="link">
                            {{ $hr->getTranslatedAttribute('worker_1_email', app()->getLocale(), 'fallbackLocale') }}
                        </a>
                        <a href="mailto:{{ $hr->getTranslatedAttribute('worker_2_email', app()->getLocale(), 'fallbackLocale') }}"
                            class="link">
                            {{ $hr->getTranslatedAttribute('worker_2_email', app()->getLocale(), 'fallbackLocale') }}
                        </a>
                        <a href="mailto:{{ $hr->getTranslatedAttribute('worker_3_email', app()->getLocale(), 'fallbackLocale') }}"
                            class="link">
                            {{ $hr->getTranslatedAttribute('worker_3_email', app()->getLocale(), 'fallbackLocale') }}
                        </a>
                    </div>
                </div>
            </div>
            <div class="client-services">
                <h2 class="heading-2">
                    @lang('about-us/contact-us.general-information')
                </h2>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    @php $i = 1; @endphp
                    @foreach ($branches as $branch)
                        <li class="nav-item">
                            <a class="nav-link {{ $i == 1 ? 'active' : '' }} mr-0" id="{{ preg_replace("/[^A-Z]+/", "", $branch->address) }}-tab" data-toggle="tab" href="#{{ preg_replace("/[^A-Z]+/", "", $branch->address) }}"
                                role="tab" aria-controls="{{ preg_replace("/[^A-Z]+/", "", $branch->address) }}" aria-selected="{{ $i == 1 ? 'true' : 'false' }}">
                                {{ $branch->getTranslatedAttribute('name', app()->getLocale(), 'fallbackLocale') }}
                            </a>
                        </li>
                    @php $i++; @endphp
                    @endforeach
                </ul>
                <div class="tab-content" id="myTabContent">
                    @php $i = 1; @endphp
                    @foreach ($branches as $branch)
                        <div class="tab-pane fade {{ $i == 1 ? 'show active' : '' }}" id="{{ preg_replace("/[^A-Z]+/", "", $branch->address) }}" role="tabpanel"
                            aria-labelledby="{{ preg_replace("/[^A-Z]+/", "", $branch->address) }}-tab">
                            <div class="row parent no-gutters  general-information">
                                <div class="col-lg-4 col-md-6 mini-item first">
                                    <i class="fas fa-phone"></i>
                                    <div class="information">
                                        <h5>
                                            @lang('about-us/contact-us.phone-number-5')
                                        </h5>
                                        <a href="tel:+998711208000">
                                            {{ $branch->phone }}
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mini-item first">
                                    <i class="far fa-calendar-alt"></i>
                                    <div class="information">
                                        <h5>
                                            @lang('about-us/contact-us.working-hours')
                                        </h5>
                                        <p>
                                            {!! $branch->getTranslatedAttribute('working_hours', app()->getLocale(), 'fallbackLocale') !!}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mini-item first">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <div class="information">
                                        <h5>
                                            @lang('about-us/contact-us.address')
                                        </h5>
                                        <p>
                                            {{ $branch->getTranslatedAttribute('address', app()->getLocale(), 'fallbackLocale') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mini-item second">
                                    <i class="fas fa-phone-volume"></i>
                                    <div class="information">
                                        <h5>
                                            @lang('about-us/contact-us.hotline')
                                        </h5>
                                        <a href="tel:{{ $branch->hotline }}">
                                            {{ $branch->hotline }}
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mini-item second">
                                    <i class="fas fa-fax"></i>
                                    <div class="information">
                                        <h5>
                                            @lang('about-us/contact-us.fax')
                                        </h5>
                                        <a href="tel:{{ $branch->fax }}">
                                            {{ $branch->fax }}
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mini-item second">
                                    <i class="fas fa-envelope"></i>
                                    <div class="information">
                                        <h5>
                                            @lang('about-us/contact-us.mail-us')
                                        </h5>
                                        <a href="mailto:{{ $branch->email }}">
                                            {{ $branch->email }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @php $i++; @endphp
                    @endforeach
                </div>
            </div>
        </main>

        @include('layouts.sidebars.about-us-sidebar')

    </div>
</section>
{{-- Committees ends --}}

@stop

