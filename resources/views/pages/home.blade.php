@extends('layouts.page')
@section('content')

    {{ print_r($_SERVER['HTTP_USER_AGENT']) }}

@stop