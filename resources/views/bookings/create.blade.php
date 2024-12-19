@extends('adminlte::page')

@section('title', 'Create New Booking')

@section('content_header')
    <h1>Create New Booking</h1>
@stop

@section('content')
    <form action="{{ route('bookings.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="user_id">User</label>
            <select class="form-control" name="user_id" id="user_id" required>
                @foreach($users as $user)
                    <option value="{{ $user->user_id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="vehicle_id">Vehicle</label>
            <select class="form-control" name="vehicle_id" id="vehicle_id" required>
                @foreach($vehicles as $vehicle)
                    <option value="{{ $vehicle->vehicle_id }}">{{ $vehicle->license_plate }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="driver_id">Driver</label>
            <select class="form-control" name="driver_id" id="driver_id" required>
                @foreach($users as $user)
                    <option value="{{ $user->user_id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="start_time">Start Time</label>
            <input type="datetime-local" class="form-control" name="start_time" id="start_time" required>
        </div>
        <div class="form-group">
            <label for="end_time">End Time</label>
            <input type="datetime-local" class="form-control" name="end_time" id="end_time" required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select class="form
