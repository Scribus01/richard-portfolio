@extends('layouts.app')

@section('title', 'Projects | Richard Ekpadi')

@section('content')

<style>
    .projects-page {
        min-height: 100vh;
        padding: 100px 7% 120px;
        background:
            radial-gradient(circle at 10% 10%, rgba(56, 189, 248, .08), transparent 30%),
            radial-gradient(circle at 90% 20%, rgba(129, 140, 248, .08), transparent 30%),
            #07111f;
        color: #f8fafc;
        overflow: hidden;
    }

    .projects-container {
        max-width: 1200px;
        margin: auto;
    }

    /* HEADER */

    .projects-header {
        text-align: center;
        max-width: 760px;
        margin: 0 auto 65px;
    }

    .projects-label {
        display: inline-block;
        margin-bottom: 15px;
        color: #38bdf8;
        font-size: 14px;
        font-weight: 700;
        letter-spacing: .12em;
        text-transform: uppercase;
    }

    .projects-page h1 {
        margin: 0 0 18px;
        font-size: clamp(42px, 6vw, 68px);
        line-height: 1;
        letter-spacing: -.05em;
        font-weight: 800;
    }

    .projects-intro {
        margin: 0 auto;
        color: #94a3b8;
        font-size: 17px;
        line-height: 1.8;
    }

    /* GRID */

    .projects-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 24px;
    }

    /* CARD */

    .project-card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        overflow: hidden;
        border: 1px solid rgba(255,255,255,.09);
        border-radius: 20px;
        background: rgba(255,255,255,.045);
        backdrop-filter: blur(12px);
        transition:
            transform .3s ease,
            border-color .3s ease,
            box-shadow .3s ease;
    }

    .project-card:hover {
        transform: translateY(-8px);
        border-color: rgba(56,189,248,.35);
        box-shadow: 0 25px 60px rgba(0,0,0,.28);
    }

    /* IMAGE */

    .project-image-wrapper {
        position: relative;
        height: 210px;
        overflow: hidden;
        background: #0f1c2e;
    }

    .project-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform .5s ease;
    }

    .project-card:hover .project-image {
        transform: scale(1.05);
    }

    .image-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(
            to bottom,
            transparent 45%,
            rgba(7,17,31,.65)
        );
        pointer-events: none;
    }

    /* CONTENT */

    .project-content {
        display: flex;
        flex-direction: column;
        flex: 1;
        padding: 24px;
    }

    .project-card h2 {
        margin: 0 0 12px;
        color: #f8fafc;
        font-size: 21px;
        line-height: 1.3;
        letter-spacing: -.02em;
    }

    .project-card p {
        margin: 0 0 18px;
        color: #94a3b8;
        font-size: 14px;
        line-height: 1.7;
    }

    /* TECHNOLOGIES */

    .technologies {
        margin-bottom: 22px;
        color: #38bdf8;
        font-size: 13px;
        font-weight: 600;
        line-height: 1.6;
    }

    /* LINKS */

    .project-links {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
        margin-top: auto;
    }

    .project-links a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 9px 15px;
        border-radius: 9px;
        text-decoration: none;
        font-size: 13px;
        font-weight: 700;
        transition: .25s ease;
    }

    .github-link {
        background: rgba(255,255,255,.08);
        border: 1px solid rgba(255,255,255,.10);
        color: #f8fafc;
    }

    .github-link:hover {
        background: rgba(255,255,255,.14);
        transform: translateY(-2px);
    }

    .live-link {
        background: linear-gradient(135deg, #38bdf8, #6366f1);
        color: white;
    }

    .live-link:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(56,189,248,.18);
    }

    /* NO PROJECTS */

    .no-projects {
        max-width: 600px;
        margin: auto;
        padding: 60px 30px;
        text-align: center;
        border: 1px solid rgba(255,255,255,.09);
        border-radius: 20px;
        background: rgba(255,255,255,.04);
        color: #94a3b8;
    }

    /* RESPONSIVE */

    @media (max-width: 1000px) {

        .projects-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 650px) {

        .projects-page {
            padding: 75px 6% 90px;
        }

        .projects-grid {
            grid-template-columns: 1fr;
        }

        .project-image-wrapper {
            height: 220px;
        }
    }
</style>


<section class="projects-page">

    <div class="projects-container">

        <!-- HEADER -->

        <div class="projects-header">

            <span class="projects-label">
                Selected Work
            </span>

            <h1>
                My Projects
            </h1>

            <p class="projects-intro">
                A collection of projects across data analysis,
                business intelligence, Python, GIS and web development.
            </p>

        </div>


        <!-- PROJECTS -->

        @if($projects->count())

            <div class="projects-grid">

                @foreach($projects as $project)

                    <article class="project-card">

                        @if($project->image)

                            <div class="project-image-wrapper">

                                <img
                                    src="{{ asset('storage/' . $project->image) }}"
                                    alt="{{ $project->title }}"
                                    class="project-image"
                                >

                                <div class="image-overlay"></div>

                            </div>

                        @endif


                        <div class="project-content">

                            <h2>
                                {{ $project->title }}
                            </h2>

                            <p>
                                {{ $project->description }}
                            </p>


                            @if($project->technologies)

                                <div class="technologies">
                                    {{ $project->technologies }}
                                </div>

                            @endif


                            <div class="project-links">

                                @if($project->github_url)

                                    <a
                                        href="{{ $project->github_url }}"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="github-link"
                                    >
                                        View on GitHub →
                                    </a>

                                @endif


                                @if($project->project_url)

                                    <a
                                        href="{{ $project->project_url }}"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="live-link"
                                    >
                                        Live Project →
                                    </a>

                                @endif

                            </div>

                        </div>

                    </article>

                @endforeach

            </div>

        @else

            <div class="no-projects">

                <p>
                    No projects have been added yet.
                </p>

            </div>

        @endif

    </div>

</section>

@endsection