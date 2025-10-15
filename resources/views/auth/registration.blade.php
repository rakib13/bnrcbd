@extends('layouts.main-body')

<!-- Navbar & Hero End -->
@section('main-body-content')
<!-- Navbar & Hero End -->

<!-- Modal Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center bg-primary">
                <div class="input-group w-75 mx-auto d-flex">
                    <input type="search" class="form-control p-3" placeholder="keywords"
                        aria-describedby="search-icon-1">
                    <span id="search-icon-1" class="btn bg-light border nput-group-text p-3"><i
                            class="fa fa-search"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Search End -->

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Registration </h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active text-primary"> Login</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- Registration Start -->

<div class="container py-5 bg-light">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow border-0">
                <div class="card-body p-5">
                    <h3 class="text-center text-primary mb-4">User Registration</h3>

                    <form action="{{ url('/reg') }}" method="POST">
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
                            {{-- <div class="col-md-6 d-none">
                                <div class="form-check mt-4">
                                    <input class="form-check-input" type="checkbox" id="is_archive" name="is_archive"
                                        value="1">
                                    <label class="form-check-label" for="is_archive"><strong>Is Archive
                                            User</strong></label>
                                </div>
                            </div> --}}

                            <!-- Submit Button -->
                            <div class="col-md-12">
                                <button class="btn btn-primary w-100 py-2" type="submit">Register</button>
                                <div class="text-center mt-3">
                                    Already registered? <a href="./login">Login</a>
                                </div>
                            </div>
                        </div> <!-- row -->
                    </form>

                </div> <!-- card-body -->
            </div> <!-- card -->
        </div> <!-- col -->
    </div> <!-- row -->
</div> <!-- container -->

<!-- Registration End -->
@endsection
