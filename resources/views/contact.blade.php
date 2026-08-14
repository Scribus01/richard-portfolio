@extends('layouts.app')

@section('title', 'Contact | Richard Ekpadi')

@section('content')

<style>
    .contact-page {
        padding: 80px 8%;
        background: #f8fafc;
        min-height: 80vh;
    }

    .contact-container {
        max-width: 900px;
        margin: auto;
    }

    .contact-page h1 {
        text-align: center;
        font-size: 48px;
        color: #111827;
        margin-bottom: 15px;
    }

    .contact-intro {
        text-align: center;
        color: #6b7280;
        font-size: 17px;
        margin-bottom: 50px;
    }

    .contact-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 30px;
    }

    .contact-card {
        background: white;
        padding: 30px;
        border-radius: 10px;
        border: 1px solid #e5e7eb;
    }

    .contact-card h2 {
        color: #111827;
        margin-bottom: 20px;
    }

    .contact-card p {
        color: #6b7280;
        line-height: 1.7;
    }

    .contact-info {
        margin-top: 25px;
    }

    .contact-info a {
        display: block;
        color: #2563eb;
        text-decoration: none;
        margin-bottom: 15px;
    }

    .contact-form input,
    .contact-form textarea {
        width: 100%;
        padding: 12px;
        margin-bottom: 15px;
        border: 1px solid #d1d5db;
        border-radius: 6px;
        font-size: 15px;
        box-sizing: border-box;
    }

    .contact-form textarea {
        height: 140px;
        resize: vertical;
    }

    .contact-form button {
        background: #111827;
        color: white;
        border: none;
        padding: 12px 20px;
        border-radius: 6px;
        cursor: pointer;
        font-weight: bold;
    }

    .contact-form button:hover {
        background: #2563eb;
    }

    @media (max-width: 700px) {
        .contact-grid {
            grid-template-columns: 1fr;
        }

        .contact-page h1 {
            font-size: 38px;
        }
    }
</style>

<section class="contact-page">

    <div class="contact-container">

        <h1>Contact Me</h1>

        <p class="contact-intro">
            Interested in working together or discussing a project?
            I'd love to hear from you.
        </p>

        <div class="contact-grid">

            <div class="contact-card">

                <h2>Get In Touch</h2>

                <p>
                    I'm open to opportunities in data analysis, GIS,
                    Python development, SQL, Power BI, and web development.
                </p>

                <div class="contact-info">

                    <a href="mailto:ekapdirichard5@gmail.com">
                        📧 ekapdirichard5@gmail.com
                    </a>

                    <a href="https://www.linkedin.com/in/richard-ekpadi-0087a53b2"
                       target="_blank">
                        LinkedIn
                    </a>

                    <a href="https://github.com/Scribus01"
                       target="_blank">
                        GitHub
                    </a>

                </div>

            </div>

            <div class="contact-card">

                <h2>Send a Message</h2>

                <form class="contact-form"
                      action="mailto:ekapdirichard5@gmail.com"
                      method="POST"
                      enctype="text/plain">

                    <input type="text"
                           name="name"
                           placeholder="Your Name"
                           required>

                    <input type="email"
                           name="email"
                           placeholder="Your Email"
                           required>

                    <textarea name="message"
                              placeholder="Your Message"
                              required></textarea>

                    <button type="submit">
                        Send Message
                    </button>

                </form>

            </div>

        </div>

    </div>

</section>

@endsection