<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Laravel Website</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f5f5f5;
            color: #222;
        }

        header {
            background: linear-gradient(135deg, #4b0082, #6a0dad);
            color: white;
            padding: 20px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h1 {
            font-size: 25px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 25px;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .hero {
            min-height: 450px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 40px 20px;
            background: linear-gradient(135deg, #ffffff, #eee6ff);
        }

        .hero-content {
            max-width: 700px;
        }

        .hero h2 {
            font-size: 50px;
            color: #4b0082;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 18px;
            color: #555;
            margin-bottom: 30px;
        }

        .btn {
            display: inline-block;
            background: #6a0dad;
            color: white;
            padding: 14px 30px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
        }

        .btn:hover {
            background: #4b0082;
        }

        .section {
            padding: 60px 50px;
            text-align: center;
        }

        .section h2 {
            color: #4b0082;
            margin-bottom: 35px;
        }

        .cards {
            display: flex;
            justify-content: center;
            gap: 25px;
            flex-wrap: wrap;
        }

        .card {
            background: white;
            width: 280px;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .card h3 {
            color: #6a0dad;
            margin-bottom: 15px;
        }

        .card p {
            color: #666;
            line-height: 1.6;
        }

        footer {
            background: #222;
            color: white;
            text-align: center;
            padding: 25px;
            margin-top: 30px;
        }

        @media (max-width: 700px) {
            header {
                padding: 20px;
                flex-direction: column;
                gap: 15px;
            }

            nav a {
                margin: 0 8px;
            }

            .hero h2 {
                font-size: 36px;
            }

            .section {
                padding: 40px 20px;
            }
        }
    </style>
</head>

<body>

    <header>
        <h1>My Website</h1>

        <nav>
            <a href="/">Home</a>
            <a href="/about">About</a>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-content">

            <h2>Welcome to My Website</h2>

            <p>
                This website is built using Laravel.
                This is the homepage of our project.
            </p>

            <a href="/about" class="btn">Learn More</a>

        </div>
    </section>

    <section class="section">

        <h2>What We Offer</h2>

        <div class="cards">

            <div class="card">
                <h3>Fast</h3>
                <p>
                    Our website is designed to be simple,
                    fast, and easy to use.
                </p>
            </div>

            <div class="card">
                <h3>Modern</h3>
                <p>
                    Clean and modern design using
                    HTML and CSS.
                </p>
            </div>

            <div class="card">
                <h3>Laravel</h3>
                <p>
                    Powered by Laravel framework
                    and PHP.
                </p>
            </div>

        </div>

    </section>

    <footer>
        <p>© 2026 My Laravel Website. All Rights Reserved.</p>
    </footer>

</body>
</html>