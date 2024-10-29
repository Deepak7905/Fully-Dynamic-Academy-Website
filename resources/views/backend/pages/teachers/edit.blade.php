@extends('backend.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">

 
<div class="card">
    <div class="card-header">
       <h3> Edit Teacher</h3> 
        <!-- a tag for show -->
        <a href="{{ route('teacher.index') }}" class="btn btn-primary mb-3 float-end">Back to List</a>
        <!-- end a tag -->
       <!-- show session success message and error message -->
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
        <!-- end show session success message and error message -->
       
    </div>
    <div class="card-body">
        <form action="{{ route('teacher.update', $teacher->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $teacher->name }}" required>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Image:</label>
                <input type="file" name="image" id="image" class="form-control">
                @if($teacher->image)
                    <img src="{{ asset('images/teacher-images/' . $teacher->image) }}" alt="{{ $teacher->name }}" class="img-fluid mt-2"width="100" >
                @endif
            </div>

            <div class="mb-3">
                <label for="post" class="form-label">Post:</label>
                <input type="text" name="post" id="post" class="form-control" value="{{ $teacher->post }}" required>
            </div>

            <div class="mb-3">
                <label for="experience" class="form-label">Experience:</label>
                <input type="number" name="experience" id="experience" class="form-control" value="{{ $teacher->experience }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
</div>
    </div>
</div>
@endsection
