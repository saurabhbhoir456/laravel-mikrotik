@extends('mikrotik.mikrotik')

@section('report-body')

    <table id="table_id" class="table table-striped table-bordered dt-responsive" style="width:100%">
        <thead>
        <tr>
            <th>IP</th>
            <th>MAC Address</th>
            <th>Status</th>
            <th>Last Seen</th>
            <th>Hostname</th>
            <th>Comment</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>IP</th>
            <th>MAC Address</th>
            <th>Status</th>
            <th>Last Seen</th>
            <th>Hostname</th>
            <th>Comment</th>
        </tr>
        </tfoot>
        <tbody>
        @foreach($leases as $lease)
            <tr>
                <td>{{ $lease['address'] }}</td>
                <td>{{ $lease['mac-address'] }}</td>
                <td>{{ $lease['status'] }}</td>
                <td>{{ $lease['last-seen'] }}</td>
                <td>@isset($lease['host-name']) {{ $lease['host-name'] }}@endisset</td>
                <td>@isset($lease['comment']) {{ $lease['comment'] }}@endisset</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@stop