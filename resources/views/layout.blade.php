<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Manajemen Laundry</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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

        /* ================= DASHBOARD CARD ================= */

.dashboard-card{

    border:none;

    border-radius:18px;

    box-shadow:0 8px 25px rgba(0,0,0,.08);

    transition:.3s;

}

.dashboard-card:hover{

    transform:translateY(-5px);

    box-shadow:0 12px 30px rgba(0,0,0,.12);

}

.dashboard-icon{

    width:60px;

    height:60px;

    border-radius:50%;

    display:flex;

    align-items:center;

    justify-content:center;

    margin:0 auto 15px;

    font-size:28px;

    color:white;

}

.bg-blue{

    background:#0d6efd;

}

.bg-green{

    background:#198754;

}

.bg-red{

    background:#dc3545;

}

.card-title-custom{

    color:#6c757d;

    font-weight:600;

}

.card-number{

    font-size:34px;

    font-weight:700;

}

/* ================= TABLE ================= */

.table thead{

    background:#0d6efd;

    color:white;

}

.table thead th{

    background:#0d6efd !important;

    color:white !important;

    vertical-align:middle;

}

.table tbody tr:hover{

    background:#f8f9fa;

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