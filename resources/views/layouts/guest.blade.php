<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Abuyog Community College | {{ $title ?? 'Account' }}</title>
    @vite(['resources/css/styles.css', 'resources/js/script.js'])
    <style>
        body { background: #0a0a0a !important; color: #f1f5f9; margin: 0; }
        .auth-page {
            min-height: calc(100vh - 56px);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 1.25rem;
            background: #0a0a0a;
        }
        .auth-card {
            width: 100%;
            max-width: 420px;
            background: #111111;
            border-radius: 12px;
            box-shadow: 0 12px 40px rgba(0,0,0,0.5);
            border: 1px solid #1e1e1e;
            overflow: hidden;
        }
        .auth-card-header {
            background: #0f0f0f;
            color: #fff;
            text-align: center;
            padding: 1.75rem 1.5rem 1.5rem;
            border-bottom: 1px solid #1e1e1e;
        }
        .auth-card-header img {
            width: 72px;
            height: 72px;
            margin: 0 auto 0.75rem;
            border-radius: 50%;
            background: #1a1a1a;
            padding: 4px;
            object-fit: contain;
            display: block;
        }
        .auth-card-header h1 {
            font-size: 1.15rem;
            font-weight: 700;
            margin: 0;
            color: #fff;
        }
        .auth-card-header p {
            font-size: 0.85rem;
            color: #94a3b8;
            margin-top: 0.35rem;
        }
        .auth-card-body { padding: 1.75rem 1.5rem 1.5rem; }
        .auth-form .form-group { margin-bottom: 1.1rem; }
        .auth-form label {
            display: block;
            font-size: 0.875rem;
            font-weight: 600;
            color: #e2e8f0;
            margin-bottom: 0.4rem;
        }
        .auth-form input[type="text"],
        .auth-form input[type="email"],
        .auth-form input[type="password"],
        .auth-form input[type="name"] {
            width: 100%;
            padding: 0.7rem 0.9rem;
            border: 1px solid #2a2a2a;
            border-radius: 8px;
            font-size: 0.95rem;
            background: #0a0a0a;
            color: #f1f5f9;
            transition: border-color 0.2s, box-shadow 0.2s;
            box-sizing: border-box;
        }
        .auth-form input:focus {
            outline: none;
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.25);
        }
        .auth-form input::placeholder { color: #64748b; }
        .auth-form .remember-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 1.25rem;
            font-size: 0.875rem;
        }
        .auth-form .remember-row label {
            display: flex;
            align-items: center;
            gap: 0.4rem;
            color: #94a3b8;
            font-weight: 400;
            margin: 0;
            cursor: pointer;
        }
        .auth-form .remember-row a { color: #60a5fa; text-decoration: none; }
        .auth-form .remember-row a:hover { color: #fff; }
        .auth-form .btn-primary {
            width: 100%;
            padding: 0.75rem 1rem;
            background: #3b82f6;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 0.95rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
        }
        .auth-form .btn-primary:hover { background: #2563eb; }
        .auth-footer {
            text-align: center;
            margin-top: 1.25rem;
            font-size: 0.875rem;
            color: #94a3b8;
        }
        .auth-footer a { color: #60a5fa; text-decoration: none; }
        .auth-footer a:hover { color: #fff; }
        .error-msg { color: #f87171; font-size: 0.8rem; margin-top: 0.35rem; }
        .status-msg {
            background: rgba(34, 197, 94, 0.15);
            color: #4ade80;
            padding: 0.65rem 0.85rem;
            border-radius: 8px;
            font-size: 0.875rem;
            margin-bottom: 1rem;
            border: 1px solid rgba(34, 197, 94, 0.3);
        }
        .password-wrap { position: relative; }
        .password-wrap input { padding-right: 2.75rem; }
        .toggle-password {
            position: absolute;
            right: 0.65rem;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #64748b;
            cursor: pointer;
            padding: 0.25rem;
            display: flex;
            align-items: center;
        }
        .toggle-password:hover { color: #fff; }
        .auth-seals {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-top: 1.5rem;
            padding-top: 1.25rem;
            border-top: 1px solid #1e1e1e;
        }
        .auth-seals img {
            width: 48px;
            height: 48px;
            object-fit: contain;
            opacity: 0.85;
        }
    </style>
</head>
<body>

@include('partials.navbar')

<div class="auth-page">
    {{ $slot }}
</div>

<script>
document.querySelectorAll('.toggle-password').forEach(function (btn) {
    btn.addEventListener('click', function () {
        const target = document.getElementById(btn.getAttribute('data-target'));
        if (!target) return;
        const isPass = target.type === 'password';
        target.type = isPass ? 'text' : 'password';
        const open = btn.querySelector('.eye-open');
        const closed = btn.querySelector('.eye-closed');
        if (open && closed) {
            open.style.display = isPass ? 'none' : 'block';
            closed.style.display = isPass ? 'block' : 'none';
        }
    });
});
</script>
</body>
</html>
