<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Sistem Manajemen Laundry</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{

            background:#edf6f5;

            display:flex;

            justify-content:center;

            align-items:center;

            height:100vh;

        }

        .register-card{

            width:430px;

            background:white;

            border:none;

            border-radius:22px;

            box-shadow:0 15px 40px rgba(0,0,0,.12);

            overflow:hidden;

        }

        .register-header{

            background:white;

            text-align:center;

            padding:35px 30px 20px;

        }

        .register-header h3{

            color:#1F5E67;

            font-weight:700;

            margin-bottom:8px;

        }

        .register-header small{

            color:#7d8b92;

            font-size:15px;

        }

        .register-body{

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

            border-color:#1F5E67;

            box-shadow:0 0 0 .2rem rgba(31,94,103,.18);

        }

        .btn-register{

            width:100%;

            padding:12px;

            border:none;

            border-radius:12px;

            background:#1F5E67;

            color:white;

            font-weight:600;

            transition:.3s;

        }

        .btn-register:hover{

            background:#17484f;

            color:white;

        }

        hr{

            margin:25px 0;

        }

        a{

            color:#1F5E67;

            text-decoration:none;

            font-weight:600;

        }

        a:hover{

            text-decoration:underline;

        }

    </style>

</head>

<body>

<div class="card register-card">

    <div class="register-header">

        <h3>Sistem Manajemen Laundry</h3>

        <small>Registrasi Admin</small>

    </div>

    <div class="register-body">

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ url('/register') }}" method="POST">

            @csrf

            <div class="mb-3">

                <label>Nama</label>

                <input
                    type="text"
                    name="name"
                    class="form-control"
                    placeholder="Masukkan nama lengkap"
                    value="{{ old('name') }}"
                    required>

            </div>

            <div class="mb-3">

                <label>Email</label>

                <input
                    type="email"
                    name="email"
                    class="form-control"
                    placeholder="Masukkan email"
                    value="{{ old('email') }}"
                    required>

            </div>

            <div class="mb-3">

                <label>Password</label>

                <input
                    type="password"
                    name="password"
                    class="form-control"
                    placeholder="Masukkan password"
                    required>

            </div>

            <div class="mb-4">

                <label>Konfirmasi Password</label>

                <input
                    type="password"
                    name="password_confirmation"
                    class="form-control"
                    placeholder="Ulangi password"
                    required>

            </div>

            <button type="submit" class="btn-register">

                Register

            </button>

        </form>

        <hr>

        <div class="text-center">

            Sudah punya akun?

            <a href="{{ url('/login') }}">

                Login

            </a>

        </div>

    </div>

</div>

</body>
</html>