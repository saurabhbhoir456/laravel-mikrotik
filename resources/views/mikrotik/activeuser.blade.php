@extends('mikrotik.mikrotik')

@section('report-body')

    <table id="table_id" class="table table-striped table-bordered dt-responsive" style="width:100%">
        <thead>
        <tr>
            
            <th>Name</th>
            <th>IP Address</th>
            <th>Uptime</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>Name</th>
            <th>IP Address</th>
            <th>Uptime</th>
        </tr>
        </tfoot>
        <tbody>
        @foreach($activeusers as $activeuser)
            <tr>
                <td>{{ $activeuser['name'] }}</td>
                <td>{{ $activeuser['address'] }}</td>
                <td>{{ $activeuser['uptime'] }}</td>
              
            </tr>
        @endforeach
        </tbody>
    </table>

@stop