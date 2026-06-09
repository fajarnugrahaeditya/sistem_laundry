<!DOCTYPE html>
<html>
<head>
    <title>Manajemen Laundry</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark bg-primary">
    <div class="container">
        <a href="/" class="navbar-brand">
            Sistem Manajemen Laundry
        </a>

        <div>
            <a href="/services" class="btn btn-light">
                Service
            </a>

            <a href="/orders" class="btn btn-warning">
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