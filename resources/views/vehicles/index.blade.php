@extends('adminlte::page')

@section('title', 'Vehicles')

@section('content_header')
    <h1>Vehicles</h1>
@stop

@section('content')
    <a href="{{ route('vehicles.create') }}" class="btn btn-primary mb-3">Add New Vehicle</a>
    <table class="table">
        <thead>
            <tr>
                <th>Vehicle Type</th>
                <th>License Plate</th>
                <th>Status</th>
                <th>Fuel Consumption (L/100km)</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($vehicles as $vehicle)
                <tr>
                    <td>{{ $vehicle->vehicle_type }}</td>
                    <td>{{ $vehicle->license_plate }}</td>
                    <td>{{ $vehicle->status }}</td>
                    <td>{{ $vehicle->fuel_consumption }}</td>
                    <td>
                        <form action="{{ route('vehicles.destroy', $vehicle->vehicle_id) }}" method="POST" style="display:inline;">
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
