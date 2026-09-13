<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Abuyog Community College - Vision, Mission, Goals & Core Values">
    <title>Vision & Mission | Abuyog Community College</title>
    @vite(['resources/css/styles.css', 'resources/js/script.js'])
    <style>
        body { background: #0a0a0a !important; color: #f1f5f9; margin: 0; }
        .page-wrap { max-width: 1000px; margin: 0 auto; padding: 1.5rem 1.25rem 3rem; }
        .page-title { font-size: 1.5rem; font-weight: 700; color: #fff; text-align: center; margin-bottom: 1.5rem; }
        .vm-card {
            background: #111111;
            border: 1px solid #1e1e1e;
            border-radius: 12px;
            overflow: hidden;
            padding: 1rem;
        }
        .vm-card img { width: 100%; height: auto; display: block; border-radius: 8px; }
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
    <h1 class="page-title">Vision · Mission · Goals · Core Values</h1>
    <div class="vm-card">
        <img src="{{ asset('image/v&m.jpg') }}" alt="Abuyog Community College VMGO Statement">
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
