@extends('layouts.page')
@section('content')

    <hr>
    <a href="/mikrotik/activeusers" class="btn btn-primary">Active Users</a>
    <a href="/mikrotik/dhcpleases" class="btn btn-primary">DHCP Leases</a>
    <a href="/mikrotik/dnscache" class="btn btn-primary">DNS Cache</a>
    <a href="/mikrotik/dnsstatic" class="btn btn-primary">DNS Static</a>
    <a href="/mikrotik/interface" class="btn btn-primary">Interface</a>
    <a href="/mikrotik/queue" class="btn btn-primary">Simple Queue</a>
    <hr>


@yield('report-body')

@stop
