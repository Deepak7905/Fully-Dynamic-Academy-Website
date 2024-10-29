<!-- resources/views/backend/pages/banners/inactive.blade.php -->
@extends('backend.main')

@section('content')
<div class="page-content">
    <div class="container">
        <h3>Inactive Banners</h3>

        @if($banners->isEmpty())
            <div class="alert alert-info" role="alert">
                No inactive banners found.
            </div>
        @else
            <div class="row">
                @foreach($banners as $banner)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/banner-images/' . $banner->image) }}" class="card-img-top" alt="{{ $banner->title }}" style="height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $banner->title }}</h5>
                                <p class="card-text">{{ Str::limit($banner->description, 100) }}</p>
                                <a href="{{ route('banners.edit', $banner) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('banners.destroy', $banner) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this banner?')">Delete</button>
                                </form>
                                <form action="{{ route('banners.activate', $banner) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-success btn-sm">Activate</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>
@endsection
