<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Abuyog Community College - Official Website">
    <title>Abuyog Community College | Home</title>
    @vite(['resources/css/styles.css', 'resources/js/script.js'])
    <style>
        body { background: #0a0a0a !important; color: #f1f5f9; margin: 0; }
        .page-wrap { max-width: 1280px; margin: 0 auto; padding: 1.5rem 1.25rem 3rem; }
        .seals-row {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.25rem;
            margin-bottom: 1.5rem;
        }
        @media (max-width: 800px) { .seals-row { grid-template-columns: 1fr; } }
        .seal-card {
            background: #111111;
            border: 1px solid #1e1e1e;
            border-radius: 12px;
            padding: 1.75rem 1.25rem;
            min-height: 200px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            transition: border-color 0.2s, transform 0.2s;
        }
        .seal-card:hover { border-color: #3b82f6; transform: translateY(-2px); }
        .seal-card img {
            width: 110px; height: 110px; object-fit: contain;
            margin-bottom: 1rem; border-radius: 50%;
            background: #1a1a1a; padding: 8px;
        }
        .seal-card h3 { font-size: 1.05rem; font-weight: 700; color: #fff; margin-bottom: 0.25rem; }
        .seal-card p { font-size: 0.85rem; color: #94a3b8; }
        .home-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
            align-items: start;
        }
        @media (max-width: 900px) { .home-grid { grid-template-columns: 1fr; } }
        .home-text-card, .home-video-card {
            background: #111111;
            border: 1px solid #1e1e1e;
            border-radius: 12px;
        }
        .home-text-card { padding: 1.75rem 1.5rem; }
        .home-text-card h2 { font-size: 1.35rem; font-weight: 700; color: #fff; margin-bottom: 1rem; }
        .home-text-card p { color: #94a3b8; font-size: 0.95rem; line-height: 1.7; margin-bottom: 0.9rem; }
        .home-text-card strong { color: #e2e8f0; }
        .home-video-card { overflow: hidden; }
        .home-video-card .video-header {
            padding: 1rem 1.25rem;
            border-bottom: 1px solid #1e1e1e;
        }
        .home-video-card .video-header h3 { font-size: 1.05rem; font-weight: 600; color: #fff; margin: 0; }
        .home-video-card .video-header p { font-size: 0.85rem; color: #94a3b8; margin: 0.25rem 0 0; }
        .video-ratio {
            position: relative; width: 100%; padding-bottom: 56.25%; height: 0; background: #0a0a0a;
        }
        .video-ratio iframe {
            position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: 0;
        }
        .stats-row {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1rem;
            margin-top: 1.5rem;
        }
        @media (max-width: 700px) { .stats-row { grid-template-columns: 1fr 1fr; } }
        .stat-item {
            background: #0a0a0a;
            border: 1px solid #1e1e1e;
            border-radius: 10px;
            padding: 1rem;
            text-align: center;
        }
        .stat-item .num { font-size: 1.5rem; font-weight: 700; color: #3b82f6; display: block; }
        .stat-item .label { font-size: 0.8rem; color: #94a3b8; margin-top: 0.2rem; }
        .footer {
            background: #0f0f0f;
            border-top: 1px solid #1a1a1a;
            margin-top: 2rem;
            padding: 2.5rem 0 1.5rem;
        }
        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 1.5rem;
            margin-bottom: 1.5rem;
            max-width: 1280px;
            margin-left: auto;
            margin-right: auto;
            padding: 0 1.25rem;
        }
        .footer h4 { color: #fff; margin-bottom: 0.75rem; font-size: 0.95rem; }
        .footer p, .footer a { color: #94a3b8; font-size: 0.875rem; display: block; margin-bottom: 0.35rem; text-decoration: none; }
        .footer a:hover { color: #fff; }
        .footer-bottom {
            border-top: 1px solid #1a1a1a;
            padding: 1rem 1.25rem 0;
            max-width: 1280px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 0.5rem;
            font-size: 0.8rem;
            color: #64748b;
        }
    </style>
</head>
<body>

@include('partials.navbar')

<main class="page-wrap">
    <div class="seals-row">
        <div class="seal-card">
            <img src="{{ asset('image/ACC_LOGO.png') }}" alt="ACC Official Seal">
            <h3>ACC Official Seal</h3>
            <p>Abuyog Community College</p>
        </div>
        <div class="seal-card">
            <img src="{{ asset('image/transparency-seal-160x160.png') }}" alt="Transparency Seal">
            <h3>Transparency Seal</h3>
            <p>Government Transparency</p>
        </div>
        <div class="seal-card">
            <img src="{{ asset('image/foi-logo-160x160.png') }}" alt="Freedom of Information">
            <h3>Freedom of Information</h3>
            <p>FOI Philippines</p>
        </div>
    </div>

    <div class="home-grid">
        <div class="home-text-card">
            <h2>About Abuyog Community College</h2>
            <p>
                Since its founding in <strong>1979</strong>, <strong>Abuyog Community College</strong> has striven to provide students the knowledge, values, skills, and community involvement to enable them to excel as the forefront manpower of the community and of the global arena. ACC aims for the creation of a scholastic environment composed of individuals that are grounded in faith, integrity, respect and trust.
            </p>
            <p>
                With today’s fast-paced global progress, ACC promotes and fosters the acquisition of attributes that will empower students to triumph against ignorance and mediocrity and contribute positively to nation building.
            </p>
            <div class="stats-row">
                <div class="stat-item"><span class="num">1979</span><span class="label">Founded</span></div>
                <div class="stat-item"><span class="num">#95</span><span class="label">WURI Rank</span></div>
                <div class="stat-item"><span class="num">C3</span><span class="label">Innovation</span></div>
                <div class="stat-item"><span class="num">ACC</span><span class="label">Abuyog, Leyte</span></div>
            </div>
        </div>
        <div class="home-video-card">
            <div class="video-header">
                <h3>About Abuyog Community College</h3>
                <p>Learn more about Abuyog Community College</p>
            </div>
            <div class="video-ratio">
                <iframe loading="lazy" title="ACC" src="https://www.youtube.com/embed/_dHiZW9oDdw?start=14"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</main>

<footer class="footer" id="contact">
    <div class="footer-grid">
        <div>
            <h4>Abuyog Community College</h4>
            <p>Abuyog, Leyte, Philippines</p>
            <p>Established 1979</p>
        </div>
        <div>
            <h4>Explore</h4>
            <a href="{{ route('about') }}">About ACC</a>
            <a href="{{ route('vision-mission') }}">Vision & Mission</a>
            <a href="#">Admission</a>
            <a href="#">Academic Programs</a>
        </div>
        <div>
            <h4>Resources</h4>
            <a href="#">Student Handbook</a>
            <a href="#">Citizen's Charter</a>
            <a href="#">Transparency Seal</a>
            <a href="#">FOI Manual</a>
        </div>
        <div>
            <h4>Contact</h4>
            <p>Email: info@accabuyog.com</p>
            <p>Abuyog, Leyte</p>
        </div>
    </div>
    <div class="footer-bottom">
        <span>© {{ date('Y') }} Abuyog Community College. All rights reserved.</span>
        <span>Abuyog, Leyte · Philippines</span>
    </div>
</footer>
</body>
</html>
