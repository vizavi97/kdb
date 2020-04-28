<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        @include('layouts.meta')

        @yield('meta')

    </head>
    <body>

        @include('layouts.nav')

        @yield('content')

        @include('layouts.footer')

        @include('layouts.scripts')

        @yield('scripts')

    </body>
</html>
