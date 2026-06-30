@extends('layout')

@section('content')

<div class="text-center mt-5">

    <h1 class="fw-bold mb-3">
        Selamat Datang di <br>
        Sistem Manajemen Laundry
    </h1>

    <p class="text-muted fs-5 mb-4">
        Kelola layanan laundry dan pesanan customer
        dengan lebih mudah dan efisien.
    </p>

    <div class="d-flex justify-content-center gap-3">

        <a href="/orders"
            class="btn btn-warning btn-lg px-4">
            Buat Order
        </a>

        <a href="/services"
            class="btn btn-outline-primary btn-lg px-4">
            Atur Layanan
        </a>

    </div>

</div>

@endsection