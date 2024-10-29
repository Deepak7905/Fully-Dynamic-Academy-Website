

<!-- resources/views/admin/about/index.blade.php -->
@extends('backend.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
            <div class="card">
                <div class="card-header"><h3>About Sections</h3></div>
                    <div class="card-body table-responsive">

    
    <a href="{{ route('about.create') }}" class="btn btn-primary">Add About Section</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Heading</th>
                <th>Content</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($aboutSections as $section)
            <tr>
                <td>{{ $section->id }}</td>
                <td>{{ $section->heading }}</td>
                <td>{{ $section->content }}</td>
                <!-- image -->
                    <td>
                        @if($section->image)
                        <img src="{{ asset('images/about-images/' . $section->image) }}" class="" alt="{{ $section->title }}" height="50px">
                        @endif
                    </td>
                <!-- end image -->
                <td>
                    <a href="{{ route('about.edit', $section->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('about.destroy', $section->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
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
