<x-guest-layout title="Forgot Password">

    <div class="auth-card">
        <div class="auth-card-header">
            <img src="{{ asset('image/ACC_LOGO.png') }}" alt="ACC Logo">
            <h1>Forgot Password</h1>
            <p>We'll email you a reset link</p>
        </div>

        <div class="auth-card-body">
            @if (session('status'))
                <div class="status-msg">{{ session('status') }}</div>
            @endif

            <form method="POST" action="{{ route('password.email') }}" class="auth-form">
                @csrf

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" placeholder="you@example.com">
                    @error('email')
                        <p class="error-msg">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="btn-primary">Email Password Reset Link</button>
            </form>

            <div class="auth-footer">
                <a href="{{ route('login') }}">← Back to Login</a>
            </div>

            <div class="auth-seals">
                <img src="{{ asset('image/foi-logo-160x160.png') }}" alt="Freedom of Information">
                <img src="{{ asset('image/transparency-seal-160x160.png') }}" alt="Philippine Transparency Seal">
            </div>
        </div>
    </div>

</x-guest-layout>
