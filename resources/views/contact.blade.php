@extends('layouts.app')

@section('title', 'Contact | Richard Ekpadi')

@section('content')

<style>
    .contact-page {
        min-height: 100vh;
        padding: 100px 7% 120px;
        background:
            radial-gradient(circle at 10% 15%, rgba(56, 189, 248, .08), transparent 30%),
            radial-gradient(circle at 90% 80%, rgba(129, 140, 248, .08), transparent 30%),
            #07111f;
        color: #f8fafc;
    }

    .contact-container {
        max-width: 1100px;
        margin: auto;
    }

    /* HEADER */

    .contact-header {
        text-align: center;
        max-width: 720px;
        margin: 0 auto 60px;
    }

    .contact-label {
        display: inline-block;
        margin-bottom: 16px;
        color: #38bdf8;
        font-size: 14px;
        font-weight: 700;
        letter-spacing: .12em;
        text-transform: uppercase;
    }

    .contact-page h1 {
        margin: 0 0 18px;
        font-size: clamp(45px, 7vw, 70px);
        line-height: 1;
        letter-spacing: -.055em;
        font-weight: 800;
    }

    .contact-page h1 span {
        background: linear-gradient(90deg, #38bdf8, #818cf8);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    .contact-intro {
        margin: 0;
        color: #94a3b8;
        font-size: 17px;
        line-height: 1.8;
    }

    /* GRID */

    .contact-grid {
        display: grid;
        grid-template-columns: .85fr 1.15fr;
        gap: 24px;
    }

    /* CARDS */

    .contact-card {
        padding: 32px;
        border: 1px solid rgba(255,255,255,.09);
        border-radius: 20px;
        background: rgba(255,255,255,.045);
        backdrop-filter: blur(12px);
    }

    .contact-card h2 {
        margin: 0 0 16px;
        color: #f8fafc;
        font-size: 25px;
        letter-spacing: -.025em;
    }

    .contact-card > p {
        margin: 0;
        color: #94a3b8;
        line-height: 1.8;
        font-size: 15px;
    }

    /* CONTACT DETAILS */

    .contact-info {
        margin-top: 30px;
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .contact-info a {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 14px 15px;
        border: 1px solid rgba(255,255,255,.07);
        border-radius: 12px;
        background: rgba(255,255,255,.035);
        color: #cbd5e1;
        text-decoration: none;
        font-size: 14px;
        transition: .25s ease;
    }

    .contact-info a:hover {
        transform: translateX(5px);
        border-color: rgba(56,189,248,.35);
        color: #38bdf8;
        background: rgba(56,189,248,.06);
    }

    .contact-icon {
        width: 34px;
        height: 34px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        border-radius: 9px;
        background: rgba(56,189,248,.10);
        color: #38bdf8;
        font-size: 13px;
        font-weight: 800;
    }

    /* FORM */

    .contact-form {
        margin-top: 25px;
    }

    .form-group {
        margin-bottom: 16px;
    }

    .form-group label {
        display: block;
        margin-bottom: 7px;
        color: #cbd5e1;
        font-size: 13px;
        font-weight: 600;
    }

    .contact-form input,
    .contact-form textarea {
        width: 100%;
        padding: 13px 15px;
        border: 1px solid rgba(255,255,255,.10);
        border-radius: 10px;
        outline: none;
        box-sizing: border-box;
        background: rgba(255,255,255,.045);
        color: #f8fafc;
        font-family: inherit;
        font-size: 14px;
        transition: .25s ease;
    }

    .contact-form input::placeholder,
    .contact-form textarea::placeholder {
        color: #64748b;
    }

    .contact-form input:focus,
    .contact-form textarea:focus {
        border-color: #38bdf8;
        background: rgba(255,255,255,.065);
        box-shadow: 0 0 0 3px rgba(56,189,248,.08);
    }

    .contact-form textarea {
        height: 150px;
        resize: vertical;
    }

    .contact-form button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        margin-top: 5px;
        padding: 13px 22px;
        border: none;
        border-radius: 10px;
        background: linear-gradient(135deg, #38bdf8, #6366f1);
        color: white;
        cursor: pointer;
        font-family: inherit;
        font-size: 14px;
        font-weight: 700;
        transition: .25s ease;
        box-shadow: 0 10px 25px rgba(56,189,248,.12);
    }

    .contact-form button:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 30px rgba(56,189,248,.20);
    }

    /* BOTTOM NOTE */

    .contact-note {
        margin-top: 24px;
        padding: 16px;
        border-left: 2px solid #38bdf8;
        background: rgba(56,189,248,.045);
        color: #94a3b8;
        font-size: 13px;
        line-height: 1.6;
    }

    /* RESPONSIVE */

    @media (max-width: 800px) {

        .contact-grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 600px) {

        .contact-page {
            padding: 75px 6% 90px;
        }

        .contact-card {
            padding: 24px;
        }

        .contact-form button {
            width: 100%;
        }
    }
</style>


<section class="contact-page">

    <div class="contact-container">

        <!-- HEADER -->

        <div class="contact-header">

            <span class="contact-label">
                Contact
            </span>

            <h1>
                Let's <span>connect.</span>
            </h1>

            <p class="contact-intro">
                Interested in working together, discussing a project,
                or exploring an opportunity? I'd love to hear from you.
            </p>

        </div>


        <!-- CONTACT GRID -->

        <div class="contact-grid">


            <!-- CONTACT INFORMATION -->

            <div class="contact-card">

                <h2>
                    Get In Touch
                </h2>

                <p>
                    I'm open to opportunities in data analysis, GIS,
                    Python development, SQL, Power BI, and web development.
                </p>


                <div class="contact-info">

                    <a href="mailto:ekapdirichard5@gmail.com">

                        <span class="contact-icon">
                            @
                        </span>

                        ekapdirichard5@gmail.com

                    </a>


                    <a
                        href="https://www.linkedin.com/in/richard-ekpadi-0087a53b2"
                        target="_blank"
                        rel="noopener noreferrer"
                    >

                        <span class="contact-icon">
                            in
                        </span>

                        LinkedIn

                    </a>


                    <a
                        href="https://github.com/Scribus01"
                        target="_blank"
                        rel="noopener noreferrer"
                    >

                        <span class="contact-icon">
                            GH
                        </span>

                        GitHub

                    </a>

                </div>


                <div class="contact-note">
                    I aim to respond to genuine enquiries and
                    opportunities as soon as possible.
                </div>

            </div>


            <!-- FORM -->

            <div class="contact-card">

                <h2>
                    Send a Message
                </h2>

                <form
                    class="contact-form"
                    action="mailto:ekapdirichard5@gmail.com"
                    method="POST"
                    enctype="text/plain"
                >

                    <div class="form-group">

                        <label for="name">
                            Your Name
                        </label>

                        <input
                            type="text"
                            id="name"
                            name="name"
                            placeholder="Enter your name"
                            required
                        >

                    </div>


                    <div class="form-group">

                        <label for="email">
                            Your Email
                        </label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="you@example.com"
                            required
                        >

                    </div>


                    <div class="form-group">

                        <label for="message">
                            Message
                        </label>

                        <textarea
                            id="message"
                            name="message"
                            placeholder="Tell me a little about what you'd like to discuss..."
                            required
                        ></textarea>

                    </div>


                    <button type="submit">
                        Send Message →
                    </button>

                </form>

            </div>

        </div>

    </div>

</section>

@endsection