@extends('dashboard.layouts.mainLayout')
@section('dashboard-content')
    <div class="row justify-content-center">
        <div class="col-lg-11">
            <div class="card shadow border-0">
                <div class="card-body p-5">
                    <h3 class="text-center text-primary mb-4">User Registration</h3>

                    <form action="{{ url('/create-user') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <!-- Full Name -->
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="full_name" name="full_name"
                                        placeholder="Your Name" required>
                                    <label for="full_name">Full Name</label>
                                </div>
                            </div>

                            <!-- User Name -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="user_name" name="user_name"
                                        placeholder="User Name" required>
                                    <label for="user_name">User Name</label>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Email" required>
                                    <label for="email">Email</label>
                                </div>
                            </div>

                            <!-- Password -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="Password" required>
                                    <label for="password">Password</label>
                                </div>
                            </div>

                            <!-- Re-Password -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="confirm_password"
                                        placeholder="Confirm Password" required>
                                    <label for="confirm_password">Confirm Password</label>
                                </div>
                            </div>

                            <!-- Role Select -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select" id="role" name="role" required>
                                        <option value="" disabled selected>Select Role</option>
                                        <option value="admin">Admin</option>
                                        <option value="user">User</option>
                                    </select>
                                    <label for="role">Role</label>
                                </div>
                            </div>

                            <!-- Archive (Hidden) -->
                            <div class="col-md-6 d-none">
                                <div class="form-check mt-4">
                                    <input class="form-check-input" type="checkbox" id="is_archive" name="is_archive"
                                        value="1">
                                    <label class="form-check-label" for="is_archive"><strong>Is Archive
                                            User</strong></label>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="col-md-12">
                                <button class="btn btn-primary w-100 py-2" type="submit">Create</button>
                            </div>
                        </div> <!-- row -->
                    </form>
                </div> <!-- card-body -->
            </div> <!-- card -->
        </div> <!-- col -->
    </div> <!-- row -->
@endsection
