@extends('backend.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-8 col-12">
            <div class="card">
                <div class="card-header">
                    <h3>Course Details</h3>
                </div>
                <center>
                  <!-- Display Image -->
                  @if($course->image)
                        <!-- <p><strong>Image:</strong></p> -->
                        <img src="{{ asset('images/certification-courses/' . $course->image) }}" alt="Course Image" height="100px" class="rounded-4 mx-auto d-block">
                    @else
                        <p><strong>Image:</strong> No image available</p>
                    @endif
                <div class="card-body">
                      
                    <h3>{{ $course->heading }}</h3>
                    <p><strong>Time:</strong> {{ $course->time }} hours</p>
                    <p><strong>Status:</strong> {{ ucfirst($course->status) }}</p>
                    <p><strong>Description:</strong> {{ $course->description }}</p>
                    
                    <!-- Display Apply URL -->
                    @if($course->apply_url)
                        <p><strong>Apply URL:</strong> <a href="{{ $course->apply_url }}" target="_blank">{{ $course->apply_url }}</a></p>
                    @else
                        <p><strong>Apply URL:</strong> Not available</p>
                    @endif
                    
                
                    
                    <a href="{{ route('certification-courses.index') }}" class="btn btn-secondary">Back to Courses</a>
                   
                </div>
            </div>
        </div>
    </div>
</div>
</center>
@endsection
