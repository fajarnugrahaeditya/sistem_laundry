@extends('layout')

@section('content')

<h2>Edit Layanan Laundry</h2>

<form action="/services/{{ $service->id }}"
    method="POST">

    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Nama Layanan</label>
        <input type="text"
            name="name"
            class="form-control"
            value="{{ $service->name }}"
            required>
    </div>

    <div class="mb-3">
        <label>Deskripsi</label>
        <textarea name="description"
            class="form-control">{{ $service->description }}</textarea>
    </div>

    <div class="mb-3">
        <label>Harga per Kg</label>
        <input type="number"
            name="price_per_kg"
            class="form-control"
            value="{{ $service->price_per_kg }}"
            required>
    </div>

    <div class="mb-3">
        <label>Minimal Berat (Kg)</label>
        <input type="number"
            step="0.1"
            name="min_weight_kg"
            class="form-control"
            value="{{ $service->min_weight_kg }}"
            required>
    </div>

    <div class="mb-3">
        <label>Hari Proses</label>
        <input type="number"
            name="processing_days"
            class="form-control"
            value="{{ $service->processing_days }}"
            required>
    </div>

    <div class="mb-3">
        <label>Includes</label>
        <textarea name="includes"
            class="form-control">{{ $service->includes }}</textarea>
    </div>

    <div class="mb-3">
        <label>Status</label>

        <select name="is_active"
            class="form-control">

            <option value="1"
                {{ $service->is_active == 1 ? 'selected' : '' }}>
                Aktif
            </option>

            <option value="0"
                {{ $service->is_active == 0 ? 'selected' : '' }}>
                Nonaktif
            </option>
        </select>
    </div>

    <button class="btn btn-success">
        Update
    </button>

    <a href="/services"
        class="btn btn-secondary">
        Kembali
    </a>

</form>

@endsection