@extends('adminlte::page')

@section('title', 'Add New Vehicle')

@section('content_header')
    <h1>Add New Vehicle</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('vehicles.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="vehicle_type">Vehicle Type</label>
                    <input type="text" name="vehicle_type" id="vehicle_type" class="form-control" placeholder="Enter Vehicle Type" required>
                </div>
                <div class="form-group">
                    <label for="license_plate">License Plate</label>
                    <input type="text" name="license_plate" id="license_plate" class="form-control" placeholder="Enter License Plate" required>
                </div>
                <div class="form-group">
                    <label for="fuel_consumption">Fuel Consumption (L/100km)</label>
                    <input type="number" step="0.01" name="fuel_consumption" id="fuel_consumption" class="form-control" placeholder="Enter Fuel Consumption" required>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control" required>
                        <option value="available">Available</option>
                        <option value="unavailable">Unavailable</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Add Vehicle</button>
            </form>
        </div>
    </div>
@endsection
