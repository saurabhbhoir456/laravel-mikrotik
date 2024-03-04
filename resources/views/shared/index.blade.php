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
    <link rel="stylesheet" href="{{ mix('/css/vendor.css') }}">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <script src="{{ mix('/js/vendor.pre.js') }}"></script>
    <script src="{{ mix('/js/app.js') }}"></script>

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

<script src="{{ mix('/js/vendor.pos.js') }}"></script>

</body>
</html>
