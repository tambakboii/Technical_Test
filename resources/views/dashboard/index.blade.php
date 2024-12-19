@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <iframe 
                src="https://datastudio.google.com/embed/reporting/YOUR-LOOKER-STUDIO-LINK" 
                width="100%" 
                height="600" 
                frameborder="0" 
                style="border:0" 
                allowfullscreen>
            </iframe>
        </div>
    </div>
@stop

@section('footer')
    <p>Vehicle Booking Dashboard © 2024</p>
@stop
