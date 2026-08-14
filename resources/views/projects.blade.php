@extends('layouts.app')

@section('title', 'Projects | Richard Ekpadi')

@section('content')

<style>
    .projects-page {
        padding: 80px 8%;
        background: #f8fafc;
    }

    .projects-container {
        max-width: 1100px;
        margin: auto;
    }

    .projects-page h1 {
        text-align: center;
        font-size: 48px;
        color: #111827;
        margin-bottom: 15px;
    }

    .projects-intro {
        text-align: center;
        max-width: 700px;
        margin: 0 auto 50px;
        color: #6b7280;
        font-size: 17px;
    }

    .projects-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 25px;
    }

    .project-card {
        background: white;
        border: 1px solid #e5e7eb;
        border-radius: 10px;
        padding: 20px;
        overflow: hidden;
        min-width: 0;
    }

    .project-card h2 {
        color: #111827;
        font-size: 22px;
        margin-bottom: 12px;
    }

    .project-card p {
        color: #6b7280;
        margin-bottom: 15px;
    }

    .technologies {
        font-size: 14px;
        color: #2563eb;
        margin-bottom: 20px;
    }

    .project-links {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
    }

    .project-links a {
        text-decoration: none;
        padding: 8px 14px;
        border-radius: 5px;
        font-size: 14px;
        font-weight: bold;
    }

    .github-link {
        background: #111827;
        color: white;
    }

    .live-link {
        background: #2563eb;
        color: white;
    }

    .project-image {
        width: 100%;
        height: 180px;
        object-fit: cover;
        display: block;
        border-radius: 8px;
        margin-bottom: 15px;
    }

    .no-projects {
        text-align: center;
        color: #6b7280;
        padding: 50px;
        background: white;
        border-radius: 10px;
    }

    @media (max-width: 900px) {
        .projects-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 600px) {
        .projects-grid {
            grid-template-columns: 1fr;
        }

        .projects-page h1 {
            font-size: 38px;
        }
    }
</style>

<section class="projects-page">

    <div class="projects-container">

        <h1>My Projects</h1>

        <p class="projects-intro">
            Here are some of the projects I've worked on across
            data analysis, programming, GIS, and web development.
        </p>

        @if($projects->count())

            <div class="projects-grid">

                @foreach($projects as $project)

                    <div class="project-card">
                        @if($project->image)
                            <img
                                src="{{ asset('storage/' . $project->image)}}"
                                alt="{{ $project->title }}"
                                class="project-image"
                            >
                        @endif

                        <h2>{{ $project->title }}</h2>

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
                                    class="github-link"
                                >
                                    GitHub
                                </a>
                            @endif

                            @if($project->project_url)
                                <a
                                    href="{{ $project->project_url }}"
                                    target="_blank"
                                    class="live-link"
                                >
                                    Live Project
                                </a>
                            @endif

                        </div>

                    </div>

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