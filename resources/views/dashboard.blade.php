<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Abuyog Community College</title>
    @vite(['resources/css/styles.css', 'resources/js/script.js'])
    <style>
        body { background: #0a0a0a !important; color: #f1f5f9; margin: 0; }
        .page-wrap { max-width: 1280px; margin: 0 auto; padding: 1.5rem 1.25rem 3rem; }
        .page-title { font-size: 1.5rem; font-weight: 700; color: #fff; margin-bottom: 0.35rem; }
        .page-sub { color: #94a3b8; font-size: 0.95rem; margin-bottom: 1.75rem; }
        .cards-row {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.25rem;
            margin-bottom: 1.25rem;
        }
        @media (max-width: 900px) { .cards-row { grid-template-columns: 1fr; } }
        .dash-card {
            background: #111111;
            border: 1px solid #1e1e1e;
            border-radius: 12px;
            padding: 1.5rem 1.25rem;
            min-height: 180px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            transition: border-color 0.2s, transform 0.2s;
        }
        .dash-card:hover { border-color: #3b82f6; transform: translateY(-2px); }
        .dash-card img {
            width: 88px; height: 88px; object-fit: contain;
            margin-bottom: 0.85rem; border-radius: 50%;
            background: #1a1a1a; padding: 6px;
        }
        .dash-card h3 { font-size: 1.05rem; font-weight: 700; color: #fff; margin-bottom: 0.25rem; }
        .dash-card p { font-size: 0.85rem; color: #94a3b8; }
        .dash-main {
            background: #111111;
            border: 1px solid #1e1e1e;
            border-radius: 12px;
            padding: 1.75rem 1.5rem;
            min-height: 280px;
        }
        .dash-main h2 { font-size: 1.25rem; font-weight: 700; color: #fff; margin-bottom: 0.75rem; }
        .dash-main p { color: #94a3b8; line-height: 1.7; margin-bottom: 1rem; font-size: 0.95rem; }
        .dash-main strong { color: #e2e8f0; }
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
            gap: 1rem;
            margin-top: 1.5rem;
        }
        .stat-box {
            background: #0a0a0a;
            border: 1px solid #1e1e1e;
            border-radius: 10px;
            padding: 1.1rem 1rem;
            text-align: center;
        }
        .stat-box .num { font-size: 1.6rem; font-weight: 700; color: #3b82f6; display: block; }
        .stat-box .label { font-size: 0.8rem; color: #94a3b8; margin-top: 0.25rem; }
        .quick-links {
            display: flex;
            flex-wrap: wrap;
            gap: 0.75rem;
            margin-top: 1.5rem;
        }
        .quick-links a {
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            padding: 0.55rem 1rem;
            background: #1a1a1a;
            border: 1px solid #2a2a2a;
            border-radius: 8px;
            color: #e2e8f0;
            font-size: 0.875rem;
            text-decoration: none;
            transition: background 0.2s, border-color 0.2s;
        }
        .quick-links a:hover { background: #1e3a5f; border-color: #3b82f6; color: #fff; }
    </style>
</head>
<body>

@include('partials.navbar')

<main class="page-wrap">
    <h1 class="page-title">Dashboard</h1>
    <p class="page-sub">Welcome back, {{ Auth::user()->name ?? 'User' }}. Here's an overview of Abuyog Community College.</p>

    <div class="cards-row">
        <div class="dash-card">
            <img src="{{ asset('image/ACC_LOGO.png') }}" alt="ACC Official Seal">
            <h3>ACC Official Seal</h3>
            <p>Abuyog Community College</p>
        </div>
        <div class="dash-card">
            <img src="{{ asset('image/transparency-seal-160x160.png') }}" alt="Transparency Seal">
            <h3>Transparency Seal</h3>
            <p>Government Transparency</p>
        </div>
        <div class="dash-card">
            <img src="{{ asset('image/foi-logo-160x160.png') }}" alt="Freedom of Information">
            <h3>Freedom of Information</h3>
            <p>FOI Philippines</p>
        </div>
    </div>

    <div class="dash-main">
        <h2>About Abuyog Community College</h2>
        <p>
            Since its founding in <strong>1979</strong>, <strong>Abuyog Community College</strong> has striven to provide students the knowledge, values, skills, and community involvement to enable them to excel as the forefront manpower of the community and of the global arena.
        </p>
        <p>
            With today’s fast-paced global progress, ACC promotes and fosters the acquisition of attributes that will empower students to triumph against ignorance and mediocrity and contribute positively to nation building.
        </p>
        <div class="stats-grid">
            <div class="stat-box"><span class="num">1979</span><span class="label">Year Founded</span></div>
            <div class="stat-box"><span class="num">#95</span><span class="label">WURI 2026 Ranking</span></div>
            <div class="stat-box"><span class="num">C3</span><span class="label">Curricular Innovation</span></div>
            <div class="stat-box"><span class="num">ACC</span><span class="label">Abuyog, Leyte</span></div>
        </div>
        <div class="quick-links">
            <a href="{{ route('about') }}">→ ACC Official Seal</a>
            <a href="{{ route('vision-mission') }}">→ Vision & Mission</a>
            <a href="{{ route('home') }}">→ Home</a>
            <a href="{{ route('profile.edit') }}">→ Profile Settings</a>
        </div>
    </div>
</main>
</body>
</html>
