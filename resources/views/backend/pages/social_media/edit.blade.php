<!-- resources/views/social-media/edit.blade.php -->
@extends('backend.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow-dark text-white bg-gradient-dark">
                <div class="card-header">
                    <h3>Edit Social Media Link</h3>
                </div>
                <div class="card-body">

                    <form action="{{ route('social_media.update', $socialMedia->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ $socialMedia->name }}" required>
                        </div>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-group">
                            <label for="url">URL</label>
                            <input type="url" class="form-control" id="url" name="url" value="{{ $socialMedia->url }}"
                                required>
                        </div>
                        @error('url')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <div class="form-group">
                            <label for="logo">Logo</label>
                            <input type="file" class="form-control" id="logo" name="logo">
                            @if ($socialMedia->logo)
                                <img src="{{ asset('images/social-media/' . $socialMedia->logo) }}"
                                    alt="{{ $socialMedia->name }}" width="100" class="mt-2">
                            @endif
                        </div>
                        @error('logo')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror


                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection