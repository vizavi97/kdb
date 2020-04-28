{{-- Nav one starts --}}
<nav class="nav-one container-fluid">
    <div class="row no-gutters m-0 flex-justify-between">
        <div class="logo flex-center">
            <a href="{{ route('home', app()->getLocale()) }}">
                <img src="{{ asset('img/navbar/KDB-logo.svg') }}" alt="KDB Bank Logo">
            </a>
        </div>
        <div class="flex-align-center">
            <div class="icons">{{--
                <a href="{{ route('interactive-services.virtual-reception', app()->getLocale()) }}" class="pr-4">
                    <img src="{{ asset('img/navbar/call-center-icon.svg') }}" alt="call center icon" width="17px" heigh="auto">
                </a> --}}
                <a href="{{ route('interactive-services.virtual-reception', app()->getLocale()) }}" class="pr-4">
                    <img src="{{ asset('img/navbar/message-icon.svg') }}" alt="massage icon" width="18px" height="auto">
                </a>
                <div class="allow-speech">
                    <div>
                        <img src="{{ asset('img/navbar/volume-icon.svg') }}" alt="volume icon" width="auto"
                             height="16px">
                    </div>

                    {{-- Language Switcher Starts --}}
                    <div class="pop-up">
                        <div class="checkbox-parent">
                            <input type="checkbox" id="allow-speech">
                            <label for="allow-speech"><span class="pl-2">@lang('layouts/nav.turn-on')</span></label>
                        </div>
                    </div>
                    {{-- Language Switcher Ends --}}

                </div>
                <div class="resize-text">
                    <div>
                        <img src="{{ asset('img/navbar/eye-icon.svg') }}" alt="eye icon" width="20px" height="auto">
                    </div>

                    {{-- Language Switcher Starts --}}
                    <div class="pop-up">
                        <input type="range" id="resize-text" min="16" max="24" value="16" step="1">
                    </div>
                    {{-- Language Switcher Ends --}}

                </div>
                <img src="{{ asset('img/navbar/search-icon.svg') }}" alt="search icon" width="18px" height="auto"
                     id="search-open">
                <div class="lang-menu">
                    <div>
                        <img src="{{ asset('img/navbar/' . app()->getLocale() . '.svg') }}" width="auto" height="10px">
                        <img src="{{ asset('img/navbar/caret-down.svg') }}" width="auto" height="5px">
                    </div>

                    {{-- Language Switcher Starts --}}
                    <div class="pop-up-lang-menu">
                        <a href="{{ url('/uz' . substr(Request::path(), 2)) }}">
                            <img src="{{ asset('img/navbar/uz.svg') }}" width="auto" height="10px">
                        </a>
                        <a href="{{ url('/ru' . substr(Request::path(), 2)) }}">
                            <img src="{{ asset('img/navbar/ru.svg') }}" width="auto" height="10px">
                        </a>
                        <a href="{{ url('/en' . substr(Request::path(), 2)) }}">
                            <img src="{{ asset('img/navbar/en.svg') }}" width="auto" height="10px">
                        </a>
                    </div>
                    {{-- Language Switcher Ends --}}

                </div>
            </div>
            <a class="phone-number" href="tel:+998781208080"><span>(+99878)</span>120-80-00</a>
        </div>
    </div>
</nav>
<!-- Nav one ends -->

