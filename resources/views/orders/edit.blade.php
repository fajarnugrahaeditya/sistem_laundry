@extends('layout')

@section('content')

<h2>Edit Order Laundry</h2>

<form action="/orders/{{ $order->id }}" method="POST">

    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Layanan</label>

        <select name="service_id" class="form-control" required>

            <option value="">-- Pilih Layanan --</option>

            @foreach($services as $service)

            <option value="{{ $service->id }}"
                {{ $order->service_id == $service->id ? 'selected' : '' }}>

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
            value="{{ $order->customer_name }}"
            required>
    </div>

    <div class="mb-3">
        <label>No HP</label>

        <input type="text"
            name="phone"
            class="form-control"
            value="{{ $order->phone }}"
            required>
    </div>

    <div class="mb-3">
        <label>Berat (Kg)</label>

        <input type="number"
            step="0.1"
            name="weight_kg"
            class="form-control"
            value="{{ $order->weight_kg }}"
            required>
    </div>

    <div class="mb-3">
        <label>Tanggal Masuk</label>

        <input type="date"
            name="received_date"
            class="form-control"
            value="{{ $order->received_date }}"
            required>
    </div>

    <div class="mb-3">
        <label>Status</label>

        <select name="status" class="form-control">

            <option value="received" {{ $order->status == 'received' ? 'selected' : '' }}>
                received
            </option>

            <option value="washing" {{ $order->status == 'washing' ? 'selected' : '' }}>
                washing
            </option>

            <option value="drying" {{ $order->status == 'drying' ? 'selected' : '' }}>
                drying
            </option>

            <option value="ironing" {{ $order->status == 'ironing' ? 'selected' : '' }}>
                ironing
            </option>

            <option value="ready" {{ $order->status == 'ready' ? 'selected' : '' }}>
                ready
            </option>

            <option value="picked_up" {{ $order->status == 'picked_up' ? 'selected' : '' }}>
                picked_up
            </option>

        </select>
    </div>

    <div class="mb-3">
        <label>Catatan</label>

        <textarea
            name="notes"
            class="form-control">{{ $order->notes }}</textarea>
    </div>

    <button class="btn btn-success">
        Update
    </button>

    <a href="/orders" class="btn btn-secondary">
        Kembali
    </a>

</form>

@endsection