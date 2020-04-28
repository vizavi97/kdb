@extends('layouts.master')

@section('page-title')
    @lang('investors/share-information.1')
@stop

@section('breadcrumb')
    <span class="small-paragraph">@lang('investors/share-information.2')</span>
@stop

@section('meta')

    <title>@lang('investors/share-information.3')</title>

    {{-- Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/investors/share-information.css') }}">

@stop

@section('content')

    @include('layouts.breadcrumb')

    {{-- Committees starts --}}
    <section class="desctop container share-information mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <h2 class="heading-2 mb-4">@lang('investors/share-information.4')</h2>
                <p class="small-paragraph mb-4">
                    @lang('investors/share-information.5') <strong class="money-numbers">@lang('investors/share-information.6')</strong> @lang('investors/share-information.7')
                </p>
                <h3 class="heading-3 mb-4">@lang('investors/share-information.8')</h3>
                <div class="mb-5">
                    <div class="row item no-gutters">
                        <div class="col-5">
                            <p class="main">
                                @lang('investors/share-information.9')
                            </p>
                        </div>
                        <div class="col-7">
                            <p class="small-paragraph">
                                @lang('investors/share-information.10')
                            </p>
                        </div>
                    </div>
                    <div class="row item no-gutters">
                        <div class="col-5">
                            <p class="main">
                                @lang('investors/share-information.11')
                            </p>
                        </div>
                        <div class="col-7">
                            <p class="small-paragraph">
                                @lang('investors/share-information.12')
                            </p>
                        </div>
                    </div>
                    <div class="row item no-gutters">
                        <div class="col-5">
                            <p class="main">
                                @lang('investors/share-information.13')
                            </p>
                        </div>
                        <div class="col-7">
                            <p class="small-paragraph">
                                @lang('investors/share-information.14')
                            </p>
                        </div>
                    </div>
                    <div class="row item no-gutters">
                        <div class="col-5">
                            <p class="main">
                                @lang('investors/share-information.15')
                            </p>
                        </div>
                        <div class="col-7">
                            <p class="small-paragraph">
                                9 0000 2700
                            </p>
                        </div>
                    </div>
                </div>
                <h3 class="heading-3 mb-4">@lang('investors/share-information.16')</h3>
                <table>
                    <tr>
                        <th>@lang('investors/share-information.17')</th>
                        <th class="text-center">@lang('investors/share-information.18')</th>
                        <th class="text-center">@lang('investors/share-information.19')</th>
                        <th>@lang('investors/share-information.20')</th>
                        <th>@lang('investors/share-information.21')</th>
                    </tr>
                    <tr>
                        <td>1997</td>
                        <td>@lang('investors/share-information.22')</td>
                        <td>+9,000</td>
                        <td>51,050</td>
                        <td>459,450,000</td>
                    </tr>
                    <tr>
                        <th colspan="2">@lang('investors/share-information.24')</th>
                        <th colspan="2">9,000</th>
                        <th>4,550,903,300</th>
                    </tr>
                    <tr>
                        <td>2007</td>
                        <td>@lang('investors/share-information.22')</td>
                        <td>+80,146</td>
                        <td>51,050</td>
                        <td>4,091,453,300</td>
                    </tr>
                    <tr>
                        <th colspan="2">@lang('investors/share-information.24')</th>
                        <th colspan="2">89,146</th>
                        <th>4,550,903,300</th>
                    </tr>
                    <tr>
                        <td>2008</td>
                        <td>@lang('investors/share-information.22')</td>
                        <td>+69,924</td>
                        <td>51,050</td>
                        <td>3,627,613,000</td>
                    </tr>
                    <tr>
                        <th colspan="2">@lang('investors/share-information.24')</th>
                        <th colspan="2">159,070</th>
                        <th>8,178,516,300</th>
                    </tr>
                    <tr>
                        <td>2010</td>
                        <td>@lang('investors/share-information.23')</td>
                        <td>0</td>
                        <td>148,630</td>
                        <td>15,464,057,800</td>
                    </tr>
                    <tr>
                        <th colspan="2">@lang('investors/share-information.24')</th>
                        <th colspan="2">159,070</th>
                        <th>23,642,574,100</th>
                    </tr>
                    <tr>
                        <td>2013</td>
                        <td>@lang('investors/share-information.22')</td>
                        <td>+102,996</td>
                        <td>148,630</td>
                        <td>15,308,215,480</td>
                    </tr>
                    <tr>
                        <th colspan="2">@lang('investors/share-information.24')</th>
                        <th colspan="2">262,066</th>
                        <th>38,950,869,580</th>
                    </tr>
                    <tr>
                        <td>2015</td>
                        <td>@lang('investors/share-information.24_1') (1:1000)</td>
                        <td>+262,066,000</td>
                        <td>148,63</td>
                        <td>38,950,869,580</td>
                    </tr>
                    <tr>
                        <th colspan="2">@lang('investors/share-information.24')</th>
                        <th colspan="2">262,066,000</th>
                        <th>38,950,869,580</th>
                    </tr>
                    <tr>
                        <td>2018</td>
                        <td>@lang('investors/share-information.22')</td>
                        <td>+419,305,600</td>
                        <td>148,63</td>
                        <td>62,321,391,328</td>
                    </tr>
                    <tr>
                        <th colspan="2">@lang('investors/share-information.24')</th>
                        <th colspan="2">681,371,600</th>
                        <th>101,272,260,908</th>
                    </tr>
                </table>
            </main>

            @include('layouts.sidebars.investors-sidebar')

        </div>
    </section>
    {{-- Committees ends --}}

@stop