
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="Scotch">
<meta name="csrf-token" content="{{ csrf_token() }}">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<link href="{{ mix('/css/app.css') }}" rel="stylesheet">
<link href="{{ mix('/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ mix('/css/datatables.css') }}" rel="stylesheet">

<script src="{{ mix('/js/jquery.js') }}"></script>

<script src="{{ mix('/js/popper.js') }}"></script>
<script src="{{ mix('/js/bootstrap.js') }}"></script>
<script src="{{ mix('/js/datatables.js') }}"></script>

{{--<script>if (window.module) module = window.module;</script>--}}

{{--<title>{{  }}</title>--}}
<title>{{ config('app.name', gethostname()) }}</title>
