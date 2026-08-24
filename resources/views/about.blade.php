@extends('layouts.app')

@section('title', 'About Me | Richard Ekpadi')

@section('content')

<style>
    .about-page {
        min-height: 100vh;
        padding: 100px 7% 120px;
        background:
            radial-gradient(circle at 10% 15%, rgba(56, 189, 248, .08), transparent 30%),
            radial-gradient(circle at 90% 70%, rgba(129, 140, 248, .08), transparent 30%),
            #07111f;
        color: #f8fafc;
    }

    .about-container {
        max-width: 1100px;
        margin: auto;
    }

    /* HEADER */

    .about-header {
        max-width: 800px;
        margin-bottom: 70px;
    }

    .about-label {
        display: inline-block;
        margin-bottom: 18px;
        color: #38bdf8;
        font-size: 14px;
        font-weight: 700;
        letter-spacing: .12em;
        text-transform: uppercase;
    }

    .about-page h1 {
        margin: 0 0 25px;
        font-size: clamp(48px, 7vw, 76px);
        line-height: 1;
        letter-spacing: -.055em;
        font-weight: 800;
    }

    .about-page h1 span {
        background: linear-gradient(90deg, #38bdf8, #818cf8);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    .about-lead {
        max-width: 760px;
        margin: 0;
        color: #94a3b8;
        font-size: 19px;
        line-height: 1.8;
    }

    /* INTRO CARDS */

    .about-intro {
        display: grid;
        grid-template-columns: 1.4fr .8fr;
        gap: 22px;
        margin-bottom: 75px;
    }

    .about-card {
        padding: 30px;
        border: 1px solid rgba(255,255,255,.09);
        border-radius: 20px;
        background: rgba(255,255,255,.045);
        backdrop-filter: blur(12px);
    }

    .about-card p {
        margin: 0;
        color: #94a3b8;
        font-size: 16px;
        line-height: 1.85;
    }

    .focus-card {
        display: flex;
        flex-direction: column;
        justify-content: center;
        background:
            linear-gradient(
                145deg,
                rgba(56,189,248,.12),
                rgba(129,140,248,.07)
            );
    }

    .focus-card h3 {
        margin: 0 0 20px;
        font-size: 14px;
        color: #38bdf8;
        text-transform: uppercase;
        letter-spacing: .1em;
    }

    .focus-item {
        padding: 12px 0;
        border-bottom: 1px solid rgba(255,255,255,.07);
        color: #e2e8f0;
        font-weight: 600;
    }

    .focus-item:last-child {
        border-bottom: none;
    }

    /* SECTIONS */

    .about-section {
        margin-bottom: 70px;
    }

    .section-heading {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 18px;
    }

    .heading-line {
        width: 38px;
        height: 2px;
        background: linear-gradient(90deg, #38bdf8, #818cf8);
    }

    .about-page h2 {
        margin: 0;
        color: #f8fafc;
        font-size: 29px;
        letter-spacing: -.03em;
    }

    .about-section > p {
        max-width: 900px;
        margin: 0;
        color: #94a3b8;
        font-size: 16px;
        line-height: 1.85;
    }

    /* SKILLS */

    .skills-heading {
        margin-bottom: 30px;
    }

    .skill-list {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 18px;
    }

    .skill-item {
        padding: 25px;
        border: 1px solid rgba(255,255,255,.09);
        border-radius: 18px;
        background: rgba(255,255,255,.045);
        transition: .3s ease;
    }

    .skill-item:hover {
        transform: translateY(-6px);
        border-color: rgba(56,189,248,.35);
        background: rgba(255,255,255,.07);
    }

    .skill-icon {
        width: 42px;
        height: 42px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 18px;
        border-radius: 11px;
        background: rgba(56,189,248,.10);
        color: #38bdf8;
        font-size: 13px;
        font-weight: 800;
    }

    .skill-item h3 {
        margin: 0 0 8px;
        color: #f8fafc;
        font-size: 19px;
    }

    .skill-item p {
        margin: 0;
        color: #94a3b8;
        font-size: 14px;
        line-height: 1.65;
    }

    /* BOTTOM CTA */

    .about-cta {
        margin-top: 80px;
        padding: 45px;
        text-align: center;
        border: 1px solid rgba(255,255,255,.09);
        border-radius: 22px;
        background:
            radial-gradient(circle at center, rgba(56,189,248,.08), transparent 65%),
            rgba(255,255,255,.035);
    }

    .about-cta h2 {
        margin-bottom: 12px;
    }

    .about-cta p {
        margin: 0 auto 25px;
        max-width: 600px;
        color: #94a3b8;
        line-height: 1.7;
    }

    .cta-button {
        display: inline-flex;
        padding: 13px 22px;
        border-radius: 10px;
        background: linear-gradient(135deg, #38bdf8, #6366f1);
        color: white;
        text-decoration: none;
        font-weight: 700;
        transition: .25s ease;
    }

    .cta-button:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 30px rgba(56,189,248,.20);
    }

    /* RESPONSIVE */

    @media (max-width: 850px) {

        .about-intro {
            grid-template-columns: 1fr;
        }

        .skill-list {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 600px) {

        .about-page {
            padding: 75px 6% 90px;
        }

        .skill-list {
            grid-template-columns: 1fr;
        }

        .about-card {
            padding: 24px;
        }

        .about-cta {
            padding: 35px 22px;
        }
    }
</style>


<section class="about-page">

    <div class="about-container">

        <!-- HEADER -->

        <div class="about-header">

            <span class="about-label">
                About Me
            </span>

            <h1>
                Turning curiosity into
                <span>useful solutions.</span>
            </h1>

            <p class="about-lead">
                I'm Richard Ekpadi, a data-focused analyst and developer
                interested in technology, programming, data, and solving
                real-world problems.
            </p>

        </div>


        <!-- INTRO -->

        <div class="about-intro">

            <div class="about-card">

                <p>
                    My journey into technology has allowed me to develop
                    practical skills across data analysis, programming,
                    web development, and geographic information systems.
                </p>

            </div>


            <div class="about-card focus-card">

                <h3>
                    Areas of Focus
                </h3>

                <div class="focus-item">
                    Data Analysis
                </div>

                <div class="focus-item">
                    Web Development
                </div>

                <div class="focus-item">
                    Business Intelligence
                </div>

                <div class="focus-item">
                    GIS & Spatial Data
                </div>

            </div>

        </div>


        <!-- PYTHON -->

        <div class="about-section">

            <div class="section-heading">

                <span class="heading-line"></span>

                <h2>
                    Python & Data Analysis
                </h2>

            </div>

            <p>
                I use Python for data analysis, data cleaning, automation,
                visualization, and programming. I work with tools and
                libraries such as Pandas, NumPy, Matplotlib, and Jupyter
                Notebook to transform raw data into meaningful insights.
            </p>

        </div>


        <!-- LARAVEL -->

        <div class="about-section">

            <div class="section-heading">

                <span class="heading-line"></span>

                <h2>
                    Laravel & Web Development
                </h2>

            </div>

            <p>
                I am developing my web development skills using PHP and
                Laravel. I work with Laravel's MVC architecture, routing,
                controllers, Blade templates, databases, migrations, and
                Git-based development workflows.
            </p>

        </div>


        <!-- SKILLS -->

        <div class="about-section">

            <div class="section-heading skills-heading">

                <span class="heading-line"></span>

                <h2>
                    My Technical Skills
                </h2>

            </div>


            <div class="skill-list">

                <div class="skill-item">

                    <div class="skill-icon">
                        PY
                    </div>

                    <h3>
                        Python
                    </h3>

                    <p>
                        Programming, data analysis and automation.
                    </p>

                </div>


                <div class="skill-item">

                    <div class="skill-icon">
                        PHP
                    </div>

                    <h3>
                        Laravel & PHP
                    </h3>

                    <p>
                        Web application development and MVC architecture.
                    </p>

                </div>


                <div class="skill-item">

                    <div class="skill-icon">
                        SQL
                    </div>

                    <h3>
                        SQL
                    </h3>

                    <p>
                        Database querying, analysis and data manipulation.
                    </p>

                </div>


                <div class="skill-item">

                    <div class="skill-icon">
                        BI
                    </div>

                    <h3>
                        Power BI
                    </h3>

                    <p>
                        Interactive dashboards and data visualization.
                    </p>

                </div>


                <div class="skill-item">

                    <div class="skill-icon">
                        XLS
                    </div>

                    <h3>
                        Excel
                    </h3>

                    <p>
                        Data cleaning, analysis and reporting.
                    </p>

                </div>


                <div class="skill-item">

                    <div class="skill-icon">
                        GIS
                    </div>

                    <h3>
                        QGIS
                    </h3>

                    <p>
                        GIS analysis, mapping and spatial data visualization.
                    </p>

                </div>

            </div>

        </div>


        <!-- CTA -->

        <div class="about-cta">

            <h2>
                Let's build something useful.
            </h2>

            <p>
                Whether it's turning data into insights or building
                practical digital solutions, I'm always interested
                in meaningful projects and opportunities.
            </p>

            <a href="{{ url('/contact') }}" class="cta-button">
                Get In Touch →
            </a>

        </div>

    </div>

</section>

@endsection