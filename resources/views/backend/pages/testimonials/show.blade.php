

@extends('backend.main')

@section('content')


<!-- show data on beautiful card format -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">
                        <h3>Testimonial Details</h3>
                        <a href="{{ route('testimonials.index') }}" class="btn btn-primary float-end">Back</a>
                    </div>
                    <div class="form-group">
                            <!-- <label for="image">Image:</label> -->
                            @if($testimonial->image)
                                <img src="{{ asset('images/testimonial-images/' . $testimonial->image) }}" alt="{{ $testimonial->title }}"  class="img-fluid rounded-4 mx-auto d-block w-25">
                            @endif
                        </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title"><b>Title</b> :</label>
                            <p>{{ $testimonial->title }}</p>
                        </div>
                        <div class="form-group">
                            <label for="subtitle"><b>Subtitle:</b> </label>
                            <p>{{ $testimonial->subtitle }}</p>
                        </div>
                        <div class="form-group">
                            <label for="description"><b>Description:</b> </label>
                            <p>{{ $testimonial->description }}</p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
