@extends('backend.main')

@section('content')
<div class="container">
    <div class="col-md-12">
        <div class="card">
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
            <div class="card-header">
                <h3>Social Media Links</h3>
                <a href="{{ route('social_media.create') }}" class="btn btn-primary float-end">Add New</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>URL</th>
                                <th>Logo</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($socialMediaLinks as $link)
                                <tr>
                                    <td>{{ $link->name }}</td>
                                    <td><a href="{{ $link->url }}" target="_blank">{{ $link->url }}</a></td>
                                    <td>
                                        @if ($link->logo)
                                            <img src="{{ asset('images/social-media/' . $link->logo) }}" alt="{{ $link->name }}"
                                                width="50">
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('social_media.edit', $link->id) }}"
                                            class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('social_media.destroy', $link->id) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure?')">Delete</button>
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