<!-- Breadcrumb starts -->
<section class="breadcrumb-custom container-fluid">
    <div class="desctop container">
        <h1 class="heading-1">@yield('page-title')</h1>
        <div>
            <a class="small-paragraph" href="{{ route('home', app()->getLocale()) }}">
                @lang('layouts/breadcrumb.home')
            </a> /
            @yield('breadcrumb')
        </div>
    </div>
</section>
<!-- Breadcrumb ends -->
