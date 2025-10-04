{{-- @include('layouts.header') --}}

<div class="container mt-5">
    <h3 class="text-center mb-4">Enter OTP</h3>

    @if ($errors->any())
        <div class="alert alert-danger">{{ $errors->first() }}</div>
    @endif

    <form action="{{ route('otp.verify') }}" method="POST" class="w-50 mx-auto">
        @csrf
        <input type="hidden" name="user_id" value="{{ $user_id }}">

        <div class="mb-3">
            <label for="otp" class="form-label">OTP Code</label>
            <input type="text" class="form-control @error('otp') is-invalid @enderror"
                   name="otp" id="otp" value="{{ old('otp') }}" required>
            @error('otp')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary w-100">Verify OTP</button>
    </form>
</div>

{{-- @include('layouts.footer') --}}