<!-- Nav two starts -->
<nav class="nav-two container-fluid px-0">
    <div class="nav-two-inner flex-justify-between">
        <div class="d-flex align-items-center">
            <div>

                {{-- Menu Icon Start --}}
                <span class="open-menu-button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="12" viewBox="0 0 18 12"><path
                            d="M3,18H21V16H3Zm0-5H21V11H3ZM3,6V8H21V6Z" transform="translate(-3 -6)"/></svg>
                </span>
            {{-- Menu Icon End --}}

            <!-- gamburber mega menu starts -->
                <div class="gamburger-mega-menu">
                    <div class="row m-0">
                        <div class="col-md-4">
                            <div class="gamburger-menu-logo">
                                <a href="{{ route('home', app()->getLocale())  }}">
                                    <img src="{{ asset('img/navbar/KDB-logo.svg') }}" alt="KDB bank logo">
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="https://ibank.kdb.uz/" class="internet-banking-mobile"
                       target="_blank">@lang('layouts/nav.internet-banking')</a>
                    <ul class="row">
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-12 mb-md-5 mb-sm-2">
                                    <!-- corporates menu -->
                                    <li class="mega-menu-inner">
                                        <a class="mega-menu-header" data-toggle="collapse" href="#corporates-collapse"
                                           role="button" aria-expanded="false" aria-controls="corporates-collapse">
                                            @lang('layouts/nav.corporates')
                                            <i class="fas fa-caret-down"></i>
                                        </a>
                                        <div class="mega-menu-callapse collapse" id="corporates-collapse">
                                            <div class="drop-body card card-body">
                                                <a class="drop-item"
                                                   href="{{ route('corporates.crm', app()->getLocale()) }}">@lang('layouts/nav.client-relatioship')</a>
                                                <a class="drop-item"
                                                   href="{{ route('corporates.account-opening', app()->getLocale()) }}">@lang('layouts/nav.account-opening')</a>
                                                <a class="drop-item"
                                                   href="{{ route('corporates.payments-and-cash-management', app()->getLocale()) }}">@lang('layouts/nav.payments-cash')</a>
                                                <a class="drop-item"
                                                   href="{{ route('corporates.deposits', app()->getLocale()) }}">@lang('layouts/nav.deposits')</a>
                                                <a class="drop-item"
                                                   href="{{ route('corporates.remote-banking', app()->getLocale()) }}">@lang('layouts/nav.digital-banking')</a>
                                                <a class="drop-item"
                                                   href="{{ route('corporates.credit', app()->getLocale()) }}">@lang('layouts/nav.credit')</a>
                                                <a class="drop-item"
                                                   href="{{ route('corporates.trade-finance', app()->getLocale()) }}">@lang('layouts/nav.trade-finance')</a>
                                                <a class="drop-item"
                                                   href="{{ route('corporates.export-import', app()->getLocale()) }}">@lang('layouts/nav.export-import')</a>
                                                <a class="drop-item"
                                                   href="{{ route('corporates.treasury', app()->getLocale()) }}">@lang('layouts/nav.treasury')</a>
                                                <a class="drop-item"
                                                   href="{{ route('corporates.correspondent-banks', app()->getLocale()) }}">@lang('layouts/nav.correspondent-banks')</a>
                                                <a class="drop-item"
                                                   href="{{ route('corporates.local-cards', app()->getLocale()) }}">@lang('layouts/nav.local-cards')</a>
                                                <a class="drop-item"
                                                   href="{{ route('corporates.international-cards', app()->getLocale()) }}">@lang('layouts/nav.international-cards')</a>
                                                <a class="drop-item"
                                                   href="{{ route('corporates.local-terminals', app()->getLocale()) }}">@lang('layouts/nav.acquiring-services')</a>
                                                <a class="drop-item"
                                                   href="{{ route('corporates.cciapm', app()->getLocale()) }}">@lang('layouts/nav.cciapm')</a>
                                                <a class="drop-item"
                                                   href="{{ route('corporates.bank-tariffs', app()->getLocale()) }}">@lang('layouts/nav.bank-tariffs')</a>
                                            </div>
                                        </div>
                                    </li>
                                </div>
                                <div class="col-12 mb-md-5 mb-sm-2">
                                    <!-- individuals menu -->
                                    <li class="mega-menu-inner">
                                        <a class="mega-menu-header" data-toggle="collapse" href="#individuals-collapse"
                                           role="button" aria-expanded="false" aria-controls="individuals-collapse">
                                            @lang('layouts/nav.individuals')
                                            <i class="fas fa-caret-down"></i>
                                        </a>
                                        <div class="mega-menu-callapse collapse" id="individuals-collapse">
                                            <div class="drop-body card card-body">
                                                <a class="drop-item"
                                                   href="{{ route('individuals.account-opening', app()->getLocale()) }}">@lang('layouts/nav.account-opening-2')</a>
                                                <a class="drop-item"
                                                   href="{{ route('individuals.payments-and-transfers', app()->getLocale()) }}">@lang('layouts/nav.payments-transfers')</a>
                                                <a class="drop-item"
                                                   href="{{ route('individuals.remote-banking.internet-banking', app()->getLocale()) }}">@lang('layouts/nav.digital-banking-2')</a>
                                                <a class="drop-item"
                                                   href="{{ route('individuals.deposits', app()->getLocale()) }}">@lang('layouts/nav.deposits-2')</a>
                                                <a class="drop-item"
                                                   href="{{ route('individuals.credit', app()->getLocale()) }}">@lang('layouts/nav.credit-2')</a>
                                                <a class="drop-item"
                                                   href="{{ route('individuals.local-cards', app()->getLocale()) }}">@lang('layouts/nav.local-cards-2')</a>
                                                <a class="drop-item"
                                                   href="{{ route('individuals.international-cards', app()->getLocale()) }}">@lang('layouts/nav.international-cards-2')</a>
                                                <a class="drop-item"
                                                   href="{{ route('individuals.exchange-office', app()->getLocale()) }}">@lang('layouts/nav.exchange-office')</a>
                                                <a class="drop-item"
                                                   href="{{ route('individuals.bank-tariffs', app()->getLocale()) }}">@lang('layouts/nav.bank-tariffs-2')</a>
                                            </div>
                                        </div>
                                    </li>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-12 mb-md-5 mb-sm-2">
                                    <!-- investors menu -->
                                    <li class="mega-menu-inner">
                                        <a class="mega-menu-header" data-toggle="collapse" href="#investors-collapse"
                                           role="button" aria-expanded="false" aria-controls="investors-collapse">
                                            @lang('layouts/nav.investors')
                                            <i class="fas fa-caret-down"></i>
                                        </a>
                                        <div class="mega-menu-callapse collapse" id="investors-collapse">
                                            <div class="drop-body card card-body">
                                                <a class="drop-item"
                                                   href="{{ route('investors.share-information', app()->getLocale()) }}">@lang('layouts/nav.share-information')</a>
                                                <a class="drop-item"
                                                   href="{{ route('investors.voting-results', app()->getLocale()) }}">@lang('layouts/nav.voting-results')</a>
                                                <a class="drop-item"
                                                   href="{{ route('investors.information-on-gsm', app()->getLocale()) }}">@lang('layouts/nav.information-on')</a>
                                                <a class="drop-item"
                                                   href="{{ route('investors.substantial-facts', app()->getLocale()) }}">@lang('layouts/nav.substantial-facts')</a>
                                                <a class="drop-item"
                                                   href="{{ route('investors.affiliate-personas', app()->getLocale()) }}">@lang('layouts/nav.affiliate-personas')</a>
                                                <a class="drop-item"
                                                   href="{{ route('investors.audit-reports', app()->getLocale()) }}">@lang('layouts/nav.audit-reports')</a>
                                                <a class="drop-item"
                                                   href="{{ route('investors.financial-statements', app()->getLocale()) }}">@lang('layouts/nav.financial-statements')</a>
                                            </div>
                                        </div>
                                    </li>
                                </div>
                                <div class="col-12 mb-md-5 mb-sm-2">
                                    <!-- interactive service menu -->
                                    <li class="mega-menu-inner">
                                        <a class="mega-menu-header" data-toggle="collapse"
                                           href="#interactive-service-collapse" role="button" aria-expanded="false"
                                           aria-controls="interactive-service-collapse">
                                            @lang('layouts/nav.interactive-services')
                                            <i class="fas fa-caret-down"></i>
                                        </a>
                                        <div class="mega-menu-callapse collapse" id="interactive-service-collapse">
                                            <div class="drop-body card card-body">
                                                <a class="drop-item"
                                                   href="{{ route('interactive-services.account-opening', app()->getLocale()) }}">@lang('layouts/nav.account-opening')</a>
                                                <a class="drop-item"
                                                   href="{{ route('interactive-services.virtual-reception', app()->getLocale()) }}">@lang('layouts/nav.virtual-reception')</a>
                                                <a class="drop-item"
                                                   href="{{ route('interactive-services.exchange-rates', app()->getLocale()) }}">@lang('layouts/nav.exchange-rates')</a>
                                                <a class="drop-item"
                                                   href="{{ route('interactive-services.calculators', app()->getLocale()) }}">@lang('layouts/nav.calculators')</a>
                                                <a class="drop-item"
                                                   href="{{ route('interactive-services.sample-forms', app()->getLocale()) }}">@lang('layouts/nav.sample-forms')</a>
                                                <a class="drop-item"
                                                   href="{{ route('interactive-services.surveys', app()->getLocale()) }}">@lang('layouts/nav.surveys')</a>
                                                <a class="drop-item"
                                                   href="{{ route('interactive-services.bank-regulations', app()->getLocale()) }}">@lang('layouts/nav.banking-regulations')</a>
                                                <a class="drop-item"
                                                   href="{{ route('interactive-services.subscription-for-banks-materials', app()->getLocale()) }}">@lang('layouts/nav.subscription-for')</a>
                                                <a class="drop-item"
                                                   href="{{ route('interactive-services.national-symbols', app()->getLocale()) }}">@lang('layouts/nav.national-symbols')</a>
                                                <a class="drop-item"
                                                   href="{{ route('interactive-services.usefull-links', app()->getLocale()) }}">@lang('layouts/nav.useful-links')</a>
                                            </div>
                                        </div>
                                    </li>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-12 mb-md-5 mb-sm-2">
                                    <!-- press center menu -->
                                    <li class="mega-menu-inner">
                                        <a class="mega-menu-header" data-toggle="collapse" href="#press-center-collapse"
                                           role="button" aria-expanded="false" aria-controls="press-center-collapse">
                                            @lang('layouts/nav.press-center')
                                            <i class="fas fa-caret-down"></i>
                                        </a>
                                        <div class="mega-menu-callapse collapse" id="press-center-collapse">
                                            <div class="drop-body card card-body">
                                                <a class="drop-item"
                                                   href="{{ route('press-center.news', app()->getLocale()) }}">@lang('layouts/nav.news')</a>
                                                <a class="drop-item"
                                                   href="{{ route('press-center.gallery-category', app()->getLocale()) }}">@lang('layouts/nav.gallery')</a>
                                                <a class="drop-item"
                                                   href="{{ route('press-center.dividends', app()->getLocale()) }}">@lang('layouts/nav.dividends')</a>
                                                <a class="drop-item"
                                                   href="{{ route('press-center.procurement', app()->getLocale()) }}">@lang('layouts/nav.procurement')</a>
                                                <a class="drop-item"
                                                   href="{{ route('press-center.youth-union', app()->getLocale()) }}">@lang('layouts/nav.youth-union')</a>
                                                <a class="drop-item"
                                                   href="{{ route('press-center.copy-right', app()->getLocale()) }}">@lang('layouts/nav.terms-of')</a>
                                            </div>
                                        </div>
                                    </li>
                                </div>
                                <div class="col-12 mb-md-5 mb-sm-2">
                                    <!-- about us menu -->
                                    <li class="mega-menu-inner">
                                        <a class="mega-menu-header" data-toggle="collapse" href="#about-us-collapse"
                                           role="button" aria-expanded="false" aria-controls="about-us-collapse">
                                            @lang('layouts/nav.about-us')
                                            <i class="fas fa-caret-down"></i>
                                        </a>
                                        <div class="mega-menu-callapse collapse" id="about-us-collapse">
                                            <div class="drop-body card card-body">
                                                <a class="drop-item"
                                                   href="{{ route('about-us.general-information', app()->getLocale()) }}">@lang('layouts/nav.general-information')</a>
                                                <a class="drop-item"
                                                   href="{{ route('about-us.history', app()->getLocale()) }}">@lang('layouts/nav.history')</a>
                                                <a class="drop-item"
                                                   href="{{ route('about-us.mission', app()->getLocale()) }}">@lang('layouts/nav.mission')</a>
                                                <a class="drop-item"
                                                   href="{{ route('about-us.message-from-chairman', app()->getLocale()) }}">@lang('layouts/nav.message-from')</a>
                                                <a class="drop-item"
                                                   href="{{ route('about-us.management-board', app()->getLocale()) }}">@lang('layouts/nav.management-board')</a>
                                                <a class="drop-item"
                                                   href="{{ route('about-us.organizational-structure', app()->getLocale()) }}">@lang('layouts/nav.organisation-structure')</a>
                                                <a class="drop-item"
                                                   href="{{ route('about-us.committees', app()->getLocale()) }}">@lang('layouts/nav.committees')</a>
                                                <a class="drop-item"
                                                   href="{{ route('about-us.branches', app()->getLocale()) }}">@lang('layouts/nav.branches')</a>
                                                <a class="drop-item"
                                                   href="{{ route('about-us.business-plan', app()->getLocale()) }}">@lang('layouts/nav.business-plan')</a>
                                                <a class="drop-item"
                                                   href="{{ route('about-us.banks-charter', app()->getLocale()) }}">@lang('layouts/nav.bank-charter')</a>
                                                <a class="drop-item"
                                                   href="{{ route('about-us.licenses-and-certificates', app()->getLocale()) }}">@lang('layouts/nav.licenses-certificates')</a>
                                                <a class="drop-item"
                                                   href="{{ route('about-us.awards', app()->getLocale()) }}">@lang('layouts/nav.awards')</a>
                                                <a class="drop-item"
                                                   href="{{ route('about-us.ratings', app()->getLocale()) }}">@lang('layouts/nav.ratings')</a>
                                                <a class="drop-item"
                                                   href="{{ route('about-us.careers', app()->getLocale()) }}">@lang('layouts/nav.job-opportunities')</a>
                                                <a class="drop-item"
                                                   href="{{ route('about-us.contact-us', app()->getLocale()) }}">@lang('layouts/nav.contact-us')</a>
                                            </div>
                                        </div>
                                    </li>
                                </div>
                            </div>
                        </div>
                    </ul>
                    <div class="close-menu-button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14">
                            <path d="M19,6.41,17.59,5,12,10.59,6.41,5,5,6.41,10.59,12,5,17.59,6.41,19,12,13.41,17.59,19,19,17.59,13.41,12Z"
                                  transform="translate(-5 -5)" fill="#fff"/>
                        </svg>
                    </div>
                </div>
                <!-- gamburber mega menu starts -->
            </div>

            <!-- mega menu desktop starts -->
            <ul class="navbar-menu-desctop d-xl-flex d-none">
                <!-- corporates menu -->
                <li class="nav-item">
                    <a class="nav-link {{ Str::contains(Route::currentRouteName(), 'corporates') ? 'active' : '' }}"
                       href="#">
                        @lang('layouts/nav.corporates-2')
                    </a>
                    <div class="drop-menu">
                        <div class="drop-item-box">
                            <a class="drop-item"
                               href="{{ route('corporates.crm', app()->getLocale()) }}">@lang('layouts/nav.client-relationship')</a>
                            <a class="drop-item"
                               href="{{ route('corporates.account-opening', app()->getLocale()) }}">@lang('layouts/nav.account-opening-3')</a>
                            <a class="drop-item"
                               href="{{ route('corporates.payments-and-cash-management', app()->getLocale()) }}">@lang('layouts/nav.payments-cash-2')</a>
                        </div>
                        <div class="drop-item-box">
                            <a class="drop-item"
                               href="{{ route('corporates.deposits', app()->getLocale()) }}">@lang('layouts/nav.deposits-3')</a>
                            <a class="drop-item"
                               href="{{ route('corporates.remote-banking', app()->getLocale()) }}">@lang('layouts/nav.digital-banking-3')</a>
                            <a class="drop-item"
                               href="{{ route('corporates.credit', app()->getLocale()) }}">@lang('layouts/nav.credit-3')</a>
                            <a class="drop-item"
                               href="{{ route('corporates.trade-finance', app()->getLocale()) }}">@lang('layouts/nav.trade-finance-2')</a>
                        </div>
                        <div class="drop-item-box">
                            <a class="drop-item"
                               href="{{ route('corporates.export-import', app()->getLocale()) }}">@lang('layouts/nav.export-import-2')</a>
                            <a class="drop-item"
                               href="{{ route('corporates.treasury', app()->getLocale()) }}">@lang('layouts/nav.treasury-2')</a>
                            <a class="drop-item"
                               href="{{ route('corporates.correspondent-banks', app()->getLocale()) }}">@lang('layouts/nav.correspondent-banks-2')</a>
                            <a class="drop-item"
                               href="{{ route('corporates.local-cards', app()->getLocale()) }}">@lang('layouts/nav.local-cards-3')</a>
                        </div>
                        <div class="drop-item-box">
                            <a class="drop-item"
                               href="{{ route('corporates.international-cards', app()->getLocale()) }}">@lang('layouts/nav.international-cards-3')</a>
                            <a class="drop-item"
                               href="{{ route('corporates.local-terminals', app()->getLocale()) }}">@lang('layouts/nav.acquiring-services-2')</a>
                            <a class="drop-item"
                               href="{{ route('corporates.cciapm', app()->getLocale()) }}">@lang('layouts/nav.cciapm-2')</a>
                            <a class="drop-item"
                               href="{{ route('corporates.bank-tariffs', app()->getLocale()) }}">@lang('layouts/nav.bank-tariffs-3')</a>
                        </div>
                    </div>
                </li>
                <!-- individuals menu -->
                <li class="nav-item">
                    <a class="nav-link {{ Str::contains(Route::currentRouteName(), 'individuals') ? 'active' : '' }}"
                       href="#">
                        @lang('layouts/nav.individuals-2')
                    </a>
                    <div class="drop-menu">
                        <div class="drop-item-box">
                            <a class="drop-item"
                               href="{{ route('individuals.account-opening', app()->getLocale()) }}">@lang('layouts/nav.account-opening-4')</a>
                            <a class="drop-item"
                               href="{{ route('individuals.payments-and-transfers', app()->getLocale()) }}">@lang('layouts/nav.payments-transfers-2')</a>
                            <a class="drop-item"
                               href="{{ route('individuals.remote-banking.internet-banking', app()->getLocale()) }}">@lang('layouts/nav.digital-banking-4')</a>
                            <a class="drop-item"
                               href="{{ route('individuals.deposits', app()->getLocale()) }}">@lang('layouts/nav.deposits-4')</a>
                        </div>
                        <div class="drop-item-box">
                            <a class="drop-item"
                               href="{{ route('individuals.credit', app()->getLocale()) }}">@lang('layouts/nav.credit-4')</a>
                            <a class="drop-item"
                               href="{{ route('individuals.local-cards', app()->getLocale()) }}">@lang('layouts/nav.local-cards-4')</a>
                            <a class="drop-item"
                               href="{{ route('individuals.international-cards', app()->getLocale()) }}">@lang('layouts/nav.international-cards-4')</a>
                            <a class="drop-item"
                               href="{{ route('individuals.exchange-office', app()->getLocale()) }}">@lang('layouts/nav.exchange-office-3')</a>
                        </div>
                        <div class="drop-item-box">
                            <a class="drop-item"
                               href="{{ route('individuals.bank-tariffs', app()->getLocale()) }}">@lang('layouts/nav.bank-tariffs-4')</a>
                        </div>
                    </div>
                </li>
                <!-- investors menu -->
                <li class="nav-item">
                    <a class="nav-link {{ Str::contains(Route::currentRouteName(), 'investors') ? 'active' : '' }}"
                       href="#">@lang('layouts/nav.investors-2')</a>
                    <div class="drop-menu">
                        <div class="drop-item-box">
                            <a class="drop-item"
                               href="{{ route('investors.share-information', app()->getLocale()) }}">@lang('layouts/nav.share-information-2')</a>
                            <a class="drop-item"
                               href="{{ route('investors.voting-results', app()->getLocale()) }}">@lang('layouts/nav.voting-results-2')</a>
                            <a class="drop-item"
                               href="{{ route('investors.information-on-gsm', app()->getLocale()) }}">@lang('layouts/nav.information-on-2')</a>
                            <a class="drop-item"
                               href="{{ route('investors.substantial-facts', app()->getLocale()) }}">@lang('layouts/nav.substantial-fact-3')</a>
                        </div>
                        <div class="drop-item-box">
                            <a class="drop-item"
                               href="{{ route('investors.affiliate-personas', app()->getLocale()) }}">@lang('layouts/nav.affiliate-personas-2')</a>
                            <a class="drop-item"
                               href="{{ route('investors.audit-reports', app()->getLocale()) }}">@lang('layouts/nav.audit-reports-2')</a>
                            <a class="drop-item"
                               href="{{ route('investors.financial-statements', app()->getLocale()) }}">@lang('layouts/nav.financial-statements-2')</a>
                        </div>
                    </div>
                </li>
                <!-- interactive services menu -->
                <li class="nav-item">
                    <a class="nav-link {{ Str::contains(Route::currentRouteName(), 'interactive-services') ? 'active' : '' }}"
                       href="#">
                        @lang('layouts/nav.interactive-services-2')
                    </a>
                    <div class="drop-menu">
                        <div class="drop-item-box">
                            <a class="drop-item"
                               href="{{ route('interactive-services.account-opening', app()->getLocale()) }}">@lang('layouts/nav.account-opening')</a>
                            <a class="drop-item"
                               href="{{ route('interactive-services.virtual-reception', app()->getLocale()) }}">@lang('layouts/nav.virtual-reception-2')</a>
                            <a class="drop-item"
                               href="{{ route('interactive-services.exchange-rates', app()->getLocale()) }}">@lang('layouts/nav.exchange-rates-2')</a>
                            <a class="drop-item"
                               href="{{ route('interactive-services.calculators', app()->getLocale()) }}">@lang('layouts/nav.calculators-2')</a>
                            <a class="drop-item"
                               href="{{ route('interactive-services.sample-forms', app()->getLocale()) }}">@lang('layouts/nav.sample-forms-2')</a>
                        </div>
                        <div class="drop-item-box">
                            <a class="drop-item"
                               href="{{ route('interactive-services.surveys', app()->getLocale()) }}">@lang('layouts/nav.surveys-2')</a>
                            <a class="drop-item"
                               href="{{ route('interactive-services.bank-regulations', app()->getLocale()) }}">@lang('layouts/nav.banking-regulations-2')</a>
                            <a class="drop-item"
                               href="{{ route('interactive-services.subscription-for-banks-materials', app()->getLocale()) }}">@lang('layouts/nav.subscription-for-2')</a>
                            <a class="drop-item"
                               href="{{ route('interactive-services.national-symbols', app()->getLocale()) }}">@lang('layouts/nav.national-symbols-2')</a>
                        </div>
                        <div class="drop-item-box">
                            <a class="drop-item"
                               href="{{ route('interactive-services.usefull-links', app()->getLocale()) }}">@lang('layouts/nav.useful-links-2')</a>
                        </div>
                    </div>
                </li>
                <!-- press center menu -->
                <li class="nav-item">
                    <a class="nav-link {{ Str::contains(Route::currentRouteName(), 'press-center') ? 'active' : '' }}"
                       href="#">
                        @lang('layouts/nav.press-center-2')
                    </a>
                    <div class="drop-menu">
                        <div class="drop-item-box">
                            <a class="drop-item"
                               href="{{ route('press-center.news', app()->getLocale()) }}">@lang('layouts/nav.news-2')</a>
                            <a class="drop-item"
                               href="{{ route('press-center.gallery-category', app()->getLocale()) }}">@lang('layouts/nav.gallery-2')</a>
                            <a class="drop-item"
                               href="{{ route('press-center.dividends', app()->getLocale()) }}">@lang('layouts/nav.dividends-2')</a>
                            <a class="drop-item"
                               href="{{ route('press-center.procurement', app()->getLocale()) }}">@lang('layouts/nav.procurement-2')</a>
                        </div>
                        <div class="drop-item-box">
                            <a class="drop-item"
                               href="{{ route('press-center.youth-union', app()->getLocale()) }}">@lang('layouts/nav.youth-union-2')</a>
                            <a class="drop-item"
                               href="{{ route('press-center.copy-right', app()->getLocale()) }}">@lang('layouts/nav.terms-of-2')</a>
                        </div>
                    </div>
                </li>
                <!-- about us menu -->
                <li class="nav-item">
                    <a class="nav-link {{ Str::contains(Route::currentRouteName(), 'about-us') ? 'active' : '' }}"
                       href="javascript:void(0)">
                        @lang('layouts/nav.about-us-2')
                    </a>
                    <div class="drop-menu">
                        <div class="drop-item-box ">
                            <a class="drop-item"
                               href="{{ route('about-us.general-information', app()->getLocale()) }}">@lang('layouts/nav.general-information-2')</a>
                            <a class="drop-item"
                               href="{{ route('about-us.history', app()->getLocale()) }}">@lang('layouts/nav.history-2')</a>
                            <a class="drop-item"
                               href="{{ route('about-us.mission', app()->getLocale()) }}">@lang('layouts/nav.mission-2')</a>
                            <a class="drop-item"
                               href="{{ route('about-us.message-from-chairman', app()->getLocale()) }}">@lang('layouts/nav.message-from-2')</a>
                        </div>
                        <div class="drop-item-box ">
                            <a class="drop-item"
                               href="{{ route('about-us.management-board', app()->getLocale()) }}">@lang('layouts/nav.management-board-2')</a>
                            <a class="drop-item"
                               href="{{ route('about-us.organizational-structure', app()->getLocale()) }}">@lang('layouts/nav.organisation-structure-2')</a>
                            <a class="drop-item"
                               href="{{ route('about-us.committees', app()->getLocale()) }}">@lang('layouts/nav.committees-2')</a>
                            <a class="drop-item"
                               href="{{ route('about-us.branches', app()->getLocale()) }}">@lang('layouts/nav.branches-2')</a>
                        </div>
                        <div class="drop-item-box ">
                            <a class="drop-item"
                               href="{{ route('about-us.business-plan', app()->getLocale()) }}">@lang('layouts/nav.business-plan-2')</a>
                            <a class="drop-item"
                               href="{{ route('about-us.banks-charter', app()->getLocale()) }}">@lang('layouts/nav.bank-charter-2')</a>
                            <a class="drop-item"
                               href="{{ route('about-us.licenses-and-certificates', app()->getLocale()) }}">@lang('layouts/nav.licenses-certificates-2')</a>
                            <a class="drop-item"
                               href="{{ route('about-us.awards', app()->getLocale()) }}">@lang('layouts/nav.awards-2')</a>
                        </div>
                        <div class="drop-item-box">
                            <a class="drop-item"
                               href="{{ route('about-us.ratings', app()->getLocale()) }}">@lang('layouts/nav.ratings-2')</a>
                            <a class="drop-item"
                               href="{{ route('about-us.careers', app()->getLocale()) }}">@lang('layouts/nav.job-opportunities-2')</a>
                            <a class="drop-item"
                               href="{{ route('about-us.contact-us', app()->getLocale()) }}">@lang('layouts/nav.contact-us-2')</a>
                        </div>
                    </div>
                </li>
            </ul>
            {{-- mega menu desctop ends --}}
        </div>
        <div class="logo flex-center">
            <a href="{{ route('home', app()->getLocale()) }}">
                <img src="{{ asset('img/navbar/KDB-logo-mini.svg') }}" alt="KDB Bank Logo">
            </a>
        </div>
        <div class="flex-justify-between align-items-center">
            <div class="lang-menu">
                <div>
                    <img src="{{ asset('img/navbar/' . app()->getLocale() . '.svg') }}" width="auto" height="10px">
                    <img src="{{ asset('img/navbar/caret-down.svg') }}" width="auto" height="5px"
                         class="d-none d-md-block">
                </div>
                <div class="pop-up-lang-menu">
                    <a href="{{ url('/uz' . substr(Request::path(), 2)) }}">
                        <img src="{{ asset('img/navbar/uz.svg') }}" width="auto" height="10px">
                    </a>
                    <a href="{{ url('/ru' . substr(Request::path(), 2)) }}">
                        <img src="{{ asset('img/navbar/ru.svg') }}" width="auto" height="10px">
                    </a>
                    <a href="{{ url('/en' . substr(Request::path(), 2)) }}">
                        <img src="{{ asset('img/navbar/en.svg') }}" width="auto" height="10px">
                    </a>
                </div>
            </div>
            <div class="flex-align-center">
                <div class="navbar-course">
                    <a href="{{ route('interactive-services.exchange-rates', app()->getLocale()) }}">
                        <marquee scrolldelay="200" class="rate-link">
                            <span>USD | UZS</span>
                            <span>{{ getCbuRates()[0]['Rate'] }}</span>
                            <span>{{ getKdbRates()[0]->buy . '/' . getKdbRates()[0]->sell }}</span>

                            <span class="navbar-course-child">EUR | UZS</span>
                            <span class="navbar-course-child-green"> {{ getCbuRates()[1]['Rate'] }} </span>
                            <span class="navbar-course-child-blue"> {{ getKdbRates()[1]->buy . '/' . getKdbRates()[1]->sell }} </span>
                        </marquee>
                    </a>
                </div>
                <a href="https://ibank.kdb.uz/" class="internet-banking"
                   target="_blank">@lang('layouts/nav.internet-banking-2')</a>
            </div>
        </div>
    </div>
</nav>
{{-- Nav two ends --}}


{{-- Search Starts --}}
<div id="search">
    <input type="search" id="search-input" placeholder="Search here...">
    <button id="search-close">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/>
        </svg>
    </button>
</div>
{{-- Search Ends --}}

<script>
    let lang = "{{ app()->getLocale() }}";
    let baseUrl = "{{ url('/') }}";
</script>
