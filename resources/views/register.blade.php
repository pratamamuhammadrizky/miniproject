<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

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
            color: rgb(0, 0, 0);
            border-radius: 5px;
            cursor: pointer;  
        }

        .register-link a {
            color: white;
        }

        .register-form {
            margin-left: 10px;
        }

        @media (max-width: 768px) {
            .register-form {
                margin-left: 10px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h3 class="text-center mb-3">Register</h3>
        <div class="row align-items-center">
            <div class="col-md-4 mb-4">
                <img src="logo.jpg" alt="Logo" class="img-fluid rounded">
            </div>
            <div class="col-md-6 register-form">
                <form>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" placeholder="Masukkan username"
                                style="width: 100%;">
                        </div>
                        <div class="col-md-6">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama"
                                placeholder="Masukkan nama lengkap" style="width: 100%;">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-Mail</label>
                        <input type="email" class="form-control" id="email" placeholder="Masukkan akun e-mail">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label d-flex justify-content-between align-items-center">
                            Password
                            <button type="button" class="btn btn-secondary" id="password-eye-button"
                                onclick="showPassword('password-eye-button', 'password')">
                                <i class="bi bi-eye" id="password-eye"></i>
                            </button>
                        </label>
                        <input type="password" class="form-control" id="password" placeholder="Masukkan password">
                    </div>

                    <div class="mb-3">
                        <label for="konfirmasi_password"
                            class="form-label d-flex justify-content-between align-items-center">
                            Konfirmasi Password
                            <button type="button" class="btn btn-secondary" id="konfirmasi-password-eye-button"
                                onclick="showPassword('konfirmasi-password-eye-button', 'konfirmasi_password')">
                                <i class="fas fa-eye" id="konfirmasi-password-eye"></i>
                            </button>
                        </label>
                        <input type="password" class="form-control" id="konfirmasi_password"
                            placeholder="Masukkan konfirmasi password">
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-primary mb-3 mt-3">Register</button>
                    </div>
                </form>
                <div class="text-center">
                    Sudah punya akun? <a href="{{ route('login') }}" class="register-link">Login</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle dengan Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function showPassword(eyeId, passwordId) {
            const eye = document.getElementById(eyeId);
            const password = document.getElementById(passwordId);
            if (eye.classList.contains("fa-eye")) {
                eye.classList.remove("fa-eye");
                eye.classList.add("fa-eye-slash");
                password.type = "password";
            } else {
                eye.classList.remove("fa-eye-slash");
                eye.classList.add("fa-eye");
                password.type = "text";
            }
        }
    </script>
</body>

</html>
