@extends('layouts.app')

@section('title', 'About Me | Richard Ekpadi')

@section('content')

<style>
    .about-page {
        padding: 80px 8%;
        background: white;
    }

    .about-container {
        max-width: 900px;
        margin: auto;
    }

    .about-page h1 {
        font-size: 48px;
        color: #111827;
        margin-bottom: 25px;
    }

    .about-page h2 {
        font-size: 28px;
        color: #2563eb;
        margin-top: 40px;
        margin-bottom: 15px;
    }

    .about-page p {
        font-size: 17px;
        line-height: 1.8;
        color: #4b5563;
        margin-bottom: 18px;
    }

    .skill-list {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 15px;
        margin-top: 25px;
    }

    .skill-item {
        padding: 20px;
        background: #f8fafc;
        border: 1px solid #e5e7eb;
        border-radius: 8px;
    }

    .skill-item h3 {
        color: #111827;
        margin-bottom: 5px;
    }

    .skill-item p {
        font-size: 14px;
        margin: 0;
    }

    @media (max-width: 600px) {
        .about-page h1 {
            font-size: 38px;
        }

        .skill-list {
            grid-template-columns: 1fr;
        }
    }
</style>

<section class="about-page">

    <div class="about-container">

        <h1>About Me</h1>

        <p>
            I'm Richard Ekpadi, a data-focused analyst and developer
            with a background in Physics Education and a strong interest
            in technology, programming, data, and problem solving.
        </p>

        <p>
            My journey into technology has allowed me to develop
            practical skills across data analysis, programming,
            web development, and geographic information systems.
        </p>

        <h2>Python & Data Analysis</h2>

        <p>
            I use Python for data analysis, data cleaning, automation,
            visualization, and programming. I work with tools and
            libraries such as Pandas, NumPy, Matplotlib, and Jupyter
            Notebook to transform raw data into meaningful insights.
        </p>

        <h2>Laravel & Web Development</h2>

        <p>
            I am developing my web development skills using PHP and
            Laravel. I work with Laravel's MVC architecture, routing,
            controllers, Blade templates, databases, migrations, and
            Git-based development workflows.
        </p>

        <h2>My Technical Skills</h2>

        <div class="skill-list">

            <div class="skill-item">
                <h3>Python</h3>
                <p>Programming, data analysis and automation.</p>
            </div>

            <div class="skill-item">
                <h3>Laravel & PHP</h3>
                <p>Web application development and MVC architecture.</p>
            </div>

            <div class="skill-item">
                <h3>SQL</h3>
                <p>Database querying, analysis and data manipulation.</p>
            </div>

            <div class="skill-item">
                <h3>Power BI</h3>
                <p>Interactive dashboards and data visualization.</p>
            </div>

            <div class="skill-item">
                <h3>Excel</h3>
                <p>Data cleaning, analysis and reporting.</p>
            </div>

            <div class="skill-item">
                <h3>QGIS</h3>
                <p>GIS analysis, mapping and spatial data visualization.</p>
            </div>

        </div>

    </div>

</section>

@endsection