<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My First Laravel App</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>

    <div class="container mt-5">
        <h1 class="text-primary">Bootstrap Successfully Integrated!</h1>

        <p>
            This Laravel application is now using local Bootstrap files.
        </p>

        <button class="btn btn-primary">
            Test Button
        </button>
    </div>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>