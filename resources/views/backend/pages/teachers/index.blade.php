

@extends('backend.main')

@section('content')



<!-- show data in card format -->
    <div class="row">
        <div class="col-12">
            <div class="card table-responsive">
                <div class="card-header">
                    <h4 class="card-title">Teacher List</h4>
                    <!-- a tag for show -->
                    <a href="{{ route('teacher.create') }}" class="btn btn-primary mb-3 float-end">Create Teacher</a>
                    <!-- end a tag -->
                </div>
                <div class="card-body">
                    <table id="example" class="table table-striped table-bordered dt-responsive nowrap table-hover" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Post</th>
                                <th>Experience</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($teachers as $teacher)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $teacher->name }}</td>
                                    <td>
                                        <img src="{{ asset('images/teacher-images/' . $teacher->image) }}" alt="{{ $teacher->name }}" class="img-fluid" width="50">
                                    </td>
                                    <td>{{ $teacher->post }}</td>
                                    <td>{{ $teacher->experience }} Years</td>
                                    <td>
                                        <a href="{{ route('teacher.show', $teacher->id) }}" class="btn btn-info btn-sm">View</a>
                                        <a href="{{ route('teacher.edit', $teacher->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('teacher.destroy', $teacher->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this teacher?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div>

    @endsection