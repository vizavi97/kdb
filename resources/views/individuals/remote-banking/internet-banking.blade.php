@extends('layouts.master')
@section('page-title')
    @lang('individuals/remote-banking/internet-banking.1')
@stop

@section('breadcrumb')

    <span class="small-paragraph">@lang('individuals/remote-banking/internet-banking.2')</span>

@stop

@section('meta')

    <title>@lang('individuals/remote-banking/internet-banking.3')</title>

    {{-- Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/individuals/remote-banking/internet-banking.css') }}">

@stop

@section('content')

    @include('layouts.breadcrumb')

    {{-- Committees starts --}}
    <section class="desctop container internet-banking mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <h2 class="heading-2">@lang('individuals/remote-banking/internet-banking.4')</h2>
                <p class="small-paragraph">
                    @lang('individuals/remote-banking/internet-banking.5')
                </p>
                <div class="row">
                    <div class="col-md-4">
                        <div class="simple-card text-center">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="34.379" height="40.369" viewBox="0 0 34.379 40.369"><path d="M4848.38,18280.555a2.97,2.97,0,0,1-.569-.055,3.5,3.5,0,0,1-.39-.105,25.541,25.541,0,0,1-9.543-5.648,20.359,20.359,0,0,1-4.881-7.6c-1.972-5.355-1.858-11.24-1.766-15.969v-.074c.021-.447.032-.846.037-1.252a4.281,4.281,0,0,1,4.028-4.193,16.6,16.6,0,0,0,11.3-4.762l.023-.023a2.584,2.584,0,0,1,3.514,0l.023.023a16.613,16.613,0,0,0,11.3,4.762,4.274,4.274,0,0,1,4.028,4.193c.01.49.025.926.037,1.252l0,.033v.037c.087,4.73.2,10.619-1.781,15.969a20.261,20.261,0,0,1-4.876,7.6,25.373,25.373,0,0,1-9.534,5.646,2.424,2.424,0,0,1-.39.111A2.97,2.97,0,0,1,4848.38,18280.555Zm0-30.248a10.062,10.062,0,1,0,10.061,10.066A10.075,10.075,0,0,0,4848.38,18250.307Zm0,17.756a7.691,7.691,0,1,1,7.689-7.693A7.7,7.7,0,0,1,4848.38,18268.063Zm-3.888-7.758a1.185,1.185,0,0,0-.837,2.023l2.105,2.105a1.192,1.192,0,0,0,1.675,0l5.51-5.516a1.166,1.166,0,0,0,.348-.832,1.187,1.187,0,0,0-2.022-.842l-4.675,4.676-1.266-1.271A1.176,1.176,0,0,0,4844.492,18260.3Z" transform="translate(-4831.19 -18240.186)" fill="#ffc409"/></svg>
                                <p class="small-paragraph mt-2">
                                    @lang('individuals/remote-banking/internet-banking.6')
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-4 mt-md-0">
                        <div class="simple-card text-center">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="32.39" height="41.932" viewBox="0 0 32.39 41.932"><path d="M4831.762,18103.871a4.061,4.061,0,0,1-4.039-4.031v-33.871a4.057,4.057,0,0,1,4.039-4.029H4848.8v7.232a4.634,4.634,0,0,0,4.648,4.635h6.665v26.033a4.06,4.06,0,0,1-4.035,4.031Zm2.14-6.766a.891.891,0,0,0,.886.887h18.26a.891.891,0,0,0,.886-.887.881.881,0,0,0-.877-.891h-18.269A.892.892,0,0,0,4833.9,18097.105Zm5.18-9.641a4.841,4.841,0,0,0,3.839,4.734v1.244a.888.888,0,0,0,1.776,0v-1.186a4.842,4.842,0,0,0-.777-9.619,3.063,3.063,0,1,1,3.063-3.062.886.886,0,1,0,1.772,0,4.851,4.851,0,0,0-4.058-4.779v-.99a.888.888,0,0,0-1.776,0v1.021a4.839,4.839,0,0,0,1,9.574,3.063,3.063,0,1,1-3.062,3.063.888.888,0,0,0-1.776,0Zm14.367-15.43a2.856,2.856,0,0,1-2.872-2.863v-5.865l8.319,8.729Z" transform="translate(-4827.723 -18061.939)" fill="#ffc409"/></svg>
                                <p class="small-paragraph mt-2">
                                    @lang('individuals/remote-banking/internet-banking.7')
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-4 mt-md-0">
                        <div class="simple-card text-center">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="37.738" height="44.002" viewBox="0 0 37.738 44.002"><path d="M2899.762,19097l-7.165-7.309a4.181,4.181,0,0,1,0-5.822l7.165-7.3a2.855,2.855,0,0,1,2.02-1.012c1.044,0,2.1.852,2.1,2.746v2.215a17.332,17.332,0,0,0,3.151.289,17.833,17.833,0,0,0,14.421-7.471,1.251,1.251,0,0,1,1.487-.439,1.293,1.293,0,0,1,.789,1.354,21.463,21.463,0,0,1-19.848,19v2.014c0,1.9-1.053,2.746-2.1,2.746A2.877,2.877,0,0,1,2899.762,19097Zm-12.965-17.887a1.294,1.294,0,0,1-.789-1.354,21.465,21.465,0,0,1,19.848-19v-2.012c0-1.9,1.053-2.746,2.1-2.746a2.856,2.856,0,0,1,2.02,1.012l7.165,7.3a4.176,4.176,0,0,1,0,5.818l-7.165,7.313a2.877,2.877,0,0,1-2.02,1.006,1.935,1.935,0,0,1-1.686-1,3.381,3.381,0,0,1-.412-1.748v-2.215a17.51,17.51,0,0,0-3.151-.287,17.822,17.822,0,0,0-14.421,7.471,1.257,1.257,0,0,1-1.019.529A1.236,1.236,0,0,1,2886.8,19079.111Z" transform="translate(-2885.999 -19054.002)" fill="#ffc409"/></svg>
                                <p class="small-paragraph mt-2">
                                    @lang('individuals/remote-banking/internet-banking.8')
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <h2 class="heading-2 mt-5">@lang('individuals/remote-banking/internet-banking.9')</h2>
                <p class="small-paragraph">
                    @lang('individuals/remote-banking/internet-banking.10')
                </p>
                <p class="small-paragraph">
                    @lang('individuals/remote-banking/internet-banking.11')
                </p>
                <h3 class="heading-3 my-4">@lang('individuals/remote-banking/internet-banking.12')</h3>
                <ul class="right-icon">
                    <li>
                        <p>@lang('individuals/remote-banking/internet-banking.13')</p>
                    </li>
                    <li>
                        <p>@lang('individuals/remote-banking/internet-banking.14')</p>
                    </li>
                </ul>
                <div class="email mt-4">
                    <span class="small-paragraph email-card-title">
                        <strong>@lang('individuals/remote-banking/internet-banking.15')</strong>
                    </span>
                    <div class="row">
                        @foreach ($emails as $email)
                            <div class="col-md-4 mt-4">
                                <a class="email-card" href="mailto:{{ $email->email }}">
                                    {{ $email->email }}
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </main>

            @include('layouts.sidebars.individuals-sidebar')

        </div>
    </section>
    {{-- Committees ends --}}

@stop