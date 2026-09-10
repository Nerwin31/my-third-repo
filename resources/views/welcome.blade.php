<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Laravel + Bootswatch Cyborg</title>

    <!-- Bootswatch Cyborg Theme CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap-cyborg.min.css') }}">
</head>

<body>

    <!-- Theme Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <div class="container">
            <a class="navbar-brand" href="#">
                ACT Bootswatch App
            </a>

            <span class="navbar-text">
                Cyborg Theme Showcase
            </span>
        </div>
    </nav>

    <div class="container my-4">

        <!-- Theme Alert -->
        <div class="alert alert-success">
            <strong>Theme Active!</strong>
            You have successfully integrated a custom Bootswatch theme into Laravel.
        </div>

        <!-- Card Section -->
        <div class="card border-primary mb-4">

            <div class="card-header">
                Bootswatch Integration Test
            </div>

            <div class="card-body">

                <h4 class="card-title">
                    Custom Typography & Button Styles
                </h4>

                <p class="card-text">
                    Notice how the font family, button radii, and color accents
                    match the Cyborg theme effortlessly.
                </p>

                <button class="btn btn-primary" type="button">
                    Primary Button
                </button>

                <button class="btn btn-secondary" type="button">
                    Secondary
                </button>

                <button class="btn btn-success" type="button">
                    Success
                </button>

            </div>
        </div>

    </div>

    <!-- Mandatory Bootstrap JS Bundle from Part 1 -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>