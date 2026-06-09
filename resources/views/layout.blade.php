<!DOCTYPE html>
<html>
<head>
    <title>Manajemen Laundry</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .custom-navbar {
            background: #0d6efd;
            padding: 14px 0;
        }

        .nav-btn {
            border: 2px solid white;
            color: white;
            background: transparent;
            padding: 8px 18px;
            border-radius: 10px;
            text-decoration: none;
            margin-left: 8px;
            transition: 0.3s;
            font-weight: 500;
        }

        .nav-btn:hover {
            background: rgba(255,255,255,0.15);
            color: white;
        }

        .nav-btn.active {
            background: #ffc107;
            color: black;
            border-color: #ffc107;
            font-weight: bold;
        }
    </style>
</head>
<body>

<nav class="navbar custom-navbar">
    <div class="container">

        <a href="/"
            class="navbar-brand text-white fw-bold">
            Sistem Manajemen Laundry
        </a>

        <div>

            <a href="/services"
                class="nav-btn {{ request()->is('services*') ? 'active' : '' }}">
                Service
            </a>

            <a href="/orders"
                class="nav-btn {{ request()->is('orders*') ? 'active' : '' }}">
                Order
            </a>

        </div>

    </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

</body>
</html>