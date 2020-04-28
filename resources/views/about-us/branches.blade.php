@extends('layouts.master')

@section('page-title')
  @lang('about-us/branches.branches')
@stop

@section('breadcrumb')

  <span class="small-paragraph">@lang('about-us/branches.branches-2')</span>

@stop

@section('meta')

  <title>@lang('about-us/branches.kdb-branches')</title>
  {{-- Custom CSS --}}
  <link rel="stylesheet" type="text/css" href="{{ asset('css/about-us/branches.css') }}">

@stop

@section('content')

@include('layouts.breadcrumb')

  {{-- Committees starts --}}
  <section class="desctop container branches">
    <div class="row">
      <main class="col-xl-9 main-hero mb-5">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="local-branches-tab" data-toggle="tab" href="#local-branches" role="tab" aria-controls="local-branches" aria-selected="true">
              @lang('about-us/branches.local-branches')
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#headquarter" role="tab" aria-controls="headquarter" aria-selected="false">
              @lang('about-us/branches.headquarter')
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="global-network-tab" data-toggle="tab" href="#global-network" role="tab" aria-controls="global-network" aria-selected="false">
              @lang('about-us/branches.global-network')
            </a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="local-branches" role="tabpanel" aria-labelledby="local-branches-tab">
            <div class="mt-4">

              @foreach ($branches as $branch)
                <div class="row parent no-gutters">
                  <div class="col-lg-3">
                    <div class="image-parent h-100">
                      <img src="{{ Voyager::image( $branch->image )}}" class="img-cover">
                    </div>
                  </div>
                  <div class="col-lg-3 space-1">
                      <h5 class="heading-black">{{ $branch->getTranslatedAttribute('name', app()->getLocale(), 'fallbackLocale') }}</h5>
                      <p><strong>@lang('about-us/branches.address')</strong> {{ $branch->getTranslatedAttribute('address', app()->getLocale(), 'fallbackLocale') }}</p>
                      <p><strong>@lang('about-us/branches.phone')</strong> {{ $branch->phone }}</p>
                      <p><strong>@lang('about-us/branches.e-mail')</strong> {{ $branch->email }}</p>
                    </div>
                  <div class="col-lg-3 space-1">
                    <h5 class="heading-black">@lang('about-us/branches.working-hours')</h5>
                    <p>{!! $branch->getTranslatedAttribute('working_hours', app()->getLocale(), 'fallbackLocale') !!}</p>
                    <p>
                      <strong>@lang('about-us/branches.day-off')</strong> 
                      {{ $branch->getTranslatedAttribute('day_off', app()->getLocale(), 'fallbackLocale') }}
                    </p>
                  </div>
                  <div class="col-lg-3 space-2">
                    <h5 class="heading-black">@lang('about-us/branches.day-off-2')</h5>
                    <p>{!! $branch->getTranslatedAttribute('exchange_hours', app()->getLocale(), 'fallbackLocale') !!}</p>
                    @if ($branch->exchnage_off)
                      <p>
                        <strong>@lang('about-us/branches.exchange-dffice')</strong> 
                        {{ $branch->getTranslatedAttribute('exchange_off', app()->getLocale(), 'fallbackLocale') }}
                      </p>
                    @endif
                  </div>
                </div>
              @endforeach
              
            </div>
          </div>
          <div class="tab-pane fade" id="headquarter" role="tabpanel" aria-labelledby="headquarter-tab">
            <div class="row first-parent mt-4">
              <div class="col-lg-6 order-lg-1 order-2 helper-item">
                <h2 class="heading-2">@lang('about-us/branches.korea-development')</h2>
                <p class="paragraph">
                  @lang('about-us/branches.kdb-bank')
                </p>
                <p class="paragraph">
                  @lang('about-us/branches.as-korea')
                </p>
                <p class="paragraph">
                  @lang('about-us/branches.following-public')
                </p>
              </div>
              <div class="col-lg-6 order-lg-2 order-1">
                <img src="{{ asset('img/about-us/branches/2.1.png') }}" class=" img-1">
              </div>
            </div>
            <div class="row second-parent">
              <div class="col-12">
                <h3 class="heading-3">
                  @lang('about-us/branches.credit-rating')
                </h3>
              </div>
              <div class="col-md-4 item">
                <div class="box">
                  <img src="{{ asset('img/about-us/branches/2.2.png') }}">
                </div>
                <h6 class="heading-bold">
                  @lang('about-us/branches.fitch')
                </h6>
                <p class="paragraph">
                  @lang('about-us/branches.as-of')
                </p>
              </div>
              <div class="col-md-4 item">
                <div class="box">
                  <img src="{{ asset('img/about-us/branches/2.3.png') }}">
                </div>
                <h6 class="heading-bold">
                  @lang('about-us/branches.moody-aa2')
                </h6>
                <p class="paragraph">
                  @lang('about-us/branches.as-of-dec')
                </p>
              </div>
              <div class="col-md-4 item">
                <div class="box">
                  <img src="{{ asset('img/about-us/branches/2.4.png') }}">
                </div>
                <h6 class="heading-bold">
                  @lang('about-us/branches.sp-aa')
                </h6>
                <p class="paragraph">
                  @lang('about-us/branches.as-of-dec-31')
                </p>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="global-network" role="tabpanel" aria-labelledby="global-network-tab">
            <img src="{{ asset('img/about-us/branches/3.1.png') }}" class="d-block mt-4">
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