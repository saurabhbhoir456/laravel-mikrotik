<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        @include('includes.header')

        <style>
            @yield('css')
        </style>

            @yield('javascript')
    </head>

    <body>

    @include('includes.navbar')

        <div class="container-fluid rounded">

            <div class="container-fluid rounded">
                @yield('alerts')
            </div>


            <div class="container-fluid rounded">
                @yield('content')
            </div>

            <div class="container-fluid rounded">
                @yield('report')
            </div>

        </div>

    <div class="container-fluid text-light bg-dark rounded">
        @include('includes.footer')
    </div>

    </body>

</html>
