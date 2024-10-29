@extends('backend.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header"> <h3>Gallery</h></div>
                <div class="card-body">

      
   

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('gallery.create') }}" class="btn btn-primary mb-3">Add New Gallery Item</a>

    <div class="row">
        @foreach($galleries as $gallery)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="{{ asset('images/gallery/' . $gallery->image) }}" class="card-img-top" alt="{{ $gallery->heading }}" style="height: 260px;" >
                    <div class="card-body">
                        <h5 class="card-title">{{ $gallery->heading }}</h5>
                        <a href="{{ route('gallery.edit', $gallery->id) }}" class="btn btn-warning">Edit</a>

                        <form action="{{ route('gallery.destroy', $gallery->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
</div>
            </div>
        </div>
    </div>
@endsection
