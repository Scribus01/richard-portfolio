<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Richard Ekpadi | Portfolio')</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #f8fafc;
            background: #07111f;
        }

        a {
            transition: .25s ease;
        }

        /* =========================
           NAVIGATION
        ========================= */

        .site-nav {
            position: sticky;
            top: 0;
            z-index: 1000;
            padding: 17px 7%;
            display: flex;
            justify-content: space-between;
            align-items: center;

            background: rgba(7, 17, 31, .82);
            border-bottom: 1px solid rgba(255,255,255,.08);
            backdrop-filter: blur(16px);
        }

        .nav-logo {
            color: #f8fafc;
            text-decoration: none;
            font-size: 21px;
            font-weight: 800;
            letter-spacing: -.03em;
        }

        .nav-logo span {
            color: #38bdf8;
        }

        .nav-links {
            list-style: none;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .nav-links li a {
            display: block;
            padding: 8px 13px;
            border-radius: 8px;
            color: #94a3b8;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
        }

        .nav-links li a:hover {
            color: #f8fafc;
            background: rgba(255,255,255,.06);
        }

        .nav-links .contact-nav a {
            color: #f8fafc;
            background: linear-gradient(135deg, #38bdf8, #6366f1);
        }

        .nav-links .contact-nav a:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(56,189,248,.18);
        }

        /* =========================
           MAIN
        ========================= */

        main {
            min-height: 80vh;
        }

        /* =========================
           FOOTER
        ========================= */

        .site-footer {
            position: relative;
            padding: 55px 7% 25px;
            background: #050c16;
            border-top: 1px solid rgba(255,255,255,.08);
        }

        .footer-container {
            max-width: 1200px;
            margin: auto;
        }

        .footer-top {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 40px;
            padding-bottom: 40px;
        }

        .footer-brand {
            max-width: 420px;
        }

        .footer-brand h2 {
            margin-bottom: 10px;
            color: #f8fafc;
            font-size: 22px;
        }

        .footer-brand h2 span {
            color: #38bdf8;
        }

        .footer-brand p {
            color: #64748b;
            font-size: 14px;
            line-height: 1.7;
        }

        .footer-links {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .footer-links a {
            color: #94a3b8;
            text-decoration: none;
            font-size: 14px;
            padding: 7px 10px;
            border-radius: 7px;
        }

        .footer-links a:hover {
            color: #38bdf8;
            background: rgba(255,255,255,.04);
        }

        .footer-bottom {
            padding-top: 22px;
            border-top: 1px solid rgba(255,255,255,.07);
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }

        .footer-bottom p {
            color: #475569;
            font-size: 13px;
        }

        .footer-socials {
            display: flex;
            gap: 10px;
        }

        .footer-socials a {
            color: #64748b;
            text-decoration: none;
            font-size: 13px;
        }

        .footer-socials a:hover {
            color: #38bdf8;
        }

        /* =========================
           MOBILE
        ========================= */

        @media (max-width: 700px) {

            .site-nav {
                padding: 15px 6%;
                flex-direction: column;
                gap: 12px;
            }

            .nav-links {
                width: 100%;
                justify-content: center;
                flex-wrap: wrap;
            }

            .nav-links li a {
                padding: 7px 10px;
                font-size: 13px;
            }

            .footer-top {
                flex-direction: column;
                gap: 25px;
            }

            .footer-bottom {
                flex-direction: column;
                text-align: center;
            }

            .footer-socials {
                justify-content: center;
            }
        }
    </style>
</head>

<body>

    <!-- Navigation -->

    <nav class="site-nav">

        <a href="{{ url('/') }}" class="nav-logo">
            Richard<span>.</span>
        </a>

        <ul class="nav-links">

            <li>
                <a href="{{ url('/') }}">
                    Home
                </a>
            </li>

            <li>
                <a href="{{ url('/about') }}">
                    About
                </a>
            </li>

            <li>
                <a href="{{ url('/projects') }}">
                    Projects
                </a>
            </li>

            <li class="contact-nav">
                <a href="{{ url('/contact') }}">
                    Contact
                </a>
            </li>

        </ul>

    </nav>


    <!-- Page Content -->

    <main>
        @yield('content')
    </main>


    <!-- Footer -->

    <footer class="site-footer">

        <div class="footer-container">

            <div class="footer-top">

                <div class="footer-brand">

                    <h2>
                        Richard<span>.</span>
                    </h2>

                    <p>
                        Data Analyst & Developer focused on turning
                        data into insights and building practical
                        digital solutions.
                    </p>

                </div>


                <div class="footer-links">

                    <a href="{{ url('/') }}">
                        Home
                    </a>

                    <a href="{{ url('/about') }}">
                        About
                    </a>

                    <a href="{{ url('/projects') }}">
                        Projects
                    </a>

                    <a href="{{ url('/contact') }}">
                        Contact
                    </a>

                </div>

            </div>


            <div class="footer-bottom">

                <p>
                    &copy; {{ date('Y') }} Richard Ekpadi.
                    All rights reserved.
                </p>


                <div class="footer-socials">

                    <a
                        href="https://github.com/Scribus01"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        GitHub
                    </a>

                    <a
                        href="https://www.linkedin.com/in/richard-ekpadi-0087a53b2"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        LinkedIn
                    </a>

                    <a href="mailto:ekapdirichard5@gmail.com">
                        Email
                    </a>

                </div>

            </div>

        </div>

    </footer>

</body>
</html>