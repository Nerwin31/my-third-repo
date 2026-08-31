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
        background: linear-gradient(135deg, #060b12, #111827);
    }

    .login-card {
        border-radius: 20px;
        border: 1px solid #20c997;
        box-shadow: 0 0 30px rgba(32, 201, 151, 0.15);
    }

    .brand-logo {
        width: 75px;
        height: 75px;
        margin: auto;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #20c997;
        color: #000;
        font-size: 28px;
        font-weight: bold;
        box-shadow: 0 0 20px rgba(32, 201, 151, 0.5);
    }

    .login-title {
        font-weight: bold;
    }

    .form-control {
        border-radius: 10px;
    }

    .login-btn {
        border-radius: 10px;
        font-weight: bold;
    }

    .footer-text {
        font-size: 13px;
    }
</style>
```

</head>

<body>

```
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/">
            ACT Laravel App
        </a>

        <div class="ms-auto">
            <a href="/" class="btn btn-outline-light btn-sm">
                Home
            </a>
        </div>
    </div>
</nav>


<!-- Login Section -->
<div class="container">
    <div class="row justify-content-center align-items-center min-vh-100">

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
                                class="btn btn-success btn-lg login-btn"
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
</div>
```

</body>
</html>
