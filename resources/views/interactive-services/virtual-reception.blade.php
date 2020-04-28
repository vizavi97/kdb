@extends('layouts.master')

@section('page-title')
    @lang('interactive-services/virtual-reception.1')
@stop

@section('breadcrumb')
    <span class="small-paragraph">@lang('interactive-services/virtual-reception.2')</span>
@stop

@section('meta')

    <title>@lang('interactive-services/virtual-reception.3')</title>

    {{-- Custom CSS --}} 
    <link rel="stylesheet" type="text/css" href="{{ asset('css/interactive-services/virtual-reception.css') }}">

@stop

@section('content')

    @include('layouts.breadcrumb')

    {{-- Committees starts --}}
    <section class="desctop container virtual-reception mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <div class="first-parent">
                    <div class="row"> 
                        <div class="col-lg-6 item-parent">
                            <div class="item">
                                <h2 class="heading-2">@lang('interactive-services/virtual-reception.4')</h2>
                                <form action="{{ route('vertual-reception.post', app()->getLocale()) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <fieldset>
                                        <label class="text" for="name">
                                            @lang('interactive-services/virtual-reception.5')
                                        </label>
                                        <input type="text" id="name" name="name" placeholder="@lang('interactive-services/virtual-reception.6')" class="main-input" required>
                                    </fieldset>
                                    <fieldset>
                                        <label class="text" for="entity">
                                            @lang('interactive-services/virtual-reception.7')
                                        </label>
                                        <select id="entity"  class="main-input" name="entity" required>
                                            <option class="main-input">@lang('interactive-services/virtual-reception.8')</option>
                                            <option class="main-input" value="Individual">@lang('interactive-services/virtual-reception.9')</option>
                                            <option class="main-input" value="Legal entity">@lang('interactive-services/virtual-reception.10')</option>
                                            <option class="main-input" value="Private entrepreneur">@lang('interactive-services/virtual-reception.11')</option>
                                        </select>
                                    </fieldset>
                                    <fieldset>
                                        <label class="text" for="gender">
                                            @lang('interactive-services/virtual-reception.12')
                                        </label>
                                        <select id="gender"  class="main-input" name="gender" required>
                                            <option class="main-input">@lang('interactive-services/virtual-reception.13')</option>
                                            <option class="main-input" value="Male">@lang('interactive-services/virtual-reception.14')</option>
                                            <option class="main-input" value="Female">@lang('interactive-services/virtual-reception.15')</option>
                                        </select>
                                    </fieldset>
                                    <fieldset>
                                        <label class="text" for="country">
                                            @lang('interactive-services/virtual-reception.16')
                                        </label>
                                        <select id="country"  class="main-input" name="country" required>
                                            <option class="main-input">@lang('interactive-services/virtual-reception.17')</option>
                                            <option class="main-input" value="Uzbekistan">@lang('interactive-services/virtual-reception.18')</option>
                                        </select>
                                    </fieldset>
                                    <fieldset>
                                        <label class="text" for="region">
                                            @lang('interactive-services/virtual-reception.19')
                                        </label>
                                        <select id="region"  class="main-input" name="region" required>
                                            <option class="region-option">@lang('interactive-services/virtual-reception.20')</option>
                                            <option class="region-option" value="Andijan region">@lang('interactive-services/virtual-reception.21')</option>
                                            <option class="region-option" value="Bukhara region">@lang('interactive-services/virtual-reception.22')</option>
                                            <option class="region-option" value="Fergana region">@lang('interactive-services/virtual-reception.23')</option>
                                            <option class="region-option" value="Jizzakh region">@lang('interactive-services/virtual-reception.24')</option>
                                            <option class="region-option" value="Namangan region">@lang('interactive-services/virtual-reception.25')</option>
                                            <option class="region-option" value="Navoiy region">@lang('interactive-services/virtual-reception.26')</option>
                                            <option class="region-option" value="Kashkadarya region">@lang('interactive-services/virtual-reception.27')</option>
                                            <option class="region-option" value="The Republic of Karakalpakstan">@lang('interactive-services/virtual-reception.28')</option>
                                            <option class="region-option" value="Samarkand region">@lang('interactive-services/virtual-reception.29')</option>
                                            <option class="region-option" value="Syrdarya region">@lang('interactive-services/virtual-reception.30')</option>
                                            <option class="region-option" value="Surkhandarya region">@lang('interactive-services/virtual-reception.31')</option>
                                            <option class="region-option" value="Tashkent region">@lang('interactive-services/virtual-reception.32')</option>
                                            <option class="region-option" value="Toshkent city">@lang('interactive-services/virtual-reception.33')</option>
                                            <option class="region-option" value="Khorezm region">@lang('interactive-services/virtual-reception.34')</option>
                                        </select>
                                    </fieldset>
                                    <fieldset>
                                        <label class="text" for="district">
                                            @lang('interactive-services/virtual-reception.35')
                                        </label>
                                        <select id="district"  class="main-input" name="district" required></select>
                                    </fieldset>
                                    <fieldset>
                                        <label class="text" for="mailing-address">
                                            @lang('interactive-services/virtual-reception.36')
                                        </label>
                                        <input type="text" id="mailing-address" name="mailing_address" class="main-input" required>
                                    </fieldset>
                                    <fieldset>
                                        <label class="text" for="email">
                                            @lang('interactive-services/virtual-reception.37')
                                        </label>
                                        <input type="email" id="email" name="email" placeholder="@lang('interactive-services/virtual-reception.38')" class="main-input" required>
                                    </fieldset>
                                    <fieldset>
                                        <label class="text" for="phone-number">
                                            @lang('interactive-services/virtual-reception.39')
                                        </label>
                                        <input type="text" id="phone-number" name="phone" placeholder="@lang('interactive-services/virtual-reception.40')" class="main-input" required>
                                    </fieldset>
                                    <fieldset>
                                        <label class="text" for="topic-appeal">
                                            @lang('interactive-services/virtual-reception.41')
                                        </label>
                                        <select id="topic-appeal"  class="main-input" name="appeal_topic" required>
                                            <option class="main-input">@lang('interactive-services/virtual-reception.42')</option>
                                            <option class="main-input" value="Account administration">@lang('interactive-services/virtual-reception.43')</option>
                                            <option class="main-input" value="Transfers in national currency">@lang('interactive-services/virtual-reception.44')</option>
                                            <option class="main-input" value="Transfers in foreign currency">@lang('interactive-services/virtual-reception.45')</option>
                                            <option class="main-input" value="Cash service">@lang('interactive-services/virtual-reception.46')</option>
                                            <option class="main-input" value="Office-net">@lang('interactive-services/virtual-reception.47')</option>
                                            <option class="main-input" value="Internet banking">@lang('interactive-services/virtual-reception.48')</option>
                                            <option class="main-input" value="SMS informing">@lang('interactive-services/virtual-reception.49')</option>
                                            <option class="main-input" value="Export-import operations">@lang('interactive-services/virtual-reception.50')</option>
                                            <option class="main-input" value="Trade finance">@lang('interactive-services/virtual-reception.51')</option>
                                            <option class="main-input" value="Treasury operations">@lang('interactive-services/virtual-reception.52')</option>
                                            <option class="main-input" value="Loans">@lang('interactive-services/virtual-reception.53')</option>
                                            <option class="main-input" value="Plastic card in UZS">@lang('interactive-services/virtual-reception.54')</option>
                                            <option class="main-input" value="Plastic card in foreign currency">@lang('interactive-services/virtual-reception.55')</option>
                                            <option class="main-input" value="Other">@lang('interactive-services/virtual-reception.56')</option>
                                        </select>
                                    </fieldset>
                                    <fieldset>
                                        <label class="text" for="type-appeal">
                                            @lang('interactive-services/virtual-reception.57')
                                        </label>
                                        <select id="type-appeal"  class="main-input" name="appeal_type" required>
                                            <option class="main-input">@lang('interactive-services/virtual-reception.58')</option>
                                            <option class="main-input" value="Make an appointment">@lang('interactive-services/virtual-reception.59')</option>
                                            <option class="main-input" value="Suggestion">@lang('interactive-services/virtual-reception.60')</option>
                                            <option class="main-input" value="Application">@lang('interactive-services/virtual-reception.61')</option>
                                            <option class="main-input" value="Complaint">@lang('interactive-services/virtual-reception.62')</option>
                                            <option class="main-input" value="Information request">@lang('interactive-services/virtual-reception.63')</option>
                                        </select>
                                    </fieldset>
                                    <fieldset>
                                        <label class="text" for="subject-appeal">
                                            @lang('interactive-services/virtual-reception.64') 
                                        </label>
                                        <input type="text" id="subject-appeal" name="appeal_subject" placeholder="@lang('interactive-services/virtual-reception.65')" class="main-input" required>
                                    </fieldset>
                                    <fieldset>
                                        <label class="text" for="text-appeal">
                                            @lang('interactive-services/virtual-reception.66')
                                        </label>
                                        <textarea id="text-appeal" name="appeal_text" class="main-input" placeholder="@lang('interactive-services/virtual-reception.67')" rows="5" required></textarea>
                                    </fieldset>
                                    <fieldset>
                                        <label class="text">
                                            @lang('interactive-services/virtual-reception.68')
                                        </label>
                                        <div class="file-upload">
                                            <div class="file-select">
                                                <div class="file-select-button" id="fileName">@lang('interactive-services/virtual-reception.69')</div>
                                                <div class="file-select-name" id="noFile">@lang('interactive-services/virtual-reception.70')</div>
                                                <input type="file" name="attachment" id="chooseFile">
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <div class="checkbox-parent">
                                            <input type="checkbox" id="oneyear" name="privacy_status" checked required>
                                            <label for="oneyear"><span class="pl-3">@lang('interactive-services/virtual-reception.71') <a href="{{ route('press-center.copy-right', app()->getLocale()) }}">@lang('interactive-services/virtual-reception.72')</a> @lang('interactive-services/virtual-reception.73')</span></label>
                                        </div>
                                    </fieldset>
                                    <button class="send-button" type="submit">
                                        @lang('interactive-services/virtual-reception.74')
                                    </button>
                                    <div class="custom-alert warning mt-4">
                                        <p class="text">
                                            @lang('interactive-services/virtual-reception.75')
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 item-parent">
                            <div class="item">
                                <h2 class="heading-2">@lang('interactive-services/virtual-reception.76')</h2>
                                <p class="helper-text">
                                    @lang('interactive-services/virtual-reception.77')
                                </p>
                                <p class="helper-text">
                                    @lang('interactive-services/virtual-reception.78')
                                </p>
                                <form action="{{ route('check-app-status.post', app()->getLocale()) }}" method="POST"> 
                                    @csrf
                                    <fieldset>
                                        <label class="text" for="registration-number">
                                            @lang('interactive-services/virtual-reception.79')
                                        </label>
                                        <input type="text" id="registration-number" name="application_number" placeholder="@lang('interactive-services/virtual-reception.80')" class="main-input">
                                    </fieldset>

                                    @if(Session::has('status'))
                                        <p class="small-paragraph">
                                            <strong>

                                                @if(Session::get('status') == "NOT CHECKED")
                                                    <span style="color: var(--color-secondary-500)">Status: </span>
                                                    @lang('interactive-services/virtual-reception.81')
                                                @elseif (Session::get('status') == "CHECKED")
                                                    <span style="color: var(--color-secondary-500)">Status: </span>
                                                    @lang('interactive-services/virtual-reception.82')
                                                @elseif (Session::get('status') == "NOT FOUND")
                                                @lang('interactive-services/virtual-reception.83')
                                                @endif
                                            </strong>
                                        </p>
                                    @endif 
                                    
                                    <button type="submit">@lang('interactive-services/virtual-reception.84')</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            @include('layouts.sidebars.interactive-services-sidebar')

        </div>
    </section>
    {{-- Committees ends --}}

    @if(Session::has('success'))
        <div class="success-message">
            <div class="global-modal-window" style="display: flex;">
                <div class="global-modal-content">
                    <div class="modal-close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/>
                        </svg>
                    </div>
                    <div class="modal-content-inner">
                        <p class="small-paragraph mb-0">
                            @lang('interactive-services/virtual-reception.85') <strong>{{ Session::get('success') }}</strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @endif

@stop

@section('scripts') 

    {{-- File Uploader JS --}}
    <script src="{{ asset('js/file-uploader.js') }}"></script>

    {{-- Modal JS --}}
    <script src="{{ asset('js/modal.js') }}"></script>

    {{-- District JS --}}
    <script src="{{ asset('js/district.js') }}"></script>

@stop