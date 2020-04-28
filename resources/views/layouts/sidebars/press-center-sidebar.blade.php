<aside class="col-xl-3 aside-hero">
    <h2 class="heading-3">
        @lang('layouts/sidebars/press-center-sidebar.press-center')
    </h2>
    <ul>
        <li>
            <a href="{{ Request::is( app()->getLocale() . '/press-center/news') ? 'javascript:void(0)' : route('press-center.news', app()->getLocale())  }}" class="{{ Request::is( app()->getLocale() . '/press-center/news') ? 'active' : '' }}">
                @lang('layouts/sidebars/press-center-sidebar.news')
            </a>
        </li>
        <li>
            <a href="{{ Request::is( app()->getLocale() . '/press-center/gallery') ? 'javascript:void(0)' : route('press-center.gallery-category', app()->getLocale())  }}" class="{{ Request::is( app()->getLocale() . '/press-center/gallery-category') ? 'active' : '' }}">
                @lang('layouts/sidebars/press-center-sidebar.gallery')
            </a>
        </li>
        <li>
            <a href="{{ Request::is( app()->getLocale() . '/press-center/dividends') ? 'javascript:void(0)' : route('press-center.dividends', app()->getLocale())  }}" class="{{ Request::is( app()->getLocale() . '/press-center/dividends') ? 'active' : '' }}">
                @lang('layouts/sidebars/press-center-sidebar.dividends')
            </a>
        </li>
        <li>
            <a href="{{ Request::is( app()->getLocale() . '/press-center/procurement') ? 'javascript:void(0)' : route('press-center.procurement', app()->getLocale())  }}" class="{{ Request::is( app()->getLocale() . '/press-center/procurement') ? 'active' : '' }}">
                @lang('layouts/sidebars/press-center-sidebar.procurement')
            </a>
        </li>
        <li>
            <a href="{{ Request::is( app()->getLocale() . '/press-center/youth-union') ? 'javascript:void(0)' : route('press-center.youth-union', app()->getLocale())  }}" class="{{ Request::is( app()->getLocale() . '/press-center/youth-union') ? 'active' : '' }}">
                @lang('layouts/sidebars/press-center-sidebar.youth-union')
            </a>
        </li>
        <li>
            <a href="{{ Request::is( app()->getLocale() . '/press-center/copy-right') ? 'javascript:void(0)' : route('press-center.copy-right', app()->getLocale())  }}" class="{{ Request::is( app()->getLocale() . '/press-center/copy-right') ? 'active' : '' }}">
                @lang('layouts/sidebars/press-center-sidebar.terms-of')
            </a>
        </li>
    </ul>
</aside>