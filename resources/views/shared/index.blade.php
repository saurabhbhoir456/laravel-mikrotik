<!doctype html>

<html lang="{{ app()->getLocale() }}">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Mikrotik API</title>

    {{--Laravel mixed files--}}
    @vite('resources/css/vendor.css')
    @vite('resources/css/app.css')
    @vite('resources/js/vendor.pre.js')
    @vite('resources/js/app.js')

</head>
<body>
@include('includes.menu')

<div class="container-fluid">

    <div id="notification">
        @yield('notification')
    </div>

    <div class="container-fluid">
        @yield('main-body')
    </div>

</div>

@vite('resources/js/vendor.pos.js')

</body>
</html>
