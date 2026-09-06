<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>ACT Portal - About</title>

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

    .about-hero {
        background: linear-gradient(135deg, #4b0082, #8e44ad);
        color: white;
        padding: 80px 20px;
        text-align: center;
        border-radius: 0 0 35px 35px;
    }

    .about-hero h1 {
        font-size: 50px;
        font-weight: 800;
    }

    .student-card {
        border: none;
        border-radius: 25px;
        box-shadow: 0 15px 35px rgba(0,0,0,0.12);
        overflow: hidden;
    }

    .student-header {
        background: #000000;
        color: white;
        padding: 25px;
    }

    .student-icon {
        width: 100px;
        height: 100px;
        background: #f4f1ff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 50px;
        margin: 0 auto 20px;
    }

    .info-label {
        color: #6f42c1;
        font-weight: 700;
    }

    .back-btn {
        background: #000000;
        color: white;
        border: none;
        padding: 12px 25px;
        border-radius: 8px;
        text-decoration: none;
        display: inline-block;
        font-weight: 600;
    }

    .back-btn:hover {
        background: #222222;
        color: white;
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

<nav class="navbar navbar-custom">
    <div class="container">

    <a class="navbar-brand text-white fw-bold"
       href="{{ url('/') }}">
        ACT PORTAL
    </a>

    <div class="ms-auto">
        <a class="me-4" href="{{ url('/') }}">Home</a>
        <a href="{{ url('/about') }}">About</a>
    </div>

</div>

</nav>

<!-- ABOUT HERO -->

<section class="about-hero">

<div class="container">

    <h1>About ACT Portal</h1>

    <p class="lead mt-3 mb-0">
        Student Information and Laravel Web Portal
    </p>

</div>

</section>

<!-- STUDENT INFORMATION -->

<section class="container py-5">

<div class="row justify-content-center">

    <div class="col-lg-6">

        <div class="card student-card">

            <div class="student-header text-center">

                <div class="student-icon">
                    🎓
                </div>

                <h3 class="mb-0">
                    Student Information
                </h3>

            </div>


            <div class="card-body p-4">

                <div class="mb-4">

                    <div class="info-label">
                        Student Name
                    </div>

                    <h4 class="mt-2">
                        {{ $studentName }}
                    </h4>

                </div>


                <div class="mb-4">

                    <div class="info-label">
                        Course
                    </div>

                    <h5 class="mt-2">
                        {{ $course }}
                    </h5>

                </div>


                <hr>


                <p class="text-muted mt-4">
                    This page displays student information
                    provided by the Laravel controller and
                    rendered using a Blade template.
                </p>


                <div class="text-center mt-4">

                    <a href="{{ url('/') }}"
                       class="back-btn">
                        ← Back to Home
                    </a>

                </div>

            </div>

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