@extends('layout')

@section('content')

<h2>Data Layanan Laundry</h2>

<a href="/services/create" class="btn btn-primary mb-3">
    Tambah Layanan
</a>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Harga/Kg</th>
            <th>Min Kg</th>
            <th>Hari Proses</th>
            <th>Status</th>
            <th width="180">Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach($services as $service)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $service->name }}</td>
            <td>Rp {{ number_format($service->price_per_kg) }}</td>
            <td>{{ $service->min_weight_kg }}</td>
            <td>{{ $service->processing_days }} hari</td>
            <td>
                {{ $service->is_active ? 'Aktif' : 'Nonaktif' }}
            </td>

            <td>
                <a href="/services/{{ $service->id }}/edit"
                    class="btn btn-warning btn-sm">
                    Edit
                </a>

                <form action="/services/{{ $service->id }}"
                    method="POST"
                    style="display:inline;">
                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger btn-sm">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection