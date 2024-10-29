

@extends('backend.main')

@section('content')
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card shadow">
                    <div class="card-header"><h3>Pending Enquiries</h3></div>
                    <div class="card-body table-responsive">

      
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
            <th>Sno.</th>
                <th>ID</th>
                
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Qualification</th>
                <th>Location</th>
                <th>Message</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($enquiries as $enquiry)
                <tr>
                <td>{{ $loop->iteration }}</td>
                    <td>{{ $enquiry->id }}</td>
                    
                    <td>{{ $enquiry->name }}</td>
                    <td>{{ $enquiry->email }}</td>
                    <td>{{ $enquiry->phone }}</td>
                    <td>{{ $enquiry->qualification }}</td>
                    <td>{{ $enquiry->location }}</td>
                    <td>{{ $enquiry->message }}</td>
                    <td>{{ ucfirst($enquiry->status) }}</td>
                    <td>
                        <form action="{{ route('enquiries.done', $enquiry->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-success">Mark as Done</button>
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
