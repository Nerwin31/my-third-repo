<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ACT Portal - Home</title>

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootswatch@5.3.2/dist/lux/bootstrap.min.css">

    <style>
        body {
            background: #f4f1ff;
        }

        .navbar-custom {
            background: linear-gradient(135deg, #4b0082, #6f42c1);
        }

        .navbar-custom a {
            color: white;
            text-decoration: none;
            font-weight: 600;
        }

        .hero {
            min-height: 500px;
            display: flex;
            align-items: center;
            background: linear-gradient(135deg, #4b0082, #8e44ad);
            color: white;
            border-radius: 0 0 35px 35px;
        }

        .hero h1 {
            font-size: 55px;
            font-weight: 800;
        }

        .hero p {
            font-size: 20px;
            opacity: 0.9;
        }

        /* BLACK BADGE */
        .portal-badge {
            background: #000000;
            color: #ffffff;
            padding: 10px 18px;
            border-radius: 8px;
            display: inline-block;
            font-weight: 600;
        }

        /* BLACK BUTTON */
        .learn-btn {
            background: #000000;
            color: #ffffff;
            border: 2px solid #000000;
            padding: 14px 30px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            display: inline-block;
        }

        .learn-btn:hover {
            background: #222222;
            color: #ffffff;
        }

        .feature-card {
            border: none;
            border-radius: 20px;
            transition: 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        }

        .icon {
            font-size: 45px;
            margin-bottom: 15px;
        }

        footer {
            background: #24103d;
            color: white;
            padding: 25px;
            margin-top: 60px;
        }
    </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container">

        <a class="navbar-brand text-white fw-bold" href="{{ url('/') }}">
            ACT PORTAL
        </a>

        <div class="ms-auto">
            <a class="me-4" href="{{ url('/') }}">Home</a>
            <a href="{{ url('/about') }}">About</a>
        </div>

    </div>
</nav>


<!-- HERO SECTION -->
<section class="hero">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-7">

                <span class="portal-badge">
                    Laravel Student Portal
                </span>

                <h1 class="mt-4">
                    Welcome to ACT Portal
                </h1>

                <p class="mt-3">
                    A simple and modern student portal built using
                    Laravel, PHP, HTML, CSS, and Bootstrap.
                </p>

                <div class="mt-4">

                    <a href="{{ url('/about') }}" class="learn-btn">
                        Learn More
                    </a>

                </div>

            </div>


            <div class="col-lg-5 text-center mt-5 mt-lg-0">

                <div class="display-1">
                    🎓
                </div>

                <h3 class="mt-3">
                    Student Information Portal
                </h3>

            </div>

        </div>

    </div>

</section>


<!-- FEATURES -->
<section class="container py-5">

    <div class="text-center mb-5">

        <h2 class="fw-bold">
            What is ACT Portal?
        </h2>

        <p class="text-muted">
            A simple system designed to present student information
            in a clean and organized way.
        </p>

    </div>


    <div class="row g-4">

        <div class="col-md-4">

            <div class="card feature-card h-100 p-4 text-center">

                <div class="icon">
                    👨‍🎓
                </div>

                <h4>Student Information</h4>

                <p class="text-muted">
                    View important student information
                    through a simple and organized interface.
                </p>

            </div>

        </div>


        <div class="col-md-4">

            <div class="card feature-card h-100 p-4 text-center">

                <div class="icon">
                    💻
                </div>

                <h4>Laravel Powered</h4>

                <p class="text-muted">
                    The website uses Laravel controllers,
                    routes, and Blade templates.
                </p>

            </div>

        </div>


        <div class="col-md-4">

            <div class="card feature-card h-100 p-4 text-center">

                <div class="icon">
                    🚀
                </div>

                <h4>Modern Design</h4>

                <p class="text-muted">
                    Designed with Bootstrap to provide
                    a clean and responsive experience.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- FOOTER -->
<footer class="text-center">

    <p class="mb-1">
        <strong>ACT Portal</strong>
    </p>

    <p class="mb-0">
        © 2026 ACT Portal. All Rights Reserved.
    </p>

</footer>

</body>
</html>