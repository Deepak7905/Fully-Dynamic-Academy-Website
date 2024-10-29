@extends('backend.main')

@section('content')


<!-- show data on card with bootstrap -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">
                        <h3>Edit Testimonial</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('testimonials.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" id="title" value="{{ $testimonial->title }}">
                            </div>
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div class="form-group">
                                <label for="subtitle">Subtitle</label>
                                <input type="text" name="subtitle" class="form-control" id="subtitle" value="{{ $testimonial->subtitle }}">
                            </div>
                            @error('subtitle')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" class="form-control" id="description">{{ $testimonial->description }}</textarea>
                            </div>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="image" class="form-control" id="image">
                                @if($testimonial->image)
                                    <img src="{{ asset('images/testimonial-images/' . $testimonial->image) }}" alt="{{ $testimonial->title }}" width="100">
                                @endif
                            </div>
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <button type="submit" class="btn btn-primary">Update Testimonial</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
