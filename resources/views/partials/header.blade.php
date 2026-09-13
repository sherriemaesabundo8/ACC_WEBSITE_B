<header class="header">
    <div class="container header-main">
        <a href="{{ route('home') }}" class="brand">
            <img src="{{ asset('image/ACC_LOGO.png') }}" alt="Abuyog Community College Logo" class="brand-logo" width="48" height="48">
            <div class="brand-text">
                <h1>ABUYOG COMMUNITY COLLEGE</h1>
            </div>
        </a>

        <button class="nav-toggle" id="navToggle" aria-label="Toggle menu" type="button">☰</button>

        <nav class="nav" id="mainNav">
            @auth
                <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">Dashboard</a>
            @endauth
            <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
            <a href="#">Students & Alumni</a>
            <a href="#">Academe</a>
        
            
        </nav>

        <div class="header-actions">
            <div class="search-box">
                <input type="search" placeholder="Search..." aria-label="Search" id="searchInput">
                <button type="button" aria-label="Search">⌕</button>
            </div>

            <div class="auth-links">
                @auth
                    <div class="user-menu" id="userMenu">
                        <button type="button" class="user-menu-btn" id="userMenuBtn" aria-label="Account menu">
                            <span class="user-avatar">{{ strtoupper(substr(Auth::user()->name, 0, 1)) }}</span>
                        </button>
                        <div class="user-menu-drop" id="userMenuDrop">
                            <div class="um-header">
                                <span class="user-avatar">{{ strtoupper(substr(Auth::user()->name, 0, 1)) }}</span>
                                <div>
                                    <div class="um-name">{{ Auth::user()->name }}</div>
                                    <div class="um-email">{{ Auth::user()->email }}</div>
                                </div>
                            </div>
                            <a href="{{ route('profile.edit') }}" class="um-item">
                                <span>⚙</span> Profile Settings
                            </a>
                            <a href="{{ route('dashboard') }}" class="um-item">
                                <span>▦</span> Dashboard
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="um-item um-logout">
                                    <span>↪</span> Log out
                                </button>
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
