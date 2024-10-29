@extends('backend.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">  <h3>Edit Course</h3></div>
                <div class="card-body">
  
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
    <form action="{{ route('certification-courses.update', $course->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="heading">Heading</label>
            <input type="text" name="heading" id="heading" class="form-control" value="{{ old('heading', $course->heading) }}" required>
        </div>
        @error('heading')
            <div class="text-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label for="time">Time (hours)</label>
            <input type="number" name="time" id="time" class="form-control" value="{{ old('time', $course->time) }}" required>
        </div>
        @error('time')
            <div class="text-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" id="status" class="form-control" required>
                <option value="paid" {{ $course->status == 'paid' ? 'selected' : '' }}>Paid</option>
                <option value="unpaid" {{ $course->status == 'unpaid' ? 'selected' : '' }}>Unpaid</option>
            </select>
        </div>
        @error('status')
            <div class="text-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control">{{ old('description', $course->description) }}</textarea>
        </div>
        @error('description')
            <div class="text-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label for="apply_url">Apply URL</label>
            <input type="text" name="apply_url" class="form-control" value="{{ old('apply_url', $course->apply_url) }}">
        </div>
        @error('apply_url')
            <div class="text-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control">
            @if(isset($course->image))
                <img src="{{ asset('images/certification-courses/' . $course->image) }}" alt="Course Image" width="100">
            @endif
        </div>
        @error('image')
            <div class="text-danger">{{ $message }}</div>
        @enderror

        <button type="submit" class="btn btn-primary">Update Course</button>
    </form>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection
