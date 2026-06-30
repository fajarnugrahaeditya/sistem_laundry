<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Manajemen Laundry</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background:#f5f7fb;
        }

        /* ================= NAVBAR ================= */

        .custom-navbar{

            background:linear-gradient(135deg,#0d6efd,#4a8dff);

            padding:28px 0;

            box-shadow:0 8px 20px rgba(0,0,0,.12);

        }

        .navbar-title{

            color:white;

            font-size:32px;

            font-weight:700;

            text-align:center;

            letter-spacing:.5px;

        }

        .navbar-menu{

            margin-top:22px;

            display:flex;

            justify-content:center;

            gap:18px;

        }

        .nav-btn{

            color:white;

            text-decoration:none;

            border:2px solid white;

            border-radius:50px;

            padding:10px 26px;

            transition:.3s;

            font-weight:500;

        }

        .nav-btn:hover{

            background:rgba(255,255,255,.18);

            color:white;

        }

        .nav-btn.active{

            background:#ffc107;

            border-color:#ffc107;

            color:#212529;

            font-weight:700;

            box-shadow:0 6px 15px rgba(255,193,7,.35);

        }

        .content{

            margin-top:40px;

        }

    </style>

</head>

<body>

<nav class="custom-navbar">

    <div class="container">

        <div class="navbar-title">

            Sistem Manajemen Laundry

        </div>

        <div class="navbar-menu">

            <a href="/"
                class="nav-btn {{ request()->path() == '/' || request()->path() == '' ? 'active' : '' }}">
                Home
            </a>

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

<div class="container content">

    @yield('content')

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>