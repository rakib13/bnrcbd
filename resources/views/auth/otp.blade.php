 @include('layouts.header')

<div class="container mt-5">
    <h3 class="text-center mb-4">Enter OTP</h3>

    <div id="alert-box" class="text-center mb-3"></div>

    <form id="otpForm" method="POST" class="w-50 mx-auto" onsubmit="return false;">
        @csrf
        <input type="hidden" name="user_id" id="user_id" value="{{ $user_id }}">

        <div class="mb-3">
            <label for="otp" class="form-label">OTP Code</label>
            <input type="text" class="form-control text-center fs-4 fw-bold"
                   name="otp" id="otp" maxlength="6" pattern="\d*" autocomplete="off"
                   placeholder="Enter 6-digit OTP" required>
        </div>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(function () {
    const otpInput = $('#otp');
    const alertBox = $('#alert-box');

    otpInput.on('input', function () {
        const otp = $(this).val().trim();
        const userId = $('#user_id').val();

        if (otp.length === 6) {
            $.ajax({
                url: "{{ route('otp.verify') }}",
                type: "POST",
                dataType: "json",
                data: {
                    _token: "{{ csrf_token() }}",
                    otp: otp,
                    user_id: userId
                },
                beforeSend: function() {
                    otpInput.prop('disabled', true);
                    alertBox.html('<div class="alert alert-info">🔄 Verifying OTP...</div>');
                },
                success: function(response) {
                    if (response.success) {
                        // ✅ Redirect instantly
                        window.location.href = response.redirect_url;
                    } else {
                        alertBox.html('<div class="alert alert-danger">❌ ' + response.message + '</div>');
                        otpInput.prop('disabled', false).val('').focus();
                    }
                },
                error: function() {
                    alertBox.html('<div class="alert alert-danger">⚠️ Server error. Please try again.</div>');
                    otpInput.prop('disabled', false);
                }
            });
        }
    });
});
</script>

@include('layouts.footer')
