@extends('layout')

@section('content')

<h2>Tambah Order Laundry</h2>

<form action="/orders" method="POST">
@csrf

<div class="mb-3">
    <label>Layanan</label>

    <select name="service_id"
        class="form-control"
        required>

        <option value="">
            -- Pilih Layanan --
        </option>

        @foreach($services as $service)
        <option value="{{ $service->id }}">
            {{ $service->name }}
            - Rp {{ number_format($service->price_per_kg) }}/Kg
        </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label>Nama Customer</label>
    <input type="text"
        name="customer_name"
        class="form-control"
        required>
</div>

<div class="mb-3">
    <label>No HP</label>
    <input type="text"
        name="phone"
        class="form-control"
        required>
</div>

<div class="mb-3">
    <label>Berat (Kg)</label>
    <input type="number"
        step="0.1"
        name="weight_kg"
        class="form-control"
        required>
</div>

<div class="mb-3">
    <label>Tanggal Masuk</label>
    <input type="date"
        name="received_date"
        class="form-control"
        required>
</div>

<div class="mb-3">
    <label>Status</label>

    <select name="status"
        class="form-control">

        <option value="received">
            received
        </option>

        <option value="washing">
            washing
        </option>

        <option value="drying">
            drying
        </option>

        <option value="ironing">
            ironing
        </option>

        <option value="ready">
            ready
        </option>

        <option value="picked_up">
            picked_up
        </option>
    </select>
</div>

<div class="mb-3">
    <label>Catatan</label>

    <textarea name="notes"
        class="form-control"></textarea>
</div>

<button class="btn btn-primary">
    Simpan
</button>

</form>

@endsection