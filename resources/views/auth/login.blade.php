<!DOCTYPE html>
<html lang="en">

@include('layouts.header')

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
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Login </h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active text-primary"> Login</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- Registration Start -->
<div class="container-fluid bg-light blog pb-2">
    <div class="text-center mx-auto py-4 pb-3 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 1200px;">
        <div id="mission" class="bg-white rounded px-5 py-4 w-50 section active mx-auto">

            <h4 class="text-primary text-center mt-2" class="col-12">Login</h4>

            <div id="error-message" class="alert alert-danger d-none"></div>

            <div class="login-wrapper">
                <div class="row g-4 justify-content-center mt-1">
                    <form id="login-form" action="{{ url('/login') }}" method="POST">
                        @csrf
                        <div class="col-12 position-relative">
                            <i class="bi bi-envelope input-icon"></i>
                            <div class="form-floating">
                                <input type="text" class="form-control border-0" name="email" id="email"
                                    placeholder="Email">
                                <label for="email">Email</label>
                            </div>
                        </div>

                        <div class="col-12 position-relative mt-3">
                            <i class="bi bi-lock input-icon"></i>
                            <div class="form-floating">
                                <input type="password" class="form-control border-0" name="password" id="password"
                                    placeholder="Password">
                                <label for="password">Password</label>
                            </div>
                        </div>

                        <div class="col-12 mt-4">
                            <button type="submit" id="login-btn" class="btn btn-primary w-100 py-3 my-2">Login</button>
                            <div class="text-center mt-2">
                                Not a registered user? <a href="./reg">Register</a>.
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Registration End -->

@include('layouts.footer')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap Icons CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
<script>
    $(document).ready(function () {
        $('#login-btn').on('click', function () {
            const btn = $(this);
            const errorBox = $('#error-message');

            errorBox.addClass('d-none').text('');
            btn.prop('disabled', true).text('Logging in...');

            $.ajax({
                url: $('#login-form').attr('action'),
                type: 'POST',
                data: $('#login-form').serialize(),
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (res) {
                    if (res.success && res.redirect_url) {
                        window.location.href = res.redirect_url;
                    } else {
                        errorBox.removeClass('d-none').text(
                            'Login failed. Invalid response.');
                    }
                },
                error: function (xhr) {
                    let message = 'Login failed.';
                    errorBox.removeClass('d-none alert-danger alert-warning');

                    if (xhr.responseJSON && xhr.responseJSON.message) {
                        message = xhr.responseJSON.message;

                        if (message.toLowerCase().includes('inactive')) {
                            // Yellow alert for inactive user
                            errorBox.addClass('alert-warning');
                        } else {
                            // Red alert for invalid credentials
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