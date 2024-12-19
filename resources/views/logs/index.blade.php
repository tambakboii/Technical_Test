@extends('adminlte::page')

@section('title', 'Logs')

@section('content_header')
    <h1>Logs</h1>
@stop

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>Action</th>
                <th>Timestamp</th>
                <th>User</th>
            </tr>
        </thead>
        <tbody>
            @foreach($logs as $log)
                <tr>
                    <td>{{ $log->action }}</td>
                    <td>{{ $log->timestamp }}</td>
                    <td>{{ $log->user->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
