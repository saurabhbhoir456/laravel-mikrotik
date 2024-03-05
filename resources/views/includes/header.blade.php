
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="Scotch">
<meta name="csrf-token" content="{{ csrf_token() }}">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

@vite('resources/css/app.css')
@vite('resources/css/bootstrap.css')
@vite('resources/css/datatables.css')

@vite('resources/js/jquery.js')

@vite('resources/js/popper.js')
@vite('resources/js/bootstrap.js')
@vite('resources/js/datatables.js')

{{--<script>if (window.module) module = window.module;</script>--}}

{{--<title>{{  }}</title>--}}
<title>{{ config('app.name', gethostname()) }}</title>
