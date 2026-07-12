<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Sistem Manajemen Laundry</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background:#f4f7fb;
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }

        .register-card{
            width:450px;
            border:none;
            border-radius:18px;
            box-shadow:0 10px 30px rgba(0,0,0,.12);
        }

        .register-header{
            background:#0d6efd;
            color:white;
            text-align:center;
            padding:25px;
            border-radius:18px 18px 0 0;
        }

        .register-body{
            padding:30px;
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

                <label class="form-label">Nama</label>

                <input
                    type="text"
                    name="name"
                    class="form-control"
                    value="{{ old('name') }}"
                    required>

            </div>

            <div class="mb-3">

                <label class="form-label">Email</label>

                <input
                    type="email"
                    name="email"
                    class="form-control"
                    value="{{ old('email') }}"
                    required>

            </div>

            <div class="mb-3">

                <label class="form-label">Password</label>

                <input
                    type="password"
                    name="password"
                    class="form-control"
                    required>

            </div>

            <div class="mb-4">

                <label class="form-label">Konfirmasi Password</label>

                <input
                    type="password"
                    name="password_confirmation"
                    class="form-control"
                    required>

            </div>

            <button type="submit" class="btn btn-primary w-100">

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