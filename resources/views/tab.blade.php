<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postingan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #000000;
            color: white;
        }

        .sidebar {
            background-color: #000000;
            overflow: scroll;
        }

        .content {
            background-color: #000000;
            padding: 30px;
        }

        .card {
            background-color: #2c2c2c;
        }

        .recommendations {
            background-color: #000000;
            padding: 20px;
            color: white;
            overflow-y: auto;
        }

        .nav-link {
            color: #a3a3a3;
        }

        .nav-link.active {
            color: white;
            border-bottom: 2px solid white;
        }

        .navbar-bottom {
            background-color: #4fa2a8;
            color: white;
            position: fixed;
            bottom: 10px;
            width: 100%;
            text-align: center;
            padding: 5px;
        }

        .navbar-bottom a {
            margin-right: 10px;
        }

        .recommendation-subtitle {
            font-size: 0.875rem;
            font-weight: 300;
            margin-top: -0.25rem;
        }

        .rightbar .list-group-item {
            background-color: #000000;
            color: white;
            border: none;
            padding: 0.5rem 0;
        }

        .rightbar .list-group-item .btn {
            font-size: 0.875rem;
        }

        .rightbar-footer {
            font-size: 0.75rem;
            color: #a3a3a3;
            margin-top: 1rem;
        }

        .rightbar .text-link {
            color: #0d6efd;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 sidebar d-flex flex-column p-3">
                <a href="/"
                    class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <svg class="bi pe-none me-2" width="40" height="32">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                    <span class="fs-4">Sidebar</span>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link" aria-current="page">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-house-door-fill me-2" viewBox="0 0 16 16">
                                <path
                                    d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5" />
                            </svg>
                            Beranda
                        </a>
                    </li>

                    <li>
                        <a href="#" class="nav-link" aria-current="page">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                            </svg>
                            Explore
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
                            </svg>
                            Login
                        </a>
                    </li>
                </ul>
                <hr>
            </div>
            <!-- Main content -->
            <div class="col-md-10">
                <!-- Header -->
                <header class="d-flex justify-content-center align-items-center py-3">
                    <img src="https://via.placeholder.com/50" alt="Logo">
                </header>
                <!-- Navigator -->
                <nav class="d-flex justify-content-center mb-4">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">For You</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Following</a>
                        </li>
                    </ul>
                </nav>
                <!-- Content -->
                <div class="row">
                    <div class="col-md-8 content">
                        <!-- Post Card -->
                        <div class="card mb-3">
                            <div class="container-fluid d-flex align-items-center p-2">
                                <img src="https://via.placeholder.com/40" alt="Avatar" class="rounded-circle me-2">
                                <div>
                                    <div class="fw-bold">reezyx</div>
                                    <small>Rudiansyah Wijaya Pratama</small>
                                </div>
                                <a href="#" class="nav-link ms-auto" aria-current="page">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16">
                                        <path
                                            d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1z" />
                                    </svg>
                                </a>
                            </div>
                            <div class="card-body text-center">
                                <img src="https://via.placeholder.com/150" alt="Heart Image" class="img-fluid">
                                <p>1 Likes</p>
                                <p>0 Comments</p>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-body text-center">
                                <img src="https://via.placeholder.com/150" alt="Heart Image" class="img-fluid">
                                <p>1 Likes</p>
                                <p>0 Comments</p>
                            </div>
                        </div>
                    </div>
                    <!-- Rightbar -->
                    <aside class="col-md-3 recommendations rightbar">
                        <h6 class="recommendation-title">Siapa yang harus diikuti</h6>
                        <p class="recommendation-subtitle">Orang yang mungkin anda kenal</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <img src="https://via.placeholder.com/40" alt="Avatar"
                                        class="rounded-circle me-2">
                                    <div>
                                        <div class="fw-bold">reezyx</div>
                                        <small>Rudiansyah Wijaya Pratama</small>
                                    </div>
                                </div>
                                <a href="#" class="text-link">Follow</a>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <img src="https://via.placeholder.com/40" alt="Avatar"
                                        class="rounded-circle me-2">
                                    <div>
                                        <div class="fw-bold">arhandev</div>
                                        <small>Farhan Abdul Hamid</small>
                                    </div>
                                </div>
                                <a href="#" class="text-link">Follow</a>
                            </li>


                            <nav class="navbar-bottom">
                                <div class="container-fluid d-flex justify-content-between align-items-center">
                                    <div class="d-flex flex-column">
                                        <span class="navbar-text"><strong>Jangan ketinggalan berita
                                                terbaru</strong></span>
                                        <small class="d-block text-start">login, untuk pengalaman yang baru.</small>
                                    </div>
                                    <div>
                                        <a href="#" class="btn btn-outline-light">Login</a>
                                        <a href="#" class="btn btn-light">Register</a>
                                    </div>
                                </div>
                            </nav>
                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
