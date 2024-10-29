@extends('backend.main')

@section('content')
<div class="container">
<div class="alert alert-success">
<marquee direction="left" behavior="scroll" scrollamount="2" scrolldelay="10">
 <b>Note:</b> Only First 6 six Will be Show on Front
</marquee>

</div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow">
                <div class="card-header">
                    <h3>Certification Courses</h3>
                </div>
                <div class="card-body table-responsive">
                    <a href="{{ route('certification-courses.create') }}" class="btn btn-primary">Add New Course</a>

                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Heading</th>
                                <th>Time (hours)</th>
                                <th>Status</th>
                                <th>Apply Url</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($courses as $course)
                                <tr>
                                    <td>{{ $course->id }}</td>
                                    <td>{{ $course->heading }}</td>
                                    <td>{{ $course->time }}</td>
                                    <td>
                                        <!-- Status Badge -->
                                        @if($course->status == 'paid')
                                            <span class="badge bg-success">Paid</span>
                                        @elseif($course->status == 'unpaid')
                                            <span class="badge bg-warning text-dark">Unpaid</span>
                                        @else
                                            <span class="badge bg-secondary">Unknown</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($course->apply_url)
                                            <a href="{{ $course->apply_url }}" target="_blank">{{ $course->apply_url }}</a>
                                        @else
                                            Not available
                                        @endif
                                    </td>
                                    <td>
                                        @if($course->image)
                                            <img src="{{ asset('images/certification-courses/' . $course->image) }}" alt="Course Image" height="50px">
                                        @else
                                            No image
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('certification-courses.show', $course->id) }}" class="btn btn-info">View</a>
                                        <a href="{{ route('certification-courses.edit', $course->id) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('certification-courses.destroy', $course->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure you want to delete this course?');">
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
