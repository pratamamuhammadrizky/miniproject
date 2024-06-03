<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #000;
            color: #fff;
        }

        .container {
            margin-top: 100px;
            margin-bottom: 100px;
        }

        .form-control {
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        .form-control:focus {
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }

        .btn-primary {
            background-color: white;
            border: none;
            color: black;
            border-radius: 5px;
            cursor: pointer;
        }

        .register-link a {
            color: white;
            text-decoration: none;
        }

        .login-form {
            margin-left: 10px;
        }

        @media (max-width: 768px) {
            .login-form {
                margin-left: 10;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h3 class="text-center mb-3">Login</h3>
        <div class="row align-items-center">
            <div class="col-md-4 mb-4">
                <img src="logo.jpg" alt="Logo" class="img-fluid rounded">
            </div>
            <div class="col-md-6 login-form">
                <form>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Enter username">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter password">
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary mb-3 mt-3">Login</button>
                        </div>
                </form>
                <div class="text-center">
                    Belum punya akun? <a href="{{ route('register') }}" class="register-link">Register</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
