<?php

namespace App\Http\Controllers;

use App\Models\LaundryService;
use Illuminate\Http\Request;

class LaundryServiceController extends Controller
{
    public function index()
    {
        $services = LaundryService::all();
        return view('services.index', compact('services'));
    }

    public function create()
    {
        return view('services.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price_per_kg' => 'required|numeric',
            'min_weight_kg' => 'required|numeric',
            'processing_days' => 'required|integer',
        ]);

        LaundryService::create($request->all());

        return redirect('/services')
            ->with('success', 'Layanan berhasil ditambahkan');
    }

    public function edit(string $id)
    {
        $service = LaundryService::findOrFail($id);
        return view('services.edit', compact('service'));
    }

    public function update(Request $request, string $id)
    {
        $service = LaundryService::findOrFail($id);

        $service->update($request->all());

        return redirect('/services')
            ->with('success', 'Layanan berhasil diupdate');
    }

    public function destroy(string $id)
    {
        $service = LaundryService::findOrFail($id);
        $service->delete();

        return redirect('/services')
            ->with('success', 'Layanan berhasil dihapus');
    }
}