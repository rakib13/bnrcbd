<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Registration</title>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    body {
        background: linear-gradient(135deg, #f5f5f5 25%, #ececec 25%, #ececec 50%, #f5f5f5 50%, #f5f5f5 75%, #ececec 75%, #ececec 100%);
        background-size: 40px 40px;
        font-family: "Segoe UI", sans-serif;
    }

    .registration-card {
        max-width: 600px;
        margin: 40px auto;
        background: #fff;
        border-radius: 14px;
        padding: 40px 35px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        border: 1px solid #ddd;
    }

    .registration-card h3 {
        text-align: center;
        color: #6a0f19;
        font-weight: 700;
        margin-bottom: 25px;
        position: relative;
    }

    .registration-card h3::after {
        content: "";
        display: block;
        width: 100%;
        height: 4px;
        background-color: #6a0f19;
        border-radius: 4px;
        margin: 8px auto 0;
        animation: expandLine 1.2s ease forwards;
    }

    @keyframes expandLine {
        from { width: 0%; }
        to { width: 100%; }
    }

    .form-floating input,
    .form-floating select {
        border-radius: 10px !important;
        height: 50px;
    }

    button[type="submit"] {
        border-radius: 10px;
        font-weight: 700;
        background-color: #6a0f19;
        color: #fff;
        height: 48px;
        font-size: 16px;
        text-transform: uppercase;
        transition: all 0.2s ease-in-out;
    }

    button[type="submit"]:hover {
        opacity: 0.85;
        transform: scale(1.02);
    }
</style>
</head>
<body>

<div class="registration-card">
    <h3>User Registration</h3>

    <form action="{{ url('/reg') }}" method="POST">
        @csrf
        <div class="row g-3">
            <!-- Full Name -->
            <div class="col-12">
                <div class="form-floating">
                    <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Your Name" required>
                    <label for="full_name">Full Name</label>
                </div>
            </div>

            <!-- User Name -->
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control" id="user_name" name="user_name" placeholder="User Name" required>
                    <label for="user_name">User Name</label>
                </div>
            </div>

            <!-- Email -->
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    <label for="email">Email</label>
                </div>
            </div>

            <!-- Password -->
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    <label for="password">Password</label>
                </div>
            </div>

            <!-- Confirm Password -->
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="password" class="form-control" id="confirm_password" placeholder="Confirm Password" required>
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

            <!-- Submit Button -->
            <div class="col-12">
                <button type="submit" class="btn w-100">Register</button>
                <div class="text-center mt-3">
                    Already registered? <a href="./login">Login</a>
                </div>
            </div>
        </div>
    </form>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>