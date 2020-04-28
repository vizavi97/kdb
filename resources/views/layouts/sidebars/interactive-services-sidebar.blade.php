<aside class="col-xl-3 aside-hero">
    <h2 class="heading-3">
        @lang('layouts/sidebars/interactive-services-sidebar.interactive-services')
    </h2>
    <ul>
        <li>
            <a href="{{ Request::is( app()->getLocale() . '/interactive-services/account-opening') ? 'javascript:void(0)' : route('interactive-services.account-opening', app()->getLocale())  }}" class="{{ Request::is( app()->getLocale() . '/interactive-services/account-opening') ? 'active' : '' }}">
                @lang('layouts/sidebars/interactive-services-sidebar.account-opening')
            </a>
        </li>
        <li>
            <a href="{{ Request::is( app()->getLocale() . '/interactive-services/virtual-reception') ? 'javascript:void(0)' : route('interactive-services.virtual-reception', app()->getLocale())  }}" class="{{ Request::is( app()->getLocale() . '/interactive-services/virtual-reception') ? 'active' : '' }}">
                @lang('layouts/sidebars/interactive-services-sidebar.virtual-reception')
            </a>
        </li>
        <li>
            <a href="{{ Request::is( app()->getLocale() . '/interactive-services/exchange-rates') ? 'javascript:void(0)' : route('interactive-services.exchange-rates', app()->getLocale())  }}" class="{{ Request::is( app()->getLocale() . '/interactive-services/exchange-rates') ? 'active' : '' }}">
                @lang('layouts/sidebars/interactive-services-sidebar.exchange-rates')
            </a>
        </li>
        <li>
            <a href="{{ Request::is( app()->getLocale() . '/interactive-services/calculators') ? 'javascript:void(0)' : route('interactive-services.calculators', app()->getLocale())  }}" class="{{ Request::is( app()->getLocale() . '/interactive-services/calculators') ? 'active' : '' }}">
                @lang('layouts/sidebars/interactive-services-sidebar.calculators')
            </a>
        </li>
        <li>
            <a href="{{ Request::is( app()->getLocale() . '/interactive-services/sample-forms') ? 'javascript:void(0)' : route('interactive-services.sample-forms', app()->getLocale())  }}" class="{{ Request::is( app()->getLocale() . '/interactive-services/sample-forms') ? 'active' : '' }}">
                @lang('layouts/sidebars/interactive-services-sidebar.sample-forms')
            </a>
        </li>
        <li>
            <a href="{{ Request::is( app()->getLocale() . '/interactive-services/surveys') ? 'javascript:void(0)' : route('interactive-services.surveys', app()->getLocale())  }}" class="{{ Request::is( app()->getLocale() . '/interactive-services/surveys') ? 'active' : '' }}">
                @lang('layouts/sidebars/interactive-services-sidebar.surveys')
            </a>
        </li>
        <li>
            <a href="{{ Request::is( app()->getLocale() . '/interactive-services/bank-regulations') ? 'javascript:void(0)' : route('interactive-services.bank-regulations', app()->getLocale())  }}" class="{{ Request::is( app()->getLocale() . '/interactive-services/bank-regulations') ? 'active' : '' }}">
                @lang('layouts/sidebars/interactive-services-sidebar.banking-regulations')
            </a>
        </li>
        <li>
            <a href="{{ Request::is( app()->getLocale() . '/interactive-services/subscription-for-banks-materials') ? 'javascript:void(0)' : route('interactive-services.subscription-for-banks-materials', app()->getLocale())  }}" class="{{ Request::is( app()->getLocale() . '/interactive-services/subscription-for-banks-materials') ? 'active' : '' }}">
                @lang('layouts/sidebars/interactive-services-sidebar.subscription-for')
            </a>
        </li>
        <li>
            <a href="{{ Request::is( app()->getLocale() . '/interactive-services/national-symbols') ? 'javascript:void(0)' : route('interactive-services.national-symbols', app()->getLocale())  }}" class="{{ Request::is( app()->getLocale() . '/interactive-services/national-symbols') ? 'active' : '' }}">
                @lang('layouts/sidebars/interactive-services-sidebar.national-symbols')
            </a>
        </li>
        <li>
            <a href="{{ Request::is( app()->getLocale() . '/interactive-services/usefull-links') ? 'javascript:void(0)' : route('interactive-services.usefull-links', app()->getLocale())  }}" class="{{ Request::is( app()->getLocale() . '/interactive-services/usefull-links') ? 'active' : '' }}">
                @lang('layouts/sidebars/interactive-services-sidebar.useful-links')
            </a>
        </li>
    </ul>
</aside>
