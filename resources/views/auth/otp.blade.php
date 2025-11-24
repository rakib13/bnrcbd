<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter OTP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h3 class="text-center mb-4">Enter OTP</h3>
    <div id="alert-box" class="text-center mb-3"></div>

    <form id="otpForm" class="w-50 mx-auto" action="javascript:void(0);" method="POST">
        @csrf
        <input type="hidden" name="user_id" id="user_id" value="{{ $user_id }}">

        <!-- Step 1: User OTP -->
        <div id="user-otp-section" class="mb-3">
            <label for="user_otp" class="form-label">Your OTP</label>
            <input type="text" class="form-control text-center fs-4 fw-bold"
                   name="user_otp" id="user_otp" maxlength="6" pattern="\d*" autocomplete="off"
                   placeholder="Enter 6-digit OTP" required>
        </div>

        <!-- Step 2: Admin OTP (hidden initially) -->
        <div id="admin-otp-section" class="mb-3" style="display:none;">
            <label for="admin_otp" class="form-label">Admin OTP</label>
            <input type="text" class="form-control text-center fs-4 fw-bold"
                   name="admin_otp" id="admin_otp" maxlength="6" pattern="\d*" autocomplete="off"
                   placeholder="Enter 6-digit Admin OTP">
        </div>

    </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(function () {
    const userInput = $('#user_otp');
    const adminInput = $('#admin_otp');
    const alertBox = $('#alert-box');
    const userId = $('#user_id').val();

    // Step 1: Verify User OTP
    userInput.on('input', function () {
        const otp = $(this).val().trim();
        if (otp.length === 6) {
            $.ajax({
                url: "{{ route('otp.verify_user') }}",
                type: "POST",
                data: {_token: "{{ csrf_token() }}", otp: otp, user_id: userId},
                beforeSend: function() {
                    userInput.prop('disabled', true);
                    alertBox.html('<div class="alert alert-info">🔄 Verifying User OTP...</div>');
                },
                success: function(response) {
                    if (response.success) {
                        alertBox.html('<div class="alert alert-success">✅ User OTP verified. Enter Admin OTP.</div>');
                        $('#user-otp-section').hide();
                        $('#admin-otp-section').show();
                        adminInput.focus();
                    } else {
                        alertBox.html('<div class="alert alert-danger">❌ ' + response.message + '</div>');
                        userInput.prop('disabled', false).val('').focus();
                    }
                },
                error: function() {
                    alertBox.html('<div class="alert alert-danger">⚠️ Server error. Please try again.</div>');
                    userInput.prop('disabled', false);
                }
            });
        }
    });

    // Step 2: Verify Admin OTP
    adminInput.on('input', function () {
        const otp = $(this).val().trim();
        if (otp.length === 6) {
            $.ajax({
                url: "{{ route('otp.verify_admin') }}",
                type: "POST",
                data: {_token: "{{ csrf_token() }}", otp: otp, user_id: userId},
                beforeSend: function() {
                    adminInput.prop('disabled', true);
                    alertBox.html('<div class="alert alert-info">🔄 Verifying Admin OTP...</div>');
                },
                success: function(response) {
                    if (response.success) {
                        alertBox.html('<div class="alert alert-success">✅ Admin OTP verified. Redirecting...</div>');
                        window.location.href = response.redirect_url;
                    } else {
                        alertBox.html('<div class="alert alert-danger">❌ ' + response.message + '</div>');
                        adminInput.prop('disabled', false).val('').focus();
                    }
                },
                error: function() {
                    alertBox.html('<div class="alert alert-danger">⚠️ Server error. Please try again.</div>');
                    adminInput.prop('disabled', false);
                }
            });
        }
    });
});
</script>

</body>
</html>
