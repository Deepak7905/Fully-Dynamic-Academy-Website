

@extends('backend.main')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card shadow">
                    <div class="card-header"><h3>History</h3></div>
                    <div class="card-body table-responsive">

    <table class="table">
        <thead>
            <tr>
            <th>s.no</th>
                <th>id</th>
               
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Qualification</th>
                <th>Location</th>
                <th>Message</th>
                <th>Status</th>
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
