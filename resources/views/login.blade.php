<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

```
<title>Login | ACT Laravel App</title>

<!-- Bootswatch Cyborg Theme -->
<link rel="stylesheet" href="{{ asset('css/bootstrap-cyborg.min.css') }}">

<style>
    body {
        background: linear-gradient(135deg, #050816, #101a35, #24104f);
        min-height: 100vh;
    }

    .login-card {
        border-radius: 20px;
        border: 1px solid #5865f2;
        background: rgba(20, 25, 45, 0.95);
        box-shadow:
            0 0 25px rgba(88, 101, 242, 0.25),
            0 0 45px rgba(124, 58, 237, 0.15);
    }

    .brand-logo {
        width: 75px;
        height: 75px;
        margin: auto;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;

        background: linear-gradient(135deg, #2563eb, #7c3aed);
        color: white;

        font-size: 28px;
        font-weight: bold;

        box-shadow:
            0 0 20px rgba(37, 99, 235, 0.5),
            0 0 30px rgba(124, 58, 237, 0.35);
    }

    .login-title {
        font-weight: bold;
        color: #ffffff;
    }

    .text-muted {
        color: #aab4d4 !important;
    }

    .form-label {
        color: #dbe4ff;
        font-weight: 500;
    }

    .form-control {
        border-radius: 10px;
        background: #11182d;
        border: 1px solid #39456b;
        color: white;
    }

    .form-control:focus {
        background: #11182d;
        color: white;
        border-color: #7c3aed;

        box-shadow:
            0 0 0 0.2rem rgba(124, 58, 237, 0.2),
            0 0 15px rgba(37, 99, 235, 0.2);
    }

    .form-control::placeholder {
        color: #7783a6;
    }

    .form-check-label {
        color: #cbd5f5;
    }

    .form-check-input:checked {
        background-color: #6366f1;
        border-color: #6366f1;
    }

    .login-btn {
        border-radius: 10px;
        font-weight: bold;
        border: none;

        background: linear-gradient(90deg, #2563eb, #7c3aed);

        box-shadow:
            0 5px 15px rgba(37, 99, 235, 0.3);
    }

    .login-btn:hover {
        background: linear-gradient(90deg, #7c3aed, #2563eb);

        box-shadow:
            0 0 20px rgba(124, 58, 237, 0.5);
    }

    .navbar {
        border-bottom: 1px solid rgba(88, 101, 242, 0.3);
    }

    .navbar-brand {
        color: #ffffff !important;
    }

    .footer-text {
        font-size: 13px;
    }
</style>
```

</head>

<body>

<!-- Navbar -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/">
            ACT Laravel App
        </a>

```
    <div class="ms-auto">
        <a href="/" class="btn btn-outline-light btn-sm">
            Home
        </a>
    </div>
</div>
```

</nav>

<!-- Login Section -->

<div class="container">
    <div class="row justify-content-center align-items-center min-vh-100">

```
    <div class="col-12 col-sm-10 col-md-7 col-lg-5">

        <!-- Login Card -->
        <div class="card login-card">

            <div class="card-body p-4 p-md-5">

                <!-- Logo -->
                <div class="text-center mb-4">

                    <div class="brand-logo mb-3">
                        ACT
                    </div>

                    <h3 class="login-title">
                        Welcome Back!
                    </h3>

                    <p class="text-muted">
                        Sign in to continue to your account
                    </p>

                </div>


                <!-- Login Form -->
                <form>

                    <!-- Email -->
                    <div class="mb-3">

                        <label for="email" class="form-label">
                            Email Address
                        </label>

                        <input
                            type="email"
                            class="form-control"
                            id="email"
                            placeholder="Enter your email"
                            required
                        >

                    </div>


                    <!-- Password -->
                    <div class="mb-3">

                        <label for="password" class="form-label">
                            Password
                        </label>

                        <input
                            type="password"
                            class="form-control"
                            id="password"
                            placeholder="Enter your password"
                            required
                        >

                    </div>


                    <!-- Remember Me -->
                    <div class="form-check mb-4">

                        <input
                            class="form-check-input"
                            type="checkbox"
                            id="remember"
                        >

                        <label class="form-check-label" for="remember">
                            Remember Me
                        </label>

                    </div>


                    <!-- Login Button -->
                    <div class="d-grid">

                        <button
                            type="submit"
                            class="btn btn-lg login-btn"
                        >
                            Login
                        </button>

                    </div>

                </form>


                <!-- Footer -->
                <div class="text-center mt-4">

                    <p class="text-muted footer-text mb-0">
                        ACT 2nd Year • Laravel & Bootstrap
                    </p>

                    <small class="text-muted">
                        Powered by Laravel
                    </small>

                </div>

            </div>
        </div>

    </div>
</div>
```

</div>

</body>
</html>
