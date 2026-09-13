<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ACC Official Seal and About - Abuyog Community College">
    <title>About - Abuyog Community College</title>
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
            min-height: 180px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            transition: border-color 0.2s, transform 0.2s;
        }
        .seal-card:hover { border-color: #3b82f6; transform: translateY(-2px); }
        .seal-card img {
            width: 100px; height: 100px; object-fit: contain;
            margin-bottom: 0.85rem; border-radius: 50%;
            background: #1a1a1a; padding: 6px;
        }
        .seal-card h3 { font-size: 1.05rem; font-weight: 700; color: #fff; margin-bottom: 0.25rem; }
        .seal-card p { font-size: 0.85rem; color: #94a3b8; margin: 0; }
        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
            align-items: start;
        }
        @media (max-width: 900px) { .about-grid { grid-template-columns: 1fr; } }
        .about-text-card {
            background: #111111;
            border: 1px solid #1e1e1e;
            border-radius: 12px;
            padding: 1.75rem 1.5rem;
        }
        .about-text-card h2 {
            font-size: 1.35rem;
            font-weight: 700;
            color: #fff;
            margin: 0 0 1rem;
        }
        .about-text-card h3 {
            font-size: 1.1rem;
            font-weight: 700;
            color: #fff;
            margin: 1.5rem 0 0.85rem;
        }
        .about-text-card p {
            color: #94a3b8;
            font-size: 0.95rem;
            line-height: 1.7;
            margin: 0 0 0.9rem;
        }
        .about-text-card strong { color: #e2e8f0; }
        .about-videos {
            display: flex;
            flex-direction: column;
            gap: 1.25rem;
        }
        .video-card {
            background: #111111;
            border: 1px solid #1e1e1e;
            border-radius: 12px;
            overflow: hidden;
        }
        .video-card .video-header {
            padding: 1rem 1.25rem;
            border-bottom: 1px solid #1e1e1e;
        }
        .video-card .video-header h3 {
            font-size: 1.05rem;
            font-weight: 600;
            color: #fff;
            margin: 0;
        }
        .video-card .video-header p {
            font-size: 0.85rem;
            color: #94a3b8;
            margin: 0.25rem 0 0;
        }
        .video-ratio {
            position: relative;
            width: 100%;
            padding-bottom: 56.25%;
            height: 0;
            background: #0a0a0a;
        }
        .video-ratio iframe {
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 100%;
            border: 0;
        }
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
        .footer p, .footer a {
            color: #94a3b8;
            font-size: 0.875rem;
            display: block;
            margin-bottom: 0.35rem;
            text-decoration: none;
        }
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
    {{-- 3 seals --}}
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

    <div class="about-grid">
        {{-- Left: text --}}
        <div class="about-text-card">
            <h2>ACC Official Seal</h2>
            <p>
                Since its founding on 1979, <strong>Abuyog Community College</strong> has striven to provide students the knowledge, values, skills, and community involvement to enable them to excel as the forefront manpower of community and of the global arena. ACC aims for the creation of a scholastic environment composed of individuals that are grounded in faith, integrity, respect and trust.
            </p>
            <p>
                With today's fast-paced global progress, ACC promotes and fosters the acquisition of attributes that will empower students to triumph against ignorance and mediocrity and contribute positively to nation building.
            </p>

            <h3>The School LOGO:</h3>
            <p>
                <strong>Laurel Wreath (Green)</strong> – a symbol of victory and honor. It symbolizes ACC's triumph against ignorance and success in the search for truth and knowledge.
            </p>
            <p>
                <strong>Torch</strong> – an emblem of enlightenment and hope. It symbolizes the vision of ACC to provide light as a source of enlightenment to all students.
            </p>
            <p>
                <strong>Scrolls</strong> – an emblem of wisdom. It symbolizes translating academic work into meaningful presentations of expertise and scholarly work.
            </p>
            <p>
                <strong>Quill Pen and Ink</strong> – an instrument for writing which symbolizes freedom and independence to soar and be able to look at things from a wider perspective.
            </p>
            <p>
                <strong>Bee</strong> – symbol for the Municipality of Abuyog, and;
            </p>
            <p>
                <strong>1979</strong> the year the college was established.
            </p>
        </div>

        {{-- Right: two videos stacked --}}
        <div class="about-videos">
            <div class="video-card">
                <div class="video-header">
                    <h3>About Abuyog Community College</h3>
                    <p>Learn more about Abuyog Community College</p>
                </div>
                <div class="video-ratio">
                    <iframe
                        loading="lazy"
                        title="About Abuyog Community College"
                        src="https://www.youtube.com/embed/_dHiZW9oDdw"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>

            <!-- <div class="video-card">
                <div class="video-header">
                    <h3>About Abuyog HYMN</h3>
                    <p>Learn more about Abuyog HYMN</p>
                </div>
                <div class="video-ratio">
                    <iframe
                        loading="lazy"
                        title="Abuyog Hymn Official Music Video"
                        src="https://www.youtube.com/embed/mCBtWIoT8ts"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin"
                        allowfullscreen>
                    </iframe>
                </div>
            </div> -->
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
