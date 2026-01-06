<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Ekosistem Alam</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Google Font --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to bottom, #e8f5e9, #ffffff);
            min-height: 100vh;
        }

        /* Navbar */
        .navbar {
            background: linear-gradient(90deg, #2e7d32, #4caf50);
        }

        .navbar-brand {
            font-weight: 600;
            color: #ffffff !important;
        }

        /* Card utama */
        .content-card {
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.08);
            padding: 25px;
        }

        /* Button tema alam */
        .btn-primary {
            background-color: #2e7d32;
            border: none;
        }

        .btn-primary:hover {
            background-color: #1b5e20;
        }

        .btn-info {
            background-color: #81c784;
            border: none;
            color: #000;
        }

        .btn-warning {
            background-color: #ffb300;
            border: none;
        }

        .btn-danger {
            background-color: #e53935;
            border: none;
        }

        /* Table */
        .table thead {
            background-color: #c8e6c9;
        }

        .table tbody tr:hover {
            background-color: #f1f8e9;
        }

        footer {
            margin-top: 50px;
            padding: 15px;
            text-align: center;
            color: #555;
        }
    </style>
</head>

<body>

{{-- NAVBAR --}}
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('ekosistem.index') }}">
            🌿 Sistem Informasi Ekosistem
        </a>
    </div>
</nav>

{{-- CONTENT --}}
<div class="container mt-4">
    <div class="content-card">
        @yield('content')
    </div>
</div>

{{-- FOOTER --}}
<footer>
    © {{ date('Y') }} | Project Laravel Ekosistem Dimas🌎
</footer>

</body>
</html>
