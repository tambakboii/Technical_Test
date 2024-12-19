@extends('adminlte::page')

@section('title', 'Create Log')

@section('content_header')
    <h1>Create Log</h1>
@stop

@section('content')
    <form action="{{ route('logs.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="action">Action</label>
            <input type="text" class="form-control" name="action" id="action" required>
        </div>
        <div class="form-group">
            <label for="timestamp">Timestamp</label>
            <input type="datetime-local" class="form-control" name="timestamp" id="timestamp" required>
        </div>
        <div class="form-group">
            <label for="user_id">User</label>
            <select class="form-control" name="user_id" id="user_id" required>
                @foreach($users as $user)
                    <option value="{{ $user->user_id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@stop
