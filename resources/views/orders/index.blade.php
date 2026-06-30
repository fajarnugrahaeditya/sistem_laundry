@extends('layout')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>

        <h2 class="fw-bold mb-1">
            Manajemen Order Laundry
        </h2>

        <p class="text-muted">
            Kelola seluruh pesanan laundry pelanggan.
        </p>

    </div>

    <a href="/orders/create"
        class="btn btn-primary px-4">

        <i class="bi bi-plus-circle"></i>

        Tambah Order

    </a>

</div>


<div class="row mb-4">

    <div class="col-md-4 mb-3">

        <div class="card dashboard-card">

            <div class="card-body text-center">

                <div class="dashboard-icon bg-primary">

                    <i class="bi bi-arrow-repeat"></i>

                </div>

                <div class="card-title-custom">

                    Sedang Diproses

                </div>

                <div class="card-number text-primary">

                    {{ $processingOrder }}

                </div>

            </div>

        </div>

    </div>

    <div class="col-md-4 mb-3">

        <div class="card dashboard-card">

            <div class="card-body text-center">

                <div class="dashboard-icon bg-warning text-dark">

                    <i class="bi bi-box-seam"></i>

                </div>

                <div class="card-title-custom">

                    Siap Diambil

                </div>

                <div class="card-number text-warning">

                    {{ $readyOrder }}

                </div>

            </div>

        </div>

    </div>

    <div class="col-md-4 mb-3">

        <div class="card dashboard-card">

            <div class="card-body text-center">

                <div class="dashboard-icon bg-success">

                    <i class="bi bi-check-circle"></i>

                </div>

                <div class="card-title-custom">

                    Selesai

                </div>

                <div class="card-number text-success">

                    {{ $completedOrder }}

                </div>

            </div>

        </div>

    </div>

</div>


@if(session('success'))

<div class="alert alert-success alert-dismissible fade show">

    {{ session('success') }}

    <button class="btn-close"
        data-bs-dismiss="alert"></button>

</div>

@endif


<div class="card shadow-sm border-0 rounded-4">

    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-hover align-middle mb-0">

                <thead>

                    <tr>

                        <th>No</th>
                        <th>Customer</th>
                        <th>Layanan</th>
                        <th>Berat</th>
                        <th>Total Harga</th>
                        <th>Status</th>
                        <th class="text-center" width="170">
                            Aksi
                        </th>

                    </tr>

                </thead>

                <tbody>

                @forelse($orders as $order)

                    <tr>

                        <td>{{ $loop->iteration }}</td>

                        <td>

                            <strong>

                                {{ $order->customer_name }}

                            </strong>

                            <br>

                            <small class="text-muted">

                                {{ $order->phone }}

                            </small>

                        </td>

                        <td>

                            {{ $order->service->name }}

                        </td>

                        <td>

                            {{ $order->weight_kg }} Kg

                        </td>

                        <td>

                            Rp {{ number_format($order->total_price,0,',','.') }}

                        </td>

                        <td>

                            @switch($order->status)

                                @case('received')

                                    <span class="badge bg-secondary">
                                        Diterima
                                    </span>

                                    @break

                                @case('washing')

                                    <span class="badge bg-primary">
                                        Dicuci
                                    </span>

                                    @break

                                @case('drying')

                                    <span class="badge bg-info text-dark">
                                        Dikeringkan
                                    </span>

                                    @break

                                @case('ironing')

                                    <span class="badge bg-warning text-dark">
                                        Disetrika
                                    </span>

                                    @break

                                @case('ready')

                                    <span class="badge bg-success">
                                        Siap Diambil
                                    </span>

                                    @break

                                @case('picked_up')

                                    <span class="badge bg-dark">
                                        Selesai
                                    </span>

                                    @break

                            @endswitch

                        </td>

                        <td class="text-center">

                            <a href="/orders/{{ $order->id }}/edit"
                                class="btn btn-warning btn-sm">

                                <i class="bi bi-pencil-square"></i>

                            </a>

                            <form
                                action="/orders/{{ $order->id }}"
                                method="POST"
                                class="d-inline">

                                @csrf

                                @method('DELETE')

                                <button
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin ingin menghapus order ini?')">

                                    <i class="bi bi-trash"></i>

                                </button>

                            </form>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="7"
                            class="text-center py-4 text-muted">

                            Belum ada data order.

                        </td>

                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection