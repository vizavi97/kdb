<aside class="col-xl-3 aside-hero">
    <h2 class="heading-3">@lang('layouts/sidebars/individuals-sidebar.individual')</h2>
    <ul>
        <li>
            <a href="{{ Request::is( app()->getLocale() . '/individuals/account-opening') ? 'javascript:void(0)' : route('individuals.account-opening', app()->getLocale())  }}" class="{{ Request::is( app()->getLocale() . '/individuals/account-opening') ? 'active' : '' }}">
                @lang('layouts/sidebars/individuals-sidebar.account-opening')
            </a>
        </li>
        <li>
            <a href="{{ Request::is( app()->getLocale() . '/individuals/payments-and-transfers') ? 'javascript:void(0)' : route('individuals.payments-and-transfers', app()->getLocale())  }}" class="{{ Request::is( app()->getLocale() . '/individuals/payments-and-transfers') ? 'active' : '' }}">
                @lang('layouts/sidebars/individuals-sidebar.payments-transfers')
            </a>
        </li>
        <li>
            <a class="{{ Str::contains(Route::currentRouteName(), 'individuals.remote-banking') ? 'active' : '' }}" data-toggle="collapse" href="#remote-banking-1" role="button" aria-expanded="false" aria-controls="remote-banking-1">
                @lang('layouts/sidebars/individuals-sidebar.digital-banking')
                <span class="icon-top-2 pl-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="7.41" viewBox="0 0 12 7.41"><path d="M7.41,8.59,12,13.17l4.59-4.58L18,10l-6,6L6,10Z" transform="translate(-6 -8.59)"/></svg>
                </span>
            </a>
        </li>
        <div class="collapse {{ Str::contains(Route::currentRouteName(), 'individuals.remote-banking') ? 'show' : '' }}" id="remote-banking-1">
            <li>
                <a class="drop-item {{ Request::is( app()->getLocale() . '/individuals/remote-banking/internet-banking') ? 'active' : '' }}" href="{{ route('individuals.remote-banking.internet-banking', app()->getLocale()) }}">
                    @lang('layouts/sidebars/individuals-sidebar.internet-banking')
                </a>
            </li>
            <li>
                <a class="drop-item {{ Request::is( app()->getLocale() . '/individuals/remote-banking/mobile-banking') ? 'active' : '' }}" href="{{ route('individuals.remote-banking.mobile-banking', app()->getLocale()) }}">
                    @lang('layouts/sidebars/individuals-sidebar.mobile-banking')
                </a>
            </li>
            <li>
                <a class="drop-item {{ Request::is( app()->getLocale() . '/individuals/remote-banking/sms-informing') ? 'active' : '' }}" href="{{ route('individuals.remote-banking.sms-informing', app()->getLocale()) }}">
                    @lang('layouts/sidebars/individuals-sidebar.sms-informing')
                </a>
            </li>
        </div>
        <li>
            <a href="{{ Request::is( app()->getLocale() . '/individuals/deposits') ? 'javascript:void(0)' : route('individuals.deposits', app()->getLocale(), app()->getLocale())  }}" class="{{ Request::is( app()->getLocale() . '/individuals/deposits') ? 'active' : '' }}">
                @lang('layouts/sidebars/individuals-sidebar.deposits')
            </a>
        </li>
        <li>
            <a href="{{ Request::is( app()->getLocale() . '/individuals/credit') ? 'javascript:void(0)' : route('individuals.credit', app()->getLocale(), app()->getLocale())  }}" class="{{ Request::is( app()->getLocale() . '/individuals/credit') ? 'active' : '' }}">
                @lang('layouts/sidebars/individuals-sidebar.credit')
            </a>
        </li>
        <li>
            <a href="{{ Request::is( app()->getLocale() . '/individuals/local-cards') ? 'javascript:void(0)' : route('individuals.local-cards', app()->getLocale(), app()->getLocale())  }}" class="{{ Request::is( app()->getLocale() . '/individuals/local-cards') ? 'active' : '' }}">
                @lang('layouts/sidebars/individuals-sidebar.local-cards')
            </a>
        </li>
        <li>
            <a href="{{ Request::is( app()->getLocale() . '/individuals/international-cards') ? 'javascript:void(0)' : route('individuals.international-cards', app()->getLocale(), app()->getLocale()) }}" class="{{ Request::is( app()->getLocale() . '/individuals/international-cards') ? 'active' : '' }}">
                @lang('layouts/sidebars/individuals-sidebar.international-cards')
            </a>
        </li>
        <li>
            <a class="{{ Str::contains(Route::currentRouteName(), 'individuals.exchange-office') ? 'active' : '' }}" data-toggle="collapse" href="#exchange-office" role="button" aria-expanded="false" aria-controls="exchange-office">
                @lang('layouts/sidebars/individuals-sidebar.exchange-office')
                <span class="icon-top-2 pl-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="7.41" viewBox="0 0 12 7.41"><path d="M7.41,8.59,12,13.17l4.59-4.58L18,10l-6,6L6,10Z" transform="translate(-6 -8.59)"/></svg>
                </span>
            </a>
        </li>
        <div class="collapse {{ Str::contains(Route::currentRouteName(), 'individuals.exchange-office') ? 'show' : '' }}" id="exchange-office">
            <li>
                <a class="drop-item {{ Request::is( app()->getLocale() . '/individuals/exchange-office') ? 'active' : '' }}" href="{{ route('individuals.exchange-office', app()->getLocale()) }}">
                    @lang('layouts/sidebars/individuals-sidebar.exchange-office-details')
                </a>
            </li>
            <li>
                <a class="drop-item {{ Request::is( app()->getLocale() . '/individuals/exchange-office/currency-conversion') ? 'active' : '' }}" href="{{ route('individuals.exchange-office.currency-conversion', app()->getLocale()) }}">
                    @lang('layouts/sidebars/individuals-sidebar.currency-conversion')
                </a>
            </li>
        </div>
        <li>
            <a href="{{ Request::is( app()->getLocale() . '/individuals/bank-tariffs') ? 'javascript:void(0)' : route('individuals.bank-tariffs', app()->getLocale())  }}" class="{{ Request::is( app()->getLocale() . '/individuals/bank-tariffs') ? 'active' : '' }}">
                @lang('layouts/sidebars/individuals-sidebar.bank-tariffs')
            </a>
        </li>
    </ul>
</aside>