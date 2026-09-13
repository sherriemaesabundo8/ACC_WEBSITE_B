<x-guest-layout title="Login">

    <div class="auth-card">
        <div class="auth-card-header">
            <img src="{{ asset('image/ACC_LOGO.png') }}" alt="ACC Logo">
            <h1>Welcome Back</h1>
            <p>Sign in to your ACC account</p>
        </div>

        <div class="auth-card-body">
            @if (session('status'))
                <div class="status-msg">{{ session('status') }}</div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="auth-form">
                @csrf

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" placeholder="you@example.com">
                    @error('email')
                        <p class="error-msg">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="password-wrap">
                        <input id="password" type="password" name="password" required autocomplete="current-password" placeholder="••••••••">
                        <button type="button" class="toggle-password" data-target="password" aria-label="Show password" title="Show password">
                            <svg class="eye-open" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                            <svg class="eye-closed" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display:none"><path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"/><line x1="1" y1="1" x2="23" y2="23"/></svg>
                        </button>
                    </div>
                    @error('password')
                        <p class="error-msg">{{ $message }}</p>
                    @enderror
                </div>

                <div class="remember-row">
                    <label>
                        <input type="checkbox" name="remember">
                        Remember me
                    </label>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">Forgot password?</a>
                    @endif
                </div>

                <button type="submit" class="btn-primary">Log In</button>
            </form>

            <div class="auth-footer">
                Don't have an account? <a href="{{ route('register') }}">Register</a>
            </div>

            <div class="auth-seals">
                <img src="{{ asset('image/foi-logo-160x160.png') }}" alt="Freedom of Information">
                <img src="{{ asset('image/transparency-seal-160x160.png') }}" alt="Philippine Transparency Seal">
            </div>
        </div>
    </div>

</x-guest-layout>
