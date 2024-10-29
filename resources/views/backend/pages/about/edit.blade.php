
@extends('backend.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card shadow">
                <div class="card-header"><h3>Edit About Section</h3></div>
                <div class="card-body">
    
    <form action="{{ route('about.update', $about->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="heading">Heading</label>
            <input type="text" name="heading" class="form-control" value="{{ old('heading', $about->heading) }}" required>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" class="form-control" rows="5" required>{{ old('content', $about->content) }}</textarea>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control">
            @if($about->image)
            <img src="{{ asset('images/about-images/' . $about->image) }}" class="" alt="{{ $about->title }}" height="50px" >
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
</div>
</div>
</div>
</div>
@endsection
