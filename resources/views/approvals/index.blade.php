@extends('adminlte::page')

@section('title', 'Approvals')

@section('content_header')
    <h1>Approvals</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">List of Approvals</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Booking ID</th>
                        <th>Approver ID</th>
                        <th>Status</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($approvals as $approval)
                        <tr>
                            <td>{{ $approval->id }}</td>
                            <td>{{ $approval->booking_id }}</td>
                            <td>{{ $approval->approver_id }}</td>
                            <td>{{ $approval->status }}</td>
                            <td>{{ $approval->created_at }}</td>
                            <td>
                                <a href="{{ route('approvals.show', $approval->id) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('approvals.edit', $approval->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('approvals.destroy', $approval->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Approvals page loaded!'); </script>
@stop