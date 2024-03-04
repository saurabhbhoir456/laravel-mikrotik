@extends('mikrotik.mikrotik')

@section('report-body')

    <table id="table_id" class="table table-striped table-bordered dt-responsive" style="width:100%">
        <thead>
        <tr>
            <th>Name</th>
            <th>Graph</th>
            <th>Target</th>
            <th>Destination</th>
            <th>Parent</th>
            <th>Priority</th>
            <th>Max Limit</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>Name</th>
            <th>Graph</th>
            <th>Target</th>
            <th>Destination</th>
            <th>Parent</th>
            <th>Priority</th>
            <th>Max Limit</th>
        </tr>
        </tfoot>
        <tbody>
        @foreach($queue as $item)
            <tr>
                <td>{{ $item['name'] }}</td>
                <td>
                    @php
                        echo '<img src="data: image/gif;base64,' . base64_encode(file_get_contents("http://" . env('ROSIPADDRESS') . "/graphs/queue/" . $item['name'] . "/daily.gif")) .'">';
                    @endphp
                </td>
                <td>@isset($item['target']){{ $item['target'] }}@endisset</td>
                <td>@isset($item['dst']){{ $item['dst'] }}@endisset</td>
                <td>@isset($item['parent']){{ $item['parent'] }}@endisset</td>
                <td>@isset($item['priority']){{ $item['priority'] }}@endisset</td>
                <td>@isset($item['max-limit']){{ $item['max-limit'] }}@endisset</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@stop