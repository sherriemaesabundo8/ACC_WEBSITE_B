<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Settings | Abuyog Community College</title>
    @vite(['resources/css/styles.css', 'resources/js/script.js'])
    <style>
        .profile-page { padding: 2rem 0 3.5rem; }
        .profile-card {
            max-width: 560px;
            margin: 0 auto;
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 1.75rem;
        }
        .profile-card h2 {
            font-size: 1.25rem;
            margin-bottom: 0.35rem;
            color: #fff;
        }
        .profile-card .subtitle {
            color: var(--text-muted);
            font-size: 0.9rem;
            margin-bottom: 1.5rem;
        }
        .profile-form .form-group { margin-bottom: 1.15rem; }
        .profile-form label {
            display: block;
            font-size: 0.875rem;
            font-weight: 600;
            color: #e2e8f0;
            margin-bottom: 0.4rem;
        }
        .profile-form input {
            width: 100%;
            padding: 0.7rem 0.9rem;
            border: 1px solid var(--border-light);
            border-radius: 8px;
            font-size: 0.95rem;
            background: #0f172a;
            color: #f1f5f9;
        }
        .profile-form input:focus {
            outline: none;
            border-color: var(--accent);
            box-shadow: 0 0 0 3px rgba(59,130,246,0.25);
        }
        .profile-form .btn-save {
            background: var(--accent);
            color: #fff;
            border: none;
            padding: 0.7rem 1.4rem;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            font-size: 0.95rem;
        }
        .profile-form .btn-save:hover { background: #2563eb; }
        .status-ok {
            background: rgba(34,197,94,0.15);
            color: #4ade80;
            padding: 0.65rem 0.9rem;
            border-radius: 8px;
            font-size: 0.875rem;
            margin-bottom: 1rem;
            border: 1px solid rgba(34,197,94,0.3);
        }
        .error-msg { color: #f87171; font-size: 0.8rem; margin-top: 0.3rem; }
        .danger-zone {
            margin-top: 2rem;
            padding-top: 1.5rem;
            border-top: 1px solid var(--border);
        }
        .danger-zone h3 { color: #f87171; font-size: 1rem; margin-bottom: 0.5rem; }
        .danger-zone p { color: var(--text-muted); font-size: 0.875rem; margin-bottom: 0.75rem; }
        .btn-danger {
            background: transparent;
            color: #f87171;
            border: 1px solid #f87171;
            padding: 0.55rem 1.1rem;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            font-size: 0.875rem;
        }
        .btn-danger:hover { background: rgba(248,113,113,0.15); }
        .user-menu { position: relative; }
        .user-menu-btn {
            display: flex; align-items: center; gap: 0.5rem;
            background: transparent; border: none; color: #fff;
            cursor: pointer; padding: 0.25rem 0.4rem; border-radius: 6px;
        }
        .user-menu-btn:hover { background: rgba(255,255,255,0.08); }
        .user-menu-drop {
            display: none; position: absolute; right: 0; top: 110%;
            min-width: 220px; background: var(--bg-card);
            border: 1px solid var(--border-light); border-radius: 10px;
            box-shadow: var(--shadow); padding: 0.5rem; z-index: 80;
        }
        .user-menu.open .user-menu-drop { display: block; }
        .user-menu-drop .um-email {
            padding: 0.5rem 0.75rem; font-size: 0.8rem; color: var(--text-muted);
            border-bottom: 1px solid var(--border); margin-bottom: 0.35rem;
        }
        .user-menu-drop a, .user-menu-drop button {
            display: flex; align-items: center; gap: 0.5rem; width: 100%;
            padding: 0.55rem 0.75rem; border: none; background: transparent;
            color: var(--text-muted); font-size: 0.875rem; border-radius: 6px;
            cursor: pointer; text-align: left; text-decoration: none;
        }
        .user-menu-drop a:hover, .user-menu-drop button:hover {
            background: rgba(59,130,246,0.15); color: #fff;
        }
    </style>
</head>
<body>

<header class="header">
    <div class="container header-main">
        <a href="{{ route('home') }}" class="brand">
            <img src="{{ asset('image/ACC_LOGO.png') }}" alt="ACC Logo" class="brand-logo" width="48" height="48">
            <div class="brand-text"><h1>Abuyog Community College</h1></div>
        </a>
        <button class="nav-toggle" id="navToggle" type="button">☰</button>
        <nav class="nav" id="mainNav">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('dashboard') }}">Dashboard</a>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('vision-mission') }}">Vision & Mission</a>
        </nav>
        <div class="header-actions">
            <div class="auth-links">
                @auth
                <div class="user-menu" id="userMenu">
                    <button type="button" class="user-menu-btn" id="userMenuBtn">
                        <span class="user-avatar">{{ strtoupper(substr(Auth::user()->name, 0, 1)) }}</span>
                        <span style="font-size:0.85rem;">{{ Auth::user()->name }}</span>
                        <span style="opacity:0.6;font-size:0.7rem;">▾</span>
                    </button>
                    <div class="user-menu-drop">
                        <div class="um-email">{{ Auth::user()->email }}</div>
                        <a href="{{ route('profile.edit') }}">⚙ Settings</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit">↪ Log out</button>
                        </form>
                    </div>
                </div>
                @else
                    <a href="{{ route('login') }}" class="btn-login">Login</a>
                    <a href="{{ route('register') }}" class="btn-register">Register</a>
                @endauth
            </div>
        </div>
    </div>
</header>

<main class="profile-page">
    <div class="container">
        <div class="profile-card">
            <h2>Profile Settings</h2>
            <p class="subtitle">Update your name and email address.</p>

            @if (session('status') === 'profile-updated')
                <div class="status-ok">Profile updated successfully.</div>
            @endif

            <form method="POST" action="{{ route('profile.update') }}" class="profile-form">
                @csrf
                @method('patch')

                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input id="name" name="name" type="text" value="{{ old('name', $user->name) }}" required autocomplete="name">
                    @error('name')<p class="error-msg">{{ $message }}</p>@enderror
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input id="email" name="email" type="email" value="{{ old('email', $user->email) }}" required autocomplete="username">
                    @error('email')<p class="error-msg">{{ $message }}</p>@enderror
                </div>

                <button type="submit" class="btn-save">Save Changes</button>
            </form>

            <div class="danger-zone">
                <h3>Delete Account</h3>
                <p>Once your account is deleted, all of its resources and data will be permanently removed.</p>
                <form method="POST" action="{{ route('profile.destroy') }}" onsubmit="return confirm('Are you sure you want to delete your account? This cannot be undone.');">
                    @csrf
                    @method('delete')
                    <div class="form-group">
                        <label for="password">Confirm with password</label>
                        <input id="password" name="password" type="password" placeholder="Your password" required>
                        @error('password', 'userDeletion')<p class="error-msg">{{ $message }}</p>@enderror
                    </div>
                    <button type="submit" class="btn-danger">Delete Account</button>
                </form>
            </div>
        </div>
    </div>
</main>

<footer class="footer">
    <div class="container">
        <div class="footer-bottom" style="border-top:none;padding-top:1rem;">
            <span>© {{ date('Y') }} Abuyog Community College</span>
            <span>Abuyog, Leyte</span>
        </div>
    </div>
</footer>

<script>
document.getElementById('userMenuBtn')?.addEventListener('click', function(e) {
    e.stopPropagation();
    document.getElementById('userMenu').classList.toggle('open');
});
document.addEventListener('click', function() {
    document.getElementById('userMenu')?.classList.remove('open');
});
</script>
</body>
</html>
