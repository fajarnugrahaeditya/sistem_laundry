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
            background:#edf6f5;
        }

        

        .custom-navbar{

            background:linear-gradient(135deg,#1F5E67,#2D7A83);

            padding:22px 0;

            box-shadow:0 8px 20px rgba(31,94,103,.25);

        }

        .navbar-title{

            color:white;

            font-size:30px;

            font-weight:700;

            margin-bottom:12px;

            letter-spacing:.5px;

        }

        .navbar-menu{

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

            background:white;

            border-color:white;

            color:#1F5E67;

            font-weight:700;

            box-shadow:0 6px 18px rgba(255,255,255,.25);

        }

        

        .welcome-text{

            color:white;

            font-size:18px;

            font-weight:400;

            opacity:.95;

            margin-bottom:2px;

        }

        .admin-name{

            color:white;

            font-size:24px;

            font-weight:700;

            line-height:1.2;

        }

        

        .logout-btn{

            background:white;

            color:#1F5E67;

            border:none;

            border-radius:50px;

            padding:10px 25px;

            font-weight:600;

            transition:.3s;

        }

        .logout-btn:hover{

            background:#d8f2f0;

            color:#17484f;

        }

        .content{

            margin-top:40px;

        }

        

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

            background:#1F5E67;

        }

        .bg-green{

            background:#3AAFA9;

        }

        .bg-red{

            background:#E76F51;

        }

        .bg-yellow{

            background:#F4A261;

        }

        .card-title-custom{

            color:#6c757d;

            font-weight:600;

        }

        .card-number{

            font-size:34px;

            font-weight:700;

            color:#1F5E67;

        }

        

        .table{

            border-radius:15px;

            overflow:hidden;

            background:white;

        }

        .table thead{

            background:#1F5E67;

            color:white;

        }

        .table thead th{

            background:#1F5E67 !important;

            color:white !important;

            vertical-align:middle;

            border:none;

        }

        .table tbody tr:hover{

            background:#eef8f7;

        }

        .table td{

            vertical-align:middle;

        }

        

        .btn-primary{

            background:#1F5E67;

            border:#1F5E67;

        }

        .btn-primary:hover{

            background:#17484f;

            border:#17484f;

        }

        .btn-warning{

            color:white;

        }

    </style>

</head>

<body>

<nav class="custom-navbar">

    <div class="container">

        <div class="row align-items-center">

            <!-- KIRI -->

            <div class="col-md-3">

                <div class="welcome-text">

                    Selamat datang

                </div>

                <div class="admin-name">

                    Admin {{ Auth::user()->name }}

                </div>

            </div>

            <!-- TENGAH -->

            <div class="col-md-6 text-center">

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

            <!-- KANAN -->

            <div class="col-md-3 text-end">

                <form action="{{ route('logout') }}" method="POST">

                    @csrf

                    <button class="btn logout-btn">

                        <i class="bi bi-box-arrow-right"></i>

                        Logout

                    </button>

                </form>

            </div>

        </div>

    </div>

</nav>

<div class="container content">

    @yield('content')

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>