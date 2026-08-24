@extends('layouts.app')

@section('title', 'Home | Richard Ekpadi')

@section('content')

<style>
    :root {
        --bg: #07111f;
        --bg-soft: #0b1728;
        --card: rgba(255, 255, 255, 0.055);
        --border: rgba(255, 255, 255, 0.10);
        --text: #f8fafc;
        --muted: #94a3b8;
        --accent: #38bdf8;
        --accent-2: #818cf8;
    }

    * {
        box-sizing: border-box;
    }

    .portfolio-home {
        background: var(--bg);
        color: var(--text);
        overflow: hidden;
    }

    /* =========================
       HERO
    ========================= */

    .hero {
        min-height: 88vh;
        position: relative;
        display: flex;
        align-items: center;
        padding: 100px 8%;
        background:
            radial-gradient(circle at 80% 20%, rgba(56, 189, 248, 0.12), transparent 30%),
            radial-gradient(circle at 20% 80%, rgba(129, 140, 248, 0.10), transparent 30%),
            var(--bg);
    }

    .hero::before {
        content: "";
        position: absolute;
        inset: 0;
        opacity: 0.18;
        background-image:
            linear-gradient(rgba(255,255,255,.06) 1px, transparent 1px),
            linear-gradient(90deg, rgba(255,255,255,.06) 1px, transparent 1px);
        background-size: 45px 45px;
        mask-image: linear-gradient(to bottom, black, transparent);
        pointer-events: none;
    }

    .hero-content {
        position: relative;
        z-index: 2;
        max-width: 850px;
    }

    .availability {
        display: inline-flex;
        align-items: center;
        gap: 9px;
        padding: 8px 14px;
        margin-bottom: 25px;
        border: 1px solid var(--border);
        border-radius: 999px;
        background: rgba(255,255,255,.04);
        color: #cbd5e1;
        font-size: 14px;
    }

    .availability-dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: #22c55e;
        box-shadow: 0 0 12px rgba(34,197,94,.8);
    }

    .intro {
        color: var(--accent);
        font-size: 17px;
        font-weight: 600;
        margin-bottom: 12px;
        letter-spacing: .04em;
    }

    .hero h1 {
        margin: 0;
        font-size: clamp(52px, 8vw, 92px);
        line-height: .98;
        letter-spacing: -0.055em;
        font-weight: 800;
    }

    .hero h1 span {
        background: linear-gradient(90deg, #38bdf8, #818cf8);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    .hero h2 {
        margin: 25px 0 20px;
        font-size: clamp(22px, 3vw, 32px);
        line-height: 1.25;
        color: #cbd5e1;
        font-weight: 500;
    }

    .hero p {
        max-width: 720px;
        margin-bottom: 35px;
        font-size: 18px;
        line-height: 1.8;
        color: var(--muted);
    }

    .buttons {
        display: flex;
        gap: 14px;
        flex-wrap: wrap;
    }

    .btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 13px 22px;
        border-radius: 10px;
        text-decoration: none;
        font-weight: 700;
        transition: .25s ease;
    }

    .btn-primary {
        background: linear-gradient(135deg, #38bdf8, #6366f1);
        color: white;
        box-shadow: 0 12px 30px rgba(56,189,248,.16);
    }

    .btn-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 18px 35px rgba(56,189,248,.25);
    }

    .btn-secondary {
        border: 1px solid var(--border);
        background: rgba(255,255,255,.04);
        color: #e2e8f0;
    }

    .btn-secondary:hover {
        background: rgba(255,255,255,.09);
        transform: translateY(-3px);
    }

    /* =========================
       FLOATING STATS
    ========================= */

    .hero-stats {
        position: absolute;
        right: 8%;
        bottom: 12%;
        z-index: 2;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 12px;
        width: 280px;
    }

    .stat-card {
        padding: 18px;
        border: 1px solid var(--border);
        border-radius: 16px;
        background: rgba(15, 23, 42, .68);
        backdrop-filter: blur(14px);
        box-shadow: 0 20px 50px rgba(0,0,0,.25);
    }

    .stat-number {
        font-size: 25px;
        font-weight: 800;
        color: white;
    }

    .stat-label {
        margin-top: 4px;
        font-size: 12px;
        color: var(--muted);
    }

    /* =========================
       GENERAL SECTIONS
    ========================= */

    .section {
        padding: 100px 8%;
    }

    .section-title {
        margin-bottom: 15px;
        font-size: clamp(32px, 5vw, 48px);
        letter-spacing: -.04em;
        color: white;
        text-align: center;
    }

    .section-subtitle {
        max-width: 650px;
        margin: 0 auto 50px;
        text-align: center;
        color: var(--muted);
        line-height: 1.7;
    }

    /* =========================
       ABOUT
    ========================= */

    .about-preview {
        background: var(--bg-soft);
        text-align: center;
        border-top: 1px solid var(--border);
        border-bottom: 1px solid var(--border);
    }

    .about-preview p {
        max-width: 850px;
        margin: 0 auto 20px;
        font-size: 17px;
        line-height: 1.8;
        color: var(--muted);
    }

    .about-preview strong {
        color: #e2e8f0;
    }

    /* =========================
       SKILLS
    ========================= */

    .skills {
        background: var(--bg);
    }

    .skills-container {
        max-width: 1100px;
        margin: auto;
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 18px;
    }

    .skill-card {
        position: relative;
        padding: 30px 24px;
        border: 1px solid var(--border);
        border-radius: 18px;
        background: var(--card);
        backdrop-filter: blur(10px);
        transition: .3s ease;
    }

    .skill-card:hover {
        transform: translateY(-7px);
        border-color: rgba(56,189,248,.35);
        background: rgba(255,255,255,.08);
    }

    .skill-icon {
        width: 44px;
        height: 44px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
        border-radius: 12px;
        background: rgba(56,189,248,.10);
        color: var(--accent);
        font-weight: 800;
    }

    .skill-card h3 {
        margin-bottom: 10px;
        color: white;
        font-size: 20px;
    }

    .skill-card p {
        margin: 0;
        color: var(--muted);
        font-size: 14px;
        line-height: 1.7;
    }

    /* =========================
       PROJECTS
    ========================= */

    .projects-preview {
        background: var(--bg-soft);
        text-align: center;
        border-top: 1px solid var(--border);
    }

    .projects-preview p {
        color: var(--muted);
        margin-bottom: 30px;
    }

    /* =========================
       RESPONSIVE
    ========================= */

    @media (max-width: 1000px) {

        .hero-stats {
            display: none;
        }

        .skills-container {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 650px) {

        .hero {
            min-height: auto;
            padding: 90px 7% 80px;
        }

        .hero h1 {
            font-size: 54px;
        }

        .hero h2 {
            font-size: 22px;
        }

        .hero p {
            font-size: 16px;
        }

        .section {
            padding: 75px 7%;
        }

        .skills-container {
            grid-template-columns: 1fr;
        }

        .buttons {
            flex-direction: column;
        }

        .btn {
            width: 100%;
        }
    }
</style>


<div class="portfolio-home">

    <!-- HERO -->

    <section class="hero">

        <div class="hero-content">

            <div class="availability">
                <span class="availability-dot"></span>
                Open to opportunities
            </div>

            <div class="intro">
                Hello, I'm
            </div>

            <h1>
                Richard <span>Ekpadi</span>
            </h1>

            <h2>
                Data Analyst · Python Developer · Laravel Developer
            </h2>

            <p>
                I turn complex data into meaningful insights and build
                practical digital solutions using Python, SQL, Power BI,
                Laravel, and modern data technologies.
            </p>

            <div class="buttons">

                <a href="{{ url('/projects') }}" class="btn btn-primary">
                    View My Projects →
                </a>

                <a href="{{ url('/contact') }}" class="btn btn-secondary">
                    Contact Me
                </a>

            </div>

        </div>


        <div class="hero-stats">

            <div class="stat-card">
                <div class="stat-number">9+</div>
                <div class="stat-label">Projects</div>
            </div>

            <div class="stat-card">
                <div class="stat-number">5+</div>
                <div class="stat-label">Core Tools</div>
            </div>

            <div class="stat-card">
                <div class="stat-number">BI</div>
                <div class="stat-label">Data & Insights</div>
            </div>

            <div class="stat-card">
                <div class="stat-number">GIS</div>
                <div class="stat-label">Spatial Analysis</div>
            </div>

        </div>

    </section>


    <!-- ABOUT -->

    <section class="section about-preview">

        <h2 class="section-title">
            About Me
        </h2>

        <p class="section-subtitle">
            A data-focused developer and analyst who enjoys turning
            information into useful decisions and practical solutions.
        </p>

        <p>
            I'm a data-focused developer and analyst with a background
            in Physics Education and a strong interest in using
            technology to solve real-world problems.
        </p>

        <p>
            I work with <strong>Python</strong> for data analysis,
            automation and programming, while developing web applications
            with <strong>Laravel and PHP</strong>.
        </p>

        <a href="{{ url('/about') }}" class="btn btn-primary">
            Learn More About Me →
        </a>

    </section>


    <!-- SKILLS -->

    <section class="section skills">

        <h2 class="section-title">
            What I Work With
        </h2>

        <p class="section-subtitle">
            A combination of analytical, programming and spatial tools
            used to transform data into useful solutions.
        </p>

        <div class="skills-container">

            <div class="skill-card">

                <div class="skill-icon">
                    Py
                </div>

                <h3>Python</h3>

                <p>
                    Data analysis, automation, programming,
                    Pandas and backend development.
                </p>

            </div>


            <div class="skill-card">

                <div class="skill-icon">
                    &lt;/&gt;
                </div>

                <h3>Laravel</h3>

                <p>
                    PHP web development, MVC architecture,
                    routing, controllers and Blade.
                </p>

            </div>


            <div class="skill-card">

                <div class="skill-icon">
                    BI
                </div>

                <h3>Data Analytics</h3>

                <p>
                    Excel, SQL, Power BI, Tableau,
                    data visualization and reporting.
                </p>

            </div>


            <div class="skill-card">

                <div class="skill-icon">
                    GIS
                </div>

                <h3>GIS</h3>

                <p>
                    Geographic data analysis, mapping
                    and spatial visualization using QGIS.
                </p>

            </div>

        </div>

    </section>


    <!-- PROJECTS -->

    <section class="section projects-preview">

        <h2 class="section-title">
            Selected Work
        </h2>

        <p class="section-subtitle">
            Explore projects covering data analysis, business intelligence,
            Python, GIS and web development.
        </p>

        <a href="{{ url('/projects') }}" class="btn btn-primary">
            Explore My Projects →
        </a>

    </section>

</div>

@endsection