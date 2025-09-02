<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>Elon Musk News</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar-brand {
            font-weight: bold;
            color: #dc3545 !important;
        }
        .news-card img {
            object-fit: cover;
            height: 200px;
        }
        footer {
            margin-top: 50px;
            padding: 20px 0;
            background: #212529;
            color: white;
            text-align: center;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('news') }}">Elon Musk News</a>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>© 2025 Laravel News | Powered by Laravel 10</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
