@extends('layouts.app')

@section('title', 'Home | Richard Ekpadi')

@section('content')

<style>
    .hero {
        min-height: 85vh;
        display: flex;
        align-items: center;
        padding: 80px 8%;
        background: white;
    }

    .hero-content {
        max-width: 800px;
    }

    .intro {
        color: #2563eb;
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .hero h1 {
        font-size: 58px;
        line-height: 1.1;
        margin-bottom: 15px;
        color: #111827;
    }

    .hero h2 {
        font-size: 28px;
        color: #374151;
        margin-bottom: 20px;
    }

    .hero p {
        max-width: 700px;
        font-size: 18px;
        color: #6b7280;
        margin-bottom: 30px;
    }

    .buttons {
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
    }

    .btn {
        display: inline-block;
        padding: 12px 24px;
        border-radius: 6px;
        text-decoration: none;
        font-weight: bold;
    }

    .btn-primary {
        background: #2563eb;
        color: white;
    }

    .btn-secondary {
        border: 2px solid #2563eb;
        color: #2563eb;
    }

    .btn-secondary:hover {
        background: #2563eb;
        color: white;
    }

    .section {
        padding: 80px 8%;
    }

    .section-title {
        text-align: center;
        font-size: 36px;
        margin-bottom: 45px;
        color: #111827;
    }

    .about-preview {
        background: #f1f5f9;
        text-align: center;
    }

    .about-preview p {
        max-width: 850px;
        margin: 0 auto 18px;
        font-size: 17px;
        color: #4b5563;
    }

    .skills {
        background: white;
    }

    .skills-container {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
    }

    .skill-card {
        background: #f8fafc;
        padding: 30px 20px;
        text-align: center;
        border-radius: 10px;
        border: 1px solid #e5e7eb;
    }

    .skill-card h3 {
        margin-bottom: 10px;
        color: #111827;
    }

    .skill-card p {
        color: #6b7280;
        font-size: 14px;
    }

    .projects-preview {
        background: #f1f5f9;
        text-align: center;
    }

    .projects-preview p {
        color: #6b7280;
        margin-bottom: 25px;
    }

    @media (max-width: 800px) {
        .hero h1 {
            font-size: 42px;
        }

        .hero h2 {
            font-size: 23px;
        }

        .skills-container {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 500px) {
        .skills-container {
            grid-template-columns: 1fr;
        }
    }
</style>


<!-- Hero Section -->
<section class="hero">

    <div class="hero-content">

        <div class="intro">Hello, I'm</div>

        <h1>Richard Ekpadi</h1>

        <h2>Data Analyst | Python Developer | Laravel Developer</h2>

        <p>
            I turn data into meaningful insights and build practical
            web solutions using Python, SQL, Laravel, and modern
            data technologies.
        </p>

        <div class="buttons">

            <a href="{{ url('/projects') }}" class="btn btn-primary">
                View My Projects
            </a>

            <a href="{{ url('/contact') }}" class="btn btn-secondary">
                Contact Me
            </a>

        </div>

    </div>

</section>


<!-- About Preview -->
<section class="section about-preview">

    <h2 class="section-title">About Me</h2>

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
        Learn More About Me
    </a>

</section>


<!-- Skills Preview -->
<section class="section skills">

    <h2 class="section-title">Technical Skills</h2>

    <div class="skills-container">

        <div class="skill-card">
            <h3>Python</h3>
            <p>
                Data analysis, automation, programming and
                backend development.
            </p>
        </div>

        <div class="skill-card">
            <h3>Laravel</h3>
            <p>
                PHP web development, MVC architecture,
                routing, controllers and Blade.
            </p>
        </div>

        <div class="skill-card">
            <h3>Data Analytics</h3>
            <p>
                Excel, SQL, Power BI, Tableau, Pandas
                and data visualization.
            </p>
        </div>

        <div class="skill-card">
            <h3>GIS</h3>
            <p>
                Geographic data analysis and mapping
                using QGIS.
            </p>
        </div>

    </div>

</section>


<!-- Projects Preview -->
<section class="section projects-preview">

    <h2 class="section-title">Featured Projects</h2>

    <p>
        Explore some of my data analysis, programming,
        GIS and web development projects.
    </p>

    <a href="{{ url('/projects') }}" class="btn btn-primary">
        View Projects
    </a>

</section>

@endsection