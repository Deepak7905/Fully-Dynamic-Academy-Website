@extends('backend.main')

@section('content')
<div class="page-content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card">
                    <div class="card-header"><h3>Edit Banner</h3></div>
                    <div class="card-body">
        
        <form action="{{ route('banners.update', $banner) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $banner->title) }}" required>
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description">{{ old('description', $banner->description) }}</textarea>
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image">
                @if($banner->image)
                    <div class="mt-2">
                        <img src="{{ asset('images/banner-images/' . $banner->image) }}" class="img-fluid" alt="{{ $banner->title }}" style="max-height: 100px; object-fit: cover;">
                    </div>
                @endif
                @error('image')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" id="active" name="active" {{ old('active', $banner->active) ? 'checked' : '' }}>
                <label class="form-check-label" for="active">Active</label>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        </div>
        </div>
        </div>
    </div>
</div>
</div>
@endsection
