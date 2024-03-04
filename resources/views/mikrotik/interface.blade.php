@extends('mikrotik.mikrotik')

@section('report-body')

    <table id="table_id" class="table table-striped table-bordered dt-responsive" style="width:100%">
        <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Last Link Up Time</th>
            <th>Links Downs</th>
            <th>Graph</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Last Link Up Time</th>
            <th>Links Downs</th>
            <th>Graph</th>
        </tr>
        </tfoot>
        <tbody>
        @foreach($interface as $item)
            <tr>
                <td>{{ $item['name'] }}</td>
                <td>{{ $item['type'] }}</td>
                <td>@isset($item['last-link-up-time']){{ $item['last-link-up-time'] }}@endisset</td>
                <td>{{ $item['link-downs'] }}</td>
                <td>
                    @php
                        echo '<img src="data: image/gif;base64,' . base64_encode(file_get_contents("http://" . env('ROSIPADDRESS') . "/graphs/iface/" . $item['name'] . "/daily.gif")) .'">';
                    @endphp
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@stop