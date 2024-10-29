@extends('backend.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card">
                <div class="card-header">
                    <h3>Create Teacher</h>
                        <!-- a tag for show -->
                        <a href="{{ route('teacher.index') }}" class="btn btn-primary mb-3 float-end">Back to List</a>
                        <!-- end a tag -->
                </div>

                <div class="card-body">



                    <form action="{{ route('teacher.store') }}" method="POST" enctype="multipart/form-data"
                        class="row g-3">
                        @csrf

                        <div class="col-md-12">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" name="name" id="name" class="form-control" >
                        </div>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="col-md-12">
                            <label for="image" class="form-label">Image:</label>
                            <input type="file" name="image" id="image" class="form-control" accept="image/*">
                        </div>
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <div class="col-md-6">
                            <label for="post" class="form-label">Post:</label>
                            <input type="text" name="post" id="post" class="form-control" >
                        </div>
                        @error('post')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <div class="col-md-6">
                            <label for="experience" class="form-label">Experience (Years):</label>
                            <input type="number" name="experience" id="experience" class="form-control" >
                        </div>
                        @error('experience')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Create Teacher</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection