

@extends('backend.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header"><h3>Edit Gallery Item</h3></div>
                <div class="card-body">

     
    

    <form action="{{ route('gallery.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="heading">Heading</label>
            <input type="text" name="heading" class="form-control" id="heading" value="{{ $gallery->heading }}" required>
        </div>
        <div class="form-group">
            <label for="image">Image (Optional)</label>
            <input type="file" name="image" class="form-control" id="image">
            <small class="form-text text-muted">Leave empty to keep the current image.</small>
        </div>

        <button type="submit" class="btn btn-primary">Update Gallery Item</button>
    </form>
</div>
</div>
            </div>
        </div>
    </div>
@endsection
