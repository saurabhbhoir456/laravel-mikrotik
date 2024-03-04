@extends('mikrotik.mikrotik')

@section('report-body')

    <table id="table_id" class="table table-striped table-bordered dt-responsive" style="width:100%">
        <thead>
        <tr>
            <th>Name</th>
            <th>Address</th>
            <th>TTL</th>
            <th>Comment</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>Name</th>
            <th>Address</th>
            <th>TTL</th>
            <th>Comment</th>
        </tr>
        </tfoot>
        <tbody>
        @foreach($dns as $item)
            <tr>
                <td>{{ $item['name'] }}</td>
                <td>{{ $item['address'] }}</td>
                <td>{{ $item['ttl'] }}</td>
                <td>@isset($item['comment']) {{ $item['comment'] }}@endisset</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@stop