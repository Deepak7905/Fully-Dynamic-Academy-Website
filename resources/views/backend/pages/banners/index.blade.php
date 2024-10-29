@extends('backend.main')

@section('content')
<div class="page-content">
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="mdi mdi-check-circle me-2"></i>
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="mdi mdi-alert-circle me-2"></i>
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <h3>Banners</h3>
        <a href="{{ route('banners.create') }}" class="btn btn-primary mb-3">Create Banner</a>

        @if($banners->isEmpty())
            <div class="alert alert-info" role="alert">
                No banners found.
            </div>
        @else
            <div class="row">
                @foreach($banners as $banner)
                    <div class="col-md-4 mb-4">
                        <div class="card shadow">
                            <img src="{{ asset('images/banner-images/' . $banner->image) }}" class="card-img-top"
                                alt="{{ $banner->title }}" style="height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $banner->title }}</h5>
                                <p class="card-text">{{ Str::limit($banner->description, 100) }}</p>
                                <a href="{{ route('banners.edit', $banner) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('banners.destroy', $banner) }}" method="POST"
                                    class="d-inline delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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

