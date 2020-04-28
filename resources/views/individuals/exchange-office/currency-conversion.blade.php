@extends('layouts.master')
@section('page-title')
    @lang('individuals/exchange-office/currency-conversion.1')
@stop

@section('breadcrumb')

    <span class="small-paragraph">@lang('individuals/exchange-office/currency-conversion.2')</span>

@stop

@section('meta')

    <title>@lang('individuals/exchange-office/currency-conversion.3')</title>

    {{-- Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/individuals/exchange-office/currency-conversion.css') }}">

@stop

@section('content')

    @include('layouts.breadcrumb')

    {{-- Committees starts --}}
    <section class="desctop container currency-conversion my-5">
        <div class="row">

            <main class="col-xl-9 main-hero">
                <div class="row conversion-card">
                    <div class="col-lg-4">
                        <label for="amount">@lang('individuals/exchange-office/currency-conversion.4')</label>
                        <input type="text" id="amount" value="100">
                    </div>
                    <div class="col-lg-4 d-flex justify-content-between align-items-center mt-4 mt-lg-0">
                        <div class="from">
                            <label for="from">@lang('individuals/exchange-office/currency-conversion.5')</label>
                            <div id="from-cont">
                                <select id="from">
                                    @foreach($rates as $rate)
                                        <option value="{{ $rate->ccy }}">
                                            {{ $rate->ccy }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="icon">
                            <br/>
                            <div id="switcher">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20.004" height="16" viewBox="0 0 20.004 16"><path d="M-6499,15855l4-4v3h15v2h-15v3Zm16-7h-15v-2h15v-3l4,4-4,4Z" transform="translate(6499.002 -15843.001)"/></svg>
                            </div>
                        </div>
                        <div class="to">
                            <label for="to">To</label>
                            <div id="to-cont">
                                <input type="text" id="to" value="UZS" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <label>@lang('individuals/exchange-office/currency-conversion.6')</label>
                        <div id="result"></div>
                    </div>
                    {{-- <div class="col-12">
                        <p class="mt-4">
                            @lang('individuals/exchange-office/currency-conversion.7')
                        </p>
                    </div> --}}
                    <div class="col-12 mt-5">
                        <div class="d-flex flex-wrap justify-content-between align-items-center">
                            <h3>@lang('individuals/exchange-office/currency-conversion.8')</h3>
                            <ul class="nav nav-tabs rate-switcher mt-4 mt-lg-0" id="myTab" role="tablist">
                                <li>
                                    <a class="item active" id="kdb-tab" data-toggle="tab" href="#kdb" role="tab" aria-controls="kdb" aria-selected="true">KDB</a>
                                </li>
                                <li>
                                    <a class="item" id="cbu-tab" data-toggle="tab" href="#cbu" role="tab" aria-controls="cbu" aria-selected="false">CBU</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content mt-4" id="myTabContent">
                            <div class="tab-pane fade show active" id="kdb" role="tabpanel" aria-labelledby="kdb-tab">
                                <table class="d-none d-lg-block">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            @foreach ($rates as $rate)
                                                <th>
                                                    {{ $rate->ccy }}
                                                </th>
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>
                                                <img src="{{ asset('img/individuals/exchange-office/currency-conversion/UZS.svg') }}" class="pr-2">
                                                @lang('individuals/exchange-office/currency-conversion.9')
                                            </th>
                                            @foreach ($rates as $rate)
                                                <td>
                                                    {{ $rate->buy . ' / ' . $rate->sell }}
                                                </td>
                                            @endforeach
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="d-lg-none">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>
                                                <img src="{{ asset('img/individuals/exchange-office/currency-conversion/UZS.svg') }}" class="pr-2">
                                                @lang('individuals/exchange-office/currency-conversion.10')
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($rates as $rate)
                                            <tr>
                                                <th>
                                                    {{ $rate->ccy }}
                                                </th>
                                                <td>
                                                    {{ $rate->buy . ' / ' . $rate->sell }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="cbu" role="tabpanel" aria-labelledby="cbu-tab">
                                <table class="d-none d-lg-block">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            @foreach ( getCbuRates() as $rate )
                                                <th>
                                                    {{ $rate['Ccy'] }}
                                                </th>
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>
                                                <img src="{{ asset('img/individuals/exchange-office/currency-conversion/UZS.svg') }}" class="pr-2">
                                                @lang('individuals/exchange-office/currency-conversion.11')
                                            </th>
                                            @foreach ( getCbuRates() as $rate )
                                                <td>
                                                    {{ $rate['Rate'] }}
                                                </td>
                                            @endforeach
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="d-lg-none">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>
                                                <img src="{{ asset('img/individuals/exchange-office/currency-conversion/UZS.svg') }}" class="pr-2">
                                                @lang('individuals/exchange-office/currency-conversion.12')
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( getCbuRates() as $rate )
                                            <tr>
                                                <th>
                                                    {{ $rate['Ccy'] }}
                                                </th>
                                                <td>
                                                    {{ $rate['Rate'] }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            @include('layouts.sidebars.individuals-sidebar')

        </div>
    </section>
    {{-- Committees ends --}}

@stop

@section('scripts')

    <script>

        let rates = "{{ $ratesArr }}";

        rates = JSON.parse( rates.split('&quot;').join('"') );

    </script>

    {{-- jQuery Number JS --}}
    <script src="{{ asset('js/jquery.number.min.js') }}"></script>

    {{-- Credit Calculator JS --}}
    <script src="{{ asset('js/currency-converter.js') }}"></script>

@stop
