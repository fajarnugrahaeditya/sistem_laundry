<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Sistem Manajemen Laundry</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background:#f4f7fb;
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }

        .login-card{

            width:420px;

            border:none;

            border-radius:18px;

            box-shadow:0 10px 30px rgba(0,0,0,.12);

        }

        .login-header{

            background:#0d6efd;

            color:white;

            text-align:center;

            padding:25px;

            border-radius:18px 18px 0 0;

        }

        .login-header h3{

            margin:0;

            font-weight:bold;

        }

        .login-body{

            padding:30px;

        }

        .btn-login{

            width:100%;

            border-radius:10px;

        }

    </style>

</head>

<body>

<div class="card login-card">

    <div class="login-header">

        <h3> Sistem Manajemen Laundry</h3>

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
                    required>

            </div>

            <div class="mb-4">

                <label>Password</label>

                <input
                    type="password"
                    name="password"
                    class="form-control"
                    required>

            </div>

            <button class="btn btn-primary btn-login">

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