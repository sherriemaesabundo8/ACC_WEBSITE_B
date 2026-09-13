{{-- Exact style from the Laravel dark navbar screenshot --}}
<style>
    .top-nav {
        background: #09090b;
        border-bottom: 1px solid #18181b;
        position: sticky;
        top: 0;
        z-index: 100;
        height: 56px;
        display: flex;
        align-items: center;
    }
    .top-nav-inner {
        width: 100%;
        max-width: 100%;
        margin: 0 auto;
        padding: 0 1rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 0.5rem;
    }
    .top-nav-left {
        display: flex;
        align-items: center;
        gap: 0.15rem;
        min-width: 0;
        flex: 1;
    }
    .top-nav-brand {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: #fafafa;
        text-decoration: none;
        font-weight: 600;
        font-size: 0.9rem;
        margin-right: 0.5rem;
        padding: 0.3rem 0.5rem;
        border-radius: 6px;
        white-space: nowrap;
        flex-shrink: 0;
    }
    .top-nav-brand:hover { color: #fafafa; background: rgba(255,255,255,0.05); }
    .top-nav-brand img,
    .top-nav-brand svg {
        width: 22px;
        height: 22px;
        flex-shrink: 0;
    }
    .top-nav-links {
        display: flex;
        align-items: center;
        gap: 0.1rem;
        list-style: none;
        margin: 0;
        padding: 0;
        flex-wrap: nowrap;
    }
    .top-nav-links a {
        display: flex;
        align-items: center;
        gap: 0.4rem;
        padding: 0.4rem 0.7rem;
        color: #a1a1aa;
        font-size: 0.875rem;
        text-decoration: none;
        border-radius: 6px;
        transition: color 0.15s, background 0.15s;
        white-space: nowrap;
    }
    .top-nav-links a:hover {
        color: #fafafa;
        background: rgba(255,255,255,0.06);
    }
    .top-nav-links a.active {
        color: #fafafa;
        background: #27272a;
    }
    .top-nav-links .nav-svg {
        width: 16px;
        height: 16px;
        opacity: 0.9;
        flex-shrink: 0;
    }
    .top-nav-right {
        display: flex;
        align-items: center;
        gap: 0.25rem;
        flex-shrink: 0;
    }
    .top-nav-icon-btn {
        width: 36px;
        height: 36px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: none;
        background: transparent;
        color: #a1a1aa;
        border-radius: 6px;
        cursor: pointer;
        transition: color 0.15s, background 0.15s;
    }
    .top-nav-icon-btn:hover {
        color: #fafafa;
        background: rgba(255,255,255,0.08);
    }
    .top-nav-icon-btn svg {
        width: 18px;
        height: 18px;
    }
    .top-nav-avatar {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background: #3f3f46;
        color: #fafafa;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
        font-size: 0.75rem;
        cursor: pointer;
        border: none;
        letter-spacing: -0.02em;
        margin-left: 0.25rem;
    }
    .top-nav-avatar:hover { background: #52525b; }
    .top-nav-user-wrap { position: relative; }
    .top-nav-dropdown {
        display: none;
        position: absolute;
        right: 0;
        top: calc(100% + 6px);
        min-width: 200px;
        background: #18181b;
        border: 1px solid #27272a;
        border-radius: 10px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.55);
        padding: 0.4rem;
        z-index: 200;
    }
    .top-nav-user-wrap.open .top-nav-dropdown { display: block; }
    .top-nav-dropdown .dd-email {
        padding: 0.5rem 0.75rem;
        font-size: 0.8rem;
        color: #71717a;
        border-bottom: 1px solid #27272a;
        margin-bottom: 0.3rem;
        word-break: break-all;
    }
    .top-nav-dropdown a,
    .top-nav-dropdown button {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        width: 100%;
        padding: 0.5rem 0.75rem;
        border: none;
        background: transparent;
        color: #a1a1aa;
        font-size: 0.875rem;
        border-radius: 6px;
        cursor: pointer;
        text-align: left;
        text-decoration: none;
    }
    .top-nav-dropdown a:hover,
    .top-nav-dropdown button:hover {
        background: rgba(255,255,255,0.08);
        color: #fafafa;
    }
    .top-nav-auth a {
        padding: 0.35rem 0.75rem;
        font-size: 0.85rem;
        border-radius: 6px;
        text-decoration: none;
    }
    .top-nav-auth .btn-login { color: #a1a1aa; }
    .top-nav-auth .btn-login:hover { color: #fafafa; }
    .top-nav-auth .btn-register {
        background: #3b82f6;
        color: #fff;
        margin-left: 0.25rem;
    }
    .top-nav-auth .btn-register:hover { background: #2563eb; color: #fff; }
    .mobile-toggle { display: none; }
    @media (max-width: 900px) {
        .top-nav-links { display: none; }
        .top-nav-links.open {
            display: flex;
            flex-direction: column;
            position: absolute;
            top: 56px;
            left: 0;
            right: 0;
            background: #09090b;
            border-bottom: 1px solid #18181b;
            padding: 0.5rem;
            gap: 0.1rem;
            z-index: 99;
        }
        .top-nav-links a { width: 100%; border-radius: 6px; }
        .mobile-toggle { display: flex !important; }
    }
</style>

<nav class="top-nav">
    <div class="top-nav-inner">
        <div class="top-nav-left">
            {{-- ACC logo --}}
            <a href="{{ route('home') }}" class="top-nav-brand">
                <img src="{{ asset('image/ACC_LOGO.png') }}" alt="Abuyog Community College" style="width: 28px; height: 28px; border-radius: 50%; object-fit: contain; background: #1a1a1a;">
                <span>Abuyog Community College</span>
            </a>

            <button class="top-nav-icon-btn mobile-toggle" id="mobileNavToggle" type="button" aria-label="Menu">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 6h16M4 12h16M4 18h16"/></svg>
            </button>

            <ul class="top-nav-links" id="topNavLinks">
                <li>
                    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">
                        <svg class="nav-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9.5L12 3l9 6.5V20a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9.5z"/><path d="M9 21V12h6v9"/></svg>
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{ route('about') }}" class="{{ request()->routeIs('about') || request()->routeIs('vision-mission') ? 'active' : '' }}">
                        <svg class="nav-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
                        About
                    </a>
                </li>
                <li>
                    <a href="#">
                        <svg class="nav-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"/></svg>
                        Admission
                    </a>
                </li>
                <li>
                    <a href="#">
                        <svg class="nav-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18"/><path d="M5 21V7l8-4v18"/><path d="M19 21V11l-6-4"/><path d="M9 9v0"/><path d="M9 12v0"/><path d="M9 15v0"/><path d="M9 18v0"/></svg>
                        Academe
                    </a>
                </li>
                <li>
                    <a href="#">
                        <svg class="nav-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                        Students Alumni
                    </a>
                </li>
                <li>
                    <a href="#">
                        <svg class="nav-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
                        Research & Extension
                    </a>
                </li>
                @auth
                <li>
                    <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <svg class="nav-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg>
                        Dashboard
                    </a>
                </li>
                @endauth
            </ul>
        </div>

        <div class="top-nav-right">
            <button class="top-nav-icon-btn" type="button" aria-label="Search">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg>
            </button>
            <button class="top-nav-icon-btn" type="button" aria-label="Folders">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"/></svg>
            </button>
            <button class="top-nav-icon-btn" type="button" aria-label="Bookmarks">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"/></svg>
            </button>

            @auth
            <div class="top-nav-user-wrap" id="userMenu">
                <button class="top-nav-avatar" id="userMenuBtn" type="button">
                    @php
                        $parts = explode(' ', Auth::user()->name);
                        $initials = strtoupper(substr($parts[0], 0, 1) . substr(end($parts) ?: '', 0, 1));
                    @endphp
                    {{ $initials }}
                </button>
                <div class="top-nav-dropdown">
                    <div class="dd-email">{{ Auth::user()->email }}</div>
                    <a href="{{ route('profile.edit') }}">⚙ Profile Settings</a>
                    <a href="{{ route('dashboard') }}">▦ Dashboard</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit">↪ Log out</button>
                    </form>
                </div>
            </div>
            @else
            <div class="top-nav-auth">
                <a href="{{ route('login') }}" class="btn-login">Login</a>
                <a href="{{ route('register') }}" class="btn-register">Register</a>
            </div>
            @endauth
        </div>
    </div>
</nav>

<script>
(function () {
    const menu = document.getElementById('userMenu');
    const btn = document.getElementById('userMenuBtn');
    if (menu && btn) {
        btn.addEventListener('click', function (e) {
            e.stopPropagation();
            menu.classList.toggle('open');
        });
        document.addEventListener('click', function () {
            menu.classList.remove('open');
        });
    }
    const mobileBtn = document.getElementById('mobileNavToggle');
    const links = document.getElementById('topNavLinks');
    if (mobileBtn && links) {
        mobileBtn.addEventListener('click', function () {
            links.classList.toggle('open');
        });
    }
})();
</script>
