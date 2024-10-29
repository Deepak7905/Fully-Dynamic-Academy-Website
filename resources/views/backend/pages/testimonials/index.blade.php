@extends('backend.main')

@section('content')


<!-- show data in table form -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Testimonials</h3>
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

                    <a href="{{ route('testimonials.create') }}" class="btn btn-primary float-end">Add New
                        Testimonial</a>
                </div>
                

                <div class="card-body table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Subtitle</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($testimonials as $testimonial)
                                <tr>
                                    <td>{{ $testimonial->id }}</td>
                                    <td>{{ $testimonial->title }}</td>
                                    <td>{{ $testimonial->subtitle }}</td>
                                    <td class="text-truncate" style="max-width: 200px;">{{ $testimonial->description }}</td>
                                    <td>
                                        @if($testimonial->image)
                                            <img src="{{ asset('images/testimonial-images/' . $testimonial->image) }}"
                                                alt="{{ $testimonial->title }}" width="50">
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('testimonials.show', $testimonial->id) }}"
                                            class="btn btn-info btn-sm">View</a>
                                        <a href="{{ route('testimonials.edit', $testimonial->id) }}"
                                            class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('testimonials.destroy', $testimonial->id) }}" method="POST"
                                            style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure you want to delete this testimonial?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection