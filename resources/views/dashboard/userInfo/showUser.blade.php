@extends('dashboard.layouts.mainLayout')

@section('dashboard-content')
    <div class="row justify-content-center">
        <div class="col-lg-11">
            <div class="card shadow border-0">
                <div class="card-body p-5">

                    <h3 class="text-center text-primary mb-4">User : {{ $userInfo->full_name }}</h3>

                    <div class="row g-3">

                        <!-- Button -->
                        <div class="col-md-12">
                            <a class="btn btn-primary px-3 py-2 me-3" href="{{ url('/user-list') }}">Back to User List </a>
                            <a class="btn btn-info px-4 py-2" href="{{ url('/edit-user/' . $userInfo->id) }}">Edit User Info</a>
                        </div>

                        <!-- Full Name -->
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="full_name" name="full_name"
                                    value="{{ $userInfo->full_name }}" placeholder="Your Name" required>
                                <label for="full_name">Full Name</label>
                            </div>
                        </div>

                        <!-- User Name -->
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="user_name" name="user_name"
                                    value="{{ $userInfo->user_name }}" placeholder="User Name" required>
                                <label for="user_name">User Name</label>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ $userInfo->email }}" placeholder="Email" required>
                                <label for="email">Email</label>
                            </div>
                        </div>

                        <!-- Role Select -->
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-select" id="role" name="role" required>
                                    <option value="" disabled selected>Select Role</option>
                                    <option {{ $userInfo->role == 'admin' ? 'selected' : '' }} value="admin">Admin</option>
                                    <option {{ $userInfo->role == 'user' ? 'selected' : '' }} value="user">User</option>
                                </select>
                                <label for="role">Role</label>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        {{-- <div class="col-md-12">
                                <button class="btn btn-primary w-100 py-2" type="submit">Create</button>
                            </div> --}}
                    </div> <!-- row -->
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
