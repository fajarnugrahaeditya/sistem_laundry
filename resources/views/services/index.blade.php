@extends('layout')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>

        <h2 class="fw-bold mb-1">

            Manajemen Layanan Laundry

        </h2>

        <p class="text-muted">

            Kelola seluruh layanan laundry yang tersedia.

        </p>

    </div>

    <a href="/services/create"
        class="btn btn-primary px-4">

        <i class="bi bi-plus-circle"></i>

        Tambah Layanan

    </a>

</div>


<div class="row mb-4">

    <div class="col-md-4 mb-3">

        <div class="card dashboard-card">

            <div class="card-body text-center">

                <div class="dashboard-icon bg-blue">

                    <i class="bi bi-box-seam"></i>

                </div>

                <div class="card-title-custom">

                    Total Layanan

                </div>

                <div class="card-number text-primary">

                    {{ $totalService }}

                </div>

            </div>

        </div>

    </div>

    <div class="col-md-4 mb-3">

        <div class="card dashboard-card">

            <div class="card-body text-center">

                <div class="dashboard-icon bg-green">

                    <i class="bi bi-check-circle"></i>

                </div>

                <div class="card-title-custom">

                    Layanan Aktif

                </div>

                <div class="card-number text-success">

                    {{ $activeService }}

                </div>

            </div>

        </div>

    </div>

    <div class="col-md-4 mb-3">

        <div class="card dashboard-card">

            <div class="card-body text-center">

                <div class="dashboard-icon bg-red">

                    <i class="bi bi-x-circle"></i>

                </div>

                <div class="card-title-custom">

                    Layanan Nonaktif

                </div>

                <div class="card-number text-danger">

                    {{ $inactiveService }}

                </div>

            </div>

        </div>

    </div>

</div>


@if(session('success'))

<div class="alert alert-success">

    {{ session('success') }}

</div>

@endif


<div class="card shadow-sm border-0 rounded-4">

<div class="card-body">

<div class="table-responsive">

<table class="table table-hover align-middle">

<thead>

<tr>

<th>No</th>

<th>Nama Layanan</th>

<th>Harga/Kg</th>

<th>Minimal Berat</th>

<th>Hari</th>

<th>Status</th>

<th class="text-center">Aksi</th>

</tr>

</thead>

<tbody>

@forelse($services as $service)

<tr>

<td>{{ $loop->iteration }}</td>

<td>

<strong>{{ $service->name }}</strong>

@if($service->description)

<br>

<small class="text-muted">

{{ $service->description }}

</small>

@endif

</td>

<td>

Rp {{ number_format($service->price_per_kg,0,',','.') }}

</td>

<td>

{{ $service->min_weight_kg }} Kg

</td>

<td>

{{ $service->processing_days }} Hari

</td>

<td>

@if($service->is_active)

<span class="badge bg-success">

Aktif

</span>

@else

<span class="badge bg-danger">

Nonaktif

</span>

@endif

</td>

<td class="text-center">

<a href="/services/{{ $service->id }}/edit"
class="btn btn-warning btn-sm">

<i class="bi bi-pencil-square"></i>

</a>

<form action="/services/{{ $service->id }}"
method="POST"
class="d-inline">

@csrf
@method('DELETE')

<button
class="btn btn-danger btn-sm"
onclick="return confirm('Hapus layanan ini?')">

<i class="bi bi-trash"></i>

</button>

</form>

</td>

</tr>

@empty

<tr>

<td colspan="7" class="text-center py-4">

Belum ada data layanan.

</td>

</tr>

@endforelse

</tbody>

</table>

</div>

</div>

</div>

@endsection