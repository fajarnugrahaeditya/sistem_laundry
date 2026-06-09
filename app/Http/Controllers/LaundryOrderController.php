<?php

namespace App\Http\Controllers;

use App\Models\LaundryOrder;
use App\Models\LaundryService;
use Illuminate\Http\Request;

class LaundryOrderController extends Controller
{
    public function index()
    {
        $orders = LaundryOrder::with('service')->latest()->get();

        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        $services = LaundryService::where('is_active', 1)->get();

        return view('orders.create', compact('services'));
    }

    public function store(Request $request)
    {
        $service = LaundryService::findOrFail($request->service_id);

        $totalPrice = $request->weight_kg * $service->price_per_kg;

        LaundryOrder::create([
            'service_id' => $request->service_id,
            'customer_name' => $request->customer_name,
            'phone' => $request->phone,
            'weight_kg' => $request->weight_kg,
            'total_price' => $totalPrice,
            'received_date' => $request->received_date,
            'estimated_done' => now()
                ->addDays($service->processing_days)
                ->format('Y-m-d'),
            'status' => $request->status,
            'notes' => $request->notes,
        ]);

        return redirect('/orders')
            ->with('success', 'Order berhasil ditambahkan');
    }

    public function edit(string $id)
    {
        $order = LaundryOrder::findOrFail($id);

        $services = LaundryService::all();

        return view('orders.edit', compact(
            'order',
            'services'
        ));
    }

    public function update(Request $request, string $id)
    {
        $order = LaundryOrder::findOrFail($id);

        $service = LaundryService::findOrFail($request->service_id);

        $totalPrice = $request->weight_kg * $service->price_per_kg;

        $order->update([
            'service_id' => $request->service_id,
            'customer_name' => $request->customer_name,
            'phone' => $request->phone,
            'weight_kg' => $request->weight_kg,
            'total_price' => $totalPrice,
            'received_date' => $request->received_date,
            'status' => $request->status,
            'notes' => $request->notes,
        ]);

        return redirect('/orders')
            ->with('success', 'Order berhasil diupdate');
    }

    public function destroy(string $id)
    {
        LaundryOrder::destroy($id);

        return redirect('/orders')
            ->with('success', 'Order berhasil dihapus');
    }
}