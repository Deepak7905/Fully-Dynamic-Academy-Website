@extends('backend.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
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

        <div class="col-lg-4 col-sm-12 col-md-9">
            <div class="card">
                <div class="card-body">
                    <!-- Nav Tabs -->
                    <ul class="nav nav-tabs" id="profileSettingsTabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab"
                                aria-controls="profile" aria-selected="true">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="edit-profile-tab" data-bs-toggle="tab" href="#edit-profile"
                                role="tab" aria-controls="edit-profile" aria-selected="false">Edit Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="change-password-tab" data-bs-toggle="tab" href="#change-password"
                                role="tab" aria-controls="change-password" aria-selected="false">Change Password</a>
                        </li>
                    </ul>
                    <!-- Tab Content -->
                    <div class="tab-content" id="profileSettingsTabsContent">
                        <!-- Profile Section -->
                        <div class="tab-pane fade show active" id="profile" role="tabpanel"
                            aria-labelledby="profile-tab">
                            <h3 class="mt-3">Profile</h3>
                            <p>ID: {{ auth()->user()->id }}</p>
                            <p>Name: {{ auth()->user()->name }}</p>
                            <p>Email: {{ auth()->user()->email }}</p>
                            <p>Created At: {{ auth()->user()->created_at }}</p>
                            <p>Updated At: {{ auth()->user()->updated_at }}</p>   
                        </div>

                        <!-- Edit Profile Section -->
                        <div class="tab-pane fade" id="edit-profile" role="tabpanel" aria-labelledby="edit-profile-tab">
                            <h3 class="mt-3">Edit Profile</h3>
                            <form method="POST" action="{{ route('profile.update') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        value="{{ auth()->user()->name }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        value="{{ auth()->user()->email }}" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Update Profile</button>
                            </form>
                        </div>

                        <!-- Change Password Section -->
                        <div class="tab-pane fade" id="change-password" role="tabpanel"
                            aria-labelledby="change-password-tab">
                            <h3 class="mt-3">Change Password</h3>
                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="current_password" class="form-label">Current Password</label>
                                    <input type="password" name="current_password" id="current_password"
                                        class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="new_password" class="form-label">New Password</label>
                                    <input type="password" name="new_password" id="new_password" class="form-control"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="new_password_confirmation" class="form-label">Confirm New
                                        Password</label>
                                    <input type="password" name="new_password_confirmation"
                                        id="new_password_confirmation" class="form-control" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Change Password</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection