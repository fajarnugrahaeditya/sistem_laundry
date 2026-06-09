@extends('layout')

@section('content')

<h2>Data Order Laundry</h2>

<a href="/orders/create"
    class="btn btn-primary mb-3">
    Tambah Order
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
            <th>Customer</th>
            <th>Layanan</th>
            <th>Berat</th>
            <th>Total</th>
            <th>Status</th>
            <th width="180">Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach($orders as $order)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $order->customer_name }}</td>
            <td>{{ $order->service->name }}</td>
            <td>{{ $order->weight_kg }} Kg</td>
            <td>
                Rp {{ number_format($order->total_price) }}
            </td>
            <td>{{ $order->status }}</td>

            <td>
                <a href="/orders/{{ $order->id }}/edit"
                    class="btn btn-warning btn-sm">
                    Edit
                </a>

                <form
                    action="/orders/{{ $order->id }}"
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