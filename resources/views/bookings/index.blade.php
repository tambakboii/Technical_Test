@extends('adminlte::page')

@section('title', 'Bookings')

@section('content_header')
    <h1>Bookings</h1>
@stop

@section('content')
    <a href="{{ route('bookings.create') }}" class="btn btn-primary mb-3">Create New Booking</a>
    <table class="table">
        <thead>
            <tr>
                <th>User</th>
                <th>Vehicle</th>
                <th>Driver</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bookings as $booking)
                <tr>
                    <td>{{ $booking->user->id }}</td>
                    <td>{{ $booking->vehicle->license_plate }}</td>
                    <td>{{ $booking->driver->name }}</td>
                    <td>{{ $booking->start_time }}</td>
                    <td>{{ $booking->end_time }}</td>
                    <td>{{ $booking->status }}</td>
                    <td>
                        <form action="{{ route('bookings.destroy', $booking->booking_id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
