<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Sistem Manajemen Laundry</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{

            background:#eef3f5;

            display:flex;

            justify-content:center;

            align-items:center;

            height:100vh;

        }

        .login-card{

            width:430px;

            background:white;

            border:none;

            border-radius:22px;

            box-shadow:0 15px 40px rgba(0,0,0,.12);

            overflow:hidden;

        }

        .login-header{

            background:white;

            text-align:center;

            padding:35px 30px 20px;

        }

        .login-header h3{

            color:#1F5B67;

            font-weight:700;

            margin-bottom:8px;

        }

        .login-header small{

            color:#7d8b92;

            font-size:15px;

        }

        .login-body{

            padding:30px;

        }

        label{

            font-weight:600;

            color:#555;

            margin-bottom:6px;

        }

        .form-control{

            border-radius:12px;

            padding:12px;

            border:1px solid #d7dfe3;

        }

        .form-control:focus{

            border-color:#1F5B67;

            box-shadow:0 0 0 .2rem rgba(31,91,103,.18);

        }

        .btn-login{

            width:100%;

            padding:12px;

            border:none;

            border-radius:12px;

            background:#1F5B67;

            color:white;

            font-weight:600;

            transition:.3s;

        }

        .btn-login:hover{

            background:#184b54;

            color:white;

        }

        hr{

            margin:25px 0;

        }

        a{

            color:#1F5B67;

            text-decoration:none;

            font-weight:600;

        }

        a:hover{

            text-decoration:underline;

        }

    </style>

</head>

<body>

<div class="card login-card">

    <div class="login-header">

        <h3>Sistem Manajemen Laundry</h3>

        <small>Silakan login untuk melanjutkan</small>

    </div>

    <div class="login-body">

        @if(session('error'))

            <div class="alert alert-danger">

                {{ session('error') }}

            </div>

        @endif

        @if(session('success'))

            <div class="alert alert-success">

                {{ session('success') }}

            </div>

        @endif

        <form action="/login" method="POST">

            @csrf

            <div class="mb-3">

                <label>Email</label>

                <input
                    type="email"
                    name="email"
                    class="form-control"
                    placeholder="Masukkan email"
                    required>

            </div>

            <div class="mb-4">

                <label>Password</label>

                <input
                    type="password"
                    name="password"
                    class="form-control"
                    placeholder="Masukkan password"
                    required>

            </div>

            <button class="btn-login">

                Login

            </button>

        </form>

        <hr>

        <div class="text-center">

            Belum punya akun?

            <a href="/register">

                Daftar

            </a>

        </div>

    </div>

</div>

</body>
</html>