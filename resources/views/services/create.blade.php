@extends('layout')

@section('content')

<h2>Tambah Layanan Laundry</h2>

<form action="/services" method="POST">
    @csrf

    <div class="mb-3">
        <label>Nama Layanan</label>
        <input type="text"
            name="name"
            class="form-control"
            required>
    </div>

    <div class="mb-3">
        <label>Deskripsi</label>
        <textarea name="description"
            class="form-control"></textarea>
    </div>

    <div class="mb-3">
        <label>Harga per Kg</label>
        <input type="number"
            name="price_per_kg"
            class="form-control"
            required>
    </div>

    <div class="mb-3">
        <label>Minimal Berat (Kg)</label>
        <input type="number"
            step="0.1"
            name="min_weight_kg"
            class="form-control"
            value="1"
            required>
    </div>

    <div class="mb-3">
        <label>Hari Proses</label>
        <input type="number"
            name="processing_days"
            class="form-control"
            value="3"
            required>
    </div>

    <div class="mb-3">
        <label>Includes</label>
        <textarea name="includes"
            class="form-control"></textarea>
    </div>

    <div class="mb-3">
        <label>Status</label>

        <select name="is_active"
            class="form-control">

            <option value="1">
                Aktif
            </option>

            <option value="0">
                Nonaktif
            </option>
        </select>
    </div>

    <button class="btn btn-primary">
        Simpan
    </button>

    <a href="/services"
        class="btn btn-secondary">
        Kembali
    </a>

</form>

@endsection