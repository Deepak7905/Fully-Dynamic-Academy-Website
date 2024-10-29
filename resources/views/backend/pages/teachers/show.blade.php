


@extends('backend.main')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Teacher Details</div>
<!-- show data in card form -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Teacher Details</h4>
                    <!-- a tag for show -->
                    <a href="{{ route('teacher.index') }}" class="btn btn-primary mb-3 float-end">Back to List</a>
                    <!-- end a tag -->
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('images/teacher-images/' . $teacher->image) }}" alt="{{ $teacher->name }}" class="img-fluid rounded-circle">
                        </div>
                        <div class="col-md-8">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>Name:</th>
                                        <td>{{ $teacher->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Post:</th>
                                        <td>{{ $teacher->post }}</td>
                                    </tr>
                                    <tr>
                                        <th>Experience:</th>
                                        <td>{{ $teacher->experience }} Years</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
    <!-- end show data in card form -->
                </div>
            </div>
        </div>
    </div>


    @endsection