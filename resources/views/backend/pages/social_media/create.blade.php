@extends('backend.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow-dark text-white bg-gradient-dark">
                <div class="card-header">
                    <h3>Add New Social Media Link</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('social_media.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" id="name" class="form-control" required placeholder="Enter Name">
                        </div>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror


                        <div class="mb-3">
                            <label for="url" class="form-label">URL</label>
                            <input type="url" name="url" id="url" class="form-control" required placeholder="Enter Url">
                        </div>
                        @error('url')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror


                        <div class="mb-3">
                            <label for="logo" class="form-label">Logo</label>
                            <input type="file" name="logo" id="logo" class="form-control">
                        </div>
                        @error('logo')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror


                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
