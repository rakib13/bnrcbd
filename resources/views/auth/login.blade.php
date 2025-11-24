<!DOCTYPE html> 
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>BNRC Login</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

<style>
    body {
        background: linear-gradient(135deg, #f5f5f5 25%, #ececec 25%, #ececec 50%, #f5f5f5 50%, #f5f5f5 75%, #ececec 75%, #ececec 100%);
        background-size: 40px 40px;
        font-family: "Segoe UI", sans-serif;
    }

    .login-container {
        max-width: 420px;
        width: 100%;
        background: #fff;
        border-radius: 14px;
        padding: 40px 35px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.20);
        border: 1px solid #ddd;
        transition: transform .3s ease;
        animation: fadeIn 0.8s ease-out;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(12px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .login-container:hover {
        transform: translateY(-3px);
    }

    .login-title {
        font-weight: 800;
        font-size: 27px;
        color: #6a0f19;
        text-transform: uppercase;
        letter-spacing: .8px;
        text-align: center;
        margin-bottom: 5px;
    }

    .underline {
        width: 0%;
        height: 5px;
        background: #6a0f19;
        margin: 0 auto 22px auto;
        border-radius: 4px;
        animation: expandLine 1.4s ease forwards;
    }

    @keyframes expandLine {
        from { width: 0%; }
        to { width: 100%; }
    }

    .input-icon {
        position: absolute;
        top: 50%;
        left: 15px;
        transform: translateY(-50%);
        font-size: 1.2rem;
        color: #6c757d;
    }

    .form-floating input {
        padding-left: 2.6rem !important;
        height: 52px;
        border-radius: 10px !important;
    }

    .form-floating input:focus {
        border: 2px solid #6a0f19 !important;
        box-shadow: 0 0 8px rgba(106,15,25,0.35) !important;
    }

    #login-btn {
    height: 48px;
    border-radius: 10px;
    font-size: 17px;
    font-weight: 700; /* Make text bolder */
    background-color: #6a0f19;
    border: none;
    color: #fff;
    text-shadow: 1px 1px 2px rgba(0,0,0,0.3); /* subtle text focus effect */
    transition: all 0.2s ease-in-out;
}

#login-btn:focus, #login-btn:active, #login-btn:hover {
    outline: none;
    box-shadow: 0 0 8px rgba(106,15,25,0.6); /* focus glow around button */
    transform: scale(1.02); /* slight pop effect */
}
</style>
</head>
<body>

<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="login-container">

        <h3 class="login-title">BNRC</h3>
        <div class="underline"></div>

        <p class="text-center text-muted mb-4">Sign in to continue</p>

        <div id="error-message" class="alert alert-danger d-none"></div>

        <form id="login-form" action="{{ url('/login') }}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="col-12 position-relative mb-3">
                <i class="bi bi-envelope input-icon"></i>
                <div class="form-floating">
                    <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                    <label for="email">Email</label>
                </div>
            </div>

            <div class="col-12 position-relative mb-4">
                <i class="bi bi-lock input-icon"></i>
                <div class="form-floating">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    <label for="password">Password</label>
                </div>
            </div>

            <button type="submit" id="login-btn" class="btn w-100">Login</button>

            <div class="text-center mt-4">
                <span class="text-muted">New here?</span> <a href="./reg">Create an account</a>
            </div>
        </form>

    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function () {
    $('#login-btn').on('click', function (e) {
        e.preventDefault();

        const btn = $(this);
        const errorBox = $('#error-message');

        errorBox.addClass('d-none').text('');
        btn.prop('disabled', true).text('Logging in...');

        $.ajax({
            url: $('#login-form').attr('action'),
            type: 'POST',
            data: $('#login-form').serialize(),
            headers: {'X-CSRF-TOKEN': $('input[name="_token"]').val()},
            success: function (res) {
                if (res.success && res.redirect_url) {
                    window.location.href = res.redirect_url;
                } else {
                    errorBox.removeClass('d-none').text('Login failed. Invalid response.');
                }
            },
            error: function (xhr) {
                let message = 'Login failed.';
                errorBox.removeClass('d-none alert-danger alert-warning');
                if (xhr.responseJSON && xhr.responseJSON.message) {
                    message = xhr.responseJSON.message;
                    if (message.toLowerCase().includes('inactive')) {
                        errorBox.addClass('alert-warning');
                    } else {
                        errorBox.addClass('alert-danger');
                    }
                }
                errorBox.text(message);
            },
            complete: function () {
                btn.prop('disabled', false).text('Login');
            }
        });
    });
});
</script>

</body>
</html>
