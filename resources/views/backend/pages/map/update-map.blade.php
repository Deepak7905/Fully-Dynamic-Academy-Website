@extends('backend.main')

@section('content')
<div class="container">
    <div class="card shadow">
        <div class="card-header">
            Update Map URL
        </div>
        <div class="card-body">
            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form action="{{ route('admin.updateMap') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="map_url">Map URL:</label>
                    <input type="text" class="form-control" id="map_url" name="map_url" value="{{ $mapUrl }}">
                </div>
                @error('map_url')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <button type="submit" class="btn btn-primary">Update Map</button>
            </form>
        </div>
    </div>
</div>
@endsection
